<?php
$database_host = 'localhost';
$database_user = 'root';
$database_pass = '';
$database_name = 'databaseku';
$connect = mysqli_connect($database_host, $database_user, $database_pass, $database_name);


if ($connect->connect_error) {
    die("Tidak Dapat Terhubung" . $connect->connect_error);
}
$username = "";
$Nama = "";
$Konsentrasi = "";
$Password = "";
$cari = "";
$gagal = "";
$berhasil = "";


if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "delete from user where id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    if ($q1) {
        $berhasil = "Berhasil dihapus";
    } else {
        $error = "Gagal";
    }
}

if ($op == 'edit') {
    $id = $_GET['id'];
    $sql1 = "select * from user where id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $username = $r1['username'];
    $Nama = $r1['Nama'];
    $Konsentrasi = $r1['Konsentrasi'];
    $Password = $r1['Password'];

    if ($username == '') {
        $gagal = "Data kosong";
    }
}

if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $Nama = $_POST['Nama'];
    $Konsentrasi = $_POST['Konsentrasi'];
    $Password = $_POST['Password'];

    if ($username && $Nama && $Konsentrasi && $Password) {
        if ($op == 'edit') { //update
            $sql1 = "update user set username = '$username', Nama = '$Nama', Konsentrasi = '$Konsentrasi', Password = '$Password' where id = '$id'";
            $q1 = mysqli_query($connect, $sql1);
            if ($q1) {
                $berhasil = "Terupdate";
            } else {
                $gagal = "Tengkurap";
            }
        } else { //insert
            $sql1 = "insert into user(username,Nama,Konsentrasi,Password) values('$username','$Nama','$Konsentrasi','$Password')";
            $q1 = mysqli_query($connect, $sql1);
            if ($q1) {
                $berhasil = "Berhasil Hore";
            } else {
                $gagal = "Tetap Semangat Dan Pantang Menyerah";
            }
        }
    } else {
        $gagal = "Gaje isi yang bener kocak";
    }
}
