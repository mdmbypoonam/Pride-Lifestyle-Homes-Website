<?php

//get data from form  
$name = $_REQUEST['Name'];
$contact= $_REQUEST['Contact'];
$email= $_REQUEST['Email'];
$interestedlocation= $_REQUEST['InterestedLocation'];

$txt ="Name : ". $name . "\r\nEmail : " . $email . "\r\nContact :" . $contact . "\r\nInterestedLocation : " . $interestedlocation;

if(empty($name) || empty($contact) || empty($email) || empty($interestedlocation)){
    echo "Please fill all fields";
}
else{
  mail("pridelifestylehomes@gmail.com","New Lead interested in Venkatesh Buildcon.",$txt, "From: $email");

  header('Location:thankyou.html');

}
?>  
