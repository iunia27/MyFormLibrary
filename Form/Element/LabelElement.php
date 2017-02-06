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
class LabelElement extends Element
{
    /**
     * @param mixed $acceptedAttributes
     */
    protected function setAcceptedAttributes()
    {
        $this->acceptedAttributes = array('for');
    }

    public function __toHtml(){
        return "<label " . $this->getAttributesHtml()  . ">" . $this->getTextValue() . "</label>";
    }

}