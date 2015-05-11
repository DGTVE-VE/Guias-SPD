<?php
/**
 * Object executes sql queries
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class QueryExecutor{

	/**
	 * Wykonaniew zapytania do bazy
	 *
	 * @param sqlQuery obiekt typu SqlQuery
	 * @return wynik zapytania 
	 */
	public static function execute($sqlQuery){
		$transaction = Transaction::getCurrentTransaction();
		if(!$transaction){
			$connection = new Connection();
		}else{
			$connection = $transaction->getConnection();
		}		
		$query = $sqlQuery->getQuery();
//                $pos = strpos($query, "null");
//                if ($pos != false) {
//                    if(true) {
//                      writeToFile($query);
//                    }
//                }
                $connection->executeQuery("SET NAMES 'utf8'");
		$result = $connection->executeQuery($query);
		if(!$result){
			throw new Exception("SQL Error: -->".$query."<--" . mysql_error());
		}
		$i=0;
		$tab = array();
		while ($row = mysql_fetch_array($result)){
			$tab[$i++] = $row;
		}
		mysql_free_result($result);
		if(!$transaction){
			$connection->close();
		}
		return $tab;
	}
	
	
	public static function executeUpdate($sqlQuery){
		$transaction = Transaction::getCurrentTransaction();
		if(!$transaction){
			$connection = new Connection();
		}else{
			$connection = $transaction->getConnection();
		}		
		$query = $sqlQuery->getQuery();
                $connection->executeQuery("SET NAMES 'utf8'");
		$result = $connection->executeQuery($query);
		if(!$result){
			throw new Exception("SQL Error: -->".$query."<--" . mysql_error());
		}
		return mysql_affected_rows();		
	}

	public static function executeInsert($sqlQuery){
		QueryExecutor::executeUpdate($sqlQuery);
		return mysql_insert_id();
	}
	
	/**
	 * Wykonaniew zapytania do bazy
	 *
	 * @param sqlQuery obiekt typu SqlQuery
	 * @return wynik zapytania 
	 */
	public static function queryForString($sqlQuery){
		$transaction = Transaction::getCurrentTransaction();
		if(!$transaction){
			$connection = new Connection();
		}else{
			$connection = $transaction->getConnection();
		}
                $connection->executeQuery("SET NAMES 'utf8'");
		$result = $connection->executeQuery($sqlQuery->getQuery());
		if(!$result){
			throw new Exception("SQL Error: -->".$sqlQuery->getQuery()."<--" . mysql_error());
		}
		$row = mysql_fetch_array($result);		
		return $row[0];
	}

}
?>