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
        $data = ["content"  => $message];
        $url = 'http://192.168.24.173/messages/'.$username;
        
        $ch = curl_init($url);
        
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $response = curl_exec($ch);
        echo $response;
        return;
    }else{
        return;
    }

?>