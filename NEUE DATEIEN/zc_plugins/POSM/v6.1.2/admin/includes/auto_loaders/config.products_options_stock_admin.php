<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: config.products_options_stock_admin.php 2026-06-28 12:25:29Z webchills $
*/
$autoLoadConfig[200][] = [
    'autoType' => 'class',
    'loadFile' => 'observers/class.products_options_stock_admin_observer.php',
    'classPath' => DIR_WS_CLASSES
];
$autoLoadConfig[200][] = [
    'autoType' => 'classInstantiate',
    'className' => 'products_options_stock_observer',
    'objectName' => 'posObserver'
];
$autoLoadConfig[200][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_posm_admin.php'
];
