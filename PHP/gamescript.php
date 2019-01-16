<?php
// if (!isset($_SESSION['access']))
// 	{
// 	header('Location: ../pregame.php');
// 	exit();
// 	}
//   else
// 	{
	include('dbconnect.php');
	$gameid = $_SESSION['gameid'];
	$sql = "SELECT * FROM games WHERE gameid = '$gameid';";
	$result = mysqli_query($link, $sql);
	if($row = mysqli_fetch_assoc($result)){
		$gamesize = $row['gamesize'];
		$_SESSION['gamesize'] = $gamesize;
	}

	$gamefield = array();




	

		

		// empty array for the gamefield



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
					array_push($gamefield[$i], 'o');
					}
					$i2--;
				}
				$_SESSION['gamesizefor'] = $_SESSION['gamesize'];
				$_SESSION['gamesizefor']--;

				
			}
		else{
			$sql = "SELECT * FROM games WHERE gameid = '$gameid';";
			$result = mysqli_query($link, $sql);
			$resultcheck = mysqli_num_rows($result);
			if($row = mysqli_fetch_assoc($result)){
			$player1 = $row['user1'];
			$player2 = $row['user2'];
			$gamestring = $row['gamearray'];
			}
			
			$gamefield = json_decode($gamestring);
			// for ($i = 0; $i < $_SESSION['gamesize']; $i++)
			// {
			// 	array_push($gamefield, array());
			// }
			// print_r($gamefield[0]);
			// $i = $_SESSION['gamesize'];
			// while($i > 0){
			// 	for($i3 = 0; $i3 < $_SESSION['gamesize']; $i3++)
			// 	array_push($gamefield[$i], $gamestring[$i3]);
			// 	$i--;
			// }
			


			}
			
			

		

	

	// echo the two dimensional array

	
	foreach($gamefield as $key1 => $value1)
		{
		foreach($value1 as $key2 => $value2)
			{
			

			echo "<div onClick='position(this.id)' id='" . $key1 .$key2. "' class='" . $value2. "'></div>";
			}
		}
		$_SESSION['gamefield'] = $gamefield;
    // }
	


?>

