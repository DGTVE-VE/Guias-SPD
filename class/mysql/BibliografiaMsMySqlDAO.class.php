<?php
/**
 * Class that operate on table 'bibliografia_ms'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-12 19:12
 */
class BibliografiaMsMySqlDAO implements BibliografiaMsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return BibliografiaMsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM bibliografia_ms WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM bibliografia_ms';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM bibliografia_ms ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param bibliografiaM primary key
 	 */
	public function delete($NUMERO){
		$sql = 'DELETE FROM bibliografia_ms WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($NUMERO);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BibliografiaMsMySql bibliografiaM
 	 */
	public function insert($bibliografiaM){
		$sql = 'INSERT INTO bibliografia_ms (GUIA_DE_ESTUDIO, FUNCION, '
                        . 'PROCESO, NIVEL_SERVICIO, DIMENSION, BIBLIOGRAFIA, '
                        . 'URL_GUIA, URL_MATERIAL) '
                        . 'VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bibliografiaM->gUIADEESTUDIO);
		$sqlQuery->set($bibliografiaM->fUNCION);
		$sqlQuery->set($bibliografiaM->pROCESO);
		$sqlQuery->set($bibliografiaM->nIVELSERVICIO);
		$sqlQuery->set($bibliografiaM->dIMENSION);
		$sqlQuery->set($bibliografiaM->bIBLIOGRAFIA);
                $sqlQuery->set($bibliografiaM->url_guia);
                $sqlQuery->set($bibliografiaM->url_material);

		$id = $this->executeInsert($sqlQuery);	
		$bibliografiaM->nUMERO = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param BibliografiaMsMySql bibliografiaM
 	 */
	public function update($bibliografiaM){
		$sql = 'UPDATE bibliografia_ms SET GUIA_DE_ESTUDIO = ?, '
                        . 'FUNCION = ?, PROCESO = ?, NIVEL_SERVICIO = ?, '
                        . 'DIMENSION = ?, BIBLIOGRAFIA = ?, URL_GUIA = ?, '
                        . 'URL_MATERIAL = ? '
                        . 'WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bibliografiaM->gUIADEESTUDIO);
		$sqlQuery->set($bibliografiaM->fUNCION);
		$sqlQuery->set($bibliografiaM->pROCESO);
		$sqlQuery->set($bibliografiaM->nIVELSERVICIO);
		$sqlQuery->set($bibliografiaM->dIMENSION);
		$sqlQuery->set($bibliografiaM->bIBLIOGRAFIA);
                $sqlQuery->set($bibliografiaM->url_guia);
                $sqlQuery->set($bibliografiaM->url_material);

		$sqlQuery->setNumber($bibliografiaM->nUMERO);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM bibliografia_ms';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByGUIADEESTUDIO($value){
		$sql = 'SELECT * FROM bibliografia_ms WHERE GUIA_DE_ESTUDIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFUNCION($value){
		$sql = 'SELECT * FROM bibliografia_ms WHERE FUNCION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPROCESO($value){
		$sql = 'SELECT * FROM bibliografia_ms WHERE PROCESO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNIVELSERVICIO($value){
		$sql = 'SELECT * FROM bibliografia_ms WHERE NIVEL_SERVICIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDIMENSION($value){
		$sql = 'SELECT * FROM bibliografia_ms WHERE DIMENSION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBIBLIOGRAFIA($value){
		$sql = 'SELECT * FROM bibliografia_ms WHERE BIBLIOGRAFIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByGUIADEESTUDIO($value){
		$sql = 'DELETE FROM bibliografia_ms WHERE GUIA_DE_ESTUDIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFUNCION($value){
		$sql = 'DELETE FROM bibliografia_ms WHERE FUNCION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPROCESO($value){
		$sql = 'DELETE FROM bibliografia_ms WHERE PROCESO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNIVELSERVICIO($value){
		$sql = 'DELETE FROM bibliografia_ms WHERE NIVEL_SERVICIO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDIMENSION($value){
		$sql = 'DELETE FROM bibliografia_ms WHERE DIMENSION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBIBLIOGRAFIA($value){
		$sql = 'DELETE FROM bibliografia_ms WHERE BIBLIOGRAFIA = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return BibliografiaMsMySql 
	 */
	protected function readRow($row){
		$bibliografiaM = new BibliografiaM();
		
		$bibliografiaM->nUMERO = $row['NUMERO'];
		$bibliografiaM->gUIADEESTUDIO = $row['GUIA_DE_ESTUDIO'];
		$bibliografiaM->fUNCION = $row['FUNCION'];
		$bibliografiaM->pROCESO = $row['PROCESO'];
		$bibliografiaM->nIVELSERVICIO = $row['NIVEL_SERVICIO'];
		$bibliografiaM->dIMENSION = $row['DIMENSION'];
		$bibliografiaM->bIBLIOGRAFIA = $row['BIBLIOGRAFIA'];
                $bibliografiaM->url_guia = $row['URL_GUIA'];
                $bibliografiaM->url_material = $row['URL_MATERIAL'];

		return $bibliografiaM;
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
	 * @return BibliografiaMsMySql 
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