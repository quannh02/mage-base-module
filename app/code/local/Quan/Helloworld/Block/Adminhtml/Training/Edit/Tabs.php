<?php

class Quan_Helloworld_Block_Adminhtml_Training_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('helloworld_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('helloworld')->__('Item Information'));
    }

    protected function _beforeToHtml()
    {
        $this->addTab('form_section', array(
            'label'     => Mage::helper('helloworld')->__('Item Information'),
            'title'     => Mage::helper('helloworld')->__('Item Information'),
            'content'   => $this->getLayout()->createBlock('helloworld/adminhtml_training_edit_tab_form')->toHtml()
        ));

        return parent::_beforeToHtml();
    }
}