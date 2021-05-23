<?php 

namespace Atlantic\Model;

use \Atlantic\DB\Sql;
use \Atlantic\Model;
use \Atlantic\Mailer;

class Artigo extends Model {

	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_artigos ORDER BY destitulo");

	}

	public static function checkList($list)
	{

		foreach ($list as &$row) {
			
			$p = new Artigo();
			$p->setData($row);
			$row = $p->getValues();

		}

		return $list;

	}

	public function setUri($string){
		$a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
		$b = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';	
		$string = utf8_decode($string);
		$string = strtr($string, utf8_decode($a), $b);
		$string = strip_tags(trim($string));
		$string = str_replace(" ","-",$string);
		$string = str_replace(array("-----","----","---","--"),"-",$string);
		return strtolower(utf8_encode($string));
	}

	public function save()
	{

		$sql = new Sql();
		
		$results = $sql->select("CALL sp_artigos_save(:idartigo,:destitulo, :desartigo, :idcategory, :desurl)", array(
			":idartigo"=>$this->getidartigo(),
			":destitulo"=>$this->getdestitulo(),
			":desartigo"=>$this->getdesartigo(),
			":idcategory"=>$this->getidcategory(),
			":desurl"=>$this->setUri($this->getdestitulo())
		));

		$this->setData($results[0]);

	}

	public function get($idartigo)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_artigos WHERE idartigo = :idartigo", [
			':idartigo'=>$idartigo
		]);

		$this->setData($results[0]);

	}

	public function getUri($uri)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_artigos WHERE idartigo = :idartigo", [
			'desurl'=>$uri
		]);

		$this->setData($results[0]);

	}

	public function delete()
	{

		$sql = new Sql();

		$sql->query("DELETE FROM tb_artigos WHERE idartigo = :idartigo", [
			':idartigo'=>$this->getidartigo()
		]);

	}

	public function checkPhoto()
	{

		if (file_exists(
			$_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 
			"res" . DIRECTORY_SEPARATOR . 
			"site" . DIRECTORY_SEPARATOR . 
			"img" . DIRECTORY_SEPARATOR . 
			"artigos" . DIRECTORY_SEPARATOR . 
			$this->getidartigo() . ".jpg"
			)) {

			$url = "/res/site/img/artigos/" . $this->getidartigo() . ".jpg";

		} else {

			$url = "/res/site/img/artigos.png";

		}

		return $this->setdesphoto($url);

	}

	public function getValues()
	{

		$this->checkPhoto();

		$values = parent::getValues();

		return $values;

	}

	public function setPhoto($file)
	{

		$extension = explode('.', $file['name']);
		$extension = end($extension);

		switch ($extension) {

			case "jpg":
			case "jpeg":
			$image = imagecreatefromjpeg($file["tmp_name"]);
			break;

			case "gif":
			$image = imagecreatefromgif($file["tmp_name"]);
			break;

			case "png":
			$image = imagecreatefrompng($file["tmp_name"]);
			break;

		}

		$dist = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 
			"res" . DIRECTORY_SEPARATOR . 
			"site" . DIRECTORY_SEPARATOR . 
			"img" . DIRECTORY_SEPARATOR . 
			"artigos" . DIRECTORY_SEPARATOR . 
			$this->setUri($this->getdestitulo()) . ".jpg";

		imagejpeg($image, $dist);

		imagedestroy($image);

		$this->checkPhoto();

	}

	public function getFromURL($desurl)
	{

		$sql = new Sql();

		$rows = $sql->select("SELECT * FROM tb_artigos WHERE desurl = :desurl LIMIT 1", [
			':desurl'=>$desurl
		]);

		$this->setData($rows[0]);

	}

	public function getCategories()
	{

		$sql = new Sql();

		return $sql->select("
			SELECT * FROM tb_categories a INNER JOIN tb_artigos b ON a.idcategory = b.idcategory
			", [

			':idartigo'=>$this->getidartigo()
		]);

	}

	public static function getPage($page = 1, $itemsPerPage = 10)
	{

		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_artigos
			ORDER BY desartigo
			LIMIT $start, $itemsPerPage;
		");

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			'data'=>$results,
			'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
		];

	}

	public static function getPageSearch($search, $page = 1, $itemsPerPage = 10)
	{

		$start = ($page - 1) * $itemsPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_artigos 
			WHERE destitulo LIKE :search
			ORDER BY destitulo
			LIMIT $start, $itemsPerPage;
		", [
			':search'=>'%'.$search.'%'
		]);

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			'data'=>$results,
			'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
		];

	}

}

 ?>