<?php
class Vijaystore_Quicklogin_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_PATH_QUICK_LOGIN_ENABLE   = 'quicklogin_tab/quicklogin_setting/quicklogin_active';
	
	public function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }
	
	public function quick_login_enable()
	{
		return $this->conf(self::XML_PATH_QUICK_LOGIN_ENABLE, $store);
	}

    public function getQuickLoginUrl()
    {
        return $this->_getUrl('quicklogin');
    }
}

?>