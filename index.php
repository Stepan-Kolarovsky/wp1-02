<?php
//název proměné, operátor přiřazení, hodnota kterou ukládáme do proměné
/*
$first_name = "Štěpán" ;
$last_name = "Kolarovský" ;
$gender = "Muž";
$school = "Základní škola Velký Osek";
$birthdate = "6.3.2004";
$email = "stepan.kolarovsky@student.ossp.cz";
$phone = "+420 723 610 817";
$hobbies = "florbal, práce s počítači" 
*/
$first_name = "Jakub" ;
$last_name = " Vávrů" ;
$gender = "Muž";
$school = "Základní škola Zásmuky";
$birthdate = "6.1.2004";
$email = "jakub.vavru@student.ossp.cz";
$phone = "+420 776 542 345";
$hobbies = "práce s počítači, příroda, tůrovaní, kreslení" 
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <body>
  <h1><?= $first_name; ?><?= $last_name; ?></h1>
  <ul>
   <li>Pohlaví: <?= $gender; ?> </li>
   <li>Základní škola: <?= $school; ?></li>
   <li>Datum narození: <?= $birthdate; ?></li>
   <li>E-mail: <?= $email; ?></li> 
   <li>Telefon: <?= $phone; ?></li> 
   <li>Koníčky: <?= $hobbies; ?></li>
  </ul>
</body>
</html>