<?php
include("conn.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if ($level == 'admin') {

	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);

	if (empty($username) && empty($password)) {
		header('location:index.html?error=1');
	} else if (empty($username)) {
		header('location:index.html?error=2');
	} else if (empty($password)) {
		header('location:index.html?error=3');
	} else {
		header('location:http://192.168.88.203/dashboard/APPS-ROBOT/GITHUB/index-dashboard.php');

		$q = mysqli_query($conn, "select * from robot80_admin where username='$username' and password='$password'");
		$row = mysqli_fetch_array($q);

		if (mysqli_num_rows($q) == 1) {
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['username'] = $username;
			$_SESSION['fullname'] = $row['fullname'];
			$_SESSION['gambar'] = $row['gambar'];

			header('location:http://192.168.88.203/dashboard/APPS-ROBOT/GITHUB/index-dashboard.php');
		} else {
			header('location:index.html?error=4');
		}
	}
} else {
	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);

	if (empty($username) && empty($password)) {
		header('location:index.html?error=1');
	} else if (empty($username)) {
		header('location:index.html?error=2');
	} else if (empty($password)) {
		header('location:index.html?error=3');
	} else {
		header('location:http://192.168.88.203/dashboard/APPS-ROBOT/GITHUB/index-dashboard.php');

		$q = mysqli_query($conn, "select * from robot80_data_anggota where username='$username' and password='$password'");
		$row = mysqli_fetch_array($q);

		if (mysqli_num_rows($q) == 1) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['no_induk'] = $row['no_induk'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['username'] = $username;
			$_SESSION['jk'] = $row['jk'];
			$_SESSION['posisi'] = $row['posisi'];
			$_SESSION['ttl'] = $row['ttl'];
			$_SESSION['alamat'] = $row['alamat'];
			$_SESSION['foto'] = $row['gambar'];

			header('location:http://192.168.88.203/dashboard/APPS-ROBOT/GITHUB/index-dashboard.php');
		} else {
			header('location:index.html?error=4');
		}
	}
}
