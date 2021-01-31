
<h5 style="color:SlateBlue;">RETURN STATEMENTS</h5>


<?php
function cube($num){
    echo "Hello <br>";
    return $num * $num * $num;
}
echo cube(4);
?>

<h5 style="color:SlateBlue;">"IF" STATEMENTS</h5>

<?php
$isMale = false;
$isTall = true;
if ($isMale && $isTall){
    echo "You are a tall male";
} elseif($isMale && !$isTall){
    echo "You are a short male";
} elseif (!$isMale && $isTall){
     echo "You are not male but are tall";
} else {
  echo "You are not male and not tall";
}
?>

<h5 style="color:SlateBlue;">"IF" STATEMENTS (con't)</h5>

<?php
function getMax($num1, $num2, $num3)
{
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3){
        return $num2;
    } else {
        return $num3;
    }
}

echo getMax(500, 700, 400);

?>

<h5 style="color:SlateBlue;">BETTER CALCULATOR</h5>
<!--step="0.1" kad galetume vwst sk po kablelio -->
<form action="statements.php" method="post">
    First number: <input type="number" step="0.1" name="num1"> <br>
    OP: <input type="text" name="op"> <br>
    Second number: <input type="number" step="0.1" name="num2"> <br>
    <input type="submit">
</form>

<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

// by using if statement we allow program to respond this value
if($op == "+") {
    echo $num1 + $num2;
} elseif($op == "-") {
    echo $num1 - $num2;
} elseif($op == "/") {
    echo $num1 / $num2;
} elseif($op == "*") {
    echo $num1 * $num2;
} else {
    echo "Invalid Operator";
}

?>

<h5 style="color:SlateBlue;">SWITCH STATEMENTS</h5>

<form action="statements.php" method="post">
    What was your grade?
    <input type="text" name="grade">
    <input type="submit">
</form>

<?php
$grade = $_POST["grade"];
switch ($grade) {
    case "A";
        echo "You did amazing!";
        break; // statement that breaks out form a programming structure - jei jo nebus, istisai printins ta echo
    case "B";
        echo "You did pretty good";
        break;
    case "C";
        echo "You did poorly";
        break;
    case "D";
        echo "You did very bad";
        break;
    case "F";
        echo "You did FAIL!";
        break;
    default:
        echo "Invalid Grade";
}

?>

