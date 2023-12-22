<?php
$host = 'localhost'; // Nama hostnya
$username = 'root'; // Username
$password = '12345678'; // Password (Isi jika menggunakan password)
$database = 'spk_siswa'; // Nama databasenya

// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>
