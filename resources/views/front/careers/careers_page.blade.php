@extends('template.app')
@section('style')
    <link rel="stylesheet" href="{{asset('/myStyle/careers.css?v=').date("YmdHis")}}">
@stop
@section('content')
    <div class="container"><!-- container -->
        <div class="wrapContent"><!-- wrapContent -->
            <div class="wrap__content">
                <div class="wrap_bg_img">
                    <img src="{{asset("/images/careers/181A2499-Enhanced-NR-2.jpg")}}" alt="">
                    <div class="wrap_over_bgImage"></div>
                    <div class="wrap_text_content">
                        <p>
                            We are always looking for talented and
                            enthusiastic people to join our kitchen, front
                            of house and management teams. Whether you've
                            never worked in hospitality but would like to
                            learn, or have years of restaurant experience
                            and would like a new challenge, we'd love to
                            hear from you. <br>
                            If you'd like to work with us then please send
                            your CV and a covering letter to
                            <a href="mailto:hello@sohoeats.co.nz">hello@sohoeats.co.nz</a> for back of house roles.
                            <a href="mailto:pam@sohoeats.co.nz">pam@sohoeats.co.nz</a> for front of house roles
                            Now, the sous chef position is available.
                            Email us! We'll reply as soon as we can.
                        </p>

                    </div>
                </div>
            </div>
        </div><!-- \.wrapContent -->
    </div><!-- \.container -->
@stop
@section('javascript')

@stop



