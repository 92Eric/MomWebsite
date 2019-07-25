<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name = "description" content = "Top webpage">
    <title> Header </title> <!--/*displays the title of a web page-->
    <link rel ="stylesheet" href ="Navagation.css">
    <link rel ="stylesheet" href ="imageSlider.css">
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
     crossorigin="anonymous"></script>
    <style>  
      


        .UserLogin
        {
            position:absolute;
            
            right:30%;
            top: 10%;
        }
        
       
        .About
        {
            text-align:center;
        }
        .AboutMePara{
            text-align:center;
            margin-bottom: 30px;
        }
        .SignupContainer{
            margin-bottom: 50px;
        }
        .SignupContainer-move{
          
            margin-bottom: 150px;
        }
        .signupForm
        {
            height:0px;
            width: 0px;
            margin-bottom:1opx;
            overflow:hidden;
        }
        .signupForm-appear
        {
            height:100px;
            width: 200px;
            margin-bottom:1opx;
            display:inline;
        }
        /* 700 pixels or more of width of screen*/
        @media(min-width:700px) {
            
            .menu-toggle {
                display:none;
            }
            
            .site-nav{
                height:auto;
                position:relative;
                background: transparent;  
                float:left;
                margin-top: 20px;
                
            }
            
            .site-nav li
            {
                display:inline-block;
                border:none;
            }
            .site-nav a{
                padding:0;
                margin-left: 3em;
                color:black;
            }
            .site-nav a:hover,
            .site-nav a:focus{
                background: transparent;
            }
            .UserLogin 
            {
                position:absolute;
                right: 0%;
               
            }
            .Signup
            {
                float:right;     
            }
            .logoutSubmit
            { 
                float:right;
                margin-right: 10px;   
            }
        }
        
  
    </style>
</head>
<body>
    
<header>
<div class = "container">
    <h1 class="logo">Susan's Kitchen </h1>
    
    
   
    <nav class = "site-nav">
        <a class = "header-logo" href ="index.php" ></a>
        <ul id="menu" class="menu">
            <li id="menu-item-1" class="menu-Items"><a href = "index.php" target ="_blank">Home</a></li>       
            <li id="menu-item-2" class="menu-Items"><a href = "">Search Recipes </a></li>    
            <li id="menu-item-3" class="menu-Items"><a href = "MainDishes.php" target="_blank">Main Dishes</a></li>      
            <li id="menu-item-4" class="menu-Items"><a href = "SoupAndStews.php" target ="_blank">Soups and Stews</a></li>
            <li id="menu-item-5" class="menu-Items"><a href= "BreadAndRolls.php" target="_blank">Breads and Rolls</a></li>
            <li id="menu-item-6" class="menu-Items"><a href= "Snacks.php" target ="_blank">Snacks</a></li>
            <li id="menu-item-7" class="menu-Items"><a href= "Desserts.php" target ="_blank">Desserts</a></li>       
        </ul>
    </nav>
    
    <div class = "UserLogin"> 
      <?php
            if(isset($_SESSION['userID']))
            {
                            echo '<form action = "includes/logout.inc.php" method= "POST">
                            <button type= "Submit" class = "logoutSubmit" name = "logout-Submit" >Logout</button>
                            </form>';
            } else {
                         echo '<form action = "includes/login.inc.php" method = "POST">
                        <input  type = "text" name = "mailuid" placeholder = "Username/Email">
                        <input  type = "password" name = "pwd" placeholder = "Password">
                        <button type = "submit" name = "login-submit">Login</button>  
                        </form>
                        <button class = "Signup"> Signup</button>';
            }
     ?>
    </div>
    
    <div class= "menu-toggle">
        <div class = "hamburger"></div>
    </div>
       
   
 </div>
 </header>
    
     <main>
        <div class = "signupForm">
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
        
        <center> <div class ="imageSlider"> 
        <div class = "slider-wrapper">
            <div class = "inner-wrapper">
                
                <div class = "slide"><img src ="image1.jpg"  id = "image" width = 200 height = 200  alt = "image1"/> <p id="text"> You</p> </div>
                <div class = "slide"><img src="image2.JPG"  width = 200 height = 200  alt = "image2"><p id="text"> should</p></div>
                <div class = "slide"><img src="image3.JPG"   width = 200 height = 200 alt = "image3"><p id="text"> get</p></div>
                <div class = "slide"><img src="image4.JPG"  width = 200 height = 200  alt = "image4"><p id="text"> a</p></div>
                <div class = "slide"><img src="image5.jpg"   width = 200 height = 200  alt = "image5"><p id="text"> kidney</p></div> 
            </div>
        
        <div class ="button prev"></div>
        <div class = "button next"></div>      
        </div>
    
    
    
    
    
    </div> </center>
    </main>
       
    <!---Above is end of image slider----->
    
    <h2 class= "About"> About Me </h2>
    <P class = "AboutMePara"> Hi,........</P>
    <center><img src = "" alt = "Mom home image" class = "HomeImage"></center> 
      <center>
    <video id = SusanIntroduction src = ""> Your browser does not support the video.</video>
    </center>
    <script src="imageSlider.js"></script>
    <script>
    //opens and closes menu
    $('.menu-toggle').click(function() {
        //toggleClass adds and reverses the added height
        $('.site-nav').toggleClass('site-nav-open', 1000);
        $(this).toggleClass('open');
    
    
    
    });
    </script>
    <script>
    $('.Signup').click(function() {
        $('.signupForm').toggleClass('signupForm-appear');
        
    });
    </script>  
 
</body>
</html>