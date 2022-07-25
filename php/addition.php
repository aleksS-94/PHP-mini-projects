<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" href="../css/phpForms.css">

</head>

<body>

<?php
    $First = $_GET['add_first'];
    $Second = $_GET['add_second'];
    ?>
<div>
  <h3 class="titleCalc">The sum of</h3>
  <h3 class="titleCalc"><?= $First  . " and " . $Second ?></h3>
  <h3 class="titleCalc">is</h3>
  <h3 class="lineOneCalc"><?= $First + $Second ?></h3>
</div>

  <a class="lineFour" href="https://aleksandra.click/php/">Back to projects</a>


</body>

</html>