<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: tools_posm_find_duplicate_modelnums.php 2026-06-29 07:25:29Z webchills $
*/
// -----
// Based on the Find Duplicate Models plugin (https://www.zen-cart.com/downloads.php?do=file&id=1323) by swguy.
//
define ('HEADING_TITLE', 'POSM Attribut Lagerbestand Manager: Doppelte Artikelnummern finden');
define('HEADING_PRODUCTS_LINK', 'Artikel Link');
define('HEADING_POSM_LINK', 'POSM Link');
define ('HEADING_PRODUCTS_MODEL', 'Artikelnummer'); 
define('HEADING_POSM_MODEL', 'POSM Artikelnummer');
define ('HEADING_PRODUCTS_NAME', 'Artikelname');
define ('HEADING_PRODUCTS_DISABLED', 'Artikel aktiv?');

define ('INSTRUCTIONS', 'Verwenden Sie dieses Tool um mehrfach vorkommende Artikelnummern in Ihren Artikeln oder in Attributkombinationen zu finden.  Standardmäßig werden nur <em>aktive</em> Artikel im Bericht angezeigt. Falls Sie auch <em>deaktivierte</em> Artikel berücksichtigen wollen, kreuzen Sie die entsprechende Checkbox an und klicken Sie dann auf den <b>Go</b> Button.<br /><br /><strong>Hinweis:</strong> Falls ein Artikel ohne Attribute im Report aufscheint, dann hat dieser Artikel eine vom <em>Attribut Lagerbestand Manager</em> verwaltete SKU, die auch bereits in einem Grundartikel verwendet wird.');
define ('NO_DUPS_FOUND', 'Herzlichen Glückwunsch &mdash; alle Artikelnummern sind einzigartig!'); 

define ('INCLUDE_DISABLED', 'Deaktivierte Artikel einschließen?');
define('POSM_MODEL_IS_EMPTY', '--leer--');
define('BUTTON_GO', 'Los');

define('DUPS_UNMANAGED_UNMANAGED', 'Nicht verwaltete Artikel mit Artikelnummern, die in nicht verwalteten Artikeln doppelt vorhanden sind');
define('DUPS_UNMANAGED_MANAGED', 'Nicht verwaltete Artikel mit Artikelnummern, die in verwalteten Artikeln doppelt vorhanden sind');
define('DUPS_MANAGED_MANAGED', 'Verwaltete Artikel mit Artikelnummern, die in verwalteten Artikeln doppelt vorhanden sind');
