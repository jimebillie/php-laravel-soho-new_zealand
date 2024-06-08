@extends('template.app')
@section('style')
    <link rel="stylesheet" href="{{asset('/myStyle/catering.css?v=').date("YmdHis")}}">
@stop
@section('content')
    <div class="container"><!-- container -->
        <div class="wrapContent"><!-- wrapContent -->
            <div class="wrap__content">
                <div class="wrap_bg_img">
                    <img src="{{asset("/images/catering/_DSC4612.jpg")}}" alt="">
                    <div class="wrap_over_bgImage"></div>
                    <div class="wrap_text_content">
                        <p>
                            Soho Thai Kitchen is sustainable caterers,
                            providing fresh, seasonal and delicious food
                            around the North Shore, Auckland.
                        </p>
                        <p>
                            We have a range of menus to match the
                            occasion; Boxed meals, Lunch & Dinner Catering, Dietary & Individual and much more.
                            Enquire: <a href="mailto:hello@sohoeats.co.nz">hello@sohoeats.co.nz</a>
                        </p>

                    </div>
                </div>
            </div>
        </div><!-- \.wrapContent -->
    </div><!-- \.container -->
@stop
@section('javascript')

@stop



