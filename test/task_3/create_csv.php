<?php 

$fp = fopen('test.csv', 'wb');

for ($i = 1; $i <= 100; $i++) {
    fputcsv($fp, [$i, 'name' . $i, rand(0, 1000), rand(0, 1000), rand(0, 1000) ]);
}

fclose($fp);
