<?php
//název proměné, operátor přiřazení, hodnota kterou ukládáme do proměné
$name = "Štěpán Kolarovský" ;
$gender = "Muž";
$school = "Základní škola Velký Osek";
$birthdate = "6.3.2004";
$email = "stepan.kolarovsky@student.ossp.cz";
$phone = "+420 723 610 817";
$hobbies = "florbal, práce s počítači" 
?>

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
    <?php echo $school; ?>
   <li>Datum narození</li>
     <?php echo $birthdate; ?>
   <li>E-mail</li> 
    <?php echo $email; ?>
   <li>Telefon</li> 
    <?php echo $phone; ?>
   <li>Koníčky</li>
    <?php echo $hobbies; ?>
</body>
</html>