<script src="<?php echo $home ?>style/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo $home ?>style/js/responsiveslides.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  var waktu = 300;
  $('.button_navigasi').click(function(){
    $('.navigasi_toggle').fadeToggle();
    return $('#open').fadeToggle();
    return $('.button_navigasi').addClass('tampil');
  });
  $('.button_navigasi').click(function(){
    $('#close').fadeToggle();
    return $('.button_navigasi').RemoveClass('tampil');
  });
});
$(window).load(function(){
  $('#loader').fadeOut()
});
</script>
<header id="#header">
    <div class="header">
    <div class="logo">
      <a href="<?php echo $home ?>index.php"><img src="<?php echo $home ?>style/css/default/img/logo.png"></a>
      <p style="float: right">
      GET FREE CONSULTATION:<br/>
      <span><i class="fa fa-phone fa-lg"></i> (+021) 123-456-789</span></p>

    </div>
    <a href="#" id="show"><div class="button_navigasi">
      <i class="fa fa-th-list fa-lg" id="open" style="
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);"></i>
       <i class="fa fa-plus fa-lg fa-rotate-90" id="close" style="display:none; padding-left: 3px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);"></i>
    </div></a>
    <div class="navigasi_toggle">
    <ul>
      <li><a href="<?php echo $home ?>index.html">Home</a></li>
      <li><a href="<?php echo $home ?>article/">Artikel</a></li>
      <li><a href="<?php echo $home ?>contact/">Contact Us</a></li>
    </ul>
    </div>
    <div class="navigasi">
    <ul>
      <li class="active"><a href="<?php echo $home ?>index.html">Home</a></li>
      <li><a href="<?php echo $home ?>article/">Artikel</a></li>
      <li><a href="<?php echo $home ?>contact/">Contact Us</a></li>
      <?php
        if(empty($_SESSION['username'])) {
          NULL;
        } else {
          echo '<li><a href="'.$home.'Admin/">Admin Menu</a></li>
          <li><a href="'.$home.'/admin/logout.php">Log out</a></li>';
          echo '<p style="float: right; margin-top:50px; margin-right:20px; ">Hi, '.$_SESSION['username'].'</p>';
        }

      ?>
    </ul>
    
    </div>
</header>