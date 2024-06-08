<?php
include("../../config/database.php");
$oop = new \db\config\connect();

session_start();


$oop->conn->query("CALL Edit_Menu_Cocktail_By_id('$_GET[id]','$_POST[NameCocktail]','$_POST[DetailCocktail]')");

$alert = '<div id="alert" style="position: absolute;bottom: 0;right: 30px"
class="alert alert-success alert-dismissible fade show"
role="alert">
  <strong>Alert ! </strong> <br>
   Edit <b>"' . $_POST['NameCocktail'] . '"</b> Success.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

$_SESSION['result'] = [
    "alert" => $alert
];


?>
<script>
    window.location.href = '../dashboard.php?p=menus/cocktail#table'
</script>

