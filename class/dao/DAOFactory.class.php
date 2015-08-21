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
	 * @return BibliografiaMediaSuperiorNormalizadaDAO
	 */
	public static function getBibliografiaMediaSuperiorNormalizadaDAO(){
		return new BibliografiaMediaSuperiorNormalizadaMySqlExtDAO();
	}

	/**
	 * @return MaestroDAO
	 */
	public static function getMaestroDAO(){
		return new MaestroMySqlExtDAO();
	}

	/**
	 * @return UsuariosDAO
	 */
	public static function getUsuariosDAO(){
		return new UsuariosMySqlExtDAO();
	}

	/**
	 * @return PreguntasFrecuentesDAO
	 */
	public static function getPreguntasFrecuentesDAO(){
		return new PreguntasFrecuentesMySqlDAO();
	}
}
