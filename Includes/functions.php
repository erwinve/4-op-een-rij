<?php
function checkwin(){
    //check south
    $i = 1;
    $ir = $posrow;
    while($i < 5){
        if(($_SESSION['gamefield'][$ir][$poscol] == $winarray) && ($i == 4)){
            header("Location: ../index.php");
            break;
            
        }
        elseif($_SESSION['gamefield'][$ir][$poscol] == $winarray){
            $ir++;
        }
        else{
            header("Location: ../ingame.php");
            break;
            
        }
        $i++;
    }

    $i = 1;
    $ic = $poscol;
    print_r($_SESSION['gamefield'][$posrow][$ic]);
    //check east
    while($i < 5){
        if(($_SESSION['gamefield'][$posrow][$ic] == $winarray) && ($i == 4)){
            header("Location: ../index.php");
            break;
            
        }
        elseif($_SESSION['gamefield'][$posrow][$ic] == $winarray){
            $ic++;
        }
        else{
            header("Location: ../ingame.php");
            break;
            
        }
        $i++;
    }

    //check west
    $i = 1;
    $ic = $poscol;
    while($i < 5){
        if(($_SESSION['gamefield'][$posrow][$ic] == $winarray) && ($i == 4)){
            header("Location: ../index.php");
            break;
            
        }
        elseif($_SESSION['gamefield'][$posrow][$ic] == $winarray){
            $ic--;
        }
        else{
            header("Location: ../ingame.php");
            break;
            
        }
        $i++;
    }

    //check southwest
    $i = 1;
    $ir = $posrow;
    $ic = $poscol;
    while($i < 5){
        if(($_SESSION['gamefield'][$ir][$ic] == $winarray) && ($i == 4)){
            header("Location: ../index.php");
            break;
            
        }
        elseif($_SESSION['gamefield'][$ir][$ic] == $winarray){
            $ir++;
            $ic++;
        }
        else{
            header("Location: ../ingame.php");
            break;
            
        }
        $i++;
    }

    // $ir = $row;
    // $ic = $column;
    // //check northeast
    // for($i = 0; $i < 4; $i++){
    //     $gamefield[$ir][$ic];
    //     $ic--;
    //     $ir++;
    // }

    // $ir = $row;
    // $ic = $column;
    // //check northwest
    // for($i = 0; $i < 4; $i++){
    //     $gamefield[$ir][$ic];
    //     $ic--;
    //     $ir--;
    // }

    //check southwest
    $i = 1;
    $ir = $posrow;
    $ic = $poscol;
    while($i < 5){
        if(($_SESSION['gamefield'][$ir][$ic] == $winarray) && ($i == 4)){
            header("Location: ../index.php");
            break;
            
        }
        elseif($_SESSION['gamefield'][$ir][$ic] == $winarray){
            $ir++;
            $ic--;
        }
        else{
            header("Location: ../ingame.php");
            break;
            
        }
        $i++;
    }
}
//$_SESSION['gamefield'] = multidimensionale array;
$position = $_POST['circleposition']; //bijv 02
$row = substr($position, 0);
$column = substr($position, 1);
$winarray = array('q', 'q', 'q', 'q');


$ic = $column;
//check east
for($i = 0; $i < 4; $i++){
    if(($_SESSION['gamefield'][$row][$ic] == $winarray[$i]) && ($i == 4)){
        echo"u won";
        break;
    }
    elseif($_SESSION['gamefield'][$row][$column] == $winarray[$i]){
        $ic++;
    }
    else{
        
        break;
    }
}

            
    ?>