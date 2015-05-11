<?php
/**
 * Class that operate on table 'usuarios'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-05-11 18:09
 */
class UsuariosMySqlDAO implements UsuariosDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return UsuariosMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM usuarios WHERE idusuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM usuarios';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM usuarios ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param usuario primary key
 	 */
	public function delete($idusuario){
		$sql = 'DELETE FROM usuarios WHERE idusuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idusuario);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UsuariosMySql usuario
 	 */
	public function insert($usuario){
		$sql = 'INSERT INTO usuarios (nick, pass) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($usuario->nick);
		$sqlQuery->set($usuario->pass);

		$id = $this->executeInsert($sqlQuery);	
		$usuario->idusuario = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param UsuariosMySql usuario
 	 */
	public function update($usuario){
		$sql = 'UPDATE usuarios SET nick = ?, pass = ? WHERE idusuario = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($usuario->nick);
		$sqlQuery->set($usuario->pass);

		$sqlQuery->setNumber($usuario->idusuario);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM usuarios';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNick($value){
		$sql = 'SELECT * FROM usuarios WHERE nick = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPass($value){
		$sql = 'SELECT * FROM usuarios WHERE pass = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNick($value){
		$sql = 'DELETE FROM usuarios WHERE nick = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPass($value){
		$sql = 'DELETE FROM usuarios WHERE pass = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return UsuariosMySql 
	 */
	protected function readRow($row){
		$usuario = new Usuario();
		
		$usuario->idusuario = $row['idusuario'];
		$usuario->nick = $row['nick'];
		$usuario->pass = $row['pass'];

		return $usuario;
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
	 * @return UsuariosMySql 
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