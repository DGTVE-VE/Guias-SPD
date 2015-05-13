<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return BibliografiaDAO
	 */
	public static function getBibliografiaDAO(){
		return new BibliografiaMySqlExtDAO();
	}

	/**
	 * @return BibliografiaMediaSuperiorDAO
	 */
	public static function getBibliografiaMediaSuperiorDAO(){
		return new BibliografiaMediaSuperiorMySqlExtDAO();
	}

	/**
	 * @return BibliografiaMsDAO
	 */
	public static function getBibliografiaMsDAO(){
		return new BibliografiaMsMySqlExtDAO();
	}

	/**
	 * @return PerfilesDAO
	 */
	public static function getPerfilesDAO(){
		return new PerfilesMySqlExtDAO();
	}

	/**
	 * @return UsuariosDAO
	 */
	public static function getUsuariosDAO(){
		return new UsuariosMySqlExtDAO();
	}


}
?>