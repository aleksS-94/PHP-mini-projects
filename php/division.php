<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="../css/phpForms.css">
</head>

<body>

<?php
    $Numerator = $_GET['div_first'];
    $Denominator = $_GET['div_second'];
    ?>
    <div>
    <h3 class="titleCalc"><?= $Numerator  . " divided by " . $Denominator ?></h3>
     <h3 class="titleCalc">is</h3>
  <h3 class="lineOneCalc"><?= $Numerator / $Denominator ?></h3>
</div>

    <a class="lineFour" href="https://aleksandra.click/php/">Back to projects</a>



</body>

</html>