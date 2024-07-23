<?php

$name = $_GET['name'];
$lastname = $_GET['lastname'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina atterraggio GET</title>
</head>
<body>

<h1>Grazie <?php echo $name ?> <?php echo $lastname ?> per averci scritto</h1>
  
</body>
</html>