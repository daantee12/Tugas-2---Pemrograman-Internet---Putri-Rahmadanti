<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
$pembeli = $_POST['nama'];
$kode_obat = $_POST['kode_obat'];
$jumlah = $_POST['jumlah'];
$model = new Model();
$model->insert($pembeli, $kode_obat,  $jumlah); header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
  
    $kode_penjualan = $_POST['kode_penjualan'];
    $pembeli = $_POST['nama'];
    $kode_obat = $_POST['kode_obat'];
    $jumlah = $_POST['jumlah'];
    $model = new Model();
    $model->update($kode_penjualan, $pembeli, $kode_obat, $jumlah); header('location:index.php');
    }
    if (isset($_GET['kode_penjualan'])) {
    $id = $_GET['kode_penjualan'];
    $model = new Model();
    $model->delete($id); header('location:index.php');
    }