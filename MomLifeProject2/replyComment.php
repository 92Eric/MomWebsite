<?php
    include 'includes/dbh.inc.php';
    include 'comments.php';
    

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name = "description" content = "replyComment">
<title> Edit Comment </title> <!--/*displays the title of a web page-->
<link rel = "" type ="" href="">
</head>
    
<body>
<!--start of comment test-->
    <?php
            $userName = $_SESSION['userName'];
            $date = $_POST['DATE'];
   
   
        echo  "<center><form class = 'CommentSection' method = 'POST' action ='".replyComments($conn)."'>
        <div><input type = 'hidden' name = 'userName' value ='".$userName."'></div>
        <div><input  type = 'hidden' name = 'date' value ='".$date."'></div>
        <div><input  name = 'currentDate' value ='".date('Y-m-d H:i:s')."'></div>
        <div><textarea class = 'comment' name = 'comment'></textarea></div>
        <button  type = 'submit' name = 'Reply-Comment'>Sumbit Reply</button>  
        </form></center>";

    ?>
    <!-----end of comment test-->
   </body> 
</html>