<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-05-15 18:49
 */
interface PreguntasFrecuentesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return PreguntasFrecuentes 
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
 	 * @param PreguntasFrecuentes primary key
 	 */
	public function delete($IDFAQ);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PreguntasFrecuentes preguntasfrecuentes
 	 */
	public function insert($PreguntasFrecuentes);
	
	/**
 	 * Update record in table
 	 *
 	 * @param PreguntasFrecuentes preguntasfrecuentes
 	 */
	public function update($PreguntasFrecuentes);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIDFAQ($value);

	public function queryByCALIFICACION($value);
        
        public function queryByNUMPREGUNTA($value);


        public function deleteByIDFAQ($value);

	public function deleteByCALIFICACION($value);
        
        public function deleteByNUMPREGUNTA($value);
}
?>