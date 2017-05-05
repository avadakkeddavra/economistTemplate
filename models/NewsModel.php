<?php 
namespace models;
use core\Model;

class NewsModel extends Model
{
	public function getLastItems($tablename, $number)
	{
		return self::$query->queryAll('SELECT * from ' . $tablename . ' WHERE id < ' . $number .'');
	}
}

 ?>