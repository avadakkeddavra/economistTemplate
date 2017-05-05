<?php 
namespace controllers;
use core\Controller;
use models\DepartementModel;
use models\NewsModel;

class MainController extends Controller
{
	public function indexAction()
	{	
		$DepartementModel = new DepartementModel();
		$NewsModel = new NewsModel();
		$departements = $DepartementModel->getAllItems('departements');
		$news = $NewsModel->getLastItems('news',2);
		$data = array(
				'departements' => $departements,
				'news' => $news
			);
		echo '<pre>';
		print_r($data['news']);
		echo '</pre>';
		
		$this->view->generate('home','index.php',$data);
	}
}
 ?>