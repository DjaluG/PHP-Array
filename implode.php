<?php
$nilai = [80, 78, 72, 84, 92, 88];

$yeet = implode(",", $nilai);
echo "Nilai Saya : $yeet </br>";

$max = max($nilai);
echo "Nilai Tinggi : $max </br>";

$min = min($nilai);
echo "Nilai Kecil : $min </br>";

$nilai1 = array();
foreach ($nilai as $nilaibaru){
    array_push($nilai1, $nilaibaru);
}

asort($nilai);
$urut = implode(",", $nilai);
echo "Urutan Kecil : $urut </br>";

arsort($nilai);
$urut = implode(",", $nilai);
echo "Urutan Besar : $urut </br>";



$average = array_sum($nilai1) / count($nilai1);
echo "Rata-Rata : $average </br>";

$bulat = round($average);
echo "Bulat : $bulat </br> ";

$ganti = [75];
array_splice($nilai1, 2, 1, $ganti);
$yeet = implode(",", $nilai1);
echo "Ganti Nilai : $yeet </br>";


$urutanganti = arsort($nilai1);
$yeet = implode(",", $nilai1);
echo "Nilai Saya : $yeet </br>";

