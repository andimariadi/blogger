<?php
    include ('system/db.php');
    $per_hal=5;
    if (empty($_GET['category'])) {
        
        $jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from tblartikel");
        $jum=count($jumlah_record);
        $halaman=ceil($jum / $per_hal);
        $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
        $start = ($page - 1) * $per_hal;

        $query=mysqli_query($koneksi,"select * from tblartikel left join tbkategori on tblartikel.id_kategori=tbkategori.id_kategori order by id_artikel desc limit $start, $per_hal");



    } else 



    if ($_GET['category']) {
        $id_category = $_GET['category'];
        $label = $_GET['label'];

        $jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from tblartikel left join tbkategori on tblartikel.id_kategori=tbkategori.id_kategori where tblartikel.id_kategori=$id_category");
        $jum=count($jumlah_record, 0);
        $halaman=ceil($jum / $per_hal);
        $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
        $start = ($page - 1) * $per_hal;

        $query=mysqli_query($koneksi,"select * from tblartikel left join tbkategori on tblartikel.id_kategori=tbkategori.id_kategori where tblartikel.id_kategori='".$id_category."' order by id_artikel desc limit $start, $per_hal");
    }
?>
<?php
        if (mysqli_num_rows($query) == 0) {
            echo '<br><br><br><center>Sorry, Articles not found in category</center><br><br><br>';
        } 
        else {
            while ($data = mysqli_fetch_array($query)) {
                // Gasan gambar vroh
                $query_gambar = mysqli_query($koneksi,"SELECT * FROM tbgambar where id_artikel = ".$data['id_artikel']);
                $jum_gambar = mysqli_query($koneksi,"SELECT COUNT(*) FROM tbgambar where id_artikel = ".$data['id_artikel']);
                $jum_gam=count($jum_gambar, 0);
                // Komentar vroh
                $query_komentar = mysqli_query($koneksi,"SELECT COUNT(*) FROM tbkomentar where id_artikel = ".$data['id_artikel']." order by id_komentar ASC");
                $jum=count($query_komentar, 0);
                // isi vroh
                $isi =  substr($data['isi_artikel'],0,600);
                $image =  substr($data[1],0,1);
                $link_text = substr($data[1],0,50);
                $text1 = array('<p>','</p>');
                $text_rep = array(' ',' ');
                $link = str_replace(' ','-',$link_text);
                //start articles and image
                echo '<div class="articles">';
                if ($jum_gam == 0 ) {
                    echo '<div class="image">'.$image.'</div>';
                }
                else {
                    while ($foto = mysqli_fetch_array($query_gambar)) {                   
                        echo '<div class="image-720"><img src="'.$home.$foto[2].'"/><p>'.substr($data[1],0,1).'</p></div>';
                    }
                }
                //end image
                echo '
                <div class="judul-articles">';
                echo '<a href="'.$home.$data[0].'/'.$link.'.html">
                                '.$data[1].'
                            </a>
                </div><p>
                    <i class="fa fa-calendar fa-lg"></i> '
                            .date('d F Y',strtotime($data['tgl_artikel'])).'
                            &nbsp;&nbsp;&nbsp;&nbsp; 
                            <i class="fa fa-bookmark fa-lg"></i> '.$data['nama_kategori'];
                if ($jum == 0) {
                    echo '&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-comment-o fa-lg"></i> Leave a comments';
                }
                else {
                    echo '&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-comment-o fa-lg"></i> '.$jum.' Comments';
                }
                echo '</p>';
                if ($data['isi_artikel'] > $isi) {
                        echo ''.str_replace($text1,$text_rep,substr($data['isi_artikel'],0,600)).'
                        ... <p align="right"><a href="'.$home.'/'.$data[0].'/'.$link.'.html">
                            <span class="badge">Read more</span>
                        </a></p>';
                        }
                        else
                        {
                            echo ''.$data['isi_artikel'].'
                            ';
                        }
                //end articles
                echo '<div class="clear"></div></div>';
            }

        }
    ?>
    <center>
        <?php
        //menampilkan link << Previous  
        echo '<div style="padding-left: 15px;padding-right: 15px;"><span style="float: left;margin-bottom: 10px;">Page '.$page.' of '.$halaman.'</span>'; 
            if ($page > 1){   echo  '<a href="'. (($page)-1) .'" class="page"><i class="fa fa-caret-left fa-lg"></i><i class="fa fa-caret-left fa-lg"></i> Prev</a>';}
        //menampilkan urutan paging   
            for($i = 1; $i <= $halaman; $i++){   
        //mengurutkan agar yang tampil i+3 dan i-3            
            if ((($i >= $page - 3) && ($i <= $page + 3)) || ($i == 1) || ($i == $halaman)){
                if($i==$halaman && $page <= $halaman-5) echo "...";               
                    if ($i == $page) echo '<a href="'.$i.'" class="page">'.$i.'</a>';               
                        else echo '<a href="'.$i.'" class="page">'.$i.'</a>';               
                    if($i==1 && $page >= 6) echo "...";            
                }   
            }   //menampilkan link Next >>   
            if ($page < $halaman){   echo '<a href="'.(($page)+1).'" class="page">Next <i class="fa fa-caret-right fa-lg"></i><i class="fa fa-caret-right fa-lg"></i></a>';   }  
          echo '</div>';
          ?>
    </center>