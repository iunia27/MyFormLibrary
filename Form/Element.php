<?php
namespace MyFormLibrary\Form;

abstract class Element {
    protected $acceptedAttributes;
    protected $attributesHtml;
    protected $textValue; //for when we need to add text to the elements
    protected $type;

    public function __construct($attributes){
      $this->setAcceptedAttributes();
      $html = '';
      foreach ($attributes as $name=>$value) {
          if ( in_array($name, $this->acceptedAttributes) ) {
              if ($name == 'type'){
                  $this->setType($value);
              }
              $attr = new Attribute($name, $value);
              $html .=  $attr->__toHtml() . " ";
          } elseif ($name = 'text') {
            $this->setTextValue($value);
          }
      }
        $this->setAttributesHtml($html);
    }

    abstract protected function setAcceptedAttributes();

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    public function getAttributesHtml(){
        return $this->attributesHtml;
    }
    public function getAcceptedAttributes(){
        return $this->acceptedAttributes;
    }
    public function setAttributesHtml($newValue){
        $this->attributesHtml = $newValue;
    }

    public function getTextValue(){
        return $this->textValue;
    }
    public function setTextValue($newValue){
        $this->textValue = $newValue;
    }

    abstract function __toHtml();

    //other common
}