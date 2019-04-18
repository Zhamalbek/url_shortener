<?
if(empty($_GET)) exit("GET запроса нету");

function counter(){
    $fp = fopen("counterlog.txt", "r") or die("не удалось открыть файл");; 
    $count = fread($fp, 1024); 
    fclose($fp); 
    
    $count++; 
    
    $fp = fopen("counterlog.txt", "w") or die("не удалось открыть файл");; 
    fwrite($fp, $count); 
    fclose($fp); 
}
$fd = fopen($count.".dat", 'w+') or die("не удалось открыть файл");

$str = $_GET["p"];
fwrite($fd, $str);
fclose($fd);
