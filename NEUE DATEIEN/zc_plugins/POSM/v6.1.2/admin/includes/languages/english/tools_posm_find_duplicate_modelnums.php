<?php
/**
* POSM Lagerbestandsmanager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: tools_posm_find_duplicate_modelnums.php 2026-06-28 12:25:29Z webchills $
*/
// -----
// Based on the Find Duplicate Models plugin (https://www.zen-cart.com/downloads.php?do=file&id=1323) by swguy.
//
define('HEADING_TITLE', 'POSM: Find Duplicate Models');
define('HEADING_PRODUCTS_LINK', 'Products Link');
define('HEADING_POSM_LINK', 'POSM Link');
define('HEADING_PRODUCTS_MODEL', 'Products Model'); 
define('HEADING_POSM_MODEL', 'POSM Model');
define('HEADING_PRODUCTS_NAME', 'Products Name');
define('HEADING_PRODUCTS_DISABLED', 'Product Enabled?');

define('INSTRUCTIONS', "Use this tool to identify duplicate model numbers within your store's products, both as set in a base product's definition and as the option-combination models in your <em>POSM</em> settings.  By default, only <em>enabled</em> products are included in the report; to include <em>disabled</em> products, tick the checkbox below and then click the <b>go</b> button.<br /><br /><strong>Note:</strong> If a single product is listed in the duplicates' report, then that product has a <em>POSM</em> option-combination that has the same model-number as a base product.");
define('NO_DUPS_FOUND', 'Congratulations &mdash; all model numbers are unique.'); 

define('INCLUDE_DISABLED', 'Include disabled products?');
define('POSM_MODEL_IS_EMPTY', '--empty--');

define('BUTTON_GO', 'Go');

define('DUPS_UNMANAGED_UNMANAGED', 'Unmanaged Products with Models Duplicated in Unmanaged Products');
define('DUPS_UNMANAGED_MANAGED', 'Unmanaged Products with Models Duplicated in Managed Products');
define('DUPS_MANAGED_MANAGED', 'Managed Products with Models Duplicated in Managed Products');
