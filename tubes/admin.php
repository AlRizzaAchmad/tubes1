
<?php 
require ('functions.php');
$title = 'Admin';

$layanan = query("SELECT * FROM daftar_layanan") ;

$id = isset($_GET["id"]) ? $_GET['id'] : null;

require('views/admin.view.php');

?>
