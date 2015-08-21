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
	
        require_once('class/dao/BibliografiaMediaSuperiorNormalizadaDAO.class.php');
	require_once('class/dto/BibliografiaMediaSuperiorNormalizada.class.php');
	require_once('class/mysql/BibliografiaMediaSuperiorNormalizadaMySqlDAO.class.php');
	require_once('class/mysql/ext/BibliografiaMediaSuperiorNormalizadaMySqlExtDAO.class.php');
	
        require_once('class/dao/MaestroDAO.class.php');
	require_once('class/dto/Maestro.class.php');
	require_once('class/mysql/MaestroMySqlDAO.class.php');
	require_once('class/mysql/ext/MaestroMySqlExtDAO.class.php');

        require_once('class/dao/UsuariosDAO.class.php');
	require_once('class/dto/Usuario.class.php');
	require_once('class/mysql/UsuariosMySqlDAO.class.php');
	require_once('class/mysql/ext/UsuariosMySqlExtDAO.class.php');

<<<<<<< HEAD
        require_once('class/dao/PreguntasFrecuentesDAO.class.php');
	require_once('class/dto/PreguntasFrecuentes.class.php');
	require_once('class/mysql/PreguntasFrecuentesMySqlDAO.class.php');
	require_once('class/mysql/ext/PreguntasFrecuentesMySqlExtDAO.class.php');
        
||||||| merged common ancestors
=======
        require_once 'class/dao/FeedBackBiblioDAO.class.php';
        require_once 'class/dto/FeedBackBiblio.class.php';
        require_once 'class/mysql/FeedBackBiblioMySqlDAO.class.php';
        require_once 'class/mysql/ext/FeedBackBiblioMySqlExtDAO.class.php';
        
        require_once 'class/dao/FeedBackBiblioMSDAO.class.php';
        require_once 'class/dto/FeedBackBiblioMS.class.php';
        require_once 'class/mysql/FeedBackBiblioMSMySqlDAO.class.php';
        require_once 'class/mysql/ext/FeedBackBiblioMSMySqlExtDAO.class.php';
>>>>>>> 83afd421216af30044aff8777600db2f9f055cce
?>