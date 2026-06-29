<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: products_options_stock_names.php 2026-06-29 07:25:29Z webchills $
*/
define ('HEADING_TITLE', 'POSM Attribute Lagerbestand Manager: Out-of-Stock Labels verwalten');
define ('TEXT_INSTRUCTIONS', 'Verwenden Sie diese Seite, um Text Labels anzulegen und zu verwalten, die Sie für Artikel verwenden wollen, deren Lagerbestand vom <em>POSM Attribute Lagerbestand Manager</em>verwaltet wird. Das Label, das Sie einem Artikel zuweisen wird dem Kunden angezeigt, wenn eine Variante &quot;out-of-stock&quot; ist. Sie können ein spezielles Symbol <b>[Datum]</b> verwenden, um (optional) festzulegen wo ein zugehöriges Datum eingefügt werden soll.');
define ('TABLE_HEADING_NAME_ID', 'Label ID');
define ('TABLE_HEADING_LABEL_NAME', 'Label Name');
define ('TABLE_HEADING_ACTION', 'Aktion');
define ('BUTTON_MANAGE', 'Verwalten');
define ('BUTTON_MANAGE_ALT', 'Klicken Sie hier um Ihren Lagerbestand zu verwalten');
define ('TEXT_INFO_EDIT_INTRO', 'Bitte nehmen Sie Ihre gewünschten Änderungen vor.');
define ('TEXT_INFO_LABEL_NAME', 'Label Name:');
define ('TEXT_INFO_INSERT_INTRO', 'Bitte geben Sie das neue &quot;Out-of-Stock Label&quot; ein.');
define ('TEXT_INFO_DELETE_INTRO', 'Wollen Sie dieses &quot;Out-of-Stock Label&quot; wirklich löschen?');
define ('TEXT_INFO_HEADING_NEW', 'Neues &quot;Out-of-Stock Label&quot;');
define ('TEXT_INFO_HEADING_EDIT', 'Bearbeite &quot;Out-of-Stock Label&quot;');
define ('TEXT_INFO_HEADING_DELETE', 'Lösche &quot;Out-of-Stock Label&quot;');
define ('CAUTION_NO_LABEL_NAMES_FOUND', 'Achtung: Keine &quot;Out-of-Stock Labels&quot; gefunden.');
define ('MESSAGE_ERROR_NO_ID', 'FEHLER: ID fehlt.');
define ('ERROR_USED_IN_OPTIONS_STOCK', 'FEHLER: Das Stock Label &mdash; <b>%s</b> &mdash; wird in einer oder mehreren Artikelvarianten verwendet und kann nicht gelöscht werden.');
define ('ERROR_DATE_MULTI_LANG', 'Das <b>[Datum]</b> Symbol, falls verwendet, muss in allen Sprachvarianten verwedet werden.');
define ('ERROR_COMMA_IN_NAME', 'FEHLER: Ein <b>Label Name</b> darf kein Komma (,) enthalten&mdash; bitte erneut eingeben.');
define('ERROR_NAME_TOO_LONG', 'Das Stock Label &mdash; <b>%s</b> &mdash; hat zuviele Zeichen, bitte neu eingeben.');