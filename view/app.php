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

<script src="../js/speech.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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
	<button id="start_button" onclick="startButton(event)">
    <img id="start_img" src="../images/ic_mic_black_48px.svg" alt="Start"></button>

    <div id="results">
	  <span id="final_span" class="final"></span>
	  <span id="interim_span" class="interim"></span>
	  <p>
	</div>


  <div class="center">
  <div id="div_language">
    <select id="select_language" onchange="updateCountry()"></select>
    &nbsp;&nbsp;
    <select id="select_dialect"></select>
  </div>
  </div>

	<form action="../controller/ProcessaPalavra.php" method="GET">
		<textarea name="texto" rows="10"></textarea>
		<br><input type="submit" value="Falar">
	</form>
	</center>
</body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>