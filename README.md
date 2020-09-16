# Mage2 Module HTCMage FixAdminEmailTemplate

   htcmage/m2-fix-admin-email-template

## Main Functionalities
- Fix bug the email template created by admin could not show block content obtained from layout handle

## Installation

### Type 1: Zip file

 - Unzip the zip file in `app/code/HTCMage`
 - Enable the module by running `php bin/magento module:enable HTCMage_FixAdminEmailTemplate`
 - Apply database updates by running `php bin/magento setup:upgrade`
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer
 
 - Install the module composer by running `composer require htcmage/m2-fix-admin-email-template`
 - enable the module by running `php bin/magento module:enable HTCMage_FixAdminEmailTemplate`
 - apply database updates by running `php bin/magento setup:upgrade`
 - Flush the cache by running `php bin/magento cache:flush`

## Configuration
 - No need

## Specifications

 - Plugin
	- beforeBeforeSave - Magento\Email\Model\Template > HTCMage\FixAdminEmailTemplate\Plugin\Magento\Email\Model\Template

