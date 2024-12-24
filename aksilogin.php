<?php

try {
    $koneksi = new PDO("mysql:localhost=127.0.0.1;dbname=akademik2_pwb", "akademik2_pwb", "fik15368");
    
   
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    echo "Koneksi berhasil!";
} catch (PDOException $e) {
    
    echo "Koneksi gagal: " . $e->getMessage();
}

?>
