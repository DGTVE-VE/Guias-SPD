<?php

/**
 * Class that operate on table 'bibliografia'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-11 17:30
 */
class BibliografiaMySqlExtDAO extends BibliografiaMySqlDAO {

  public function queryRepositorioGuias($busqueda) {
    $sql = 'SELECT DISTINCT GUIA_DE_ESTUDIO, URL_GUIA FROM '
            . '(SELECT * FROM bibliografia '
            . 'WHERE MATCH(GUIA_DE_ESTUDIO) '
            . 'AGAINST (\'' . $busqueda . '\')) as TEMP';
    $sqlQuery = new SqlQuery($sql);
    $tab = QueryExecutor::execute($sqlQuery);
    $ret = array();
    for ($i = 0; $i < count($tab); $i++) {
      $ret[$i] = $this->readGUIA_URL($tab[$i]);
    }
    return $ret;
  }

  protected function readGUIA_URL($row) {
    $bibliografia = new Bibliografia();
    $bibliografia->bIBLIOGRAFIA = $row['GUIA_DE_ESTUDIO'];
    $bibliografia->uRLMATERIAL = $row['URL_GUIA'];
    return $bibliografia;
  }
  public function queryPerfiles() {
    $sql = 'SELECT DISTINCT PERFIL, URL_PERFIL FROM bibliografia';
    $sqlQuery = new SqlQuery($sql);
    $tab = QueryExecutor::execute($sqlQuery);
    $ret = array();
    for ($i = 0; $i < count($tab); $i++) {
      $ret[$i] = $this->readPerfil($tab[$i]);
    }
    return $ret;
  }

  protected function readPerfil($row) {
    $bibliografia = new Bibliografia();
    $bibliografia->pERFIL = $row['PERFIL'];
    $bibliografia->uRLPERFIL = $row['URL_PERFIL'];
    return $bibliografia;
  }

  public function queryRepositorio($busqueda) {
    $sql = 'SELECT DISTINCT BIBLIOGRAFIA, URL_MATERIAL FROM '
            . '(SELECT * FROM bibliografia WHERE MATCH(BIBLIOGRAFIA) '
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
    $bibliografia->bIBLIOGRAFIA = $row['BIBLIOGRAFIA'];
    $bibliografia->uRLMATERIAL = $row['URL_MATERIAL'];
    return $bibliografia;
  }

  public function queryByGuia_Dimension($value, $dimension) {
//        var_dump ($value);
    $sql = 'SELECT * FROM bibliografia WHERE GUIA_DE_ESTUDIO = ? AND DIMENSION = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    $sqlQuery->setNumber($dimension);

    return $this->getList($sqlQuery);
  }

  public function queryMateriales() {
    $sql = 'SELECT * FROM bibliografia WHERE URL_MATERIAL IS NULL OR URL_MATERIAL = \'\''
            . ' ORDER BY NOMENCLATURA';
    $sqlQuery = new SqlQuery($sql);
    return $this->getList($sqlQuery);
  }

  public function queryGuiasNullURL() {
    $sql = 'SELECT DISTINCT PERFIL,'
            . ' GUIA_DE_ESTUDIO, FUNCION, '
            . ' PROCESO, NIVEL_SERVICIO, URL_GUIA, URL_PERFIL'
            . ' FROM bibliografia WHERE URL_GUIA IS NULL OR URL_GUIA = \'\'';
    $sqlQuery = new SqlQuery($sql);
    $tab = QueryExecutor::execute($sqlQuery);
    $ret = array();
    for ($i = 0; $i < count($tab); $i++) {
      $ret[$i] = $this->readGuia($tab[$i]);
    }
    return $ret;
  }

  public function queryGuiasByFuncionProceso($funcion, $proceso) {
    if ($proceso == 'INGRESO'){
      $sql = 'SELECT DISTINCT PERFIL, 
                GUIA_DE_ESTUDIO, FUNCION, 
                PROCESO, NIVEL_SERVICIO, URL_GUIA, URL_PERFIL
                FROM bibliografia 
                WHERE PROCESO = \'INGRESO\' OR \'INGRESO/COMPLEMENTARIO\' AND FUNCION = \'' . $funcion .
            '\' ORDER BY GUIA_DE_ESTUDIO ';
    } else {
      $sql = 'SELECT DISTINCT PERFIL, 
                GUIA_DE_ESTUDIO, FUNCION, 
                PROCESO, NIVEL_SERVICIO, URL_GUIA, URL_PERFIL
                FROM bibliografia 
                WHERE PROCESO = \'' . $proceso . '\' AND FUNCION = \'' . $funcion .
            '\' ORDER BY GUIA_DE_ESTUDIO ';
    }
    $sqlQuery = new SqlQuery($sql);
    $tab = QueryExecutor::execute($sqlQuery);
    $ret = array();
    for ($i = 0; $i < count($tab); $i++) {
      $ret[$i] = $this->readGuia($tab[$i]);
    }
    return $ret;
  }

  public function queryGuias() {
    $sql = 'SELECT DISTINCT PERFIL, '
            . ' GUIA_DE_ESTUDIO, FUNCION, '
            . ' PROCESO, NIVEL_SERVICIO, URL_GUIA, URL_PERFIL'
            . ' FROM bibliografia ORDER BY GUIA_DE_ESTUDIO';
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
    $bibliografia->pERFIL = $row['PERFIL'];
    $bibliografia->gUIADEESTUDIO = $row['GUIA_DE_ESTUDIO'];
    $bibliografia->fUNCION = $row['FUNCION'];
    $bibliografia->pROCESO = $row['PROCESO'];
    $bibliografia->nIVELSERVICIO = $row['NIVEL_SERVICIO'];
    $bibliografia->uRLGUIA = $row['URL_GUIA'];
    $bibliografia->uRLPERFIL = $row['URL_PERFIL'];
    return $bibliografia;
  }

}

?>