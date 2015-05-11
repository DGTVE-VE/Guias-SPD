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
	 * @return UsuariosDAO
	 */
	public static function getUsuariosDAO(){
		return new UsuariosMySqlExtDAO();
	}


}
?>