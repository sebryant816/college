<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>College Dashboard change pw page</title>  

</head>

  
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
<body>
    
<section>

  <!---form for registration--->
    

  <?if (isset($_SESSION['nomatch'])) {
            echo $_SESSION['nomatch'];
            $_SESSION['nomatch'] = "";
          }
            ?> 

  <div class="container-fluid" style="padding-left:100px;font-family: 'Domine', serif;color:black;background-color:#d7b3ff; border: 1px solid black;">
    <div class="form-group">
      <div class="col-md-12">
        <form action="changepwprocess.php" method="POST">
<br><br>
        <h1 style="color:#4d0099;font-size:76px;font-family: 'Domine', serif;"><strong>Welcome <?=$_SESSION['fullname']?></strong></h1>

        <h3>Change and confirm your password below:</h3>

            <strong>Create password:</strong>required<br>
            <input type="text" name="password" size="15" required><br><br>

            <strong>Confirm password:</strong> required<br>
            <input type="text" name="confirmpassword" size="15"  required><br><br>
<br>
            <p style="padding-top:70px"><input type="submit" name="newpw" value="Change Password"  style="text:black;font-family: 'Domine', serif; box-shadow: #6E7849 0px 0px 10px; color:black;width:200px; height:40px; border-radius:50px;font-size:18px; background-color:#e6ccff; border:1.25px solid purple;["></p> 
           
            </form>
           <form action="dashboard.php">   
           
            <p><input type="submit" name="cancelchanges" value="Cancel Changes"  style="align-text:center;text:black;font-family: 'Domine', serif; box-shadow: #6E7849 0px 0px 10px; color:black;width:200px; height:40px; border-radius:50px;font-size:18px; background-color:#e6ccff; border:1.25px solid purple ;"></p> 

</form>
        </div>
      </div>
    </div>

</body>

</html>