<?php

function printMaze(int $s)
{
    // Jika $s kurang dari 3, ubah $s menjadi 3
    $s = ($s < 3) ? 3 : $s;

    // Jika $s genap, ubah $s dikurangi 1
    $s = ($s % 2 === 0) ? $s - 1 : $s;

    $isLeft = true;

    for ($i = 1; $i <= $s; $i++) {
        for ($j = 1; $j <= $s; $j++) {
            if ($j === 1 || $j === $s) {
                echo '@';
                continue;
            }

            if ($i % 2 === 0) {
                echo ' ';
                continue;
            } else {
                if ($isLeft && $j === 2) {
                    echo ' ';
                } else if (!$isLeft && $j === $s - 1) {
                    echo ' ';
                } else {
                    echo '@';
                }
            }

            $isLeft = !$isLeft;
        }

        echo "\n";
    }
}

printMaze(11);

/**
 * s = 11
 * @ @@@@@@@@@
 * @         @
 * @@@@@@@@@ @
 * @         @
 * @ @@@@@@@@@
 * @         @
 * @@@@@@@@@ @
 * @         @
 * @ @@@@@@@@@
 * @         @
 * @@@@@@@@@ @
 */
