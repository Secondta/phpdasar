<?php
include 'connect.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if ($conn->connect_error) {
  die("Koneksi database gagal: " . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into admin(email, username, password) values(?, ?, ?)");
    $stmt->bind_param("sss", $email, $username, md5($password));
    $stmt->execute();
    header('location:login.php');
    $stmt->close();
    $conn->close();
}
?>