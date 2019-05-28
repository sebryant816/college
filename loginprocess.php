<?session_start();?>
<?

// ***********************
// Login Creditials
// ***********************




// ************************************
// Sanitize incoming post variables
// ************************************

if (isset($_POST['login'])) {

    $servername = "localhost";
   $username = "jaxcode83";
   $password = "Ducks0up";
   $dbname = "jaxcode83";




// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM students WHERE email = '{$email}'";
 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        if($password == $row['password']) {

        $_SESSION['studentid'] = $row['studentid'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['city'] = $row['city'];
        $_SESSION['zip'] = $row['zip'];
        $_SESSION['notes'] = $row['notes'];
        $_SESSION['image'] = $row['image'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['state'] = $row['state'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['fullname'] = $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];
        $_SESSION['citystate'] = $_SESSION['city'] .','. ' ' . $_SESSION['state'];
        
        header('Location:http://hello.sebryant816.webfactional.com/college/dashboard.php');

    } else {

        $_SESSION['failed'] = '<div class="alert alert-danger" style = "font-size:30px;">
        <strong>Passwords do not match, Please try again.</strong></div>';
    
    header('Location:http://hello.sebryant816.webfactional.com/college/login.php');
} 
}
mysqli_close($conn);

}
}
?>
   



