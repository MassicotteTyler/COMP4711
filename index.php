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
               
               for ($col=0; $col<3; $col++) {
                    $result = true;
                    for($row=0; $row<3; $row++) {
                        if ($this->position[3*$row+$col] != $token) $result = false;
                    }
                    if ($result) return true;
                }
                
                if (($this->position[0] == $token) 
                    && ($this->position[4] == $token)
                    && ($this->position[8] == $token)) {
                    $result = true;
                } else if (($this->position[2] == $token) 
                    && ($this->position[4] == $token)
                    && ($this->position[6] == $token)) {
                    $result = true;
                }
                
               return $result;
            }
            
            function display() {
                echo '<table cols="3" style="font-size:large; font-weight: bold">';
                echo '<tr>';
                for ($pos=0; $pos<9; $pos++) {
                    echo $this->show_cell($pos);
                    if ($pos %3 == 2) echo '</tr><tr>';
                }
                echo '</tr>';
                echo '</table>';
                
            }
            
            function show_cell($which) {
                $token = $this->position[$which];
                if ($token <> '-') return '<td>'.$token.'</td>';
                
                $this->newposition = $this->position;
                $this->newposition[$which] = 'x';
                $move = implode($this->newposition);
                $link = '/TicTacToe/?board='.$move;
                return '<td><a href="'.$link.'">-</a></td>';
            }
            
            function pick_move() {
                if ($this->winner('x'))
                    echo 'You win!';
                else if ($this->winner('o'))
                    echo 'I won, haha';
                else {

                    do {
                        $pos = rand(0, 8);
                    } while($this->position[$pos] != '-');
                    $this->position[$pos] = 'o';
                    if ($this->winner('o'))
                        echo 'I won, haha';
                    else
                        echo 'No one has won, yet...';
                }

            }
         }
         
        if(isset($_GET['board']))
           $board = $_GET['board'];
        else
            $board = '---------';

         $game = new Game($board);
         $game->pick_move();
         $game->display();
        ?>
    </body>
</html>
