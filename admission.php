<?php
if(isset($_POST['insert']))
{
$con=mysqli_connect("localhost","root","","admission");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to mysqli: " . mysqli_connect_error();
}
$firstname = $_POST["firstname"];
$middlename =  $_POST["middlename"];
$lastname =  $_POST["lastname"];
$fatherfirstname = $_POST["fatherfirstname"];
$fathermiddlename =  $_POST["fathermiddlename"];
$fatherlastname =  $_POST["fatherlastname"];
$motherfirstname = $_POST["motherfirstname"];
$mothermiddlename =  $_POST["mothermiddlename"];
$motherlastname =  $_POST["motherlastname"];
$gender = $_POST["gender"];
$physicallychallenged =  $_POST["physicallychallenged"];
$dob = $_POST["dob"];
$category = $_POST["category"];
$phone = $_POST["phone"];
$telephone = $_POST["telephone"];
$email = $_POST["email"];
$guardianemail = $_POST["gurdianemail"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$pin = $_POST["pin"];

$nationality = $_POST["nationality"];
$adharcard = $_POST["adharcard"];
$sql="INSERT INTO admissiondata (firstname, middlename, lastname , fatherfirstname, fathermiddlename, fatherlastname, motherfirstname, mothermiddlename, motherlastname, gender, physicallychallenged, dob, category, phone, telephone, email, guardianemail, address, city, state, pin, nationality, adharcard)
VALUES ('$firstname', '$middlename', '$lastname' , '$fatherfirstname', '$fathermiddlename', '$fatherlastname', '$motherfirstname', '$mothermiddlename', '$motherlastname', '$gender', '$physicallychallenged', '$dob', '$category', '$phone', '$telephone', '$email', '$guardianemail', '$address', '$city', '$state', '$pin', '$nationality', '$adharcard')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
}
?>