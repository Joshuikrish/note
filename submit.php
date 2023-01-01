<?php

if (extension_loaded('sqlite3')) {
    echo 'SQLite extension is loaded';
} else {
    echo 'SQLite extension is not loaded';
}


function sql($sql){
    // if(!class_exists('database')){
    class  database extends SQLite3{
        function __construct($path)
        {
            $this->open($path);    
        }
        
    }
// }
    $db = new database("./database/database.db");
    if(!$db){
        echo 'ERROR : Database does not exist';
        exit();
    }
    $response = $db->query($sql);
    return $response;
    $db->close();
}


$sql="SELECT * FROM 'user' LIMIT 0,30";
$response=sql($sql);
// echo "$response";
var_dump($response);



?>