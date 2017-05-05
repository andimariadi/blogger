<?php
    include ('system/db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Whoiers.com | Tempat informasi terkini</title>
	<!-- Bootstrap -->
    <!-- Bootstrap -->
    <link href="<?php echo $home ?>/style/css/default/styles.css" rel="stylesheet">
    <link href="<?php echo $home ?>/style/css/default/fonts.css" rel="stylesheet">
    <link href="<?php echo $home ?>/style/css/default/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $home ?>style/css/default/img/ico.png" type="image/vnd.microsoft.icon" />
</head>
<body>
<?php
  include 'system/header.php';
?>
<!-- End Section Header -->
<section id='artikel'>
  <div class="judul">
      <div class="bungkus">
      <div class="left">C</div><div class="right"><p>Contact</p>
      Contact me for anything question, anything answer, and anything in your mind :)</div>
      </div>
      
  </div>
  <div class="arrow-down"><i class="fa fa-caret-down fa-lg"></i></div>
  


  <div class="bungkus">
  <div class="baris" align="center">
    <div class="footer_title">Contact Me</div>

    <br><br>

    <div class="footer_title">Description</div>
      Lorem ipsum dolor sit amet, adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the recently with desktop publishing software.
      <?php 
      $today = date('Y-m-d, H:i');
      echo $today;
      $now = strtotime('Y-m-d');
      $date = date('Y-m-d', strtotime('+1 day'));
      echo $date;
      if ($today == '2015-11-26, 21:39') {
        echo 'sama';
      }
      if ($today <= '2015-11-27, 21:36'){
        echo 'Kurang';
      }
      if ($today >= '2015-11-27, 21:36') {
        echo 'lebih';
      }
      ?>
    </div>



  </div>
</div>
<br><br><br>
</div>
</section>
<!-- ENd section menu -->
<?php
      include 'system/footer.php';
    ?>
</body>
</html>