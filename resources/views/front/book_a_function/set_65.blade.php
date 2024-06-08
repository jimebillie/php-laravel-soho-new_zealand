@extends('template.app')
@section('style')
    <link rel="stylesheet" href="{{asset('/myStyle/all_day_menu.css?v=').date("YmdHis")}}">
@stop
@section('content')
    <div class="container"><!-- container -->
        <div class="wrapContent"><!-- wrapContent -->
            <div class="wrap__content">
                <?php
                $MenuController = config('book_a_function.set_65');
                foreach ($MenuController["set_65"] as $name_topic => $item1) {
                    ?>
                <div class="wrap__name__menu">
                    <b class="name__menu">
                            <?= $name_topic ?>
                    </b>
                    <div class="line__name__menu"></div>
                </div>
                    <?php
                foreach ($MenuController["set_65"][$name_topic] as $name_sub => $item2) {
                    ?>
                <div class="wrap__sub__menu">
                    <b>
                            <?= $name_sub ?>
                    </b>
                    <p>
                            <?= $item2 ?>
                    </p>
                </div>
                    <?php
                }
                    ?>

                    <?php
                }
                ?>


                <style>
                    .wrap_mail_tel {
                        padding-top: 10px;
                        display: flex;
                        justify-content: center;
                    }

                    .wrap_mail_tel > a:nth-child(2) {
                        margin-left: 20px;
                    }

                    @media (max-width: 768px) {
                        .wrap_mail_tel > a:nth-child(2) {
                            margin-left: unset;
                            margin-top: 5px;
                        }

                        .wrap_mail_tel {
                            flex-direction: column;
                        }
                    }
                </style>
                <div class="wrap_mail_tel" style="font-size: 13px;">
                    <a style="color: darkgray;text-decoration: none" href="mailto:hello@sohoeats.co.nz"><i
                            class="fa-solid fa-envelope"></i> :hello@sohoeats.co.nz</a>
                    <a style="color: darkgray;text-decoration: none" href="tel:+6499722711"><i
                            class="fa-solid fa-square-phone"></i> :+64-9-972-2711</a>
                </div>
            </div>
        </div><!-- \.wrapContent -->
    </div><!-- \.container -->
@stop
@section('javascript')

@stop



