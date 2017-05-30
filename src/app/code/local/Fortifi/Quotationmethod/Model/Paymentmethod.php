<?php

class Fortifi_Quotationmethod_Model_Paymentmethod extends Mage_Payment_Model_Method_Abstract {
  protected $_code  = 'quotationmethod';
  protected $_formBlockType = 'quotationmethod/form_quotationmethod';
  protected $_infoBlockType = 'quotationmethod/info_quotationmethod';
 
  public function assignData($data)
  {
    $info = $this->getInfoInstance();
     
/*    if ($data->getCustomFieldOne())
    {
      $info->setCustomFieldOne($data->getCustomFieldOne());
    }
     
    if ($data->getCustomFieldTwo())
    {
      $info->setCustomFieldTwo($data->getCustomFieldTwo());
    }
 */
    return $this;
  }
 
  public function validate()
  {
    parent::validate();
    $info = $this->getInfoInstance();


    // TODO: insert mail function here
  /*  if (!$info->getCustomFieldOne())
    {
      $errorCode = 'invalid_data';
      $errorMsg = $this->_getHelper()->__("CustomFieldOne is a required field.\n");
    }
     
    if (!$info->getCustomFieldTwo())
    {
      $errorCode = 'invalid_data';
      $errorMsg .= $this->_getHelper()->__('CustomFieldTwo is a required field.');
    }
 */

    /*if ($errorMsg)
    {
      Mage::throwException($errorMsg);
    }*/
 
    return $this;
  }
 
  public function getOrderPlaceRedirectUrl()
  {
    return Mage::getUrl('quotationmethod/payment/redirect', array('_secure' => false));
  }
}
