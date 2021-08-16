<?php
namespace Rabindra\News\Api;

interface AllnewsRepositoryInterface
{
	public function save(\Rabindra\News\Api\Data\AllnewsInterface $news);

    public function getById($newsId);

    public function delete(\Rabindra\News\Api\Data\AllnewsInterface $news);

    public function deleteById($newsId);
}
