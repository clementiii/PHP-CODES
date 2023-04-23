<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="arraysorting.php" method="post">
        <?php
        //Array Sorting Functions in PHP
            /* sort() - sort arrays in ascending order
                rsort() - sort arrays in descending order
                asort() - sort associative arrays in ascending order,
                          according to the value
                ksort() - sort associative arrays in ascending order,
                          according to the key
                arsort() - sort associative arrays in descending order,
                           according to the value
                krsort() - sort associative arrays in descending order,
                           according to the key 
                           */

            //sort()
            $cars = array("Volvo", "BMW", "Toyota");
            sort($cars);
            $clength = count($cars);
	        for($x = 0; $x < $clength; $x++) {
 	        echo $cars[$x];
	        echo "<br>";
            }

            //asort()
        
        ?>
    </form>
</body>
</html>