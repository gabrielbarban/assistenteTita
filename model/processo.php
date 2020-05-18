<?php  

class processo
{
	function __construct()
	{
		require_once("../database/crud.php");
	}

	public function verify($palavra)
	{
		$crud = new Crud();
		$query = "SELECT * FROM processo WHERE nome='".$palavra."';";
		$data = $crud->find($query);
		if(count($data) > 0){
			return 1;			
		} else{
			return 0;
		}
	}

	public function getTipo($acao)
	{
		$crud = new Crud();
		$query = "SELECT tipo FROM processo WHERE nome='".$acao."';";
		$data = $crud->find($query);
		return $data[0]['tipo'];
	}

	public function rodar($acao, $processo)
	{
		if(array_key_exists($acao, array("desligar" => 1, "pausar" => 1, "parar" => 1)))
		{
			if($this->getTipo($processo)=='service'){
				echo ("<script language='JavaScript'>
				window.alert('Olá Gabriel, você pediu para ".$acao." o serviço ".$processo.". O comando para isso é: sudo service ".$processo." restart')
				window.location.href='../view/app.php';
				</script>");
			}
			if($this->getTipo($processo)=='app'){
				echo ("<script language='JavaScript'>
				window.alert('Olá Gabriel, você pediu para ".$acao." a aplicação ".$processo.". O comando para isso é: sudo killall ".$processo."')
				window.location.href='../view/app.php';
				</script>");
			}
		}
	}
}

?>