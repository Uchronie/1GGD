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
        <a class="button" href="ae.php">Suite</a>
      </article>
    </section>
  </body>
</html>
