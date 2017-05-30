<?php

class Fortifi_Quotationmethod_Block_Form_Quotationmethod extends Mage_Payment_Block_Form
{
  protected function _construct()
  {
    parent::_construct();
    $this->setTemplate('quotationmethod/form/quotationmethod.phtml');
  }
}
