<?php
   sesion_start();
   
   $db = myspli_connect("localhost","root","","metal_cult");

   if (isset($_post['cree_btn'])){
     sesion_start();
     $email = mysql_real_escape_string($_post['email']);
     $pass = mysql_real_escape_string($_post['pass']);
     
     $pass =md5($pass);
     $spl ="SELECT * FROM user WHERE username='$username'AND pass='$pass'";
     $result = myspli_query ($db, $sql);
     
     
     if (myspli_num_rows($result) == 1 ) {
       
       $_SESSION['message'] = "vous etes connecter";
       $_SESSION['username'] =$username;

     }
     elese{
      $_SESSION['message'] = "username/password combinition incorecte ";
     }
   }
  



<!DOCTYPE html>
<html>
<!-- head-->
<head>
    <meta charset="utf-8">
    <title>Metal Cult</title>

    <!--css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="src/css/main.css">
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
    <a href="index.html" class="header-logo" >Metal cult </a>
 <nav class="header-menu">
  <div >
<$php
if ($username =! ""){
    <i class="far fa-user"></i>
    <a href="#"> <?php echo $_SESSION['username'];?></a>
  </div>
}
?>
    <a href="index.html"> Accueil </a>

    <a href="#ap" >A propos</a>
    <a href="srv.html" >Acticle </a>
    <a href="#contacte" >Contacte </a>
 

 </nav>
 </header>
</div>
<!--header-->

<!--banner-->
<div class="block">
 <div class="banner">
    <img src="src/img/bg.jpg" class="banner-img"> 
    <div class="banner-content">  
       
        <h1 class="title is-1">Bienvenu sur Metal Cult</h1>
        <h2 class="subtitle">Découvrer notre univer et crèe le votre</h2>
        <a href="cc.html">
        <button class="button is-line"    id="open_modal2">créer un nouveau compte</button>
        </a>
        <br>
        <br>
        <button class="button is-line" id="open_modal">connexion</button>
        
          
    </div>
 </div>
</div>
   <!--banner-->
   <!--model connection-->
   <div class="modal" id="modal_to_open">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">se connecter</p>
        <button class="delete" aria-label="close" id="close-modal"></button>
      </header>
      <section class="modal-card-body">
        <div class="field">
            <p class="control has-icons-left has-icons-right">
              <input class="input" type="email" placeholder="Email" name="email">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="password" placeholder="Password" name="pass">
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>
      </section>
      <footer class="modal-card-foot">
        <button class="button is-success" name="login-btn">login</button>
        
      </footer>
    </div>
  </div>
  <!--model connection-->
   

   <!--section : a propos-->
   <div class="block" id="ap">
       <div class="container about">
        <h2 class="subtitle heading-site" >A propos</h2>
           <div class="columns">
           <div class="column about-singel-element">
            <i class="fas fa-compact-disc icon"></i>
            <p>
                Heavy metal, genre de musique rock qui comprend un groupe de styles liés qui sont intenses, virtuoses et puissants. Poussé par les sons agressifs de la guitare électrique déformée, le heavy metal est sans doute le genre de musique rock le plus populaire sur le plan commercial.</p>
           </div>
           <div class="column about-singel-element">
            <i class="fas fa-book icon"></i>
            <p>
                La place du Heavy Metal dans la taxonomie de la musique est en tant que sous-catégorie du hard-rock, qui à son tour relève de la dénomination expansive du rock. Le Heavy Metal également appelé simplement métal est peut-être l’un des genres musicaux les plus complexes et les plus controversés.</p>
           </div>

           <div class="column about-singel-element">
            <i class="fas fa-clock icon"></i>   
            <p>Retrouvez toutes les news du monde de la musique Metal & Rock, ainsi que des reviews d'albums et des interviews de vos groupes Metal & Rock favoris.</p>
           </div>
        </div>

       </div>

   </div>
   <!--section : a propos-->

   <!--slider show-->
  <div class="slidershow middle">

    <div class="slides">
      <input type="radio" name="r" id="r1" checked>
      <input type="radio" name="r" id="r2">
      <input type="radio" name="r" id="r3">
      <input type="radio" name="r" id="r4">
      <input type="radio" name="r" id="r5">
      <div class="slide s1">
        <img src="src/img/1.jpg" alt="" class="banner-img">
      </div>
      <div class="slide">
        <img src="src/img/2.jpg" alt="" class="banner-img">
      </div>
      <div class="slide">
        <img src="src/img/3.jpg" alt="" class="banner-img">
      </div>
      <div class="slide">
        <img src="src/img/4.jpg" alt="" class="banner-img">
      </div>
      <div class="slide">
        <img src="src/img/5.jpg" alt="" class="banner-img">
      </div>
    </div>

    <div class="navigation">
      <label for="r1" class="bar"></label>
      <label for="r2" class="bar"></label>
      <label for="r3" class="bar"></label>
      <label for="r4" class="bar"></label>
      <label for="r5" class="bar"></label>
    </div>
  </div>

<!--slider show-->

<!--contact-->

<div>
    <footer class="footer">
        
        <div class="footer-contact">
            <h2 class="subtitle heading-site" id="contacte">contacte</h2>
            <div class="field">
                <label class="label">Username</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input is-success" type="text"  placeholder="Your Username" name="Username" id="username">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>
                  <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                  </span>
                </div>
                <p class="help is-success">This username is available</p>
              </div>
              
              <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input is-danger" type="email" placeholder="YourName@google.com" name="email" id="email">
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                  <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                  </span>
                </div>
                <p class="help is-danger">This email is invalid</p>
              </div>
            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                  <textarea class="textarea" placeholder="ecrire ici" name="message" id="message"></textarea>
                </div>
              </div>
              
              
              <div class="field is-grouped">
                <div class="field is-grouped is-grouped-centered">
  <p class="control">
    <a class="button is-primary" id="send_email">
      Submit
    </a>
  </p>
  <p class="control">
    <a class="button is-light">
      Cancel
    </a>
  </p>
</div>
              </div>
       
        </div>
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
<!--contact-->

<!--banner-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="src/js/main.js"></script>
</body>
<!--body-->



</html>