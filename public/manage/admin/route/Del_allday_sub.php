<?php
session_start();
include("../../config/database.php");
$oop = new \db\config\connect();

$oop->conn->query("CALL Delete_menuallday_sub_id($_GET[id])");

$alert ='<div id="alert" style="position: absolute;bottom: 0;right: 30px"
class="alert alert-warning alert-dismissible fade show"
role="alert">
  <strong>Alert ! </strong> <br>
   Delete <b>"'.$_GET['name'].'"</b> Success.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

$_SESSION['result'] = [
    "alert" => $alert
];

?>
<script>
    window.location.href='../dashboard.php?p=menus/allday#table'
</script>