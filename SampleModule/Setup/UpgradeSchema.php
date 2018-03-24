<?php
/**
 * Created by PhpStorm.
 * User: cattran
 * Date: 3/24/18
 * Time: 4:16 PM
 */
namespace Mastering\SampleModule\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface {
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        // only upgrade schema when current installed version is less than '1.0.1'
        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('mastering_sample_item'),
                'description',
                ['type' => Table::TYPE_TEXT, 'nullable' => true, 'comment' => 'Item description']
            );
        }

        $setup->endSetup();
    }
}