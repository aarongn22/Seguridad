<?php
  //FUNCIONES

  function hsh($hash)
	{
		$hash = str_replace(" ","",$hash);
		$x = 0;
		$lenght = strlen($hash);
		$hash = str_split($hash);
		while($lenght>$x)
		{
			array_splice($hash,$x,1);
			$x = $x+2;
		}
		$hash = implode("",$hash);
		echo $hash;
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
            <h2>Hash.</h2>
            <form method='POST'>
              <label>Phrase:</label>
              <input type='text' name='hash'/>
              <input type='submit' value='Hash.'/>
            </form>";
  if(isset($_POST['hash']))
  {
    $hash = $_POST['hash'];
    echo "<h4>Hash: <mark>";
    hsh($hash);
    echo "</mark></h4>";
  }
  echo "  <div class='bottomright'><a href='choose.php'><img class='imagen' src='../images/home.png' alt='Home'>Home</a></div>
			</body>
      	</html>";
?>
