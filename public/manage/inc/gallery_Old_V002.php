<link rel="stylesheet" href="css/gallery.css">

<h3 class="name_page_topic">
    Gallery
</h3>
<div class="container container__wrap">
    <div class="row">
        <?php
        include("config/database.php");
        $oop = new \db\config\connect();
        foreach ($oop->conn->query("CALL Select_Gallery_All()") as $asSelect_Gallery_All) {
            ?>
            <div class="col-6 my-3">
                <div class="WrapImg">
                    <img src="images/gallery/<?= $asSelect_Gallery_All['pic'] ?>" alt="">
                </div>
            </div>
            <?php
        }
        ?>

    </div>

</div>

<div class="wrp__img__logo_footer">
    <img src="images/home/soho logo-01.png" alt="">
</div>


