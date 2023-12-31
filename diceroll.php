<?php

$_POST['numberOfRolls'] = $_POST['numberOfRolls'] ?? 0;
$numberOfRolls = $_POST['numberOfRolls'];

$_POST['dieResult'] = $_POST['dieResult'] ?? 0;
$dieResult = $_POST['dieResult'];


$diceTypes = ['d4', 'd6', 'd8', 'd10', 'd12', 'd20'];

$_POST["dieType"] = $_POST["dieType"] ?? 'd4';
$dieType = $_POST["dieType"];

$diceRolled = [];

//Function for rolling dice
function rollDie($dieType) {

    switch($dieType){
        case 'd4':
            $dieResult = rand(1,4);
            break;
        case 'd6':
            $dieResult = rand(1,6);
            break;
        case 'd8':
            $dieResult = rand(1,8);
            break;
        case 'd10':
            $dieResult = rand(1,10);
            break;
        case 'd12':
            $dieResult = rand(1,12);
            break;
        case 'd20':
            $dieResult = rand(1,20);
            break;
    }

    return $dieResult;

}

function rollDice($numberOfRolls, $dieType){

    $diceRolls = [];

    for($i = 1 ; $i <= $numberOfRolls; $i++){

        $dieResult = rollDie($dieType);

        array_push($diceRolls, $dieResult);

    }

    return $diceRolls;
}




?>

<html>
    <head>
        <link rel="stylesheet" href="diceroll.css">
    </head>

    <body>
        <div>
                <form name="form" action="" method="POST">

                ROLL (1-9999) : <input type="number" name="numberOfRolls" size="4">


                DICE OPTIONS:

                <select name="dieType">

                    <option value="d4">d4</option>

                    <option value="d6">d6</option>

                    <option value="d8">d8</option>

                    <option value="d10">d10</option>

                    <option value="d12">d12</option>

                    <option value="d20">d20</option>

                </select>

                <input type="submit" name = "submit" value="Submit">

                </form>


                <?php 

                if (isset($_POST['submit'])) {

                    if ($numberOfRolls != 0) {

                        echo "Many dice to roll : ". $numberOfRolls ."<br>";

                        echo "Type of Die : " . $dieType ."<br><br>";

                        $number = 1;

                        $diceRolled = rollDice($numberOfRolls, $dieType);

                        foreach($diceRolled as $value){
                            echo "output of the dice thrown at ". $number++ ." is " . $value . "<br>";
                            echo "<br><br>";
                        }
                    } else {
                        echo '<b class="error"> Roll the dice at least 1 time. <b>';
                    }
                }?>
        </div>
    </body>
</html>