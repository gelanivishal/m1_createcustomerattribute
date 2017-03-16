<?php
$this->addAttribute('customer', 'company_name', array(
    'type'      => 'varchar',
    'label'     => 'Company Name',
    'input'     => 'text',
    'position'  => 120,
    'required'  => false,//or true
    'is_system' => 0,
));
$attribute = Mage::getSingleton('eav/config')->getAttribute('customer', 'company_name');
$attribute->setData('used_in_forms', array(
    'adminhtml_customer',
    'checkout_register',
    'customer_account_create',
    'customer_account_edit',
));
$attribute->setData('is_user_defined', 0);
$attribute->save();