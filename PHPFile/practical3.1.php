<?php

 if(isset($_REQUEST['submit']))
 {
 $name=$_REQUEST['empname'];
 $address=$_REQUEST['empadd'];
 $dept=$_REQUEST['empdept'];
 $des=$_REQUEST['empdes'];
 $gender=$_REQUEST['gender'];
 $cno=$_REQUEST['empcno'];
 $email=$_REQUEST['empmail'];
 $pass=$_REQUEST['emppass'];


 echo "<b>Employee Name is: </b>" . $name . "<br>";
 echo "<b>Employee Details Given Below</b> <br>";
 echo "Address: " . $address . "<br>";
 echo "Department: " . $dept . "<br>";
 echo "Designation: " . $des . "<br>";
 echo "Gender: " . $gender . "<br>";
 echo "Contact Number: " . $cno . "<br>";
 echo "Email: " . $email . "<br>";
 echo "Password: " . $pass . "<br>";
 }

  // Define the upload location
  $target_path = "C:\\xampp\\htdocs\\PHPFile\\image";

// Create the file name with path
$target_path = $target_path . basename( $_FILES['empphoto']['name']); 

// Try to move the file from the temporay directory to the defined.
if(move_uploaded_file($_FILES['empphoto']['tmp_name'], $target_path)) {
    echo " Photo: The file ".  basename( $_FILES['empphoto']['name']). 
         " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
 ?>