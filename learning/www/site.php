<!DOCTYPE html>
<head>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body>

<h5 style="color:SlateBlue;">VARIABLES</h5>
<?php
// VARIABLES
// w' a dollar sign we are creating variable
$characterName = "Alex";
$characterAge = 55;

echo "There once was a man named $characterName <br>";
echo "He was $characterAge years old <br>";
echo "He really liked the name $characterName <br>";
echo "But didn't like being $characterAge <br>";
?>

<h5 style="color:SlateBlue;">DATA TYPES</h5>
<?php
// DATA TYPES
$phrase = "To be or not to be"; // string
$age = 30; // integer - whole number
$gpa = 32.9; // number w' a decimal
$isMale = false; // boolean
// null - no value
echo "$phrase <br>";
?>

<h5 style="color:SlateBlue;">WORKING W' STRINGS</h5>
<?php
// WORKING W' STRINGS *string function*
$phrase = "Giraffe Academy";
// strlentoupper/lower // strlen shows how many characters there are
//$phrase[0] = "B";
//echo str_replace("Giraffe", "Panda", $phrase);
// 8 - is index here

echo substr($phrase, 8, 3);
?>

<h5 style="color:SlateBlue;">WORKING W' NUMBERS</h5>
<?php
// WORKING W' NUMBERS
 $num = 10;
 $num *= 25; // $num = $num + 25;
echo $num; // modules operator
echo "<br>";
echo abs(-100);// gives me back an absolute value
echo "<br>";
echo pow(2, 4);
echo "<br>";
echo sqrt(144);
echo "<br>";
echo min(2, 10); // compare numbers
echo "<br>";
echo round(3.2); // suapvalinti
echo "<br>";
echo ceil(3.3); // round number up
echo "<br>";
echo floor(3.3); // round number down
?>

</body>
</html>