<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Codnitive
 * @package    Codnitive_IranianRegions
 * @author     Hassan Barza <support@codnitive.com>
 * @copyright  Copyright (c) 2011 CODNITIVE Co. (http://www.codnitive.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$installer = $this;

$installer->run("
REPLACE INTO `{$installer->getTable('directory_country_region_name')}` (`locale`, `region_id`, `name`)
(SELECT 'it_IT', `region_id`, `default_name` FROM `{$installer->getTable('directory_country_region')}` WHERE `country_id` = 'IR')
UNION
(SELECT 'pt_PT', `region_id`, `default_name` FROM `{$installer->getTable('directory_country_region')}` WHERE `country_id` = 'IR');
");