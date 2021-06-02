<?php 
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="ktp";

try{
    //menambah koneksi dengan PDO
    $db=new PDO("mysql:host=$db_host; dbname=$db_name", $db_user,$db_pass);
}catch(PDOException $e){
    //menunjukkan error
    die("Terjadi Masalah". $e->getMessage());
}

?>