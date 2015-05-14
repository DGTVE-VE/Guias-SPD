<?php
/**
 * Class that operate on table 'bibliografia_ms'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-12 19:12
 */
class BibliografiaMsMySqlExtDAO extends BibliografiaMsMySqlDAO{

    public function queryRepositorio($busqueda) {
        $sql = 'SELECT DISTINCT BIBLIOGRAFIA, URL_MATERIAL FROM '
                . '(SELECT * FROM bibliografia_ms WHERE MATCH(BIBLIOGRAFIA) '
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
    
    public function queryMateriales() {
        $sql = 'SELECT * FROM bibliografia_ms WHERE URL_MATERIAL IS NULL'
                . ' ORDER BY GUIA_DE_ESTUDIO';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }
    
    public function queryByGuia_Dimension($value, $dimension) {
         $sql = 'SELECT * FROM bibliografia_ms '
                 . 'WHERE GUIA_DE_ESTUDIO = ? '
                 . 'AND DIMENSION = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        $sqlQuery->set($dimension);
        
        return $this->getList($sqlQuery);
    }
    public function queryGuiasNullURL() {
        $sql = 'SELECT DISTINCT '
                . ' GUIA_DE_ESTUDIO, FUNCION, '
                . ' PROCESO, NIVEL_SERVICIO, URL_GUIA'
                . ' FROM bibliografia_ms WHERE URL_GUIA IS NULL';
        $sqlQuery = new SqlQuery($sql);
        $tab = QueryExecutor::execute($sqlQuery);
        $ret = array();
        for ($i = 0; $i < count($tab); $i++) {
            $ret[$i] = $this->readGuia($tab[$i]);
        }
        return $ret;        
    }
    public function queryGuiasByFuncionProceso($funcion, $proceso) {
        $sql = 'SELECT DISTINCT 
                GUIA_DE_ESTUDIO, FUNCION, 
                PROCESO, NIVEL_SERVICIO, URL_GUIA
                FROM bibliografia_ms 
                WHERE PROCESO = \''.$proceso.'\' AND FUNCION = \''. $funcion .
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
        $sql = 'SELECT DISTINCT DISTINCT GUIA_DE_ESTUDIO, FUNCION, '
                . ' PROCESO, NIVEL_SERVICIO, URL_GUIA '
                . ' FROM bibliografia_ms ORDER BY GUIA_DE_ESTUDIO';
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
        $bibliografia->fUNCION = $row['FUNCION'];
        $bibliografia->pROCESO = $row['PROCESO'];
        $bibliografia->nIVELSERVICIO = $row['NIVEL_SERVICIO'];        
        $bibliografia->url_guia = $row['URL_GUIA'];        
        return $bibliografia;
    }
}
?>