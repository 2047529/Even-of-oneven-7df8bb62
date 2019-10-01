<?php
echo "Vul een getal in:\n";
$getal = readline();
if (($getal % 2) == 1)
	echo "Dit is een oneven getal\n";
elseif (($getal % 2) == 0)
	echo "Dit is een even getal\n";

?>