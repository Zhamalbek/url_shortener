<?
if(empty($_GET)) exit("GET запроса нету");

if($_GET['p']!=''){
    function counter($t){
        if (!file_exists($t)) {
            $fp = fopen($t, "w");
            fwrite($fp, '0'); 
            fclose($fp);
        }
        $fp = fopen($t, "r") or die("не удалось открыть файл");; 
        $count = fread($fp, 1024); 
        fclose($fp); 
        
        $count++; 
        
        $fp = fopen($t, "w") or die("не удалось открыть файл");; 
        fwrite($fp, $count); 
        fclose($fp);
        
        return $count;
    }

    $fd = fopen(counter("counterlog.txt").".dat", 'w+') or die("не удалось открыть файл");

    $str = $_GET["p"];
    fwrite($fd, $str);
    fclose($fd);
}
// редирект
if($_GET['q']!=''){
    $get = $_GET['q']*1;
    $fp = fopen($get.".dat", "r") or die("не удалось открыть файл");; 
    $url = fread($fp, 1024); 
    fclose($fp); 
    
    header("Location: $url");
}
