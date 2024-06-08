<?php
include("../config/database.php");
$oop = new \db\config\connect();
$oopSelectMain = new \db\config\connect();
?>

<div>
    <a href="javascript:window.location.href='dashboard.php?p=menus'">Menus</a>
    /
    <a href="javascript:window.location.href='dashboard.php?p=menus/cocktail'">COCKTAIL MENU</a>
    /
    <span>Edit</span>
</div>

<?php

foreach ($oop->conn->query("CALL Select_Menu_Cocktail_By_id($_GET[id])") as $asForEdit) {
    ?>

    <div class="mt-5">
        <b>
            #Edit Cocktail Menu
        </b>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form action="route/Edit_Cocktail.php?edit=main&id=<?= $_GET['id'] ?>" method="post">
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="NameCocktail" placeholder="Enter Name Cocktail"
                                   value="<?=$asForEdit['name_cocktail']?>"
                                   required>
                        </div>
                        <div class="col my-2"></div>
                        <div class="col-md">
                            <input class="form-control" type="text" name="DetailCocktail"
                                   placeholder="Enter Detail Cocktail"
                                   value="<?=$asForEdit['detail_cocktail']?>"
                                   required>
                        </div>
                        <div class="col my-2"></div>
                        <div class="col-md-6">
                            <button class="btn btn-success" type="submit">Save</button>
                            <button class="btn btn-warning" type="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php

}

?>
