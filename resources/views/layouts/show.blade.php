<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
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
                <div class="p-profile-wrapper">
                    <div class="p-profile">
                        <img class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                    </div>
                    <div class="p-profile-textWrapper">
                        <h2 class="p-profile-name"></h2>
                        <p class="p-profile-text"></p>
                    </div>
                    <a class="p-profile-link" href=" ">プロフィール編集</a>
                </div> 
                <div class="c-posts p-profile-posts"></div>
            </div>
         <!--Footer-->
        <!--<footer class="bg-light py-2">-->
        <!--    <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>-->
        <!--</footer>-->
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