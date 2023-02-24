<?php
function dbcon(){
    session_start();
    $host = 'localhost';
    $username ='root';
    $password = '';
    $database = 'phonebook';
    $dbcon = mysqli_connect($host, $username, $password, $database);
    if(!$dbcon){
        die('could not find database'. mysqli_error($dbcon));
    }

    return $dbcon;
}

function form(){
    $form = [
        'Заклад' => 'school', 
        'Адреса'=> 'address', 
        'Email'=> 'email', 
        'Веб-сторінка'=> 'web', 
        'ПІБ'=> 'name', 
        'Посада'=> 'role', 
        'Телефон'=> 'phone'
    ];
    return $form; 
}