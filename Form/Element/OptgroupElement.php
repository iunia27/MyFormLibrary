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
class OptgroupElement extends Element
{
    /**
     * @param mixed $acceptedAttributes
     */
    protected function setAcceptedAttributes()
    {
        $this->acceptedAttributes = array('disabled', 'label');
    }

//    function addOptionToOptgroup(OptgroupElement $optGroup, OptionElement $opt){
//        $groupHtml = $optGroup->__toHtml();
//        $pos =  strpos($groupHtml, '</optgroup>');
//        return(substr_replace($groupHtml, " " . $opt->__toHtml(), $pos, 0));
//    }

    public function __toHtml(){
        return "<optgroup " . $this->getAttributesHtml()  . ">" . $this->getTextValue() . "</optgroup>";
    }

}