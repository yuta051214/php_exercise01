<?php

echo '$numの値を入力してください: ';
$num = trim(fgets(STDIN));

// ここに処理を記述
$judgement = true;

for($i = 2; $i < $num; $i++){
    if($num % $i == 0){
        $judgement = false;
        break;
    };
};

if($judgement){
    echo "{$num}は素数です";
}else{
    echo "{$num}は素数ではありません";
};
