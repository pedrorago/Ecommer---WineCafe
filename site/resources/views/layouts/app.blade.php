<html lang="{{ config('app.locale') }}">
<head>


    <title>WineCafé - @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta author="Mangue Tecnologia">

    <link rel="icon" href="img/icons/icon.png">

    <base href="http://winecafe/">

    <meta property="og:type" content="website">

    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Condensed:300,400,500,700,800,900|Roboto+Slab:300,400,700|Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">



    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    <link rel="stylesheet" type="text/css" href="/css/plugins/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/css/plugins/slick-theme.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="/css/plugins/jquery.fancybox.min.css" /> -->

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/app.css">
    <!-- <link rel="stylesheet" href="/css/responsive.css"> -->

</head>

<body>  

    @include('modals.carrinho')

    @include('modals.login')

    @include('modals.recuperar')

    @include('modals.cadastro')

    <div class="content">

        @include('templates.header')
        @include('templates.header_menu')

        @yield('content')

        @include('templates.footer')

    </div>

    <script src="/js/jquery-3.2.1.min.js" ></script>
    <script src="/js/plugins/jquery.validate.js" ></script>
    <script src="/js/plugins/slick.min.js" ></script>
    <script src="/js/plugins/jquery.mask.js" ></script>
    <!-- <script src="/js/plugins/jquery.fancybox.min.js"></script> -->
    <script src="/js/slide.js" async></script>
    <script src="/js/app.js"></script>

</body>
</html>