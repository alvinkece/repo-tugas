<?php

$angkahari=1;
switch ($angkahari){
    case 1:
        $hari='ahad';
        break;
        case 2:
            $hari='senin';
            break;
            case 3:
                $hari='selasa';
                break;
                case 4:
                    $hari='rabu';
                    break;
                    case 5:
        $hari='kamis';
        break;

        case 6:
        $hari='jumat';
        break;case 7:
        $hari='sabtu';
        break;
        default:
        $hari="";
        
}
echo "<h2 > $hari";