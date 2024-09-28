<?php

echo "<h2>tahun kabisat dari 2024 hingga 2200:<br></h2>";
for ($tahun=2024;$tahun <= 2200; $tahun++){
    if (($tahun %4==0&& $tahun %100 !=0)||($tahun %400==0)){
        echo "tahun kabisat $tahun <br>";
    }
}