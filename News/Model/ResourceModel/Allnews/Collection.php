<?php
namespace Rabindra\News\Model\ResourceModel\Allnews;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'news_id';
	
	protected $_eventPrefix = 'news_allnews_collection';

    protected $_eventObject = 'allnews_collection';
	
	protected function _construct()
	{
		$this->_init('Rabindra\News\Model\Allnews', 'Rabindra\News\Model\ResourceModel\Allnews');
	}
}