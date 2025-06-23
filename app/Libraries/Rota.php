<?php
class Rota{
    public function __construct(){
        echo'criando a primeira
        classe';
    }
    private function url(){
        $url = filter_input(INPUT_GET ,'url', FILTER_SANITIZE_URL);
        if(isset($url)){
            $url = explode('/', $url);
        }
    }
}
