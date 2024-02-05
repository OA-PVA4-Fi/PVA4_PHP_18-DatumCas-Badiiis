<?php
//1//

$today = date("Y-F-j");
$today = date("Y-m-d");
$today = date("H:i:s");
$today = date("Y-m-d H:i:s");
$today = date("d. m. Y G:i");

//2//

$today = strtotime("today");
$nextDay = strtotime("+1 day");
$nextMonth =strtotime("first day of next month");
$LastD = strtotime("last day of next month");
$days14 = strtotime("14 days");
$days3 = strtotime("-3 days");

echo 'Dnes: '.date("Y-m-d");
echo 'Příští Den'.date("Y-m-d", $nextDay);
echo 'První Den příštího měsíce'.date("Y-m-d", $nextMonth);
echo 'Poslední Den příštího měsíce'.date("Y-m-d", $LastD);
echo 'Datum splatnosti 14 dní od data vystavení'.date("Y-m-d",$days14);
echo 'Datum zdanitelneho plnění před třemi dny'.date("Y-m-d",$days3);





