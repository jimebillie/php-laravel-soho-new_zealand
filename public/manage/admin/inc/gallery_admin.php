
<div class="">
    <b>
        STEP1 #Add Gallery
    </b>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <form action="route/Add_Gallery.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        Select Picture from Device
                        <input class="form-control" type="file" name="pic"
                               required>
                    </div>
                    <div class="col my-2"></div>
                    <div class="col-md-6">
                        <button class="btn btn-success" type="submit">Save</button>
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
                        <th>Picture</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    foreach ($oop->conn->query("CALL Select_Gallery_All()") as $asSelect_Gallery_All) {
                        ?>
                        <tr>
                            <td><?=$i?></td>
                            <td>
                                <img src="../images/gallery/<?=$asSelect_Gallery_All['pic']?>" style="width: 50px;border: 2px solid #3b3b3b">
                                <div>
                                    <?="Name : ".$asSelect_Gallery_All['pic']?>
                                </div>
                            </td>
                            <td>
                                <a href="javascript:if(confirm('Want to delete?')){window.location.href='route/Del_Gallery.php?id=<?= $asSelect_Gallery_All['id'] ?>&name=<?= $asSelect_Gallery_All['pic'] ?>'}"
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



