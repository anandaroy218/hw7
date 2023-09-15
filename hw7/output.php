<?php
$userName = trim($_POST["name"]); 
$userEmail = trim($_POST["email"]); 
$subject = trim($_POST["subject"]);
$message = trim($_POST["longtext"]);

if(strlen($userName) > 20){
    echo "Name Is too Long";
} else {
    echo $userName;
}
echo "<br>";

if(strlen($userEmail) > 60){
    echo "Invalid Email";
} else {
    echo $userEmail;
}
echo "<br>";

if(strlen($subject) >10){
    echo "Text is too long";
} else {
    echo $subject;
}
echo "<br>";

if(strlen($message) < 20){
    echo "Minimum 20 Carecter ";
} else {
    echo $message;
}
?>
