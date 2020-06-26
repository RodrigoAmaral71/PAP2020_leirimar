<?php

require_once __DIR__ . '/vendor/autoload.php';

$html="
<header>
<h1><p align='center'><font style='font-family:\"Courier New\"'>CERTIFICADO</font></p></h1>
</header>

<div>
<p align='justify'><font style='font-family:\"Courier New\"'><b>Rodrigo Amaral Constantino</b> obteu 2.5 créditos na formação <b>Responsive Web Designer</b> !</font></p>
</div>

<footer>
<h3><p align='center'><font style='font-family:\"Courier New\"'>PARABÉNS</font></p></h3>
</footer>
";

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();