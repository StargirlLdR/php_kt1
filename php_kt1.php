<?php
$bye_count = 0;

while (true) {
    $year = mt_rand(1930, 1950);  
    $input_text = readline('>');   
  
    if (substr($input_text, -1) === '!') {
        if (trim($input_text) === 'ПОКА!') {
            $bye_count++;
          
            if ($bye_count === 3) {
                echo 'ДО СВИДАНИЯ, МИЛЫЙ!' . PHP_EOL;
                break;
            } else {
                echo 'НЕТ, НИ РАЗУ С ' . $year . ' ГОДА!' . PHP_EOL;
            }
        } else {
            echo 'НЕТ, НИ РАЗУ С ' . $year . ' ГОДА!' . PHP_EOL;
            $bye_count = 0; 
        }
    } else {
        echo 'АСЬ?! ГОВОРИ ГРОМЧЕ, ВНУЧЕК!' . PHP_EOL;
        $bye_count = 0; 
    }
}

