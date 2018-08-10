<?php

	//sql
	$sql = "SELECT xp FROM customers WHERE id=\"$id\"";
	$result = $link->query($sql);
	$numRows = $result->num_rows;


	// Fetch data
	if ($numRows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $xp = $row["xp"];
	    }
	}
	else {
	    die("Database error...");
	}



	//xp bliver vist i url og bruges til at teste xp baren med
	$xpoverride = $_GET['xp'];
	if (isset($xpoverride)) { $xp = $xpoverride; }



	//init counter: Initialize the loop counter value
	//test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
	//increment counter: Increases the loop counter value
	//Set the second parameter to a higher number for more levels
	for($level; $level<=30; $level++){
			$beginLevel = ($level*100);
			
			if( $xp < 100 ){
				$beginLevel = ( $beginLevel - 100 );
				$profile = "Ingen rabatter i level 1";
			}

			$beginLevel = $nextLevel;
			$nextLevel = $level*100+100;
			$nextLevel = ($nextLevel*$level);


			if($xp > $beginLevel && $xp < $nextLevel){
				$actualLevel = $level;
				$actualNextLevel = $nextLevel;
				
				//tells how many experience points there is in the given level
				$actualLevelPoints = $nextLevel - $beginLevel;
				
				//tells how many points there is from the $xp to the $beginLevel
				$currentPoints = $xp - $beginLevel;
			}

			//print "level " . $level . "<br>";
			//print "xp " . $xp . "<br>";
			//print "beginlevel " . $beginLevel . "<br>";
			//print "nextLevel " . $nextLevel . "<br>";
			//print "actualLevelPoints " . $actualLevelPoints . "<br>";
			//print "currentPoints " . $currentPoints . "<br><br>";
	}


	$percentage = ( $currentPoints / $actualLevelPoints ) * 100;
	$percentage = number_format( $percentage, 2 );
	$bar = $percentage."%";


?>
