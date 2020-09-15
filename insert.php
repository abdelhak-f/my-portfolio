<?php 
include "conn.php";
 
 if(isset($_POST['submit'])){
     $name=($_POST['name']);
     $email=($_POST['email']);
     $subject=($_POST['subject']);
     $message=($_POST['message']);

 

$sql = "INSERT INTO contact (name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "<div class='alert alert-success color-dark'> <script> New record created successfully </script></div>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location:index.php");
 }

$conn->close();




?>