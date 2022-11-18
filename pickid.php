<?php 
  include 'koneksi.php';

  $id=$_POST['id'];
  $result = array();

  $queryresult = $connect->query("SELECT * FROM buku WHERE id_buku=".$id);
  $fetchdata = $queryresult->fetch_assoc();
  $result = $fetchdata;

  echo json_encode($result);
?>