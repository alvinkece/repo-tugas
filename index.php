<?php

function jumlahkan(){
    return "budi:assalamualaikum nama kamu siapa?";
}
function kaca($nama,$tahun){
    $umur=date("Y")-$tahun;
echo "mbot:wa'alaikumsalam nama saya $nama saya lahir tahun $tahun,kalau kamu namanya siapa?";
}

function aselole(){
    return "budi:nama saya budiono siregar cita cita saya kapal laut, 9 dikali 8 berapa mbot?";
}

function suki($n1,$n2){
    return $n1*$n2;
}

echo jumlahkan();
echo "<br> <hr>";
kaca("mbot",1979);
echo "<br> <hr>";
echo aselole();
echo "<br> <hr>";
echo "mbot:ini aku kasih tau ya budi hasilnya,jadi hasil dari 9 dikali 8 adalah ";
echo suki (9,8);
echo "<hr>";
