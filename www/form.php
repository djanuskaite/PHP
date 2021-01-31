
<!--<h5 style="color:SlateBlue;">GETTING USER INPUT // FORM</h5>-->

<?php //?>
<!---->
<!--<form action="form.php" method="get">-->
<!--    Name: <input type="text" name="username">-->
<!--    <br>-->
<!--    Age: <input type="number" name="age">-->
<!--    <input type="submit">-->
<!--</form>-->
<!--Your username is --><?php //echo $_GET["username"] ?>
<!--<br>-->
<!--Your age is --><?php //echo $_GET["age"] ?>

<!--<h5 style="color:SlateBlue;">BASIC CALCULATOR</h5>-->

<?php //?>
<!--<form action="form.php" method="get">-->
<!--    <input type="number" name="num1">-->
<!--    <br>-->
<!--    <input type="number" name="num2">-->
<!--    <input type="submit">-->
<!--</form>-->
<!---->
<!--Answer: --><?php //echo $_GET["num1"] + $_GET["num2"] ?>

<!--<h5 style="color:SlateBlue;">MAD LIBS GAME</h5>-->
<!---->
<!--<form action="form.php" method="get">-->
<!--    Color: <input type="text" name="color"> <br>-->
<!--    Plural noun: <input type="text" name="pluralNoun"> <br>-->
<!--    Celebrity: <input type="text" name="celebrity"> <br>-->
<!--    <input type="submit">-->
<!--</form>-->
<!--<br><br>-->
<?php
//$color = $_GET["color"];
//$pluralNoun = $_GET["pluralNoun"];
//$celebrity = $_GET["celebrity"];
//
//echo "Roses are $color <br>";
//echo "$pluralNoun are blue <br>";
//echo "I love $celebrity <br>";
//
//?>
<!---->
<!--<h5 style="color:SlateBlue;">URL PARAMETER</h5>-->
<!---->
<!--<form action="form.php" method="get">-->
<!--    Name: <input type="text" name="name"> <br>-->
<!--    <input type="submit">-->
<!--</form>-->
<!--<br><br>-->
<!---->
<?php
//echo $_GET["name"];
//?>

<h5 style="color:SlateBlue;">POST</h5>

<form action="form.php" method="post">
    Password: <input type="password" name="password"> <br>
    <input type="submit">
</form>
<br><br>

<?php
echo $_POST["password"];
?>
