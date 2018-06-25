<?php

class Quan_Helloworld_Block_Adminhtml_Training extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_training';
        $this->_blockGroup = 'helloworld';
        $this->_headerText = Mage::helper('helloworld')->__('Training Manager');
        parent::__construct();
    }
}