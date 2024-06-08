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
          content="SOHO THAI KITCHEN, soho thai kitchen, Thai Food, Thailand Kitchen">


    <meta property="og:title"
          content="SOHO Thai Kitchen | อาหารไทย">
    <meta property="og:description"
          content="🍻🍜🥗🍖 : SOHO Thailand Kitchen ครัวไทย หิวเมื่อไหร่ก็แวะมา">
    <meta property="og:url" content="{{route('home')}}">
    <meta property="og:type" content="website">
    <meta property="og:image"
          content="{{asset('/images/app/soho_have_bg.jpg')}}">

    <link rel="icon" style="width: 30px;height: 30px" href="{{asset('/images/app/soho_no_bg.png')}}">
    <title>Contact Us | Thai Cuisine and Bar | Soho Kitchen</title>
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
    <link rel="stylesheet" href="{{asset('/myStyle/contact_us.css?v=').date("YmdHis")}}">
</head>
<body>
<!-- Header -->
@include('template.head')
<!--\.Header -->

<!-- Content -->
<div class="container"><!-- container -->
    <div class="wrapContent"><!-- wrapContent -->
        <div class="wrapImgContact"><!-- wrapImgContact -->
            <img src="{{asset('/images/contact_us/contact_us.jpg?v=').date("YmdHis")}}" alt="">
        </div><!-- wrapImgContact -->

        <div class="wrapHeadTopic"><!-- wrapHeadTopic -->
            <h1>CONTACT</h1>
            <h2>WHERE TO FIND US</h2>
            <div class="row">
                <div class="col-md">
                    <h3>LOCATION</h3>
                    <p>
                        <a href="https://www.google.com/maps/dir//SOHO+Thai+Kitchen+-+Asian+Restaurants+%7C+Thai+Food+%26+Takeaway+B:Hive+Building+Unit+E%2F72+Taharoto+Road+Takapuna,+Auckland+0622,+New+Zealand/@-36.7849801,174.7542288,19z/data=!4m5!4m4!1m0!1m2!1m1!1s0x6d0d390debedc473:0xa96236dc0942d195">
                            B:HIVE, SOHO THAI KITCHEN - THAI FOOD & KITCHEN <br>
                            TAKEAWAY BUILDING UNIT E/72 TAHAROTO ROAD, <br>
                            TAKAPUNA. AUCKLAND 0622
                        </a>
                    </p>
                </div>
                <div class="col-md">
                    <h3>CONTACT</h3>
                    <p>
                        PHONE NUMBER :
                        <a href="tel:+64 9 972 2711">+64 9 972 2711</a> <br>
                        EMAIL :
                        <a href="mailto:hello@sohoeats.co.nz">hello@sohoeats.co.nz</a>
                    </p>
                </div>
            </div>

        </div><!-- \.wrapHeadTopic -->

        <div class="wrapMapContact">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d474.99880871206926!2d174.75407014335428!3d-36.78499806569399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d390debedc473%3A0xa96236dc0942d195!2sSoho%20Thai%20Kitchen%20-%20Thai%20Food%20%26%20Kitchen%20Takeaway!5e0!3m2!1sen!2sth!4v1682228251182!5m2!1sen!2sth"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="wrapContactFooter">

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



