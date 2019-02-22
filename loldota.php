<?php
 if (stristr($_POST["hots"], "LOL")) || (stristr($_POST["hots"], "DOTA"))
 {
    header('Location: ea.php');
  exit();
 }

 if (stristr($_POST["hots"], "HOTS")):?>
  <html>
  <?php include('includes/head.php') ?>
  <body class="reward1">
    <section class="center">
      <article class="block">
        <input class="input" type="text"/>
        <button class="button" type="submit">Envoyer</button>
      </article>
    </section>
  </body>
</html>
<?php else
      {
        :?>
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
      }

?>


