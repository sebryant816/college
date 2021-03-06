<!DOCTYPE html>
<html lang="en">
  <head>
  <title>College Course select page</title>  
  
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uiCookies:Enlight &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- ***********************************
  College Course Select page
  *********************************** -->



 <!--<Connection Creditials>--->   




    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Jacksonville,Fl 32207, United States</span>
              <span><i class="icon-phone2"></i>+1-904-708-7890</span>
              <span><i class="icon-mail"></i>sebryant816.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
                <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <br>
            <a href="index.html" title="bryant" style="font-size:25px; padding-top:25px;">Bryant University</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="courses.php">Courses</a></li>
              <li><a href="teachers.html">Teachers</a></li>
              <li><a href="events.html">News</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="login.php">Login</a></li>
               
          
            </ul>
          </div>
        </div>
      </nav>
      
<!-- ******************************************
      End Navbar
******************************************* -->

      <section class="probootstrap-section probootstrap-section-colored"style="padding-bottom:1px;padding-top:60px;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 style="font-size:55px;font-family: 'Domine', serif;">Please select your classes below:</h1>
            </div>
          </div>
        </div>
      </section>

<!-- ******************************************
   List Courses to select
******************************************* -->


    <section class="probootstrap-section probootstrap-section-colored">
       <div class="row">
         <div class="col-md-12 text-left section-heading probootstrap-animate">
            <form action="selectprocess.php" method="POST">
            <?

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }


          $sql = "SELECT * FROM courses 
                  WHERE coursestatus = '0' 
                ORDER BY coursenumber ASC";

          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              ?>
              <table class="table-hover table-striped table-responsive" style="color:black;">

              <tr>
                    <th></th>
                    <th colspan-2>Course</th>
                    <th text-align:center>Course #</th>
                    <th style="text-align:center;">  Class Schedule</th>
                    <th>Cost</th>
                    <th style="text-align:center;">  #<br>Credits</th>
                    <th style="text-align:center;">Instructor</th>
                  
                    </tr>

                    <?
                  
                    while($row = mysqli_fetch_assoc($result)) {


                                    ?>
                                    
                    <tr style="border-top:1px solid black; background-color:#ca99ff;"> 
                    <td><input type="checkbox" class="custom-control-input form-check-input" id="customcheck<?=$row['courseid']?>" name="courseid[]" value="<?=$row['courseid']?>" style="margin-left:10px;padding-right:15px;"></td>
                    <td><?=$row['coursename']?></td>
                    <td><?=$row['coursenumber']?></td>
                    <td style="text-align:center;"><?=$row['daytime']?></td>
                    <td>$<?=$row['cost']?></td>
                    <td style="text-align:center;"><?=$row['numcredits']?></td>
                    <td style="text-align:center;"><?=$row['instructor']?></td>
                                    </tr>
                                    <tr>
                    <td colspan="12" style="padding-top:20px;padding-bottom:10px;padding-right:20px;padding-left:20px;"><strong>Course Description: </strong><?=$row['coursedesc']?></td>

                    </tr>

                    <?

                    }

                    } else {    
                        echo "0 results";
                    }

                    mysqli_close($conn);
        
                    ?>
                    </table>
             </div>
          </div>
          <div class="row" style="padding-bottom:1px;padding-top:20px;">
             <div class="col-md-12" style="border-top:2px solid black; border-bottom:2px solid black; text-align:center;background-color:#bf80ff;padding-bottom:20px;">
                    
                <br><br>
                <style>
                  input[type=checkbox] {
                    transform: scale(1.57);
                  }
                </style>

                <p> <input type="submit" name="newcourse" value="Press to register"  style="text:black; color:black;width:300px; height:70px; border-radius:50px;font-size:22px; background-color:#e6ccff; border:1.25px solid purple;"></p> 

               </form>
              </div>
            </div>
          </div>
          </section>
          <br><br>
          <section class="probootstrap-section">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                      <div class="image-bg">
                        <img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by uicookies.com">
                      </div>
                    </div>
                    <div class="text">
                      <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                      <h3>US History 101</h3>
                      <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                      <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">2,928 students enrolled</span></p>
                    </div>
                  </div>

                  <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                      <div class="image-bg">
                        <img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by uicookies.com">
                      </div>
                    </div>
                    <div class="text">
                      <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                      <h3>Basket Weaving</h3>
                      <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                      <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">7,202 students enrolled</span></p>
                    </div>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                      <div class="image-bg">
                        <img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by uicookies.com">
                      </div>
                    </div>
                    <div class="text">
                      <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                      <h3>Introduction to Web Development</h3>
                      <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                      <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">12,582 students enrolled</span></p>
                    </div>
                  </div>

                  <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                      <div class="image-bg">
                        <img src="img/img_sm_4.jpg" alt="Free Bootstrap Template by uicookies.com">
                      </div>
                    </div>
                    <div class="text">
                      <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                      <h3>Dog Training</h3>
                      <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                      <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">9,582 students enrolled</span></p>
                    </div>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                      <div class="image-bg">
                        <img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by uicookies.com">
                      </div>
                    </div>
                    <div class="text">
                      <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                      <h3>English Literature</h3>
                      <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                      <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">2,928 students enrolled</span></p>
                    </div>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                      <div class="image-bg">
                        <img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by uicookies.com">
                      </div>
                    </div>

                    <div class="text">
                      <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                      <h3>Mathmatics</h3>
                      <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                      <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">12,582 students enrolled</span></p>
                    </div>
                  </div>
                  <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                      <div class="image-bg">
                        <img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by uicookies.com">
                      </div>
                    </div>
                  </div>

          </section>

          
          
          <section class="probootstrap-section">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                  <h2>Meet Our Qualified Teachers</h2>
                  <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
                </div>
              </div>
              <!-- END row -->

              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                      <img src="img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                    </figure>
                    <div class="text">
                      <h3>Jason Storch</h3>
                      <p>US History</p>
                      <ul class="probootstrap-footer-social">
                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                        <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                      <img src="img/person_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                    </figure>
                    <div class="text">
                      <h3>Dr. Patricia Welton</h3>
                      <p>Chemistry</p>
                      <ul class="probootstrap-footer-social">
                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                        <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="clearfix visible-sm-block visible-xs-block"></div>
                <div class="col-md-3 col-sm-6">
                  <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                      <img src="img/person_6.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                    </figure>
                    <div class="text">
                      <h3>Linda Reyez</h3>
                      <p>Math Teacher</p>
                      <ul class="probootstrap-footer-social">
                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                        <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                      <img src="img/person_7.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                    </figure>
                    <div class="text">
                      <h3>Bob Dole</h3>
                      <p>Dog Training</p>
                      <ul class="probootstrap-footer-social">
                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                        <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section>
          
          <footer class="probootstrap-footer probootstrap-bg">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="probootstrap-footer-widget">
                    <h3>About The School</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate ab minus illum quaerat maxime inventore Ea consequatur consectetur hic provident dolor ab aliquam eveniet alias</p>
                    <h3>Social</h3>
                    <ul class="probootstrap-footer-social">
                      <li><a href="#"><i class="icon-twitter"></i></a></li>
                      <li><a href="#"><i class="icon-facebook"></i></a></li>
                      <li><a href="#"><i class="icon-github"></i></a></li>
                      <li><a href="#"><i class="icon-dribbble"></i></a></li>
                      <li><a href="#"><i class="icon-linkedin"></i></a></li>
                      <li><a href="#"><i class="icon-youtube"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-md-push-1">
                  <div class="probootstrap-footer-widget">
                    <h3>Links</h3>
                    <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="courses.php">Courses</a></li>
                      <li><a href="teachers.html">Teachers</a></li>
                      <li><a href="events.html">News</a></li>
                      <li><a href="register.html">Register</a></li>
                      <li><a href="login.php">Login</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="probootstrap-footer-widget">
                    <h3>Contact Info</h3>
                    <ul class="probootstrap-contact-info">
                      <li><i class="icon-location2"></i> <span>Jacksonville,Fl 32207, United States</span></li>
                      <li><i class="icon-mail"></i><span>sebryant816.com</span></li>
                      <li><i class="icon-phone2"></i><span>+1-904-708-7890</span></li>
                    </ul>
                  </div>
                </div>
              
              </div>
              <!-- END row -->
              
            

            </div>

            <div class="probootstrap-copyright">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 text-left">
                    <p>&copy; 2019 <a href="https://uicookies.com/">uiCookies:Enlight</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://uicookies.com/">uicookies.com</a></p>
                  </div>
                  <div class="col-md-4 probootstrap-back-to-top">
                    <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
                  </div>
                </div>
              </div>
            </div>
          </footer>

        </div>
        <!-- END wrapper -->
        

        <script src="js/scripts.min.js"></script>
        <script src="js/main.min.js"></script>
        <script src="js/custom.js"></script>

  </body>
</html>
