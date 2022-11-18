<?php 
  include 'koneksi.php';

  $queryresult = $connect->query("SELECT * FROM buku");
  $result=array();

  while($fetchdata=$queryresult->fetch_assoc() ){
    $result[]=$fetchdata;
  }
  echo json_encode($result);
