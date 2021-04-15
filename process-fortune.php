

<!-- Global site tag (gtag.js) - Google Ads: 577357051 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-577357051"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-577357051');
</script>
<!-- Event snippet for cjn-sai-fortune-php conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-577357051/_zVuCMSe1-MBEPuJp5MC'});
</script>

<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];

	 $sql = "INSERT INTO fortune (name,email,phone)
	 VALUES ('$name','$email','$phone')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>'
