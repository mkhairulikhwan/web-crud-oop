<?php

class mobil
{
    var $merek;
    var $warna;

    function hidupkan_mobil()
    {
        return "Ini adalah cara menghidupkan mobil";
    }

    function matikan_mobil()
    {
        return "Ini adalah cara mematikan mobil";
    }

    function service($a)
    {
        return $a;
    }
}
/////////////////////////////////////

$mobil_pribadi = new mobil();

$mobil_pribadi->merek = "Honda";
$mobil_pribadi->warna = "Merah";

echo $mobil_pribadi->merek;
echo "<br>";
echo $mobil_pribadi->warna;

echo "<br>";

echo $mobil_pribadi->hidupkan_mobil();
echo "<br>";
echo $mobil_pribadi->matikan_mobil();

echo "<br>";

echo $mobil_pribadi->service("Service Mingguan");
