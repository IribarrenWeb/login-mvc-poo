<?php 
	
	require_once "../data/conex.php";
	require_once "../models/users.php";
	/**
	 * summary
	 */
	class UserData extends Conection
	{

	    public static function login($user)
	    {
	        Conection::getConecting();

	        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password";
	       	
	       	$query = self::$conex->prepare($sql);

	       	@$query->bindParam(':usuario',$user->getUsername());
	       	@$query->bindParam(':password',$user->getPassword());
	       	
	       	$query->execute();
	       	
	       	$result = $query->fetch();

	       	if ($result != false) 
	       	{
	       		return $result;
	       	}
	       	else
	       	{
	       		return false;
	       	}
	    }

	    public static function getUserData($user)
	    {
	    	$udata = new User();

	    	$udata->setId($user['id']);
	    	$udata->setEmail($user['email']);
	    	$udata->setUsername($user['usuario']);
	    	$udata->setName($user['nombre']);
	    	$udata->setPassword($user['password']);
	    	$udata->setDate($user['date']);
	    	$udata->setPrivilegio($user['privilegio']);

	    	return $udata;
	    } 
	}