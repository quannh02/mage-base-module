<?php

class Quan_Helloworld_Block_Adminhtml_Training_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('helloworld_form', array('legend'=>Mage::helper('helloworld')->__('Item information')));
        $fieldset->addField('name', 'text', array(
            'name'      => 'name',
            'label'     => Mage::helper('helloworld')->__('Name'),
            'title'     => Mage::helper('helloworld')->__('Name'),
            'required'  => false,
        ));

        $fieldset->addField('age', 'text', array(
            'name'      => 'age',
            'label'     => Mage::helper('helloworld')->__('Age'),
            'title'     => Mage::helper('helloworld')->__('Age'),
            'required'  => false,
        ));

        if ( Mage::registry('helloworld_data') ) {
            $form->setValues(Mage::registry('helloworld_data')->getData());
        }
        return parent::_prepareForm();
    }
}