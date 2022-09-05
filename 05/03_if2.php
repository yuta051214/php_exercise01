<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

// ここに処理を記述
echo "私は、\n";

foreach($foods as $time => $food){
    echo "{$time}に{$food}\n";
}

echo "を食べます\n";
