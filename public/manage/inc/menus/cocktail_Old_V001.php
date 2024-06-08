<style>
    .wrap__nav{
        background-color: yellow;
    }
    .wrap__hams .items{
        background-color: #343434;
    }


    .wrap__content {
        background-color: whitesmoke;
        width: 100%;
        min-height: 100vh;
        border-radius: 5px;
        padding: 40px 25px;
        color: #3b3b3b;
    }

    .topic {
        filter: drop-shadow(0 0 5px gray);
    }


    .wrap__sub__menu {
        text-align: center;
        margin: 30px 0;
    }

</style>

<div class="container container__wrap">
    <h3 class="text-center topic" style="font-weight: bold">
        COCKTAILS
    </h3>
    <div class="wrap__content">

            <?php

            include("config/database.php");
            $oop = new \db\config\connect();

            foreach ($oop->conn->query("CALL Select_Menu_Cocktail_All()") as $asSelect_Menu_Cocktail_All) {
                ?>
                <div class="wrap__sub__menu">
                    <b>
                        <?=$asSelect_Menu_Cocktail_All['name_cocktail']?>
                    </b>
                    <p>
                        <?=$asSelect_Menu_Cocktail_All['detail_cocktail']?>
                    </p>
                </div>
                <?php
            }
            ?>


    </div>


</div>

