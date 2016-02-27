<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
<?php 
/*$card = ["imageName" => "",
"score" => "",
"suit" => "",
"rank" => ""];
//indexed array
$deck = [];*/
$player1 =["imageName" => "",
"name" => $_POST["p1"]];

$player2 =["imageName" => "",
"name" => $_POST["p2"]];

$player3 =["imageName" => "",
"name" => $_POST["p3"]];

$player4 =["imageName" => "",
"name" => $_POST["p4"]];

$table = [$player1, $player2, $player3,$player4];
var_dump($table);

//$table = ["position1" => $player1,
//"position2" => $player2,];

/*$hand = ["player" => null,
"cards" => [],
"score" =>[];
$game =["location" => $table, 
"$hands" => []];
*/
?>
<!--<a href="game.php">Play again!</a?-->
<form action="game.php" method="POST">
    <input type="hidden" name="p1" value "<? $POST["p1"] ?>"/>
    <input type="hidden" name="p2" value "<? $POST["p2"] ?>"/>
    <input type="hidden" name"=p3" value "<? $POST["p3"] ?>"/>
    <input type="hidden" name="p4" value "<? $POST["p4"] ?>"/>
    <center><input type="submit" value="Play Again!"/><center> </center>
</form>
    </body>
</html>