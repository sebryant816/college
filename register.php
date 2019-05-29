<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>College Course register page</title>  
  
  
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
  College Registration page
  *********************************** -->




 <!--<Connection Creditials>--->   



  <div class="probootstrap-search" id="probootstrap-search">
    <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
    <form action="#">
      <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
    </form>
  </div>
  
    <!-- Fixed navbar -->

   <div class="probootstrap-page-wrapper">
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
              <li class="active"><a href="register.php">Register</a></li>
              <li><a href="login.php">Login</a></li>
             </ul>
         </div>
      </div>
    </nav>
      
<!-- ******************************************
      End Navbar
******************************************* -->


<!-- column 1 of registration form -->
 

    <section class="probootstrap-section probootstrap-section-colored" style="padding-bottom:1px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 section-heading probootstrap-animate">
            <h1 style="font-size:66px;font-family: 'Domine', serif;"><strong>Student Registration</strong></h1>
          </div>
        </div>
      </div>
    </section>

<!-- ******************************************
Registration Form
******************************************* -->
<section>

  <!---form for registration--->
    

  <?if (isset($_SESSION['nomatch'])) {
            echo $_SESSION['nomatch'];
            $_SESSION['nomatch'] = "";
          }
            ?> 

  <div class="container-fluid" style="font-family: 'Domine', serif;color:black;background-color:#d7b3ff; border: 1px solid black;">
    <div class="form-group">
      <div class="col-md-6">
        <form action="registerprocess.php" method="POST">
            <br>
            <br>
            
            <strong>First Name:</strong> required <br>
            <input type="text" name="firstname" <? //if(isset($_SESSION['firstname'])) { echo 'value="'.$_SESSION['firstname'].'"'; } ?> size="25" required><br><br>

            <strong>Last Name:</strong> required<br>
            <input type="text" name="lastname" <? //if(isset($_SESSION['lastname'])) { echo 'value="'.$_SESSION['lastname'].'"'; } ?> size="25" required><br><br>
            
            <strong> Address:</strong>required<br>
              <input type="text" name="address" <? //if(isset($_SESSION['address'])) { echo 'value="'.$_SESSION['address'].'"'; } ?>   size="25" required ><br> <br>

            <strong>City:</strong>required<br>
            <input type="text" name="city" <? //if(isset($_SESSION['city'])) { echo 'value="'.$_SESSION['city'].'"'; } ?>  required><br> <br>

            <strong>State:</strong>required<br>
            <select name="state" <? //if(isset($_SESSION['state'])) { echo 'value="'.$_SESSION['state'].'"'; } ?>  required>
              <?php
              $states = array('Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','West Virginia','Wisconsin','Wyoming');
              
              foreach($states as $state) {
              echo '<option value="'.$state.'">'.$state.'</option>';
              }
              ?>
              </select>
              
              <br> <br>

              <strong>Zip:</strong>required<br> 
              <input type="text" name="zip" <? //if(isset($_SESSION['zip'])) { echo 'value="'.$_SESSION['zip'].'"'; } ?>  size="10" required><br><br> 

              <strong>Phone Number:</strong>required<br>
              <input type="tel" id="phone" name="phone" <? //if(isset($_SESSION['phone'])) { echo 'value="'.$_SESSION['phone'].'"'; } ?> >
              <span class="note">Format: 123-456-7890</span><br> <br>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6" >

          <!-- Registration column 2-->
      
            <br>
            <strong>Email:</strong>required<br>
            <input type="email" name="email" <? //if(isset($_SESSION['email'])) { echo 'value="'.$_SESSION['email'].'"'; } ?>  size="35" required><br><br>

            <strong>Gender:</strong>required<br>
            <select name="gender" <? //if(isset($_SESSION['gender'])) { echo 'value="'.$_SESSION['gender'].'"'; } ?>  required>
            
              <?
              $genders =
              array('Male','Female','Other');
              foreach($genders as $gender){
              echo '<option value="'.$gender.'">'.$gender.'</option><br>';
              }
                ?>   
            
              </select>
              
              <br><br>
              
              <p><strong>Notes and Special Needs:</p></strong>
              <textarea name='notes' <? //if(isset($_SESSION['notes'])) { echo 'value="'.$_SESSION['notes'].'"'; } ?> rows="3" cols= "25"></textarea><br> <br>
              
              <strong>Upload Your Student Photo:</strong>  required<br><br>
              <input type="file" name="image" value="" required><br>

          
            <strong>Create password:</strong>required<br>
            <input type="text" name="password" size="15" required><br><br>

            <strong>Confirm password:</strong> required<br>
            <input type="text" name="confirmpassword" size="15"  required><br><br>
        </div>
      </div>
    </div>

            

            
            <div class="container-fluid">
              <div class="row">
               <div class="col-md-12" style="color:black;border:1px solid black; text-align:center;background-color:#bf80ff;padding-bottom:20px;">
                  
                  <br><br>
                  <style>
                    input[type=checkbox] {
                    transform: scale(1.80);
                    }
                  </style>     
                                               
                 <div  style="font-size:20px;font-family: 'Domine', serif;"> <strong>Check box to agree to the terms and conditions of Bryant University:</strong> 
                  <input type="checkbox" name="agree" value="1" style="margin-left:20px;" required><br><br> <br>

                  <p><input type="submit" name="newrecord" value="Press to register and select your courses"  style="text:black;font-family: 'Domine', serif; box-shadow: #6E7849 0px 0px 10px; color:black;width:500px; height:80px; border-radius:50px;font-size:22px; background-color:#e6ccff; border:1.25px solid purple ;"></p> 
                  </div>
                </form>
           
           </div>
        </div>  
      </section>

        <br><br>

<!-- ******************************************
     Template code begins
******************************************* -->


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
                <p>&copy; 2019 <a href="#"></a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://uicookies.com/">uicookies.com</a></p>
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
