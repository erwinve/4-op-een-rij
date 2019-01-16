<?php
//check south
$ic = $column;
for($i = 0; $i < 4; $i++){
    $gamefield[$row][$ic];
    $ic++;
}

$ic = $column;
//check north
for($i = 0; $i < 4; $i++){
    $gamefield[$row][$ic];
    $ic--;
}

$ir = $row;
//check east
for($i = 0; $i < 4; $i++){
    $gamefield[$ir][$column];
    $ic++;
}

$ir = $row;
//check west
for($i = 0; $i < 4; $i++){
    $gamefield[$ir][$column];
    $ic--;
}

$ir = $row;
$ic = $column;
//check southeast
for($i = 0; $i < 4; $i++){
    $gamefield[$ir][$ic];
    $ic++;
    $ir++;
}

$ir = $row;
$ic = $column;
//check northeast
for($i = 0; $i < 4; $i++){
    $gamefield[$ir][$ic];
    $ic--;
    $ir++;
}

$ir = $row;
$ic = $column;
//check northwest
for($i = 0; $i < 4; $i++){
    $gamefield[$ir][$ic];
    $ic--;
    $ir--;
}

$ir = $row;
$ic = $column;
//check southwest
for($i = 0; $i < 4; $i++){
    $gamefield[$ir][$ic];
    $ic++;
    $ir--;
}


            
    ?>