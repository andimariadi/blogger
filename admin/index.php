
<?php
  include '../system/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Admin menu - Whoiers.com</title>
  <!-- Bootstrap -->
    <!-- Bootstrap -->
    <link href="<?php echo $home ?>style/css/default/styles.css" rel="stylesheet">
    <link href="<?php echo $home ?>style/css/default/fonts.css" rel="stylesheet">
    <link href="<?php echo $home ?>style/css/default/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $home ?>style/css/default/img/ico.png" type="image/vnd.microsoft.icon" />
</head>
<body>

<?php
  session_start();
  if(empty($_SESSION['username'])){
    if (isset($_POST['login'])) {
      $username=$_POST['username'];   //tangkap data yg di input dari form login input username
      $password=md5($_POST['password']);   //tangkap data yg di input dari form login input password

      $query=mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");   //melakukan pengampilan data dari database untuk di cocokkan
      $xxx=mysqli_num_rows($query);   //melakukan pencocokan
      if($xxx==TRUE){     // melakukan pemeriksaan kecocokan dengan percabangan.
        $_SESSION['username']=$username;  //jika cocok, buat session dengan nama sesuai dengan username
        header("location:index.php");     // dan alihkan ke index.php
      }else{          //jika tidak tampilkan pesan gagal login
        echo "<script>alert('Username / Password wrong !');history.go(-1);</script>";
      }
    }
  
echo '<section id="artikel">

    <div class="login">
      <div class="bungkus">
        <div class="left">L</div><div class="right"><p>Login</p>
      Please Login for Admin menu :)</div>

      </div>
    </div>
</section>
    <div class="bungkus">
      <div class="arrow-down"><i class="fa fa-caret-down fa-lg"></i></div>
      <form method="post">
        <input class="masuk" type="text" autocomplete="off" placeholder="Username .." name="username"><br/>
        <input class="masuk" type="password" autocomplete="off" placeholder="Password .." name="password"><br/>
        <input name="login" type="submit" class="reply">
      </form>
    </div>';

  } else {



  include 'header.php';
?>
<!-- End Section Header -->
<section id='artikel'>

    <div class="judul">
      <div class="bungkus">
        <div class="left">H</div><div class="right"><p>Home</p>
      You can see recent user comment and your recent posting :)</div>
      </div>

    </div>
    <div class="arrow-down"><i class="fa fa-caret-down fa-lg"></i></div>

</section>
<!-- ENd section menu -->
<?php
      include '../system/footer.php';
    ?>
</body>
</html>
<?php 
  }
?>