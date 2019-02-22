<?php
  session_start();
  $_SESSION['pseudo'] = $_POST['pseudo'];
?>

<html>
  <?php include('includes/head.php') ?>
  <body class="intro">
    <section class="center">
      <article class="block">
        <p>Très bien, vous serez donc le sujet 42. Commençons.</p>
      </article>
    </section>
  </body>
</html>
