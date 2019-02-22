<?php
  if (stristr($_POST["reponse"], "javascript") || stristr($_POST["reponse"], "js")):
?>

<html>
  <?php include('includes/head.php') ?>
  <body class="fond">
    <section class="center">
      <article class="block dark-block">
          <p> Hello There ou Hello World ?</p>
        <a class="button btn-blue" href="ctrln.php">Hello There</a>
        <a class="button btn-blue" href="patate.php">Hello World</a>
      </article>
    </section>
  </body>
</html>

<?php else: ?>
<html>
  <?php include('includes/head.php') ?>
  <body class="intro">
    <section class="center">
      <article class="block">
        <p>Mauvaise réponse sujet 42, essayez encore.</p>
        <a class="button" href="java.php">Retour</a>
      </article>
    </section>
  </body>
</html>

<?php endif; ?>
