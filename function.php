<?php
// // panggil file koneksi php
// require_once('koneksi.php');
// include_once('templates/header.php');

// // membuat query ke / dari database 
// function query($query){
//     global $koneksi;
//     $result = mysqli_query($koneksi,$query);
//     $rows = [];
//     while ($row = mysqli_fetch_assoc($result)){
//         $rows[] = $row;
//     }
//     return $rows;
// }

require_once('koneksi.php');

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
   return $rows;
}
// 