<?php

//did you actually click the singup button
    if(isset($_POST['signup-submit']))
    {
        require 'dbh.inc.php';
        
        $username = $_POST['username'];
        $userEmail = $_POST['mail'];
        $userPass = $_POST['pwd'];
        $userPassRepeat = $_POST['pwd-repeat'];
        
        if(empty($username)|| empty($userEmail)|| empty($userPass) || empty($userPassRepeat))
        {
            header("Location: ../signup.php?error=emptyfields&username=".$username."&mail=".$userEmail);
            exit();
        } else if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("Location:../signup.php?error= invalidemailANDusername");
            exit();
        } else if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
         
            header("Location:../signup.php?error=invalidemail&uid=".$username);
            exit();
         } else if(!preg_match("/^[a-zA-Z0-9]*$/", $username))
        {
            header("Location:../signup.php?error=invalidusernamel&mail=".$userEmail);
            exit();
        }  else if($userPass !== $userPassRepeat)
        {
           header("Location:../signup.php?error=passwordcheck&username=".$username."&mail=".userEmail);
           exit;
        }
        else {
            $sql = "SELECT uidUsername FROM Users WHERE uidUsername= ?";
            $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql))
                {
                header("Location:../signup.php?error=sqlerror");
                exit;
                
                } else
                 {
                    //bouding parameters
        
                    mysqli_stmt_bind_param($stmt,"s",$username );
                    mysqli_stmt_execute($stmt);
                    //put the results in stmt
                    mysqli_stmt_store_result($stmt);
                    
                    //gets a number of how many rows
                    $resultCheck = mysqli_stmt_num_rows($stmt);
                        if($resultCheck > 0)
                        {
                            header("Location:../signup.php?error=usertaken&mail=".$email);
                            exit();
                        } else {
                            $sql = "INSERT INTO Users (uidUsername, emailUser, passWRD) VALUES(?,?,?)";
                            $stmt = mysqli_stmt_init($conn);
                             if(!mysqli_stmt_prepare($stmt,$sql))
                             {
                                header("Location:../signup.php?error=sqlerror");
                                exit;
                
                              } else {
                                    $hashedPwd = password_hash($userPass,PASSWORD_DEFAULT);
                                     //bouding parameters
                                    mysqli_stmt_bind_param($stmt,"sss",$username,$userEmail, $hashedPwd );
                                    mysqli_stmt_execute($stmt);
                                    header("Location:../signup.php?Success=AccountCreated");
                                    exit;

                                }
                        }
                 }
             //check if email is already taken by semi repeating steps above
        }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        
        
} else{
      header("Location:../signup.php");
      exit();
}