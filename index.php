<?php 

session_start();

spl_autoload_register(function ($class) {    
    $fileName = "$class.php";

    $fileModel              = PATH_MODEL . $fileName;
    $fileController         = PATH_CONTROLLER . $fileName;
    $fileControllerClient        = PATH_CONTROLLER_CLIENT . $fileName;
    if (is_readable($fileModel)) {
        require_once $fileModel;       
    } 
    else if (is_readable($fileController)) {
        require_once $fileController;
    }
    else if (is_readable($fileControllerClient)) {
        require_once $fileControllerClient;
    }
});

require_once './configs/env.php';
require_once './configs/helper.php';

// Điều hướng
require_once './routes/index.php';
