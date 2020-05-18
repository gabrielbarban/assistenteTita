<?php

  date_default_timezone_set('America/Sao_Paulo');
  $hora = date('H');
  $minuto = date('i');
  if($hora>=0 && $hora<12)
    $saudacao = "Bom dia";

  if($hora>=12 && $hora<18)
    $saudacao = "Boa tarde";

  if($hora>=18)
    $saudacao = "Boa noite";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Assistente</title>
</head>
<body>
	<center style="margin-top: 60px; text-align: center; font: italic 15px arial, sans-serif;"><img src="../images/cerebro.gif" width="160px" style="border-radius: 10px;">
	<br>
	<b><font size="5"><?=$saudacao?>, Sr. Gabriel.</font><br>Como posso te ajudar?</b>
	<br><br>
	<form action="../controller/ProcessaPalavra.php" method="GET">
		<textarea name="texto" rows="10"></textarea>
		<br><input type="submit" value="Falar">
	</form>
	</center>
</body>
</html>
