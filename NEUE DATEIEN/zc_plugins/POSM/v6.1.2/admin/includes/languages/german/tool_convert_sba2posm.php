<?php
/**
* POSM Lagerbestandsmanager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: tool_convert_sba2posm.php 2026-06-28 16:54:29Z webchills $
*/

define ('HEADING_TITLE','Lagerbestand für Artikel mit Attributen (Stock by Attributes) zu POSM konvertieren');

define ('TEXT_INSTRUCTIONS','Verwenden Sie dieses Tool, um Ihre bestehenden <em>Lagerbestand für Artikel mit Attributen (Stock by Attributes)</em>-Datenbanktabellen in die zugehörigen <em>Produkte\' Optionen\' Lagerbestand (POSM)</em>-Datenbanktabellen zu konvertieren. Bitte beachten Sie, dass <em>POSM</em> die Angabe aller Optionskombinationen erfordert, sodass einige Ihrer <em>SBA</em>-Kombinationen möglicherweise nicht „konvertierbar“ sind. Beachten Sie die untenstehende Anzeige; wenn in der Status-Spalte fehlende Optionen oder ein unbekanntes Produkt angezeigt werden, wird dieser <em>SBA</em>-Datensatz nicht konvertiert!<br /><br /><strong>Hinweis:</strong> Durch Klicken auf die Schaltfläche „Absenden“ werden alle vorhandenen Einträge in Ihrer POSM-Konfiguration gelöscht!');

define ('ERROR_NO_SBA_TABLE','Keine Konvertierung möglich – fehlende Datenbanktabelle <em>products_with_attributes_stock</em>.');

define ('TEXT_FORM_INSTRUCTIONS','Überprüfen Sie die folgenden Informationen und klicken Sie anschließend auf die Schaltfläche <em>Absenden</em>, um die <em>SBA</em>-Einträge in ihre <em>POSM</em>-Entsprechungen zu konvertieren.');
define ('BUTTON_ALT_TEXT','Klicken Sie hier, um die Tabellen zu konvertieren');

define ('TEXT_MISSING_OPTIONS','<span class="missing">&cross; Fehlende Optionen (%s)</span>');
define ('TEXT_UNSUPPORTED_OPTION_TYPE','<span class="missing">&cross; Die Options-ID (%1$u) verwendet einen nicht unterstützten Optionstyp (%2$u)</span>');
define ('TEXT_MISSING_PRODUCT','<span class="missing">&cross; Produkt existiert nicht</span>');
define ('TEXT_OK','<span class="ok">&check;</span>');

define ('TABLE_HEADING_STOCK_ID','Bestands-ID');
define ('TABLE_HEADING_QUANTITY','Menge');
define ('TABLE_HEADING_MODEL','Modell');
define ('TABLE_HEADING_STATUS','Status');

define ('MESSAGE_CONVERTED_OK','Ihre <em>Bestand nach Attributen</em>-Einträge wurden erfolgreich in ihre <em>Produkte\' Optionen\' Bestand</em>-Entsprechungen konvertiert.');
define ('MESSAGE_CONVERTED_MISSING','Bitte überprüfen Sie die folgenden Informationen. Einige Ihrer <em>Bestand nach Attributen</em>-Einträge konnten nicht konvertiert werden.');

define ('JS_MESSAGE_ARE_YOU_SURE','Durch diese Aktion werden Ihre POSM-Tabellen zurückgesetzt, sodass sie nur noch die SBA-konvertierten Informationen enthalten. Möchten Sie wirklich fortfahren?');
