<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>College Dashboard course list process</title>  

</head>


<body>
<?
// ************************************
// Login Creditials
// ************************************



                
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

    
    }
   
   }
   else{
   // failure! check for errors and do something else
   }
   }  }  
    
       
     
?>


</body>

</html>
