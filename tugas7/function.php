<?php


$SERVER = 'localhost:3306';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'tokobanmakmur';
$connect = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);

function query($query)
{

    global $connect;

    $result = mysqli_query($connect, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function insert_barang($nama_barang, $kode_barang, $gambar_barang, $harga_barang, $stok_barang)
{
    global $connect;

    $query = "INSERT INTO Toko Ban Aliong (nama_barang, kode_barang, gambar_barang, harga_barang, stok_barang)
                VALUES ('$nama_barang', '$kode_barang', '$gambar_barang', '$harga_barang', '$stok_barang')";
    mysqli_query($connect, $query);


    // header("Location: index.php");
    // exit();
}

function update_barang($nama_barang, $kode_barang, $gambar_barang, $harga_barang, $stok_barang)
{
    global $connect;

    $query = "UPDATE Toko Ban Aliong SET  
    nama_barang = '$nama_barang', 
    gambar_barang = '$gambar_barang', 
    harga_barang = '$harga_barang', 
    stok_barang = '$stok_barang',
    WHERE kode_barang = '$kode_barang'";


    mysqli_query($connect, $query);


    // header("Location: index.php");
    // exit();
}


function delete_barang($kode_barang)
{
    global $connect;

    $query = "DELETE FROM Toko Ban Aliong WHERE kode_barang = '$kode_barang'";

    mysqli_query($connect, $query);

    // header("Location: index.php");
    // exit();
}