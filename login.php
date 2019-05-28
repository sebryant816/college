<?session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
  <title>College Login page</title>  
  
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
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
 
 
    <!-- ***********************************
  College Login page
  *********************************** -->
 
</head>

<body>






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
              <li ><a href="courses.php">Courses</a></li>
              <li><a href="teachers.html">Teachers</a></li>
              <li><a href="events.html">News</a></li>
              <li><a href="register.php">Register</a></li>
              <li class="active"><a href="login.php">Login</a></li>

                </ul>
          
            </ul>
          </div>
        </div>
      </nav>
      
<!-- ******************************************
      End Navbar
******************************************* -->

<!--<section class="probootstrap-section probootstrap-section-colored">--->


<!-- ******************************************
    Login Form
******************************************* -->
<?          
  if (isset($_SESSION['failed'])) {
    echo $_SESSION['failed'];


    $_SESSION['failed'] = "";
  }
    ?> 

<form action="loginprocess.php" method="post">
 
  <div class="container" style="padding-left:150px;padding-top:80px;padding-bottom:60px; font-size:16px; font-family: 'Domine', serif;border:1px black solid; color:black;background-color:#ca99ff;">
      
    <h2 style="font-family:garamond;"><strong>Login into your student dashboard</strong></h2><br>
      
    <label for="email" style="padding-right:40px;"><b>Email:</b></label>
    <input type="email" placeholder="Enter Email" name="email" size="40" required><br><br>

    <label for="password" style="padding-right:14px;"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br><br>
    <br>

    <button type="submit" name="login" style="border-radius:50px;margin-left:100px;width:150px;border: 1px solid black; height:50px;">Press to Login</button><br><br>

    </label>

  </div>
</form>





    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>