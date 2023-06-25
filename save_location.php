<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  $locationData = "Latitude: $latitude\nLongitude: $longitude";

  $file = fopen('lokasi.txt', 'w');
  if ($file) {
    fwrite($file, $locationData);
    fclose($file);
    echo 'Lokasi disimpan ke file lokasi.txt';
  } else {
    http_response_code(500);
    echo 'Gagal menyimpan lokasi ke file.';
  }
}
?>
