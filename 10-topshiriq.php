<?php

$date = "2019-12-03 12:35:43";
$timestamp = strtotime($date);
echo date("d-F, Y ", $timestamp)."- yil,". "soat ". date("H", $timestamp). " dan ". date("i", $timestamp). " daqiqayu, ". date("s", $timestamp). " soniya o’tdi";
// Output: 3-dekabr, 2019-yil, soat 12 dan 35 daqiqayu, 43 soniya o’tdi


?>