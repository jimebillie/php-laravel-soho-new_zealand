<?php
session_start();
include ('database.php');




$oop = new \db\config\connect();


if (isset($_POST['login__req'])) {

    $chk = $oop->conn->prepare("select *, COUNT(id) as __count__user from user where __username = :__username and __password = :__password and __branch = :__admin ");
    $chk->execute([
            '__username' => $_POST['__username'],
            '__password' => $_POST['__password'],
            '__admin' => 'admin'
        ]);

    foreach ($chk as $as_chk) {
        if ($as_chk['__count__user'] == 0) {
            $_SESSION['msg_system'] = ['code' => 'error', 'msg' => 'Username หรือ Password ของท่านผิด'];
            header('location: ../admin/index.php');
            exit();
        } else {
            $_SESSION['detail_admin'] = [
                'username' => $as_chk['__username'],
                'password' => $as_chk['__password'],
                'name' => $as_chk['__username']
            ];
            header("Location:../admin/dashboard.php");
            exit();
        }
    }

}


