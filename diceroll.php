<?php

$diceTypes = ['d4', 'd6', 'd8', 'd10', 'd12', 'd20'];

//Function for rolling dice
function rollDice($diceType) {

    $diceResult = 0;

    switch($diceType){
        case 'd4':
            $diceResult = rand(1,4);
            break;
        case 'd6':
            $diceResult = rand(1,6);
            break;
        case 'd8':
            $diceResult = rand(1,8);
            break;
        case 'd10':
            $diceResult = rand(1,10);
            break;
        case 'd12':
            $diceResult = rand(1,12);
            break;
        case 'd20':
            $diceResult = rand(1,20);
            break;
    }

    return $diceResult;

}



?>

<html>
    <head>
        <link rel="stylesheet" href="diceroll.css">
    </head>

    <body>
        <div>
                <form name="form" action="" method="POST">

                ROLL (1-9999) : <input type="number" name="roll" size="4">


                DICE OPTIONS:

                <select name="dice">

                    <option value="4">d4</option>

                    <option value="6">d6</option>

                    <option value="10">d10</option>

                    <option value="12">d12</option>

                    <option value="20">d20</option>

                </select>

                <input type="submit" name = "submit" value="roll">

                </form>

        </div>
    </body>
</html>