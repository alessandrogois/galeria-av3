<?php

require_once "config.php";

class DB {

	private static $instance;

	public static function getInstance(){
            try {
                

            if(!isset(self::$instance)){

			try {
				self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
				//self::$instance = new PDO('mysql:host=localhost;dbname=galeria, root, ');
                                self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			} catch (PDOException $e) {
				echo $e->getMessage();
			}

		}

		return self::$instance;
                
                
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }
	}
 	
	public static function prepare($sql){
		return self::getInstance()->prepare($sql);
	}

}