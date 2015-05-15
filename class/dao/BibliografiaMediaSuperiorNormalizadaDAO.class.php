<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-15 18:49
 */
interface BibliografiaMediaSuperiorNormalizadaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return BibliografiaMediaSuperiorNormalizada 
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
 	 * @param bibliografiaMediaSuperiorNormalizada primary key
 	 */
	public function delete($NUMERO);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param BibliografiaMediaSuperiorNormalizada bibliografiaMediaSuperiorNormalizada
 	 */
	public function insert($bibliografiaMediaSuperiorNormalizada);
	
	/**
 	 * Update record in table
 	 *
 	 * @param BibliografiaMediaSuperiorNormalizada bibliografiaMediaSuperiorNormalizada
 	 */
	public function update($bibliografiaMediaSuperiorNormalizada);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByPERFIL($value);

	public function queryByGUIADEESTUDIO($value);

	public function queryByFUNCION($value);

	public function queryByPROCESO($value);

	public function queryByNIVELSERVICIO($value);

	public function queryByDIMENSION($value);

	public function queryByBIBLIOGRAFIAREVISADA($value);

	public function queryByDISPONIBLEENLINEA($value);

	public function queryByORIGEN($value);

	public function queryByEDITORIAL($value);

	public function queryByLIGAOREFERENCIA($value);

	public function queryByNOMENCLATURA($value);

	public function queryByMATERIALDEDESCARGA($value);

	public function queryByOBSERVACIONES($value);

	public function queryByURLMATERIAL($value);

	public function queryByURLGUIA($value);

	public function queryByURLPERFIL($value);


	public function deleteByPERFIL($value);

	public function deleteByGUIADEESTUDIO($value);

	public function deleteByFUNCION($value);

	public function deleteByPROCESO($value);

	public function deleteByNIVELSERVICIO($value);

	public function deleteByDIMENSION($value);

	public function deleteByBIBLIOGRAFIAREVISADA($value);

	public function deleteByDISPONIBLEENLINEA($value);

	public function deleteByORIGEN($value);

	public function deleteByEDITORIAL($value);

	public function deleteByLIGAOREFERENCIA($value);

	public function deleteByNOMENCLATURA($value);

	public function deleteByMATERIALDEDESCARGA($value);

	public function deleteByOBSERVACIONES($value);

	public function deleteByURLMATERIAL($value);

	public function deleteByURLGUIA($value);

	public function deleteByURLPERFIL($value);


}
?>