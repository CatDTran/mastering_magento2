<?php
/**
 * Created by PhpStorm.
 * User: cattran
 * Date: 3/25/18
 * Time: 1:01 AM
 */

namespace Mastering\SampleModule\Model;


use Magento\Framework\Model\AbstractModel;

class  Item extends AbstractModel {

    protected function _construct()
    {
        $this->_init(\Mastering\SampleModule\Model\ResourceModel\Item::class);
    }
}