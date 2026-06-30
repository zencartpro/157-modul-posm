# 157-modul-posm
POSM Attribut Lagerbestands Manager für Zen Cart 1.5.7k deutsch

Hinweis: 
Freigegebene getestete Versionen für den Einsatz in Livesystemen ausschließlich unter Releases herunterladen:
* https://github.com/zencartpro/157-modul-posm/releases

# Sinn und Zweck
* Dieses Modul ist der Nachfolger des alten Lagerbestand für Artikel mit Attributen (Stock by Attributes) Moduls mit wesentlich mehr Funktionalitäten und wesentlich benutzerfreundlicherer Oberfläche.
* Wenn Sie beispielsweise T-Shirts in den Größen Small, Medium und Large verkaufen, können Sie mit diesem Modul festlegen, dass derzeit 3 Stück in Größe Small, 4 Stück in Größe Medium und 2 Stück in Größe Large vorrätig sind – und das Plugin verwaltet diese Lagerbestände dann für Sie. 
* Das ist der einfache Teil. 
* Was aber, wenn Sie ein Produkt haben, das drei Optionen bietet:
* Größe: Small, Medium und Large
* Grundfarbe: Schwarz, Weiß, Rot, Blau und Rosa
* Akzentfarbe: Schwarz, Weiß, Rot, Blau und Rosa
* Sie führen nicht tatsächlich alle 75 Optionskombinationen für dieses Produkt auf Lager, sondern nur eine ausgewählte Teilmenge. 
* Mit POSM können Sie auswählen, welche Optionskombinationen Sie tatsächlich auf Lager haben und verwalten möchten.
* Jede verwaltete Option kann so konfiguriert werden, dass sie eine eindeutige Artikelnummer/SKU und eine individuelle Meldung bei Nichtverfügbarkeit erhält. 
* Wenn Sie dies wünschen, werden verwaltete Produkte mit mehreren Optionen auf der Detailseite des Artikel als abhängige Attribute behandelt!
* Das Modul bietet außerdem Handler, mit denen Sie die POSM-Konfiguration Ihres Shops mithilfe des Database I/O Managers importieren und exportieren können!
* Das dürfte einigen die Arbeit ein wenig erleichtern.

# Features
* Daten aus dem Stock by Attributes (SBA) Modul können ins neue POSM Schema konvertiert werden
* Abhängige Attribute werden unterstützt
* Lieferzeitlabels frei konfigurierbar
* Individuelle Artikelnummern für Attributkombinationen
* Auswertungsreport für verkaufte Attribut-Kombinationen
* Als encapsulated Plugin ohne Dateiänderungen leicht installierbar

# Credits
* Dieses Modul ist eine Anpassung des Moduls POSM von lat9 für die deutsche Zen Cart Version 1.5.7k
* Grundlage war das Github Repository der amerikanischen Zen Cart Version, in der das Plugin vorintegriert ist:
* https://github.com/zencart/zencart