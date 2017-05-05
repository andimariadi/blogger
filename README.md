Buatlah sebuah folder dengan nama "blogger" pada folder htdocs. Jika menggunakan selain xampp bisa disesuaikan.

Jika folder yang dibuat dengan nama selain "blogger" maka Anda terlebih dahulu mengganti script di "system/db.php" menjadi :

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
    $home = 'http://localhost/NAMA FOLDER YANG DIGUNAKAN/';
}
?>

Untuk database gunakan nama "db_blog" dan import db_blog.sql pada menu import yang terdapat pada database phpmyadmin.

login admin

user : Andi

pass : Admin

## kreasikan script sobat hingga menjadi lebih menarik dan patut di gunakan.