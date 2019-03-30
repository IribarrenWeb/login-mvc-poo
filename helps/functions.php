<?php 
    
    // Function made to cleaned the 
    // param before interaction with the database

    function cleanParam($param,$op = 0)
    {
        if ($op == 0) 
        {    
            $param = trim($param);
        }

        $param = stripcslashes($param);
        $param = htmlspecialchars($param);
        // $param_cleaned = mysqli_real_escape_string($param_cleaned);

        return $param;
    }

    function validateForm($name,$email)
    {
        $response = false;

        if (!is_int($name) && !preg_match('/[0-9]/',$name) && filter_var($email,FILTER_VALIDATE_EMAIL) != false) 
        {
            $response = true;
        }

        return $response;
    }