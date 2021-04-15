<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@600;700&family=Source+Sans+Pro:wght@400;600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="css/style.css" />


    <link rel="shortcut icon" type="image/png" href="img/cjnfavicon.png" />

    <title>
        CJN PROPERTIES
    </title></head>

    <style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<body>
<div class="popup__content" style="background-color:#ddd; transition:unset; " >

<div class="popup__right" style="position: relative;">
  <form action="otpprocess.php"  method="post">


    <h2 class="heading-secondary " style="margin-bottom: 0.3rem; color: black;">Download Brochure <span style="color:#004596"> @ CJN SAI FORTUNE </span></h2>
    <div
        style="border-bottom:  1px solid rgba(0,0,0,0.25); margin-top: 1rem ; width: 100%; margin-bottom: 3rem;">
    </div>

       <div class="form__group">
            <input type="number" class="form__input1" placeholder="Enter OTP"  name="otpvalue" required>
            <label for="otpvalue" class="form__label">Enter OTP</label>
        </div>
        
    <div class="form__group">
        <button class="btn btn--green" type="submit"  value="submit"> SUBMIT &rarr;</button>

    </div>

  </form>
 </div>
</div>


</body>
</html> 
