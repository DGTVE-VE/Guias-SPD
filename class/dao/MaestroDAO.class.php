<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-06-11 18:31
 */
interface MaestroDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Maestro 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param maestro primary key
 	 */
	public function delete($id_maestro);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Maestro maestro
 	 */
	public function insert($maestro);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Maestro maestro
 	 */
	public function update($maestro);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombre($value);

	public function queryByApellidoPaterno($value);

	public function queryByApellidoMaterno($value);

	public function queryByLocalidad($value);

	public function queryByEstado($value);

	public function queryByProceso($value);

	public function queryByFuncion($value);

	public function queryByCodigoPostal($value);

	public function queryByEscuela($value);

	public function queryByEmail($value);

	public function queryByTelefono($value);


	public function deleteByNombre($value);

	public function deleteByApellidoPaterno($value);

	public function deleteByApellidoMaterno($value);

	public function deleteByLocalidad($value);

	public function deleteByEstado($value);

	public function deleteByProceso($value);

	public function deleteByFuncion($value);

	public function deleteByCodigoPostal($value);

	public function deleteByEscuela($value);

	public function deleteByEmail($value);

	public function deleteByTelefono($value);


}
?>