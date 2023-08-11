<?php
include_once 'connection.php';

if(isset($_POST['submit']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 $address = $_POST['address'];
 $selectShoes = $_POST['selectShoes'];
 $make_payments = $_POST['make_payments'];
 $orderDate = $_POST['orderDate'];


 $sql = "INSERT INTO makeOrder (name,email,number,address,selectShoes,make_payments,orderDate)
 VALUES ('$name','$email','$number','$address','$selectShoes','$make_payments','$orderDate')";
 if (mysqli_query($conn, $sql)) {
 echo "Details have been sent";
 } else {
 echo "Error: " . $sql . ":-" . mysqli_error($conn);
 }
 mysqli_close($conn);
}
?>