<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: products_options_stock_names.php 2026-06-28 12:25:29Z webchills $
*/
define('HEADING_TITLE', "Products' Options' Stock Manager: Manage Out-of-Stock Labels");
define('TEXT_INSTRUCTIONS', 'Use this page to define and manage the text labels that you associate with products that are being managed by the <em>Products\' Options\' Stock</em> plugin.  The label that you assign to a product will be displayed to your customers when an option-combination is &quot;out-of-stock&quot;. You can use the special symbol <b>[date]</b> to (optionally) identify where an associated stock-related date is to be inserted.');

define('TABLE_HEADING_NAME_ID', 'Label ID');
define('TABLE_HEADING_LABEL_NAME', 'Label Name');
define('TABLE_HEADING_ACTION', 'Action');

define('BUTTON_MANAGE', 'Manage');
define('BUTTON_MANAGE_ALT', 'Click here to manage your &quot;Products\' Options\' Stock&quot;');

define('TEXT_INFO_EDIT_INTRO', 'Please make any necessary changes');
define('TEXT_INFO_LABEL_NAME', 'Label Name:');
define('TEXT_INFO_INSERT_INTRO', 'Please enter the new &quot;Out-of-Stock Label&quot;.');
define('TEXT_INFO_DELETE_INTRO', 'Are you sure you want to delete this &quot;Out-of-Stock Label&quot;?');
define('TEXT_INFO_HEADING_NEW', 'New &quot;Out-of-Stock Label&quot;');
define('TEXT_INFO_HEADING_EDIT', 'Edit &quot;Out-of-Stock Label&quot;');
define('TEXT_INFO_HEADING_DELETE', 'Delete &quot;Out-of-Stock Label&quot;');

define('CAUTION_NO_LABEL_NAMES_FOUND', 'No &quot;Out-of-Stock Labels&quot; were found.');
define('MESSAGE_ERROR_NO_ID', 'Missing ID for operation.');
define('ERROR_USED_IN_OPTIONS_STOCK', 'The stock label &mdash; <b>%s</b> &mdash; is used in one or more product\'s options and cannot be removed.');
define('ERROR_DATE_MULTI_LANG', 'The <b>[date]</b> symbol, if present, must be used in all language values.');
define('ERROR_COMMA_IN_NAME', 'A stock <b>Label Name</b> cannot contain a comma (,) &mdash; please re-enter.');
define('ERROR_NAME_TOO_LONG', 'The stock label &mdash; <b>%s</b> &mdash; has too many characters; please re-enter.');