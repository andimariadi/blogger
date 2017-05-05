<?php 
    //script laporan input komentar
    if(empty($_SESSION['username'])){
        if (isset($_POST['comment'])) {
            $nama = $_POST['nama'];
            if ($nama == 'Admin') {
                echo "<script>alert('Wrong name !');history.go(-1);</script>";
            }
            else {
                $komentar = $_POST['komentar'];
                $url_gambar = $_POST['url_gambar'];
                $tanggal = date('M d, Y ').'at'.time(' h:i a');
                $artikel_id = $_GET['id'];
                $query_submit = mysqli_query($koneksi,"INSERT INTO `tbkomentar`(`id_komentar`, `id_artikel`, `nama`, `komentar`, `tanggal_komentar`, `url_gambar`, `refid`) VALUES ('','$artikel_id','$nama','$komentar','$tanggal','','')");
                    if ($query_submit) {
                        echo "<script>alert('Komentar berhasil dikirimkan !');history.go(-1);</script>";
                    }
                    else {
                        echo "<script>alert('Gagal menambahkan komentar !');history.go(-1);</script>";
                    }

            }

        } 
    }
    if(isset($_SESSION['username'])){
                
            if (isset($_POST['comment'])) {
                $nama = $_POST['nama'];
                $komentar = $_POST['komentar'];
                $url_gambar = $_POST['url_gambar'];
                $tanggal = date('M d, Y ').'at'.date(' h:i a');
                $artikel_id = $_GET['id'];
                $query_submit = mysqli_query($koneksi,"INSERT INTO `tbkomentar`(`id_komentar`, `id_artikel`, `nama`, `komentar`, `tanggal_komentar`, `url_gambar`, `refid`) VALUES ('','$artikel_id','$nama','$komentar','$tanggal','','')");
                if ($query_submit) {
                    echo "<script>alert('Komentar berhasil dikirimkan !');history.go(-1);</script>";
                }
                else {
                    echo "<script>alert('Gagal menambahkan komentar !');history.go(-1);</script>";
                }

            }
        }
    //ini inputnya
    $query_komentar = mysqli_query($koneksi,"SELECT * FROM tbkomentar where id_artikel = ".$id_artikel." and refid=0 order by id_komentar ASC");
    $jumlah=mysqli_query($koneksi,"SELECT COUNT(*) from tbkomentar where id_artikel = ".$id_artikel);
    $jum=count($jumlah);
    echo '
<div class="judul_sidebar">';
    if (mysqli_num_rows($query_komentar) == 0) {
            echo "Komentar";
        }
        else {
            echo "".$jum." Komentar";
        };
        echo "</div><br><br>";
        if (mysqli_num_rows($query_komentar) == 0) {
            echo '<br><br><br><center>"Tidak ada Komentar"</center><br><br><br>';
            } 
            else 
            {
                
                while ($data_komentar = mysqli_fetch_array($query_komentar)) 
                {


                    //script laporan input komentar
                    if(empty($_SESSION['username'])){
                        if (isset($_POST['reply_comment_'.$data_komentar[0]])) {
                            $nama_reply = $_POST['nama_reply'];
                            if ($nama_reply == 'Admin') {
                                echo "<script>alert('Wrong name !');history.go(-1);</script>";
                            }
                            else {
                                $komentar_reply = $_POST['komentar_reply'];
                                $url_gambar_reply = $_POST['url_gambar'];
                                $tanggal_reply = date('M d, Y ').'at'.date(' h:i a');
                                $refid = $data_komentar[0];
                                $artikel_id = $_GET['id'];
                                $query_submit_reply = mysqli_query($koneksi,"INSERT INTO `tbkomentar`(`id_komentar`, `id_artikel`, `nama`, `komentar`, `tanggal_komentar`, `url_gambar`, `refid`) VALUES ('','$artikel_id','$nama_reply','$komentar_reply','$tanggal_reply','','$refid')");
                                if ($query_submit_reply) {
                                    echo "<script>alert('Balasan Komentar berhasil dikirimkan !');history.go(-1);</script>";
                                }
                                else {
                                    echo "<script>alert('Gagal menambahkan balasan komentar !');history.go(-1);</script>";
                                }
                            }
                        }
                    } else {
                        if (isset($_POST['reply_comment_'.$data_komentar[0]])) {
                            $nama_reply = $_POST['nama_reply'];
                            $komentar_reply = $_POST['komentar_reply'];
                            $url_gambar_reply = $_POST['url_gambar'];
                            $tanggal_reply = date('M d, Y ').'at'.date(' h:i a');
                            $refid = $data_komentar[0];
                            $artikel_id = $_GET['id'];
                            $query_submit_reply = mysqli_query($koneksi,"INSERT INTO `tbkomentar`(`id_komentar`, `id_artikel`, `nama`, `komentar`, `tanggal_komentar`, `url_gambar`, `refid`) VALUES ('','$artikel_id','$nama_reply','$komentar_reply','$tanggal_reply','','$refid')");
                            if ($query_submit_reply) {
                                echo "<script>alert('Balasan Komentar berhasil dikirimkan !');history.go(-1);</script>";
                            }
                            else {
                                echo "<script>alert('Gagal menambahkan balasan komentar !');history.go(-1);</script>";
                            }
                        }
                    }


                    $query_balas = mysqli_query($koneksi,"SELECT * FROM tbkomentar where id_artikel = ".$id_artikel." and refid = ".$data_komentar[0]." order by id_komentar ASC");
                    $jum_balas = mysqli_query($koneksi,"SELECT COUNT(*) FROM tbkomentar where refid = ".$data_komentar[0]);
                    $jum_bal=count($jum_balas, 0);

                    echo '<script type="text/javascript">
                            $(document).ready(function(){
                              $(".button_reply_'.$data_komentar[0].'").click(function(){
                                $(".reply_form_'.$data_komentar[0].'").slideToggle();
                              });
                            });
                            </script>
    <div class="comment" id="comment'.$data_komentar[0].'">';
                    echo '<div class="comment_name"><div class="comment_image"><p>'.substr($data_komentar[2],0,1).'</p></div><div class="down-arrow"></div><p>'.$data_komentar[2].'</p><br><p><span>'.$data_komentar[4].'</span></p></div>
                    <center></center>
                    <div class="comment_text"><p>'.$data_komentar[3].'</p></div>';
                    echo '<a href="#"><div id="rep-'.$data_komentar[0].'" class="button_reply_'.$data_komentar[0].'" style="color: #629aff; text-align: right">Reply</div></a>';
                    echo '<div class="reply_form_'.$data_komentar[0].'" style="display:none" >

                    <form method="POST">
                        <div class="form-group">
                        Nama<br>
                        <input type="text" name="nama_reply" placeholder="Name"><br>
                        Komentar<br>
                        <textarea name="komentar_reply" placeholder="Message.." rows="5"></textarea><br>
                        <input type="submit" name="reply_comment_'.$data_komentar[0].'" value="Reply comment" class="reply">
                    </div>
                    </form>

                    </div>
                    </div>';

                    if ($jum_bal == 0 ) {
                        null;
                    }
                    else {
                        while ($xxx = mysqli_fetch_array($query_balas)) {
                            echo '

                            <script type="text/javascript">
                            $(document).ready(function(){
                              $(".button_reply_'.$xxx[0].'").click(function(){
                                $(".reply_form_'.$xxx[0].'").slideToggle();
                              });
                            });
                            </script>

                            <div class="reply_comment" id="comment'.$data_komentar[0].'">
                                <div class="reply_comment_name">
                                    <div class="reply_comment_image">
                                        <p>'.substr($xxx[2],0,1).'</p>
                                    </div>
                                <div class="downs-arrow"></div>
                                <p>'.$xxx[2].'</p><br>
                                <p><span>'.$xxx[4].'</span></p>
                            </div>
                            <div class="reply_comment_text"><p>'.$xxx[3].'</p></div>
                                <a href="#"><div id="rep-'.$xxx[0].'" class="button_reply_'.$xxx[0].'" style="color: #629aff; text-align: right">Reply</div></a>

                                <div class="reply_form_'.$xxx[0].'" style="display:none" >

                                <form method="POST">
                                    <div class="form-group">
                                    Nama<br>
                                    <input type="text" name="nama_reply" placeholder="Name"><br>
                                    Komentar<br>
                                    <textarea name="komentar_reply" placeholder="Message.." rows="5"></textarea><br>
                                    <input type="submit" name="reply_comment_'.$data_komentar[0].'" value="Reply comment" class="replys">
                                </div>
                                </form>

                                </div>

                            </div>';
                        }
                    }
                    
                }
                
        }

        ?>
        <h3>Leave a Reply</h3>
        <p>Please reply in my article <font color="red">*</font></p>
        <br>
        <form method="POST">
            <div class="form-group">
            Nama<br>
            <input type="text" name="nama" placeholder="Name"><br>
            Komentar<br>
            <textarea name="komentar" placeholder="Message.." rows="5"></textarea><br>
            <input type="submit" name="comment" value="Post comment" class="reply">
        </div>
        </form>
<script type='text/javascript'>
    //<![CDATA[
    $(document).ready(function(){
     $('a[href^="#"]').on('click',function (e) {
         e.preventDefault();

         var target = this.hash,
         $target = $(target);

         $('html, body').stop().animate({
             'scrollTop': $target.offset().top -80
         }, 900, 'swing', function () {
             window.location.hash = target;
         });
     });
    });
    //]]>
    </script>
