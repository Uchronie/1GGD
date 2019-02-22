<html>
  <?php include('includes/head.php') ?>
  <body class="intro">
    <section class="center">
      <article class="block">
        <p>Bonjour Sujet <strong>42</strong>, je vous ai convoqué pour une série de test.<br><br>
        Quel est votre nom ?</p>
        <form method="POST" action="salutation.php">
          <input name="pseudo" class="input" type="text"/>
          <button class="button" type="submit">Envoyer</button>
        </form>
      </article>
    </section>
  </body>
</html>
