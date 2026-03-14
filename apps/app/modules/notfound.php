<?php
namespace app\module;
class notfound
{
    public static $requires = [
        "tpl"=>[],
        "modules"=>[],
        "functions"=>[]
    ];

    public $view = "404";
    public function init($context){}
}
