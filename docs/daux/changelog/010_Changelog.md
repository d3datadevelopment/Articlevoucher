---
title: Changelog
---

## 4.0.3.0 (2021-07-08)
### Added
- Support für OXID 6.3.x

---

## 4.0.2.2 (2021-03-21)
### Fixed
- Gutschein lässt sich nicht entfernen

---

## 4.0.2.1 (2020-10-23)
### Fixed
- Steuerbetrag wird mehrfach reduziert

---

## 4.0.2.0 (2020-08-07)
### Added
- installierbar in OXID 6.2

---

## 4.0.1.1 (2019-02-04)
- Einheitliche Schreibweise für d3articlevoucher geändert

---

## 4.0.1.0 (2018-11-29)
- Anpassung auf Installation via Composer (Metadata Version 2.0)
- Umstellung der Dokumentation

---

## 4.0.0.1 (2018-11-26)
- Typo im Sprachbaustein
- fehlerhafte Prüfung der Zeitsteuerung an den Rabatten
- Bug im Zusammenhang mit weiteren Gutscheinen

---

## 4.0.0.0 (2018-07-10)
- flow-Theme Unterstützung
- Migration auf Oxid eShop 6.0.0
- Support für 4.10.x/5.3.x eingestellt

---

## 3.1.0.3 (2018-12-10)
- Typo im Sprachbaustein
- Fehlerhafe Prüfung der Zeitsteuerung an den Rabatten
- keine Einlösung weiterer Gutscheine möglich

---

## 3.1.0.2 (2017-10-24)

- Im Fall von Abweichungen zwischen der Gutscheinkonfiguration und der 
  Rabattkonfiguration konnte es passieren, dass Gutscheine zwar eingelöst 
  werden konnten, jedoch leer durchliefen (also kein Abzug und keine 
  Dreingabe). Die Konfiguration der Rabatte wird nun ebenfalls geprüft 
  und ggf. eine Meldung im Frontend ausgegeben.

---

## 3.1.0.1 (2017-01-18)
- Artikelgutschein-Rabatte bei deaktiviertem ModCfg-Eintrag kostenlos für alle Kunden

  Sofern das Modul vom Connector den Status "nicht aktiv" gemeldet bekommt (Aktiv-Haken 
  entfernt oder z.B. Lizenz abgelaufen), werden alle Artikelgutschein-Rabatte ohne 
  Prüfung zur Verwendung weitergereicht.
  Alle Kunden bekommen damit die bisher gegen Gutscheincodes verfügbaren Artikel 
  komplett kostenlos automatisch in den Warenkorb gelegt.

  Im Bugfix werden diese in dem Fall aus der Liste der verfügbaren Rabatte aussortiert.

  Der Fall ist jedoch weiterhin wichtig, wenn der Shopbetreiber das Modul in den 
  Erweiterungen deaktiviert oder deinstalliert. Darauf können wir dann jedoch keinen 
  Einfluss mehr nehmen.
  
---

## 3.1.0.0 (2017-01-16)
- unnötige Ladevorgänge beim Überarbeiten des Warenkorbs entfernt
- Modulresourcen werden nur geladen, wenn Modul auch aktiv ist
- Bugfix: Installation angepasst, um mögliche Endlosschleifen zu vermeiden

---

## 3.0.3.0 (2015-12-09)
- Bugfix: explizite Prüfung auf "nur Artikelgutscheine im Warenkorb"
- Bugfix: Korrektur der Mehrwertsteuerberechnung in Verbindung mit Artikelgutscheinen
- Support für Shopversionen 4.7.x / 5.0.x eingestellt

---

## 3.0.2.1 (2015-07-21)
- Kontrolle auf Gültigkeit, vor dem hinzugefügen zum Warenkorb
- Warenkorbaktualisierung und Meldung ausgeben, falls nach dem Anmelden eines Benutzers 
  (im Login-Popup) ungültige Gutscheine vorhanden sind
- freigegeben bis PHP 5.6

---

## 3.0.2.0 (2014-12-09)
- Mit dieser Version können die Gutscheinartikel nun optional als "nicht separat kaufbar" 
  markiert werden.

  Die Artikel sind weiterhin zu Informationszwecken aufrufbar, können jedoch (außer 
  über den Weg der Artikelgutscheine) nicht in den Warenkorb gelegt werden. Diese 
  Einstellung lässt sich im Adminbereich des Shops setzen.

---

## 3.0.1.1 (2014-11-12)
- Bugfix für: Gutscheinserienartikel wird dem Warenkorb hinzugefügt obwohl der Gutschein 
  nicht gültig ist

---

## 3.0.1.0 (2014-11-12)
- mehrfache Verwendung von Artikelgutscheinen (sofern erlaubt) legt Artikel auch mehrfach in den Warenkorb

---

## 3.0.0.3 (2014-08-05)
- Mit dieser Version wurden fehlende Templates und Sprachdateien nachgetragen.

---

## 3.0.0.2 (2014-05-06)
- Update der Systemprüfung (d3precheck.php)

---

## 3.0.0.1 (2014-03-24)
- Anpassung der Sprachbausteine
- Tests auf Shopversion 4.8 / 5.1

---

## 3.0.0.0 (2013-08-28)
- Portierung auf 4.7 / 5.0
- Integration der automatischen Installation
- Sprache Englisch hinzugefügt

---

## 2.1.1.0 (2012-10-10)
- Mit diesem neuen Patch ist das Modul "Artikelgutschein" nun für die Shopversionen 4.5.1 bis 4.6.4 verfügbar.

---

## 2.1.0.0 (2012-07-12)
- Mit diesem Update ist unser Modul Artikelgutschein jetzt auch für die Shopversionen PE 4.5.x verfügbar.