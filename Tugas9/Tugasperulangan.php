<?php
        $jumlahBaris = (int)readline("Masukkan jumlah baris segitiga bintang: ");

        if ($jumlahBaris < 0) {
            echo "Jumlah baris harus lebih besar dari 5.\n";
        } else {
            for ($i = 1; $i <= $jumlahBaris; $i++) {
                  for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
               echo PHP_EOL;
            }
        }

    ?>