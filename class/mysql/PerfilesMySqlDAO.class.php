<?php
/**
 * Class that operate on table 'perfiles'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-12 19:12
 */
class PerfilesMySqlDAO implements PerfilesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PerfilesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM perfiles WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM perfiles';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM perfiles ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param perfile primary key
 	 */
	public function delete($NUMERO){
		$sql = 'DELETE FROM perfiles WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($NUMERO);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PerfilesMySql perfile
 	 */
	public function insert($perfile){
		$sql = 'INSERT INTO perfiles (PPI, PROCESO, FUNCION, NIVEL_MODALIDAD, URL) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($perfile->pPI);
		$sqlQuery->set($perfile->pROCESO);
		$sqlQuery->set($perfile->fUNCION);
		$sqlQuery->set($perfile->nIVELMODALIDAD);
		$sqlQuery->set($perfile->uRL);

		$id = $this->executeInsert($sqlQuery);	
		$perfile->nUMERO = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PerfilesMySql perfile
 	 */
	public function update($perfile){
		$sql = 'UPDATE perfiles SET PPI = ?, PROCESO = ?, FUNCION = ?, NIVEL_MODALIDAD = ?, URL = ? WHERE NUMERO = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($perfile->pPI);
		$sqlQuery->set($perfile->pROCESO);
		$sqlQuery->set($perfile->fUNCION);
		$sqlQuery->set($perfile->nIVELMODALIDAD);
		$sqlQuery->set($perfile->uRL);

		$sqlQuery->setNumber($perfile->nUMERO);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM perfiles';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByPPI($value){
		$sql = 'SELECT * FROM perfiles WHERE PPI = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPROCESO($value){
		$sql = 'SELECT * FROM perfiles WHERE PROCESO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFUNCION($value){
		$sql = 'SELECT * FROM perfiles WHERE FUNCION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNIVELMODALIDAD($value){
		$sql = 'SELECT * FROM perfiles WHERE NIVEL_MODALIDAD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByURL($value){
		$sql = 'SELECT * FROM perfiles WHERE URL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByPPI($value){
		$sql = 'DELETE FROM perfiles WHERE PPI = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPROCESO($value){
		$sql = 'DELETE FROM perfiles WHERE PROCESO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFUNCION($value){
		$sql = 'DELETE FROM perfiles WHERE FUNCION = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNIVELMODALIDAD($value){
		$sql = 'DELETE FROM perfiles WHERE NIVEL_MODALIDAD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByURL($value){
		$sql = 'DELETE FROM perfiles WHERE URL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PerfilesMySql 
	 */
	protected function readRow($row){
		$perfile = new Perfile();
		
		$perfile->nUMERO = $row['NUMERO'];
		$perfile->pPI = $row['PPI'];
		$perfile->pROCESO = $row['PROCESO'];
		$perfile->fUNCION = $row['FUNCION'];
		$perfile->nIVELMODALIDAD = $row['NIVEL_MODALIDAD'];
		$perfile->uRL = $row['URL'];

		return $perfile;
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
	 * @return PerfilesMySql 
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