<h5 style="color:SlateBlue;">INHERITANCE</h5>

<?php

class Chef
{
    function makeChicken()
    {
        echo "The chef makes chicken <br>";
    }

    function makeSalad()
    {
        echo "The chef makes salad <br>";
    }

    function makeSpecialDish()
    {
        echo "The chef makes bbq ribs <br>";
    }
}

class ItalianChef extends Chef
{ // includinam funkcijas, kurios priklauso chef klasei
    function makePasta()
    {
        echo "The chef makes pasta";
    }
    // overriding function - perrasom special dish italian sefo
    function makeSpecialDish()
    {
        echo "The chef makes chicken parm";
    }
}

$chef = new Chef();
$chef->makeSpecialDish();

$italianChef = new ItalianChef();
$italianChef->makeSpecialDish();