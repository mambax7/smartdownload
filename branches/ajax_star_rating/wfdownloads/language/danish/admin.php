<?php
/**
 * $Id$
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

// %%%%%%	Module NMDe 'MyDownloads' (Admin)	  %%%%%
// Buttons
define('_AM_WFD_BMODIFY', 'Redig�r');
define('_AM_WFD_BDELETE', 'Slet');
define('_AM_WFD_BADD', 'Tilf�j');
define('_AM_WFD_BAPPROVE', 'Godkend');
define('_AM_WFD_BIGNORE', 'Ignor�r');
define('_AM_WFD_BCANCEL', 'Fortryd');
define('_AM_WFD_BSAVE', 'Gem');
define('_AM_WFD_BRESET', 'Rens');
define('_AM_WFD_BMOVE', 'Flyt filer');
define('_AM_WFD_BUPLOAD', 'Upload');
define('_AM_WFD_BDELETEIMAGE', 'Slet valgte billed');
define('_AM_WFD_BRETURN', 'Retur til hvor du kom fra!');
define('_AM_WFD_DBERROR', 'Databasefejl: Send venligst denne fejl til SmartFactory website');
//Banned Users
define('_AM_WFD_NONBANNED', 'Ikke Banned');
define('_AM_WFD_BANNED', 'Banned');
define('_AM_WFD_EDITBANNED', 'Redig�r Banned brugere');
// Other Options
define('_AM_WFD_TEXTOPTIONS', 'Tekst muligheder:');
define('_AM_WFD_ALLOWHTML', 'Tillad HTML');
define('_AM_WFD_ALLOWSMILEY', 'Tillad Smileys');
define('_AM_WFD_ALLOWXCODE', 'Tillad XOOPS koder');
define('_AM_WFD_ALLOWIMAGES', 'Tillad billeder');
define('_AM_WFD_ALLOWBREAK', 'Brug XOOPS linieskift ombygning');
define('_AM_WFD_UPLOADFILE', 'Fil uploaded med success');
define('_AM_WFD_NOMENUITEMS', 'Ingen menuer i menuen');

// Admin Bread crumb
define('_AM_WFD_PREFS', 'Indstillinger');
define('_AM_WFD_PERMISSIONS', 'Rettigheder');
define('_AM_WFD_BINDEX', 'Index');
define('_AM_WFD_BLOCKADMIN', 'Blokke');
define('_AM_WFD_GOMODULE', 'G� til modulet');
define('_AM_WFD_BHELP', 'Hj�lp');
define('_AM_WFD_ABOUT', 'Om');
// Admin Summary
define('_AM_WFD_SCATEGORY', 'Kategori:');
define('_AM_WFD_SFILES', 'Filer:');
define('_AM_WFD_SNEWFILESVAL', 'Indsendt:');
define('_AM_WFD_SMODREQUEST', 'Redigeret:');
define('_AM_WFD_SREVIEWS', 'Bed�mmelser: ');
define('_AM_WFD_SMIRRORS', 'Mirrors: ');
// Admin Main Menu
define('_AM_WFD_MCATEGORY', 'Kategori indstillinger');
define('_AM_WFD_INDEXPAGE', 'Index side indstillinger');
define('_AM_WFD_MUPLOADS', 'Billed upload');
define('_AM_WFD_MMIMETYPES', 'Filtype indstillinger');
define('_AM_WFD_MCOMMENTS', 'Kommentar');
define('_AM_WFS_MVOTEDATA', 'Stemme indstillinger');
// waiting reviews
define('_AM_WFD_AREVIEWS', 'Bed�mmelses indstillinger');
define('_AM_WFD_AREVIEWS_WAITING', 'Information ved afventende bed�mmelser');
define('_AM_WFD_AREVIEWS_INFO', 'Bed�mmelse indstillinger information');
define('_AM_WFD_AREVIEWS_APPROVE', '<b>Godkend</b> ny bed�mmelse uden validering.');
define('_AM_WFD_AREVIEWS_APPROVED', 'Bed�mmelsen er godkendt');
define('_AM_WFD_AREVIEWS_EDIT', '<b>Redig�r</b> ny bed�mmelse og derefter godkendelse.');
define('_AM_WFD_AREVIEWS_DELETE', '<b>Slet</b> bed�mmelsen.');

// Catgeory defines
define('_AM_WFD_CCATEGORY_CREATENEW', 'Opret ny kategori');
define('_AM_WFD_CCATEGORY_MODIFY', 'Redig�r kategori');
define('_AM_WFD_CCATEGORY_MOVE', 'Flyt kategori filer');
define('_AM_WFD_CCATEGORY_MODIFY_TITLE', 'Kategori titel');
define('_AM_WFD_CCATEGORY_MODIFY_FAILED', 'Fejl ved flytning af filer: Kan ikke flytte til denne kategori');
define('_AM_WFD_CCATEGORY_MODIFY_FAILEDT', 'Fejl ved flytning af filer: Kan ikke finde denne kategori');
define('_AM_WFD_CCATEGORY_MODIFY_MOVED', 'Filerne er flyttet');
define('_AM_WFD_CCATEGORY_CREATED', 'Ny kategori oprettet og databasen er opdateret.');
define('_AM_WFD_CCATEGORY_MODIFIED', 'Den valgte kategori er redigeret og databasen er opdateret');
define('_AM_WFD_CCATEGORY_DELETED', 'Den valgte kategori er slettet og databasen er opdateret.');
define('_AM_WFD_CCATEGORY_AREUSURE', 'ADVARSEL: Er du sikker p� at du vil slette denne kategori og ALLE filer samt kommentarer?');
define('_AM_WFD_CCATEGORY_NOEXISTS', 'Du skal oprette en kategori f�r du kan tilf�je nye filer.');
define('_AM_WFD_FCATEGORY_GROUPPROMPT', 'Kategori rettigheder:<div style=\'padding-top: 8px;\'><span style=\'font-weight: normal;\'>V�lg de grupper der skal have adgang til denne kategori.</span></div>');
define('_AM_WFD_FCATEGORY_TITLE', 'Kategori titel:');
define('_AM_WFD_FCATEGORY_WEIGHT', 'Kategori v�gtning:');
define('_AM_WFD_FCATEGORY_SUBCATEGORY', 'Benyt som underkategori:');
define('_AM_WFD_FCATEGORY_CIMAGE', 'V�lg kategori billed:');
define('_AM_WFD_FCATEGORY_DESCRIPTION', 'Angiv kategori beskrivelse:');
define('_AM_WFD_FCATEGORY_SUMMARY', 'Angiv kategori sammendrag:');
define('_AM_WFD_CCATEGORY_CHILDASPARENT', 'Du kan ikke angive en underkategori som hovedkategori');
/*
* Index page Defines
*/
define('_AM_WFD_IPAGE_UPDATED', 'Index side redigeret og databasen opdateret.');
define('_AM_WFD_IPAGE_INFORMATION', 'Index side information');
define('_AM_WFD_IPAGE_MODIFY', 'Redig�r index side');
define('_AM_WFD_IPAGE_CIMAGE', 'V�lg index billed:');
define('_AM_WFD_IPAGE_CTITLE', 'Index titel:');
define('_AM_WFD_IPAGE_CHEADING', 'Index overskrift:');
define('_AM_WFD_IPAGE_CHEADINGA', 'Index overskrift placering');
define('_AM_WFD_IPAGE_CFOOTER', 'Index fodnote');
define('_AM_WFD_IPAGE_CFOOTERA', 'Index fodnote placering');
define('_AM_WFD_IPAGE_CLEFT', 'Venstrestillet');
define('_AM_WFD_IPAGE_CCENTER', 'Centreret');
define('_AM_WFD_IPAGE_CRIGHT', 'H�jrestillet');

/*
*  Permissions defines
*/
define('_AM_WFD_PERM_MANAGEMENT', 'Rettighedsstyring');
define('_AM_WFD_PERM_PERMSNOTE', '<div><b>BEM�RK:</b> V�r opm�rksom p� at selv om du s�tter rettigheder her, kan en gruppe m�ske ikke se det �nskede. Du skal huske ogs� at tildele rettigheder til gruppen under <b>Admin > Grupper. </B></div>');
define('_AM_WFD_PERM_CPERMISSIONS', 'Kategori rettigheder');
define('_AM_WFD_PERM_CSELECTPERMISSIONS', 'V�lg kategorier som hver gruppe m� se');
define('_AM_WFD_PERM_CNOCATEGORY', 'Kan ikke s�tte rettigheder: Ingen kategorier oprettet.');
define('_AM_WFD_PERM_FPERMISSIONS', 'Fil rettigheder');
define('_AM_WFD_PERM_FNOFILES', 'Kan ikke s�tte rettigheder: Ingen filer er uploaded endnu');
define('_AM_WFD_PERM_FSELECTPERMISSIONS', 'V�lg de filer som hver gruppe m� se');
/*
* Upload defines
*/
define('_AM_WFD_DOWN_IMAGEUPLOAD', 'Billed uploaded til serveren');
define('_AM_WFD_DOWN_NOIMAGEEXIST', 'Fejl: Ingen fil var valgt til upload. Pr�v igen!');
define('_AM_WFD_DOWN_IMAGEEXIST', 'Billedet eksisterer allerede.');
define('_AM_WFD_DOWN_FILEDELETED', 'Filen er slettet.');
define('_AM_WFD_DOWN_FILEERRORDELETE', 'Fejl ved sletning af fil: Filen findes ikke p� serveren.');
define('_AM_WFD_DOWN_NOFILEERROR', 'Fejl ved sletning af fil: Ingen fil valgt for sletning');
define('_AM_WFD_DOWN_DELETEFILE', 'ADVARSEL: Er du sikker p� at du vil slette denne billed fil?');
define('_AM_WFD_DOWN_IMAGEINFO', 'Server status');
define('_AM_WFD_DOWN_NOTSET', 'Sti til Upload ikke sat.');
define('_AM_WFD_DOWN_SERVERPATH', 'Server sti til XOOPS rodbibliotek:');
define('_AM_WFD_DOWN_UPLOADPATH', 'Aktuelle upload sti:');
define('_AM_WFD_DOWN_UPLOADPATHDSC', 'Bem�rk: Upload sti *SKAL* indeholde den fulde server sti til din upload folder.');
define('_AM_WFD_DOWN_SPHPINI', '<b>Information fra PHP ini fil:</b>');
define('_AM_WFD_DOWN_METAVERSION', '<b>WF-Downloads Meta Version:</b> ');
define('_AM_WFD_DOWN_SAFEMODESTATUS', 'Safe Mode Status: ');
define('_AM_WFD_DOWN_REGISTERGLOBALS', 'Register Globals: ');
define('_AM_WFD_DOWN_SERVERUPLOADSTATUS', 'Server Uploads Status: ');
define('_AM_WFD_DOWN_MAXUPLOADSIZE', 'Maksimal upload st�rrelse pr. fil:');
define('_AM_WFD_DOWN_MAXPOSTSIZE', 'Maksimal st�rrelse pr. indl�g:');
define('_AM_WFD_DOWN_SAFEMODEPROBLEMS', '(Dette kan give problemer)');
define('_AM_WFD_DOWN_GDLIBSTATUS', 'GD Library Support: ');
define('_AM_WFD_DOWN_GDLIBVERSION', 'GD Library Version: ');
define('_AM_WFD_DOWN_GDON', '<b>Aktiveret</b> (Mulighed for frim�rker (Thumbs nails))');
define('_AM_WFD_DOWN_GDOFF', '<b>Deaktiveret</b> (Ingen mulighed for frim�rker (Thumb Nails))');
define('_AM_WFD_DOWN_OFF', '<b>OFF</b>');
define('_AM_WFD_DOWN_ON', '<b>ON</b>');
define('_AM_WFD_DOWN_CATIMAGE', 'Kategori billeder');
define('_AM_WFD_DOWN_SCREENSHOTS', 'Sk�rmdump');
define('_AM_WFD_DOWN_MAINIMAGEDIR', 'Hoved billeder');
define('_AM_WFD_DOWN_FCATIMAGE', 'Kategori billed sti');
define('_AM_WFD_DOWN_FSCREENSHOTS', 'Sk�rmdump sti');
define('_AM_WFD_DOWN_FMAINIMAGEDIR', 'Hoved billed sti');
define('_AM_WFD_DOWN_FUPLOADIMAGETO', 'Upload billed:');
define('_AM_WFD_DOWN_FUPLOADPATH', 'Upload sti:');
define('_AM_WFD_DOWN_FUPLOADURL', 'Upload URL: ');
define('_AM_WFD_DOWN_FOLDERSELECTION', 'V�lg upload destination:');
define('_AM_WFD_DOWN_FSHOWSELECTEDIMAGE', 'Vis valgte billed:');
define('_AM_WFD_DOWN_FUPLOADIMAGE', 'Upload nyt billed til valgte destination:');

// Main Index defines
define('_AM_WFD_MINDEX_DOWNSUMMARY', 'Modul administration resum�');
define('_AM_WFD_MINDEX_PUBLISHEDDOWN', 'Offentliggjorte filer:');
define('_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN', 'Automatisk offenligtgjorte filer:');
define('_AM_WFD_MINDEX_AUTOEXPIRE', 'Automatisk oph�rte filer:');
define('_AM_WFD_MINDEX_OFFLINEDOWN', 'Filer der er offline:');
define('_AM_WFD_MINDEX_ID', 'ID');
define('_AM_WFD_MINDEX_TITLE', 'Fil titel');
define('_AM_WFD_MINDEX_POSTER', 'Indsender');
define('_AM_WFD_MINDEX_SUBMITTED', 'Indsendt dato');
define('_AM_WFD_MINDEX_ONLINESTATUS', 'Online Status');
define('_AM_WFD_MINDEX_PUBLISHED', 'Offentliggjort');
define('_AM_WFD_MINDEX_ACTION', 'Handling');
define('_AM_WFD_MINDEX_NODOWNLOADSFOUND', 'BEM�RK: Der er ingen filer der matcher kreteriet');
define('_AM_WFD_MINDEX_PAGE', '<b>Side:<b> ');
define('_AM_WFD_MINDEX_PAGEINFOTXT', '<ul><li>WF-Downloads hovedside.</li><li>Du kan nemt �ndre billed, overskrift, titel og fodnote tekst s� det matcher dine behov.</li></ul><br /><br />Bem�rk: Det billed du v�lger som logo, vil blive benyttet hele vejen igennem.');

// Submitted Files
define('_AM_WFD_SUB_SUBMITTEDFILES', 'Indsendte filer.');
define('_AM_WFD_SUB_FILESWAITINGINFO', 'Afventende filer.');
define('_AM_WFD_SUB_FILESWAITINGVALIDATION', 'Afventer gyldighed:');
define('_AM_WFD_SUB_APPROVEWAITINGFILE', '<b>Godkend</b> ny fil uden at teste gyldighed.');
define('_AM_WFD_SUB_EDITWAITINGFILE', '<b>Rediger</b> ny fil og test gyldighed.');
define('_AM_WFD_SUB_DELETEWAITINGFILE', '<b>Slet</b> ny fil.');
define('_AM_WFD_SUB_NOFILESWAITING', 'Der er ingen filer der matcher dette kriterie.');
define('_AM_WFD_SUB_NEWFILECREATED', 'Nyt download oprettet og databasen opdateret.');
// Mimetypes
define('_AM_WFD_MIME_ID', 'ID');
define('_AM_WFD_MIME_EXT', 'EXT');
define('_AM_WFD_MIME_NAME', 'Applikations type');
define('_AM_WFD_MIME_ADMIN', 'Admin');
define('_AM_WFD_MIME_USER', 'Bruger');
// Mimetype Form
define('_AM_WFD_MIME_CREATEF', 'Opret filtype');
define('_AM_WFD_MIME_MODIFYF', 'Rediger filtype');
define('_AM_WFD_MIME_EXTF', 'File typer:');
define('_AM_WFD_MIME_NAMEF', 'Applikations Type/Navn:<div style=\'padding-top: 8px;\'><span style=\'font-weight: normal;\'>Indtast den applikation der benytte til filtypen.</span></div>');
define('_AM_WFD_MIME_TYPEF', 'Filtyper:<div style=\'padding-top: 8px;\'><span style=\'font-weight: normal;\'>Hver filtype associaceret med filendelse (EXT). Hver filtype skal adskilles med mellemrum.</span></div>');
define('_AM_WFD_MIME_ADMINF', 'Tilladte filtyper for admin');
define('_AM_WFD_MIME_ADMINFINFO', '<b>Filtyper der er tilladt for administratorer :</b>');
define('_AM_WFD_MIME_USERF', 'Tilladte filtyper for bruger');
define('_AM_WFD_MIME_USERFINFO', '<b>Filtyper der er tilladt for brugere:</B>');
define('_AM_WFD_MIME_NOMIMEINFO', 'Ingen filtyper valgt.');
define('_AM_WFD_MIME_FINDMIMETYPE', 'Find ny filtype:');
define('_AM_WFD_MIME_EXTFIND', 'S�g filendelser:<div style=\'padding-top: 8px;\'><span style=\'font-weight: normal;\'>Indtast den filendelse du �nsker at s�ge efter.</span></div>');
define('_AM_WFD_MIME_INFOTEXT', '<ul><li>Nye filtyper kan oprettes, redigeres eller slettes via denne form.</li>
<li>S�g efter en filtype via externe websider.</li>
<li>Vis filtyper for administratorer og bruger uploads.</li>
<li>�ndre filtype upload status.</li></ul>
	');

// Mimetype Buttons
define('_AM_WFD_MIME_CREATE', 'Opret');
define('_AM_WFD_MIME_CLEAR', 'Reset');
define('_AM_WFD_MIME_CANCEL', 'Fortryd');
define('_AM_WFD_MIME_MODIFY', 'Redig�r');
define('_AM_WFD_MIME_DELETE', 'Slet');
define('_AM_WFD_MIME_FINDIT', 'Hent filendelse!');
// Mimetype Database
define('_AM_WFD_MIME_DELETETHIS', 'Slet valgte filtyper?');
define('_AM_WFD_MIME_MIMEDELETED', 'Filtype %s er slettet');
define('_AM_WFD_MIME_CREATED', 'Filtype information oprettet');
define('_AM_WFD_MIME_MODIFIED', 'Filtype information redigeret');
// Vote Information
define('_AM_WFD_VOTE_RATINGINFOMATION', 'Afstemnings information');
define('_AM_WFD_VOTE_TOTALVOTES', 'Totale stemmer:');
define('_AM_WFD_VOTE_REGUSERVOTES', 'Registrerede bruger stemmer: %s');
define('_AM_WFD_VOTE_ANONUSERVOTES', 'Anonyme bruger stemmer: %s');
define('_AM_WFD_VOTE_USER', 'Bruger');
define('_AM_WFD_VOTE_IP', 'IP Adresse');
define('_AM_WFD_VOTE_USERAVG', 'Gennemsnitslig bruger bed�mmelse');
define('_AM_WFD_VOTE_TOTALRATE', 'Antal bed�mmelser');
define('_AM_WFD_VOTE_DATE', 'Indsendt');
define('_AM_WFD_VOTE_RATING', 'Bed�mmelser');
define('_AM_WFD_VOTE_NOREGVOTES', 'Ingen registrerede brugere har stemt.');
define('_AM_WFD_VOTE_NOUNREGVOTES', 'Ingen uregistrerede brugere har stemt.');
define('_AM_WFD_VOTE_VOTEDELETED', 'Stemmer slettet.');
define('_AM_WFD_VOTE_ID', 'ID');
define('_AM_WFD_VOTE_FILETITLE', 'Fil Titel');
define('_AM_WFD_VOTE_DISPLAYVOTES', 'Afstemnings information');
define('_AM_WFD_VOTE_NOVOTES', 'Ingen brugerafstemninger ');
define('_AM_WFD_VOTE_DELETE', 'Ingen brugerafstemninger');
define('_AM_WFD_VOTE_DELETEDSC', '<b>Sletter</b> de valgte stemmer fra databasen.');

// Modifications
/*
define('_AM_WFD_MOD_TOTMODREQUESTS', 'Antal �ndrings�nsker:');
define('_AM_WFD_MOD_MODREQUESTS', 'Redigerede filer');
define('_AM_WFD_MOD_MODREQUESTSINFO', 'Redigerede fil informationer');
define('_AM_WFD_MOD_MODID', 'ID');
define('_AM_WFD_MOD_MODTITLE', 'Titel');
define('_AM_WFD_MOD_MODPOSTER', 'Oprindelig indsender:');
define('_AM_WFD_MOD_DATE', 'Indsendt');
define('_AM_WFD_MOD_NOMODREQUEST', 'Der er ingen �nsker der matcher dette kriterie');
define('_AM_WFD_MOD_MODIFYSUBMIT', 'Indsender:');
define('_AM_WFD_MOD_ORIGINAL', 'Originale download detaljer');
define('_AM_WFD_MOD_REQDELETED', '�ndrings�nske fjernet fra databasen');
define('_AM_WFD_MOD_REQUPDATED', 'Valgte download �ndret og databasen er opdateret');

*/
define('_AM_WFD_MOD_TOTMODREQUESTS', 'Antal �ndrings�nsker:');
define('_AM_WFD_MOD_MODREQUESTS', 'Redigerede filer');
define('_AM_WFD_MOD_MODREQUESTSINFO', 'Redigerede fil informationer');
define('_AM_WFD_MOD_MODID', 'ID');
define('_AM_WFD_MOD_MODTITLE', 'Titel');
define('_AM_WFD_MOD_MODPOSTER', 'Oprindelig indsender:');
define('_AM_WFD_MOD_DATE', 'Indsendt');
define('_AM_WFD_MOD_NOMODREQUEST', 'Der er ingen �nsker der matcher dette kriterie');
define('_AM_WFD_MOD_TITLE', 'Download titel:');
define('_AM_WFD_MOD_LID', 'Download ID: ');
define('_AM_WFD_MOD_CID', 'Kategori:');
define('_AM_WFD_MOD_URL', 'Ekstern URL:');
define('_AM_WFD_MOD_MIRROR', 'Download Mirror: ');
define('_AM_WFD_MOD_SIZE', 'Download St�rrelse: ');
define('_AM_WFD_MOD_PUBLISHER', 'Indsender: ');
define('_AM_WFD_MOD_LICENSE', 'Software Licens: ');
define('_AM_WFD_MOD_FEATURES', 'Muligheder:');
define('_AM_WFD_MOD_FORUMID', 'Forum:');
define('_AM_WFD_MOD_LIMITATIONS', 'Software begr�nsninger:');
define('_AM_WFD_MOD_DHISTORY', 'Download Histrorie;');
define('_AM_WFD_MOD_SCREENSHOT', 'Screenshot:');
define('_AM_WFD_MOD_HOMEPAGE', 'Hjemmeside:');
define('_AM_WFD_MOD_HOMEPAGETITLE', 'Hjemmeside titel:');
define('_AM_WFD_MOD_VERSION', 'Version:');
define('_AM_WFD_MOD_SHOTIMAGE', 'Screenshot:');
define('_AM_WFD_MOD_FILESIZE', 'Fil st�rrelse:');
define('_AM_WFD_MOD_PLATFORM', 'Software Platform: ');
define('_AM_WFD_MOD_PRICE', 'Pris:');
define('_AM_WFD_MOD_LICENCE', 'Software Licens: ');
define('_AM_WFD_MOD_DESCRIPTION', 'Beskrivelse:');
define('_AM_WFD_MOD_REQUIREMENTS', 'Krav:');
define('_AM_WFD_MOD_MODIFYSUBMITTER', 'Indsender:');
define('_AM_WFD_MOD_MODIFYSUBMIT', 'Indsender:');
define('_AM_WFD_MOD_PROPOSED', 'Forslag til download detaljer');
define('_AM_WFD_MOD_ORIGINAL', 'Originale download detaljer');
define('_AM_WFD_MOD_REQDELETED', '�ndrings�nske fjernet fra databasen');
define('_AM_WFD_MOD_REQUPDATED', 'Valgte download �ndret og databasen er opdateret');
define('_AM_WFD_MOD_VIEW', 'Vis');
define('_AM_WFD_MOD_FILENAME', 'Lokalt filnavn:');
define('_AM_WFD_MOD_FILETYPE', 'Lokal filtype:');
define('_AM_WFD_MOD_STATUS', 'Status:');
define('_AM_WFD_MOD_RATING', 'Bed�mmelse:');
define('_AM_WFD_MOD_HITS', 'Hits: ');
define('_AM_WFD_MOD_VOTES', 'Stemmer:');
define('_AM_WFD_MOD_COMMENTS', 'Komment�r:');
define('_AM_WFD_MOD_PUBLISHED', 'Offentliggjort:');
define('_AM_WFD_MOD_EXPIRED', 'Udl�bet:');
define('_AM_WFD_MOD_UPDATED', 'Opdateret:');
define('_AM_WFD_MOD_OFFLINE', 'Offline: ');
define('_AM_WFD_MOD_REQUESTDATE', '�nsket dato:');
define('_AM_WFD_MOD_IPADDRESS', 'IP Addresse: ');
define('_AM_WFD_MOD_NOTIFYPUB', 'Besked:');
define('_AM_WFD_MOD_PAYPALEMAIL', 'PayPal Email: ');
define('_AM_WFD_MOD_SUMMARY', 'Resum�:');

//Reviews defines
define('_AM_WFD_REV_SNEWMNAMEDESC', 'Godkend ');
define('_AM_WFD_REV_ID', 'ID');
define('_AM_WFD_REV_TITLE', 'Titel');
define('_AM_WFD_REV_REVIEWTITLE', 'Titel p� bed�mmelse');
define('_AM_WFD_REV_POSTER', 'Indsender');
define('_AM_WFD_REV_SUBMITDATE', 'Indsendt');
define('_AM_WFD_REV_FTITLE', 'Titel p� bed�mmelse:');
define('_AM_WFD_REV_FRATING', 'Bed�mmelse:');
define('_AM_WFD_REV_FDESCRIPTION', 'Beskrivelse af bed�mmelse:');
define('_AM_WFD_REV_FAPPROVE', 'Godkendelse af bed�mmelse:');
define('_AM_WFD_REV_ACTION', 'Handling');
define('_AM_WFD_REV_NOWAITINGREVIEWS', 'Ingen afventende bed�mmelser fundet');
define('_AM_WFD_REVIEW_APPROVETHIS', 'Godkend bed�mmelse');
define('_AM_WFD_REV_NOPUBLISHEDREVIEWS', 'Ingen offenliggjorte bed�mmelser fundet');
define('_AM_WFD_REV_REVIEW_UPDATED', 'Valgte bed�mmelser redigeret og databasen er opdateret.');
define('_AM_WFD_REV_REVIEW_TOTAL', 'Antal bed�mmelser:');
define('_AM_WFD_REV_REVIEW_WAITING', 'Afventende bed�mmelser');
define('_AM_WFD_REV_REVIEW_PUBLISHED', 'Offentliggjorte bed�mmelser');

//File management
define('_AM_WFD_FILE_SUBMITTERID', 'Indsenders bruger ID: <br /><br />Lad det v�re som det er med mindre du vil �ndre det til personen der indsendte downloaded');
define('_AM_WFD_FILE_ID', 'Fil ID:');
define('_AM_WFD_FILE_IP', 'IP adressen p� indsender.');
define('_AM_WFD_FILE_ALLOWEDAMIME', '<div style=\'padding-top: 4px; padding-bottom: 4px;\'><b>Tilladte fil endelser for administratorer</b>:</div>');
define('_AM_WFD_FILE_MODIFYFILE', 'Redig�r fil information');
define('_AM_WFD_FILE_CREATENEWFILE', 'Opret ny fil.');
define('_AM_WFD_FILE_TITLE', 'Fil titel:');
define('_AM_WFD_FILE_DLURL', 'Ekstern URL: ');
define('_AM_WFD_FILE_FILENAME', 'Lokalt filnavn:<br /><br /><span style=\'font-weight: normal;\'>Bem�rk: Hvis du benytter lokale filer som download, skal du ogs� angive den korrekte filtype herunder.!</span>');
define('_AM_WFD_FILE_FILETYPE', 'Fil type:');
define('_AM_WFD_FILE_MIRRORURL', 'Fil Mirror: ');
define('_AM_WFD_FILE_SUMMARY', 'Fil Resum�:');
define('_AM_WFD_FILE_DESCRIPTION', 'Fil beskrivelse:');
define('_MD_WFD_FILE_SUMMARY', 'Fil Resum�:');
define('_AM_WFD_FILE_DUPLOAD', 'Upload fil:');
define('_AM_WFD_FILE_CATEGORY', 'V�lg kategori;');
define('_AM_WFD_FILE_HOMEPAGETITLE', 'Hjemmeside tite:');
define('_AM_WFD_FILE_HOMEPAGE', 'Hjemmeside:');
define('_AM_WFD_FILE_SIZE', 'Fil st�rrelse:');
define('_AM_WFD_FILE_VERSION', 'Fil version:');
define('_AM_WFD_FILE_PUBLISHER', 'Fil udgiver:');
define('_AM_WFD_FILE_PLATFORM', 'Software Platform:');
define('_AM_WFD_FILE_LICENCE', 'Software Licens: ');
define('_AM_WFD_FILE_LIMITATIONS', 'Software begr�nsninger: ');
define('_AM_WFD_FILE_PRICE', 'Pris:');
define('_AM_WFD_FILE_KEYFEATURES', 'Muligheder:<br /><br /><span style=\'font-weight: normal;\'>Adskil hver mulighed med |</span>');
define('_AM_WFD_FILE_REQUIREMENTS', 'System krav:<br /><br /><span style=\'font-weight: normal;\'>Adskil hvert krav med |</span>');
define('_AM_WFD_FILE_HISTORY', 'Redig�r download historie :<br /><br /><span style=\'font-weight: normal;\'>Tilf�r ny download historik og brug kun dette felt hvis du har behov for at redigerer tidligere historik.</span>');
define('_AM_WFD_FILE_HISTORYD', 'Tilf�j ny download historik:<br /><br /><span style=\'font-weight: normal;\'>Versionsnummer og dato vil automatisk blive tilf�jet.</span>');
define('_AM_WFD_FILE_HISTORYVERS', '<b>Version: </b>');
define('_AM_WFD_FILE_HISTORDATE', ' <b>Opdateret::</b> ');
define('_AM_WFD_FILE_FILESSTATUS', ' Set Download offline?<br /><br /><span style=\'font-weight: normal;\'>Download will not be viewable to all users.</span>');
define('_AM_WFD_FILE_SETASUPDATED', 'S�t download status som opdateret?<br /><br /><span style=\'font-weight: normal;\'>Download vil vise et ikon (opdateret).</span>');
define('_AM_WFD_FILE_SHOTIMAGE', 'V�lg screenshot billed: <br /><br /><span style=\'font-weight: normal;\'>Bem�rk at screenshots kun vil blive vist hvis det er aktiveret i indstillingerne.</span>');
define('_AM_WFD_FILE_DISCUSSINFORUM', 'Tilf�j diskussion i dette forum?');
define('_AM_WFD_FILE_PUBLISHDATE', 'Fil udgivelsesdato:');
define('_AM_WFD_FILE_EXPIREDATE', 'Fil udl�bsdato:');
define('_AM_WFD_FILE_CLEARPUBLISHDATE', '<br /><br />Fjern udgivelsesdato:');
define('_AM_WFD_FILE_CLEAREXPIREDATE', '<br /><br />Fjern udl�bsdato:');
define('_AM_WFD_FILE_PUBLISHDATESET', 'Udgiv dato');
define('_AM_WFD_FILE_SETDATETIMEPUBLISH', 'Angiv dato/tid for udgivelse');
define('_AM_WFD_FILE_SETDATETIMEEXPIRE', 'Angiv dato/tid for udl�b');
define('_AM_WFD_FILE_SETPUBLISHDATE', '<b>Angiv udgivelses dato: </b>');
define('_AM_WFD_FILE_SETNEWPUBLISHDATE', '<b>Angiv ny udgivelses dato: </b><br />Udgivet:');
define('_AM_WFD_FILE_SETPUBDATESETS', '<b>Udgiv dato sat:</b><br />Udgivet den:');
define('_AM_WFD_FILE_EXPIREDATESET', 'Udl�bs dato sat.');
define('_AM_WFD_FILE_SETEXPIREDATE', '<b>S�t udl�bsdato: </b>');
define('_AM_WFD_FILE_MUSTBEVALID', 'Screenshot billed skal v�re en valid billedfil under %s biblioteket (eks. shot.gif).<br /> Lad det st� blankt hvis der ikke er nogle billedfiler.');
define('_AM_WFD_FILE_EDITAPPROVE', 'Godkend download:');
define('_AM_WFD_FILE_NEWFILEUPLOAD', 'Ny fil oprettet og databasen er opdateret.');
define('_AM_WFD_FILE_FILEMODIFIEDUPDATE', 'Valgte fil er redigeret og databasen er opdateret');
define('_AM_WFD_FILE_REALLYDELETEDTHIS', '�nsker du virkelig at slette den valgte fil?');
define('_AM_WFD_FILE_FILEWASDELETED', 'Filen %s er fjernet fra databasen.');
define('_AM_WFD_FILE_USE_UPLOAD_TITLE', 'Brug upload filnavn for fil titel');
define('_AM_WFD_FILE_FILEAPPROVED', 'Filen er godkendt og databasen er opdateret.');
define('_AM_WFD_FILE_CREATENEWSSTORY', '<b>Opret nyhed ud fra download</b>');
define('_AM_WFD_FILE_SUBMITNEWS', 'Brug ny filtitel som nyhed?');
define('_AM_WFD_FILE_NEWSCATEGORY', 'V�lg nyhedskategori for at indsende nyhed.');
define('_AM_WFD_FILE_NEWSTITLE', 'Nyhedstitel:<div style=\'padding-top: 4px; padding-bottom: 4px;\'><span style=\'font-weight: normal;\'>Lad den v�re blank hvis du �nsker at bruge fil titel.</span></div>');

/*
* Broken downloads defines
*/
define('_AM_WFD_SBROKENSUBMIT', 'Brudte:');
define('_AM_WFD_BROKEN_FILE', 'Rapport over Brudte:');
define('_AM_WFD_BROKEN_FILEIGNORED', 'Rapport over brudte downloads ignoreret og fjernet fra databasen!');
define('_AM_WFD_BROKEN_NOWACK', 'Anerkendelse �ndret og databasen er opdateret!');
define('_AM_WFD_BROKEN_NOWCON', 'Confirmed status changed and database updated!');
define('_AM_WFD_BROKEN_REPORTINFO', 'Rapport over brudte downloads');
define('_AM_WFD_BROKEN_REPORTSNO', 'Afventende rapport over brudte:');
define('_AM_WFD_BROKEN_IGNOREDESC', '<b>Ignorer</b> rapporten og slet kun rapporten over brudte downloads.');
define('_AM_WFD_BROKEN_IGNORE_ALT', 'Ignorer og slet rapporten over brudte downloads.');
define('_AM_WFD_BROKEN_DELETEDESC', '<b>Sletter</b> rapporteret download data og rapporten over brudte filer.');
define('_AM_WFD_BROKEN_DELETE_ALT', 'Slet rapporteret download data og rapporten over brudte filer.');
define('_AM_WFD_BROKEN_EDITDESC', '<b>Redig�r</b> download for at retter fejl.');
define('_AM_WFD_BROKEN_EDIT_ALT', 'Redig�r dwonlaod for at rette fejl');
define('_AM_WFD_BROKEN_ACKDESC', '<b>Anerkendelse</b> S�t anerkendelse om brudte filer.');
define('_AM_WFD_BROKEN_ACK_ALT', 'Anerkendelse om brudte filer.');
define('_AM_WFD_BROKEN_CONFIRMDESC', '<b>Bekr�ft</b> S�t bekr�ftelse p� rapport over brudte filer.');
define('_AM_WFD_BROKEN_CONFIRM_ALT', 'Bekr�ft status p� rapport over brudte filer.');

define('_AM_WFD_BROKEN_ID', 'ID');
define('_AM_WFD_BROKEN_TITLE', 'Titel');
define('_AM_WFD_BROKEN_REPORTER', 'Rapporteret af');
define('_AM_WFD_BROKEN_FILESUBMITTER', 'Indsender');
define('_AM_WFD_BROKEN_DATESUBMITTED', 'Indsendt den');
define('_AM_WFD_BROKEN_ACTION', 'Handling');
define('_AM_WFD_BROKEN_NOFILEMATCH', 'Der er ikke nogen rapport over brudte downloads, som matcher dette kriterie.');
define('_AM_WFD_BROKENFILEDELETED', 'Download beskrivelse fjernet, databasen er opdateret og rapporten er fjernet');
define('_AM_WFD_BROKEN_DOWNLOAD_DONT_EXISTS', 'Filen eksisterer ikke mere');


/*
* About defines
*/
define('_AM_WFD_BY', 'af');

//block defines
define('_AM_WFD_BADMIN', 'Blok administration');
define('_AM_WFD_BLKDESC', 'Beskrivelse');
define('_AM_WFD_TITLE', 'Titel');
define('_AM_WFD_SIDE', 'Justering');
define('_AM_WFD_WEIGHT', 'V�gt');
define('_AM_WFD_VISIBLE', 'Synlig ');
define('_AM_WFD_ACTION', 'Handling');
define('_AM_WFD_SBLEFT', 'Venstre');
define('_AM_WFD_SBRIGHT', 'H�jre');
define('_AM_WFD_CBLEFT', 'Center venstre');
define('_AM_WFD_CBRIGHT', 'Center H�jre');
define('_AM_WFD_CBCENTER', 'Center midt');
define('_AM_WFD_ACTIVERIGHTS', 'Aktuelle rettigheder');
define('_AM_WFD_ACCESSRIGHTS', 'Adgangs rettigheder');

//image admin icon
define('_AM_WFD_ICO_EDIT', 'Redig�r denne del');
define('_AM_WFD_ICO_DELETE', 'Slet denne del');
define('_AM_WFD_ICO_ONLINE', 'Online');
define('_AM_WFD_ICO_OFFLINE', 'Offline');
define('_AM_WFD_ICO_APPROVED', 'Godkendt');
define('_AM_WFD_ICO_NOTAPPROVED', 'Ikke godkendt');

define('_AM_WFD_ICO_LINK', 'Besl�gtede link');
define('_AM_WFD_ICO_URL', 'Tilf�j besl�gtede URL');
define('_AM_WFD_ICO_ADD', 'Tilf�j');
define('_AM_WFD_ICO_APPROVE', 'Godkend');
define('_AM_WFD_ICO_STATS', 'Statistik');

define('_AM_WFD_ICO_IGNORE', 'Ignorer');
define('_AM_WFD_ICO_ACK', 'Brudte downloads anerkendelsesrapport');
define('_AM_WFD_ICO_REPORT', 'Anerkend rapport over brudte download?');
define('_AM_WFD_ICO_CONFIRM', 'Rapport over brudte download godkendt.');
define('_AM_WFD_ICO_CONBROKEN', 'Bekr�ft rapport over brudte download=');





define('_AM_WFD_DB_IMPORT', 'Import�r');
define('_AM_WFD_DB_CURRENTVER', 'Aktuel version: <span class=\'currentVer\'>%s</span>');
define('_AM_WFD_DB_DBVER', 'Database Version %s');
define('_AM_WFD_DB_MSG_ADD_DATA', 'Data tilf�jet i tabel %s');
define('_AM_WFD_DB_MSG_ADD_DATA_ERR', 'Fejl ved tilf�jelse af data i table %s');
define('_AM_WFD_DB_MSG_CHGFIELD', '�ndre feltet %s i tabellen %s');
define('_AM_WFD_DB_MSG_CHGFIELD_ERR', 'Fejl ved �ndring af feltet %s i tabellen %s');
define('_AM_WFD_DB_MSG_CREATE_TABLE', 'Tabellen %s oprettet');
define('_AM_WFD_DB_MSG_CREATE_TABLE_ERR', 'Fejl ved oprettelse af tabellen %s');
define('_AM_WFD_DB_MSG_NEWFIELD', 'Feltet %s tilf�jet');
define('_AM_WFD_DB_MSG_NEWFIELD_ERR', 'Fejl ved tilf�jelse af feltet %s');
define('_AM_WFD_DB_NEEDUPDATE', 'Din database er for�ldet. Du skal opgraderer dine database tabeller.!<br><b>Bem�rk: Det anbefales at du laver en backup af alle dine WF-Downloads databaser inden du k�rer dette opgraderingsscript.</b><br>');
define('_AM_WFD_DB_NOUPDATE', 'Din database er OK. Ingen opdateringer n�dvendigt.');
define('_AM_WFD_DB_UPDATE_DB', 'Opdaterer databasen');
define('_AM_WFD_DB_UPDATE_ERR', 'Fejl ved opdatering til version %s');
define('_AM_WFD_DB_UPDATE_NOW', 'Opdat�r nu!');
define('_AM_WFD_DB_UPDATE_OK', 'Opdateret til version %s');
define('_AM_WFD_DB_UPDATE_TO', 'Opdat�r til version %s');

define('_AM_WFD_GOMOD', 'G� til modul');
define('_AM_WFD_UPDATE_MODULE', 'Opdat�r modul');
define('_AM_WFD_MDOWNLOADS', 'Fil vedligehold');
define('_AM_WFD_DB_MSG_UPDATE_TABLE', 'Opdaterer feltv�rdier i %s');
define('_AM_WFD_DB_MSG_UPDATE_TABLE_ERR', 'Fejl ved opdatering feltv�rdier i %s');

// Mirrors
// waiting mirrors
define('_AM_WFD_AMIRRORS', 'Mirrors vedligehold');
define('_AM_WFD_AMIRRORS_WAITING', 'Mirrors information om afventende.');
define('_AM_WFD_AMIRRORS_INFO', 'Mirrors vedligeholdelses information.');
define('_AM_WFD_AMIRRORS_APPROVE', '<b>Godkend</b> ny mirror information uden validering');
define('_AM_WFD_AMIRRORS_EDIT', '<b>Redig�r</b> ny mirror information og godkend.');
define('_AM_WFD_AMIRRORS_DELETE', '<b>Slet</b> ny mirror information.');

//mirrors defines
define('_AM_WFD_MIRROR_MIRRORTITLE', 'Mirror v�rt');
define('_AM_WFD_MIRROR_NOPUBLISHEDMIRRORS', 'Ingen offentlige mirrors fundet');
define('_AM_WFD_MIRROR_MIRROR_TOTAL', 'Total antal mirror:');
define('_AM_WFD_MIRROR_MIRROR_WAITING', 'Afventende mirrors');
define('_AM_WFD_MIRROR_MIRROR_PUBLISHED', 'Offentliggjorte Mirrors');
define('_AM_WFD_MIRROR_SNEWMNAMEDESC', 'Godkendte Mirror: ');
define('_AM_WFD_MIRROR_ID', 'ID');
define('_AM_WFD_MIRROR_TITLE', 'Titel');
define('_AM_WFD_MIRROR_MUSTBEVALID', 'Hjemmeside logo skal v�re en valid billedfil i biblioteket %s (eks. shot.gif). Lad det st� blankt hvis der ikke er noget billed.');
define('_AM_WFD_MIRROR_POSTER', 'Indsender');
define('_AM_WFD_MIRROR_SUBMITDATE', 'Indsendt den');
define('_AM_WFD_MIRROR_FHOMEURLTITLE', 'Hjemmeside titel:');
define('_AM_WFD_MIRROR_FHOMEURL', 'Hjemmeside URL:');
define('_AM_WFD_MIRROR_UPLOADIMAGE', 'Upload Logo:<br /><br />Et lille logo der repr�senterer din hjemmeside');
define('_AM_WFD_MIRROR_MIRRORIMAGE', 'Side logo:');
define('_AM_WFD_MIRROR_CONTINENT', 'Verdensdel:');
define('_AM_WFD_MIRROR_LOCATION', 'Sted:<br /><br />For eksempel: London, UK');
define('_AM_WFD_MIRROR_DOWNURL', 'Download URL:<br /><br />Indtast URL til filen');
define('_AM_WFD_MIRROR_FAPPROVE', 'Mirror godkendt:');
define('_AM_WFD_MIRROR_ACTION', 'Handling');
define('_AM_WFD_MIRROR_NOWAITINGMIRRORS', 'Ingen afventende mirror fundet.');
define('_AM_WFD_MIRROR_MIRROR_UPDATED', 'Valgte mirror redigeret og databasen er opdateret.');
define('_AM_WFD_MIRROR_APPROVETHIS', 'Godkend mirror');

//continents (used in mirrors page)
define('_AM_WFD_CONT1', 'Afrika');
define('_AM_WFD_CONT2', 'Antarktis');
define('_AM_WFD_CONT3', 'Asien');
define('_AM_WFD_CONT4', 'Europa');
define('_AM_WFD_CONT5', 'Nordamerika');
define('_AM_WFD_CONT6', 'Sydamerika');
define('_AM_WFD_CONT7', 'Oceanien');

define('_AM_WFD_HELP', 'Hj�lp');


// added - start - March 4 2006 - jpc
define('_AM_WFD_FFS_SUBMITBROKEN', 'Indsend.');
define('_AM_WFD_FFS_STANDARD_FORM', 'Nej, brug standard formular');
define('_AM_WFD_FFS_CUSTOM_FORM', 'Brug en speciel formular til denne kategori?');
define('_AM_WFD_FFS_DOWNLOADTITLE', 'Indsend en \'{category}\' fil.');
define('_AM_WFD_FFS_EDITDOWNLOADTITLE', 'Redig�r en \'{category}\' fil.');
define('_AM_WFD_FFS_BACK', 'Tilbage');
define('_AM_WFD_FFS_RELOAD', 'Reload');

  
define('_MD_WFD_CATEGORYC', 'Kategori:');  // _MD to reuse the category form
define('_MD_WFD_FFS_SUBMITCATEGORYHEAD', 'Hvilken kategori af filer vil du indsende?');
define('_MD_WFD_FFS_DOWNLOADDETAILS', 'Download detaljer:');
define('_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS', 'Specielle detaljer:');
define('_MD_WFD_FILETITLE', 'Download Titel:');
define('_MD_WFD_DLURL', 'Download URL: ');
define('_MD_WFD_UPLOAD_FILEC', 'Upload Fil:');
define('_MD_WFD_DESCRIPTION', 'Beskrivelse');
// added - end - March 4 2006 - jpc
?>