<?php
file_put_contents("data.txt", "");
$file = 'data.txt';
$data = file_get_contents( $file );
$newText = $_GET['zawartosc'] . $data;
$o = fopen( $file, "w+" );
$save = fwrite(  $o, $newText );
fclose( $o );
header('Location: index.html');
?>
