# Konfiguration, Shell und Remote-Zugriff #

<img style="padding-top: 10px; float: right" width="70" src="https://www.tenettech.com/training/Related/Packages/Footer/8/Raspberry_Pi_Logo_4.png" alt="" />

Einführung in die Informatik II

Sommersemester 2013  
Axel Dürkop/Hanno Kallies<br>
Veranstaltung: 02-Do-2013-04-11

!

## Überblick ##

* Rückschau: Konfiguration des RPI
* Remote-Zugriff
* Die Shell - Angriff auf die Kommandozeile
* Webserver: Installation und Konfiguration
* HTML: Eine erste HTML-Datei

!

## Rückschau: Konfiguration des RPI

* **expand_rootfs:** Ja
* **overscan:** Enable
* **configure_keyboard:**
    * **Keyboard model:** Generic 105-key (Intl) PC (ist schon ausgewählt)
    * **Country for origin for the keyboard:** German
    * **Keyboard layout:** German
    * **Key to function as AltGr:** The default for the keboard layout
	* **Compose Key:** No compose key
	* **Use "Control+Alt+Backspace" to terminate the X-Server:** Yes

!

## Rückschau: Konfiguration des RPI

* **change_pass:** inf2ss2013
* **change\_locale:**
    * **de\_DE.UTF-8 UTF8**
	* **Default locale for the system environment:** de\_DE.UTF-8
* **change_timezone:** Europe, Berlin
* **memory_split:** keine Änderung
* **ssh:** Enable
* **boot_behaviour:** No
* **update:** Yes (Enter) (Dauert eine Weile, kann nur im online-Zustand ausgeführt werden)

!

## Remote-Zugriff

* **SSH** - verschlüsselter Zugriff über das Netzwerk
    * Fernsteuerung des Rechners durch Eingabe von Befehlen auf dem Client
* **Mac OS/Linux:** Terminal ermöglicht SSH-Zugriff auf andere Rechner von Haus aus
* **Windows:** putty.exe als bewährte Standardanwendung

!

## Shell

* Wiederholung bisheriger Befehle
* Befehle zum Anlegen von Ordnern und Dateien

!

## Webserver und HTML

* Installation des Programms Apache
* Grundlagen der Software-Installation auf Systemen wie Ubuntu/Debian
* Konfiguration des Webservers
* Anlegen und ausliefern eines ersten HTML-Dokuments