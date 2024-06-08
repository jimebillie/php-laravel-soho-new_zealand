<header>
    <div class="container">
        <section id="headerTop" class="d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <div class="wrapLogo">
                <a href="{{route('home')}}">
                    <img src="{{asset('/images/app/soho_no_bg.png')}}" title="Home Page" alt="">
                </a>
            </div>
            <!-- \.Logo -->

            <div class="wrapNevRight">
                <div class="wrap_nav_social">
                    <i class="fa-brands fa-facebook" onclick="window.location.href='https://www.facebook.com/sohokitchennz'"></i>
                    <i class="fa-brands fa-instagram" onclick="window.location.href='https://www.instagram.com/sohokitchennz/'"></i>
                </div>
                <div class="wrapBtnBooking">
                    <a href="/#bookingIframe">BOOKING</a>
                </div>
                <!-- Hamburger Bar -->
                <div class="wrapHamsMenu">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <!-- \.Hamburger Bar -->
            </div>
        </section>

        <!-- Menu toggle -->
        <section id="headerBottom">
            <div class="wrapLinkHeader">
                <a href="{{route('select_menu')}}">MENU</a>
                <a href="https://sohothaikitchen.mobi2go.com/?fbclid=IwAR1faWhJxP7cJBoa5uulne6kSDKYJZ_8nnOinxCgOYlm1aAoSiWL8hJMbrM">ONLINE
                    ORDER</a>
                <a href="{{route('book_a_function')}}">BOOK A FUNCTION</a>
                <a href="/#SPECIAL_FOR_YOU">SPECIAL FOR YOU</a>
                <a href="/gift_vouchers">GIFT VOUCHERS</a>
                <a href="/contact_us">CONTACT US</a>
            </div>
        </section>
        <!-- \.Menu toggle -->
    </div>
</header>
