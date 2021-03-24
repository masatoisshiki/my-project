<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="車とバイクの写真投稿アプリ" />
        <title>I love car & I love bike</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        {{-- ナビゲーションバー --}}
        @include('commons.navbar')
        <div class="container h-100">
            <div class="py-5 bg-light col-12">
                <h2 class="text-center mt-2 mb-5">新規投稿 - 確認画面</h2>
                <div class="container mb-5">
                    {{ Form::open(['route' => 'complete', 'method' => 'POST']) }}
                        @csrf
                        <div class="form-group row">
                            <p class="col-sm-4 col-form-label">カテゴリー</p>
                            <div class="col-sm-8">
                                {{ $kind }}
                            </div>
                            <input type="hidden" name="kind" value="{{ $kind }}">
                        </div>
                        
                        <div class="form-group row">
                            <p class="col-sm-4 col-form-label">画像</p>
                            <div class="col-sm-8">
                                <img src="{{ $file_name }}" alt="">
                            </div>
                            <input type="hidden" name="file_name" value="{{ $newImageName }}">
                        </div>
                        
                        <div class="form-group row">
                            <p class="col-sm-4 col-form-label">コメント</p>
                            <div class="col-sm-8">
                                {{ $post_content }}
                            </div>
                            <input type="hidden" name="post_content" value="{{ $post_content }}">
                        </div>
            
                        <div class="text-center">
                            {{ Form::submit('登録', ['class' => 'btn btn-primary']) }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>   
        
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>