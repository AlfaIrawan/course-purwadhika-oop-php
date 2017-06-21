<?php

/**
 * User: alfairawan
 * Description: Sample Class and Properties
 */
require "Car.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sample Object 02</title>
    </head>
    <body>
        <h1>Sample Object 02</h1>
        <?php $car = new SampleObject02\Car(); ?>
        <di>
            <label>Serial Number:</label>
            <span>
                <?php  echo $car->serialNumber = 576575; ?>
            </span>
            <span>lt</span>
        </di>
        <di>
            <label>Fuel Max:</label>
            <span>
                <?php  echo $car->fuelMax = 20; ?>
            </span>
            <span>lt</span>
        </di>
    </body>
</html>