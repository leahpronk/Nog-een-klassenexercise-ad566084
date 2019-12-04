<?php

$klas = readline ("Wie zit er in de klas?");
echo "De studenten in de klas zijn:" . PHP_EOL;

print_r (explode(" ",$klas));