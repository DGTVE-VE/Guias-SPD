<?php
/**
 * Class that operate on table 'bibliografia_media_superior'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-13 23:51
 */
class BibliografiaMediaSuperiorMySqlDAO implements BibliografiaMediaSuperiorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return BibliografiaMediaSuperiorMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM bibliografia_media_superior';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM bibliografia_media_superior ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param bibliografiaMediaSuperior primary key
 	 */
	public function delete($NUMERO){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($NUMERO);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BibliografiaMediaSuperiorMySql bibliografiaMediaSuperior
 	 */
	public function insert($bibliografiaMediaSuperior){
		$sql = 'INSERT INTO bibliografia_media_superior (PERFIL, GUIA_DE_ESTUDIO, FUNCION, PROCESO, NIVEL_SERVICIO, DIMENSION, BIBLIOGRAFIA, DISPONIBLE_EN_LINEA, ORIGEN, EDITORIAL, LIGA_O_REFERENCIA, NOMENCLATURA, MATERIAL_DE_DESCARGA, OBSERVACIONES, URL_PERFIL, URL_GUIA, URL_MATERIAL) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bibliografiaMediaSuperior->pERFIL);
		$sqlQuery->set($bibliografiaMediaSuperior->gUIADEESTUDIO);
		$sqlQuery->set($bibliografiaMediaSuperior->fUNCION);
		$sqlQuery->set($bibliografiaMediaSuperior->pROCESO);
		$sqlQuery->set($bibliografiaMediaSuperior->nIVELSERVICIO);
		$sqlQuery->set($bibliografiaMediaSuperior->dIMENSION);
		$sqlQuery->set($bibliografiaMediaSuperior->bIBLIOGRAFIA);
		$sqlQuery->set($bibliografiaMediaSuperior->dISPONIBLEENLINEA);
		$sqlQuery->set($bibliografiaMediaSuperior->oRIGEN);
		$sqlQuery->set($bibliografiaMediaSuperior->eDITORIAL);
		$sqlQuery->set($bibliografiaMediaSuperior->lIGAOREFERENCIA);
		$sqlQuery->set($bibliografiaMediaSuperior->nOMENCLATURA);
		$sqlQuery->set($bibliografiaMediaSuperior->mATERIALDEDESCARGA);
		$sqlQuery->set($bibliografiaMediaSuperior->oBSERVACIONES);
		$sqlQuery->set($bibliografiaMediaSuperior->uRLPERFIL);
		$sqlQuery->set($bibliografiaMediaSuperior->uRLGUIA);
		$sqlQuery->set($bibliografiaMediaSuperior->uRLMATERIAL);

		$id = $this->executeInsert($sqlQuery);	
		$bibliografiaMediaSuperior->nUMERO = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param BibliografiaMediaSuperiorMySql bibliografiaMediaSuperior
 	 */
	public function update($bibliografiaMediaSuperior){
		$sql = 'UPDATE bibliografia_media_superior SET PERFIL = ?, GUIA_DE_ESTUDIO = ?, FUNCION = ?, PROCESO = ?, NIVEL_SERVICIO = ?, DIMENSION = ?, BIBLIOGRAFIA = ?, DISPONIBLE_EN_LINEA = ?, ORIGEN = ?, EDITORIAL = ?, LIGA_O_REFERENCIA = ?, NOMENCLATURA = ?, MATERIAL_DE_DESCARGA = ?, OBSERVACIONES = ?, URL_PERFIL = ?, URL_GUIA = ?, URL_MATERIAL = ? WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bibliografiaMediaSuperior->pERFIL);
		$sqlQuery->set($bibliografiaMediaSuperior->gUIADEESTUDIO);
		$sqlQuery->set($bibliografiaMediaSuperior->fUNCION);
		$sqlQuery->set($bibliografiaMediaSuperior->pROCESO);
		$sqlQuery->set($bibliografiaMediaSuperior->nIVELSERVICIO);
		$sqlQuery->set($bibliografiaMediaSuperior->dIMENSION);
		$sqlQuery->set($bibliografiaMediaSuperior->bIBLIOGRAFIA);
		$sqlQuery->set($bibliografiaMediaSuperior->dISPONIBLEENLINEA);
		$sqlQuery->set($bibliografiaMediaSuperior->oRIGEN);
		$sqlQuery->set($bibliografiaMediaSuperior->eDITORIAL);
		$sqlQuery->set($bibliografiaMediaSuperior->lIGAOREFERENCIA);
		$sqlQuery->set($bibliografiaMediaSuperior->nOMENCLATURA);
		$sqlQuery->set($bibliografiaMediaSuperior->mATERIALDEDESCARGA);
		$sqlQuery->set($bibliografiaMediaSuperior->oBSERVACIONES);
		$sqlQuery->set($bibliografiaMediaSuperior->uRLPERFIL);
		$sqlQuery->set($bibliografiaMediaSuperior->uRLGUIA);
		$sqlQuery->set($bibliografiaMediaSuperior->uRLMATERIAL);

		$sqlQuery->setNumber($bibliografiaMediaSuperior->nUMERO);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM bibliografia_media_superior';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByPERFIL($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE PERFIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGUIADEESTUDIO($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE GUIA_DE_ESTUDIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFUNCION($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE FUNCION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPROCESO($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE PROCESO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNIVELSERVICIO($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE NIVEL_SERVICIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDIMENSION($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE DIMENSION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBIBLIOGRAFIA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE BIBLIOGRAFIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDISPONIBLEENLINEA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE DISPONIBLE_EN_LINEA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByORIGEN($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE ORIGEN = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEDITORIAL($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE EDITORIAL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLIGAOREFERENCIA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE LIGA_O_REFERENCIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNOMENCLATURA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE NOMENCLATURA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMATERIALDEDESCARGA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE MATERIAL_DE_DESCARGA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByOBSERVACIONES($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE OBSERVACIONES = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByURLPERFIL($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE URL_PERFIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByURLGUIA($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE URL_GUIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByURLMATERIAL($value){
		$sql = 'SELECT * FROM bibliografia_media_superior WHERE URL_MATERIAL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByPERFIL($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE PERFIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGUIADEESTUDIO($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE GUIA_DE_ESTUDIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFUNCION($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE FUNCION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPROCESO($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE PROCESO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNIVELSERVICIO($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE NIVEL_SERVICIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDIMENSION($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE DIMENSION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBIBLIOGRAFIA($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE BIBLIOGRAFIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDISPONIBLEENLINEA($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE DISPONIBLE_EN_LINEA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByORIGEN($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE ORIGEN = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEDITORIAL($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE EDITORIAL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLIGAOREFERENCIA($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE LIGA_O_REFERENCIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNOMENCLATURA($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE NOMENCLATURA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMATERIALDEDESCARGA($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE MATERIAL_DE_DESCARGA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByOBSERVACIONES($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE OBSERVACIONES = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByURLPERFIL($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE URL_PERFIL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByURLGUIA($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE URL_GUIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByURLMATERIAL($value){
		$sql = 'DELETE FROM bibliografia_media_superior WHERE URL_MATERIAL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return BibliografiaMediaSuperiorMySql 
	 */
	protected function readRow($row){
		$bibliografiaMediaSuperior = new BibliografiaMediaSuperior();
		
		$bibliografiaMediaSuperior->nUMERO = $row['NUMERO'];
		$bibliografiaMediaSuperior->pERFIL = $row['PERFIL'];
		$bibliografiaMediaSuperior->gUIADEESTUDIO = $row['GUIA_DE_ESTUDIO'];
		$bibliografiaMediaSuperior->fUNCION = $row['FUNCION'];
		$bibliografiaMediaSuperior->pROCESO = $row['PROCESO'];
		$bibliografiaMediaSuperior->nIVELSERVICIO = $row['NIVEL_SERVICIO'];
		$bibliografiaMediaSuperior->dIMENSION = $row['DIMENSION'];
		$bibliografiaMediaSuperior->bIBLIOGRAFIA = $row['BIBLIOGRAFIA'];
		$bibliografiaMediaSuperior->dISPONIBLEENLINEA = $row['DISPONIBLE_EN_LINEA'];
		$bibliografiaMediaSuperior->oRIGEN = $row['ORIGEN'];
		$bibliografiaMediaSuperior->eDITORIAL = $row['EDITORIAL'];
		$bibliografiaMediaSuperior->lIGAOREFERENCIA = $row['LIGA_O_REFERENCIA'];
		$bibliografiaMediaSuperior->nOMENCLATURA = $row['NOMENCLATURA'];
		$bibliografiaMediaSuperior->mATERIALDEDESCARGA = $row['MATERIAL_DE_DESCARGA'];
		$bibliografiaMediaSuperior->oBSERVACIONES = $row['OBSERVACIONES'];
		$bibliografiaMediaSuperior->uRLPERFIL = $row['URL_PERFIL'];
		$bibliografiaMediaSuperior->uRLGUIA = $row['URL_GUIA'];
		$bibliografiaMediaSuperior->uRLMATERIAL = $row['URL_MATERIAL'];

		return $bibliografiaMediaSuperior;
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
	 * @return BibliografiaMediaSuperiorMySql 
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