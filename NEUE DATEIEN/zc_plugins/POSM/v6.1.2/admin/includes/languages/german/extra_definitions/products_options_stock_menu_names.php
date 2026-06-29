<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: products_options_stock_menu_names.php 2026-06-29 07:25:29Z webchills $
*/
define ('BOX_REPORTS_PRODUCTS_OPTIONS_STOCK', 'Verkäufe nach Attribut Varianten');
define ('BOX_CATALOG_PRODUCTS_OPTIONS_STOCK', 'POSM Attribut Lagerbestands Manager &mdash; Lagerbestände verwalten');
define ('BOX_CATALOG_PRODUCTS_OPTIONS_STOCK_VIEW_ALL', 'POSM Attribut Lagerbestands Manager &mdash; Alle anzeigen');
define ('BOX_LOCALIZATION_PRODUCTS_OPTIONS_STOCK', 'POSM Attribut Lagerbestands Manager &mdash; Out-of-Stock Labels');
define ('BOX_CONFIGURATION_PRODUCTS_OPTIONS_STOCK', 'POSM Attribut Lagerbestand Manager &mdash; Konfiguration');
define ('BOX_TOOLS_CONVERT_SBA2POSM', 'POSM Attribut Lagerbestand Manager &mdash; Stock by Attributes Daten konvertieren');
define ('BOX_TOOLS_POSM_FIND_DUPMODELS', 'POSM Attribut Lagerbestand Manager &mdash; Doppelte Artikelnummern finden');

// -----
// Used by the initialization script, when checking that the EO function file contains the "proper" notifiers,
// when checking for "expired" back-in-stock dates and messaging installation or updates.
//
define('POSM_EO_DOWNLEVEL', 'Die derzeit installierte Version <em>Edit Orders</em> (v%s) <em>unterstützt</em> den <em>„POSM Attribut Lagerbestands Manager“</em> nicht; bitte aktualisieren Sie auf Edit Orders v4.2.0 oder höher.');
define('POSM_BIS_DATES_EXPIRED', 'Ein oder mehrere Wiederverfügbarkeitstermine befinden sich in der Ablaufphase (%1$u Tage); klicken Sie <a href="%2$s">hier</a>, um weitere Informationen zu erhalten');
define('POSM_INSTALLED', 'POSM Attribut Lagerbestands Manager Version %s wurde erfolgreich installiert.');
define('POSM_UPDATED', 'POSM Attribut Lagerbestands Manager wurde erfolgreich aktualisiert von Version %1$s auf %2$s.');

// -----
// Used on the categories page as alt-text for the options-stock indicator icons.
//
define ('POS_ALT_PRODUCT_HAS_OPTIONS_STOCK', 'Artikel hat Attribute mit Lagerbestand');
define ('POS_ALT_PRODUCT_HAS_OPTIONS_NO_STOCK', 'Artikel hat Attribute, aber keinen Lagerbestand');

// -----
// Used by the admin-level options' stock observer to report that one or more stock records have been removed.
//
define ('CAUTION_REMOVING_OPTIONS_STOCK', '%u Lagerbestandseinträge wurden entfernt.');

// -----
// Used by the admin-level options' stock observer to report that one or more stock records were copied.
define('SUCCESS_COPYING_OPTIONS_STOCK', '%u Products\' Options\' Stock record(s) were copied.');

// -----
// Used by Catalog->Manage Options' Stock to notify the admin user when the re-order level has been found to be invalid.
//
define ('CAUTION_POSM_REORDER_LEVEL', 'Die <em>Lagerbestand Re-order Level</em> Einstellung hat einen ungültigen Wert (%s) enthalten; der Wert wurde zurückgesetzt auf 0.');

// -----
// Used by both Catalog->Manage Options' Stock and the "View All" tool to alert the admin to a disallowed duplicate model number and to provide
// sort-by model number.
//
define ('ERROR_DUPLICATE_MODEL_FOUND', 'Die Artikelnummer (<em>%s</em>) wird bereits verwendet, daher muss sie geändert werden, um sie speichern zu können.');
define ('JSCRIPT_ERROR_DUPLICATE_MODEL', 'Diese Artikelnummer (\'+modelNum+\') wird bereits verwendet, daher muss sie geändert werden, um sie speichern zu können.');
define('ERROR_MODEL_TOO_LONG', 'Die eingegebene Artikelnummer (%s) hat zuviele Zeichen; bitte neu eingeben.');
define('ERROR_INVALID_QUANTITY', 'Die Menge einer Variante muss numerisch sein und darf nicht negativ sein: bitte neu eingeben.');

define ('POSM_TEXT_SORT_BY', 'Wählen Sie die Sortierreihenfolge für die Kombinationen: ');
define ('POSM_TEXT_SORT_BY_MODEL_ASC', 'Artikelnummer, A-Z');
define ('POSM_TEXT_SORT_BY_MODEL_DESC', 'Artikelnummer, Z-A');
define ('POSM_TEXT_SORT_BY_DEFINITION', 'Attribut Sortierreihenfolge');
// -----
    // Used during POSM's EO-5 integration, checking updated/added attributes for validity.
    //
define ('ERROR_INVALID_OPTION_COMBINATION', 'Die Kombination, die Sie wählen, ist derzeit nicht verfügbar. Bitte neu eingeben.');
    // -----
// Used by  incudes/javascript/attributes_controller_posm.php.
//
define('POSM_JS_CAUTION_OPTION_REMOVAL', 'VORSICHT!\n\nDie Attribute dieses Artikels werden vom POSM Attribut Lagerbestands Manager verwaltet.\n\nWenn Sie das Löschen dieses Attributs bestätigen, werden ALLE verwalteten Optionen entfernt und die Menge des Artikels wird auf 0 gesetzt.');
define('POSM_JS_CAUTION_ATTRIBUTE_REMOVAL', 'VORSICHT!\n\nDie Attribute dieses Artikels werden vom POSM Attribut Lagerbestands Manager verwaltet.\n\nWenn Sie das Löschen dieses Attributs bestätigen, werden %u verwaltete Optionen entfernt und die Menge des Artikels wird entsprechend angepasst.');
    // -----
    // Used by includes/javascript/product_posm.php.
    //
define ('POSM_BUTTON_MANAGE_STOCK', 'Lagerbestand verwalten');
define ('POSM_TEXT_PRODUCTS_QTY_CLICK', 'Lagerbestand dieses Artikels verwalten:');