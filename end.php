<?php
session_start();
if (stristr($_POST["rep"], "patate") && $_SESSION['reward1'] == 1 & $_SESSION['reward2'] == 1):?>
  <html>
    <?php include('includes/head.php') ?>
    <body class="fond">
      <section class="center">
        <article class="block dark-block">
            <p> Vous utilisez le portal gun pour échapper à Glados et à ses tests !</p>
            <?php print_r($_SESSION)?>
          <a class="button btn-blue" href="truend.php">Suite</a>
        </article>
      </section>
    </body>
  </html>

<?php elseif(stristr($_POST["rep"], "patate")):?>

  <html>
    <?php include('includes/head.php') ?>
    <body class="fond">
      <section class="center">
        <article class="block">
          <a class="button" href="falseend.php">Suite</a>
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
        <a class="button" href="last.php">Retour</a>
      </article>
    </section>
  </body>
  </html>
  
<?php endif; ?>
