<?session_start();?>
<?

// ***********************
// change pw PHP page
// ***********************

// ************************************
// Login Creditials
// ************************************



// ************************************
// Change password
// ************************************

if (isset($_POST["newpw"])) {

  
        // Sanitize incoming $_POST variables
  

   $_SESSION['password'] = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
   $_SESSION['confirmpassword'] = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_STRING);

     if ($_POST['confirmpassword'] == $_POST['password']) {
        
        // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
     if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
  
  
    $sql = "UPDATE students SET password='{$_SESSION['password']}' WHERE studentid='{$_SESSION['studentid']}'";
    if (mysqli_query($conn, $sql)) {
      
      header('Location:dashboard.php');
  
      mysqli_close($conn); }
  
  } else {
  
    $_SESSION['nomatch'] = '<div class="alert alert-danger" style = "font-size:30px;">
     <strong>Passwords do not match, Please try again.</strong></div>';
 
 header('Location:http://hello.sebryant816.webfactional.com/college/changepw.php');
 
 
 }
 
 } 
?>
