<?php include 'database.php';
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$sql = "INSERT INTO user_register(name,email,password)
VALUES ('$name','$email','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






