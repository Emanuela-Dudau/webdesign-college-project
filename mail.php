<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent=" From: $name \n Message: $message";
$recipient = "contact@danielozac.com";
$subject = "Contact Form";

$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

$variable = <<<XYZ
"<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap 4 Thank You Page Template</title>
  <script src="https://bootstrapcreative.com/wp-bc/wp-content/themes/wp-bootstrap/codepen/bootstrapcreative.js?v=7"></script><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>I will</strong> be contacting you soon.</p>
  <hr>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="index.html" role="button">Continue to homepage</a>
  </p>
</div>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js'></script>
</body>
</html>
XYZ;

echo $variable;
?>
