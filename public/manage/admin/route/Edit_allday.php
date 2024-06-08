<?php
include("../../config/database.php");
$oop = new \db\config\connect();

session_start();


if(isset($_GET['edit']) && $_GET['edit'] == "main"){
    $oop->conn->query("CALL Edit_MenuAllday_id('$_GET[id]','$_POST[NameTopic]')");

    $alert ='<div id="alert" style="position: absolute;bottom: 0;right: 30px"
class="alert alert-success alert-dismissible fade show"
role="alert">
  <strong>Alert ! </strong> <br>
   Edit <b>"'.$_POST['NameTopic'].'"</b> Success.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    $_SESSION['result'] = [
        "alert" => $alert
    ];
}


if(isset($_GET['edit']) && $_GET['edit'] == "sub"){
    $oop->conn->query("CALL Edit_MenuAllday_Sub_id_sub('$_GET[id]','$_POST[IdMainTopic]','$_POST[NameSubmenu]','$_POST[DetailSubmenu]')");

    $alert ='<div id="alert" style="position: absolute;bottom: 0;right: 30px"
class="alert alert-success alert-dismissible fade show"
role="alert">
  <strong>Alert ! </strong> <br>
   Edit <b>"'.$_POST['NameSubmenu'].'"</b> Success.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    $_SESSION['result'] = [
        "alert" => $alert
    ];
}


?>
<script>
    window.location.href='../dashboard.php?p=menus/allday#table'
</script>

