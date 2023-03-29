<?php
$namaserver = "localhost";
$username = "root";
$password = "";
$database = "pengweb";

$konek = new mysqli($namaserver, $username, $password, $database);

if ($konek->connect_error) {
    die("putus sambung") . $konek->connect_error;
} else echo "SAMBO ung <br>";


$query = "SELECT * FROM mahasiswa";

$hasil = $konek->query($query);

if ($hasil !== false && $hasil->num_rows > 0) {
    while ($row = $hasil->fetch_assoc()) {
        echo "nama: " . $row["nama"] . "<br>";
    }
} else "data kosong";
