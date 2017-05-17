<?php
  //FUNCIONES

  function simetrico($string)
	{
		$clave ="CIFRADO_SIMETRICO_AEGN";
		$simetrico = $string^$clave;
		echo $simetrico;
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
            <h2>Symmetric encryption.</h2>
            <form method='POST'>
              <label>Phrase:</label>
              <input type='text' name='string'/>
              <input type='submit' value='Crypt.'/>
            </form>";
  if(isset($_POST['string']))
  {
    $string = $_POST['string'];
    echo "<h4>Encryption: ";
    simetrico($string);
    echo "</h4>";
  }
  echo "  <div class='bottomright'><a href='choose.php'><img class='imagen' src='../images/home.png' alt='Home'>Home</a></div>
			</body>
      	</html>";
?>
