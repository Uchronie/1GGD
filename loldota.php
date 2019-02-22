<?php if (stristr($_POST["hots"], "LOL") || stristr($_POST["hots"], "DOTA")):?>

  <html>
    <?php include('includes/head.php') ?>
    <body class="fond">
      <section class="center">
        <a class="button btn-ae btn-grey" href="ea.php">Suite</a>
      </section>
    </body>
  </html>

<?php elseif (stristr($_POST["hots"], "HOTS")):?>

  <html>
    <?php include('includes/head.php') ?>
    <body class="reward1">
      <section class="center">
        <a class="button btn-ae btn-grey" href="whisky.php">Suite</a>
      </section>
    </body>
  </html>
  <?php
    session_start();
    $_SESSION['reward1'] = 1;
  ?>

<?php else:?>

  <html>
  <?php include('includes/head.php') ?>
  <body class="intro">
    <section class="center">
      <article class="block">
        <p>Mauvaise réponse sujet 42, essayez encore.</p>
        <a class="button" href="hots.php">Retour</a>
      </article>
    </section>
  </body>
</html>

<?php endif; ?>
