<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn)
echo "connected";
else
die ("not connected");
$st = $conn->prepare("INSERT INTO user VALUES (?,?)");
$st->bind_param("ss", $email, $password);
$email = $_POST["email"];
$password = $_POST["pass"];
$st->execute();
echo "SUCCESS!!!";
$conn->close();
$st->close();
?>