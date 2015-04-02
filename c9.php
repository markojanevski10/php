<?php

$choveci = array(
	array('ime' => 'Pero', 'prezime' => 'Perovski', 'email' => 'p@p.com'),
	array('ime' => 'Janko', 'prezime' => 'Jankovski', 'email' => 'j@j.com'),
	array('ime' => 'Ivan', 'prezime' => 'Ivanovski', 'email' => 'i@i.com'),
	array('ime' => 'Stanko', 'prezime' => 'Stankovski', 'email' => 's@s.com'),
	array('ime' => 'Sotir', 'prezime' => 'Sotirovski', 'email' => 's@s.com')

	);

$min_ime = 100;
$ime = '';
$max_prezime = 0;
$prezime = '';

foreach($choveci as $ardi){
	if(strlen($ardi['ime']) < $min_ime){
		$min_ime = strlen($ardi['ime']);
		$ime = $ardi['ime'];
	}
	
	if(strlen($ardi['prezime']) > $max_prezime){
		$max_prezime = strlen($ardi['prezime']);
		$prezime = $ardi['prezime'];
	}
}

echo "Najkratko ime: ".$ime;
echo '<br/>';
echo "Najdolgo prezime: ".$prezime;

  ?>




  <?php 

  $predmeti = array(
  		array('predmet' => 'Matematika', 'br_studenti' => '12'),
  		array('predmet' => 'Fizika', 'br_studenti' => '18'),
  		array('predmet' => 'Programiranje', 'br_studenti' => '32'),
  		array('predmet' => 'Hemija', 'br_studenti' => '4')

  	);
   
$sobirok = 0;

foreach($predmeti as $predmet){
	$sobirok += $predmet['br_studenti'];

}
echo 'Sredna vrednost na zapishani studenti po predmet: '.$sobirok / count($predmeti);

   ?>