<?php
define ('BASE_URL' , '/pw2023_223040123/kuliah/tubes/'); 
function checkactive($uri){
    return ($_SERVER["REQUEST_URI"]=== BASE_URL . $uri) ? 'active' : '';
}

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040123') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data){
    $conn = koneksi();
    $NAMA = $data['NAMA'];
    $Spesialis = $data['Spesialis'];
    $Nomor_Telpon = $data['Nomor_Telpon'];
    $Email = $data['Email'];
    $Gambar = $data['Gambar'];
  
    $query = " INSERT INTO  
                daftar_layanan
                VALUES
                (null,'$NAMA','$Spesialis','$Nomor_Telpon','$Email','$Gambar')"; 
  
      mysqli_query($conn,$query) or die(mysqli_error($conn));
      return mysqli_affected_rows($conn);
  }

  function update($data){
    $conn = koneksi();
    $id = ($data['id']);
    $NAMA = htmlspecialchars($data['NAMA']);
    $Spesialis = htmlspecialchars($data['Spesialis']);
    $Nomor_Telpon = htmlspecialchars($data['Nomor_Telpon']);
    $Email = htmlspecialchars($data['Email']);

    $query = "UPDATE daftar_layanan SET NAMA = '$NAMA',
                Spesialis = '$Spesialis',
                Nomor_Telpon = '$Nomor_Telpon',
                Email = '$Email'
                WHERE id = $id";

mysqli_query($conn,$query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


?>