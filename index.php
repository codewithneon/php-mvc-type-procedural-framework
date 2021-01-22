<?php //index page
session_start();
require_once(str_replace('\\', '/', dirname(__FILE__)).'/config.php');
$root=str_replace('\\', '/', dirname(__FILE__)).'/';
$app_dir=$root."app/";
$inc_dir=$root."app/includes/";
require_once($inc_dir.'database.php');
require_once($inc_dir.'functions.php');
$error=$inc_dir.'error.php';
include_once($inc_dir.'header.php');
if (isset($_GET['url'])) {
    $url=$_GET['url'];
    $url=rtrim($url,'/');
    $url=explode('/',$url);
    if (isset($url[0])) {
       if (isset($url[1])) {
           $data=isset($url[2])?$url[2]:null;
           $data_id=isset($url[3])?$url[3]:null;
           $file = $app_dir.$url[0].'/'.$url[1].'.php';
           include_once(file_exists($file)?$file:$error);
        }else{
            $file=$app_dir.$url[0].'/index.php';
            include_once(file_exists($file)?$file:$error);
       }
    }else{
        include_once(file_exists($file)?$file:$error);
    }
}else{
    include_once($inc_dir.'home.php');
}
include_once($inc_dir.'footer.php');
?>