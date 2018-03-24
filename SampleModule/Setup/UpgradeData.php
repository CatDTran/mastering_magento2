<?php
/**
 * Created by PhpStorm.
 * User: cattran
 * Date: 3/24/18
 * Time: 4:26 PM
 */
namespace Mastering\SampleModule\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeData implements UpgradeDataInterface {
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        // upgrade data for module upgrade here
        // only update date if current installed version is less than '1.0.1'
        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $setup->getConnection()->update(
                $setup->getTable('mastering_sample_item'),
                ['description' => 'Default description'],
                $setup->getConnection()->quoteInto('id = ?', 1) // update description for item id = 1
            );
        }

        $setup->endSetup();
    }
}
