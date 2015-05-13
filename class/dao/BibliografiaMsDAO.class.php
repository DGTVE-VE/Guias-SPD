<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-12 19:12
 */
interface BibliografiaMsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return BibliografiaMs 
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
 	 * @param bibliografiaM primary key
 	 */
	public function delete($NUMERO);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BibliografiaMs bibliografiaM
 	 */
	public function insert($bibliografiaM);
	
	/**
 	 * Update record in table
 	 *
 	 * @param BibliografiaMs bibliografiaM
 	 */
	public function update($bibliografiaM);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByGUIADEESTUDIO($value);

	public function queryByFUNCION($value);

	public function queryByPROCESO($value);

	public function queryByNIVELSERVICIO($value);

	public function queryByDIMENSION($value);

	public function queryByBIBLIOGRAFIA($value);


	public function deleteByGUIADEESTUDIO($value);

	public function deleteByFUNCION($value);

	public function deleteByPROCESO($value);

	public function deleteByNIVELSERVICIO($value);

	public function deleteByDIMENSION($value);

	public function deleteByBIBLIOGRAFIA($value);


}
?>