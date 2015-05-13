<?php
/**
 * Class that operate on table 'bibliografia_media_superior'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 23:51
 */
class BibliografiaMediaSuperiorMySqlExtDAO extends BibliografiaMediaSuperiorMySqlDAO{

	public function queryPerfiles(){
		$sql = 'SELECT DISTINCT PERFIL, URL_PERFIL FROM bibliografia_media_superior';
		$sqlQuery = new SqlQuery($sql);
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readPerfil($tab[$i]);
		}
		return $ret;
	}
    
    protected function readPerfil($row){
		$bibliografiaMediaSuperior = new BibliografiaMediaSuperior();
		
		$bibliografiaMediaSuperior->pERFIL = $row['PERFIL'];
        $bibliografiaMediaSuperior->uRLPERFIL = $row['URL_PERFIL'];
		
		return $bibliografiaMediaSuperior;
	}
	
}
?>