<?php
class Fortifi_Quotationmethod_Helper_Data extends Mage_Core_Helper_Abstract {

    function getPaymentGatewayUrl() {
        return Mage::getUrl('quotationmethod/payment/gateway', array('_secure' => false));
    }

}
