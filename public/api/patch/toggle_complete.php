<?php

$id = $_PATCH["id"];
$complete = (INT)$_PATCH["complete"];

$query = "UPDATE `items` SET `complete`=$complete WHERE `id`=$id";
$result = mysqli_query($conn, $query);

if(mysqli_affected_rows($conn) > 0){
    $output["success"] = true;
}

print_r($output);
?>