<?php
namespace MyFormLibrary\Form\Element;
use \MyFormLibrary\Form\Element;
require_once $_SERVER['DOCUMENT_ROOT']. "/MyFormLibrary/Form/Element.php";
/**
 * Created by PhpStorm.
 * User: iunia
 * Date: 05/02/2017
 * Time: 12:06
 */
class FieldsetElement extends Element
{
    /**
     * @param mixed $acceptedAttributes
     */
    protected function setAcceptedAttributes()
    {
        $this->acceptedAttributes = array();
    }

    public function __toHtml(){
        return "<fieldset " . $this->getAttributesHtml()  . "><legend>" . $this->getTextValue() . "</legend></fieldset>";
    }

}