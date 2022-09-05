<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

// ここに処理を記述
foreach($subjects as $subject){
    switch($subject){
    case "数学":
        $sub = $subject;
        $day = "明日";
        break;
    case "英語":
        $sub = $subject;
        $day = "明後日";
        break;
    case "理科":
        $sub = $subject;
        $day = "明明後日";
        break;
    case "社会":
        $sub = $subject;
        $day = "昨日";
        break;
    case "国語":
        $sub = $subject;
        $day = "中止";
        break;
    }

    echo "{$sub}の試験は{$day}です。\n";
};
