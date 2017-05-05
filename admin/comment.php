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
    $query=mysqli_query($koneksi,"SELECT * FROM `tbkomentar` order by id_komentar ASC limit $start, $per_hal");
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
        <div class="left">M</div><div class="right"><p>Manage Comment</p>
        Your menage in user comment :)</div>

      </div>

    </div>
    <div class="arrow-down"><i class="fa fa-caret-down fa-lg"></i></div>
    <div class="form-article">
      <div class="bungkus">

        




        <div class="baris">

        <div class="header-article">
          
            <div class="col-1">No</div>
            <div class="col-3">Article title</div>
            <div class="col-4">Description</div>
            <div class="col-2">Date</div>
            <div class="col-2">Action</div>
        
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
                $isi =  substr($data[3],0,600);
                $image =  substr($data[1],0,1);
                $text = substr($data[3],0,50);
                $link_text = substr($data[1],0,50);
                $text1 = array('<p>','</p>');
                $text_rep = array(' ',' ');
                $link = str_replace(' ','-',$link_text);
                //start articles and image


            echo $i % 2 ? '<div class="baris list2">' : '<div class="baris list1">';        

              echo '<div class="col-1" style="text-align: center"><p>'.$data[0].'</p></div>
              <div class="col-3"><p><a href="'.$home.$data[1].'/'.$link.'.html" class="link">'.$data[2].'</a></p></div>
              <div class="col-4"><p>'.$text.'...</p></div>
              <div class="col-2"><p>'.date('F d, Y',strtotime($data[3])).'</p></div>
              <div class="col-2"><p><a href="#" class="edit"><i class="fa fa-edit fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <a href="#" class="delete"><i class="fa fa-trash-o fa-lg"></i></a></p></div>';
          
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