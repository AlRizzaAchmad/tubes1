<?php
require('functions.php');

$title = 'Form tambah data';

// Insert data jika tombol diklik  
if(isset($_POST['tambah'])){  


    if(tambah($_POST) > 0){
        echo "<script> 
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
}


require('views/tambah.view.php');