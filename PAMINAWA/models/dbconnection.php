<?php

function create_connection(){
    $host= "localhost";
    $username="root";
    $password="";
    $database="socmed_martin";
    
    return new mysqli($host, $username, $password, $database);
    
     
}