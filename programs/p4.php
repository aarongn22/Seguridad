<?php
  //FUNCIONES

  function simple($no_cta)
	{
		$no_cta = strrev($no_cta);
		return $no_cta;
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
              <h2>Simple encryption.</h2>
              <form method='POST'>
        				<input type='text' name='no_cta' maxlenght='9'/>
                <input type='submit' value='Encrypt.'/>
        			</form>";
  if(isset($_POST['no_cta']))
	{
		$no_cta = $_POST['no_cta'];
		echo "<h4>".simple($no_cta)."</h4>";
	}
  echo "  <div class='bottomright'><a href='choose.php'><img class='imagen' src='../images/home.png' alt='Home'>Home</a></div>
			</body>
      	</html>";
?>
