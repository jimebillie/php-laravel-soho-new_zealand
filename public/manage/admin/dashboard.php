<?php include('component/header.php'); ?>
<?php
session_start();
if (!isset($_SESSION['detail_admin'])) {
    header("Location: index.php");
    exit(0);
}

?>


<div class="wrap__all">
    <nav>
        <div>
            <span class="wrap__bars">
            <i class="fa-solid fa-bars"></i>
            </span>
            <b style="font-size: 20px">So-Ho Admin Dashboard.</b>
        </div>
    </nav>
    <div class="wrap__container">

        <?php include('component/menu.php'); ?>

        <div class="wrap__content">
            <div class="wrap__sidebar__in">
                <?php
                if (isset($_GET['p'])) {
                    switch ($_GET['p']) {
                        case "menus" :
                            include("inc/menus_admin.php");
                            break;
                        case "menus/allday" :
                            include("inc/menus/allday.php");
                            break;
                        case "menus/allday/edit" :
                            include("inc/menus/allday_edit.php");
                            break;
                        case "menus/cocktail/edit" :
                            include("inc/menus/cocktail_edit.php");
                            break;
                        case "menus/cocktail" :
                            include("inc/menus/cocktail.php");
                            break;
                        case "gallery" :
                            include("inc/gallery_admin.php");
                            break;
                        case "function" :
                            include("inc/function_admin.php");
                            break;
                        case "vouchers" :
                            include("inc/vouchers_admin.php");
                            break;
                        default:
                            include("inc/menus_admin.php");
                            break;
                    }
                } else {
                    ?>
                    <script>window.location.href = 'dashboard.php?p'</script>
                    <?php
                }
                ?>
            </div>
        </div>


    </div>
</div>

<?php include('component/footer.php'); ?>
