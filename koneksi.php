<?php
  $connect = new mysqli("localhost","root","","perpustakaan"); 
  if(!$connect){
    echo "Connection Failed!";
    exit();
  }
