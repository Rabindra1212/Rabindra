<?php

namespace Rabindra\News\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper 
{
	const XML_PATH_Rabindra_NEWS = 'rabindra_news/';

	public function getConfigValue($field, $storeCode = null)
	{
		return $this->scopeConfig->getValue($field, ScopeInterface::SCOPE_STORE, $storeCode);
	}

	public function getGeneralConfig($fieldid, $storeCode = null)
	{
		return $this->getConfigValue(self::XML_PATH_Rabindra_NEWS.'general/'.$fieldid, $storeCode);
	}

	public function getStorefrontConfig($fieldid, $storeCode = null)
	{
		return $this->getConfigValue(self::XML_PATH_Rabindra_NEWS.'storefront/'.$fieldid, $storeCode);
	}

}