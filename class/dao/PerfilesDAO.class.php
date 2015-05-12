<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-12 19:12
 */
interface PerfilesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Perfiles 
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
 	 * @param perfile primary key
 	 */
	public function delete($NUMERO);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Perfiles perfile
 	 */
	public function insert($perfile);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Perfiles perfile
 	 */
	public function update($perfile);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByPPI($value);

	public function queryByPROCESO($value);

	public function queryByFUNCION($value);

	public function queryByNIVELMODALIDAD($value);

	public function queryByURL($value);


	public function deleteByPPI($value);

	public function deleteByPROCESO($value);

	public function deleteByFUNCION($value);

	public function deleteByNIVELMODALIDAD($value);

	public function deleteByURL($value);


}
?>