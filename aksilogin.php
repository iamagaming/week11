<?php

include "connection.php";

$e = $_POST['email'];
$p = $_post['katasandi'];
$dbh = $koneksi->query("SELECT * FROM users WHERE email = '".$e."' AND password = '".$p."' AND active = 1 ");

if()
{
    echo "login berhasil";
}
else {
    echo "login gagal";
}
?>