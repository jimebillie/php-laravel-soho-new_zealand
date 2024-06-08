<style>
    .wrap__nav {
        background-color: yellow;
    }

    .wrap__hams .items {
        background-color: #343434;
    }

    .TopicName {
        position: relative;
    }

    .TopicName:before {
        content: '';
        position: absolute;
        bottom: -2px;
        width: 100%;
        height: 3px;
        background-color: white;
    }

    .WrapImg {
        overflow: hidden;
        filter: drop-shadow(0 0 5px rgba(0, 0, 0, 0.75));
    }
    .WrapImg img {
        width: 100%;
        transition: 0.3s;
    }
    .WrapImg img:hover{
        transform: scale(1.05);
    }
</style>
<div class="container container__wrap">
    <div class="d-flex">
        <h3 class="TopicName" style="font-weight: bold">
            GALLERY
        </h3>
    </div>

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



