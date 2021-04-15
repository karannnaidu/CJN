<?php
session_start();
$url='localhost';
$username = "naidu";
$password = "Karannaidu@12";
$dbname = "phpsms";
$conn = mysqli_connect($url, $username, $password, $dbname);
/* Check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
 {
	$name=$_SESSION['name'];
	$email=$_SESSION['email'];
	$phone=$_SESSION['phone'];
	
	
/* Create connection */


$sql = "INSERT INTO fortune_brochure (name, email, phone)
VALUES ('$name', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {

   $authKey = "340515Ai1NCRXbuB5f4ef198P1";


$mobileNumber = $phone;

/* Sender ID,While using route4 sender id should be 6 characters long. */
$senderId = "1234576";

/* Your message to send, Add URL encoding here. */
$message = urlencode("Thank u for register with us. we will get back to you shortly.");

/* Define route */
$route = "route=4";
/* Prepare you post parameters */
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);


/* API URL */
$url="https://control.msg91.com/api/sendhttp.php";

/* init the resource */
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    /*,CURLOPT_FOLLOWLOCATION => true */
));


/* Ignore SSL certificate verification */
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


/* get response */
$output = curl_exec($ch);

/* Print error if any */
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

$fileName = basename('CJN_SAI_FORTUNE_BROCHURE.pdf');
$filePath = 'brochure/'.$fileName;
	// $sql = "INSERT INTO fortune_brochure
	  //(name,email,phone,bhk)
	 //VALUES ('$name','$email','$phone','$bhk')";
	
		// echo "hello!";
		//echo $file_url;
		
if(!empty($fileName) && file_exists($filePath)){
    // Define headers
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");
    
    // Read the file
    readfile($filePath);
    exit;
}else{
    echo 'The file does not exist.';
}


}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
	return true;
}
else
{
	echo "failure";
	return false;
}
?>