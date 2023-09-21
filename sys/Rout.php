<?php
    //Класс маршрутизатора
    class Rout{
        protected $pages = array();

        public function addRout($url, $path){
            $this->pages[$url] = $path;
        }

        public function routing($url){
            $path = $this->pages[$url];
            $file_dir = 'pages/'.$path;
            if($path == '' || !file_exists($file_dir)){
                require $file_dir = 'pages/404.php';
            }else{
                require $file_dir;
            }
        }
    }

?>