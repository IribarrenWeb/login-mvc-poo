<?php 
    
    // Function made to cleaned the 
    // param before interaction with the database

    function cleanParam($param)
    {
        $param_cleaned = trim($param);
        $param_cleaned = stripcslashes($param_cleaned);
        $param_cleaned = htmlspecialchars($param_cleaned);

        return $param_cleaned;
    }
