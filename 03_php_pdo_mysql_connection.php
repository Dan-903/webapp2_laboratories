<?php
$hostname = 'localhost';
$username = 'username';
$password = 'password';
$dbname = 'username';

try{
    $test = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $test->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection is successful";
}
catch(PDOException $err){
    echo "Connection Failed" . $err->getMessage();
}
?>
