<?php
namespace MyFormLibrary;
use MyFormLibrary\Form\ElementFactory;
use \MyFormLibrary\Form\Form;
use \MyFormLibrary\Form\Attribute;
include ('Form/Form.php');
include ('Form/Attribute.php');
include ('Form/ElementFactory.php');
?>
<html>
<head>
<title>My Precious Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="script.js"></script>
<!--    room for css files-->
</head>

<?php

$myForm = new Form();

//create and add form attributes
$formName = new Attribute('name', 'myform');
$formMethod = new Attribute('method', 'post');
$formAction = new Attribute('action', '');

$myForm->addAttribute($formName);
$myForm->addAttribute($formMethod);
$myForm->addAttribute($formAction);

//create and add form elements
$myElemFactory = new ElementFactory();
$firstName = $myElemFactory->makeFormElement('input', array('type'=>'text', 'name'=>'firstname', 'maxlength' => '50', 'size' => '30'));
$firstNameLabel = $myElemFactory->makeFormElement('label', array('for'=>"firstname", 'text'=>'Firstname: '));
$lastName = $myElemFactory->makeFormElement('input', array('type'=>'text', 'name'=>'lastname', 'maxlength' => '50', 'size' => '30'));
$lastNameLabel = $myElemFactory->makeFormElement('label', array('for'=>"lastname", 'text'=>'Lastname: '));
$genderLabel = $myElemFactory->makeFormElement('label', array('for'=>"gender", 'text'=>'Gender: '));
$gender1 = $myElemFactory->makeFormElement('input', array('type'=>'radio', 'text'=>'F', 'name'=>'gender', 'value' => 'F'));
$gender2 = $myElemFactory->makeFormElement('input', array('type'=>'radio', 'text'=>'M', 'name'=>'gender', 'value' => 'M'));
$descriptionLabel = $myElemFactory->makeFormElement('label', array('for'=>"description", 'text'=>'About you: '));
$description = $myElemFactory->makeFormElement('textarea', array( 'name'=>'description', 'cols' => '50', 'rows' => '30'));
$select = $myElemFactory->makeFormElement('select', array('name' => 'status'));
$option1 =  $myElemFactory->makeFormElement('option', array('value' => 'married', 'text'=>'married'));
$option2 =  $myElemFactory->makeFormElement('option', array('value' => 'single', 'text'=>'single'));
$option3 =  $myElemFactory->makeFormElement('option', array('value' => 'separated', 'text'=>'separated'));
$option4 =  $myElemFactory->makeFormElement('option', array('value' => 'divorced', 'text'=>'divorced'));
$option5 =  $myElemFactory->makeFormElement('option', array('value' => 'widowed', 'text'=>'widowed'));
$options = array($option1, $option2, $option3, $option4, $option5);
$select->addOptions($options);
$myButton = $myElemFactory->makeFormElement('button', array('type'=>'button', 'text'=>'Submit', 'name'=>'submit'));

$myForm->addElement($firstNameLabel);
$myForm->addElement($firstName);
$myForm->addElement($lastNameLabel);
$myForm->addElement($lastName);
$myForm->addElement($genderLabel);
$myForm->addElement($gender1);
$myForm->addElement($gender2);
$myForm->addElement($descriptionLabel);
$myForm->addElement($description);
$myForm->addElement($select);
$myForm->addElement($myButton);
echo $myForm->__toHtml();