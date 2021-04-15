<?php
session_start();
$url='localhost';
$username = "j2cs4irhuk05";
$password = "Karannaidu@12";
$dbname = "phpsms1";
$fileName = basename('CJN_SAI_FORTUNE_BROCHURE.pdf');

    $filePath = 'brochure/'.$fileName; 

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


$sql = "INSERT INTO quote (name, email, phone)
VALUES ('$name', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {

   $authKey = "340515Ai1NCRXbuB5f4ef198P1";


$mobileNumber = $phone;

/* Sender ID,While using route4 sender id should be 6 characters long. */
$senderId = "CJNPROP";

/* Your message to send, Add URL encoding here. */
$message = urlencode("Welcome to CJN PROPERTIES. Our marketing team will be in touch with you shortly. Thank you for downloading our brochure.");

/* Define route */
$route = "4";
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
if(!empty($fileName) && file_exists($filePath)){
    // Define headers


    
    // Read the file
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false);
    header("Content-Type: application/pdf");
    header("Content-Description: File Transfer");
       
    header("Content-Disposition: attachment; filename=$fileName");


    readfile($filePath);

    exit;
}


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
	return true;
}
else
{
    echo "Oops!! Wrong otp entered , please try retype the  otp  again , if the issue still persists don't worry we have your contact details , We'll be in touch with you ,
    Welcome to CJN PROPERTIES. ";
	return false;
}
?>