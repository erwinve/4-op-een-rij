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
				array_push($gamefield[$i], 'emptyplace');
				}

            

			print_r($gamefield);

			}

		// set the start value to true

		// $_SESSION['start'] = true;
		// }

	// echo the two dimensional array

	foreach($gamefield as $v1)
		{
		foreach($v1 as $v2)
			{
			echo "<div class='" . $v2 . "'></div>";
			}
		}
				// Making it session arrays
				$_SESSION['gamefield'] = $gamefield;
    // }




?>

