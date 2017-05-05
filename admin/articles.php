<?php
session_start();
    if(empty($_SESSION['username'])){
        header('location:index.php');
    }
    include ('../system/db.php');
    $per_hal=10;
    $jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from tblartikel");
    $jum=count($jumlah_record, 0);
    $halaman=ceil($jum / $per_hal);
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
    $start = ($page - 1) * $per_hal;
    $query=mysqli_query($koneksi,"select * from tblartikel left join tbkategori on tblartikel.id_kategori=tbkategori.id_kategori order by id_artikel DESC limit $start, $per_hal");


    if (isset($_GET['del'])) {
        $iddel = $_GET['del'];
        $querydel = mysqli_query($koneksi,"DELETE FROM `tblartikel` WHERE id_artikel='$iddel'");
        if ($querydel) {
            echo '<script>alert(\'Berhasil menghapus artikel\');history.go(-1);</script>';
        }
        else {
            echo '<script>alert(\'Gagal menghapus artikel"\');history.go(-1);</script>';
        }
    }
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
  include 'header.php';
?>
<!-- End Section Header -->
<section id='artikel'>

    <div class="judul">
      <div class="bungkus">
        <div class="left">M</div><div class="right"><p>Manage Articles</p>
        Your menage in posting :)</div>

      </div>

    </div>
    <div class="arrow-down"><i class="fa fa-caret-down fa-lg"></i></div>
    <div class="form-article">
      <div class="bungkus">

        <div style="float: right"><a href="create_article.php" class="btn-new">New Articles</a></div>




        <div class="baris">

        <div class="header-article">
          
            <div class="col-1">No</div>
            <div class="col-3">Article title</div>
            <div class="col-4">Description</div>
            <div class="col-2">Date</div>
            <div class="col-1">Category</div>
            <div class="col-1">Action</div>
        
        </div>
        
        </div>
        
        <div class="baris">

        <div class="isi-article">

        <?php
        $i = 0;
        if (mysqli_num_rows($query) == 0) {
            echo 'maaf, belum ada artikel';
        } 
        else {
            while ($data = mysqli_fetch_array($query)) {
            // isi vroh
                $isi =  substr($data['isi_artikel'],0,600);
                $image =  substr($data[1],0,1);
                $array1 = array('<b>','<p>','<a>','<div>','<strong>');
                $array2 = array('','','','','');
                $text1 = str_replace($array1,$array2,$data[2]);
                $text = substr($text1,0,50);
                $link_text = substr($data[1],0,50);
                $link = str_replace(' ','-',$link_text);
                //start articles and image
                
                    echo $i % 2 ? '<div class="baris list2">' : '<div class="baris list1">';        

                    echo '<div class="col-1" style="text-align: center"><p>'.$data[0].'</p></div>
                    <div class="col-3"><p><a href="'.$home.$data[0].'/'.$link.'.html" class="link">'.$data[1].'</a></p></div>
                    <div class="col-4"><p>'.$text.'...</p></div>
                    <div class="col-2"><p>'.date('F d, Y',strtotime($data[3])).'</p></div>
                    <div class="col-1"><p>'.$data[6].'</p></div>
                    <div class="col-1"><p><a href="create_article.php?update='.$data[0];

                $a = mysqli_query($koneksi,"select * from tbgambar where id_artikel=$data[0]");
                while ($xxx = mysqli_fetch_array($a)) {

                    echo '&img='.$xxx[0];
                }
                    echo '" class="edit"><i class="fa fa-edit fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="articles.php?del='.$data[0].'" class="delete" name="delete"><i class="fa fa-trash-o fa-lg"></i></a></p></div>';
                  
                    echo '</div>';
                    ++$i;
                
            }
        }

        ?>


        </div>
        
        <center>
        <?php
        //menampilkan link << Previous  
            echo '<div style="padding-top: 30px;padding-left: 15px;padding-right: 15px; clear: both"><span style="float: left;margin-bottom: 10px;">Page '.$page.' of '.$halaman.'</span>'; 
                if ($page > 1){   echo  '<a href="?page='. (($page)-1) .'" class="page">&lt;&lt; Prev</a>&nbsp;&nbsp;';}
        //menampilkan urutan paging   
            for($i = 1; $i <= $halaman; $i++){   
        //mengurutkan agar yang tampil i+3 dan i-3            
            if ((($i >= $page - 3) && ($i <= $page + 3)) || ($i == 1) || ($i == $halaman)){
                if($i==$halaman && $page <= $halaman-5) echo "...";               
                    if ($i == $page) echo '<a href="?page='.$i.'" class="page">'.$i.'</a>&nbsp;&nbsp;';               
                        else echo '<a href="?page='.$i.'" class="page">'.$i.'</a>&nbsp;&nbsp;';               
                    if($i==1 && $page >= 6) echo "...";            
                }   
            }   //menampilkan link Next >>   
            if ($page < $halaman){   echo '<a href="?page='.(($page)+1).'" class="page">Next &gt;&gt;</a>';   }  
          echo '</div>';
          ?>
    </center>
        </div>  

      </div>
    </div>
    
</section>
<!-- ENd section menu -->
<?php
      include '../system/footer.php';
    ?>
</body>
</html>
<!--<input type="file" accept="image/*" />-->