<!DOCTYPE html>
<html>

<head>
    <title>Contoh List dengan HTML</title>
</head>

<body>
    <h2>Contoh Fungsi PHP</h2>
    <h3>Daftar Absensi Mahasiswa</h3>
    <ol>
        <li>Nama Mahasiswa ke-1</li>
        <li>Nama Mahasiswa ke-2</li>
        <li>Nama Mahasiswa ke-3</li>
        <li>Nama Mahasiswa ke-4</li>
        <li>Nama Mahasiswa ke-5</li>
    </ol>
    <h3>Daftar Absensi Mahasiswa</h3>
    <ol>
        <?php
            for ($i= 1; $i <= 10; $i++)
        {
        echo "<li>Nama Mahasiswa ke-$i</li>";
        }
        ?>
    </ol>
    <h3>Contoh penulisan kode PHP</h3>
    <?php
        echo "Hello, World!!";
        echo '<br/>';
    ?>
    <?php
        echo "Hello, World!!";
    ?>
    <h3>Contoh dasar penulisan kode PHP</h3>
    <?php
        Echo "Hello, World!!";
        ECHO "<br/> Hello, World!!";
        EcHo "<br/> Hello, World!!";
    ?>
    <h3? $andi="Andi" ; echo $Andi; //Notice: Underfined variable: Andi ?>
        </h3>
        <h3>Contoh cara Menampilkan Nilai Variabel</h3>
        <?php
        $a='Saya Sedang belajar PHP';
        $b=5;

        print $a;
        echo $b;
    ?>
        <?php
        $a= '5';
        $b= "Sedang Belajar PHP $a";

        echo $b;
        //hasil: Saya Sedang Belajar PHP 5
    ?>
        <h3>Contoh Tipe Data Integer</h3>
        <?php
        $umur=21;
        $harga=15000;
        $rugi=-500000;

        echo $umur; //21
        echo "<br />";
        echo $harga; //15000
        echo "<br/>";
        echo $rugi; //-500000
        ?>
        <?php
        $a=14;
        $b=16;
        $c= $a +  $b;
        echo $c; //30

        $d=$a*$b;
        echo $d; //224
    ?>
        <h3>Contoh data Float</h3>
        <?php
        $angka_float1=0.78;
        $angka_float2=14.99;
        $angka_scientific1=0.314E1;
        $angka_scientific2=0.3365E-3;

        echo $angka_float1; //0.78
        echo "<br/>";
        echo $angka_float2; 
        echo "<br/>";
        echo$angka_scientific1;
        echo "<br/>";
        echo $angka_scientific2;
    ?>
        <?php
        $a=10.66;
        $b=12.4;
        $c = $b + $a;
        echo $c;

        $d = $a / $b;
        echo $d;
    ?>
        <h3>Contoh Tipe data String</h3>
        <?php
        $string1='Ini adalah string sederhana';
        $string2='Ini adalah string yang bisa 
        memiliki beberapa baris';
        $string3='Dia berkata: "I\ll be back"';

        echo $string1; echo"<br/>";
        echo $string2; echo"<br/>";
        echo $string3; echo"<br/>";
    ?>
        <h3>Contoh Tipe data Boolean</h3>
        <?php
        $benar=true;
        $salah=false;

        echo "benar= $benar, salah= $salah";
    ?>
        <h3>Contoh Operator Matematika</h3>
        <?php
        $hasil1=-3;
        $hasil2=3+5;
        $hasil3=8-4-5;
        $hasil4=2*5;
        $hasil5=3+8/5-3;
        $hasil6=10 % 4;

        echo $hasil1;var_dump($hasil1);
        echo "<br \>";
        echo $hasil2;var_dump($hasil2);
        echo "<br \>";
        echo $hasil3;var_dump($hasil3);
        echo "<br \>";
        echo $hasil4;var_dump($hasil4);
        echo "<br \>";
        echo $hasil5;var_dump($hasil5);
        echo "<br \>";
        echo $hasil6;var_dump($hasil6);
        echo "<br \>";
    ?>
        <h3>Tugas</h3>
        <?php
        $pemasukan = 5000000;
        $hutang1 = 1650000;
        $bunga1 = 5 / 100;
        $hutang2 = 950000;
        $bunga2 = 4.5 / 100;
        $jumlahhutanga = $hutang1 + ($hutang1 * $bunga1);
        $jumlahhutangb = $hutang2 + ($hutang2 * $bunga2);
        echo 'Sisa uang adalah Rp, ';
        echo ($pemasukan - ($jumlahhutanga + $jumlahhutangb));
        echo '<br/>';
        echo 'jumlah total bunga Rp, ';
        echo ($hutang1 * $bunga1) * ($hutang2 * $bunga2);
        echo  '<br/>';
        echo 'Jumlah Total Hutang Rp, ';
        echo ($jumlahhutanga + $jumlahhutangb);
        echo '<br/>';
    ?>
</body>

</html>