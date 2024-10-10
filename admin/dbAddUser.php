<?php
session_start();
include 'connection.php';

if(isset($_POST['btn-ruser'])){

$username = $_POST['uname'];
$email = $_POST['mail'];
$password = $_POST['pass'];
$rpassword = $_POST['rpass'];

 if (empty($username) ||  empty($email) || empty($password) || empty($rpassword)) {
 
    header('Location: AccountMgt.php?error=emptyfield&uname=' .$username . "&mail" .$email);
    exit();

 }
 else if(!filter_var($email,FILTER_VALIDATE_EMAIL) || !preg_match("/^[a-zA-Z0-9]*$/",$username)){

    header('Location: AccountMgt.php?error=invalidmail&uname');
    exit();
 
 }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
 
    header('Location: AccountMgt.php?error=invalidmail&uname=' .$username);
    exit();

 }else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){

    header('Location: AccountMgt.php?error=invaliduname&mail=' .$email);
    exit();

 }else if($password !== $rpassword){
 
    header('Location: AccountMgt.php?error=passwordcheck&uname='.$username. '&mail='.$email);
    exit();
 }
 else{

  $sql = "SELECT username FROM lgu_user WHERE  username=?";
  $stmt = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt,$sql)){

    header('Location: AccountMgt.php?error=sqlerror2');
    exit();

  } 
  else {
    
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    
    if($resultCheck > 0){
   
        header('Location: AccountMgt.php?error=usernametaken&mail='.$email);
         exit();

    }
    else{

        $sql = "INSERT INTO lgu_user (username, email, pwd)  VALUES (?, ?, ?)";
        $stmt =mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){

          
           header('Location: AccountMgt.php?error=sqlerror1');
           exit();

        }
        else{

            $hashpassword = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sss" , $username, $email, $hashpassword);
            mysqli_stmt_execute($stmt);

            header('Location: AccountMgt.php?useradd=success');
            exit();

        }
    }

 }

 
 }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
 
 
} else{
    header('Location: admin/AccountMgt.php');
    exit();
}