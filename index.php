<?php
  session_start();
    include ('system/db.php');
    $query=mysqli_query($koneksi,"select * from tblartikel left join tbkategori on tblartikel.id_kategori=tbkategori.id_kategori order by id_artikel desc limit 0, 3");
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
    <link href="style/css/default/styles.css" rel="stylesheet">
    <link href="style/css/default/fonts.css" rel="stylesheet">
    <link href="style/css/default/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="style/css/default/img/ico.png" type="image/vnd.microsoft.icon" />
</head>
<body>
<?php
  include 'system/header.php';
?>
<div id="loader">
  <div class="spinner"></div>
</div>
<!-- End Section Header -->
<section id='artikel'>

    <div class="judul">
      <div class="bungkus"><div class="left">H</div><div class="right"><p>Home</p>
      The style in my mind. Welcome in my site :)</div>

      </div>

    </div><div class="arrow-down"><i class="fa fa-caret-down fa-lg"></i></div>
    <div class="bungkus">
    <div class="baris">
    
      <div class="xxx">
      <h1>Description</h1>
      <p>Anda pernah melihat dan membaca artikel tentang hal yang menarik ? apakah anda ingin artikel lebih menarik lagi ?</p>
      <p>Anda bisa mendapatkannya disini, di Whoiers.com tempat informasi yang menarik dan ilmu pengetahuan tentang teknologi terkini. Dapatkan sekarang. :)</p>
      </div>
    


      <div class="new_post">
      <p align="center"><h1>Recent post</h1></p>
        <?php
          include 'system/news_article.php'
        ?>
      </div>

    </div>
    </div>

    <!--- End Articles -->

    <div class="new_comment"><div class="arrow-down"><i class="fa fa-caret-down fa-lg"></i></div>
    <div class="bungkus">
      <p align="center"><h1>Recent comment</h1></p>
      <div class="xxx">
      <p>Anda bisa lihat pengunjung lain berpartisipasi disini. Anda pun bisa, dapatkan artikel menarik dan berikan komentar anda untuk kemajuan website ini. Salam :)</p>
      </div>
      <?php
            include 'system/news_comment.php'
          ?>
          <div class="clear"></div>
    </div>
    </div>


    <div class="new_description"><div class="arrow-down"><i class="fa fa-caret-down fa-lg"></i></div>
      <div class="bungkus">
      <div class="xxx">
        <h1>Sponsor</h1>
      </div>
          <a href="http://www.facebook.com/mariadi.andi"><div class="fb"><i class="fa fa-facebook-square fa-lg"></i> <p>Facebook</p></div></a>
          <a href="http://www.twitter.com/andi_mariadi"><div class="tw"><i class="fa fa-twitter-square fa-lg"></i> <p>Twitter</p></div></a>
          <a href="#"><div class="g"><i class="fa fa-google-plus-square fa-lg"></i> <p>Google+</p></div></a>
          <div class="clear"></div>
        </div>
      </div>

    </div>

  </div>
  <div class="bungkus">
<div class="iklan">
      Space iklan 100% x 100px
    </div>
</div>
</section>
<!-- ENd section menu -->
<?php
      include 'system/footer.php';
    ?>
</body>
</html>