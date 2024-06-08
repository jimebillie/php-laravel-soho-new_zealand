@extends('template.app')
@section('style')
    <link rel="stylesheet" href="{{asset('/myStyle/all_day_menu.css?v=').date("YmdHis")}}">
@stop
@section('content')
    <div class="container"><!-- container -->
        <div class="wrapContent"><!-- wrapContent -->
            <div class="wrap__content">
                <?php
                $MenuController = new \App\Http\Controllers\front\MenuController();
                foreach ($MenuController->MenuAllDay_ALL() as $asMenuAllDay) {
                foreach ($MenuController->CountMenuAllDay_Sub_id($asMenuAllDay->id) as $asCountMenuAllDaySub) {
                if ($asCountMenuAllDaySub->count_rows > 0) {
                    ?>
                <div class="wrap__name__menu">
                    <b class="name__menu">
                            <?= $asMenuAllDay->name_topic ?>
                    </b>
                    <div class="line__name__menu"></div>
                </div>
                    <?php
                foreach ($MenuController->MenuAllDay_Sub_id($asMenuAllDay->id) as $asMenuAllDaySub) {
                    ?>
                <div class="wrap__sub__menu">
                    <b>
                            <?= $asMenuAllDaySub->name_sub ?>
                    </b>
                    <p>
                            <?= $asMenuAllDaySub->detail_sub ?>
                    </p>
                </div>
                    <?php
                }
                    ?>

                    <?php
                }
                }
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



