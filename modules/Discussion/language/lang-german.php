<?php
/**
 * mxBoard, pragmaMx Module
 * Copyright by pragmaMx Developer Team - http://www.pragmamx.org
 *
 * $Author: PragmaMx $
 * $Revision: 30 $
 * $Date: 2015-07-23 13:11:26 +0200 (jeu. 23 juil. 2015) $
 *
 * based on mxBoard v1.1, rewrite and modified by
 * vkpMx-Developer-Team (http://www.maax-design.de)
 * Original source-code made by the XMB-team
 * (XMB-Forum, http://www.xmbforum.com), modified for nukestyle-systems
 * by Trollix (XForum, http://www.trollix.com).
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 */


defined('mxMainFileLoaded') or die('access denied');

if (defined('MXB_LANGFILE_INCLUDED')) return true;
define('MXB_LANGFILE_INCLUDED', true);

define("_LASTREPLY1", "am");
define("_TEXTAT", "um");
define("_TEXTSUBJECT", "Betreff:");
// define("_TEXTAUTHOR", "Autor:");
// define("_TEXTREPLIES", "Antworten:");
// define("_TEXTVIEWS", "Views:");
define("_TEXTLASTPOST", "Letzter Beitrag:");
define("_TEXTPOSTON", "erstellt am:");
define("_TEXTUSERNAME", "Username:");
define("_TEXTPASSWORD", "Password:");
define("_TEXTEMAIL", "E-Mail:");
define("_TEXTSITE", "Page:");
define("_TEXTVIEWPRO", "Profil anzeigen");
define("_TEXTICON", "Symbol:");
define("_TEXTMESSAGE", "Beitragstext:");
define("_POSTMSG", "Danke, Ihr Beitrag wurde gesendet. Sie werden nun zurück zur Themenansicht geleitet.");
define("_REPLYMSG", "Danke, Ihr Beitrag wurde gesendet. Sie werden nun wieder zurück zur Themenansicht geleitet.");
define("_TEXTNEVER", "Nie");
define("_TEXTREGISTER", "Registrieren");
define("_TEXTMEMBERLIST", "Mitgliederliste");
define("_TEXTREGISTERED", "Registriert:");
define("_TEXTPWINCORRECT", "Falsches Passwort");
define("_TEXTPOSTNEW", "Neues Thema");
define("_TEXTPOSTREPLY", "Antworten");
// define("_TEXTPOSTS", "Beiträge:");
define("_PWNOMATCH", "Die Passwörter stimmen nicht überein.");
define("_NOMEMBER", "Kein Mitglied gewählt");
define("_OPENTOPIC", "Ein offenes Thema");
define("_HOTTOPIC", "mehr als %d Antworten");
define("_LOCKTOPIC", "Ein geschlossenes Thema");
define("_TEXTEDITPRO", "Profil bearbeiten");
define("_TEXTPROFILE", "Profil");
define("_EDITEDPRO", "Ihr Profil wurde aktualisiert. Sie werden nun zurück zur Forenansicht geleitet.");
define("_TEXTAIM", "AIM:");
define("_LOGGEDIN", "Sie sind eingeloggt als");
define("_NOTLOGGEDIN", "Sie sind nicht eingeloggt");
define("_TEXTLOCATION", "Location:");
define("_TEXTBIO", "weitere Informationen:");
define("_TEXTCP", "Administration");
define("_NOTADMIN", "Sorry, Sie besitzen keine Administrationsrechte in diesem Forum.");
define("_TEXTSETTINGS", "Einstellungen");
define("_TEXTLANGUAGE", "Sprache:"); 
define("_TEXTBBNAME", "Forumname:");
define("_TEXTPPP", "Beiträge pro Seite:");
define("_TEXTHOTTOPIC", "Anzahl an Antworten für &quot;heisse&quot; Themen:");
define("_TEXTSUBMITCHANGES", "Veränderungen senden");
define("_TEXTSETTINGSUPDATE", "Einstellungen gespeichert!");
define("_TEXTFORUMS", "Foren");
// define("_TEXTINDEX", "Forumsübersicht");
define("_TEXTNEWFORUM", "Neues Forum:");
define("_TEXTFORUMUPDATE", "Foren wurden aktualisiert!");
// define("_TEXTSEARCH", "Suchen");
define("_TEXTSRCHUNAME", "nach Username:");
define("_NORESULTS", "Kein Treffer");
define("_TEXTSIG", "Signatur:");
define("_TEXTDISSMILEYS", "Smileys deaktivieren?");
define("_TEXTUSESIG", "Signatur senden?");
define("_TEXTSHOWEMAIL", "E-mail-Adresse anderen zeigen?");
define("_TEXTOPTIONS", "Optionen:");
define("_TEXTTHEME", "Theme:");
define("_TEXTMODS", "Moderatoren");
define("_MULTMODNOTE", "Um mehrere Moderatoren zu verwenden, die Namen einfach per Kommata trennen (z.B.: webfr34k, Testman, someothermod)");
define("_TEXTMODUPDATE", "Moderatoren aktualisiert!");
define("_EVALINDEXSTATS", 'define("_INDEXSTATS","<b>$posts</b> Beiträge in <b>$threads</b> Themen von <b>$members</b> Mitglieder.");');
define("_STATS41", "Neuestes Mitglied:");
define("_TEXTTPP", "Themen pro Seite:");
define("_TEXTForumslogo", "Forumslogo URL: (leerlassen um kein Logo zu verwenden)");
define("_TEXTEDITPOST", "Beitrag editieren");
define("_EDITPOSTMSG", "Der Beitrag wurde editiert. Sie werden nun zurück zur Themenansicht geleitet");
define("_TEXTDELETE", "! Beitrag löschen !");
define("_NOEDIT", "Sorry, Sie können diesen Beitrag nicht editieren oder löschen.");
define("_TEXTSTATUSXF", "Forums-Status:");
define("_TEXTSTATUS", "Status:");
define("_TEXTDELETETHREAD", "Thema löschen");
define("_TEXTNOACTION", "Sorry, es ist Ihnen nicht erlaubt diese Aktion durchzuführen");
define("_DELETETHREADMSG", "Das Thema wurde gelöscht. Sie werden nun zurück zur Forenansicht geleitet");
// define("_TEXTMEMBERS", "Mitglieder");
define("_TEXTFORUM", "Forum:");
define("_TEXTMODERATOR", "Moderator:");
// define("_TEXTTOPICS", "Themen:");
define("_TEXTVALUE", "Wert:");
define("_TEXTSETTING", "Einstellung:");
define("_TEXTDELETEQUES", "Löschen?");
define("_TEXTORDER", "Reihenfolge:");
define("_TEXTFORUMNAME", "Forumname:");
define("_TEXTPRIVQUES", "Privat?");
define("_PRIVFORUMMSG", "Sorry, Sie sind nicht berechtigt dieses Forum zu betreten.");
define("_TEXTTHEMES", "Themes");
define("_TEXTTHEMENAME", "Themename:");
define("_TEXTDEFAULT", "Standard");
define("_TEXTTHEMEUPDATE", "Themes aktualisiert!");
define("_TEXTDETAILS", "Details");
define("_TEXTHEMENAME", "Themename:");
define("_TEXTBGCOLOR", "Hintergrundfarbe:");
define("_TEXTALTBG1", "Wechselfarbe #1:");
define("_TEXTALTBG2", "Wechselfarbe #2:");
define("_TEXTLINKXF", "Linkfarbe:");
define("_TEXTBORDER", "Randfarbe:");
define("_TEXTBORDERWIDTH", "Randbreite:");
define("_TEXTHEADER", "Kopffarbe:");
define("_TEXTHEADERTEXT", "Kopftextfarbe:");
define("_TEXTTOP", "Forumskopffarbe:");
define("_TEXTCATCOLOR", "Kategorienfarbe:");
define("_TEXTTABLETEXT", "Tabellentextfarbe:");
// define("_TEXTNEWTOPIC", "Neues Thema");
define("_TEXTDESC", "Beschreibung:");
define("_TEXTTEXT", "Textfarbe:");
define("_TEXTNEWTHEME", "Neues Theme");
define("_TEXTMODBY", "Moderiert von:");
define("_LASTACTIVE", "Als letztes aktiv:");
define("_BADNAME", "Ungültiger Username");
define("_TEXTICQ", "ICQ:");
define("_TEXTFAQ", "FAQ");
define("_TEXTSMILIES", "Smilies");
define("_TEXTBBCODE", "BB Code");
define("_BBCODEINFO", "Sie können BB-Code, eine vereinfachte HTML-Version, in Ihren Beiträgen nutzen um verschiedene Effekte zu kreieren.<br /><br />
[b]Text hier[/b] &nbsp; <b>Text hier</b> (Dicker Text)<br /><br />
[i]Text hier[/i] &nbsp; <i>Text hier</i> (Schräger Text)<br /><br />
[u]Text hier[/u] &nbsp; <span style=\"text-decoration: underline;\">Text hier</span> (Understrichener Text)<br /><br />
[url]http://www.php.net[/url] &nbsp; <a href=\"http://www.php.net\">http://www.php.net</a> (Link)<br /><br />
[url=http://www.php.net]Homepage von PHP[/url] &nbsp; <a href=\"http://www.php.net\">Homepage von PHP</a> (Link)<br /><br />
[email]nh@xmbforum.com[/email] &nbsp; <a href=\"mailto:nh@xmbforum.com\">nh@xmbforum.com</a> (E-Mail Link)<br /><br />
[email=nh@xmbforum.com]E-mail Me![/email] &nbsp; <a href=\"mailto:nh@xmbforum.com\">E-mail Me!</a> (E-Mail Link)<br /><br />
[quote]Text hier[/quote] &nbsp; <blockquote><small>quote:</small><hr />Text hier<hr /></blockquote> (Zitierter Text)<br /><br />
[img]http://www.php.net/images/logos/php-med-trans-light.gif[/img] &nbsp; <img src=\"http://www.php.net/images/logos/php-med-trans-light.gif\" /> (Bild)<br /><br />
[img=50x50]http://www.php.net/images/logos/php-med-trans-light.gif[/img] &nbsp; <img src=\"http://www.php.net/images/logos/php-med-trans-light.gif\" height=\"50\" width=\"50\" /> (In der Grösse verändertes Bild)
<br /><br />[color=red]Diese Farbe ist rot[/color] &nbsp; <font color=\"red\">Diese Farbe ist rot</font> (Farbiger Text)<br /><br />
[size=3]Diese Schriftgrösse ist 3[/size] &nbsp; <font class=\"title\">Diese Schriftgrösse ist 3</font> (Vergrösserter Text)<br /><br />
[font=Tahoma]Dieser Font ist Tahoma[/font] &nbsp; <font face=\"Tahoma\">Dieser Font ist Tahoma</font> (Anderer Font)<br /><br />
[align=Center]Das ist zentriert[/align] &nbsp; <p align=\"center\">Das ist zentriert</p> (Angeordneter Text)<br /><br />");
define("_CLOSEDMSG", "Sorry, dieses Thema ist geschlossen. Neue Antworten sind nicht möglich.");
define("_TEXTCLOSETHREAD", "Thema schliessen");
define("_CLOSETHREADMSG", "Dieses Thema wurde geschlossen/geöffnet. Sie werden nun zurück zur Themenansicht geleitet");
define("_TEXTOPENTHREAD", "Thema öffnen");
define("_TEXTFROM", "Von:");
define("_TEXTSENT", "Geschickt:");
define("_TEXTSENTON", "Geschickt am");
define("_TEXTMOVETHREAD", "Thema verschieben");
define("_TEXTMOVETO", "Thema verschieben nach:");
define("_MOVETHREADMSG", "Dieses Thema wurde verschoben. Sie werden nun zurück zur Themenansicht geleitet.");
define("_NOPOSTS", "Es gibt keine Themen in diesem Forum");
define("_TEXTYOU", "Sie");
define("_TEXTTO", "Nach:");
define("_TEXTBY", "von");
define("_TEXTADMIN", "Administrator");
define("_TEXTMOD", "Moderator");
define("_TEXTMEM", "normales Mitglied");
// define("_TEXTAVATAR", "Avatar:");
define("_TEXTNONE", "Ohne Zuordnung");
define("_NEWPOSTS", "Neue Beiträge in diesem Forum seit dem letzten Besuch");
define("_NONEWPOSTS", "Keine neuen Beiträge in diesem Forum seit dem letzten Besuch");
define("_CLOSEDNOTE", "Sorry, dieses Forum ist zur Zeit geschlossen.");
define("_OPENNEW", "Ein offenes Thema mit neuen Antworten");
define("_TEXTBSTATUS", "Forumstatus:");
define("_TEXTON", "An");
define("_TEXTOFF", "Aus");
define("_SRCHBYFORUM", "in dem Forum:");
define("_TEXTALL", "Alle");
// define("_WHOSONLINE", "Wer ist online");
// define("_WHOSONLINE1", "Es ist/sind");
// define("_WHOSONLINE2", "Besucher und");
// define("_WHOSONLINE3", "Mitglieder online.");
define("_ONSTATUS", "Onlinestatus:");
define("_TEXTONLINE", "Online");
define("_TEXTOFFLINE", "Offline");
define("_MEMPOSTS", "Beiträge");
define("_MEMREG", "Registrierungsdatum");
define("_MEMNAME", "Username");
define("_ORDERBY", "Sortieren nach:");
define("_WHOSONLINE_ON", "'Wer ist online' in Forumsübersicht anzeigen:");
define("_TEXTPREVIEW", "Vorschau");
define("_TEXTNOSUBJECT", "Sie haben kein Betreff angegeben.");
define("_TEXTGO", "Wechseln");
define("_TEXTFJUMP", "Forumsprung:");
define("_TEXTTOPTHREAD", "Thema fixieren");
define("_TEXTUNTOPTHREAD", "Thema-Fixierung aufheben");
define("_TOPTHREADMSG", "Sie haben dieses Thema fixiert/defixiert. Sie werden nun zurück zur Themenansicht geleitet");
define("_TEXTYESIP", "Dieser User hatte die IP");
define("_TEXTNOIP", "Sie können die IP nicht einsehen.");
define("_TEXTGETIP", "IP anzeigen");
define("_TEXTYAHOO", "Yahoo:");
define("_TEXTSMILIEUPDATE", "Smilies aktualisiert");
define("_TEXTSMILIECODE", "Code");
define("_TEXTSMILIEURL", "URL");
define("_TEXTNEWSMILIE", "Neuer Smilie");
define("_BBCODEOFF", "BBCode ausschalten?");
define("_SEARCHUSERMSG", "Nach allen Beiträgen dieses Users suchen");
define("_VIEWALLMEM", "Alle Mitglieder anzeigen");
define("_DELETEBUTTON", "Löschen");
define("_TEXTSENDTO", "Senden an:");
define("_REG_ON", "Userregistrationen erlauben");
define("_TEXTBBOFFREASON", "Wenn das Forum deaktiviert ist, bitte einen Grund dafür angeben");
define("_TEXTBBOFFNOTE", "dieses Forum ist z.Zt. nich verfügbar, da:");
define("_TEXTNOSUB", "kein Betreff");
define("_TEXTSORTBY", "Sortieren nach:");
define("_TEXTPOSTNUM", "Anzahl der Beiträge");
define("_TEXTALPHA", "Alphabetisch");
define("_TEXTREGDATE", "Registrierungsdatum");
define("_TEXTHTMLIS", "HTML ist");
define("_TEXTSMILIESARE", "Smilies sind");
define("_TEXTBBCODEIS", "BB Code ist");
define("_TEXTBBCODEFIND", "Finde");
define("_TEXTBBCODEREPLACE", "Ersetze durch");
define("_TEXTCENSORFIND", "Finde");
define("_TEXTCENSORREPLACE", "Ersetze durch");
define("_TEXTCENSORUPDATE", "Zensierte Wörter aktualisiert!");
define("_TEXTALLOW", "Erlaube:");
define("_TEXTHTML", "HTML");
define("_TEXTCENSORS", "Zensuren");
define("_TEXTCUSSTATUS", "Eigener Status:");
define("_TEXTUSERRANKS", "Userranks");
define("_TEXTNEWRANK", "Neuer Rank:");
define("_TEXTRANKINGSUPDATE", "Userränge aktualisiert!");
define("_TEXTMEMBERSUPDATE", "Mitglieder aktualisiert!");
define("_TEXTSEARCHFOR", "Suchen nach:");
define("_TEXTBANNED", "Gebannt");
define("_REGGEDONLY", "Um diese Foren anzeigen zu können müssen Sie auf dem System registriert sein.");
define("_TEXTREGGEDONLY", "Nur registrierten Benutzern erlauben dieses Forum anzuzeigen?");
define("_TEXTOR", "oder");
define("_TOPPEDPREFIX", "fixiertes Thema");
define("_TEXTSTARS", "Sterne:");
define("_SMILIESLIST", "Smileyliste");
define("_TEXTCLICKTOINSERT", "Auf einen Smiley klicken, um ihn in den Beitrag einzufügen.");
define("_TEXTEDITON", "Editiert am");
define("_TEXTFLOOD", "Wartesekunden bevor der nächste Beitrag gesendet werden kann (Flood-Kontrolle)");
define("_FLOODPROTECT", "Ihr letzter Beitrag war weniger als %d Sekunden her und Sie sind nicht berechtigt, so schnell einen weiteren Beitrag zu schreiben. Wenn Sie aus Versehen ein Doppelpost gemacht haben, der erste Beitrag wurde eingetragen, nur Ihr zweiter Beitrag wurde gestoppt.");
define("_TOCONT", "um fortzufahren.");
define("_SHOWTOPICS", "Zeige Themen des/der");
define("_DAY1", "letzten Tag");
define("_DAY5", "letzten 5 Tage");
define("_DAY15", "letzten 15 Tage");
define("_DAY30", "letzen 30 Tage");
define("_DAY60", "letzten 60 Tage");
define("_DAY100", "letzten 100 Tage");
define("_LASTYEAR", "letzten Jahr");
define("_BEGINNING", "Beginn");
define("_SORTBY", " und sortiere sie ");
define("_ASC", "aufsteigen");
define("_DESC", "absteigend");
define("_UNREG", "Gast");
define("_TEXTSUPERMOD", "Super Moderator");
define("_TEXTMPP", "Mitglieder pro Seite");
define("_BUMPTHREADMSG", "Das Lastpost des Themas wurde aktualisiert. Sie werden nun zurück zur Themenansicht geleitet");
define("_TEXTBUMPTHREAD", "Beitragszeit aktualisieren");
define("_TEXTREPLY", "Antwort");
// define("_TEXTCATSONLY", "Nur Kategorien auf der Hauptseite anzeigen?");
define("_TEXTHIDEPRIV", "Private Foren vor nichtberechtigten Usern verstecken?");
define("_TEXTSRCHUSR", "Nach User suchen:");
define("_TEXTSHOWSORT", "Sortieroption bei der Forenansicht zeigen?");
define("_TEXTTOPIC", "Thema");
define("_TEXTPRINTVER", "Druckerversion");
define("_NEXTTHREAD", "nächstes");
define("_LASTTHREAD", "vorheriges");
// define("_TEXTALLOWAVATARS", "Avatare:");
define("_REGQUES", "");
define("_TEXTSUBMIT", "Abschicken");
define("_TEXTGUEST", "Anonymous");
define("_TEXTGUESTPOSTING", "Anonyme Beiträge?");
define("_EMAILVERIFY", "E-Mail Verifikation (Zufallspasswort schicken)?");
define("_TEXTNEWSLETTER", "Newsletter");
define("_TEXTNEWSLETTERSUBMIT", "Dein Newsletter wurde abgeschickt");
define("_TEXTGETNEWS", "Newsletter vom Admin empfangen?");
define("_TEXTOFTOTPOSTS", "von allen Beiträgen");
define("_TEXTMESPERDAY", "Beiträge pro Tag");
define("_TEXTPROFOR", "Profil von");
define("_BANNEDMESSAGE", "Sie sind verbannt aus diesem Forum. Sie können keine Foren mehr einsehen, keine neuen Beiträge posten und keine Themen erstellen.");
define("_TEXTNOFORUM", "Das gewählte Forum existiert nicht.");
define("_TEXTNOTHREAD", "Das gewählte Thema existiert nicht.");
define("_TEXTBBRULES", "Forumsregeln:");
define("_TEXTBBRULESTXT", "Forumsregeln, falls aktiviert:");
define("_TEXTAGREE", "Einverstanden");
define("_TEXTTOPICREVIEW", "bisherige Beiträge");
define("_EVALTREVLT", 'define("_TREVLTMSG","Dies ist ein langes Thema, klicke <a href=\"$threadlink\">hier</a> um es anzusehen.");');
define("_TEXTPRIV", "Privat");
define("_TEXTTIME", "Zeit:");
define("_TEXTGUEST1", "Besucher");
define("_TEXTPREVIOUS", "Zurück");
define("_TEXTUPGRADE", "Upgrade");
define("_UPGRADE", "Die MySQL aus upgrade.txt unten einfügen um ein Upgrade durchzuführen.");
define("_UPGRADESUCCESS", "Upgrade durchgeführt!");
define("_TEXTUSERLIST", "User-Access Liste (mit Kommata trennen):");
define("_TEXTWIDTH", "Tabellenbreite:");
// define("_TEXTNEWTOPICIMG", "\"Neues Thema\" Bild-URL: (freilassen um einen Textlink zu erstellen)");
// define("_TEXTREPLYIMG", "\"Antworten\" Bild-URL: (freilassen um einen Textlink zu erstellen)");
define("_TEXTSEARCHSTATUS", "Suchstatus:");
define("_SEARCHOFF", "Die Suchfunktion ist zur Zeit deaktiviert.");
define("_TEXTFAQSTATUS", "FAQ Status:");
define("_FAQOFF", "Die FAQ sind zur Zeit deaktiviert.");
define("_TEXTMEMLISTSTATUS", "Mitgliederliste Status:");
define("_MEMLISTOFF", "Die Mitgliederliste ist zur Zeit deaktiviert.");
define("_TEXTPICONSTATUS", "Beitragsicon Status:");
define("_TEXTEDIT", "Editieren");
define("_TEXTEMAIL1", "E-Mail");
define("_TEXTSITE1", "Seite");
define("_TEXTIP", "IP");
define("_TEXTBACKTO", "Zurück zu");
define("_TEXTSPACE", "Tabellenabstand:");
define("_TEXTSTAFFONLY", "Nur Team:");
define("_TEXTNEWGROUP", "Neue Kategorie");
define("_TEXTNEWFORUM1", "Neues Forum");
define("_TEXTMOREOPTS", "Mehr Optionen...");
define("_TEXTFORUMOPTS", "Forumoptionen:");
define("_TEXTAVASTATUS", "Avatar Status:");
define("_TEXTREPORTPOST", "Beitrag berichten");
define("_REPORTSUBJECT", "Berichtete Beiträge...");
define("_REPORTMESSAGE", "Der folgende Beitrag wurde von einem User berichtet, bitte untersuche ihn:");
define("_REPORTMSG", "Danke. Der Beitrag wurde dem Administrator als Bericht zugesandt. Sie werden nun wieder zurück zur Themenansicht geleitet");
define("_NOREG", "Keine Registrierung nötig (User können unter jedem Namen posten):");
define("_TEXTADDED", "Hinzugefügt:");
define("_TEXTNEWIP", "Neue IP:");
define("_CURRENTIP", "Ihre aktuelle IP-Adresse ist");
define("_IPWARNING", "<br /><b>Achtung!</b> Ihre IP-Adresse steht auf der Bannliste. Sie werden permanent gebannt, wenn Sie sich ausloggen.");
define("_MULTIPNOTE", "Note: Um mehrere IP-Adressen auf einmal zu bannen, ersetze alle 4 Stücke durch ein * (ex: 220.194.45.*)");
define("_TEXTIPUPDATE", "IP-Bannen aktualisiert!");
define("_INVALIDIP", "Ungültiges IP-Format");
define("_EXISTINGIP", "Diese IP wurde bereits gebannt");
define("_TEXTBANIP", "IP bannen");
define("_TEXTUNBANIP", "IP entbannen");
define("_TEXTBANNEDIP", "<br />Diese IP ist im Moment gebannt.");
define("_EVALIPMASK", 'define("_BANNEDIPMASK","<br />Diese IP ist mit einer Maske gebannt ($ipmask).<br />Wenn Sie auf  <i>IP entbannen</i>, entbannen Sie alle IPs, die mit dieser Maske gebannt sind.");');
define("_TEXTIPBAN", "IP-Bannen");
define("_TEXTBOARDURL", "Komplette Forums-URL:");
define("_TEXTTOPLEVEL", "Top Level Forum/Foren");
define("_COPPAAGREE", "Ich bin 13 und akzeptiere");
define("_COPPASTATUS", "COPPA Verständnis Status:");
define("_TEXTCOPPA", "COPPA Einverständnis");
define("_TEXTCOPPAWORDING", "Dieses Forum hat das COPPA (Child's Online Privacy Protection Act) Verständnis aktiviert. Das heisst, dass Sie, um diese Zeit und an diesem Tag, 13 Jahre oder älter seinen müssen, um dieses Forum zu benutzen (registrieren, posten, etc.). Wenn Sie den Button unten anklicken bestätigst Sie, dass Sie 13 Jahre oder älter sind.");
define("_TEXTTIMEFORMAT", "Zeitformat:");
define("_TEXT24HOUR", "24 Stunden");
define("_TEXT12HOUR", "12 Stunden");
define("_EVALOFFSET", 'define("_TEXTOFFSET","Zeit-Offset (GMT ist im Moment $currdate)");');
define("_TEXTLFROM", "von:");
define("_AWEEK", "einer Woche");
define("_MONTH1", "einem Monat");
define("_MONTH3", "3 Monaten");
define("_MONTH6", "6 Monaten");
define("_TEXTMSN", "MSN:");
define("_TEXTPRUNE", "Aufräumen");
define("_PRUNEWHERE", "Thema löschen, wenn der letzte Beitrag älter ist als:");
define("_PRUNEIN", "Aufräumen und LÖSCHEN im Forum:");
define("_ADMINEMAIL", "Administrator E-Mail:");
define("_WHOPOSTOP1", "Wer kann neue Beiträge schreiben?");
define("_WHOPOSTOP2", "Wer kann Antworten schreiben?");
define("_WHOCANPOST", "Wer darf posten?");
define("_WHOCANPOST11", "Alle User können neue Themen posten,");
define("_WHOCANPOST12", "Administratoren können neue Themen posten,");
define("_WHOCANPOST13", "Administratoren und Moderatoren können neue Themen posten,");
define("_WHOCANPOST14", "Keine neuen Themen sind erlaubt,");
define("_WHOCANPOST21", "alle User können antworten,");
define("_WHOCANPOST22", "Administratoren können antworten,");
define("_WHOCANPOST23", "Administratoren und Moderatoren können antworten,");
define("_WHOCANPOST24", "keine Antworten sind erlaubt,");
define("_WHOCANPOST31", "und anonyme Beiträge sind erlaubt.");
define("_WHOCANPOST32", "und <b>anonyme Beiträge sind NICHT erlaubt</b>.");
define("_POSTPERMERR", "Sie sind nicht berechtigt, hier zu posten.");
define("_TEXTPOSTPERMISSION1", "Normal");
define("_TEXTPOSTPERMISSION2", "Admins");
define("_TEXTPOSTPERMISSION3", "Admins/Mods");
define("_TEXTPOSTPERMISSION4", "Kein Posten");
// define("_TEXTSTATS", "Statistik");
define("_TEXTNOONE", "niemand");
define("_EVALSTATS1", 'define("_STATS1","Auf dem $bbname sind:");');
define("_EVALSTATS2", 'define("_STATS2","$posts Beiträge");');
define("_EVALSTATS3", 'define("_STATS3","$threads Themen");');
define("_EVALSTATS4", 'define("_STATS4","$forums Foren ($forumsa active)");');
define("_EVALSTATS5", 'define("_STATS5","$members Mitglieder");');
define("_EVALSTATS51", 'define("_STATS51","$totalus Aufrufe");');
define("_EVALSTATS6", 'define("_STATS6","<b>Top $nbitemsinstats - meist angezeigte Themen:</b><br /> $viewmost");');
define("_EVALSTATS7", 'define("_STATS7","<b>Top $nbitemsinstats - meist beantwortete Themen:</b><br /> $replymost");');
define("_EVALSTATS8", 'define("_STATS8","Das beliebteste Forum ist $popforum mit $pop->posts Antworten und $pop->threads Themen");');
define("_EVALSTATS9", 'define("_STATS9","$mempost Beiträge pro Mitglied");');
define("_EVALSTATS10", 'define("_STATS10","$forumpost Beiträgen pro Forum");');
define("_EVALSTATS11", 'define("_STATS11","$threadreply Antwort pro Thema");');
define("_EVALSTATS12", 'define("_STATS12","$postsday Beiträge pro Tag");');
define("_EVALSTATS13", 'define("_STATS13","$membersday neue Mitglieder pro Tag");');
define("_EVALSTATS14", 'define("_STATS14","<b>$nbitemsinstats letzte Themen:</b><br /> $latest");');
define("_EVALSTATS15", 'define("_STATS15","$mapercent von allen Mitgliedern haben gepostet.");');
define("_REPLIESL", "Antworten");
define("_VIEWSL", "Views");
define("_TEXTAVERAGES", "Durchschnitte:");
define("_DATEFORMAT", "Datumsformat <span class=\"tiny\">(mm/dd/yyyy, dd/mm/yy, etc.)</span>:");
define("_STATSPAGE", "Statistik Status:");
define("_RANKINFO", "Je nachdem wieviele Beiträge Sie geschrieben haben, wird Ihnen ein Rank zugeordnet. Jeder Rank hat seinen eigenen Status und seine eigene Anzahl an Sternen. Unten sind die Userrankeinstellungen für dieses Board:");
define("_PICONS", "Beitragsicons:");
define("_TEXTNEWPICON", "Neues Beitragsicon:");
define("_TEXTWITHSTATUS", "mit dem Status:");
define("_ANYSTATUS", "Jeder Status");
define("_SIGBBCODE", "BB Code in den Signaturen:");
define("_SIGHTML", "HTML in den Signaturen:");
define("_TEXTFONT", "Font:");
define("_TEXTALTFONT", "Alternativer Font:");
define("_TEXTBIGSIZE", "Grosser Font:");
define("_TEXTSMALLSIZE", "Kleiner Font:");
define("_TEXTREASON", "Grund:");
define("_IGNORELIST", "Ignoreliste");
define("_IGNOREMSG", "Ignoreliste:<br /><small>Namen mit Kommata trennen (z.B. \"webfr34k, bondman, Ace,\"). Stellen Sie sicher, dass sich ein Kommata auch hinter dem letzten Namen befindet.</small>");
define("_IGNOREUPDATE", "Ignoreliste aktualisiert!");
define("_TEXTDAYSLOG", "Tage zum Login:");
define("_TEXTNEWSUBF", "Neues Unter-Forum");
define("_EMAILNOTIFYSUBJECT", "Antwort zum Beitrag:");
define("_EMAILNOTIFYINTRO", "Es ist eine Antwort gemacht worden zu diesem Thema: ");
define("_EMAILNOTIFYINTRO2", "Sie können das Thema besuchen auf ");
define("_EMAILNOTIFYEND", "Danke.");
define("_EMAILNOTIFYTOREPLIES", "Benachrichtigung per E-Mail bei neuen Antworten?");
define("_TEXTCONTENTS", "Inhalte:");
define("_INDEXSTATSCP", "Statistik in Forumsübersicht anzeigen: (## topics/ ## posts/ ## members)");
define("_UPGRADENOTE", "Note: Wenn Sie das Tabellenprefix geändert haben, wechsle xmb zu deinem Tabellenprefix");
define("_TEXTSENDVIA", "Senden via:");
define("_TEXTIPADDRESS", "IP-Adresse:");
define("_REPORTPOSTDISABLED", "Die Berichtenfunktion ist derzeit deaktiviert.");
define("_REPORTPOSTSTATUS", "Status der Benachrichtigung:");
define("_SHOWTOTALTIME", "Verarbeitungszeit:<br /><small>Wenn dieses ausgeschaltet ist, wird die Verarbeitungszeit der Seite im Bodenbereich nicht angezeigt</small>");
define("_TIMEMSG", "Verarbeitet in");
define("_TEXTSECONDS", "Sekunden");
define("_TEXTIMGCODEIS", "[img] Code ist");
define("_TEXTIMGCODE", "IMG Code");
define("_LASTPOSTIN", "Letzter Beitrag in:");
// define("_LPOSTSTATS", "letzter Beitrag");
define("_TOPMSGQUES", "Thema fixieren?");
define("_TEXTSEARCHIN", "suchen in:");
define("_TOPICSL", "Themen");
define("_TEXTBOTH", "beiden");
define("_REQUIREDXF", "Benötigt:");
define("_OPTIONALXF", "Optional:");
define("_THREADNAME", "Thema: ");
define("_COMEFROM", "Dieses Thema kommt von : ");
define("_URLOFTHISSITE", "URL dieser Webseite: ");
define("_TEXTNEWCODE", "Neues Wort: ");
define("_TEXTMESSOTD", "Beiträge des Tages");
define("_TEXTMESSOTDSTATUS", "Anzeigen der Beiträge des Tages");
define("_AFFJUMPER", "Anzeigen des Navigation-Jumpers am Seitenende");
define("_TEXTGLOBALTIMESTATUS", "global-einheitliche Zeit für das Forum");
define("_EMALALLTOADMIN", "benachrichtige den Admin des Forums per Email über Änderungen");
// define("_AVATARPATH", "Web-Pfad zu den Avataren (Bspl: images/forums/avatar)");
define("_SIGIMGXXXAUTH", "Lege eine Größe der Bild-Signatur fest");
define('_SIGIMGHEIGHT', 'Höhe (in Pixel z.B.: 150)');
define('_SIGIMGWIDTH', 'Breite (in Pixel z.B.: 300)');
define('_MORE_SMILIES', 'Mehr Smilies...');
define('_TEXTAREACOLS', 'Spalten (z.B.:80)');
define('_TEXTAREAROWS', 'Reihen (z.B.:8)');
define('_TRI_ASC', 'Aufsteigend sortieren');
define('_TRI_DESC', 'Absteigend sortieren');
define('_TEXTRIGHTS', 'Rechte:');
define('_TEXTCLOSE', 'Schließen');
define("_EMAILTHREADNOTIFYSUBJECT", "Ein neuer Beitrag wurde in das Forum geschickt: ");
define("_EMAILTHREADNOTIFYINTRO", "Ein neuer Beitrag wurde geschickt: ");
define("_EMAILMODIFIEDNOTIFYSUBJECT", "Ein Beitrag wurde im Forum editiert: ");
define("_EMAILMODIFIEDNOTIFYINTRO", "Ein Beitrag wurde editiert: ");
define("_EMAILSUPPRNOTIFYSUBJECT", "Im Forum wurde ein Beitrag gelöscht: ");
define("_EMAILSUPPRNOTIFYINTRO", "Ein Beitrag wurde gelöscht: ");
define('_POSTMESSAGEBOXSIZE', 'Größe der Post-Message-Box');
define('_SIG', 'Signatur');
define('_TEXTFORUMTIME', 'Zeit-Management');
define('_EMAILREGULATION', 'Mail-Management');
define('_MAILONPOST', 'Sende eine Mail nach jeder neuen Antwort');
define('_MAILONEDIT', 'Sende eine Mail nach jedem editierten Beitrag');
define('_MAILONDELE', 'Sende eine Mail nach jedem gelöschten Beitrag');
define('_NBITEMSINSTATS', 'Anzahl der Reihen in der Statistik');
define('_TEXTDUREEMESSOTD', 'Anzahl der Tage in "Beiträge des Tages" (in Tagen)');
define('_ADMINSTARSCONFIG', 'Administrations- Management');
define('_SAMEASUSERS', 'dasselbe als Benutzer');
define('_MAXUSERSP3', 'Maxim. Nutzer +3');
define("_EVALSTATS16", 'define("_STATS16","<b>Top $nbitemsinstats der aktivsten Benutzer:</b><br /> $topusers");');
define("_TEXTPOSTREPLYNOTE", "Antwort");
define("_MXB_DAYS", " Tage");
define("_SELECTEDTIME", "Es sollen alle Themen GELOESCHT werden, deren \"Last Post\" älter ist als: ");
define("_SELECTEDFORUM", "Folgendes Forum haben Sie ausgewählt:<br/>(Hinweis: eventuelle Subforen werden ignoriert, ausser das ganze Forum (\"Alle\") wurde gewählt.)");
define("_SELECTEDFORUMALL", "Das gesamte Forum !!!");
define("_SELECTEDFORUMERROR", "Fehler! Kein Forum zum aufräumen ausgewählt!");
define("_MENUCOUNTFORUM", "Counter aktualisieren");
define("_TEXTCOUNTFORUM", "Counter aktualisieren");
define("_TEXTCOUNTFORUMEXPLAIN", "Mit dieser Funktion werden alle Counterstände (Mitglieder, Themen, Subforen und Foren und deren \"Last-Post\") überprüft und Unstimmigkeiten ggf. beseitigt. Dies ist besonders dann von Interesse, wenn manuelle Eingriffe in die DB z.B. mit phpMyAdmin vorgenommen wurden.<br/><br/>Fortfahren?");
define("_TEXTCOUNTFORUMRESOULT1", "Es wurden <b>");
define("_TEXTCOUNTFORUMRESOULT2", "Unstimmigkeiten</b> gefunden und behoben.");
define("_LASTONEHOUR", "letzte Stunde");
define("_LAST12HOURS", "letzten 12 Stunden");
define("_LAST24HOURS", "letzten 24 Stunden");
define("_TEXTNEWLINK", "<b>Forum verlinken</b>");
// define("_TEAMAVATARPATH", "Web-Pfad zu den Avataren NUR für Teammitglieder:");
define("_TEXTNEWLINKFROM", "Neuen Link erstellen von dem Forum (Quelle): ");
define("_TEXTNEWLINKTO", " zu dem Forum (Ziel): ");
define("_TEXTNEWLINKNOTE", "<b>Hinweis</b>: Als <b>Quellforen</b> sind nur Foren <b>ohne Subforen</b> vorgesehen. Es funktioniert auch mit Quellforen die Subforen enthalten, jedoch müssen bei einer höheren Linktiefe Einbußen im Bedienungskomfort hingenommen werden. Als Zielforen können Subforen problemlos gewählt werden.");
define("_TEXTNEWTHREADLINK", "Thema verlinken");
define("_TEXTFROMFORUM", "aus dem Forum: ");
define("_TEXTNEWLINKFROMTHREAD", "Quell-Thema: ");
define("_TEXTNEWLINKTOFORUM", "Zielforum: ");
define("_TEXTOLDLINKTOFORUM1", "Dieses Thema ist schon in<b><br/>");
define("_TEXTOLDLINKTOFORUM2", " Foren</b> gelinkt:");
define("_TEXTDELETELINKTOFORUM", "Link löschen? ");
define("_LINKTHREADMSG", "Die Änderungen wurden übernommen. Sie werden nun zurück zur Themenansicht geleitet");
define("_TEXTLINKFORUMSTATUS", "Das Verlinken von Foren in andere Foren aktivieren: ");
define("_TEXTLINKTHREADSTATUS", "Das Verlinken von Themen in andere Foren ermöglichen (Team-only):  ");
define("_TEXTLINKTHREADSTATUSDISABLED", "Verlinken von Themen in andere Foren ist deaktiviert.");
define("_AFFJUMPERDYNAMIC", "dynamischen Navigations-Jumper benutzen (sicherer, aber etwas langsamer)");
define("_TEXTPRIORITY", "Priorität: ");
define("_TEXTPRIORITYHIGH", "hoch");
define("_TEXTPRIORITYNORMAL", "normal");
define("_TEXTPRIORITYLOW", "niedrig");
define("_TEXTPRIORITYBOLD", "fett");
define("_TEXTPRIORITYITALIC", "kursiv");
define("_TEXTPOSTTOTHREAD", "Hier klicken, um aus dieser Antwort ein eigenes Thema zu erstellen.");
define('_MAILONTHREAD', 'Sende eine Mail nach jedem neu erstellten Thema');
define("_EMAILALLTOMODERATOR", "Benachrichtigungsstatus für Moderatoren");
define('_MODERATORMAILONTHREAD', 'Erlaube den Moderatoren Benachrichtigung bei neu erstellten Themen');
define('_MODERATORMAILONPOST', 'Erlaube den Moderatoren Benachrichtigung bei neu eingegangenen Antworten');
define('_MODERATORMAILONEDIT', 'Erlaube den Moderatoren Benachrichtigung beim Editieren von Beiträgen');
define('_MODERATORMAILONDELETE', 'Erlaube den Moderatoren Benachrichtigung beim Löschen von Beiträgen');
define('_TEXTALLOWU2U', 'Link zu PM-Buddy anzeigen');
define('_TEXTCOLORSUBJECT', 'Normalen Benutzern Prioritätensetzung für die Themen erlauben');
// define('_TEXTMESSSLV', 'neue Beiträge');
define('_TEXTMESSSLVBIG', 'neue Beiträge seit dem letzten Besuch');
define('_TEXTKEEPLASTVISIT', 'Wie viele Stunden sollen neue Beiträge seit Ihrem letzten Besuch unter "neue Beiträge" verfügbar sein?');
define('_TEXTADVANCEDUINFO', 'Sollen erweiterte Informationen von Ihnen gezeigt werden wenn verfügbar (Location, ICQ usw.)?');
define('_TEXTU2U', 'Sollen andere User Ihnen private Nachrichten senden können?');
define('_TEXTNOTIFYME', 'Möchten Sie über Änderungen in Ihrem Forum/Foren informiert werden?');
define('_TEXTNOTIFYEMAIL', 'Benachrichtigung per Email');
// define('_TEXTNOTIFYPM', 'Benachrichtigung per privater Nachricht');
define('_TEXTNOTIFYTHREAD', 'Bei neuen Themen?');
define('_TEXTNOTIFYPOST', 'Bei neuen Antworten?');
define('_TEXTNOTIFYEDIT', 'Beim Editieren von Beiträgen?');
define('_TEXTNOTIFYDELETE', 'Beim Löschen von Beiträgen?');
define('_TEXTPMUSER', 'Useraccount, der private Nachrichten an Ihren Admin-Account empfangen soll. NOTWENDIG!');
// define("_TEXTNOGUESTPOSTING", "Besucherposts sind derzeit deaktiviert. Bitte <a href=\"%s\">neu registrieren</a> oder in den bestehenden Account <a href=\"%s\">einloggen</a>.");
define("_TEXTFORUMNOGUESTPOSTING", "Besucherposts sind in diesem Forum nicht erlaubt. Bitte <a href=\"%s\"><u>registrieren</u></a> oder am System <a href=\"%s\"><u>anmelden</u></a>.");
define("_TEXTTOTALMEMBERTIME", "Onlinezeit gesamt: ");
define("_TEXTHOURS", "Stunden");
define("_TEXTMINUTS", "Minuten");
define("_TEXTREALNAME", "richtiger Name:");
define("_TEXTOCC", "Tätigkeit:");
define("_TEXTINTEREST", "Interessen:");
define("_TEXTTRACKING", "Tracking");
define("_TEXTREFRESH", "Auffrischen");
define("_TEXTBBRULESWINDOW", "Forumsregeln");
define("_TEXTCLOSEWINDOW", "Fenster schliessen");
define("_TEXTSMILIESROWSNUMBER", "Wie viele Spalten Smilies sollen beim Beiträge schreiben und editieren angezeigt werden?");
define("_TEXTCOLOR1", "Farbe für Themen mit hoher Priorität:");
define("_TEXTCOLOR2", "Farbe für Themen mit niedriger Priorität:");
define("_EVALSTATS82", 'define("_STATS82","Das meistbesuchteste Forum ist $poptimeforum mit $poptimedisplay User-Stunden");');
define("_TEXTNOTIFYTYPE", "Welchem Benachrichtigungstyp soll Ihr Administrator-Profil unterliegen?");
define("_TEXTADMINISTRATORMAIL", "Administrator");
define("_TEXTMODERATORMAIL", "Moderator");
define("_TEXTADVANCEDONLINE", "Soll angezeigt werden, welcher User sich in welchem Forum befindet?");
define("_TEXTMEMLISTANONYMOUSSTATUS", "anonymen Benutzern die Mitgliederliste anzeigen?");
define("_TEXTLASTTHREADS", "Die letzten beantworteten Themen");
define("_TEXTLAST50THREADS", "Die letzten 50 beantworteten Themen");
define("_TEXTLAST50POSTS", "Die letzten 50 Antworten");
define("_TEXTTHREADSWITHOUTREPLY", "Themen ohne Antwort");
define("_TEXTSEARCHRESULTS", "Treffer");
// Version 1.0.4
define("_CHMODFAILEDSETTINGS", "FEHLER. Keine Schreibrechte für \"settings.php\".<br/><b>Speichern NICHT möglich!</b>");
define("_MOVETHREADMSGERR", "FEHLER. Es muß ein gültiges Forum als Ziel gewählt werden. Sie werden nun zurück zur Themenansicht geleitet.");
// define("_MEMBERAVATARPATH", "Web-Pfad zu den Avataren für Mitglieder:<br/>(die Avatare müssen als Dateinamen den Usernamen der Mitglieder haben!)");
define("_TEXTSMILIESLINENUMBER", "Wie viele Zeilen Smilies sollen beim Beiträge schreiben und editieren angezeigt werden?");
define("_TEXTLASTPOSTSUBJECT", "Soll als Forum-Lastpost das Betreff des entsprechenden Beitrages gezeigt werden?");
define("_TEXTLASTPOSTSUBJECTCHARS", "Wie viele Zeichen sollen von dem Betreff gezeigt werden?");
define("_TEXTDEFAULTVALUES", "Standardwerte für die Erstellung von");
define("_TEXTDEFAULTVALUESF", "neuen Foren");
define("_TEXTDEFAULTVALUESFHTML", "HTML-Code im Forum erlauben");
define("_TEXTDEFAULTVALUESFSMILIES", "Smilies im Forum erlauben");
define("_TEXTDEFAULTVALUESFBBCODE", "BB-Code im Forum erlauben");
define("_TEXTDEFAULTVALUESFANOPOSTS", "Anonymes schreiben im Forum erlauben");
define("_TEXTDEFAULTVALUESFIMGCODE", "Image-Code im Forum erlauben");
define("_TEXTDEFAULTVALUESFSTAFF", "Forum nur für Team-Mitglieder");
define("_TEXTDEFAULTVALUESFMAIN2SUB", "Für Subforen die Einstellungen des Mainforums übernehmen");
define("_TEXTDEFAULTVALUESFMODS", "Liste der Standard-Moderatoren<br/>(durch Kommata mit Leerzeichen getrennt)");
define("_TEXTDEFAULTVALUESM", "neuen Mitgliedern");
define("_TEXTDEFAULTVALUESMMSLV", "Wie viele Stunden sollen \"neue Beiträge\" angezeigt werden?");
define("_TEXTDEFAULTVALUESMMAIL", "Email-Adresse des User anzeigen");
// define("_TEXTDEFAULTVALUESMINFO", "Erweiterte Informationen des User anzeigen");
define("_TEXTDEFAULTVALUESMNL", "User für den Forums-Newsletter eintragen");
define("_TEXTDEFAULTVALUESMPM", "U2U-Button für den User aktivieren");
// Version 1.0.5
define("_TEXTRESET", "Reset");
define("_TEXTRESETFORUM", "Forum resetten");
define("_TEXTRESETFORUMEXPLAIN", "Diese Funktion setzt das Forum auf die Standard-Werte aus dem Bereich \"Einstellungen\" zurück.");
define("_TEXTRESETFORUMCHOOSE", "Bitte auswählen, was zurückgesetzt werden soll:");
define("_TEXTRESETFORUMFTIME", "Alle Forenzeiten auf Null setzen");
define("_TEXTRESETFORUMMTIME", "Alle Mitgliederzeiten auf Null setzen");
define("_TEXTRESETFORUMFORUM", "Alle Foreneinstellungen auf die Standardwerte setzen");
define("_TEXTRESETFORUMMEMBER", "Alle Mitgliedereinstellungen auf die Standardwerte setzen");
define("_TEXTRESETFORUMALL", "Das gesamte Forum löschen (Themen, Antworten, Links, Foren und Mitglieder)");
define("_TEXTRESETFORUMALLOK", "<b>Bitte das Löschen des gesamten Forums ein zweites Mal bestätigen falls gewählt</b>");
define("_TEXTRESETFORUMEND", "Die gewünschten Aktionen wurden ausgeführt.");
// Version 1.0.6
// define("_EBF_AVATARWIDTH", "Beschränkung für die Breite angeben falls gewünscht<br/>&nbsp;&nbsp;(in Pixeln, leer lassen = keine Beschränkung)");
// define("_EBF_AVATARHEIGTH", "Beschränkung für die Höhe angeben falls gewünscht<br/>&nbsp;&nbsp;(in Pixeln, leer lassen = keine Beschränkung)");
// define("_EBF_AVATARSIZEMEMBER", "Beschränkungen für Mitglieder-Avatare benutzen?");
// define("_EBF_AVATARSIZETEAM", "Beschränkungen für Team-Avatare benutzen?");
// define("_EBF_AVATARSIZEDEFAULT", "Beschränkungen für Standard-Avatare benutzen?");
// Version 1.1.0 Dev
define("_EBF_STAFFONLY", "Nur Team-Mitglieder");
define("_EBF_MEMBERONLY", "Nur angemeldete User");
define("_EBF_ALL", "Alle (auch anonyme)");
define("_EBF_GESCHLECHT", "Geschlecht");
define("_EBF_ALTER", "Alter");
define("_EBF_SHORTREPLY", "Antw.:");
// Version 1.1.a
define("_EB_VISITSITE", "Homepage besuchen");
define("_EB_PMTOAUTHOR", "private Nachricht senden");
define("_EB_EDITPOST", "Beitrag editieren");
define("_EB_QUOTEREPLY", "Antwort mit Zitat");
define("_EB_EMAILUSER", "E-mail senden");
// ab mxBoard 1.0
define('_ERRORNOMESSAGE', 'Textfeld wurde nicht ausgefüllt.');
define('_MXBADVANCEDSEARCH', 'Erweiterte Suche');
define('_MXBIMAGESET', 'Bilderset');
define('_MXBERRORWHILESUBMIT', 'Fehler beim Schreiben des Beitrages.');
define('_MXBPAGEUP', 'Nach oben');
define('_MXBPAGEDOWN', 'Nach unten');
define('_MXBLASTPOST', 'Letzter Beitrag');
define('_MXBSHUREDELETEPOST', 'Sind Sie sicher, dass Sie diesen Beitrag löschen möchten?');
define('_MXBSHUREDELETETHREAD', 'Sind Sie sicher, dass Sie dieses Thema, mit all seinen Antworten, löschen möchten?');
define("_TEXTMESSAGE2", "Nachricht:");
define('_MORERESULTS', 'Es sind mehr als %d Suchergebnisse vorhanden. Bitte schränken Sie Ihre Suchbedingungen weiter ein.');
define('_MXBUSERNOTEXIST', 'Dieses Mitglied ist nicht vorhanden. Das Profil kann nicht angesehen oder editiert werden.');
// ab mxBoard 1.1
define("_MXB_OF", "von");
// ab mxBoard 1.2
define("_CAPTCHAON", "Captcha für anonyme Benutzer aktivieren");
define("_CAPTCHAUSERON", "Captcha auch für registrierte Benutzer aktivieren");
// define("_MXBBOARDPROFILE", "Forumsprofil");

define("_MXB_MALE", "männlich");
define("_MXB_FEMALE", "weiblich");

?>