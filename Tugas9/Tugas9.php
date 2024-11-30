<!DOCTYPE html>
<html>

<head>
    <title>Perulangan PHP</title>
</head>

<body>
    <h1>Contoh Perulangan PHP</h1>
    <h2>Perulangan For</h2>
    <?php
        for ($i = 0; $i < 10; $i++){
            echo "<h3>Ini perulangan ke-$i</h3>";
        }
        echo"<br/><br/>";
    ?>

    <h2>Perulangan While</h2>
    <?php
        $ulangi = 0;
        while ($ulangi < 10){
            echo  "<p>Ini adalah perulangan ke-$ulangi</p>";
            $ulangi++;
        }
        echo"<br/><br/>";
    ?>

    <h2>Perulangan Do/While</h2>
    <?php
        $ulangi = 10;
        do{
            echo "<p>Ini adalah perulangan ke-$ulangi</p>";
            $ulangi--;
        } while ($ulangi > 0);
        echo"<br/><br/>";
    ?>

    <h2>Perulangan Foreach</h2>
    <?php
        $books= [
            "Panduan Belajar PHP untuk Pemula",
            "Membangun Aplikasi Web dengan PHP",
            "Tutorial PHP dan MySQL",
            "Membuat Chat Bot dengan PHP"
        ];
        echo "<h5>Judul Buku PHP:</h5>";
        echo "<ul>";
        foreach($books as $buku){
            echo "<li>$buku</li>";
        }
        echo "</ul>";
        echo"<br/><br/>";
    ?>

    <h2>Perulangan Bersarang</h2>
    <h3>Contoh 1</h3>
    <?php
        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 10; $j++){
                echo "Ini perulangan ke ($i, $j)<br>";
            }
        }
    ?>
    <h3>Contoh 2</h3>
    <?php
        $i = 0;
        while($i < 10){
            for($j = 0; $j < 10; $j++){
                echo "Ini Perulangan ke ($i. $j)<br>";
            }
            $i++;
        }
    ?>

    <h1>Tugas Perulangan</h1>

    <div>
        <form method="POST">
            <label for="jumlahBaris">Masukkan jumlah baris segitiga bintang:</label>
            <input type="number" name="jumlahBaris" min="1" required>
            <input type="submit" value="Cetak">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jumlahBaris = (int)$_POST['jumlahBaris'];

            for ($i = 1; $i <= $jumlahBaris; $i++) {
                 for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
        }
        ?>
    </div>

</html>