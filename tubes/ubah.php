<?php
require('functions.php');

$title = 'Form tambah data';

$id = $_GET["id"];

$lyn = query("SELECT * FROM daftar_layanan WHERE id=$id")[0];

if(isset($_POST['update'])){

    if(update($_POST)>0){
        echo "<Script>
                alert('Daftar Layanan berhasil di update');
                document.location.href = 'index.php'
                </script>";
    }else{
        echo "
            <script>
                alert('Update gagal')
                document.location.href = 'admin.php'
            </script>
            ";
    }

}


require('views/ubah.view.php');