<?session_start();?>
<?

// ***********************
// DASHBOARD PHP page
// ***********************

// ************************************
// Login Creditials
// ************************************



// ************************************
// Cancel Changes
// ************************************

if (isset($_POST["cancelchanges"])) {

    header('Location:http://hello.sebryant816.webfactional.com/college/dashboard.php');

}
?>
<?

// ************************************
// List Courses
// ************************************



 
// ************************************
// UPDATE RECORDS
// ************************************

 
if (isset($_POST["editprofile"])) {
  
   

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



    
    // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "UPDATE students SET firstname='{$_SESSION['firstname']}', lastname ='{$_SESSION['lastname']}', email='{$_SESSION['email']}', phone ='{$_SESSION['phone']}', address='{$_SESSION['address']}', city ='{$_SESSION['city']}', state='{$_SESSION['state']}', zip ='{$_SESSION['zip']}', gender='{$_SESSION['gender']}', notes ='{$_SESSION['notes']}', image='{$_SESSION['image']}' WHERE studentid='{$_SESSION['studentid']}'";

if (mysqli_query($conn, $sql)) {
    header('Location:dashboard.php');

    mysqli_close($conn);

} else {
    $_SESSION['error'] = '<div class="alert alert-danger" style = "font-size:30px;">
    <strong>Profile not updated, Please try again.</strong></div>';
}


  }




?>





<!-- // ************************************
// List Courses
// ************************************ -->
