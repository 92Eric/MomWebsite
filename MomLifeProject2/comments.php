<?php
session_start();
function   setComments($conn) {
    if(isset($_POST['submitComment']))
    {
            $idUser = $_SESSION['userID'];
            $uid =  $_SESSION['userName'];
            $date = $_POST['date'];
            $Message = $_POST['comment'];
        
            $sql = "INSERT INTO Comments (idUsers, Username, comment, Date) VALUES ('$idUser','$uid','$Message','$date')";
            
            if  ($conn-> query($sql) == TRUE)
            {
   
         //      echo "New record created successfully";
         //      exit();
            } else{
        //       echo "Error: " . $sql . "<br>" . $conn->error;
        //       exit();
            }
    }
    

}
function   editComments($conn) {
    if(isset($_POST['submitComment']))
    {
            $uid = $_POST['uid'];
            $date = $_POST['date'];
            $Message = $_POST['comment'];
            $sql = "UPDATE Comments SET comment = '$Message' WHERE Date = '$date'";
            
            if  ($conn-> query($sql) == TRUE)
            {
                header("Location: MainDishes.php");
                exit();
            } else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            

  }
}
function replyComments($conn)
{
  
    
  if(isset($_POST['Reply-Comment']))
  {
   $currentDate = $_POST['currentDate'];
   $date = $_POST['date'];
   $reply = $_POST['comment'];
   $userName = $_POST['userName'];

   $sql = "UPDATE Comments SET commentWasRepliedTo = 'Yes' WHERE Date = '$date'";
      
    if($conn-> query($sql) == TRUE)
    {
               $sql = "INSERT INTO Replies (Date, comment, userName,DateOfReply) VALUES ('$date','$reply','$userName','$currentDate')";
               if($conn-> query($sql) == TRUE)
               {
                  header("Location: MainDishes.php");
               } else
                 {
                   echo "Error: " . $sql . "<br>" . $conn->error;
                 }
    } else{
       
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
  }
    
    
    
    
    
}
function getComments($conn)
{
    $sql = "SELECT * FROM Comments";
    $result = $conn -> query($sql);
    while($row = $result -> fetch_assoc())
    {
            echo "<div class = 'comment-box'><br>";
                echo $row['Date']."<br>";
                echo $row['Username']."<br>";
                echo nl2br($row['comment']);
          
            if(isset($_SESSION['userID'])){
                if($_SESSION['userID']==$row['idUsers']){
                    echo"<form class = 'deleteForm' method ='POST'  action = '".deleteComments($conn)."'>
                    <input type = 'hidden' name = 'useName' value ='".$row['Username']."'>
                    <input type = 'hidden' name ='DATE' value ='".$row['Date']."'>
                    <button type = 'submit'name = 'commentDelete'> Delete </button>
                  </form>
                    <form class = 'editForm' method ='POST'  action = 'editComment.php'>
                    <input type = 'hidden' name ='Date' value ='".$row['Date']."'>
                    <input type = 'hidden' name ='Name' value ='".$row['Username']."'>
                    <input type = 'hidden' name ='Comment' value ='".$row['comment']."'> 
                    <button type = 'submit' name = 'edit'> Edit </button>
                  </form>";
                } else {
                     echo"<form class = 'editForm' method ='POST'  action = 'replyComment.php'>
                    <input type = 'hidden' name = 'useName' value ='".$row['Username']."'>
                    <input type = 'hidden' name ='DATE' value ='".$row['Date']."'>
                    <button type = 'submit' name = 'ReplyDelete'> Reply</button>
                  </form>";
                  } 
            } else 
            {
                echo "<p class = 'commentmessage'> You need to be logged in to reply, post, or edit a comment!</p>";
            }
        
          echo" </div>";
        
        //reply section
        if($row['commentWasRepliedTo']=='Yes')
        {
                $Date = $row['Date'];
                $sql = "SELECT * FROM Replies where Date = '$Date'";
                $result2 = $conn -> query($sql);
              while($row = $result2 -> fetch_assoc())
             {
                //remember to style the reply-box!!!!!!
                echo "<div class = 'comment-box'><br>";
                echo $row['DateOfReply']."<br>";
                echo nl2br($row['comment']);
                echo" </div>";
             }
        }
        
              
    }
    
 
}
  
function deleteComments($conn)
{
    
    if(isset($_POST['commentDelete']))
    {
    
            $date = $_POST['DATE'];
            $useName = $_POST['useName'];
  
       
            $sql = "DELETE FROM comments WHERE Date = '$date'";
            
            if  ($conn-> query($sql) == TRUE)
            {
               echo "<meta http-equiv='refresh' content='0'>";
               header("Location: MainDishes.php");
               exit();
               // echo "Recorded deleted successfully";
            } else{
             //   echo "Error: " . $sql . "<br>" . $conn->error;
            }
       
    }
}

