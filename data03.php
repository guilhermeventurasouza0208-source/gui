<?php header("Content-type: text/html; charset=utf-8");

date_default_timezone_set("America/Toronto");
echo "As hora em Toronto é " . date("h:i:s: a") . "<br>";

date_default_timezone_set("Asia/Bangkok");
echo "As hora em Bangkok é " . date("h:i:s: a") . "<br>";

date_default_timezone_set("Asia/Hong_Kong");
echo "As hora em Hong-Kong é " . date("d/m/Y h:i:s: a") . "<br>";

date_default_timezone_set("Asia/Tokyo");
echo "As hora em Tokyo é " . date("h:i:s: a") . "<br>";

date_default_timezone_set("America/Argentina/Buenos_Aires");
echo "As hora em Argentina é " . date("h:i:s: a") . "<br>";

date_default_timezone_set("America/Sao_Paulo");
echo "As hora em São Paulo é " . date("h:i:s: a") . "<br>";
?>