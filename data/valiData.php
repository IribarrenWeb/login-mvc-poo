<?php 
    
    require_once "../helps/functions.php"; 
    require_once "../controllers/UserControll.php"; 

    $response = array('estado' => false );

    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) 
        {
            
            $username = cleanParam($_POST['username']); 
            $password = cleanParam($_POST['password']);

            $validation = UserController::getDataLogin($username,$password);

            if($validation)
            {
                $uData = UserController::getDataUser();
                $response = 
                [
                    'estado'       => true,
                    'nombre'       => $uData->getName(),
                    'email'        => $uData->getEmail(),
                    'id'           => $uData->getId(),
                    'fecha'        => $uData->getDate(),
                    'usuario'      => $uData->getUsername(),
                    'privilegio'   => $uData->getPrivilegio()
                ];
            }
    
        }
    }

    return printf(json_encode($response));

?>