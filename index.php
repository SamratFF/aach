<?php
$login = false;

// session_start();
// if (isset($_SESSION['loggedin'])) {
//      $login = true;
// } else {
//      $login = false;
// }
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
     <title>AACH™ INC</title>
     <meta charset="UTF-8">
     <meta name="description" content="AACH™ INC">
     <meta name="keywords" content="warrior, game, creative, html">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Favicon -->
     <!-- <link href="img/favicon.ico" rel="shortcut icon" /> -->

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
     <link rel="stylesheet" href="css/commentStyle.css" />

</head>

<body class="" style="background: #313333;">
     <!-- Page Preloder -->
     <div id="preloder">
          <div class="loader"></div>
     </div>

     <!-- Header section -->
     <header class="header-section" style="max-height: 4.5rem;">
          <?php
          include "partials/_navbar.php";
          ?>
     </header>
     <!-- Header section end -->


     <?php
     // if ($login) {
     //      echo '<div class="alert alert-success alert-dismissible fade show p-3" style="margin-top: -2px; margin-bottom: 0;" role="alert">
     //           <strong>Success!</strong> You are successfully logged in.
     //           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     //             <span aria-hidden="true">&times;</span>
     //           </button>
     //         </div>';
     // }
     ?>



     <!-- Hero section -->
     <section class="hero-section">
          <div class="hero-slider owl-carousel">
               <div class="hs-item set-bg" data-setbg="static/img/landing_page1.png">
                    <div class="hs-text">
                         <div class="container">
                              <h2>The Best <span>Games</span> Out There</h2>
                              <b>
                                   <p>Hey everyone we are the aach developer and we had just started this team in which
                                        we
                                        create<br> different games and software and many more things,and our main moto
                                        is to
                                        change our <br>company in to multinational world leading company in the world,so
                                        please
                                        support us by share and<br> downloading our game and get involved in our discord
                                        server
                                        and insta and chat and comment if like our team,so thank you.</p>
                              </b>
                              <a href="#" class="site-btn">About Us</a>
                         </div>
                    </div>
               </div>
               <div class="hs-item set-bg" data-setbg="static/img/landing_page2.png">
                    <div class="hs-text">
                         <div class="container">
                              <h2>The Best <span>Games</span> Out There</h2>
                              <b>
                                   <p>Hey everyone we are the aach developer and we had just started this team in which
                                        we
                                        create<br> different games and software and many more things,and our main moto
                                        is to
                                        change our <br>company in to multinational world leading company in the world,so
                                        please
                                        support us by share and<br> downloading our game and get involved in our discord
                                        server
                                        and insta and chat and comment if like our team,so thank you.</p>
                              </b>
                              <a href="#" class="site-btn">About Us</a>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- Hero section end -->


     <!-- Latest news section -->
     <div class="latest-news-section">
          <div class="ln-title">Latest News</div>
          <div class="news-ticker">
               <div class="news-ticker-contant">
                    <div class="nt-item"><span class="new">new</span>Lorem ipsum dolor sit amet, consectetur adipiscing
                         elit. </div>
                    <div class="nt-item"><span class="strategy">strategy</span>Isum dolor sit amet, consectetur
                         adipiscing
                         elit. </div>
                    <div class="nt-item"><span class="racing">racing</span>Isum dolor sit amet, consectetur adipiscing
                         elit.
                    </div>
               </div>
          </div>
     </div>
     <!-- Latest news section end -->



     <!-- Recent game section  -->
     <section class="recent-game-section spad set-bg" data-setbg="img/recent-game-bg.png">
          <div class="container">
               <div class="section-title">
                    <div class="cata new">new</div>
                    <h2>Recent Games</h2>
               </div>
               <div class="row">
                    <div class="col-lg-4 col-md-6">
                         <div class="recent-game-item">
                              <div class="rgi-thumb set-bg" data-setbg="img/recent-game/1.jpg">
                                   <div class="cata new">new</div>
                              </div>
                              <div class="rgi-content">
                                   <h5>Suspendisse ut justo tem por, rutrum</h5>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet,
                                        consectetur
                                        elit. </p>
                                   <a href="#" class="comment">3 Comments</a>
                                   <div class="rgi-extra">
                                        <div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
                                        <div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                         <div class="recent-game-item">
                              <div class="rgi-thumb set-bg" data-setbg="img/recent-game/2.jpg">
                                   <div class="cata racing">racing</div>
                              </div>
                              <div class="rgi-content">
                                   <h5>Susce pulvinar metus nulla, vel facilisis sem </h5>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet,
                                        consectetur
                                        elit. </p>
                                   <a href="#" class="comment">3 Comments</a>
                                   <div class="rgi-extra">
                                        <div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
                                        <div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                         <div class="recent-game-item">
                              <div class="rgi-thumb set-bg" data-setbg="img/recent-game/3.jpg">
                                   <div class="cata adventure">Adventure</div>
                              </div>
                              <div class="rgi-content">
                                   <h5>Suspendisse ut justo tem por, rutrum</h5>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet,
                                        consectetur
                                        elit. </p>
                                   <a href="#" class="comment">3 Comments</a>
                                   <div class="rgi-extra">
                                        <div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
                                        <div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- Recent game section end -->


     <!-- Footer top section -->
     <section class="footerTopSection" style="margin-bottom: 5rem;">


          <!-- Image -->
          <!-- Image ends -->

          <!-- Latest Posts -->
          <!-- Latest post ends here -->

          <!-- Comments -->


          <!-- Add Comment -->
          <div class="commentSection">
               <div class="container1">
                    <h2>Leave us a Comment</h2>
                    <form action="index.php" method="POST">
                         <textarea placeholder="Add your comment" name="commentInputArea" id="commentInput"
                              class="commentInput"></textarea>
                         <div class="btn1">
                              <input type="submit" value="Comment" class="commentSubmit">
                              <button id="clear">Cancel</button>
                         </div>
                    </form>
               </div>
               <!-- Add Comment Ends Here -->
          </div>

          <!-- Show Recent Comments -->
          <div class="col-lg-4 col-md-6 mx-auto CommentRecent" style="margin-top: 5rem;">
               <div class="footer-widget">
                    <h4 class="fw-title">Top Comments</h4>
                    <div class="top-comment">
                         <div class="tc-item">
                              <div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
                              <div class="tc-content">
                                   <p><a href="#">James Smith</a> <span>on </span><span class="tc-date">June 21,
                                             2018</span>
                                        <br>
                                        Lorem ipsum dolor sit amet, co
                                   </p>

                              </div>
                         </div>
                         <div class="tc-item">
                              <div class="tc-thumb set-bg" data-setbg="img/authors/2.jpg"></div>
                              <div class="tc-content">
                                   <p><a href="#">James Smith</a> <span>on </span><span class="tc-date">June 21,
                                             2018</span>
                                        <br>
                                        Lorem ipsum dolor sit amet, co
                                   </p>

                              </div>
                         </div>
                         <div class="tc-item">
                              <div class="tc-thumb set-bg" data-setbg="img/authors/3.jpg"></div>
                              <div class="tc-content">
                                   <p><a href="#">James Smith</a> <span>on </span><span class="tc-date">June 21,
                                             2018</span>
                                        <br>
                                        Lorem ipsum dolor sit amet, co
                                   </p>

                              </div>
                         </div>
                         <div class="tc-item">
                              <div class="tc-thumb set-bg" data-setbg="img/authors/4.jpg"></div>
                              <div class="tc-content">
                                   <p><a href="#">James Smith</a> <span>on </span><span class="tc-date">June 21,
                                             2018</span>
                                        <br>
                                        Lorem ipsum dolor sit amet, co
                                   </p>

                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- Show Recent Comments Ends Here -->

          <!-- Comments end here -->

     </section>
     <!-- Footer top section end -->




     <!-- Footer section -->
     <footer class="footer-section">
          <?php
          include "partials/_footer.php";
          ?>
     </footer>
     <!-- Footer section end -->


     <!--====== Javascripts & Jquery ======-->
     <script src="js/jquery-3.2.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.marquee.min.js"></script>
     <script src="js/main.js"></script>


     <!-- Ionicons framework Java Script (For logos of social media) -->
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

     <!-- Custom JS -->
     <script src="js/commentJs.js"></script>
     <script src="js/custom.js"></script>


</body>

</html>