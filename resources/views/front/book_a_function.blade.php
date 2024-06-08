Ï@extends('template.app')
@section('style')
    <link rel="stylesheet" href="{{asset('/myStyle/book_a_function.css?v=').date("YmdHis")}}">
@stop
@section('content')
    <div class="container"><!-- container -->
        <div class="wrapContent"><!-- wrapContent -->
            <div class="wrap_bg_select_menu">
                <img src="{{asset("images/book_a_function/371894085_262009833329330_6328125509378886741_n.jpg")}}"
                     alt="">
                <div class="wrap_opacity_img_select_menu"></div>
                <div class="wrap_paragraph_select_menu">
                    <p>
                        Discover the ideal venue for your upcoming events at SOHO Thai Kitchen! Rooted in the
                        essence of Thai culinary traditions, SOHO presents a modern twist on Thai cuisine, all
                        nestled within the vibrant hub of Goodside, in Smales Farm, Takapuna. We can easily cater
                        for group sizes from 2 to 60 people.
                    </p>
                    <p></p>
                    <p>
                        Our commitment to delivering exceptional experiences extends to our private function
                        offerings, where we open our doors to host your celebrations. Experience the warmth of Thai
                        hospitality as our dedicated team assists you in crafting a gathering that reflects your
                        vision. Whether it's a family reunion, corporate soirée, birthday or another milestone
                        celebration, SOHO's inviting ambience and contemporary Thai flavours provide the perfect
                        fusion for your event.
                    </p>
                    <p></p>
                    <p>
                        Explore our thoughtfully designed set menu options, each dish a testament to our philosophy
                        of "Thai Made with Love." We hope to see you soon!
                    </p>
                </div>

                <div class="wrap_btn_select_menu">
                    <div>
                    <a href="{{route("book_a_function.set_65")}}">
                        <div class="btn_set_menu_type_a">
                            <h3>$65 SET MENU</h3>
                        </div>
                    </a>
{{--                    <a href="{{route('book_a_function.set_a')}}">--}}
{{--                        <div class="btn_set_menu_type_b">--}}
{{--                            <h3>$77pp SET MENU</h3>--}}
{{--                        </div>--}}
{{--                    </a>--}}
                    </div>
                    <div>
                        <em>THESE SET MENUS ARE DESIGNED AS A SHARED STYLE DINE IN SERVED IN DIFFERENT
                                COURSES TO SAMPLE SOME OF THE BEST & MOST POPULAR DISHES FROM OUR A LA
                                CARTE MENU For groups of 4
                        </em>
                    </div>
                    <style>
                        .wrap_mail_tel{
                            padding-top:10px ;
                            display: flex;
                            justify-content: center;
                            position: absolute;
                            bottom: -45px;
                            width: 100%;
                            color:white;
                            filter: drop-shadow(1px 1px 1px black);
                        }
                        .wrap_mail_tel>a:nth-child(2){
                            margin-left: 20px;
                        }
                        @media (max-width: 768px) {
                            .wrap_mail_tel>a:nth-child(2){
                                margin-left: unset;
                            }
                            .wrap_mail_tel{
                                flex-direction: column;
                            }
                            .wrap_mail_tel{
                                font-size: 8px;
                            }
                        }
                    </style>
                    <div class="wrap_mail_tel" style="font-size: 13px;">
                        <a style="text-decoration: none" href="mailto:hello@sohoeats.co.nz"><i class="fa-solid fa-envelope"></i> :hello@sohoeats.co.nz</a>
                        <a style="text-decoration: none" href="tel:+6499722711"><i class="fa-solid fa-square-phone"></i> :+64-9-972-2711</a>
                    </div>
                </div>




            </div>
        </div><!-- \.wrapContent -->
    </div><!-- \.container -->
@stop
@section('javascript')

@stop


