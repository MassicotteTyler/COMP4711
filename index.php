<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
         $name = 'Tyler';
         $what = 'nerd';
         $level = 42;
         echo 'Hi, my name is '.$name, '. and I am a level '.$level.' '.$what;
         
         $hoursworked = $_GET['hours'];
         $rate = 12;
         $total = $hoursworked * $rate;
         echo '<br/>';         
         $answer = 'unkown';

         if ($hoursworked > 40) {
             $total = $hoursworked * $rate * 1.5;
         } else {
             $total = $hoursworked * $rate;
         }
         echo ($total > 0) ? 'you owe me '.$total : "You're welcome";
         echo '<br/>';
         
         
         class Game {
             
             var $position;
             
             function __construct($squares) {
                 $this->position = str_split($squares);
             }
             
            function winner($token) {
                $result = false;
               for ($row = 0; $row < 3; $row++) {
                   $result = true;
                   for ($col = 0; $col < 3; $col++)
                       if ($this->position[3*$row+$col] != $token) $result = false;
               }
               return $result;
            }
         }
        
         $game = new Game($_GET['board']);
         if ($game->winner('x'))
             echo 'You win. Lucky guesses!';
         else if ($game->winner('o'))
             echo 'I win. Muahaha';
         else
             echo 'No winner yet, but you are losing.';
        ?>
    </body>
</html>
