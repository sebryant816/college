<? session_start(); ?>
<?


 
 
 if (isset($_POST["newrecord"])) {
  
      // Sanitize incoming $_POST variables

 $_SESSION['firstname'] = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
 $_SESSION['lastname'] = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
 $_SESSION['email'] = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
 $_SESSION['phone'] = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
 $_SESSION['address'] = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
 $_SESSION['city'] = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
 $_SESSION['zip'] = filter_var($_POST['zip'], FILTER_SANITIZE_STRING);
 $_SESSION['notes'] = filter_var($_POST['notes'], FILTER_SANITIZE_STRING);
 $_SESSION['image'] = $_POST['image'];
 $_SESSION['gender'] =$_POST['gender'];
 $_SESSION['state'] =$_POST['state'];
 $_SESSION['password'] = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
 $_SESSION['agree'] = filter_var($_POST['agree'], FILTER_SANITIZE_STRING);
 $_SESSION['fullname'] = $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];
 
   if ($_POST['confirmpassword'] == $_POST['password']) {
      
      // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }


$sql = "INSERT INTO students (firstname, lastname, email, phone, address, city, state, zip, gender, notes, image, agree, password)
 VALUES ('{$_SESSION['firstname']}',
 '{$_SESSION['lastname']}',
 '{$_SESSION['email']}',
 '{$_SESSION['phone']}',
 '{$_SESSION['address']}',
 '{$_SESSION['city']}',
 '{$_SESSION['state']}',
 '{$_SESSION['zip']}',
 '{$_SESSION['gender']}',
 '{$_SESSION['notes']}',
 '{$_SESSION['image']}',
 '{$_SESSION['agree']}',
 '{$_SESSION['password']}')";
 

  
   // end

       if (mysqli_query($conn, $sql)) {

         $_SESSION['last_id'] = mysqli_insert_id($conn);
         $_SESSION['$last_id']; 
               // Send email to student
          $to = "sebryant816@gmail.com";
          $subject = "Bryant University Registration";
          $txt = "Congratulations $firstname $lastname and welcome to Bryant University";
          $headers = "From: webmaster@example.com";
                  
          mail($to,$subject,$txt,$headers);
header('Location:http://hello.sebryant816.webfactional.com/college/select.php');
          
 mysqli_close($conn); }


} else {
  
   $_SESSION['nomatch'] = '<div class="alert alert-danger" style = "font-size:30px;">
    <strong>Passwords do not match, Please try again.</strong></div>';

header('Location:http://hello.sebryant816.webfactional.com/college/register.php');


}

} // if newrecord

?>
   



