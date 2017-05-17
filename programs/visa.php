<?php
echo "
<!DOCTYPE html>
<html>
	<head>
		<title>Validación de Visa</title>
		<meta charset='utf-8'>
		<link rel='stylesheet' type='text/css' href='../styles/practicas.css'/>
	</head>
	<body>
		<h2>Check VISA</h2>
		<form action='visa.php' method='GET'>
			<label>VISA to verify:</label>
			<input  type='text' name='visa' autofocus required>
			<input type='submit' value='C H E C K'>
		</form><br/>";
		if(isset($_GET['visa'])&&strlen(($_GET['visa'])))
		{
			$visa=str_split(($_GET['visa']));
			if($visa[0]=='4')
			{
				$r=0;
				$a=0;
				for($i=0;$i<=14;$i++)
				{
					if($i%2==0)
						$m=2;
					else
						$m=1;
					$x=($visa[$i])*$m;
					if($x>=10)
						$r++;
					$a = $a-$x;
				}
				$a = $a-$r;
				if((10-abs(($a)%10))%10==($visa[15])%10)
					echo '<h4>The VISA with number '.implode($visa).' is valid.</h4>';
				else{
							echo '<h4>The VISA with number '.implode($visa).' is invalid.</h4>';
					}
			}
			else
				echo '<h4>Your plastic is not operated by VISA.</h4>';
		}
		else 
			echo '<h4>Invalid request or pending.</h4>';
		echo "<div class='bottomright'><a href='choose.php'><img class='imagen' src='../images/home.png' alt='Home'>Home</a></div>
			</body>
</html>";
?>
