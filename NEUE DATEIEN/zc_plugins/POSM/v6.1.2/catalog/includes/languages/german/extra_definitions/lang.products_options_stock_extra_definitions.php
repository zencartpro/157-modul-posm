<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: lang.products_options_stock_extra_definitions.php 2026-06-28 18:04:29Z webchills $
*/
$products_options_stock_in_stock = 'auf Lager';
$define = [
    'PRODUCTS_OPTIONS_STOCK_WRAPPER' => '<div class="stock-wrapper">%s</div>',
    'PRODUCTS_OPTIONS_STOCK_STOCK_HTML' => '<div class="stock-msg %1$s">%2$s</div>',
    'PRODUCTS_OPTIONS_STOCK_STOCK_TEXT' => ' [%s]',
    'PRODUCTS_OPTIONS_STOCK_IN_STOCK' => $products_options_stock_in_stock,
        'PRODUCTS_OPTIONS_STOCK_IN_STOCK_QTY' => '%u ' . $products_options_stock_in_stock,  //-The %u (required) is the place-holder for the in-stock quantity
    'PRODUCTS_OPTIONS_STOCK_NOT_IN_STOCK' => 'wird beim Lieferanten bestellt',
        'PRODUCTS_OPTIONS_STOCK_MIXED' => '%u %s, %u %s',

    // -----
    // If your store has products with multiple options and you've enabled the 'Dependent Attributes: Insert "Please Choose"?' setting,
    // the following constants are used.
    //
    // The "First Choose" text is applied to the first option (if it's a drop-down) and the "Next Choose" text is
    // applied to all subsequent options.
    //
    'PRODUCTS_OPTIONS_STOCK_PLEASE_CHOOSE' => 'Erste Auswahl &hellip;',
    'PRODUCTS_OPTIONS_STOCK_PLEASE_CHOOSE_NEXT' => 'Nächste Auswahl &hellip;',

    'PRODUCTS_OPTIONS_STOCK_RADIO_BUTTON_CHOOSE' => ' (Wählen Sie alle vorherigen Optionen aus, um die Auswahl anzuzeigen)',

    'POS_EMAIL_TEXT_SUBJECT_LOWSTOCK' => "Lagerbestandwarnung",
    'POS_SEND_EXTRA_LOW_STOCK_EMAIL_TITLE' => "Lagerbestandreport: ",

    // -- %1$ ... product's ID
    // -- %2$ ... product's model
    // -- %3$ ... product's name
    // -- %4$ ... product's stock attributes list
    // -- %5$ ... remaining quantity
    'POS_LOW_STOCK_EMAIL_CONTENTS' => "POSM Lagerbestandreport:\n\nID# %1\$u\t\t%2\$s\n%3\$s (%4\$s)\nQty Left: %5\$u\n",

    'ERROR_LIMITED_STOCK_CART_REDUCTION' => 'Die Menge von <b>%s</b> wurde in Ihrem Warenkorb aufgrund begrenzter Lagerbestände auf %u angepasst.',

    'ERROR_INVALID_VARIABLES' => 'Es wurden ungültige Eingaben erhalten. Bitte wenden Sie sich an den Shop-Betreiber. [msgCode: %u]',

    'JS_ERROR_NO_SELECTION' => 'Bitte wählen Sie ',  //-appended with the name of the option that needs a selection by jscript_posm_dependencies.php

    // -----
    // This message is issued if an add-to-cart action includes a POSM-managed product ... but the requested option-combination isn't configured.
    //
    'POSM_ERROR_INVALID_VARIANT' => 'Die von Ihnen gewählten Kombinationen sind nicht verfügbar. Bitte passen Sie Ihre Auswahl an und versuchen Sie es erneut.',
];
return $define;
