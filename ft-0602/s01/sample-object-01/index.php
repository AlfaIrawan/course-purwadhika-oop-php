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
        <title>Sample Object 01</title>
    </head>
    <body>
        <h1>Sample Object 01</h1>
        <di>
            <label>Fuel Max:</label>
            <span>
                <?php

                    $car = new SampleObject01\Car();
                    echo $car->fuelMax = 20;

                ?>
            </span>
            <span>lt</span>
        </di>
    </body>
</html>