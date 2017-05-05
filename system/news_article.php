<?php
    include ('system/db.php');
    $query=mysqli_query($koneksi, "select * from tblartikel left join tbkategori on tblartikel.id_kategori=tbkategori.id_kategori order by id_artikel desc limit 0, 4");
?>
<?php
        if (mysqli_num_rows($query) == 0) {
            echo '<br><br><br><center>Sorry, Articles not found !</center><br><br><br>';
        } 
        else {
            while ($data = mysqli_fetch_array($query)) {
                // Gasan gambar vroh
                $query_gambar = mysqli_query($koneksi,"SELECT * FROM tbgambar where id_artikel = ".$data['id_artikel']);
                $jum_gambar = mysqli_query($koneksi,"SELECT COUNT(*) FROM tbgambar where id_artikel = ".$data['id_artikel']);
                $jum_gam=count($jum_gambar);
                $link_text = substr($data[1],0,50);
                $text1 = array('<p>','</p>');
                $text_rep = array(' ',' ');
                $link = str_replace(' ','-',$link_text);
                echo '<div class="news_articles">';

                if ($jum_gam == 0 ) {
                    echo '<img src="'.$home.'/style/css/default/img/user.png" />';
                }
                else {
                    while ($foto = mysqli_fetch_array($query_gambar)) {                   
                        echo '<img src="'.$home.'/'.$foto[2].'" />';
                    }
                }
                    //end image



                    echo '<div  class="judul_articles">';
                    echo '<a href="'.$data[0].'/'.$link.'.html">
                            '.substr($data[1],0,50).'
                        </a>
                    </div>';


                //end articles
                echo '</div>';
            }

        }
    ?>