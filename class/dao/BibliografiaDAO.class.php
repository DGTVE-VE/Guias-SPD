<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-11 18:09
 */
interface BibliografiaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Bibliografia 
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
 	 * @param bibliografia primary key
 	 */
	public function delete($NUMERO);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Bibliografia bibliografia
 	 */
	public function insert($bibliografia);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Bibliografia bibliografia
 	 */
	public function update($bibliografia);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByBIBLIOGRAFIA($value);

	public function queryByGUIADEESTUDIO($value);

	public function queryByFUNCION($value);

	public function queryByPROCESO($value);

	public function queryByNIVELSERVICIO($value);

	public function queryByDIMENSION($value);

	public function queryByDISPONIBLEENLINEA($value);

	public function queryByEDITORIAL($value);

	public function queryByLIGAOREFERENCIA($value);

	public function queryByNOMENCLATURA($value);

	public function queryByMATERIALDEDESCARGA($value);

	public function queryByURLGUIA($value);

	public function queryByURLMATERIAL($value);


	public function deleteByBIBLIOGRAFIA($value);

	public function deleteByGUIADEESTUDIO($value);

	public function deleteByFUNCION($value);

	public function deleteByPROCESO($value);

	public function deleteByNIVELSERVICIO($value);

	public function deleteByDIMENSION($value);

	public function deleteByDISPONIBLEENLINEA($value);

	public function deleteByEDITORIAL($value);

	public function deleteByLIGAOREFERENCIA($value);

	public function deleteByNOMENCLATURA($value);

	public function deleteByMATERIALDEDESCARGA($value);

	public function deleteByURLGUIA($value);

	public function deleteByURLMATERIAL($value);


}
?>