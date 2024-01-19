<?php

$id = $_GET['id'];

require '../vendor/autoload.php';
use Dompdf\Dompdf;

$websiteContent = file_get_contents('http://localhost/rpp/screens/pdfdownload.php?ds='.$id.'');


$dompdf = new Dompdf();
$dompdf->loadHtml($websiteContent);

$dompdf->render();
$dompdf->stream();
?>