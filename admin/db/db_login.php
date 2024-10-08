<?php

if(isset($_POST['login_submit'])){

  require 'db_connection.php';

  $uname = $_POST['uname'];
  $password = $_POST['pwd'];

  if(empty($uname) || (empty($password))
  {
    header("Location:../loginForm.php?error=emptyfields");
    exit();
  }
  else
  {
    $sql = "SELECT * FROM ACCOUNT_MGT WHERE acc_uname=? OR acc_email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../loginForm.php?error=sqlerror");
        exit();

    }
    else
    {
        mysqli_stmt_bind_param($stmt,"ss",$uname,$password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $pwdCheck = password_verify($password, $row['acc_pass']);
            if($pwdCheck == false){
                header("Location:../loginForm.php?error=wrongpassword");
                exit();
            }
            else if($pwdCheck == true)
            {
                session_start();
                $_SESSION["userId"] = $row["id_acc"];
                $_SESSION["userIdno"] = $row["acc_idno"];

                header("Location:../DashBoard.php?error=wrongpassword");
                exit();
            }
            else
            {
                header("Location:../loginForm.php?error=wrongpassword");
                exit();
            }
            
        }
        else{
            header("Location:../loginForm.php?error=nouser");
        exit();
        }
    }

  }
}    
else
{
    header("Location:../loginForm.php");
    exit();
}