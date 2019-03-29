<?php 

	/**
	 * Conection to database class
	 */
	class Conection
	{
	    protected static $conex;

	    protected static function getConecting()
	    {
	    	try {
	    		
		        self::$conex = new PDO('mysql:host=localhost;dbname=login_mvc','root',"");
	    		
	    	} catch (Exception $e) {

	    		die('Error trying conected to database: '. $e );	
	    	
	    	}

	    	return self::$conex;
	    }

	    protected static function getDisconect()
	    {
	    	self::$conex = null;
	    }
	}