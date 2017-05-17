<?php
  //FUNCIONES

  function modulo($a,$b)
  {
    if($a%$b < 0)
      $c=$a%$b+$b;
    else
      $c=$a%$b;
    return $c;
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
  			     <h2>Get the module with PHP.</h2>
  								<form method='POST'>
  										<label>A =</label>
  										<input type='number' name='a'/>
  										<label>B =</label>
  										<input type='number' name='b'/>
  										<input type='submit' value='Get It.'/>
								</form>";
  if(isset($_POST['a'])&&isset($_POST['b']))
  {
    $a = $_POST['a'];
    $b = $_POST['b'];
    echo "<h4>".modulo($a,$b)."</h4>";
  }
    echo "		<div class='bottomright'><a href='choose.php'><img class='imagen' src='../images/home.png' alt='Home'>Home</a></div>
			</body>
        			</html>";
?>
