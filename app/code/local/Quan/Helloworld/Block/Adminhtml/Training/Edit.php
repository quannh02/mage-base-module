<?php

class Quan_Helloworld_Block_Adminhtml_Training_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'training_id';
        $this->_blockGroup = 'helloworld';
        $this->_controller = 'adminhtml_training';
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('helloworld_data') && Mage::registry('helloworld_data')->getTrainingId() ) {
            return Mage::helper('helloworld')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('helloworld_data')->getName()));
        } else {
            return Mage::helper('helloworld')->__('Add Item');
        }
    }
}