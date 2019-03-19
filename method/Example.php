<?php
class Example {
    public $event;
    public $context;
    public $data;
    function __construct($event,$context,$data){
        $this->event = $event;
        $this->context = $context;
        $this->data = $data;

    }
//    这里写你所需要的业务方法

    function handler(){
        $content = array(
            "code" => "0000",
            "msg"  => $this->data
        );
        return $content;
    }
}