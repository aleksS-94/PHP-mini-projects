<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script src="https://kit.fontawesome.com/faba497495.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/phpForms.css">
</head>

<body>

    <?php
    $First = $_GET['first_name'];
    $Last = $_GET['last_name'];
    ?>
    <div>

        <h2 class="title"><i>Hi <?= $First . '&nbsp' .  $Last ?>!</i></h2>
        <h3 class="lineOne">Thanks for coming, I'm Aleks.</h3>
        <h4 class="lineTwo">This is my demo of how I carry data</h4>
        <h4 class="lineTwo">over to another file.</h4>
        <h4 class="lineThree">Its basic, but I'm just starting out!</h4>
        <i class="fa-regular fa-face-grin-beam icon"></i>
    </div>

    <a class="lineFour" href="https://aleksandra.click/php/"><i class="fa-solid fa-caret-left"></i> Back to projects</a>



</body>

</html>