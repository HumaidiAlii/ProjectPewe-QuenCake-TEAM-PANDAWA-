<?php
$mysqli_host = "localhost";
$mysqli_database = "test.sql";
$mysqli_user = "root";
$mysqli_password = "";

$db = new PDO("mysqli:host=$mysqli_host;dbname=$mysqli_database",$mysqli_user,$mysqli_password);
$query = file_get_contents("test.sql");
$status = $db->prepare($query);

if($status->execute()){
	echo "
	<script>
	alert('RETRIEVE DATABASE BERHASIL');
	window.location = '../admin/halaman_utama.php';
	</script>
	";
}else{
	echo "Berhasil";
}



?>