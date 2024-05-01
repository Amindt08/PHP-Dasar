<!DOCTYPE html>
<html>

<head>
    <title>Konversi Terbilang</title>
</head>

<body>
    <h1>Konversi Angka ke Terbilang (1-9)</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nilai">Masukkan nilai:</label>
        <input type="text" name="nilai" id="nilai" required><br><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];

        switch ($nilai) {
            case 1:
                $terbilang = "satu";
                break;
            case 2:
                $terbilang = "dua";
                break;
            case 3:
                $terbilang = "tiga";
                break;
            case 4:
                $terbilang = "empat";
                break;
        }
    }
    ?>
</body>

</html>