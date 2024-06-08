
<?php
include("config/database.php");
$oop = new \db\config\connect();
$oop_Submenu = new \db\config\connect();
$oop_CountSubmenu = new \db\config\connect();
?>


<link rel="stylesheet" href="css\new_navbar.css">
<link rel="stylesheet" href="css/menus_allday.css">

<h3 class="name_page_topic">
    ALL DAY MENU
</h3>

<div class="container container__wrap">

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
