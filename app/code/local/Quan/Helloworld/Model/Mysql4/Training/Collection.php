<?php

class Quan_Helloworld_Model_Mysql4_Training_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('helloworld/training');
    }
}