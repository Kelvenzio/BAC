<?php
  $naam = $_POST['name'];
  $fout = $_POST['fout'];
  $norm = $_POST['norm'];
  $cijfer = 10-($fout / $norm);

  if(empty($naam)){
    echo 'Je hebt je naam niet ingevuld<br>';
  }
  else {
    $naam = strtolower($naam);
    $naam = ucfirst($naam);
    echo 'Naam: '.$naam.'<br>';
      }
  if(empty($fout)){
    echo 'Je hebt geen aantal fouten ingevuld<br>';
  }
  else {
    if(strlen($fout > 99)){
      echo'Dit is geen goede invoer<br>';
    }
    else {
      echo 'Aantal fout: '.$fout.'<br>';
      echo 'Norm: '.$norm.'<br>';
      echo 'Cijfer: '.$cijfer.'<br>';
    }
  }
  echo '<a href="1a.php">Terug naar formulier</a>'

 ?>
