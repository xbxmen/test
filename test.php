<?php
$file_path = "./a.txt";
if(file_exists($file_path)){
    $file = fopen($file_path,"r");
    $ff = fopen("./b.txt","a+");
    while (!feof($file)){
        $str  = fgets($file);//逐行读取
        $arr  = explode(',',$str);
        fwrite($ff,$arr[1]." ".$arr[1]."\n");
        echo $arr[1]."</br>";
    }

}

$file = file_get_contents('./a.txt');
