# Panduan menggunakan script 

Buatlah sebuah folder dengan nama "**blogger**" pada folder htdocs. Jika menggunakan selain xampp bisa disesuaikan.

## Permalink

Untuk membuat permalink bekerja silahkan ubah `htaccess` menjadi `.htaccess` (pakai titik depan). saat upload di github file dengan nama .htaccess tidak berhasil, karena itu di siasati dengan mengubah nama.

## Mengubah Nama Folder

Jika folder yang dibuat dengan nama selain "**blogger**" maka Anda terlebih dahulu mengganti script di "system/db.php" menjadi :

```
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

```

## Database

Untuk database pada CMS ini menggunakan nama `"db_blog"` dan import **db_blog.sql** pada menu import yang terdapat pada database phpmyadmin.


## Login

Untuk masuk ke dalam panel Admin bisa langsung ke alamat <http://localhost/blogger/admin> dan user gunakan :

`usernama : Andi`

`password : Admin`

kreasikan script sobat hingga menjadi lebih menarik dan patut di gunakan. Powered by [Pemula Belajar](http://pemulabelajar.com "Tutorial Belajar Untuk Pemula")