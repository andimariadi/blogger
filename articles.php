<?php
    include ('system/db.php');
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


        <div class="left">A</div><div class="right"><p>Artikel</p>
        This My articles, My hobbies, and My adventure :)
        </div>


      </div>
      
    </div>

    <div class="arrow-down"><i class="fa fa-caret-down fa-lg"></i></div>
    
<div class="bungkus">
  <div class="baris">
    <div class="col-8 article">
      <?php
        include 'system/articles.php'
      ?>
        
    </div>
    <!--- End Articles -->



    <!--- Start Sidebar -->

    <div class="col-4 sidebar">
    <?php
      include 'system/sidebar.php';
    ?>

    </div>
  </div>
<br><br><br>
    <div class="iklan">
      Space iklan 100% x 100px
    </div>
</section>
<!-- ENd section menu -->
<?php
      include 'system/footer.php';
    ?>
</body>
</html>