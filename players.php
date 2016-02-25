<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

<?php 
    
         // Associative array for player, contains name, team, posistion
         $player1 = [
             "name" => $_REQUEST['player1'], 
             "team" => "blue",
             "pos" => "blue",
             "score" => -1];
        
        $player2 = [
            "name" => $_REQUEST['player2'],
            "team" => "blue",
            "pos" => "blue",
             "score" => -1];
        
        $player3 = [
            "name" => $_REQUEST['player3'],
            "team" => "blue", 
            "pos" => "blue",
             "score" => -1];
        
        
        $player4 = [
            "name" => $_REQUEST['player4'],
            "team" => "blue", 
            "pos" => "blue",
             "score" => -1];
        
        
        // table array of posistion $keys with $player and $hands[]
        $table = array(
            "pos1" => array($player1,$hand = array('1','2','3')),
            "pos2" => array($player2,$hand = array('3','4','5')),
            "pos3" => array($player3,$hand = array('6','6','7','6')),
            "pos4" => array($player4,$hand = array('65','5','6','7')),
            );
            
            
            // Randomizes players
            function randomizePlayers(&$array) {
                $keys = array_keys($array);
    
                shuffle($keys);
    
                foreach($keys as $key) {
                $new[$key] = $array[$key];
                }

            $array = $new;

            return true;
            }
            
            
            var_dump($table);
            echo "<br><br>";
            randomizePlayers($table);
            var_dump($table);
            
            //prints all players
        foreach($table as $key => $val)
        {
            echo "<br>Player name: " . $val[0]['name'] . "Score: " . array_sum($val[1]);
        }
        
        
             //var_dump($table);
             
             

?>
    </body>
</html>