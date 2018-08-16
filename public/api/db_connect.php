<?php
    require_once("../../config/db.php");

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        $output["error"] = "Error connection to DB";
        print(json_encode($output));
        exit;
    }
?>