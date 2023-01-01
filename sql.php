<?php 
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