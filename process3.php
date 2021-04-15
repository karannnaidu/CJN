<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];

	 $sql = "INSERT INTO get_in_touch2 (name,email,phone)
	 VALUES ('$name','$email','$phone')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>