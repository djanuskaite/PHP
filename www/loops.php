<h5 style="color:SlateBlue;">WHILE LOOPS</h5>


<?php
$index = 1; // pradedame nuo vieno
while($index <= 5){ // (condition, kai indexas bus maziau || lygu 5, execute code)
    echo "$index <br>";
    $index++;  // $index = $index + 1 jei sita istrinsim, index visada bus = 1, begalybe
}
?>

<h5 style="color:SlateBlue;">DO WHILE LOOP</h5>
<!--do smth first & then check condition-->
<?php
$index = 6; // pradedame nuo vieno
do{
    echo "$index <br>";
    $index++;
} while ($index <= 5);
?>

<h5 style="color:SlateBlue;">FOR LOOP</h5>
<?php
$luckyNumbers = array(4, 8, 14, 16, 23, 42);

for($i = 0; $i < count($luckyNumbers); $i++  ){
    echo "$luckyNumbers[$i] <br>";
}
?>