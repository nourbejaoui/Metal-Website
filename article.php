<!DOCTYPE html>
<html>
<!-- head-->
<head>
    <meta charset="utf-8">
    <title>Metal Cult</title>

    <!--css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="src/css/cc.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!--css--> 


    <!--font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!--font -->
  <!--meta-->
    <meta name="discription" content="Discover new Metal Music at the original Metal Cult. The source for metal news, metal music"> 
    <meta name="keywords" content="metal, rock, music, ">
    <!--meta-->
   

   

</head>

<!-- head-->

<!--body-->
<body>
    
<!--header-->
<div class="block">
 <header class="header">
    <a href="#" class="header-logo" >Metal cult </a>
 <nav class="header-menu">
   <$php
   if ($username =! ""){
       <i class="far fa-user"></i>
       <a href="#"> <?php echo $_SESSION['username'];?></a>
     </div>
   }
   ?>
    <a href="#"> accueil </a>
    <a href="#ap" >A propos</a>
    <a href="#" >Article </a>
    <a href="#contacte" >contacte </a>
 

 </nav>
 </header>
</div>
<!--header-->


 <!--banner-->
 <div class="block">
    <div class="banner">
       
       <div class="banner-content">  
          
           <h1 class="title is-1"> MYRATH </h1>
           <h2 class="subtitle">EN TUNISIE ET EN AFRIQUE, ON PEUT AUSSI FAIRE DU BON MÉTAL.</h2>
           
             
       </div>
    </div>
   </div>
 
 <!--banner-->

      
        
     
 <!--footer-->

 <div>
   <footer class="footer">
     <div class="footer-information">
        <p>TN ,bizerte, manzel bourguiba 7050</p>
         <p></p>
          <ul>
             <li>
               <a href="a">
                  <i class="fab fa-facebook-square"></i>

                </a>
             </li>
             <li>
              <a href="a">
                 <i class="fab fa-instagram-square"></i>

               </a>
              </li>
              <li>
              <a href="a">
                 <i class="fab fa-discord"></i>

              </a>
              </li>
           </ul>

       </div>
   </footer>
</div>
<!--footer-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="src/js/main.js"></script>
</body>
<!--body-->



</html>