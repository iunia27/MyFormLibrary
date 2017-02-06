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
class SelectElement extends Element
{
    private $selectHtml;
    /**
     * @param mixed $acceptedAttributes
     */
    protected function setAcceptedAttributes()
    {
        $this->acceptedAttributes = array('disabled', 'multiple', 'name', 'size');
    }

    function addOptions(array $options){
        $selectHtml = $this->__toHtml();
        $pos =  strpos($selectHtml, '</select>');
        foreach ($options as $opt) {
           $selectHtml = (substr_replace($selectHtml, " " . $opt->__toHtml(), $pos, 0));
        }
        $this->updateSelectHtml($selectHtml);
    }

    function addOptiongroup(OptiongroupElement $optGroup){
        $selectHtml = $this->__toHtml();
        $pos =  strpos($selectHtml, '</select>');
        $this->updateSelectHtml(substr_replace($selectHtml, " " . $optGroup->__toHtml(), $pos, 0));
    }

    private function updateSelectHtml($newValue){
        $this->selectHtml = $newValue;
    }

    public function __toHtml(){
        $defaultValue =  $this->getTextValue() . "<select " . $this->getAttributesHtml()  . "></select>";
        return (isset($this->selectHtml)) ? $this->selectHtml : $defaultValue;
    }
}