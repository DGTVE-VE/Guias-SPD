<?php
/**
 * Class that operate on table 'bibliografia_media_superior_normalizada'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-15 18:49
 */
class BibliografiaMediaSuperiorNormalizadaMySqlDAO implements BibliografiaMediaSuperiorNormalizadaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return BibliografiaMediaSuperiorNormalizadaMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param bibliografiaMediaSuperiorNormalizada primary key
 	 */
	public function delete($NUMERO){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($NUMERO);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BibliografiaMediaSuperiorNormalizadaMySql bibliografiaMediaSuperiorNormalizada
 	 */
	public function insert($bibliografiaMediaSuperiorNormalizada){
		$sql = 'INSERT INTO bibliografia_media_superior_normalizada (PERFIL, GUIA_DE_ESTUDIO, FUNCION, PROCESO, NIVEL_SERVICIO, DIMENSION, BIBLIOGRAFIA_REVISADA, DISPONIBLE_EN_LINEA, ORIGEN, EDITORIAL, LIGA_O_REFERENCIA, NOMENCLATURA, MATERIAL_DE_DESCARGA, OBSERVACIONES, URL_MATERIAL, URL_GUIA, URL_PERFIL) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->pERFIL);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->gUIADEESTUDIO);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->fUNCION);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->pROCESO);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->nIVELSERVICIO);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->dIMENSION);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->bIBLIOGRAFIAREVISADA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->dISPONIBLEENLINEA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->oRIGEN);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->eDITORIAL);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->lIGAOREFERENCIA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->nOMENCLATURA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->mATERIALDEDESCARGA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->oBSERVACIONES);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->uRLMATERIAL);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->uRLGUIA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->uRLPERFIL);

		$id = $this->executeInsert($sqlQuery);	
		$bibliografiaMediaSuperiorNormalizada->nUMERO = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param BibliografiaMediaSuperiorNormalizadaMySql bibliografiaMediaSuperiorNormalizada
 	 */
	public function update($bibliografiaMediaSuperiorNormalizada){
		$sql = 'UPDATE bibliografia_media_superior_normalizada SET PERFIL = ?, GUIA_DE_ESTUDIO = ?, FUNCION = ?, PROCESO = ?, NIVEL_SERVICIO = ?, DIMENSION = ?, BIBLIOGRAFIA_REVISADA = ?, DISPONIBLE_EN_LINEA = ?, ORIGEN = ?, EDITORIAL = ?, LIGA_O_REFERENCIA = ?, NOMENCLATURA = ?, MATERIAL_DE_DESCARGA = ?, OBSERVACIONES = ?, URL_MATERIAL = ?, URL_GUIA = ?, URL_PERFIL = ? WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->pERFIL);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->gUIADEESTUDIO);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->fUNCION);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->pROCESO);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->nIVELSERVICIO);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->dIMENSION);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->bIBLIOGRAFIAREVISADA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->dISPONIBLEENLINEA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->oRIGEN);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->eDITORIAL);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->lIGAOREFERENCIA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->nOMENCLATURA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->mATERIALDEDESCARGA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->oBSERVACIONES);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->uRLMATERIAL);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->uRLGUIA);
		$sqlQuery->set($bibliografiaMediaSuperiorNormalizada->uRLPERFIL);

		$sqlQuery->setNumber($bibliografiaMediaSuperiorNormalizada->nUMERO);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByPERFIL($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE PERFIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGUIADEESTUDIO($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE GUIA_DE_ESTUDIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFUNCION($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE FUNCION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPROCESO($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE PROCESO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNIVELSERVICIO($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE NIVEL_SERVICIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDIMENSION($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE DIMENSION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBIBLIOGRAFIAREVISADA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE BIBLIOGRAFIA_REVISADA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDISPONIBLEENLINEA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE DISPONIBLE_EN_LINEA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByORIGEN($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE ORIGEN = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEDITORIAL($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE EDITORIAL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLIGAOREFERENCIA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE LIGA_O_REFERENCIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNOMENCLATURA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE NOMENCLATURA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMATERIALDEDESCARGA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE MATERIAL_DE_DESCARGA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOBSERVACIONES($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE OBSERVACIONES = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByURLMATERIAL($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE URL_MATERIAL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByURLGUIA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE URL_GUIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByURLPERFIL($value){
		$sql = 'SELECT * FROM bibliografia_media_superior_normalizada WHERE URL_PERFIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByPERFIL($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE PERFIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGUIADEESTUDIO($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE GUIA_DE_ESTUDIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFUNCION($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE FUNCION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPROCESO($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE PROCESO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNIVELSERVICIO($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE NIVEL_SERVICIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDIMENSION($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE DIMENSION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBIBLIOGRAFIAREVISADA($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE BIBLIOGRAFIA_REVISADA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDISPONIBLEENLINEA($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE DISPONIBLE_EN_LINEA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByORIGEN($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE ORIGEN = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEDITORIAL($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE EDITORIAL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLIGAOREFERENCIA($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE LIGA_O_REFERENCIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNOMENCLATURA($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE NOMENCLATURA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMATERIALDEDESCARGA($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE MATERIAL_DE_DESCARGA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOBSERVACIONES($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE OBSERVACIONES = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByURLMATERIAL($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE URL_MATERIAL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByURLGUIA($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE URL_GUIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByURLPERFIL($value){
		$sql = 'DELETE FROM bibliografia_media_superior_normalizada WHERE URL_PERFIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return BibliografiaMediaSuperiorNormalizadaMySql 
	 */
	protected function readRow($row){
		$bibliografiaMediaSuperiorNormalizada = new BibliografiaMediaSuperiorNormalizada();
		
		$bibliografiaMediaSuperiorNormalizada->nUMERO = $row['NUMERO'];
		$bibliografiaMediaSuperiorNormalizada->pERFIL = $row['PERFIL'];
		$bibliografiaMediaSuperiorNormalizada->gUIADEESTUDIO = $row['GUIA_DE_ESTUDIO'];
		$bibliografiaMediaSuperiorNormalizada->fUNCION = $row['FUNCION'];
		$bibliografiaMediaSuperiorNormalizada->pROCESO = $row['PROCESO'];
		$bibliografiaMediaSuperiorNormalizada->nIVELSERVICIO = $row['NIVEL_SERVICIO'];
		$bibliografiaMediaSuperiorNormalizada->dIMENSION = $row['DIMENSION'];
		$bibliografiaMediaSuperiorNormalizada->bIBLIOGRAFIAREVISADA = $row['BIBLIOGRAFIA_REVISADA'];
		$bibliografiaMediaSuperiorNormalizada->dISPONIBLEENLINEA = $row['DISPONIBLE_EN_LINEA'];
		$bibliografiaMediaSuperiorNormalizada->oRIGEN = $row['ORIGEN'];
		$bibliografiaMediaSuperiorNormalizada->eDITORIAL = $row['EDITORIAL'];
		$bibliografiaMediaSuperiorNormalizada->lIGAOREFERENCIA = $row['LIGA_O_REFERENCIA'];
		$bibliografiaMediaSuperiorNormalizada->nOMENCLATURA = $row['NOMENCLATURA'];
		$bibliografiaMediaSuperiorNormalizada->mATERIALDEDESCARGA = $row['MATERIAL_DE_DESCARGA'];
		$bibliografiaMediaSuperiorNormalizada->oBSERVACIONES = $row['OBSERVACIONES'];
		$bibliografiaMediaSuperiorNormalizada->uRLMATERIAL = $row['URL_MATERIAL'];
		$bibliografiaMediaSuperiorNormalizada->uRLGUIA = $row['URL_GUIA'];
		$bibliografiaMediaSuperiorNormalizada->uRLPERFIL = $row['URL_PERFIL'];

		return $bibliografiaMediaSuperiorNormalizada;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return BibliografiaMediaSuperiorNormalizadaMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>