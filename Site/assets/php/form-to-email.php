<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$store = $_POST['store'];
$item = $_POST['item'];
$date = $_POST['date'];
$time = $_POST['time'];
$top = $_POST['top'];
$trousersize = $_POST['trouser-size'];
$shoesize = $_POST['shoe-size'];
$item = implode("\n",$_POST['item']);




//Validate first
//if(empty($name)||empty($visitor_email)) 
//{
//    echo "Name and email are mandatory!";
//    exit;
//}

//if(IsInjected($visitor_email))
//{
//    echo "Bad email value!";
 //   exit;
//}

$email_from = 'info@hall-street.co.uk';//<== update the email address
$email_subject = "New Window Shop submission";
$email_body = "You have received a new message from the user $name\n".
    "Their Email Address:\n $visitor_email\n\n".
    "Their Phone Number:\n $phone\n\n".
    "They would like an appointment at $time on this date:\n $date\n\n".
    "At the $store store\n\n".
    "Their Preferences are:\n\n".
    "Trouser Size:\n $trousersize\n\n".
    "Top Size:\n $top\n\n".
    "Shoe Size:\n $shoesize\n\n".
    "Items Interested in:\n$item\n".
   
$to = "sean@hall-street.co.uk";//<== update the email address
$headers .= "MIME-Version: 1.0\r\n";
//Set the content-type to html
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: /thank-you.php');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 