<?php

class Quan_Helloworld_Model_Training extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        $this->_init('helloworld/training');
        parent::_construct();
    }

    public function getMoney() {
        return '10000$';
    }
}