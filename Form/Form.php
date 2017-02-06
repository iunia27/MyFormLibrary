<?php
namespace MyFormLibrary\Form;
use MyFormLibrary\Form\Element\OptgroupElement;
use MyFormLibrary\Form\Element\OptionElement;
use MyFormLibrary\Form\Element\SelectElement;

/**
 * Created by PhpStorm.
 * User: iunia
 * Date: 05/02/2017
 * Time: 10:57
 */
class Form
{
    protected $formHtml;

    function __construct()
    {
        $this->setFormHtml("<form></form>");
    }

    /**
     * @param mixed $formHtml
     */
    public function setFormHtml($formHtml)
    {
        $this->formHtml = $formHtml;
    }

    /**
     * @return mixed
     */
    public function __toHtml()
    {
        return $this->formHtml;
    }

    function addAttribute(Attribute $attr){
        $formHtml = $this->__toHtml();
        $pos =  strpos($formHtml, '<form>') + 5;
        $this->setFormHtml(substr_replace($formHtml, " " . $attr->__toHtml(), $pos, 0));
    }

    function addElement(Element $el){
        $formHtml = $this->__toHtml();
        $pos =  strpos($formHtml, '</form>');
        $this->setFormHtml(substr_replace($formHtml, " " . $el->__toHtml()."<br />", $pos, 0));
    }

}