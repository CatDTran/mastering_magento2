<?php
/**
 * Created by PhpStorm.
 * User: cattran
 * Date: 4/1/18
 * Time: 12:49 PM
 */

namespace Mastering\SampleModule\Model;


use Mastering\SampleModule\Api\ItemRepositoryInterface;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class ItemRepository implements ItemRepositoryInterface {

    private $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory) {
        $this->collectionFactory = $collectionFactory;
    }

    public function getList() {
        return $this->collectionFactory->create()->getItems();
    }
}