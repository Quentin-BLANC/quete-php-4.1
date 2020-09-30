<?php

$movies = [
  "Indiana Jones et les Aventuriers de l'arche perdue" => '1981' ,
  "Indiana Jones et le Temple maudit" => '1984' ,
  "Indiana Jones et la Dernière Croisade" => '1989' ,
];

asort($movies);

foreach ($movies as $movie => $date) {
  echo $date . "-" . $movie;
  echo PHP_EOL;
};
