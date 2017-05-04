<?php
namespace core;
require_once 'load.php';

class Routing
{
	public function execute()
	{
		$controllerName = 'Main';
		$actionName = 'index';
		$piecesOfUrl = explode('/', $_SERVER['REQUEST_URI']);

		if (!empty($piecesOfUrl[2]))
		{
			$controllerName = $piecesOfUrl[2];
		}
		if (!empty($piecesOfUrl[3]))
		{
			$actionName = $piecesOfUrl[3];
		}

		$modelName = 'models\\' . $controllerName . 'Model';
		$controller =  'controllers\\' . $controllerName . 'Controller';
		$actionName = $actionName .'Action' ;
		
		$model = new $modelName();
		$controller = new $controller($controllerName);
		$controller -> $actionName();		

		
	}	

}
?>
