<?php
require 'vendor/autoload.php'; // Asegúrate de que la ruta a 'autoload.php' sea correcta
use Mpdf\Mpdf;

try {
    $mpdf = new Mpdf();
    $mpdf->WriteHTML('<h1>¡Hola, mPDF funciona!</h1>');
    $mpdf->Output();
} catch (\Mpdf\MpdfException $e) {
    echo $e->getMessage(); // Muestra errores en caso de que algo falle
}
?>
