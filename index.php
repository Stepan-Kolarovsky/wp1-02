<?php
$name = "Štěpán Kolarovský"
?>
<?php $gender = "Muž"?>
<?php $skola = "Základní škola Velký Osek" ?>
<?php $narozeni = "6.3.2004" ?>
<?php $email = "stepan.kolarovsky@student.ossp.cz" ?>
<?php $number = "+420 723 610 817" ?>
<?php $konicky = "florbal, práce s počítači" ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1><?php echo $name; ?></h1>
 <li>Pohlaví: </li>
   <?php echo $gender; ?>
 <li>Základní škola</li>
   <?php echo $skola; ?>
 <li>Datum narození</li>
  <?php echo $narozeni; ?>
  
  <li>E-mail</li> 
    <?php echo $email; ?>stepan.kolarovsky@student.ossp.cz <br />
  <li>Telefon</li> 
   <?php echo $number; ?>
  <li>Koníčky</li>
    <?php echo $konicky; ?>
</body>
</html>