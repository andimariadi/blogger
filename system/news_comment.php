<?php
    include ('system/db.php');
    $query=mysqli_query($koneksi,"select * from tblartikel right join tbkomentar on tbkomentar.id_artikel=tblartikel.id_artikel order by id_komentar desc limit 0, 4");
?>
<?php
        if (mysqli_num_rows($query) == 0) {
            echo '<br><br><br><center>Sorry, Comment not found !</center><br><br><br>';
        } 
        else {
            while ($data = mysqli_fetch_array($query)) {
                

                echo '<div class="news_articles">';


                $link_text = substr($data[1],0,50);
                $link = str_replace(' ','-',$link_text);


                if ($data['url_gambar'] == NULL ) {
                    echo '<img src="'.$home.'/img/user.png" />';
                }
                else {
                    while ($foto = mysql_fetch_row($query_gambar)) {                   
                        echo '<img src="'.$home.'/'.$data['url_gambar'].'" />';
                    }
                }
                    //end image



                    echo '<div  class="judul_articles">';
                    echo '<a href="'.$data[0].'/'.$link.'.html#comment'.$data[5].'">
                            '.substr($data[7],0,25).'<p>'.substr($data[8],0,20).'... </p>
                        </a>
                    </div>';


                //end articles
                echo '</div>';
            }

        }
    ?>