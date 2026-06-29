<?php
/**
* POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch
* Part of the "Product Options Stock Manager" plugin by Cindy Merkin (www.vinosdefrutastropicales.com)
* Copyright (c) 2015-2026 Vinos de Frutas Tropicales
* Copyright 2003-2026 Zen Cart Development Team
* Zen Cart German Specific (210 code in 157)
* Zen Cart German Version - www.zen-cart-pro.at
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: products_options_stock.php 2026-06-29 07:25:29Z webchills $
*/

// -----
// Since languages are loaded via a class method, need to globalize $db.
//
global $db;
$lowstock_option = $db->Execute(
    "SELECT configuration_group_id, configuration_id 
       FROM " . TABLE_CONFIGURATION . " 
      WHERE configuration_key = 'POSM_STOCK_REORDER_LEVEL'
      LIMIT 1"
);
$lowstock_value_link = zen_href_link(FILENAME_CONFIGURATION, 'gID=' . $lowstock_option->fields['configuration_group_id'] . '&amp;cID=' . $lowstock_option->fields['configuration_id'] . '&amp;action=edit');
define ('HEADING_TITLE', 'POSM Attribut Lagerbestands Manager');
define ('TEXT_POS_IDENTIFIER', '(*)');
define ('TEXT_PRODUCT_DISABLED_IDENTIFIER', ' [deaktiviert]');
define ('TEXT_LAST_UPDATED', 'zuletzt aktualisiert: ');
define ('TEXT_POS_INSTRUCTIONS', 'Wählen Sie den Artikel, dessen Lagerbestand Sie verwalten wollen aus dem Dropdown Menü aus.  Falls hinter einem Artikelnamen ein " . TEXT_POS_IDENTIFIER . " steht, hat dieser Artikel derzeit bereits verwaltete Optionen. Wenn ein Artikel Options Kombinationen mit Lagerbeständen kleiner oder gleich dem eingestellen Mindestlagerbestand " . POSM_STOCK_REORDER_LEVEL . " hat oder ein Out-of-Stock Datum bald abläuft, wird der Artikelname im Dropdown <span class=\"out-of-stock\">rot hervorgehoben</span> dargestellt.<br /><br /><strong>Hinweis:</strong> Artikel Attribute werden (links nach rechts) anhand der Sortierreihenfolge des Attributnamens dargestellt (so wie in <a href=\"" . zen_href_link (FILENAME_OPTIONS_NAME_MANAGER) . "\">Webshop-&gt;Attributnamen</a> eingestellt). Wenn Sie nach <em>Attribut Sortierreihenfolge</em> sortieren, werden die Attributkombinationen des Artikels (oben nach unten) anhand der im Attributmanager eingestellten Sortierreihenfolge angezeigt (<a href=\"" . zen_href_link (FILENAME_ATTRIBUTES_CONTROLLER) . "\">Webshop-&gt;Attributmanager</a>).  Falls mehrere Attributnamen oder Attributwerte dieselbe Reihenfolge verwenden, erfolgt die Sortierung aufsteigend anhand des Namens." . "<br /><br />Sie können Ihre Artikel entweder nach Namen oder Artikelnummer sortieren, je nachdem, ob Sie die Checkbox &quot;Artikelnummer einschließen?&quot; angekreuzt haben oder nicht.<br /><br />');
define ('TEXT_POS_INSERT', 'Verwenden Sie den Attribut-Kombination &quot;Einfügen&quot; Button um eine oder mehrere Attribut Kombinationen für den ausgewählten Artikel hinzuzufügen.  Sie werden in einem Popup eine Bestätigungsanfrage erhalten, ob Sie die gewählten Kombinationen wirklich alle hinzufügen wollen.<br /><br />');
define ('TEXT_POS_INSTRUCTIONS2', 'Falls ein Artikel eine oder mehrere Attribut Kombinationen hat, erscheinen sie als Liste:<ol><li>Falls eine Attribut Kombination <span class=\"lowstock\">rot hervorgehoben</span> angezeigt wird, ist ihr Lagerbestand entweder gleich oder kleiner dem angebenen Wert für niedrigen Lagerbestand (derzeit <a href=\"$lowstock_value_link\">" . POSM_STOCK_REORDER_LEVEL . "</a>) oder das Out-of-Stock Datum ist innerhalb der &quot;Erinnerungszeit&quot; oder hat diese überschritten (derzeit " . POSM_BIS_DATE_REMINDER . " oder mehr Tage).</li><li>Falls eine Attribut Kombination oder ein Attributwert als <span class=\"removed\">durchgestrichen</span> erscheint, dann wurde diese Attribut Kombination oder dieser Attributwert vom Artikel entfernt. Sie können den Lagerbestand einer solchen unbekannten Attribut Kombination oder Attributwertes nicht aktualisieren, aber Sie können ihn entfernen.</li><li>Wenn Sie einen der &quot;Aktualisieren&quot; Buttons anklicken, werden alle Lagerbestände und Artikelnummern der Attribut Kombinationen aktualisiert.</li><li>Wenn Sie auf einen der &quot;Entfernen&quot; Buttons klicken, dann werden alle Attribut Kombinationen, die mit einer &quot;Entfernen?&quot; Checkbox markiert sind, entfernt. Falls eine oder mehre &quot;Entfernen?&quot; Checkboxen angekreuzt sind, werden Sie in einer Popup Meldung um eine Bestätigung des Löschens gebeten werden.</li><li>Falls Sie die <em>Lagerbestand Attribut Manager</em> Funktion Doppelte Artikelnummern finden aktiviert haben, dann ist jede <b>SKU</b> mit einem <span style=\"color: red; \">roten Rahmen</span> mehrfach vorhanden, entweder im Artikel oder in einer anderen vom <em>Attribut Lagerbestand Manager</em> verwalteten Options-Kombination. Rufen Sie das <a href=\"" . zen_href_link (FILENAME_POSM_FIND_DUPLICATE_MODELNUMS) . "\"><em>Tool-&gt;Doppelte Artikelnummern finden</em></a> für weitere Informationen auf.</li></ol>');

define ('TEXT_POS_OPTIONS_ADDED', 'Eines oder mehrere Attribute wurden zu diesem Artikel hinzugefügt, seitdem seine Attributeinträge angelegt wurden.  Bitte wählen Sie den Wert für jedes neue Attribut, das besthenden Einträgen hinzugefügt werden soll und klicken Sie auf den &quot;Einfügen&quot; Button.  Lagerbestände für bereits bestehende Einträge werden bestehen bleiben.<br /><br />');

define ('TEXT_POS_STOCK_QUANTITY', 'Lagerbestand');
define ('TEXT_CURRENT_TOTAL', 'Aktueller Gesamtbestand: %u');
define ('TEXT_POS_REMOVE', 'Entfernen?');
define ('TABLE_HEADING_CHECK_UNCHECK', 'Alle wählen/abwählen');
define ('TEXT_ADD_TO_QUANTITY', 'Menge hinzufügen');
define ('TEXT_REPLACE_QUANTITY', 'Menge ersetzen');
define ('TEXT_ALL', '* (Alle)');
define ('TEXT_OPTION_MODEL', 'SKU');
define ('TEXT_OOS_LABEL', 'Out-of-Stock Label');
define ('TEXT_OOS_DATE', 'Out-of-Stock Datum<br /><span class="smaller">Eingeben als YYYY-MM-DD</span>');
define ('TEXT_NONE_DEFINED', '-- nicht definiert --');
define ('TEXT_PLEASE_SELECT', 'Bitte wählen ...');
define ('TEXT_ALL_CATEGORIES', 'Alle Kategorien');
define ('TEXT_CHOOSE_CATEGORY', 'Wählen Sie die Kategorie, aus der Artikel angezeigt werden sollen: ');
define ('TEXT_CHOOSE_PRODUCT', 'Artikel zum Verwalten auswählen: ');
define ('TEXT_NO_PRODUCTS_IN_CATEGORY', 'Derzeit sind keine Artikel in der gewählten Kategorie definiert.');

define ('TEXT_MODEL_DEFAULT', 'Als Voreinstellung setzen?');
define ('TEXT_MODEL_DEFAULT_TITLE', 'Soll diese Artikelnummer für alle derzeit leeren Werte gesetzt werden?');
define ('BUTTON_DEFINE_LABELS', 'Labels definieren');
define ('BUTTON_DEFINE_LABELS_ALT', 'Klicken Sie hier, um Ihre Out-of-Stock Labels zu definieren');
define ('BUTTON_VIEW_ALL', 'zeige alle');
define ('BUTTON_VIEW_ALL_ALT', 'Klicken Sie hier um alle verwalteten Artikel auf einer einzigen Seite anzuzeigen');
define ('BUTTON_GO', 'Los');

define ('TEXT_INCLUDE_DISABLED', 'Deaktivierte Artikel einschließen? ');
define ('TEXT_INCLUDE_MODEL', 'Artikelnummer einschließen? ');

define('BUTTON_UPDATE', 'Aktualisieren');
define ('TEXT_UPDATE_ALT', 'Alle aktualisieren');
define ('BUTTON_REMOVE', 'Entfernen');
define ('TEXT_REMOVE_ALT', 'Ausgewählte Kombinationen entfernen');

define('TEXT_SINGLE_LABEL_NAME', '<b>Hinweis:</b> Nur 1 (<em><b>%1$s</b></em>) &quot;' . TEXT_OOS_LABEL . '&quot; ist definiert.  Dieses Label wird verwendet werden für alle <em>POSM</em>-verwalteten Artikel, die nicht lagernd sind.');

define ('ERROR_INVALID_DATE', 'Ein <strong>Out-of-Stock Datum</strong> muss in folgendem Format eingegeben werden YYYY-MM-DD und es muss ein gültiges Datum sein.');
define ('ERROR_INVALID_FORM_VALUES', 'Ungültige Werte wurden gefunden (code %s).');
define ('SUCCESS_QUANTITY_UPDATED', 'Einer oder mehrere Einträge für Lagerbestände und Artikelnummern wurden aktualisiert.');
define ('SUCCESS_NEW_OPTION_CREATED', 'Einer oder mehrere neue Options Einträge wurden angelegt oder aktualisiert.');
define ('WARNING_DUPLICATE_COMBINATION', 'Ein Eintrag mit der Options Kombination, die Sie ausgewählt haben, besteht bereits.');
define ('SUCCESS_OPTION_RECORDS_REMOVED', '%u Options Einträge wurden erfolgreich entfernt.');
define ('SUCCESS_OPTIONS_ADDED', 'Neue Optionen wurden zu den bestehenden Optionseinträgen hinzugefügt.');
define('ERROR_MISSING_INPUTS', 'Die Anfrage konnte nicht abgeschlossen werden. Bitte erhöhen Sie in der PHP Konfiguration die Werte für <code>post_max_size</code> (derzeit %1$s) und/oder <code>max_input_vars</code> (derzeit %2$s).');

define ('JS_MESSAGE_DELETE_ALL_CONFIRM', 'Wollen Sie diese \'+n+\' Einträge wirklich entfernen?');
define('JS_MESSAGE_INSERT_NEW_CONFIRM', 'Diese Aktion wird \'+items+\' Attributkombinationen hinzufügen. Wollen Sie damit weitermachen?');
define ('JS_MESSAGE_INSERT_MULTIPLE_CONFIRM', 'Dieser Vorgang wird \'+items+\' neue Optionen einfügen. Bisherige Optionen werden hinsichtlich ihrer Mengen \'+add_replace+\'. Möchten Sie fortsetzen?');
define ('JS_MESSAGE_UPDATED', 'erhöht um \'+quantity+\'');
define ('JS_MESSAGE_REPLACED', 'ersetzt auf den neuen Wert');
define ('JS_MESSAGE_DELETE_SELECTED_CONFIRM', 'Wollen Sie die \'+selected+\' ausgewählten Optionen wirklich entfernen?');
define ('WARNING_NO_FILES_SELECTED', 'Keine Optionswerte zum Entfernen ausgewählt!');
define('JS_MESSAGE_CONFIRM_MODEL_DEFAULT', 'Die Basis-Artikelnummer des Artikels (%s) auf die Optionen unter \'+emptyModels+\' anwenden. Fortfahren?'); //- %s is the product's base model
