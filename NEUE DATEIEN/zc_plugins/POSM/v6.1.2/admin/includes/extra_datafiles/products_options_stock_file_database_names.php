<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: products_options_stock_file_database_names.php 2026-06-28 12:25:29Z webchills $
*/
zen_define_default('TABLE_PRODUCTS_OPTIONS_STOCK', DB_PREFIX . 'products_options_stock');
zen_define_default('TABLE_PRODUCTS_OPTIONS_STOCK_ATTRIBUTES', DB_PREFIX . 'products_options_stock_attributes');
zen_define_default('TABLE_PRODUCTS_OPTIONS_STOCK_NAMES', DB_PREFIX . 'products_options_stock_names');

zen_define_default('FILENAME_PRODUCTS_OPTIONS_STOCK_REPORT', 'products_options_sales_report');
zen_define_default('FILENAME_PRODUCTS_OPTIONS_STOCK', 'products_options_stock');
zen_define_default('FILENAME_PRODUCTS_OPTIONS_STOCK_VIEW_ALL', 'products_options_stock_view_all');
zen_define_default('FILENAME_PRODUCTS_OPTIONS_STOCK_NAMES', 'products_options_stock_names');
zen_define_default('FILENAME_CONVERT_SBA2POSM', 'tool_convert_sba2posm');
zen_define_default('FILENAME_POSM_FIND_DUPLICATE_MODELNUMS', 'tools_posm_find_duplicate_modelnums');

zen_define_default('FILENAME_CATALOG_POS_EXTRA_DEFINITIONS', 'lang.products_options_stock_extra_definitions.php');