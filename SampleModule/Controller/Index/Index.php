<?php
/**
 * Created by PhpStorm.
 * User: cattran
 * Date: 3/24/18
 * Time: 4:57 PM
 */

namespace Mastering\SampleModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action {

    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Raw $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello World!');
        return $result;
    }
}