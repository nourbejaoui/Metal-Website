<?php
   sesion_start();
   
   $db = myspli_connect("localhost","root","","metal_cult");

   if (isset($_post['cree_btn'])){
     sesion_start();
     $username = mysql_real_escape_string($_post['username']);
     $nom = mysql_real_escape_string($_post['nom']);
     $prenom = mysql_real_escape_string($_post['prenom']);
     $email = mysql_real_escape_string($_post['email']);
     $pass = mysql_real_escape_string($_post['pass']);
     $verif = mysql_real_escape_string($_post['verif']);
     if ($pass = $verif) {
       $pass =md5 ($pass);
       $sql ="insert into" user(username,nom,prenom,email,pass)values($username,$nom,$prenom,$email,$pass);
       mysqli_query ($db, $sql);
       $_SESSION['message'] = "vous etes connecter";
       $_SESSION['username'] =$username;

     }
     elese{
      $_SESSION['message'] = "verifier votre mot de passe ";
     }
   }
  
?>




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
    <meta name="keywords" content="metal, rock, music, "

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
  <$php
  if ($username =! ""){
      <i class="far fa-user"></i>
      <a href="#"> <?php echo $_SESSION['username'];?></a>
    </div>
  }
  ?>
    <a href="index.html"></a> accueil </a>
    <a href="index.html" >A propos</a>
    <a href="#" >article </a>
    <a href="index.html" >contacte </a>
 

 </nav>
 </header>
</div>
<!--header-->


 <!--banner-->
 <div class="block">
    <div class="banner" >
       
       <div class="banner-content" action="cc.php">  
          
           <h1 class="title is-1"> Créer votre compte</h1>
           <div class="field">
            <label class="label">nom</label>
            <div class="control">
              <input class="input" type="text" placeholder="******" name="nom">
            </div>
          </div>
          <div class="field">
            <label class="label">prenom</label>
            <div class="control">
              <input class="input" type="text" placeholder="******" name="prenom">
            </div>
          </div>
          <div class="field">
            <label class="label">User Name</label>
            <div class="control">
              <input class="input" type="text" placeholder="******" name="username">
            </div>
          </div>
          
          <div class="field">
            <label class="label">Email</label>
            <div class="control">
              <input class="input" type="email" placeholder="*************@gmail.com" name="email">
            </div>
          </div>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="password" placeholder="Password" name="pass">
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="password" placeholder="confirmer" name="verif">
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control">
              <button class="button is-success" name="cree_btn">
                Créer
              </button>
            </p>
          </div>
           
             
       </div>
    </div>
   </div>
 
 <!--banner-->

      
        
     
  <!--model creation dune compte-->

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
<!--banner-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="src/js/main.js"></script>
</body>
<!--body-->



</html>