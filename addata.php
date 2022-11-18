<?php
include 'koneksi.php';

$idbuku = $_POST['idbuku'];
$kodebuku = $_POST['kodebuku'];
$judulbuku = $_POST['judulbuku'];
$penulisbuku = $_POST['penulisbuku'];
$penerbitbuku = $_POST['penerbitbuku'];
$tahunpenerbit = $_POST['tahunpenerbit'];
$stok = $_POST['stok'];
$result['pesan'] = "";

if ($idbuku == "") {
  $result['pesan'] = "id buku harus diisi!";
} elseif ($kodebuku == "") {
  $result['pesan'] = "kode buku harus diisi!";
} elseif ($judulbuku == "") {
  $result['pesan'] = "judul buku harus diisi!";
} elseif ($penulisbuku == "") {
  $result['pesan'] = "penulis buku harus diisi!";
} elseif ($penerbitbuku == "") {
  $result['pesan'] = "penerbit buku harus diisi!";
} elseif ($tahunpenerbit == "") {
  $result['pesan'] = "tahun penerbit buku harus diisi!";
} elseif ($stok == "") {
  $result['pesan'] = "stok buku harus diisi!";
} else {
  $queryresult = $connect->query("INSERT INTO buku(id_buku,kode_buku,judul_buku,penulis_buku,penerbit_buku,tahun_penerbit,stok)
VALUES ('" . $idbuku . "','" . $kodebuku . "','" . $judulbuku . "','" . $penulisbuku . "','" . $penerbitbuku . "','" . $tahunpenerbit . "','" . $stok . "')");


  if ($queryresult) {
    $result['pesan'] = "Data berhasil ditambahkan";
  } else {
    $result['pesan'] = "Data gagal ditambahkan";
  }
}
echo json_encode($result);
