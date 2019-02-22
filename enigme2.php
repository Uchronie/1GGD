<?php
  if (stristr($_POST["youtube"], "youtube rewind 2018")):
?>

<html>
  <?php include('includes/head.php') ?>
  <body class="fond">
    <section class="center">
      <article class="block">
        <p>Bonjour sujet 42, je vous ai convoqué pour une série de test.<br><br>
        Quel est votre nom ?</p>
        <input class="input" type="text"/>
        <button class="button" type="submit">Envoyer</button>
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
