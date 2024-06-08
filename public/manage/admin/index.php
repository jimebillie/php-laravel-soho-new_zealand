<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/Index.css?v=<?= date('YmdHis') ?>">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>Login for Manage</title>

</head>
<body>

<div class="wrap__alllogin">
    <div class="wrap__coverimg">
        <img src="https://images.unsplash.com/photo-1661956602153-23384936a1d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Picture Cover">
    </div>

    <div class="wrap__right">
        <div class="wrap__login">
            <div class="wrap__login__row1">
                <div>
                    <h1>Login | admin</h1>
                </div>
                <div>
                    <h1>
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </h1>
                </div>
            </div>

            <div class="wrap__login__row2">
                Admin So-Ho
            </div>
            <form action="../config/loginController.php" method="post">
                <div class="wrap__login__row3">
                    <small>
                        Username :
                    </small>
                    <input type="text" name="__username">

                    <small>
                        Password :
                    </small>
                    <input type="password" name="__password">
                </div>

                <div class="wrap__login__row4">
                    <button type="submit" name="login__req">
                        Login
                    </button>
                </div>
            </form>

            <div class="wrap__version">
                <small>Version 1.1 | 2023</small>
            </div>


        </div>
    </div>
</div>


<script>
    <?php
        if(isset($_SESSION['msg_system'])){
            ?>
            alert(`<?=$_SESSION['msg_system']['msg']?>`);
    <?php
        unset($_SESSION['msg_system']);
        }
    ?>
</script>


</body>
</html>
