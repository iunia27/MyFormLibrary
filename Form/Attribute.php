<?php
namespace MyFormLibrary\Form;

class Attribute {
    protected $name;
    protected $value;

    public function __construct($name, $newValue){
        $this->setName($name);
        $this->setValue($newValue);
    }

    public function getName(){
        return $this->name;
    }
    public function getValue(){
        return $this->value;
    }
    public function setValue($newValue){
        $this->value = $newValue;
    }

    protected function setName($newName){
        $this->name = $newName;
    }

    public function __toHtml(){
        if ($this->value) {
            return $this->name . '="' . $this->value .'"';
        } else {
            return $this->name;
        }
    }

    //other common
}