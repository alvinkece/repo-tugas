<?php

$usia=70;
if($usia>0 and $usia<12){
    $status="anak kecil";
}
elseif($usia>=13 and $usia<=17){
    $status="remaja";
}
elseif($usia>=18 and $usia<=59){
    $status="dewasa";
}
elseif($usia>=60){
    $status="tua";
}

echo "usia anda ".$usia.", anda termasuk kedalam kategori $status";