<?php
  if (stristr($_POST["reponse"], "javascript")):
?>

<html>
  <?php include('includes/head.php') ?>
  <body class="fond">
    <section class="center">
      <article class="block">
          <p> Hello There ou Hello World ?</p>
        <a class="button" href="ctrln.php">Hello There</a>
        <a class="button" href="patate.php">Oui</a>
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
        <input class="input" type="text"/>
        <button class="button" type="submit">Envoyer</button>
      </article>
    </section>
  </body>
</html>

<?php endif; ?>
