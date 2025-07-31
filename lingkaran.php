<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Lingkaran</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Hitung Lingkaran</h2>
    <form method="POST">
        <label for="jari2">Jari-jari (r):</label>
        <input type="text" name="jari2" autocomplete="off" required>
        <br>
        <label>Pilih:</label><br>
        <input type="radio" name="hitung" value="luas" required> Luas<br>
        <input type="radio" name="hitung" value="keliling"> Keliling<br>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $r = $_POST["jari2"];
        $jenis = $_POST["hitung"];
        if ($jenis == "luas") {
            $hasil = 3.14 * $r * $r;
            echo "<p>Luas lingkaran = $hasil</p>";
        } else {
            $hasil = 2 * 3.14 * $r;
            echo "<p>Keliling lingkaran = $hasil</p>";
        }
    }
    ?>
    <a href="index.php">Home</a>
</body>

</html>