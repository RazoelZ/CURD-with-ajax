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
  $queryresult = $connect->query("UPDATE buku SET kode_buku='".$kodebuku."', judul_buku='".$judulbuku."',
   penulis_buku='".$penulisbuku."', penerbit_buku='".$penerbitbuku."', tahun_penerbit='".$tahunpenerbit."', stok='".$stok."' WHERE id_buku='".$idbuku."'");
}

if ($queryresult) {
  $result['pesan'] = "Data berhasil di update";
} else {
  $result['pesan'] = "Data gagal di update";
}
echo json_encode($result);

?>