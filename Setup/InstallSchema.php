<?php

namespace Threecomerce\NewsletterPrivacy\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        $installer->getConnection()->addColumn(
            $installer->getTable('newsletter_subscriber'),
            'privacy',
            [
                'type' => Table::TYPE_INTEGER,
                'default' => 1,
                'comment' => 'privacy'
            ]
        );
        $installer->endSetup();
    }
}
