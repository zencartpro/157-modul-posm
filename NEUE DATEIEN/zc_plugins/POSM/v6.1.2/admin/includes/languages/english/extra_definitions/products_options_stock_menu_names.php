<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: products_options_stock_menu_names.php 2026-06-28 12:25:29Z webchills $
*/
define('BOX_REPORTS_PRODUCTS_OPTIONS_STOCK', 'Sales by Product Options');
define('BOX_CATALOG_PRODUCTS_OPTIONS_STOCK', 'Manage Options\' Stock');
define('BOX_CATALOG_PRODUCTS_OPTIONS_STOCK_VIEW_ALL', 'Options\' Stock &mdash; View All');
define('BOX_LOCALIZATION_PRODUCTS_OPTIONS_STOCK', 'Out-of-Stock Labels');
define('BOX_CONFIGURATION_PRODUCTS_OPTIONS_STOCK', 'Options\' Stock Manager');
define('BOX_TOOLS_CONVERT_SBA2POSM', 'Convert SBA to POSM');
define('BOX_TOOLS_POSM_FIND_DUPMODELS', 'POSM: Find Duplicate Models');

// -----
// Used by the initialization script, when checking that the EO function file contains the "proper" notifiers,
// when checking for "expired" back-in-stock dates and messaging installation or updates.
//
define('POSM_EO_DOWNLEVEL', 'The <em>Edit Orders</em> version (v%s) currently installed <em>does not support</em> the <em>Products\' Options\' Stock Manager</em>; please update to EO v4.2.0 or later.');
define('POSM_BIS_DATES_EXPIRED', 'One or more back-in-stock dates are in their expiration period (%1$u days); click <a href="%2$s">here</a> for more information');
define('POSM_INSTALLED', 'Products\' Options\' Stock Manager, version %s was successfully installed.');
define('POSM_UPDATED', 'Products\' Options\' Stock Manager was successfully updated from version %1$s to %2$s.');

// -----
// Used on the categories page as alt-text for the options-stock indicator icons.
//
define('POS_ALT_PRODUCT_HAS_OPTIONS_STOCK', 'Product has options with stock');
define('POS_ALT_PRODUCT_HAS_OPTIONS_NO_STOCK', 'Product has options, but no stock');

// -----
// Used by the admin-level options' stock observer to report that one or more stock records have been removed.
//
define('CAUTION_REMOVING_OPTIONS_STOCK', 'The operation resulted in %u Products\' Options\' Stock record(s) being removed.');

// -----
// Used by the admin-level options' stock observer to report that one or more stock records were copied.
define('SUCCESS_COPYING_OPTIONS_STOCK', '%u Products\' Options\' Stock record(s) were copied.');

// -----
// Used by Catalog->Manage Options' Stock to notify the admin user when the re-order level has been found to be invalid.
//
define('CAUTION_POSM_REORDER_LEVEL', "The <em>Options' Stock: Re-order Level</em> setting contained an invalid value (%s); the value has been reset to 0.");

// -----
// Used by both Catalog->Manage Options' Stock and the "View All" tool to alert the admin to a disallowed duplicate model number and to provide
// sort-by model number.  Also 
//
define('ERROR_DUPLICATE_MODEL_FOUND', 'The model number (<em>%s</em>) is already used and must be changed to save this information.');
define('JSCRIPT_ERROR_DUPLICATE_MODEL', "'This model number ('+modelNum+') is already used and must be changed to save this information.'");
define('ERROR_MODEL_TOO_LONG', 'The model number (%s) entered has too many characters; please re-enter.');
define('ERROR_INVALID_QUANTITY', 'A variant\'s quantity value must be numeric and non-negative, please re-enter.');

define('POSM_TEXT_SORT_BY', 'Sort option-combinations by: ');
define('POSM_TEXT_SORT_BY_MODEL_ASC', 'Model-number, A-Z');
define('POSM_TEXT_SORT_BY_MODEL_DESC', 'Model-number, Z-A');
define('POSM_TEXT_SORT_BY_DEFINITION', "Attributes' Sort Order");

// -----
    // Used during POSM's EO-5 integration, checking updated/added attributes for validity.
    //
define('ERROR_INVALID_OPTION_COMBINATION', 'The option-combination that you chose is not currently available; please re-enter.');
    // -----
    // Used by includes/javascript/attributes_controller_posm.php.
//
define('POSM_JS_CAUTION_OPTION_REMOVAL', 'CAUTION!\n\nThis product\\\'s attributes are managed by the Products Options Stock Manager.\n\nIf you Confirm this option\\\'s deletion, **all** managed-options will be removed and the product\\\'s quantity will be set to 0.');
define('POSM_JS_CAUTION_ATTRIBUTE_REMOVAL', 'CAUTION!\n\nThis product\\\'s attributes are managed by the Products Options Stock Manager.\n\nIf you Confirm this attribute\\\'s deletion, %u managed-option(s) will be removed and the product\\\'s quantity will be updated accordingly.');
    // -----
    // Used by includes/javascript/product_posm.php.
    //
define('POSM_BUTTON_MANAGE_STOCK', 'Manage Stock');
define('POSM_TEXT_PRODUCTS_QTY_CLICK', 'Click to manage this product\\\'s options\\\' stock:');