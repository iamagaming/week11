<?php

 try{
     $koneksi = new PDO("mysql:host=192.168.10.253;
     dbname=a112315368",'a112315368','polke001');
 }
 catch(PDOException $e){
   echo "koneksi gagal" , $e->getMessage();
 }
?>