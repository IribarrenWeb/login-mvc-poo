<?php 
    
    require_once "../controllers/UserControll.php"; 

    if (isset($_POST['username']) && isset($_POST['password'])) 
    {
        
        $username = $_POST['username']; 
        $password = $_POST['password'];

        $response = array();

        if (!empty($username) && !empty($password)) 
        {

            $validation = UserController::getDataLogin($username,$password);

            if($validation)
            {
                $response = array('estado' => true );
            }
            else
            {
                $response = array('estado' => false );
            }     
        } 

    }

    return printf(json_encode($response));

?>