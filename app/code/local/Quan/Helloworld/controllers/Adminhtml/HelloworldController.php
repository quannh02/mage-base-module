<?php

class Quan_Helloworld_Adminhtml_HelloworldController extends Mage_Adminhtml_Controller_Action
{
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('quan_helloworld');
    }

    public function indexAction() {
        $this->loadLayout();
        $this->_title($this->__("Admin Grid"));
        $this->_addContent($this->getLayout()->createBlock('helloworld/adminhtml_training'));
        $this->renderLayout();
    }

    public function editAction() {
        $id     = $this->getRequest()->getParam('id');
        $model  = Mage::getModel('helloworld/training')->load($id);

        if ($model->getId()) {
            $data = Mage::getSingleton('adminhtml/session')->getFormData(true);
            if (!empty($data)) {
                $model->setData($data);
            }
            Mage::register('helloworld_data', $model);
        }
        $this->loadLayout();
        $this->_setActiveMenu('quan_helloworld/items');
        $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item Manager'), Mage::helper('adminhtml')->__('Item Manager'));
        $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item News'), Mage::helper('adminhtml')->__('Item News'));
        $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);
        $this->_addContent($this->getLayout()->createBlock('helloworld/adminhtml_training_edit'))
            ->_addLeft($this->getLayout()->createBlock('helloworld/adminhtml_training_edit_tabs'));
        $this->renderLayout();
    }

    public function newAction() {
        $this->_forward('edit');
    }

    public function saveAction() {
        $id     = $this->getRequest()->getParam('id');
        $data = $this->getRequest()->getParams();
        $model  = Mage::getModel('helloworld/training');
        if ($id) {
            $model->setData($data)->setId($this->getRequest()->getParam('id'));
        } else {
            $model->setData($data);
        }
        try {
            $model->save();
            Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('helloworld')->__('Item was successfully saved'));
            Mage::getSingleton('adminhtml/session')->setFormData(false);
            if ($this->getRequest()->getParam('back')) {
                $this->_redirect('*/*/edit', array('id' => $model->getId()));
                return;
            }
            $this->_redirect('*/*/');
            return;
        } catch (Exception $e) {
            Mage::log($e->getMessage(), null, 'quan.log');
        }

    }

    public function deleteAction() {
        $id     = $this->getRequest()->getParam('id');
        $model  = Mage::getModel('helloworld/training');
        $model->load($id);
        try {
            $model->delete();
            Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Item was successfully deleted'));
            $this->_redirect('*/*/');
            return;
        } catch (Exception $e) {
            Mage::log($e->getMessage(), null, 'quan.log');
        }
    }
}