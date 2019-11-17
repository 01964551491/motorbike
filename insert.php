<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="registration";


 $firstname = filter_input(INPUT_POST, 'firstname');
 $lastname = filter_input(INPUT_POST, 'lastname');
 $email = filter_input(INPUT_POST,'email');
 $mobile = filter_input(INPUT_POST, 'mobile_number');
 $pass = filter_input(INPUT_POST,'password');
 $pass1 = filter_input(INPUT_POST,'con_password');  


        
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
         else{
             $sql = "INSERT INTO form (firstname, lastname, email, mobile_number,password,con_password)
             values ('$firstname','$lastname','$email','$mobile','$pass','$pass1')";
    
            if ($conn->query($sql)){
                
                header('Location: showinfo.php');
            }
             else{
                 echo "Error: ". $sql ."
                 ". $conn->error;
                }
             $conn->close();
            }
	    
     
 
 
     
?>