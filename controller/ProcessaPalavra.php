<?php

	include("../model/acao.php");
	include("../model/processo.php");
	include("../model/saudacao.php");

	//PROCESSA PALAVRA - CONTROLLER

	$acao = new Acao();
	$processo = new Processo();
	$saudacao = new Saudacao();

	$palavra = $_GET['texto'];
	$palavras = explode(" ", $palavra);
	$validacao1 = $saudacao->verify($palavras[0]);
	$validacao2 = ($palavras[1]=="Tita" || $palavras[1]=="tita" || $palavras[1]=="TITA") ? 1 : 0;
	$validacao3 = $acao->verify($palavras[2]);
	$validacao4 = $processo->verify($palavras[3]);

	if($validacao1 && $validacao2 && $validacao3 && $validacao4){
		$retorno = $processo->rodar($palavras[2], $palavras[3]);
	}else{
		echo ("<script language='JavaScript'>
		window.alert('Desculpe, não entendi o que você disse.')
		window.location.href='../view/app.php';
		</script>");
	}

?>