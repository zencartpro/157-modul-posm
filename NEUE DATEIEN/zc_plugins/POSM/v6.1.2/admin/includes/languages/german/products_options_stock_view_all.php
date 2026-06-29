<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: products_options_stock_view_all.php 2026-06-29 08:25:29Z webchills $
*/
define ('HEADING_TITLE', 'POSM Attribute Lagerbestand Manager &mdash; zeige alle');
define ('TEXT_LAST_UPDATED', 'zuletzt aktualisiert: ');
define ('TEXT_POS_INSTRUCTIONS', "Standardmäßig zeigt dieses Tool <b>nur</b> Artikel mit Attributkombinationen (Varianten), die einen Lagerbestand kleiner gleich dem <em>POSM - Allgemein: Lagerbestand für Nachbestellung</em> haben (derzeit " . POSM_STOCK_REORDER_LEVEL . "). Um <b>alle</b> Artikel zu sehen, die derzeit vom  <a href=\"" . zen_href_link (FILENAME_PRODUCTS_OPTIONS_STOCK) . "\">Lagerbestandmanager</a> verwaltet werden, kreuzen Sie die Checkbox unterhalb an &mdash; die Seite wird dann automatisch neu laden.<br /><br />Die <b>Name der Variante</b> Spalte ist formatiert als <span class=\"option-name\">Attributname</span>: <span class=\"value-name\">Attributwert</span>[,...].  Varianten mit niedrigem Lagerbestand sind farblich <span class=\"out-of-stock\">rot</span> gekennzeichnet.<br /><br />Wenn Sie den Attribut Lagerbestand Manager so konfiguriert haben, dass er Duplikate erkennen und melden soll, dann wird jede doppelte <b>Variante Artikelnummer</b> mit einem <span style=\"color: red; \">roten Rahmen</span> angezeigt. Sie kommt dann mehrfach vor, entweder in einer Artikeldefinition oder in einer anderen Attribut Lagerbestand Manager bezogenen Kombination. Nutzen Sie das Tool <a href=\"" . zen_href_link (FILENAME_POSM_FIND_DUPLICATE_MODELNUMS) . "\"><em>POSM Attribut Lagerbestand Manager: Doppelte Artikelnummern finden</em></a> für weitere Informationen.<br /><br />");
define ('TEXT_POS_INSTRUCTIONS2', "Sie können die Mengen mehrerer Varianten gleichzeitig eingeben und dann auf den &quot;Aktualisieren&quot; Button clicken um alle Änderungen auf einmal zu übernehmen. Oder auf den <b>Artikelname</b> Link klicken, um den Lagerbestand dieses Artikels zu managen.");
define ('POSM_TEXT_PRODUCT_NAME', 'Artikelname');
define ('POSM_TEXT_VARIANT_MODEL', 'Artikelnummer der Variante');
define ('POSM_TEXT_OPTIONS_LIST', 'Name der Variante');
define ('TEXT_POS_STOCK_QUANTITY', 'Menge');
define('BUTTON_GO', 'Los');
define ('TEXT_UPDATE_ALT', 'Aktualisieren');
define ('TEXT_CHECK_TO_VIEW_ALL', 'Zeige <em>alle</em> verwalteten Varianten?');
define ('POSM_VIEW_ALL_UPDATED', 'Ihre Aktualisierungen wurden erfolgreich durchgeführt.');
define ('POSM_VIEW_ALL_NO_PRODUCTS_TO_LIST', 'Es gibt keine verwalteten Artikel zum Anzeigen.');
define ('POSM_TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Zeige <b>%u</b> bis <b>%u</b> (von <b>%u</b> Artikeln)');
define('ERROR_MISSING_INPUTS', 'Die Aktualisierungsanfrage konnte nicht verarbeitet werden. Sie müssen die PHP-Konfigurationswerte Ihrer Website für <code>post_max_size</code> (derzeit %1$s) und/oder <code>max_input_size</code> (derzeit %$2s) erhöhen.');