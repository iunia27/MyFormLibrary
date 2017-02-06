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
class InputElement extends Element
{
    private $acceptedTypes = array(
        'button',
        'checkbox',
        'file',
        'hidden',
        'image',
        'password',
        'radio',
        'reset',
        'submit',
        'text'
    );
    /**
     * @param mixed $acceptedAttributes
     */
    protected function setAcceptedAttributes()
    {
        $acceptedAttrs = array('disabled', 'maxlength', 'name', 'readonly', 'size', 'type', 'value');

        switch ($this->getType()){
            case 'image' : array_push($acceptedAttrs, 'align', 'alt'); break;
            case 'file' : array_push($acceptedAttrs, 'accept'); break;
            case 'checkbox' : array_push($acceptedAttrs, 'checked'); break;
            case 'radio' : array_push($acceptedAttrs, 'checked'); break;
        }
        $this->acceptedAttributes = $acceptedAttrs;
    }

    public function __toHtml(){
        return "<input " . $this->getAttributesHtml()  . ">" . $this->getTextValue();
    }
}