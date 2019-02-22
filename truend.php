<?php 
	session_start();
?>
<html>
  <?php include('includes/head.php') ?>
  <body class="dance">
  	<audio src="public/win.mp3" type="audio/mp3" autoplay controls>test</audio>
    <section class="center">
      	<h1> Félicitations <?php echo($_SESSION['pseudo']) ?> ! </h1>
    </section>
  </body>
</html>