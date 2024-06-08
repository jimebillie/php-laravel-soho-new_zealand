@extends('template.app')
@section('style')
    <link rel="stylesheet" href="{{asset('/myStyle/gift_vouchers.css?v=').date("YmdHis")}}">
@stop
@section('content')
    <div class="container"><!-- container -->
        <div class="wrapContent"><!-- wrapContent -->
            <div class="wrap__content">
                <div class="wrap_bg_img">
                    <img src="{{asset("/images/gift_vouchers/_DSC4639.jpg")}}" alt="">
                    <div class="wrap_over_bgImage"></div>
                    <div class="wrap_text_content">
                        <p>
                            Find the perfect gift to any occasion for
                            family friends and colleges. Email us;
                            <a href="mailto:hello@sohoeats.co.nz">hello@sohoeats.co.nz</a> or visit us at the venue.
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- \.wrapContent -->
    </div><!-- \.container -->
@stop
@section('javascript')

@stop



