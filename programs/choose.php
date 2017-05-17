<?php
	//HTML
	echo "<!DOCTYPE html>
				<html>
					<head>
						<title>Prácticas</title>
						<link rel='stylesheet' type='text/css' href='../styles/practicas.css'/>
						<meta charset='UTF-8'/>
					</head>
					<body>
						<h2>Choose the practice you want to access:</h2>
							<ul>";
		for($i=1;$i<=7;$i++)
			echo "				<li><a href='p".$i.".php'>Practice ".$i."</a></li>";
		echo "					<li><a href='formu.html'>CURP</a></li>";
		echo "					<li><a href='visa.php'>VISA</a></li>";
		echo "				<ul>
					</body>
				</html>";
?>
