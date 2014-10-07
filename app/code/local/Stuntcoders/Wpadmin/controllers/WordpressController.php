<?php

class Stuntcoders_Wpadmin_WordpressController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->getResponse()->setRedirect($this->_getWpAdminUrl());
    }

    private function _getWpAdminUrl()
    {
        return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB) .
            trim(Mage::getStoreConfig("wpadmin/wpadmin_options/path"), "/") . "/wp-admin";
    }
}
