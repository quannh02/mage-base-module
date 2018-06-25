<?php

class Quan_Helloworld_Block_Adminhtml_Training_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('id');
        $this->setDefaultSort('name');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
    }

    public function _prepareCollection()
    {
        $collection = Mage::getModel('helloworld/training')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection(); // TODO: Change the autogenerated stub
    }

    public function _prepareColumns()
    {
        $helper = Mage::helper('helloworld');
        $this->addColumn(
            'id',
            array(
                'header' => $helper->__('ID'),
                'align' => 'right',
                'width' => '50px',
                'index' => 'training_id',
                'type'  => 'int'
            )
        );

        $this->addColumn(
            'name',
            array(
                'header' => $helper->__('Name'),
                'align' => 'right',
                'width' => '50px',
                'index' => 'name',
                'type'  => 'text'
            )
        );

        $this->addColumn(
            'age',
            array(
                'header' => $helper->__('Age'),
                'align' => 'right',
                'width' => '50px',
                'index' => 'age',
                'type'  => 'text'
            )
        );
        return parent::_prepareColumns(); // TODO: Change the autogenerated stub
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}