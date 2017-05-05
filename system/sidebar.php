<?php
    include ('system/db.php');
    $query=mysqli_query($koneksi,"select * from tblartikel order by id_artikel desc limit 0, 5");
    $query_popular = mysqli_query($koneksi,"SELECT * FROM tblartikel WHERE tgl_artikel > DATE_SUB(curdate(),INTERVAL 1 WEEK) ORDER BY id_artikel DESC LIMIT 0,5");
    $a="SELECT * FROM tbkategori order by id_kategori DESC";
    $sql=mysqli_query($koneksi,$a);
?>

    <div class="iklan_sidebar">
      Space iklan 100% x 190px
    </div>
    <div class="judul_sidebar">
      Latest Post
    </div>
    <div class="menu_sidebar">
		<?php
        if (mysqli_num_rows($query) == 0) {
            echo 'maaf, belum ada artikel';
        } 
        else {
            while ($data = mysqli_fetch_array($query)) {
            $link_text = substr($data[1],0,50);
            $link = str_replace(' ','-',$link_text);    
            echo '<div class="menu_link">
            <a href="'.$home.$data[0].'/'.$link.'.html">
            	'.$data[1].'
            </a></div>';
            }
        }
        ?>
	</div>
	<div class="judul_sidebar">RECENT POST</div>
	<div class="menu_sidebar">
	<?php
        if (mysqli_num_rows($query_popular) == 0) {
            echo '<div class="menu_link">maaf, belum ada artikel</div>';
        } 
        else {
            while ($data = mysqli_fetch_array($query_popular)) {
            $link_text = substr($data[1],0,50);
            $link = str_replace(' ','-',$link_text);    
            echo '<div class="menu_link">
            <a href="'.$home.$data[0].'/'.$link.'.html">
            '.$data[1].'
            </a>
            </div>';
            }
        }
        ?>
	</div>
	<div class="judul_sidebar">Label</div>
	<div class="menu_sidebar">
		<?php
            while($data=mysqli_fetch_array($sql)){    
            echo '<div class="menu_link">
                <a href="'.$home.'category/'.$data[0].'/'.$data[1].'/">'.$data[1].'</a>
                </div>';
            }
        ?>
    </div>
    <div class="judul_sidebar">Archive</div>
    <div class="menu_sidebar">
        <div class="menu_link">Coming Soon!</div>
    </div>