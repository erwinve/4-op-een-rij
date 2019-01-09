<?php
// if (!isset($_SESSION['access']))
// 	{
// 	header('Location: ../pregame.php');
// 	exit();
// 	}
//   else
// 	{
	// if (!isset($_SESSION['start']))
	// 	{

		// empty array for the gamefield

		$gamefield = array();

		// if the size of the game is set, push the given ammount of rows in the empty array

		if (isset($_POST['difficultysubmit']))
			{
			$gamesize = $_POST['difficultyselect'];
			$_SESSION['gamesize'] = $gamesize;

			// pushing empty cirlces

			for ($i = 0; $i < $_SESSION['gamesize']; $i++)
			{
				array_push($gamefield, array());
			}
				$i2 = $_SESSION['gamesize'];
				while ($i2 > 0){
					for ($i = 0; $i < $_SESSION['gamesize']; $i++)
					{
					array_push($gamefield[$i], 'emptyplace');
					}
					$i2--;
				}

			}

		// set the start value to true

		// $_SESSION['start'] = true;
		// }

	// echo the two dimensional array

	
	foreach($gamefield as $key1 => $value1)
		{
		foreach($value1 as $key2 => $value2)
			{
			

			echo "<input type='hidden' id='inputcircle' name='circleposition'>
			<div onClick='position(this.id)' id='" . $key1 .$key2. "' class='" . $value2. "'></div>
			</input>";
			}
		}
				// Making it session arrays
				$_SESSION['gamefield'] = $gamefield;
    // }



?>

