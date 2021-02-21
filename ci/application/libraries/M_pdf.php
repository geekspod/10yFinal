<?php
require_once('application/libraries/mpdf/vendor/autoload.php');


$mpdf = new \Mpdf\Mpdf();
//$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();

?>

