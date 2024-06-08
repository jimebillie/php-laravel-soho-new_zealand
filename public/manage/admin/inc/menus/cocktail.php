<div>
    <a href="javascript:window.location.href='dashboard.php?p=menus'">Menus</a>
    /
    <span>COCKTAIL MENU</span>
</div>

<div class="mt-5">
    <b>
        STEP1 #Add new Cocktail
    </b>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <form action="route/Add_Cocktail.php" method="post">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="NameCocktail" placeholder="Enter Name Cocktail"
                               required>
                    </div>
                    <div class="col my-2"></div>
                    <div class="col-md">
                        <input class="form-control" type="text" name="DetailCocktail"
                               placeholder="Enter Detail Cocktail"
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
include("../config/database.php");
$oop = new \db\config\connect();
?>

<div class="mt-5" id="table">
    <b>#Table Cocktail All</b>
    <div class="card">
        <div class="card-body">
            <div style="overflow: auto">
                <table class="dttb table table-striped table-bordered w-100 text-nowrap">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    foreach ($oop->conn->query("CALL Select_Menu_Cocktail_All()") as $asSelect_Menu_Cocktail_All) {
                        ?>
                        <tr>
                            <td><?=$i?></td>
                            <td><?=$asSelect_Menu_Cocktail_All['name_cocktail']?></td>
                            <td><?=$asSelect_Menu_Cocktail_All['detail_cocktail']?></td>
                            <td>
                                <a href="javascript:window.location.href='dashboard.php?p=menus/cocktail/edit&edit=main&id=<?=$asSelect_Menu_Cocktail_All['id']?>'"
                                   class="badge bg-warning p-2">
                                    Edit
                                </a>
                                <a href="javascript:if(confirm('Want to delete?')){window.location.href='route/Del_Cocktail.php?id=<?= $asSelect_Menu_Cocktail_All['id'] ?>&name=<?= $asSelect_Menu_Cocktail_All['name_cocktail'] ?>'}"
                                   class="badge bg-danger p-2">
                                    Delete
                                </a>
                            </td>

                        </tr>
                        <?php
                        $i += 1;
                    }
                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


