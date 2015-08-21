<?php
/**
 * Class that operate on table 'bibliografia_media_superior_normalizada'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-15 18:49
 */
class PreguntasFrecuentesMySqlDAO implements PreguntasFrecuentesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PreguntasFrecuentesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM preguntas_frecuentes WHERE idfaq = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM preguntas_frecuentes';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM preguntas_frecuentes ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param PreguntasFrecuentes primary key
 	 */
	public function delete($NUMERO){
		$sql = 'DELETE FROM preguntas_frecuentes WHERE idfaq = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($NUMERO);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param preguntas_frecuentesMySql preguntas_frecuentes
 	 */
	public function insert($preguntas_frecuentes){
		$sql = 'INSERT INTO preguntas_frecuentes (calificacion, num_pregunta) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		
		$sqlQuery->setNumber($preguntas_frecuentes->calificacion);
		$sqlQuery->setNumber($preguntas_frecuentes->numPregunta);

		$id = $this->executeInsert($sqlQuery);	
		$preguntas_frecuentes->idfaq = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param preguntas_frecuentesMySql preguntas_frecuentes
 	 */
	public function update($preguntas_frecuentes){
		$sql = 'UPDATE preguntas_frecuentes SET  calificacion = ?, num_pregunta = ? WHERE idfaq = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($preguntas_frecuentes->calificacion);
		$sqlQuery->set($preguntas_frecuentes->numPregunta);

		$sqlQuery->setNumber($preguntas_frecuentes->idfaq);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM preguntas_frecuentes';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIDFAQ($value){
		$sql = 'SELECT * FROM preguntas_frecuentes WHERE idfaq = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCALIFICACION($value){
		$sql = 'SELECT * FROM preguntas_frecuentes WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNUMPREGUNTA($value){
		$sql = 'SELECT * FROM preguntas_frecuentes WHERE num_pregunta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function deleteByIDFAQ($value){
		$sql = 'DELETE FROM preguntas_frecuentes WHERE idfaq = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCALIFICACION($value){
		$sql = 'DELETE FROM preguntas_frecuentes WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNUMPREGUNTA($value){
		$sql = 'DELETE FROM preguntas_frecuentes WHERE num_pregunta = ?';
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
		$preguntas_frecuentes = new PreguntasFrecuentes();
		
		$preguntas_frecuentes->iDFAQ = $row['idfaq'];
		$preguntas_frecuentes->cALIFICACION = $row['calificacion'];
		$preguntas_frecuentes->nUMPREGUNTA = $row['num_pregunta'];
		
		return $preguntas_frecuentes;
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