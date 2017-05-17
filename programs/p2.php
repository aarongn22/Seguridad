<?php
  //FUNCIONES

  function codifica($cod,$string)
	{
		foreach($cod as $letter => $number)
		{
			$string = str_ireplace($letter,$number,$string);
		}
		return $string;
	}

  //HTML
  $cod = array(" " => "0", "a" => "1", "b" => "2", "c" => "3","d" => "4", "e" => "5", "f" => "6", "g" => "7", "h" => "8", "i" => "9", "j" => "10", "k" => "11", "l" => "12", "m" => "13", "n" => "14", "ñ" => "15", "o" => "16","p" => "17" , "q" => "18","r" => "19","s" => "20", "t" => "21", "u" => "22", "v" => "23", "w" => "24", "x" => "25", "y" => "26", "z" => "27");
  echo "<!DOCTYPE html>
        <html>
          <head>
            <title>Practices</title>
            <link rel='stylesheet' type='text/css' href='../styles/practicas.css'/>
            <meta charset='UTF-8'/>
          </head>
          <body>
            <h2>Coding system.</h2>
            <form method='POST'>
              <label>Phrase:</label>
              <input type='text' name='string'/>
              <input type='submit' value='Encode.'/>
            </form>";
  if(isset($_POST['string']))
  {
    echo "<h4>".codifica($cod,$_POST['string'])."</h4>";
  }
  echo "  		<div class='bottomright'><a href='choose.php'><img class='imagen' src='../images/home.png' alt='Home'>Home</a></div>
			</body>
      	</html>";
?>
