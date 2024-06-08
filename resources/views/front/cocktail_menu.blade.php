@extends('template.app')
@section('style')
    <link rel="stylesheet" href="{{asset('/myStyle/cocktail_menu.css?v=').date("YmdHis")}}">
@stop
@section('content')
    <div class="container"><!-- container -->
        <div class="wrapContent"><!-- wrapContent -->
            <div class="wrap__content">
                <?php
                $MenuController = new \App\Http\Controllers\front\MenuController();
                foreach ($MenuController->Select_Menu_Cocktail_All() as $asSelect_Menu_Cocktail_All) {
                    ?>
                <div class="wrap__sub__menu">
                    <b>
                            <?=$asSelect_Menu_Cocktail_All->name_cocktail?>
                    </b>
                    <p>
                            <?=$asSelect_Menu_Cocktail_All->detail_cocktail?>
                    </p>
                </div>
                    <?php
                }
                ?>

                <style>
                    .wrap_mail_tel{
                        padding-top:10px ;
                        display: flex;
                        justify-content: center;
                    }
                    .wrap_mail_tel>a:nth-child(2){
                        margin-left: 20px;
                    }
                    @media (max-width: 768px) {
                        .wrap_mail_tel>a:nth-child(2){
                            margin-left: unset;
                            margin-top: 5px;
                        }
                        .wrap_mail_tel{
                            flex-direction: column;
                        }
                    }
                </style>
                <div class="wrap_mail_tel" style="font-size: 13px;">
                    <a style="color: darkgray;text-decoration: none" href="mailto:hello@sohoeats.co.nz"><i class="fa-solid fa-envelope"></i> :hello@sohoeats.co.nz</a>
                    <a style="color: darkgray;text-decoration: none" href="tel:+6499722711"><i class="fa-solid fa-square-phone"></i> :+64-9-972-2711</a>
                </div>

            </div>
        </div><!-- \.wrapContent -->
    </div><!-- \.container -->
@stop
@section('javascript')

@stop




