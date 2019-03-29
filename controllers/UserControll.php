<?php 

	require_once "../models/users.php";

	/**
	 * User controller
	 */
	class UserController
	{

	    public static function getDataLogin($username,$password)
	    {
	        $user = new User;

	        $user->setUserName($username);
	        $user->setPassword($password);
	        
	        $validation = UserData::login($user);  

	        if ($validation) 
	        {
	         	$_SESSION['usuario'] = $validation;
	         	return true;
	        }
	        else
	        {
	        	return false;
	        }
	    }
	}