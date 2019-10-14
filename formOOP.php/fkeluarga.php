<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keluarga</title>
</head>
<body>
    <form action="" method="POST">
        Masukan Jumlah Anggota Keluarga :
        <input type="number" name="jalmi">
        <input type="submit" name="simpan">
    </form>

    <form action="familyPro.php" method="POST">
        <?php
        if (isset($_POST['simpan'])) {
            $jalmi = $_POST['jalmi'];
            for ($i=0; $i < $jalmi; $i++) { ?>
            Nama :
                <input type="text" name="nama[]">
            NIK :
                <input type="text" name="nik[]">
            Alamat :
                <input type="text" name="alamat[]">
            Umur :
                <input type="number" name="umur[]"><br>
        
         <?php   }  ?>
                <input type="submit" name="asup">
     <?php   } ?>
    </form>
</body>
</html>