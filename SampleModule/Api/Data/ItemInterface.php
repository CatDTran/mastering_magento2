<?php
/**
 * Created by PhpStorm.
 * User: cattran
 * Date: 4/1/18
 * Time: 12:44 PM
 */

namespace Mastering\SampleModule\Api\Data;

interface ItemInterface {

    //Magento 2 requires below annotations for interface methods
    /**
     * @return string
     */
    public function getName();
    /**
     * @return string null
     */
    public function getDescription();

}