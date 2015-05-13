<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/BibliografiaDAO.class.php');
	require_once('class/dto/Bibliografia.class.php');
	require_once('class/mysql/BibliografiaMySqlDAO.class.php');
	require_once('class/mysql/ext/BibliografiaMySqlExtDAO.class.php');
	require_once('class/dao/BibliografiaMediaSuperiorDAO.class.php');
	require_once('class/dto/BibliografiaMediaSuperior.class.php');
	require_once('class/mysql/BibliografiaMediaSuperiorMySqlDAO.class.php');
	require_once('class/mysql/ext/BibliografiaMediaSuperiorMySqlExtDAO.class.php');
	require_once('class/dao/BibliografiaMsDAO.class.php');
	require_once('class/dto/BibliografiaM.class.php');
	require_once('class/mysql/BibliografiaMsMySqlDAO.class.php');
	require_once('class/mysql/ext/BibliografiaMsMySqlExtDAO.class.php');
	require_once('class/dao/PerfilesDAO.class.php');
	require_once('class/dto/Perfile.class.php');
	require_once('class/mysql/PerfilesMySqlDAO.class.php');
	require_once('class/mysql/ext/PerfilesMySqlExtDAO.class.php');
	require_once('class/dao/UsuariosDAO.class.php');
	require_once('class/dto/Usuario.class.php');
	require_once('class/mysql/UsuariosMySqlDAO.class.php');
	require_once('class/mysql/ext/UsuariosMySqlExtDAO.class.php');

?>