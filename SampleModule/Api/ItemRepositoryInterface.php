<?php
/**
 * Created by PhpStorm.
 * User: cattran
 * Date: 4/1/18
 * Time: 12:46 PM
 */
namespace Mastering\SampleModule\Api;

interface ItemRepositoryInterface {

    //Magento 2 requires below annotation for interface methods
    /**
     * @return \Mastering\SampleModule\Api\Data\ItemInterface[]
     */
    public function getList();
}