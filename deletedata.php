<?php 
  include 'koneksi.php';

  $id=$_POST['id'];
  $connect->query("DELETE FROM buku WHERE id_buku=".$id);
?>