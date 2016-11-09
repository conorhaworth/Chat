<?php
    session_start();

    function passwordError(){
        
    }
    function passwordValid(){
        
    }
    function validatePassword(){
        
    }
    function usernameError(){
        
    }
    function usernameValid(){
        
    }
    function validateUsername($username){
        $_SESSION['username'] = username;
        setCookie("username", username, time()+604800);
        return true;
    }
  if(isset($_POST["username"])){
      if(validateUsername($_POST["username"])){
          $_SESSION['isLoggedIn'] = true;          
      }else{
          $_SESSION['isLoggedIn'] = false;
      }
  }else{
      echo "Error";
  }
    header('Location: /index.php'); exit();
?>