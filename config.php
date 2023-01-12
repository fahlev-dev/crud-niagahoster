<?php 
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'niagahoster';

$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);

if(!$conn) {
    die("Koneksi ke database gagal" . mysqli_connect_error());
}
?>