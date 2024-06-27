<?php
$koneksi = mysqli_connect("localhost", "adi", "adi15siswanto", "water_wp");

if ($koneksi->connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi->connect_error;
}
?>