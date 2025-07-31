<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Persegi Panjang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Hitung Persegi Panjang</h2>
    <form method="POST">
        <label for="panjang">Panjang:</label>
        <input type="text" name="panjang" required><br>
        <label for="lebar">Lebar:</label>
        <input type="text" name="lebar" required><br>
        <label>Pilih:</label><br>
        <input type="radio" name="hitung" value="luas" required> Luas<br>
        <input type="radio" name="hitung" value="keliling"> Keliling<br>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $p = $_POST["panjang"];
        $l = $_POST["lebar"];
        $jenis = $_POST["hitung"];
        if ($jenis == "luas") {
            $hasil = $p * $l;
            echo "<p>Luas persegi panjang = $hasil</p>";
        } else {
            $hasil = 2 * ($p + $l);
            echo "<p>Keliling persegi panjang = $hasil</p>";
        }
    }
    ?>
    <a href="index.php">Home</a>

</body>

</html>