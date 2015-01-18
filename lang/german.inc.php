<?php
// File           german.inc.php / FirebirdWebAdmin
// Purpose        german strings definitions
// Author         Lutz Brueckner <irie@gmx.de>
// Copyright      (c) 2000, 2001, 2002, 2003, 2004, 2005 by Lutz Brueckner,
//                published under the terms of the GNU General Public Licence v.2,
//                see file LICENCE for details
// Created        <02/07/12 20:59:37 lb>       
//
// $Id: german.inc.php,v 1.30 2005/10/05 20:08:34 lbrueckner Exp $

// strings used for the tabfolder menu
$menu_strings = array('Database'    => 'Datenbank',
                      'Tables'      => 'Tabellen',
                      'Accessories' => 'Zubeh�r',
                      'SQL'         => 'SQL',
                      'Data'        => 'Daten',
                      'Users'       => 'Benutzer',
                      'Admin'       => 'Admin'
                      );

// the coordinates for the image area used by the tabfolder menu
$menu_coords = array('Database'   => '8,0,102,31',
                     'Tables'     => '104,0,181,31',
                     'Accessories'=> '183,0,258,31',
                     'SQL'        => '260,0,299,31',
                     'Data'       => '301,0,356,31',
                     'Users'      => '358,0,440,31',
                     'Admin'      => '442,0,499,31'
                     );

// strings used as panel titles
$ptitle_strings = array('info'        => 'Info', 
                        'db_login'    => 'Datenbank Anmeldung',  
                        'db_create'   => 'Neue Datenbank erstellen',
                        'db_delete'   => 'Datenbank l�schen',    
                        'db_systable' => 'Systemtabellen',      
                        'db_meta'     => 'Metadaten anzeigen',      
                        'tb_show'     => 'Tabellen anzeigen',        
                        'tb_create'   => 'Neue Tabellen erstellen',   
                        'tb_modify'   => 'Tabellen bearbeiten',
                        'tb_delete'   => 'Tabellen l�schen',       
                        'acc_index'   => 'Indices',        
                        'acc_gen'     => 'Generatoren',
                        'acc_trigger' => 'Trigger',          
                        'acc_proc'    => 'Prozeduren',
                        'acc_domain'  => 'Domains',
                        'acc_view'    => 'Views',
                        'acc_udf'     => 'Benutzerdefinierte Funktionen',
                        'acc_exc'     => 'Exceptions',
                        'sql_enter'   => 'Eingabe von SQL-Anweisungen',
                        'sql_output'  => 'Ergebnisse anzeigen', 
                        'tb_watch'    => 'Tabelle betrachten',
                        'dt_enter'    => 'Daten eingeben',
                        'dt_export'   => 'Export Data',
                        'dt_import'   => 'CSV Import',
                        'usr_user'    => 'Benutzer',              
                        'usr_role'    => 'Rollen',              
                        'usr_grant'   => 'Berechtigungen',
                        'usr_cust'    => 'Benutzereinstellungen',
                        'adm_server'  => 'Server-Statistik', 
                        'adm_dbstat'  => 'Datenbank-Statistik',
                        'adm_gfix'    => 'Datenbank Pflege',
                        'adm_backup'  => 'Sichern',
                        'adm_restore' => 'Wiederherstellen',
                        'Open'        => '&ouml;ffnen',
                        'Close'       => 'schliessen',
                        'Up'          => 'hoch',
                        'Top'         => 'nach oben',
                        'Bottom'      => 'nach unten',
                        'Down'        => 'runter'
                        );

// strings to inscribe buttons
$button_strings = array('Login'    => 'Anmelden',
                        'Logout'   => 'Abmelden',
                        'Create'   => 'Erstellen',
                        'Delete'   => 'L�schen',
                        'Select'   => 'Ausw�hlen',
                        'Save'     => 'Speichern',
                        'Reset'    => 'Zur�cksetzen',
                        'Cancel'   => 'Abbrechen',
                        'Add'      => 'Hinzuf�gen',
                        'Modify'   => 'Bearbeiten',
                        'Ready'    => 'Fertig',
                        'Yes'      => 'Ja',
                        'No'       => 'Nein',
                        'DoQuery'  => 'Abfrage ausf�hren',
                        'QueryPlan'=> 'Query Plan',
                        'Go'       => 'Go',
                        'DisplAll' => 'Alles anzeigen' ,
                        'Insert'   => 'Einf�gen',
                        'Export'   => 'Eportieren',
                        'Import'   => 'Importieren',
                        'Remove'   => 'Entfernen',
                        'Drop'     => 'L�schen',
                        'Set'      => 'Setzen',
                        'Clear'    => 'Leeren',
                        'SweepNow' => 'Jetzt aufr�umen',
                        'Execute'  => 'Ausf�hren',
                        'Backup'   => 'Sichern',
                        'Restore'  => 'Wiederherstellen',
                        'Reload'   => 'neu laden',
                        'OpenAll'  => 'alle �ffnen',
                        'CloseAll' => 'alle schliessen',
                        'Defaults' => 'Voreinstellungen setzen',
                        'Load'     => 'Laden'
                        );

// strings on the database page
$db_strings = array('Database' => 'Datenbank',
                    'Host'     => 'Host',
                    'Username' => 'Benutzername',
                    'Password' => 'Pa�wort',
                    'Role'     => 'Rolle',
                    'Cache'    => 'Cache',
                    'Charset'  => 'Zeichensatz',
                    'Dialect'  => 'Dialekt',
                    'Server'   => 'Server',
                    'NewDB'    => 'Neue Datenbank',
                    'PageSize' => 'Seitengr��e',
                    'DelDB'    => 'Datenbank l�schen',
                    'SysTables'=> 'Systemtabellen',
                    'SysData'  => 'Systemdaten',
                    'FField'   => 'Filter Feld',
                    'FValue'   => 'Filter Wert',
                    'Refresh'  => 'Auffrischen',
                    'Seconds'  => 'Sekunden'
                    );

// strings on the table page
$tb_strings = array('Name'      => 'Name',
                    'Type'      => 'Typ',
                    'Length'    => 'L�nge',
                    'Prec'      => 'Genauigkeit',
                    'PrecShort' => 'Genau.',
                    'Scale'     => 'Skala',
                    'Charset'   => 'Zeichensatz',
                    'Collate'   => 'Vergleich',
                    'Collation' => 'Vergleich',
                    'NotNull'   => 'Nicht Null',
                    'Unique'    => 'Unique',
                    'Computed'  => 'Berechnet',
                    'Default'   => 'Default',
                    'Primary'   => 'Primary',
                    'Foreign'   => 'Foreign',
                    'TbName'    => 'Tabellenname',
                    'Fields'    => 'Felder',
                    'DefColumn' => 'Definitionen f�r Spalte',
                    'SelTbMod'  => 'Tabelle zum Bearbeiten ausw�hlen',
                    'DefNewCol' => 'Definitionen f�r neues Feld',
                    'NewColPos' => 'Neue Feldposition',
                    'SelColDel' => 'Feld zum L�schen ausw�hlen',
                    'SelColMod' => 'Feld zum Bearbeiten ausw�hlen',
                    'AddCol'    => 'Feld hinzuf�gen',
                    'SelTbDel'  => 'Tabelle zum L�schen ausw�hlen',
                    'Datatype'  => 'Datentyp',
                    'Size'      => 'Gr��e',
                    'Subtype'   => 'Subtyp',
                    'SegSiShort'=> 'SegGr��e',
                    'Domain'    => 'Domain',
                    'CompBy'    => 'Berechnet durch',
                    'Table'     => 'die Tabelle',
                    'Column'    => 'das Feld',
                    'Source'    => 'Quelltext',
                    'Check'     => 'Check',
                    'Yes'       =>  'Ja',
                    'DispCounts'=> 'zeige Anzahl Datens�tze',
                    'DispCNames'=> 'Constraint-Namen',
                    'DispDef'   => 'default values',
                    'DispComp'  => 'computed values',
                    'DropPK'    => 'L�sche Primary Key',
                    'DropFK'    => 'L�sche Foreign Key',
                    'DropUq'    => 'Drop Unique Constraint',
                    'FKName'    => 'Foreign Key Name',
                    'OnUpdate'  => 'On Update',
                    'OnDelete'  => 'On Delete',
                    'Table1'    => 'Tabelle',
                    'Column1'   => 'Feld'
                    );

// strings on the accessories page
$acc_strings = array('CreateIdx' => 'Neuen Index erstellen',
                     'ModIdx'    => 'Index %s bearbeiten',
                     'Name'      => 'Name',
                     'Active'    => 'Aktiv',
                     'Unique'    => 'Unique',
                     'Sort'      => 'Sortierung',
                     'Table'     => 'Tabelle',
                     'Columns'   => 'Felder',
                     'SelIdxMod' => 'Index zum Bearbeiten ausw�hlen',
                     'SelIdxDel' => 'Index zum L�schen ausw�hlen',
                     'ColExpl'   => 'Feld(er), durch Kommas getrennt',
                     'Value'     => 'Wert',
                     'SetValue'  => 'Wert setzen',
                     'DropGen'   => 'Generator l�schen',
                     'CreateGen' => 'Neuen Generator erstellen',
                     'StartVal'  => 'Anfangswert',
                     'CreateTrig'=> 'Neuen Trigger erstellen',
                     'SelTrigMod'=> 'Trigger zum Bearbeiten ausw�hlen',
                     'SelTrigDel'=> 'Trigger zum L�schen ausw�hlen',
                     'Type'      => 'Typ',
                     'Pos'       => 'Pos',
                     'Phase'     => 'Phase',
                     'Position'  => 'Position',
                     'Status'    => 'Status',
                     'Source'    => 'Quelltext',
                     'ModTrig'   => 'Trigger %s bearbeiten',
                     'CreateDom' => 'Neue Domain erstellen',
                     'SelDomDel' => 'Domain zum L�schen ausw�hlen',
                     'SelDomMod' => 'Domain zum Bearbeiten ausw�hlen',
                     'Size'      => 'Gr��e',
                     'Charset'   => 'Zeichensatz',
                     'Collate'   => 'Vergleich',
                     'PrecShort' => 'Genau.',
                     'Scale'     => 'Skala',
                     'Subtype'   => 'Subtyp',
                     'SegSiShort'=> 'SegGr��e',
                     'ModDomain' => 'Domain %s bearbeiten',
                     'Generator' => 'der Generator',
                     'Index'     => 'der Index',
                     'Trigger'   => 'der Trigger',
                     'Domain'    => 'die Domain',
                     'CreateProc'=> 'Neue Prozedur erstellen',
                     'ModProc'   => 'Prozedur %s bearbeite,',
                     'SelProcMod'=> 'Prozedur zum Bearbeiten ausw�hlen',
                     'SelProcDel'=> 'Prozedur zu L�schen ausw�hlen',
                     'SP'        => 'die Prozedur',
                     'Param'     => 'Parameter',
                     'Return'    => 'R�ckgabe',
                     'CreateView'=> 'Neuen View erstellen',
                     'SelViewDel'=> 'View zum L�schen ausw�hlen',
                     'SelViewMod'=> 'View zum Bearbeiten ausw�hlen',
                     'CheckOpt'  => 'with check option',
                     'ModView'   => 'View %s bearbeiten',
                     'Yes'       => 'Ja',
                     'No'        => 'Nein',
                     'Module'    => 'Modul',
                     'EPoint'    => 'Eintrittspunkt',
                     'IParams'   => 'Eingabe Parameter',
                     'Returns'   => 'R�ckgabe',
                     'UDF'       => 'Benutzerfunktion',
                     'SelUdfDel' => 'Funktion zum l�schen ausw�hlen',
                     'Exception' => 'Exception',
                     'Message'   => 'Nachricht',
                     'SelExcDel' => 'Exception zum L�schen ausw�hlen',
                     'CreateExc' => 'Neue Exception erstellen',
                     'SelExcMod' => 'Exception zum L�schen ausw�hlen',
                     'ModExc'    => 'Exception %s bearbeiten'
                     );

// strings on the sql page incl. the watch table panel
$sql_strings = array('DisplBuf' => 'Anzeige eines zwischengespeicherten Resultats',
                     'SelTable' => 'Tabelle ausw�hlen',
                     'Config'   => 'Einstellungen',
                     'Column'   => 'Spalte',
                     'Show'     => 'Anzeige',
                     'Sort'     => 'Sortierung',
                     'BlobLink' => 'Blob als Link',
                     'BlobType' => 'Blob Typ',
                     'Rows'     => 'Zeilen',
                     'Start'    => 'Start',
                     'Dir'      => 'Richtung',
                     'ELinks'   => 'Bearbeiten Links',
                     'DLinks'   => 'L�schen Links',
                     'Asc'      => 'aufsteigend',
                     'Desc'     => 'absteigend',
                     'Restrict' => 'Bedingung zur Begrenzung des angezeigten Resultats, z.B. FELDNAME>=1000',
                     'Prev'     => 'Zur�ck',
                     'Next'     => 'Vor',
                     'End'      => 'Ende',
                     'Total'    => 'gesamt',
                     'Edit'     => 'bearbeiten',
                     'Delete'   => 'l�schen',
                     'Yes'      => 'Ja',
                     'No'       => 'Nein',
                     'TBInline' => 'Text Blobs Inline',
                     'TBChars'  => 'Text Blob Zeichen'
                     );

// strings on the data page
$dt_strings = array('SelTable' => 'Tabelle ausw�hlen',
                    'Table'    => 'Tabelle',
                    'EditFrom' => '%1$sBearbeiten aus Tabelle %2$s',
                    'FileName' => 'Dateiname',
                    'EntName'  => 'Namen eingaben',
                    'FileForm' => 'Dateiformat',
                    'ConvEmpty'=> 'beim Importieren wandle leere Werte zu NULL',
                    'CsvForm1' => 'alle Werte sind in Anf�hrungszeichen (") eingeschlossen und durch Kommas getrennt',
                    'CsvForm2' => 'Anf�hrungszeichen innerhalb von Werten sind verdoppelt',
                    'CsvForm3' => 'Datens�tze sind durch Zeilenvorschub (0x0a) unterteilt',
                    'ColConf'  => 'Konfiguration des Feldes %1$s',
                    'ColFKLook'=> 'Feld um Foreign Key nachzuschlagen',
                    'FKLookup' => 'Foreign Key nachschlagen',
                    'IARow'    => 'weiter Zeile einf�gen',
                    'INRow'    => 'als neue Zeile speichern',
                    'Drop'     => 'l&ouml;schen',
                    'ExpOptCsv'=> 'CSV-Data',
                    'ExpOptExt'=> 'External Table',
                    'ExpOptPhp'=> 'PHP Code',
                    'ExpOptSql'=> 'SQL',
                    'ExpOptXml'=> 'XML',
                    'ExpFmTbl' => 'Table',
                    'ExpFmDb'  => 'Database',
                    'ExpFmQry' => 'Query',
                    'ExpTgFile'=> 'File',
                    'ExpTgScr' => 'Screen',
                    'GenOpts'  => 'General Options',
                    'ReplNull' => 'Replace <i>NULL</i> values by',
                    'DFormat'  => 'Date format',
                    'TFormat'  => 'Time format',
                    'CsvOpts'  => 'CSV-Options',
                    'FTerm'    => 'Fields terminated by',
                    'FEncl'    => 'Fields enclosed by',
                    'FTEncl'   => 'Field types to enclose',
                    'All'      => 'all',
                    'Numeric'  => 'numeric',
                    'FEsc'     => 'Escape character',
                    'LTerm'    => 'Lines terminated by',
                    'FNamesF'  => 'Field names at first row'
                    );

// strings on the user page
$usr_strings = array('CreateUsr' => 'Neuen Benutzer anlegen',
                     'ModUser'   => 'Benutzer %s bearbeiten',
                     'UName'     => 'Benutzername',
                     'FName'     => 'Vorname',
                     'MName'     => 'Namenszusatz',
                     'LName'     => 'Nachname',
                     'UserID'    => 'Benutzer ID',
                     'GroupID'   => 'Gruppen ID',
                     'SysdbaPW'  => 'SYSDBA Passwort',
                     'Required'  => 'erforderlich zum Erstellen, Bearbeiten und L�schen',
                     'USelMod'   => 'Benutzer zum Bearbeiten ausw�hlen',
                     'USelDel'   => 'Benutzer zum L�schen ausw�hlen',
                     'Password'  => 'Passwort',
                     'RepeatPW'  => 'Passwort wiederholen',
                     'Name'      => 'Name',
                     'Owner'     => 'Besitzer',
                     'Members'   => 'Mitglieder',
                     'Role'      => 'Rolle',
                     'User'      => 'Benutzer',
                     'CreateRole'=> 'Neu Rolle erstellen',
                     'RoleSelDel'=> 'Rolle zum L�schen ausw�hlen',
                     'RoleAdd'   => 'zur Rolle hinzuf�gen',
                     'RoleRem'   => 'aus der Rolle entfernen',
                     'ColSet'    => 'Farbeinstellungen',
                     'CBg'       => 'Hintergrund',
                     'CPanel'    => 'Arbeitsfl�che',
                     'CArea'     => 'Hintergrund Arbeitsfl�che',
                     'CHeadline' => 'Hintergrund �berschrift',
                     'CMenubrd'  => 'Men�rahmen',
                     'CIfBorder' => 'Iframe Border',
                     'CIfBg'     => 'Iframe Background',
                     'CLink'     => 'Link',
                     'CHover'    => 'Link wenn Mouseover',
                     'CSelRow'   => 'Markierte Zeile',
                     'CSelInput' => 'Aktives Eingabefeld',
                     'CFirstRow' => 'Gerade Tabellenzeile',
                     'CSecRow'   => 'Ungerade Tabellenzeile',
                     'Appearance'=> 'Erscheinungsbild',
                     'Language'  => 'Sprache',
                     'Fontsize'  => 'Schriftgr��e in Punken',
                     'TACols'    => 'Textfeld Spalten',
                     'TARows'    => 'Textfeld Reihen',
                     'IFHeight'  => 'Iframe Height in Pixel', 
                     'Attitude'  => 'Verhalten',
                     'AskDel'    => 'Das L�schen von Objekten und Daten best�tigen',
                     'Yes'       => 'Ja',
                     'No'        => 'Nein'
                     );

// strings on the admin page
$adm_strings = array('SysdbaPW'  => 'SYSDBA Passwort',
                     'Required'  => 'erforderlich wenn du nicht der Eigent�mer der Datenbank bist',
                     'Sweeping'  => 'Aufr�umen',
                     'SetInterv' => 'Interval setzen (Anzahl Transaktionen)',
                     'DBDialect' => 'DB Dialekt',
                     'Buffers'   => 'Cache Buffer',
                     'AccessMode'=> 'Zugriffsart',
                     'WriteMode' => 'Schreibart',
                     'ReadWrite' => 'lesen/schreiben',
                     'ReadOnly'  => 'nur lesen',
                     'Sync'      => 'synchron',
                     'Async'     => 'asynchron',
                     'UseSpace'  => 'Use Space',
                     'SmallFull' => 'full',
                     'Reserve'   => 'reserve',
                     'DataRepair'=> 'Datenreparartur',
                     'Validate'  => '�berpr�fen',
                     'Full'      => 'vollst�ndig',
                     'Mend'      => 'ausbessern',
                     'NoUpdate'  => 'nicht berichtigen',
                     'IgnoreChk' => 'Checksummen-Fehler ignorieren',
                     'Transact'  => 'Transaktionen',
                     'Shutdown'  => 'Herunterfahren',
                     'Commit'    => 'Commit',
                     'Rollback'  => 'Rollback',
                     'TwoPhase'  => 'Zweiphasenkorrektur',
                     'AllLimbo'  => 'alle vergessenen Transaktionen',
                     'NoConns'   => 'keine neuen Verbindungen',
                     'NoTrans'   => 'keine neuen Tansaktionen',
                     'Force'     => 'erzwingen',
                     'ForSeconds'=> 'f�r/nach %s Sekunden',
                     'Reconnect' => 'FirebirdWebAdmin nach dem Herunterfahren wieder verbinden',
                     'Rescind'   => 'Herunterfahren abbrechen',
                     'BTarget'   => 'Sichern nach',
                     'FDName'    => 'Datei- oder Ger�tename',
                     'Options'   => 'Optionen',
                     'BConvert'  => 'externe Dateien in interne Tabellen umwandeln',
                     'BNoGC'     => 'w�hrend des Sicherns kein Aufr�umen',
                     'BIgnoreCS' => 'Checksummen ignorieren',
                     'BIgnoreLT' => 'vergessene Transaktionen ignorieren',
                     'BTransport'=> 'sichern im untransportablem Format',
                     'BMDOnly'   => 'nur Metadaten sichern',
                     'BMDOStyle' => 'Metadaten im alten Format',
                     'RSource'   => 'Wiederherstellen von',
                     'RTarget'   => 'Wiederherstellen nach',
                     'TargetDB'  => 'Ziel-Datenbank',
                     'NewFile'   => 'neu Datei erstellen',
                     'RestFile'  => 'existierende Datei ersetzen',
                     'PageSize'  => 'Seitengr��e',
                     'UseAll'    => 'beim Wiederherstellen jede Datenseite zu 100% f�llen',
                     'OneAtTime' => 'eine Tabelle zur Zeit wiederherstellen',
                     'IdxInact'  => 'w�hrend des Wiederherstellens die Indices deaktivieren',
                     'NoValidity'=> 'die G�ltigkeitsbeschr�nkungen aus den Metadaten l�schen',
                     'KillShad'  => 'vormals definiert Spiegeldateien nicht erstellen',
                     'ConnAfter' => 'FirebirdWebAdmin mit der wiederhergestellten Datenbank vebinden',
                     'Verbose'   => 'Verbose',
                     'Analyze'   => 'Analysieren'
                     );

// strings for the info-panel
$info_strings = array('Connected' => 'verbunden mit Datenbank',
                      'ExtResult' => 'Ergebnis von externem Befehl',
                      'FBError'   => 'InterBase-Fehler',
                      'ExtError'  => 'Fehler von externem Befehl',
                      'Error'     => 'Fehler',
                      'Warning'   => 'Warnmeldung',
                      'Message'   => 'Meldung',
                      'ComCall'   => 'Befehlszeile',
                      'Debug'     => 'Debug-Ausgabe',
                      'PHPError'  => 'PHP-Fehler'
                      );

$MESSAGES = array('BLOB_BROKEN_INFO'      => "Die Blob-Funktionen sind defekt (zumindest in php4.0.2 und php4.0.3).<br>\n"
                                            ."Wenn du  Blobs benutzen m�chtest, aktualisiere bitte deine php-Installation.<br>\n",
                  'SP_CREATE_INFO'        => 'FirebirdWebAdmin hat eine stored procedure mit dem Namen "'.SP_LIMIT_NAME.'", die f�r das Betrachten '
                                            ."von Tabelleinhalten benutzt wird, in deiner Datenbank gespeichert.<br>\n"
                                            .'Wenn FirebirdWebAdmin von mehreren Personen gleichzeitig verwendet wird, ist es ratsam, '
                                            ."in der Datei inc/configuration.in.php den Wert f�r WATCHTABLE_METHOD zu �ndern.<br>\n",
                  'EDIT_ADD_PRIMARY'      => "Wenn das Bearbeiten erlaubt ist, m�ssen die Primary Key Felder f�r die Anzeige in der Tabelle ausgew�hlt sein.<br>\n" 
                                            ."Die Primary Key Felder wurden deshalb der Auswahl hinzugef�gt.<br>\n",
                  'CSV_IMPORT_COUNT'      => "%1\d Zeilen wurden in die Tabelle %2\$s importiert.<br>\n",
                  'CONFIRM_TABLE_DELETE'  => 'Soll die Tabelle %s wirklich gel�scht werden?',
                  'CONFIRM_COLUMN_DELETE' => 'Soll das Feld %1$s wirklich aus der Tabelle %2$s gel�scht werden?',
                  'CONFIRM_DB_DELETE'     => 'Soll die Datenbank %s wirklich gel�scht werden?',
                  'CONFIRM_TRIGGER_DELETE'=> 'Soll der Trigger %s wirklich gel�scht werden?',
                  'CONFIRM_DOMAIN_DELETE' => 'Soll die Dom�ne %s wirklich gel�scht werden?',
                  'CONFIRM_INDEX_DELETE'  => 'Soll der Index %s wirklich gel�scht werden?',
                  'CONFIRM_GEN_DELETE'    => 'Soll der Generator %s wirklich gel�scht werden?',
                  'CONFIRM_USER_DELETE'   => 'Soll der Benutzer %s wirklich gek�scht werden?',
                  'CONFIRM_ROW_DELETE'    => 'Sollen aus der Tabelle %1$s wirklich die Zeilen gel�scht werden,<br>auf die die Bedingung %2$s pa�t?',
                  'CONFIRM_SP_DELETE'     => 'Soll die Prozedur %s wirklich gel�scht werden?',
                  'CONFIRM_VIEW_DELETE'   => 'Soll der View %s wirklich gel�scht werden?',
                  'CONFIRM_UDF_DELETE'    => 'Soll die Funktion %s wirklich gel�scht werden?',
                  'CONFIRM_EXC_DELETE'    => 'Soll die Exception %s wirklich gel�scht werden?',
                  'NO_VIEW_SUPPORT'       => "Bearbeiten von Daten aus Views wird bislang nicht unterst�tzt.<br>\n",
                  'CREATE_DB_SUCCESS'     => "Die Datenbank %s wurde erfolgreich erstellt.\n",
                  'HAVE_DEPENDENCIES'     => 'Die folgenden Datenbankobjekte m�ssen gel�scht werden, bevor %1$s %2$s gel�scht werden kann: %3$s',
                  'COOKIES_NEEDED'        => 'Die Benutzereinstellungen k�nnen nur verwendet werden, wenn in den Browser-Einstellungen die Annahme von Cookies erlaubt ist!'
                  );

$WARNINGS = array('CAN_NOT_EXPORT_BLOBS'  => "Ein oder mehrere Blob-Felder in der ausgew�hlten Tabelle werden �bergangen.<br>\n"
                                            ."Es wird nur der csv-Export von Textblobs unterst�tzt.<br>\n",
                  'CAN_NOT_IMPORT_BLOBS'  => "Ein oder mehrere Blob-Felder in der ausgew�hlten Tabelle werden �bergangen.<br>\n"
                                            ."Es wird nur der csv-Import von Textblobs unterst�tzt.<br>\n",
                  'SELECT_TABLE_FIRST'    => "Bitte zuerst eine Tabelle ausw�hlen.<br>\n",
                  'SELECT_FILE_FIRST'     => "Bitte zuerst eine Datei f�r den Import ausw�hlen.<br>\n",
                  'CAN_NOT_ALTER_DOMAINS' => "Das Bearbeiten von Feldern, die auf Dom�nen basieren, wird von Interbase nicht unterst�tzt.<br>\n"
                                            ."�ndere stattdessen die Dom�nen Definition auf der Zubeh�r Seite.<br>\n",
                  'CAN_NOT_EDIT_TABLE'    => "Bearbeiten der ausgew�hlten Tabelle ist nicht m�glich.<br>\n"
                                            ."Nur Tabelle f�r die ein Primary Key definiert ist, k�nnen bearbeitet werden.<br>\n",
                  'CAN_NOT_DEL_TABLE'     => "Das L�schen aus der ausgew�hlten Tabelle ist nicht m�glich.<br>\n"
                                            ."Nur aus Tabellen f�r die ein Primary Key definiert ist, k�nnen Zeilen gel�scht werden.<br>\n",
                  'DEL_NO_PERMISSON'      => "Du hast nicht die Erlaubnis, Daten aus der Tabelle %s zu l�schen.<br>\n",
                  'EDIT_NO_PERMISSON'     => "Du hast nicht die Erlaubnis, Daten aus der Tabelle %s zu bearbeiten.<br>\n",
                  'CAN_NOT_ACCESS_DIR'    => "Der Webserver kann nicht auf das Verzeichnis %s nicht zugreifen.<br>\n",
                  'NAME_IS_KEYWORD'       => "%s ist ein reserviertes Interbase Schl�sselwort<br>\n", 
                  'NAMES_ARE_KEYWORDS'    => "%s sind reservierte Interbase Schl�sselw�rter<br>\n",
                  'NEED_SYSDBA_PW'        => "Es wird das SYSDBA Passwort ben�tigt, um Benutzer anzulegen, zu bearbeiten oder zu l�schen<br>\n",
                  'PW_REQUIRED'           => "Bitte ein Passwort eintragen.<br>\n",
                  'UN_REQUIRED'           => "Bitte einen Benutzernamen eintragen<br>\n",
                  'PW_WRONG_REPEAT'       => "Die Wiederholung des Passwortes war fehlerhaft.<br>\n",
                  'BAD_ISQLPATH'          => "Das isql Kommando ist in %snicht vorhanden!<br>\n"
                                            ."Bitte �berpr�fe die Einstellung f�r BINPATH in inc/configuration.inc.php.<br>\n",
                  'BAD_TMPPATH'           => "Your configured TMPPATH directory '%s' didn't exist or is not writeable for the webserver process!<br>\n"
                                            ."Please check the value for TMPPATH in inc/configuration.inc.php.<br>\n"
                  );

$ERRORS   = array('CREATE_DB_FAILED'      => 'Die Datenbank <b>%s</b> konnte nicht erstellt werden!',
                  'NO_DB_SELECTED'        => 'Bitte erst eine Datenbank ausw�hlen!<br>',
                  'WRONG_DB_SUFFIX'       => 'Datenbanknamen m�ssen mit <b>%s</b>enden!',
                  'DB_NOT_ALLOWED'        => 'Der Zugriff auf <b>%s</b> ist nicht erlaubt.<br>'
                                             .'(�berpr�fe die Einstellungen f�r $ALLOWED_FILES und $ALLOWED_DIRS in inc/configuration.php)',
                  'NO_IBASE_MODULE'       => '<b>Deiner php Installation fehlt die Interbase Unterst�tzung!</b><br>'
                                            .'�bersetze php neu mit der Option "configure --with-interbase[=DIR]"<br>'
                                            .'oder bearbeite die php.ini, damit ein vorhandenes Modul interbase.so bzw. interbase.dll geladen wird.',
                  'DISABLED_CMD'          => 'Die Konfiguration verbietet sql-Anweisungen, die "%s" enthalten!',
                  'BAD_BINPATH'           => "Der Befehl <b>%s</b> kann nicht gefunden werden !\n"
                                            ."Bitte �berpr�fe die Einstellung f�r BINPATH in inc/configuration.inc.php.\n"
                  );

// charset encoding  for html output
$charset = 'iso-8859-1';

?>
