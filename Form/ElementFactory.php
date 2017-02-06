<?php
namespace MyFormLibrary\Form;

include('Element/ButtonElement.php');
include('Element/FieldsetElement.php');
include('Element/InputElement.php');
include('Element/LabelElement.php');
include('Element/OptgroupElement.php');
include('Element/OptionElement.php');
include('Element/SelectElement.php');
include('Element/TextareaElement.php');
class ElementFactory
{
    public function makeFormElement($newElementType, array $attributes)
    {
        try {
            $className =  '\\MyFormLibrary\\Form\\Element\\' .ucfirst($newElementType) . 'Element';
            return new $className($attributes);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}