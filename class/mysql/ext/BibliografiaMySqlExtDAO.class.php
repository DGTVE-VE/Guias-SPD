<?php

/**
 * Class that operate on table 'bibliografia'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-11 17:30
 */
class BibliografiaMySqlExtDAO extends BibliografiaMySqlDAO {

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
        $sql = 'SELECT * FROM bibliografia WHERE URL_MATERIAL IS NULL'
                . ' ORDER BY NOMENCLATURA';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryGuiasNullURL() {
        $sql = 'SELECT DISTINCT '
                . ' GUIA_DE_ESTUDIO, FUNCION, '
                . ' PROCESO, NIVEL_SERVICIO, URL_GUIA'
                . ' FROM bibliografia WHERE URL_GUIA IS NULL';
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
                FROM bibliografia 
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
        $sql = 'SELECT DISTINCT '
                . ' GUIA_DE_ESTUDIO, FUNCION, '
                . ' PROCESO, NIVEL_SERVICIO, URL_GUIA'
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
        $bibliografia->gUIADEESTUDIO = $row['GUIA_DE_ESTUDIO'];
        $bibliografia->fUNCION = $row['FUNCION'];
        $bibliografia->pROCESO = $row['PROCESO'];
        $bibliografia->nIVELSERVICIO = $row['NIVEL_SERVICIO'];
        $bibliografia->uRLGUIA = $row['URL_GUIA'];
        return $bibliografia;
    }

}

?>