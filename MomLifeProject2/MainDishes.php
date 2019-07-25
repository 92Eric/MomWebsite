<?php
    include 'includes/dbh.inc.php';
    include 'comments.php';
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name = "description" content = "MainDishes">
    <title> Main Dishes </title> <!--/*displays the title of a web page-->
    <link rel ="stylesheet" href ="BananaMuffins.css">
    <link rel ="stylesheet" href ="Navagation.css">
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <style>  
       
        .comment
        {
            width: 200px;
            height: 200px;
            resize: none;
        }
        .comment-box
        {
            width: 200px;
            background-color: white;
            border-color: black;
            margin-top:4px;
            margin-bottom: 4px;
            position: relative;
        }
        .comment-box p
        {
            font-family: arial;
            font-size: 14px;
            line-height:16px;
            color: #282828;
            font-weight: 100px;
        }
        .editForm{
            font-weight: bold;
            position: absolute;
            top: 0px;
            right: 0px;
        }
        .editForm button{
            width: 40px;
            height: 10px;
            color: #282828;
            background-color: white;
            opacity: 0.7;
        }
         .editForm button:hover{
             opacity: 1;
        }
         .deleteForm{
            font-weight: bold;
            position: absolute;
            top: 0px;
            right: 80px;
    
        }
        .deleteForm button{
            width: 40px;
            height: 10px;
            color: #282828;
            background-color: white;
            opacity: 0.7;
        }
         .deleteForm button:hover{
             opacity: 1;
        }
        
        @media(min-width:700px) {
            
            .menu-toggle {
                display:none;
            }
            
            .site-nav{
                height:auto;
                position:relative;
                background: transparent;  
                float:right;
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
        }
    </style>
    
</head>
<body>
    
<header>
<div class = "container">
    <h1 class="logo">Susan's Kitchen </h1>
    
    
   
    <nav class = "site-nav">
        <ul id="menu" class="menu">
            <li id="menu-item-1" class="menu-Items"><a href = "header.php" target="_blank">Home</a></li>       
            <li id="menu-item-2" class="menu-Items"><a href = "">Search Recipes </a></li>      
            <li id="menu-item-4" class="menu-Items"><a href = "SoupAndStews.php" target ="_blank">Soups and Stews</a></li>      
            <li id="menu-item-5" class="menu-Items"><a href= "BreadAndRolls.php" target ="_blank">Breads and Rolls</a></li>
            <li id="menu-item-6" class="menu-Items"><a href= "Snacks.php" target ="_blank">Snacks</a></li>
            <li id="menu-item-7" class="menu-Items"><a href= "Desserts.php"  target ="_blank">Desserts</a></li>       
        </ul>
    </nav>
    
    <div class= "menu-toggle">
        <div class = "hamburger"></div>
    </div>
 </div>
    

 </header>
    
   <center><h1 class = "MuffinsBanana"> Bannana Mufffins</h1></center> 
      <div class = "Display"> 
    <!-- nutrition image start-->
   <div class = nutrients>
    <center><p class = "NutritonFacts" > Nutrition Facts</p></center>
    <hr  noShade  width = 400 class = "Line">
        <div class = "CaloriesDiv"><p class = "Calories"> Calories</p></div>
            <div class = "CaloriesCount"><p class = "Calories"> 190 grams</p></div>
            <hr class = "hideLine" width = 400>       
        <div class= "SodiumDiv"><p class = "Sodium">  Sodium</p></div>
            <div class= "SodiumCount"><p class = "Sodium"> 190 mg</p></div>
            <hr class = "hideLine" width = 400>
        <div class = "ProteinDiv"><p class = "Protein"> Protein</p></div>
            <div class = "ProteinCount"><p class = "Protein"> 3 grams</p></div>
            <hr class = "hideLine" width = 400>     
        <div class = "CarbohydratesDiv"><p class = "Carbohydrates"> Carbohydrates</p></div>
            <div class = "CarbohydratesCount"><p class = "Carbohydrates">29 grams</p></div>
             <hr class = "hideLine" width = 400>
        <div class = "FatDiv"><p class = "Fat"> Fat </p></div>
            <div class = "FatCount"><p class = "Fat"> 7 grams</p></div>
            <hr class = "hideLine" width = 400>
        <div class = "CholesterolDiv"><p class = "Cholesterol"> Cholesterol</p></div>
            <div class = "CholesterolCount"><p class = "Cholesterol"> 15 mg</p></div>
            <hr class = "hideLine" width = 400>
        <div class = "PhosporousDiv"><p class = "Phosporous"> Phosporous</p></div>
            <div class = "PhosporousCount"><p class = "Phosporous"> 30 mg</p></div>
            <hr class = "hideLine" width = 400> 
        <div class = "PotassiumDiv"><p class = "Potassium"> Potassium </p></div>
            <div class = "PotassiumCount"><p class = "Potassium"> 115 mg</p></div>
            <hr class = "hideLine" width = 400>
        <div class = "CalciumDiv"><p class = "Calcium"> Calcium</p></div>
            <div class = "CalciumCount"><p class = "Calcium"> 7 mg </p></div>
            <hr class = "hideLine" width = 400> 
        <div class = "FiberDiv"><p class = "Fiber"> Fiber</p></div>
            <div class = "FiberCount"><p class = "FiberAmount"> less than 1 gram</p></div>
      </div>  
   <!----NutritonsEnd-->
    
    <!----indgrientsListStart-->
     <div class = indgrientsList>
    <center> <p class = "Indgriendts" > Ingredients</p></center>
    <hr class = "Line" width = 400>
        <ul id = "BannaMuffinsList">    
            <li class = "MuffinsList"> 1/4 teaspoon salt</li>
                <br>
            <li class = "MuffinsList"> 1/3 cup canola oil</li>
                <br>
            <li class=   "MuffinsList"> 3/4 cup sugar</li>
                <br>
            <li class =  "MuffinsList"> 1 and 1/4 teaspoons baking soda</li>
                <br>
            <li  class = "MuffinsList"> 1/2 teaspoon cream of tarter</li>
                <br>
            <li  class = "MuffinsList"> 1 medium egg</li>
                <br>
            <li class  = "MuffinsList"> 1 cup banana, fresh mashed</li>
                <br>
            <li class = "MuffinsList"> 1 and 1/2 cups all purpose Flour</li>
    </ul>
    </div> 
   
   <!--indrietnsListEnd end-->
   </div> 
    
    
    <!---->

        
    <!--start of comment test-->
    <?php
    if(isset( $_SESSION['userID']))
    {
        echo  "<form class = 'CommentSection' method = 'POST' action ='".setComments($conn)."'>
        <div><input  type = 'hidden' name = 'date' value ='".date('Y-m-d H:i:s')."'></div>
        <div><textarea class = 'comment' name = 'comment'></textarea></div>
        <button type = 'submit' name = 'submitComment'>Submit Comment</button>  
        </form>";
        getComments($conn);
    } else{
          getComments($conn);
        }
    ?>
    
    <!-----end of comment test-->
    
    
    <script>
    //opens and closes menu
    $('.menu-toggle').click(function() {
        //toggleClass adds and reverses the added height
        $('.site-nav').toggleClass('site-nav-open', 1000);
        //refers the hambuger parent menu-toggle and then applies the transformation of open
        $(this).toggleClass('open');

    
    
    });
    </script> 
    
 
 
    </body>

 
    </html>