<style>
    .wrap__nav {
        background-color: yellow;
    }

    .wrap__hams .items {
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

    .wrap__name__menu {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 50px;
        font-size: 1.3rem;
    }

    .name__menu {
        background-color: whitesmoke;
        position: absolute;
        padding: 0 25px;
        text-align: center;
    }

    .line__name__menu {
        width: 100%;
        min-height: 1px;
        background-color: #3b3b3b;
    }

    .wrap__sub__menu {
        text-align: center;
        margin: 30px 0;
    }

</style>

<?php
include("config/database.php");
$oop = new \db\config\connect();
$oop_Submenu = new \db\config\connect();
$oop_CountSubmenu = new \db\config\connect();
?>

<div class="container container__wrap">
    <h3 class="text-center topic" style="font-weight: bold">
        ALL DAY MENU
    </h3>
    <div class="wrap__content">
        <?php
        foreach ($oop->conn->query("CALL MenuAllDay_ALL()") as $asMenuAllDay) {

            foreach ($oop_CountSubmenu->conn->query("CALL CountMenuAllDay_Sub_id($asMenuAllDay[id])") as $asCountMenuAllDaySub) {
                if ($asCountMenuAllDaySub['count_rows'] > 0) {

                    ?>
                    <div class="wrap__name__menu">
                        <b class="name__menu">
                            <?= $asMenuAllDay['name_topic'] ?>
                        </b>
                        <div class="line__name__menu"></div>
                    </div>
                    <?php
                    foreach ($oop_Submenu->conn->query("CALL MenuAllDay_Sub_id($asMenuAllDay[id])") as $asMenuAllDaySub) {
                        ?>
                        <div class="wrap__sub__menu">
                            <b>
                                <?= $asMenuAllDaySub['name_sub'] ?>
                            </b>
                            <p>
                                <?= $asMenuAllDaySub['detail_sub'] ?>
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
    </div>


</div>
