<?php
/**
 * Connection properties
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class ConnectionProperty{
  //Desarrollo
//	private static $host = '172.16.107.157';
//  private static $user = 'spd';
//	private static $password = 'spd';
//	private static $database = 'spd';
//Producción
    private static $host = '172.16.200.12';
	private static $user = 'root';
	private static $password = '2015lamp';
	private static $database = 'spd';

	public static function getHost(){
		return ConnectionProperty::$host;
	}

	public static function getUser(){
		return ConnectionProperty::$user;
	}

	public static function getPassword(){
		return ConnectionProperty::$password;
	}

	public static function getDatabase(){
		return ConnectionProperty::$database;
	}
}
?>