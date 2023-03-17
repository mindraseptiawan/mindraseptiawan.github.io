<?php
$nilai = $_POST["nilai"];
echo "Nilai yg diinput : $nilai<br>";

if ($nilai >= 80 & $nilai <= 100) echo "Nilai menjadi A";
elseif ($nilai >= 70 & $nilai <= 79) echo "Nilai Menjadi B";
elseif ($nilai >= 60 & $nilai <= 69) echo "Nilai Menjadi C";
elseif ($nilai >= 40 & $nilai <= 59) echo "Nilai Menjadi D";
elseif ($nilai < 40) echo "Nilai Menjadi E";
else echo "Gajelas Nilaimu";
