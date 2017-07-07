<?php

    /**
     * User: alfairawan
     * Description: Sample Class and Properties
     */
    require "Car.php";
    require "fuel.php";

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

                $car = new FitTech\Login();
                echo $car->fuelMax = 20;

                echo $car->calculateFuel();

                ?>
            </span>
            <span>lt</span>
        </di>

        <di>
            <label>Fuel Min:</label>
            <span>
                <?php

                    fuel();

                ?>
            </span>
            <span>lt</span>
        </di>
    </body>
</html>