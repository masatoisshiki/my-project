<!-- ナビゲーションバー-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        {!! link_to_route('signup.get', 'I love car & I love bike', [], ['class' => 'navbar-brand js-scroll-trigger']) !!}
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                @if (Auth::check())
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Car</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Bike</a></li>
                <li class="nav-item">{!! link_to_route('layouts.index', 'Users list', [], ['class' => 'nav-link js-scroll-trigger']) !!}</li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">User page</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Cool</a></li>
                {{-- ログアウトへのリンク --}}
                <li class="nav-item">{!! link_to_route('logout.get', 'Logout', [], ['class' => 'nav-link js-scroll-trigger']) !!}</li>
                @else
                {{-- ユーザ登録ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link js-scroll-trigger']) !!}</li>
                {{-- ログインページへのリンク --}}
                <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link js-scroll-trigger']) !!}</li>
                @endif
            </ul>
        </div>
    </div>
</nav>