<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <header>
            <h1>Calculator</H1>
        </header>
       <form action="functions.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <br>
        <select name="oper">
            <label>Choose operation!</label>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="div">Divide</option>
            <option value="times">Times</option>
            </select>
        <br>
            <input type="text" name="num02" placeholder="Number 2">
        <br>
            <button type="submit">Calculate!</button>
       </form>
       <h4>
       <?php
       date_default_timezone_set('Europe/London');
        echo "The date you logged on: " . date('j/m/y');
        ?>
        <br>
        <?php
        echo "The time you logged on: " . date('h:i:s');
        ?>
        </h4>
        <br>

        <h2>Do you want to calculate the the circumference, area and volume of a circle with just its radius?</h2>
        <form method="POST" action="index.php">
        <h1>Easy Mathematics</h1>
        <br>
        <label for="radius">What is the radius?</label><br>
        <input type="int" name="radius" placeholder="type a number here" required>
        <br>
        <input type="submit" value="Calculate">
        <br>
    </form>
    </body>
</html>

<?php

$radius = $_POST['radius'];
$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);
$area = pi() * pow($radius, 2);
$area = round($area, 2);
$volume = (4/3) * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "The radius you selected was $radius <br>";
echo "The circumference of this circle is $circumference <br>";
echo "The area of this circle is $area <br>";
echo "The volume of a sphere is $volume";

?>