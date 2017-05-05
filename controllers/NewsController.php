<?php 
namespace controllers;
use core\Controller;
/**
* 
*/
class NewsController extends Controller
{
		public function indexAction()
		{
			$this->view->generate('news','news.html');
		}
}
 ?>