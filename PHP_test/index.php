<?php
/*
* Author: Martynas KITM
*/

$name = "Martynas";
$name = "Ieva";

// primityvus duomenu tipai:

$onLine = true; // false - loginis duomenu tipas

$count = 12;

$sum = 12.45;

$title = "My Book";

$firstLast = '';

echo "My favourite book \"$title\"";

//echo 'My favourite book' . $title;
//echo "My favourite book $title";

// var_dump($name); - koks kintamasis, reiksme, ilgis

?>

<!-- is naujos eilutes-->
<ul>
    <li>Vardas: <?=$name?></li>
    <li>Ar prisijunges: <?=$onLine?></li>
    <li>Nariu kiekis: <?=$count?></li>
    <li>Pinigu suma: <?=$sum?></li>
    <li>Megstama knyga: <?=$name?></li>
</ul>

<?php
/*
* Sukurti kintamuosius kurie apraso mokinio duomenis (ir priskirti reiksmes):
 * Vardas
 * Pavarde
 * Klase
 * Vidurkis
 * Dalyku kiekis
 *
 * Duomenis isvest HTML lenteleje
*/

$name = "Tomas";
$surname = "Petrauskas";
$class = "8A";
$average = 8.9;
$amount = 4;
?>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Class</th>
        <th>Average</th>
        <th>Quantity</th>
    </tr>
    <tr>
        <td><?=$name?></td>
        <td><?=$surname?></td>
        <td><?=$class?></td>
        <td><?=$average?></td>
        <td><?=$amount?></td>
    </tr>
</table>

<?php

// funkcijos darbui su tekstu
$eilute = " Labas rytas, Lietuva! ";
$ilgis = strlen($eilute);
$eilute_be_tarpu = trim($eilute);
$didziosios_raides = strtoupper($eilute);
$mazosios_raides = strtolower($eilute);
$pavadinimas = ucfirst($eilute);
$tekstas = str_replace("Lietuva", "Latvija", $eilute);
$zodis = substr($eilute, 1, 5);

?>

<!--f-jos darbu i su testu-->
<div>
    <p> <?= $eilute ?></p>
    <p><?= $ilgis ?></p>
    <p><?= $eilute_be_tarpu ?></p>
    <p><?= $didziosios_raides ?></p>
    <p><?= $mazosios_raides ?></p>
    <p><?= $pavadinimas ?></p>
    <p><?= $tekstas ?></p>
    <p><?= $zodis ?></p>
</div>


<?php

$name = "Martynas";

$data = []; // deklaruojam masyva
// $data = [12, false, 'Martynas', 'KITM'];
$data = [ //  indeksuotasis masyvas
    111 => 'MacBook',
    888 => 'Lenovo TAB',
    1234 => 'IdeaPad'
];

//asociatyvus masyvas

$items = [
    'KOMP-1' => "MacBook Pro",
    'TEL-1' => "iphone X",
    'KITA' => "Keyboard"
];

// daugiamatis masyvas

$nav = [
    'Prekes' => [
        'Technika',
        'Maistas',
        'Priedai'
    ],
    'Paslaugos' => [
        'Programavimas',
        'Konsultavimas'
    ]
];

// kiek masyve yra elementu

echo $nav['Prekes'][1];

$count = 15;

if($count == 15) {
    echo " Lygu";
}  elseif($count > 5) {
    echo "Daugiau";
    }
else {
    echo "nelygu";
}

?>

<?php
if($count == 15):?>

<div>Lygu, nes count reiksme yra <?=$count;?></div>

<?php else:?>

    <div>Nelygu</div>

<?php endif; ?>

<ul>
    <li>Elementas: <?=$data[1234]?></li>

</ul>

<?php
// switchas
$language = 'ru';

switch ($language){
    case 'lt':
        echo "Sveiki";
        break;
    case 'en':
        echo "Hello";
        break;
    case 'ru':
        echo "Privet";
        break;
    default:
        echo "Kalba nezinoma";
}
?>
<div>
</div>

<?php

// konstantos
const host = " localhost";

echo host;
?>

<?php

$data = ['Martynas', 'Paulius', 'Ieva', 'Patricija'];

$count = 12;

foreach ($data as $key => $value) {
echo "$key : $value";
}
?>

<!--foreach ciklas-->
<ul>
    <?php foreach ($data as $key => $value) :?>
        <li><span><?=$key;?></span><?=$value;?></li>
    <?php endforeach;?>
</ul>

<!--for ciklas-->
<ul>
    <?php for($i=0;$i<count($data);$i++ ):?>
    <li><?=$data[$i];?></li>
    <?php endfor;?>
</ul>

<div>WHILE</div>
<!--while-->
<?php
$arr = array("orange", "banana", "apple", "raspberry");

$i = 0;
while ($i < count($arr)) {
    $a = $arr[$i];
    echo $a ."\n";
    $i++;
}
?>
<div></div>
<?php
/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}

/* example 2 */

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?>
<div>DO WHILE</div>
<?php
$i = 0;
do {
    echo $i;
} while ($i > 0);
?>
<div></div>
<?php
$i = 0;
echo 'This code will run at least once because i default value is 0.<br/>';
do {
    echo 'i value is ' . $i . ', so code block will run. <br/>';
    ++$i;
} while ($i < 10);
?>

