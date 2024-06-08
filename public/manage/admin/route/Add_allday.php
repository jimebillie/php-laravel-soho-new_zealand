<?php
include("../../config/database.php");
$oop = new \db\config\connect();

session_start();

$ins = $oop->conn->prepare("INSERT INTO `menu_allday`(name_topic) VALUES (:name_topic)");
$ins->execute([
    "name_topic" => $_POST['NameTopic']
]);


$alert ='<div id="alert" style="position: absolute;bottom: 0;right: 30px"
class="alert alert-success alert-dismissible fade show"
role="alert">
  <strong>Alert ! </strong> <br>
   Add <b>"'.$_POST['NameTopic'].'"</b> Success.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

$_SESSION['result'] = [
    "alert" => $alert
];

?>
<script>
    window.location.href='../dashboard.php?p=menus/allday'
</script>

