<?php
  //FUNCIONES

	function playfair($n,$playfair)
	{
		$x = 0;
		$y = 0;
		$a = 0;
		$b = 0;
		$lenght = strlen($playfair);
		while($lenght > $n)
		{
			$lenght = $lenght-$n;
			$y++;
		}
		if($lenght > 0)
				$y++;
		for($b=0;$b<$y;$b++)
			for($a=0;$a<$n;$a++)
			{
				if($x<strlen($playfair))
					$string[$b][$a] = substr($playfair,$x,1);
				else
					$string[$b][$a] = " ";
				$x++;
			}
		for($a=0;$a<$n;$a++)
		{
			echo " ";
			for($b=0;$b<$y;$b++)
					echo $string[$b][$a];
		}
	}

  //HTML
  echo "<!DOCTYPE html>
        <html>
          <head>
            <title>Practices</title>
            <link rel='stylesheet' type='text/css' href='../styles/practicas.css'/>
            <meta charset='UTF-8'/>
          </head>
          <body>
            <h2>Playfair-n encryption system.</h2>
            <form method='POST'>
                <label>n =</label>
        				<input type='number' min='2' name='n'/>
                <label>Phrase:</label>
        				<input type='text' name='playfair'/>
        				<input type='submit' value='Playfair.'/>
        			</form>";
  if(isset($_POST['n'])&&isset($_POST['playfair']))
  {
    $n = $_POST['n'];
    $playfair = $_POST['playfair'];
    echo "<h4>";
    echo "Your phrase in playfair-n: <mark>";
    playfair($n,$playfair);
    echo "</mark></h4>";
  }
  echo "  <div class='bottomright'><a href='choose.php'><img class='imagen' src='../images/home.png' alt='Home'>Home</a></div>
		</body>
      	</html>";
?>
