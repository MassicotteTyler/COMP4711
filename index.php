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
//         switch (name)
//         {
//             case 'Tyler': $answer = 'great'; break;
//             case 'George'; $answer = 'unkown'; break;
//             default: $answer = 'unkown';
//         }
         echo ($total > 0) ? 'you owe me '.$total : "You're welcome";
        
        ?>
    </body>
</html>
