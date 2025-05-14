<?php
$fullname =(!empty($_POST["fullname"])) ? $_POST["fullname"] : null;

$email = (!empty($_POST["email"])) ? $_POST["email"] : null;
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$message =$_POST["message"];

if(empty($fullname) || ($email) || ($phone)){
    echo "You need to fill-up all the fields";
}
exit;

echo "Name: $fullname <br>";
echo "Email: $email <br>";
echo "Phone: $phone <br>";
echo "Subject: $subject <br>";
echo "Message: $message <br>";


echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
