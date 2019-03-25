<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 23/03/2019
 * Time: 15:56
 */


// Definição de charset.


// Leitura dos dados do CSV.

$handle = fopen("BaseDeDados/MovieGenreData.csv", "r");

$row = 0;
while ($line = fgetcsv($handle, 1000, ",")) {
    if ($row++ == 0) {
        continue;
    }

    $dados[] = [
        'imdb_id' => $line[0],
        'imdb_link' => $line[1],
        'title' => $line[2],
        'imdb_score' => $line[3],
        'genre' => $line[4],
        'poster' => $line[5]
    ];
}
return $dados;
fclose($handle);
?>
