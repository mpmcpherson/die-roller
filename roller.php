<?php
	while(1){
        $line = readline("roll: ");
        readline_add_history($line);
        $numDicePattern = "<[0-9]+[a-zA-z]+>";
        $typeDicePattern = "<[a-zA-z]+[0-9]+>";

        preg_match($numDicePattern, $line, $numMatches);

        preg_match($typeDicePattern, $line, $typeMatches);

        $numDice = str_replace("d", "", $numMatches[0]);
        $typeDice = str_replace("d", "", $typeMatches[0]);

        $rollBreakDown = "";
        $sum = 0;
        for($i=0;$i<$numDice;$i++){
		    $roll = rand(1,$typeDice);
		    $rollBreakDown.=$roll." ";
		    $sum+=$roll;

		    $roll=0;
        }

        echo "total: " .$sum."\n";
        echo "breakdown: ".$rollBreakDown."\n";

	}
?>
