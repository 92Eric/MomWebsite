<?php
    require "header.php";
?>

    <main>
        <?php
            if(isset($_SESSION['userID']))
            {
                echo '<p class = "login-status"> You are logged in! </p>';
            } else {
                echo '<p class = "login-status"> You are logged out! </p>';
            }
        ?>
    </main>

