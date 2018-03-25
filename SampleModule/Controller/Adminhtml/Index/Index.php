<?php
/**
 * Created by PhpStorm.
 * User: cattran
 * Date: 3/24/18
 * Time: 5:03 PM
 */

namespace Mastering\SampleModule\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action {

    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello Admins!');
        return $result;
    }
}