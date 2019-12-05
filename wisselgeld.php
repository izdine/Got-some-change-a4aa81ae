<?php
$invoer = $argv[1];
$Geld = Intval($invoer);
$pos = strpos($argv[1], " ");


if (is_numeric($invoer < 0) ) {
$posint = (int)$argv[1];
echo ("€" . $posint . " X €1 euro ");
}
else {
echo " Geen wisselgeld ";
}
 ?>
