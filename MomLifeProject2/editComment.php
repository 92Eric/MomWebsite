<?php
    include 'includes/dbh.inc.php';
    include 'comments.php';

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name = "description" content = "editComment">
<title> Edit Comment </title> <!--/*displays the title of a web page-->
<link rel = "" type ="" href="">
</head>
    
<body>
<!--start of comment test-->
    <?php
            $uid = $_POST['Name'];
            $date = $_POST['Date'];
            $Message = $_POST['Comment'];
   
        echo  "<center><form class = 'CommentSection' method = 'POST' action ='".editComments($conn)."'>
        <div><input type = 'hidden' name = 'uid' value ='".$uid."'></div>
        <div><input  type = 'hidden' name = 'date' value ='".$date."'></div>
        <div><textarea class = 'comment' name = 'comment'>".$Message."</textarea></div>
        <button type = 'submit' name = 'submitComment'>Edit</button>  
        </form></center>";
        exit();
    ?>
    <!-----end of comment test-->
   </body> 
</html>