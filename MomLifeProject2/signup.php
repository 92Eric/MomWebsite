<?php
    require "header.php";
?>
 
    <main>
        <div class = "wrapper-main">
            <section class = "section-default"> 
                <h1> Signup</h1>
                <form class = 'form-signup' action = "includes/signup.inc.php" method = "POST">
                    <input type = "text" name = 'username' placeholder = 'Username'>
                    <input type = "text" name = 'mail' placeholder = 'E-mail'>
                    <input type = "password" name = 'pwd' placeholder = 'Password'>
                    <input type = "password" name = 'pwd-repeat' placeholder = 'Repeat password'>
                    <button type = 'submit' name = 'signup-submit'> Signup</button>
                </form>
                
                
            </section>
            
     </div>
    </main>

<?php
     require "footer.php";
?>


