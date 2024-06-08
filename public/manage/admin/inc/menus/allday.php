<?php
include("../config/database.php");
$oop = new \db\config\connect();
$oop_CountSubmenu = new \db\config\connect();
$oop_Submenu = new \db\config\connect();
?>


<div>
    <a href="javascript:window.location.href='dashboard.php?p=menus'">Menus</a>
    /
    <span>All Day Menu</span>
</div>


<div class="mt-5">
    <b>
       STEP1 #Add new main topic
    </b>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <form action="route/Add_allday.php" method="post">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="NameTopic" placeholder="Enter Name Topic"
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

<div class="mt-5">
    <b>
       STEP2 #Add new Submenu
    </b>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <form action="route/Add_allday_sub.php" method="post">
                    <div class="col-md-6">
                        <label for="">
                            Select Main Topic :
                        </label>
                        <select class="form-select" name="IdMainTopic" required>
                            <?php
                            foreach ($oop->conn->query("CALL MenuAllDay_ALL()") as $asMenuAllDay) {
                                ?>
                                <option value="<?= $asMenuAllDay['id'] ?>"><?= $asMenuAllDay['name_topic'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col my-2"></div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="NameSubmenu" placeholder="Enter Name Submenu"
                               required>
                    </div>
                    <div class="col my-2"></div>
                    <div class="col-md">
                        <input class="form-control" type="text" name="DetailSubmenu" placeholder="Enter Detail Submenu"
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


<div class="mt-5" id="table">
    <b>#Table Topic All</b>
    <div class="card">
        <div class="card-body">
            <div style="overflow: auto">
                <table class="dttb table table-striped table-bordered w-100 text-nowrap">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    foreach ($oop->conn->query("CALL MenuAllDay_ALL()") as $asMenuAllDay) {
                        ?>
                        <tr>
                            <td><?=$i?></td>
                            <td>
                                <b class="text-primary">
                                    <?= $asMenuAllDay['name_topic'] ?>
                                </b>
                                <?php
                                foreach ($oop_CountSubmenu->conn->query("CALL CountMenuAllDay_Sub_id($asMenuAllDay[id])") as $asCountMenuAllDaySub) {
                                    if ($asCountMenuAllDaySub['count_rows'] > 0) {
                                        ?>
                                        <table class="w-100 table" style="font-size: 13px">
                                            <thead>
                                            <tr>
                                                <th>Name Submenu</th>
                                                <th>Detail Submenu</th>
                                                <th>Manage</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach ($oop_Submenu->conn->query("CALL MenuAllDay_Sub_id($asMenuAllDay[id])") as $asMenuAllDaySub) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?=$asMenuAllDaySub['name_sub']?>
                                                    </td>
                                                    <td>
                                                        <?=$asMenuAllDaySub['detail_sub']?>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:window.location.href='dashboard.php?p=menus/allday/edit&edit=sub&id=<?=$asMenuAllDaySub['id']?>'"
                                                           class="badge bg-warning p-2">
                                                            Edit
                                                        </a>
                                                        <a href="javascript:if(confirm('Want to delete?')){window.location.href='route/Del_allday_sub.php?id=<?= $asMenuAllDaySub['id'] ?>&name=<?= $asMenuAllDaySub['name_sub'] ?>'}"
                                                           class="badge bg-danger p-2">
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                        <?php
                                    }
                                }
                                ?>


                            </td>
                            <td>
                                <a href="javascript:window.location.href='dashboard.php?p=menus/allday/edit&edit=main&id=<?=$asMenuAllDay['id']?>'"
                                   class="badge bg-warning p-2">
                                    Edit
                                </a>
                                <a href="javascript:if(confirm('Want to delete?')){window.location.href='route/Del_allday.php?id=<?= $asMenuAllDay['id'] ?>&name=<?= $asMenuAllDay['name_topic'] ?>'}"
                                   class="badge bg-danger p-2">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php
                        $i+=1;
                    }
                    ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>





