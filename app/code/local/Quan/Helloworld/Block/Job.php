<?php

class Quan_Helloworld_Block_Job extends Mage_Core_Block_Template
{
    public function getJob() {
        return 'Superman';
    }

    public function getAge() {
        return 'Chua 18';
    }

    public function getSalary() {
        /** @var Quan_Helloworld_Model_Training $helloworldModel */
        $helloworldModel = Mage::getModel('helloworld/training');
        return $helloworldModel->getMoney();
    }

    public function getPerson($training_id) {
        /** @var Quan_Helloworld_Model_Training $helloworldModel */
        $helloworldModel = Mage::getModel('helloworld/training');
        return $helloworldModel->load($training_id);
    }

    public function getCollection() {
        /** @var Quan_Helloworld_Model_Training $helloworldModel */
        $helloworldModel = Mage::getModel('helloworld/training');
        return $helloworldModel->getCollection();
    }
}