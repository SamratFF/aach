<?php
$login = false;

$invalid = false;

include "partials/_dbconnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $userKaUsername = $_POST["userKaUsername"];
     $userKaPassword = $_POST["userKaPassword"];

     $sql_login = "SELECT * FROM $db_table_name WHERE username = '$userKaUsername'";
     $result_login = mysqli_query($con, $sql_login);

     $num = mysqli_num_rows($result_login);

     if ($num == 1) {
          while ($row = mysqli_fetch_assoc($result_login)) {
               if (password_verify($userKaPassword, $row['password'])) {
                    $login = true;
                    session_start();
                    $_SESSION["loggedin"] = true;
                    $_SESSION["username"] = $userKaUsername;
                    // header("location: welcome.php");
                    header("location: index.php");
               } else {
                    $invalid = true;
               }
          }
     } else {
          $invalid = true;
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

<body class="" style="background: #313333; height: 100%;">


     <!-- Page Preloder -->
     <div id="preloder">
          <div class="loader"></div>
     </div>



     <header class="header-section" style="margin-bottom: 5rem; max-height: 4.5rem;">
          <?php
          include "partials/_navbar.php";
          ?>
     </header>
     <main>
          <?php
          if ($login) {
               echo '<div class="alert alert-success alert-dismissible fade show p-3" style="margin-top: -2px;" role="alert">
               <strong>Success!</strong> You are successfully logged in.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>';
          } elseif ($invalid) {
               echo '<div class="alert alert-danger alert-dismissible fade show p-3" style="margin-top: -2px;" role="alert">
               <strong>Failed!</strong> Invalid Credentials, Please refill the form.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>';
          }
          ?>

          <section>
               <div class="parentRegisterSection">
                    <div class="RegisterSection text-white">
                         <div class="containerArea">
                              <h2>Welcome back to AACH™ INC</h2>
                              <div class="formArea w-75 mx-auto">
                                   <form action="login.php" method="POST">

                                        <div class="inputPlaces">
                                             <label>Username*</label>
                                             <input type="text" name="userKaUsername" class="userInput"
                                                  placeholder="Eg: mike34_bieber" required>
                                        </div>

                                        <div class="inputPlaces">
                                             <label>Password*</label>
                                             <input type="password" name="userKaPassword" class="userInput"
                                                  placeholder="Eg: bieber_mike23" required>
                                        </div>

                                        <div class="inputPlaces">
                                             <input type="submit" value="Submit" class="submitBTN">
                                             <input type="reset" value="Reset" class="resetBTN">
                                        </div>


                                   </form>
                              </div>

                         </div>
                    </div>
               </div>
          </section>
     </main>
     <footer class="footer-section" style="margin-top: 10rem;">
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