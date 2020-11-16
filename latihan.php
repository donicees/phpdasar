<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    <?php
        $nama = "Andi";
        $usia = 17;
        $nilai = 81.5;
        $ket = "Lulus";
    ?>
    <table border ="1">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo "$nama"; ?></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td>:</td>
            <td><?php echo "$usia"; ?></td>
        </tr>
        <tr>
            <td>Nilai</td>
            <td>:</td>
            <td><?php echo "$nilai"; ?></td>  
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><?php echo "$ket"; ?></td>  
        </tr>

</table>
</body>
</html>