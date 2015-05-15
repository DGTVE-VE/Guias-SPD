<?php

/**
 * Class that operate on table 'bibliografia'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-11 18:09
 */
class BibliografiaMySqlDAO implements BibliografiaDAO {

    /**
     * Get Domain object by primry key
     *
     * @param String $id primary key
     * @return BibliografiaMySql 
     */
    public function load($id) {
        $sql = 'SELECT * FROM bibliografia WHERE NUMERO = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    /**
     * Get all records from table
     */
    public function queryAll() {
        $sql = 'SELECT * FROM bibliografia';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Get all records from table ordered by field
     *
     * @param $orderColumn column name
     */
    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM bibliografia ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Delete record from table
     * @param bibliografia primary key
     */
    public function delete($NUMERO) {
        $sql = 'DELETE FROM bibliografia WHERE NUMERO = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($NUMERO);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Insert record to table
     *
     * @param  bibliografia Bibliografia
     */
    public function insert($bibliografia) {
        $sql = 'INSERT INTO bibliografia (PERFIL, BIBLIOGRAFIA, GUIA_DE_ESTUDIO, '
                . 'FUNCION, PROCESO, NIVEL_SERVICIO, DIMENSION, '
                . 'DISPONIBLE_EN_LINEA, EDITORIAL, LIGA_O_REFERENCIA, '
                . 'NOMENCLATURA, MATERIAL_DE_DESCARGA, URL_GUIA, URL_MATERIAL, URL_PERFIL) '
                . 'VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($bibliografia->pERFIL);
        $sqlQuery->set($bibliografia->bIBLIOGRAFIA);
        $sqlQuery->set($bibliografia->gUIADEESTUDIO);
        $sqlQuery->set($bibliografia->fUNCION);
        $sqlQuery->set($bibliografia->pROCESO);
        $sqlQuery->set($bibliografia->nIVELSERVICIO);
        $sqlQuery->setNumber($bibliografia->dIMENSION);
        $sqlQuery->set($bibliografia->dISPONIBLEENLINEA);
        $sqlQuery->set($bibliografia->eDITORIAL);
        $sqlQuery->set($bibliografia->lIGAOREFERENCIA);
        $sqlQuery->set($bibliografia->nOMENCLATURA);
        $sqlQuery->set($bibliografia->mATERIALDEDESCARGA);
        $sqlQuery->set($bibliografia->uRLGUIA);
        $sqlQuery->set($bibliografia->uRLMATERIAL);
        $sqlQuery->set($bibliografia->uRLPERFIL);

        $id = $this->executeInsert($sqlQuery);
        $bibliografia->nUMERO = $id;
        return $id;
    }

    /**
     * Update record in table
     *
     * @param BibliografiaMySql bibliografia
     */
    public function update($bibliografia) {
        $sql = 'UPDATE bibliografia SET PERFIL = ?, BIBLIOGRAFIA = ?, GUIA_DE_ESTUDIO = ?, '
                . 'FUNCION = ?, PROCESO = ?, NIVEL_SERVICIO = ?, DIMENSION = ?, '
                . 'DISPONIBLE_EN_LINEA = ?, EDITORIAL = ?, LIGA_O_REFERENCIA = ?, '
                . 'NOMENCLATURA = ?, MATERIAL_DE_DESCARGA = ?, URL_GUIA = ?, '
                . 'URL_MATERIAL = ?, URL_PERFIL = ? WHERE NUMERO = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($bibliografia->pERFIL);
        $sqlQuery->set($bibliografia->bIBLIOGRAFIA);
        $sqlQuery->set($bibliografia->gUIADEESTUDIO);
        $sqlQuery->set($bibliografia->fUNCION);
        $sqlQuery->set($bibliografia->pROCESO);
        $sqlQuery->set($bibliografia->nIVELSERVICIO);
        $sqlQuery->setNumber($bibliografia->dIMENSION);
        $sqlQuery->set($bibliografia->dISPONIBLEENLINEA);
        $sqlQuery->set($bibliografia->eDITORIAL);
        $sqlQuery->set($bibliografia->lIGAOREFERENCIA);
        $sqlQuery->set($bibliografia->nOMENCLATURA);
        $sqlQuery->set($bibliografia->mATERIALDEDESCARGA);
        $sqlQuery->set($bibliografia->uRLGUIA);
        $sqlQuery->set($bibliografia->uRLMATERIAL);
        $sqlQuery->set($bibliografia->uRLPERFIL);

        $sqlQuery->setNumber($bibliografia->nUMERO);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Delete all rows
     */
    public function clean() {
        $sql = 'DELETE FROM bibliografia';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }
    
    public function queryByPerfil($value) {
        $sql = 'SELECT * FROM bibliografia WHERE PERFIL = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByBIBLIOGRAFIA($value) {
        $sql = 'SELECT * FROM bibliografia WHERE BIBLIOGRAFIA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByGUIADEESTUDIO($value) {
        $sql = 'SELECT * FROM bibliografia WHERE GUIA_DE_ESTUDIO = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByFUNCION($value) {
        $sql = 'SELECT * FROM bibliografia WHERE FUNCION = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByPROCESO($value) {
        $sql = 'SELECT * FROM bibliografia WHERE PROCESO = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByNIVELSERVICIO($value) {
        $sql = 'SELECT * FROM bibliografia WHERE NIVEL_SERVICIO = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByDIMENSION($value) {
        $sql = 'SELECT * FROM bibliografia WHERE DIMENSION = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryByDISPONIBLEENLINEA($value) {
        $sql = 'SELECT * FROM bibliografia WHERE DISPONIBLE_EN_LINEA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByEDITORIAL($value) {
        $sql = 'SELECT * FROM bibliografia WHERE EDITORIAL = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByLIGAOREFERENCIA($value) {
        $sql = 'SELECT * FROM bibliografia WHERE LIGA_O_REFERENCIA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByNOMENCLATURA($value) {
        $sql = 'SELECT * FROM bibliografia WHERE NOMENCLATURA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByMATERIALDEDESCARGA($value) {
        $sql = 'SELECT * FROM bibliografia WHERE MATERIAL_DE_DESCARGA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByURLGUIA($value) {
        $sql = 'SELECT * FROM bibliografia WHERE URL_GUIA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByURLMATERIAL($value) {
        $sql = 'SELECT * FROM bibliografia WHERE URL_MATERIAL = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByBIBLIOGRAFIA($value) {
        $sql = 'DELETE FROM bibliografia WHERE BIBLIOGRAFIA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByGUIADEESTUDIO($value) {
        $sql = 'DELETE FROM bibliografia WHERE GUIA_DE_ESTUDIO = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByFUNCION($value) {
        $sql = 'DELETE FROM bibliografia WHERE FUNCION = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByPROCESO($value) {
        $sql = 'DELETE FROM bibliografia WHERE PROCESO = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByNIVELSERVICIO($value) {
        $sql = 'DELETE FROM bibliografia WHERE NIVEL_SERVICIO = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByDIMENSION($value) {
        $sql = 'DELETE FROM bibliografia WHERE DIMENSION = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByDISPONIBLEENLINEA($value) {
        $sql = 'DELETE FROM bibliografia WHERE DISPONIBLE_EN_LINEA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByEDITORIAL($value) {
        $sql = 'DELETE FROM bibliografia WHERE EDITORIAL = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByLIGAOREFERENCIA($value) {
        $sql = 'DELETE FROM bibliografia WHERE LIGA_O_REFERENCIA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByNOMENCLATURA($value) {
        $sql = 'DELETE FROM bibliografia WHERE NOMENCLATURA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByMATERIALDEDESCARGA($value) {
        $sql = 'DELETE FROM bibliografia WHERE MATERIAL_DE_DESCARGA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByURLGUIA($value) {
        $sql = 'DELETE FROM bibliografia WHERE URL_GUIA = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByURLMATERIAL($value) {
        $sql = 'DELETE FROM bibliografia WHERE URL_MATERIAL = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Read row
     *
     * @return BibliografiaMySql 
     */
    protected function readRow($row) {
        $bibliografia = new Bibliografia();
        $bibliografia->nUMERO = $row['NUMERO'];
        $bibliografia->pERFIL = $row['PERFIL'];
        $bibliografia->bIBLIOGRAFIA = $row['BIBLIOGRAFIA'];
        $bibliografia->gUIADEESTUDIO = $row['GUIA_DE_ESTUDIO'];
        $bibliografia->fUNCION = $row['FUNCION'];
        $bibliografia->pROCESO = $row['PROCESO'];
        $bibliografia->nIVELSERVICIO = $row['NIVEL_SERVICIO'];
        $bibliografia->dIMENSION = $row['DIMENSION'];
        $bibliografia->dISPONIBLEENLINEA = $row['DISPONIBLE_EN_LINEA'];
        $bibliografia->eDITORIAL = $row['EDITORIAL'];
        $bibliografia->lIGAOREFERENCIA = $row['LIGA_O_REFERENCIA'];
        $bibliografia->nOMENCLATURA = $row['NOMENCLATURA'];
        $bibliografia->mATERIALDEDESCARGA = $row['MATERIAL_DE_DESCARGA'];
        $bibliografia->uRLGUIA = $row['URL_GUIA'];
        $bibliografia->uRLMATERIAL = $row['URL_MATERIAL'];
        $bibliografia->uRLPERFIL = $row['URL_PERFIL'];
        return $bibliografia;
    }

    protected function getList($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        $ret = array();
        for ($i = 0; $i < count($tab); $i++) {
            $ret[$i] = $this->readRow($tab[$i]);
        }
        return $ret;
    }

    /**
     * Get row
     *
     * @return BibliografiaMySql 
     */
    protected function getRow($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        if (count($tab) == 0) {
            return null;
        }
        return $this->readRow($tab[0]);
    }

    /**
     * Execute sql query
     */
    protected function execute($sqlQuery) {
        return QueryExecutor::execute($sqlQuery);
    }

    /**
     * Execute sql query
     */
    protected function executeUpdate($sqlQuery) {
        return QueryExecutor::executeUpdate($sqlQuery);
    }

    /**
     * Query for one row and one column
     */
    protected function querySingleResult($sqlQuery) {
        return QueryExecutor::queryForString($sqlQuery);
    }

    /**
     * Insert row to table
     */
    protected function executeInsert($sqlQuery) {
        return QueryExecutor::executeInsert($sqlQuery);
    }

}

?>