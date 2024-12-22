<!DOCTYPE html>
<html>

<head>
    <title>Percabangan</title>
</head>

<body>
    <h1>Percangan dan logika</h1>
    <h2>Percabangan If</h2>
    <?php
        $total_belanja = 150000;

        if ($total_belanja > 100000){
            echo "Anda dapat hadiah!!";
        }
    ?>
    <h2>Percabangan If/else</h2>
    <?php
    $umur = 13;
    
    if ($umur < 18){
        echo "Kamu tidak boleh membuka situs ini!!";
    } else {
        echo "Selamat datang di website kami!!";
    }
    ?>
    <h2>Percobaan umur 19 tahun</h2>
    <?php
    $umur = 19;
    
    if ($umur < 18){
        echo "Kamu tidak boleh membuka situs ini!!";
    } else {
        echo "Selamat datang di website kami!!";
    }
    ?>
    <h2>Percabangan If/elseif/else</h2>
    <?php
    $nilai = 88;

    if ($nilai > 90){
        $grade = "A";
    } elseif ($nilai > 80){
        $grade = "B";
    } elseif ($nilai > 60){
        $grade = "C";
    } elseif ($nilai > 40){
        $grade = "D";
    } elseif ($nilai > 30){
        $grade = "E";
    } else {
        $grade ="F";
    }

    echo "Nilai Anda = $nilai<br>";
    echo "Grade Anda = $grade";
    ?>
    <h2>Percabangan Switch/Case</h2>
    <?php
    $level = 3;
    switch($level){
        case 1:
            echo "Pelajari HTML";
            break;
        case 2:
            echo "Pelajari CSS";
            break;
        case 3:
            echo "Pelajari PHP";
            break;
        default:
            echo "Kamu bukan programmer!";
    }
    ?>

    <h1>Tugas 8 Percabangan</h1>
    <h2>Percabangan If</h2>
    <div>
        <form method="post" action="">
            <label for="nilai">Masukkan nilai Matematika Anda (0-100):</label>
            <input type="number" name="nilai" min="0" max="100" required>
            <input type="submit" value="Cek">
        </form>
    </div>

    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = (int)$_POST['nilai'];

        if ($nilai >= 70) {
            echo "Selamat! Anda lulus!!";
        } 
    }
    ?>

    <h2>Percabangan If/Else/Elseif</h2>
    <div>
        <form method="post" action="">
            <label for="nilai">Masukkan nilai Matematika Anda (0-100):</label>
            <input type="number" name="nilai" min="0" max="100" required>
            <input type="submit" value="Cek">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = (int)$_POST['nilai'];

        if ($nilai >= 90) {
            echo "Kategori: Sangat Baik";
        } elseif ($nilai >= 80) {
            echo "Kategori: Baik";
        } elseif ($nilai >= 70) {
            echo "Kategori: Cukup";
        } else {
            echo "Kategori: Kurang";
        }
    }
    ?>

    <h2>Percabangan Switch/Case</h2>
    <div>
        <form method="post" action="">
            <label for="kendaraan">Masukkan jenis kendaraan (beroda dua, tiga, empat, atau lebih):</label>
            <input type="text" name="kendaraan" required>
            <input type="submit" value="Cek">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['kendaraan'])) {
            $kendaraan = $_POST['kendaraan'];

            switch ($kendaraan) {
                case 'beroda empat':
                    echo "Jenis kendaraan yang Anda masukkan adalah Mobil.";
                    break;
                case 'beroda dua':
                    echo "Jenis kendaraan yang Anda masukkan adalah Motor.";
                    break;
                case 'beroda tiga':
                    echo "Jenis kendaraan yang Anda masukkan adalah Becak.";
                    break;
                default:
                    echo "Input tidak valid. Kendaraan yang Anda masukkan bukan Mobil, Motor, atau Becak";
                    break;
            }
        } else {
            echo "Input tidak valid. Silakan masukkan jenis kendaraan.";
        }
    }
    ?>

</html>
</body>

</html>