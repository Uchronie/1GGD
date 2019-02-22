<?php
  if (!stristr($_POST["youtube"], "youtube rewind 2018")):
?>

<html>
  <?php include('includes/head.php') ?>
  <body class="intro">
    <section class="center">
      <article class="block">
        <p>Mauvaise réponse sujet 42, essayez encore.</p>
        <a class="button" href="youtube.php">Retour</a>
      </article>
    </section>
  </body>
</html>

<?php else: ?>

  <html>
    <?php include('includes/head.php') ?>
    <body class="fond">
      <section class="center">
        <article class="pad-20 dark-block block">
          <iframe width="450" height="250" src="https://www.youtube.com/embed/OAQ7l33UF3E"></iframe>
          <p>Continuez-vous de coder après ça ?</p>
          <a class="btn-blue button" href="hots.php">Non</a>
          <a class="btn-blue button" href="ae.php">Oui</a>
        </article>
      </section>
    </body>
  </html>

<?php endif; ?>
