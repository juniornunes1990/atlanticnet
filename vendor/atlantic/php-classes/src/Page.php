<?php

namespace Atlantic;

use Rain\Tpl;

class Page {

    private $tpl;
    private $options = [];
    private $defaults = [
        "header"=>true,
        "footer"=>true,
        "data"=>[]
    ];

    public function __construct($opts = array(), $tpl_dir = "/views/"){

        $this->options = array_merge($this->defaults, $opts);

        $projectRoot = $this->resolveProjectRoot();

        $config = array(
            "tpl_dir"   => $projectRoot.$tpl_dir,
            "cache_dir" => $projectRoot."/views-cache/",
            "debug"     => false
        );
            Tpl::configure( $config );

            $this->tpl = new Tpl;

            $this->setData($this->options["data"]);          
            $this->tpl->assign("BASE_URL", self::getBaseUrl());

            if($this->options["header"] === true) $this->tpl->draw("header");        

    }


    private function resolveProjectRoot(){

        if(isset($_SERVER["SCRIPT_FILENAME"]) && $_SERVER["SCRIPT_FILENAME"]){
            return dirname($_SERVER["SCRIPT_FILENAME"]);
        }

        return dirname(__DIR__, 3);

    }


    public static function getBaseUrl(){

        if(isset($_SERVER["SCRIPT_NAME"]) && $_SERVER["SCRIPT_NAME"]){
            $basePath = rtrim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");
            return ($basePath === ".") ? "" : $basePath;
        }

        return "";

    }

    private function setData($data = array()){

        foreach($data as $key => $value){
            $this->tpl->assign($key, $value);
        }

    }

    public function setTpl($name, $data = array(), $returnHTML = false){

        $this->setData($data);

       return $this->tpl->draw($name, $returnHTML);
    }

    public function __destruct(){

        if($this->options["footer"] === true) $this->tpl->draw("footer");

    }

}

?>
