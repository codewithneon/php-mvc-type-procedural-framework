<?php 
if(!function_exists('base_url')){
  function base_url($url=NULL){
    return sprintf("%s://%s%s%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME'],
      isset($_SERVER['SERVER_PORT']) && !empty($_SERVER['SERVER_PORT']) ? ":".$_SERVER['SERVER_PORT'] : NULL,
      empty($url)?'':'/'.$url
    );
  }
}
if(!function_exists('route')){
  function route($url=NULL){
    global $config;
    if ($url) {
      if ($config['app_route']) {
        return base_url($url);
      }else{
        return base_url('index.php?url='.$url);
      }
    }else{
      return base_url($url);
    }
  }
}
