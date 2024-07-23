<?php

$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$email = $_GET['email'];
$password = $_GET['password'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Risultato</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">

    <h1>RISULTATO</h1>

    <div class="container-form">
      <div class="left-form-get">
        <div class="box">
          <h2>
            Come ti avevo promesso ecco i tuoi dati!
          </h2>

          <p>
            Il tuo nome è: <?php $nome ?> mentre il tuo cognome è: <?php $cognome ?>.
            La tua e-mail è: <?php $email ?> ed infine la tua password: <?php $password ?> scherzo non rivelerei mai la tua password.
            <br>Forse sei in mani sicure!
          </p>

          <p>
            Infatti ecco qui puoi vedere anche la tua password <br>
            Il tuo nome è: <?php $nome ?> mentre il tuo cognome è: <?php $cognome ?>.
            La tua e-mail è: <?php $email ?> ed infine la tua password: <?php $password ?>.
          </p>
        </div>
      </div>

    </div>
  </div>
</body>

</html>