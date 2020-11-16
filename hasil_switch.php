<?php
    error_reporting(0);
    $angka_1 = $_POST['angka_1'];
    $angka_2 = $_POST['angka_2'];
    $operasi = $_POST['operasi'];

    switch($operasi){
        case "jumlah":
            $a = $angka_1 + $angka_2;
            echo $a;
        break;
        case "kurang":
            $b = $angka_1 - $angka_2;
            echo $b;
        break;
        case "kali":
            $c = $angka_1 * $angka_2;
            echo $c;
        break;
        case "bagi":
            $d = $angka_1 / $angka_2;
            echo $d;
        break;
        default;
        echo "anda belum memilih";
    break;
    }
?>