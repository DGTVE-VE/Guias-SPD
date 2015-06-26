<?php
/**
 * Class that operate on table 'maestro'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-06-11 18:31
 */
class MaestroMySqlDAO implements MaestroDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MaestroMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM maestro WHERE id_maestro = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM maestro';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM maestro ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param maestro primary key
 	 */
	public function delete($id_maestro){
		$sql = 'DELETE FROM maestro WHERE id_maestro = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_maestro);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MaestroMySql maestro
 	 */
	public function insert($maestro){
		$sql = 'INSERT INTO maestro (nombre, apellido_paterno, apellido_materno, localidad, estado, proceso, funcion, codigo_postal, escuela, email, telefono) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($maestro->nombre);
		$sqlQuery->set($maestro->apellidoPaterno);
		$sqlQuery->set($maestro->apellidoMaterno);
		$sqlQuery->set($maestro->localidad);
		$sqlQuery->set($maestro->estado);
		$sqlQuery->set($maestro->proceso);
		$sqlQuery->set($maestro->funcion);
		$sqlQuery->set($maestro->codigoPostal);
		$sqlQuery->set($maestro->escuela);
		$sqlQuery->set($maestro->email);
		$sqlQuery->set($maestro->telefono);

		$id = $this->executeInsert($sqlQuery);	
		$maestro->idMaestro = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MaestroMySql maestro
 	 */
	public function update($maestro){
		$sql = 'UPDATE maestro SET nombre = ?, apellido_paterno = ?, apellido_materno = ?, localidad = ?, estado = ?, proceso = ?, funcion = ?, codigo_postal = ?, escuela = ?, email = ?, telefono = ? WHERE id_maestro = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($maestro->nombre);
		$sqlQuery->set($maestro->apellidoPaterno);
		$sqlQuery->set($maestro->apellidoMaterno);
		$sqlQuery->set($maestro->localidad);
		$sqlQuery->set($maestro->estado);
		$sqlQuery->set($maestro->proceso);
		$sqlQuery->set($maestro->funcion);
		$sqlQuery->set($maestro->codigoPostal);
		$sqlQuery->set($maestro->escuela);
		$sqlQuery->set($maestro->email);
		$sqlQuery->set($maestro->telefono);

		$sqlQuery->setNumber($maestro->idMaestro);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM maestro';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM maestro WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByApellidoPaterno($value){
		$sql = 'SELECT * FROM maestro WHERE apellido_paterno = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByApellidoMaterno($value){
		$sql = 'SELECT * FROM maestro WHERE apellido_materno = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLocalidad($value){
		$sql = 'SELECT * FROM maestro WHERE localidad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEstado($value){
		$sql = 'SELECT * FROM maestro WHERE estado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByProceso($value){
		$sql = 'SELECT * FROM maestro WHERE proceso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFuncion($value){
		$sql = 'SELECT * FROM maestro WHERE funcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCodigoPostal($value){
		$sql = 'SELECT * FROM maestro WHERE codigo_postal = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEscuela($value){
		$sql = 'SELECT * FROM maestro WHERE escuela = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM maestro WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTelefono($value){
		$sql = 'SELECT * FROM maestro WHERE telefono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombre($value){
		$sql = 'DELETE FROM maestro WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByApellidoPaterno($value){
		$sql = 'DELETE FROM maestro WHERE apellido_paterno = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByApellidoMaterno($value){
		$sql = 'DELETE FROM maestro WHERE apellido_materno = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLocalidad($value){
		$sql = 'DELETE FROM maestro WHERE localidad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEstado($value){
		$sql = 'DELETE FROM maestro WHERE estado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByProceso($value){
		$sql = 'DELETE FROM maestro WHERE proceso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFuncion($value){
		$sql = 'DELETE FROM maestro WHERE funcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCodigoPostal($value){
		$sql = 'DELETE FROM maestro WHERE codigo_postal = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEscuela($value){
		$sql = 'DELETE FROM maestro WHERE escuela = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM maestro WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTelefono($value){
		$sql = 'DELETE FROM maestro WHERE telefono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return MaestroMySql 
	 */
	protected function readRow($row){
		$maestro = new Maestro();
		
		$maestro->idMaestro = $row['id_maestro'];
		$maestro->nombre = $row['nombre'];
		$maestro->apellidoPaterno = $row['apellido_paterno'];
		$maestro->apellidoMaterno = $row['apellido_materno'];
		$maestro->localidad = $row['localidad'];
		$maestro->estado = $row['estado'];
		$maestro->proceso = $row['proceso'];
		$maestro->funcion = $row['funcion'];
		$maestro->codigoPostal = $row['codigo_postal'];
		$maestro->escuela = $row['escuela'];
		$maestro->email = $row['email'];
		$maestro->telefono = $row['telefono'];

		return $maestro;
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
	 * @return MaestroMySql 
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