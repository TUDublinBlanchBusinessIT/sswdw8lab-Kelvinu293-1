<?php
include("Team.php");

$myTeam = new Team("Tigers");

$myTeam->finalScore(2,2);

echo "That worked";
echo "<br>Total points: " . $myTeam->getPoints(); 

$myTeam->finalScore(2,2);
echo "<br>Total points: " . $myTeam->getPoints(); 
echo "<br>Goal average: " . $myTeam->getGoalAverage();
?>
