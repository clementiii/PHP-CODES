<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ARRAYS</title>
</head>
<body>
    <form action="phparrays.php" method="post">
        <?php

            $arr = array(1,2,3,4,5);

            print_r($arr);
            echo "<br>";
            echo "<br>";
            //Example using Array Function
            $names = array("Peter","Quagmire","Joe");
            echo $names[0] . "<br>";
            echo $names[2] . "<br>";
            echo $names[1] . "<br>";
            echo "<br>";
            //Example using an Array Indexed
            $name[0] = "Alenere";
            $name[1] = "Jasfer";
            $name[2] = "Jaymar";

            echo $name[1]."<br>" . $name[2]."<br>" . $name[0] . "<br>";
            echo "<br>";

            //Associative Arrays
            $ages = array("Brent"=>42, "Andrew"=>25, "Joshua"=>16);

            print_r($ages);
            echo "<br>";
            echo "Brent is " . $ages['Brent'] . " years old";
            echo "<br>";

            //Two Dimentional Arrays
            $cars = array
            (
                array("Volvo",22,18),
                array("BMW",15,13),
                array("Saab",5,2),
                array("Land Rover",17,15)
            );
            
            echo $cars[0][0]." ".$cars[0][1]." ".$cars[0][2]."<br>";
            echo $cars[1][0]." ".$cars[1][1]." ".$cars[1][2]."<br>";
            echo $cars[2][0]." ".$cars[2][1]." ".$cars[2][2]."<br>";
            echo $cars[3][0]." ".$cars[3][1]." ".$cars[3][2]."<br>";
            echo "<br>";
            //ex 2
                        //  0   1     2
            $multi = array (7,"cat","dog",
            // 3    0     1     2
            array("sky","sun","cloud"));
            echo $multi[3][1]."<br>";
            print_r($multi);
            echo "<br>";
            echo "<br>";

            //Foreach
            $x = array("one","two","three");
            foreach($x as $value){

                    echo $value."</br>";
            }

            $colors = array('red','green'.'blue','yellow');
            foreach($colors as $color){

                    echo "Do you like $color?\n";
            }
            
            //in_array() Function
            $os = array("Mac","W7","W8","Linux");
            if(in_array("XP",$os)){
                echo "Got XP";
            }if(in_array("Mac",$os)){
                echo "Got Mac";
            }

            
        ?>
    </form>
</body>
</html>