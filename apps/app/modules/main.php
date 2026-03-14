<?php
namespace app\module;
class main
{
    public static $requires = [
        "tpl"=>["home"],
        "modules"=>["tpl"],
        "functions"=>["generateGUID"]
    ];
    public $view = "";
    public function init($context)
    {
        $this->view = $context->core->tpl["home"];
    }
}
