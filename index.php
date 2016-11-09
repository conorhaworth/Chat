<?php 
    session_start();
    if(isset($_COOKIE['username'])){
        $_SESSIOM['isLoggedIn'] = true;
        setCookie("username", $_COOKIE['username'], time()+604800);
    }
    if(!isset($_SESSION['isLoggedIn'])){
        $_SESSION['isLoggedIn'] = false;
    }
?>

<head>
    <?php include('template/head.php');?>
</head>
<body>
    <!--- REMOVE '!' FROM IF STATEMENT AFTER LOGIN SCREEN IS IMPLEMENTED -->
    <?php 
        if($_SESSION['isLoggedIn']):
            include('template/chatScreen/header.php'); 
            include('template/chatScreen/body.php'); 
            include('template/chatScreen/send.php'); 
        else:
            include('template/loginScreen/body.php'); 
        endif;
    ?>
</body>