<?php

declare(strict_types=1);

namespace think\userAgent\detect;

class Browser
{
    private static $browserRegEx = [
        '11(4|5)Browser',
        '2345(Explorer|chrome)',
        '360se|360ee|360\ aphone\ browser',
        'Abolimba',
        'Acoo\ Browser',
        'ANTFresco',
        'Alienforce',
        'Amaya',
        'Amiga-AWeb',
        'MRCHROME',
        'America\ Online\ Browser',
        'AmigaVoyager',
        'AOL',
        'Arora',
        'AtomicBrowser',
        'BarcaPro',
        'Barca',
        'Beamrise',
        'Beonex',
        'BA?IDUBrowser|BaiduHD|baiduboxapp',
        'Blackbird',
        'BlackHawk',
        'Blazer',
        'Bolt',
        'BonEcho',
        'BrowseX',
        'Browzar',
        'Bunjalloo',
        'Camino',
        'Cayman\ Browser',
        'Charon',
        'Cheshire',
        'Chimera',
        'chromeframe',
        'ChromePlus',
        'curl',
        'Iron',
        'Chromium',
        'Classilla',
        'Coast',
        'Columbus',
        'CometBird',
        'Comodo_Dragon',
        'Conkeror',
        'CoolNovo',
        'CoRom',
        'Crazy\ Browser',
        'CrMo',
        'Cruz',
        'Cyberdog',
        'Deepnet\ Explorer',
        'Demeter',
        'DeskBrowse',
        'Dillo',
        'DoCoMo',
        'DocZilla',
        'Dolfin',
        'Dooble',
        'Doris',
        'Dorothy',
        'DPlus',
        'Edbrowse',
        'E?links',
        'Element\ Browser',
        'Enigma\ Browser',
        'EnigmaFox',
        'Epic',
        'Epiphany',
        'Escape|Espial',
        'FBAV',
        'Fennec',
        'Firebird',
        'Fireweb\ Navigator',
        'Flock',
        'Fluid',
        'Galeon',
        'GlobalMojo',
        'GoBrowser',
        'Google\ Wireless\ Transcoder',
        'GoSurf',
        'GranParadiso',
        'GreenBrowser',
        'GSA',
        'google earth',
        'google.android.apps',
        'googleplus',
        'youtube',
        'Hana',
        'HotJava',
        'Hv3',
        'Hydra\ Browser',
        'Iris',
        'IBM\ WebExplorer',
        'JuziBrowser',
        'MiuiBrowser',
        'Microsoft Office',
        'MxNitro',
        'IBrowse',
        'iCab',
        'IceBrowser',
        'Iceape',
        'IceCat',
        'IceDragon',
        'IceWeasel',
        'iNet\ Browser',
        'iRider',
        'iTunes',
        'InternetSurfboard',
        'Jasmine',
        'K-Meleon',
        'K-Ninja',
        'Kapiko',
        'Kazehakase',
        'Strata',
        'KKman',
        'Kinza',
        'KMail',
        'KMLite',
        'Konqueror',
        'Kylo',
        'LBrowser',
        'LBBrowser|Liebaofast',
        'LeechCraft',
        'Lobo',
        'lolifox',
        'Lorentz',
        'Lunascape',
        'Lynx',
        'Madfox',
        'Maemo\ Browser',
        'Maxthon',
        '\ MIB\/',
        'Tablet\ browser',
        'MicroMessenger',
        'Midori',
        'Minefield',
        'MiniBrowser',
        'Minimo',
        'Mosaic',
        'MozillaDeveloperPreview',
        'Multi-Browser',
        'MultiZilla',
        'MyIE2',
        'myibrow',
        'Namoroka',
        'Navigator',
        'NetBox',
        'NetCaptor',
        'NetFront',
        'NetNewsWire',
        'NetPositive',
        'Netscape',
        'NetSurf',
        'NF-Browser',
        'Nichrome\/self',
        'NokiaBrowser',
        'Novarra-Vision',
        'Obigo',
        'OffByOne',
        'OmniWeb',
        'OneBrowser',
        'Orca',
        'Oregano',
        'Origyn\ Web\ Browser',
        'osb-browser',
        'Otter',
        '\ Pre\/',
        'Palemoon',
        'Patriott\:\:Browser',
        'Perk',
        'Phaseout',
        'Phoenix',
        'PlayStation\ 4',
        'Podkicker',
        'Podkicker\ Pro',
        'Pogo',
        'Polaris',
        'Polarity',
        'Prism',
        'Puffin',
        'M?QQBrowser',
        'QQ(?!Download|Pinyin)',
        'QtWeb\ Internet\ Browser',
        'QtCarBrowser',
        'QupZilla',
        'rekonq',
        'retawq',
        'RockMelt',
        'Ryouko',
        'SaaYaa',
        'SailfishBrowser',
        'SeaMonkey',
        'SEMC-Browser',
        'SEMC-java',
        'Shiira',
        'Shiretoko',
        'SiteKiosk',
        'SkipStone',
        'Skyfire',
        'Sleipnir',
        'Silk',
        'SlimBoat',
        'SlimBrowser',
        'Superbird',
        'SmartTV',
        'Songbird',
        'Stainless',
        'SubStream',
        'Sulfur',
        'Sundance',
        'Sunrise',
        'Surf',
        'Swiftfox',
        'Swiftweasel',
        'Sylera',
        'TaoBrowser',
        'tear',
        'TeaShark',
        'Teleca',
        'TenFourFox',
        'TheWorld',
        'Thunderbird',
        'TizenBrowser',
        'Tizen Browser',
        'Tjusig',
        'TencentTraveler',
        'UC?\ ?Browser|UCWEB',
        'UltraBrowser',
        'UP.Browser',
        'UP.Link',
        'Usejump',
        'uZardWeb',
        'uZard',
        'uzbl',
        'Vimprobable',
        'Vivaldi',
        'Vonkeror',
        'w3m',
        'IEMobile',
        'Waterfox',
        'WebianShell',
        'Webrender',
        'WeltweitimnetzBrowser',
        'WhatsApp',
        'Weibo',
        'wKiosk',
        'WorldWideWeb',
        'wget',
        'WhiteHat Aviator',
        'Wyzo',
        'X-Smiles',
        'Xiino',
        'YaBrowser',
        'zBrowser',
        'ZipZap'
    ];

    private static $browserList = [
        '114browser' => [
            'link' => 'http://ie.114la.com/',
            'title' => '{%114Browser%}',
            'code' => '114browser',
        ],
        '115browser' => [
            'link' => 'http://ie.115.com/',
            'title' => '{%115Browser%}',
            'code' => '115browser',
        ],
        '2345explorer' => [
            'link' => 'http://ie.2345.com/',
            'title' => '{%2345Explorer%}',
            'code' => '2345explorer',
        ],
        '2345chrome' => [
            'link' => 'http://chrome.2345.com/',
            'title' => '{%2345Chrome%}',
            'code' => '2345chrome',
        ],
        '360se' => [
            'link' => 'http://se.360.cn/',
            'title' => '360 Explorer',
            'code' => '360se',
        ],
        '360ee' => [
            'link' => 'http://chrome.360.cn/',
            'title' => '360 Chrome',
            'code' => '360se',
        ],
        '360 aphone browser' => [
            'link' => 'http://mse.360.cn/index.html',
            'title' => '360 Aphone Browser',
            'code' => '360se',
        ],
        'abolimba' => [
            'link' => 'http://www.aborange.de/products/freeware/abolimba-multibrowser.php',
            'title' => 'Abolimba',
            'code' => 'abolimba',
        ],
        'acoo browser' => [
            'link' => 'http://www.acoobrowser.com/',
            'title' => 'Acoo {%Browser%}',
            'code' => 'acoobrowser',
        ],
        'alienforce' => [
            'link' => 'http://sourceforge.net/projects/alienforce/',
            'title' => '{%Alienforce%}',
            'code' => 'alienforce',
        ],
        'amaya' => [
            'link' => 'http://www.w3.org/Amaya/',
            'title' => '{%Amaya%}',
            'code' => 'amaya',
        ],
        'amiga-aweb' => [
            'link' => 'http://aweb.sunsite.dk/',
            'title' => 'Amiga {%AWeb%}',
            'code' => 'amiga-aweb',
        ],
        'antfresco' => [
            'link' => 'http://www.espial.com/',
            'title' => 'ANT {%Fresco%}',
            'code' => 'antfresco',
        ],
        'mrchrome' => [
            'link' => 'http://amigo.mail.ru/',
            'title' => 'Amigo',
            'code' => 'amigo',
        ],
        'myibrow' => [
            'link' => 'http://myinternetbrowser.webove-stranky.org/',
            'title' => '{%myibrow%}',
            'code' => 'my-internet-browser',
        ],
        'america online browser' => [
            'link' => 'http://downloads.channel.aol.com/browser',
            'title' => 'America Online {%Browser%}',
            'code' => 'aol',
        ],
        'amigavoyager' => [
            'link' => 'http://v3.vapor.com/voyager/',
            'title' => 'Amiga {%Voyager%}',
            'code' => 'amigavoyager',
        ],
        'aol' => [
            'link' => 'http://downloads.channel.aol.com/browser',
            'title' => '{%AOL%}',
            'code' => 'aol',
        ],
        'arora' => [
            'link' => 'http://code.google.com/p/arora/',
            'title' => '{%Arora%}',
            'code' => 'arora',
        ],
        'atomicbrowser' => [
            'link' => 'http://www.atomicwebbrowser.com/',
            'title' => '{%AtomicBrowser%}',
            'code' => 'atomicwebbrowser',
        ],
        'barcapro' => [
            'link' => 'http://www.pocosystems.com/home/index.php?option=content&task=category&sectionid=2&id=9&Itemid=27',
            'title' => '{%BarcaPro%}',
            'code' => 'barca',
        ],
        'barca' => [
            'link' => 'http://www.pocosystems.com/home/index.php?option=content&task=category&sectionid=2&id=9&Itemid=27',
            'title' => '{%Barca%}',
            'code' => 'barca',
        ],
        'beamrise' => [
            'link' => 'http://www.beamrise.com/',
            'title' => '{%Beamrise%}',
            'code' => 'beamrise',
        ],
        'beonex' => [
            'link' => 'http://www.beonex.com/',
            'title' => '{%Beonex%}',
            'code' => 'beonex',
        ],
        // Baidu Browser Spark does not have own UA.
        'baidubrowser' => [
            'link' => 'http://browser.baidu.com/',
            'title' => '{%baidubrowser%}',
            'code' => 'bidubrowser',
        ],
        'bidubrowser' => [
            'link' => 'http://browser.baidu.com/',
            'title' => '{%bidubrowser%}',
            'code' => 'bidubrowser',
        ],
        'baiduhd' => [
            'link' => 'http://browser.baidu.com/',
            'title' => '{%BaiduHD%}',
            'code' => 'bidubrowser',
        ],
        'baiduboxapp' => [
            'link' => 'http://mo.baidu.com/',
            'title' => '{%BaiduBoxApp%}',
            'code' => 'bidubrowser',
        ],
        'blackbird' => [
            'link' => 'http://www.blackbirdbrowser.com/',
            'title' => '{%Blackbird%}',
            'code' => 'blackbird',
        ],
        'blackhawk' => [
            'link' => 'http://www.netgate.sk/blackhawk/help/welcome-to-blackhawk-web-browser.html',
            'title' => '{%BlackHawk%}',
            'code' => 'blackhawk',
        ],
        'blazer' => [
            'link' => 'http://en.wikipedia.org/wiki/Blazer_(web_browser)',
            'title' => '{%Blazer%}',
            'code' => 'blazer',
        ],
        'bolt' => [
            'link' => 'http://www.boltbrowser.com/',
            'title' => '{%Bolt%}',
            'code' => 'bolt',
        ],
        'bonecho' => [
            'link' => 'http://www.mozilla.org/projects/minefield/',
            'title' => '{%BonEcho%}',
            'code' => 'firefoxdevpre',
        ],
        'browsex' => [
            'link' => 'http://pdqi.com/browsex/',
            'title' => 'BrowseX',
            'code' => 'browsex',
        ],
        'browzar' => [
            'link' => 'http://www.browzar.com/',
            'title' => '{%Browzar%}',
            'code' => 'browzar',
        ],
        'bunjalloo' => [
            'link' => 'http://code.google.com/p/quirkysoft/',
            'title' => '{%Bunjalloo%}',
            'code' => 'bunjalloo',
        ],
        'camino' => [
            'link' => 'http://www.caminobrowser.org/',
            'title' => '{%Camino%}',
            'code' => 'camino',
        ],
        'cayman browser' => [
            'link' => 'http://www.caymanbrowser.com/',
            'title' => 'Cayman {%Browser%}',
            'code' => 'caymanbrowser',
        ],
        'charon' => [
            'link' => 'http://en.wikipedia.org/wiki/Charon_(web_browser)',
            'title' => '{%Charon%}',
            'code' => 'null',
        ],
        'cheshire' => [
            'link' => 'http://downloads.channel.aol.com/browser',
            'title' => '{%Cheshire%}',
            'code' => 'aol',
        ],
        'chimera' => [
            'link' => 'http://www.chimera.org/',
            'title' => '{%Chimera%}',
            'code' => 'null',
        ],
        'chromeframe' => [
            'link' => 'http://code.google.com/chrome/chromeframe/',
            'title' => '{%chromeframe%}',
            'code' => 'chrome',
        ],
        'chromeplus' => [
            'link' => 'http://www.chromeplus.org/',
            'title' => '{%ChromePlus%}',
            'code' => 'chromeplus',
        ],
        'iron' => [
            'link' => 'http://www.srware.net/',
            'title' => 'SRWare {%Iron%}',
            'code' => 'srwareiron',
        ],
        'chromium' => [
            'link' => 'http://www.chromium.org/',
            'title' => '{%Chromium%}',
            'code' => 'chromium',
        ],
        'classilla' => [
            'link' => 'http://en.wikipedia.org/wiki/Classilla',
            'title' => '{%Classilla%}',
            'code' => 'classilla',
        ],
        'coast' => [
            'link' => 'http://coastbyopera.com/',
            'title' => '{%Coast%}',
            'code' => 'coast',
        ],
        'columbus' => [
            'link' => 'http://www.columbus-browser.com/',
            'title' => '{%Columbus%}',
            'code' => 'columbus',
        ],
        'cometbird' => [
            'link' => 'http://www.cometbird.com/',
            'title' => '{%CometBird%}',
            'code' => 'cometbird',
        ],
        'comodo_dragon' => [
            'link' => 'http://www.comodo.com/home/internet-security/browser.php',
            'title' => 'Comodo {%Dragon%}',
            'code' => 'comodo-dragon',
        ],
        'conkeror' => [
            'link' => 'http://www.conkeror.org/',
            'title' => '{%Conkeror%}',
            'code' => 'conkeror',
        ],
        'coolnovo' => [
            'link' => 'http://www.coolnovo.com/',
            'title' => '{%CoolNovo%}',
            'code' => 'coolnovo',
        ],
        'corom' => [
            'link' => 'http://en.wikipedia.org/wiki/C%E1%BB%9D_R%C3%B4m%2B_(browser)',
            'title' => '{%CoRom%}',
            'code' => 'corom',
        ],
        'crazy browser' => [
            'link' => 'http://www.crazybrowser.com/',
            'title' => 'Crazy {%Browser%}',
            'code' => 'crazybrowser',
        ],
        'crmo' => [
            'link' => 'http://www.google.com/chrome',
            'title' => '{%CrMo%}',
            'code' => 'chrome',
        ],
        'cruz' => [
            'link' => 'http://www.cruzapp.com/',
            'title' => '{%Cruz%}',
            'code' => 'cruz',
        ],
        'cyberdog' => [
            'link' => 'http://www.cyberdog.org/about/cyberdog/cyberbrowse.html',
            'title' => '{%Cyberdog%}',
            'code' => 'cyberdog',
        ],
        'dplus' => [
            'link' => 'http://dplus-browser.sourceforge.net/',
            'title' => '{%DPlus%}',
            'code' => 'dillo',
        ],
        'deepnet explorer' => [
            'link' => 'http://www.deepnetexplorer.com/',
            'title' => '{%Deepnet Explorer%}',
            'code' => 'deepnetexplorer',
        ],
        'demeter' => [
            'link' => 'http://www.hurrikenux.com/Demeter/',
            'title' => '{%Demeter%}',
            'code' => 'demeter',
        ],
        'deskbrowse' => [
            'link' => 'http://www.deskbrowse.org/',
            'title' => '{%DeskBrowse%}',
            'code' => 'deskbrowse',
        ],
        'dillo' => [
            'link' => 'http://www.dillo.org/',
            'title' => '{%Dillo%}',
            'code' => 'dillo',
        ],
        'docomo' => [
            'link' => 'http://www.nttdocomo.com/',
            'title' => '{%DoCoMo%}',
            'code' => 'null',
        ],
        'doczilla' => [
            'link' => 'http://www.doczilla.com/',
            'title' => '{%DocZilla%}',
            'code' => 'doczilla',
        ],
        'dolfin' => [
            'link' => 'http://www.samsungmobile.com/',
            'title' => '{%Dolfin%}',
            'code' => 'samsung',
        ],
        'dooble' => [
            'link' => 'http://dooble.sourceforge.net/',
            'title' => '{%Dooble%}',
            'code' => 'dooble',
        ],
        'doris' => [
            'link' => 'http://www.anygraaf.fi/browser/indexe.htm',
            'title' => '{%Doris%}',
            'code' => 'doris',
        ],
        'dorothy' => [
            'link' => 'http://www.dorothybrowser.com/',
            'title' => '{%Dorothy%}',
            'code' => 'dorothybrowser',
        ],
        'dplus' => [
            'link' => 'http://dplus-browser.sourceforge.net/',
            'title' => '{%DPlus%}',
            'code' => 'dillo',
        ],
        'edbrowse' => [
            'link' => 'http://edbrowse.sourceforge.net/',
            'title' => '{%Edbrowse%}',
            'code' => 'edbrowse',
        ],
        'elinks' => [
            'link' => 'http://elinks.or.cz/',
            'title' => '{%Elinks%}',
            'code' => 'elinks',
        ],
        'element browser' => [
            'link' => 'http://www.elementsoftware.co.uk/software/elementbrowser/',
            'title' => 'Element {%Browser%}',
            'code' => 'elementbrowser',
        ],
        'enigma browser' => [
            'link' => 'http://en.wikipedia.org/wiki/Enigma_Browser',
            'title' => 'Enigma {%Browser%}',
            'code' => 'enigmabrowser',
        ],
        'enigmafox' => [
            'link' => '#',
            'title' => '{%EnigmaFox%}',
            'code' => 'null',
        ],
        'epic' => [
            'link' => 'http://www.epicbrowser.com/',
            'title' => '{%Epic%}',
            'code' => 'epicbrowser',
        ],
        'epiphany' => [
            'link' => 'http://gnome.org/projects/epiphany/',
            'title' => '{%Epiphany%}',
            'code' => 'epiphany',
        ],
        'escape' => [
            'link' => 'http://www.espial.com/products/tv-browser/',
            'title' => '{%Escape%}',
            'code' => 'espialtvbrowser',
        ],
        'espial' => [
            'link' => 'http://www.espial.com/products/tv-browser/',
            'title' => '{%Espial%}',
            'code' => 'espialtvbrowser',
        ],
        'fbav' => [
            'link' => 'https://www.facebook.com',
            'title' => '{%FBAV%}',
            'code' => 'facebook',
        ],
        'fennec' => [
            'link' => 'https://wiki.mozilla.org/Fennec',
            'title' => '{%Fennec%}',
            'code' => 'fennec',
        ],
        'firebird' => [
            'link' => 'http://seb.mozdev.org/firebird/',
            'title' => '{%Firebird%}',
            'code' => 'firebird',
        ],
        'fireweb navigator' => [
            'link' => 'http://www.arsslensoft.tk/?q=node/7',
            'title' => '{%Fireweb Navigator%}',
            'code' => 'firewebnavigator',
        ],
        'flock' => [
            'link' => 'http://www.flock.com/',
            'title' => '{%Flock%}',
            'code' => 'flock',
        ],
        'fluid' => [
            'link' => 'http://www.fluidapp.com/',
            'title' => '{%Fluid%}',
            'code' => 'fluid',
        ],
        'galeon' => [
            'link' => 'http://galeon.sourceforge.net/',
            'title' => '{%Galeon%}',
            'code' => 'galeon',
        ],
        'globalmojo' => [
            'link' => 'http://www.globalmojo.com/',
            'title' => '{%GlobalMojo%}',
            'code' => 'globalmojo',
        ],
        'gobrowser' => [
            'link' => 'http://www.gobrowser.cn/',
            'title' => 'GO {%Browser%}',
            'code' => 'gobrowser',
        ],
        'google earth' => [
            'link' => 'http://earth.google.com/',
            'title' => '{%Google Earth%}',
            'code' => 'google',
        ],
        'google.android.apps' => [
            'link' => 'http://www.google.com/',
            'title' => 'Google App',
            'code' => 'google',
        ],
        'googleplus' => [
            'link' => 'http://plus.google.com/',
            'title' => 'Google+',
            'code' => 'google',
        ],
        'youtube' => [
            'link' => 'http://www.youtube.com/',
            'title' => '{%Youtube%}',
            'code' => 'google',
        ],
        'gosurf' => [
            'link' => 'http://gosurfbrowser.com/?ln=en',
            'title' => '{%GoSurf%}',
            'code' => 'gosurf',
        ],
        'granparadiso' => [
            'link' => 'http://www.mozilla.org/',
            'title' => '{%GranParadiso%}',
            'code' => 'firefoxdevpre',
        ],
        'greenbrowser' => [
            'link' => 'http://www.morequick.com/',
            'title' => '{%GreenBrowser%}',
            'code' => 'greenbrowser',
        ],
        'gsa' => [
            'link' => 'http://www.google.com',
            'title' => '{%GSA%}',
            'code' => 'google',
        ],
        'hana' => [
            'link' => 'http://www.alloutsoftware.com/',
            'title' => '{%Hana%}',
            'code' => 'hana',
        ],
        'hotjava' => [
            'link' => 'http://java.sun.com/products/archive/hotjava/',
            'title' => '{%HotJava%}',
            'code' => 'hotjava',
        ],
        'hv3' => [
            'link' => 'http://tkhtml.tcl.tk/hv3.html',
            'title' => '{%Hv3%}',
            'code' => 'hv3',
        ],
        'hydra browser' => [
            'link' => 'http://www.hydrabrowser.com/',
            'title' => 'Hydra Browser',
            'code' => 'hydrabrowser',
        ],
        'iris' => [
            'link' => 'http://www.torchmobile.com/',
            'title' => '{%Iris%}',
            'code' => 'iris',
        ],
        'ibm webexplorer' => [
            'link' => 'http://www.networking.ibm.com/WebExplorer/',
            'title' => 'IBM {%WebExplorer%}',
            'code' => 'ibmwebexplorer',
        ],
        'juzibrowser' => [
            'link' => 'http://www.123juzi.com/',
            'title' => 'JuziBrowser',
            'code' => 'juzibrowser',
        ],
        'miuibrowser' => [
            'link' => 'http://www.xiaomi.com/',
            'title' => '{%MiuiBrowser%}',
            'code' => 'miuibrowser',
        ],
        'miuibrowser' => [
            'link' => 'http://www.xiaomi.com/',
            'title' => '{%MiuiBrowser%}',
            'code' => 'miuibrowser',
        ],
        'microsoft office' => [
            'link' => 'http://www.microsoft.com',
            'title' => 'Microsoft Office',
            'code' => 'office',
        ],
        'mxnitro' => [
            'link' => 'http://www.maxthon.com/nitro/',
            'title' => '{%MxNitro%}',
            'code' => 'mxnitro',
        ],
        'ibrowse' => [
            'link' => 'http://www.ibrowse-dev.net/',
            'title' => '{%IBrowse%}',
            'code' => 'ibrowse',
        ],
        'icab' => [
            'link' => 'http://www.icab.de/',
            'title' => '{%iCab%}',
            'code' => 'icab',
        ],
        'icebrowser' => [
            'link' => 'http://www.icesoft.com/products/icebrowser.html',
            'title' => '{%IceBrowser%}',
            'code' => 'icebrowser',
        ],
        'iceape' => [
            'link' => 'http://packages.debian.org/iceape',
            'title' => '{%Iceape%}',
            'code' => 'iceape',
        ],
        'icecat' => [
            'link' => 'http://gnuzilla.gnu.org/',
            'title' => 'GNU {%IceCat%}',
            'code' => 'icecat',
        ],
        'icedragon' => [
            'link' => 'https://www.comodo.com/home/browsers-toolbars/icedragon-browser.php',
            'title' => '{%IceDragon%}',
            'code' => 'icedragon',
        ],
        'iceweasel' => [
            'link' => 'http://www.geticeweasel.org/',
            'title' => '{%IceWeasel%}',
            'code' => 'iceweasel',
        ],
        'inet browser' => [
            'link' => 'http://alexanderjbeston.wordpress.com/',
            'title' => 'iNet {%Browser%}',
            'code' => 'null',
        ],
        'itunes' => [
            'link' => 'http://www.apple.com',
            'title' => '{%iTunes%}',
            'code' => 'itunes',
        ],
        'irider' => [
            'link' => 'http://en.wikipedia.org/wiki/IRider',
            'title' => '{%iRider%}',
            'code' => 'irider',
        ],
        'internetsurfboard' => [
            'link' => 'http://inetsurfboard.sourceforge.net/',
            'title' => '{%InternetSurfboard%}',
            'code' => 'internetsurfboard',
        ],
        'jasmine' => [
            'link' => 'http://www.samsungmobile.com/',
            'title' => '{%Jasmine%}',
            'code' => 'samsung',
        ],
        'k-meleon' => [
            'link' => 'http://kmeleon.sourceforge.net/',
            'title' => '{%K-Meleon%}',
            'code' => 'kmeleon',
        ],
        'k-ninja' => [
            'link' => 'http://k-ninja-samurai.en.softonic.com/',
            'title' => '{%K-Ninja%}',
            'code' => 'kninja',
        ],
        'kapiko' => [
            'link' => 'http://ufoxlab.googlepages.com/cooperation',
            'title' => '{%Kapiko%}',
            'code' => 'kapiko',
        ],
        'kazehakase' => [
            'link' => 'http://kazehakase.sourceforge.jp/',
            'title' => '{%Kazehakase%}',
            'code' => 'kazehakase',
        ],
        'strata' => [
            'link' => 'http://www.kirix.com/',
            'title' => 'Kirix {%Strata%}',
            'code' => 'kirix-strata',
        ],
        'kkman' => [
            'link' => 'http://www.kkman.com.tw/',
            'title' => '{%KKman%}',
            'code' => 'kkman',
        ],
        'kinza' => [
            'link' => 'http://www.kinza.jp/',
            'title' => '{%Kinza%}',
            'code' => 'kinza',
        ],
        'kmail' => [
            'link' => 'http://kontact.kde.org/kmail/',
            'title' => '{%KMail%}',
            'code' => 'kmail',
        ],
        'kmlite' => [
            'link' => 'http://en.wikipedia.org/wiki/K-Meleon',
            'title' => '{%KMLite%}',
            'code' => 'kmeleon',
        ],
        'konqueror' => [
            'link' => 'http://konqueror.kde.org/',
            'title' => '{%Konqueror%}',
            'code' => 'konqueror',
        ],
        'kylo' => [
            'link' => 'http://kylo.tv/',
            'title' => '{%Kylo%}',
            'code' => 'kylo',
        ],
        'lbrowser' => [
            'link' => 'http://wiki.freespire.org/index.php/Web_Browser',
            'title' => '{%LBrowser%}',
            'code' => 'lbrowser',
        ],
        'links' => [
            'link' => 'http://links.twibright.com/',
            'title' => '{%Links%}',
            'code' => 'null',
        ],
        'lbbrowser' => [
            'link' => 'http://www.liebao.cn/',
            'title' => 'Liebao Browser',
            'code' => 'lbbrowser',
        ],
        'liebaofast' => [
            'link' => 'http://m.liebao.cn/',
            'title' => '{%Liebaofast%}',
            'code' => 'lbbrowser',
        ],
        'leechcraft' => [
            'link' => 'http://leechcraft.org/',
            'title' => 'LeechCraft',
            'code' => 'null',
        ],
        'lobo' => [
            'link' => 'http://www.lobobrowser.org/',
            'title' => '{%Lobo%}',
            'code' => 'lobo',
        ],
        'lolifox' => [
            'link' => 'http://www.lolifox.com/',
            'title' => '{%lolifox%}',
            'code' => 'lolifox',
        ],
        'lorentz' => [
            'link' => 'http://news.softpedia.com/news/Firefox-Codenamed-Lorentz-Drops-in-March-2010-130855.shtml',
            'title' => '{%Lorentz%}',
            'code' => 'firefoxdevpre',
        ],
        'lunascape' => [
            'link' => 'http://www.lunascape.tv',
            'title' => '{%Lunascape%}',
            'code' => 'lunascape',
        ],
        'lynx' => [
            'link' => 'http://lynx.browser.org/',
            'title' => '{%Lynx%}',
            'code' => 'lynx',
        ],
        'madfox' => [
            'link' => 'http://en.wikipedia.org/wiki/Madfox',
            'title' => '{%Madfox%}',
            'code' => 'madfox',
        ],
        'maemo browser' => [
            'link' => 'http://maemo.nokia.com/features/maemo-browser/',
            'title' => '{%Maemo Browser%}',
            'code' => 'maemo',
        ],
        'maxthon' => [
            'link' => 'http://www.maxthon.com/',
            'title' => '{%Maxthon%}',
            'code' => 'maxthon',
        ],
        ' mib/' => [
            'link' => 'http://www.motorola.com/content.jsp?globalObjectId=1827-4343',
            'title' => '{%MIB%}',
            'code' => 'mib',
        ],
        'tablet browser' => [
            'link' => 'http://browser.garage.maemo.org/',
            'title' => '{%Tablet browser%}',
            'code' => 'microb',
        ],
        'micromessenger' => [
            'link' => 'http://weixin.qq.com/',
            'title' => '{%MicroMessenger%}',
            'code' => 'wechat',
        ],
        'midori' => [
            'link' => 'http://www.twotoasts.de/index.php?/pages/midori_summary.html',
            'title' => '{%Midori%}',
            'code' => 'midori',
        ],
        'minefield' => [
            'link' => 'http://www.mozilla.org/projects/minefield/',
            'title' => '{%Minefield%}',
            'code' => 'minefield',
        ],
        'minibrowser' => [
            'link' => 'http://dmkho.tripod.com/',
            'title' => '{%MiniBrowser%}',
            'code' => 'minibrowser',
        ],
        'minimo' => [
            'link' => 'http://www-archive.mozilla.org/projects/minimo/',
            'title' => '{%Minimo%}',
            'code' => 'minimo',
        ],
        'mosaic' => [
            'link' => 'http://en.wikipedia.org/wiki/Mosaic_(web_browser)',
            'title' => '{%Mosaic%}',
            'code' => 'mosaic',
        ],
        'mozilladeveloperpreview' => [
            'link' => 'http://www.mozilla.org/projects/devpreview/releasenotes/',
            'title' => '{%MozillaDeveloperPreview%}',
            'code' => 'firefoxdevpre',
        ],
        'mqqbrowser' => [
            'link' => 'http://browser.qq.com/',
            'title' => '{%MQQBrowser%}',
            'code' => 'qqbrowser',
        ],
        'multi-browser' => [
            'link' => 'http://www.multibrowser.de/',
            'title' => '{%Multi-Browser%}',
            'code' => 'multi-browserxp',
        ],
        'multizilla' => [
            'link' => 'http://multizilla.mozdev.org/',
            'title' => '{%MultiZilla%}',
            'code' => 'mozilla',
        ],
        'myie2' => [
            'link' => 'http://www.myie2.com/',
            'title' => '{%MyIE2%}',
            'code' => 'myie2',
        ],
        'namoroka' => [
            'link' => 'https://wiki.mozilla.org/Firefox/Namoroka',
            'title' => '{%Namoroka%}',
            'code' => 'firefoxdevpre',
        ],
        'navigator' => [
            'link' => 'http://netscape.aol.com/',
            'title' => 'Netscape {%Navigator%}',
            'code' => 'netscape',
        ],
        'netbox' => [
            'link' => 'http://www.netgem.com/',
            'title' => '{%NetBox%}',
            'code' => 'netbox',
        ],
        'netcaptor' => [
            'link' => 'http://www.netcaptor.com/',
            'title' => '{%NetCaptor%}',
            'code' => 'netcaptor',
        ],
        'netfront' => [
            'link' => 'http://www.access-company.com/',
            'title' => '{%NetFront%}',
            'code' => 'netfront',
        ],
        'netnewswire' => [
            'link' => 'http://www.newsgator.com/individuals/netnewswire/',
            'title' => '{%NetNewsWire%}',
            'code' => 'netnewswire',
        ],
        'netpositive' => [
            'link' => 'http://en.wikipedia.org/wiki/NetPositive',
            'title' => '{%NetPositive%}',
            'code' => 'netpositive',
        ],
        'netscape' => [
            'link' => 'http://netscape.aol.com/',
            'title' => '{%Netscape%}',
            'code' => 'netscape',
        ],
        'netsurf' => [
            'link' => 'http://www.netsurf-browser.org/',
            'title' => '{%NetSurf%}',
            'code' => 'netsurf',
        ],
        'nf-browser' => [
            'link' => 'http://www.access-company.com/',
            'title' => '{%NF-Browser%}',
            'code' => 'netfront',
        ],
        'nichrome/self' => [
            'link' => 'http://soft.rambler.ru/browser/',
            'title' => '{%Nichrome/self%}',
            'code' => 'nichromeself',
        ],
        'nokiabrowser' => [
            'link' => 'http://browser.nokia.com/',
            'title' => 'Nokia {%Browser%}',
            'code' => 'nokia',
        ],
        'novarra-vision' => [
            'link' => 'http://www.novarra.com/',
            'title' => 'Novarra {%Vision%}',
            'code' => 'novarra',
        ],
        'obigo' => [
            'link' => 'http://en.wikipedia.org/wiki/Obigo_Browser',
            'title' => '{%Obigo%}',
            'code' => 'obigo',
        ],
        'offbyone' => [
            'link' => 'http://www.offbyone.com/',
            'title' => 'Off By One',
            'code' => 'offbyone',
        ],
        'omniweb' => [
            'link' => 'http://www.omnigroup.com/applications/omniweb/',
            'title' => '{%OmniWeb%}',
            'code' => 'omniweb',
        ],
        'onebrowser' => [
            'link' => 'http://one-browser.com/',
            'title' => '{%OneBrowser%}',
            'code' => 'onebrowser',
        ],
        'orca' => [
            'link' => 'http://www.orcabrowser.com/',
            'title' => '{%Orca%}',
            'code' => 'orca',
        ],
        'oregano' => [
            'link' => 'http://en.wikipedia.org/wiki/Oregano_(web_browser)',
            'title' => '{%Oregano%}',
            'code' => 'oregano',
        ],
        'origyn web browser' => [
            'link' => 'http://www.sand-labs.org/owb',
            'title' => 'Oregano Web Browser',
            'code' => 'owb',
        ],
        'osb-browser' => [
            'link' => 'http://gtk-webcore.sourceforge.net/',
            'title' => '{%osb-browser%}',
            'code' => 'null',
        ],
        'otter' => [
            'link' => 'http://otter-browser.org/',
            'title' => '{%Otter%}',
            'code' => 'otter',
        ],
        ' pre/' => [
            'link' => 'http://www.palm.com/us/products/phones/pre/index.html',
            'title' => 'Palm {%Pre%}',
            'code' => 'palmpre',
        ],
        'palemoon' => [
            'link' => 'http://www.palemoon.org/',
            'title' => 'Pale {%Moon%}',
            'code' => 'palemoon',
        ],
        'patriott::browser' => [
            'link' => 'http://madgroup.x10.mx/patriott1.php',
            'title' => 'Patriott {%Browser%}',
            'code' => 'patriott',
        ],
        'perk' => [
            'link' => 'http://www.perk.com/',
            'title' => '{%Perk%}',
            'code' => 'perk',
        ],
        'phaseout' => [
            'link' => 'http://www.phaseout.net/',
            'title' => 'Phaseout',
            'code' => 'phaseout',
        ],
        'phoenix' => [
            'link' => 'http://www.mozilla.org/projects/phoenix/phoenix-release-notes.html',
            'title' => '{%Phoenix%}',
            'code' => 'phoenix',
        ],
        'playstation 4' => [
            'link' => 'http://us.playstation.com/',
            'title' => 'PS4 Web Browser',
            'code' => 'webkit',
        ],
        'podkicker' => [
            'link' => 'http://www.podkicker.com/',
            'title' => '{%Podkicker%}',
            'code' => 'podkicker',
        ],
        'podkicker pro' => [
            'link' => 'http://www.podkicker.com/',
            'title' => '{%Podkicker Pro%}',
            'code' => 'podkicker',
        ],
        'pogo' => [
            'link' => 'http://en.wikipedia.org/wiki/AT%26T_Pogo',
            'title' => '{%Pogo%}',
            'code' => 'pogo',
        ],
        'polaris' => [
            'link' => 'http://www.infraware.co.kr/eng/01_product/product02.asp',
            'title' => '{%Polaris%}',
            'code' => 'polaris',
        ],
        'polarity' => [
            'link' => 'http://polarityweb.weebly.com/',
            'title' => '{%Polarity%}',
            'code' => 'polarity',
        ],
        'prism' => [
            'link' => 'http://prism.mozillalabs.com/',
            'title' => '{%Prism%}',
            'code' => 'prism',
        ],
        'puffin' => [
            'link' => 'http://www.puffinbrowser.com/index.php',
            'title' => '{%Puffin%}',
            'code' => 'puffin',
        ],
        'qqbrowser' => [
            'link' => 'http://browser.qq.com/',
            'title' => '{%QQBrowser%}',
            'code' => 'qqbrowser',
        ],
        'qq' => [
            'link' => 'http://im.qq.com/',
            'title' => '{%QQ%}',
            'code' => 'qq',
        ],
        'qtweb internet browser' => [
            'link' => 'http://www.qtweb.net/',
            'title' => 'QtWeb Internet {%Browser%}',
            'code' => 'qtwebinternetbrowser',
        ],
        'qtcarbrowser' => [
            'link' => 'http://www.teslamotors.com/',
            'title' => '{%qtcarbrowser%}',
            'code' => 'tesla',
        ],
        'qupzilla' => [
            'link' => 'http://www.qupzilla.com/',
            'title' => '{%QupZilla%}',
            'code' => 'qupzilla',
        ],
        'rekonq' => [
            'link' => 'http://rekonq.sourceforge.net/',
            'title' => 'rekonq',
            'code' => 'rekonq',
        ],
        'retawq' => [
            'link' => 'http://retawq.sourceforge.net/',
            'title' => '{%retawq%}',
            'code' => 'terminal',
        ],
        'rockmelt' => [
            'link' => 'http://www.rockmelt.com/',
            'title' => '{%RockMelt%}',
            'code' => 'rockmelt',
        ],
        'ryouko' => [
            'link' => 'http://sourceforge.net/projects/ryouko/',
            'title' => '{%Ryouko%}',
            'code' => 'ryouko',
        ],
        'saayaa' => [
            'link' => 'http://www.saayaa.com/',
            'title' => 'SaaYaa Explorer',
            'code' => 'saayaa',
        ],
        'sailfishbrowser' => [
            'link' => 'https://github.com/sailfishos/sailfish-browser',
            'title' => '{%SailfishBrowser%}',
            'code' => 'sailfishbrowser',
        ],
        'seamonkey' => [
            'link' => 'http://www.seamonkey-project.org/',
            'title' => '{%SeaMonkey%}',
            'code' => 'seamonkey',
        ],
        'semc-browser' => [
            'link' => 'http://www.sonyericsson.com/',
            'title' => '{%SEMC-Browser%}',
            'code' => 'semcbrowser',
        ],
        'semc-java' => [
            'link' => 'http://www.sonyericsson.com/',
            'title' => '{%SEMC-java%}',
            'code' => 'semcbrowser',
        ],
        'shiira' => [
            'link' => 'http://www.shiira.jp/en.php',
            'title' => '{%Shiira%}',
            'code' => 'shiira',
        ],
        'shiretoko' => [
            'link' => 'http://www.mozilla.org/',
            'title' => '{%Shiretoko%}',
            'code' => 'firefoxdevpre',
        ],
        'sitekiosk' => [
            'link' => 'http://www.sitekiosk.com/SiteKiosk/Default.aspx',
            'title' => '{%SiteKiosk%}',
            'code' => 'sitekiosk',
        ],
        'skipstone' => [
            'link' => 'http://www.muhri.net/skipstone/',
            'title' => '{%SkipStone%}',
            'code' => 'skipstone',
        ],
        'skyfire' => [
            'link' => 'http://www.skyfire.com/',
            'title' => '{%Skyfire%}',
            'code' => 'skyfire',
        ],
        'sleipnir' => [
            'link' => 'http://www.fenrir-inc.com/other/sleipnir/',
            'title' => '{%Sleipnir%}',
            'code' => 'sleipnir',
        ],
        'silk' => [
            'link' => 'http://en.wikipedia.org/wiki/Amazon_Silk/',
            'title' => 'Amazon {%Silk%}',
            'code' => 'silk',
        ],
        'slimboat' => [
            'link' => 'http://slimboat.com/',
            'title' => '{%SlimBoat%}',
            'code' => 'slimboat',
        ],
        'slimbrowser' => [
            'link' => 'http://www.flashpeak.com/sbrowser/',
            'title' => '{%SlimBrowser%}',
            'code' => 'slimbrowser',
        ],
        'superbird' => [
            'link' => 'http://superbird-browser.com',
            'title' => '{%Superbird%}',
            'code' => 'superbird',
        ],
        'smarttv' => [
            'link' => 'http://www.freethetvchallenge.com/details/faq',
            'title' => '{%SmartTV%}',
            'code' => 'maplebrowser',
        ],
        'songbird' => [
            'link' => 'http://www.getsongbird.com/',
            'title' => '{%Songbird%}',
            'code' => 'songbird',
        ],
        'stainless' => [
            'link' => 'http://www.stainlessapp.com/',
            'title' => '{%Stainless%}',
            'code' => 'stainless',
        ],
        'substream' => [
            'link' => 'http://itunes.apple.com/us/app/substream/id389906706?mt=8',
            'title' => '{%SubStream%}',
            'code' => 'substream',
        ],
        'sulfur' => [
            'link' => 'http://www.flock.com/',
            'title' => 'Flock {%Sulfur%}',
            'code' => 'flock',
        ],
        'sundance' => [
            'link' => 'http://digola.com/sundance.html',
            'title' => '{%Sundance%}',
            'code' => 'sundance',
        ],
        'sunrise' => [
            'link' => 'http://www.sunrisebrowser.com/',
            'title' => '{%Sunrise%}',
            'code' => 'sunrise',
        ],
        'surf' => [
            'link' => 'http://surf.suckless.org/',
            'title' => '{%Surf%}',
            'code' => 'surf',
        ],
        'swiftfox' => [
            'link' => 'http://www.getswiftfox.com/',
            'title' => '{%Swiftfox%}',
            'code' => 'swiftfox',
        ],
        'swiftweasel' => [
            'link' => 'http://swiftweasel.tuxfamily.org/',
            'title' => '{%Swiftweasel%}',
            'code' => 'swiftweasel',
        ],
        'sylera' => [
            'link' => 'http://dombla.net/sylera/',
            'title' => '{%Sylera%}',
            'code' => 'null',
        ],
        'taobrowser' => [
            'link' => 'http://browser.taobao.com/',
            'title' => '{%TaoBrowser%}',
            'code' => 'taobrowser',
        ],
        'tear' => [
            'link' => 'http://wiki.maemo.org/Tear',
            'title' => 'Tear',
            'code' => 'tear',
        ],
        'teashark' => [
            'link' => 'http://www.teashark.com/',
            'title' => '{%TeaShark%}',
            'code' => 'teashark',
        ],
        'teleca' => [
            'link' => 'http://en.wikipedia.org/wiki/Obigo_Browser/',
            'title' => '{%Teleca%}',
            'code' => 'obigo',
        ],
        'tencenttraveler' => [
            'link' => 'http://www.tencent.com/en-us/index.shtml',
            'title' => 'Tencent {%Traveler%}',
            'code' => 'tencenttraveler',
        ],
        'tenfourfox' => [
            'link' => 'http://en.wikipedia.org/wiki/TenFourFox',
            'title' => '{%TenFourFox%}',
            'code' => 'tenfourfox',
        ],
        'theworld' => [
            'link' => 'http://www.ioage.com/',
            'title' => 'TheWorld Browser',
            'code' => 'theworld',
        ],
        'thunderbird' => [
            'link' => 'http://www.mozilla.com/thunderbird/',
            'title' => '{%Thunderbird%}',
            'code' => 'thunderbird',
        ],
        'tizenbrowser' => [
            'link' => 'https://www.tizen.org/',
            'title' => '{%Tizenbrowser%}',
            'code' => 'tizen',
        ],
        'tizen browser' => [
            'link' => 'https://www.tizen.org/',
            'title' => '{%Tizen Browser%}',
            'code' => 'tizen',
        ],
        'tjusig' => [
            'link' => 'http://www.tjusig.cz/',
            'title' => '{%Tjusig%}',
            'code' => 'tjusig',
        ],
        'ubrowser' => [
            'link' => 'http://www.uc.cn/',
            'title' => '{%UBrowser%}',
            'code' => 'ucbrowser',
        ],
        'ucbrowser' => [
            'link' => 'http://www.uc.cn/',
            'title' => '{%UCBrowser%}',
            'code' => 'ucbrowser',
        ],
        'uc browser' => [
            'link' => 'http://www.uc.cn/English/index.shtml',
            'title' => '{%UC Browser%}',
            'code' => 'ucbrowser',
        ],
        'ucweb' => [
            'link' => 'http://www.ucweb.com/English/product.shtml',
            'title' => '{%UCWEB%}',
            'code' => 'ucbrowser',
        ],
        'ultrabrowser' => [
            'link' => 'http://www.ultrabrowser.com/',
            'title' => '{%UltraBrowser%}',
            'code' => 'ultrabrowser',
        ],
        'up.browser' => [
            'link' => 'http://www.openwave.com/',
            'title' => '{%UP.Browser%}',
            'code' => 'openwave',
        ],
        'up.link' => [
            'link' => 'http://www.openwave.com/',
            'title' => '{%UP.Link%}',
            'code' => 'openwave',
        ],
        'usejump' => [
            'link' => 'http://www.usejump.com/',
            'title' => '{%Usejump%}',
            'code' => 'usejump',
        ],
        'uzardweb' => [
            'link' => 'http://en.wikipedia.org/wiki/UZard_Web',
            'title' => '{%uZardWeb%}',
            'code' => 'uzardweb',
        ],
        'uzard' => [
            'link' => 'http://en.wikipedia.org/wiki/UZard_Web',
            'title' => '{%uZard%}',
            'code' => 'uzardweb',
        ],
        'uzbl' => [
            'link' => 'http://www.uzbl.org/',
            'title' => 'uzbl',
            'code' => 'uzbl',
        ],
        'vimprobable' => [
            'link' => 'http://www.vimprobable.org/',
            'title' => '{%Vimprobable%}',
            'code' => 'null',
        ],
        'vivaldi' => [
            'link' => 'http://www.vivaldi.com',
            'title' => '{%Vivaldi%}',
            'code' => 'vivaldi',
        ],
        'vonkeror' => [
            'link' => 'http://zzo38computer.cjb.net/vonkeror/',
            'title' => '{%Vonkeror%}',
            'code' => 'null',
        ],
        'w3m' => [
            'link' => 'http://w3m.sourceforge.net/',
            'title' => '{%W3M%}',
            'code' => 'w3m',
        ],
        'wget' => [
            'link' => 'https://www.gnu.org/software/wget/',
            'title' => '{%wget%}',
            'code' => 'null',
        ],
        'curl' => [
            'link' => 'http://curl.haxx.se/',
            'title' => '{%curl%}',
            'code' => 'null',
        ],
        'iemobile' => [
            'link' => 'http://www.microsoft.com/windowsmobile/en-us/downloads/microsoft/internet-explorer-mobile.mspx',
            'title' => '{%IEMobile%}',
            'code' => 'msie-mobile',
        ],
        'waterfox' => [
            'link' => 'https://www.waterfoxproject.org/',
            'title' => '{%WaterFox%}',
            'code' => 'waterfox',
        ],
        'webianshell' => [
            'link' => 'http://webian.org/shell/',
            'title' => 'Webian {%Shell%}',
            'code' => 'webianshell',
        ],
        'webrender' => [
            'link' => 'http://webrender.99k.org/',
            'title' => 'Webrender',
            'code' => 'webrender',
        ],
        'weltweitimnetzbrowser' => [
            'link' => 'http://weltweitimnetz.de/software/Browser.en.page',
            'title' => 'Weltweitimnetz {%Browser%}',
            'code' => 'weltweitimnetzbrowser',
        ],
        'weibo' => [
            'link' => 'http://www.weibo.com',
            'title' => '{%Weibo%}',
            'code' => 'weibo',
        ],
        'whatsapp' => [
            'link' => 'https://web.whatsapp.com/',
            'title' => '{%WhatsApp%}',
            'code' => 'whatsapp',
        ],
        'whitehat aviator' => [
            'link' => 'https://www.whitehatsec.com/aviator/',
            'title' => '{%WhiteHat Aviator%}',
            'code' => 'aviator',
        ],
        'wkiosk' => [
            'link' => 'http://www.app4mac.com/store/index.php?target=products&product_id=9',
            'title' => 'wKiosk',
            'code' => 'wkiosk',
        ],
        'worldwideweb' => [
            'link' => 'http://www.w3.org/People/Berners-Lee/WorldWideWeb.html',
            'title' => '{%WorldWideWeb%}',
            'code' => 'worldwideweb',
        ],
        'wyzo' => [
            'link' => 'http://www.wyzo.com/',
            'title' => '{%Wyzo%}',
            'code' => 'wyzo',
        ],
        'x-smiles' => [
            'link' => 'http://www.xsmiles.org/',
            'title' => '{%X-Smiles%}',
            'code' => 'x-smiles',
        ],
        'xiino' => [
            'link' => '#',
            'title' => '{%Xiino%}',
            'code' => 'null',
        ],
        'yabrowser' => [
            'link' => 'http://browser.yandex.com/',
            'title' => 'Yandex.{%Browser%}',
            'code' => 'yandex',
        ],
        'zbrowser' => [
            'link' => 'http://sites.google.com/site/zeromusparadoxe01/zbrowser',
            'title' => '{%zBrowser%}',
            'code' => 'zbrowser',
        ],
        'zipzap' => [
            'link' => 'http://www.zipzaphome.com/',
            'title' => '{%ZipZap%}',
            'code' => 'zipzap',
        ],
        'abrowse' => [
            'link' => 'http://abrowse.sourceforge.net/',
            'title' => 'ABrowse {%Browser%}',
            'code' => 'abrowse',
        ],
        'firefox' => [
            'link' => 'http://www.mozilla.org/',
            'title' => '{%Firefox%}',
            'code' => 'firefox',
        ],
        'none' => [
            'link' => '#',
            'title' => 'Unknown',
            'name' => 'Unknown',
            'version' => '',
            'code' => 'unknown',
        ],
    ];

    private static $useragent;

    public static function analyze($useragent)
    {
        self::$useragent = $useragent;

        $link = '';
        $title = '';
        $version = '';
        $image_url = '';
        $web_browser = '';
        $mobile = 0;
        $version_object = null;

        $result = [];
        $regExList = '/(' . implode('|', self::$browserRegEx) . ')/i';

        if (preg_match($regExList, $useragent, $result)) {
            $name = strtolower($result[1]);
            if (isset(self::$browserList[$name])) {
                $result = self::$browserList[$name];
                $browserNameArray = explode('{%', $result['title']);
                $regmatch = null;
                if (preg_match('/\{\%(.+)\%\}/', $result['title'], $regmatch)) {
                    $version_object = self::get_version(['', $regmatch[1]]);
                    $result['version'] = $version_object['version'];
                    $result['name'] = $browserNameArray[0] . $version_object['title'];
                    $result['title'] = $result['name'] . ($result['version'] == '' ? '' : ' ' . $result['version']);
                } else {
                    $result['name'] = $result['title'];
                    $result['version'] = '';
                }
                return $result;
            } else {
                return self::$browserList['none'];
            }
        } elseif (preg_match('/Galaxy/i', $useragent) && !preg_match('/Chrome/i', $useragent)) {
            $link = 'http://www.traos.org/';
            $version_object = self::get_version(['', 'Galaxy']);
            $image_url = 'galaxy';
        } elseif (preg_match('/Opera Mini/i', $useragent)) {
            $link = 'http://www.opera.com/mini/';
            $version_object = self::get_version(['', 'Opera Mini']);
            $image_url = 'opera-2';
        } elseif (preg_match('/Opera Mobi/i', $useragent)) {
            $link = 'http://www.opera.com/mobile/';
            $version_object = self::get_version(['', 'Opera Mobi']);
            $image_url = 'opera-2';
        } elseif (preg_match('/Opera Labs/i', $useragent) || (preg_match('/Opera/i', $useragent) && preg_match('/Edition Labs/i', $useragent))) {
            $link = 'http://labs.opera.com/';
            $version_object = self::get_version(['', 'Opera Labs']);
            $image_url = 'opera-next';
        } elseif (preg_match('/Opera Next/i', $useragent) || (preg_match('/Opera/i', $useragent) && preg_match('/Edition Next/i', $useragent))) {
            $link = 'http://www.opera.com/support/kb/view/991/';
            $version_object = self::get_version(['', 'Opera Next']);
            $image_url = 'opera-next';
        } elseif (preg_match('/Opera/i', $useragent)) {
            $link = 'http://www.opera.com/';
            $version_object = self::get_version(['', 'Opera']);
            $image_url = 'opera-1';
            if (preg_match('/Version/i', $useragent)) {
                $image_url = 'opera-2';
            }
        } elseif (preg_match('/OPR/i', $useragent)) {
            $link = 'http://www.opera.com/';
            if (preg_match('/(Edition Next)/i', $useragent)) {
                $version_object = self::get_version(['', 'Opera Next']);
                $image_url = 'opera-next';
            } elseif (preg_match('/(Edition Developer)/i', $useragent)) {
                $version_object = self::get_version(['', 'Opera Developer']);
                $image_url = 'opera-developer';
            } else {
                $version_object = self::get_version(['', 'Opera']);
                $image_url = 'opera-1';
            }
        } elseif (preg_match('/Series60/i', $useragent) && !preg_match('/Symbian/i', $useragent)) {
            $link = 'http://en.wikipedia.org/wiki/Web_Browser_for_S60';
            $title = 'Nokia';
            $version_object = self::get_version(['', 'Series60']);
            $image_url = 's60';
        } elseif (preg_match('/S60/i', $useragent) && !preg_match('/Symbian/i', $useragent)) {
            $link = 'http://en.wikipedia.org/wiki/Web_Browser_for_S60';
            $title = 'Nokia';
            $version_object = self::get_version(['', 'S60']);
            $image_url = 's60';
        } elseif (preg_match('/SE\ /i', $useragent) && preg_match('/MetaSr/i', $useragent)) {
            $link = 'http://ie.sogou.com/';
            $title = 'Sogou Explorer';
            $image_url = 'sogou';
        } elseif ((preg_match('/Ubuntu\;\ Mobile/i', $useragent) || preg_match('/Ubuntu\;\ Tablet/i', $useragent) && preg_match('/WebKit/i', $useragent))) {
            $link = 'https://launchpad.net/webbrowser-app';
            $title = 'Ubuntu Web Browser';
            $image_url = 'ubuntuwebbrowser';
            $image_url = 'ubuntuwebbrowser';
        } elseif (preg_match('/Avant\ Browser/i', $useragent)) {
            $link = 'http://www.avantbrowser.com/';
            $title = 'Avant ';
            $version_object = self::get_version(['', 'Browser']);
            $image_url = 'avantbrowser';
        } elseif (preg_match('/AppleWebkit/i', $useragent) && preg_match('/Android/i', $useragent) && !preg_match('/Chrome/i', $useragent)) {
            $link = 'http://developer.android.com/reference/android/webkit/package-summary.html';
            $version_object = self::get_version(['', 'Android Webkit']);
            $image_url = 'android-webkit';
        } elseif (preg_match('/Windows.+Chrome.+Edge/i', $useragent)) {
            // Project Spartan
            $link = 'http://windows.microsoft.com/en-us/windows/preview-microsoft-edge-pc';
            $version_object = self::get_version(['', 'Edge']);
            $image_url = 'edge';
        } elseif (preg_match('/Windows.+Chrome.+Edg/i', $useragent)) {
            // Project Spartan
            $link = 'https://www.microsoft.com/zh-cn/edge';
            $version_object = self::get_version(['', 'Edg']);
            $image_url = 'edg';
        } elseif (preg_match('/EdgA/i', $useragent)) { // Edge Android
            $link = 'http://windows.microsoft.com/en-us/windows/preview-microsoft-edge-pc';
            $version_object = self::get_version(['', 'EdgA']);
            $image_url = 'edge';
        } elseif (preg_match('/Chrome|crios/i', $useragent)) {
            if (preg_match('/crios/i', $useragent)) {
                $link = 'http://google.com/chrome/';
                $title = 'Google ';
                $version_object = self::get_version(['', 'CriOS']);
                $image_url = 'chrome';
            } else {
                $link = 'http://google.com/chrome/';
                $title = 'Google ';
                $version_object = self::get_version(['', 'Chrome']);
                $image_url = 'chrome';
            }
        } elseif (preg_match('/Safari/i', $useragent) && !preg_match('/Nokia/i', $useragent)) {
            $link = 'http://www.apple.com/safari/';
            if (preg_match('/Version/i', $useragent)) {
                $version_object = self::get_version(['', 'Safari']);
            } else {
                $title = 'Safari';
            }
            if (preg_match('/Mobile ?Safari/i', $useragent)) {
                $title = 'Mobile ' . $title;
            }
            $image_url = 'safari';
        } elseif (preg_match('/Nokia/i', $useragent) && !preg_match('/Trident/i', $useragent)) {
            $link = 'http://www.nokia.com/browser';
            $title = 'Nokia Web Browser';
            $image_url = 'maemo';
        } elseif (preg_match('/Firefox/i', $useragent)) {
            $link = 'http://www.mozilla.org/';
            $version_object = self::get_version(['', 'Firefox']);
            $image_url = 'firefox';
        } elseif (preg_match('/MSIE/i', $useragent) || preg_match('/Trident/i', $useragent)) {
            $link = 'http://www.microsoft.com/windows/products/winfamily/ie/default.mspx';
            $title = 'Internet Explorer';
            $version_object = self::get_version(['', 'MSIE']);
            $image_url = 'msie';
            if (preg_match('/MSIE[\ |\/]?([.0-9a-zA-Z]+)/i', $useragent, $regmatch)) {
                // We have IE10 or older
            } elseif (preg_match('/\ rv:([.0-9a-zA-Z]+)/i', $useragent, $regmatch)) {
                // We have IE11 or newer
            }
            if (count($regmatch) > 0) {
                $ie_version = (int)$regmatch[1];
                if ($ie_version >= 11) {
                    $image_url = 'msie11';
                } elseif ($ie_version == 8) {
                    $image_url = 'msie7';
                } elseif ($ie_version == 5) {
                    $image_url = 'msie4';
                } else {
                    $image_url = 'msie' . $ie_version;
                }
            }
        } elseif (preg_match('/Mozilla/i', $useragent)) {
            $link = 'http://www.mozilla.org/';
            $title = 'Mozilla Compatible';
            $image_url = 'mozilla';
        } else {
            $link = '#';
            $title = 'Unknown';
            $image_url = 'null';
        }
        $full = '';
        if (!is_null($version_object)) {
            $version = $version_object['version'];
            $title .= $version_object['title'];
            $full = $title . ($version == '' ? '' : ' ' . $version);
        } else {
            $full = $title;
        }
        return [
            'link' => $link,
            'title' => $full,
            'name' => $title,
            'version' => $version,
            'code' => $image_url,
        ];
    }

    public static function get_version($object)
    {
        $useragent = self::$useragent;
        $title = $object[1];
        $lower_title = strtolower($title);
        $return = '';
        // Fix for Opera's UA string changes in v10.00+ (and others)
        $start = $title;
        if (preg_match('/Version/i', $useragent) && ((($lower_title == 'opera' || $lower_title == 'opera next' || $lower_title == 'opera labs')) || ($lower_title == 'opera mobi') || ($lower_title == 'safari') || ($lower_title == 'pre') || ($lower_title == 'android webkit'))) {
            $start = 'Version';
        } elseif (($lower_title == 'opera' || $lower_title == 'opera next' || $lower_title == 'opera developer') && preg_match('/OPR/i', $useragent)) {
            $start = 'OPR';
        } elseif ($lower_title == 'links') {
            $start = 'Links (';
        } elseif ($lower_title == 'uc browser') {
            $start = 'UC Browser';
        } elseif ($lower_title == 'smarttv') {
            $start = 'WebBrowser';
        } elseif ($lower_title == 'ucweb' && preg_match('/UCBrowser/i', $useragent)) {
            $start = 'UCBrowser';
        } elseif (($lower_title == 'tenfourfox') || ($lower_title == 'classilla') || ($lower_title == 'msie' && preg_match('/\ rv:([.0-9a-zA-Z]+)/i', $useragent))) {
            // We have IE11 or newer
            $start = ' rv';
        } elseif ($lower_title == 'spartan') {
            $start = 'edge';
        } elseif ($lower_title == 'nichrome/self') {
            $start = 'self';
        }
        // Grab the browser version if its present
        $version = '';
        $start = preg_quote($start);
        if (preg_match('/' . $start . '[\ |\/|\:]?([.0-9a-zA-Z]+)/i', $useragent, $regmatch)) {
            if (count($regmatch) > 1) {
                $version = $regmatch[1];
            }
        }
        // $return = browser Title and Version, but first..some titles need to be changed
        if ($lower_title == 'msie' && $version == '7.0' && preg_match('/Trident\/4.0/i', $useragent)) {
            $return = ' 8.0 (Compatibility Mode)'; // Fix for IE8 quirky UA string with Compatibility Mode enabled
            $version = '';
        } elseif ($lower_title == 'msie') {
            $return = '';
        } elseif ($lower_title == 'nf-browser') {
            $return = 'NetFront';
        } elseif ($lower_title == 'semc-browser') {
            $return = 'SEMC Browser';
        } elseif ($lower_title == 'ucweb' || $lower_title == 'ubrowser' || $lower_title == 'ucbrowser' || $lower_title == 'uc browser') {
            $return = 'UC Browser';
        } elseif ($lower_title == 'bidubrowser' || $lower_title == 'baidubrowser' || $lower_title == 'baiduhd') {
            $return = 'Baidu Browser';
        } elseif ($lower_title == 'up.browser' || $lower_title == 'up.link') {
            $return = 'Openwave Mobile Browser';
        } elseif ($lower_title == 'chromeframe') {
            $return = 'Google Chrome Frame';
        } elseif ($lower_title == 'mozilladeveloperpreview') {
            $return = 'Mozilla Developer Preview';
        } elseif ($lower_title == 'opera mobi') {
            $return = 'Opera Mobile';
        } elseif ($lower_title == 'osb-browser') {
            $return = 'Gtk+ WebCore';
        } elseif ($lower_title == 'tablet browser') {
            $return = 'MicroB';
        } elseif ($lower_title == 'crmo') {
            $return = 'Chrome Mobile';
        } elseif ($lower_title == 'smarttv') {
            $return = 'Maple Browser';
        } elseif ($lower_title == 'atomicbrowser') {
            $return = 'Atomic Web Browser';
        } elseif ($lower_title == 'barcapro') {
            $return = 'Barca Pro';
        } elseif ($lower_title == 'dplus') {
            $return = 'D+';
        } elseif ($lower_title == 'micromessenger') {
            $return = 'WeChat';
        } elseif ($lower_title == 'nichrome/self') {
            $return = 'NiChrome';
        } elseif ($lower_title == 'gsa') {
            $return = 'Google Search App';
        } elseif ($lower_title == 'fbav') {
            $return = 'Facebook';
        } elseif ($lower_title == 'tizenbrowser') {
            $return = 'Tizen Browser';
        } elseif ($lower_title == 'sailfishbrowser') {
            $return = 'Sailfish Browser';
        } elseif ($lower_title == 'miuibrowser') {
            $return = 'MIUI Browser';
        } elseif ($lower_title == 'opera labs') {
            if (preg_match('/Edition\ Labs([\ ._0-9a-zA-Z]+);/i', $useragent, $regmatch)) {
                $return = $title . $regmatch[1];
            } else {
                $return = $title;
            }
        } elseif ($lower_title == 'qtcarbrowser') {
            $return = 'Tesla Car Browser';
            $version = '';
        } elseif ($lower_title == 'edga') {
            $return = 'Edge Android';
        } elseif ($lower_title == 'edg') {
            $return = 'Edge';
        } elseif ($lower_title == 'iceweasel') {
            if ($version == 'Firefox') {
                $version = '';
            }
            $return = $title;
        } else {
            $return = $title;
        }
        if (strtolower($version) == 'build') {
            $version = '';
        }
        return [
            'title' => $return,
            'version' => trim($version),
        ];
    }
}
