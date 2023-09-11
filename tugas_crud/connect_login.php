<?php
session_start();
include 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

if ($conn->connect_error) {
  die("Koneksi database gagal: " . $conn->connect_error);
}else{
    $stmt = $conn->prepare("select * from admin where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        $cek_password = $data['password'];
        if ($cek_password === md5($password)) {
			$_SESSION['login'] = true;
			$_SESSION['email'] =  $email;
			header("Location: read.php");
        } else {
            echo "<h2>Email Atau Password salah</h2>";
        }        
    } else {
        echo "<h2>Email Atau Password salah</h2>";
    }
}
?>