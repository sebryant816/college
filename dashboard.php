<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>College Dashboard page</title>  
  
  
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

      <style>
      
      td {
        
        background-color:#f1e6ff;

         }
            
      body {

        font-family: 'Domine', serif;

      }

      </style>
      
</head>
<body>



 <!--<Connection Creditials>--->   

 <?
    $servername = "localhost";
    $username = "jaxcode83";
    $password = "Ducks0up";
    $dbname = "jaxcode83";
    ?>


<!-- ***********************************
  College Dashboard page
*********************************** -->




     <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
     </div>
     <h1></h1>
     
     
    
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
            <a href="index.html" title="bryant" style="font-size:28px; padding-top:25px;">Bryant University</a>
          </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="teachers.html">Teachers</a></li>
            <li><a href="events.html">News</a></li>
            <li><a href="register.php">Register</a></li>
             <li class="nav-item"><a class="nav-link"  href="logoutp.php">Log Out</a></li>

           </ul>
        
           </ul>
         </div>
         </div>
       </nav>
      
<!-- ******************************************
      End Navbar
******************************************* -->

   <section class="probootstrap-section probootstrap-section-colored" style="border:1.5px solid #4d0099;padding-bottom:1px;">
     <div class="container">
       <div class="row">
         <div class="col-md-12 text-left section-heading probootstrap-animate">
         <br>
           <h1 style="font-size:76px;font-family: 'Domine', serif;"><strong>Welcome <?=$_SESSION['fullname']?>!</strong></h1>
            <p><?=$_SESSION['coursename']?></p>
           <h1><?=$_SESSION['courseid']?></h1>
         </div>
       </div>
     </div>
   </section>

<!-- ******************************************
List student values
******************************************* 

******************************************
Dashboard Column one
******************************************* -->
         
<div class="container-fluid" style="font-size:19px;font-family:'Domine', serif;color:black;background-color:#d7b3ff; border-top: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;">
    <div class="row">
       <div class="col-md-6" style="padding-left:85px;">

       <br>
          <img style="border:4px ridge black; width:200px;" src="images/<?=$_SESSION['image']?>" ><br>
          <br><br>

          <p>Name: <strong><?=$_SESSION['fullname']?></strong></p>
          <p> Address:<strong> <?=$_SESSION['address']?></strong></p>
          <p>City: <strong><?=$_SESSION['city']?></strong></p>
          <p>State:<strong><?=$_SESSION['state']?></strong></p>
          <p>ZipCode:<strong> <?=$_SESSION['zip']?></strong></p>
        </div>
   <!-- ******************************************
Dashboard Column two
******************************************* -->
        <div class="col-md-6" style="padding-left:60px;">
           <form action="changepw.php"> 
     
          <p style="padding-top:110px; padding-left:45px;"> <input type="submit" name="changepw" value="Change Password"  style="text:black; color:black;width:175px; height:60px; border-radius:50px;font-size:16px; background-color:#e4ccff; border:1px solid purple;"></p> 
            </form>
            <br><br><br>  
            <p>Email:   <strong><?=$_SESSION['email']?></strong></p>
          <p> Phone Number:<strong> <?=$_SESSION['phone']?></strong></p>
          <p>Gender: <strong><?=$_SESSION['gender']?></strong></p>
          <p>Notes and Special Needs:<strong><?=$_SESSION['notes']?></strong></p>
          
        </div>
<div class="container-fluid">
         <div class="row">
         <div class="col-md-12">
         <br>

      <br>
          
 
        </div>
      </div>
    </div>
    <div class="container-fluid" style="background-color:#d7b3ff;border-righ: 1px solid black;border-left: 1px solid black;text-align:center">
      <div class="row">
        <div class="col-md-12">

         <a href="dashboardedit.php" class="btn btn-link" role="button"style="text:black; color:black;width:300px; height:70px; border-radius:50px;font-size:22px; background-color:#e4ccff; border:1.25px solid purple;padding-top:20px;">Click to Edit</a> <br>
         <br>
        </div>
      </div>
    </div>

    <div class="container-fluid probootstrap-section probootstrap-section-colored" style="border-top:1.5px solid black;padding-bottom:1px; padding-top:10px;">
        <div class="row">
          <div class="col-lg-12 text-left section-heading probootstrap-animate">
            
     
            <table class="table table-hover table-striped table-responsive" style="color:black;">

              <tr style="background-color:#a38af4;"> 
                      
              <th style="padding-left:20px">Course</th>
              <th text-align:center>Course #</th>
              <th style="text-align:center;">  Class Schedule</th>
              <th>Cost</th>
              <th style="text-align:center;">  #<br>Credits</th>
              <th style="text-align:center;">Instructor</th>
              </tr>
              
              <?
                
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }

                  $sql = "SELECT courseid FROM selections WHERE studentid = '{$_SESSION['studentid']}'";     

                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      
                  

                      
                  while($row = mysqli_fetch_assoc($result)) {
                  
                  $sql2 = "SELECT * FROM courses 
                  WHERE courseid ='{$row["courseid"]}'";

                  $result2 = mysqli_query($conn, $sql2);
                
                  if( $result2 ){
                    // success! check results
                    while( $row2 = mysqli_fetch_assoc( $result2 ) ){
           
                   
                    
?>

        <tr> 
          <td><?=$row2['coursenumber']?></td>
          <td><?=$row2['coursename']?></td>
          <td style="text-align:center;"><?=$row2['daytime']?></td>
          <td>$<?=$row2['cost']?></td>
          <td style="text-align:center;"><?=$row2['numcredits']?></td>
          <td style="text-align:center;"><?=$row2['instructor']?></td>
         </tr>
         
        <?
 }

}
else{
// failure! check for errors and do something else
}
}  }  
 ?>
       
       
          </div>
        </div>
     </div>
     </table>

    <div class="container=fluid" style="background-color:#6a41ed;padding-bottom:1px; padding-top:1px;">
      <div class="row">
        <div class="col-lg-12">
     
       <h4>list billing</h4>
          
        </div>
       </div>
     </div>
<style>
.footerx {
  position: fixed;
  bottom: 0;
  width: 84%;
  /* Set the fixed height of the footer here */
  height: 60px;
  line-height: 60px; /* Vertically center the text there */
  
}
</style>
   <section style="padding-bottom:1px;padding-top:1px;">
       <footer class="footerx">
        <div class="probootstrap-copyright" >
          <div class="container-fluid" style="border-top: 1.5px solid black;color:black;background-color:#d7b3ff;">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2019 <a href="index.php"></a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://uicookies.com/"><strong>uicookies.com</strong></a></p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop"><strong>Back to top</strong><i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
   </section>
    
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
