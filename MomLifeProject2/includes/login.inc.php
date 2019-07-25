<?php
if(isset($_POST['login-submit']))
{
    require 'dbh.inc.php';
    
    $emailuid = $_POST['mailuid'];
    $passWD = $_POST['pwd'];
    
    if(empty($emailuid) || empty($passWD))
    {
      header("Location:../index.php?error=emptyfields");
      exit();
    } else {
        $sql = "SELECT * FROM Users WHERE uidUsername = ? OR emailUser = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
           header("Location:../index.php?error=sqlerror");
           exit(); 
        } else {
                 mysqli_stmt_bind_param($stmt, "ss", $emailuid, $emailuid);
                 mysqli_stmt_execute($stmt);
                 $result = mysqli_stmt_get_result($stmt);
                 if($row = mysqli_fetch_assoc($result))
                 {
                     $pwdCheck = password_verify($passWD, $row['passWRD']);
                     if($pwdCheck == false)
                     {
                        header("Location:../index.php?error=wrongpwd");
                        exit();  
                     } else if($pwdCheck == true)
                        {
                            session_start();
                            $_SESSION['userID'] = $row['idUsers'];
                            $_SESSION['userName'] = $row['uidUsername'];
                            $_SESSION['userEmail'] = $row['emailUser'];
                            header("Location:../index.php?login=success");
                            exit();  
                         
                        } else {
                                header("Location:../index.php?error=wrongpwd&error=usernameDoesn'tMatchEmail");
                                exit();
                        }
                    }
                 }
                header("Location:../index.php?error=usernameDoesn'tMatchEmail");
                exit();  
               }
        

        
    }
    
 else {
      header("Location:../index.php");
      exit();
}