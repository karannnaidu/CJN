<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];

	 $sql = "INSERT INTO googleform (name,email,phone)
	 VALUES ('$name','$email','$phone')";
	 if (mysqli_query($conn, $sql)) {
		header('Location: https://www.cjnproperties.com/google-form2.php');
		exit;
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>