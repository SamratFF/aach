<?php

$data_recorded = false;
$error_form_filling = false;


require "partials/_dbconnection.php";             // Establishing the Connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $userKaName = $_POST['userKaName'];
     $userKaUsername = $_POST['userKaUsername'];
     $userKaAge = $_POST['userKaAge'];
     $userKaEmail = $_POST['userKaEmail'];
     $userKaPassword = $_POST['userKaPassword'];
     $userKaCountry = $_POST['userKaCountry'];
     $userKaPhone = $_POST['userKaPhone'];

     $sql_username_check = "SELECT * FROM `$db_table_name` WHERE username='$userKaUsername'";
     $result_username_check = mysqli_query($con, $sql_username_check);

     if (!(mysqli_num_rows($result_username_check)) && !(strpos($userKaUsername, ' ')) && !(($userKaAge < 5) || ($userKaAge > 99))) {
          $password_hash = password_hash($userKaPassword, PASSWORD_DEFAULT);

          // Adding the data to the database
          $sql_register = "INSERT INTO `$db_table_name` (`name`, `username`, `age`, `email`, `password`, `country`, `phone_no`) VALUES ('$userKaName', '$userKaUsername', '$userKaAge', '$userKaEmail', '$password_hash', '$userKaCountry', '$userKaPhone');";
          $result_register = mysqli_query($con, $sql_register);

          $data_recorded = true;
     } elseif ($result_username_check) {
          echo ("<script type='text/JavaScript'>
          console.log('Username exists');
          </script>");
     } elseif (str_contains($userKaUsername, ' ')) {
          echo ("<script type='text/JavaScript'>
          console.log('Username spaces');
          </script>");
     } elseif (($userKaAge < 5) || ($userKaAge > 99)) {
          echo ("<script type='text/JavaScript'>
          console.log('Age problem');
          </script>");
     } else {
          $error_form_filling = true;
     }
}

?>





<!doctype html>
<html lang="zxx">

<head>
     <title>AACH™ INC - REGISTER</title>
     <meta charset="UTF-8">
     <meta name="description" content="AACH™ INC">
     <meta name="keywords" content="warrior, game, creative, html">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">



     <!-- Stylesheets -->
     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="css/font-awesome.min.css" />
     <link rel="stylesheet" href="css/owl.carousel.css" />
     <link rel="stylesheet" href="css/style.css" />
     <link rel="stylesheet" href="css/animate.css" />

     <!-- Custom CSS -->
     <link rel="stylesheet" href="css/custom.css" />
     <link rel="stylesheet" href="css/register.css">



</head>

<body class="" style="background: #313333;">


     <!-- Page Preloder -->
     <div id="preloder">
          <div class="loader"></div>
     </div>



     <header class="header-section" style="max-height: 4.5rem;">
          <?php
          include "partials/_navbar.php";
          ?>
     </header>
     <main>
          <?php
          if ($data_recorded) {
               echo '<div class="alert alert-success alert-dismissible fade show p-3" style="margin-top: -2px;" role="alert">
               <strong>Success!</strong> Your account is created successfully and you can <a href="login.php">Login</a>.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>';
          } elseif ($error_form_filling) {
               echo '<div class="alert alert-danger alert-dismissible fade show p-3" style="margin-top: -2px;" role="alert">
               <strong>Error!</strong> Please fill the form correctly.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>';
          }
          ?>
          <section>
               <div class="parentRegisterSection" style="margin: 2rem;">
                    <div class="RegisterSection">
                         <div class="containerArea">
                              <h2>Register to AACH™ INC</h2>
                              <div class="formArea w-75 mx-auto">
                                   <form action="register.php" method="POST">

                                        <div class="inputPlaces">
                                             <label>Name*</label>
                                             <input type="text" name="userKaName" class="userInput"
                                                  placeholder="Eg: Mike Bieber" id="ID_inputPlace_name" required>

                                             <span class="errorInput" id="errorInputID_name"></span>
                                        </div>

                                        <div class="inputPlaces">
                                             <label>Username*</label>
                                             <input type="text" name="userKaUsername" class="userInput"
                                                  placeholder="Eg: mike34_bieber" maxlength="15"
                                                  id="ID_inputPlace_username" required>

                                             <span class="errorInput" id="errorInputID_username">Username should not
                                                  contain
                                                  spaces.</span>
                                             <span class="errorInput" id="errorInputID_username2">The Username must be
                                                  of atleast
                                                  5 digits</span>
                                        </div>

                                        <div class="inputPlaces">
                                             <label>Age*</label>
                                             <input type="number" name="userKaAge" class="userInput"
                                                  placeholder="Eg: 34" maxlength="3" id="ID_inputPlace_age" required>

                                             <span class="errorInput" id="errorInputID_age">You must be more than 5
                                                  Years
                                                  old and less than 100 Years old to register</span>
                                        </div>


                                        <div class="inputPlaces">
                                             <label>Email</label>
                                             <input type="email" name="userKaEmail" class="userInput"
                                                  placeholder="Eg: mike@example.com" id="ID_inputPlace_email">

                                             <span class="errorInput" id="errorInputID_email"></span>
                                        </div>

                                        <div class="inputPlaces">
                                             <label>Password*</label>
                                             <input type="text" name="userKaPassword" class="userInput"
                                                  placeholder="Eg: bieber_mike23" id="ID_inputPlace_password" required>

                                             <span class="errorInput" id="errorInputID_password"></span>
                                             <span class="errorInput" id="errorInputID_password2">The Password must be
                                                  of atleast
                                                  5 characters</span>
                                        </div>

                                        <div class="inputPlaces">
                                             <label>In which Country do you live?</label>
                                             <input type="text" name="userKaCountry" class="userInput"
                                                  placeholder="Eg: India" id="ID_inputPlace_country">

                                             <span class="errorInput" id="errorInputID_country"></span>
                                        </div>

                                        <div class="inputPlaces">
                                             <label>Phone No.</label>
                                             <input type="number" name="userKaPhone" class="userInput"
                                                  placeholder="(Optional)   Eg: 7714177714" maxlength="10"
                                                  id="ID_inputPlace_phone">

                                             <span class="errorInput" id="errorInputID_phone">The number must be of 10
                                                  digits</span>
                                        </div>

                                        <div class="inputPlaces">
                                             <input type="submit" value="Submit" class="submitBTN" id="subBTN">
                                             <input type="reset" value="Reset" class="resetBTN">
                                        </div>


                                   </form>
                              </div>

                         </div>
                    </div>
               </div>
          </section>
     </main>
     <footer class="footer-section" style="margin-top: 5rem;">
          <?php
          include "partials/_footer.php";
          ?>
     </footer>


     <!--====== Javascripts & Jquery ======-->
     <script src="js/jquery-3.2.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.marquee.min.js"></script>
     <script src="js/main.js"></script>


     <!-- Custom JS -->
     <script src="js/commentJs.js"></script>
     <script src="js/register.js"></script>
     <script src="js/custom.js"></script>


</body>

</html>