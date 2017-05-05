<?php
    session_start();
    include ('system/db.php');
    
    $id_artikel = $_GET['id'];
    $title = $_GET['title'];
    $query = mysqli_query($koneksi,"select * from tblartikel left join tbkategori on tblartikel.id_kategori=tbkategori.id_kategori where id_artikel=".$id_artikel);
    $title = mysqli_query($koneksi,"select * from tblartikel left join tbkategori on tblartikel.id_kategori=tbkategori.id_kategori where id_artikel=".$id_artikel);
    //menampilkan isi artikel yang sudah kita buat
    $query_gambar = mysqli_query($koneksi,"SELECT * FROM tbgambar where id_artikel = ".$id_artikel);
    
        
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
    <link href="<?php echo $home ?>style/css/default/styles.css" rel="stylesheet">
    <link href="<?php echo $home ?>style/css/default/fonts.css" rel="stylesheet">
    <link href="<?php echo $home ?>style/css/default/responsive.css" rel="stylesheet">
    <link href="<?php echo $home ?>style/js/jquery-1.9.1.min.js" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $home ?>style/css/default/img/ico.png" type="image/vnd.microsoft.icon" />
</head>
<body>
<?php
    include ('system/header.php');
?>
<!-- Memuat artikelnya-->
<section id='artikel'>


<?php
    while ($data = mysqli_fetch_array($query)) 
    {
        $jum_gambar = mysqli_query($koneksi,"SELECT COUNT(*) FROM tbgambar where id_artikel = ".$id_artikel);
        $text1 = array('<p>','</p>');
        $text_rep = array(' ',' ');
        $image =  substr($data[1],0,1);
        echo '
        <div class="judul">
        <div class="bungkus">
            <div class="left">'.substr($data[1],0,1).'</div><div class="right"><p>'.$data[1].'</p>
            '.str_replace($text1,$text_rep,substr($data[2],0,150)).'
            </div>
        </div>
        </div>
        <div class="arrow-down"><i class="fa fa-caret-down fa-lg"></i></div>


        <div class="bungkus">
        <div class="baris">
        <div class="col-8 article"><div class="footer_title">'.$data[1].'</div>';
        echo '<div class="read">';
        echo '<p><i class="fa fa-calendar fa-lg"></i> '.date('d F Y',strtotime($data[3])).'&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-bookmark fa-lg"></i> '.$data[6].'</p>';
        
            if ($jum_gambar == NULL ) {
                echo '<div class="articles"><div class="image">'.$image.'</div></div>';
            }
            else
            {
                while ($foto = mysqli_fetch_array($query_gambar)) 
                {
                    echo '<img src="'.$home.$foto[2].'" style="float:left" />';
                }
            }
        echo '<p>'.$data[2].'</p><br/><br/>';
        echo "<p class='share'>Share it </p>";
        //echo "<a title='Share on Facebook' name='fb_share' type='button_count' href='http://www.facebook.com/sharer.php' rel='nofollow'>Share</a><script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>";
    }


        include 'system/comment.php';

?>
        </div>
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
</div>
</section>
<!-- ENd section menu -->
<?php
    include 'system/footer.php';
?>
</body>
</html>