<?php
declare(strict_types=1);

namespace HTCMage\FixAdminEmailTemplate\Plugin;

class EmailTemplate 
{

    public function beforeBeforeSave(\Magento\Email\Model\Template $subject)
    {
    	$subject->setData('is_legacy', 1);
        return [];
    }
}
