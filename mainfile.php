<?php
/**
 * This file is part of
 * pragmaMx - Web Content Management System.
 * Copyright by pragmaMx Developer Team - http://www.pragmamx.org
 *
 * pragmaMx is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * $Revision: 448 $
 * $Author: pragmamx $
 * $Date: 2017-10-17 18:48:02 +0200 (Di, 17. Okt 2017) $
 */
 
/* Nur Parsefehler melden */
error_reporting(E_PARSE);

/**
 * Ausgabepuffer auf jeden Fall starten, wird am Ende dieser Datei
 * wieder gelöscht und evtl. der ob_gzhandler gestartet
 */
ob_start();

define('PMX_VERSION', '2.4.2');


/* zu alte php-Version */
(version_compare(PHP_VERSION, '5.4.0', '>=')) or die('Sorry, PHP-Version >= 5.4.0 is required for pragmaMx '.PMX_VERSION.'.');

/* Direktaufruf verhindern */
(stripos($_SERVER['PHP_SELF'], basename(__FILE__)) === false) or die('access denied');

/* Versionsinformation */
preg_match('#([^a-z]{1,}) ([0-9\]{1,2})\s([0-9]{4})[-/]([0-9]{1,2})[-/]([0-9]{1,2})#', '$Id: mainfile.php 448 2017-10-17 16:48:02Z pragmamx $', $key);
define('PMX_VERSION_NUM', PMX_VERSION . ".".substr($key[1],1,3));
define('PMX_VERSION_DATE', "$key[2]-$key[3]-$key[4]");

/* Versionsinformation Ende */

$keysToSkip = array('GLOBALS', '_SERVER', '_GET', '_POST', '_FILES', '_COOKIE', '_SESSION', '_REQUEST', '_ENV', 'PHP_SELF', 'keysToSkip', 'php_errormsg', 'HTTP_RAW_POST_DATA', 'http_response_header', 'argc', 'argv');
foreach ($_REQUEST as $key => $value) {
    /* pruefen ob gueltiger Schluessel, ansonsten komplett entfernen */
    if (preg_match('#[^a-zA-Z0-9-_\x7f-\xff]#', $key)) {
        unset($_REQUEST[$key], $_COOKIE[$key], $_GET[$key], $_POST[$key]);
        continue;
    }
    /* killt Variablen, die bei register_globals=ON uebergeben werden koennten */
    if (in_array($key, $keysToSkip)) {
        die('unaccepted requestkey: ' . $key);
    }
    unset($$key);
}
unset($key, $value, $keysToSkip);

/* falls die Datei bereits includet wurde, abbrechen */
if (defined('PMX')) {
    return;
}

/* ich bin da... */
define('PMX', true);
define('mxMainFileLoaded', true);

/* Benchmarkanzeige initialisieren */
defined('MX_TIME') OR define('MX_TIME', microtime(true));

defined('ENT_HTML5') OR define('ENT_HTML5', 16 | 32);

/* Kurzform dieser System-Konstanten erstellen */
define('DS', DIRECTORY_SEPARATOR);

/* der wichtigste Pfad: zum mx-Root, ohne Slash am Ende */
define('PMX_REAL_BASE_DIR', __DIR__);

/* Ordner mit den Systemdateien, weitere Ordner werden in der mx_baseconfig definiert */
define('PMX_SYSTEM_DIR', PMX_REAL_BASE_DIR . DS . 'includes');

/* Ordner mit den Administrationsdateien */
define('PMX_ADMIN_DIR', PMX_REAL_BASE_DIR . DS . 'admin');

/* Ordner mit den Administrations Modulen */
define('PMX_ADMINMODULES_DIR', PMX_ADMIN_DIR . DS . 'modules');

/* Ordner mit dynamischen Inhalten (Logdatein, Cache, etc.) */
define('PMX_DYNADATA_DIR', PMX_REAL_BASE_DIR . DS . 'dynadata');

/* Ordner mit dynamischen Medien (Bilder, Dokumente, etc.) */
define('PMX_MEDIA_DIR', PMX_REAL_BASE_DIR . DS . 'media');

/* Ordner mit den Systemdateien fuer die HTML-Ausgabe (view) */
define('PMX_LAYOUT_DIR', PMX_REAL_BASE_DIR . DS . 'layout');

/* Ordner mit den Modulen */
define('PMX_MODULES_DIR', PMX_REAL_BASE_DIR . DS . 'modules');

/* Ordner mit den Plugins */
define('PMX_PLUGINS_DIR', PMX_REAL_BASE_DIR . DS . 'plugins');

/* Ordner mit den System-Bloecken */
define('PMX_BLOCKS_DIR', PMX_REAL_BASE_DIR . DS . 'blocks');

/* Ordner mit den Themes */
define('PMX_THEMES_DIR', PMX_REAL_BASE_DIR . DS . 'themes');

/* Ordner mit den Bildchen */
define('PMX_IMAGE_DIR', PMX_REAL_BASE_DIR . DS . 'images');

/* Ordner mit den Systemsprachen */
define('PMX_LANGUAGE_DIR', PMX_REAL_BASE_DIR . DS . 'language');

/* Ordner mit den Themes */
define('PMX_SETUP_DIR', PMX_REAL_BASE_DIR . DS . 'setup');

/* Ordner mit den Plugins */
define('PMX_PLUGIN_DIR', PMX_REAL_BASE_DIR . DS . 'plugins');

/* Ordner mit Standard Javascripten */
define('PMX_JAVASCRIPT_DIR', PMX_SYSTEM_DIR . DS . 'javascript');



	$info_script_name = pathinfo($_SERVER['SCRIPT_NAME']);
	$scriptpath = str_replace(DS, '/', realpath(dirname($_SERVER['SCRIPT_FILENAME'])));
	$basepath = str_replace(DS, '/', PMX_REAL_BASE_DIR);

	/* just the subfolder part between <installation_path> and the page */
	$scriptpath = substr($scriptpath, strlen($basepath));
	/* neu, da subst unter PHP7 anders funktioniert */
	$scriptpath =($scriptpath=="")?FALSE:$scriptpath;

	$rootpath = str_replace(DS, '/', $info_script_name['dirname']);
	
/*we subtract the subfolder part from the end of <installation_path>, leaving us with just <installation_path> :)*/
if ($scriptpath !== false) {
	$rootpath = str_replace('//', '/', substr($rootpath, 0, - strlen($scriptpath)) . '/');
	$scriptpath = trim($scriptpath, '/') . '/';
} else {
	$rootpath = str_replace('//', '/', $rootpath . '/');
	$scriptpath = '';
}


/* jetzt der wichtigste Pfad: zum mx-Root */
define('PMX_BASE_PATH', $rootpath);

/* sonstige Einstellungen vornehmen */
ini_set('gpc_order', 'GPCS'); // ohne Environment, kann über getenv() abgefragt werden


/* alles auf utf8 stellen */
ini_set('default_charset', 'UTF-8');

/**
 * Alle Fehler ausser E_NOTICE melden,
 * dies ist die Standardeinstellung in php.ini
 */
error_reporting(E_ALL ^ E_NOTICE);

/* System-Funktionen laden  */
require_once(PMX_SYSTEM_DIR . DS . 'mx_system.php');

/* Konfiguration laden */

if (file_exists(PMX_REAL_BASE_DIR . DS . 'custom.config.php')) include (PMX_REAL_BASE_DIR . DS . 'custom.config.php');


/* die Systemkonfigurationsdatei definieren*/
defined('PMX_CONFIGFILE') or define('PMX_CONFIGFILE' , PMX_REAL_BASE_DIR . DS . 'config.php');

/* Parsefehler in config.php abfangen und bei Bedarf Setup anbieten. */
if (!@include(PMX_CONFIGFILE)) {

    if (@file_exists('setup') && !is_file(PMX_CONFIGFILE)) {
		$url="http://".$_SERVER['SERVER_NAME']."/".basename(dirname($_SERVER['PHP_SELF'])).'/setup/index.php';
		//$url=str_replace("//","/",$url);
		header('Location: ' .$url);
        die();
		exit;
    } else {
		header('Content-type: text/html; charset=utf-8');
		$msg = '
        <!doctype html>
        <html>
        <head>
        <meta charset="utf-8" />
        <title>ERROR</title>
        <style>
        body{background-color:#2D2D2D;font-family:Helvetica,Arial,sans-serif;font-size:10pt;padding-top:50px;text-align:left}a{color:#666;text-decoration:none}a:hover{text-decoration:underline}.container{margin:auto;max-width:540px;min-width:200px}.box hr{diplay:block;border:none;border-bottom:1px dashed #ccc}.box{background-color:#fbfbfb;border: 10px solid #424242;
  box-shadow: #000000 0 0 10px 0;padding:20px}.box h1,.box h2{display:block;text-align:center}.box h1{color:maroon;font-weight:400;font-size:50px;padding:0;margin:0;margin-top:10px;line-height:50px}.box h2{color:#666;font-weight:400;font-size:1.5em}.box p{display:block;margin-bottom:10px}.box ul li{margin-bottom:7px}
        </style>
        </head>

            <body>
                <div class="container">
                    <div class="box">
                        <h1>ERROR</h1>
                        <h2>config.php</h2>
                        <hr />
                        <ul>
		                  <li>The config-file is missing or corrupted!</li>
		                  <li>Die Konfigurationsdatei fehlt oder ist besch&auml;digt!</li>
		                  <li>Le fichier config.php est absent ou corrompu!</li>
		                  <li>Ayar dosyas&#305; eksik veya hatal&#305;!</li>
	                   </ul>
                    </div>
                </div>
            </body>
        </html>';
		die($msg);
    }
    
    
}
/* Konfiguration in Klasse einlesen  - macht globals überflüssig */
load_class('Base',$mxConf);  

/* Brücke für UTF-8 relevante String-Funktionen  */
define('UTF8', PMX_SYSTEM_DIR . DS . 'utf8');

/*  API's einbinden */

require_once(PMX_SYSTEM_DIR . DS . 'mx_includes.php');

/* Länderspezifische Einstellungen, wird teilweise durch die Einstellung der Sprachdateien überschrieben */
setlocale(LC_ALL, array('en_GB.UTF-8', 'en_GB.UTF8', 'en_GB.ISO-8859-1', 'en_GB', 'en_US', 'en', 'eng', 'english-uk', 'english-us', 'uk', 'us', 'GB', 'GBR', '826', 'CTRY_UNITED_KINGDOM', '840', 'CTRY_UNITED_STATES'));
/* Standardzeitzone, die von allen Zeitfunktionen verwendet wird, einstellen  */
date_default_timezone_set($default_timezone);


/* nur wenn die mod.php aufgerufen wurde ist die Funktion aus der mx_modrewrite.php */
/* hier bereits vorhanden, dann die uebergabeparameter aus der mod.php behandeln. */
if (defined('PMXMODREWRITE')) {
    load_class('Modrewrite', false);
    pmxModrewrite::undo();
}

/* Systemkonstanten definieren, diese Datei kann in gewissem Masse angepasst werden */
require_once(PMX_SYSTEM_DIR . DS . 'mx_baseconfig.php');

/* Fehlerbehandlung und Debugmethoden aktivieren */
load_class('Debug', false);
pmxDebug::init();

/* Datenbankverbindung herstellen */

if (!(pmxBase::get('dbconnect'))) pmxBase::set('dbconnect',0);

require_once(PMX_SYSTEM_DIR . DS . 'mx_database.php');
$dbi = sql_system_connect();

// pmxBase::set('dbi',$dbi);

if (is_null($dbi)) {
    die('Selection from database failed - please check the settings!');
}

/* auf aktuelle MySQL-Version pruefen */
if (version_compare(MX_SQL_VERSION, '5.0.33', '<')) {
    die('Sorry, MySQL-Version >= 5.0.33 is required for pragmaMx. Your MySQL-Version is :' .MX_SQL_VERSION);
}


/* Session starten */
require_once(PMX_SYSTEM_DIR . DS . 'mx_session.php');
if (!mxSessionStart()) {
    die('Session: initialisation failed');
}

/* letzte URL abfragen, diese wird nur in der header.php aktualisiert */
define('PMX_REFERER', mxSessionGetVar('lasturl'));

/* Detection System starten */
if ($vkpSafeSqlinject) {
    require_once(PMX_SYSTEM_DIR . DS . 'mx_detect.php');
    pmxDetect::check_banning();
    pmxDetect::start();
}

/* Userberechtigungen */
pmxUserStored::init();

/* Fehlerbehandlung und Debugmethoden aktivieren */
pmxDebug::start();

load_class('Header', false);

/**
 * restrictor von http://www.bot-trap.de/
 */
if (@file_exists(PMX_REAL_BASE_DIR . DS . 'restrictor' . DS . 'bridge.php')) {
    @include_once(PMX_REAL_BASE_DIR . DS . 'restrictor' . DS . 'bridge.php');
}

/**
 * Superglobals zwischenspeichern, fuer Module, die eine eigene Behandlung
 * der Superglobals vorsehen
 */
$_MX_UNCLEAN_GET = $_GET;
$_MX_UNCLEAN_POST = $_POST;
$_MX_UNCLEAN_COOKIE = $_COOKIE;
$_MX_UNCLEAN_FILES = $_FILES;
$_MX_UNCLEAN_SERVER = $_SERVER;

/**
 * - simuliert magic_quotes_gpc=1
 * - ersetzt bestimmte Sonderzeichen durch ihren HTML-Code
 */
$_GET = mxSecureValue($_GET, true);
$_POST = mxSecureValue($_POST, false);
$_COOKIE = mxSecureValue($_COOKIE, true);
$_SERVER = mxSecureValue($_SERVER, true); // $_GET in query_string etc.

if (count($_FILES) && !empty($_FILES)) {
    foreach ($_FILES as $upfile => $upfile_data) {
        if (is_array($upfile_data['name'])) {
            foreach ($upfile_data['name'] as $key => $upfile_name) {
                $_FILES[$upfile]['name'][$key] = mxSecureValue($upfile_name, true);
            }
        } else {
            $_FILES[$upfile]['name'] = mxSecureValue($upfile_data['name'], true);
        }
    }
    unset($upfile, $upfile_name, $upfile_data);
}

/* Speicher aufräumen */
unset($key);
if (!$mxSiteService) {
    unset($mxSiteServiceText);
}
if (MX_IS_USER) {
    mxSessionDelVar('vkpnewuser');
}
// neue globale Request-Variablen erstellen
$_REQUEST = array_merge($_GET, $_POST); /// ohne Cookie, weil unnoetig
// die jetzt fertig behandelten Request-Variablen in den globalen Scope schreiben
// TODO: der Schwachsinn muss raus !!!
    extract($_REQUEST, EXTR_SKIP);

/* neue globale Server-Variablen erstellen, falls register_globals aus */
if (!mxIniGet('register_globals')) {
    // TODO: der Schwachsinn muss raus !!!
    //extract($_SERVER, EXTR_OVERWRITE);
}

/**
 * ENDE ... simuliert magic_quotes_gpc=1...
 */

/* Sprache einstellen */
load_class('Language', false);
$langinstance = pmxLanguage::instance();

pmxBase::set("currentlang",$langinstance->current);
/* abwärtskompatibilität */
$currentlang = pmxBase::currentlang();
$GLOBALS['language_avalaible'] = mxGetAvailableLanguages();

setlocale(LC_TIME, _SETLOCALE);
setlocale(LC_COLLATE, _SETLOCALE);
setlocale(LC_MONETARY, _SETLOCALE);

/* Seitentitel vorbelegen */
$pagetitle = '';

/* Theme definieren */

switch (true) {
	case pmxBase::setmobile()==false:
		$mobile_device=false;
		break;
	case array_key_exists('thememobile',$_GET):
		$mobile_device=true;
		mxSessionSetVar("mobiletheme",true);
		break;
	case array_key_exists('themenomobile',$_GET):
		$mobile_device=false;
		mxSessionSetVar("mobiletheme",false);
		break;
	default:
		$mobile_device=pmxGetMobileDevice();//(mxSessionGetVar("mobiletheme",0)==0)?pmxGetMobileDevice():mxSessionGetVar("mobiletheme",false);
		break;
}

define('MX_MOBILE_DEVICE', $mobile_device);
define('MX_THEME', mxGetTheme());
define('MX_THEME_DIR', 'themes/' . MX_THEME);

/* Referer aktualisieren */
//rem for nanomx mxReferer();

/* Bannfunktion ausfuehren */
vkpIpBanning();

/**
 * output-handling
 * falls bereits ausgaben erfolgt, diese zwischenspeichern und Puffer beenden
 */
$obtemp = trim(@ob_get_clean());

/* Pufferhandler ermitteln */
$mxoutputhandler = mxGetOutputHandler();

/* Ausgabepuffer starten und evtl. Ausgabe komprimieren */
ob_implicit_flush(0);
if ($mxoutputhandler) {
    ob_start($mxoutputhandler);
}
unset($mxoutputhandler);

/*
 * Ausgabepuffer auf jeden Fall ein 2tes mal starten, dass bei Fehlern, die Ausgabe,
 * auch erst am Ende des scripts in den komprimierten Handler geschrieben werden
 * dies verhindert fruehzeitiges senden von HTTP-Headern (session)
 */
ob_start();

/* evtl. bereits vorhandene zwischengespeicherte Ausgaben jetzt erst ausgeben */
if (!empty($obtemp)) {
    echo $obtemp;
}
unset($obtemp);

?>