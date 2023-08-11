   <?php
include_once 'connection.php';

if(isset($_POST['submit']))
{
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
  $email = $_POST['email'];
 $subject = $_POST['subject'];

 $sql = "INSERT INTO contact (first_name,last_name,email,subject)
 VALUES ('$first_name','$last_name','$email','$subject')";
 if (mysqli_query($conn, $sql)) {
 echo "Details have been sent";
 } else {
 echo "Error: " . $sql . ":-" . mysqli_error($conn);
 }
 mysqli_close($conn);
}
?>