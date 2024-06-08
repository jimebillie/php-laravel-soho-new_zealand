<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <meta name="keywords"
          content="SOHO, soho, SOHO Thai, Thai Kitchen, Soho Thai Kitchen, Kitchen, Thailand Food, Drink, Thailand, thai, Food, Booking">
    <meta name="description"
          content="Uncover our selection menu, where Thai cuisine and inventive cocktails combine to create an unforgettable dining journey. Join us today for a culinary escape!">


    <meta property="og:title"
          content="SOHO Thai Kitchen | อาหารไทย">
    <meta property="og:description"
          content="🍻🍜🥗🍖 : SOHO Thailand Kitchen ครัวไทย หิวเมื่อไหร่ก็แวะมา">
    <meta property="og:url" content="{{route('home')}}">
    <meta property="og:type" content="website">
    <meta property="og:image"
          content="{{asset('/images/app/soho_have_bg.jpg')}}">

    <link rel="icon" style="width: 30px;height: 30px" href="{{asset('/images/app/soho_no_bg.png')}}">
    <title>Our Selection Menu | Thai Food and Cocktails | Soho Kitchen</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- \.Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('/myStyle/app.css?v=').date("YmdHis")}}">
    {{--3illie-gallery--}}
    <link rel="stylesheet"
          href="{{asset("@jimebillie/gallery-plugin/env-3illie-gallery-plugin/css/billie-gallery.css?v=").date("YmdHis")}}">
    {{--.\3illie-gallery--}}
    {{--Font-awesome--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    {{--.\Font-awesome--}}
    <link rel="stylesheet" href="{{asset('/myStyle/book_a_function.css?v=').date("YmdHis")}}">
</head>
<body>
<!-- Header -->
@include('template.head')
<!--\.Header -->

<!-- Content -->
<div class="container"><!-- container -->
    <div class="wrapContent"><!-- wrapContent -->
        <div class="wrap__content_topic">
            <h1 style="color:var(--color-yellow-100); margin-bottom: 35px">
                Select Menu
            </h1>
            <b>
                <a href="{{route('all_day_menu')}}">
                    ALL DAY MENU
                </a>
            </b>
            <b>
                <a href="{{route('cocktail_menu')}}">
                    COCKTAIL MENU
                </a>
            </b>
        </div>
    </div><!-- \.wrapContent -->
</div><!-- \.container -->
<!-- \.Content -->

<!-- Header -->
@include('template.footer')
<!--\.Header -->


<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<!-- \.Jquery -->

<!-- Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- \.Bootstrap JS-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V93Z99FGV0"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'G-V93Z99FGV0');
</script>
<!-- \.Google tag (gtag.js) -->

<script src="{{asset('/myJavaScript/app.js?v=').date("YmdHis")}}"></script>
<script
    src="{{asset("@jimebillie/gallery-plugin/env-3illie-gallery-plugin/javascript/billie-gallery.js?v=").date("YmdHis")}}"></script>
<!-- JavaScript Each Page-->
@yield('javascript')
<!-- \.JavaScript Each Page-->
</body>
</html>



