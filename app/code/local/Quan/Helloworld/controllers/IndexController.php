<?php

class Quan_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveAction() {
        echo 'b';
    }
}