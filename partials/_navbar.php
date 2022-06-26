<?php
$loggedin = false;

session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
     $loggedin = true;
}
?>


<div class="container justify-content-between" style="max-height: 4.5rem; align-items: center;">
     <!-- logo -->
     <a class="site-logo text-white font_1-5rem align-items-center" id="navLogo" href="index.php"
          onmouseover="navLogoHover()" onmouseout="navLogoHoverOver()">
          <!-- <img src="img/logo.png" alt=""> -->
          AACH™ INC
     </a>
     <!-- <div class="user-panel">
        <a href="#">Login</a> / <a href="#">Register</a>
    </div> -->
     <!-- responsive -->
     <div class="nav-switch">
          <i class="fa fa-bars"></i>
     </div>
     <!-- site menu -->
     <nav class="main-menu">
          <ul style="width: 160%; max-height: 24px;" class="align-items-center">
               <li><a href="" class="navButtons" id="indexNav">Home</a></li>
               <li><a href="games.php" class="navButtons" id="gamesNav">Games</a></li>
               <li><a href="contact.php" class="navButtons" id="contactNav">Contact</a></li>


               <!-- USER ACCOUNT SECTION -->
               <!-- <li class="user_account_nav">
                    <a href="userLoggedIn/userLoggedIn.php" id="user_account_nav_a">
                         <img alt="" id="userAccountImg" height="35px" width="35px">
                         <span>Your Account</span>
                    </a>
               </li> -->


               <li class="user_account_nav_without_settings align-items-center justify-content-center">
                    <span style="color: gray;">Welcome</span> "<?php echo $_SESSION["username"]; ?>"
               </li>


               <!-- CODE FOR LOGIN REGISTER -->
               <?php

               $user_account_section_with_settings = '<li class="user_account_nav">
               <a href="userLoggedIn/userLoggedIn.php" id="user_account_nav_a">
                    <img alt="" id="userAccountImg" height="35px" width="35px">
                    <span>Your Account</span>
               </a>
               </li>';

               $user_account_section_without_settings = '';

               $login_register_section = '<li class="user_login_and_register">
               <span>
                    <a href="login.php" class="user_login_and_register_button">Login</a>
               </span>
               <span> / </span>
               <span>
                    <a href="register.php" class="user_login_and_register_button">Register</a>
               </span>
               </li>';

               // if ($loggedin) {
               //      echo ($user_account_section);
               // } else {
               //      echo ($login_register_section);
               // }
               ?>

               <!-- LOGIN / REGISTER SECTION -->
               <!-- <li class="user_login_and_register">
                    <span>
                         <a href="login.php" class="user_login_and_register_button">Login</a>
                    </span>
                    <span> / </span>
                    <span>
                         <a href="register.php" class="user_login_and_register_button">Register</a>
                    </span>
               </li> -->

          </ul>
     </nav>
</div>


<script>
function navPATHS() {
     let navLogo = document.getElementById('navLogo');
     let indexNav = document.getElementById('indexNav');
     let gamesNav = document.getElementById('gamesNav');
     let contactNav = document.getElementById('contactNav');
     let user_account_nav_a = document.getElementById('user_account_nav_a');
     let userAccountImg = document.getElementById('userAccountImg');

     let pageURL = window.location.href;
     pageURL = String(pageURL);

     let navLogoPATH = "";
     let indexNavPATH = "";
     let gamesNavPATH = "";
     let contactNavPATH = "";

     let user_account_nav_a_PATH = "";
     let imgPathUserLogo = "";


     if (pageURL.includes("/userLoggedIn/userLoggedIn.php")) {
          navLogoPATH = "../index.php";
          navLogo.href = navLogoPATH;

          indexNavPATH = "../index.php";
          indexNav.href = indexNavPATH;

          gamesNavPATH = "../games.php";
          gamesNav.href = gamesNavPATH;

          contactNavPATH = "../contact.php";
          contactNav.href = contactNavPATH;

          user_account_nav_a_PATH = "userLoggedIn.php";
          user_account_nav_a.href = user_account_nav_a_PATH;

          imgPathUserLogo = "../img/CUSTOM/default_user_icon_face_for_darkMode.png";
          userAccountImg.src = imgPathUserLogo;
     } else {
          navLogoPATH = "index.php";
          navLogo.href = navLogoPATH;

          indexNavPATH = "index.php";
          indexNav.href = indexNavPATH;

          gamesNavPATH = "games.php";
          gamesNav.href = gamesNavPATH;

          contactNavPATH = "contact.php";
          contactNav.href = contactNavPATH;

          user_account_nav_a_PATH = "userLoggedIn/userLoggedIn.php";
          user_account_nav_a.href = user_account_nav_a_PATH;

          imgPathUserLogo = "img/CUSTOM/default_user_icon_face_for_darkMode.png";
          userAccountImg.src = imgPathUserLogo;
     }
}

navPATHS();
</script>