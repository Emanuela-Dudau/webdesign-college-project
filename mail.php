<!--This website https://www.freecontactform.com/email_form.php was used a refrence for the imlp
on capture the contact form submission and send the form contents to my personal email address.-->
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent=" From: $name \n Message: $message";
$recipient = "emanuela_dudau@yahoo.com";
$subject = "Contact from EmanuelaDudau.com";

$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

$variable = <<<XYZ
"<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Email sent</title>
  <script src="https://bootstrapcreative.com/wp-bc/wp-content/themes/wp-bootstrap/codepen/bootstrapcreative.js?v=7"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead">I will be contacting you soon.</p>
  <hr>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="http://emanueladudau.com/" role="button">Continue to homepage</a>
  </p>
</div>


</body>
</html>
XYZ;

echo $variable;
?>
