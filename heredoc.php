<?
          
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 
 if(isset($_POST["newrecord"])){
 

 // Sanitize incoming $_POST variables

 $firstname = filter_var("{$_POST['firstname']}", FILTER_SANITIZE_STRING);
 $lastname = filter_var("{$_POST['lastname']}", FILTER_SANITIZE_STRING);
 $email = filter_var("{$_POST['email']}", FILTER_SANITIZE_STRING);
 $phone = filter_var("{$_POST['phone']}", FILTER_SANITIZE_STRING);
 $address = filter_var("{$_POST['address']}", FILTER_SANITIZE_STRING);
 $city = filter_var("{$_POST['city']}", FILTER_SANITIZE_STRING);
 $zip = filter_var("{$_POST['zip']}", FILTER_SANITIZE_STRING);
 $notes = filter_var($_POST['notes'], FILTER_SANITIZE_STRING);
 $image = $_POST['image'];
 $gender=$_POST['gender'];
 $state=$_POST['state'];
 $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$sql = "INSERT INTO students (firstname, lastname, email, phone, address, city, state, zip, gender, notes, image, agree, password)
 VALUES ('{$firstname}',
 '{$lastname}',
 '{$email}',
 '{$phone}',
 '{$address}',
 '{$city}',
 '{$state}',
 '{$zip}',
 '{$gender}',
 '{$notes}',
 '{$image}',
 '{$_POST['agree']}')";


       if (mysqli_query($conn, $sql)) {

         $last_id = mysqli_insert_id($conn);

  echo "<h3 class='text-center'>New record created successfully</h3>"; 
 
               // Send email to student
 $to = "s@gmail.com";
 $subject = "Bryant University Registration";
 $txt = "Congratulations $firstname $lastname and welcome to Bryant University";
 $headers = "From: webmaster@example.com";
         
 mail($to,$subject,$txt,$headers);



 
   mysqli_close($conn);
         }
   
   ?>
   


