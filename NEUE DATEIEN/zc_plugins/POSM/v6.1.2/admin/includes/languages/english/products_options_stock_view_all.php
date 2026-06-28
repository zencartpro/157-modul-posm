<?php
/**
* POSM Lagerbestandsmanager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: products_options_stock_view_all.php 2026-06-28 12:25:29Z webchills $
*/
define('HEADING_TITLE', 'Products\' Options\' Stock Manager &mdash; View All');

define('TEXT_LAST_UPDATED', 'Last Updated: ');

define('TEXT_POS_INSTRUCTIONS', "By default, this tool displays <b>only</b> products with option-combinations (e.g. variants) that have quantities less than or equal to the <em>Options' Stock: Re-order Level</em> (currently " . POSM_STOCK_REORDER_LEVEL . "). To view <b>all</b> products currently being managed by the <a href=\"" . zen_href_link (FILENAME_PRODUCTS_OPTIONS_STOCK) . "\">Products' Options' Stock Manager</a>, check the checkbox below &mdash; the form auto-submits on change.<br /><br />The <b>Variant Name</b> column is formatted like <span class=\"option-name\">Option Name</span>: <span class=\"value-name\">Option Value Name</span>[,...].  Low-stock variants are highlighted like <span class=\"out-of-stock\">this</span>.<br /><br />If you have configured <em>POSM</em>'s duplicate-model-handling to report duplicates, any <b>Variant Model</b> entry that has a <span style=\"color: red; \">red border</span> is duplicated, either in a product's definition or in another <em>POSM</em> option-combination. See <a href=\"" . zen_href_link (FILENAME_POSM_FIND_DUPLICATE_MODELNUMS) . "\"><em>Tools-&gt;POSM: Find Duplicate Models</em></a> for additional information.<br /><br />");
define('TEXT_POS_INSTRUCTIONS2', "You can change the quantities of multiple items and click the &quot;Update&quot; button to apply all the changes or you can click on the <b>Product Name</b> link to manage the Options' Stock for that product.");

define('POSM_TEXT_PRODUCT_NAME', 'Product Name');
define('POSM_TEXT_VARIANT_MODEL', 'Variant Model');
define('POSM_TEXT_OPTIONS_LIST', 'Variant Name');
define('TEXT_POS_STOCK_QUANTITY', 'Quantity');

define('BUTTON_GO', 'Go');
define('TEXT_UPDATE_ALT', 'Click here to update all changed values.');

define('TEXT_CHECK_TO_VIEW_ALL', 'View <em>all</em> managed variants?');

define('POSM_VIEW_ALL_UPDATED', 'Your selected updates were successfully processed.');

define('POSM_VIEW_ALL_NO_PRODUCTS_TO_LIST', 'There are no managed products to view.');
define('POSM_TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Displaying <b>%u</b> to <b>%u</b> (of <b>%u</b> products)');

define('ERROR_MISSING_INPUTS', 'The update request could not be processed. You will need to increase your site\'s PHP configuration values for <code>post_max_size</code> (currently %1$s) and/or <code>max_input_size</code> (currently %$2s).');