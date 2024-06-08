<link rel="stylesheet" href="css\new_navbar.css">
<link rel="stylesheet" href="css/menus_cocktail.css">



<h3 class="name_page_topic">
    COCKTAILS
</h3>
<div class="container container__wrap">
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

