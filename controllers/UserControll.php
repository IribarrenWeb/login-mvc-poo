<?php 

	require_once "../data/userData.php";

	/**
	 * User controller
	 */
	class UserController
	{
		private static $userData;
		// private static $user;

	    public static function getDataLogin($username,$password)
	    {
	        $user = new User;

	        $user->setUserName($username);
	        $user->setPassword($password);
	        
	        $validation = UserData::login($user);  

	        if ($validation) 
	        {
	        	self::$userData = $validation;
	         	$_SESSION['usuario'] = $validation;
	         	return true;
	        }
	        else
	        {
	        	return false;
	        }
	    }

	    public static function getDataUser()
	    {
	    	$response = UserData::getUserData(self::$userData);

	    	return $response;
	    }
	}