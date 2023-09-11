<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nama: <input type="text" name="nama">
        <br>
        <br>
        Umur: <input type="text" name="umur">
        <br>
        <br>
        Gender: <input type="radio" name="gender" value="laki-laki">Laki-Laki
        <input type="radio" name="gender" value="perempuan">Perempuan
        <br>
        <br>
        Makanan kesukaan:
        <input type="checkbox" name="makanan[]" value="rendang">Rendang
        <input type="checkbox" name="makanan[]" value="sayur sop">Sayur Sop
        <input type="checkbox" name="makanan[]" value="ayam">Ayam
        <br>
        <br>
        <input type="submit">
        <br>
        <br>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $gender = $_POST['gender'];
        $makanan = $_POST['makanan'];
            if (empty($nama) && empty($umur) && empty($gender) && empty($makanan)) {
                echo "Input kan terlebih dahulu";
            } else {
                echo 'Nama saya adalah ' . $nama . '<br>';
                echo 'Umur saya sekarang ' . $umur . ' tahun <br>';
                echo 'Saya seorang ' . $gender. '<br>';
                echo 'Dan makanan kesukaan saya adalah ' . implode(", ", $makanan);
                // echo 'Dan makanan kesukaan saya adalah ';
                // foreach ($makanan as $data) {
                //     echo "$data" . ' ';
                // }
            }
        }
    ?>
</body>

</html>