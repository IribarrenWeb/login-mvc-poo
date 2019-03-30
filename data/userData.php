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
	    	$udata->setUserName($user['usuario']);
	    	$udata->setName($user['nombre']);
	    	$udata->setPassword($user['password']);
	    	$udata->setDate($user['date']);
	    	$udata->setPrivilegio($user['privilegio']);

	    	return $udata;
	    } 

        public static function saveUser($dataUser)
        {
            Conection::getConecting();
            
            $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND email = :email";

            $query = self::$conex->prepare($sql);

            @$query->bindParam(':usuario',$dataUser->getUsername());
            @$query->bindParam(':email',$dataUser->getEmail());
            
            $query->execute();


            if ($query->rowCount() >=1) 
            {
                return 'ya hay alguien';
            }
            else
            {
                $sql = 'INSERT INTO usuarios (nombre,usuario,password,email,privilegio) VALUES(?,?,?,?,0)';

                $query = self::$conex->prepare($sql);

                @$query->bindParam(2,$dataUser->getUsername());
                @$query->bindParam(4,$dataUser->getEmail());
                @$query->bindParam(3,$dataUser->getPassword());
                @$query->bindParam(1,$dataUser->getName());

                $response = $query->execute();

                if (!$response) {

                    $error = 
                    [
                        'estado' => false,
                        'error'  => $query->errorInfo()
                    ];
                    return $error;
                }

                return true;

            }

        }
	}