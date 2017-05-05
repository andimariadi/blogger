<?php
date_default_timezone_set('Asia/Makassar');
//buat dulu koneksi kedatabase

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'db_blog';
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpassword, $dbname);
$query_home = mysqli_query($koneksi, 'select * from tbweb order by no ASC');
while ($data = mysqli_fetch_array($query_home)) {
	$title_home = $data[1];
    $home = 'http://localhost/blogger/';
}


?>