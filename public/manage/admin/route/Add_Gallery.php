<?php
include("../../config/database.php");
$oop = new \db\config\connect();

session_start();

$chk_pic = explode('/', $_FILES['pic']['type']);
if ($chk_pic[0] != "image") {
    ?>
    <script>
        window.location.href = '../dashboard.php?p=gallery'
    </script>
    <?php
}
$lastname = explode('.', $_FILES['pic']['name']);
$count_lastname = count(explode('.', $_FILES['pic']['name']))-1;
$newname = date("ymdHis").".".$lastname[$count_lastname];

$oop->conn->query("CALL Insert_Gallery('$newname')");
move_uploaded_file($_FILES['pic']['tmp_name'],'../../images/gallery/'.$newname);


$alert ='<div id="alert" style="position: absolute;bottom: 0;right: 30px"
class="alert alert-success alert-dismissible fade show"
role="alert">
  <strong>Alert ! </strong> <br>
   Add <b>"'.$newname.'"</b> Success.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

$_SESSION['result'] = [
    "alert" => $alert
];

?>
<script>
    window.location.href='../dashboard.php?p=gallery'
</script>

