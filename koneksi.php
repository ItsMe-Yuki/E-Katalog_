<?php
    $koneksi = mysqli_connect("localhost", "root", "", "e-katalog");
    if(!$koneksi) {
      die("Connection Failed: " . mysqli_connect_error()) ;
    }
