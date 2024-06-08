<?php
include("../config/database.php");
$oop = new \db\config\connect();
$oopSelectMain = new \db\config\connect();
?>

<div>
    <a href="javascript:window.location.href='dashboard.php?p=menus'">Menus</a>
    /
    <a href="javascript:window.location.href='dashboard.php?p=menus/allday'">All Day Menu</a>
    /
    <span>Edit</span>
</div>

<?php
if (isset($_GET['edit']) && $_GET['edit'] == "main") {
    foreach ($oop->conn->query("CALL Select_MenuAllday_id($_GET[id])") as $asForEdit) {
        ?>

        <div class="mt-5">
            <b>
                #Edit main topic
            </b>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="route/Edit_allday.php?edit=main&id=<?= $_GET['id'] ?>" method="post">
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="NameTopic" placeholder="Enter Name Topic"
                                       value="<?= $asForEdit['name_topic'] ?>"
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
}
if (isset($_GET['edit']) && $_GET['edit'] == "sub") {
    foreach ($oop->conn->query("CALL Select_MenuAllday_Sub_by_id_sub($_GET[id])") as $asForEdit) {
        ?>

        <div class="mt-5">
            <b>
                #Edit Submenu
            </b>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="route/Edit_allday.php?edit=sub&id=<?=$asForEdit['id']?>" method="post">
                            <div class="col-md-6">
                                <label for="">
                                    Select Main Topic :
                                </label>
                                <select class="form-select" name="IdMainTopic" required>
                                    <?php
                                    foreach ($oopSelectMain->conn->query("CALL MenuAllDay_ALL()") as $asMenuAllDay) {
                                        ?>
                                        <option  <?php if($asForEdit['id_main_topic'] == $asMenuAllDay['id']){echo "selected";}?> value="<?=$asMenuAllDay['id']?>"><?= $asMenuAllDay['name_topic'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col my-2"></div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="NameSubmenu" placeholder="Enter Name Submenu"
                                       value="<?=$asForEdit['name_sub']?>"
                                       required>
                            </div>
                            <div class="col my-2"></div>
                            <div class="col-md">
                                <input class="form-control" type="text" name="DetailSubmenu" placeholder="Enter Detail Submenu"
                                       value="<?=$asForEdit['detail_sub']?>"
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
}
?>
