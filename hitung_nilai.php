<?php
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];

    // value
    $na = (0.4 * $nilai_uts) + (0.6 * $nilai_uas);

    if($na >= 80){

        $indeks = "A";
    }
    
    else if($na >= 70){
        
        $indeks = "B";
    }
    
    else if($na >= 50){
        
        $indeks = "C";
    }
    
    else if($na >= 40){
        
        $indeks = "D";
    }

    else{
        $indeks = "E";
    }
    echo "$nilai_uts <br>";
    echo "$nilai_uas <br>";
    echo "$na <br>";
    echo "$indeks";

?>