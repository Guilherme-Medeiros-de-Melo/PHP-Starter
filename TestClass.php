<?php
class TestClass
{
    public $name;
    public $integer;

    public function __construct($name, $integer){
        $this->name = $name;
        $this->integer = $integer;
    }
    public function message()
    {
        return "This is a test object, name: $this->name number: $this->integer";
    }
}
