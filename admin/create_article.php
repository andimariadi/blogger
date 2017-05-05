<?php
session_start();
if(empty($_SESSION['username'])){
    header('location:index.php');
}
include '../system/db.php';
if (isset($_POST['save'])) {
      $judul = $_POST['judul_artikel'];
      $isi = $_POST['isi_artikel'];
      $kategori = $_POST['id_kategori'];
      $tgl = date('Y-m-d');

      if (empty($_GET['update'])) {
        $query = mysqli_query($koneksi,"INSERT INTO tblartikel VALUES ('','$judul','$isi','$tgl','$kategori')");
      } else {
        $id_update = $_GET['update'];
        $query=mysqli_query($koneksi,"UPDATE `tblartikel` SET `judul_artikel`='$judul',`isi_artikel`='$isi',`tgl_artikel`='$tgl',`id_kategori`='$kategori' WHERE `id_artikel`='$id_update'");
      }


      if ($query) {
        echo '<script>alert(\'Berhasil membuat artikel " <b>'.$judul.' "\');history.go(-1);</script>';
      }
      else {
        echo '<script>alert(\'Gagal membuat artikel dengan judul " <b>'.$judul.'</b> "\');history.go(-1);</script>';
      }
      if(isset($_FILES['foto'])){
          $query=mysqli_query($koneksi,"select * from tblartikel order by id_artikel desc limit 0, 1");
          while ($data = mysqli_fetch_array($query)) 
          {
            $fileName = $_FILES['foto']['name']; //nama file
            $fileSize = $_FILES['foto']['size']; //ukuran file
            $fileError = $_FILES['foto']['error']; //
            $uploaddir= 'img/';
            $lokasi=$uploaddir.$fileName;
            if($fileSize > 0 || $fileError == 0){ //Check jika error
              $move = move_uploaded_file($_FILES['foto']['tmp_name'],$lokasi); //save gambar ke folder
              if($move){
                if (empty($_GET['img'])) {
                  $q = "INSERT into tbgambar VALUES('','$fileName','img/$fileName',".$data[0].")"; //memasukkan data ke database
                } else {
                  $img = $_GET['img'];
                  $q = "UPDATE `tbgambar` SET `nama_gambar`='$fileName',`lokasi_gambar`='img/$fileName',`id_artikel`=".$data[0]." WHERE `no_gambar`='$img'";
                //  $q = "INSERT into tbgambar VALUES('','$fileName','img/$fileName',".$data[0].")"; //memasukkan data ke database
                }

               mysqli_query($koneksi,$q);
              } else{
                echo "<center><h3>Failed mengunggah gambar! </h3></center>";
              }
            } 
          }
      }
    }

    if (isset($_POST['baru'])) {
      $nama_kategori = $_POST['nama_kategori'];
      $query = mysqli_query($koneksi,"INSERT INTO tbkategori VALUES ('','$nama_kategori')");
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
    <script src="<?php echo $home ?>style/js/tinymce.min.js"></script>
    <script>
        tinymce.init({selector:'textarea'});
    </script>
</head>
<body>
<?php
  include 'header.php';
?>
<section id='artikel'>

    <div class="judul">
      <div class="bungkus">
        <div class="left">P</div><div class="right"><p>Posting Article</p>
        Your can post article or your mind :)</div>

      </div>

    </div>
    <div class="arrow-down"><i class="fa fa-caret-down fa-lg"></i></div>
		
<?php 

  if (empty($_GET['update'])) {
    
  echo '<form method="post" name="posting_form" enctype="multipart/form-data" >';
    echo '<div class="bungkus">
      Judul Artikel<br>
      <input type="text" name="judul_artikel" size="30" class="form-control" placeholder="Masukan Judul" value=""><br>
            Kategori * <a  data-toggle="modal" href="#myModal">Buat Baru</a><br>
            <select class="form-control" name="id_kategori">';
                $a="SELECT * FROM tbkategori";
                $sql=mysqli_query($koneksi,$a);
                while($data=mysqli_fetch_array($sql)){
                  echo '<option value="'.$data[0].'">'.$data[1].'</option>';
          
                }
            echo '</select><br>
            Image header
    <input name="foto" type="file" accept="image/*" /><br>
    Isi Artikel<br>
      <textarea type="textarea" name="isi_artikel" class="form-control" placeholder="Masukan isi artikel" rows="10"></textarea><br>
    <input type="submit" name="save" value="Post article" class="reply">
    </div>
    </form>';

  }
  else {
    $id_artikel = $_GET['update'];
    $query=mysqli_query($koneksi,"select * from tblartikel left join tbkategori on tblartikel.id_kategori=tbkategori.id_kategori where tblartikel.id_artikel=$id_artikel order by id_artikel");
    while($datas=mysqli_fetch_array($query)){
      echo '<form method="post" name="posting_form" enctype="multipart/form-data" >';
  		echo '<div class="bungkus">
  			Judul Artikel<br>
  			<input type="text" name="judul_artikel" size="30" class="form-control" placeholder="Masukan Judul" value="'.$datas[1].'"><br>
              Kategori * <a  data-toggle="modal" href="#myModal">Buat Baru</a><br>
              <select class="form-control" name="id_kategori">';
                  $a="SELECT * FROM tbkategori";
                  $sql=mysqli_query($koneksi,$a);
                  while($data=mysqli_fetch_array($sql)){
                    echo '<option value="'.$data[0].'">'.$data[1].'</option>';
            
                  }
              echo '</select><br>
              Image header
      <input name="foto" type="file" accept="image/*"><br>
    	Isi Artikel<br>
    		<textarea type="textarea" name="isi_artikel" class="form-control" placeholder="Masukan isi artikel" rows="10">'.$datas[2].'</textarea><br>
    	<input type="submit" name="save" value="Post article" class="reply">
    	</div>
    	</form>';
      }

  }

?>
	</div>
</div>
</section>
    <!-- Modal kategori baru 
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">New Kategori</h4>
          </div>

          <div class="modal-body">
          <form method="post" name="posting_form" enctype='multipart/form-data' >
            <div class="form-group">
              Kategori Baru<br>
                <input type="text" name="nama_kategori" size="30" class="form-control" placeholder="Masukan nama kategori">
            </div>
            <input type="submit" name="baru" value="Tambah kategori" class="btn btn-primary">
          </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <!--<button type="submit" name="baru" value="save artikel" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Akhir Modal kategori baru -->
    <?php
      include '../system/footer.php';
    ?>

</html>