<?php
  if (stristr($_POST["youtube"], "youtube rewind 2018")):
?>

<html>
  <?php include('includes/head.php') ?>
  <body class="fond">
    <section class="center">
      <article class="block">
        <iframe width="300" height="400" src="https://www.youtube.com/embed/OAQ7l33UF3E"></iframe>
          <p> Continuez-vous de coder après ça ? </p>
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
