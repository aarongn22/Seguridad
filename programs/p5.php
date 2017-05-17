<?php
  //FUNCIONES

  function strToBin($input)
  {
    if (!is_string($input))
      return false;
    $value = unpack('H*', $input);
    return bindec(base_convert($value[1], 16, 2));
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
            <h2>XOR encryption.</h2>
            <form method='POST'>
              <label>Character:</label>
              <input type='text' name='input' maxlength='1'/>
              <input type='submit' value='Encrypt.'/>
            </form>";
  if(isset($_POST['input']))
  {
    $input = $_POST['input'];
    echo "<h4>String to Binary:".strToBin($input)."</h4>";
  }
  echo "  <div class='bottomright'><a href='choose.php'><img class='imagen' src='../images/home.png' alt='Home'>Home</a></div>
			</body>
      	</html>";
?>
