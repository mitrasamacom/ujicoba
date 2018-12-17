<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
	}
	else
	{
		// Variabel username dan password
		$username=$_POST['username'];
		$password=$_POST['password'];
		// Membangun koneksi ke database
		$connection = mysqli_connect("localhost","root","","ujicoba");
		// Seleksi Database
		//$db = mysql_select_db("ujicoba", $connection);
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = mysqli_query($connection, "select * from login where username='$username' AND password='$password'");
		$rows = mysqli_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_user']=$username; // Membuat Sesi/session
				header("location: halamanadmin.php"); // Mengarahkan ke halaman profil
				} else {
				$error = "Username atau Password belum terdaftar";
				}
				mysqli_close($connection); // Menutup koneksi
	}
}
?>
