<?php 

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
	}