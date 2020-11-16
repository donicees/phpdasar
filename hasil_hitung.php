<?php
    error_reporting(0);
    $angka_1 = $_POST['angka_1'];
    $angka_2 = $_POST['angka_2'];
    $operasi = $_POST['operasi'];

    // jumlah
    if($operasi == "jumlah"){
        $a = $angka_1 + $angka_2;
        echo $a;
    }

    // kurang
    else if($operasi == "kurang"){
        $b = $angka_1 - $angka_2;
        echo $b;
    }

    // kali
    else if($operasi == "kali"){
        $c = $angka_1 * $angka_2;
        echo $c;
    }

    // bagi
    else if($operasi == "bagi"){
        $d = $angka_1 / $angka_2;
        echo $d;
    }

    // tidak memilih apa-apa 
    else{
        echo "Anda belum menentukan pilihan";
    }
?>