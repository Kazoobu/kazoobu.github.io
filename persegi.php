<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Persegi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Hitung Persegi</h2>
    <form method="POST">
        <label for="sisi">Sisi:</label>
        <input type="text" name="sisi" autocomplete="off" required>
        <br>
        <label>Pilih:</label><br>
        <input type="radio" name="hitung" value="luas" required> Luas<br>
        <input type="radio" name="hitung" value="keliling"> Keliling<br>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sisi = $_POST["sisi"];
        $jenis = $_POST["hitung"];
        if ($jenis == "luas") {
            $hasil = $sisi * $sisi;
            echo "<p>Luas persegi = $hasil</p>";
        } else {
            $hasil = 4 * $sisi;
            echo "<p>Keliling persegi = $hasil</p>";
        }
    }
    ?>
    <a href="index.php">Home</a>

</body>

</html>