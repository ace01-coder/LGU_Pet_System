<?php

if(isset($_POST['adduserBtn'])){

 require 'db_connection.php';

 $username = $_POST['uname'];//username
 $email = $_POST['mail'];//email
 $password = $_POST['pwd'];//password
 $rpassword = $_POST['rpwd'];//passwordrepeat


if(empty($username) || empty($email) || empty($password) || empty($rpassword)) {
    header("Location: admin/AccountMgt.php?error=emptyfields&uname=".$username."&mail=".$email);
   exit();
 }
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
    header("Location: admin/AccountMgt.php?error=invalidmail&username");
    exit();
 } 
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    header("Location: admin/AccountMgt.php?error=invalidmail&uname=".$username);
    exit();
}
elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
    header("Location: admin/AccountMgt.php?error=invalidusername&mail=".$email);
    exit();
}
elseif($password !== $rpassword) {
    header("Location: admin/AccountMgt.php?error=passwordnotmatch&uname=".$username."&mail=".$email);
    exit();
}
else {

    $sql = "SELECT  acc_iduname FROM acc_mgt WHERE acc_iduname=? ";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: admin/AccountMgt.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);

        if($resultCheck > 0) {
            header("Location: admin/AccountMgt.php?error=usertaken&uname=".$email);
            exit();
        }else {

            $sql = "INSERT INTO acc_mgt (acc_iduname, acc_idemail, acc_pwd) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: admin/AccountMgt.php?error=sqlerror");
                exit();
            }else{
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                
                header("Location: admin/AccountMgt.php?addeduser=success");
                exit();
            }
            
            }
       }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: admin/AccountMgt.php");
    exit();
}

