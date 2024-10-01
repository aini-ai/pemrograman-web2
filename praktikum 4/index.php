<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum 4</title>
</head>
<body>
    <h1>konsep pewarisan</h1>
    <div class="">
        <?php
            require_once "orangBiasa.php";
            require_once "orangInggris.php";
            require_once "Mahasiswa.php";

            $james = new orangBiasa();
            $james->setNama("james smith");
            $james->ucapSalam();

            echo "<br>";

            $rano = new orangInggris();
            $rano->setNama("Rano karno");
            $rano->ucapSalam();

            echo "<br>";

            $mahasiswa = new Mahasiswa();
            $mahasiswa->setNama("Emely walker");
            $mahasiswa->setNim("17009123");
            
            $nilaimahasiswa = new Nilai();
            $nilaimahasiswa->setTugas(70);
            $nilaimahasiswa->setUts(67);
            $nilaimahasiswa->setUas(90);
            
            $mahasiswa->setNilai($nilaimahasiswa);

            $mahasiswa->ucapSalam();
            $mahasiswa->tampilkanData();
        ?>
    </div>
</body>
</html>