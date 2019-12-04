<?php
$cds = array();
MaakCD('Citizen of Glass', 4.5);
MaakCD('Night kost', 9);
MaakCD('New Eyes kost', 5);
MaakCD('Strange Trails', 10);
echo "\n Favoriete artiesten: \n \n";
for ($i=0; $i < count($cds); $i++)
{
  echo ' ' . $cds[$i]['Naam'] . ' kost ' . '€' . $cds[$i]['Prijs'] . "\n";
}
echo " \n" . 'Het totaalbedrag van alle albums is ' . '€' . BerekenTotaal($cds) . "\n";
echo " \n" . 'De gemiddelde prijs van alle albums is ' . '€' . BerekenGemiddelde(BerekenTotaal($cds), count($cds)) . "\n";
function BerekenGemiddelde($totaal, $aantal)
{
  return $totaal / $aantal;
}
function BerekenTotaal($array)
{
  $totaal = 0;
  for ($i=0; $i < count($array); $i++)
  {
    $totaal += $array[$i]['Prijs'];
  }
  return $totaal;
}
function MaakCD($naam, $prijs)
{
  global $cds;
  $cd = array('Naam' => $naam, 'Prijs' => $prijs);
  array_push($cds, $cd);
}
 ?>
