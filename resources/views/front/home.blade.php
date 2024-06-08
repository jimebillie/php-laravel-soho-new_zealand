@extends('template.app')
@section('style')
    <link rel="stylesheet" href="{{asset('/myStyle/home.css?v=').date("YmdHis")}}">
@stop
@section('content')

    <div class="container"> <!-- container -->
        <div class="wrapContent"><!-- wrapContent -->
            <!-- Menu -->
            <div id="MENU" class="wrapImgTopic">
                <img src="{{asset('/images/home/menu.jpg?v=').date('YmdHis')}}" alt="">
                <div class="wrapTextImg">
                    <a href="{{route('select_menu')}}">
                        <span>MENU</span>
                    </a>
                </div>
            </div>
            <div class="wrapTextUnderImg">
                <p>
                    SOHO IS A MODERN THAI INSPIRED EATERY THAT TAKES <br>
                    ALL DIFFERENT PARTS OF FOOD AROUND THAILAND<br>
                    COOKING IN OUR OWN TASTE BASED ON OUR PALATE<br>
                    "THAI MADE WITH LOVE"
                </p>
            </div>
            <!-- \.Menu -->

            <!-- Order Online -->
            <div id="ONLINE_ORDER" class="wrapImgTopic">
                <img src="{{asset('/images/home/order-online.jpg?v=').date('YmdHis')}}" alt="ONLINE ORDER">
                <div class="wrapTextImg">
                    <a href="https://sohothaikitchen.mobi2go.com/?fbclid=IwAR1faWhJxP7cJBoa5uulne6kSDKYJZ_8nnOinxCgOYlm1aAoSiWL8hJMbrM">
                        <span>ONLINE ORDER</span>
                    </a>
                </div>
            </div>
            <div class="wrapTextUnderImg">
                <p>
                    LOOKING FOR A VENUE CAPACITY 15-60PAX <br>
                    FOR YOUR NEXT FUNCTION?
                </p>
            </div>
            <!-- \.Order Online -->

            <!-- Book a Function -->
            <div id="BOOK_A_FUNCTION" class="wrapImgTopic">
                <img src="{{asset('/images/home/book-a-func.jpg?v=').date('YmdHis')}}" alt="">
                <div class="wrapTextImg">
                    <a href="{{route('book_a_function')}}">
                        <span>BOOK A FUNCTION</span>
                    </a>
                </div>
            </div>
            <div id="bookingIframe" class="wrapTextUnderImg">
                <p>
                    PLEASE COMPLETE YOUR RESERVATION AND WE LOOK <br>
                    FORWARD TO WELCOMING YOU TO OUR RESTAURANT
                </p>
            </div>
            <!-- \.Book a Function -->

            <!-- iframe Booking -->
            <div class="wrapIframeBooking">
                <iframe
                    src="https://booking.resdiary.com/widget/Standard/sohokitchen/1887?fbclid=IwAR0USOrrFqWtNV4li6J8k_XfHdlq01-mqVyPcFXMEKLLTcCLy4IgJAhYM7g">
                </iframe>
            </div>
            <!-- \.iframe Booking -->

            <!-- Special Topic -->
{{--            <div id="SPECIAL_FOR_YOU" class="wrapTextUnderImg">--}}
{{--                <p class="mb-0">--}}
{{--                    FOR A LIMITED TIME WE ARE OFFERING <br>--}}
{{--                    SOMETHING SPECIAL FOR YOU--}}
{{--                </p>--}}
{{--            </div>--}}
            {{--            <div class="wrapImgTopicSpecial">--}}
            {{--                <img src="{{asset('/images/home/special-for-you.jpg?v=').date('YmdHis')}}" alt="">--}}
            {{--                <div class="wrapTextImg">--}}
            {{--                    <span>3-6PM WEEKDAY HAPPY HOUR</span>--}}
            {{--                    <span>DRINK SPECIAL</span>--}}
            {{--                    <span>WORKING LUNCH DEALS</span>--}}
            {{--                    <span>VOUCHERS</span>--}}
            {{--                </div>--}}

            {{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md">--}}
{{--                    <img style="cursor: pointer" class="w-100" src="{{asset('/images/home/soho-spacial1.png?v=').date('YmdHis')}}" alt=""--}}
{{--                         billie-gallery="soho-spacial">--}}
{{--                </div>--}}
{{--                <div class="col-md mt-3 mt-md-0">--}}
{{--                    <img style="cursor: pointer" class="w-100" src="{{asset('/images/home/soho-spacial2.png?v=').date('YmdHis')}}" alt=""--}}
{{--                         billie-gallery="soho-spacial">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row mt-5">--}}
{{--                <div class="col-md">--}}
{{--                    <img style="cursor: pointer" class="w-100" src="{{asset('/images/home/soho-spacial3.jpg?v=').date('YmdHis')}}" alt=""--}}
{{--                         billie-gallery="soho-spacial">--}}
{{--                </div>--}}
{{--                <div class="col-md mt-3 mt-md-0">--}}
{{--                    <img style="cursor: pointer" class="w-100" src="{{asset('/images/home/soho-spacial4.jpg?v=').date('YmdHis')}}" alt=""--}}
{{--                         billie-gallery="soho-spacial">--}}
{{--                </div>--}}
{{--            </div>--}}


            <div class="wrapTextUnderImg">
                <h3>OPENING HOURS</h3>
                <p>
{{--                    MONDAY 12-3PM AND 4PM-LATE <br>--}}
{{--                    TUESDAY-FRIDAY 12PM-LATE <br>--}}
{{--                    SATURDAY-SUNDAY 5PM-LATE <br>--}}
{{--                    WEEKEND LUNCH OPEN ON ENQUIRE--}}
                    Monday-Saturday 12pm-late <br>
                    Sunday 5pm-late <br>
                    Open Sunday lunch for Smales Farm Market and Auckland Plant Market <br>
                </p>
            </div>
            <!-- \.Special Topic -->

            <!-- wrapSignUpToOurNewsletter -->
            <div class="wrapSignUpToOurNewsletter">
                <p>Sign up to our Newsletter</p>
                <form method="get" action="#">
                    @csrf
                    <div class="wrapInputEmail">
                        <label id="email">
                            <input type="email" name="email" placeholder="Email address" autocomplete="off">
                        </label>
                        <button type="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
            <!-- wrapSignUpToOurNewsletter -->
        </div><!-- \.wrapContent -->
    </div><!-- \.container -->
@stop
@section('javascript')

@stop
