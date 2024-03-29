<?php
/** Minangkabau (Baso Minangkabau)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Bennylin
 * @author Iwan Novirion
 * @author Luthfi94
 * @author Naval Scene
 * @author Rahmatdenas
 * @author SpartacksCompatriot
 * @author VoteITP
 */

$fallback = 'id';

$namespaceNames = array(
	NS_FILE             => 'Berkas',
	NS_TEMPLATE         => 'Templat',
);

$specialPageAliases = array(
	'Activeusers'               => array( 'PanggunoAktip', 'Pangguno_aktip' ),
	'Allmessages'               => array( 'PasanSistim', 'Pasan_sistem' ),
	'Allpages'                  => array( 'DaptaLaman', 'Dapta_laman' ),
	'Ancientpages'              => array( 'LamanLamo', 'Laman_lamo' ),
	'Badtitle'                  => array( 'JudulBuruak', 'Judul_indak_rancak' ),
	'Blankpage'                 => array( 'LamanKosong', 'Laman_kosong' ),
	'Block'                     => array( 'Blokir', 'IPkanaiBlok', 'PanggunoTablokir' ),
	'Blockme'                   => array( 'BlokDen', 'BlokirAmbo' ),
	'Booksources'               => array( 'SumberBuku', 'Sumber_buku' ),
	'BrokenRedirects'           => array( 'PangaliahanRusak', 'Pangaliahan_rusak' ),
	'Categories'                => array( 'Kategori' ),
	'ChangeEmail'               => array( 'GantiSurel', 'Ganti_surel' ),
	'ChangePassword'            => array( 'GantiSandi', 'TukaSandi', 'TukaKatoSandi' ),
	'ComparePages'              => array( 'BandiangkanLaman', 'Bandiangkan_laman' ),
	'Confirmemail'              => array( 'PastikanSurel', 'Pastikan_surel' ),
	'Contributions'             => array( 'SuntiangPangguno', 'Suntiangan_pangguno' ),
	'CreateAccount'             => array( 'BuekAkun', 'Buek_akun' ),
	'Deadendpages'              => array( 'LamanBuntu', 'Laman_buntu' ),
	'DeletedContributions'      => array( 'SuntiangDihapuih', 'Suntiangan_kanai_hapuih' ),
	'Disambiguations'           => array( 'SamoArti', 'Samo_arti' ),
	'EditWatchlist'             => array( 'SuntiangDaptaPantau', 'Suntiang_dapta_pantau' ),
	'Emailuser'                 => array( 'SurelPangguno', 'Surel_pangguno' ),
	'Export'                    => array( 'Ekspor' ),
	'Fewestrevisions'           => array( 'ParubahanTasaketek', 'Parubahan_tasaketek' ),
	'FileDuplicateSearch'       => array( 'CariBerkasDuplikat', 'Cari_berkas_duplikat' ),
	'Filepath'                  => array( 'LokasiBerkas', 'Lokasi_berkas' ),
	'Import'                    => array( 'Impor' ),
	'Invalidateemail'           => array( 'BatalSurel', 'Batalkan_surel' ),
	'JavaScriptTest'            => array( 'TesSkripJava', 'Tes_skrip_Java' ),
	'BlockList'                 => array( 'DaptaBlokir', 'Dapta_pemblokiran', 'Dapta_IP_diblok' ),
	'LinkSearch'                => array( 'CariTautan', 'Cari_tautan' ),
	'Listadmins'                => array( 'DaptaPanguruih' ),
	'Listfiles'                 => array( 'DaptaBerkas', 'DaptaGamba' ),
	'Listgrouprights'           => array( 'DaptaHakKalompok', 'HakKalompokPangguno' ),
	'Listredirects'             => array( 'DaptaPangaliahan', 'Dapta_pangaliahan' ),
	'Listusers'                 => array( 'DaptaPangguno', 'Dapta_pangguno' ),
	'Lockdb'                    => array( 'KunciBD', 'Kunci_basisdata' ),
	'Log'                       => array( 'Catatan' ),
	'Lonelypages'               => array( 'LamanYatim', 'Laman_indak_batuan' ),
	'Longpages'                 => array( 'LamanPanjang', 'Laman_panjang' ),
	'MergeHistory'              => array( 'SajarahPanggabuangan', 'Sajarah_panggabuangan' ),
	'MIMEsearch'                => array( 'CariMIME', 'PancarianMIME' ),
	'Mostcategories'            => array( 'KategoriTabanyak', 'Kategori_tabanyak' ),
	'Mostimages'                => array( 'BerkasAcokDipakai', 'BerkasTabanyak', 'GambaTabanyak' ),
	'Mostinterwikis'            => array( 'InterwikiAcokDipakai' ),
	'Mostlinked'                => array( 'LamanTautanTabanyak', 'TautanTabanyak' ),
	'Mostlinkedcategories'      => array( 'KategoriBatauikTabanyak', 'KategoriAcokTapakai' ),
	'Mostlinkedtemplates'       => array( 'TemplatTautanTabanyak', 'TemplatAcokDipakai' ),
	'Mostrevisions'             => array( 'ParubahanTabanyak' ),
	'Movepage'                  => array( 'PindahLaman', 'Pindahkan_laman' ),
	'Mycontributions'           => array( 'SuntianganAmbo', 'Suntiangan_ambo' ),
	'Mypage'                    => array( 'LamanDenai', 'Laman_denai' ),
	'Mytalk'                    => array( 'DiskusiAmbo' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Garih bawahi tautan:',
'tog-justify' => 'Ratokan paragraf',
'tog-hideminor' => 'Suruakan suntiangan ketek di parubahan baru',
'tog-hidepatrolled' => 'Suruakan suntiangan nan lah dipatroli di parubahan tabaru',
'tog-newpageshidepatrolled' => 'Suruakan laman nan lah dipatroli dari daftar laman baru',
'tog-extendwatchlist' => 'Kambangan daftar pantau untuak mancaliak kasado parubahan, indak nan baru se',
'tog-usenewrc' => 'Gunoan tampilan parubahan tingkek lanjuik (paralu JavaScript)',
'tog-numberheadings' => 'Agiah nomor judul sacaro otomatis',
'tog-showtoolbar' => 'Tunjuakan bilah panyuntiangan (paralu JavaScript)',
'tog-editondblclick' => 'Suntiang laman jo klik duo kali (paralu JavaScript)',
'tog-editsection' => 'Aktipan panyuntiangan subbagian malalui pautan [suntiang]',
'tog-editsectiononrightclick' => 'Aktipan bagian panyuntiangan jo mangklik kanan pado judul bagian (paralu JavaScript)',
'tog-showtoc' => 'Tunjuakan daftar isi (untuak laman nan labiah dari 3 subbagian)',
'tog-rememberpassword' => 'Ingek log masuak denai di paramban ko (salamo $1 {{PLURAL:$1|hari}})',
'tog-watchcreations' => 'Tambahan laman nan den buek jo gambar nan den unggah ka daftar pantau',
'tog-watchdefault' => 'Tambahan laman jo gambar nan den suntiang ka daftar pantau',
'tog-watchmoves' => 'Tambahan laman jo gambar nan den pindah ka daftar pantau',
'tog-watchdeletion' => 'Tambahan laman jo gambar nan den hapuih ka daftar pantau',
'tog-minordefault' => 'Tandoi kasado suntiangan sabagai suntiangan ketek sacaro baku',
'tog-previewontop' => 'Tunjuakan pratonton sabalun kotak suntiang',
'tog-previewonfirst' => 'Tunjuakan pratonton pado suntiangan patamo',
'tog-nocache' => 'Matikan panyinggahan laman paramban',
'tog-enotifwatchlistpages' => 'Kiriman surel, kok laman atau gambar pado daftar pantau Ambo barubah',
'tog-enotifusertalkpages' => 'Kiriman surel, koq laman maota Ambo barubah',
'tog-enotifminoredits' => 'Kirimkan surel juo untuk saketek suntingan pado laman jo gambar',
'tog-enotifrevealaddr' => 'Tunjuakan alamaik surel ambo pado pambaritauan surel',
'tog-shownumberswatching' => 'Tunjuakan jumlah pamantau',
'tog-oldsig' => 'Tando tangan kini:',
'tog-fancysig' => 'Jadikan tando tangan manjadi teks wiki (indak jo tautan otomatis)',
'tog-showjumplinks' => 'Aktifkan pautan bantuan "langsuang ka"',
'tog-uselivepreview' => 'Gunoan pratonton langsuang (paralu JavaScript) (uji-cubo)',
'tog-forceeditsummary' => 'Ingekan ambo bilo kotak ikhtisar suntiangan kosong',
'tog-watchlisthideown' => 'Suruakan suntiangan surang pado daftar pantau',
'tog-watchlisthidebots' => 'Suruakan suntiangan bot pado daftar pantau',
'tog-watchlisthideminor' => 'Suruakan suntiangan ketek pado daftar pantau',
'tog-watchlisthideliu' => 'Suruakan suntiangan pangguno masuak log pado daftar pantau',
'tog-watchlisthideanons' => 'Suruakan suntiangan pangguno anonim pado daftar pantau',
'tog-watchlisthidepatrolled' => 'Suruakan suntiangan tapatroli pado daftar pantau',
'tog-ccmeonemails' => 'Kiriman Ambo salinan surel nan dikiriman ka urang lain',
'tog-diffonly' => 'Jan tampilan isi laman di bawah pabedoan suntiangan',
'tog-showhiddencats' => 'Tunjuakan kategori tasuruak',
'tog-norollbackdiff' => 'Jan tampilan pabedoan sasudah malakukan pangambalian',
'tog-useeditwarning' => 'Ingekan denai kok denai maninggakan laman suntiang sabalun manyimpan parubahan',

'underline-always' => 'Taruih',
'underline-never' => 'Indak pernah',
'underline-default' => 'Kulik atau pangaturan paramban web',

# Font style option in Special:Preferences
'editfont-style' => 'Gaya tulisan komputer pado kotak panyuntiangan:',
'editfont-default' => 'Pangaturan paramban web',
'editfont-monospace' => 'Tulisan Monospace',
'editfont-sansserif' => 'Tulisan Sans-serif',
'editfont-serif' => 'Tulisan Serif',

# Dates
'sunday' => 'Akaik',
'monday' => 'Sinayan',
'tuesday' => 'Salasa',
'wednesday' => "Raba'a",
'thursday' => 'Kamih',
'friday' => 'Jumaik',
'saturday' => 'Sabtu',
'sun' => 'Min',
'mon' => 'Sin',
'tue' => 'Sal',
'wed' => 'Rab',
'thu' => 'Kam',
'fri' => 'Jum',
'sat' => 'Sat',
'january' => 'Januari',
'february' => 'Pebruari',
'march' => 'Maret',
'april' => 'April',
'may_long' => 'Mai',
'june' => 'Juni',
'july' => 'Juli',
'august' => 'Agustus',
'september' => 'September',
'october' => 'Oktober',
'november' => 'Nopember',
'december' => 'Desember',
'january-gen' => 'Januari',
'february-gen' => 'Pebruari',
'march-gen' => 'Maret',
'april-gen' => 'April',
'may-gen' => 'Mai',
'june-gen' => 'Juni',
'july-gen' => 'Juli',
'august-gen' => 'Agustus',
'september-gen' => 'September',
'october-gen' => 'Oktober',
'november-gen' => 'Nopember',
'december-gen' => 'Desember',
'jan' => 'Jan',
'feb' => 'Peb',
'mar' => 'Mar',
'apr' => 'Apr',
'may' => 'Mai',
'jun' => 'Jun',
'jul' => 'Jul',
'aug' => 'Ags',
'sep' => 'Sep',
'oct' => 'Okt',
'nov' => 'Nop',
'dec' => 'Des',
'january-date' => '$1 Januari',
'february-date' => '$1 Pebruari',
'march-date' => '$1 Maret',
'april-date' => '$1 April',
'may-date' => '$1 Mai',
'june-date' => '$1 Juni',
'july-date' => '$1 Juli',
'august-date' => '$1 Agustus',
'september-date' => '$1 September',
'october-date' => '$1 Oktober',
'november-date' => '$1 Nopember',
'december-date' => '$1 Desember',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Kategori}}',
'category_header' => 'Laman pado kategori "$1"',
'subcategories' => 'Subkategori',
'category-media-header' => 'Laman/Media dalam kategori "$1"',
'category-empty' => "''Kini ko, indak ado laman ataupun media dalam kategori ko.''",
'hidden-categories' => '{{PLURAL:$1|Kategori tasuruak}}',
'hidden-category-category' => 'Kategori tasuruak',
'category-subcat-count' => '{{PLURAL:$2|Kategori ko punyo {{PLURAL:$1|$1 subkategori}}, dari total $2.}}',
'category-subcat-count-limited' => 'Kategori ko punyo {{PLURAL:$1|$1 subkategori}} barikuik.',
'category-article-count' => '{{PLURAL:$2|Kategori ko punyo {{PLURAL:$1|$1 laman}}, dari total $2.}}',
'category-article-count-limited' => 'Kategori ko punyo {{PLURAL:$1|$1 laman}} barikuik.',
'category-file-count' => '{{PLURAL:$2|Kategori ko ado {{PLURAL:$1|$1 berkas}}, dari total $2 berkas.}}',
'category-file-count-limited' => 'Kategori ko ado {{PLURAL:$1|$1 berkas}} barikuik.',
'listingcontinuesabbrev' => 'samb.',
'index-category' => 'Laman nan diindeks',
'noindex-category' => 'Laman nan indak diindeks',
'broken-file-category' => 'Laman jo gamba rusak',

'about' => 'Perihal',
'article' => 'Artikel',
'newwindow' => '(bukak di jendela baru)',
'cancel' => 'Batalkan',
'moredotdotdot' => 'Lainnyo...',
'morenotlisted' => 'Salabiahnyo...',
'mypage' => 'Laman',
'mytalk' => 'Maota',
'anontalk' => 'Diskusi IP ko',
'navigation' => 'Navigasi',
'and' => '&#32;jo',

# Cologne Blue skin
'qbfind' => 'Cari',
'qbbrowse' => 'Jalajah',
'qbedit' => 'Suntiang',
'qbpageoptions' => 'Laman ko',
'qbmyoptions' => 'Laman denai',
'qbspecialpages' => 'Laman istimewa',
'faq' => 'FAQ',
'faqpage' => 'Project:FAQ',

# Vector skin
'vector-action-addsection' => 'Bagian baru',
'vector-action-delete' => 'Hapuih',
'vector-action-move' => 'Pindahkan',
'vector-action-protect' => 'Linduangkan',
'vector-action-undelete' => 'Pambatalan pangapuihan',
'vector-action-unprotect' => 'Tuka palinduangan',
'vector-simplesearch-preference' => 'Aktipan kotak pancarian sadarano (hanyo kulik Vector)',
'vector-view-create' => 'Buek',
'vector-view-edit' => 'Suntiang',
'vector-view-history' => 'Riwayaik',
'vector-view-view' => 'Baco',
'vector-view-viewsource' => 'Caliak sumber',
'actions' => 'Tindakan',
'namespaces' => 'Ruang namo',
'variants' => 'Variasi',

'navigation-heading' => 'Menu navigasi',
'errorpagetitle' => 'Kasalahan',
'returnto' => 'Baliak ka $1',
'tagline' => 'Dari {{SITENAME}}',
'help' => 'Bantuan',
'search' => 'Cari',
'searchbutton' => 'Cari',
'go' => 'Tuju',
'searcharticle' => 'Tuju',
'history' => 'Riwayaik laman',
'history_short' => 'Riwayaik',
'updatedmarker' => 'diubah samanjak kunjuangan tarakhia ambo',
'printableversion' => 'Versi cetak',
'permalink' => 'Pautan parmanen',
'print' => 'Cetak',
'view' => 'Baco',
'edit' => 'Suntiang',
'create' => 'Buek',
'editthispage' => 'Suntiang laman ko',
'create-this-page' => 'Buek laman ko',
'delete' => 'Hapuih',
'deletethispage' => 'Hapuih laman ko',
'undelete_short' => 'Batal hapuih $1 {{PLURAL:$1|suntiangan}}',
'viewdeleted_short' => 'Lihek {{PLURAL:$1|$1 suntiangan}} nan dihapuih',
'protect' => 'Linduangkan',
'protect_change' => 'ubah',
'protectthispage' => 'Linduangi laman ko',
'unprotect' => 'Tuka palinduangan',
'unprotectthispage' => 'Tuka palindungan laman ko',
'newpage' => 'Laman baru',
'talkpage' => 'Rundiangkan laman ko',
'talkpagelinktext' => 'maota',
'specialpage' => 'Laman istimewa',
'personaltools' => 'Pakakeh pribadi',
'postcomment' => 'Bagian baru',
'articlepage' => 'Lihek isi laman',
'talk' => 'Rundiang',
'views' => 'Caliak',
'toolbox' => 'Kotak pakakeh',
'userpage' => 'Lihek laman pangguno',
'projectpage' => 'Caliak laman proyek',
'imagepage' => 'Caliak laman berkas',
'mediawikipage' => 'Caliak laman pasan',
'templatepage' => 'Caliak laman templat',
'viewhelppage' => 'Caliak laman bantuan',
'categorypage' => 'Caliak laman kategori',
'viewtalkpage' => 'Caliak laman diskusi',
'otherlanguages' => 'Dalam bahaso lain',
'redirectedfrom' => '(Dialiahkan dari $1)',
'redirectpagesub' => 'Laman pangaliahan',
'lastmodifiedat' => 'Laman ko tarakhia diubah pado pukua $2, tanggal $1.',
'viewcount' => 'Laman ko lah dicaliak {{PLURAL:$1|$1 kali}}.',
'protectedpage' => 'Laman nan dilinduangi',
'jumpto' => 'Lompek ka:',
'jumptonavigation' => 'navigasi',
'jumptosearch' => 'cari',
'view-pool-error' => 'Maaf, server sadang kalabiahan baban.
Banyak bana nan barusaho mancaliak laman ko.
Tunggu santa koq nio mancubo baliak ka laman ko.

$1',
'pool-timeout' => 'Abih wakatu',
'pool-queuefull' => 'Antrian panuah',
'pool-errorunknown' => 'Kasalahan indak jaleh',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'Tantang {{SITENAME}}',
'aboutpage' => 'Project:Tantang_{{SITENAME}}',
'copyright' => 'Isi tasadio dalam $1',
'copyrightpage' => '{{ns:project}}:Hak cipta',
'currentevents' => 'Kajadian kini ko',
'currentevents-url' => 'Project:Kajadian kini ko',
'disclaimers' => 'Sanggahan umum',
'disclaimerpage' => 'Project:Sanggahan umum',
'edithelp' => 'Bantuan suntiangan',
'edithelppage' => 'Help:Panyuntiangan',
'helppage' => 'Help:Isi',
'mainpage' => 'Palanta',
'mainpage-description' => 'Palanta',
'policy-url' => 'Project:Kabijakan jo padoman',
'portal' => 'Portal komunitas',
'portal-url' => 'Project:Portal komunitas',
'privacy' => 'Kabijakan privasi',
'privacypage' => 'Project:Kabijakan privasi',

'badaccess' => 'Kasalahan hak akses',
'badaccess-group0' => 'Sanak indak diizinkan untuak malakuan tindakan ko.',
'badaccess-groups' => 'Tindakan nan Sanak nio babateh untuak pangguno dalam {{PLURAL:$2|kalompok}}: $1.',

'versionrequired' => 'Dibutuahan MediaWiki versi $1',
'versionrequiredtext' => 'MediaWiki versi $1 dibutuahan untuak manggunoan laman ko. Caliak [[Special:Version|versi laman]]',

'ok' => 'OK',
'pagetitle' => '$1 - {{SITENAME}} bahaso Minang',
'pagetitle-view-mainpage' => '{{SITENAME}} bahaso Minang',
'backlinksubtitle' => '← $1',
'retrievedfrom' => 'Didapek dari "$1"',
'youhavenewmessages' => 'Sanak punyo $1 ($2).',
'newmessageslink' => 'pasan baru',
'newmessagesdifflink' => 'parubahan tarakhia',
'youhavenewmessagesfromusers' => 'Sanak mandapek $1 dari {{PLURAL:$3|$3 pangguno}} ($2)',
'youhavenewmessagesmanyusers' => 'Sanak mandapek $1 dari banyak pangguno ($2)',
'newmessageslinkplural' => '{{PLURAL:$1|pasan baru}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|parubahan}} taakhia',
'youhavenewmessagesmulti' => 'Sanak mandapek pasan baru pado $1',
'editsection' => 'suntiang',
'editold' => 'suntiang',
'viewsourceold' => 'caliak sumber',
'editlink' => 'suntiang',
'viewsourcelink' => 'caliak sumber',
'editsectionhint' => 'Suntiang bagian: $1',
'toc' => 'Daftar isi',
'showtoc' => 'tampakan',
'hidetoc' => 'suruakan',
'collapsible-collapse' => 'Ketekan',
'collapsible-expand' => 'Kambangan',
'thisisdeleted' => 'Caliak atau kambalian $1?',
'viewdeleted' => 'Caliak $1?',
'restorelink' => '{{PLURAL:$1|$1 suntiangan}} lah dihapuih',
'feedlinks' => 'Umpan:',
'feed-invalid' => 'Tipe pamintaan umpan indak tapek.',
'feed-unavailable' => 'Sindikasi umpan indak tasadio',
'site-rss-feed' => '$1 umpan RSS',
'site-atom-feed' => '$1 umpan Atom',
'page-rss-feed' => '"$1" umpan RSS',
'page-atom-feed' => '"$1" umpan Atom',
'red-link-title' => '$1 (laman indak ado)',
'sort-descending' => 'Uruikan manurun',
'sort-ascending' => 'Uruikan manaik',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Laman',
'nstab-user' => 'Laman pangguno',
'nstab-media' => 'Laman media',
'nstab-special' => 'Laman istimewa',
'nstab-project' => 'Laman proyek',
'nstab-image' => 'Berkas',
'nstab-mediawiki' => 'Pasan',
'nstab-template' => 'Templat',
'nstab-help' => 'Bantuan',
'nstab-category' => 'Kategori',

# Main script and global functions
'nosuchaction' => 'Indak ado tindakan tasabuik',
'nosuchactiontext' => 'Tindakan nan diminta dek URL tasabuik indak valid. Sanak mungkin salah mangetikkan URL, atau mangikuik pautan nan salah. Iko mungkin manunjuakan adonyo suatu bug pado parangkaik lunak nan dipagunoan dek {{SITENAME}}.',
'nosuchspecialpage' => 'Indak ado laman istimewa tasabuik',
'nospecialpagetext' => '<strong>Sanak mamintak laman istimewa nan indak sah.</strong>

Daftar laman istimewa nan sah dapek dicaliak di [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Kasalahan',
'databaseerror' => 'Kasalahan basis data',
'dberrortext' => 'Kasalahan sintaks pado pamintaan basis data lah tajadi.
Iko mungkin manandokan adonyo bug pado parangkek lunak.
Pamintaan basis data nan tarakhir adalah:
<blockquote><code>$1</code></blockquote>
dari dalam fungsi "<code>$2</code>".
Basis data manghasilkan kasalahan "<samp>$3: $4</samp>".',
'dberrortextcl' => 'Ado kasalahan sintaks pado pamintaan basis data.
Pamintaan basis data nan terakhir adalah:
"$1"
dari dalam fungsi "$2".
Basis data manghasilkan kasalahan "$3: $4".',
'laggedslavemode' => 'Paringatan: Laman mungkin indak barisi parubahan tabaru.',
'readonly' => 'Basis data dikunci',
'enterlockreason' => 'Masuakkan alasan panguncian, tamasuak pakiraan bilo kunci akan dibuka',
'readonlytext' => 'Basis data sadang dikunci tahadok masuakan baru. Panguruih nan malakukan panguncian mamberikan panjalehan sabagai berikut: <p>$1',
'missing-article' => 'Basisdata indak dapek manamukan teks dari laman nan saharuihnyo ado, yaitu "$1" $2.

Hal ko biasonyo disababkan dek pautan usang ka pabaikkan tadahulu laman nan alah dihapuih.

Jikok bukan ko panyababnyo, Sanak mungkin alah manamukan sabuah bug dalam pakakeh lunak.
Silakan laporkan hal iko ka [[Special:ListUsers/sysop|pangurus]], sarato manyabuikkan alamaik URL nan dituju.',
'missingarticle-rev' => '(revisi#: $1)',
'missingarticle-diff' => '(Bedo: $1, $2)',
'readonly_lag' => 'Basis data alah dikunci otomatis salagi basis data sakunder malakukan sinkronisasi jo basis data utamo',
'internalerror' => 'Kasalahan internal',
'internalerror_info' => 'Kasalahan internal: $1',
'fileappenderrorread' => 'Indak dapek mambaco "$1" saat panambahan.',
'fileappenderror' => 'Indak dapek mamasuakkan "$1" ka "$2".',
'filecopyerror' => 'Indak dapek manyalin berkas "$1" ke "$2".',
'filerenameerror' => 'Indak dapek maubah namo berkas "$1" manjadi "$2".',
'filedeleteerror' => 'Indak dapek mahapuih berkas "$1".',
'directorycreateerror' => 'Indak dapek mambuek direktori "$1".',
'filenotfound' => 'Indak dapek manamukan berkas "$1".',
'fileexistserror' => 'Indak dapek manulih berkas "$1": berkas lah ado.',
'unexpected' => 'Nilai di lua jangkauan: "$1"="$2".',
'formerror' => 'Kasalahan: Indak dapek mangiriman formulir',
'badarticleerror' => 'Tindakan iko indak dapek dilaksanakan di laman iko.',
'cannotdelete' => 'Laman atau berkas "$1" indak dapek dihapuih.
Mungkin alah dihapuih jo urang lain.',
'cannotdelete-title' => 'Indak dapek mangapuih laman "$1"',
'delete-hook-aborted' => 'Pengapusan batal jo hook.
Indak ado keterangan.',
'badtitle' => 'Judul indak sah',
'badtitletext' => 'Pamintaan judul laman indak sah, kosong, atau antarbaso atau antarwiki nan salah sambuang. Mungkin juo ado kandungan karakter nan indak buliah digunoan untuak judul.',
'perfcached' => 'Data barikuik ko diambiak dari singgahan dan mungkin indak data nan baru. Nan tabanyak dari {{PLURAL:$1|$1 hasilnyo}} ado di singgahan.',
'perfcachedts' => 'Data barikuik ko singgahan, dan tarakhia dipabarui tanggal $1. Nan tabanyak dari tanggal {{PLURAL:$1|$1}}, hasilnyo ado di singgahan.',
'querypage-no-updates' => 'Pamutakhiran dari laman ko sadang dimatian. Data nan ado di siko kini ko indak akan dimuaik ulang.',
'wrong_wfQuery_params' => 'Parameter salah ka wfQuery()<br />Fungsi: $1<br />Pamintaan: $2',
'viewsource' => 'Caliak sumber',
'viewsource-title' => 'Caliak sumber untuak $1',
'actionthrottled' => 'Tindakan tabateh',
'actionthrottledtext' => 'Sanak tabateh untuak malakuan tindakan ko banyak-banyak dalam wakatu singkek. Cubo lah laik satalah bara minit.',
'protectedpagetext' => 'Laman ko alah dikunci untuak manghindari panyuntiangan.',
'viewsourcetext' => 'Sanak dapek malihek atau manyalin sumber laman iko:',
'viewyourtext' => 'Sanak dapek mancaliak jo mangkopi sumber untuak "suntiangan sanak" ka laman ko',
'protectedinterface' => 'Laman ko baisi teks antarmuko untuak digunoan dek parangkaik lunak di wiki ko sajo, dan alah dikunci untuak maindaan kasalahan. 
Untuak manambah atau maubah tajamahan di kasado wiki, harap gunoan [//translatewiki.net/ translatewiki.net], yaitu proyek palokalan MediaWiki.',
'editinginterface' => "'''Paringatan:''' Sanak manyuntiang laman nan digunoan untuak manyadiokan teks antarmuko untuak parangkaik lunak.
Parubahan teks ko akan mampangaruhi tampilan pado antarmuko pangguno untuak pangguno lain.
Untuak tajamahan, harap gunoan [//translatewiki.net/wiki/Main_Page?setlang=min translatewiki.net], proyek palokalan MediaWiki.",
'sqlhidden' => '(Pamintaan SQL disuruakan)',
'cascadeprotected' => 'Laman iko alah dilindungi dari panyuntiangan karano disartokan di {{PLURAL:$1|laman}} barikuik nan alah dilindungi jo opsi "runtun":
$2',
'namespaceprotected' => "Sanak indak mampunyoi hak akses untuak manyuntiang laman di ruang namo '''$1'''.",
'customcssprotected' => 'Sanak indak mampunyoi izin untuak maubah laman CSS iko, karano manganduang pangaturan pribadi pangguno lain.',
'customjsprotected' => 'Sanak ndak mampunyo izin untuak maubah laman JavaScript iko, karano manganduang pangaturan pribadi pangguno lain.',
'ns-specialprotected' => 'Laman istimewa indak dapek disuntiang.',
'titleprotected' => "Judul ko dilinduangi dari dibuek jo [[User:$1|$1]].
Alasannyo adolah ''$2''.",
'filereadonlyerror' => 'Indak bisa mangubah berkas "$1" karano repositori berkas "$2" dalam mode baco-sajo.

Pangurus nan manguncinyo manawarkan panjalehan: "$3"',
'invalidtitle-knownnamespace' => '↓Judul nan indak sah jo ruangnamo "$2" dan teks "$3"',
'invalidtitle-unknownnamespace' => 'Judul nan tak sah jo nomor ruang namo indak diketahui $1 dan teks "$2"',
'exception-nologin' => 'Indak masuak log',
'exception-nologin-text' => 'Laman ko hanyo dapek disuntiang dek pangguno nan mandaftar.',

# Virus scanner
'virus-badscanner' => "Kasalahan konfigurasi: pamindai virus indak dikenal: ''$1''",
'virus-scanfailed' => 'Pamindaian gagal (kode $1)',
'virus-unknownscanner' => 'Antivirus indak dikenal:',

# Login and logout pages
'logouttext' => "'''Sanak alah kalua log dari sistem.'''

Sanak dapek taruih manggunoan {{SITENAME}} sacaro anonim, atau Sanak dapek <span class='plainlinks'>[$1 masuak log liak]</span> sabagai pangguno nan samo atau pangguno nan lain.
Parhatian bahawa bara laman mungkin masih taruih manunjukkan bahawa Sanak masih masuak log sampai Sanak mambarasihan singgahan panjelajah web Sanak.",
'welcomeuser' => 'Salamaik datang, $1!',
'welcomecreation-msg' => 'Akun Sanak alah dibuek. Jan lupo maubah [[Special:Preferences|pangaturan {{SITENAME}}]] Sanak.',
'yourname' => 'Namo pangguno:',
'userlogin-yourname' => 'Namo pangguno',
'userlogin-yourname-ph' => 'Masuakan namo pangguno',
'yourpassword' => 'Kato sandi:',
'userlogin-yourpassword' => 'Kato sandi',
'userlogin-yourpassword-ph' => 'Masuakan kato sandi',
'createacct-yourpassword-ph' => 'Masuakan kato sandi',
'yourpasswordagain' => 'Ulang baliak kato sandi:',
'createacct-yourpasswordagain' => 'Konfirmasi kato sandi',
'createacct-yourpasswordagain-ph' => 'Masuakan lai kato sandi',
'remembermypassword' => 'Ingek log masuak denai di paramban ko (salamo $1 {{PLURAL:$1|hari}})',
'userlogin-remembermypassword' => 'Biakan ambo tetap masuak',
'userlogin-signwithsecure' => 'Gunoan server aman',
'securelogin-stick-https' => 'Tetap tahubuang ka HTTPS sasudah masuk log',
'yourdomainname' => 'Domain Sanak:',
'password-change-forbidden' => 'Sanak indak dapek maubah kato sandi di wiki ko.',
'externaldberror' => 'Alah tajadi kasalahan otentikasi basis data eksternal atau Sanak indak diizinan malakuan pabaruan tahadok akun eksternal Sanak.',
'login' => 'Masuak log',
'nav-login-createaccount' => 'Masuak log / buek akun',
'loginprompt' => "Sanak musti mangaktipan ''cookies'' pado paramban Sanak untuak dapek masuak log ka {{SITENAME}} ko.",
'userlogin' => 'Masuak log / buek akun',
'userloginnocreate' => 'Masuak log',
'logout' => 'Kalua log',
'userlogout' => 'Kalua log',
'notloggedin' => 'Alun masuak log',
'userlogin-noaccount' => 'Alun ado akun?',
'userlogin-joinproject' => 'Join {{SITENAME}}',
'nologin' => "Alun ado akun? '''$1'''.",
'nologinlink' => 'Buek akun baru',
'createaccount' => 'Buek akun',
'gotaccount' => "Alah tadaftar sabagai pangguno? '''$1'''.",
'gotaccountlink' => 'Masuak log',
'userlogin-resetlink' => 'Lupo rincian info masuak Sanak?',
'userlogin-resetpassword-link' => 'Buek ulang kato sandi',
'helplogin-url' => 'Help:Masuak log',
'userlogin-helplink' => '[[{{MediaWiki:helplogin-url}}|Bantuan untuak masuak log]]',
'createacct-join' => 'Masuakan informasi Sanak di bawah ko.',
'createacct-emailrequired' => 'Alamaik surel',
'createacct-emailoptional' => 'Alamaik surel (opsional)',
'createacct-email-ph' => 'Masuakan alamaik surel Sanak',
'createaccountmail' => 'Pakai kato sandi sumbarang samantaro, lalu kirim ka alamaik surel nan di bawah ko',
'createacct-realname' => 'Namo asli (opsional)',
'createaccountreason' => 'Alasan:',
'createacct-reason' => 'Alasan',
'createacct-reason-ph' => 'Manga Sanak mambuek akun lain',
'createacct-captcha' => 'Pamarisoan kaamanan',
'createacct-imgcaptcha-ph' => 'Masuakan teks nan Sanak caliak di ateh',
'createacct-submit' => 'Buek akun Sanak',
'createacct-benefit-heading' => '{{SITENAME}} dibuek dek urang-urang saroman Sanak.',
'createacct-benefit-body1' => '{{PLURAL:$1|suntiangan}}',
'createacct-benefit-body2' => '{{PLURAL:$1|laman}}',
'createacct-benefit-body3' => '{{PLURAL:$1|panyuntiang}} tarakhia',
'badretype' => 'Kato sandi nan Sanak masuakan salah.',
'userexists' => 'Namo pangguno nan dipiliah alah tapakai.
Piliah namo nan lain.',
'loginerror' => 'Kasalahan masuak log',
'createacct-error' => 'Pambuatan akun gagal',
'createaccounterror' => 'Indak dapek mambuek akun: $1',
'nocookiesnew' => 'Akun pangguno alah dibuek, tapi Sanak alun masuak log.
{{SITENAME}} manggunokan cookies untuak log pangguno.
Pangaturan cookie Sanak nonaktif.
Aktifan dulu, sasudah tu baru masuak log jo namo pangguno dan kato sandi baru Sanak.',
'nocookieslogin' => '{{SITENAME}} manggunokan cookies untuak log pangguno.
Pangaturan cookie paramban Sanak nonaktif.
Aktifan dulu dan cubo baliak.',
'nocookiesfornew' => 'Akun pangguno indak dibuek karano kami indak dapek mamastian sumbernyo.
Pastian Sanak alah mangaktifan cokies, lalu muek ulang laman ko dan cubo baliak.',
'noname' => 'Namo pangguno nan Sanak masuakan indak sah.',
'loginsuccesstitle' => 'Bahasil masuak log',
'loginsuccess' => "'''Sanak kini lah masuak log di {{SITENAME}} sabagai \"\$1\".'''",
'nosuchuser' => 'Indak ado pangguno jo namo "$1".
Namo pangguno mambedoan kapitalisasi.
Pariso baliak ejaan Sanak, atau [[Special:UserLogin/signup|buek akun baru]].',
'nosuchusershort' => 'Indak ado pangguno jo namo "$1".
Cubo pariso baliak ejaan Sanak.',
'nouserspecified' => 'Sanak harus mamasuakan namo pangguno.',
'login-userblocked' => 'Pangguno ko kanai sakek. Indak diizinan untuak masuak log.',
'wrongpassword' => 'Kato sandi nan Sanak masuakan salah. Cubolah baliak.',
'wrongpasswordempty' => 'Sanak indak mamasuakan kato sandi. Cubolah baliak.',
'passwordtooshort' => 'Kato sandi paliang indak harus tadiri dari {{PLURAL:$1|$1 karakter}}.',
'password-name-match' => 'Kato sandi Sanak harus babedo dari namo pangguno Sanak.',
'password-login-forbidden' => 'Panggunoan namo pangguno dan sandi ko alah dilarang.',
'mailmypassword' => 'Kirim kato sandi baru',
'passwordremindertitle' => 'Kato sandi samantaro untuak {{SITENAME}}',
'passwordremindertext' => 'Sasaurang (mungkin Sanak, dari alamaik IP $1) maminta kato sandi baharu untuak {{SITENAME}} ($4). Kato sandi samantaro untuak pangguno "$2" alah dibuekan dan diset manjadi "$3". Jikok memang Sanak nan mangajukan pamintaan ini, Sanak paralu masuak log dan mamilih kato sandi baharu kini. Kato sandi samantaro Sanak akan kadaluwarsa dalam wakatu {{PLURAL:$5|sahari|$5 hari}}.

Jikok urang lain nan malakukan pamintaan iko, atau jikok Sanak alah mangingek kato sandi Sanak dan akan tetap manggunokan kato sandi tasabuik, sila abaikan pasan iko dan tatap gunokan kato sandi lamo Sanak.',
'noemail' => 'Indak ado alamaik surel nan tacatat untuak pangguno "$1".',
'noemailcreate' => 'Sanak paralu manyadiokan alamaik surel nan sah',
'passwordsent' => 'Kato sandi baru alah dikiriman ka alamaik surel nan didaftakan untuak "$1".
Silakan masuak log baliak sasudah manarimo surel tasabuik.',
'blocked-mailpassword' => 'Alamaik IP Sanak diblokir dari panyuntingan dan karanonyo indak diizinan manggunokan fungsi pangingek kato sandi untuak mancegah panyalahgunoan.',
'eauthentsent' => 'Surel untuak konfirmasi alah dikirim ka alamaik surel Sanak.
Ikuti instruksi dalam surel tasabuik untuak malakuan konfirmasi jikok alamaik tasabuik adolah batua punyo Sanak. {{SITENAME}} indak akan mangaktifan fitur surel jikok langkah ko alun dilakuan.',
'throttled-mailpassword' => 'Suatu pangingek kato sandi alah dikiriman dalam {{PLURAL:$1|$1 jam}} tarakhia.
Untuak manghindari panyalahgunoan, hanyo ciek kato sandi nan ka dikirim satiok {{PLURAL:$1|$1 jam}}.',
'mailerror' => 'Kasalahan dalam mangiriman surel: $1',
'acct_creation_throttle_hit' => 'Pangunjung wiki iko jo alamaik IP nan samo jo Sanak alah mambuek {{PLURAL:$1|$1 akun}} dalam sahari tarakhia, sampai jumlah maksimum nan diizinan.
Karanonyo, pangunjuang jo alamaik IP ko indak dapek mambuek akun lain untuak samantaro.',
'emailauthenticated' => 'Alamaik surel Sanak lah dikonfirmasi pado $3, $2.',
'emailnotauthenticated' => 'Alamaik surel Sanak alun dikonfirmasi. Sabalun dikonfirmasi Sanak indak dapek manggunoan fitur surel.',
'noemailprefs' => 'Sanak harus mamasuakan alamaik surel di pangaturan Sanak untuak dapek manggunoan fitur-fitur ko.',
'emailconfirmlink' => 'Konfirmasi alamaik surel Sanak',
'invalidemailaddress' => 'Alamaik surel iko indak dapek ditarimo dek formatnyo indak sasuai.
Harap masuakan alamaik surel dalam format nan bana atau kosoangan isian tasabuik.',
'cannotchangeemail' => 'Alamaik surel Sanak indak bisa diubah di wiki ko.',
'emaildisabled' => 'Situs web ko indak dapek mangirim surel.',
'accountcreated' => 'Akun dibuek',
'accountcreatedtext' => 'Akun pangguno untuak $1 alah dibuek.',
'createaccount-title' => 'Pambuatan akun untuak {{SITENAME}}',
'createaccount-text' => 'Sasaurang alah mambuek sabuah akun untuak alamaik surel Sanak di {{SITENAME}} ($4) jo namo "$2" dan kato sandi "$3". Sanak dianjuakan untuak masuak log dan mangganti kato sandi Sanak kini.

Sanak dapek mangacuahkan pasan ko jikok akun ko dibuek dek ado kasalahan.',
'usernamehasherror' => 'Namo pangguno indak bisa manganduang tando paga',
'login-throttled' => 'Sanak alah bakali-kali mancubo masuak log.
Tunggulah sabanta sabalun mancubo baliak.',
'login-abort-generic' => 'Proses masuak Sanak indak barasil - Dibatalan',
'loginlanguagelabel' => 'Baso: $1',
'suspicious-userlogout' => 'Pamintaan Sanak untuak kalua log ditulak karano tampaknyo dikirim oleh paramban nan rusak atau proksi panyinggah.',

# Email sending
'php-mail-error-unknown' => 'Kasalahan nan indak jaleh dalam fungsi mail() PHP',
'user-mail-no-addy' => 'Mancubo mangirim surel tanpa alamaik surel.',
'user-mail-no-body' => 'Mancubo mangirim surel kosong atau pasan talalu pendek',

# Change password dialog
'resetpass' => 'Tuka kato sandi',
'resetpass_announce' => 'Sanak alah masauk log jo kode samantaro nan dikirim malalui surel. Untuak malanjuikan, Sanak harus mamasuakan kato sandi baru di siko:',
'resetpass_header' => 'Tuka kato sandi akun',
'oldpassword' => 'Kato sandi lamo:',
'newpassword' => 'Kato sandi baharu:',
'retypenew' => 'Ketik ulang kato sandi baharu:',
'resetpass_submit' => 'Atua kato sandi dan masuak log',
'resetpass_success' => 'Kato sandi Sanak alah berhasil dituka!
Kini mamproses masuak log Sanak...',
'resetpass_forbidden' => 'Kato sandi indak dapek dituka',
'resetpass-no-info' => 'Sanak harus masuak log untuak mangakses laman iko sacara langsuang.',
'resetpass-submit-loggedin' => 'Tuka kato sandi',
'resetpass-submit-cancel' => 'Batalkan',
'resetpass-wrong-oldpass' => 'Kato sandi indak sah.
Sanak mungkin alah berhasil mangganti kato sandi Sanak atau alah maminto kato sandi samantaro nan baharu.',
'resetpass-temp-password' => 'Kato sandi samantaro:',
'resetpass-abort-generic' => 'Parubahan kato sandi alah dibatalan dek ekstensi.',

# Special:PasswordReset
'passwordreset' => 'Setel ulang sandi',
'passwordreset-legend' => 'Tuka baliak kato sandi',
'passwordreset-disabled' => 'Pangubahan kato sandi alah dimatian di wiki iko.',
'passwordreset-emaildisabled' => 'Fitur surel alah dimatian pado wiki iko.',
'passwordreset-username' => 'Namo pangguno:',
'passwordreset-domain' => 'Domain:',
'passwordreset-capture' => 'Caliak kaputusannyo?',
'passwordreset-capture-help' => 'Kalau sanak mancentang kotak ko, surel (jo kato sandi samantaro) akan nampak jo Sanak.',
'passwordreset-email' => 'Alamaik surel:',
'passwordreset-emailtitle' => 'Detail akun di {{SITENAME}}',
'passwordreset-emailtext-ip' => 'Sasaurang (mungkin Sanak, dari alamaik IP $1) mamintak parubahan kato sandi untuak {{SITENAME}} ($4). {{PLURAL:$3|Akun}} barikuik takaik jo alamaik surel ko:

$2

{{PLURAL:$3|Sandi samantaro}} barikuik akan habih masonyo dalam {{PLURAL:$5|$5 ari}}.
Sanak harus masuak dan mamiliah sandi baru. Jikok urang lain mambuek pamintaan ko atau jikok Sanak ingek sandi awal dan indak nio maubahnyo, Sanak dapek mangacuahkan pasan ko dan taruih manggunoan kato sandi lamo.',
'passwordreset-emailtext-user' => 'Sasaurang (mungkin Sanak, dari alamaik IP $1) mamintak parubahan kato sandi untuak {{SITENAME}} ($4).
{{PLURAL:$3|Akun}} barikuik takaik jo alamaik surel ko:

$2

{{PLURAL:$3|Sandi samantaro}} barikuik akan habih masonyo dalam {{PLURAL:$5|$5 ari}}.
Sanak harus masuak dan mamiliah sandi baru. Jikok urang lain mambuek pamintaan ko atau jikok Sanak ingek sandi awal dan indak nio maubahnyo, Sanak dapek mangacuahkan pasan ko dan taruih manggunoan kato sandi lamo.',
'passwordreset-emailelement' => 'Namo pangguno: $1
Sandi samantaro: $2',
'passwordreset-emailsent' => 'Surel parubahan kato sandi alah dikirim.',
'passwordreset-emailsent-capture' => 'Surel parubahan kato sandi alah dikirim, nan nampak di bawah ko.',
'passwordreset-emailerror-capture' => 'Surel parubahan kato sandi nan ditampilan di bawah, alah dibuek, tapi pangirimannyo ka {{GENDER:$2|pangguno}} gagal: $1',

# Special:ChangeEmail
'changeemail' => 'Tuka alamaik surel.',
'changeemail-header' => 'Ganti alamaik surel.',
'changeemail-text' => 'Isi formulir ko untuak mangganti alamaik surel. Sanak musti mamasuakan kato sandi untuak mayakinkan parubahan.',
'changeemail-no-info' => 'Sanak harus masuak log untuak mangakses laman ko.',
'changeemail-oldemail' => 'Alamat surel kini:',
'changeemail-newemail' => 'Alamat surel baru:',
'changeemail-none' => '(indak ado)',
'changeemail-password' => 'Sandi {{SITENAME}} Sanak:',
'changeemail-submit' => 'Ganti surel.',
'changeemail-cancel' => 'Batalkan',

# Edit page toolbar
'bold_sample' => 'Teks taba',
'bold_tip' => 'Teks taba',
'italic_sample' => 'Teks miriang',
'italic_tip' => 'Teks miriang',
'link_sample' => 'Judua pautan',
'link_tip' => 'Pautan dalam',
'extlink_sample' => 'http://www.anyo-contoh.com judua pautan',
'extlink_tip' => 'Pautan lua (ingek awalannyo http://)',
'headline_sample' => 'Teks judul',
'headline_tip' => 'Tingkek 2 judul',
'nowiki_sample' => 'Masuakkan disiko teks nan indak baformat',
'nowiki_tip' => 'Abaikan format wiki',
'image_tip' => 'Cantumkan berkas',
'media_tip' => 'Pautan berkas',
'sig_tip' => 'Tandotangan sanak jo wakatu',
'hr_tip' => 'Garih mandata',

# Edit pages
'summary' => 'Ikhtisar:',
'subject' => 'Subjek/judul:',
'minoredit' => 'Suntiangan ketek',
'watchthis' => 'Pantau laman ko',
'savearticle' => 'Simpan',
'preview' => 'Caliak',
'showpreview' => 'Pratonton',
'showlivepreview' => 'Pratayang langsuang',
'showdiff' => 'Parubahan',
'anoneditwarning' => "'''Ingek:''' Sanak alun masuak log.
Alamat IP sanak tacatat pado riwayaik suntiangan laman ko.",
'anonpreviewwarning' => "''Sanak alun masuak log. Manyimpan laman akan manyababkan alamaik IP Sanak tacatat pado riwayat suntiangan laman iko.''",
'missingsummary' => "'''Paringatan:''' Sanak indak mamasuakan ringkasan panyuntiangan. Jikok Sanak baliak manakan tombol Simpan, suntiangan Sanak akan disimpan tanpa ringkasan panyuntiangan.",
'missingcommenttext' => 'Sila masuakan komenta di bawah iko.',
'missingcommentheader' => "'''Paringatan:''' Sanak alun maagihan subjek atau judul untuak komenta Sanak. Jikok Sanak baliak manakan \"{{int:savearticle}}\", suntiangan Sanak akan disimpan tanpa komenta tasabuik.",
'summary-preview' => 'Ringkasan pratayang:',
'subject-preview' => 'Pratayang subyek/judul:',
'blockedtitle' => 'Pangguno diblokir',
'blockedtext' => "'''Namo pangguno atau alamaik IP Sanak alah kanai sakek.'''

Sakek dibuek dek $1.
Alasan nan diagiahan adolah ''$2''.

* Kanai sakek sajak: $8
* Maso sakek habih pado: $6
* Sasaran nan disakek: $7

Sanak dapek manghubungi $1 atau [[{{MediaWiki:Grouppage-sysop}}|panguruih lainnyo]] untuak mambicarokan hal iko.

Sanak indak dapek manggunoan fitua 'Kirim surel ka pangguna iko' kacuali Sanak alah mamasuakan alamaik surel nan sah di [[Special:Preferences|pangaturan akun]] dan Sanak indak sadang disakek untuak manggunoannyo.

Alamaik IP Sanak adolah $3, dan ID panyakek adolah $5.
Tolong saratoan informasi di ateh pado satiok patanyaan nan Sanak buek.",
'autoblockedtext' => "Alamaik IP Sanak alah kanai sakek sacaro otomatis dek digunoan jo pangguno lain, nan sakek dek $1. Panyakek ko dibuek dek alasan:

:''$2''

* Kanai sakek sajak: $8
* Maso sakek habih pado: $6
* Sasaran nan disakek: $7

Sanak dapek mahubungi $1 atau [[{{MediaWiki:Grouppage-sysop}}|penguruih lainnya]] untuak mambicarokan hal iko.

Sanak indak dapek manggunoan fitua 'Kirim surel ka pangguna iko' kacuali Sanak alah mamasuakan alamaik surel nan sah di [[Special:Preferences|pangaturan akun]] dan Sanak indak sadang disakek untuak manggunoannyo.

Alamaik IP Sanak adolah $3, dan ID panyakek adolah $5.
Tolong saratoan informasi di ateh pado satiok patanyaan nan Sanak buek.",
'blockednoreason' => 'indak ado alasan nan diagiah.',
'whitelistedittext' => 'Sanak musti $1 untuak manyuntiang laman.',
'confirmedittext' => 'Sanak musti mangkonfirmasian alamaik surel sabalun manyuntiang laman.
Masuakan dan validasian alamaik surel Sanak pado [[Special:Preferences|pangaturan pangguno]] Sanak.',
'nosuchsectiontitle' => 'Bagian indak ditamuan',
'nosuchsectiontext' => 'Sanak mancubo manyuntiang suatu subbagian nan indak ado.
Subbagian ko mungkin lah dipindahan atau dihapuih sangkek Sanak mambukaknyo.',
'loginreqtitle' => 'Harus masuak log',
'loginreqlink' => 'masuak log',
'loginreqpagetext' => 'Sanak harus $1 untuak dapek maliek laman lainnyo.',
'accmailtitle' => 'Kato sandi alah takirim.',
'accmailtext' => "Sabuah kato sandi acak untuak [[User talk:$1|$1]] alah dibuek dan dikiriman ka $2.

Kato sandi untuak akun baharu iko dapek diubah di laman ''[[Special:ChangePassword|pangubahan kato sandi]]'' satalah masuak log.",
'newarticle' => '(Baru)',
'newarticletext' => "Laman nan Sanak cari alun ado.
Untuak mambuek laman tu, mulailah jo manulih dalam kotak di bawah (caliak [[{{MediaWiki:Helppage}}|laman bantuan]] untuak informasi labiah lanjuik).
Jikok Sanak indak sangajo sampai ka laman ko, klik tombol '''back''' pado paramban web Sanak.",
'anontalkpagetext' => "----''Iko adolah laman rundiang saurang pangguno anonim nan alun mambuek akun atau indak manggunoannyo.
Jadi, kami tapaso mamakai alamat IP nan takaik untuak mangenalinyo.
Jikok Sanak adolah pangguno anonim dan maraso mandapek komentar nan indak lamak nan ditujuan langsung kapado Sanak, cubolah [[Special:UserLogin/signup|mambuek akun]] atau [[Special:UserLogin|masuak log]] guno manghindari karancuan jo pangguno anonim lainnyo.''",
'noarticletext' => 'Kini ko indak ado teks di laman ko.
Sanak dapek [[Special:Search/{{PAGENAME}}|malakuan pancarian untuak judul laman ko]] di laman-laman lain, <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} mancari log takaik], atau [{{fullurl:{{FULLPAGENAME}}|action=edit}} manyuntiang laman iko]</span>.',
'noarticletext-nopermission' => 'Kini ko indak ado teks dalam laman ko.
Sanak dapek [[Special:Search/{{PAGENAME}}|malakukan pancarian untuak judul laman ko]] di laman lain, atau <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} mancahari log takaik] </span>, tapi Sanak indak punyo izin untuak mambuek laman ko.',
'missing-revision' => 'Revisi $1 di laman nan banamo "{{PAGENAME}}" ko indak ado.

Hal iko biasonyo disababkan dek pautan sijarah nan alah kadaluarsa ka laman nan alah diapuih.
Rinciannyo dapek dicaliak di [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log pangapuihan].',
'userpage-userdoesnotexist' => 'Akun pangguno "$1" indak tadaftar.
Cubo pareso jikok nio mambuek/suntiang laman ko.',
'userpage-userdoesnotexist-view' => 'Pangguno "$1" indak tadaftar.',
'blocked-notice-logextract' => 'Pangguno ko tangah diblokir.
Entri log pamblokiran tabaru disadioan di bawah ko untuak referensi:',
'clearyourcache' => "'''Catatan:''' Sasudah menyimpan, Sanak mungkin harus meminteh singgahan paramban Sanak untuak maliek parubahan.
* '''Firefox / Safari:''' Tahan ''Shift'' sambia mangklik ''Reload'', atau takan ''Ctrl-F5'' atau ''Ctrl-R'' (''⌘-R'' di Mac)
* '''Google Chrome:''' Takan ''Ctrl-Shift-R'' (''⌘-Shift-R'' di Mac)
* '''Internet Explorer:''' Tahan ''Ctrl'' sambia mangklik ''Refresh'', atau takan ''Ctrl-F5''
* '''Opera:''' Barasiahkan singgahan di ''Tools → Preferences''",
'usercssyoucanpreview' => "'''Tips:''' Gunoan tombol \"{{int:showpreview}}\" untuak mauji CSS baharu Sanak sabalun manyimpannyo.",
'userjsyoucanpreview' => "'''Tips:''' Gunoan tombol \"{{int:showpreview}}\" untuak mauji JS baharu Sanak sabalun manyimpannyo.",
'usercsspreview' => "'''Ingeklah bahawa Sanak sadang manampilan pratayang dari CSS Sanak.
Pratayang iko alun disimpan!'''",
'userjspreview' => "'''Ingeklah bahawa nan Sanak liek hanyolah pratayang JavaScript Sanak, dan bahawa pratayang tasabuik alun disimpan!'''",
'sitecsspreview' => "'''Ingeklah bahawa Sanak hanyo manampilan pratayang dari CSS iko.'''
'''Parubahan alun disimpan!'''",
'sitejspreview' => "'''Ingeklah bahawa Sanak hanyo manampilan pratayang dari Kode JavaScript iko.'''
'''Parubahan alun disimpan!'''",
'userinvalidcssjstitle' => "'''Paringatan:''' Kulik \"\$1\" indak ditamuan. Harap diingek bahawa laman .css dan .js manggunokan huruf kecil, contoh {{ns:user}}:Foo/vector.css dan bukannyo {{ns:user}}:Foo/Vector.css.",
'updated' => '(Dipabaharui)',
'note' => "'''Catatan:'''",
'previewnote' => "'''Ingek iko hanyo pratonton'''
Parubahan Sanak alun disimpan!",
'continue-editing' => 'Pai ka kotak panyuntiangan',
'previewconflict' => 'Pratayang iko mancaminan teks pado bagian ateh kotak suntiangan teks sabagaimano akan taliek bilo Sanak manyimpannyo.',
'session_fail_preview' => "'''Maaf, kami ndak dapek mangolah suntiangan Sanak akibat tahapuihnyo data sesi.
Sila cubo sakali lai.
Jikok masih indak barhasil, cubolah [[Special:UserLogout|kalua log]] dan masuak log baliak.'''",
'session_fail_preview_html' => "'''Kami indak dapek mamproses suntiangan Sanak karano hilangnyo sesi data.'''

''Dek {{SITENAME}} mangizinan panggunoan HTML mantah, pratonton alah disuruakan sabagai pancagahan terhadok sarangan JavaScript.''

'''Jikok iko marupoan suntiangan nan sah, silakan cubo lai.
Jikok masih jo indak barasil, cubolah [[Special:UserLogout|kalua log]] dan masuak baliak.'''",
'token_suffix_mismatch' => "'''Suntiangan Sanak ditolak karano aplikasi klien Sanak maubah karakter tando baco pado suntiangan.'''
Suntiangan tasabuik ditolak untuak mancegah kasalahan pado teks laman.
Hal iko kadang tajadi jikok Sanak manggunokan layanan proxy anonim babasis web nan bamasalah.",
'edit_form_incomplete' => "'''Babarapo bagian dari formulir suntiangan indak mancapai server; pariso baliak apokah suntiangan Sanak tatap utuah dan cubo lai.'''",
'editing' => 'Manyuntiang $1',
'creating' => 'Mambuek $1',
'editingsection' => 'Suntiang $1 (bagian)',
'editingcomment' => 'Manyuntiang $1 (bagian baru)',
'editconflict' => 'Konflik panyuntiangan: $1',
'explainconflict' => "Urang lain lah manyuntiang laman ko sajak Sanak mulai manyuntiangnyo.
Bagian ateh teks ko manganduang teks laman saat kini ko.
Parubahan nan Sanak lakuan ditunjuakan pado bagian bawah teks.
Sanak hanyo paralu manggabungan parubahan Sanak jo teks nan lah ado.
'''Hanyo''' teks pado bagian ateh lamanlah nan akan disimpan jikok Sanak manakan \"{{int:savearticle}}\".",
'yourtext' => 'Teks Sanak',
'storedversion' => 'Versi tasimpan',
'nonunicodebrowser' => "'''Paringatan: Paramban web Sanak indak mandukuang Unicode.'''
Alah ado jalan kalua bia Sanak dapek manyuntiang laman sacaro aman: karakter non-ASCII akan muncua dalam kotak suntiang sabagai kode heksadesimal.",
'editingold' => "'''Paringatan:
Sanak manyuntiang revisi lamo suatu laman.
Jikok Sanak manyimpannyo, parubahan-parubahan nan dibuek sajak revisi ko akan hilang.'''",
'yourdiff' => 'Pambedoan',
'copyrightwarning' => "Untuak diingek bahaso apo nan disumbang kapado {{SITENAME}} dianggap lah dilapeh di bawah $2 (caliak $1 untuak langkoknyo).
Jikok awak indak ingin apo nan ditulih tu disuntiang dan disebaran, jan dikirim tulisan tu ka siko.<br />
Awak musti bajanji juo bahaso iko adolah asia karya awak surang, atau disalin dari sumber miliak basamo atau sumber bebas lainnyo.
'''Jan dikirim karya bahak cipta nan indak baizin!'''",
'copyrightwarning2' => "Parhatikan bahawa sadoalah kontribusi terhadap {{SITENAME}} dapek disuntiang, diubah, atau dihapuih oleh panyumbang lainnyo. Jikok Sanak indak ingin tulisan Sanak disuntiang urang lain, jan kiriman ka siko.<br />Sanak jua bajanji bahawa iko adolah hasil karyo Sanak surang, atau disalin dari sumber miliak umum atau sumber bebas nan lain (liek $1 untuak informasi labiah lanjuik). '''JAN KIRIMAN KARYO NAN DILINDUNGI HAK CIPTA TANPA IJIN!'''",
'longpageerror' => "'''Kasalahan: Teks nan Sanak kiriman sagadang {{PLURAL:$1|$1 kilobita}}, barati labiah gadang dari jumlah maksimum {{PLURAL:$2|$2 kilobita}}. Teks indak dapek disimpan.'''",
'readonlywarning' => "'''PARINGATAN: Basis data sadang dikunci untuak pamaliharaan, sahinggo saat iko Sanak indak dapek manyimpan hasil suntiangan.''' 
Sanak mungkin paralu manyalin teks suntiangan Sanak ko dan simpankan ka sabuah berkas teks guno mamuekannyo baliak kundian.

Panguruih nan mangunci basis data maagiahan panjalehan barikuik: $1",
'protectedpagewarning' => "'''Paringatan: Laman iko sadang dilinduangi sahinggo hanyo pangguno jo hak akses pangurus nan dapek manyuntiangnyo.'''
Entri catatan tarakhir disadioan di bawah untuak referensi:",
'semiprotectedpagewarning' => "'''Catatan:''' Laman ko sadang dilinduangi, jadi hanyo pangguno tadaftar nan dapek manyuntiangnyo.
Entri log tarakhia disadioan di bawah untuak reperensi:",
'cascadeprotectedwarning' => "'''Paringatan:''' Laman ko sadang dilinduangi jadi hanyo pangguno jo hak akses panguruih sajo nan dapek manyuntiangnyo karano disaratoan dalam {{PLURAL:$1|laman}} nan alah dilinduangi jo palinduangan batingkek:",
'titleprotectedwarning' => "'''Paringatan: Laman iko alah dilinduangi sahinggo diparaluan [[Special:ListGroupRights|hak khusus]] untuak mambueknyo.'''
Entri catatan tarakhir disadioan di bawah untuak referensi:",
'templatesused' => '{{PLURAL:$1|Templat}} nan digunoan di laman ko:',
'templatesusedpreview' => '{{PLURAL:$1|Templat}} nan digunoan dalam pratonton ko:',
'templatesusedsection' => '{{PLURAL:$1|Templat}} nan digunoan di bagian ko:',
'template-protected' => '(dilinduangi)',
'template-semiprotected' => '(palinduangan semi)',
'hiddencategories' => 'Laman ko marupokan kalompok dari {{PLURAL:$1|$1 kategori tapandam}}:',
'nocreatetext' => '{{SITENAME}} lah mambatasi pambuekan laman-laman baru.
Sanak dapek baliak dan manyuntiang laman nan alah ado, atau [[Special:UserLogin|masuak log - mambuek akun]].',
'nocreate-loggedin' => 'Sanak ndak mampunyoi hak akses untuak mambuek laman baharu.',
'sectioneditnotsupported-title' => 'Panyuntiangan bagian indak didukuang',
'sectioneditnotsupported-text' => 'Panyuntiangan bagian indak didukuang di laman suntiang iko.',
'permissionserrors' => 'Kasalahan Hak Akses',
'permissionserrorstext' => 'Sanak indak ado hak untuak malakuannyo dek {{PLURAL:$1|alasan}} barikuik:',
'permissionserrorstext-withaction' => 'Awak indak punyo hak akses untuak $2, karano {{PLURAL:$1|alasan}} barikuik:',
'recreate-moveddeleted-warn' => "'''Ingek: Sanak mambuek ulang suatu laman nan alah dihapuih.'''

Harap ditimbang apo rancak malanjuikan suntiangan Sanak.
Barikuik ko log pangapuihan jo pamindahan dari laman ko:",
'moveddeleted-notice' => 'Laman ko alah dihapuih.
Sabagai reperensi, barikuik adolah log pangapuihan dan pamindahannyo.',
'log-fulllog' => 'Liek saluruah log',
'edit-hook-aborted' => 'Suntiangan dibatalan samo kait parser
tanpa ado katarangan.',
'edit-gone-missing' => 'Indak dapek mampabarui laman.
Mungkin alah dihapuih.',
'edit-conflict' => 'Konflik suntingan.',
'edit-no-change' => 'Suntiangan sanak ditulak, karano indak ado parubahan nan tajadi ka teks.',
'edit-already-exists' => 'Indak dapek mambuek aman baru.
Nyo alah ado.',
'defaultmessagetext' => 'Teks baku.',
'content-failed-to-parse' => 'Gagal manjabarkan konten $2 untuak model $1: $3',
'invalid-content-data' => 'Data kanduangan indak valid.',
'content-not-allowed-here' => 'Konten "$1" indak diizinan di laman [[$2]]',
'editwarning-warning' => 'Maninggakan laman ko dapek maakibaikan parubahan nan dibuek hilang. Jikok Sanak lah masuak log, dapek mamatian pasan ko malalui bagian "Panyuntiangan" pado laman pangaturan.',

# Content models
'content-model-wikitext' => 'Teks wiki',
'content-model-text' => 'Teks kosong',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => "'''Paringatan:''' Laman ko manganduang talalu banyak panggilan fungsi parser.

Seharusnyo kurang dari $2 {{PLURAL:$2|panggilan}}, tapi {{PLURAL:$1|kini ado $1 panggilan}}.",
'expensive-parserfunction-category' => 'Laman nan talalu banyak panggilan fungsi parser',
'post-expand-template-inclusion-warning' => "'''Peringatan:''' Ukuran templat talalu gadang.
Babarapo templat akan diabaikan.",
'post-expand-template-inclusion-category' => 'Laman nan ukurannyo templatnyo malabiahi bateh',
'post-expand-template-argument-warning' => 'Paringatan: Laman ko barisi satidaknyo ciek uraian templat na ukuran ekspansinyo talalu gadang. 
Uraian-uraian tu alah diabaikan.',
'post-expand-template-argument-category' => 'Laman nan barisi uraian templat nan diabaikan',
'parser-template-loop-warning' => 'Hubungan barulang templat tadeteksi: [[$1]]',
'parser-template-recursion-depth-warning' => 'Limit kadalaman hubungan barulang templat lah talampau ($1)',
'language-converter-depth-warning' => 'Bateh kadalaman pangonversi bahaso lah talampau ($1)',
'node-count-exceeded-category' => 'Laman dimano hitungan-node talampaui',
'node-count-exceeded-warning' => 'Laman hitungan-node lah talampau',
'expansion-depth-exceeded-category' => 'Laman dima kadalaman ekspansi lah talampau',
'expansion-depth-exceeded-warning' => 'Laman kadalaman ekspansi lah talampau',
'parser-unstrip-loop-warning' => 'Unstrip loop detected',
'parser-unstrip-recursion-limit' => 'Unstrip recursion limit exceeded ($1)',
'converter-manual-rule-error' => 'Kasalahan tadeteksi di aturan manual konversi bahaso',

# "Undo" feature
'undo-success' => 'Suntiangan ko dapek dibatalan. 
Tolong cek pabedoan di bawah untuak mayakinkan bahwa bana nan tu Sanak nio buek, lalu simpan parubahan tasabuik untuak manyalasaikan pambatalan suntiangan.',
'undo-failure' => 'Suntiangan ko indak dapek dibatalan dek konflik panyuntiangan antaro.',
'undo-norev' => 'Suntiangan ko indak dapek dibatalan dek laman indak ditamukan atau lah dihapuih.',
'undo-summary' => 'Mambatalan revisi $1 oleh [[Special:Contributions/$2|$2]] ([[User talk:$2|maota]])',

# Account creation failure
'cantcreateaccounttitle' => 'Indak dapek mambuek akun',
'cantcreateaccount-text' => "Mambuek akun dari alamat IP ko ('''$1''') alah diblok jo [[User:$3|$3]].

Alasan nan diagiah jo $3 adolah ''$2''",

# History pages
'viewpagelogs' => 'Caliak log untuak laman ko',
'nohistory' => 'Indak ado sajarah panyuntiangan untuak laman ko',
'currentrev' => 'Revisi tabaru',
'currentrev-asof' => 'Revisi tabaru pado $1',
'revisionasof' => 'Revisi pado $1',
'revision-info' => 'Revisi sajak $1 dek $2',
'previousrevision' => '← Revisi sabalunnyo',
'nextrevision' => 'Revisi selanjuiknyo →',
'currentrevisionlink' => 'Revisi tabaru',
'cur' => 'kini',
'next' => 'lanjuik',
'last' => 'sabalun',
'page_first' => 'awal',
'page_last' => 'akhia',
'histlegend' => "Bandiangan piliahan: Tandoi revisi untuak mambandiangan dan takan enter atau tombol di bawah.<br />
Contoh: '''({{int:cur}})''' = bedo jo versi tarakhia, '''({{int:last}})''' = bedo jo versi sabalunnyo, '''{{int:minoreditletter}}''' = suntiangan ketek.",
'history-fieldset-title' => 'Talusuri riwayaik',
'history-show-deleted' => 'Hanyo nan dihapuih',
'histfirst' => 'Nan lamo',
'histlast' => 'Nan baru',
'historysize' => '({{PLURAL:$1|$1  bita}})',
'historyempty' => '(kosong)',

# Revision feed
'history-feed-title' => 'Riwayat revisi',
'history-feed-description' => 'Riwayat revisi laman ko di wiki',
'history-feed-item-nocomment' => '$1 pado $2',
'history-feed-empty' => 'Laman nan dicari indak ado.
Mungkin alah dihapuih dari wiki, atau diagiah namo baru.
Cuba [[Special:Search|cari dulu]] untuak laman lain nan relevan.',

# Revision deletion
'rev-deleted-comment' => '(ringkasan suntiangan dihapuih)',
'rev-deleted-user' => '(namo pangguno dihapuih)',
'rev-deleted-event' => '(isi dihapuih)',
'rev-deleted-user-contribs' => '[namo pangguno atau alamaik IP dihapuih - suntiangan disuruakan dari daftar jariah]',
'rev-deleted-text-permission' => "Revisi laman ko alah '''dihapuih'''.
Rinciannyo mungkin ado di [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log pangapuihan]",
'rev-deleted-text-unhide' => "Revisi laman ko alah '''dihapuih'''.
Rinciannyo mungkin ado di [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log pangapuihan].
Sanak masih dapek [$1 mancaliak revisi ko] ko' amuah.",
'rev-suppressed-text-unhide' => "Revisi laman ko alah '''tabanam'''.
Rinciannyo mungkin ado di [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} log pambanaman].
Angku masih dapek [$1 maliek revisi ko] ko' amuah.",
'rev-deleted-text-view' => "Laman revisi ko alah '''dihapuih'''.
Sanak dapek mancaliaknyo; rinciannyo mungkin ado di [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log pangapuihan].",
'rev-suppressed-text-view' => "Revisi laman ko alah '''tabanam'''.
Angku dapek malieknyo; rinciannyo mungkin ado di [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log pambanaman]",
'rev-deleted-no-diff' => "Sanak indak dapek mancaliak pabedoan ko dek salah satu dari revisi ko alah '''dihapuih'''.
Rinciannyo mungkin ado di [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log pangapuihan].",
'rev-suppressed-no-diff' => "Angku indak dapek maliek pabedoan ko dek salah satu dari revisinyo alah '''dihapuih'''.",
'rev-deleted-unhide-diff' => "Revisi laman ko alah '''dihapuih'''.
Rinciannyo mungkin ado di [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log pangapuihan].
Sanak masih dapek [$1 mancaliak revisi ko] ko' amuah.",
'rev-suppressed-unhide-diff' => "Revisi laman ko alah '''tabanam'''.
Rinciannyo mungkin ado di [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} log pambanaman].
Sanak masih dapek [$1 maliek revisi ko] ko' amuah.",
'rev-deleted-diff-view' => "Laman revisi ko alah '''dihapuih'''.
Sanak dapek mancaliaknyo; rinciannyo mungkin ado di [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log pangapuihan].",
'rev-suppressed-diff-view' => "Revisi laman ko alah '''tabanam'''.
Sanak dapek malieknyo; rinciannyo mungkin ado di [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} log pambanaman]",
'rev-delundel' => 'tunjuakan/suruakkan',
'rev-showdeleted' => 'tunjuakan',
'revisiondelete' => 'Hapuih/batal hapuih revisi',
'revdelete-nooldid-title' => 'Target revisi indak basobok',
'revdelete-nooldid-text' => 'Sanak alun mangagiah target revisi untuak manjalankan fungsi ko, revisi nan ditantuan indak ado, atau Sanak nio manyuruakan revisi kini ko.',
'revdelete-nologtype-title' => 'Tipe log indak diagiah',
'revdelete-nologtype-text' => 'Sanak indak mngagiah tipe log untuak manerapkan tindakan ko.',
'revdelete-nologid-title' => 'Entri log indak sah',
'revdelete-nologid-text' => 'Sanak mungkin indak manyabuik suatu log target kajadian untuak manjalanan fungsi iko atau entri nan dimakasuik indak basuo.',
'revdelete-no-file' => 'Berkas nan dituju indak basobok.',
'revdelete-show-file-confirm' => 'Apokah Sanak yakin nio mancaliak revisi nan alah dihapuih dari berkas "<nowiki>$1</nowiki>" per $3, $2?',
'revdelete-show-file-submit' => 'Yo',
'revdelete-selected' => "'''{{PLURAL:$2|Revisi piliahan}} dari [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Log piliahan}}:'''",
'revdelete-text' => "'''Revisi jo tindakan nan alah dihapuih akan tetap muncua di versi tadaulu dan laman log, tapi bagian dari isinyo indak dapek diakses publik.'''
Panguruih {{SITENAME}} lain tetap dapek mangakses isi nan tasuruak ko dan dapek mambatalan pangapuihannyo manggunoan antarmuko nan samo, kacuali ado pambatehan lain nan dibuek.",
'revdelete-confirm' => 'Tolong konfirmasi baso Sanak samemang bamakasuik malakuan iko, mamahami konsekuensinyo, dan baso Sanak malakuannyo sasuai jo [[{{MediaWiki:Policy-url}}|kabijakan]].',
'revdelete-suppress-text' => "Panyambunyian revisi '''hanyo''' buliah digunoan untuak kasus-kasus barikuik:
* Informasi paribadi nan indak patuik
*: ''alamaik rumah jo nomor telepon, nomor kartu identitas, dll.''",
'revdelete-legend' => 'Pangaturan bateh',
'revdelete-hide-text' => 'Suruakan teks revisi',
'revdelete-hide-image' => 'Suruakan isi berkas',
'revdelete-hide-name' => 'Suruakan tindakan jo target',
'revdelete-hide-comment' => 'Suruakan ikhtisar suntiangan',
'revdelete-hide-user' => 'Suruakan namo pangguno/IP panyuntiang',
'revdelete-hide-restricted' => 'Suruakan juo data dari panguruih',
'revdelete-radio-same' => '(jan diubah)',
'revdelete-radio-set' => 'Yo',
'revdelete-radio-unset' => 'Indak',
'revdelete-suppress' => 'Suruakan juo data dari panguruih',
'revdelete-unsuppress' => 'Hapuih batehan pado revisi nan dikambalian',
'revdelete-log' => 'Alasan:',
'revdelete-submit' => 'Terapkan pado {{PLURAL:$1|revisi}} tapiliah',
'revdelete-success' => "'''Revisi barasil dipabarui.'''",
'revdelete-failure' => "'''Revisi indak dapek dipabarui:'''
$1",
'logdelete-success' => "'''Log data barasil dipabarui.'''",
'logdelete-failure' => "'''Log data indak dapek dipabarui:'''
$1",
'revdel-restore' => 'ganti tampilan',
'revdel-restore-deleted' => 'suntiangan nan alah dihapuih',
'revdel-restore-visible' => 'tampilan revisi',
'pagehist' => 'Riwayaik laman',
'deletedhist' => 'Riwayaik pangapuihan',
'revdelete-reason-dropdown' => '*Alasan pangapuihan umum
** Palanggaran hak cipta
** Komentar atau informasi paribadi nan indak patuik
** Namo pangguno nan indak patuik
** Bapotensi mancemarkan namo baiak',
'revdelete-otherreason' => 'Alasan lain/tambahan:',
'revdelete-reasonotherlist' => 'Alasan lain',
'revdelete-edit-reasonlist' => 'Alasan mangapuih laman',
'revdelete-offender' => 'Pambuek reviri:',

# Suppression log
'suppressionlog' => 'Log pambanaman',

# History merging
'mergehistory-reason' => 'Alasan:',

# Merge log
'mergelog' => 'Log panggabuangan',
'pagemerge-logentry' => 'manggabuangan [[$1]] ka [[$2]] (revisi sampai $3)',
'revertmerge' => 'Batal gabuang',
'mergelogpagetext' => 'Di bawah ko daftar panggabuangan riwayaik laman ka laman nan lain.',

# Diffs
'history-title' => 'Riwayaik revisi dari "$1"',
'difference-title' => 'Pabedoan antaro revisi dari "$1"',
'difference-title-multipage' => 'Pabedoan antaro laman "$1" jo "$2"',
'difference-multipage' => '(Pabedoan antaro laman)',
'lineno' => 'Barih $1:',
'compareselectedversions' => 'Bandiangan versi tapiliah',
'showhideselectedversions' => 'Tunjuakan/suruakan versi tapiliah',
'editundo' => 'batal',
'diff-multi' => '({{PLURAL:$1|$1 revisi antaro}} dek {{PLURAL:$2|$2 pangguno}} indak ditampilan)',

# Search results
'searchresults' => 'Hasil pancarian',
'searchresults-title' => 'Hasil pancarian untuak "$1"',
'searchresulttext' => 'Untuak informasi labiah lanjuik tantang pancarian {{SITENAME}}, caliak [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => 'Sanak mancari \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|sado laman nan dimulai jo "$1"]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|sado laman nan tapauik ka "$1"]])',
'searchsubtitleinvalid' => "Sanak mancari '''$1'''",
'titlematches' => 'Judul laman pas',
'notitlematches' => 'Indak ado judul nan pas',
'textmatches' => 'Teks laman pas',
'notextmatches' => 'Indak ado judul nan pas',
'prevn' => '{{PLURAL:$1|$1}} sabalunnyo',
'nextn' => '{{PLURAL:$1|$1}} barikuiknyo',
'prevn-title' => '$1 {{PLURAL:$1|hasil}} sabalunnyo',
'nextn-title' => '$1 {{PLURAL:$1|hasil}} barikuiknyo',
'shown-title' => 'Tampilkan $1 {{PLURAL:$1|hasil}} per laman',
'viewprevnext' => 'Caliak ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend' => 'Atua pancarian',
'searchmenu-exists' => "'''Ado laman nan banamo \"[[:\$1]]\" pado wiki ko.'''",
'searchmenu-new' => "'''Buek laman \"[[:\$1]]\" di wiki ko!'''",
'searchhelp-url' => 'Help:Isi',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Cari laman jo awalan ko]]',
'searchprofile-articles' => 'Laman isi',
'searchprofile-project' => 'Laman Bantuan jo Proyek',
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Sadonyo',
'searchprofile-advanced' => 'Labiah lanjuik',
'searchprofile-articles-tooltip' => 'Cari di $1',
'searchprofile-project-tooltip' => 'Cari di $1',
'searchprofile-images-tooltip' => 'Cari untuak berkas',
'searchprofile-everything-tooltip' => 'Cari kasadonyo (tamasuak laman rundiang)',
'searchprofile-advanced-tooltip' => 'Pacarian di ruang namo tatantu',
'search-result-size' => '$1 ({{PLURAL:$2|$2 kato}})',
'search-result-category-size' => '{{PLURAL:$1|$1 anggota}} ({{PLURAL:$2|$2 subkategori}}, {{PLURAL:$3|$3 berkas}})',
'search-result-score' => 'Relevansi: $1%',
'search-redirect' => '(pangaliahan $1)',
'search-section' => '(bagian $1)',
'search-suggest' => 'Mungkin makasuiknyo: $1',
'search-interwiki-caption' => 'Proyek badunsanak',
'search-interwiki-default' => 'Hasil $1:',
'search-interwiki-more' => '(salanjuiknyo)',
'search-relatedarticle' => 'Bakaitan',
'mwsuggest-disable' => 'Matian saran pancarian',
'searcheverything-enable' => 'Cari kasado ruangnamo',
'searchrelated' => 'bakaitan',
'searchall' => 'sado',
'showingresults' => "Di bawah ko dikaluaan sampai {{PLURAL:$1|'''$1''' hasil}}, dimulai dari #'''$2'''.",
'showingresultsnum' => "Di bawah ko dikaluaan {{PLURAL:$3|'''$3'''}} hasil mulai dari #'''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Hasil '''$1 - $2''' dari '''$3'''}} untuak '''$4'''",
'nonefound' => "'''Catatan''': hanyo babarapo ruangnamo nan dicari sacaro default.
Cubo awali pamintaan Sanak tu jo ''sadonyo:'' untuak mancari kasado kandungan (tamasuak laman rundiang, templat, dll), atau gunoan ruangnamo nan diinginkan sabagai awalan.",
'search-nonefound' => 'Indak ado hasil nan cocok sasuai jo parmintaan',
'powersearch' => 'Pencarian lanjut',
'powersearch-legend' => 'Pencarian lanjut',
'powersearch-ns' => 'Mancari di ruangnamo:',
'powersearch-redir' => 'Daftar pangaliahan',
'powersearch-field' => 'Mancari',
'powersearch-togglelabel' => 'Piliah:',
'powersearch-toggleall' => 'Sadonyo',
'powersearch-togglenone' => 'Dak ado',
'search-external' => 'Pancarian lua',
'searchdisabled' => 'Pancarian {{SITENAME}} dimatian.
Sanak samantaro dapek mancari lewaik Google.
Ingek indeks Google untuak {{SITENAME}} mungkin lah kadaluarsa.',

# Preferences page
'preferences' => 'Pangaturan',
'mypreferences' => 'Pangaturan',
'prefs-edits' => 'Jumlah suntiangan:',
'prefsnologin' => 'Alun masuak log',
'prefsnologintext' => 'Sanak musti <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} masuak log]</span> untuak mengeset pangaturan.',
'changepassword' => 'Tuka kato sandi',
'prefs-skin' => 'Kulik',
'skin-preview' => 'Caliak',
'datedefault' => 'Indak usah diatua',
'prefs-beta' => 'Baru uji-cubo (Beta)',
'prefs-datetime' => 'Tanggal jo wakatu',
'prefs-labs' => 'Alaik uji',
'prefs-user-pages' => 'Laman pangguno',
'prefs-personal' => 'Profil pangguno',
'prefs-rc' => 'Parubahan baru',
'prefs-watchlist' => 'Daftar pantau',
'prefs-watchlist-days' => 'Jumlah hari dalam daftar pantau:',
'prefs-watchlist-days-max' => 'Maksimum $1 {{PLURAL:$1|hari}}',
'prefs-watchlist-edits' => 'Jumlah suntiangan nan ditunjuakan pado daftar pantau:',
'prefs-watchlist-edits-max' => 'Nilai maksimum: 1000',
'prefs-watchlist-token' => 'Token pantauan:',
'prefs-misc' => 'Lain-lain',
'prefs-resetpass' => 'Tuka kato sandi',
'prefs-changeemail' => 'Tuka alamaik surel',
'prefs-setemail' => 'Atua alamaik surel',
'prefs-email' => 'Piliahan surel',
'prefs-rendering' => 'Tampilan',
'saveprefs' => 'Simpan',
'resetprefs' => 'Batalan parubahan',
'restoreprefs' => 'Baliakan ka setelan awal',
'prefs-editing' => 'Panyuntiangan',
'prefs-edit-boxsize' => 'Ukuran kotak panyuntiangan.',
'rows' => 'Barih:',
'columns' => 'Kolom:',
'searchresultshead' => 'Cari',
'resultsperpage' => 'Hasil per laman:',
'stub-threshold' => 'Ambang bateh untuak format <a href="#" class="stub">pautan rancangan</a>:',
'stub-threshold-disabled' => 'Nonaktifkan',
'recentchangesdays' => 'Jumlah hari nan ditunjuakan di parubahan baru:',
'recentchangesdays-max' => 'Maksimum $1 {{PLURAL:$1|hari}}',
'recentchangescount' => 'Jumlah suntiangan nan ditunjuakan:',
'prefs-help-recentchangescount' => 'Iko untuak parubahan tabaru, riwayaik laman nan lalu, sarato log.',
'prefs-help-watchlist-token' => 'Mangisi kotak ko jo kunci rasio (PIN) akan manghasilkan sindikasi RSS untuak daftar pantau Sanak. Sia juo nan tau jo kunci ko dapek mambaco daftar pantau Sanak, jadi hati-hatilah mamiliah nilainyo. 
Barikuik ko nilai acak nan dapek Sanak gunoan: $1',
'savedprefs' => 'Pangaturan lah tasimpan',
'timezonelegend' => 'Zona wakatu:',
'localtime' => 'Wakatu satampaik:',
'timezoneuseserverdefault' => 'Gunokan nan dari wiki ($1)',
'timezoneuseoffset' => 'Lainnyo (tantuan pabedoannyo)',
'timezoneoffset' => 'Pabedoan¹:',
'servertime' => 'Wakatu server:',
'guesstimezone' => 'Isian dari paramban web',
'timezoneregion-africa' => 'Afrika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antarktika',
'timezoneregion-arctic' => 'Arktik',
'timezoneregion-asia' => 'Asia',
'timezoneregion-atlantic' => 'Samudera Atlantik',
'timezoneregion-australia' => 'Australia',
'timezoneregion-europe' => 'Eropa',
'timezoneregion-indian' => 'Samudera Hindia',
'timezoneregion-pacific' => 'Samudera Pasifik',
'allowemail' => 'Izinkan pangguno lain mangirim surel',
'prefs-searchoptions' => 'Cari',
'prefs-namespaces' => 'Ruangnamo',
'defaultns' => 'Ataupun cari dalam ruangnamo ko:',
'default' => 'baku',
'prefs-files' => 'Berkas',
'prefs-custom-css' => 'CSS paribadi',
'prefs-custom-js' => 'JS paribadi',
'prefs-common-css-js' => 'CSS/JS untuak kasado kulik:',
'prefs-reset-intro' => 'Angku dapek manggunokan laman ko untuak mangambalikan pangaturan ka setelan baku situs ko.
Pangambalian pangaturan indak dapek dibatalan.',
'prefs-emailconfirm-label' => 'Surel konfirmasi:',
'prefs-textboxsize' => 'Ukuran kotak suntiang',
'youremail' => 'Surel:',
'username' => '{{GENDER:$1|Namo pangguno}}:',
'uid' => 'ID {{GENDER:$1|pangguno}}:',
'prefs-memberingroups' => '{{GENDER:$2|Anggota}} {{PLURAL:$1|kalompok}}:',
'prefs-registration' => 'Wakatu pandaftaran:',
'yourrealname' => 'Namo asli:',
'yourlanguage' => 'Bahaso',
'yourvariant' => 'Varian isi bahaso:',
'prefs-help-variant' => 'Varian atau ortografi pilihan Angku untuak manampilkan isi laman wiki ko.',
'yournick' => 'Tando tangan:',
'prefs-help-signature' => 'Komen pado laman rundiang paralu ditandotangani jo "<nowiki>~~~~</nowiki>" nan ka diubah manjadi tando tangan Sanak sarato wakatu kini ko.',
'badsig' => 'Tando tangan mantah indak sah; pariso tag HTML.',
'badsiglength' => 'Tando tangan Sanak panjang bana.
Jan labiah dari $1 {{PLURAL:$1|karakter}}.',
'yourgender' => 'Jinih kalamin:',
'gender-unknown' => 'Indak ditanyo',
'gender-male' => 'Laki-laki',
'gender-female' => 'Padusi',
'prefs-help-gender' => 'Piliahan: digunoan untuak manyabuik jinih kalamin dek parangkaik lunak. Informasi ko akan tabukak untuak umum.',
'email' => 'Surel',
'prefs-help-realname' => 'Namo asli sifaiknyo piliahan.
Kalau Sanak manambahannyo, namo asli Sanak akan digunoan untuak manunjuakan hasil karajo Sanak.',
'prefs-help-email' => "Alamaik surel ko hanyolah tambahan, tapi paralu untuak ma-''reset'' kato sandi, bilo Sanak lupo jo kato sandi.",
'prefs-help-email-others' => 'Sanak dapek mamiliah untuak mangizinkan urang lain manghubuangi Sanak jo surel malalui laman pangguno atau laman rundiang.
Alamaik surel Sanak indakkan tau dek urang nan manghubuangi sanak tu.',
'prefs-help-email-required' => 'Alamaik surel wajib diisi.',
'prefs-info' => 'Informasi dasar',
'prefs-i18n' => 'Internasionalisasi',
'prefs-signature' => 'Tando tangan',
'prefs-dateformat' => 'Format tanggal',
'prefs-timeoffset' => 'Format wakatu',
'prefs-advancedediting' => 'Piliahan lanjuik',
'prefs-advancedrc' => 'Piliahan lanjuik',
'prefs-advancedrendering' => 'Piliahan lanjuik',
'prefs-advancedsearchoptions' => 'Piliahan lanjuik',
'prefs-advancedwatchlist' => 'Piliahan lanjuik',
'prefs-displayrc' => 'Piliahan tampilan',
'prefs-displaysearchoptions' => 'Piliahan tampilan',
'prefs-displaywatchlist' => 'Piliahan tampilan',
'prefs-diffs' => 'Pabedoan',

# User preference: email validation using jQuery
'email-address-validity-valid' => 'Alamaik surel nampaknyo sah',
'email-address-validity-invalid' => 'Masuakan alamaik surel nan sah',

# User rights
'userrights' => 'Manajemen hak pangguno',
'userrights-lookup-user' => 'Mangatua kalompok pangguno',
'userrights-user-editname' => 'Masuakan namo pangguno:',
'editusergroup' => 'Suntiang kalompok pangguno',
'editinguser' => "Mangganti hak akses pangguno '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Suntiang kalompok pangguno',
'saveusergroups' => 'Simpan kalompok pangguno',
'userrights-groupsmember' => 'Anggota dari:',
'userrights-groupsmember-auto' => 'Anggota implisit dari:',
'userrights-groups-help' => 'Sanak dapek mangubah kalompok pangguno ko:
* Kotak jo tando centang marupoan kalompok pangguno tasabuik
* Kotak indak ado tando centang bararti pangguno ko bukan anggota kalompok tasabuik
* Tando * manandoan Sanak indak dapek mambatalan kalompok tasabuik bilo Sanak alah manambahannyo, ataupun sabaliaknyo.',
'userrights-reason' => 'Alasan:',
'userrights-no-interwiki' => 'Sanak indak bahak untuak mangubah hak pangguno di wiki lain.',
'userrights-nodatabase' => 'Basis data $1 indak ado atau bukan disiko.',
'userrights-nologin' => 'Sanak musti [[Special:UserLogin|masuak log]] jo akun panguruih untuak dapek mangubah hak pangguno.',
'userrights-notallowed' => 'Akun Sanak indak ado izin untuak manambah atau malapeh hak pangguno.',
'userrights-changeable-col' => 'Kalompok nan dapek Sanak ubah',
'userrights-unchangeable-col' => 'Kalompok nan indak dapek Sanak ubah',

# Groups
'group' => 'Kalompok:',
'group-user' => 'Pangguno',
'group-autoconfirmed' => 'Pangguno takonfirmasi otomatis',
'group-bot' => 'Bot',
'group-sysop' => 'Panguruih',
'group-bureaucrat' => 'Birokrat',
'group-suppress' => 'Pangawas',
'group-all' => '(sadonyo)',

'group-user-member' => '{{GENDER:$1|pangguno}}',
'group-autoconfirmed-member' => '{{GENDER:$1|pangguno takonfirmasi otomatis}}',
'group-bot-member' => '{{GENDER:$1|bot}}',
'group-sysop-member' => '{{GENDER:$1|panguruih}}',
'group-bureaucrat-member' => '{{GENDER:$1|birokrat}}',
'group-suppress-member' => '{{GENDER:$1|pangawas}}',

'grouppage-user' => '{{ns:project}}:Pangguno',
'grouppage-autoconfirmed' => '{{ns:project}}:Pangguno takonfirmasi otomatis',
'grouppage-bot' => '{{ns:project}}:Bot',
'grouppage-sysop' => '{{ns:project}}:Panguruih',
'grouppage-bureaucrat' => '{{ns:project}}:Birokrat',
'grouppage-suppress' => '{{ns:project}}:Pangawas',

# Rights
'right-read' => 'Mambaco laman',
'right-edit' => 'Manyuntiang laman',
'right-createpage' => 'Mambuek laman baru (nan bukan laman diskusi)',
'right-createtalk' => 'Mambuek laman diskusi',
'right-createaccount' => 'Mambuek akun baru',
'right-minoredit' => 'Manandoi suntiangan ketek',
'right-move' => 'Mamindahan laman',
'right-move-subpages' => 'Mamindahan laman jo kasado sublaman',
'right-move-rootuserpages' => 'Mamindahan laman pangguno',
'right-movefile' => 'Mamindahan berkas',
'right-suppressredirect' => 'Indak mambuek pangaliahan wakatu mamindahan laman',
'right-upload' => 'Mamuek berkas',
'right-reupload' => 'Manimpo berkas lamo',
'right-reupload-own' => 'Manimpo berkas nan dimuek surang',
'right-purge' => 'Mangapuih singgahan laman tanpa laman konfirmasi',
'right-autoconfirmed' => 'Manyuntiang laman palinduangan semi',
'right-bot' => 'Dipalakuan sabagai proses otomatis',
'right-nominornewtalk' => 'Indak ado tando suntiangan ketek di laman rundiang mamicu pasan baru',
'right-apihighlimits' => 'Manggunoan bateh labiah tinggi dalam kueri API',
'right-writeapi' => 'Manggunoan panulisan API',
'right-delete' => 'Mangapuih laman',
'right-suppressionlog' => 'Mancaliak log privat',
'right-unblockself' => 'Malapehan sakek diri surang',
'right-editinterface' => 'Manyuntiang antarmuko pangguno',
'right-editusercss' => 'Manyuntiang berkas CSS pangguno lain',
'right-edituserjs' => 'Manyuntiang berkas JS pangguno lain',
'right-noratelimit' => 'Indak dipangaruahi jo pambatehan jumlah suntiangan',
'right-import' => 'Mangimpor laman dari wiki lain',
'right-importupload' => 'Mangimpor laman dari berkas nan dimuek',
'right-autopatrol' => 'Suntiangan surang sacaro otomatis ditandoi tapantau',

# Special:Log/newusers
'newuserlogpage' => 'Log pangguno baru',
'newuserlogpagetext' => 'Di bawah ko log pandaftaran pangguno baru',

# User rights log
'rightslog' => 'Log parubahan hak akses',
'rightslogtext' => 'Di bawah ko daftar log parubahan pado hak-hak pangguno.',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'baco laman ko',
'action-edit' => 'suntiang laman ko',
'action-createpage' => 'buek laman',
'action-createtalk' => 'buek laman diskusi',
'action-createaccount' => 'buek akun pangguno ko',
'action-minoredit' => 'tandoi sabagai suntiangan ketek',
'action-move' => 'pindahan laman ko',
'action-move-subpages' => 'pindahkan laman ko, jo sublamannyo',
'action-move-rootuserpages' => 'pindahan laman pangguno',
'action-movefile' => 'pindahkan berkas ko',
'action-upload' => 'muek berkas ko',
'action-reupload' => 'timpo berkas lamo',
'action-writeapi' => 'manggunoan panulisan API',
'action-import' => 'impor laman ko dari wiki lain',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|parubahan}}',
'recentchanges' => 'Parubahan baru',
'recentchanges-legend' => 'Piliahan parubahan baru',
'recentchanges-summary' => 'Caliak parubahan tabaru pado wiki di laman ko.',
'recentchanges-feed-description' => 'Tamuan parubahan baru dalam umpan wiki ko',
'recentchanges-label-newpage' => 'Suntiangan ko mambuek laman baru',
'recentchanges-label-minor' => 'Iko suntiangan ketek',
'recentchanges-label-bot' => 'Suntiang ko dibuek dek bot',
'recentchanges-label-unpatrolled' => 'Suntiangan ko alun dipatroli',
'rcnote' => "Berikuik ko {{PLURAL:$1|'''$1'''}} parubahan dalam {{PLURAL:$2|'''$2''' hari}} tarakhia, sampai $4, pukul $5.",
'rcnotefrom' => "Di bawah ko ado parubahan mulai dari '''$2''' (sampai '''$1''' parubahan).",
'rclistfrom' => 'Tunjuakan parubahan baru mulai dari tanggal $1',
'rcshowhideminor' => '$1 suntiangan ketek',
'rcshowhidebots' => '$1 bot',
'rcshowhideliu' => '$1 pangguno masuak log',
'rcshowhideanons' => '$1 pangguno anon',
'rcshowhidepatr' => '$1 suntiangan tapatroli',
'rcshowhidemine' => '$1 suntiangan denai',
'rclinks' => 'Tunjuakan $1 parubahan tabaru dalam $2 hari tarakhia<br />$3',
'diff' => 'bedo',
'hist' => 'sijarah',
'hide' => 'Suruakan',
'show' => 'Tunjuakan',
'minoreditletter' => 'k',
'newpageletter' => 'B',
'boteditletter' => 'b',
'rc-enhanced-expand' => 'Tampilkan rincian (paralu JavaScript)',
'rc-enhanced-hide' => 'Suruakkan rincian',

# Recent changes linked
'recentchangeslinked' => 'Parubahan takaik',
'recentchangeslinked-toolbox' => 'Parubahan takaik',
'recentchangeslinked-title' => 'Parubahan nan takaik jo "$1"',
'recentchangeslinked-noresult' => 'Indak ado parubahan pado laman nan tapauik salamo periode nan ditantuan',
'recentchangeslinked-summary' => "Iko daftar parubahan tarakhia pado laman nan tahubuang dari laman tatantu (atau anggota dari kategori tatantu).
Laman pado [[Special:Watchlist|daftar pantauan Sanak]] ditandoi jo '''cetak taba'''.",
'recentchangeslinked-page' => 'Namo laman:',
'recentchangeslinked-to' => 'Tampilkan parubahan dari laman nan takaik jo laman nan ko',

# Upload
'upload' => 'Muek berkas',
'uploadbtn' => 'Mamuek berkas',
'reuploaddesc' => 'Batal dan baliak ka formulir pamuatan',
'upload-tryagain' => 'Kirim parubahan katarangan berkas',
'uploadnologin' => 'Alun masuak log',
'uploadnologintext' => 'Sanak musti [[Special:UserLogin|masuak log]] untuak dapek mamuek berkas.',
'upload_directory_missing' => 'Direktori pamuatan ($1) indak basobok dan indak dapek dibuek dek server web.',
'upload_directory_read_only' => 'Direktori pamuatan ($1) indak dapek ditulih jo server web.',
'uploaderror' => 'Kasalahan pamuatan',
'upload-recreate-warning' => "'''Paringatan: Berkas jo namo tu alah dihapuih atau dipindahan.'''

Log pangapuihan dan pamindahan laman ko adolah sabagai barikuik:",
'uploadtext' => "Gunoan formulir di bawah ko untuak mangunggah berkas.
Untuak manampilan atau mancari berkas nan sabalumnyo dimuek, gunoan [[Special:FileList|daftar berkas]]. Pangunggahan (ulang) tacatat dalam [[Special:Log/upload|log pangunggahan]], samantaro pangapuihan tacatat dalam [[Special:Log/delete|log pangapuihan]].

Untuak manampilkan berkas pado suatu laman, gunoan salah satu format di bawah ko:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Berkas.jpg]]</nowiki></code>''' untuak manampilan berkas dalam ukuran aslinyo
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Berkas.png|200px|thumb|left|teks alternatif]]</nowiki></code>''' untuak manampilan berkas jo leba 200px dalam sabuah kotak di kiri laman jo 'teks alternatif' sabagai katarangan gambar
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Berkas.ogg]]</nowiki></code>''' sabagai pautan langsuang ka berkas media nan dimakasuik tanpa manampilan berkas tarsabuik di laman wiki",
'upload-permitted' => 'Jenis berkas nan dipabuliahan: $1.',
'upload-preferred' => 'Jenis berkas nan disaranan: $1.',
'upload-prohibited' => 'Jenis berkas nan dilarang: $1.',
'uploadlog' => 'log pangunggahan',
'uploadlogpage' => 'Log pangunggahan',
'uploadlogpagetext' => 'Barikuik ko adolah daftar pangunggahan berkas tabaru. 
Caliak [[Special:NewFiles|galeri berkas baru]] untuak tampilan visual.',
'filename' => 'Namo berkas',
'filedesc' => 'Ikhtisar',
'fileuploadsummary' => 'Ikhtisar:',
'filereuploadsummary' => 'Parubahan berkas:',
'filestatus' => 'Status hak cipta:',
'filesource' => 'Sumber:',
'uploadedfiles' => 'Berkas nan lah dimuek',
'ignorewarning' => 'Acuahkan pasan dan langsuang simpan berkas.',
'ignorewarnings' => 'Acuahkan pasan apo pun',
'minlength1' => 'Namo berkas paliang indak ado satu hurup.',
'illegalfilename' => 'Namo berkas "$1" ado karakter nan indak dipabuliahkan ado dalam judul. Ubah namo berkas dan cubalah muek baliak.',
'filename-toolong' => 'Namo berkas indak buliah labiah panjang dari 240 bita.',
'badfilename' => 'Namo berkas lah diubah manjadi "$1".',
'filetype-mime-mismatch' => 'Ekstensi berkas ".$1" indak cocok jo MIME nan tadeteksi dari berkas ($2).',
'filetype-badmime' => 'Berkas batipe MIME "$1" indak buliah dimuek.',
'filetype-bad-ie-mime' => 'Indak dapek mamuek berkas dek Internet Explorer mandeteksinyo sabagai "$1", nan indak diizinkan dan marupokan tipe berkas bapotensi bahayo.',
'fileexists-thumbnail-yes' => "Berkas ko nampaknyo marupoan gambar nan ukurannyo dipaketek ''(miniatua)''. [[$1|thumb]]
Cubo pareso berkas <strong>[[:$1]]</strong> tasabuik.
Koq berkas tu samemang marupoan gambar dalam ukuran aslinyo, Sanak indak paralu untuak mamuak baliak miniatur lainnyo.",
'file-thumbnail-no' => "Namo berkas dimulai jo <strong>$1</strong>.
Nampaknyo berkas ko marupoan gambar jo ukuran dipaketek ''(miniatua)''.
Koq Sanak ado versi resolusi panuah dari gambar ko, cubolah muekan berkas tasabuik. Koq indak, harap ubah namo berkas ko.",
'uploadedimage' => 'mamuek "[[$1]]"',
'upload-source' => 'Berkas sumber',
'sourcefilename' => 'Namo berkas sumber:',
'sourceurl' => 'URL sumber:',
'destfilename' => 'Namo berkas tujuan:',
'upload-maxfilesize' => 'Ukuran berkas maksimum: $1',
'upload-description' => 'Katarangan berkas',
'upload-options' => 'Opsi pangunggahan',
'watchthisupload' => 'Pantau berkas ko',

'license' => 'Lisensi:',
'license-header' => 'Lisensi',
'nolicense' => 'Indak ado nan dipiliah',
'license-nopreview' => '(Pratonton indak tasadio)',
'upload_source_url' => ' (suatu URL sah nan dapek diakses publik)',
'upload_source_file' => ' (berkas nan di komputer Sanak)',

# Special:ListFiles
'listfiles-summary' => 'Laman istimewa ko manampilan kasado berkas nan alah diunggah.
Katiko disariang dek pangguno, hanyo versi berkas tabaru dari berkas nan diunggah nan tampil.',
'listfiles_search_for' => 'Cari namo berkas:',
'imgfile' => 'berkas',
'listfiles' => 'Daftar berkas',
'listfiles_thumb' => 'Miniatua',
'listfiles_date' => 'Tanggal',
'listfiles_name' => 'Namo berkas',
'listfiles_user' => 'Pangguno',
'listfiles_size' => 'Ukuaran',
'listfiles_description' => 'Katarangan',
'listfiles_count' => 'Versi',

# File description page
'file-anchor-link' => 'Berkas',
'filehist' => 'Riwayaik berkas',
'filehist-help' => 'Klik pado tanggal/wakatu untuak mancaliak berkas pado maso tu',
'filehist-deleteall' => 'hapuih sadonyo',
'filehist-deleteone' => 'hapuih',
'filehist-revert' => 'baliakan',
'filehist-current' => 'kini ko',
'filehist-datetime' => 'Tanggal/Wakatu',
'filehist-thumb' => 'Miniatua',
'filehist-thumbtext' => 'Miniatua untuak versi per $1',
'filehist-nothumb' => 'Miniatua indak ado',
'filehist-user' => 'Pangguno',
'filehist-dimensions' => 'Dimensi',
'filehist-filesize' => 'Ukuaran berkas',
'filehist-comment' => 'Komen',
'filehist-missing' => 'Berkas indak ado',
'imagelinks' => 'Panggunoan berkas',
'linkstoimage' => 'Barikuik ko {{PLURAL:$1|$1 laman nan bapauik}} ka berkas:',
'linkstoimage-more' => 'Labiah dari $1 {{PLURAL:$1|laman}} ado pautan ka berkas ko.
Daftar barikuik manunjuakan {{PLURAL:$1|$1 laman jo pautan langsuang}} ka berkas ko.
Ado juo tasadio [[Special:WhatLinksHere/$2|daftar langkoknyo]].',
'nolinkstoimage' => 'Indak ado laman nan bapauik ka berkas ko.',
'morelinkstoimage' => 'Caliak [[Special:WhatLinksHere/$1|pautan baliak]] ka berkas ko.',
'linkstoimage-redirect' => '$1 (pangaliahan berkas) $2',
'duplicatesoffile' => 'Sabanyak {{PLURAL:$1|$1 berkas barikuik}} marupoan duplikat dari berkas ko ([[Special:FileDuplicateSearch/$2|rincian labiah lanjuik]]):',
'sharedupload' => 'Berkas ko barasal dari $1 dan mungkin digunoan dek babarapo proyek lain.',
'sharedupload-desc-there' => 'Berkas ko barasal dari $1 dan mungkin digunoan dek babarapo proyek lain.
Silakan caliak [$2 laman katarangan berkas] untuak informasi labiah lanjuik.',
'sharedupload-desc-here' => 'Berkas ko dari $1, mungkin juo digunoan untuak proyek-proyek lain.
Informasi dari [$2 laman katarangannyo] ado di bawah.',
'sharedupload-desc-edit' => 'Berkas ko barasal dari $1 dan mungkin digunoan dek proyek lain.
Mungkin Sanak nio manyuntiang katarangan pado [$2 laman katarangan berkas] di sinan.',
'sharedupload-desc-create' => 'Berkas ko barasal dari $1 dan mungkin digunoan dek proyek lain.
Mungkin Sanak nio manyuntiang katarangan pado [$2 laman katarangan berkas] di sinan.',
'filepage-nofile' => 'Indak ado berkas banomo iko.',
'filepage-nofile-link' => 'Indak ado berkas banamo iko, tapi sanak dapek [$1 mamueknyo].',
'uploadnewversion-linktext' => 'Muek versi baru dari berkas ko',
'shared-repo-from' => 'dari $1',
'shared-repo' => 'repositori basamo',
'upload-disallowed-here' => 'Sanak indak dapaek manimpo berkas ko.',

# File reversion
'filerevert' => 'Baliakan $1',
'filerevert-legend' => 'Baliakan berkas',
'filerevert-intro' => "Sanank ka mambaliakan berkas '''[[Media:$1|$1]]''' ka versi [$4 pado $3, $2].",
'filerevert-comment' => 'Alasan:',
'filerevert-defaultcomment' => 'Baliakan ka versi pado $2, $1',
'filerevert-submit' => 'Baliakan',
'filerevert-success' => "'''[[Media:$1|$1]]''' lah dibaliakan ka versi [$4 pado $3, $2]",
'filerevert-badversion' => 'Indak ado versi lokal tadahulu dari berkas ko pado wakatu nan dituju.',

# File deletion
'filedelete' => 'Hapuih $1',
'filedelete-legend' => 'Hapuih berkas',

# MIME search
'mimesearch' => 'Pancarian MIME',

# Unwatched pages
'unwatchedpages' => 'Laman nan indak tapantau',

# List redirects
'listredirects' => 'Daftar pangaliahan',

# Unused templates
'unusedtemplates' => 'Templat nan indak tapakai',
'unusedtemplatestext' => 'Daftar barikuik adolah kasado laman pado ruangnamo {{ns:template}} nan indak dipakai di laman manopun.
Pariso dulu "pautan baliak" ka templat tasabuik sabalun manghapuihnyo.',
'unusedtemplateswlh' => 'pautan baliak',

# Random page
'randompage' => 'Laman sumbarang',

# Random redirect
'randomredirect' => 'Pangaliahan sumbarang',

# Statistics
'statistics' => 'Statistik',
'statistics-header-pages' => 'Statistik laman',
'statistics-header-edits' => 'Statistik suntiangan',
'statistics-header-views' => 'Statistik tampilan',
'statistics-header-users' => 'Statistik pangguno',
'statistics-header-hooks' => 'Statistik lainnyo',
'statistics-articles' => 'Laman konten',
'statistics-pages' => 'Jumlah laman',
'statistics-pages-desc' => 'Sado laman pado wiki, tamasuak laman maota, pangaliahan, dll.',
'statistics-files' => 'Berkas nan lah dimuek',
'statistics-edits' => 'Jumlah suntiangan sangkek {{SITENAME}} ko dimulai',
'statistics-edits-average' => 'Rato-rato suntiangan per-laman',
'statistics-views-total' => 'Jumlah tampilan laman',
'statistics-views-total-desc' => 'Tampilan ka laman nan indak ado jo laman khusus nan indak ikuik',
'statistics-views-peredit' => 'Tampilan per-suntiangan',
'statistics-users' => 'Jumlah [[Special:ListUsers|pangguno tadaftar]]',
'statistics-users-active' => 'Pangguno aktip',
'statistics-users-active-desc' => 'Pangguno nan aktip dalam {{PLURAL:$1|$1 ari}} tarakhia.',
'statistics-mostpopular' => 'Laman nan paliang banyak ditampilkan',

'disambiguations' => 'Laman nan tahubuang ka laman disambiguasi',
'disambiguationspage' => 'Template:Disambig',
'disambiguations-text' => "Laman-laman barikuik punyo pautan ka '''laman disambiguasi'''.
Laman tasabuik saharuihnyo bapauik ka topik-topik nan sasuai.<br />
Laman nan dianggap sabagai laman disambiguasi jikok laman tasabuik manggunoan templat nan tahubuang ka [[MediaWiki:Disambiguationspage]].",

'pageswithprop' => 'Laman jo laman properti',
'pageswithprop-legend' => 'Laman jo laman properti',
'pageswithprop-text' => 'Laman ko barisi daftar laman nan manggunoan properti laman tatantu.',
'pageswithprop-prop' => 'Namo properti:',
'pageswithprop-submit' => 'Lanjuik',

'doubleredirects' => 'Pangaliahan gando',
'doubleredirectstext' => 'Laman ko mamuek daftar laman nan dialiahkan ka laman pangaliahan nan lain.
Satiok barih mamuek pautan ka pangaliahan partamo dan pangaliahan kadua sarato target dari pangaliahan kadua nan umumnyo adolah laman nan "sabananyo". Laman pangaliahan partamo saharuihnyo dialiahkan ka laman nan bukan marupoan laman pangaliahan.
Judul laman nan <del>dicoret</del> bararti alah dipelokan.',

'brokenredirects' => 'Pangaliahan rusak',
'brokenredirectstext' => 'Pangaliahan-pangaliahan barikuik marujuak pado laman nan indak ado.',

'withoutinterwiki' => 'Laman indak ado interwiki',
'withoutinterwiki-summary' => 'Laman-laman barikuik indak ado interwiki ka versi bahaso lain.',
'withoutinterwiki-submit' => 'Tunjuakan',

'fewestrevisions' => 'Laman jo parubahan sangenek',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|bita}}',
'ncategories' => '$1 {{PLURAL:$1|kategori}}',
'ninterwikis' => '$1 {{PLURAL:$1|interwiki}}',
'nlinks' => '$1 {{PLURAL:$1|pautan}}',
'nmembers' => '$1 {{PLURAL:$1|anggota}}',
'nrevisions' => '$1 {{PLURAL:$1|revisi}}',
'nviews' => 'dilihek $1 {{PLURAL:$1|kali}}',
'nimagelinks' => 'Digunoan pado $1 {{PLURAL:$1|laman}}',
'ntransclusions' => 'digunoan pado $1 {{PLURAL:$1|laman}}',
'specialpage-empty' => 'Indak ado nan paralu dilaporan.',
'lonelypages' => 'Laman yatim',
'lonelypagestext' => 'Laman-laman barikuik indak ado pautan dari atau ditransklusikan ka laman manopun di {{SITENAME}}.',
'uncategorizedpages' => 'Laman nan indak takategori',
'uncategorizedcategories' => 'Kategori nan indak takategori',
'uncategorizedimages' => 'Berkas nan indak takategori',
'uncategorizedtemplates' => 'Templat nan indak takategori',
'unusedcategories' => 'Kategori nan indak tapakai',
'unusedimages' => 'Berkas nan indak digunoan',
'wantedcategories' => 'Kategori nan diinginan',
'wantedpages' => 'Laman nan diinginan',
'wantedfiles' => 'Berkas nan diinginan',
'wantedfiletext-cat' => 'Berkas-berkas barikuik digunoan tapi indak ado. Berkas dari repositori asiang mungkin tacantum walaupun ado. Satiok "false positive" akan <del>dicoret</del>. Salain itu, laman nan manggunoan berkas nan indak ado akan dicantuman dalam [[:$1]].',
'wantedfiletext-nocat' => 'Berkas-berkas barikuik digunoan tapi indak ado. Berkas dari repositori asiang mungkin tacantum walaupun ado. Satiok "false positive" akan <del>dicoret</del>.',
'wantedtemplates' => 'Templat nan diinginan',
'mostlinked' => 'Laman nan acok dituju',
'mostlinkedcategories' => 'Kategori nan acok digunoan',
'mostlinkedtemplates' => 'Templat nan acok dituju',
'mostcategories' => 'Laman jo kategori tabanyak',
'mostimages' => 'Berkas nan paliang acok digunoan',
'mostinterwikis' => 'Laman jo interwiki paliang banyak',
'prefixindex' => 'Sado laman jo awalan',
'prefixindex-namespace' => 'Sado laman jo awalan (ruang namo $1)',
'shortpages' => 'Laman pendek',
'longpages' => 'Laman panjang',
'deadendpages' => 'Laman buntu',
'deadendpagestext' => 'Laman-laman ko indak ado pautan ka laman lain di {{SITENAME}}.',
'protectedpages' => 'Laman nan dilinduangi',
'protectedpages-indef' => 'Untuak palinduangan salamonyo',
'protectedpages-cascade' => 'Untuak palinduangan batingkek',
'protectedtitles' => 'Judul nan dilinduangi',
'protectedtitlesempty' => 'Indak ado judul nan dilinduangi jo parameter ko.',
'listusers' => 'Daftar pangguno',
'listusers-editsonly' => 'Tunjuakan hanyo pangguno nan ado jariah',
'listusers-creationsort' => 'Uruikan manuruik tanggal pandaftaran',
'usereditcount' => '$1 {{PLURAL:$1|}} suntiangan',
'usercreated' => '{{GENDER:$3|Dibuek}} pado $1 pukua $2',
'newpages' => 'Laman baru',
'newpages-username' => 'Namo pangguno:',
'ancientpages' => 'Laman paliang lamo',
'move' => 'Pindah',
'movethispage' => 'Pindahkan laman ko',
'unusedimagestext' => 'Berkas barikuik ko ado tapi indak takaik ka laman manopun.
Harok paratian jikok laman web lain mungkin ado pautan ka suatu berkas jo URL langsuang, dan  masih tadaftar di siko walaupun indak aktif digunoan.',
'unusedcategoriestext' => 'Kategori barikuik ado, tapi indak ado laman atau kategori lain nan manggunoannyo.',
'pager-newer-n' => '{{PLURAL:$1|$1 labiah baru}}',
'pager-older-n' => '{{PLURAL:$1|$1 labiah lamo}}',

# Book sources
'booksources' => 'Sumber buku',
'booksources-search-legend' => 'Cari di sumber buku',
'booksources-go' => 'Tuju',

# Special:Log
'specialloguserlabel' => 'Pangguno:',
'speciallogtitlelabel' => 'Target (judul atau pangguno):',
'log' => 'Log',
'all-logs-page' => 'Sado log publik',
'alllogstext' => 'Gabuangan kasado log nan ado di {{SITENAME}}.
Sanak dapek mamiliah jinih log nan ado, namo pangguno (bedoan hurup ketek/gadang), atau judul laman (bedoan hurup ketek/gadang).',
'logempty' => 'Indak basobok entri log nan sasuai.',
'log-title-wildcard' => 'Cari judul nan diawali jo teks ko',
'showhideselectedlogentries' => 'Tunjuakan/Suruakan entri log tapiliah',

# Special:AllPages
'allpages' => 'Kasado laman',
'alphaindexline' => '$1 sampai $2',
'nextpage' => 'Laman salanjuiknyo ($1)',
'prevpage' => 'Laman sabalunnyo ($1)',
'allpagesfrom' => 'Tunjuakan laman mulai dari:',
'allpagesto' => 'Tunjuakan laman sampai:',
'allarticles' => 'Kasado laman',
'allinnamespace' => 'Kasado laman (ruang namo $1)',
'allnotinnamespace' => 'Kasado laman (bukan ruang namo $1)',
'allpagesprev' => 'Sabalun',
'allpagesnext' => 'Lanjuik',
'allpagessubmit' => 'Tuju',
'allpagesprefix' => 'Tunjuakan laman jo awalan:',
'allpages-bad-ns' => '{{SITENAME}} indak ado ruang namo "$1".',
'allpages-hide-redirects' => 'Suruakan pangaliahan',

# SpecialCachedPage
'cachedspecial-refresh-now' => 'Caliak versi baru.',

# Special:Categories
'categories' => 'Kategori',
'categoriespagetext' => '{{PLURAL:$1|Isi kategori}} ko ado laman atau media.
[[Special:UnusedCategories|Kategori nan indak tapakai]] indak nampak di siko.
Lihek pulo [[Special:WantedCategories|kategori nan diinginan]].',
'categoriesfrom' => 'Tunjuakan kategori mulai jo:',
'special-categories-sort-count' => 'uruikan manuruik jumlah',
'special-categories-sort-abc' => 'uruikan manuruik abjad',

# Special:DeletedContributions
'deletedcontributions' => 'Jariah nan dihapuih',
'deletedcontributions-title' => 'Jariah nan dihapuih',
'sp-deletedcontributions-contribs' => 'Jariah',

# Special:LinkSearch
'linksearch' => 'Pancarian pautan lua',
'linksearch-pat' => 'Pola pancarian:',
'linksearch-ns' => 'Ruang namo:',
'linksearch-ok' => 'Cari',
'linksearch-line' => '$1 tapauik dari $2',

# Special:ListUsers
'listusersfrom' => 'Tunjuakan pangguno mulai dari:',
'listusers-submit' => 'Tunjuakan',
'listusers-noresult' => 'Pangguno indak basobok.',
'listusers-blocked' => '(tasakek)',

# Special:ActiveUsers
'activeusers' => 'Daftar pangguno aktif',
'activeusers-from' => 'Tunjuakan pangguno mulai dari:',
'activeusers-hidebots' => 'Suruakan bot',
'activeusers-hidesysops' => 'Suruakan panguruih',
'activeusers-noresult' => 'Pangguno indak basobok',

# Special:ListGroupRights
'listgrouprights' => 'Daftar kalompok pangguno',
'listgrouprights-summary' => 'Barikuik ko adolah daftar kalompok pangguno nan ado di wiki ko, jo daftar hak aksesnyo masiang-masiang. Informasi labih lanjuik masalah hak masiang-masiang dapek dijumpoi di [[{{MediaWiki:Listgrouprights-helppage}}|laman bantuan hak pangguno]].',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Hak nan balaku</span>
* <span class="listgrouprights-revoked">Hak nan dicabuik</span>',
'listgrouprights-group' => 'Kalompok',
'listgrouprights-rights' => 'Hak',
'listgrouprights-helppage' => 'Help:Hak akses',
'listgrouprights-members' => '(daftar anggota)',
'listgrouprights-addgroup' => 'Manambahan {{PLURAL:$2|kalompok}}: $1',
'listgrouprights-removegroup' => 'Mangapuih {{PLURAL:$2|kalompok}}: $1',
'listgrouprights-addgroup-all' => 'Manambahan sado kalompok',
'listgrouprights-removegroup-all' => 'Mangapuih kasado kalompok',
'listgrouprights-removegroup-self' => 'Mengapuih {{PLURAL:$2|kalompok}} dari akun surang: $1',
'listgrouprights-removegroup-self-all' => 'Mangapuih kasado kalompok dari akun surang',

# Email user
'emailuser' => 'Surel pangguno',
'emailuser-title-target' => 'Kirim surel ka {{GENDER:$1|panggun}} ko',
'emailuser-title-notarget' => 'Kirim surel',
'emailpage' => 'Kirim surel ka pangguno ko',
'emailpagetext' => 'Sanak dapek manggunoan formulir di bawah ko untuak mangirimkan surel ka {{GENDER:$1|pangguna}} ko.
Alamaik surel nan Sanak masuakkan di [[Special:Preferences|pangaturan akun]] akan kalua sabagai alamaik "Dari" pado surel tasabuik, jadi panarimo dapek langsuang mambalehnyo.',
'usermaildisabled' => 'Surel pangguno non-aktif',
'emailtarget' => 'Masuakan namo pangguno nan ka manarimo surel',
'emailusername' => 'Namo pangguno:',
'emailusernamesubmit' => 'Kirim',
'email-legend' => 'Kirim surel ka pangguno {{SITENAME}} lainnyo',
'emailfrom' => 'Dari:',
'emailto' => 'Untuak:',
'emailsubject' => 'Perihal:',
'emailmessage' => 'Pasan:',
'emailsend' => 'Kirim',
'emailccme' => 'Kirimkan denai salinan pasan.',

# Watchlist
'watchlist' => 'Pantauan',
'mywatchlist' => 'Pantauan',
'watchlistfor2' => 'Untuak $1 $2',
'addedwatchtext' => 'Laman "[[:$1]]" lah ditambahan ka [[Special:Watchlist|Pantauan]] Sanak.
Parubahan laman ko tamasuak laman rundiangnyo akan ditampilan disinan.',
'removewatch' => 'Hapuih dari daftar pantau',
'removedwatchtext' => 'Laman "[[:$1]]" lah dihapuih dari [[Special:Watchlist|daftar pantau Sanak]].',
'watch' => 'Pantau',
'watchthispage' => 'Pantau laman ko',
'unwatch' => 'Batal pantau',
'unwatchthispage' => 'Batal pantau laman ko',
'watchlist-details' => '{{PLURAL:$1|$1 laman}} dalam daftar pantau Sanak, indak tamasuak laman rundiangnyo.',
'wlheader-showupdated' => "Laman nan alah barubah sajak kunjuangan tarakhia Sanak ditunjuakan jo '''hurup taba'''",
'wlnote' => "Di bawah ko ado $1 {{PLURAL:$1|parubahan}} dalam {{PLURAL:$2|'''$2''' jam}} iko, sampai tanggal $3, pukua $4.",
'wlshowlast' => 'Tunjuakan $1 jam parubahan dalam $2 hari tarakhia $3',
'watchlist-options' => 'Piliahan daftar pantau',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Mamantau...',
'unwatching' => 'indak dipantau le...',

'enotif_reset' => 'Tandoi sado laman alah dibaco',
'enotif_body_intro_restored' => 'Laman $1 pado {{SITENAME}} alah dikambalian tanggal $PAGEEDITDATE dek {{gender:$2|$2}}, caliak $3 untuak revisi tabaru.',

# Delete
'deletepage' => 'Hapuih laman',
'confirm' => 'Konfirmasi',
'excontent' => 'isi sabalunnyo: "$1"',
'excontentauthor' => 'isinyo: "$1" (dan dibuek dek "[[Special:Contributions/$2|$2]]")',
'exbeforeblank' => 'isi sabalun dikosongan: "$1"',
'exblank' => 'laman kosong',
'delete-confirm' => 'Hapuih "$1"',
'delete-legend' => 'Hapuih',
'historywarning' => "'''Paringatan:''' Laman nan ka dihapuih ado riwayaik jo $1 {{PLURAL:$1|revisi}}:",
'confirmdeletetext' => 'Awak akan mahapuih laman atau berkas basamo riwayatnyo.
Pastikan awak mainginkannyo, dan awak lah tahu sagalo akibatnyo dan sasuai jo [[{{MediaWiki:Policy-url}}|kebijakan]] yang balaku.',
'actioncomplete' => 'Proses salasai',
'actionfailed' => 'Proses gagal',
'deletedtext' => '"$1" lah dihapuih.
Caliak $2 untuak rakam jajak laman nan lah dihapuih.',
'dellogpage' => 'Log pangapuihan',
'dellogpagetext' => 'Di bawah ko adolah log pangapuihan laman. Wakatu nan ditunjuakan adolah wakatu server.',
'deletecomment' => 'Alasan:',
'deleteotherreason' => 'Alasan lain/tambahan:',
'deletereasonotherlist' => 'Alasan lain',

# Rollback
'rollback' => 'Baliakan suntiangan',
'rollback_short' => 'Baliakan',
'rollbacklink' => 'baliakan',
'rollbacklinkcount' => 'baliakan $1 {{PLURAL:$1|suntiangan}}',
'rollbacklinkcount-morethan' => 'baliakan labiah dari $1 {{PLURAL:$1|suntiangan}}',
'rollbackfailed' => 'Gagal mambaliakan',

# Protect
'protectlogpage' => 'Log palinduangan',
'protectlogtext' => 'Di bawah ko daftar parubahan dari palinduangan laman.
Caliak [[Special:ProtectedPages|daftar laman talinduangi]] untuak daftar palinduangan laman tabaru.',
'protectedarticle' => 'malinduangkan "[[$1]]"',
'modifiedarticleprotection' => 'maubah tingkek palinduangan "[[$1]]"',
'protectcomment' => 'Alasan:',
'protectexpiry' => 'Kadaluwarsa:',
'protect_expiry_invalid' => 'Maso kadaluwarsa indak balaku',
'protect_expiry_old' => 'Maso kadaluwarsa adolah pado maso lampau',
'protect-text' => "Sanak buliah malihek jo mangganti tingkek palinduangan untuak laman '''$1'''.",
'protect-locked-access' => "Akun Sanak indak bahak untuak maubah tingkek palinduangan laman ko.
Barikuik ko pangaturan nan balaku untuak laman '''$1''':",
'protect-cascadeon' => 'Laman ko sedang dilindungi karano tamasuak dalam {{PLURAL:$1|laman|laman}} aktif perlindungan batingkek.
Awak dapek maubah tingkek perlindungannyo, walaupun indak pangaruah pado perlindungan batingkeknyo.',
'protect-default' => 'Kasado pangguno diizinan',
'protect-fallback' => 'Untuak pangguno jo izin  "$1" sajo',
'protect-level-autoconfirmed' => 'Untuak pangguno takonfirmasi otomatis sajo',
'protect-level-sysop' => 'Untuak panguruih sajo',
'protect-summary-cascade' => 'batingkek',
'protect-expiring' => 'sampai $1 (UTC)',
'protect-expiring-local' => 'sampai $1',
'protect-expiry-indefinite' => 'sataruihnyo',
'protect-cascade' => 'Linduangi laman nan takaik jo laman ko (palinduangan batingkek)',
'protect-cantedit' => 'Sanak indak dapek maubah tingkek palinduangan laman ko, dek indak ado izin untuak itu.',
'protect-othertime' => 'Wakatu lain:',
'protect-othertime-op' => 'wakatu lain',
'protect-existing-expiry' => 'Alah sampai: $3, $2',
'protect-otherreason' => 'Alasan lain/tambahan:',
'protect-otherreason-op' => 'Alasan lain',
'protect-dropdown' => '*Alasan umum palinduangan
** Vandal baulang
** Spam baulang
** Parang suntiangan
** Laman balalu lintas tinggi
** Digunoan di Palanta
** Templat baresiko tinggi
** Berkas nan banyak digunoan
** Baulang kali dihapuih dalam waktu dakek
** Baulang kali dialiahan tanpa barundiang
** Baulang kali dikosongan
** Pamintaan pangguno',
'protect-edit-reasonlist' => 'Suntiang alasan palinduangan',
'protect-expiry-options' => '1 jam:1 hour,1 ari:1 day,1 pakan:1 week,2 pakan:2 weeks,1 bulan:1 month,3 bulan:3 months,6 bulan:6 months,1 taun:1 year,salamonyo:infinite',
'restriction-type' => 'Palinduangan:',
'restriction-level' => 'Tingkek:',
'minimum-size' => 'Ukuran min',
'maximum-size' => 'Ukuran max',
'pagesize' => '(bita)',

# Restrictions (nouns)
'restriction-edit' => 'Suntiang',
'restriction-move' => 'Pindah',
'restriction-create' => 'Buek',
'restriction-upload' => 'Muek',

# Restriction levels
'restriction-level-sysop' => 'palinduangan panuah',
'restriction-level-autoconfirmed' => 'palinduangan semi',
'restriction-level-all' => 'sado tingkek',

# Undelete
'undelete' => 'Caliak laman nan dihapuih',
'undeletepage' => 'Caliak dan baliakan laman tahapuih',
'undeletepagetitle' => "'''Iko daftar revisi nan dihapuih dari [[:$1|$1]]'''.",
'viewdeletedpage' => 'Caliak laman nan dihapuih',
'undelete-nodiff' => 'Indak ado basobok revisi lamo',
'undeletebtn' => 'Baliakan',
'undeletelink' => 'caliak/baliakan',
'undeleteviewlink' => 'caliak',
'undeletedrevisions' => '{{PLURAL:$1|$1 revisi}} alah dikambalian',
'undelete-header' => 'Caliak [[Special:Log/delete|log pangapuihan]] untuak daftar laman nan baru dihapuih.',
'undelete-search-title' => 'Cari laman nan dihapuih',
'undelete-search-box' => 'Cari laman nan dihapuih',
'undelete-search-prefix' => 'Tunjuakan laman mulai dari:',
'undelete-cleanup-error' => 'Kasalahan sawaktu mangapuih arsip berkas "$1" nan indak digunoan.',

# Namespace form on various pages
'namespace' => 'Ruangnamo:',
'invert' => 'Baliakkan piliahan',
'namespace_association' => 'Ruangnamo takaik',
'blanknamespace' => '(Utamo)',

# Contributions
'contributions' => 'Jariah {{GENDER:$1|pangguno}}',
'contributions-title' => 'Jariah pangguno untuak $1',
'mycontris' => 'Jariah',
'contribsub2' => 'Untuak $1 ($2)',
'uctop' => '(ateh)',
'month' => 'Dari bulan (dan sabalunnyo):',
'year' => 'Dari taun (dan sabalunnyo):',

'sp-contributions-newbies' => 'Tunjuakan jariah pangguno baru sajo',
'sp-contributions-newbies-sub' => 'Untuak pangguno baru',
'sp-contributions-newbies-title' => 'Jariah pangguno baru',
'sp-contributions-blocklog' => 'log sakek',
'sp-contributions-deleted' => 'jariah pangguno nan lah dihapuih',
'sp-contributions-uploads' => 'muek',
'sp-contributions-logs' => 'log',
'sp-contributions-talk' => 'maota',
'sp-contributions-userrights' => 'pangalolaan hak pangguno',
'sp-contributions-blocked-notice' => 'Pangguno ko sadang kanai sakek. log pamblokiran tarakhia ditunjuakan disiko untuak referensi:',
'sp-contributions-blocked-notice-anon' => 'Alamaik IP ko tangah kanai sakek.
Entri log sakek tabaru ado di bawah ko untuak referensi:',
'sp-contributions-search' => 'Cari jariah',
'sp-contributions-username' => 'Alamaik IP atau namo pangguno:',
'sp-contributions-toponly' => 'Hanyo manampilan suntiangan nan tarakhia',
'sp-contributions-submit' => 'Cari',

# What links here
'whatlinkshere' => 'Pautan baliak',
'whatlinkshere-title' => 'Laman nan takaik ka "$1"',
'whatlinkshere-page' => 'Laman:',
'linkshere' => "Laman-laman ko bakaik ka '''[[:$1]]''':",
'nolinkshere' => "Indak ado laman nan punyo tautan ka '''[[:$1]]'''.",
'nolinkshere-ns' => "Indak ado pautan laman ka '''[[:$1]]''' pado ruang namo nan dipiliah.",
'isredirect' => 'laman pangaliahan',
'istemplate' => 'transklusi',
'isimage' => 'pautan berkas',
'whatlinkshere-prev' => '{{PLURAL:$1|sabalunnyo}}',
'whatlinkshere-next' => '{{PLURAL:$1|salanjuiknyo}}',
'whatlinkshere-links' => '← pautan',
'whatlinkshere-hideredirs' => '$1 pangaliahan',
'whatlinkshere-hidetrans' => '$1 transklusi',
'whatlinkshere-hidelinks' => '$1 pautan',
'whatlinkshere-hideimages' => '$1 pautan berkas',
'whatlinkshere-filters' => 'Panyariang',

# Block/unblock
'autoblockid' => 'Sakek otomatih #$1',
'block' => 'Sakek pangguno',
'unblock' => 'Lapeh sakek',
'blockip' => 'Sakek pangguno',
'blockip-title' => 'Sakek pangguno',
'blockip-legend' => 'Sakek pangguno',
'blockiptext' => 'Gunoan formulir di bawah ko untuak manyakek akses dari sabuah alamaik IP atau pangguno.
Iko hanyo buliah dilakuan untuak mancagah vandal, dan sajalan jo [[{{MediaWiki:Policy-url}}|kabijakan]].
Masuakan alasan sakek di bawah (contoh, mambuek karusakan atau vandal).',
'ipadressorusername' => 'Alamaik IP atau namo pangguno:',
'ipbexpiry' => 'Sampai:',
'ipbreason' => 'Alasan:',
'ipbreasonotherlist' => 'Alasan lain',
'ipbreason-dropdown' => '*Alasan umum sakek
** Marusak (vandal)
** Mangagiah informasi palsu
** Mangilangkan isi laman
** Spam pautan ka situs lua
** Mambuek ota gadang di laman
** Babuek intimidasi/palecehan
** Manyalahgunoan babarapo akun
** Namo pangguno talarang
** Bot alun ado bot flag',
'ipb-hardblock' => 'Halang pangguno tadaftar untuak manyuntiang dari alamaik IP ko',
'ipbcreateaccount' => 'Halang mambuek akun',
'ipbemailban' => 'Halang pangguno mangirim surel',
'ipbenableautoblock' => 'Otomatih sakek alamaik IP tarakhia nan digunoan pangguno ko, jo sado alamaik IP takaik nan mancubo manyuntiang.',
'ipbsubmit' => 'Sakek pangguno ko',
'ipbother' => 'Salamo:',
'ipboptions' => '2 jam:2 hours,1 ari:1 day,3 ari:3 days,1 pakan:1 week,2 pakan:2 weeks,1 bulan:1 month,3 bulan:3 months,6 bulan:6 months,1 taun:1 year,salamonyo:infinite',
'ipbotheroption' => 'lainnyo',
'ipbotherreason' => 'Alasan lain/tambahan:',
'ipbhidename' => 'Suruakan namo pangguno dari daftar jo suntiangan',
'ipbwatchuser' => 'Pantau laman pangguno ko jo laman rundiangnyo',
'ipb-disableusertalk' => 'Halang pangguno ko manyuntiang laman diskusinyo wakatu disakek',
'ipb-change-block' => 'Sakek baliak pangguno jo setelan ko',
'ipb-confirm' => 'Konfirmasi sakek',
'badipaddress' => 'Alamaik IP salah',
'blockipsuccesssub' => 'Sakek barasil',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] lah disakek.<br />
Caliak [[Special:BlockList|daftar sakek]] buek maninjaunyo.',
'ipb-blockingself' => 'Angku ka manyakek diri surang! Lai yakin apo nan dikarajoan?',
'ipb-edit-dropdown' => 'Suntiang alasan manyakek',
'ipb-unblock-addr' => 'Lapeh sakek $1',
'ipb-unblock' => 'Lapeh sakek pangguno atau alamaik IP',
'ipb-blocklist' => 'Caliak nan disakek',
'ipb-blocklist-contribs' => 'Jariah untuak $1',
'unblockip' => 'Lapeh sakek',
'unblockiptext' => 'Gunoan formulir ko untuak mangambalian hak akses alamaik IP atau pangguno nan kanai sakek',
'ipusubmit' => 'Lapeh sakek ko',
'unblocked' => '[[User:$1|$1]] lah dilapeh sakeknyo',
'unblocked-range' => '$1 lah dilapeh sakeknyo',
'unblocked-id' => 'Sakek $1 lah dilapeh',
'blocklist' => 'Pangguno kanai sakek',
'ipblocklist' => 'Pangguno kanai sakek',
'ipblocklist-legend' => 'Cari pangguno kanai sakek',
'blocklist-userblocks' => 'Suruakan akun tasakek',
'blocklist-tempblocks' => 'Suruakan sakek samantaro',
'blocklist-addressblocks' => 'Suruakan ciek IP tasakek',
'blocklist-rangeblocks' => 'Suruakan wilayah sakek',
'blocklist-timestamp' => 'Tanggal',
'blocklist-target' => 'Target',
'blocklist-expiry' => 'Sampai',
'blocklist-by' => 'Panguruih nan manyakek',
'blocklist-params' => 'Parameter sakek',
'blocklist-reason' => 'Alasan',
'ipblocklist-submit' => 'Cari',
'ipblocklist-localblock' => 'Sakek lokal',
'ipblocklist-otherblocks' => '{{PLURAL:$1|Sakek}} lain',
'infiniteblock' => 'salamonyo',
'expiringblock' => 'habih pado $1 di $2',
'anononlyblock' => 'hanyo anon.',
'noautoblockblock' => 'sakek otomatih dimatian',
'createaccountblock' => 'mambuek akun dimatian',
'emailblock' => 'surel disakek',
'blocklist-nousertalk' => 'indak dapek manyuntiang laman maota surang',
'ipblocklist-empty' => 'Daftar sakek ko kosong.',
'ipblocklist-no-results' => 'Alamaik IP atau pangguno nan dimintak indak disakek.',
'blocklink' => 'sakek',
'unblocklink' => 'lapeh sakek',
'change-blocklink' => 'ubah sakek',
'contribslink' => 'jariah',
'emaillink' => 'kirim surel',
'autoblocker' => 'Sakek otomatih dek alamaik IP lah digunoan jo "[[User:$1|$1]]".
Alasan disakek untuak $1 adolah "\'\'$2\'\'"',
'blocklogpage' => 'Log sakek',
'blocklogentry' => 'manyakek [[$1]] dalam maso $2 $3',
'blocklogtext' => 'Di bawah ko adolah log sakek jo palapehan sakek pado pangguno.
Alamaik IP nan disakek sacaro otomatis indak tadapaik dalam daftar ko.
Caliak [[Special:BlockList|daftar sakek]] untuak kasado pangguno nan kini kanai sakek.',
'unblocklogentry' => 'lapeh sakek $1',
'block-log-flags-anononly' => 'hanyo pangguno anonim',
'block-log-flags-nocreate' => 'mambuek akun dimatian',
'block-log-flags-noautoblock' => 'sakek otomatih dimatian',
'block-log-flags-noemail' => 'surel disakek',
'block-log-flags-nousertalk' => 'indak dapek manyuntiang laman maota surang',
'block-log-flags-angry-autoblock' => 'sistim sakek otomatih diaktipan',
'block-log-flags-hiddenname' => 'namo pangguno tasuruak',
'ipb_already_blocked' => '"$1" alah disakek',
'ipb-needreblock' => '$1 alah tasakek. Apo nio diubah pangaturannyo?',
'ipb-otherblocks-header' => '{{PLURAL:$1|Sakek}} lain',
'blockme' => 'Sakek denai',
'proxyblocker' => 'Sakek proksi',
'proxyblocker-disabled' => 'Fungsi ko dimatian',

# Developer tools
'lockdb' => 'Kunci basis data',
'unlockdb' => 'Bukak kunci basis data',
'lockedbyandtime' => '(dek {{GENDER:$1|$1}} pado $2 pukua $3)',

# Move page
'move-page' => 'Pindahan $1',
'move-page-legend' => 'Pindahkan laman',
'movepagetext' => "Formulir di bawah ko digunoan untuak maubah namo suatu laman dan mamindahan sadonyo data riwayaik ka namo baru. 
Judua lamo tu ka manjadi laman paraliahan manuju judua nan baru. 
Awak dapek mampabarui paraliahan-paraliahan nan manuju ka judua lamo sacaro otomatis.
Kok indak dipabarui sacaro otomatis, pastikan lah dipareso laman ko dari [[Special:DoubleRedirects|paraliahan ganda]] atau [[Special:BrokenRedirects|paralihan rusak]]. Awak batanggung-jawak untuak mamastian bahaso pautan tu taruih manyambuang ka laman nan saaruihnyo.

Ingeklah bahaso laman ko '''indak''' ka bapindah apobilo lah ado laman nan manggunoan judua nan baru, kacuali bilo laman tu kosong atau marupoan laman paraliahan dan indak punyo riwayaik suntiangan. Aratinyo awak dapek maubah baliak namo laman ka namo samulo apobilo ado kasalahan, dan bahaso awak indak dapek manimpo laman nan lah ado.

'''Paringatan!''' 
Iko dapek maakibaikan parubahan nan indak dipakiroan pado laman nan populer; jadi pastikan awak paham akibaik tindakan ko sabalun malanjuikannyo.",
'movepagetext-noredirectfixer' => "Formulir di bawah ko digunoan untuak maubah namo suatu laman dan mamindahan sado data riwayaiknyo ka namo baru. 
Judul lamo tu ka manjadi laman paraliahan manuju judul nan baru. 
Sanak dapek mampabarui paraliahan-paraliahan nan manuju ka judul lamo sacaro otomatih.
Kok indak dipabarui sacaro otomatih, pastikan lah dipareso laman ko dari [[Special:DoubleRedirects|paraliahan ganda]] atau [[Special:BrokenRedirects|paralihan rusak]]. Sanak batangguang-jawek untuak mamastian pautan tu taruih manyambuang ka laman nan saaruihnyo.

Ingeklah bahaso laman ko '''indak''' ka bapindah apobilo lah ado laman nan manggunoan judul nan baru tu, kacuali bilo laman tu kosong atau marupoan laman paraliahan dan indak punyo riwayaik suntiangan. Aratinyo Sanak dapek maubah baliak namo laman ka namo samulo apobilo ado kasalahan, dan Sanak indak dapek manimpo laman nan lah ado.

'''Paringatan!''' 
Iko dapek maakibaikan parubahan nan indak dipakiroan pado laman nan populer; jadi pastikan Sanak paham akibaik tindakan ko sabalun malanjuikannyo.",
'movepagetalktext' => "Laman rundiang nan takaik akan dipindahan sacaro otomatih '''kacuali bilo:'''

*Laman rundiang nan indak kosong lah ado pado judul baru, atau
*Sanak indak mangagiah tando pado kotak di bawah.

Dalam kasus tu, kok amuah Sanak dapek mamindahan ataupun manggabuangan laman sacaro manual.",
'movearticle' => 'Pindahkan laman',
'moveuserpage-warning' => "'''Paringatan:''' Sanak tangah mamindahan laman pangguno. Paralu dikatahui bahwa hanyo laman nan ka bapindah namun pangguno ''indak akan'' baganti namo.",
'movenologin' => 'Alun masuak log',
'movenologintext' => 'Sanak musti pangguno tadaftar dan [[Special:UserLogin|masuak log]] untuak mamindahan laman.',
'movenotallowed' => 'Sanak indak ado izin untuak mamindahan laman.',
'movenotallowedfile' => 'Sanak indak ado izin untuak mamindahan berkas.',
'cant-move-user-page' => 'Sanak indak ado izin untuak mamindahan laman pangguno (bagian dari sublaman).',
'cant-move-to-user-page' => 'Sanak indak ado izin untuak mamindahan laman ka laman pangguno (salain ka sublaman pangguno).',
'newtitle' => 'Ka judul baru:',
'move-watch' => 'Pantau laman ko',
'movepagebtn' => 'Pindahkan laman',
'pagemovedsub' => 'Pamindahan barasil',
'movepage-moved' => '\'\'\'"$1" lah dipindahan ka "$2"\'\'\'',
'movepage-moved-redirect' => 'Pangaliahan lah dibuek.',
'movepage-moved-noredirect' => 'Pangaliahan indak dibuek.',
'articleexists' => 'Laman nan banamo tu lah ado, atau namo nan Sanak piliah indak tapek.
Silakan piliah namo lain.',
'cantmove-titleprotected' => 'Sanak indak dapek mamindahan laman kasiko dek judul barunyo kanai linduang dari dibuek',
'talkexists' => "'''Laman tasabuik barasil dipindahan, tapi laman rundiangnyo indak dapek dipindahan dek lah ado laman rundiang disinan. Silakan digabuang laman rundiang tu sacaro manual.'''",
'movedto' => 'pindahan ka',
'movetalk' => 'Pindahkan laman rundiang nan takaik',
'move-subpages' => 'Pindahkan sublaman (sampai $1)',
'move-talk-subpages' => 'Pindahkan sublaman dari laman rundiang (sampai $1)',
'movelogpage' => 'Log pamindahan',
'movelogpagetext' => 'Di bawah ko daftar log pamindahan laman.',
'movereason' => 'Alasan:',
'revertmove' => 'baliakkan',
'immobile-source-namespace' => 'Indak dapek mamindahan laman dalam ruangnamo "$1"',
'immobile-target-namespace' => 'Indak dapek mamindahan laman ka ruangnamo "$1"',
'move-leave-redirect' => 'Buek pangaliahan ka judul baru',

# Export
'export' => 'Ekspor laman',
'exporttext' => 'Sanak dapek mangekspor teks jo sajarah panyuntiangan suatu laman tatantu atau satu set laman dalam bantuak XML tatantu.
Hasil ekspor ko salanjuiknyo dapek diimpor ka wiki lainnyo nan manggunoan parangkaik lunak MediaWiki, jo manggunoan fasilitas [[Special:Import|laman impor]].

Untuak mangekspor laman, masuakan judul dalam kotak teks di bawah ko, satu judul pabarih, dan piliah apo Sanak nio mangekspor sacaro langkok jo versi tadaulu, atau hanyo versi tabaru jo catatan panyuntiangan tarakhia.

Jikok Sanak hanyo nio mangimpor versi tabaru, Sanak dapek malakuannyo labiah capek jo manggunoan pautan khusuih, sabagai contoh: [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] untuak mangekspor laman "[[{{MediaWiki:Mainpage}}]]".',
'exportall' => 'Ekspor kasado laman',
'exportcuronly' => 'Ekspor revisi kini sajo, bukan kasado versi tadaulu',
'exportnohistory' => "----
'''Catatan:''' Mangekspor kasado riwayaik suntiangan laman jo isian ko alah dinon-aktipan dek alasan kinerja.",
'exportlistauthors' => 'Tamasuak daftar langkok kontributor satiok laman',
'export-submit' => 'Ekspor',
'export-addcattext' => 'Tambah laman dari kategori:',
'export-addcat' => 'Tambah',
'export-addnstext' => 'Tambah laman dari ruangnamo:',
'export-addns' => 'Tambah',
'export-download' => 'Simpan sabagai berkas',
'export-templates' => 'Tamasuak templat',
'export-pagelinks' => 'Saratoan laman takaik sampai kadalaman:',

# Namespace 8 related
'allmessages' => 'Pasan sistem',
'allmessagesname' => 'Namo',
'allmessagesdefault' => 'Teks pasan baku',
'allmessagescurrent' => 'Teks pasan kini',
'allmessages-language' => 'Bahaso:',
'allmessages-filter-submit' => 'Tuju',

# Thumbnails
'thumbnail-more' => 'Pagadang',
'filemissing' => 'Berkas indak basobok',
'thumbnail_error' => 'Gagal mambuek miniatua: $1',

# Special:Import
'import' => 'Impor laman',
'importstart' => 'Mangimpor laman...',
'importnosources' => 'Indak ado sumber impor transwiki nan lah dibuek dan pamuatan riwayaik sacaro langsuang alah dinon-aktipan.',

# Import log
'importlogpagetext' => 'Administrasi laman impor jo riwayaik panyuntiangannyo dari wiki lain.',
'import-logentry-upload' => 'mangimpor [[$1]] malalui pangunggahan berkas',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Laman pangguno Sanak',
'tooltip-pt-anonuserpage' => 'Laman pangguno IP Sanak',
'tooltip-pt-mytalk' => 'Laman rundiang Sanak',
'tooltip-pt-anontalk' => 'Parundiangan tantang suntiangan dari IP ko',
'tooltip-pt-preferences' => 'Pangaturan denai',
'tooltip-pt-watchlist' => 'Daftar laman nan dipantau.',
'tooltip-pt-mycontris' => 'Daftar jariah Sanak',
'tooltip-pt-login' => 'Sanak disaranan untuak masuak log; walaupun indak wajib',
'tooltip-pt-anonlogin' => 'Sanak disaranan untuak masuak log; walaupun indak wajib',
'tooltip-pt-logout' => 'Kalua log',
'tooltip-ca-talk' => 'Parudiangan tantang isi laman',
'tooltip-ca-edit' => 'Angku dapek manyuntiang laman ko. Silakan gunoan tombol pratonton sabalun manyimpan',
'tooltip-ca-addsection' => 'Mulai bagian baru',
'tooltip-ca-viewsource' => 'Laman ko dilinduangi.
Sanak hanyo buliah mancaliak sumbernyo sajo',
'tooltip-ca-history' => 'Revisi sabalunnyo dari laman ko',
'tooltip-ca-protect' => 'Linduangi laman ko',
'tooltip-ca-unprotect' => 'Tuka palinduangan laman ko',
'tooltip-ca-delete' => 'Hapuih laman ko',
'tooltip-ca-move' => 'Pindahkan laman ko',
'tooltip-ca-watch' => 'Tambahkan laman ko ka daftar pantau Sanak',
'tooltip-ca-unwatch' => 'Kaluaan laman ko dari daftar pantau',
'tooltip-search' => 'Cari {{SITENAME}}',
'tooltip-search-go' => 'Cari laman jo namo nan samo jikok ado',
'tooltip-search-fulltext' => 'Cari laman untuak teks ko',
'tooltip-p-logo' => 'Kunjuangi palanta',
'tooltip-n-mainpage' => 'Kunjuangi palanta',
'tooltip-n-mainpage-description' => 'Kunjuangi palanta',
'tooltip-n-portal' => 'Tantang proyek, nan dapek Sanak buek, dima ka basobok',
'tooltip-n-currentevents' => 'Cari informasi manganai latar balakang kajadian ko',
'tooltip-n-recentchanges' => 'Daftar parubahan baru dalam wiki',
'tooltip-n-randompage' => 'Muek sumbarang laman',
'tooltip-n-help' => 'Tampek mancari bantuan',
'tooltip-t-whatlinkshere' => 'Daftar kasado laman wiki nan tahubuang kamari',
'tooltip-t-recentchangeslinked' => 'Parubahan baru laman nan bakaik jo laman ko',
'tooltip-feed-rss' => 'Umpan RSS untuak laman ko',
'tooltip-feed-atom' => 'Umpan Atom untuak laman ko',
'tooltip-t-contributions' => 'Caliak daftar jariah pangguno ko',
'tooltip-t-emailuser' => 'Kirimkan surel pado pangguno ko',
'tooltip-t-upload' => 'Muek berkas',
'tooltip-t-specialpages' => 'Daftar kasado laman istimewa',
'tooltip-t-print' => 'Versi cetak dari laman ko',
'tooltip-t-permalink' => 'Pautan parmanen untuak revisi laman ko',
'tooltip-ca-nstab-main' => 'Caliak isi laman',
'tooltip-ca-nstab-user' => 'Caliak laman pangguno',
'tooltip-ca-nstab-media' => 'Caliak laman media',
'tooltip-ca-nstab-special' => 'Laman istimewa, indak dapek disuntiang',
'tooltip-ca-nstab-project' => 'Caliak laman proyek',
'tooltip-ca-nstab-image' => 'Caliak laman berkas',
'tooltip-ca-nstab-mediawiki' => 'Caliak pasan sistem',
'tooltip-ca-nstab-template' => 'Caliak templat',
'tooltip-ca-nstab-help' => 'Caliak laman bantuan',
'tooltip-ca-nstab-category' => 'Caliak laman kategori',
'tooltip-minoredit' => 'Tandoi iko sabagai suntiangan ketek',
'tooltip-save' => 'Simpan nan diubah',
'tooltip-preview' => 'Caliak lu nan diubah, gunoan ko sabalun manyimpan',
'tooltip-diff' => 'Caliak parubahan nan lah dibuek',
'tooltip-compareselectedversions' => 'Caliak pabedoan antaro duo revisi piliahan laman ko',
'tooltip-watch' => 'Tambahkan laman ko ka daftar pantau',
'tooltip-recreate' => 'Buek baliak laman walaupun sabananyo pernah dihapuih',
'tooltip-upload' => 'Mulai mamuek',
'tooltip-rollback' => '"Baliakkan" uruangkan suntiang laman ko pado kontribusi tarakhir dalam sakali klik',
'tooltip-undo' => '"Batalan" uruangkan panyuntiangan iko jo mambukak bantuak suntiang dalam bantuak pratonton. Hal ko mamungkinkan manambahkan alasan pado kotak ringkasan.',
'tooltip-preferences-save' => 'Simpan preferensi',
'tooltip-summary' => 'Buek ringkasan pendek',

# Stylesheets
'print.css' => '/* CSS placed here will affect the print output */',

# Metadata
'notacceptable' => 'Server wiki indak dapek manyadioan data dalam format nan dapek dibaco dek klien Sanak.',

# Attribution
'anonymous' => '{{PLURAL:$1|Pangguno}} anonim {{SITENAME}}',
'siteuser' => 'pangguno {{SITENAME}} $1',
'anonuser' => 'pangguno anonim {{SITENAME}} $1',
'others' => 'lainnyo',
'siteusers' => '{{PLURAL:$2|pangguno}} {{SITENAME}} $1',
'anonusers' => '{{PLURAL:$2|pangguno}} anonim {{SITENAME}} $1',
'creditspage' => 'Panghargaan laman',

# Spam protection
'spam_blanking' => 'Sado revisi nan ado pautan ka $1, kosong',
'spam_deleting' => 'Sado revisi nan ado pautan ka $1, dihapuih',

# Info page
'pageinfo-title' => 'Informasi untuak "$1"',
'pageinfo-not-current' => 'Maaf, indak dapek mangagiahan informasi ko ka revisi lamo.',
'pageinfo-header-basic' => 'Informasi dasar',
'pageinfo-header-edits' => 'Riwayaik suntiangan',
'pageinfo-header-restrictions' => 'Palinduangan laman',
'pageinfo-header-properties' => 'Properti laman',
'pageinfo-display-title' => 'Tampilan judul',
'pageinfo-default-sort' => 'Kunci uruik baku',
'pageinfo-length' => 'Panjang laman (dalam bita)',
'pageinfo-article-id' => 'ID Laman',
'pageinfo-language' => 'Bahaso isi laman',
'pageinfo-robot-policy' => 'Statuih masin pancari',
'pageinfo-robot-index' => 'Dapek di indeks',
'pageinfo-robot-noindex' => 'Indak dapek di indeks',
'pageinfo-views' => 'Bara kali dibaco',
'pageinfo-watchers' => 'Bara urang nan mambaco',
'pageinfo-few-watchers' => 'Kurang dari $1 {{PLURAL:$1|pambaco}}',
'pageinfo-redirects-name' => 'Pangaliahan ka laman ko',
'pageinfo-subpages-name' => 'Sublaman dari laman ko',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|pangaliahan}}; $3 {{PLURAL:$3|bukan pangaliahan}})',
'pageinfo-firstuser' => 'Pambuek laman',
'pageinfo-firsttime' => 'Tanggal pambuatan laman',
'pageinfo-lastuser' => 'Panyuntiang tarakhia',
'pageinfo-lasttime' => 'Tanggal suntiangan tarakhia',
'pageinfo-edits' => 'Jumlah total suntiangan',
'pageinfo-authors' => 'Jumlah total panyuntiang',
'pageinfo-recent-edits' => 'Jumlah suntiangan tabaru (dalam $1 tarakhia)',
'pageinfo-recent-authors' => 'Jumlah panyuntiang tabaru',
'pageinfo-magic-words' => '{{PLURAL:$1|Kato}} ajaib ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Kategori}} tasuruak ($1)',
'pageinfo-templates' => '{{PLURAL:$1|Templat}} nan ditransklusi ($1)',
'pageinfo-transclusions' => '{{PLURAL:$1|Laman}} ditransklusi pado ($1)',
'pageinfo-toolboxlink' => 'Informasi laman',
'pageinfo-redirectsto' => 'Dialiahkan ka',
'pageinfo-redirectsto-info' => 'info',
'pageinfo-contentpage' => 'Dihituang sabagai laman konten',
'pageinfo-contentpage-yes' => 'Yo',
'pageinfo-protect-cascading' => 'Palinduangan baruruik dari siko',
'pageinfo-protect-cascading-yes' => 'Yo',
'pageinfo-protect-cascading-from' => 'Palinduangan baruruik dari',
'pageinfo-category-info' => 'Kategori informasi',
'pageinfo-category-pages' => 'Jumlah laman',
'pageinfo-category-subcats' => 'Jumlah subkategori',
'pageinfo-category-files' => 'Jumlah berkas',

# Skin names
'skinname-cologneblue' => 'Biru Köln',
'skinname-monobook' => 'MonoBook',
'skinname-modern' => 'Moderen',
'skinname-vector' => 'Vektor',

# Patrolling
'markaspatrolleddiff' => 'Tandoi lah dipatroli',
'markaspatrolledtext' => 'Tandoi laman ko lah dipatroli',
'markedaspatrolled' => 'Tandoi lah dipatroli',
'markedaspatrolledtext' => 'Revisi nan tapiliah dari [[:$1]] lah ditando tapatroli.',
'rcpatroldisabled' => 'Patroli parubahan baru dimatian',

# Patrol log
'patrol-log-page' => 'Log patroli',
'patrol-log-header' => 'Iko daftar log revisi nan alah dipatroli.',
'log-show-hide-patrol' => '$1 log patroli',

# Browsing diffs
'previousdiff' => '← Revisi sabalunnyo',
'nextdiff' => 'Revisi salanjuiknyo →',

# Media information
'imagemaxsize' => "Bateh ukuran gambar:<br />''(untuak laman katarangan berkas)''",
'thumbsize' => 'Ukuran miniatua:',
'widthheight' => '$1 × $2',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|laman}}',
'file-info' => 'ukuran berkas: $1, tipe MIME: $2',
'file-info-size' => '$1 × $2 piksel, ukuran berkas: $3, tipe MIME: $4',
'file-info-size-pages' => '$1 × $2 piksel, ukuran berkas: $3, tipe MIME: $4, $5 {{PLURAL:$5|laman}}',
'file-nohires' => 'Indak tasadio resolusi nan labiah gadang.',
'svg-long-desc' => 'Berkas SVG, $1 × $2 piksel, ukuran berkas: $3',
'svg-long-desc-animated' => 'Berkas animasi SVG, $1 × $2 piksel, ukuran berkas: $3',
'svg-long-error' => 'Berkas SVG indak sah: $1',
'show-big-image' => 'Resolusi panuah',
'show-big-image-preview' => 'Ukuran pratonton ko: $1',
'show-big-image-other' => '{{PLURAL:$2|Resolusi}} lainnyo: $1.',
'show-big-image-size' => '$1 × $2 piksel',
'file-info-gif-looped' => 'ulang',
'file-info-gif-frames' => '$1 {{PLURAL:$1|bingkai}}',
'file-info-png-looped' => 'ulang',
'file-info-png-repeat' => 'dimainkan $1 {{PLURAL:$1|kali}}',
'file-info-png-frames' => '$1 {{PLURAL:$1|bingkai}}',

# Special:NewFiles
'imagelisttext' => "Di bawah ko adolah daftar '''$1''' {{PLURAL:$1|berkas}} baruruik dari $2.",
'newimages-summary' => 'Laman istimewa barikuik manunjuakan daftar berkas nan tarakhia dimuek',
'newimages-legend' => 'Panyariang',
'newimages-label' => 'Namo berkas (atau sabagian darinyo):',
'showhidebots' => '($1 bot)',
'noimages' => 'Indak ado nan dicaliak.',
'ilsubmit' => 'Cari',
'bydate' => 'jo tanggal',
'sp-newimages-showfrom' => 'Tampilkan berkas baru mulai dari $2, $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'video-dims' => '$1, $2 × $3',
'seconds-abbrev' => '$1 d',
'minutes-abbrev' => '$1 min',
'hours-abbrev' => '$1 j',
'days-abbrev' => '$1 h',
'seconds' => '{{PLURAL:$1|1 datiak|$1 datiak}}',
'minutes' => '{{PLURAL:$1|1 minik|$1 minik}}',
'hours' => '{{PLURAL:$1|1 jam|$1 jam}}',
'days' => '{{PLURAL:$1|1 ari|$1 ari}}',
'weeks' => '{{PLURAL:$1|1 pakan|$1 pakan}}',
'months' => '{{PLURAL:$1|1 bulan|$1 bulan}}',
'years' => '{{PLURAL:$1|1 taun|$1 taun}}',
'ago' => '$1 nan lalu',
'just-now' => 'sabanta ko',

# Human-readable timestamps
'hours-ago' => '{{PLURAL:$1|1 jam|$1 jam}} nan lalu',
'minutes-ago' => '{{PLURAL:$1|1 minik|$1 minik}} nan lalu',
'seconds-ago' => '{{PLURAL:$1|1 datiak|$1 datiak}} nan lalu',
'monday-at' => 'Sinayan pukua $1',
'tuesday-at' => 'Salasa pukua $1',
'wednesday-at' => "Raba'a pukua $1",
'thursday-at' => 'Kamih pukua $1',
'friday-at' => 'Jumaik pukua $1',
'saturday-at' => 'Satu pukua $1',
'sunday-at' => 'Akaik pukua $1',
'yesterday-at' => 'Kapatang pukua $1',

# Bad image list
'bad_image_list' => 'Formatnyo adolah sabagai barikuik:

Hanyo daftar babutia (barih nan dimulai jo tando *) nan dipakai.
Pautan patamo pado barih musti pautan ka berkas buruak.
Satiok pautan salanjuiknyo pado barih nan samo dianggap pangacualian, yaitu laman-laman dima berkas ko nampak.',

/*
Short names for language variants used for language conversion links.
Variants for Chinese language
*/
'variantname-zh-hans' => 'hans',
'variantname-zh-hant' => 'hant',
'variantname-zh-cn' => 'cn',
'variantname-zh-tw' => 'tw',
'variantname-zh-hk' => 'hk',
'variantname-zh-mo' => 'mo',
'variantname-zh-sg' => 'sg',
'variantname-zh-my' => 'my',
'variantname-zh' => 'zh',

# Variants for Gan language
'variantname-gan-hans' => 'hans',
'variantname-gan-hant' => 'hant',
'variantname-gan' => 'gan',

# Variants for Serbian language
'variantname-sr-ec' => 'sr-ec',
'variantname-sr-el' => 'sr-el',
'variantname-sr' => 'sr',

# Variants for Kazakh language
'variantname-kk-kz' => 'kk-kz',
'variantname-kk-tr' => 'kk-tr',
'variantname-kk-cn' => 'kk-cn',

# Metadata
'metadata' => 'Metadata',
'metadata-help' => 'Berkas ko ado informasi tambahan nan mungkin ditambahan dek kamera digital atau pemindai nan digunoan untuak mambuek atau mandigitalisasi berkas ko. Jikok berkas ko lah mangalami parubahan, rincian nan ado mungkin indak sacaro jaleh mancerminkan parubahan dari berkas tu.',
'metadata-expand' => 'Tunjuakan rincian tambahan',
'metadata-collapse' => 'Suruakan rincian tambahan',
'metadata-fields' => 'Tapak metadata gamba nan didata dalam pasan ko akan di masuakan pado tampilan laman gambar katiko tabel metadata disuruakkan. 
Nan lainnyo akan tasuruak sacaro baku.
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
'exif-imagewidth' => 'Leba',
'exif-imagelength' => 'Tinggi',
'exif-bitspersample' => 'Bita per komponen',
'exif-compression' => 'Skema kompresi',
'exif-photometricinterpretation' => 'Komposisi piksel',
'exif-orientation' => 'Orientasi',
'exif-samplesperpixel' => 'Jumlah komponen',
'exif-planarconfiguration' => 'Pangaturan data',
'exif-imagedescription' => 'Judua gamba',
'exif-make' => 'Produsen kamera',
'exif-model' => 'Model kamera',
'exif-software' => 'Parangkaik lunak',
'exif-artist' => 'Pambuek',
'exif-copyright' => 'Nan punyo hak cipta',
'exif-exifversion' => 'Versi Exif',
'exif-flashpixversion' => 'Dukuangan versi Flashpix',
'exif-colorspace' => 'Ruang warna',
'exif-componentsconfiguration' => 'Arti tiok komponen',
'exif-compressedbitsperpixel' => 'Mode kompresi gamba',
'exif-pixelydimension' => 'Leba gamba',
'exif-pixelxdimension' => 'Tinggi gamba',
'exif-usercomment' => 'Komen pangguno',
'exif-relatedsoundfile' => 'Berkas audio nan bahubuangan',

# External editor support
'edit-externally' => 'Suntiang berkas ko jo aplikasi lua',
'edit-externally-help' => '(Caliak [//www.mediawiki.org/wiki/Manual:External_editors instruksi pangaturan] untuak informasi lanjuiknyo)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'kasadonyo',
'namespacesall' => 'sadonyo',
'monthsall' => 'sadonyo',
'limitall' => 'sadonyo',

# Table pager
'table_pager_limit_label' => 'Item per laman:',
'table_pager_limit_submit' => 'Tuju',

# Auto-summaries
'autosumm-new' => '←Mambuek laman baisi "$1"',

# Watchlist editor
'watchlistedit-normal-title' => 'Suntiang daftar pantau',
'watchlistedit-normal-legend' => 'Hapuih judul dari daftar pantau',
'watchlistedit-normal-explain' => 'Judul pado daftar pantauan Sanak ditunjuakan di bawah ko.
Untuak mangapuih judul, agiah tando cek pado kotak di sampiangnyo, dan takan "{{int:Watchlistedit-normal-submit}}".
Sanak dapek juo [[Special:EditWatchlist/raw|manyuntiang daftar mantahnyo]].',
'watchlistedit-normal-submit' => 'Hapuih judul',
'watchlistedit-normal-done' => '{{PLURAL:$1|$1 judul}} alah dihapuih dari daftar pantauan Sanak:',
'watchlistedit-raw-title' => 'Suntiang pantauan mantah',
'watchlistedit-raw-legend' => 'Suntiang pantauan mantah',
'watchlistedit-raw-explain' => 'Judul pado daftar pantauan Sanak ditunjuakan di bawah ko, dan dapek disuntiang jo manambahan atau mengapuihnya dari daftar;
ciek judul satiok barihnyo.
Kok alah salasai, takan "{{int:Watchlistedit-raw-submit}}".
Sanak dapek juo [[Special:EditWatchlist|manggunoan panyuntiang standarnyo]].',
'watchlistedit-raw-titles' => 'Judul:',
'watchlistedit-raw-submit' => 'Pabarui pantauan',
'watchlistedit-raw-done' => 'Pantauan Sanak lah dipabarui',
'watchlistedit-raw-added' => '{{PLURAL:$1|$1 judul lah}} ditambahan:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|$1 judul lah}} dibuang:',

# Watchlist editing tools
'watchlisttools-view' => 'Tunjuakan parubahan takaik',
'watchlisttools-edit' => 'Tunjuakan sarato suntiang daftar pantau',
'watchlisttools-raw' => 'Suntiang pantauan mantah',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|maota]])',

# Core parser functions
'unknown_extension_tag' => 'Tag ekstensi "$1" indak tau',
'duplicate-defaultsort' => '\'\'\'Peringatan:\'\'\' Kunci panguruitan default "$2" sabalunnyo mangabaikan kunci panguruitan default "$1".',

# Special:Version
'version' => 'Versi',
'version-extensions' => 'Ekstensi tarinstal',
'version-specialpages' => 'Laman istimewa',
'version-parserhooks' => 'Kaik parser',
'version-variables' => 'Variabel',
'version-antispam' => 'Pancagahan spam',
'version-skins' => 'Kulik',
'version-other' => 'Lain-lain',
'version-version' => '(Versi $1)',
'version-license' => 'Lisensi',
'version-poweredby-credits' => "Wiki ko didukuang jo '''[//www.mediawiki.org/ MediaWiki]''', hak cipta © 2001-$1 $2.",
'version-poweredby-others' => 'lainnyo',
'version-credits-summary' => 'Kami nio mangakui urang-urang ko ateh kontribusinyo pado [[Special:Version|MediaWiki]].',
'version-license-info' => 'MediaWiki adolah parangkaik lunak bebas; Sanak dapek mandistribusian dan/atau mamodfikasinyo jo syaraik Lisensi Publik Umum GNU nan dikaluaan dek Free Software Foundation; versi 2 atau nan tabaru.

MediaWiki didistribusian jo harapan dapek digunoan, tapi INDAK JO JAMINAN APO PUN; indak ado jaminan PADAGANGAN atau KACOCOKAN UNTUAK TUJUAN TATANTU. Caliak Lisensi Publik Umum GNU untuak informasi lebiah lanjuik.

Sanak mustilah alah manarimo [{{SERVER}}{{SCRIPTPATH}}/COPYING salinan Lisensi Publik Umum GNU] basamo jo program iko; jikok indak, kiriman suraik ka Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA atau [//www.gnu.org/licenses/old-licenses/gpl-2.0.html baco sacaro online].',
'version-software' => 'Parangkaik lunak tapasang',
'version-software-product' => 'Produk',
'version-software-version' => 'Versi',
'version-entrypoints-header-url' => 'URL',
'version-entrypoints-articlepath' => '[https://www.mediawiki.org/wiki/Manual:$wgArticlePath Artikel path]',
'version-entrypoints-scriptpath' => '[https://www.mediawiki.org/wiki/Manual:$wgScriptPath Skrip path]',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Pancarian berkas duplikat',
'fileduplicatesearch-summary' => 'Pancarian berkas duplikat badasaran nilai hash-nyo.',
'fileduplicatesearch-result-n' => 'Berkas "$1" ado {{PLURAL:$2|$2 duplikat nan samo}}.',
'fileduplicatesearch-noresults' => 'Indak basobok berkas banamo "$1".',

# Special:SpecialPages
'specialpages' => 'Laman istimewa',
'specialpages-note' => '----
* Laman istimewa normal.
* <span class="mw-specialpagerestricted">Laman istimewa talarang.</span>
* <span class="mw-specialpagecached">Laman istimewa tasinggah (mungkin usang).</span>',
'specialpages-group-maintenance' => 'Laporan pamaliharoan',
'specialpages-group-other' => 'Lain-lain',
'specialpages-group-login' => 'Masuak log / mandaftar',
'specialpages-group-changes' => 'Parubahan baru jo log',
'specialpages-group-media' => 'Laporan jo pamuatan berkas',
'specialpages-group-users' => 'Pangguno jo hak pangguno',
'specialpages-group-highuse' => 'Nan paliang',
'specialpages-group-pages' => 'Daftar laman',
'specialpages-group-pagetools' => 'Pakakeh laman',
'specialpages-group-wiki' => 'Data jo pakakeh',
'specialpages-group-redirects' => 'Pancarian jo pangaliahan',
'specialpages-group-spam' => 'Pakakeh panangka spam',

# Special:BlankPage
'blankpage' => 'Laman kosong',
'intentionallyblankpage' => 'Laman ko sangajo dikosoangkan.',

# External image whitelist
'external_image_whitelist' => '#Bia se barih ko apo adonyo<pre>
#Latakan fragmen tando regular (hanyo bagian antaro //) di bawah ko
#Iko akan dicocokan jo URL gambar dari lua (tahubuang langsuang)
#Nan mano nan cocok ditampilkan sabagai gambar, sisonyo hanyo sabagai tautan sajo
#Barih nan dimulai jo # dianggap sabagai komentar
#Iko indak mambedoan huruf gadang jo ketek

#Latakan sado fragmen regex di bawah barih ko. Bia se barih ko apo adonyo</pre>',

# Special:Tags
'tags' => 'Tag parubahan nan sah',
'tag-filter' => '[[Special:Tags|Tag]] sariang:',
'tag-filter-submit' => 'Sariang',
'tags-title' => 'Tag',
'tags-intro' => 'Laman ko barisi daftar tag nan dapek ditandoi dek parangkaik lunak jo suntiangan dan maknanyo.',
'tags-tag' => 'Namo tag',
'tags-display-header' => 'Tampilan di daftar parubahan',
'tags-description-header' => 'Deskripsi langkok dari makna',
'tags-hitcount-header' => 'Parubahan ba-tag',
'tags-edit' => 'suntiang',
'tags-hitcount' => '$1 {{PLURAL:$1|parubahan}}',

# Special:ComparePages
'comparepages' => 'Bandiangkan laman',
'compare-selector' => 'Bandiangkan revisi laman',
'compare-page1' => 'Laman 1',
'compare-page2' => 'Laman 2',
'compare-rev1' => 'Revisi 1',
'compare-rev2' => 'Revisi 2',
'compare-submit' => 'Bandiangkan',
'compare-invalid-title' => 'Judul nan Sanak agiah indak sah.',
'compare-title-not-exists' => 'Judul nan dituju indak basobok.',
'compare-revision-not-exists' => 'Revisi nan dituju indak basobok.',

# Database error messages
'dberr-header' => 'Wiki ko bamasalah',
'dberr-problems' => 'Maaf!
Situs ko mangalami masalah teknis.',

# HTML forms
'htmlform-required' => 'Nilai ko diparaluan',

# New logging system
'logentry-delete-delete' => '$1 {{GENDER:$2|mangapuih}} laman $3',
'logentry-delete-restore' => '$1 {{GENDER:$2|mangambalian}} laman $3',
'logentry-move-move' => '$1 {{GENDER:$2|mamindahan}} laman $3 ka $4',
'logentry-move-move-noredirect' => '$1 {{GENDER:$2|mamindahan}} laman $3 ka $4 tanpa mambuek pangaliahan',
'logentry-move-move_redir' => '$1 {{GENDER:$2|mamindahan}} laman $3 ka $4 maimpok pangaliahan lamo',
'logentry-move-move_redir-noredirect' => '$1 {{GENDER:$2|mamindahan}} laman $3 ka $4 maimpok pangaliahan lamo tanpa mambuek pangaliahan',
'logentry-patrol-patrol' => '$1 {{GENDER:$2|manandoi}} revisi $4 dari laman $3 tapatroli',
'logentry-patrol-patrol-auto' => '$1 otomatih {{GENDER:$2|manandoi}} revisi $4 dari laman $3 tapatroli',
'logentry-newusers-newusers' => 'Akun pangguno $1 alah {{GENDER:$2|dibuek}}',
'logentry-newusers-create' => 'Akun pangguno $1 alah {{GENDER:$2|dibuek}}',
'logentry-newusers-create2' => 'Akun pangguno $3 alah {{GENDER:$2|dibuek}} dek $1',
'logentry-newusers-byemail' => 'Akun pangguno $3 alah {{GENDER:$2|dibuek}} dek $1 dan kato sandi alah dikirim jo surel',
'logentry-newusers-autocreate' => 'Akun pangguno $1 alah {{GENDER:$2|dibuek}} sacaro otomatih',
'logentry-rights-rights' => '$1 {{GENDER:$2|maubah}} kaanggotaan kalompok $3 dari $4 manjadi $5',
'logentry-rights-rights-legacy' => '$1 {{GENDER:$2|maubah}} kaanggotaan kalompok $3',
'rightsnone' => '(indak ado)',

# Search suggestions
'searchsuggest-search' => 'Cari',
'searchsuggest-containing' => 'Barisi...',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|datiak}}',
'duration-minutes' => '$1 {{PLURAL:$1|minik}}',
'duration-hours' => '$1 {{PLURAL:$1|jam}}',
'duration-days' => '$1 {{PLURAL:$1|ari}}',
'duration-weeks' => '$1 {{PLURAL:$1|minggu}}',
'duration-years' => '$1 {{PLURAL:$1|taun}}',
'duration-decades' => '$1 {{PLURAL:$1|dekade}}',
'duration-centuries' => '$1 {{PLURAL:$1|abaik}}',
'duration-millennia' => '$1 {{PLURAL:$1|milenium}}',

# Image rotation
'rotate-comment' => 'Gambar diputa $1 {{PLURAL:$1|darajaik}} saarah jarum jam',

);
