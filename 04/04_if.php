<?php

echo '$score_mathの値を入力してください: ';
$score_math = trim(fgets(STDIN));

echo '$score_englishの値を入力してください: ';
$score_english = trim(fgets(STDIN));

// ここに処理を記述
if($score_math >= 60 && $score_english >= 60){
    echo "合格";
}elseif($score_math < 60 && $score_english < 60){
    echo "不合格";
}else{
    echo "再試験";
}
