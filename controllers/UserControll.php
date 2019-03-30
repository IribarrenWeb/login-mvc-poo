<?php 

	require_once "../data/userData.php";

	if (!isset($_SESSION)) 
	{
		session_start();
	}

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

	    public static function saveNewUser($username,$name,$password,$email)
	    {
	    	$data = new User;

	    	$data->setUserName($username);
	        $data->setPassword($password);
	        $data->setName($name);
	        $data->setEmail($email);

	    	$response = UserData::saveUser($data);

	    	if (!is_array($response)) 
	    	{
	    		$response = self::getDataLogin($username,$password);
	    	}

	    	return $response;
	    }
	}