<?php
  session_start(); 
  if (stristr($_POST["rep"], "patate")):
?>

  <?php if ($_SESSION['reward1']=1 & $_SESSION['reward2']=1)?>
  <html>
    <?php include('includes/head.php') ?>
    <body class="fond">
      <section class="center">
        <article class="block">
            <p> Vous utilisez le portal gun pour échapper à Glados et à ses tests !</p>
          <a class="button" href="truend.php">Suite</a>
        </article>
      </section>
    </body>
  </html>

  <?php else:?>
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
  <body class="fond">
    <section class="center">
      <article class="block">
        <p>Mauvaise réponse sujet 42, essayez encore.</p>
        <button class="button" href="last.php">Retour</button>
      </article>
    </section>
  </body>
</html>

<?php endif; ?>