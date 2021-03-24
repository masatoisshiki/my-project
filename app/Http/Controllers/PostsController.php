<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function post()
    {
        return view('layouts.post');
    }

    public function complete(Request $request)
    {
        $post = new Post();
        $post->kind  = $request->kind;
        $post->file_name = $request->file_name;
        $post->save();

        // レコードを挿入したときのIDを取得
        $lastInsertedId = $post->id;

        // ディレクトリを作成
        if (!file_exists(public_path() . "/img/" . $lastInsertedId)) {
            mkdir(public_path() . "/img/" . $lastInsertedId, 0777);
        }

        // 一時保存から本番の格納場所へ移動
        rename(public_path() . "/img/tmp/" . $request->file_name, public_path() . "/img/" . $lastInsertedId . "/" . $request->file_name);
        
        // 一時保存の画像を削除
        \File::cleanDirectory(public_path() . "/img/tmp");

        return view('layouts.complete');
    }
    
    public function confirm(Request $request)
    {
        $request->validate([
            'kind'  => 'required',
            'file_name' => 'required|image',
        ]);

        return view('layouts.confirm');
        
        // 投稿カテゴリーを取得
        $kind = $request->kind;

        // 拡張子つきでファイル名を取得
        $imageName = $request->file('file_name')->getClientOriginalName();

        // 拡張子のみ
        $extension = $request->file('file_name')->getClientOriginalExtension();

        // 新しいファイル名を生成（形式：元のファイル名_ランダムの英数字.拡張子）
        $newImageName = pathinfo($imageName, PATHINFO_FILENAME) . "_" . uniqid() . "." . $extension;

        $request->file('file_name')->move(public_path() . "/img/tmp", $newImageName);
        $file_name = "/img/tmp/" . $newImageName;

        return view('layouts.confirm', [
            'kind'         => $kind,
            'file_name'        => $file_name,
            'newImageName' => $newImageName,
        ]);
    }
    
}
