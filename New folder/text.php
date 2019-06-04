<?php
	if(isset($_REQUEST['value1']) && ($_REQUEST['value2'])){
		
			$v1=$_REQUEST['value1'];
			$v2=$_REQUEST['value2'];
				
					echo "Addition=" . ($v1+$v2);
					echo "<br>";
					echo "<br>";
					echo "Subtraction=" .($v1-$v2);
					echo "<br>";
					echo "<br>";
					echo "Multification=" .($v1*$v2);
					echo "<br>";
					echo "<br>";
					echo "Division=" .($v1/$v2);
					echo "<br>";
					echo "<br>";
					echo "Remainder=" .($v1%$v2);
		}
	
					
					

					

					
	
	?>