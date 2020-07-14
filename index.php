<!-- ****************************   Snack 1:  ********************************
Creiamo un array 'matches' contenente altri array i quali rappresentano delle
partite di basket di un’ipotetica tappa del calendario. Ogni array della partita
avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

$matches = [
  $partitaUno = [
    'teamUno' => 'Milano',
    'teamDue' => 'Cantu',
    'puntiUno' => 55,
    'puntiDue' => 60
  ],
  $partitaDue = [
    'teamUno' => 'Catania',
    'teamDue' => 'Torino',
    'puntiUno' => 80,
    'puntiDue' => 20
  ],
  $partitaTre = [
    'teamUno' => 'Napoli',
    'teamDue' => 'Venezia',
    'puntiUno' => 35,
    'puntiDue' => 27
  ],
];

for ($i=0; $i < count($matches); $i++) {
  $thisPartita = $matches[$i];
  echo $thisPartita['teamUno'] . '-' . $thisPartita['teamDue'] . ' ' . '|' . ' ' . $thisPartita['puntiUno'] .'-'. $thisPartita['puntiDue'] . '<br />';
}

?>

<!-- *****************************   Snack 2:  ******************************
Passare come parametri GET name, mail e age e verificare (cercando i metodi che
non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”  -->

<?php

// $nome = $_GET['nome'];
// $mail = $_GET['mail'];
// $eta = $_GET['eta'];
//
// if (empty($nome) || empty($mail) || empty($eta)) {
//   echo 'Accesso negato';
// } else {
//   if (strlen($nome) < 3) {
//     echo 'Accesso negato';
//   }elseif (strpos($mail, '@') === false || strpos($mail, '.') === false) {
//   echo 'Accesso negato';
//   } elseif (!is_numeric($eta)) {
//   echo 'Accesso negato';
//   } else {
//     echo 'Accesso riuscito';
//   }
// }

?>
