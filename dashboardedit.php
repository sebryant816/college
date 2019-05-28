<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>College Dashboard page</title>  
  
  
<!-- ***********************************
  College Dashboard edit page
*********************************** -->
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


   <section class="probootstrap-section probootstrap-section-colored" style="border:1.5px solid #4d0099;padding-bottom:1px;">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <h1 style="font-size:55px;font-family: 'Domine', serif;color:white;"><strong>Edit profile<br> and click the button to save changes.</strong></h1>
         </div>
       </div>
     </div>
   </section>



<!--******************************************
Dashboard column one
******************************************* -->

     

  <?if (isset($_SESSION['nomatch'])) {
            echo $_SESSION['nomatch'];
            $_SESSION['nomatch'] = "";
          }
            ?> 
  <section>
    <div class="container-fluid" style="font-family: 'Domine', serif;color:black;background-color:#d7b3ff; border: 1px solid black;">
      <div class="form-group">
        <div class="col-md-6">
          <form action="dashboardprocess.php" method="POST">
              <br>
              <br>
              
              <strong>First Name:</strong> <br>
              <input type="text" name="firstname" <? if(isset($_SESSION['firstname'])) { echo 'value="'.$_SESSION['firstname'].'"'; } ?> size="25" required><br><br>

              <strong>Last Name:</strong><br>
              <input type="text" name="lastname" <? if(isset($_SESSION['lastname'])) { echo 'value="'.$_SESSION['lastname'].'"'; } ?> size="25" required><br><br>
              
              <strong> Address:</strong><br>
                <input type="text" name="address" <? if(isset($_SESSION['address'])) { echo 'value="'.$_SESSION['address'].'"'; } ?>   size="25" required ><br> <br>

              <strong>City:</strong><br>
              <input type="text" name="city" <? if(isset($_SESSION['city'])) { echo 'value="'.$_SESSION['city'].'"'; } ?>  required><br> <br>

              <strong>State:</strong> <a style="color:red;">Please re-select your state</a><br>
              <select name="state" <? if(isset($_SESSION['state'])) { echo 'value="'.$_SESSION['state'].'"'; } ?> ng-model="mySel" required>
                <?php
                $states = array('Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','West Virginia','Wisconsin','Wyoming');
                
                foreach($states as $state) {
                echo '<option value="'.$state.'">'.$state.'</option>';
                }
                ?>
                <option ng-selected="mySel">Florida</option>
                </select>
                
                <br> <br>

                <strong>Zip:</strong>required<br> 
                <input type="text" name="zip" <? if(isset($_SESSION['zip'])) { echo 'value="'.$_SESSION['zip'].'"'; } ?>  size="10" required><br><br> 

                <strong>Phone Number:</strong>required<br>
                <input type="tel" id="phone" name="phone" <? if(isset($_SESSION['phone'])) { echo 'value="'.$_SESSION['phone'].'"'; } ?> >
                <span class="note">Format: 123-456-7890</span><br> <br>
          </div>
       </div>

       <div class="row">
          <div class="col-md-6" >

            <!-- Registration column 2-->
        
              <br>
              <strong>Email:</strong>required<br>
              <input type="email" name="email" <? if(isset($_SESSION['email'])) { echo 'value="'.$_SESSION['email'].'"'; } ?>  size="35" required><br><br>

              <strong>Gender:</strong>required<br>
              <select name="gender" <? if(isset($_SESSION['gender'])) { echo 'value="'.$_SESSION['gender'].'"'; } ?>  required>
              
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
                <textarea name='notes' <? if(isset($_SESSION['notes'])) { echo 'value="'.$_SESSION['notes'].'"'; } ?> rows="3" cols= "25"></textarea><br> <br>
                
                <strong>Upload Your Student Photo:</strong>  required<br><br>
                <input type="file" name="image"<? if(isset($_SESSION['image'])) { echo 'value="'.$_SESSION['image'].'"'; } ?>  value=""><br>

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

          <p><input type="submit" name="editprofile" value="Press to save your changes"  style="text:black;font-family: 'Domine', serif; box-shadow: #6E7849 0px 0px 10px; color:black;width:450px; height:70px; border-radius:50px;font-size:22px; background-color:#e6ccff; border:1.25px solid purple ;"></p> 
          
          <p><input type="submit" name="cancelchanges" value="Cancel Changes"  style="text:black;font-family: 'Domine', serif; color:black;width:190px; height:60px; border-radius:50px;font-size:22px; background-color:#e6ccff; border:1.25px solid purple ;"></p> 

         </div>
           </form>
    
       </div>
     </div>  
   </section>

 
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
*/