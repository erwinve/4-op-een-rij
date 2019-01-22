<?php
function checkwin(){
$posrow = $_SESSION['posrow'];
$poscol = $_SESSION['poscol'];
$winarray = 'q';

    //check south
    echo $posrow;
    echo $poscol;
    print_r($winarray);
    $i = 1;
    $ir = $posrow;
    while($i < 5){
        if($_SESSION['gamefield'][$ir][$poscol] == $winarray && $i == 4){
            header("Location: ../index.php");
            break;
            
        }
        elseif($_SESSION['gamefield'][$ir][$poscol] == $winarray){
            echo"jazz";
            $ir++;
        }
        else{
            //header("Location: ../ingame.php");
            var_dump($_SESSION['gamefield'][$ir][$poscol]);
            echo"northjazz";
            break;
            
        }
        $i++;
    }

    // $i = 1;
    // $ic = $poscol;
    // print_r($_SESSION['gamefield'][$posrow][$ic]);
    // //check east
    // while($i < 5){
    //     if(($_SESSION['gamefield'][$posrow][$ic] == $winarray) && ($i == 4)){
    //         header("Location: ../index.php");
    //         break;
            
    //     }
    //     elseif($_SESSION['gamefield'][$posrow][$ic] == $winarray){
    //         $ic++;
    //     }
    //     else{
    //         header("Location: ../ingame.php");
    //         break;
            
    //     }
    //     $i++;
    // }

    // //check west
    // $i = 1;
    // $ic = $poscol;
    // while($i < 5){
    //     if(($_SESSION['gamefield'][$posrow][$ic] == $winarray) && ($i == 4)){
    //         header("Location: ../index.php");
    //         break;
            
    //     }
    //     elseif($_SESSION['gamefield'][$posrow][$ic] == $winarray){
    //         $ic--;
    //     }
    //     else{
    //         header("Location: ../ingame.php");
    //         break;
            
    //     }
    //     $i++;
    // }

    // //check southeast
    // $i = 1;
    // $ir = $posrow;
    // $ic = $poscol;
    // while($i < 5){
    //     if(($_SESSION['gamefield'][$ir][$ic] == $winarray) && ($i == 4)){
    //         header("Location: ../index.php");
    //         break;
            
    //     }
    //     elseif($_SESSION['gamefield'][$ir][$ic] == $winarray){
    //         $ir++;
    //         $ic++;
    //     }
    //     else{
    //         header("Location: ../ingame.php");
    //         break;
            
    //     }
    //     $i++;
    // }

    // //check southwest
    // $i = 1;
    // $ir = $posrow;
    // $ic = $poscol;
    // while($i < 5){
    //     if(($_SESSION['gamefield'][$ir][$ic] == $winarray) && ($i == 4)){
    //         header("Location: ../index.php");
    //         break;
            
    //     }
    //     elseif($_SESSION['gamefield'][$ir][$ic] == $winarray){
    //         $ir++;
    //         $ic--;
    //     }
    //     else{
    //         header("Location: ../ingame.php");
    //         break;
            
    //     }
    //     $i++;
    // }
}


            
    ?>