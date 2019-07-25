
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name = "description" content = "Eric's Education">
    <title> BreadsAndRolls </title> <!--/*displays the title of a web page-->
    <link rel ="stylesheet" href ="Navagation.css">
    <link rel ="stylesheet" href ="Navagation.css">
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <style>  
      
        
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
            <li id="menu-item-1" class="menu-Items"><a href = "header.php" target ="_blank">Home</a></li>       
            <li id="menu-item-2" class="menu-Items"><a href = "">Search Recipes </a></li>    
            <li id="menu-item-3" class="menu-Items"><a href = "MainDishes.php" target="_blank">Main Dishes</a></li>      
            <li id="menu-item-4" class="menu-Items"><a href = "SoupAndStews.php" target ="_blank">Soups and Stews</a></li>      
            <li id="menu-item-6" class="menu-Items"><a href= "Snacks.php" target ="_blank">Snacks</a></li>
            <li id="menu-item-7" class="menu-Items"><a href= "Desserts.php" target ="_blank">Desserts</a></li>       
        </ul>
    </nav>
    
 
   
 </div>
    

 </header>


    <script>
    //opens and closes menu
    $('.menu-toggle').click(function() {
        //toggleClass adds and reverses the added height
        $('.site-nav').toggleClass('site-nav-open', 1000);
        $(this).toggleClass('open');
    
    
    
    })
    </script>  
 
    </body>

 
    </html>