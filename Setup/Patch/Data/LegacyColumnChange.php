<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace HTCMage\FixAdminEmailTemplate\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class LegacyColumnChange implements DataPatchInterface
{

    protected $setup;

    /**
     * LegacyColumnChange constructor.
     * @param \ModuleDataSetupInterface $setup
     */
    public function __construct(
        ModuleDataSetupInterface $setup
    ) {
        $this->setup = $setup;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function apply()
    {   
        try {
            $connection = $this->setup->getConnection();
            $emailTemplateTable = $connection->getTableName('email_template');
            $connection->query("UPDATE `$emailTemplateTable` SET `is_legacy` = '1';");

        } catch (\Exception $e) {
            // ignore
        }
    }


}
