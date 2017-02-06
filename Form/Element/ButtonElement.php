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
class ButtonElement extends Element
{
    private $acceptedTypes = array(
        'button',
        'reset',
        'submit',
    );
    /**
     * @param mixed $acceptedAttributes
     */
    protected function setAcceptedAttributes()
    {
        $this->acceptedAttributes = array('disabled', 'name', 'type', 'value');
    }

    public function __toHtml(){
           return "<button " . $this->getAttributesHtml() . ">" . $this->getTextValue() . "</button>";
    }

}