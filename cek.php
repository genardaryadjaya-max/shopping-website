<?php
require 'vendor/autoload.php'; // Pastikan path ini benar

try {
    // Membuat koneksi ke MongoDB
    $client = new MongoDB\Client("mongodb://localhost:27017");
    
    // Mengakses database
    $db = $client->playstation_db; // Ganti dengan nama database Anda

    // Mengambil daftar koleksi untuk memastikan koneksi berhasil
    $collections = $db->listCollections();

    echo "Koneksi ke MongoDB berhasil!<br>";
    echo "Daftar koleksi dalam database 'playstation_db':<br>";

    foreach ($collections as $collection) {
        echo "- " . $collection->getName() . "<br>";
    }
} catch (Exception $e) {
    // Menangani kesalahan koneksi
    die("Koneksi database gagal: " . $e->getMessage());
}
?>