<?php

require_once __DIR__ . '/vendor/autoload.php';

$html="
<hr>
<header>
<h1><p align='center'><font style='font-family:\"Courier New\"'>CERTIFICADO</font></p></h1>
</header>

<div>
<p align='justify'><font style='font-family:\"Courier New\"'><b>Rodrigo Amaral Constantino</b> obteu <b>2.5</b> créditos na formação <b>Responsive Web Designer</b> !</font></p>
</div>

<footer>
<h3><p align='center'><font style='font-family:\"Courier New\"'></font></p></h3>
</footer>
";

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();