<?php
    $output = [
        "success"=>false,
    ];

    require_once("db_connect.php");

    $method = $_SERVER["REQUEST_METHOD"];
    $action = $_GET["action"];
    switch($method){
        case "GET":
            $output["action"] = $action;
            require_once("get/".$action.".php");
            break;
        case "POST":
            $output["message"] = "Post request made";
            break;
        case "PUT": 
            $output["message"] = "Put request made";
            break;
        case "PATCH": 
            $output["message"] = "Patch request made";
            break;
        case "DELETE": 
            $output["message"] = "delete request made";
            break;
        default:
            $output["error"] = "unknown request";
    }
    $output = json_encode($output);

    print $output;  


?>