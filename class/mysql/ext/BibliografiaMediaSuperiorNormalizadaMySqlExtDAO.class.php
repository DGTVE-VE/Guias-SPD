<?php

/**
 * Class that operate on table 'bibliografia_media_superior_normalizada'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-15 18:49
 */
class BibliografiaMediaSuperiorNormalizadaMySqlExtDAO 
extends BibliografiaMediaSuperiorNormalizadaMySqlDAO {

  public function queryPerfiles(){
		$sql = 'SELECT DISTINCT PERFIL, URL_PERFIL FROM bibliografia_media_superior_normalizada';
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
    
  public function queryRepositorio($busqueda) {
    $sql = 'SELECT DISTINCT BIBLIOGRAFIA_REVISADA, URL_MATERIAL FROM '
            . '(SELECT * FROM bibliografia_media_superior_normalizada WHERE MATCH(BIBLIOGRAFIA) '
            . 'AGAINST (\'' . $busqueda . '\')) as TEMP';
    $sqlQuery = new SqlQuery($sql);
    $tab = QueryExecutor::execute($sqlQuery);
    $ret = array();
    for ($i = 0; $i < count($tab); $i++) {
      $ret[$i] = $this->readPartialRow($tab[$i]);
    }
    return $ret;
  }

  protected function readPartialRow($row) {
    $bibliografia = new Bibliografia();
    $bibliografia->bIBLIOGRAFIA = $row['BIBLIOGRAFIA_REVISADA'];
    $bibliografia->uRLMATERIAL = $row['URL_MATERIAL'];
    return $bibliografia;
  }

  public function queryMateriales() {
    $sql = 'SELECT * FROM bibliografia_media_superior_normalizada '
            . ' WHERE URL_MATERIAL IS NULL'
            . ' ORDER BY GUIA_DE_ESTUDIO';
    $sqlQuery = new SqlQuery($sql);
    return $this->getList($sqlQuery);
  }

  public function queryByGuia_Dimension($value, $dimension) {
    $sql = 'SELECT * FROM bibliografia_media_superior_normalizada '
            . 'WHERE GUIA_DE_ESTUDIO = ? '
            . 'AND DIMENSION = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    $sqlQuery->set($dimension);

    return $this->getList($sqlQuery);
  }

  public function queryGuiasNullURL() {
    $sql = 'SELECT DISTINCT PERFIL, '
            . ' GUIA_DE_ESTUDIO, FUNCION, '
            . ' PROCESO, NIVEL_SERVICIO, URL_GUIA, URL_PERFIL'
            . ' FROM bibliografia_media_superior_normalizada '
            . ' WHERE URL_GUIA IS NULL';
    $sqlQuery = new SqlQuery($sql);
    $tab = QueryExecutor::execute($sqlQuery);
    $ret = array();
    for ($i = 0; $i < count($tab); $i++) {
      $ret[$i] = $this->readGuia($tab[$i]);
    }
    return $ret;
  }

  public function queryGuiasByFuncionProceso($funcion, $proceso) {
    $sql = 'SELECT DISTINCT PERFIL,
                GUIA_DE_ESTUDIO, FUNCION, 
                PROCESO, NIVEL_SERVICIO, URL_GUIA, URL_PERFIL
                FROM bibliografia_media_superior_normalizada 
                WHERE PROCESO = \'' . $proceso . '\' AND FUNCION = \'' . $funcion .
            '\' ORDER BY GUIA_DE_ESTUDIO ';
    $sqlQuery = new SqlQuery($sql);
    $tab = QueryExecutor::execute($sqlQuery);
    $ret = array();
    for ($i = 0; $i < count($tab); $i++) {
      $ret[$i] = $this->readGuia($tab[$i]);
    }
    return $ret;
  }

  public function queryGuias() {
    $sql = 'SELECT DISTINCT PERFIL, GUIA_DE_ESTUDIO, FUNCION, '
            . ' PROCESO, NIVEL_SERVICIO, URL_GUIA, URL_PERFIL '
            . ' FROM bibliografia_media_superior_normalizada ORDER BY GUIA_DE_ESTUDIO';
    $sqlQuery = new SqlQuery($sql);
    $tab = QueryExecutor::execute($sqlQuery);
    $ret = array();
    for ($i = 0; $i < count($tab); $i++) {
      $ret[$i] = $this->readGuia($tab[$i]);
    }
    return $ret;
  }

  protected function readGuia($row) {
    $bibliografia = new Bibliografia();
    $bibliografia->gUIADEESTUDIO = $row['GUIA_DE_ESTUDIO'];
    $bibliografia->pERFIL = $row['PERFIL'];
    $bibliografia->fUNCION = $row['FUNCION'];
    $bibliografia->pROCESO = $row['PROCESO'];
    $bibliografia->nIVELSERVICIO = $row['NIVEL_SERVICIO'];
    $bibliografia->uRLGUIA = $row['URL_GUIA'];
    $bibliografia->uRLPERFIL = $row['URL_PERFIL'];
    return $bibliografia;
  }

}

?>