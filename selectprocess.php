<?session_start();?>
<?


 

 if (isset($_POST["newcourse"])) {

foreach($_POST['courseid'] as $courseid) {



   

   // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
   
   
   $sql = "INSERT INTO selections (studentid, courseid) VALUES ('{$_SESSION['last_id']}','{$courseid}')";


if (mysqli_query($conn, $sql)) {
   $_SESSION['message']='<div class="alert alert-success">
   <strong>Success!</strong> You are registered.
 </div>';
 header('Location:http://hello.sebryant816.webfactional.com/college/dashboard.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
   }
}
   // end
    else {

header('Location:http://hello.sebryant816.webfactional.com/college/register.php');
}

?>
   



