<?php
/** Bosnian (bosanski)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Bugoslav
 * @author CERminator
 * @author Demicx
 * @author DzWiki
 * @author Edinwiki
 * @author Fulup
 * @author Kaganer
 * @author Kal-El
 * @author Malafaya
 * @author Nemo bis
 * @author Palapa
 * @author Seha
 * @author Smooth O
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Mediji',
	NS_SPECIAL          => 'Posebno',
	NS_TALK             => 'Razgovor',
	NS_USER             => 'Korisnik',
	NS_USER_TALK        => 'Razgovor_sa_korisnikom',
	NS_PROJECT_TALK     => 'Razgovor_{{grammar:instrumental|$1}}',
	NS_FILE             => 'Datoteka',
	NS_FILE_TALK        => 'Razgovor_o_datoteci',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_razgovor',
	NS_TEMPLATE         => 'Šablon',
	NS_TEMPLATE_TALK    => 'Razgovor_o_šablonu',
	NS_HELP             => 'Pomoć',
	NS_HELP_TALK        => 'Razgovor_o_pomoći',
	NS_CATEGORY         => 'Kategorija',
	NS_CATEGORY_TALK    => 'Razgovor_o_kategoriji',
);

$namespaceAliases = array(
	'Medija' => NS_MEDIA,
	'Slika' => NS_FILE,
	'Razgovor_o_datoteci' => NS_FILE_TALK,
	'MedijaViki' => NS_MEDIAWIKI,
	'Razgovor_o_MedijaVikiju' => NS_MEDIAWIKI_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'AktivniKorisnici' ),
	'Allmessages'               => array( 'SvePoruke' ),
	'Allpages'                  => array( 'SveStranice' ),
	'Ancientpages'              => array( 'NajstarijeStranice' ),
	'Badtitle'                  => array( 'Losnaslov' ),
	'Blankpage'                 => array( 'PraznaStranica' ),
	'Block'                     => array( 'BlokirajIP' ),
	'Blockme'                   => array( 'BlokirajMe' ),
	'Booksources'               => array( 'KnjizniIzvori' ),
	'BrokenRedirects'           => array( 'NedovršenaPreusmjerenja' ),
	'Categories'                => array( 'Kategorije' ),
	'ChangeEmail'               => array( 'IzmjeniMail' ),
	'ChangePassword'            => array( 'PonistiLozinku' ),
	'ComparePages'              => array( 'UporedjivanjeStranica' ),
	'Confirmemail'              => array( 'PotvrdiEmail' ),
	'Contributions'             => array( 'Doprinos' ),
	'CreateAccount'             => array( 'NapraviRačun' ),
	'Deadendpages'              => array( 'MrtveStranice' ),
	'DeletedContributions'      => array( 'ObrisaniDoprinosi' ),
	'Disambiguations'           => array( 'Čvor' ),
	'DoubleRedirects'           => array( 'DvostrukaPreusmjerenja' ),
	'EditWatchlist'             => array( 'IzmjeniPraćeniSpisak' ),
	'Emailuser'                 => array( 'EmailKorisnika' ),
	'Export'                    => array( 'Izvoz' ),
	'Fewestrevisions'           => array( 'Najmanje_uređivane_stranice' ),
	'FileDuplicateSearch'       => array( 'PotragaDuplihFajlova' ),
	'Filepath'                  => array( 'PutDoDatoteke' ),
	'Import'                    => array( 'Uvoz' ),
	'Invalidateemail'           => array( 'PogresanEmail' ),
	'BlockList'                 => array( 'ListaBlokiranjaPrekoIP' ),
	'LinkSearch'                => array( 'PotragaLinkova' ),
	'Listadmins'                => array( 'ListaAdministratora' ),
	'Listbots'                  => array( 'ListaBotova' ),
	'Listfiles'                 => array( 'Datoteke', 'Slike' ),
	'Listgrouprights'           => array( 'ListaKorisničkihPrava' ),
	'Listredirects'             => array( 'ListaPreusmjeravanja' ),
	'Listusers'                 => array( 'ListaKorisnika' ),
	'Lockdb'                    => array( 'ZakljucajDB' ),
	'Log'                       => array( 'Protokol', 'Protokoli' ),
	'Lonelypages'               => array( 'Siročad' ),
	'Longpages'                 => array( 'DugeStranice' ),
	'MergeHistory'              => array( 'SpojiHistoriju' ),
	'MIMEsearch'                => array( 'MIMEPretraga' ),
	'Mostcategories'            => array( 'Najviše_kategorija' ),
	'Mostimages'                => array( 'Najviše_povezane_datoteke', 'Najviše_povezane_slike' ),
	'Mostlinked'                => array( 'Najviše_povezane_stranice' ),
	'Mostlinkedcategories'      => array( 'Najviše_povezane_kategorije' ),
	'Mostlinkedtemplates'       => array( 'Najviše_povezani_šabloni' ),
	'Mostrevisions'             => array( 'Najviše_uređivane_stranice' ),
	'Movepage'                  => array( 'PreusmjeriStranicu' ),
	'Mycontributions'           => array( 'MojiDoprinosi' ),
	'Mypage'                    => array( 'MojaStranica' ),
	'Mytalk'                    => array( 'MojRazgovor' ),
	'Newimages'                 => array( 'Nove_datoteke', 'Nove_slike' ),
	'Newpages'                  => array( 'NoveStranice' ),
	'Popularpages'              => array( 'PopularneStranice' ),
	'Preferences'               => array( 'Postavke' ),
	'Prefixindex'               => array( 'IndeksPrefiksa' ),
	'Protectedpages'            => array( 'ZasticeneStranice' ),
	'Protectedtitles'           => array( 'ZasticeniNazivi' ),
	'Randompage'                => array( 'Slučajna_stranica' ),
	'Randomredirect'            => array( 'SlucajnoPreusmjerenje' ),
	'Recentchanges'             => array( 'NedavneIzmjene' ),
	'Recentchangeslinked'       => array( 'PovezaneNedavneIzmjene' ),
	'Revisiondelete'            => array( 'VratiBrisanje' ),
	'Search'                    => array( 'Pretraga' ),
	'Shortpages'                => array( 'KratkeStranice' ),
	'Specialpages'              => array( 'SpecijalneStranice' ),
	'Statistics'                => array( 'Statistike' ),
	'Tags'                      => array( 'Oznake' ),
	'Unblock'                   => array( 'Deblokada' ),
	'Uncategorizedcategories'   => array( 'KategorijeBezKategorije' ),
	'Uncategorizedimages'       => array( 'SlikeBezKategorije' ),
	'Uncategorizedpages'        => array( 'StraniceBezKategorije' ),
	'Uncategorizedtemplates'    => array( 'SabloniBezKategorije' ),
	'Undelete'                  => array( 'PovratBrisanog' ),
	'Unlockdb'                  => array( 'OdkljucajDB' ),
	'Unusedcategories'          => array( 'NekorišteneKategorije' ),
	'Unusedimages'              => array( 'Nekorištene_datoteke', 'Nekorištene_slike' ),
	'Unusedtemplates'           => array( 'NekoristeniSabloni' ),
	'Unwatchedpages'            => array( 'NepraceneStranice' ),
	'Upload'                    => array( 'Postavi_datoteku' ),
	'Userlogin'                 => array( 'KorisničkaPrijava' ),
	'Userlogout'                => array( 'KorisničkaOdjava' ),
	'Userrights'                => array( 'KorisnickaPrava' ),
	'Version'                   => array( 'Verzija' ),
	'Wantedcategories'          => array( 'Tražene_kategorije' ),
	'Wantedfiles'               => array( 'Tražene_datoteke' ),
	'Wantedpages'               => array( 'Tražene_stranice' ),
	'Wantedtemplates'           => array( 'Traženi_šabloni' ),
	'Watchlist'                 => array( 'ListaPraćenja' ),
	'Whatlinkshere'             => array( 'StaJeLinkovanoOvdje' ),
	'Withoutinterwiki'          => array( 'BezInterwiki' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#PREUSMJERI', '#REDIRECT' ),
	'notoc'                     => array( '0', '__BEZSADRŽAJA__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__BEZGALERIJE__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__FORSIRANISADRŽAJ__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__SADRŽAJ__', '__TOC__' ),
	'noeditsection'             => array( '0', '__BEZ_IZMJENA__', '__BEZIZMJENA__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'TRENUTNIMJESEC', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'TRENUTNIMJESEC1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'TRENUTNIMJESECIME', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'TRENUTNIMJESECROD', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'TRENUTNIMJESECSKR', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'TRENUTNIDAN', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'TRENUTNIDAN2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'TRENUTNIDANIME', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'TRENUTNAGODINA', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'TRENUTNOVRIJEME', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'TRENUTNISAT', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'LOKALNIMJESEC', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'LOKALNIMJESEC1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'LOKALNIMJESECIME', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'LOKALNIMJESECIMEROD', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'LOKALNIMJESECSKR', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'LOKALNIDAN', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'LOKALNIDAN2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'LOKALNIDANIME', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'LOKALNAGODINA', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'LOKALNOVRIJEME', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'LOKALNISAT', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'BROJSTRANICA', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'BROJČLANAKA', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'BROJDATOTEKA', 'BROJFAJLOVA', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'BROJKORISNIKA', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'BROJAKTIVNIHKORISNIKA', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'BROJPROMJENA', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'BROJPREGLEDA', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'STRANICA', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'STRANICE', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'IMENSKIPROSTOR', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'IMENSKIPROSTORI', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'PROSTORZARAZGOVOR', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'PROSTORIZARAZGOVOR', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'PROSTORSUBJEKTA', 'PROSTORCLANAKA', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'PROSTORISUBJEKTA', 'PROSTORICLANKA', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'PUNOIMESTRANE', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'PUNOIMESTRANEE', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'IMEPODSTRANICE', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'IMENAPODSTRANICE', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'IMEBAZNESTRANICE', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'IMENABAZNESTRANICE', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'IMESTRANICERAZGOVORA', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'IMENASTRANICERAZGOVORA', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'IMESTRANICESUBKJEKTA', 'IMESTRANICECLANKA', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'IMENASTRANICESUBJEKTA', 'IMENASTRANICECLANAKA', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'POR:', 'MSG:' ),
	'subst'                     => array( '0', 'ZAMJENI:', 'SUBST:' ),
	'msgnw'                     => array( '0', 'NVPOR:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'mini', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'mini=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'desno', 'd', 'right' ),
	'img_left'                  => array( '1', 'lijevo', 'l', 'left' ),
	'img_none'                  => array( '1', 'n', 'bez', 'none' ),
	'img_width'                 => array( '1', '$1piksel', '$1p', '$1px' ),
	'img_center'                => array( '1', 'centar', 'c', 'center', 'centre' ),
	'img_framed'                => array( '1', 'okvir', 'ram', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'bez_okvira', 'frameless' ),
	'img_page'                  => array( '1', 'stranica=$1', 'stranica $1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'na_gore', 'na_gore=$1', 'na_gore_$1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'granica', 'border' ),
	'img_baseline'              => array( '1', 'pocetna_linija', 'baseline' ),
	'img_sub'                   => array( '1', 'odjeljak', 'sub' ),
	'img_top'                   => array( '1', 'vrh', 'top' ),
	'img_text_top'              => array( '1', 'vrh_teksta', 'text-top' ),
	'img_middle'                => array( '1', 'sredina', 'middle' ),
	'img_bottom'                => array( '1', 'dugme', 'bottom' ),
	'img_text_bottom'           => array( '1', 'tekst-dugme', 'text-bottom' ),
	'sitename'                  => array( '1', 'IMESAJTA', 'SITENAME' ),
	'ns'                        => array( '0', 'IP:', 'NS:' ),
	'localurl'                  => array( '0', 'LOKALNAADRESA:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'LOKALNEADRESE:', 'LOCALURLE:' ),
	'servername'                => array( '0', 'IMESERVERA', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'SKRIPTA', 'SCRIPTPATH' ),
	'grammar'                   => array( '0', 'GRAMATIKA:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'POL:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__BEZTC__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__BEZCC__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'TRENUTNASEDMICA', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'TRENUTNIDOV', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'LOKALNASEDMICA', 'LOCALWEEK' ),
	'revisionid'                => array( '1', 'IDREVIZIJE', 'REVISIONID' ),
	'revisionday'               => array( '1', 'REVIZIJEDANA', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'REVIZIJEDANA2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'REVIZIJAMJESECA', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'REVIZIJAGODINE', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'REVIZIJAVREMENSKOGPECATA', 'REVISIONTIMESTAMP' ),
	'plural'                    => array( '0', 'MNOŽINA:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'PUNURL:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'PUNURLE:', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'LCPRVI:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'UCPRVI:', 'UCFIRST:' ),
	'displaytitle'              => array( '1', 'POKAZINASLOV', 'DISPLAYTITLE' ),
	'newsectionlink'            => array( '1', '__LINKNOVESEKCIJE__', '__NEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'SADASNJAVERZIJA', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'DEKODIRAJADRESU', 'URLENCODE:' ),
	'currenttimestamp'          => array( '1', 'SADASNJIVREMENSKIPECAT', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'LOKALNIVREMENSKIPECAT', 'LOCALTIMESTAMP' ),
	'language'                  => array( '0', '#JEZIK:', '#LANGUAGE:' ),
	'pagesinnamespace'          => array( '1', 'STRANICEUIMENSKOMPROSTORU:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'BROJADMINISTRATORA', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'NUMERICKIFORMAT', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'JASTUKLIJEVO', 'PADLEFT' ),
	'padright'                  => array( '0', 'JASTUKDESNO', 'PADRIGHT' ),
	'special'                   => array( '0', 'specijalno', 'special' ),
	'filepath'                  => array( '0', 'STAZADATOTEKE:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'oznaka', 'tag' ),
	'hiddencat'                 => array( '1', '__SAKRIVENAKATEGORIJA__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'STRANICEUKATEGORIJI', 'STRANICEUKAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'VELICINASTRANICE', 'PAGESIZE' ),
	'index'                     => array( '1', '__SADRZAJ__', '__INDEX__' ),
	'noindex'                   => array( '1', '__BEZSADRZAJA__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'BROJUGRUPI', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__STATISTICNOPREUSMJERENJE__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'NIVOZASTITE', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'formatdatuma', 'formatdate', 'dateformat' ),
	'url_path'                  => array( '0', 'PUTANJA', 'PATH' ),
	'url_query'                 => array( '0', 'UPIT', 'QUERY' ),
);

$fallback8bitEncoding = "iso-8859-2";
$separatorTransformTable = array( ',' => '.', '.' => ',' );
$linkTrail = '/^([a-zćčžšđž]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline' => 'Podvuci veze:',
'tog-justify' => 'Uravnjaj pasuse',
'tog-hideminor' => 'Sakrij male izmjene u spisku nedavnih izmjena',
'tog-hidepatrolled' => 'Sakrij patrolirane izmjene u nedavnim promjenama',
'tog-newpageshidepatrolled' => 'Sakrij patrolirane stranice sa spiska novih stranica',
'tog-extendwatchlist' => 'Proširi spisak praćenja za pogled svih izmjena, ne samo nedavnih',
'tog-usenewrc' => 'Grupiraj izmjene po stranicama sa nedavnih izmjena i praćenih članaka (zahtijeva JavaScript)',
'tog-numberheadings' => 'Automatski numeriši podnaslove',
'tog-showtoolbar' => 'Prikaži dugmiće za izmjene (JavaScript)',
'tog-editondblclick' => 'Izmijeni stranice dvostrukim klikom (JavaScript)',
'tog-editsection' => 'Omogući da mijenjam pojedinačne odjeljke putem [uredi] linka',
'tog-editsectiononrightclick' => 'Uključite uređivanje odjeljka sa pritiskom na desno dugme miša u naslovu odjeljka (JavaScript)',
'tog-showtoc' => 'Prikaži sadržaj (u svim stranicama sa više od tri podnaslova)',
'tog-rememberpassword' => 'Zapamti moju šifru u ovom pregledniku (najviše $1 {{PLURAL:$1|dan|dana}})',
'tog-watchcreations' => 'Dodaj stranice i datoteke koje napravim na moj spisak praćenih članaka',
'tog-watchdefault' => 'Dodaj stranice i datoteke koje uređujem na moj spisak praćenih članaka',
'tog-watchmoves' => 'Dodaj stranice i datoteke koje pomjerim na moj spisak praćenih članaka',
'tog-watchdeletion' => 'Dodaj stranice i datoteke koje izbrišem na moj spisak praćenih članaka',
'tog-minordefault' => 'Označi sve izmjene malim isprva',
'tog-previewontop' => 'Prikaži pretpregled prije polja za izmjenu a ne poslije',
'tog-previewonfirst' => 'Prikaži izgled pri prvoj izmjeni',
'tog-nocache' => 'Onemogući keširanje stranica u pregledniku',
'tog-enotifwatchlistpages' => 'Pošalji mi e-mail kada se promijeni stranica ili datoteka sa mog spiska praćenih članaka',
'tog-enotifusertalkpages' => 'Pošalji mi e-poštu kad se promijeni moja korisnička stranica za razgovor',
'tog-enotifminoredits' => 'Pošalji mi e-poštu također za male izmjene u stranicama i datotekama',
'tog-enotifrevealaddr' => 'Otkrij adresu moje e-pošte u porukama obaviještenja',
'tog-shownumberswatching' => 'Prikaži broj korisnika koji prate',
'tog-oldsig' => 'Postojeći potpis:',
'tog-fancysig' => 'Smatraj potpis kao wikitekst (bez automatskog linka)',
'tog-showjumplinks' => 'Omogući "skoči na" linkove',
'tog-uselivepreview' => 'Koristite pregled uživo (JavaScript) (Eksperimentalno)',
'tog-forceeditsummary' => 'Opomeni me pri unosu praznog sažetka',
'tog-watchlisthideown' => 'Sakrij moje izmjene sa spiska praćenih članaka',
'tog-watchlisthidebots' => 'Sakrij izmjene botova sa spiska praćenih članaka',
'tog-watchlisthideminor' => 'Sakrij zanemarljive izmjene sa spiska mojih praćenja',
'tog-watchlisthideliu' => 'Sakrij promjene prijavljenih korisnika sa liste praćenja',
'tog-watchlisthideanons' => 'Sakrij promjene anonimnih korisnika sa liste praćenja',
'tog-watchlisthidepatrolled' => 'Sakrij patrolirane izmjene sa spiska praćenja',
'tog-ccmeonemails' => 'Pošalji mi kopije emailova koje pošaljem drugim korisnicima',
'tog-diffonly' => 'Ne prikazuj sadržaj stranice ispod prikaza razlika',
'tog-showhiddencats' => 'Prikaži skrivene kategorije',
'tog-noconvertlink' => 'Onemogući konverziju naslova linkova',
'tog-norollbackdiff' => 'Nakon vraćanja zanemari prikaz razlika',
'tog-useeditwarning' => 'Upozori me kada napustim stranicu za izmjene bez spašenih promjena',

'underline-always' => 'Uvijek',
'underline-never' => 'Nikad',
'underline-default' => 'Po standardu izgleda ili preglednika',

# Font style option in Special:Preferences
'editfont-style' => 'Stil slova područja uređivanja:',
'editfont-default' => 'Po podešavanjima preglednika',
'editfont-monospace' => 'Slova sa jednostrukim razmakom',
'editfont-sansserif' => 'Slova bez serifa',
'editfont-serif' => 'Slova serif',

# Dates
'sunday' => 'nedjelja',
'monday' => 'ponedjeljak',
'tuesday' => 'utorak',
'wednesday' => 'srijeda',
'thursday' => 'četvrtak',
'friday' => 'petak',
'saturday' => 'subota',
'sun' => 'Ned',
'mon' => 'Pon',
'tue' => 'Uto',
'wed' => 'Sri',
'thu' => 'Čet',
'fri' => 'Pet',
'sat' => 'Sub',
'january' => 'januar',
'february' => 'februar',
'march' => 'mart',
'april' => 'april',
'may_long' => 'maj',
'june' => 'juni',
'july' => 'juli',
'august' => 'august',
'september' => 'septembar',
'october' => 'oktobar',
'november' => 'novembar',
'december' => 'decembar',
'january-gen' => 'januara',
'february-gen' => 'februara',
'march-gen' => 'marta',
'april-gen' => 'aprila',
'may-gen' => 'maja',
'june-gen' => 'juna',
'july-gen' => 'jula',
'august-gen' => 'augusta',
'september-gen' => 'septembra',
'october-gen' => 'oktobra',
'november-gen' => 'novembra',
'december-gen' => 'decembra',
'jan' => 'jan',
'feb' => 'feb',
'mar' => 'mar',
'apr' => 'apr',
'may' => 'maj',
'jun' => 'jun',
'jul' => 'jul',
'aug' => 'aug',
'sep' => 'sep',
'oct' => 'okt',
'nov' => 'nov',
'dec' => 'dec',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Kategorija|Kategorije}}',
'category_header' => 'Članci u kategoriji "$1"',
'subcategories' => 'Potkategorije',
'category-media-header' => 'Datoteke u kategoriji "$1"',
'category-empty' => "''Ova kategorija trenutno ne sadrži članke ni medije.''",
'hidden-categories' => '{{PLURAL:$1|Sakrivena kategorija|Sakrivene kategorije}}',
'hidden-category-category' => 'Sakrivene kategorije',
'category-subcat-count' => '{{PLURAL:$2|Ova kategorija ima sljedeću podkategoriju.|Ova kategorija ima {{PLURAL:$1|sljedeće podkategorije|sljedećih $1 podkategorija}}, od $2 ukupno.}}',
'category-subcat-count-limited' => 'Ova kategorija sadrži {{PLURAL:$1|slijedeću $1 podkategoriju|slijedeće $1 podkategorije|slijedećih $1 podkategorija}}.',
'category-article-count' => '{{PLURAL:$2|U ovoj kategoriji se nalazi $1 članak.|{{PLURAL:$1|Prikazan je $1 članak|Prikazana su $1 članka|Prikazano je $1 članaka}} od ukupno $2 u ovoj kategoriji.}}',
'category-article-count-limited' => '{{PLURAL:$1|Slijedeća $1 stranica je|Slijedeće $1 stranice su|Slijedećih $1 stranica je}} u ovoj kategoriji.',
'category-file-count' => '{{PLURAL:$2|Ova kategorija ima slijedeću $1 datoteku.|{{PLURAL:$1|Prikazana je $1 datoteka|Prikazane su $1 datoteke|Prikazano je $1 datoteka}} u ovoj kategoriji, od ukupno $2.}}',
'category-file-count-limited' => '{{PLURAL:$1|Slijedeća $1 datoteka je|Slijedeće $1 datoteke su|Slijedećih $1 datoteka je}} u ovoj kategoriji.',
'listingcontinuesabbrev' => 'nast.',
'index-category' => 'Indeksirane stranice',
'noindex-category' => 'Neindeksirane stranice',
'broken-file-category' => 'Stranice sa neispravnim linkovima do datoteka',

'about' => 'O',
'article' => 'Članak',
'newwindow' => '(otvara se u novom prozoru)',
'cancel' => 'Poništite',
'moredotdotdot' => 'Još...',
'mypage' => 'Korisnička stranica',
'mytalk' => 'Razgovor',
'anontalk' => 'Razgovor za ovu IP adresu',
'navigation' => 'Navigacija',
'and' => '&#32;i',

# Cologne Blue skin
'qbfind' => 'Pronađite',
'qbbrowse' => 'Prelistajte',
'qbedit' => 'Uredi',
'qbpageoptions' => 'Opcije stranice',
'qbmyoptions' => 'Moje opcije',
'qbspecialpages' => 'Posebne stranice',
'faq' => 'ČPP',
'faqpage' => 'Project:NPP',

# Vector skin
'vector-action-addsection' => 'Dodaj temu',
'vector-action-delete' => 'Izbriši',
'vector-action-move' => 'Pomjeri',
'vector-action-protect' => 'Zaštiti',
'vector-action-undelete' => 'Vrati obrisano',
'vector-action-unprotect' => 'Promijeni zaštitu',
'vector-simplesearch-preference' => 'Omogući pojednostavljenu traku pretrage (samo vektorski izgled)',
'vector-view-create' => 'Napravi',
'vector-view-edit' => 'Uredi',
'vector-view-history' => 'Pregled historije',
'vector-view-view' => 'Čitanje',
'vector-view-viewsource' => 'Pogledaj izvor',
'actions' => 'Akcije',
'namespaces' => 'Imenski prostori',
'variants' => 'Varijante',

'navigation-heading' => 'Navigacija',
'errorpagetitle' => 'Greška',
'returnto' => 'Povratak na $1.',
'tagline' => 'Izvor: {{SITENAME}}',
'help' => 'Pomoć',
'search' => 'Pretraga',
'searchbutton' => 'Traži',
'go' => 'Idi',
'searcharticle' => 'Idi',
'history' => 'Historija stranice',
'history_short' => 'Historija',
'updatedmarker' => 'promjene od moje zadnje posjete',
'printableversion' => 'Prilagođeno štampanju',
'permalink' => 'Trajni link',
'print' => 'Štampa',
'view' => 'Pogled',
'edit' => 'Uredi',
'create' => 'Napravi',
'editthispage' => 'Uredite ovu stranicu',
'create-this-page' => 'Napravi ovu stranicu',
'delete' => 'Obriši',
'deletethispage' => 'Obriši ovu stranicu',
'undelete_short' => 'Vrati obrisanih {{PLURAL:$1|$1 izmjenu|$1 izmjene|$1 izmjena}}',
'viewdeleted_short' => 'Pogledaj {{PLURAL:$1|jednu obrisanu izmjenu|$1 obrisane izmjene|$1 obrisanih izmjena}}',
'protect' => 'Zaštitite',
'protect_change' => 'promijeni',
'protectthispage' => 'Zaštitite ovu stranicu',
'unprotect' => 'Promijeni zaštitu',
'unprotectthispage' => 'Promijeni zaštitu za ovu stranicu',
'newpage' => 'Nova stranica',
'talkpage' => 'Razgovor o stranici',
'talkpagelinktext' => 'Razgovor',
'specialpage' => 'Posebna Stranica',
'personaltools' => 'Lični alati',
'postcomment' => 'Nova sekcija',
'articlepage' => 'Pogledaj članak',
'talk' => 'Razgovor',
'views' => 'Pregledi',
'toolbox' => 'Traka sa alatima',
'userpage' => 'Pogledaj korisničku stranicu',
'projectpage' => 'Pogledaj stranicu projekta',
'imagepage' => 'Pogledajte stranicu datoteke',
'mediawikipage' => 'Pogledaj stranicu sa porukama',
'templatepage' => 'Pogledajte stranicu za šablone',
'viewhelppage' => 'Pogledajte stranicu za pomoć',
'categorypage' => 'Pogledaj stranicu kategorije',
'viewtalkpage' => 'Pogledaj raspravu',
'otherlanguages' => 'Ostali jezici',
'redirectedfrom' => '(Preusmjereno sa $1)',
'redirectpagesub' => 'Preusmjeri stranicu',
'lastmodifiedat' => 'Ova stranica je posljednji put izmijenjena $2, $1',
'viewcount' => 'Ovoj stranici je pristupljeno {{PLURAL:$1|$1 put|$1 puta}}.',
'protectedpage' => 'Zaštićena stranica',
'jumpto' => 'Idi na:',
'jumptonavigation' => 'navigacija',
'jumptosearch' => 'traži',
'view-pool-error' => 'Žao nam je, serveri su trenutno preopterećeni.
Previše korisnika pokušava da pregleda ovu stranicu.
Molimo pričekajte trenutak prije nego što ponovno pokušate pristupiti ovoj stranici.

$1',
'pool-timeout' => 'Zaustavi čekanje na zaključavanje',
'pool-queuefull' => 'Red na pool je prenapunjen',
'pool-errorunknown' => 'Nepoznata greška',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'O projektu {{SITENAME}}',
'aboutpage' => 'Project:O_projektu_{{SITENAME}}',
'copyright' => 'Svi sadržaji podliježu "$1" licenci.',
'copyrightpage' => '{{ns:project}}:Autorska_prava',
'currentevents' => 'Trenutni događaji',
'currentevents-url' => 'Project:Novosti',
'disclaimers' => 'Odricanje odgovornosti',
'disclaimerpage' => 'Project:Uslovi korištenja, pravne napomene i odricanje odgovornosti',
'edithelp' => 'Pomoć pri uređivanju stranice',
'edithelppage' => 'Help:Uređivanje',
'helppage' => 'Help:Sadržaj',
'mainpage' => 'Početna strana',
'mainpage-description' => 'Početna strana',
'policy-url' => 'Project:Pravila',
'portal' => 'Portal zajednice',
'portal-url' => 'Project:Portal zajednice',
'privacy' => 'Politika privatnosti',
'privacypage' => 'Project:Pravila o anonimnosti',

'badaccess' => 'Greška pri odobrenju',
'badaccess-group0' => 'Nije vam dozvoljeno izvršiti akciju koju ste zahtjevali.',
'badaccess-groups' => 'Akcija koju ste zahtjevali je ograničena na korisnike iz {{PLURAL:$2|ove grupe|jedne od grupa}}: $1.',

'versionrequired' => 'Potrebna je verzija $1 MediaWikija',
'versionrequiredtext' => 'Potrebna je verzija $1 MediaWikija da bi se koristila ova strana. Pogledaj [[Special:Version|verziju]].',

'ok' => 'U redu',
'retrievedfrom' => 'Dobavljeno iz "$1"',
'youhavenewmessages' => 'Imate $1 ($2).',
'newmessageslink' => 'novih poruka',
'newmessagesdifflink' => 'posljednja promjena',
'youhavenewmessagesfromusers' => 'Imate $1 od {{PLURAL:$3|drugog korisnika|$3 korisnika}} ($2).',
'youhavenewmessagesmanyusers' => 'Imate $1 od mnogo korisnika ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|novu poruku|nove poruke}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|posljednja izmjena|posljednje izmjene}}',
'youhavenewmessagesmulti' => 'Imate nove poruke na $1',
'editsection' => 'uredi',
'editsection-brackets' => '[$1]',
'editold' => 'uredi',
'viewsourceold' => 'pogledaj izvor',
'editlink' => 'uredi',
'viewsourcelink' => 'pogledaj izvor',
'editsectionhint' => 'Uredi sekciju: $1',
'toc' => 'Sadržaj',
'showtoc' => 'pokaži',
'hidetoc' => 'sakrij',
'collapsible-collapse' => 'sklopi',
'collapsible-expand' => 'Proširi',
'thisisdeleted' => 'Pogledaj ili vrati $1?',
'viewdeleted' => 'Pogledaj $1?',
'restorelink' => '{{PLURAL:$1|$1 izbrisana izmjena|$1 izbrisanih izmjena}}',
'feedlinks' => 'Fid:',
'feed-invalid' => 'Nedozvoljen tip potpisa',
'feed-unavailable' => 'RSS izvori nisu dostupni',
'site-rss-feed' => '$1 RSS izvor',
'site-atom-feed' => '$1 Atom izvor',
'page-rss-feed' => '"$1" RSS izvor',
'page-atom-feed' => '"$1" Atom izvor',
'red-link-title' => '$1 (stranica ne postoji)',
'sort-descending' => 'Poredaj opadajuće',
'sort-ascending' => 'Poredaj rastuće',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Članak',
'nstab-user' => 'Korisnička stranica',
'nstab-media' => 'Mediji',
'nstab-special' => 'Posebna stranica',
'nstab-project' => 'Stranica projekta',
'nstab-image' => 'Datoteka',
'nstab-mediawiki' => 'Poruka',
'nstab-template' => 'Šablon',
'nstab-help' => 'Pomoć',
'nstab-category' => 'Kategorija',

# Main script and global functions
'nosuchaction' => 'Nema takve akcije',
'nosuchactiontext' => 'Akcija navedena u URL-u nije valjana.
Možda ste pogriješili pri unosu URL-a ili ste slijedili pokvaren link.
Moguće je i da je ovo greška u {{SITENAME}} softveru.',
'nosuchspecialpage' => 'Nema takve posebne stranice',
'nospecialpagetext' => '<strong>Tražili ste nevaljanu posebnu stranicu.</strong>

Spisak valjanih posebnih stranica se može naći na [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Greška',
'databaseerror' => 'Greška u bazi',
'dberrortext' => 'Desila je se sintaksna greška kod upita prema bazi podataka.
Ovo je se desilo zbog moguće greške u softveru.
Posljednji pokušani upit je bio: <blockquote><code>$1</code></blockquote> iz funkcije "<code>$2</code>".
Baza podataka je vratila grešku "<samp>$3: $4</samp>".',
'dberrortextcl' => 'Desila se sintaksna greška upita baze.
Posljednji pokušani upit je bio:
"$1"
iz funkcije "$2".
Baza podataka je vratila grešku "$3: $4".',
'laggedslavemode' => "'''Upozorenje''': Stranica, možda, nije ažurirana.",
'readonly' => 'Baza je zaključana',
'enterlockreason' => 'Unesite razlog za zaključavanje, uključujući procjenu vremena otključavanja',
'readonlytext' => 'Baza je trenutno zaključana za nove unose i ostale izmjene, vjerovatno zbog rutinskog održavanja, posle čega će biti vraćena u uobičajeno stanje.

Administrator koji ju je zaključao je ponudio ovo objašnjenje: $1',
'missing-article' => 'U bazi podataka nije pronađen tekst stranice tražen pod nazivom "$1" $2.

Do ovoga dolazi kada se prati pomjeranje ili historija linka za stranicu koja je pobrisana.


U slučaju da se ne radi o gore navedenom, moguće je da ste pronašli grešku u programu.
Molimo Vas da ovo prijavite [[Special:ListUsers/sysop|administratoru]] sa navođenjem tačne adrese stranice',
'missingarticle-rev' => '(revizija#: $1)',
'missingarticle-diff' => '(Razlika: $1, $2)',
'readonly_lag' => 'Baza podataka je zaključana dok se sekundarne baze podataka na serveru ne sastave sa glavnom.',
'internalerror' => 'Unutrašnja greška',
'internalerror_info' => 'Interna greška: $1',
'fileappenderrorread' => 'Nije se mogao pročitati "$1" tokom dodavanja.',
'fileappenderror' => 'Ne može se primijeniti "$1" na "$2".',
'filecopyerror' => 'Ne može se kopirati "$1" na "$2".',
'filerenameerror' => 'Ne može se promjeniti ime datoteke "$1" u "$2".',
'filedeleteerror' => 'Ne može se izbrisati datoteka "$1".',
'directorycreateerror' => 'Nije moguće napraviti direktorijum "$1".',
'filenotfound' => 'Ne može se naći datoteka "$1".',
'fileexistserror' => 'Nemoguće je napisati datoteku "$1": datoteka već postoji',
'unexpected' => 'Neočekivana vrijednost: "$1"="$2".',
'formerror' => 'Greška: ne može se poslati upitnik',
'badarticleerror' => 'Ova akcija ne može biti izvršena na ovoj stranici.',
'cannotdelete' => 'Ne može se obrisati stranica ili datoteka "$1".
Moguće je da ju je neko drugi već obrisao.',
'cannotdelete-title' => 'Ne mogu izbrisati stranicu "$1"',
'delete-hook-aborted' => 'Brisanje je prekinuo softverski priključak.
Nije ponuđeno nikakvo objašnjenje.',
'badtitle' => 'Loš naslov',
'badtitletext' => 'Zahtjevani naslov stranice je bio neispravan, prazan ili neispravno povezan međujezički ili interviki naslov.',
'perfcached' => 'Slijedeći podaci su keširani i možda neće biti u potpunosti ažurirani. Keš sadrži najviše {{PLURAL:$1|jedan rezultat|$1 rezultata}}.',
'perfcachedts' => 'Slijedeći podaci se nalaze u memoriji i zadnji put su ažurirani $1. Keš sadrži najviše {{PLURAL:$4|jedan rezultat|$4 rezultata}}.',
'querypage-no-updates' => 'Ažuriranje ove stranice je isključeno.
Podaci koji se ovdje nalaze ne moraju biti aktuelni.',
'wrong_wfQuery_params' => 'Netačni parametri za wfQuery()<br />
Funkcija: $1<br />
Pretraga: $2',
'viewsource' => 'pogledaj kod',
'viewsource-title' => 'Prikaz izvora stranice $1',
'actionthrottled' => 'Akcija je usporena',
'actionthrottledtext' => 'Kao anti-spam mjera, ograničene su vam izmjene u određenom vremenu, i trenutačno ste dostigli to ograničenje. Pokušajte ponovo poslije nekoliko minuta.',
'protectedpagetext' => 'Ova stranica je zaključana da bi se spriječile izmjene.',
'viewsourcetext' => 'Možete vidjeti i kopirati izvorni tekst ove stranice:',
'viewyourtext' => "Možete da pogledate i kopirate izvor '''vaših izmjena''' na ovoj stranici:",
'protectedinterface' => 'Ova stranica sadrži tekst korisničkog okruženja za softver na ovom wikiju i zaštićena je radi sprečavanja zloupotrebe.
Da biste dodali ili izmjenili prijevode svih wikija, posjetite [//translatewiki.net/  translatewiki.net], projekat za lokalizaciju Mediawikija.',
'editinginterface' => "'''Upozorenje:''' Mijenjate stranicu koja sadrži aktivan tekst programa.
Promjene na ovoj stranici dovode i do promjena za druge korisnike ovog wikija.
Za dodavanje ili promjene prijevoda svih wikija, molimo Vas koristite [//translatewiki.net/ translatewiki.net], projekt prijevoda za MediaWiki.",
'sqlhidden' => '(SQL pretraga sakrivena)',
'cascadeprotected' => 'Uređivanje ove stranice je zabranjeno jer sadrži {{PLURAL:$1|stranicu zaštićenu|stranice zaštićene}} od uređivanja iz razloga:
$2',
'namespaceprotected' => "Vi nemate dozvulu da mijenjate stranicu '''$1'''.",
'customcssprotected' => 'Nemate dozvolu za mijenjanje ove CSS stranice jer sadrži osobne postavke nekog drugog korisnika.',
'customjsprotected' => 'Nemate dozvolu za mijenjanje ove JavaScript stranice jer sadrži osobne postavke nekog drugog korisnika.',
'ns-specialprotected' => 'Specijalne stranice se ne mogu uređivati.',
'titleprotected' => 'Naslov stranice je zaštićen od postavljanja od strane korisnika [[User:$1|$1]].
Iz razloga "\'\'$2\'\'".',
'invalidtitle-knownnamespace' => 'Neispravan naslov s imenskim prostorom "$2" i tekstom "$3"',
'invalidtitle-unknownnamespace' => 'Neispravan naslov s imenskim prostorom br. $1 i tekstom "$2"',
'exception-nologin' => 'Niste prijavljeni',
'exception-nologin-text' => 'Ova stranica ili aktivnost zahtijeva da budete prijavljeni na ovom wikiju.',

# Virus scanner
'virus-badscanner' => "Loša konfiguracija: nepoznati anti-virus program: ''$1''",
'virus-scanfailed' => 'skeniranje nije uspjelo (code $1)',
'virus-unknownscanner' => 'nepoznati anti-virus program:',

# Login and logout pages
'logouttext' => "'''Sad ste odjavljeni.'''

Možete nastaviti da koristite {{SITENAME}} anonimno, ili se ponovo <span class='plainlinks'>[$1 prijaviti]</span> kao isti ili kao drugi korisnik.
Obratite pažnju da neke stranice mogu nastaviti da se prikazuju kao da ste još uvijek prijavljeni, dok ne očistite keš svog preglednika.",
'welcomeuser' => 'Dobro došli, $1',
'welcomecreation-msg' => 'Vaš nalog je napravljen.
Ne zaboravite da prilagodite sebi svoja [[Special:Preferences|{{SITENAME}} podešavanja]].',
'yourname' => 'Korisničko ime:',
'userlogin-yourname' => 'Korisničko ime',
'userlogin-yourname-ph' => 'Unesite Vaše korisničko ime',
'yourpassword' => 'Šifra:',
'userlogin-yourpassword' => 'Šifra',
'userlogin-yourpassword-ph' => 'Unesite Vašu šifru/lozinku',
'createacct-yourpassword-ph' => 'Unesite šifru/lozinku',
'yourpasswordagain' => 'Ponovite šifru:',
'createacct-yourpasswordagain-ph' => 'Unesite šifru/lozinku opet',
'remembermypassword' => 'Zapamti moju šifru na ovom računaru (najviše $1 {{PLURAL:$1|dan|dana|dana}})',
'userlogin-signwithsecure' => 'Koristite sigurnu konekciju',
'securelogin-stick-https' => 'Ostani povezan na HTTPS nakon prijave',
'yourdomainname' => 'Vaš domen:',
'password-change-forbidden' => 'Ne možete da promjenite lozinku na ovom wikiju.',
'externaldberror' => 'Došlo je do greške pri vanjskoj autorizaciji baze podataka ili vam nije dopušteno osvježavanje Vašeg vanjskog korisničkog računa.',
'login' => 'Prijavi se',
'nav-login-createaccount' => 'Prijavi se / Registruj se',
'loginprompt' => "Morate imati kolačiće ('''cookies''') omogućene da biste se prijavili na {{SITENAME}}.",
'userlogin' => 'Prijavi se / Registruj se',
'userloginnocreate' => 'Prijavi se',
'logout' => 'Odjavi me',
'userlogout' => 'Odjavi me',
'notloggedin' => 'Niste prijavljeni',
'userlogin-noaccount' => 'Nemate korisničko ime?',
'userlogin-joinproject' => 'Pridružite se {{SITENAME}}',
'nologin' => "Nemate korisničko ime? '''$1'''.",
'nologinlink' => 'Napravite nalog',
'createaccount' => 'Napravi nalog',
'gotaccount' => "Imate nalog? '''$1'''.",
'gotaccountlink' => 'Prijavi se',
'userlogin-resetlink' => 'Zaboravili ste detalje vaše prijave?',
'userlogin-helplink' => '[[{{MediaWiki:helplogin-url}}|Pomoć pri prijavljivanju]]',
'createacct-join' => 'Unesite svoje podatke ispod.',
'createacct-emailrequired' => 'Adresa e-pošte',
'createacct-emailoptional' => 'Adresa e-pošte (opcionalno)',
'createaccountmail' => 'Koristite privremenu, slučajno stvorenu šifru/lozinku i pošaljite na dole navedenu adrеsu e-pošte',
'createacct-realname' => 'Pravo ime (opcionalno)',
'createaccountreason' => 'Razlog:',
'createacct-reason' => 'Razlog',
'createacct-captcha' => 'Sigurnosna provjera',
'createacct-imgcaptcha-ph' => 'Unesite tekst koji vidite iznad',
'createacct-submit' => 'Napravite svoj korisnički račun',
'badretype' => 'Šifre koje ste unijeli se ne poklapaju.',
'userexists' => 'Korisničko ime koje ste unijeli je već u upotrebi.
Molimo Vas da izaberete drugo ime.',
'loginerror' => 'Greška pri prijavljivanju',
'createaccounterror' => 'Ne može se napraviti račun: $1',
'nocookiesnew' => "Korisnički nalog je napravljen, ali niste prijavljeni.  {{SITENAME}} koristi kolačiće (''cookies'') da bi se korisnici prijavili.  Vi ste onemogućili kolačiće na Vašem računaru.  Molimo Vas da ih omogućite, a onda se prijavite sa svojim novim korisničkim imenom i šifrom.",
'nocookieslogin' => "{{SITENAME}} koristi kolačiće (''cookies'') da bi se korisnici prijavili.  Vi ste onemogućili kolačiće na Vašem kompjuteru.  Molimo Vas da ih omogućite i da pokušate ponovo sa prijavom.",
'nocookiesfornew' => 'Korisnički račun nije napravljen, jer nismo mogli da potvrdimo njegov izvor.
Provjerite da li su cookies omogućeni, ponovo učitajte ovu stranicu i pokušajte ponovo.',
'noname' => 'Niste izabrali ispravno korisničko ime.',
'loginsuccesstitle' => 'Prijavljivanje uspješno',
'loginsuccess' => "'''Sad ste prijavljeni na {{SITENAME}} kao \"\$1\".'''",
'nosuchuser' => 'Ne postoji korisnik sa imenom "$1".
Korisnička imena razlikuju velika i mala slova.
Provjerite vaše kucanje ili [[Special:UserLogin/signup|napravite novi korisnički račun]].',
'nosuchusershort' => 'Ne postoji korisnik sa imenom "$1".
Provjerite da li ste dobro ukucali.',
'nouserspecified' => 'Morate izabrati korisničko ime.',
'login-userblocked' => 'Ovaj korisnik je blokiran. Prijava nije dopuštena.',
'wrongpassword' => 'Unijeli ste neispravnu šifru.
Molimo Vas da pokušate ponovno.',
'wrongpasswordempty' => 'Šifra je bila prazna.
Molimo Vas da pokušate ponovno.',
'passwordtooshort' => 'Šifra mora imati najmanje {{PLURAL:$1|1 znak|$1 znaka|$1 znakova}}.',
'password-name-match' => 'Vaša šifra mora biti različita od Vašeg korisničkog imena.',
'password-login-forbidden' => 'Korištenje ovih korisničkih imena i šifara je zabranjeo.',
'mailmypassword' => 'Pošalji mi novu šifru',
'passwordremindertitle' => 'Nova privremena šifra za {{SITENAME}}',
'passwordremindertext' => 'Neko (vjerovatno Vi, sa IP adrese $1) je zahtjevao da vam pošaljemo novu šifru za {{SITENAME}}  ($4). Privremena šifra za korisnika "$2" je napravljena i glasi "$3". Ako ste to željeli, sad treba da se prijavite i promjenite šifru.
Vaša privremena šifra će isteči za {{PLURAL:$5|$5 dan|$5 dana}}.

Ako je neko drugi napravio ovaj zahtjev ili ako ste se sjetili vaše šifre i ne želite više da je promjenite, možete da ignorišete ovu poruku i da nastavite koristeći vašu staru šifru.',
'noemail' => 'Ne postoji adresa e-pošte za korisnika "$1".',
'noemailcreate' => 'Morate da navedete validnu e-mail adresu',
'passwordsent' => 'Nova šifra je poslata na adresu e-pošte korisnika "$1".
Molimo Vas da se prijavite pošto je primite.',
'blocked-mailpassword' => 'Da bi se spriječila nedozvoljena akcija, Vašoj IP adresi je onemogućeno uređivanje stranica kao i mogućnost zahtijevanje nove šifre.',
'eauthentsent' => 'Na navedenu adresu poslan je e-mail s potvrdom.
Prije nego što pošaljemo daljnje poruke, molimo vas da otvorite e-mail i slijedite u njemu sadržana uputstva da potvrdite da ste vi kreirali korisnički račun.',
'throttled-mailpassword' => 'Već Vam je poslan e-mail za promjenu šifre u {{PLURAL:$1|zadnjih sat vremena|zadnja $1 sata|zadnjih $1 sati}}.
Da bi se spriječila zloupotreba, može se poslati samo jedan e-mail za promjenu šifre {{PLURAL:$1|svakih sat vremena|svaka $1 sata|svakih $1 sati}}.',
'mailerror' => 'Greška pri slanju e-pošte: $1',
'acct_creation_throttle_hit' => 'Posjetioci na ovoj wiki koji koriste Vašu IP adresu su već napravili {{PLURAL:$1|$1 račun|$1 računa}} u zadnjih nekoliko dana, što je najveći broj dopuštenih napravljenih računa za ovaj period.
Kao rezultat, posjetioci koji koriste ovu IP adresu ne mogu trenutno praviti više računa.',
'emailauthenticated' => 'Vaša e-mail adresa je autentificirana na $2 u $3.',
'emailnotauthenticated' => 'Vaša e-mail adresa još nije autentificirana.
Nijedan e-mail neće biti poslan za bilo koju uslugu od slijedećih.',
'noemailprefs' => 'Unesite e-mail adresu za osposobljavanje slijedećih usluga.',
'emailconfirmlink' => 'Potvrdite Vašu e-mail adresu',
'invalidemailaddress' => 'Ova e-mail adresa ne može biti prihvaćena jer je u neodgovarajućem obliku.
Molimo vas da unesete ispravnu adresu ili ostavite prazno polje.',
'cannotchangeemail' => 'Na ovom wikiju ne možete promijeniti e-mail adresu računa.',
'emaildisabled' => 'Ova web-stranica ne može da šalje e-poruke.',
'accountcreated' => 'Korisnički račun je napravljen',
'accountcreatedtext' => 'Korisnički račun za $1 je napravljen.',
'createaccount-title' => 'Pravljenje korisničkog računa za {{SITENAME}}',
'createaccount-text' => 'Neko je napravio korisnički račun za vašu e-mail adresu na {{SITENAME}} ($4) sa imenom "$2", i sa šifrom "$3".
Trebali biste se prijaviti i promjeniti šifru.

Možete ignorisati ovu poruku, ako je korisnički račun napravljen greškom.',
'usernamehasherror' => 'Korisničko ime ne može sadržavati haš znakove',
'login-throttled' => 'Previše puta ste se pokušali prijaviti.
Molimo Vas da sačekate prije nego što pokušate ponovo.',
'login-abort-generic' => 'Vaša prijava nije bila uspješna – Prekinuto',
'loginlanguagelabel' => 'Jezik: $1',
'suspicious-userlogout' => 'Vaš zahtjev za odjavu je odbijen jer je poslan preko pokvarenog preglednika ili keširanog proksija.',

# Email sending
'php-mail-error-unknown' => 'Nepoznata greška u PHP funkciji mail()',
'user-mail-no-addy' => 'Pokušaj slanja e-maila bez navedene e-mail adrese.',

# Change password dialog
'resetpass' => 'Promijeni korisničku šifru',
'resetpass_announce' => 'Prijavili ste se sa privremenim kodom koji ste dobili na e-mail.
Da biste završili prijavu, morate unijeti novu šifru ovdje:',
'resetpass_text' => '<!-- Unesi tekst ovdje -->',
'resetpass_header' => 'Obnovi šifru za račun',
'oldpassword' => 'Stara šifra:',
'newpassword' => 'Nova šifra:',
'retypenew' => 'Ukucajte ponovo novu šifru:',
'resetpass_submit' => 'Odredi šifru i prijavi se',
'resetpass_success' => 'Vaša šifra je uspiješno promjenjena! Prijava u toku...',
'resetpass_forbidden' => 'Šifre ne mogu biti promjenjene',
'resetpass-no-info' => 'Morate biti prijavljeni da bi ste pristupili ovoj stranici direktno.',
'resetpass-submit-loggedin' => 'Promijeni šifru',
'resetpass-submit-cancel' => 'Odustani',
'resetpass-wrong-oldpass' => 'Privremena ili trenutna šifra nije validna.
Možda ste već uspješno promijenili Vašu šifru ili ste tražili novu privremenu šifru.',
'resetpass-temp-password' => 'Privremena šifra:',

# Special:PasswordReset
'passwordreset' => 'Poništavanje šifre',
'passwordreset-legend' => 'Poništi šifru',
'passwordreset-disabled' => 'Poništavanje šifre  je onemogućeno na ovoj wiki.',
'passwordreset-username' => 'Korisničko ime:',
'passwordreset-domain' => 'Domen:',
'passwordreset-capture' => 'Pogledati krajnji e-mail?',
'passwordreset-capture-help' => 'Ako označite ovu kućicu, e-poruka (s privremenom lozinkom) će biti prikazana i poslata korisniku.',
'passwordreset-email' => 'E-mail adresa:',
'passwordreset-emailtitle' => 'Detalji računa na {{SITENAME}}',
'passwordreset-emailtext-ip' => 'Neko (vjerovatno Vi, s IP adrese $1) je zatražio podsjetnik Vaših detalja računa za {{SITENAME}} ($4). Sljedeći {{PLURAL:$3|račun korisnika je|računi korisnika su}} povezani s ovom e-mail adresom:

$2

{{PLURAL:$3|Ova privremena šifra|Ove privremene šifre}} će isteći za {{PLURAL:$5|jedan dan|$5 dana}}.
Trebate se prijaviti i odabrati novu šifru. Ako je neko drugi napravio ovaj zahtjev, ili ako ste se sjetili Vaše početne šifre, a ne želite je promijeniti, možete zanemariti ovu poruku i nastaviti koristiti staru šifru.',
'passwordreset-emailtext-user' => 'Korisnik $1 na {{SITENAME}} je zatražio podsjetnik o detaljima Vašeg računa za {{SITENAME}}
($4). Sljedeći {{PLURAL:$3|korisnički račun je|korisnički računi su}} povezani s ovom e-mail adresom:

$2

{{PLURAL:$3|Ova privremena šifra|Ove privremene šifre}} će isteći za {{PLURAL:$5|jedan dan|$5 dana}}.
Trebate se prijaviti i odabrati novu šifru. Ako je neko drugi napravio ovaj
zahtjev, ili ako ste se sjetili Vaše originalne šifre, a ne želite je više promijeniti, 
možete zanemariti ovu poruku i nastaviti koristiti staru šifru.',
'passwordreset-emailelement' => 'Korisničko ime: $1
Privremena šifra: $2',
'passwordreset-emailsent' => 'E-mail podsjetnik je poslan.',
'passwordreset-emailsent-capture' => 'Poslat je podsjetnik preko e-pošte (prikazan dole).',
'passwordreset-emailerror-capture' => 'Napravljen je podsjetnik preko e-pošte (prikazan dole), ali ga ne mogu poslati korisniku zbog sljedećeg razloga: $1',

# Special:ChangeEmail
'changeemail' => 'Promijeni e-mail adresu',
'changeemail-header' => 'Promijeni e-mail adresu korisničkog računa',
'changeemail-text' => 'Ispunite ovaj formular da biste promijenili svoju e-mail adresu. Morat ćete upisati svoj pasvord da potvrdite ovu promjenu.',
'changeemail-no-info' => 'Morate biti prijavljeni za direktan pristup ovoj stranici.',
'changeemail-oldemail' => 'Trenutna e-mail adresa:',
'changeemail-newemail' => 'Nova e-mail adresa:',
'changeemail-none' => '(ništa)',
'changeemail-password' => 'Tvoja šifra/lozinka za {{SITENAME}}:',
'changeemail-submit' => 'Promijeni e-mail',
'changeemail-cancel' => 'Otkaži',

# Edit page toolbar
'bold_sample' => 'Podebljan tekst',
'bold_tip' => 'Podebljan tekst',
'italic_sample' => 'Kurzivan tekst',
'italic_tip' => 'Kurzivan tekst',
'link_sample' => 'Naslov linka',
'link_tip' => 'Unutrašnji link',
'extlink_sample' => 'http://www.example.com opis adrese',
'extlink_tip' => 'Vanjski link (zapamti prefiks http://)',
'headline_sample' => 'Naslov',
'headline_tip' => 'Podnaslov',
'nowiki_sample' => 'Dodaj neformatirani tekst ovdje',
'nowiki_tip' => 'Ignoriši viki formatiranje teksta',
'image_sample' => 'ime_slike.jpg',
'image_tip' => 'Uklopljena slika',
'media_sample' => 'ime_medija_fajla.ogg',
'media_tip' => 'Putanja ka multimedijalnoj datoteci',
'sig_tip' => 'Vaš potpis sa trenutnim vremenom',
'hr_tip' => 'Horizontalna linija (koristite oskudno)',

# Edit pages
'summary' => 'Sažetak:',
'subject' => 'Tema/naslov:',
'minoredit' => 'Ovo je mala izmjena',
'watchthis' => 'Prati ovu stranicu',
'savearticle' => 'Sačuvaj',
'preview' => 'Pregled stranice',
'showpreview' => 'Prikaži izgled',
'showlivepreview' => 'Pregled uživo',
'showdiff' => 'Prikaži izmjene',
'anoneditwarning' => 'Niste prijavljeni. Vaša IP adresa će biti zapisana.',
'anonpreviewwarning' => "''Niste prijavljeni. Nakon spremanja izmjena vaša IP adresa će biti zapisana u historiji uređivanja ove stranice.''",
'missingsummary' => "'''Napomena:''' Niste unijeli sažetak izmjene.
Ako kliknete na Sačuvaj, Vaša izmjena će biti sačuvana bez sažetka.",
'missingcommenttext' => 'Molimo unesite komentar ispod.',
'missingcommentheader' => "'''Podsjetnik:''' Niste napisali temu/naslov za ovaj komentar.
Ako ponovo kliknete na ''{{int:savearticle}}'', Vaše izmjene će biti spašene bez teme/naslova.",
'summary-preview' => 'Pregled sažetka:',
'subject-preview' => 'Pregled tema/naslova:',
'blockedtitle' => 'Korisnik je blokiran',
'blockedtext' => "'''Vaše korisničko ime ili IP adresa je blokirana.'''

Blokada izvršena od strane $1.
Dati razlog je slijedeći: ''$2''.

*Početak blokade: $8
*Kraj perioda blokade: $6
*Ime blokiranog korisnika: $7

Možete kontaktirati $1 ili nekog drugog [[{{MediaWiki:Grouppage-sysop}}|administratora]] da biste razgovarali o blokadi.

Ne možete koristiti opciju ''Pošalji e-mail korisniku'' osim ako niste unijeli e-mail adresu u [[Special:Preferences|Vaše postavke]].
Vaša trenutna IP adresa je $3, a oznaka blokade je #$5.
Molimo Vas da navedete gornje podatke pri zahtjevu za deblokadu.",
'autoblockedtext' => 'Vaša IP adresa je automatski blokirana jer je korištena od strane drugog korisnika, a blokirao ju je $1.
Naveden je slijedeći razlog:

:\'\'$2\'\'

* Početak blokade: $8
* Kraj blokade: $6
* Blokirani korisnik: $7

Možete kontaktirati $1 ili nekog drugog iz grupe [[{{MediaWiki:Grouppage-sysop}}|administratora]] i zahtijevati da Vas deblokira.

Zapamtite da ne možete koristiti opciju "pošalji e-mail ovom korisniku" sve dok ne unesete validnu e-mail adresu pri registraciji u Vašim [[Special:Preferences|korisničkim postavkama]] te Vas ne spriječava ga je koristite.

Vaša trenutna IP adresa je $3, a ID blokade je $5.
Molimo da navedete sve gore navedene detalje u zahtjevu za deblokadu.',
'blockednoreason' => 'razlog nije naveden',
'whitelistedittext' => 'Da bi ste uređivali stranice, morate se $1.',
'confirmedittext' => 'Morate potvrditi Vašu e-mail adresu prije nego počnete mijenjati stranice.
Molimo da postavite i verifikujete Vašu e-mail adresu putem Vaših [[Special:Preferences|korisničkih opcija]].',
'nosuchsectiontitle' => 'Ne mogu pronaći sekciju',
'nosuchsectiontext' => 'Pokušali ste uređivati sekciju koja ne postoji.
Možda je pomjerena ili obrisana dok ste pregledavali stranicu.',
'loginreqtitle' => 'Potrebno je prijavljivanje',
'loginreqlink' => 'prijavi se',
'loginreqpagetext' => 'Morate $1 da bi ste vidjeli druge strane.',
'accmailtitle' => 'Šifra poslana.',
'accmailtext' => "Nasumično odabrana šifra za nalog [[User talk:$1|$1]] je poslata na adresu $2.

Šifra za ovaj novi račun može biti promijenjena na stranici ''[[Special:ChangePassword|izmjene šifre]]'' nakon prijave.",
'newarticle' => '(Novi)',
'newarticletext' => "Došli ste na stranicu koja još nema sadržaja.
*Ako želite unijeti sadržaj, počnite tipkati u prozor ispod ovog teksta.
*Ako vam treba pomoć, idite na [[{{MediaWiki:Helppage}}|stranicu za pomoć]].
*Ako ste ovamo dospjeli slučajno, kliknite dugme \"Nazad\" (''Back'') u svom internet pregledniku.",
'anontalkpagetext' => "----''Ovo je stranica za razgovor za anonimnog korisnika koji još nije napravio nalog ili ga ne koristi.
Zbog toga moramo da koristimo brojčanu IP adresu kako bismo identifikovali njega ili nju.
Takvu adresu može dijeliti više korisnika.
Ako ste anonimni korisnik i mislite da su vam upućene nebitne primjedbe, molimo Vas da [[Special:UserLogin/signup|napravite nalog]] ili se [[Special:UserLogin|prijavite]] da biste izbjegli buduću zabunu sa ostalim anonimnim korisnicima.''",
'noarticletext' => 'Na ovoj stranici trenutno nema teksta.
Možete [[Special:Search/{{PAGENAME}}|tražiti naslov ove stranice]] na drugim stranicama.
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} tražiti u povezanim zapisima] ili [{{fullurl:{{FULLPAGENAME}}|action=edit}} urediti ovu stranicu]</span>.',
'noarticletext-nopermission' => 'Trenutno nema teksta na ovoj stranici.
Možete [[Special:Search/{{PAGENAME}}|tražiti ovaj naslov stranice]] na drugim stranicama ili <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} pretražiti povezane zapisnike]</span>, ali nemate dozvolu da napravite ovu stranicu.',
'missing-revision' => 'Uređivanje broj $1 na stranici "{{PAGENAME}}" ne postoji.

Ovo se obično dešava kada pratite zastarjelu vezu na stranice koja je obrisana.
Više informacija možete pronaći u [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} protokol brisanja].',
'userpage-userdoesnotexist' => 'Korisnički račun "<nowiki>$1</nowiki>" nije registrovan.
Molimo provjerite da li želite napraviti/izmijeniti ovu stranicu.',
'userpage-userdoesnotexist-view' => 'Korisnički račun "$1" nije registrovan.',
'blocked-notice-logextract' => 'Ovaj korisnik je trenutno blokiran.
Posljednje stavke zapisnika blokiranja možete pogledati ispod:',
'clearyourcache' => "'''Pažnja:''' Nakon što sačuvate izmjene, morate \"osvježiti\" keš memoriju vašeg pretraživača da bi ste vidjeli nova podešenja.'''
*'''Firefox / Safari:''' držite ''Shift'' tipku i kliknite na ''Reload'' dugme ili pritisnite ''Ctrl-F5'' ili ''Ctrl-R'' (''⌘-R'' na Macu)
*'''Google Chrome:''' pritisnite ''Ctrl-Shift-R'' (''⌘-Shift-R'' na Macu)
*'''Internet Explorer:''' držite tipku ''Ctrl'' i kliknite na ''Refresh'' ili pritisnite ''Ctrl-F5''
*'''Opera:''' očistite \"keš\" preko izbornika ''Tools → Preferences''",
'usercssyoucanpreview' => "'''Pažnja:''' Koristite dugme \"{{int:showpreview}}\" da testirate svoj novi CSS prije nego što sačuvate.",
'userjsyoucanpreview' => "'''Pažnja:''' Koristite dugme \"{{int:showpreview}}\" da testirate svoj novi JavaScript prije nego što sačuvate.",
'usercsspreview' => "'''Zapamtite ovo je samo izgled Vašeg CSS-a.'''
'''Ovaj pregled još uvijek nije sačuvan!'''",
'userjspreview' => "'''Zapamtite ovo je samo izgled vaše JavaScript-e, još uvijek nije sačuvan!'''",
'sitecsspreview' => "'''Zapamtite ovo je samo izgled ovog CSS-a.'''
'''Još uvijek nije sačuvan!'''",
'sitejspreview' => "'''Zapamtite ovo je samo izgled ovog koda JavaScripte.'''
'''Još uvijek nije sačuvan!'''",
'userinvalidcssjstitle' => "'''Upozorenje:''' Ne postoji interfejs pod imenom \"\$1\".
Ne zaboravite da imena stranica s .css i .js kodom počinju malim slovom, npr. {{ns:user}}:Foo/vector.css, a ne {{ns:user}}:Foo/Vector.css.",
'updated' => '(Osvježeno)',
'note' => "'''Pažnja:'''",
'previewnote' => "'''Ne zaboravite da je ovo samo pregled'''
Izmjene stranice nisu još sačuvane!",
'continue-editing' => 'Nastavi uređivati',
'previewconflict' => 'Ovaj pregled reflektuje tekst u gornjem polju
kako će izgledati ako pritisnete "Sačuvaj članak".',
'session_fail_preview' => "'''Izvinjavamo se! Nismo mogli obraditi vašu izmjenu zbog gubitka podataka o prijavi. Molimo pokušajte ponovno. Ako i dalje ne bude radilo, pokušajte se [[Special:UserLogout|odjaviti]] i ponovno prijaviti.'''",
'session_fail_preview_html' => "'''Žao nam je! Nismo mogli da obradimo vašu izmjenu zbog gubitka podataka.'''

''Zbog toga što {{SITENAME}} ima omogućen izvorni HTML, predpregled je sakriven kao predostrožnost protiv JavaScript napada.''

'''Ako ste pokušali da napravite pravu izmjenu, molimo pokušajte ponovo. Ako i dalje ne radi, pokušajte da se [[Special:UserLogout|odjavite]] i ponovo prijavite.'''",
'token_suffix_mismatch' => "'''Vaša izmjena nije prihvaćena jer je Vaš web preglednik ubacio znakove interpunkcije u token uređivanja.
Izmjena je odbačena da bi se spriječilo uništavanje teksta stranice.
To se događa ponekad kad korisite problematični anonimni proxy koji je baziran na web-u.'''",
'edit_form_incomplete' => "'''Neki dijelovi uređivačkog obrasca nisu došli do servera; dvaput provjerite da su vaše izmjene nepromjenjene i pokušajte ponovno.'''",
'editing' => 'Uređujete $1',
'creating' => 'Pravljenje stranice $1',
'editingsection' => 'Uređujete $1 (dio)',
'editingcomment' => 'Uređujete $1 (nova sekcija)',
'editconflict' => 'Sukobljenje izmjene: $1',
'explainconflict' => "Neko drugi je promjenio ovu stranicu otkad ste Vi počeli da je mjenjate.
Gornje tekstualno polje sadrži tekst stranice koji trenutno postoji.
Vaše izmjene su prikazane u donjem tekstu.
Moraćete da unesete svoje promjene u postojeći tekst.
'''Samo''' tekst u gornjem tekstualnom polju će biti snimljen kad
pritisnete \"{{int:savearticle}}\".",
'yourtext' => 'Vaš tekst',
'storedversion' => 'Uskladištena verzija',
'nonunicodebrowser' => "'''UPOZORENJE: Vaš preglednik ne podržava Unicode zapis znakova.
Molimo Vas promijenite ga prije sljedećeg uređivanja članaka. Znakovi koji nisu po ASCII standardu će se u prozoru za izmjene pojaviti kao heksadecimalni kodovi.'''",
'editingold' => "'''PAŽNJA:  Vi mijenjate stariju
reviziju ove stranice.
Ako je snimite, sve promjene učinjene od ove revizije će biti izgubljene.'''",
'yourdiff' => 'Razlike',
'copyrightwarning' => "Za sve priloge poslate na projekat {{SITENAME}} smatramo da su objavljeni pod $2 (konsultujte $1 za detalje).
Ukoliko ne želite da vaši članci budu podložni izmjenama i slobodnom rasturanju i objavljivanju,
nemojte ih slati ovdje. Takođe, slanje članka podrazumijeva i vašu izjavu da ste ga napisali sami, ili da ste ga kopirali iz izvora u javnom domenu ili sličnog slobodnog izvora.

'''NEMOJTE SLATI RAD ZAŠTIĆEN AUTORSKIM PRAVIMA BEZ DOZVOLE AUTORA!'''",
'copyrightwarning2' => "Zapamtite da svi doprinosi na stranici {{SITENAME}} može biti izmijenjen, promijenjen ili uklonjen od strane ostalih korisnika. Ako ne želite da ovo desi sa Vašim tekstom, onda ga nemojte slati ovdje.<br />
Također nam garantujete da ste ovo Vi napisali, ili da ste ga kopirali iz javne domene ili sličnog slobodnog izvora informacija (pogledajte $1 za više detalja).
'''NE ŠALJITE AUTORSKIM PRAVOM ZAŠTIĆENE TEKSTOVE BEZ DOZVOLE!'''",
'longpageerror' => "'''Greška: Tekst, koji ste poslali, je dug {{PLURAL:$1|jedan kilobajt|$1 kilobajta}}, što je veće od maksimuma, koji iznosi {{PLURAL:$2|jedan kilobajt|$2 kilobajta}}.'''
Stranica ne može biti sačuvana.",
'readonlywarning' => "'''PAŽNJA: Baza je zaključana zbog održavanja, tako da nećete moći da sačuvate svoje izmjene za sada.'''
Možda želite da kopirate i nalijepite tekst u tekst editor i sačuvate ga za kasnije.

Administrator koji je zaključao bazu je naveo slijedeće objašnjenje: $1",
'protectedpagewarning' => "'''PAŽNJA: Ova stranica je zaključana tako da samo korisnici sa administratorskim privilegijama mogu da je mijenjaju.'''
Posljednja stavka u zapisniku je prikazana ispod kao referenca:",
'semiprotectedpagewarning' => "'''Pažnja:''' Ova stranica je zaključana tako da je samo registrovani korisnici mogu uređivati.
Posljednja stavka zapisnika je prikazana ispod kao referenca:",
'cascadeprotectedwarning' => "'''Upozorenje:''' Ova stranica je zaključana tako da je samo administratori mogu mijenjati, jer je ona uključena u {{PLURAL:$1|ovu, lančanu povezanu, zaštićenu stranicu|sljedeće, lančano povezane, zaštićene stranice}}:",
'titleprotectedwarning' => "'''UPOZORENJE: Ova stranica je zaključana tako da su potrebna [[Special:ListGroupRights|posebna prava]] da se ona napravi.'''
Posljednja stavka zapisnika je prikazana ispod kao referenca:",
'templatesused' => '{{PLURAL:$1|Šablon|Šabloni}} koji su upotrebljeni na ovoj stranici:',
'templatesusedpreview' => '{{PLURAL:$1|Šablon|Šabloni}} prikazani u ovom pregledu:',
'templatesusedsection' => '{{PLURAL:$1|Šablon|Šabloni}} korišteni u ovoj sekciji:',
'template-protected' => '(zaštićeno)',
'template-semiprotected' => '(polu-zaštićeno)',
'hiddencategories' => 'Ova stranica pripada u {{PLURAL:$1|$1 skrivenu kategoriju|$1 skrivene kategorije|$1 skrivenih kategorija}}:',
'edittools' => '<!-- Ovaj tekst će biti prikazan ispod formi za uređivanje i postavljanje. -->',
'nocreatetext' => 'Na {{SITENAME}} je zabranjeno postavljanje novih stranica.
Možete se vratiti i uređivati već postojeće stranice ili se [[Special:UserLogin|prijaviti ili otvoriti korisnički račun]].',
'nocreate-loggedin' => 'Nemate dopuštenje da kreirate nove stranice.',
'sectioneditnotsupported-title' => 'Uređivanje sekcije nije podržano',
'sectioneditnotsupported-text' => 'Uređivanje sekcije nije podržano na ovoj stranici.',
'permissionserrors' => 'Greške pri odobrenju',
'permissionserrorstext' => 'Nemate dopuštenje da to uradite, iz {{PLURAL:$1|slijedećeg razloga|slijedećih razloga}}:',
'permissionserrorstext-withaction' => 'Nemate dopuštenje da $2, iz {{PLURAL:$1|slijedećeg|slijedećih}} razloga:',
'recreate-moveddeleted-warn' => "'''Upozorenje: Postavljate stranicu koja je prethodno brisana.'''

Razmotrite da li je nastavljanje uređivanja ove stranice u skladu s pravilima.
Ovdje je naveden zapisnik brisanja i pomjeranja s obrazloženjem:",
'moveddeleted-notice' => 'Ova stranica je obrisana.
Zapis brisanja i pomjeranja stranice je prikazan ispod kao referenca.',
'log-fulllog' => 'Vidi potpuni zapisnik',
'edit-hook-aborted' => 'Izmjena je poništena putem interfejsa.
Nije ponuđeno nikakvo objašnjenje.',
'edit-gone-missing' => 'Stranica se nije mogla osvježiti.
Izgleda da je obrisana.',
'edit-conflict' => 'Sukob izmjena.',
'edit-no-change' => 'Vaša izmjena je ignorirana, jer nije bilo promjena teksta stranice.',
'edit-already-exists' => 'Stranica nije mogla biti kreirana.
Izgleda da već postoji.',
'defaultmessagetext' => 'Uobičajeni tekst poruke',
'editwarning-warning' => 'Napuštanje ove stranice može dovesti do gubitka svih promjena koje ste načinili.
Ako ste prijavljeni, možete isključiti ovo upozorenje u "{{int:prefs-editing}}" dijelu vaših opcija.',

# Content models
'content-model-wikitext' => 'wikitekst',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'Upozorenje: Ova stranica sadrži previše poziva opterećujućih parserskih funkcija.

Trebalo bi imati manje od $2 {{PLURAL:$2|poziv|poziva}}, a sad ima {{PLURAL:$1|$1 poziv|$1 poziva}}.',
'expensive-parserfunction-category' => 'Stranice sa previše poziva parserskih funkcija',
'post-expand-template-inclusion-warning' => 'Pažnja: Šablon koji je uključen je prevelik.
Neki šabloni neće biti uključeni.',
'post-expand-template-inclusion-category' => 'Stranice gdje su uključeni šabloni preveliki',
'post-expand-template-argument-warning' => 'Upozorenje: Ova stranica sadrži najmanje jedan argument u šablonu koji ima preveliku veličinu.
Ovakvi argumenti se trebaju izbjegavati.',
'post-expand-template-argument-category' => 'Stranice koje sadrže nedostajuće argumente u šablonu',
'parser-template-loop-warning' => 'Otkrivena kružna greška u šablonu: [[$1]]',
'parser-template-recursion-depth-warning' => 'Dubina uključivanja šablona prekoračena ($1)',
'language-converter-depth-warning' => 'Prekoračena granica dubine jezičkog pretvarača ($1)',
'node-count-exceeded-category' => 'Stranice sa prekoračenim brojem čvorova',
'node-count-exceeded-warning' => 'Stranice koje imaju prevelik broj čvorova',
'expansion-depth-exceeded-category' => 'Stranice koje su prekoračile dubinu proširenja',
'expansion-depth-exceeded-warning' => 'Stranice koje su prekoračile dubinu proširenja',
'parser-unstrip-loop-warning' => 'Pronađena petlja',
'parser-unstrip-recursion-limit' => 'Prekoračeno ograničenje rekurzije ($1)',
'converter-manual-rule-error' => 'Pronađena je greška u pravilu za ručno pretvaranje jezika',

# "Undo" feature
'undo-success' => 'Izmjena se može vratiti.
Molimo da provjerite usporedbu ispod da budete sigurni da to želite učiniti, a zatim spremite promjene da bi ste završili vraćanje izmjene.',
'undo-failure' => 'Izmjene se ne mogu vratiti zbog konflikta sa izmjenama u međuvremenu.',
'undo-norev' => 'Izmjena se ne može vratiti jer ne postoji ranija ili je obrisana.',
'undo-summary' => 'Vraćena izmjena $1 [[Special:Contributions/$2|korisnika $2]] ([[User talk:$2|razgovor]])',

# Account creation failure
'cantcreateaccounttitle' => 'Nije moguće napraviti korisnički račun',
'cantcreateaccount-text' => "Pravljenje korisničkog računa sa ove IP adrese ('''$1''') je blokirano od strane [[User:$3|$3]].

Razlog koji je naveo $3 je ''$2''",

# History pages
'viewpagelogs' => 'Pogledaj protokol ove stranice',
'nohistory' => 'Ne postoji historija izmjena za ovu stranicu.',
'currentrev' => 'Trenutna revizija',
'currentrev-asof' => 'Trenutna revizija na dan $1',
'revisionasof' => 'Revizija od $1',
'revision-info' => 'Izmjena od $1 korisnika $2',
'previousrevision' => '←Starije izmjene',
'nextrevision' => 'Novija izmjena →',
'currentrevisionlink' => 'Trenutna verzija',
'cur' => 'tren',
'next' => 'slijed',
'last' => 'preth',
'page_first' => 'prva',
'page_last' => 'zadnja',
'histlegend' => "Odabir razlika: označite radio dugme verzija koje uspoređujete i pritistnite enter ili dugme na dnu. <br />
Objašnjenje: '''(tren)''' = razlika sa trenutnom verzijom,
'''(preth)''' = razlika sa prethodnom verzijom, '''m''' = mala izmjena.",
'history-fieldset-title' => 'Pretraga historije',
'history-show-deleted' => 'Samo obrisane',
'histfirst' => 'Najstarije',
'histlast' => 'Najnovije',
'historysize' => '({{PLURAL:$1|1 bajt|$1 bajta|$1 bajtova}})',
'historyempty' => '(prazno)',

# Revision feed
'history-feed-title' => 'Historija izmjena',
'history-feed-description' => 'Historija promjena ove stranice na wikiju',
'history-feed-item-nocomment' => '$1 u $2',
'history-feed-empty' => 'Tražena stranica ne postoji.
Moguće da je izbrisana sa wikija, ili preimenovana.
Pokušajte [[Special:Search|pretražiti wiki]] za slične stranice.',

# Revision deletion
'rev-deleted-comment' => '(sažetak izmjene uklonjen)',
'rev-deleted-user' => '(korisničko ime uklonjeno)',
'rev-deleted-event' => '(stavka zapisa obrisana)',
'rev-deleted-user-contribs' => '[korisničko ime ili IP adresa uklonjeni - izmjena sakrivena u spisku doprinosa]',
'rev-deleted-text-permission' => "Revizija ove stranice je '''obrisana'''.
Detalje možete vidjeti u [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} zapisu brisanja].",
'rev-deleted-text-unhide' => "Revizija ove stranice je '''obrisana'''.
Detalje o tome može se vidjeti u [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} zapisniku brisanja].
Vi je i dalje možete [$1 vidjeti ovu reviziju] ako želite da nastavite.",
'rev-suppressed-text-unhide' => "Ova revizija stranice je '''uklonjena'''.
Možete pogledati detalje u [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} zapisu uklanjanja].
Vi je i dalje možete [$1 vidjeti ovu reviziju] ako želite.",
'rev-deleted-text-view' => "Revizija ove stranice je '''obrisana'''.
Vi je možete vidjeti; detalji o tome se mogu vidjeti u [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} zapisu brisanja].",
'rev-suppressed-text-view' => "Ova revizija stranice je '''uklonjena'''.
Vi je možete vidjeti; možete pogledati detalje u [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} zapisu uklanjanja].",
'rev-deleted-no-diff' => "Ne možete vidjeti ove razlike jer je jedna od revizija '''obrisana'''.
Možete pregledati detalje u [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} zapisima brisanja].",
'rev-suppressed-no-diff' => "Ne možete vidjeti ove razlike jer je jedna od revizija '''obrisana'''.",
'rev-deleted-unhide-diff' => "Jedna od revizija u ovom pregledu razlika je '''obrisana'''.
Možete pregledati detalje u [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} zapisniku brisanja].
Vi još uvijek možete [$1 vidjeti ove razlike] ako želite da nastavite.",
'rev-suppressed-unhide-diff' => "edna od revizija ove razlike je '''uklonjena'''.
Možete pogledati detalje u [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} zapisniku uklanjanja].
Vi i dalje možete [$1 vidjeti ove razlike] ako želite da nastavite.",
'rev-deleted-diff-view' => "Jedna od revizija u ovoj razlici je '''obrisana'''.
Vi možete vidjeti ovu razliku; detalji o tome se mogu vidjeti u [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} zapisniku brisanja].",
'rev-suppressed-diff-view' => "Jedna od revizija u ovoj razlici je '''sakrivena'''.
Vi možete vidjeti ovu razliku; detalji se mogu vidjeti u [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} zapisniku sakrivanja].",
'rev-delundel' => 'pokaži/sakrij',
'rev-showdeleted' => 'Pokaži',
'revisiondelete' => 'Obriši/vrati revizije',
'revdelete-nooldid-title' => 'Nije unesena tačna revizija',
'revdelete-nooldid-text' => 'Niste precizno odredili odredišnu reviziju/revizije da se izvrši ova funkcija, ili ta revizija nepostoji, ili pokušavate sakriti trenutnu reviziju.',
'revdelete-nologtype-title' => 'Nije naveden tip zapisa',
'revdelete-nologtype-text' => 'Niste odredili tip zapisa za izvršavanje ove akcije na njemu.',
'revdelete-nologid-title' => 'Nevaljana stavka zapisa',
'revdelete-nologid-text' => 'Niste odredili ciljnu stavku zapisa za izvršavanje ove funkcije ili navedena stavka ne postoji.',
'revdelete-no-file' => 'Navedena datoteka ne postoji.',
'revdelete-show-file-confirm' => 'Da li ste sigurni da želite pogledati obrisanu reviziju datoteke "<nowiki>$1</nowiki>" od $2 u $3?',
'revdelete-show-file-submit' => 'Da',
'revdelete-selected' => "'''{{PLURAL:$2|Odabrana revizija|Odabrane revizije}} od [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Označena stavka zapisa|Označene stavke zapisa}}:'''",
'revdelete-text' => "'''Obrisane revizije i događaji će i dalje biti vidljivi u historiji stranice i zapisima, ali dijelovi njenog sadržaja neće biti dostupni javnosti.'''
Drugi administratori projekta {{SITENAME}} će i dalje moći pristupiti sakrivenom sadržaju i mogu ga ponovo vratiti kroz ovaj interfejs, osim ako nisu postavljena dodatna ograničenja.",
'revdelete-confirm' => 'Molimo potvrdite da namjeravate ovo učiniti, da razumijete posljedice i da to činite u skladu s [[{{MediaWiki:Policy-url}}|pravilima]].',
'revdelete-suppress-text' => "Ograničenja bi trebala biti korištena '''samo''' u slijedećim slučajevima:
* Osjetljive korisničke informacije
*: ''kućne adrese, brojevi telefona, brojevi bankovnih kartica itd.''",
'revdelete-legend' => 'Postavi ograničenja vidljivosti',
'revdelete-hide-text' => 'Sakrij tekst revizije',
'revdelete-hide-image' => 'Sakrij sadržaj datoteke',
'revdelete-hide-name' => 'Sakrij akciju i cilj',
'revdelete-hide-comment' => 'Sakrij izmjene komentara',
'revdelete-hide-user' => 'Sakrij korisničko ime urednika/IP',
'revdelete-hide-restricted' => 'Ograniči podatke za administratore kao i za druge korisnike',
'revdelete-radio-same' => '(ne mijenjaj)',
'revdelete-radio-set' => 'Da',
'revdelete-radio-unset' => 'Ne',
'revdelete-suppress' => 'Sakrij podatke od administratora kao i od drugih',
'revdelete-unsuppress' => 'Ukloni ograničenja na vraćenim revizijama',
'revdelete-log' => 'Razlog:',
'revdelete-submit' => 'Primijeni na odabrane {{PLURAL:$1|reviziju|revizije}}',
'revdelete-success' => "'''Vidljivost revizije uspješno ažurirana.'''",
'revdelete-failure' => "'''Vidljivost revizije nije mogla biti ažurirana:'''
$1",
'logdelete-success' => "'''Vidljivost evidencije uspješno postavljena.'''",
'logdelete-failure' => "'''Zapisnik vidljivosti nije mogao biti postavljen:'''
$1",
'revdel-restore' => 'Promijeni dostupnost',
'revdel-restore-deleted' => 'obrisane revizije',
'revdel-restore-visible' => 'vidljive revizije',
'pagehist' => 'Historija stranice',
'deletedhist' => 'Izbrisana historija',
'revdelete-hide-current' => 'Greška pri sakrivanju stavke od $2, $1: ovo je trenutna revizija.
Ne može biti sakrivena.',
'revdelete-show-no-access' => 'Greška pri prikazivanju stavke od $2, $1: ova stavka je označena kao "zaštićena".
Nemate pristup do ove stavke.',
'revdelete-modify-no-access' => 'Greška pri izmjeni stavke od $2, $1: ova stavka je označena kao "zaštićena".
Nemate pristup ovoj stavci.',
'revdelete-modify-missing' => 'Greška pri mijenjanju stavke ID $1: nedostaje u bazi podataka!',
'revdelete-no-change' => "'''Upozorenje:''' stavka od $2, $1 već posjeduje zatražene postavke vidljivosti.",
'revdelete-concurrent-change' => 'Greška pri mijenjanju stavke od $2, $1: njen status je izmijenjen od strane nekog drugog dok ste je pokušavali mijenjati.
Molimo provjerite zapise.',
'revdelete-only-restricted' => 'Greška pri sakrivanju stavke od dana $2, $1: ne možete ukloniti stavke od pregledavanja administratora bez da odaberete neku od drugih opcija za uklanjanje.',
'revdelete-reason-dropdown' => '*Uobičajeni razlozi brisanja
** Kršenje autorskih prava
** Neprikladan komentar ili lični podac
** Neprikladno korisničko ime
** Uvredljivi podaci',
'revdelete-otherreason' => 'Ostali/dodatni razlog:',
'revdelete-reasonotherlist' => 'Ostali razlozi',
'revdelete-edit-reasonlist' => 'Uredi razloge brisanja',
'revdelete-offender' => 'Autor revizije:',

# Suppression log
'suppressionlog' => 'Zapisi sakrivanja',
'suppressionlogtext' => 'Ispod je spisak brisanja i blokiranja koja su povezana sa sadržajem koji je sakriven od administratora. 
Vidi [[Special:BlockList|spisak blokiranja]] za pregled trenutno važećih blokada.',

# History merging
'mergehistory' => 'Spoji historije stranice',
'mergehistory-header' => 'Ova stranica Vam omogućuje spajanje revizija historije neke izvorne stranice u novu stranicu. Zapamtite da će ova promjena ostaviti nepromjenjen sadržaj historije stranice.',
'mergehistory-box' => 'Spajanje revizija za dvije stranice:',
'mergehistory-from' => 'Izvorna stranica:',
'mergehistory-into' => 'Odredišna stranica:',
'mergehistory-list' => 'Historija izmjena koja se može spojiti',
'mergehistory-merge' => 'Slijedeće revizije stranice [[:$1]] mogu biti spojene u [[:$2]].
Koristite dugmiće u stupcu da bi ste spojili revizije koje su napravljene prije navedenog vremena.
Korištenje navigacionih linkova će resetovati ovaj stupac.',
'mergehistory-go' => 'Prikaži izmjene koje se mogu spojiti',
'mergehistory-submit' => 'Spoji revizije',
'mergehistory-empty' => 'Nema revizija za spajanje.',
'mergehistory-success' => '$3 {{PLURAL:$3|revizija|revizije|revizija}} stranice [[:$1]] uspješno spojeno u [[:$2]].',
'mergehistory-fail' => 'Ne može se izvršiti spajanje historije, molimo provjerite opet stranicu i parametre vremena.',
'mergehistory-no-source' => 'Izvorna stranica $1 ne postoji.',
'mergehistory-no-destination' => 'Odredišna stranica $1 ne postoji.',
'mergehistory-invalid-source' => 'Izvorna stranica mora imati validan naslov.',
'mergehistory-invalid-destination' => 'Ciljna stranica mora imati validan naslov.',
'mergehistory-autocomment' => 'Spoji [[:$1]] u [[:$2]]',
'mergehistory-comment' => 'Spojeno [[:$1]] u [[:$2]]: $3',
'mergehistory-same-destination' => 'Izvorne i odredišne stranice ne mogu biti iste',
'mergehistory-reason' => 'Razlog:',

# Merge log
'mergelog' => 'Zapis spajanja',
'pagemerge-logentry' => 'spojeno [[$1]] u [[$2]] (sve do $3 revizije)',
'revertmerge' => 'Vrati spajanje',
'mergelogpagetext' => 'Ispod je spisak nedavnih spajanja historija stranica.',

# Diffs
'history-title' => 'Historija revizija "$1"',
'difference-title' => 'Razlike između revizija od "$1"',
'difference-title-multipage' => 'Razlika između stranica "$1" i "$2"',
'difference-multipage' => '(Razlika između stranica)',
'lineno' => 'Linija $1:',
'compareselectedversions' => 'Uporedite označene verzije',
'showhideselectedversions' => 'Pokaži/sakrij odabrane verzije',
'editundo' => 'ukloni ovu izmjenu',
'diff-multi' => '({{plural:$1|Nije prikazana jedna međurevizija|Nisu prikazane $1 međurevizije|Nije prikazano $1 međurevizija}} od {{PLURAL:$2|jednog korisnika|$2 korisnika}})',
'diff-multi-manyusers' => '({{PLURAL:$1|Jedna međurevizija|$1 međurevizije|$1 međurevizija}} od više od $2 {{PLURAL:$2|korisnika|korisnika}} {{PLURAL:$1|nije prikazana|nisu prikazane}})',

# Search results
'searchresults' => 'Rezultati pretrage',
'searchresults-title' => 'Rezultati pretrage za "$1"',
'searchresulttext' => 'Za više informacija o pretraživanju {{SITENAME}}, pogledajte [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => 'Tražili ste \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|sve stranice koje počinju sa "$1"]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|sve stranice koje vode do "$1"]])',
'searchsubtitleinvalid' => 'Tražili ste $1',
'toomanymatches' => 'Pronađeno je previše rezultata, molimo pokušajte unijeti konkretniji izraz',
'titlematches' => 'Naslov članka odgovara',
'notitlematches' => 'Naslov članka ne odgovara.',
'textmatches' => 'Tekst stranice odgovara',
'notextmatches' => 'Tekst članka ne odgovara',
'prevn' => '{{PLURAL:$1|prethodni $1|prethodnih $1}}',
'nextn' => '{{PLURAL:$1|slijedeći $1|slijedećih $1}}',
'prevn-title' => '{{PLURAL:$1|Prethodni $1 rezultat|Prethodna $1 rezultata|Prethodnih $1 rezultata}}',
'nextn-title' => '{{PLURAL:$1|Slijedeći $1 rezultat|Slijedeća $1 rezultata|Slijedećih $1 rezultata}}',
'shown-title' => 'Pokaži $1 {{PLURAL:$1|rezultat|rezultata}} po stranici',
'viewprevnext' => 'Pogledaj ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend' => 'Opcije pretrage',
'searchmenu-exists' => "'''Postoji stranica pod nazivom \"[[:\$1]]\" na ovoj wiki'''",
'searchmenu-new' => "'''Napravi stranicu \"[[:\$1|\$1]]\" na ovoj wiki!'''",
'searchhelp-url' => 'Help:Sadržaj',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Pregledaj stranice sa ovim prefiksom]]',
'searchprofile-articles' => 'Stranice sadržaja',
'searchprofile-project' => 'Stranice pomoći i projekta',
'searchprofile-images' => 'Multimedija',
'searchprofile-everything' => 'Sve',
'searchprofile-advanced' => 'Napredno',
'searchprofile-articles-tooltip' => 'Pretraga u $1',
'searchprofile-project-tooltip' => 'Pretraga u $1',
'searchprofile-images-tooltip' => 'Traži datoteke',
'searchprofile-everything-tooltip' => 'Pretraži sve sadržaje (ukljujući i stranice za razgovor)',
'searchprofile-advanced-tooltip' => 'Traži u ostalim imenskim prostorima',
'search-result-size' => '$1 ({{PLURAL:$2|$2 riječ|$2 riječi}})',
'search-result-category-size' => '{{PLURAL:$1|1 član|$1 člana|$1 članova}} ({{PLURAL:$2|1 podkategorija|$2 podkategorije|$2 podkategorija}}, {{PLURAL:$3|1 datoteka|$3 datoteke|$3 datoteka}})',
'search-result-score' => 'Relevantnost: $1%',
'search-redirect' => '(preusmjeravanje $1)',
'search-section' => '(sekcija $1)',
'search-suggest' => 'Da li ste mislili: $1',
'search-interwiki-caption' => 'Srodni projekti',
'search-interwiki-default' => '$1 rezultati:',
'search-interwiki-more' => '(više)',
'search-relatedarticle' => 'Povezano',
'mwsuggest-disable' => 'Onemogući AJAX prijedloge',
'searcheverything-enable' => 'Traži u svim imenskim prostorima',
'searchrelated' => 'povezano',
'searchall' => 'sve',
'showingresults' => "Dolje {{PLURAL:$1|je prikazan '''1''' rezultat|su prikazana '''$1''' rezultata|je prikazano '''$1''' rezultata}} počev od '''$2'''.",
'showingresultsnum' => "Dolje {{PLURAL:$3|je prikazan '''1''' rezultat|su prikazana '''$3''' rezultata|je prikazano '''$3''' rezultata}} počev od #'''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Rezultat '''$1''' od '''$3'''|Rezultati '''$1 - $2''' od '''$3'''}} za '''$4'''",
'nonefound' => "'''Pažnja''': Po pretpostavljenim postavkama pretražuju se samo neki imenski prostori.
Pokušajte u Vaš upit uključiti prefiks ''all:'' da bi ste pretražili sav sadržaj (uključujući stranice za razgovor, šablone i sl.) ili koristite željeni imenski prostor kao prefiks.",
'search-nonefound' => 'Nisu pronađeni rezultati koji odgovaraju upitu.',
'powersearch' => 'Napredna pretraga',
'powersearch-legend' => 'Napredna pretraga',
'powersearch-ns' => 'Pretraga u imenskim prostorima:',
'powersearch-redir' => 'Spisak preusmjerenja',
'powersearch-field' => 'Traži',
'powersearch-togglelabel' => 'Označi:',
'powersearch-toggleall' => 'Sve',
'powersearch-togglenone' => 'Ništa',
'search-external' => 'Vanjska pretraga',
'searchdisabled' => '<p>Izvinjavamo se!  Puno pretraga teksta je privremeno onemogućena.  U međuvremenu, možete koristiti Google za pretragu.  Indeks može biti stariji.',

# Preferences page
'preferences' => 'Podešavanja',
'mypreferences' => 'Postavke',
'prefs-edits' => 'Broj izmjena:',
'prefsnologin' => 'Niste prijavljeni',
'prefsnologintext' => 'Da biste mogli podešavati korisnička podešavanja, morate <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} biti prijavljeni]</span>.',
'changepassword' => 'Promijeni šifru',
'prefs-skin' => 'Koža',
'skin-preview' => 'Pregled',
'datedefault' => 'Nije bitno',
'prefs-beta' => 'Beta mogućnosti',
'prefs-datetime' => 'Datum i vrijeme',
'prefs-labs' => 'Eksperimentalne mogućnosti',
'prefs-user-pages' => 'Korisničke stranice',
'prefs-personal' => 'Korisnički podaci',
'prefs-rc' => 'Podešavanja nedavnih izmjena',
'prefs-watchlist' => 'Moji praćeni članci',
'prefs-watchlist-days' => 'Broj dana za prikaz u spisku praćenja:',
'prefs-watchlist-days-max' => 'Maximum $1 {{PLURAL:$1|dan|dana}}',
'prefs-watchlist-edits' => 'Najveći broj izmjena za prikaz u proširenom spisku praćenja:',
'prefs-watchlist-edits-max' => 'Najveći broj: 1000',
'prefs-watchlist-token' => 'Token spiska za praćenje:',
'prefs-misc' => 'Ostala podešavanja',
'prefs-resetpass' => 'Promijeni šifru',
'prefs-changeemail' => 'Promijeni e-mail adresu',
'prefs-setemail' => 'Postavite e-mail adresu',
'prefs-email' => 'E-mail opcije',
'prefs-rendering' => 'Izgled',
'saveprefs' => 'Sačuvajte podešavanja',
'resetprefs' => 'Vrati podešavanja',
'restoreprefs' => 'Vrati sve pretpostavljene postavke',
'prefs-editing' => 'Veličine tekstualnog polja',
'prefs-edit-boxsize' => 'Veličina prozora za uređivanje.',
'rows' => 'Redova',
'columns' => 'Kolona',
'searchresultshead' => 'Podešavanja rezultata pretrage',
'resultsperpage' => 'Pogodaka po stranici:',
'stub-threshold' => 'Formatiranje <a href="#" class="stub">linkova stranica u začetku</a> (bajtova):',
'stub-threshold-disabled' => 'Isključen/a',
'recentchangesdays' => 'Broj dana za prikaz u nedavnim izmjenama:',
'recentchangesdays-max' => '(najviše $1 {{PLURAL:$1|dan|dana}})',
'recentchangescount' => 'Broj uređivanja za prikaz po pretpostavkama:',
'prefs-help-recentchangescount' => 'Ovo uključuje nedavne izmjene, historije stranice i zapise.',
'prefs-help-watchlist-token' => 'Popunjavanjem ovog polja tajnim ključem će generisati RSS fid za Vaš spisak praćenja.
Svako ko zna ključ u ovom polju će biti u mogućnosti da pročita Vaš spisak praćenja, tako da trebate izabrati sigurnu vrijednost.
Ovdje su navedene neke nasumično odabrane vrijednosti koje možete koristiti: $1',
'savedprefs' => 'Vaša podešavanja su sačuvana.',
'timezonelegend' => 'Vremenska zona:',
'localtime' => 'Lokalno vrijeme:',
'timezoneuseserverdefault' => 'Koristi postavke wikija ($1)',
'timezoneuseoffset' => 'Ostalo (odredi odstupanje)',
'timezoneoffset' => 'Odstupanje¹:',
'servertime' => 'Vrijeme na serveru:',
'guesstimezone' => 'Popuni iz preglednika',
'timezoneregion-africa' => 'Afrika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antarktika',
'timezoneregion-arctic' => 'Arktik',
'timezoneregion-asia' => 'Azija',
'timezoneregion-atlantic' => 'Atlantski okean',
'timezoneregion-australia' => 'Australija',
'timezoneregion-europe' => 'Evropa',
'timezoneregion-indian' => 'Indijski okean',
'timezoneregion-pacific' => 'Tihi okean',
'allowemail' => 'Dozvoli e-poštu od ostalih korisnika',
'prefs-searchoptions' => 'Traži',
'prefs-namespaces' => 'Imenski prostori',
'defaultns' => 'Inače tražite u ovim imenskim prostorima:',
'default' => 'standardno',
'prefs-files' => 'Datoteke',
'prefs-custom-css' => 'Prilagođeni CSS',
'prefs-custom-js' => 'Prilagođeni JS',
'prefs-common-css-js' => 'Dijeljeni CSS/JS za sve kože:',
'prefs-reset-intro' => 'Možete koristiti ovu stranicu da poništite Vaše postavke na ovom sajtu na pretpostavljene vrijednosti.
Ovo se ne može vratiti unazad.',
'prefs-emailconfirm-label' => 'E-mail potvrda:',
'prefs-textboxsize' => 'Veličina prozora za uređivanje',
'youremail' => 'E-mail:',
'username' => '{{GENDER:$1|Korisničko}} ime:',
'uid' => '{{GENDER:$1|Korisnički}} ID:',
'prefs-memberingroups' => '{{GENDER:$2|Korisnik|Korisnica}} je član {{PLURAL:$1|grupe|grupâ}}:',
'prefs-registration' => 'Vrijeme registracije:',
'yourrealname' => 'Vaše pravo ime:',
'yourlanguage' => 'Jezik:',
'yourvariant' => 'Varijanta jezika:',
'prefs-help-variant' => 'Vaša preferirana varijanta ili pravopis za prikaz sadržaja stranica na ovoj wiki.',
'yournick' => 'Nadimak (za potpise):',
'prefs-help-signature' => 'Komentari na stranicama za razgovor trebaju biti potpisani sa "<nowiki>~~~~</nowiki>" koje će biti pretvoreno u vaš potpis i vrijeme.',
'badsig' => 'Loš sirovi potpis.
Provjerite HTML tagove.',
'badsiglength' => 'Vaš potpis je predug.
Mora biti manji od $1 {{PLURAL:$1|znaka|znaka|znakova}}.',
'yourgender' => 'Spol:',
'gender-unknown' => 'neodređen',
'gender-male' => 'muški',
'gender-female' => 'žensko',
'prefs-help-gender' => 'Optionalno: koristi se za ispravke gramatičkog roda u porukama softvera. Ova informacija će biti javna.',
'email' => 'E-mail',
'prefs-help-realname' => 'Pravo ime nije obavezno.
Ako izaberete da date ime, biće korišteno za pripisivanje za vaš rad.',
'prefs-help-email' => 'E-mail adresa je opcionalna, ali je potrebna jer omogućava da Vam se pošalje nova šifra u slučaju da je izgubite ili zaboravite.',
'prefs-help-email-others' => 'Također možete da odaberete da vas drugi kontaktiraju putem vaše korisničke stranice ili stranice za razgovor bez otkrivanja vašeg identiteta.',
'prefs-help-email-required' => 'Neophodno je navesti e-mail adresu.',
'prefs-info' => 'Osnovne informacije',
'prefs-i18n' => 'Internacionalizacije',
'prefs-signature' => 'Potpis',
'prefs-dateformat' => 'Format datuma',
'prefs-timeoffset' => 'Vremenska razlika',
'prefs-advancedediting' => 'Napredne opcije',
'prefs-advancedrc' => 'Napredne opcije',
'prefs-advancedrendering' => 'Napredne opcije',
'prefs-advancedsearchoptions' => 'Napredne opcije',
'prefs-advancedwatchlist' => 'Napredne opcije',
'prefs-displayrc' => 'Postavke izgleda',
'prefs-displaysearchoptions' => 'Postavke izgleda',
'prefs-displaywatchlist' => 'Postavke izgleda',
'prefs-diffs' => 'Razlike',

# User preference: email validation using jQuery
'email-address-validity-valid' => 'Izgleda valjano',
'email-address-validity-invalid' => 'Neophodna valjana adresa!',

# User rights
'userrights' => 'Postavke korisničkih prava',
'userrights-lookup-user' => 'Menadžment korisničkih grupa',
'userrights-user-editname' => 'Unesi korisničko ime:',
'editusergroup' => 'Uredi korisničke grupe',
'editinguser' => "Mijenjate korisnička prava korisnika '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Uredi korisničke grupe',
'saveusergroups' => 'Sačuvaj korisničke grupe',
'userrights-groupsmember' => 'Član:',
'userrights-groupsmember-auto' => 'Uključeni član od:',
'userrights-groups-help' => 'Možete promijeniti grupe kojima ovaj korisnik pripada:
* Označeni kvadratić znači da je korisnik u toj grupi.
* Neoznačen kvadratić znači da korisnik nije u toj grupi.
* Oznaka * (zvjezdica) označava da Vi ne možete izbrisati ovu grupu ako je dodate i obrnutno.',
'userrights-reason' => 'Razlog:',
'userrights-no-interwiki' => 'Nemate dopuštenja da uređujete korisnička prava na drugim wikijima.',
'userrights-nodatabase' => 'Baza podataka $1 ne postoji ili nije lokalna baza.',
'userrights-nologin' => 'Morate se [[Special:UserLogin|prijaviti]] sa administratorskim računom da bi ste mogli postavljati korisnička prava.',
'userrights-notallowed' => 'Vaš račun nema privilegije da dodaje ili oduzima prava korisnika.',
'userrights-changeable-col' => 'Grupe koje možete mijenjati',
'userrights-unchangeable-col' => 'Grupe koje ne možete mijenjati',

# Groups
'group' => 'Grupa:',
'group-user' => 'Korisnici',
'group-autoconfirmed' => 'Potvrđeni korisnici',
'group-bot' => 'Botovi',
'group-sysop' => 'Administratori',
'group-bureaucrat' => 'Birokrati',
'group-suppress' => 'Nadzornici',
'group-all' => '(sve)',

'group-user-member' => '{{GENDER:$1|korisnik|korisnica}}',
'group-autoconfirmed-member' => 'Potvrđeni korisnik',
'group-bot-member' => 'bot',
'group-sysop-member' => 'Administrator',
'group-bureaucrat-member' => 'Birokrat',
'group-suppress-member' => 'Nadzornik',

'grouppage-user' => '{{ns:project}}:Korisnici',
'grouppage-autoconfirmed' => '{{ns:project}}:Potvrđeni korisnici',
'grouppage-bot' => '{{ns:project}}:Botovi',
'grouppage-sysop' => '{{ns:project}}:Administratori',
'grouppage-bureaucrat' => '{{ns:project}}:Birokrati',
'grouppage-suppress' => '{{ns:project}}:Nadzornici',

# Rights
'right-read' => 'Čitanje stranica',
'right-edit' => 'Uređivanje stranica',
'right-createpage' => 'Pravljenje stranica (neuključujući stranice za razgovor)',
'right-createtalk' => 'Pravljenje stranica za razgovor',
'right-createaccount' => 'Pravljenje korisničkog računa',
'right-minoredit' => 'Označavanje izmjena kao malih',
'right-move' => 'Pomjeranje stranica',
'right-move-subpages' => 'Pomjeranje stranica sa svim podstranicama',
'right-move-rootuserpages' => 'Premještanje stranica osnovnih korisnika',
'right-movefile' => 'Premještanje datoteka',
'right-suppressredirect' => 'Ne pravi preusmjeravanje sa starog imena pri preusmjeravanju stranica',
'right-upload' => 'Postavljanje datoteka',
'right-reupload' => 'Postavljanje nove verzije datoteke',
'right-reupload-own' => 'Postavljanje nove verzije datoteke koju je postavio korisnik',
'right-reupload-shared' => 'Postavljanje novih lokalnih verzija datoteka identičnih onima u zajedničkoj ostavi',
'right-upload_by_url' => 'Postavljanje datoteke sa URL adrese',
'right-purge' => 'Osvježavanje keša za stranice bez konfirmacije',
'right-autoconfirmed' => 'Uređivanje poluzaštićenih stranica',
'right-bot' => 'Postavljen kao automatski proces',
'right-nominornewtalk' => "Male izmjene na stranici za razgovor ne uzrokuju prikazivanje oznake ''nova poruka'' na stranici za razgovor",
'right-apihighlimits' => 'Korištenje viših ograničenja u API upitima',
'right-writeapi' => "Korištenje opcije ''write API''",
'right-delete' => 'Brisanje stranica',
'right-bigdelete' => 'Brisanje stranica sa velikom historijom',
'right-deletelogentry' => 'Brisanje i vraćanje određenih zapisa u evidenciji',
'right-deleterevision' => 'Brisanje i vraćanje određenih revizija stranice',
'right-deletedhistory' => 'Pregled stavki obrisane historije, bez povezanog teksta',
'right-deletedtext' => 'Pregled obrisanog teksta i izmjena između obrisanih revizija',
'right-browsearchive' => 'Pretraživanje obrisanih stranica',
'right-undelete' => 'Vraćanje obrisanih stranica',
'right-suppressrevision' => 'Pregled i povratak revizija sakrivenih od administratora',
'right-suppressionlog' => 'Gledanje privatnih zapisa',
'right-block' => 'Blokiranje uređivanja drugih korisnika',
'right-blockemail' => 'Blokiranje korisnika da šalje e-mail',
'right-hideuser' => 'Blokiranje korisničkog imena, i njegovo sakrivanje od javnosti',
'right-ipblock-exempt' => 'Zaobilaženje IP blokada, autoblokada i blokada IP grupe',
'right-proxyunbannable' => 'Zaobilaženje automatskih blokada proxy-ja',
'right-unblockself' => 'Deblokiranje samog sebe',
'right-protect' => 'Promjena nivoa zaštite i uređivanje zaštićenih stranica',
'right-editprotected' => 'Uređivanje zaštićenih stranica (bez povezanih zaštita)',
'right-editinterface' => 'Uređivanje korisničkog interfejsa',
'right-editusercssjs' => 'Uređivanje CSS i JS datoteka drugih korisnika',
'right-editusercss' => 'Uređivanje CSS datoteka drugih korisnika',
'right-edituserjs' => 'Uređivanje JS datoteka drugih korisnika',
'right-rollback' => 'Brzo vraćanje izmjena na zadnjeg korisnika koji je uređivao određenu stranicu',
'right-markbotedits' => 'Označavanje vraćenih izmjena kao izmjene bota',
'right-noratelimit' => 'Izbjegavanje ograničenja uzrokovanih brzinom',
'right-import' => 'Uvoz stranica iz drugih wikija',
'right-importupload' => 'Uvoz stranica putem postavljanja datoteke',
'right-patrol' => 'Označavanje izmjena drugih korisnika patroliranim',
'right-autopatrol' => 'Vlastite izmjene se automatski označavaju kao patrolirane',
'right-patrolmarks' => 'Pregled oznaka patroliranja u spisku nedavnih izmjena',
'right-unwatchedpages' => 'Gledanje spiska nepraćenih stranica',
'right-mergehistory' => 'Spajanje historije stranica',
'right-userrights' => 'Uređivanje svih korisničkih prava',
'right-userrights-interwiki' => 'Uređivanje korisničkih prava korisnika na drugim wikijima',
'right-siteadmin' => 'Zaključavanje i otključavanje baze podataka',
'right-override-export-depth' => 'Izvoz stranica uključujući povezane stranice do dubine od 5 linkova',
'right-sendemail' => 'Slanje e-maila drugim korisnicima',
'right-passwordreset' => 'Pogledaj e-mailove za obnavljanje šifre',

# Special:Log/newusers
'newuserlogpage' => 'Zapis novih korisnika',
'newuserlogpagetext' => 'Ovo je zapis o registraciji novih korisnika.',

# User rights log
'rightslog' => 'Zapisnik korisničkih prava',
'rightslogtext' => 'Ovo je zapis promjena korisničkih prava.',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'čitate ovu stranicu',
'action-edit' => 'uređujete ovu stranicu',
'action-createpage' => 'napravite stranicu',
'action-createtalk' => 'kreirate stranice za razgovor',
'action-createaccount' => 'napravite ovaj korisnički račun',
'action-minoredit' => 'da označite ovu izmjenu kao malu',
'action-move' => 'pomjerite ovu stranicu',
'action-move-subpages' => 'pomjerite ovu stranicu, i njene podstranice',
'action-move-rootuserpages' => 'pomjerite stranice osnovnog korisnika',
'action-movefile' => 'pomjeri ovu datoteku',
'action-upload' => 'postavljate ovu datoteku',
'action-reupload' => 'stavite novu verziju postojeće datoteke',
'action-reupload-shared' => 'postavite ovu datoteku iz zajedničke ostave',
'action-upload_by_url' => 'postavite ovu datoteku putem URL adrese',
'action-writeapi' => "koristite ''write API'' opciju",
'action-delete' => 'obrišete ovu stranicu',
'action-deleterevision' => 'obrišete ovu reviziju',
'action-deletedhistory' => 'gledate obrisanu historiju ove stranice',
'action-browsearchive' => 'pretražujete obrisane stranice',
'action-undelete' => 'vratite ovu stranicu',
'action-suppressrevision' => 'pregledate i vratite ovu skrivenu reviziju',
'action-suppressionlog' => 'vidite ovaj privatni zapis',
'action-block' => 'blokirate uređivanje ovog korisnika',
'action-protect' => 'promijeniti nivo zaštite za ovu stranicu',
'action-rollback' => 'brzo vraćanje izmjena zadnjeg korisnika koji je uređivao određenu stranicu',
'action-import' => 'uvozite ovu stranicu iz druge wiki',
'action-importupload' => 'uvezete ovu stranicu putem postavljanja datoteke',
'action-patrol' => 'označite izmjene drugih kao patrolirane',
'action-autopatrol' => 'da Vaše izmjene budu označene kao patrolirane',
'action-unwatchedpages' => 'pregledate spisak nepraćenih stranica',
'action-mergehistory' => 'spajate historiju ove stranice',
'action-userrights' => 'uređujete sva korisnička prava',
'action-userrights-interwiki' => 'uređujete korisnička prava korisnika na drugim wikijima',
'action-siteadmin' => 'zaključavate ili otključavate bazu podataka',
'action-sendemail' => 'pošalji e-mail poruke',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|promjena|promjene|promjena}}',
'recentchanges' => 'Nedavne izmjene',
'recentchanges-legend' => 'Postavke nedavnih izmjena',
'recentchanges-summary' => 'Na ovoj stranici možete pratiti nedavne izmjene.',
'recentchanges-feed-description' => 'Na ovoj stranici možete pratiti nedavne izmjene.',
'recentchanges-label-newpage' => 'Ovom izmjenom se pravi nova stranica',
'recentchanges-label-minor' => 'Ovo je mala izmjena',
'recentchanges-label-bot' => 'Ova izmjenu je načinio bot',
'recentchanges-label-unpatrolled' => 'Ova izmjena još nije patrolirana',
'rcnote' => "Ispod {{PLURAL:$1|je '''$1''' promjena|su '''$1''' zadnje promjene|su '''$1''' zadnjih promjena}} u {{PLURAL:$2|posljednjem '''$2''' danu|posljednja '''$2''' dana|posljednjih '''$2''' dana}}, od $4, $5.",
'rcnotefrom' => 'Ispod su izmjene od <b>$2</b> (do <b>$1</b> prikazano).',
'rclistfrom' => 'Prikaži nove izmjene počev od $1',
'rcshowhideminor' => '$1 male izmjene',
'rcshowhidebots' => '$1 botove',
'rcshowhideliu' => '$1 prijavljene korisnike',
'rcshowhideanons' => '$1 anonimne korisnike',
'rcshowhidepatr' => '$1 patrolirane izmjene',
'rcshowhidemine' => '$1 moje izmjene',
'rclinks' => 'Prikaži najskorijih $1 izmjena u posljednjih $2 dana<br />$3',
'diff' => 'razl',
'hist' => 'hist',
'hide' => 'Sakrij',
'show' => 'Pokaži',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|korisnik|korisnika}} koji pregledaju]',
'rc_categories' => 'Ograniči na kategorije (razdvojene sa "|")',
'rc_categories_any' => 'Sve',
'rc-change-size-new' => '$1 {{PLURAL:$1|bajt|bajta|bajtova}} poslije izmjene',
'newsectionsummary' => '/* $1 */ nova sekcija',
'rc-enhanced-expand' => 'Pokaži detalje (neophodna JavaScript)',
'rc-enhanced-hide' => 'Sakrij detalje',
'rc-old-title' => 'prvobitno kreirano kao "$1"',

# Recent changes linked
'recentchangeslinked' => 'Srodne izmjene',
'recentchangeslinked-feed' => 'Srodne izmjene',
'recentchangeslinked-toolbox' => 'Srodne izmjene',
'recentchangeslinked-title' => 'Srodne promjene sa "$1"',
'recentchangeslinked-noresult' => 'Nema izmjena na povezanim stranicama u zadanom periodu.',
'recentchangeslinked-summary' => "Ova posebna stranica prikazuje promjene na povezanim stranicama.
Stranice koje su na vašem [[Special:Watchlist|spisku praćenja]] su '''podebljane'''.",
'recentchangeslinked-page' => 'Naslov stranice:',
'recentchangeslinked-to' => 'Pokaži promjene stranica koji su povezane sa datom stranicom',

# Upload
'upload' => 'Postavi datoteku',
'uploadbtn' => 'Postavi datoteku',
'reuploaddesc' => 'Vratite se na upitnik za slanje.',
'upload-tryagain' => 'Pošaljite izmijenjeni opis datoteke',
'uploadnologin' => 'Niste prijavljeni',
'uploadnologintext' => 'Morate biti [[Special:UserLogin|prijavljeni]] da bi ste slali datoteke.',
'upload_directory_missing' => 'Folder za postavljanje ($1) nedostaje i webserver ga ne može napraviti.',
'upload_directory_read_only' => 'Folder za postavljanje ($1) na webserveru je postavljen samo za čitanje.',
'uploaderror' => 'Greška pri slanju',
'upload-recreate-warning' => "'''Upozorenje: Datoteka s tim imenom je obrisana ili pomjerena.'''
Zapisnik brisanja i pomjeranja za ovu stranicu je dostupan ovdje na uvid:",
'uploadtext' => "Koristite formu ispod za postavljanje datoteka.
Da bi ste vidjeli ili pretražili ranije postavljene datoteke, pogledajte [[Special:FileList|spisak postavljenih datoteka]], ponovna postavljanja su također zapisana u [[Special:Log/upload|zapisnik postavljanja]], a brisanja u [[Special:Log/delete|zapisnik brisanja]].

Da bi ste prikazali datoteku na stranici, koristite link na jedan od slijedećih načina:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Datoteka.jpg]]</nowiki></code>''' da upotrijebite potpunu veziju datoteke
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Datoteka.png|200px|thumb|lijevo|opis slike]]</nowiki></code>''' da upotrijebite smanjeni prikaz širine 200 piksela unutar okvira, s lijevim poravnanjem i ''opisom slike''.
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Datoteka.ogg]]</nowiki></code>''' za direkno povezivanje datoteke bez njenog prikazivanja",
'upload-permitted' => 'Podržane vrste datoteka: $1.',
'upload-preferred' => 'Preferirane vrste datoteka: $1.',
'upload-prohibited' => 'Zabranjene vrste datoteka: $1.',
'uploadlog' => 'log slanja',
'uploadlogpage' => 'Protokol postavljanja',
'uploadlogpagetext' => 'Ispod je spisak najskorijih slanja.',
'filename' => 'Ime datoteke',
'filedesc' => 'Sažetak',
'fileuploadsummary' => 'Sažetak:',
'filereuploadsummary' => 'Izmjene datoteke:',
'filestatus' => 'Status autorskih prava:',
'filesource' => 'Izvor:',
'uploadedfiles' => 'Poslati fajlovi',
'ignorewarning' => 'Zanemari upozorenja i sačuvaj datoteku',
'ignorewarnings' => 'Zanemari sva upozorenja',
'minlength1' => 'Ime datoteke mora imati barem jedno slovo.',
'illegalfilename' => 'Ime datoteke "$1" sadrži simbol koji nije dozvoljen u imenu datoteke.
Molimo Vas da promijenite ime datoteke i pokušate da je ponovo postavite.',
'filename-toolong' => 'Imena datoteka ne mogu biti duža od 240 bajtova.',
'badfilename' => 'Ime datoteke je promijenjeno u "$1".',
'filetype-mime-mismatch' => 'Proširenje datoteke "$1" ne odgovara MIME tipu ($2).',
'filetype-badmime' => 'Datoteke MIME vrste "$1" nije dopušteno postavljati.',
'filetype-bad-ie-mime' => 'Ne može se postaviti ova datoteka jer je Internet Explorer prepoznaje kao "$1", što je nedozvoljena i potencijalno opasna vrsta datoteke.',
'filetype-unwanted-type' => "'''\".\$1\"''' je nepoželjna vrsta datoteke.
{{PLURAL:\$3|Preporučena vrsta|Preporučene vrste}} datoteke su \$2.",
'filetype-banned-type' => "'''\".\$1\"''' nije dopuštena vrsta datoteke.
{{PLURAL:\$3|Dopuštena vrsta datoteke je|Dopuštene vrste datoteka su}} \$2.",
'filetype-missing' => 'Datoteka nema ekstenziju (poput ".jpg").',
'empty-file' => 'Datoteka koju ste poslali je bila prazna.',
'file-too-large' => 'Datoteka koju ste poslali je bila prevelika.',
'filename-tooshort' => 'Ime datoteke je prekratko.',
'filetype-banned' => 'Ova vrsta datoteke je zabranjena.',
'verification-error' => 'Ova datoteka nije prošla provjeru.',
'hookaborted' => 'Izmjena koji ste pokušali načiniti je obustavljena preko kuke proširenja.',
'illegal-filename' => 'Ime datoteke nije dopušteno.',
'overwrite' => 'Pisanje preko postojeće datoteke nije dopušteno.',
'unknown-error' => 'Desila se nepoznata greška.',
'tmp-create-error' => 'Nije moguće napraviti privremenu datoteku.',
'tmp-write-error' => 'Greška pri pisanju privremene datoteke.',
'large-file' => 'Preporučeno je da datoteke nisu veće od $1;
Ova datoteka je velika $2.',
'largefileserver' => 'Ova datoteka je veća nego što server dopušta.',
'emptyfile' => 'Datoteka koju ste poslali je prazna. Ovo je moguće zbog greške u imenu datoteke. Molimo Vas da provjerite da li stvarno želite da pošaljete ovu datoteku.',
'windows-nonascii-filename' => 'Ova wiki ne podržava imena datoteka sa posebnim znacima.',
'fileexists' => 'Datoteka sa ovim imenom već postoji.
Molimo Vas da provjerite <strong>[[:$1]]</strong> ako niste sigurni da li želite da je promjenite.
[[$1|thumb]]',
'filepageexists' => 'Opis stranice za ovu datoteku je već napravljen ovdje <strong>[[:$1]]</strong>, ali datoteka sa ovim nazivom trenutno ne postoji.
Sažetak koji ste naveli neće se pojaviti na stranici opisa.
Da bi se Vaš opis ovdje našao, potrebno je da ga ručno uredite.
[[$1|thumb]]',
'fileexists-extension' => 'Datoteka sa sličnim nazivom postoji: [[$2|thumb]]
* Naziv datoteke koja se postavlja: <strong>[[:$1]]</strong>
* Naziv postojeće datoteke: <strong>[[:$2]]</strong>
Molimo Vas da izaberete drugačiji naziv.',
'fileexists-thumbnail-yes' => 'Izgleda da je datoteka slika smanjene veličine \'\'("thumbnail")\'\'. [[$1|thumb]]
Molimo provjerite datoteku <strong>[[:$1]]</strong>.
Ako je provjerena datoteka ista slika originalne veličine, nije potrebno postavljati dodatnu sliku.',
'file-thumbnail-no' => "Naziv datoteke počinje sa <strong>\$1</strong>.
Izgleda da se radi o smanjenoj slici ''(\"thumbnail\")''.
Ako imate ovu sliku u punoj rezoluciji, postavite nju; ili promijenite naslov ove datoteke.",
'fileexists-forbidden' => 'Datoteka sa ovim imenom već postoji i ne može biti prepisana.
Ako i dalje želite da postavite ovu datoteku, molimo Vas da se vratite i pošaljete ovu datoteku pod novim imenom. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Datoteka sa ovim imenom već postoji u zajedničkoj ostavi; molimo Vas da se vratite i pošaljete ovu datoteku pod novim imenom. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Ova datoteka je dvojnik {{PLURAL:$1|slijedećoj datoteci|slijedećim datotekama}}:',
'file-deleted-duplicate' => 'Datoteka koje je identična ovoj datoteci ([[:$1]]) je ranije bila obrisana. Trebate provjeriti historiju brisanja te datoteke prije nego što nastavite sa njenim ponovnim postavljanjem.',
'uploadwarning' => 'Upozorenje pri slanju',
'uploadwarning-text' => 'Molimo izmijeniti opis datoteke ispod i pokušajte kasnije.',
'savefile' => 'Sačuvaj datoteku',
'uploadedimage' => 'poslato "[[$1]]"',
'overwroteimage' => 'postavljena nova verzija datoteke "[[$1]]"',
'uploaddisabled' => 'Slanje fajlova je isključeno',
'copyuploaddisabled' => 'Postavljanje putem URL nije omogućeno.',
'uploadfromurl-queued' => 'Vaše postavljanje je na čekanju.',
'uploaddisabledtext' => 'Postavljanje datoteka je onemogućeno.',
'php-uploaddisabledtext' => 'Postavljanje datoteka preko PHP je onemogućeno. Molimo provjerite postavku file_uploads.',
'uploadscripted' => 'Ova datoteka sadrži HTML ili skriptni kod koji može izazvati grešku kod internet preglednika.',
'uploadvirus' => 'Datoteka sadrži virus!  Detalji:  $1',
'uploadjava' => 'Datoteka je ZIP datoteka koja sadrži Java .class datoteku.
Postavljanje Java datoteka nije dopušteno, jer one mogu prouzrokovati da se zaobiđu sigurnosne zabrane.',
'upload-source' => 'Izvorna datoteka',
'sourcefilename' => 'Ime izvorišne datoteke:',
'sourceurl' => 'URL izvora:',
'destfilename' => 'Ime odredišne datoteke:',
'upload-maxfilesize' => 'Najveća veličina datoteke: $1',
'upload-description' => 'Opis datoteke',
'upload-options' => 'Opcije postavljanja',
'watchthisupload' => 'Prati ovu datoteku',
'filewasdeleted' => 'Datoteka s ovim nazivom je ranije postavljana i nakon toga obrisana.
Prije nego što nastavite da je ponovno postavite trebate provjeriti $1.',
'filename-bad-prefix' => "Naziv datoteke koju postavljate počinje sa '''\"\$1\"''', što je naziv koji obično automatski dodjeljuju digitalni fotoaparati i kamere.
Molimo Vas da odaberete naziv datoteke koji opisuje njen sadržaj.",
'filename-prefix-blacklist' => ' #<!-- ostavite ovu liniju onakvom kakva jeste --> <pre>
# Sintaksa je slijedeća:
#   * Sve od karaktera "#" pa do kraja je komentar
#   * Svaka neprazna linija je prefiks za tipična imena datoteka koja automatski dodjeljuje digitalna kamera
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # neki mobilni telefoni
IMG # generic
JD # Jenoptik
MGP # Pentax
PICT # razni
 #</pre> <!-- ostavite ovu liniju onakvom kakva jeste -->',
'upload-success-subj' => 'Uspješno slanje',
'upload-success-msg' => 'Vaša datoteka iz [$2] je uspješno postavljena. Dostupna je ovdje: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Problem pri postavljanju',
'upload-failure-msg' => 'Nastao je problem s Vašim postavljanjem sa [$2]:

$1',
'upload-warning-subj' => 'Upozorenje pri slanju',
'upload-warning-msg' => 'Nastao je problem sa vašim postavljanjem sa [$2]. Morate se vratiti na [[Special:Upload/stash/$1|formu za postavljanje]] kako biste riješili ovaj problem.',

'upload-proto-error' => 'Pogrešan protokol',
'upload-proto-error-text' => 'Postavljanje sa vanjske lokacije zahtjeva URL-ove koji počinju sa <code>http://</code> ili <code>ftp://</code>.',
'upload-file-error' => 'Unutrašnja greška',
'upload-file-error-text' => 'Desila se interna greška pri pokušaju kreiranja privremene datoteke na serveru.
Molimo kontaktirajte [[Special:ListUsers/sysop|administratora]].',
'upload-misc-error' => 'Nepoznata greška pri postavljanju',
'upload-misc-error-text' => 'Desila se nepoznata greška pri postavljanju.
Molimo Vas provjerite da li je URL tačan i dostupan pa pokušajte ponovo.
Ako se problem ne riješi, kontaktirajte [[Special:ListUsers/sysop|administratora]].',
'upload-too-many-redirects' => 'URL sadrži previše preusmjerenja',
'upload-unknown-size' => 'Nepoznata veličina',
'upload-http-error' => 'Desila se HTTP greška: $1',
'upload-copy-upload-invalid-domain' => 'Kopije postavljenih datoteka nisu dostupne sa ove domene.',

# File backend
'backend-fail-stream' => 'Ne mogu emitirati datoteku $1.',
'backend-fail-backup' => 'Ne može sigurnosno kopirati datoteku $1.',
'backend-fail-notexists' => 'Datoteka $1 ne postoji.',
'backend-fail-hashes' => 'Nisam našao datoteku disperzije radi usporedbe.',
'backend-fail-notsame' => 'Već postoji različita datoteka $1.',
'backend-fail-invalidpath' => '$1 nije valjana putanja za skladištenje.',
'backend-fail-delete' => 'Ne može se izbrisati datoteka $1.',
'backend-fail-alreadyexists' => 'Datoteka $1 već postoji.',
'backend-fail-store' => 'Ne može se spremiti datoteka $1 na $2.',
'backend-fail-copy' => 'Nije uspjelo kopiranje datoteke "$1" u "$2".',
'backend-fail-move' => 'Nije uspjelo premještanje datoteke "$1" u "$2".',
'backend-fail-opentemp' => 'Ne mogu otvoriti privremenu datoteku.',
'backend-fail-writetemp' => 'Ne mogu pisati u privremenu datoteku.',
'backend-fail-closetemp' => 'Ne mogu zatvoriti privremenu datoteku.',
'backend-fail-read' => 'Ne mogu čitati datoteku $1.',
'backend-fail-create' => 'Ne mogu napraviti datoteku $1.',
'backend-fail-contenttype' => 'Ne mogu da utvrdim kakav sadržaj ima datoteka koju treba da smjestim u "$1".',

# Lock manager
'lockmanager-notlocked' => 'Ne mogu otključati "$1"; nije zaključan.',
'lockmanager-fail-closelock' => 'Ne mogu zatvoriti "lock"-datoteku za "$1".',
'lockmanager-fail-deletelock' => 'Ne mogu obrisati "lock"-datoteku za "$1".',
'lockmanager-fail-acquirelock' => 'Ne mogu dobiti "lock"-datoteku za "$1".',
'lockmanager-fail-openlock' => 'Ne mogu otvoriti "lock"-datoteku za "$1".',
'lockmanager-fail-releaselock' => 'Ne mogu osloboditi katanac za „$1“.',
'lockmanager-fail-db-bucket' => 'Ne mogu da kontaktiram s dovoljno "lock"-baza u kanti $1.',
'lockmanager-fail-db-release' => 'Ne mogu osloboditi katance u bazi $1.',
'lockmanager-fail-svr-release' => 'Ne mogu se otključati katanci na serveru file $1.',

# ZipDirectoryReader
'zip-file-open-error' => 'Desila se greška pri otvaranju datoteke za provjere ZIP-a.',
'zip-wrong-format' => 'Navedena datoteka nije bila ZIP datoteka.',
'zip-bad' => 'Datoteka je oštećena ili je na drugi način nečitljiva ZIP datoteka.
Ne može se dobro provjeriti u vezi sigurnosti.',
'zip-unsupported' => 'Datoteka je ZIP datoteka koja koristi ZIP osobine koje nisu podržane od strane MediaWiki.
Ne može se dobro provjeriti u vezi sigurnosti.',

# Special:UploadStash
'uploadstash' => 'Postavi sakrivene datoteke',
'uploadstash-summary' => 'Ova stranica daje pristup datotekama koje su postavljene (ili su u postupku postavljanja) ali još nisu objavljene na wiki. Ove datoteke nisu vidljive nikom osim korisniku koji ih je postavio.',
'uploadstash-clear' => 'Očisti sakrivene datoteke',
'uploadstash-nofiles' => 'Nemate sakrivenih datoteka.',
'uploadstash-badtoken' => 'Izvršavanje ove akcije je bilo neuspješno, možda zato što su vaša uređivačka odobrenja istekla. Pokušajte ponovo.',
'uploadstash-errclear' => 'Brisanje sakrivenih datoteka je bilo neuspješno.',
'uploadstash-refresh' => 'Osvježi spisak datoteka',
'invalid-chunk-offset' => 'Neispravna polazna tačka',

# img_auth script messages
'img-auth-accessdenied' => 'Pristup onemogućen',
'img-auth-nopathinfo' => 'Nedostaje PATH_INFO.
Vaš server nije postavljen da daje ovu informaciju.
Možda je zasnovan na CGI koji ne podržava img_auth.
Pogledajte https://www.mediawiki.org/wiki/Manual:Image_Authorization.',
'img-auth-notindir' => 'Zahtjevana putanje nije u direktorijumu podešenom za postavljanje.',
'img-auth-badtitle' => 'Ne mogu napraviti valjani naslov iz "$1".',
'img-auth-nologinnWL' => 'Niste prijavljeni i "$1" nije na spisku dozvoljenih.',
'img-auth-nofile' => 'Datoteka "$1" ne postoji.',
'img-auth-isdir' => 'Pokušavate pristupiti direktorijumu "$1".
Dozvoljen je samo pristup datotekama.',
'img-auth-streaming' => 'Tok "$1".',
'img-auth-public' => 'Funkcija img_auth.php služi za izlaz datoteka sa privatnih wikija.
Ova wiki je postavljena kao javna wiki.
Za optimalnu sigurnost, img_auth.php je onemogućena.',
'img-auth-noread' => 'Korisnik nema pristup za čitanje "$1".',
'img-auth-bad-query-string' => 'URL ima nevaljan izraz upita.',

# HTTP errors
'http-invalid-url' => 'Nevaljan URL: $1',
'http-invalid-scheme' => 'URLovi za koje šema "$1" nije podržana',
'http-request-error' => 'Nepoznata greška pri slanju zahtjeva.',
'http-read-error' => 'Greška pri čitanju HTTP.',
'http-timed-out' => 'Istekao HTTP zahtjev.',
'http-curl-error' => 'Greška pri otvaranju URLa: $1',
'http-bad-status' => 'Nastao je problem tokom HTTP zahtjeva: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Ovaj URL nije bilo moguće otvoriti',
'upload-curl-error6-text' => 'URL koji je naveden nije dostupan.
Molimo ponovno provjerite da li je URL ispravan i da li stranica radi.',
'upload-curl-error28' => 'Vrijeme postavljanja isteklo',
'upload-curl-error28-text' => 'Stranici je potrebno previše vremena za odgovor.
Molimo provjerite da li je stranica postavljena, malo pričekajte i pokušajte ponovno.
Možda možete pokušati kada bude manje opterećenje.',

'license' => 'Licenca:',
'license-header' => 'Licenciranje',
'nolicense' => 'Ništa nije odabrano',
'license-nopreview' => '(Pregled nije dostupan)',
'upload_source_url' => ' (validni, javno dostupni URL)',
'upload_source_file' => ' (datoteka na Vašem računaru)',

# Special:ListFiles
'listfiles-summary' => 'Ova posebna stranica prikazuje sve postavljene datoteke.
Kada je filtrirana od strane korisnika, prikazane su samo datoteke ako je korisnik postavio posljednju verziju te datoteke.',
'listfiles_search_for' => 'Traži medije po imenu:',
'imgfile' => 'datoteka',
'listfiles' => 'Spisak slika',
'listfiles_thumb' => 'Smanjeni pregled',
'listfiles_date' => 'Datum',
'listfiles_name' => 'Naziv',
'listfiles_user' => 'Korisnik',
'listfiles_size' => 'Veličina',
'listfiles_description' => 'Opis',
'listfiles_count' => 'Verzije',

# File description page
'file-anchor-link' => 'Datoteka',
'filehist' => 'Historija datoteke',
'filehist-help' => 'Kliknite na datum/vrijeme da vidite verziju datoteke iz tog vremena.',
'filehist-deleteall' => 'izbriši sve',
'filehist-deleteone' => 'obriši',
'filehist-revert' => 'vrati',
'filehist-current' => 'trenutno',
'filehist-datetime' => 'Datum/Vrijeme',
'filehist-thumb' => 'Smanjeni pregled',
'filehist-thumbtext' => 'Smanjeni pregled verzije na dan $1',
'filehist-nothumb' => 'Bez smanjenog pregleda',
'filehist-user' => 'Korisnik',
'filehist-dimensions' => 'Dimenzije',
'filehist-filesize' => 'Veličina datoteke',
'filehist-comment' => 'Komentar',
'filehist-missing' => 'Datoteka nedostaje',
'imagelinks' => 'Upotreba datoteke',
'linkstoimage' => '{{PLURAL:$1|Slijedeća stranica koristi|Slijedećih $1 stranica koriste}} ovu sliku:',
'linkstoimage-more' => 'Više od $1 {{PLURAL:$1|datoteke|datoteka}} je povezano s ovom datotekom.
Slijedeći spisak pokazuje samo {{PLURAL:$1|prvu stranicu povezanu|prve $1 stranice povezane|prvih $1 stranica povezanih}} s ovom datotekom.
Ovdje je dostupan [[Special:WhatLinksHere/$2|potpuni spisak]].',
'nolinkstoimage' => 'Nema stranica koje koriste ovu sliku.',
'morelinkstoimage' => 'Vidi [[Special:WhatLinksHere/$1|ostale linkove]] prema ovoj datoteci.',
'linkstoimage-redirect' => '$1 (preusmjerenje datoteke) $2',
'duplicatesoffile' => '{{PLURAL:$1|Slijedeća datoteka je dvojnik|Slijedeće $1 datoteke su dvojnici}} ove datoteke ([[Special:FileDuplicateSearch/$2|detaljnije]]):',
'sharedupload' => 'Ova datoteka je sa $1 i može se koristiti i na drugim projektima.',
'sharedupload-desc-there' => 'Ova datoteka je sa $1 i može se koristiti i na drugim projektima.
Molimo pogledajte [$2 stranicu opisa datoteke] za ostale informacije.',
'sharedupload-desc-here' => 'Ova datoteka je sa $1 i može se koristiti i na drugim projektima.
Opis sa njene [$2 stranice opisa datoteke] je prikazan ispod.',
'sharedupload-desc-edit' => 'Ova datoteka se nalazi na $1 i može da se koristi na drugim projektima.
Njen opis možete urediti na [$2 stranici opisa datoteke].',
'sharedupload-desc-create' => 'Ova datoteka se nalazi na $1 i može da se koristi na drugim projektima.
Možda želite urediti njen opis na [$2 stranici opisa datoteke].',
'filepage-nofile' => 'Ne postoji datoteka s ovim nazivom.',
'filepage-nofile-link' => 'Ne postoji datoteka s ovim imenom, ali je možete [$1 postaviti].',
'uploadnewversion-linktext' => 'Postavite noviju verziju ove datoteke',
'shared-repo-from' => 'iz $1',
'shared-repo' => 'dijeljeni repozitorijum',
'upload-disallowed-here' => 'Ne možete prepisati ovu datoteku.',

# File reversion
'filerevert' => 'Vrati $1',
'filerevert-legend' => 'Vraćanje datoteke',
'filerevert-intro' => "Vraćate datoteku '''[[Media:$1|$1]]''' na [$4 verziju od $3, $2].",
'filerevert-comment' => 'Razlog:',
'filerevert-defaultcomment' => 'Vraćeno na verziju od $2, $1',
'filerevert-submit' => 'Vrati',
'filerevert-success' => "'''Datoteka [[Media:$1|$1]]''' je vraćena na [$4 verziju od $3, $2].",
'filerevert-badversion' => 'Ne postoji ranija lokalna verzija ove datoteke sa navedenim vremenskim podacima.',

# File deletion
'filedelete' => 'Obriši $1',
'filedelete-legend' => 'Obriši datoteku',
'filedelete-intro' => "Brišete datoteku '''[[Media:$1|$1]]''' zajedno sa svom njenom historijom.",
'filedelete-intro-old' => "Brišete verziju datoteke '''[[Media:$1|$1]]''' od [$4 $3, $2].",
'filedelete-comment' => 'Razlog:',
'filedelete-submit' => 'Obriši',
'filedelete-success' => "'''$1''' je obrisano.",
'filedelete-success-old' => "Verzija datoteke '''[[Media:$1|$1]]''' od $3, $2 je obrisana.",
'filedelete-nofile' => "'''$1''' ne postoji.",
'filedelete-nofile-old' => "Ne postoji arhivirana verzija '''$1''' sa navedenim atributima.",
'filedelete-otherreason' => 'Ostali/dodatni razlozi:',
'filedelete-reason-otherlist' => 'Ostali razlozi',
'filedelete-reason-dropdown' => '*Uobičajeni razlozi brisanja
** Kršenje autorskih prava
** Datoteka dvojnik',
'filedelete-edit-reasonlist' => 'Uredi razloge brisanja',
'filedelete-maintenance' => 'Brisanje i povratak datoteka je privremeno onemogućen tokom održavanja.',
'filedelete-maintenance-title' => 'Ne mogu da obrišem datoteku',

# MIME search
'mimesearch' => 'MIME pretraga',
'mimesearch-summary' => 'Ova stranica omogućava filtriranje datoteka prema njihovoj MIME vrsti.
Ulazni podaci: vrstasadržaja/subvrsta, npr. <code>image/jpeg</code>.',
'mimetype' => 'MIME tip:',
'download' => 'učitaj',

# Unwatched pages
'unwatchedpages' => 'Nepraćene stranice',

# List redirects
'listredirects' => 'Spisak preusmjerenja',

# Unused templates
'unusedtemplates' => 'Nekorišteni šabloni',
'unusedtemplatestext' => 'Ova stranica prikazuje sve stranice u imenskom prostoru {{ns:template}} koji se ne koriste.
Prije brisanja provjerite da li druge stranice vode na te šablone.',
'unusedtemplateswlh' => 'ostali linkovi',

# Random page
'randompage' => 'Slučajna stranica',
'randompage-nopages' => 'Nema stranica u {{PLURAL:$2|slijedećem imenskom prostoru|slijedećim imenskim prostorima}}: "$1".',

# Random redirect
'randomredirect' => 'Slučajno preusmjerenje',
'randomredirect-nopages' => 'Ne postoje preusmjerenja u imenskom prostoru "$1".',

# Statistics
'statistics' => 'Statistike',
'statistics-header-pages' => 'Statistike stranice',
'statistics-header-edits' => 'Statistike izmjena',
'statistics-header-views' => 'Statistike pregleda',
'statistics-header-users' => 'Statistike korisnika',
'statistics-header-hooks' => 'Ostale statistike',
'statistics-articles' => 'Stranice sadržaja',
'statistics-pages' => 'Stranice',
'statistics-pages-desc' => 'Sve stranice na wikiju, uključujući stranice za razgovor, preusmjerenja itd.',
'statistics-files' => 'Broj postavljenih datoteka',
'statistics-edits' => 'Broj izmjena od kako je instalirana {{SITENAME}}',
'statistics-edits-average' => 'Prosječno izmjena po stranici',
'statistics-views-total' => 'Ukupno pregleda',
'statistics-views-total-desc' => 'Pregledi nepostojećih stranica i posebnih stranica nisu uključeni',
'statistics-views-peredit' => 'Pogleda po izmjeni',
'statistics-users' => 'Registrovani [[Special:ListUsers|korisnici]]',
'statistics-users-active' => 'Aktivni korisnici',
'statistics-users-active-desc' => 'Korisnici koju su izvršili akciju u toku {{PLURAL:$1|zadnjeg dana|zadnja $1 dana|zadnjih $1 dana}}',
'statistics-mostpopular' => 'Najviše pregledane stranice',

'disambiguations' => 'Stranice koje vode na čvor članke',
'disambiguationspage' => '{{ns:template}}:Čvor',
'disambiguations-text' => "Slijedeće stranice sadrže najmanje jedan link na '''čvor stranicom'''.
Umjesto toga, one se trebaju povezati sa konkretnim konkretnim stranicom.<br />
Stranica se smatra čvorom, ukoliko koristi šablon koji je povezan sa spiskom [[MediaWiki:Disambiguationspage]]",

'pageswithprop-submit' => 'Idi',

'doubleredirects' => 'Dvostruka preusmjerenja',
'doubleredirectstext' => 'Ova stranica prikazuje stranice koje preusmjeravaju na druga preusmjerenja.
Svaki red sadrži veze na prvo i drugo preusmjerenje, kao i na prvu liniju teksta drugog preusmjerenja, što obično daje "pravi" ciljni članak, na koji bi prvo preusmjerenje i trebalo da pokazuje.
<del>Precrtane</del> stavke su riješene.',
'double-redirect-fixed-move' => '[[$1]] je premješten, sada je preusmjerenje na [[$2]]',
'double-redirect-fixed-maintenance' => 'Ispravljanje dvostrukih preusmjerenja sa [[$1]] na [[$2]].',
'double-redirect-fixer' => 'Popravljač preusmjerenja',

'brokenredirects' => 'Pokvarena preusmjerenja',
'brokenredirectstext' => 'Slijedeća preusmjerenja vode na nepostojeće stranice:',
'brokenredirects-edit' => 'uredi',
'brokenredirects-delete' => 'obriši',

'withoutinterwiki' => 'Članci bez interwiki linkova',
'withoutinterwiki-summary' => 'Slijedeće stranice nemaju linkove prema verzijama na drugim jezicima.',
'withoutinterwiki-legend' => 'Prefiks',
'withoutinterwiki-submit' => 'Pokaži',

'fewestrevisions' => 'Stranice sa najmanje izmjena',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|bajt|bajtova}}',
'ncategories' => '$1 {{PLURAL:$1|kategorija|kategorije}}',
'ninterwikis' => '$1 {{PLURAL:$1|međujezična veza|međujezične veze}}',
'nlinks' => '$1 {{PLURAL:$1|veza|veze}}',
'nmembers' => '$1 {{PLURAL:$1|član|članova}}',
'nrevisions' => '$1 {{PLURAL:$1|revizija|revizije|revizija}}',
'nviews' => '$1 {{PLURAL:$1|pregled|pregleda}}',
'nimagelinks' => 'Koristi se na $1 {{PLURAL:$1|stranici|stranice|stranica}}',
'ntransclusions' => 'koristi se na $1 {{PLURAL:$1|stranici|stranice|stranica}}',
'specialpage-empty' => 'Nepostoje rezultati za ovaj izvještaj.',
'lonelypages' => 'Siročići',
'lonelypagestext' => 'Slijedeće stranice nemaju linkove na ostalim stranicama na ovoj {{SITENAME}}.',
'uncategorizedpages' => 'Nekategorisane stranice',
'uncategorizedcategories' => 'Nekategorisane kategorije',
'uncategorizedimages' => 'Slike bez kategorije',
'uncategorizedtemplates' => 'Šabloni bez kategorije',
'unusedcategories' => 'Neiskorištene kategorije',
'unusedimages' => 'Neupotrebljene slike',
'popularpages' => 'Popularne stranice',
'wantedcategories' => 'Tražene kategorije',
'wantedpages' => 'Tražene stranice',
'wantedpages-badtitle' => 'Nevaljan naslov u setu rezultata: $1',
'wantedfiles' => 'Tražene datoteke',
'wantedfiletext-cat' => 'Sljedeće datoteke se koriste, ali ne postoje. Datoteke iz drugih baza mogu biti navedene iako ne postoje. Takve datoteke će biti <del>izbrisane</del> sa spiska. Pored toga, stranice koje sadrže nepostojeće datoteke se nalaze u [[:$1]].',
'wantedfiletext-nocat' => 'Sljedeće datoteke se koriste, ali ne postoje. Datoteke iz drugih baza mogu biti navedene iako ne postoje. Takve datoteke će biti <del>izbrisane</del> sa spiska.',
'wantedtemplates' => 'Potrebni šabloni',
'mostlinked' => 'Članci sa najviše linkova',
'mostlinkedcategories' => 'Kategorije sa najviše linkova',
'mostlinkedtemplates' => 'Najviše upotrebljavani šabloni',
'mostcategories' => 'Članci sa najviše kategorija',
'mostimages' => 'Najviše linkovane slike',
'mostrevisions' => 'Članci sa najviše izmjena',
'prefixindex' => 'Sve stranice sa prefiksom',
'prefixindex-namespace' => 'Sve stranice s predmetkom (imenski prostor $1)',
'shortpages' => 'Kratke stranice',
'longpages' => 'Dugačke stranice',
'deadendpages' => 'Stranice bez internih veza',
'deadendpagestext' => 'Slijedeće stranice nisu povezane s drugim stranicama na {{SITENAME}}.',
'protectedpages' => 'Zaštićene stranice',
'protectedpages-indef' => 'Samo neograničena zaštićenja',
'protectedpages-cascade' => 'Samo prenosive zaštite',
'protectedpagestext' => 'Slijedeće stranice su zaštićene od izmjena i premještanja',
'protectedpagesempty' => 'Trenutno nijedna stranica nije zaštićena s ovim parametrima.',
'protectedtitles' => 'Zaštićeni naslovi',
'protectedtitlestext' => 'Članci sa slijedećim naslovima su zaštićeni od kreiranja.',
'protectedtitlesempty' => 'Nema naslova zaštićenih članaka sa ovim parametrima.',
'listusers' => 'Spisak korisnika',
'listusers-editsonly' => 'Pokaži samo korisnike koji su uređivali',
'listusers-creationsort' => 'Sortiraj po datumu pravljenja',
'usereditcount' => '$1 {{PLURAL:$1|izmjena|izmjene}}',
'usercreated' => '{{GENDER:$3|Napravio|Napravila}} dana $1 u $2',
'newpages' => 'Nove stranice',
'newpages-username' => 'Korisničko ime:',
'ancientpages' => 'Najstarije stranice',
'move' => 'Pomjeri',
'movethispage' => 'Premjesti ovu stranicu',
'unusedimagestext' => 'Slijedeće datoteke postoje ali nisu uključene ni u jednu stranicu.
Molimo obratite pažnju da druge web stranice mogu biti povezane s datotekom putem direktnog URLa, tako da i pored toga mogu biti prikazane ovdje pored aktivne upotrebe.',
'unusedcategoriestext' => 'Slijedeće stranice kategorija postoje iako ih ni jedan drugi članak ili kategorija ne koriste.',
'notargettitle' => 'Nema cilja',
'notargettext' => 'Niste naveli ciljnu stranicu ili korisnika
na kome bi se izvela ova funkcija.',
'nopagetitle' => 'Ne postoji takva stranica',
'nopagetext' => 'Ciljna stranica koju ste naveli ne postoji.',
'pager-newer-n' => '{{PLURAL:$1|novija 1|novije $1}}',
'pager-older-n' => '{{PLURAL:$1|starija 1|starije $1}}',
'suppress' => 'Nazdor',
'querypage-disabled' => 'Ova posebna stranica je onemogućena jer smanjuje performanse.',

# Book sources
'booksources' => 'Štampani izvori',
'booksources-search-legend' => 'Traži književne izvore',
'booksources-go' => 'Idi',
'booksources-text' => 'Ispod se nalazi spisak vanjskih linkova na ostale stranice koje prodaju nove ili korištene knjige kao i stranice koje mogu da imaju važnije podatke o knjigama koje tražite:',
'booksources-invalid-isbn' => 'Navedeni ISBN broj nije validan; molimo da provjerite da li je došlo do greške pri kopiranju iz prvobitnog izvora.',

# Special:Log
'specialloguserlabel' => 'Izvršilac:',
'speciallogtitlelabel' => 'Cilj (naslov ili korisnik):',
'log' => 'Protokoli',
'all-logs-page' => 'Svi javni registri',
'alllogstext' => 'Zajednički prikaz svih dostupnih zapisa sa {{SITENAME}}.
Možete specificirati prikaz izabiranjem specifičnog spiska, korisničkog imena ili promjenjenog članka (razlikovati velika slova).',
'logempty' => 'Ne postoji takav zapis.',
'log-title-wildcard' => 'Traži naslove koji počinju s ovim tekstom',

# Special:AllPages
'allpages' => 'Sve stranice',
'alphaindexline' => '$1 do $2',
'nextpage' => 'Sljedeća strana ($1)',
'prevpage' => 'Prethodna stranica ($1)',
'allpagesfrom' => 'Prikaži stranice počev od:',
'allpagesto' => 'Prikaži stranice koje završavaju na:',
'allarticles' => 'Svi članci',
'allinnamespace' => 'Sve stranice (imenski prostor $1)',
'allnotinnamespace' => 'Sve stranice (van imenskog prostora $1)',
'allpagesprev' => 'Prethodno',
'allpagesnext' => 'Slijedeće',
'allpagessubmit' => 'Idi',
'allpagesprefix' => 'Prikaži stranice sa prefiksom:',
'allpagesbadtitle' => 'Dati naziv stranice je nepravilan ili ima međujezički ili interwiki prefiks.
Možda sadrži jedan ili više znakova koji se ne mogu koristiti u naslovima.',
'allpages-bad-ns' => '{{SITENAME}} nema imenski prostor "$1".',
'allpages-hide-redirects' => 'Sakrij preusmjerenja',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Gledate keširanu verziju ove stranice, koja može biti stara i do $1.',
'cachedspecial-viewing-cached-ts' => 'Gledate keširanu verziju ove stranice, koja možda nije potpuno aktualna.',
'cachedspecial-refresh-now' => 'Pogledaj najnoviju.',

# Special:Categories
'categories' => 'Kategorije',
'categoriespagetext' => '{{PLURAL:$1|Slijedeća kategorija sadrži|Slijedeće kategorije sadrže}} stranice ili multimedijalne datoteke.
[[Special:UnusedCategories|Nekorištene kategorije]] nisu prikazane ovdje.
Vidi također [[Special:WantedCategories|zatražene kategorije]].',
'categoriesfrom' => 'Prikaži kategorije počev od:',
'special-categories-sort-count' => 'sortiranje po broju',
'special-categories-sort-abc' => 'sortiraj po abecedi',

# Special:DeletedContributions
'deletedcontributions' => 'Obrisani doprinosi korisnika',
'deletedcontributions-title' => 'Obrisani doprinosi korisnika',
'sp-deletedcontributions-contribs' => 'doprinosi',

# Special:LinkSearch
'linksearch' => 'Pretraga vanjskih linkova',
'linksearch-pat' => 'Šema traženja:',
'linksearch-ns' => 'Imenski prostor:',
'linksearch-ok' => 'Traži',
'linksearch-text' => 'Mogu se koristiti općeniti izrazi poput "*.wikipedia.org"
Potrebna je najmanje osnovna domena, naprimjer "*.org."<br />
Podržani protokoli: <code>$1</code> (ne dodavajte bilo koji od ovih u vašu pretragu).',
'linksearch-line' => '$1 je povezan od $2',
'linksearch-error' => 'Džokeri se mogu pojavljivati samo na početku naziva servera.',

# Special:ListUsers
'listusersfrom' => 'Prikaži korisnike koji počinju sa:',
'listusers-submit' => 'Pokaži',
'listusers-noresult' => 'Nije pronađen korisnik.',
'listusers-blocked' => '(blokiran)',

# Special:ActiveUsers
'activeusers' => 'Spisak aktivnih korisnika',
'activeusers-intro' => 'Ovo je spisak korisnika koji su napravili neku aktivnost u {{PLURAL:$1|zadnji $1 dan|zadnja $1 dana|zadnjih $1 dana}}.',
'activeusers-count' => '{{PLURAL:$1|nedavna $1 izmjena|nedavne $1 izmjene|nedavnih $1 izmjena}} u {{PLURAL:$3|posljednji $3 dan|posljednja $3 dana|posljednjih $3 dana}}',
'activeusers-from' => 'Prikaži korisnike koji počinju sa:',
'activeusers-hidebots' => 'Sakrij botove',
'activeusers-hidesysops' => 'Sakrij administratore',
'activeusers-noresult' => 'Nije pronađen korisnik.',

# Special:ListGroupRights
'listgrouprights' => 'Prava korisničkih grupa',
'listgrouprights-summary' => 'Slijedi spisak korisničkih grupa na ovoj wiki, s njihovim pravima pristupa.
O svakoj od njih postoje i [[{{MediaWiki:Listgrouprights-helppage}}|dodatne informacije]].',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Dodano pravo</span>
* <span class="listgrouprights-revoked">Uklonjeno pravo</span>',
'listgrouprights-group' => 'Grupa',
'listgrouprights-rights' => 'Prava',
'listgrouprights-helppage' => 'Help:Grupna prava',
'listgrouprights-members' => '(spisak članova)',
'listgrouprights-addgroup' => 'Mogu dodati {{PLURAL:$2|grupu|grupe}}: $1',
'listgrouprights-removegroup' => 'Mogu ukloniti {{PLURAL:$2|grupu|grupe}}: $1',
'listgrouprights-addgroup-all' => 'Može dodavati sve grupe',
'listgrouprights-removegroup-all' => 'Može ukloniti sve grupe',
'listgrouprights-addgroup-self' => 'Može dodati {{PLURAL:$2|grupu|grupe|grupa}} na svoj račun: $1',
'listgrouprights-removegroup-self' => 'Može ukloniti {{PLURAL:$2|grupu|grupe|grupa}} sa svog računa: $1',
'listgrouprights-addgroup-self-all' => 'Može dodati sve grupe na svoj račun',
'listgrouprights-removegroup-self-all' => 'Može ukloniti sve grupe sa svog računa',

# Email user
'mailnologin' => 'Nema adrese za slanje',
'mailnologintext' => 'Morate biti [[Special:UserLogin|prijavljeni]]
i imati ispravnu adresu e-pošte u vašim [[Special:Preferences|podešavanjima]]
da biste slali e-poštu drugim korisnicima.',
'emailuser' => 'Pošalji e-poštu ovom korisniku',
'emailuser-title-target' => 'Pošalji e-poruku {{GENDER:$1|korisniku|korisnici|korisniku}}',
'emailuser-title-notarget' => 'Pošalji e-mail korisniku',
'emailpage' => 'Pošalji e-mail korisniku',
'emailpagetext' => 'Možete korisiti formu ispod za slanje e-mail poruka {{GENDER:$1|ovom korisniku|ovoj korisnici|ovom korisniku}}.
E-mail adresa koju ste unijeli u [[Special:Preferences|Vašim korisničkim postavkama]] će biti prikazana kao adresa pošiljaoca, tako da će primaoc poruke moći da Vam odgovori.',
'usermailererror' => 'Objekat pošte je vratio grešku:',
'defemailsubject' => '{{SITENAME}} e-pošta od {{GENDER:$1|korisnika|korisnice|korisnika}} $1',
'usermaildisabled' => 'Korisnički e-mail onemogućen',
'usermaildisabledtext' => 'Ne možete poslati e-mail drugim korisnicima na ovoj wiki',
'noemailtitle' => 'Nema adrese e-pošte',
'noemailtext' => 'Ovaj korisnik nije naveo ispravnu adresu e-pošte.',
'nowikiemailtitle' => 'E-mail nije dopušten',
'nowikiemailtext' => 'Ovaj korisnik je odabrao da ne prima e-mail poštu od drugih korisnika.',
'emailnotarget' => 'Neodgovarajuće ili nevaljano korisničko ime za primanje e-maillova.',
'emailtarget' => 'Unesite korisnika za primanje e-mailova',
'emailusername' => 'Korisničko ime:',
'emailusernamesubmit' => 'Pošalji',
'email-legend' => 'Slanje e-maila drugom {{SITENAME}} korisniku',
'emailfrom' => 'Od:',
'emailto' => 'Za:',
'emailsubject' => 'Tema:',
'emailmessage' => 'Poruka:',
'emailsend' => 'Pošalji',
'emailccme' => 'Pošalji mi kopiju moje poruke.',
'emailccsubject' => 'Kopiraj Vašu poruku za $1: $2',
'emailsent' => 'Poruka poslata',
'emailsenttext' => 'Vaša poruka je poslata e-poštom.',
'emailuserfooter' => 'Ovaj e-mail je poslao $1 korisniku $2 putem funkcije "Pošalji e-mail korisniku" sa {{SITENAME}}.',

# User Messenger
'usermessage-summary' => 'Ostavljanje sistemske poruke.',
'usermessage-editor' => 'Sistem za poruke',

# Watchlist
'watchlist' => 'Praćeni članci',
'mywatchlist' => 'Praćeni članci',
'watchlistfor2' => 'Za $1 $2',
'nowatchlist' => 'Nemate ništa na svom spisku praćenih članaka.',
'watchlistanontext' => 'Molimo da $1 da možete vidjeti ili urediti stavke na Vašem spisku praćenja.',
'watchnologin' => 'Niste prijavljeni',
'watchnologintext' => 'Morate biti [[Special:UserLogin|prijavljeni]] da bi ste mijenjali spisak praćenih članaka.',
'addwatch' => 'Dodaj na spisak praćenja',
'addedwatchtext' => 'Stranica "[[:$1]]" je dodata vašem [[Special:Watchlist|spisku praćenih članaka]]. 
Buduće promjene ove stranice i njoj pridružene stranice za razgovor će biti navedene ovde.',
'removewatch' => 'Ukloni sa spiska praćenja',
'removedwatchtext' => 'Stranica "[[:$1]]" je uklonjena iz [[Special:Watchlist|vašeg spiska praćenih članaka]].',
'watch' => 'Prati članak',
'watchthispage' => 'Prati ovu stranicu',
'unwatch' => 'Ukinite praćenje',
'unwatchthispage' => 'Ukinite praćenje',
'notanarticle' => 'Nije članak',
'notvisiblerev' => 'Revizija je obrisana',
'watchnochange' => 'Ništa što pratite nije promjenjeno u prikazanom vremenu.',
'watchlist-details' => '{{PLURAL:$1|$1 stranica praćena|$1 stranice praćene|$1 stranica praćeno}} ne računajući stranice za razgovor.',
'wlheader-enotif' => 'Obavještavanje e-poštom je omogućeno.',
'wlheader-showupdated' => "Stranice koje su izmijenjene od kad ste ih posljednji put posjetili su prikazane '''podebljanim slovima'''",
'watchmethod-recent' => 'provjerava se da li ima praćenih stranica u nedavnim izmjenama',
'watchmethod-list' => 'provjerava se da li ima nedavnih izmjena u praćenim stranicama',
'watchlistcontains' => 'Vaš spisak praćenih članaka sadrži $1 {{PLURAL:$1|stranicu|stranica}}.',
'iteminvalidname' => "Problem sa '$1', neispravno ime...",
'wlnote' => "Ispod je {{PLURAL:$1|najskorija izmjena|'''$1''' najskorije izmjene|'''$1''' najskorijih izmjena}} načinjenih {{PLURAL:$2|posljednjeg sata|u posljednjih '''$2''' sata|u posljednjih '''$2''' sati}}, od $3, $4.",
'wlshowlast' => 'Prikaži posljednjih $1 sati $2 dana $3',
'watchlist-options' => 'Opcije spiska praćenja',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Pratim...',
'unwatching' => 'Ne pratim...',
'watcherrortext' => 'Desila se greška pri promjeni postavki vašeg spiska praćenja za "$1".',

'enotif_mailer' => '{{SITENAME}} obaviještenje o pošti',
'enotif_reset' => 'Označi sve strane kao posjećene',
'enotif_impersonal_salutation' => '{{SITENAME}} korisnik',
'enotif_subject_deleted' => '{{gender:$2|Korisnik|Korisnica}} $2 je {{gender:$2|obrisao|obrisala}} stranicu $1 projekta {{SITENAME}}',
'enotif_subject_created' => '{{gender:$2|Korisnik|Korisnica}} $2 je {{gender:$2|napravio|napravila}} stranicu $1 projekta {{SITENAME}}',
'enotif_subject_moved' => '{{gender:$2|Korisnik|Korisnica}} $2 je {{gender:$2|premjestio|premjestila}} stranicu $1 projekta {{SITENAME}}',
'enotif_subject_restored' => '{{gender:$2|Korisnik|Korisnica}} $2 je {{gender:$2|vratio|vratila}} stranicu $1 projekta {{SITENAME}}',
'enotif_subject_changed' => '{{gender:$2|Korisnik|Korisnica}} $2 je {{gender:$2|promijenio|promijenila}} stranicu $1 projekta {{SITENAME}}',
'enotif_body_intro_deleted' => 'Stranicu $1 projekta {{SITENAME}} {{GENDER:$2|obrisao|obrisala}} je dana $PAGEEDITDATE {{GENDER:$2|korisnik|korisnica}} $2, pogledajte $3.',
'enotif_body_intro_created' => 'Stranicu $1 projekta {{SITENAME}} {{GENDER:$2|napravio|napravila}} je dana $PAGEEDITDATE {{GENDER:$2|korisnik|korisnica}} $2, pogledajte $3 za trenutnu verziju.',
'enotif_body_intro_moved' => 'Stranicu $1 projekta {{SITENAME}} {{GENDER:$2|premjestio|premjestila}} je dana $PAGEEDITDATE {{GENDER:$2|korisnik|korisnica}} $2, pogledajte $3 za trenutnu verziju.',
'enotif_body_intro_restored' => 'Stranicu $1 projekta {{SITENAME}} {{GENDER:$2|vratio|vratila}} je dana $PAGEEDITDATE {{GENDER:$2|korisnik|korisnica}} $2, pogledajte $3 za trenutnu verziju.',
'enotif_body_intro_changed' => 'Stranicu $1 projekta {{SITENAME}} {{GENDER:$2|promijenio|promijenila}} je dana $PAGEEDITDATE {{GENDER:$2|korisnik|korisnica}} $2, pogledajte $3 za trenutnu verziju.',
'enotif_lastvisited' => 'Pogledajte $1 za sve izmjene od vaše posljednje posjete.',
'enotif_lastdiff' => 'Vidi $1 da pregledate ovu promjenu.',
'enotif_anon_editor' => 'anonimni korisnik $1',
'enotif_body' => 'Poštovani $WATCHINGUSERNAME,

$PAGEINTRO $NEWPAGE

Sažetak urednika: $PAGESUMMARY $PAGEMINOREDIT

Kontaktirajte urednika:
e-pošta: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Neće biti drugih obavještenja u slučaju daljnjih izmjena osima ako posjetite stranicu. Također možete poništiti oznake obavijesti za sve praćene stranice koje imate na vašem spisku praćenja.

Vaš prijateljski {{SITENAME}} sistem obavještavanja

--
Za promjenu vaših postavki e-mail obavijesti, posjetite
{{canonicalurl:{{#special:Preferences}}}}

Za promjenu postavki vašeg praćenja, posjetite
{{canonicalurl:{{#special:EditWatchlist}}}}

Da obrišete stranicu sa vašeg spiska praćenja, posjetite
$UNWATCHURL

Povratne informacije i daljnja pomoć:
{{canonicalurl:{{MediaWiki:Helppage}}}}',
'created' => 'napravljena',
'changed' => 'promijenjena',

# Delete
'deletepage' => 'Obrišite stranicu',
'confirm' => 'Potvrdite',
'excontent' => "sadržaj je bio: '$1'",
'excontentauthor' => "sadržaj je bio: '$1' (i jedini korisnik koji je mijenjao bio je '[[Special:Contributions/$2|$2]]')",
'exbeforeblank' => "sadržaj prije brisanja je bio: '$1'",
'exblank' => 'stranica je bila prazna',
'delete-confirm' => 'Brisanje "$1"',
'delete-legend' => 'Obriši',
'historywarning' => "'''Upozorenje''':  Stranica koju želite da obrišete ima historiju sa otprilike $1 {{PLURAL:$1|revizijom|revizije|revizija}}:",
'confirmdeletetext' => 'Brisanjem ćete obrisati stranicu ili sliku zajedno sa historijom iz baze podataka, ali će se iste moći vratiti kasnije.
Molim potvrdite svoju namjeru, da razumijete posljedice i da ovo radite u skladu sa [[{{MediaWiki:Policy-url}}|pravilima]].',
'actioncomplete' => 'Akcija završena',
'actionfailed' => 'Akcija nije uspjela',
'deletedtext' => 'Članak "$1" je obrisan.
Pogledajte $2 za zapis o skorašnjim brisanjima.',
'dellogpage' => 'Protokol brisanja',
'dellogpagetext' => 'Ispod je spisak najskorijih brisanja.',
'deletionlog' => 'zapis brisanja',
'reverted' => 'Vraćeno na prijašnju reviziju',
'deletecomment' => 'Razlog:',
'deleteotherreason' => 'Ostali/dodatni razlozi:',
'deletereasonotherlist' => 'Ostali razlozi',
'deletereason-dropdown' => '*Uobičajeni razlozi brisanja
** Zahtjev autora
** Kršenje autorskih prava
** Vandalizam',
'delete-edit-reasonlist' => 'Uredi razloge brisanja',
'delete-toobig' => 'Ova stranica ima veliku historiju promjena, preko $1 {{PLURAL:$1|revizije|revizija}}.
Brisanje takvih stranica nije dopušteno da bi se spriječilo slučajno preopterećenje servera na kojem je {{SITENAME}}.',
'delete-warning-toobig' => 'Ova stranica ima veliku historiju izmjena, preko $1 {{PLURAL:$1|izmjene|izmjena}}.
Njeno brisanje može dovesti do opterećenja operacione baze na {{SITENAME}};
nastavite s oprezom.',

# Rollback
'rollback' => 'Vrati izmjene',
'rollback_short' => 'Vrati',
'rollbacklink' => 'vrati',
'rollbacklinkcount' => 'vrati $1 {{PLURAL:$1|izmjenu|izmjene|izmjena}}',
'rollbacklinkcount-morethan' => 'vrati više od $1 {{PLURAL:$1|izmjene|izmjene|izmjena}}',
'rollbackfailed' => 'Vraćanje nije uspjelo',
'cantrollback' => 'Ne može se vratiti izmjena; posljednji autor je ujedno i jedini.',
'alreadyrolled' => 'Ne može se vratiti posljednja izmjena [[:$1]] od korisnika [[User:$2|$2]] ([[User talk:$2|razgovor]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]); neko drugi je već izmjenio ili vratio članak.

Posljednja izmjena je bila od korisnika [[User:$3|$3]] ([[User talk:$3|razgovor]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "Sažetak izmjene je bio: \"''\$1''\".",
'revertpage' => 'Vraćene izmjene [[Special:Contributions/$2|$2]] ([[User talk:$2|razgovor]]) na posljednju izmjenu korisnika [[User:$1|$1]]',
'revertpage-nouser' => 'Vraćene izmjene korisnika (korisničko ime uklonjeno) na posljednju reviziju koju je načinio [[User:$1|$1]]',
'rollback-success' => 'Poništene izmjene korisnika $1;
vraćeno na posljednju verziju koju je sačuvao $2.',

# Edit tokens
'sessionfailure-title' => 'Greška u sesiji',
'sessionfailure' => "Izgleda da postoji problem sa vašom sesijom; ova akcija je otkazana kao prevencija protiv napadanja sesija. Kliknite \"back\" (''nazad'') i osvježite stranicu sa koje ste došli, i opet pokušajte.",

# Protect
'protectlogpage' => 'Protokol zaključavanja',
'protectlogtext' => 'Ispod je spisak promjena zaštićenja stranice.
Pogledajte [[Special:ProtectedPages|spisak zaštićenih stranica]] za pregled trenutno operativnih zaštita stranica.',
'protectedarticle' => 'stranica "[[$1]]" je zaštićena',
'modifiedarticleprotection' => 'promijenjen stepen zaštite za "[[$1]]"',
'unprotectedarticle' => 'uklonjena zaštita za "[[$1]]"',
'movedarticleprotection' => 'podešavanja zaštite premještena sa "[[$2]]" na "[[$1]]"',
'protect-title' => 'Zaštićuje se "$1"',
'protect-title-notallowed' => 'Pregled stepena zaštite za "$1"',
'prot_1movedto2' => 'članak [[$1]] premješten na [[$2]]',
'protect-badnamespace-title' => 'Nezaštitljiv imenski prostor',
'protect-badnamespace-text' => 'Stranice u ovom imenskom prostoru se ne mogu zaštititi.',
'protect-legend' => 'Potvrdite zaštitu',
'protectcomment' => 'Razlog:',
'protectexpiry' => 'Ističe:',
'protect_expiry_invalid' => 'Upisani vremenski rok nije valjan.',
'protect_expiry_old' => 'Upisani vremenski rok je u prošlosti.',
'protect-unchain-permissions' => 'Otključaj daljnje opcije zaštite',
'protect-text' => "Ovdje možete gledati i izmjeniti level zaštite za stranicu '''$1'''.",
'protect-locked-blocked' => "Ne možete promijeniti nivo zaštite dok ste blokirani.
Ovo su trenutne postavke za stranicu '''$1''':",
'protect-locked-dblock' => "Nivoi zaštite se ne mogu mijenjati jer je aktivna baza podataka zaključana.
Trenutna postavka za stranicu '''$1''' je:",
'protect-locked-access' => "Nemate ovlasti za mijenjanje stepena zaštite.
Slijede trenutne postavke stranice '''$1''':",
'protect-cascadeon' => 'Ova stranica je tenutno zaštićena jer je uključena u {{PLURAL:$1|stranicu, koja ima|stranice, koje imaju|stranice, koje imaju}} uključenu prenosnu zaštitu.
Možete promijeniti stepen zaštite ove stranice, ali to neće uticati na prenosnu zaštitu.',
'protect-default' => 'Dopusti svim korisnicima',
'protect-fallback' => 'Potrebno je imati "$1" ovlasti',
'protect-level-autoconfirmed' => 'Blokiraj nove i neregistrovane korisnike',
'protect-level-sysop' => 'Dozvoli samo administratorima',
'protect-summary-cascade' => 'prenosna zaštita',
'protect-expiring' => 'ističe $1 (UTC)',
'protect-expiring-local' => 'ističe $1',
'protect-expiry-indefinite' => 'neograničeno',
'protect-cascade' => 'Zaštiti sve stranice koje su uključene u ovu (kaskadna zaštita)',
'protect-cantedit' => 'Ne možete mijenjati nivo zaštite ove stranice, jer nemate prava da je uređujete.',
'protect-othertime' => 'Ostali period:',
'protect-othertime-op' => 'ostali period',
'protect-existing-expiry' => 'Postojeće vrijeme isticanja: $3, $2',
'protect-otherreason' => 'Ostali/dodatni razlozi:',
'protect-otherreason-op' => 'Ostali razlozi',
'protect-dropdown' => '*Uobičajeni razlozi zaštite
** Prekomjerni vandalizam
** Prekomjerno spamovanje
** Ne produktivni rat izmjena
** Stranica velikog prometa',
'protect-edit-reasonlist' => 'Uredi razloge zaštićavanja',
'protect-expiry-options' => '1 sat:1 hour,1 dan:1 day,1 sedmica:1 week,2 sedmice:2 weeks,1 mjesec:1 month,3 mjeseca:3 months,6 mjeseci:6 months,1 godine:1 year,zauvijek:infinite',
'restriction-type' => 'Dopuštenje:',
'restriction-level' => 'Stepen ograničenja:',
'minimum-size' => 'Najmanja veličina',
'maximum-size' => 'Najveća veličina:',
'pagesize' => '(bajta)',

# Restrictions (nouns)
'restriction-edit' => 'Uredi',
'restriction-move' => 'Premještanje',
'restriction-create' => 'Napravi',
'restriction-upload' => 'Postavljanje',

# Restriction levels
'restriction-level-sysop' => 'potpuno zaštićeno',
'restriction-level-autoconfirmed' => 'poluzaštićeno',
'restriction-level-all' => 'svi nivoi',

# Undelete
'undelete' => 'Pogledaj izbrisane stranice',
'undeletepage' => 'Pogledaj i vrati izbrisane stranice',
'undeletepagetitle' => "'''Slijedeći sadržaj prikazuje obrisane revizije od [[:$1|$1]]'''.",
'viewdeletedpage' => 'Pogledaj izbrisane stranice',
'undeletepagetext' => '{{PLURAL:$1|Slijedeća $1 stranica je obrisana|Slijedeće $1 stranice su obrisane|Slijedećih $1 je obrisano}} ali su još uvijek u arhivi i mogu biti vraćene.
Arhiva moše biti periodično čišćena.',
'undelete-fieldset-title' => 'Vraćanje revizija',
'undeleteextrahelp' => "Da vratite cijelu historiju članka, ostavite sve kutijice neoznačene i kliknite '''''{{int:undeletebtn}}'''''.
Da bi izvršili selektivno vraćanje, odaberite kutijice koje odgovaraju revizijama koje želite vratiti, i kliknite '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '{{PLURAL:$1|$1 revizija arhivirana|$1 revizije arhivirane|$1 revizija arhivirano}}',
'undeletehistory' => 'Ako vratite stranicu, sve revizije će biti vraćene njenoj historiji.
Ako je nova stranica istog imena napravljena od brisanja, vraćene revizije će se pojaviti u njenoj ranijoj historiji.',
'undeleterevdel' => 'Vraćanje obrisanog se neće izvršiti ako bi rezultiralo da zaglavlje stranice ili revizija datoteke bude djelimično obrisano.
U takvim slučajevima, morate ukloniti označene ili otkriti sakrivene najskorije obrisane revizije.',
'undeletehistorynoadmin' => 'Ova stranica je izbrisana.  Ispod se nalazi dio historije brisanja i historija revizija izbrisane stranice.  Tekst izbrisane stranice je vidljiv samo korisnicima koji su administratori.',
'undelete-revision' => 'Obrisana revizija stranice $1 (dana $4, u $5) od strane $3:',
'undeleterevision-missing' => 'Nepoznata ili nedostajuća revizija.
Možda ste unijeli pogrešan link, ili je revizija vraćena ili uklonjena iz arhive.',
'undelete-nodiff' => 'Nije pronađena ranija revizija.',
'undeletebtn' => 'Vrati',
'undeletelink' => 'pogledaj/vrati',
'undeleteviewlink' => 'pogledaj',
'undeletereset' => 'Očisti',
'undeleteinvert' => 'Izmijeni odabir',
'undeletecomment' => 'Razlog:',
'undeletedrevisions' => '{{PLURAL:$1|$1 revizija vraćena|$1 revizije vraćene|$1 revizija vraćeno}}',
'undeletedrevisions-files' => '{{PLURAL:$1|1 revizija|$1 revizije|$1 revizija}} i {{PLURAL:$2|1 datoteka|$2 datoteke|$2 datoteka}} vraćeno',
'undeletedfiles' => '{{PLURAL:$1|1 datoteka vraćena|$1 datoteke vraćene|$1 datoteka vraćeno}}',
'cannotundelete' => 'Vraćanje nije uspjelo:
$1',
'undeletedpage' => "'''$1 je vraćena'''

Provjerite [[Special:Log/delete|zapis brisanja]] za zapise najskorijih brisanja i vraćanja.",
'undelete-header' => 'Pogledajte [[Special:Log/delete|zapisnik brisanja]] za nedavno obrisane stranice.',
'undelete-search-title' => 'Pretraga obrisanih stranica',
'undelete-search-box' => 'Pretraga obrisanih stranica',
'undelete-search-prefix' => 'Prikaži stranice koje počinju sa:',
'undelete-search-submit' => 'Traži',
'undelete-no-results' => 'Nije pronađena odgovarajuća stranica u arhivi brisanja.',
'undelete-filename-mismatch' => 'Ne može se vratiti revizija datoteke od $1: pogrešno ime datoteke',
'undelete-bad-store-key' => 'Ne može se vratiti revizija datoteke sa vremenskom oznakom $1: datoteka je nestala prije brisanja.',
'undelete-cleanup-error' => 'Greške pri brisanju nekorištene arhivske datoteke "$1".',
'undelete-missing-filearchive' => 'Ne može se vratiti arhivska datoteka sa ID oznakom $1 jer nije u bazi podataka.
Možda je već ranije vraćena.',
'undelete-error' => 'Greška u vraćanju obrisane stranice',
'undelete-error-short' => 'Greška pri vraćanju datoteke: $1',
'undelete-error-long' => 'Desile su se pogreške pri vraćanju datoteke:

$1',
'undelete-show-file-confirm' => 'Da li ste sigurni da želite pogledati obrisanu reviziju datoteke "<nowiki>$1</nowiki>" od $2 u $3?',
'undelete-show-file-submit' => 'Da',

# Namespace form on various pages
'namespace' => 'Vrsta članka:',
'invert' => 'Sve osim odabranog',
'tooltip-invert' => 'Označite ovu kutiju za sakrivanje promjena na stranicama u odabranom imenskom prostoru (i povezanim imenskim prostorima ako je označeno)',
'namespace_association' => 'Povezan imenski prostor',
'tooltip-namespace_association' => 'Označite ovu kutiju da također uključite razgovor ili imenski prostor teme koja je povezana sa odabranim imenskim prostorom',
'blanknamespace' => '(Glavno)',

# Contributions
'contributions' => 'Doprinosi {{GENDER:$1|korisnika|korisnice|korisnika}}',
'contributions-title' => 'Doprinosi korisnika $1',
'mycontris' => 'Doprinos',
'contribsub2' => 'Za $1 ($2)',
'nocontribs' => 'Nisu nađene promjene koje zadovoljavaju ove uslove.',
'uctop' => ' (vrh)',
'month' => 'Od mjeseca (i ranije):',
'year' => 'Od godine (i ranije):',

'sp-contributions-newbies' => 'Prikaži samo doprinose novih korisnika',
'sp-contributions-newbies-sub' => 'Za nove korisnike',
'sp-contributions-newbies-title' => 'Doprinosi novih korisnika',
'sp-contributions-blocklog' => 'Evidencija blokiranja',
'sp-contributions-deleted' => 'obrisani doprinosi korisnika',
'sp-contributions-uploads' => 'postavljanja',
'sp-contributions-logs' => 'zapisnici',
'sp-contributions-talk' => 'razgovor',
'sp-contributions-userrights' => 'postavke korisničkih prava',
'sp-contributions-blocked-notice' => 'Ovaj korisnik je trenutno blokiran. Posljednje stavke zapisnika blokiranja možete pogledati ispod:',
'sp-contributions-blocked-notice-anon' => 'Ova IP adresa je trenutno blokirana.
Posljednje stavke zapisnika blokiranja možete pogledati ispod:',
'sp-contributions-search' => 'Pretraga doprinosa',
'sp-contributions-username' => 'IP adresa ili korisničko ime:',
'sp-contributions-toponly' => 'Prikaži samo izmjene koje su posljednje revizije',
'sp-contributions-submit' => 'Traži',

# What links here
'whatlinkshere' => 'Šta je povezano ovdje',
'whatlinkshere-title' => 'Stranice koje vode na "$1"',
'whatlinkshere-page' => 'Stranica:',
'linkshere' => "Sljedeći članci vode na '''[[:$1]]''':",
'nolinkshere' => "Nema linkova na '''[[:$1]]'''.",
'nolinkshere-ns' => "Nijedna stranica nije povezana sa '''[[:$1]]''' u odabranom imenskom prostoru.",
'isredirect' => 'preusmjerivač',
'istemplate' => 'kao šablon',
'isimage' => 'veza na datoteku',
'whatlinkshere-prev' => '{{PLURAL:$1|prethodni|prethodna|prethodnih}} $1',
'whatlinkshere-next' => '{{PLURAL:$1|sljedeći|sljedeća|sljedećih}} $1',
'whatlinkshere-links' => '← linkovi',
'whatlinkshere-hideredirs' => '$1 preusmjerenja',
'whatlinkshere-hidetrans' => '$1 uključenja',
'whatlinkshere-hidelinks' => '$1 linkove',
'whatlinkshere-hideimages' => 'Veze do datoteke $1',
'whatlinkshere-filters' => 'Filteri',

# Block/unblock
'autoblockid' => 'Automatska blokada #$1',
'block' => 'Blokiraj korisnika',
'unblock' => 'Odblokiraj korisnika',
'blockip' => 'Blokiraj korisnika',
'blockip-title' => 'Blokiranje korisnika',
'blockip-legend' => 'Blokiranje korisnika',
'blockiptext' => 'Upotrebite donji upitnik da biste uklonili prava pisanja sa određene IP adrese ili korisničkog imena.  Ovo bi trebalo da bude urađeno samo da bi se spriječio vandalizam, i u skladu sa [[{{MediaWiki:Policy-url}}|smjernicama]]. Unesite konkretan razlog ispod (na primjer, navodeći koje stranice su vandalizovane).',
'ipadressorusername' => 'IP adresa ili korisničko ime:',
'ipbexpiry' => 'Ističe:',
'ipbreason' => 'Razlog:',
'ipbreasonotherlist' => 'Ostali razlozi',
'ipbreason-dropdown' => '*Najčešći razlozi blokiranja
**Netačne informacije
**Uklanjanje sadržaja stranica
**Postavljanje spam vanjskih linkova
**Ubacivanje gluposti/grafita
**Osobni napadi (ili napadačko ponašanje)
**Čarapare (zloupotreba više korisničkih računa)
**Neprihvatljivo korisničko ime',
'ipb-hardblock' => 'Onemogući prijavljene korisnike da uređuju sa ove IP adrese',
'ipbcreateaccount' => 'Onemogući pravljenje računa',
'ipbemailban' => 'Onemogući korisnika da šalje e-mail',
'ipbenableautoblock' => 'Automatski blokiraj zadnju IP adresu koju je koristio ovaj korisnik i sve druge IP adrese s kojih je on pokušao uređivati',
'ipbsubmit' => 'Blokirajte ovog korisnika',
'ipbother' => 'Ostali period:',
'ipboptions' => '2 sata:2 hours,1 dan:1 day,3 dana:3 days,1 sedmica:1 week,2 sedmice:2 weeks,1 mjesec:1 month,3 mjeseca:3 months,6 mjeseci:6 months,1 godine:1 year,zauvijek:infinite',
'ipbotheroption' => 'ostalo',
'ipbotherreason' => 'Ostali/dodatni razlozi:',
'ipbhidename' => 'Sakrij korisničko ime iz uređivanja i spiskova',
'ipbwatchuser' => 'Prati korisničku stranicu i stranicu za razgovor ovog korisnika',
'ipb-disableusertalk' => 'Onemogući ovog korisnika da uređuje svoju vlastitu stranicu za razgovor dok je blokiran',
'ipb-change-block' => 'Ponovno blokiraj korisnika sa novim postavkama',
'ipb-confirm' => 'Potvrdite blokiranje',
'badipaddress' => 'Pogrešna IP adresa',
'blockipsuccesssub' => 'Blokiranje je uspjelo',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] je {{GENDER:$1|blokiran|blokirana|blokiran}}.<br />
Pogledajte [[Special:BlockList|spisak blokiranja]] za pregled blokiranja.',
'ipb-blockingself' => 'Ovom akcijom ćete blokirati sebe! Da li ste sigurni da to želite?',
'ipb-confirmhideuser' => "Upravo ćete blokirati korisnika sa uključenom opcijom ''sakrij korisnika''. Ovim će korisničko ime biti sakriveno u svim spiskovima i stavkama zapisnika. Da li ste sigurni da to želite?",
'ipb-edit-dropdown' => 'Uredi razloge blokiranja',
'ipb-unblock-addr' => 'Deblokiraj $1',
'ipb-unblock' => 'Deblokiraj korisničko ime ili IP adresu',
'ipb-blocklist' => 'Vidi postojeće blokade',
'ipb-blocklist-contribs' => 'Doprinosi za $1',
'unblockip' => 'Odblokiraj korisnika',
'unblockiptext' => 'Upotrebite donji upitnik da bi ste vratili
pravo pisanja ranije blokiranoj IP adresi
ili korisničkom imenu.',
'ipusubmit' => 'Ukloni ovu blokadu',
'unblocked' => '[[User:$1|$1]] je deblokiran',
'unblocked-range' => '$1 je deblokiran',
'unblocked-id' => 'Blokada ID oznake $1 je uklonjena',
'blocklist' => 'Blokirani korisnici',
'ipblocklist' => 'Blokirani korisnici',
'ipblocklist-legend' => 'Traži blokiranog korisnika',
'blocklist-userblocks' => 'Sakrij blokade računa',
'blocklist-tempblocks' => 'Sakrij privremene blokade',
'blocklist-addressblocks' => 'Sakrij pojedinačne IP blokade',
'blocklist-rangeblocks' => 'Sakrij blokiranja opsega',
'blocklist-timestamp' => 'Vremenska oznaka',
'blocklist-target' => 'Cilj',
'blocklist-expiry' => 'Ističe',
'blocklist-by' => 'Administrator koji je blokirao',
'blocklist-params' => 'Parametri blokade',
'blocklist-reason' => 'Razlog',
'ipblocklist-submit' => 'Traži',
'ipblocklist-localblock' => 'Lokalna blokada',
'ipblocklist-otherblocks' => 'Ostale {{PLURAL:$1|blokada|blokade}}',
'infiniteblock' => 'nije ograničena',
'expiringblock' => 'ističe dana $1 u $2',
'anononlyblock' => 'samo anonimni korisnici',
'noautoblockblock' => 'automatsko blokiranje onemogućeno',
'createaccountblock' => 'blokirano pravljenje računa',
'emailblock' => 'e-mail blokiran',
'blocklist-nousertalk' => 'ne može uređivati vlastitu stranicu za razgovor',
'ipblocklist-empty' => 'Spisak blokiranja je prazan.',
'ipblocklist-no-results' => 'Tražena IP adresa ili korisničko ime nisu blokirani.',
'blocklink' => 'blokirajte',
'unblocklink' => 'deblokiraj',
'change-blocklink' => 'promijeni blokadu',
'contribslink' => 'doprinosi',
'emaillink' => 'pošalji e-mail',
'autoblocker' => 'Automatski ste blokirani jer dijelite IP adresu sa "[[User:$1|$1]]".
Razlog za blokiranje je korisnika $1 je: \'\'$2\'\'',
'blocklogpage' => 'Evidencija blokiranja',
'blocklog-showlog' => 'Ovaj korisnik je ranije blokiran. Zapisnik blokiranja je prikazan ispod kao referenca:',
'blocklog-showsuppresslog' => 'Ovaj korisnik je ranije blokiran i sakriven. Zapisnik sakrivanja je prikazan ispod kao referenca:',
'blocklogentry' => 'je blokirao [[$1]] sa vremenom isticanja blokade od $2 $3',
'reblock-logentry' => 'promjena postavki blokiranja za [[$1]] sa vremenom isteka u $2 $3',
'blocklogtext' => 'Ovo je historija akcija blokiranja i deblokiranja korisnika.
Automatski blokirane IP adrese nisu navedene ovdje.
Pogledajte [[Special:BlockList|spisak blokiranja]] za spisak trenutnih zabrana i blokiranja.',
'unblocklogentry' => 'deblokiran $1',
'block-log-flags-anononly' => 'samo anonimni korisnici',
'block-log-flags-nocreate' => 'pravljenje računa onemogućeno',
'block-log-flags-noautoblock' => 'automatsko blokiranje onemogućeno',
'block-log-flags-noemail' => 'e-mail je blokiran',
'block-log-flags-nousertalk' => 'ne može uređivati vlastitu stranicu za razgovor',
'block-log-flags-angry-autoblock' => 'omogućeno napredno autoblokiranje',
'block-log-flags-hiddenname' => 'korisničko ime sakriveno',
'range_block_disabled' => 'Administratorska mogućnost da blokira grupe je isključena.',
'ipb_expiry_invalid' => 'Pogrešno vrijeme trajanja.',
'ipb_expiry_temp' => 'Sakrivene blokade korisničkih imena moraju biti stalne.',
'ipb_hide_invalid' => 'Ne može se onemogućiti ovaj račun; možda ima isuviše izmjena.',
'ipb_already_blocked' => '"$1" je već blokiran',
'ipb-needreblock' => '$1 je već blokiran. Da li želite promijeniti postavke?',
'ipb-otherblocks-header' => 'Ostale {{PLURAL:$1|blokada|blokade}}',
'unblock-hideuser' => 'Ne možete deblokirati ovog korisnika jer je njegovo korisničko ime sakriveno.',
'ipb_cant_unblock' => 'Greška: Blokada sa ID oznakom $1 nije pronađena.
Možda je već deblokirana.',
'ipb_blocked_as_range' => 'Greška: IP adresa $1 nije direktno blokirana i ne može se deblokirati.
Međutim, možda je blokirana kao dio bloka $2, koji se ne može deblokirati.',
'ip_range_invalid' => 'Netačan raspon IP adresa.',
'ip_range_toolarge' => 'Nisu dopuštene blokade veće od /$1.',
'blockme' => 'Blokiraj me',
'proxyblocker' => 'Bloker proksija',
'proxyblocker-disabled' => 'Ova funkcija je onemogućena.',
'proxyblockreason' => 'Vaša IP adresa je blokirana jer je ona otvoreni proksi.  Molimo vas da kontaktirate vašeg davatelja internetskih usluga (Internet Service Provider-a) ili tehničku podršku i obavijestite ih o ovom ozbiljnom sigurnosnom problemu.',
'proxyblocksuccess' => 'Proksi uspješno blokiran.',
'sorbsreason' => 'Vaša IP adresa je prikazana kao otvoreni proxy u DNSBL koji koristi {{SITENAME}}.',
'sorbs_create_account_reason' => 'Vaša IP adresa je prikazana kao otvoreni proxy u DNSBL korišten od {{SITENAME}}.
Ne možete napraviti račun',
'cant-block-while-blocked' => 'Ne možete blokirati druge korisnike dok ste blokirani.',
'cant-see-hidden-user' => 'Korisnik kojeg pokušavate blokirati je već blokiran i sakriven. Pošto nemate prava hideuser (sakrivanje korisnika), ne možete vidjeti ni urediti korisnikovu blokadu.',
'ipbblocked' => 'Ne možete blokirati ili deblokirati druge korisnike, jer ste i sami blokirani',
'ipbnounblockself' => 'Nije Vam dopušteno da deblokirate samog sebe',

# Developer tools
'lockdb' => 'Zaključajte bazu',
'unlockdb' => 'Otključaj bazu',
'lockdbtext' => 'Zaključavanje baze će svim korisnicima ukinuti mogućnost izmjene stranica,
promjene korisničkih podešavanja, izmjene praćenih članaka, i svega ostalog
što zahtjeva promjene u bazi.
Molimo Vas da potvrdite da je ovo zaista ono što namjeravate da uradite, i da ćete
otkučati bazu kad završite posao oko njenog održavanja.',
'unlockdbtext' => 'Otključavanje baze će svim korisnicima vratiti mogućnost
izmjene stranica, promjene korisničkih stranica, izmjene spiska praćenih članaka,
i svega ostalog što zahtjeva promjene u bazi.
Molimo Vas da potvrdite da je ovo zaista ono što namijeravate da uradite.',
'lockconfirm' => 'Da, zaista želim da zaključam bazu.',
'unlockconfirm' => 'Da, zaista želim da otključam bazu.',
'lockbtn' => 'Zaključajte bazu',
'unlockbtn' => 'Otključaj bazu',
'locknoconfirm' => 'Niste potvrdili svoju namjeru.',
'lockdbsuccesssub' => 'Baza je zaključana',
'unlockdbsuccesssub' => 'Baza je otključana',
'lockdbsuccesstext' => '{{SITENAME}} baza podataka je zaključana. <br /> Sjetite se da je otključate kad završite sa održavanjem.',
'unlockdbsuccesstext' => '{{SITENAME}} baza podataka je otključana.',
'lockfilenotwritable' => 'Datoteka zaključavanja baze je zaštićena za pisanje.
Ako želite otključati ili zaključati bazu, ova datoteka mora biti omogućena za pisanje od strane web servera.',
'databasenotlocked' => 'Baza podataka nije zaključana.',
'lockedbyandtime' => '(od $1 dana $2 u $3)',

# Move page
'move-page' => 'Pomjeranje $1',
'move-page-legend' => 'Premjestite stranicu',
'movepagetext' => "Korištenjem ovog formulara možete preimenovati stranicu, premještajući cijelu historiju na novo ime.
Članak pod starim imenom će postati stranica koja preusmjerava na članak pod novim imenom. 
Možete automatski izmjeniti preusmjerenje do izvornog naslova.
Ako se ne odlučite na to, provjerite [[Special:DoubleRedirects|dvostruka]] ili [[Special:BrokenRedirects|neispravna preusmjeravanja]].
Dužni ste provjeriti da svi linkovi i dalje nastave voditi na prave stranice.

Imajte na umu da članak '''neće''' biti preusmjeren ukoliko već postoji članak pod imenom na koje namjeravate da preusmjerite osim u slučaju stranice za preusmjeravanje koja nema nikakvih starih izmjena.
To znači da možete vratiti stranicu na prethodno mjesto ako pogriješite, ali ne možete zamijeniti postojeću stranicu.

'''Pažnja!'''
Ovo može biti drastična i neočekivana promjena kad su u pitanju popularne stranice;
Molimo dobro razmislite prije nego što preimenujete stranicu.",
'movepagetext-noredirectfixer' => "Koristeći obrazac ispod ćete preimenovati stranicu i premjestiti cijelu njenu historiju na novi naziv.
Stari naziv će postati preusmjerenje na novi naziv.
Molimo provjerite da li postoje [[Special:DoubleRedirects|dvostruka]] ili [[Special:BrokenRedirects|nedovršena preusmjerenja]].
Vi ste za to odgovorni te morate provjeriti da li su linkovi ispravni i da li vode tamo gdje bi trebali.

Imajte na umu da stranica '''neće''' biti premještena ako već postoji stranica s tim imenom, osim ako je prazna ili je preusmjerenje ili nema ranije historije.
Ovo znali da možete preimenovati stranicu nazad gdje je ranije bila preimenovana ako ste pogriješili a ne možete ponovo preimenovati postojeću stranicu.

'''Pažnja!'''
Imajte na umu da preusmjeravanje popularnog članka može biti
drastična i neočekivana promjena za korisnike; molimo budite sigurni da ste shvatili posljedice prije nego što nastavite.",
'movepagetalktext' => "Odgovarajuća stranica za razgovor, ako postoji, će automatski biti premještena istovremeno '''osim:'''
*Ako premještate stranicu preko imenskih prostora,
*Neprazna stranica za razgovor već postoji pod novim imenom, ili
*Odčekirajte donju kutiju.

U tim slučajevima, moraćete ručno da premjestite stranicu ukoliko to želite.",
'movearticle' => 'Premjestite stranicu',
'moveuserpage-warning' => "'''Upozorenje:''' Premještate korisničku stranicu. Molimo da zapamtite da će se samo stranica premjestiti a korisnik se ''neće'' preimenovati.",
'movenologin' => 'Niste prijavljeni',
'movenologintext' => 'Morate biti registrovani korisnik i [[Special:UserLogin|prijavljeni]] da biste premjestili stranicu.',
'movenotallowed' => 'Nemate dopuštenje za premještanje stranica.',
'movenotallowedfile' => 'Nemate dopuštenja da premještanje datoteke.',
'cant-move-user-page' => 'Nemate dopuštenje da premještate korisničke stranice (bez podstranica).',
'cant-move-to-user-page' => 'Nemate dopuštenje da premjestite stranicu na korisničku stranicu (osim na korisničku podstranicu).',
'newtitle' => 'Novi naslov',
'move-watch' => 'Prati ovu stranicu',
'movepagebtn' => 'pomjerite stranicu',
'pagemovedsub' => 'Premještanje uspjelo',
'movepage-moved' => '\'\'\'"$1" je premještena na "$2"\'\'\'',
'movepage-moved-redirect' => 'Pomjeranje je napravljeno.',
'movepage-moved-noredirect' => 'Pravljenje preusmjerenja je onemogućeno.',
'articleexists' => 'Stranica pod tim imenom već postoji, ili je ime koje ste izabrali neispravno.  Molimo Vas da izaberete drugo ime.',
'cantmove-titleprotected' => 'Ne možete premjestiti stranicu na ovu lokaciju, jer je novi naslov zaštićen od pravljenja',
'talkexists' => 'Sama stranica je uspješno premještena, ali
stranica za razgovor nije mogla biti premještena jer takva već postoji na novom naslovu.  Molimo Vas da ih spojite ručno.',
'movedto' => 'premještena na',
'movetalk' => 'Premjestite "stranicu za razgovor" takođe, ako je moguće.',
'move-subpages' => 'Premjesti sve podstranice (do $1)',
'move-talk-subpages' => 'Premjesti podstranice stranica za razgovor (do $1)',
'movepage-page-exists' => 'Stranica $1 već postoji i ne može biti automatski zamijenjena.',
'movepage-page-moved' => 'Stranica $1 je premještena na $2.',
'movepage-page-unmoved' => 'Stranica $1 ne može biti premještena na $2.',
'movepage-max-pages' => 'Maksimum od $1 {{PLURAL:$1|stranice|stranice|stranica}} je premješteno i više nije moguće premjestiti automatski.',
'movelogpage' => 'Protokol premještanja',
'movelogpagetext' => 'Ispod je spisak stranica koje su premještene.',
'movesubpage' => '{{PLURAL:$1|Podstranica|Podstranice}}',
'movesubpagetext' => 'Ova stranica ima $1 {{PLURAL:$1|podstranicu|podstranice|podstranica}} prikazanih ispod.',
'movenosubpage' => 'Ova stranica nema podstranica.',
'movereason' => 'Razlog:',
'revertmove' => 'vrati',
'delete_and_move' => 'Brisanje i premještanje',
'delete_and_move_text' => '==Brisanje neophodno==
Odredišna stranica "[[:$1]]" već postoji.
Da li je želite obrisati kako bi ste mogli izvršiti premještanje?',
'delete_and_move_confirm' => 'Da, obriši stranicu',
'delete_and_move_reason' => 'Obrisano da bi se napravio prostor za premještanje iz "[[$1]]"',
'selfmove' => 'Izvorni i ciljani naziv su isti; strana ne može da se premjesti preko same sebe.',
'immobile-source-namespace' => 'Ne mogu premjestiti stranice u imenski prostor "$1"',
'immobile-target-namespace' => 'Ne mogu se premjestiti stranice u imenski prostor "$1"',
'immobile-target-namespace-iw' => 'Međuwiki link nije validno odredište premještanja stranice.',
'immobile-source-page' => 'Ova stranica se ne može premještati.',
'immobile-target-page' => 'Ne može se preusmjeriti na taj odredišni naslov.',
'imagenocrossnamespace' => 'Ne može se premjestiti datoteka u nedatotečni imenski prostor',
'nonfile-cannot-move-to-file' => 'Ne mogu se premjestiti podaci u datotečni imenski prostor',
'imagetypemismatch' => 'Ekstenzija nove datoteke ne odgovara njenom tipu',
'imageinvalidfilename' => 'Ciljno ime datoteke nije valjano',
'fix-double-redirects' => 'Ažuriraj sva preusmjerenja koja vode ka originalnom naslovu',
'move-leave-redirect' => 'Ostavi preusmjerenje',
'protectedpagemovewarning' => "'''Upozorenje:''' Ova stranica je zaključana tako da je mogu premještati samo korisnici sa ovlastima administratora.
Posljednja stavka zapisnika je prikazana ispod kao referenca:",
'semiprotectedpagemovewarning' => "'''Napomena:''' Ova stranica je zaključana tako da je mogu uređivati samo registrovani korisnici.
Posljednja stavka zapisnika je prikazana ispod kao referenca:",
'move-over-sharedrepo' => '== Datoteka postoji ==
[[:$1]] postoji na dijeljenom repozitorijumu. Premještanje datoteke na ovaj naslov će prepisati dijeljenu datoteku.',
'file-exists-sharedrepo' => 'Ime datoteke koje ste odabrali je već korišteno u dijeljenom repozitorijumu.
Molimo odaberite drugo ime.',

# Export
'export' => 'Izvezite stranice',
'exporttext' => 'Možete izvesti tekst i historiju jedne ili više stranica uklopljene u XML kod.
Ovo se može uvesti u drugi wiki koristeći MediaWiki preko [[Special:Import|stranice uvoza]].

Za izvoz stranica unesite njihove naslove u polje ispod, jedan naslov po retku, i označite želite li trenutnu verziju zajedno sa svim ranijim, ili samo trenutnu verziju sa informacijom o zadnjoj promjeni.

U drugom slučaju možete koristiti i vezu, npr. [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] za stranicu [[{{MediaWiki:Mainpage}}]].',
'exportall' => 'Izvezi sve stranice',
'exportcuronly' => 'Uključite samo trenutnu reviziju, ne cijelu historiju',
'exportnohistory' => "----
'''Pažnja:''' Izvoz cjelokupne historije stranica preko ovog obrasca je onemogućeno iz tehničkih razloga.",
'exportlistauthors' => 'Uključi cjelokupan spisak doprinosilaca za svaku stranicu',
'export-submit' => 'Izvezi',
'export-addcattext' => 'Dodaj stranice iz kategorije:',
'export-addcat' => 'Dodaj',
'export-addnstext' => 'Dodaj stranice iz imenskog prostora:',
'export-addns' => 'Dodaj',
'export-download' => 'Spremi kao datoteku',
'export-templates' => 'Uključi šablone',
'export-pagelinks' => 'Uključi povezane stranice do dubine od:',

# Namespace 8 related
'allmessages' => 'Sve sistemske poruke',
'allmessagesname' => 'Naziv',
'allmessagesdefault' => 'Uobičajeni tekst',
'allmessagescurrent' => 'Trenutni tekst',
'allmessagestext' => 'Ovo je spisak svih sistemskih poruka u dostupnih u MediaWiki imenskom prostoru.
Molimo posjetite [//www.mediawiki.org/wiki/Localisation MediaWiki lokalizaciju] i [//translatewiki.net translatewiki.net] ako želite doprinijeti općoj lokalizaciji MediaWikija.',
'allmessagesnotsupportedDB' => 'Ova stranica ne može biti korištena jer je <i>wgUseDatabaseMessages</i> isključen.',
'allmessages-filter-legend' => 'Filter',
'allmessages-filter' => 'Filter po stanju podešavanja:',
'allmessages-filter-unmodified' => 'Neizmijenjeno',
'allmessages-filter-all' => 'Sve',
'allmessages-filter-modified' => 'Izmijenjeno',
'allmessages-prefix' => 'Filter po prefiksu:',
'allmessages-language' => 'Jezik:',
'allmessages-filter-submit' => 'Idi',

# Thumbnails
'thumbnail-more' => 'uvećajte',
'filemissing' => 'Nedostaje datoteka',
'thumbnail_error' => 'Greška pri pravljenju umanjene slike: $1',
'djvu_page_error' => 'DjVu stranica je van opsega',
'djvu_no_xml' => 'Za XML-datoteku se ne može pozvati DjVu datoteka',
'thumbnail-temp-create' => 'Ne mogu da napravim privremenu smanjenu sliku',
'thumbnail-dest-create' => 'Ne mogu da sačuvam smanjenu sliku ("thumbnail") na destinaciju',
'thumbnail_invalid_params' => 'Pogrešne postavke smanjenog prikaza',
'thumbnail_dest_directory' => 'Ne može se napraviti odredišni folder',
'thumbnail_image-type' => 'Tip slike nije podržan',
'thumbnail_gd-library' => 'Nekompletna konfiguracija GD biblioteke: nedostaje funkcija $1',
'thumbnail_image-missing' => 'Datoteka ne dostaje: $1',

# Special:Import
'import' => 'Uvoz stranica',
'importinterwiki' => 'Međuwiki uvoz',
'import-interwiki-text' => 'Izaberi wiki i naslov stranice za uvoz.
Datumi revizija i imena autora će biti sačuvani.
Sve akcije pri međuwiki uvozu će biti zapisane u [[Special:Log/import|zapisu uvoza]].',
'import-interwiki-source' => 'Izvorna wiki/stranica:',
'import-interwiki-history' => 'Kopiraj sve verzije historije za ovu stranicu',
'import-interwiki-templates' => 'Uključi sve šablone',
'import-interwiki-submit' => 'Uvoz',
'import-interwiki-namespace' => 'Odredišni imenski prostor:',
'import-interwiki-rootpage' => 'Odredišna osnovna stranica (opcionalno):',
'import-upload-filename' => 'Naziv datoteke:',
'import-comment' => 'Komentar:',
'importtext' => 'Molimo Vas da izvezete datoteku iz izvornog wikija koristeći [[Special:Export|alat za izvoz]].
Sačuvajte je na Vašem računaru i pošaljite ovdje.',
'importstart' => 'Uvoz stranica...',
'import-revision-count' => '$1 {{PLURAL:$1|revizija|revizije|revizija}}',
'importnopages' => 'Nema stranica za uvoz.',
'imported-log-entries' => '{{PLURAL:$1|Uvezena $1 stavka zapisnika|Uvezene $1 stavke zapisnika|Uvezeno $1 stavki zapisnika}}.',
'importfailed' => 'Uvoz nije uspjeo: $1',
'importunknownsource' => 'Nepoznat izvorni tip uvoza',
'importcantopen' => 'Ne može se otvoriti uvozna datoteka',
'importbadinterwiki' => 'Loš interwiki link',
'importnotext' => 'Stranica je prazna, ili bez teksta',
'importsuccess' => 'Uspješno ste uvezli stranicu!',
'importhistoryconflict' => 'Postoji konfliktna historija revizija (možda je ova stranica ranije uvezena)',
'importnosources' => 'Nije definisan međuwiki izvor za uvoz i direktna postavljanja historije su onemogućena.',
'importnofile' => 'Uvozna datoteka nije postavljena.',
'importuploaderrorsize' => 'Postavljanje uvozne datoteke nije uspjelo.
Datoteka je veća nego što je dopušteno.',
'importuploaderrorpartial' => 'Postavljanje uvozne datoteke nije uspjelo.
Datoteka je samo djelimično postavljena.',
'importuploaderrortemp' => 'Postavljanje uvozne datoteke nije uspjelo.
Nedostaje privremeni folder.',
'import-parse-failure' => 'Greška pri parsiranju XML uvoza',
'import-noarticle' => 'Nema stranica za uvoz!',
'import-nonewrevisions' => 'Sve revizije su prethodno uvežene.',
'xml-error-string' => '$1 na liniji $2, kolona $3 (bajt $4): $5',
'import-upload' => 'Postavljanje XML podataka',
'import-token-mismatch' => 'Izgubljeni podaci sesije. Molimo pokušajte ponovno.',
'import-invalid-interwiki' => 'Ne može se uvesti iz navedenog wikija.',
'import-error-edit' => 'Stranica "$1" nije uvezena jer vam nije dopušteno da je uređujete.',
'import-error-create' => 'Stranica "$1" nije uvezena jer vam nije dozvoljeno da je napravite.',
'import-error-interwiki' => 'Stranica "$1" nije uvezena jer je njen naziv rezerviran za vanjsko povezivanje (interwiki).',
'import-error-special' => 'Stranica "$1" nije uvezena jer pripada posebnom imenskom prostoru koje ne prihvata stranice.',
'import-error-invalid' => 'Stranica "$1" nije uvezena jer je njen naziv neispravan.',
'import-options-wrong' => '{{PLURAL:$2|Pogrešna opcija|Pogrešne opcije}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Navedena osnovna stranica ima neispravan naslov.',
'import-rootpage-nosubpage' => 'Imenski prostor "$1" osnovne stranice ne dozvoljava podstranice.',

# Import log
'importlogpage' => 'Zapisnik uvoza',
'importlogpagetext' => 'Administrativni uvozi stranica sa historijom izmjena sa drugih wikija.',
'import-logentry-upload' => 'uvezena stranica [[$1]] putem postavljanja datoteke',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|revizija|revizije|revizija}}',
'import-logentry-interwiki' => "uveženo (''transwikied'') $1",
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|revizija|revizije|revizija}} od $2',

# JavaScriptTest
'javascripttest' => 'Testiranje JavaScript-e',
'javascripttest-title' => 'Pokretanje $1 testova',
'javascripttest-pagetext-noframework' => 'Ova stranica je određena za pokretanje JavaScript testova.',
'javascripttest-pagetext-unknownframework' => 'Nepoznat radni okvir testiranja"$1".',
'javascripttest-pagetext-frameworks' => 'Molimo Vas izaberite jednu od sljedećih testnih okvira: $1',
'javascripttest-pagetext-skins' => 'Izaberite s kojom temom želite da pokrenete probu:',
'javascripttest-qunit-intro' => 'Pogledajte [$1 dokumentaciju za testiranje] na mediawiki.org.',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Vaša korisnička stranica',
'tooltip-pt-anonuserpage' => 'Korisnička stranica za ip koju Vi uređujete kao',
'tooltip-pt-mytalk' => 'Vaša stranica za razgovor',
'tooltip-pt-anontalk' => 'Razgovor o doprinosu sa ove IP adrese',
'tooltip-pt-preferences' => 'Moja podešavanja',
'tooltip-pt-watchlist' => 'Spisak članaka koje pratite.',
'tooltip-pt-mycontris' => 'Spisak vašeg doprinosa',
'tooltip-pt-login' => 'Predlažemo da se prijavite, ali nije obvezno.',
'tooltip-pt-anonlogin' => 'Prijava nije obavezna, ali donosi mnogo koristi.',
'tooltip-pt-logout' => 'Odjava sa projekta {{SITENAME}}',
'tooltip-ca-talk' => 'Razgovor o sadržaju',
'tooltip-ca-edit' => 'Možete da uređujete ovaj članak. Molimo Vas, koristite dugme "Prikaži izgled',
'tooltip-ca-addsection' => 'Započnite novu sekciju.',
'tooltip-ca-viewsource' => 'Ovaj članak je zaključan. Možete ga samo vidjeti ili kopirati kod.',
'tooltip-ca-history' => 'Prethodne verzije ove stranice.',
'tooltip-ca-protect' => 'Zaštitite stranicu od budućih izmjena',
'tooltip-ca-unprotect' => 'Promijeni zaštitu za ovu stranicu',
'tooltip-ca-delete' => 'Izbrišite ovu stranicu',
'tooltip-ca-undelete' => 'Vratite izmjene koje su načinjene prije brisanja stranice',
'tooltip-ca-move' => 'Pomjerite stranicu',
'tooltip-ca-watch' => 'Dodajte stranicu u listu praćnih članaka',
'tooltip-ca-unwatch' => 'Izbrišite stranicu sa liste praćnih članaka',
'tooltip-search' => 'Pretraži projekat {{SITENAME}}',
'tooltip-search-go' => 'Idi na stranicu sa tačno ovim imenom ako postoji',
'tooltip-search-fulltext' => 'Pretraga stranica sa ovim tekstom',
'tooltip-p-logo' => 'Glavna stranica',
'tooltip-n-mainpage' => 'Posjetite početnu stranicu',
'tooltip-n-mainpage-description' => 'Posjetite početnu stranicu',
'tooltip-n-portal' => 'O projektu, šta možete da uradite, gdje se šta nalazi',
'tooltip-n-currentevents' => 'Podaci o onome na čemu se trenutno radi',
'tooltip-n-recentchanges' => 'Spisak nedavnih izmjena na wiki.',
'tooltip-n-randompage' => 'Otvorite slučajan članak',
'tooltip-n-help' => 'Mjesto gdje možete nešto da naučite.',
'tooltip-t-whatlinkshere' => 'Spisak svih članaka koji su povezani sa ovim',
'tooltip-t-recentchangeslinked' => 'Nedavne izmjene na stranicama koje su povezane sa ovom',
'tooltip-feed-rss' => 'RSS za ovu stranicu',
'tooltip-feed-atom' => 'Atom za ovu stranicu',
'tooltip-t-contributions' => 'Pogledajte spisak doprinosa ovog korisnika',
'tooltip-t-emailuser' => 'Pošaljite pismo ovom korisniku',
'tooltip-t-upload' => 'Postavi slike i druge medije',
'tooltip-t-specialpages' => 'Spisak svih posebnih stranica',
'tooltip-t-print' => 'Verzija ove stranice za štampanje',
'tooltip-t-permalink' => 'Stalni link ove verzije stranice',
'tooltip-ca-nstab-main' => 'Pogledajte sadržaj članka',
'tooltip-ca-nstab-user' => 'Pogledajte korisničku stranicu',
'tooltip-ca-nstab-media' => 'Pogledajte medija fajl',
'tooltip-ca-nstab-special' => 'Ovo je specijalna stranica i zato je ne možete uređivati',
'tooltip-ca-nstab-project' => 'Pogledajte projekat stranicu',
'tooltip-ca-nstab-image' => 'Pogledajte stranicu slike',
'tooltip-ca-nstab-mediawiki' => 'Pogledajte sistemsku poruku',
'tooltip-ca-nstab-template' => 'Pogledajte šablon',
'tooltip-ca-nstab-help' => 'Pogledajte stranicu za pomoć',
'tooltip-ca-nstab-category' => 'Pogledajte stranicu kategorije',
'tooltip-minoredit' => 'Naznačite da se radi o maloj izmjeni',
'tooltip-save' => 'Sačuvajte Vaše izmjene',
'tooltip-preview' => 'Pregledajte Vaše izmjene; molimo Vas da koristite ovo prije nego što sačuvate stranicu!',
'tooltip-diff' => 'Prikaži moje izmjene u tekstu.',
'tooltip-compareselectedversions' => 'Pogledajte pazlike između dvije selektovane verzije ove stranice.',
'tooltip-watch' => 'Dodajte ovu stranicu na Vaš spisak praćenih članaka',
'tooltip-watchlistedit-normal-submit' => 'Ukloni naslove',
'tooltip-watchlistedit-raw-submit' => 'Ažuriraj spisak praćenja',
'tooltip-recreate' => 'Ponovno pravljenje stranice iako je već brisana',
'tooltip-upload' => 'Započni postavljanje',
'tooltip-rollback' => 'Brzo vraćanje izmjene(izmjena) ove stranice posljednjeg uređivača jednim klikom.',
'tooltip-undo' => 'Vraća posljednju izmjenu i otvara formu za uređivanje u modu pregleda.
Dopušta unos razloga u sažetak.',
'tooltip-preferences-save' => 'Sačuvaj podešavanja',
'tooltip-summary' => 'Unesite kratki sažetak',

# Stylesheets
'common.css' => '/* CSS umetnut ovdje primijenit će se na sve skinove */',
'cologneblue.css' => '/* CSS umetnut ovdje uticat će na korisnike koji koriste Cologne Blue skin */',
'monobook.css' => '/* CSS umetnut ovdje uticat će na korisnike koji koriste Monobook skin */',
'modern.css' => '/* CSS umetnut ovdje uticat će na korisnike koji koriste Modern skin */',
'print.css' => '/* CSS umetnut ovdje uticat će na izgled isprintane stranice */',

# Scripts
'common.js' => '/* Bilo koja JavaScript će biti učitana za sve korisnike pri svakom učitavanju stranice. */',
'cologneblue.js' => '/* Bilo koja JavaScript će biti učitana za sve korisnike koji koriste Cologne Blue skin */',
'monobook.js' => '/* Bilo koja JavaScript će biti učitana za sve korisnike koji koriste MonoBook skin */',
'modern.js' => '/* Bilo koja JavaScript će biti učitana za sve korisnike koji koriste Modern skin */',

# Metadata
'notacceptable' => 'Viki server ne može da pruži podatke u onom formatu koji Vaš klijent može da pročita.',

# Attribution
'anonymous' => '{{PLURAL:$1|Anonimni korisnik|$1 anonimna korisnika|$1 anonimnih korisnika}} projekta {{SITENAME}}',
'siteuser' => '{{SITENAME}} korisnik $1',
'anonuser' => '{{SITENAME}} anonimni korisnik $1',
'lastmodifiedatby' => 'Ovu stranicu je posljednji put promjenio $3, u $2, $1',
'othercontribs' => 'Bazirano na radu od strane korisnika $1.',
'others' => 'ostali',
'siteusers' => '{{SITENAME}} {{PLURAL:$2|korisnik|korisnika}} $1',
'anonusers' => '{{SITENAME}} {{PLURAL:$2|anonimni korisnik|anonimni korisnici}} $1',
'creditspage' => 'Autori stranice',
'nocredits' => 'Autori ove stranice nisu navedeni.',

# Spam protection
'spamprotectiontitle' => 'Filter za zaštitu od neželjenih poruka',
'spamprotectiontext' => 'Strana koju želite da sačuvate je blokirana od strane filtera za neželjene poruke.
Ovo je vjerovatno izazvao vezom ka vanjskoj nepoželjnoj stranici.',
'spamprotectionmatch' => 'Slijedeći tekst je izazvao naš filter za neželjene poruke: $1',
'spambot_username' => 'MediaWiki čišćenje spama',
'spam_reverting' => 'Vraćanje na zadnju verziju koja ne sadrži linkove ka $1',
'spam_blanking' => 'Sve revizije koje sadrže linkove ka $1, očisti',
'spam_deleting' => 'Sve revizije koje sadrže linkove na $1, brišem',

# Info page
'pageinfo-title' => 'Informacije za "$1"',
'pageinfo-not-current' => 'Nažalost, nemoguće je dati ove informacije za starije revizije.',
'pageinfo-header-basic' => 'Osnovne informacije',
'pageinfo-header-edits' => 'Historija izmjena',
'pageinfo-header-restrictions' => 'Zaštita stranice',
'pageinfo-header-properties' => 'Svojstva stranice',
'pageinfo-display-title' => 'Naslov stranice',
'pageinfo-default-sort' => 'Podrazumijevani ključ sortiranja',
'pageinfo-length' => 'Dužina stranice (u bajtovima)',
'pageinfo-article-id' => 'ID stranice',
'pageinfo-language' => 'Jezik sadržaja stranice',
'pageinfo-views' => 'Broj pogleda',
'pageinfo-watchers' => 'Broj pratitelja stranice',
'pageinfo-redirects-name' => 'Preusmjeravanja na ovu stranicu',
'pageinfo-subpages-name' => 'Podstranice ove stranice',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|preusmjerenje|preusmjerenja}}; $3 {{PLURAL:$3|nepreusmjerenje|nepreusmjerenja}})',
'pageinfo-firstuser' => 'Korisnik koji je napravio stranicu',
'pageinfo-firsttime' => 'Datum stvaranja stranice',
'pageinfo-lastuser' => 'Posljednji urednik stranice',
'pageinfo-lasttime' => 'Datum posljednje izmjene',
'pageinfo-edits' => 'Ukupan broj izmjena',
'pageinfo-authors' => 'Ukupan broj različitih autora',
'pageinfo-recent-edits' => 'Broj nedavnih izmjena (u poslednjih $1)',
'pageinfo-magic-words' => '{{PLURAL:$1|Čarobna riječ|Čarobne riječi}} ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Sakrivena kategorija|Sakrivene kategorije}} ($1)',
'pageinfo-templates' => '{{PLURAL:$1|Uključeni šablon|Uključeni šabloni}} ($1)',
'pageinfo-toolboxlink' => 'Informacije o stranici',
'pageinfo-redirectsto' => 'Preusmjerava na',
'pageinfo-redirectsto-info' => 'Informacije',
'pageinfo-contentpage' => 'Broji se kao stranica sa sadržajem',
'pageinfo-contentpage-yes' => 'Da',
'pageinfo-protect-cascading-yes' => 'Da',
'pageinfo-category-pages' => 'Broj stranica',
'pageinfo-category-files' => 'Broj datoteka',

# Skin names
'skinname-cologneblue' => 'Kelnsko plavo',
'skinname-monobook' => 'MonoKnjiga',
'skinname-modern' => 'Moderna',

# Patrolling
'markaspatrolleddiff' => 'Označi kao patrolirano',
'markaspatrolledtext' => 'Označi ovaj članak kao patroliran',
'markedaspatrolled' => 'Označeno kao patrolirano',
'markedaspatrolledtext' => 'Izabrana revizija [[:$1]] je bila označena kao patrolirana.',
'rcpatroldisabled' => 'Patroliranje nedavnih izmjena onemogućeno',
'rcpatroldisabledtext' => 'Funkcija patroliranja nedavnih izmjena je trenutno isključena.',
'markedaspatrollederror' => 'Ne može se označiti kao patrolirano',
'markedaspatrollederrortext' => 'Morate naglasiti reviziju koju treba označiti kao patroliranu.',
'markedaspatrollederror-noautopatrol' => 'Nije Vam dopušteno da vlastite izmjene označavate patroliranim.',
'markedaspatrollednotify' => 'Ova izmjena na stranici „$1“ je označena kao pregledana.',
'markedaspatrollederrornotify' => 'Označavanje stranice pregledanom nije uspjelo.',

# Patrol log
'patrol-log-page' => 'Zapisnik patroliranja',
'patrol-log-header' => 'Ovdje se nalazi zapis patroliranih revizija.',
'log-show-hide-patrol' => '$1 zapis patroliranja',

# Image deletion
'deletedrevision' => 'Obrisana stara revizija $1',
'filedeleteerror-short' => 'Greška pri brisanju datoteke: $1',
'filedeleteerror-long' => 'Desile su se greške pri brisanju datoteke:

$1',
'filedelete-missing' => 'Datoteka "$1" ne može biti obrisana, jer ne postoji.',
'filedelete-old-unregistered' => 'Određena revizija datoteke "$1" se ne nalazi u bazi podataka.',
'filedelete-current-unregistered' => 'Određena datoteka "$1" se ne nalazi u bazi podataka.',
'filedelete-archive-read-only' => 'Arhivski folder "$1" se postavljen samo za čitanje na serveru.',

# Browsing diffs
'previousdiff' => '← Starija izmjena',
'nextdiff' => 'Novija izmjena →',

# Media information
'mediawarning' => "'''Upozorenje''': Ova datoteka sadrži loš kod, njegovim izvršavanjem možete da ugrozite Vaš sistem.",
'imagemaxsize' => "Ograničenje veličine slike:<br />''(za stranice opisa datoteke)''",
'thumbsize' => 'Veličina umanjenog prikaza:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|stranica|stranice|stranica}}',
'file-info' => 'veličina datoteke: $1, MIME tip: $2',
'file-info-size' => '$1 × $2 piksela, veličina datoteke: $3, MIME tip: $4',
'file-info-size-pages' => '$1 × $2 piksela, veličina datoteke: $3, MIME vrsta: $4, $5 {{PLURAL:$5|stranica|stranice|stranica}}',
'file-nohires' => 'Veća rezolucija nije dostupna.',
'svg-long-desc' => 'SVG fajl, dozvoljeno $1 × $2 piksela, veličina fajla: $3',
'svg-long-desc-animated' => 'Animirana SVG datoteka, nominalno: $1 × $2 piksela, veličina datoteke: $3',
'show-big-image' => 'Vidi sliku u punoj veličini (rezoluciji)',
'show-big-image-preview' => 'Veličina ovog prikaza: $1.',
'show-big-image-other' => '{{PLURAL:$2|Druga rezolucija|Ostale rezolucije}}: $1.',
'show-big-image-size' => '$1 × $2 piksela',
'file-info-gif-looped' => 'stalno iznova',
'file-info-gif-frames' => '$1 {{PLURAL:$1|sličica|sličice|sličica}}',
'file-info-png-looped' => 'stalno iznova',
'file-info-png-repeat' => 'pregledano $1 {{PLURAL:$1|put|puta}}',
'file-info-png-frames' => '$1 {{PLURAL:$1|sličica|sličice|sličica}}',
'file-no-thumb-animation' => "'''Napomena: Zbog tehničkih ograničenja minijature ove datoteke neće biti animirane.'''",
'file-no-thumb-animation-gif' => "'''Napomena: Zbog tehničkih ograničenja, minijature GIF slika visoke rezolucije kao što je ova neće biti animirane.'''",

# Special:NewFiles
'newimages' => 'Galerija novih slika',
'imagelisttext' => "Ispod je spisak od '''$1''' {{PLURAL:$1|datoteke|datoteke|datoteka}} poredanih $2.",
'newimages-summary' => 'Ova specijalna stranica prikazuje posljednje postavljene datoteke.',
'newimages-legend' => 'Filter',
'newimages-label' => 'Ime datoteke (ili dio imena):',
'showhidebots' => '($1 botove)',
'noimages' => 'Ništa za prikazati.',
'ilsubmit' => 'Traži',
'bydate' => 'po datumu',
'sp-newimages-showfrom' => 'Prikaz novih datoteka počev od $2, $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 sekunda|$1 sekunde|$1 sekundi}}',
'minutes' => '{{PLURAL:$1|$1 minuta|$1 minute|$1 minuta}}',
'hours' => '{{PLURAL:$1|$1 sat|$1 sata|$1 sati}}',
'days' => '{{PLURAL:$1|$1 dan|$1 dana|$1 dana}}',
'months' => '{{PLURAL:$1|$1 mjesec|$1 mjeseci}}',
'years' => '{{PLURAL:$1|$1 godina|$1 godine|$1 godina}}',
'ago' => 'prije $1',

# Bad image list
'bad_image_list' => "Koristi se sljedeći format:

Razmatraju se samo stavke u spisku (linije koje počinju sa *).
Prvi link u liniji mora biti povezan sa lošom slikom.
Svi drugi linkovi u istoj liniji se smatraju izuzecima, npr. kod stranica gdje se slike pojavljuju ''inline''.",

# Metadata
'metadata' => 'Metapodaci',
'metadata-help' => 'Ova datoteka sadržava dodatne podatke koje je vjerovatno dodala digitalna kamera ili skener u procesu snimanja, odnosno digitalizacije. Ako je datoteka mijenjana, podaci možda nisu u skladu sa stvarnim stanjem.',
'metadata-expand' => 'Pokaži sve detalje',
'metadata-collapse' => 'Sakrij dodatne podatke',
'metadata-fields' => 'Polja metapodataka slika su prikazani ispod slike će biti uključeni u prikaz stranice slike kada je sakrivena tabela metapodataka. U suprotnom će biti sakrivena po postavkama.

* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# Exif tags
'exif-imagewidth' => 'Širina',
'exif-imagelength' => 'Visina',
'exif-bitspersample' => 'Bita po komponenti',
'exif-compression' => 'Šema kompresije',
'exif-photometricinterpretation' => 'Sastav piksela',
'exif-orientation' => 'Orjentacija',
'exif-samplesperpixel' => 'Broj komponenti',
'exif-planarconfiguration' => 'Aranžiranje podataka',
'exif-ycbcrsubsampling' => 'Odnos subsampling od Y do C',
'exif-ycbcrpositioning' => 'Pozicioniranje Y i C',
'exif-xresolution' => 'Horizontalna rezolucija',
'exif-yresolution' => 'Vertikalna rezolucija',
'exif-stripoffsets' => 'Lokacija podataka slike',
'exif-rowsperstrip' => 'Broj redaka po liniji',
'exif-stripbytecounts' => 'Bita po kompresovanoj liniji',
'exif-jpeginterchangeformat' => 'Presijek do JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Bita JPEG podataka',
'exif-whitepoint' => 'Hromiranost bijele tačke',
'exif-primarychromaticities' => 'Hromaticitet primarnih boja',
'exif-ycbcrcoefficients' => 'Koeficijenti transformacije matrice prostora boja',
'exif-referenceblackwhite' => 'Par crnih i bijelih referentnih vrijednosti',
'exif-datetime' => 'Vrijeme i datum promjene datoteke',
'exif-imagedescription' => 'Naslov slike',
'exif-make' => 'Proizvođač kamere',
'exif-model' => 'Model kamere',
'exif-software' => 'Korišteni softver',
'exif-artist' => 'Autor',
'exif-copyright' => 'Vlasnik autorskih prava',
'exif-exifversion' => 'Exif verzija',
'exif-flashpixversion' => 'Podržana verzija Flashpix',
'exif-colorspace' => 'Prostor boje',
'exif-componentsconfiguration' => 'Značenje svake komponente',
'exif-compressedbitsperpixel' => 'Način kompresije slike',
'exif-pixelydimension' => 'Širina slike',
'exif-pixelxdimension' => 'Visina slike',
'exif-usercomment' => 'Korisnički komentari',
'exif-relatedsoundfile' => 'Povezana zvučna datoteka',
'exif-datetimeoriginal' => 'Datum i vrijeme generisanja podataka',
'exif-datetimedigitized' => 'Datum i vrijeme digitalizacije',
'exif-subsectime' => 'Datum i vrijeme u dijelovima sekunde',
'exif-subsectimeoriginal' => 'Originalno vrijeme i datum u dijelovima sekunde',
'exif-subsectimedigitized' => 'Datum i vrijeme digitalizacije u dijelovima sekunde',
'exif-exposuretime' => 'Vrijeme izlaganja (ekspozicije)',
'exif-exposuretime-format' => '$1 sekundi ($2)',
'exif-fnumber' => 'F broj',
'exif-exposureprogram' => 'Program ekspozicije',
'exif-spectralsensitivity' => 'Spektralna osjetljivost',
'exif-isospeedratings' => 'Rejting ISO brzine',
'exif-shutterspeedvalue' => 'Brzina APEX okidača',
'exif-aperturevalue' => 'APEX otvor',
'exif-brightnessvalue' => 'APEX osvijetljenost',
'exif-exposurebiasvalue' => 'Kompozicija ekspozicije',
'exif-maxaperturevalue' => 'Najveći broj otvora blende',
'exif-subjectdistance' => 'Udaljenost objekta',
'exif-meteringmode' => 'Način mjerenja',
'exif-lightsource' => 'Izvor svjetlosti',
'exif-flash' => 'Blijesak',
'exif-focallength' => 'Fokusna dužina objektiva',
'exif-subjectarea' => 'Površina objekta',
'exif-flashenergy' => 'Energija blijeska',
'exif-focalplanexresolution' => 'Rezolucija fokusne ravni X',
'exif-focalplaneyresolution' => 'Rezolucija fokusne ravni Y',
'exif-focalplaneresolutionunit' => 'Jedinica rezolucije fokusne ravni',
'exif-subjectlocation' => 'Lokacija objekta',
'exif-exposureindex' => 'Indeks ekspozicije',
'exif-sensingmethod' => 'Vrsta senzora',
'exif-filesource' => 'Izvor datoteke',
'exif-scenetype' => 'Vrsta scene',
'exif-customrendered' => 'Podešeno uređivanje slike',
'exif-exposuremode' => 'Vrsta ekspozicije',
'exif-whitebalance' => 'Bijeli balans',
'exif-digitalzoomratio' => 'Odnos digitalnog zuma',
'exif-focallengthin35mmfilm' => 'Fokusna dužina kod 35 mm filma',
'exif-scenecapturetype' => 'Vrsta scene snimanja',
'exif-gaincontrol' => 'Kontrola scene',
'exif-contrast' => 'Kontrast',
'exif-saturation' => 'Saturacija',
'exif-sharpness' => 'Izoštrenost',
'exif-devicesettingdescription' => 'Opis postavki uređaja',
'exif-subjectdistancerange' => 'Udaljenost od objekta',
'exif-imageuniqueid' => 'Jedinstveni ID slike',
'exif-gpsversionid' => 'Verzija GPS bloka informacija',
'exif-gpslatituderef' => 'Sjeverna ili južna širina',
'exif-gpslatitude' => 'Širina',
'exif-gpslongituderef' => 'Istočna ili zapadna dužina',
'exif-gpslongitude' => 'Dužina',
'exif-gpsaltituderef' => 'Referenca visine',
'exif-gpsaltitude' => 'Nadmorska visina',
'exif-gpstimestamp' => 'GPS vrijeme (atomski sat)',
'exif-gpssatellites' => 'Sateliti korišteni pri mjerenju',
'exif-gpsstatus' => 'Status prijemnika',
'exif-gpsmeasuremode' => 'Način mjerenja',
'exif-gpsdop' => 'Preciznost mjerenja',
'exif-gpsspeedref' => 'Jedinica brzine',
'exif-gpsspeed' => 'Brzina GPS prijemnika',
'exif-gpstrackref' => 'Referenca za smijer kretanja',
'exif-gpstrack' => 'Smijer kretanja',
'exif-gpsimgdirectionref' => 'Referenca za smijer slike',
'exif-gpsimgdirection' => 'Smijer slike',
'exif-gpsmapdatum' => 'Upotrijebljeni podaci geoloških mjerenja',
'exif-gpsdestlatituderef' => 'Referenca za širinu odredišta',
'exif-gpsdestlatitude' => 'Širina odredišta',
'exif-gpsdestlongituderef' => 'Referenca za dužinu odredišta',
'exif-gpsdestlongitude' => 'Dužina odredišta',
'exif-gpsdestbearingref' => 'Indeks azimuta odredišta',
'exif-gpsdestbearing' => 'Azimut odredišta',
'exif-gpsdestdistanceref' => 'Referenca za udaljenost od odredišta',
'exif-gpsdestdistance' => 'Udaljenost do odredišta',
'exif-gpsprocessingmethod' => 'Naziv GPS metoda procesiranja',
'exif-gpsareainformation' => 'Naziv GPS područja',
'exif-gpsdatestamp' => 'GPS datum',
'exif-gpsdifferential' => 'GPS diferencijalna korekcija',
'exif-jpegfilecomment' => 'Komentar JPEG datoteke',
'exif-keywords' => 'Ključne riječi',
'exif-worldregioncreated' => 'Regija svijeta gdje je slika načinjena',
'exif-countrycreated' => 'Država gdje je slika načinjena',
'exif-countrycodecreated' => 'Kod države gdje je slika načinjena',
'exif-provinceorstatecreated' => 'Provincija ili pokrajina gdje je slika načinjena',
'exif-citycreated' => 'Grad gdje je slika načinjena',
'exif-sublocationcreated' => 'Podlokacija grada gdje je slika načinjena',
'exif-worldregiondest' => 'Prikazana regija svijeta',
'exif-countrydest' => 'Prikazana država',
'exif-countrycodedest' => 'Kod prikazane države',
'exif-provinceorstatedest' => 'Prikazana provincija ili pokrajina',
'exif-citydest' => 'Prikazani grad',
'exif-sublocationdest' => 'Podlokacija grada koja je prikazana',
'exif-objectname' => 'Kratki naslov',
'exif-specialinstructions' => 'Posebne upute',
'exif-headline' => 'Naslov',
'exif-credit' => 'Pripisivanje/Pružalac usluga',
'exif-source' => 'Izvor',
'exif-editstatus' => 'Urednički status slike',
'exif-urgency' => 'Hitnost',
'exif-fixtureidentifier' => 'Naziv rubrike',
'exif-locationdest' => 'Lokacija prikazana',
'exif-locationdestcode' => 'Kod prikazane lokacije',
'exif-objectcycle' => 'Doba dana za koje je namijenjena medija',
'exif-contact' => 'Podaci za kontakt',
'exif-writer' => 'Pisac',
'exif-languagecode' => 'Jezik',
'exif-iimversion' => 'IIM verzija',
'exif-iimcategory' => 'Kategorija',
'exif-iimsupplementalcategory' => 'Dodatne kategorije',
'exif-datetimeexpires' => 'Ne koristite nakon',
'exif-datetimereleased' => 'Objavljeno',
'exif-originaltransmissionref' => 'Originalna šifra mjesta prenosa',
'exif-identifier' => 'Oznaka',
'exif-lens' => 'Korišteni objektiv',
'exif-serialnumber' => 'Serijski broj fotoaparata',
'exif-cameraownername' => 'Vlasnik fotoaparata',
'exif-label' => 'Naslov',
'exif-datetimemetadata' => 'Datum posljednje izmjene meta podataka',
'exif-nickname' => 'Neformalni naziv slike',
'exif-rating' => 'Ocjena (od 5)',
'exif-rightscertificate' => 'Certifikat za upravljanje pravima',
'exif-copyrighted' => 'Status autorskih prava',
'exif-copyrightowner' => 'Vlasnik autorskih prava',
'exif-usageterms' => 'Uslovi upotrebe',
'exif-webstatement' => 'Online izjava o autorskom pravu',
'exif-originaldocumentid' => 'Jedinstveni ID originalnog dokumenta',
'exif-licenseurl' => 'URL za licencu autorskog prava',
'exif-morepermissionsurl' => 'Alternativni podaci o licenci',
'exif-attributionurl' => 'Kada ponovo upotrebljavate ovaj rad, molimo povežite do njega',
'exif-preferredattributionname' => 'Kada ponovo upotrebljavate ovaj rad, molimo navedite ga',
'exif-pngfilecomment' => 'Komentar PNG datoteke',
'exif-disclaimer' => 'Odricanje odgovornosti',
'exif-contentwarning' => 'Upozorenje o sadržaju',
'exif-giffilecomment' => 'Komentar GIF datoteke',
'exif-intellectualgenre' => 'Vrsta stavke',
'exif-subjectnewscode' => 'Kôd predmeta',
'exif-scenecode' => 'IPTC kôd scene',
'exif-event' => 'Prikazani događaj',
'exif-organisationinimage' => 'Prikazana organizacija',
'exif-personinimage' => 'Prikazana ličnost',
'exif-originalimageheight' => 'Visina slike prije nego što je odrezana',
'exif-originalimagewidth' => 'Širina slike prije nego što je odrezana',

# Exif attributes
'exif-compression-1' => 'Nekompresovano',
'exif-compression-2' => 'CCITT Grupa 3 1 — Dimenzionalno izmijenjeo Huffmanovo šifriranje po dužini',
'exif-compression-3' => 'CCITT Grupa 3 faks šifriranje',
'exif-compression-4' => 'CCITT Grupa 4 faks šifriranje',

'exif-copyrighted-true' => 'Zaštićeno autorskim pravima',
'exif-copyrighted-false' => 'Javna domena',

'exif-unknowndate' => 'Nepoznat datum',

'exif-orientation-1' => 'Normalna',
'exif-orientation-2' => 'Horizontalno preokrenuto',
'exif-orientation-3' => 'Rotirano 180°',
'exif-orientation-4' => 'Vertikalno preokrenuto',
'exif-orientation-5' => 'Rotirano 90° suprotno kazaljke i vertikalno obrnuto',
'exif-orientation-6' => 'Zaokrenuto 90° suprotno smjeru kazaljke',
'exif-orientation-7' => 'Rotirano 90° u smijeru kazaljke i preokrenuto vertikalno',
'exif-orientation-8' => 'Zaokrenuto 90° u smjeru kazaljke',

'exif-planarconfiguration-1' => 'grubi format',
'exif-planarconfiguration-2' => 'format u ravni',

'exif-colorspace-65535' => 'Nije podešeno',

'exif-componentsconfiguration-0' => 'ne postoji',

'exif-exposureprogram-0' => 'Nije određen',
'exif-exposureprogram-1' => 'Ručno',
'exif-exposureprogram-2' => 'Normalni program',
'exif-exposureprogram-3' => 'Prioritet otvora blende',
'exif-exposureprogram-4' => 'Prioritet okidača',
'exif-exposureprogram-5' => 'Kreativni program (usmjeren ka dubini polja)',
'exif-exposureprogram-6' => 'Program akcije (usmjereno na veću brzinu okidača)',
'exif-exposureprogram-7' => 'Način portreta (za fotografije iz blizine sa pozadinom van fokusa)',
'exif-exposureprogram-8' => 'Način pejsaža (za pejsažne fotografije sa pozadinom u fokusu)',

'exif-subjectdistance-value' => '$1 metara',

'exif-meteringmode-0' => 'Nepoznat',
'exif-meteringmode-1' => 'Prosječan',
'exif-meteringmode-2' => 'Srednji prosjek težišta',
'exif-meteringmode-3' => 'Tačka',
'exif-meteringmode-4' => 'Višestruka tačka',
'exif-meteringmode-5' => 'Šema',
'exif-meteringmode-6' => 'Djelimični',
'exif-meteringmode-255' => 'Ostalo',

'exif-lightsource-0' => 'Nepoznat',
'exif-lightsource-1' => 'Dnevno svjetlo',
'exif-lightsource-2' => 'Fluorescentni',
'exif-lightsource-3' => 'Volfram (svjetlo)',
'exif-lightsource-4' => 'Blijesak',
'exif-lightsource-9' => 'Lijepo vrijeme',
'exif-lightsource-10' => 'Oblačno vrijeme',
'exif-lightsource-11' => 'Osjenčeno',
'exif-lightsource-12' => 'Dnevna fluorescencija (D 5700 – 7100K)',
'exif-lightsource-13' => 'Dnevna bijela fluorescencija (N 4600 – 5400K)',
'exif-lightsource-14' => 'Hladno bijela fluorescencija (W 3900 – 4500K)',
'exif-lightsource-15' => 'Bijela fluorescencija (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Standardno svjetlo A',
'exif-lightsource-18' => 'Standardno svjetlo B',
'exif-lightsource-19' => 'Standardno svjetlo C',
'exif-lightsource-20' => 'D55',
'exif-lightsource-21' => 'D65',
'exif-lightsource-22' => 'D75',
'exif-lightsource-23' => 'D50',
'exif-lightsource-24' => 'ISO studio volfram',
'exif-lightsource-255' => 'Ostali izvori svjetlosti',

# Flash modes
'exif-flash-fired-0' => 'Blijesak nije radio',
'exif-flash-fired-1' => 'Blijesak radio',
'exif-flash-return-0' => 'blijesak nije poslao nikakav odziv',
'exif-flash-return-2' => 'nije otkriven blijesak',
'exif-flash-return-3' => 'otkriven blijesak',
'exif-flash-mode-1' => 'obavezan rad blijeska',
'exif-flash-mode-2' => 'obavezno izbjegavanje blijeska',
'exif-flash-mode-3' => 'automatski način',
'exif-flash-function-1' => 'Bez funkcije blijeska',
'exif-flash-redeye-1' => 'način redukcije "crvenila očiju"',

'exif-focalplaneresolutionunit-2' => 'inči',

'exif-sensingmethod-1' => 'Nedefinisan',
'exif-sensingmethod-2' => 'Senzor boje površine sa jednim čipom',
'exif-sensingmethod-3' => 'Senzor boje površine sa dva čipa',
'exif-sensingmethod-4' => 'Senzor boje površine sa tri čipa',
'exif-sensingmethod-5' => 'Sekvencijalni senzor boje površine',
'exif-sensingmethod-7' => 'Trilinearni senzor',
'exif-sensingmethod-8' => 'Sekvencijalni senzor boje linija',

'exif-filesource-3' => 'Digitalna kamera',

'exif-scenetype-1' => 'Direktno fotografisana slika',

'exif-customrendered-0' => 'Normalni proces',
'exif-customrendered-1' => 'Podešeni proces',

'exif-exposuremode-0' => 'Automatska ekpozicija',
'exif-exposuremode-1' => 'Ručna ekspozicija',
'exif-exposuremode-2' => 'Automatski određen raspon',

'exif-whitebalance-0' => 'Automatski bijeli balans',
'exif-whitebalance-1' => 'Ručno podešeni bijeli balans',

'exif-scenecapturetype-0' => 'Standardna',
'exif-scenecapturetype-1' => 'Pejsaž',
'exif-scenecapturetype-2' => 'Portret',
'exif-scenecapturetype-3' => 'Noćna scena',

'exif-gaincontrol-0' => 'Ništa',
'exif-gaincontrol-1' => 'Malo povećanje',
'exif-gaincontrol-2' => 'Veće povećanje',
'exif-gaincontrol-3' => 'Manje smanjenje',
'exif-gaincontrol-4' => 'Veće smanjenje',

'exif-contrast-0' => 'Normalni',
'exif-contrast-1' => 'Mehki',
'exif-contrast-2' => 'Snažni',

'exif-saturation-0' => 'Normalna',
'exif-saturation-1' => 'Niska zasićenost',
'exif-saturation-2' => 'Jako zasićenje',

'exif-sharpness-0' => 'Normalna',
'exif-sharpness-1' => 'Blago',
'exif-sharpness-2' => 'Oštro',

'exif-subjectdistancerange-0' => 'Nepoznat',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'Pogled izbliza',
'exif-subjectdistancerange-3' => 'Pogled iz daljine',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Sjeverna širina',
'exif-gpslatitude-s' => 'Južna širina',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Istočna dužina',
'exif-gpslongitude-w' => 'Zapadna dužina',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|metar|metra|metara}} nadmorske visine',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|metar|metra|metara}} ispod nivoa mora',

'exif-gpsstatus-a' => 'Mjerenje u toku',
'exif-gpsstatus-v' => 'Mjerenje van funkcije',

'exif-gpsmeasuremode-2' => 'dvodimenzionalno mjerenje',
'exif-gpsmeasuremode-3' => 'trodimenzionalno mjerenje',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Kilometara na sat',
'exif-gpsspeed-m' => 'Milja na sat',
'exif-gpsspeed-n' => 'Čvorova',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometara',
'exif-gpsdestdistance-m' => 'Milja',
'exif-gpsdestdistance-n' => 'Nautičkih milja',

'exif-gpsdop-excellent' => 'Odlično ($1)',
'exif-gpsdop-good' => 'Dobro ($1)',
'exif-gpsdop-moderate' => 'Umjereno ($1)',
'exif-gpsdop-fair' => 'Zadovoljavajuće ($1)',
'exif-gpsdop-poor' => 'Loše ($1)',

'exif-objectcycle-a' => 'Samo jutro',
'exif-objectcycle-p' => 'Samo navečer',
'exif-objectcycle-b' => 'I ujutro i navečer',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Stvarni pravac',
'exif-gpsdirection-m' => 'Magnetski smijer',

'exif-ycbcrpositioning-1' => 'Centrirano',
'exif-ycbcrpositioning-2' => 'Uporedo',

'exif-dc-contributor' => 'Autori',
'exif-dc-coverage' => 'Prostorni ili vremenski okvir medije',
'exif-dc-date' => 'Datum(i)',
'exif-dc-publisher' => 'Izdavač',
'exif-dc-relation' => 'Povezana medija',
'exif-dc-rights' => 'Prava',
'exif-dc-source' => 'Izvor medije',
'exif-dc-type' => 'Vrsta medije',

'exif-rating-rejected' => 'Odbijeno',

'exif-isospeedratings-overflow' => 'Više od 65535',

'exif-iimcategory-ace' => 'Umjetnosti, kultura i zabava',
'exif-iimcategory-clj' => 'Kriminal i zakon',
'exif-iimcategory-dis' => 'Katastrofe i nesreće',
'exif-iimcategory-fin' => 'Ekonomija i posao',
'exif-iimcategory-edu' => 'Obrazovanje',
'exif-iimcategory-evn' => 'Okolina',
'exif-iimcategory-hth' => 'Zdravlje',
'exif-iimcategory-hum' => 'Ljudski interes',
'exif-iimcategory-lab' => 'Rad',
'exif-iimcategory-lif' => 'Način života i razonoda',
'exif-iimcategory-pol' => 'Politika',
'exif-iimcategory-rel' => 'Religija i vjerovanje',
'exif-iimcategory-sci' => 'Nauka i tehnologija',
'exif-iimcategory-soi' => 'Društvena pitanja',
'exif-iimcategory-spo' => 'Sport',
'exif-iimcategory-war' => 'Rat, sukob i nemir',
'exif-iimcategory-wea' => 'Vrijeme',

'exif-urgency-normal' => 'Normalno ($1)',
'exif-urgency-low' => 'Nisko ( $1 )',
'exif-urgency-high' => 'Visoko ($1)',
'exif-urgency-other' => 'Korisnički određen prioritet ($1)',

# External editor support
'edit-externally' => 'Izmjeni ovu datoteku koristeći vanjski program',
'edit-externally-help' => '(Pogledajte [//www.mediawiki.org/wiki/Manual:External_editors instrukcije za podešavanje] za više informacija)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'sve',
'namespacesall' => 'sve',
'monthsall' => 'sve',
'limitall' => 'sve',

# Email address confirmation
'confirmemail' => 'Potvrdite adresu e-pošte',
'confirmemail_noemail' => 'Niste unijeli tačnu e-mail adresu u Vaše [[Special:Preferences|korisničke postavke]].',
'confirmemail_text' => 'Ova viki zahtjeva da potvrdite adresu Vaše e-pošte prije nego što koristite mogućnosti e-pošte. Aktivirajte dugme ispod kako bi ste poslali poštu za potvrdu na Vašu adresu. Pošta uključuje link koji sadrži kod; učitajte link u Vaš preglednik da bi ste potvrdili da je adresa Vaše e-pošte validna.',
'confirmemail_pending' => 'Konfirmacioni kod Vam je već poslan putem e-maila;
ako ste nedavno otvorili Vaš račun, trebali bi pričekati par minuta da poslana pošta stigne, prije nego što ponovno zahtijevate novi kod.',
'confirmemail_send' => 'Pošaljite kod za potvrdu',
'confirmemail_sent' => 'E-pošta za potvrđivanje poslata.',
'confirmemail_oncreate' => 'Kod za potvrđivanje Vam je poslat na Vašu e-mail adresu.
Taj kod nije neophodan za prijavljivanje, ali Vam ne potreban kako bi ste omogućili funkcije wikija zasnovane na e-mailu.',
'confirmemail_sendfailed' => '{{SITENAME}} Vam ne može poslati poštu za potvrđivanje. Provjerite adresu zbog nepravilnih karaktera.

Povratna pošta: $1',
'confirmemail_invalid' => 'Netačan kod za potvrdu. Moguće je da je kod istekao.',
'confirmemail_needlogin' => 'Morate $1 da bi ste potvrdili Vašu e-mail adresu.',
'confirmemail_success' => 'Adresa vaše e-pošte je potvrđena. Možete sad da se prijavite i uživate u viki.',
'confirmemail_loggedin' => 'Adresa Vaše e-pošte je potvrđena.',
'confirmemail_error' => 'Nešto je pošlo po zlu prilikom sačuvavanja vaše potvrde.',
'confirmemail_subject' => 'Vikiriječnik adresa e-pošte za potvrđivanje',
'confirmemail_body' => 'Neko, vjerovatno Vi, je sa IP adrese $1 registrovao nalog "$2" sa ovom adresom e-pošte na {{SITENAME}}.

Da potvrdite da ovaj nalog stvarno pripada vama i da aktivirate mogućnost e-pošte na {{SITENAME}}, otvorite ovaj link u vašem pregledniku:

$3

Ako ovo niste vi, pratite ovaj link da prekinete prijavu:
$5

Ovaj kod za potvrdu će isteći u $4.',
'confirmemail_body_changed' => 'Neko, vjerovatno Vi, je sa IP adrese $1
je promijenio adresu e-pošte računa "$2" na ovu adresu za {{SITENAME}}.

Da potvrdite da ovaj nalog stvarno pripada Vama i da reaktivirate mogućnosti e-pošte na {{SITENAME}}, otvorite ovaj link u Vašem pregledniku:

$3

Ako ovaj račun *ne* pripada Vama, pratite ovaj link da prekinete odobravanje adrese e-pošte:

$5

Ovaj kod za potvrdu će isteći u $4.',
'confirmemail_body_set' => 'Neko, vjerovatno Vi, je sa IP adrese $1
je postavio adresu e-pošte računa "$2" na ovu adresu za {{SITENAME}}.

Da potvrdite da ovaj nalog stvarno pripada Vama i da reaktivirate mogućnosti e-pošte na {{SITENAME}}, otvorite ovaj link u Vašem pregledniku:

$3

Ako ovaj račun *ne* pripada Vama, pratite ovaj link da prekinete odobravanje adrese e-pošte:

$5

Ovaj kod za potvrdu će isteći u $4.',
'confirmemail_invalidated' => 'Potvrda e-mail adrese otkazana',
'invalidateemail' => 'Odustani od e-mail potvrde',

# Scary transclusion
'scarytranscludedisabled' => '[Međuwiki umetanje je isključeno]',
'scarytranscludefailed' => '[Neuspješno preusmjerenje šablona na $1]',
'scarytranscludetoolong' => '[URL je predugačak]',

# Delete conflict
'deletedwhileediting' => "'''Upozorenje''': Ova stranica je obrisana prije nego što ste počeli uređivati!",
'confirmrecreate' => "Korisnik [[User:$1|$1]] ([[User talk:$1|razgovor]]) je obrisao ovaj članak pošto ste počeli uređivanje sa razlogom:
: ''$2''

Molimo Vas da potvrdite da stvarno želite da ponovo napravite ovaj članak.",
'confirmrecreate-noreason' => 'Korisnik [[User:$1|$1]] ([[User talk:$1|razgovor]]) je obrisao ovaj članak pošto ste ga počeli uređivati. Molimo Vas da potvrdite da stvarno želite da ponovo napravite ovaj članak.',
'recreate' => 'Ponovno napravi',

'unit-pixel' => 'px',

# action=purge
'confirm_purge_button' => 'U redu',
'confirm-purge-top' => 'Da li želite obrisati keš ove stranice?',
'confirm-purge-bottom' => 'Ispražnjava keš stranice i prikazuje najsvježiju verziju.',

# action=watch/unwatch
'confirm-watch-button' => 'U redu',
'confirm-watch-top' => 'Dodajte ovu stranu na Vaš spisak praćenih članaka',
'confirm-unwatch-button' => 'U redu',
'confirm-unwatch-top' => 'Izbrišite ovu stranu sa Vašeg spiska praćenih članaka',

# Multipage image navigation
'imgmultipageprev' => '← prethodna stranica',
'imgmultipagenext' => 'slijedeća stranica →',
'imgmultigo' => 'Idi!',
'imgmultigoto' => 'Idi na stranicu $1',

# Table pager
'ascending_abbrev' => 'rast',
'descending_abbrev' => 'opad',
'table_pager_next' => 'Slijedeća stranica',
'table_pager_prev' => 'Prethodna stranica',
'table_pager_first' => 'Prva stranica',
'table_pager_last' => 'Zadnja stranica',
'table_pager_limit' => 'Pokaži $1 stavki po stranici',
'table_pager_limit_label' => 'Stavke po stranici:',
'table_pager_limit_submit' => 'Idi',
'table_pager_empty' => 'Bez rezultata',

# Auto-summaries
'autosumm-blank' => 'Uklanjanje sadržaja stranice',
'autosumm-replace' => "Zamjena stranice sa '$1'",
'autoredircomment' => 'Preusmjereno na [[$1]]',
'autosumm-new' => "Napravljena stranica sa '$1'",

# Size units
'size-bytes' => '$1 B',
'size-kilobytes' => '$1 KB',
'size-megabytes' => '$1 MB',
'size-gigabytes' => '$1 GB',

# Live preview
'livepreview-loading' => 'Punjenje…',
'livepreview-ready' => 'Punjenje… Spreman!',
'livepreview-failed' => 'Pregled uživo nije uspio! Pokušajte normalni pregled.',
'livepreview-error' => 'Spajanje nije uspjelo: $1 "$2".
Pokušajte normalni pregled.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Promjene načinjene prije manje od $1 {{PLURAL:$1|sekunde|sekunde|sekundi}} možda neće biti prikazane na ovom spisku.',
'lag-warn-high' => 'Zbog dužeg zastoja baze podataka na serveru, izmjene novije od $1 {{PLURAL:$1|sekunde|sekunde|sekundi}} možda neće biti prikazane na ovom spisku.',

# Watchlist editor
'watchlistedit-numitems' => 'Vaš spisak praćenja sadrži {{PLURAL:$1|1 naslov|$1 naslova}}, izuzimajući stranice za razgovor.',
'watchlistedit-noitems' => 'Vaš spisak praćenja ne sadrži naslove.',
'watchlistedit-normal-title' => 'Uredi spisak praćenja',
'watchlistedit-normal-legend' => 'Ukloni naslove iz spiska praćenja',
'watchlistedit-normal-explain' => 'Naslovi na Vašem spisku praćenja su prikazani ispod.
Da bi ste uklonili naslov, označite kutiju pored naslova, i kliknite "{{int:Watchlistedit-normal-submit}}".
Također možete [[Special:EditWatchlist/raw|napredno urediti spisak]].',
'watchlistedit-normal-submit' => 'Ukloni naslove',
'watchlistedit-normal-done' => '{{PLURAL:$1|1 naslov|$1 naslova}} je uklonjeno iz Vašeg spiska praćenja:',
'watchlistedit-raw-title' => 'Napredno uređivanje spiska praćenja',
'watchlistedit-raw-legend' => 'Napredno uređivanje spiska praćenja',
'watchlistedit-raw-explain' => 'Naslovi u Vašem spisku praćenja su prikazani ispod, i mogu biti uređeni dodavanjem ili brisanjem sa spiska; jedan naslov u svakom redu.
Kada završite, kliknite "{{int:Watchlistedit-raw-submit}}".
Također možete [[Special:EditWatchlist|koristiti standardni uređivač]].',
'watchlistedit-raw-titles' => 'Naslovi:',
'watchlistedit-raw-submit' => 'Ažuriraj spisak praćenja',
'watchlistedit-raw-done' => 'Vaš spisak praćenja je ažuriran.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 naslov je dodan|$1 naslova su dodana|$1 naslova je dodano}}:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 naslov je uklonjen|$1 naslova je uklonjeno}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Pregled promjena praćenih stranica',
'watchlisttools-edit' => 'Pogledaj i uredi listu praćenih članaka.',
'watchlisttools-raw' => 'Uređivanje praćenih stranica u okviru praćenja.',

# Iranian month names
'iranian-calendar-m1' => 'Farvardin (Iranski kalendar)',
'iranian-calendar-m2' => 'Ordibehesht',
'iranian-calendar-m3' => 'Khordad',
'iranian-calendar-m4' => 'Tir',
'iranian-calendar-m5' => 'Mordad',
'iranian-calendar-m6' => 'Shahrivar',
'iranian-calendar-m7' => 'Mehr',
'iranian-calendar-m8' => 'Aban',
'iranian-calendar-m9' => 'Azar',
'iranian-calendar-m10' => 'Dey',
'iranian-calendar-m11' => 'Bahman',
'iranian-calendar-m12' => 'Esfand',

# Hijri month names
'hijri-calendar-m1' => 'muharrem',
'hijri-calendar-m2' => 'safer',
'hijri-calendar-m3' => 'rebiul-evvel',
'hijri-calendar-m4' => 'rebiul-ahir',
'hijri-calendar-m5' => 'džumadel-ula',
'hijri-calendar-m6' => 'džumadel-uhra',
'hijri-calendar-m7' => 'redžeb',
'hijri-calendar-m8' => "ša'ban",
'hijri-calendar-m9' => 'ramazan',
'hijri-calendar-m10' => 'ševval',
'hijri-calendar-m11' => "zul-ka'de",
'hijri-calendar-m12' => 'zul-hidždže',

# Hebrew month names
'hebrew-calendar-m1' => 'Tishrei',
'hebrew-calendar-m2' => 'Cheshvan',
'hebrew-calendar-m3' => 'Kislev',
'hebrew-calendar-m4' => 'Tevet',
'hebrew-calendar-m5' => 'Shevat',
'hebrew-calendar-m6' => 'Adar',
'hebrew-calendar-m6a' => 'Adar I',
'hebrew-calendar-m6b' => 'Adar II',
'hebrew-calendar-m7' => 'Nisan',
'hebrew-calendar-m8' => 'Iyar',
'hebrew-calendar-m9' => 'Sivan',
'hebrew-calendar-m10' => 'Tamuz',
'hebrew-calendar-m11' => 'Av',
'hebrew-calendar-m12' => 'Elul',
'hebrew-calendar-m1-gen' => 'Tishrei',
'hebrew-calendar-m2-gen' => 'Cheshvan',
'hebrew-calendar-m3-gen' => 'Kislev',
'hebrew-calendar-m4-gen' => 'Tevet',
'hebrew-calendar-m5-gen' => 'Shevat',
'hebrew-calendar-m6-gen' => 'Adar',
'hebrew-calendar-m6a-gen' => 'Adar I',
'hebrew-calendar-m6b-gen' => 'Adar II',
'hebrew-calendar-m7-gen' => 'Nisan',
'hebrew-calendar-m8-gen' => 'Iyar',
'hebrew-calendar-m9-gen' => 'Sivan',
'hebrew-calendar-m10-gen' => 'Tamuz',
'hebrew-calendar-m11-gen' => 'Av',
'hebrew-calendar-m12-gen' => 'Elul',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|razgovor]])',
'timezone-utc' => 'KSV',

# Core parser functions
'unknown_extension_tag' => 'Nepoznata oznaka ekstenzije "$1"',
'duplicate-defaultsort' => 'Upozorenje: Postavljeni ključ sortiranja "$2" zamjenjuje raniji ključ "$1".',

# Special:Version
'version' => 'Verzija',
'version-extensions' => 'Instalirana proširenja (ekstenzije)',
'version-specialpages' => 'Posebne stranice',
'version-parserhooks' => 'Kuke parsera',
'version-variables' => 'Promjenjive',
'version-antispam' => 'Sprječavanje spama',
'version-skins' => 'Kože',
'version-other' => 'Ostalo',
'version-mediahandlers' => 'Upravljači medije',
'version-hooks' => 'Kuke',
'version-extension-functions' => 'Funkcije proširenja (ekstenzije)',
'version-parser-extensiontags' => "Parser proširenja (''tagovi'')",
'version-parser-function-hooks' => 'Kuke parserske funkcije',
'version-hook-name' => 'Naziv kuke',
'version-hook-subscribedby' => 'Pretplaćeno od',
'version-version' => '(Verzija $1)',
'version-license' => 'Licenca',
'version-poweredby-credits' => "Ova wiki je zasnovana na '''[//www.mediawiki.org/ MediaWiki]''', autorska prava zadržana © 2001-$1 $2.",
'version-poweredby-others' => 'ostali',
'version-license-info' => 'Mediawiki je slobodni softver, možete ga redistribuirati i/ili mijenjati pod uslovima GNU opće javne licence kao što je objavljeno od strane Fondacije Slobodnog Softvera, bilo u verziji 2 licence, ili (po vašoj volji) nekoj od kasniji verzija.

Mediawiki se distriburia u nadi da će biti korisna, ali BEZ IKAKVIH GARANCIJA, čak i bez ikakvih posrednih garancija o KOMERCIJALNOSTI ili DOSTUPNOSTI ZA ODREĐENU SVRHU. Pogledajte GNU opću javnu licencu za više detalja.

Trebali biste dobiti [{{SERVER}}{{SCRIPTPATH}}/KOPIJU GNU opće javne licence] zajedno s ovim programom, ako niste, pišite Fondaciji Slobodnog Softvera na adresu  Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA ili je pročitajte [//www.gnu.org/licenses/old-licenses/gpl-2.0.html online].',
'version-software' => 'Instalirani softver',
'version-software-product' => 'Proizvod',
'version-software-version' => 'Verzija',
'version-entrypoints-header-entrypoint' => 'Ulazna tačka',
'version-entrypoints-header-url' => 'URL',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Pretraga za duplim datotekama',
'fileduplicatesearch-summary' => 'Pretraga za duplim datotekama na bazi njihove haš vrijednosti.',
'fileduplicatesearch-legend' => 'Pretraga za dvojnicima',
'fileduplicatesearch-filename' => 'Ime datoteke:',
'fileduplicatesearch-submit' => 'Traži',
'fileduplicatesearch-info' => '$1 × $2 piksel<br />Veličina datoteke: $3<br />MIME vrsta: $4',
'fileduplicatesearch-result-1' => 'Datoteka "$1" nema identičnih dvojnika.',
'fileduplicatesearch-result-n' => 'Datoteka "$1" ima {{PLURAL:$2|1 identičnog|$2 identična|$2 identičnih}} dvojnika.',
'fileduplicatesearch-noresults' => 'Nije pronađena datoteka sa imenom "$1".',

# Special:SpecialPages
'specialpages' => 'Posebne stranice',
'specialpages-note' => '----
* Normalne posebne stranice.
* <strong class="mw-specialpagerestricted">Zaštićene posebne stranice.</strong>',
'specialpages-group-maintenance' => 'Izvještaji za održavanje',
'specialpages-group-other' => 'Ostale posebne stranice',
'specialpages-group-login' => 'Prijava / otvaranje računa',
'specialpages-group-changes' => 'Nedavne izmjene i evidencije',
'specialpages-group-media' => 'Mediji i postavljanje datoteka',
'specialpages-group-users' => 'Korisnici i korisnička prava',
'specialpages-group-highuse' => 'Najčešće korištene stranice',
'specialpages-group-pages' => 'Spiskovi stranica',
'specialpages-group-pagetools' => 'Alati stranice',
'specialpages-group-wiki' => 'Podaci i alati',
'specialpages-group-redirects' => 'Preusmjeravanje posebnih stranica',
'specialpages-group-spam' => 'Alati za spam',

# Special:BlankPage
'blankpage' => 'Prazna stranica',
'intentionallyblankpage' => 'Ova stranica je namjerno ostavljena prazna',

# External image whitelist
'external_image_whitelist' => ' #Ostavite ovu liniju onakva kakva je<pre>
#Stavite obične fragmente opisa (samo dio koji ide između //) ispod
#Ovi će biti spojeni sa URLovima sa vanjskih (eksternih) slika
#One koji se spoje biće prikazane kao slike, u suprotnom će se prikazati samo link
#Linije koje počinju sa # se tretiraju kao komentari
#Ovo ne razlikuje velika i mala slova

#Stavite sve regex fragmente iznad ove linije. Ostavite ovu liniju onakvu kakva je</pre>',

# Special:Tags
'tags' => 'Oznake valjane izmjene',
'tag-filter' => 'Filter [[Special:Tags|oznaka]]:',
'tag-filter-submit' => 'Filter',
'tags-title' => 'Oznake',
'tags-intro' => 'Ova stranica prikazuje spisak oznaka koje softver može staviti na svaku izmjenu i njihovo značenje.',
'tags-tag' => 'Naziv oznake',
'tags-display-header' => 'Vidljivost na spisku izmjena',
'tags-description-header' => 'Puni opis značenja',
'tags-hitcount-header' => 'Označene izmjene',
'tags-edit' => 'uređivanje',
'tags-hitcount' => '$1 {{PLURAL:$1|izmjena|izmjene|izmjena}}',

# Special:ComparePages
'comparepages' => 'Usporedi stranice',
'compare-selector' => 'Usporedi ispravljanje stranica',
'compare-page1' => 'Stranica 1',
'compare-page2' => 'Stranica 2',
'compare-rev1' => 'Ispravljanje 1',
'compare-rev2' => 'Ispravljanje 2',
'compare-submit' => 'Usporedi',
'compare-invalid-title' => 'Naslov koji ste unijeli je nevaljan.',
'compare-title-not-exists' => 'Naslov koji ste naveli ne postoji.',
'compare-revision-not-exists' => 'Izmjena koji ste naveli ne postoji.',

# Database error messages
'dberr-header' => 'Ovaj wiki ima problem',
'dberr-problems' => 'Žao nam je! Ova stranica ima određene tehničke poteškoće.',
'dberr-again' => 'Pokušajte pričekati par minuta i zatim osvježiti.',
'dberr-info' => '(ne može se spojiti server baze podataka: $1)',
'dberr-usegoogle' => 'U međuvremenu, možete pokušati pretraživanje putem Google.',
'dberr-outofdate' => 'Zapamtite da njihovi indeksi našeg sadržaja ne moraju uvijek biti ažurni.',
'dberr-cachederror' => 'Slijedeći tekst je keširana kopija zahtjevane stranice i možda nije potpuno ažurirana.',

# HTML forms
'htmlform-invalid-input' => 'Postoje određeni problemi s Vašim unosom',
'htmlform-select-badoption' => 'Vrijednost koju ste naveli nije valjana opcija.',
'htmlform-int-invalid' => 'Vrijednost koju ste naveli nije cijeli broj.',
'htmlform-float-invalid' => 'Vrijednost koju ste unijeli nije broj.',
'htmlform-int-toolow' => 'Vrijednost koju ste naveli je ispod minimuma od $1',
'htmlform-int-toohigh' => 'Vrijednost koju ste naveli je iznad maksimuma od $1',
'htmlform-required' => 'Ova vrijednost je obavezna',
'htmlform-submit' => 'Pošalji',
'htmlform-reset' => 'Vrati izmjene',
'htmlform-selectorother-other' => 'Ostalo',

# SQLite database support
'sqlite-has-fts' => '$1 sa podrškom pretrage cijelog teksta',
'sqlite-no-fts' => '$1 bez podrške pretrage cijelog teksta',

# New logging system
'logentry-delete-delete' => '$1 je {{GENDER:$2|obrisao|obrisala}} stranicu $3',
'logentry-delete-restore' => '$1 je {{GENDER:$2|vratio|vratila}} stranicu $3',
'logentry-delete-event' => '$1 je {{GENDER:$2|promijenio|promijenila}} vidljivost {{PLURAL:$5|događaja|$5 događaja}} u evidenciji na $3: $4',
'logentry-delete-revision' => '$1 je {{GENDER:$2|promijenio|promijenila}} vidljivost {{PLURAL:$5|izmjene|$5 izmjene|$5 izmjena}} na stranici $3: $4',
'logentry-delete-event-legacy' => '$1 je {{GENDER:$2|promijenio|promijenila}} vidljivost događaja u evidenciji na $3',
'logentry-delete-revision-legacy' => '$1 je {{GENDER:$2|promijenio|promijenila}} vidljivost izmjena na stranici $3',
'logentry-suppress-delete' => '$1 je {{GENDER:$2|potisnuo|potisnula}} stranicu $3',
'logentry-suppress-event' => '$1 je tajno {{GENDER:$2|promijenio|promijenila}} vidljivost {{PLURAL:$5|događaja|$5 događaja}} u evidenciji na $3: $4',
'logentry-suppress-revision' => '$1 je tajno {{GENDER:$2|promijenio|promijenila}} vidljivost {{PLURAL:$5|izmjene|$5 izmjene|$5 izmjena}} na stranici $3: $4',
'logentry-suppress-event-legacy' => '$1 je tajno {{GENDER:$2|promijenio|promijenila}} vidljivost događaja u evidenciji na $3',
'logentry-suppress-revision-legacy' => '$1 je tajno {{GENDER:$2|promijenio|promijenila}} vidljivost izmjena na stranici $3',
'revdelete-content-hid' => 'skriveni sadržaj',
'revdelete-summary-hid' => 'sažetak izmjene je sakriven',
'revdelete-uname-hid' => 'sažetak izmjene je sakriven',
'revdelete-content-unhid' => 'sadržaj je otkriven',
'revdelete-summary-unhid' => 'sažetak izmjene je otkriven',
'revdelete-uname-unhid' => 'korisničko ime je otkriveno',
'revdelete-restricted' => 'primijenjena ograničenja za administratore',
'revdelete-unrestricted' => 'uklonjena ograničenja za administratore',
'logentry-move-move' => '$1 je {{GENDER:$2|premjestio|premjestila}} stranicu $3 na $4',
'logentry-move-move-noredirect' => '$1 je {{GENDER:$2|premjestio|premjestila}} stranicu $3 na $4 bez ostavljanja preusmjerenja',
'logentry-move-move_redir' => '$1 je {{GENDER:$2|premjestio|premjestila}} stranicu $3 na $4 preko preusmjeravanja',
'logentry-move-move_redir-noredirect' => '$1 je {{GENDER:$2|premjestio|premjestila}} stranicu $3 na $4 preko preusmjeravanja bez ostavljanja preusmjeravanja',
'logentry-patrol-patrol' => '$1 je {{GENDER:$2|označio|označila}} izmjenu $4 stranice $3 pregledanim',
'logentry-patrol-patrol-auto' => '$1 je automatski {{GENDER:$2|označio|označila}} izmjenu $4 stranice $3 pregledanim',
'logentry-newusers-newusers' => 'Korisnički račun $1 je {{GENDER:$2|napravljen}}',
'logentry-newusers-create' => 'Korisnički račun $1 je {{GENDER:$2|napravljen}}',
'logentry-newusers-create2' => '$3 je {{GENDER:$2|napravio|napravila}} korisnički račun $1',
'logentry-newusers-byemail' => 'Korisnički račun $3 je {{GENDER:$2|napravio|napravila}} $1 i lozinka/šifra je poslana putem e-maila',
'logentry-newusers-autocreate' => 'Korisnički račun $1 je automatski {{GENDER:$2|napravljen}}',
'logentry-rights-rights' => '$1 je {{GENDER:$2|promijenio|promijenila|promijenio}} članstvo grupe za $3 iz $4 u $5',
'logentry-rights-rights-legacy' => '$1 je {{GENDER:$2|promijenio|promijenila|promijenio}} članstvo grupe za $3',
'logentry-rights-autopromote' => '$1 {{GENDER:$1|je automatski promijenjeno članstvo|su automatski promijenjena članstva}} iz $4 u $5',
'rightsnone' => '(nema)',

# Feedback
'feedback-bugornote' => 'Ako ste spremni detaljno opisati tehnički problem molimo [$1 prijavite "bug" (grešku)].
Inače, možete ispuniti jednostavan obrazac ispod. Vaš komentar biti će dodan na stranicu "[$3 $2]", zajedno s vašim korisničkim imenom i internetskog preglednika koji koristite.',
'feedback-subject' => 'Tema:',
'feedback-message' => 'Poruka:',
'feedback-cancel' => 'Odustani',
'feedback-submit' => 'Pošalji povratnu informaciju',
'feedback-adding' => 'Dodajem povratne informacije na stranicu...',
'feedback-error1' => 'Greška: Neprepoznati rezultat od API',
'feedback-error2' => 'Greška: Uređivanje nije uspjelo',
'feedback-error3' => 'Greška: Nema odgovora od API',
'feedback-thanks' => 'Hvala! Vaša povratna informacija je postavljena na stranicu „[$2 $1]“.',
'feedback-close' => 'Završeno',
'feedback-bugcheck' => 'Odlično! Molimo provjerite da se ne radi o nekom [$1 poznatom "bugu"].',
'feedback-bugnew' => 'Provjereno. Prijavi novu grešku',

# Search suggestions
'searchsuggest-search' => 'Traži',
'searchsuggest-containing' => 'sadrži...',

# API errors
'api-error-badaccess-groups' => 'Nemate ovlasti da postavljate datoteke na ovoj wiki.',
'api-error-badtoken' => 'Unutrašnja greška: token nije ispravan.',
'api-error-copyuploaddisabled' => 'Postavljanja putem URL-a su onemogućena na ovom serveru.',
'api-error-duplicate' => 'Već postoji {{PLURAL:$1|[$2 druga datoteka]|[$2 druge datoteke]}} na ovoj stranici sa istim sadržajem',
'api-error-duplicate-archive' => '{{PLURAL:$1|Postojala je [$2 druga datoteka]|Postojale su [$2 neke druge datoteke]}} na sajtu sa istim sadržajem, ali {{PLURAL:$1|je obrisana|su obrisane}}.',
'api-error-duplicate-archive-popup-title' => '{{PLURAL:$1|Dupla datoteka|Duple datoteke}} koje su već obrisane',
'api-error-duplicate-popup-title' => '{{PLURAL:$1|Dvojna datoteka|Dvojne datoteke}}',
'api-error-empty-file' => 'Datoteka koju ste poslali je bila prazna.',
'api-error-emptypage' => 'Stvaranje novih praznih stranica nije dozvoljeno.',
'api-error-fetchfileerror' => 'Unutrašnja greška: pojavio se neki problem pri dobijanju podataka o datoteci.',
'api-error-fileexists-forbidden' => 'Datoteka s imenom "$1" već postoji, i ne može biti zamijenjena.',
'api-error-fileexists-shared-forbidden' => 'Datoteka s imenom "$1" već postoji u zajedničkom spremištu i ne može biti prepisana.',
'api-error-file-too-large' => 'Datoteka koju ste poslali je bila prevelika.',
'api-error-filename-tooshort' => 'Ime datoteke je prekratko.',
'api-error-filetype-banned' => 'Ova vrsta datoteke je zabranjena.',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|nije dopušteni vrsta datoteke|su nedopušteni vrste datoteke|su nedopušteni vrste datoteka}}. {{PLURAL:$3|Dopuštena vrsta datoteke je|Dopuštene vrste datoteka su}} $2.',
'api-error-filetype-missing' => 'Datoteci nedostaje nastavak.',
'api-error-hookaborted' => 'Izmjena koji ste pokušali načiniti je obustavljena preko kuke proširenja.',
'api-error-http' => 'Unutrašnja greška: ne može se spojiti na server.',
'api-error-illegal-filename' => 'Ime datoteke nije dopušteno.',
'api-error-internal-error' => 'Unutrašnja greška: pojavio se neki problem sa obradom vašeg postavljanja na wiki.',
'api-error-invalid-file-key' => 'Unutrašnja greška: datoteka nije pronađena u privremenom skladištu.',
'api-error-missingparam' => 'Unutrašnja greška: nedostaju parametri u zahtjevu.',
'api-error-missingresult' => 'Unutrašnja greška: ne može se otkriti da li je kopiranje uspjelo.',
'api-error-mustbeloggedin' => 'Morate biti prijavljeni da biste postavljali datoteke.',
'api-error-mustbeposted' => 'Postoji greška u ovom softveru; ne koristi pravilan HTTP metod.',
'api-error-noimageinfo' => 'Postavljanje je uspjelo, ali server nam nije dao nikakvu informaciju o datoteci.',
'api-error-nomodule' => 'Unutrašnja greška: nije postavljen modul za postavljanje.',
'api-error-ok-but-empty' => 'Unutrašnja greška: nema odgovora od servera.',
'api-error-overwrite' => 'Pisanje preko postojeće datoteke nije dopušteno.',
'api-error-stashfailed' => 'Unutrašnja greška: server nije mogao da spremi privremenu datoteku.',
'api-error-publishfailed' => 'Unutrašnja greška: Server nije uspio objaviti privremenu datoteku.',
'api-error-timeout' => 'Server nije odgovorio unutar očekivanog vremena.',
'api-error-unclassified' => 'Desila se nepoznata greška',
'api-error-unknown-code' => 'Nepoznata greška: "$1"',
'api-error-unknown-error' => 'Unutrašnja greška: desila se neka greška pri pokušaju postavljanja vaše datoteke.',
'api-error-unknown-warning' => 'Nepoznato upozorenje: $1',
'api-error-unknownerror' => 'Nepoznata greška: "$1"',
'api-error-uploaddisabled' => 'Postavljanje je onemogućeno na ovoj wiki.',
'api-error-verification-error' => 'Ova datoteka je možda oštećenja ili ima pogrešan nastavak.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|sekunda|sekunde}}',
'duration-minutes' => '$1 {{PLURAL:$1|minut|minute|minuta}}',
'duration-hours' => '$1 {{PLURAL:$1|sat|sata|sati}}',
'duration-days' => '$1 {{PLURAL:$1|dan|dana}}',
'duration-weeks' => '$1 {{PLURAL:$1|sedmica|sedmice|sedmica}}',
'duration-years' => '$1 {{PLURAL:$1|godina|godine|godina}}',
'duration-decades' => '$1 {{PLURAL:$1|decenija|decenije|decenija}}',
'duration-centuries' => '$1 {{PLURAL:$1|vijek|vijeka|vijekova}}',
'duration-millennia' => '$1 {{PLURAL:$1|milenij|milenija}}',

);
