<?php

/*variable declaration */

$userName_txt = $_POST['userName'];
$phoneNumber_txt = $_POST['phoneNumber'];
$email_txt = $_POST['email'];
$message_txt = $_POST['message'];

/*DB connection*/

$conn = mysqli("localhost","root","","tour & travel system");
$query = "insert into feedback(userName, phoneNumber, email, message)values('$userName_txt','$phoneNumber_txt','$email_txt','$message_txt')";
$result = mysqli_query($conn,$query);

if ($result)

{
    echo"Thank you for the feedback";
}

else
{
    die("Something went wrong, Please try again.");
}

?>