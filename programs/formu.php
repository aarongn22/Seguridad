<?php
	function modulo($a,$b)
	{
		if($a%$b < 0)
			$c=$a%$b+$b;
		else 
			$c=$a%$b;
		return $c;
	}
	function consonante($cons)
	{
		$pm = $cons;
		$voc=array("A","E","I","O","U");
		$pm = substr($pm,1);
			foreach($voc as $cons)
				for($x=0;$x<=strlen($pm);$x++)
				{
					$pm=str_replace("$cons","",$pm);
					$pm=substr($pm,0,1);
				}
		return $pm;
	}
	$equal=array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'A'=>10,'B'=>11,'C'=>12,'D'=>13,'E'=>14,'F'=>15,'G'=>16,'H'=>17,'I'=>18,'J'=>19,'K'=>20,'L'=>21,'M'=>22,'Ñ'=>23,'N'=>24,'O'=>25,'P'=>26,'Q'=>27,'R'=>28,'S'=>29,'T'=>30,'U'=>31,'V'=>32,'W'=>33,'X'=>34,'Y'=>35,'Z'=>36);
	$nom=explode(" ",$_GET["nom"]);
	$ap=strtoupper($nom[0]);
	$am=strtoupper($nom[1]);
	$fn=strtoupper($nom[2]);
	$nac=$_GET["fechnac"];
	$curp[0] = substr($ap,0,1);
	$curp[1] = substr($ap,1,1);
	$curp[2] = substr($am,0,1);
	$curp[3] = substr($fn,0,1);
	$curp[4] = substr ($nac,2,1);
	$curp[5] = substr ($nac,3,1);
	$curp[6] = substr($nac,5,1);
	$curp[7] = substr($nac,6,1);
	$curp[8] = substr($nac,8,1);
	$curp[9] = substr($nac,9,1);
	$curp[10] = strtoupper(substr($_GET["sexo"],0,1));
	$curp[11] = substr($_GET["lugnac"],0,1);
	$curp[12] = substr($_GET["lugnac"],1,1);
	$curp[13] = substr(consonante($ap),0,1);
	$curp[14] = substr(consonante($am),0,1);
	$curp[15] = substr(consonante($fn),0,1);
	if(substr($nac,0,4)<2000)
	{
		$curp[16] = "0";
		$a=0;
		for($i=0;$i<=16;$i++)
		{
			$a=$a+($equal[$curp[$i]]*(18-$i));
		}
		$a%=10;
		$curp[17] = $a;
	}
	else
	{
		$curp[16] = "A";
		$a=0;
		for($i=0;$i<=16;$i++)
		{
			$a=$a+($equal[$curp[$i]]*(18-$i));
		}
		$a = modulo($a,10);
		$a = modulo(10-$a,10);
		$curp[17] = $a;
	}
	echo"<!DOCTYPE html>
			<html>
				<head>
					<meta charset='UTF-8'>
					<link rel='stylesheet' type='text/css' href='../styles/practicas.css'/>
				</head>
				<body>
				<h1>Hola ".$_GET["nom"]."</h1>
				<h2>Tu CURP es:</h2>
					<div>".implode($curp)."</div>";
	echo"			<div class='bottomright'><a href='choose.php'><img class='imagen' src='../images/home.png' alt='Home'>Home</a></div>
				</body>
			</html>";
?>
