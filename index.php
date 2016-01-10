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
         $position = $_GET['board'];
         $squares = str_split($position);
         echo '<br/>';         
         $answer = 'unkown';

         if ($hoursworked > 40) {
             $total = $hoursworked * $rate * 1.5;
         } else {
             $total = $hoursworked * $rate;
         }
         echo ($total > 0) ? 'you owe me '.$total : "You're welcome";
         echo '<br/>';
         
         if (winner('x', $squares)) echo 'You win.';
         else if (winner('o', $squares)) echo 'I win.';
         else echo 'No winner yet.';
         
         function winner($token, $position) {
            for ($row = 0; $row < 3; $row++) {
                $result = true;
                for ($col = 0; $col < 3; $col++)
                    if ($position[3*$row+$col] != $token) $result = false;
            }
           
             return $result;
         }
        
        ?>
    </body>
</html>
