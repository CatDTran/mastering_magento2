<?php
/**
 * Created by PhpStorm.
 * User: cattran
 * Date: 3/25/18
 * Time: 12:55 AM
 */

namespace Mastering\SampleModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb {

    protected function _construct()
    {
        $this->_init('mastering_sample_item', 'id');
    }
}
