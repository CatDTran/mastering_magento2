<?php
/**
 * Created by PhpStorm.
 * User: cattran
 * Date: 3/31/18
 * Time: 5:14 PM
 */

namespace Mastering\SampleModule\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config {
    const XML_PATH_ENABLED = 'mastering/general/enabled';

    private $config;

    public function __construct(ScopeConfigInterface $config) {
        $this->config = $config;
    }

    public function isEnabled() {
        return $this->config->getValue(self::XML_PATH_ENABLED);
    }
}