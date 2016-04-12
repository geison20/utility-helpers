<?php 

namespace geissonmachado\Helpers;



abstract class Url {
	

	/**
	 * Redireciona o usuario para a pagina solicitada
	 * Caso o usuario passe parametros [time] - [true] voce tera um redirect com tempo determinado
	 */
	public function redirect($path, $params = false)
	{
		list($seconds, $bool) = $params;

		if($bool):
			header("refresh:{$seconds};url=".self::baseUrl()."/".$path);
		else:
			header("Location:".self::baseUrl()."/".$path);
		endif;	
	}

	/**
	 * Seta a base do Servidor.
	 * @return String return o canhinho do servidor.
	 */
	public function baseUrl()
	{
		echo $_SERVER['SERVER_NAME'];
	}
}