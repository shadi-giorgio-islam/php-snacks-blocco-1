<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali
rappresentano delle partite di basket di un’ipotetica tappa
del calendario. Ogni array della partita avrà una squadra di
casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->
<!-- PHP -->
<?php
  $matches = [
    [
      'squadraCasa' => 'Inter',
      'puntiCasa' => 55,
      'squadraOspite' => 'Milan',
      'puntiOspite' => 45
    ],
    [
      'squadraCasa' => 'Napoli',
      'puntiCasa' => 40,
      'squadraOspite' => 'Juventus',
      'puntiOspite' => 45
    ],
    [
      'squadraCasa' => 'Roma',
      'puntiCasa' => 57,
      'squadraOspite' => 'Torino',
      'puntiOspite' => 30
    ],
    [
      'squadraCasa' => 'Fiorentina',
      'puntiCasa' => 36,
      'squadraOspite' => 'Lazio',
      'puntiOspite' => 62
    ]
  ];
  var_dump($matches);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

   <?php for($i = 0; $i < count($matches); $i++)
   {?>

       <h2><?php echo $matches[$i]['squadraCasa'] .'-' .$matches[$i]['squadraOspite'] .' | ' .$matches[$i]['puntiCasa'] .'-' .$matches[$i]['puntiOspite']?></h2>
​
    <?php }?>





</body>
</html>
