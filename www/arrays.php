

<h5 style="color:SlateBlue;">ASSOCIATIVE ARRAYS</h5>

<form action="arrays.php" method="post">
    <input type="text" name="student">
    <input type="submit">
</form>

<?php
$grades = array("Andrea"=>"A+", "Alexa"=>"B-", "Alejandro"=>"C+", );
$grades["Andrea"] = "F";
//echo count ($grades);

// grabbing the value that user entered
echo $grades[$_POST["student"]];

?>


<h5 style="color:SlateBlue;">CHECKBOXES</h5>

<form action="arrays.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit">
</form>

<?php
$fruits = $_POST["fruits"];
echo $fruits[0];
?>


<h5 style="color:SlateBlue;">ARRAY</h5>
<?php
$friends = array("Kevin", "Karen", "Oscar", "Jim");
$friends[4] = "Luke";
//print_r($friends[4]);
echo count($friends);
?>
