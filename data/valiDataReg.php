<?php 
    
    require_once "../helps/functions.php"; 
    require_once "../controllers/UserControll.php"; 

    $response = array('estado' => false );

    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
            $postParams = array();

            parse_str($_POST['userRegister'],$postParams);

        if (!empty($postParams['username']) && !empty($postParams['password']) && !empty($postParams['name']) && !empty($postParams['email'])) 
        {
            $username = cleanParam($postParams['username']); 
            $password = cleanParam($postParams['password']);
            $name     = cleanParam($postParams['name'],1);
            $email    = cleanParam($postParams['email']);

            $validateData = validateForm($name,$email);

            if ($validateData) 
            {
                $validateSave = UserController::saveNewUser($username,$name,$password,$email);

                if (!is_array($validateSave)) 
                {    
                    $uData = UserController::getDataUser();
                    $response = 
                    [
                        'estado'       => true,
                        'privilegio'   => $uData->getPrivilegio()
                    ];
                }
                else 
                {
                    $response = $validateSave;    
                }                
            }    
        }
    }

    return printf(json_encode($response));

?>