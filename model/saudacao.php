<?php  

class saudacao
{
	function __construct()
	{
		require_once("../database/crud.php");
	}

	public function verify($palavra)
	{
		$crud = new Crud();
		$query = "SELECT * FROM saudacao WHERE nome='".$palavra."';";
		$data = $crud->find($query);
		if(count($data) > 0){
			return 1;			
		} else{
			return 0;
		}
	}

	public function gerar_saudacao()
	{
		
	}
}

?>