<?php

echo '血液型を入力してください: ';
$blood_type = trim(fgets(STDIN));

// ここに処理を記述
switch($blood_type){
case "A":
    echo "{$blood_type}型の方は几帳面だけど優しいらしいです！";
    break;
case "B":
    echo "{$blood_type}型の方は好奇心旺盛らしいです！";
    break;
case "AB":
    echo "{$blood_type}型の方は先読み思考に優れた天才らしいです！";
    break;
case "O":
    echo "{$blood_type}型の方はおおらからしいです！";
    break;
}
