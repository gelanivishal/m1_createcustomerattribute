<?php

class Company_Customer_Block_Adminhtml_Customer_Grid extends
    Mage_Adminhtml_Block_Customer_Grid
{
    public function setCollection($collection)
    {
        $collection->addAttributeToSelect('company_name')->addAttributeToSelect('customer_terms');
        $this->_collection = $collection;
    }

    protected function _prepareColumns()
    {
        $this->addColumnAfter('company_name', array(
            'header' => Mage::helper('customer')->__('Company'),
            'type' => 'text',
            'index' => 'company_name'
        ), 'billing_region');

        $this->addColumnAfter('customer_terms', array(
            'header' => Mage::helper('customer')->__('Hear about us'),
            'type' => 'options',
            'index' => 'customer_terms',
            'options' => Mage::getModel('company_customer/eav_entity_attribute_source_customeroptions')->getOptionArray()
        ), 'billing_region');

        return parent::_prepareColumns();
    }
}