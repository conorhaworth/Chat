<?php 
    if(isset($_POST['message'])){
        $message = $_POST['message'];
        if(isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
        }else if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
        }else{
            return;
        }
    }else{
        return;
    }
    if(isset($message) && isset($username)){
        echo '<script>console.log("M: '.$message.' U: '.$username.'")</script>';
        return '<div class="return"><p>'.$message.'</p><p>'.$username.'</p></div>';
    }else{
        return;
    }

?>