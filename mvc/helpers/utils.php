<?php 

class Utils{

	public static function deleteSession($name){
		if (isset($_SESSION[$name])) {
			$_SESSION[$name] = null;
		}

		return $name;
	}

	public static function isAdmin(){
		if(!isset($_SESSION['admin'])){
			header("Location:".base_url);
		} else {
			return true;
		}
	}

	public static function showCategorias(){
		require_once 'moldels/categoria.php';
		$categoria = new Categoria();
		$categorias = $categoria->getAll();
		return $categorias;
	}

}