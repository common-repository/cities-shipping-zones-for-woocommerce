<?php

/**
 * List of cities for: South Africa
 * Source: https://en.wikipedia.org/wiki/Category:Lists_of_cities_in_South_Africa
 * Version: 1.1
 * Author: Condless
 * Author URI: https://www.condless.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Exit if accessed directly
 */
defined( 'ABSPATH' ) || exit;

$country_states = ( include WC()->plugin_path() . '/i18n/states.php' )['ZA'];

$country_cities = [
	'EC' => [
		'ZAADELAIDE_(IKHOBONQABA)' => 'Adelaide (iKhobonqaba)',
		'ZAALICE_(IDIKENI)' => 'Alice (iDikeni)',
		'ZAALIWAL_NORTH' => 'Aliwal North',
		'ZABALFOUR' => 'Balfour',
		'ZABARKLEY_EAST' => 'Barkley East',
		'ZABETHULIE' => 'Bethulie',
		'ZABERLIN' => 'Berlin',
		'ZABHISHO,_(PREVIOUSLY_BISHO)' => 'Bhisho, (previously Bisho)',
		'ZABRAUNSCHWEIG' => 'Braunschweig',
		'ZABURGERSDORP' => 'Burgersdorp',
		'ZACALA' => 'Cala',
		'ZACATHCART' => 'Cathcart',
		'ZACEDERVILLE' => 'Cederville',
		'ZACOFIMVABA' => 'Cofimvaba',
		'ZADOHNE' => 'Dohne',
		'ZADORDRECHT' => 'Dordrecht',
		'ZAEAST_LONDON_(EMONTI)' => 'East London (eMonti)',
		'ZAELLIOT' => 'Elliot',
		'ZAFORT_BEAUFORT_(EBHOFOLO)' => 'Fort Beaufort (eBhofolo)',
		'ZAGONUBIE' => 'Gonubie',
		'ZAHAGA-HAGA' => 'Haga-Haga',
		'ZAHAMBURG' => 'Hamburg',
		'ZAHOGSBACK' => 'Hogsback',
		'ZAHOFMEYR' => 'Hofmeyr',
		'ZAINDWE' => 'Indwe',
		'ZAJAMESTOWN' => 'Jamestown',
		'ZAKATBERG' => 'Katberg',
		'ZAKEI_MOUTH' => 'Kei Mouth',
		'ZAKEISKAMMAHOEK' => 'Keiskammahoek',
		'ZAKIDDS_BEACH' => 'Kidds Beach',
		'ZAKING_WILLIAMS_TOWN_(EQONCE)' => 'King Williams Town (eQonce)',
		'ZAKOMGA' => 'Komga',
		'ZALADY_GREY' => 'Lady Grey',
		'ZACACADU_(PREVIOUSLY_LADY_FRERE)' => 'Cacadu (previously Lady Frere)',
		'ZAMACLEAR' => 'Maclear',
		'ZAMDANTSANE' => 'Mdantsane',
		'ZAMHLANGENI' => 'Mhlangeni',
		'ZAMOLTENO' => 'Molteno',
		'ZAMORGANS_BAY' => 'Morgans Bay',
		'ZAMOUNT_EYLIFF' => 'Mount Eyliff',
		'ZAMOUNT_FRERE' => 'Mount Frere',
		'ZANGCOBO_(PREVIOUSLY_ENGCOBO)' => 'Ngcobo (previously Engcobo)',
		'ZAOYSTER_BAY' => 'Oyster Bay',
		'ZAPEDDIE' => 'Peddie',
		'ZAKOMANI_(PREVIOUSLY_QUEENSTOWN)' => 'Komani (Previously Queenstown)',
		'ZASEYMOUR' => 'Seymour',
		'ZASTERKSTROOM' => 'Sterkstroom',
		'ZASTUTTERHEIM' => 'Stutterheim',
		'ZATARKASTAD' => 'Tarkastad',
		'ZATSOMO' => 'Tsomo',
		'ZAVENTERSTAD' => 'Venterstad',
		'ZAWHITTLESEA' => 'Whittlesea',
		'ZAZWELITSHA' => 'Zwelitsha',
		'ZAABERDEEN' => 'Aberdeen',
		'ZAADDO' => 'Addo',
		'ZAALEXANDRIA' => 'Alexandria',
		'ZABATHURST' => 'Bathurst',
		'ZABEDFORD' => 'Bedford',
		'ZACOOKHOUSE' => 'Cookhouse',
		'ZACRADOCK' => 'Cradock',
		'ZADESPATCH' => 'Despatch',
		'ZAENON' => 'Enon',
		'ZAGRAAFF_REINET' => 'Graaff Reinet',
		'ZAGRAHAMSTOWN' => 'Grahamstown',
		'ZAHANKEY' => 'Hankey',
		'ZAHUMANSDORP' => 'Humansdorp',
		'ZAJEFFREYS_BAY' => 'Jeffreys Bay',
		'ZAJOUBERTINA' => 'Joubertina',
		'ZAKAREEDOUW' => 'Kareedouw',
		'ZAKENTON-ON-SEA' => 'Kenton-on-Sea',
		'ZAKIRKWOOD' => 'Kirkwood',
		'ZAKRAKEELRIVIER' => 'Krakeelrivier',
		'ZAMIDDELBURG' => 'Middelburg',
		'ZANIEU-BETHESDA' => 'Nieu-Bethesda',
		'ZAPATENSIE' => 'Patensie',
		'ZAPATERSON' => 'Paterson',
		'ZAPORT_ALFRED' => 'Port Alfred',
		'ZAPORT_ELIZABETH_(EBHAYI)' => 'Port Elizabeth (eBhayi)',
		'ZASALEM' => 'Salem',
		'ZASOMERSET_EAST' => 'Somerset East',
		'ZAST_FRANCIS_BAY' => 'St Francis Bay',
		'ZASTEYNSBURG,_EASTERN_CAPE' => 'Steynsburg, Eastern Cape',
		'ZASTEYTLERVILLE' => 'Steytlerville',
		'ZAUITENHAGE' => 'Uitenhage',
		'ZAWILLOWMORE' => 'Willowmore',
		'ZACHINTSA' => 'Chintsa',
		'ZACOFFEE_BAY' => 'Coffee Bay',
		'ZADUTYWA_(PREVIOUSLY_IDUTYWA)' => 'Dutywa (previously Idutywa)',
		'ZAFLAGSTAFF' => 'Flagstaff',
		'ZAGCUWA_(PREVIOUSLY_BUTTERWORTH)' => 'Gcuwa (previously Butterworth)',
		'ZANQAMAKWE' => 'Nqamakwe',
		'ZACENTANE' => 'Centane',
		'ZALADY_FRERE' => 'Lady Frere',
		'ZALIBODE' => 'Libode',
		'ZALUSIKISIKI' => 'Lusikisiki',
		'ZAMOUNT_FLETCHER' => 'Mount Fletcher',
		'ZAMATATIELE' => 'Matatiele',
		'ZAMOUNT_AYLIFF' => 'Mount Ayliff',
		'ZATABANKULU_(PREVIOUSLY_NTABANKULU)' => 'Tabankulu (previously Ntabankulu)',
		'ZAMOUNT_FRERE' => 'Mount Frere',
		'ZAMTHATHA_(PREVIOUSLY_UMTATA)' => 'Mthatha (previously Umtata)',
		'ZAPORT_ST_JOHNS' => 'Port St Johns',
		'ZAQOLORA_MOUTH' => 'Qolora Mouth',
		'ZAGATYANE_(PREVIOUSLY_WILLOWVALE)' => 'Gatyane (previously Willowvale)',
		'ZATSOLO' => 'Tsolo',
		'ZABIZANA' => 'Bizana',
		'ZAQUMBU' => 'Qumbu',
		'ZANGQELENI' => 'Ngqeleni',
		'ZAELLIOTDALE' => 'Elliotdale',
	],
	'FS' => [
		'ZAARLINGTON,_FREE_STATE' => 'Arlington, Free State',
		'ZABETHLEHEM' => 'Bethlehem',
		'ZACLARENS' => 'Clarens',
		'ZACLOCOLAN' => 'Clocolan',
		'ZACORNELIA' => 'Cornelia',
		'ZAEXCELSIOR' => 'Excelsior',
		'ZAFICKSBURG' => 'Ficksburg',
		'ZAFOURIESBURG' => 'Fouriesburg',
		'ZAHARRISMITH' => 'Harrismith',
		'ZAHOBHOUSE' => 'Hobhouse',
		'ZAKESTELL' => 'Kestell',
		'ZALADYBRAND' => 'Ladybrand',
		'ZALINDLEY' => 'Lindley',
		'ZAMARQUARD' => 'Marquard',
		'ZAMEMEL' => 'Memel',
		'ZAPAUL_ROUX' => 'Paul Roux',
		'ZAPETRUS_STEYN' => 'Petrus Steyn',
		'ZAPHUTHADITJHABA' => 'Phuthaditjhaba',
		'ZAREITZ' => 'Reitz',
		'ZAROSENDAL' => 'Rosendal',
		'ZASENEKAL' => 'Senekal',
		'ZASTEYNSRUS' => 'Steynsrus',
		'ZASWINBURNE' => 'Swinburne',
		'ZATWEESPRUIT' => 'Tweespruit',
		'ZAVAN_REENEN' => 'Van Reenen',
		'ZAVREDE' => 'Vrede',
		'ZAWARDEN' => 'Warden',
		'ZAWINBURG' => 'Winburg',
		'ZAHARRISMITH' => 'Harrismith',
		'ZAALLANRIDGE' => 'Allanridge',
		'ZABOSHOF' => 'Boshof',
		'ZABOTHAVILLE' => 'Bothaville',
		'ZABRANDFORT' => 'Brandfort',
		'ZABULTFONTEIN' => 'Bultfontein',
		'ZADEALESVILLE' => 'Dealesville',
		'ZAHENNENMAN' => 'Hennenman',
		'ZAHERTZOGVILLE' => 'Hertzogville',
		'ZAHOOPSTAD' => 'Hoopstad',
		'ZAKGOTSONG' => 'Kgotsong',
		'ZAKUTLWANONG' => 'Kutlwanong',
		'ZAMAKELEKETLA' => 'Makeleketla',
		'ZAODENDAALSRUS' => 'Odendaalsrus',
		'ZATHEUNISSEN' => 'Theunissen',
		'ZAVENTERSBURG' => 'Ventersburg',
		'ZAVERKEERDEVLEI' => 'Verkeerdevlei',
		'ZAVIRGINIA' => 'Virginia',
		'ZAWELKOM' => 'Welkom',
		'ZAWESSELSBRON' => 'Wesselsbron',
		'ZAWINBURG' => 'Winburg',
		'ZADENEYSVILLE' => 'Deneysville',
		'ZAEDENVILLE' => 'Edenville',
		'ZAFRANKFORT' => 'Frankfort',
		'ZAHEILBRON' => 'Heilbron',
		'ZAKOPPIES' => 'Koppies',
		'ZAKROONSTAD' => 'Kroonstad',
		'ZAORANJEVILLE' => 'Oranjeville',
		'ZAPARYS' => 'Parys',
		'ZASASOLBURG' => 'Sasolburg',
		'ZATWEELING' => 'Tweeling',
		'ZAVILJOENSKROON' => 'Viljoenskroon',
		'ZAVILLIERS' => 'Villiers',
		'ZAVREDEFORT' => 'Vredefort',
		'ZABETHULIE' => 'Bethulie',
		'ZABLOEMFONTEIN' => 'Bloemfontein',
		'ZABOTSHABELO' => 'Botshabelo',
		'ZADEWETSDORP' => 'Dewetsdorp',
		'ZAEDENBURG' => 'Edenburg',
		'ZAFAURESMITH' => 'Fauresmith',
		'ZAITUMELENG' => 'Itumeleng',
		'ZAJACOBSDAL' => 'Jacobsdal',
		'ZAJAGERSFONTEIN' => 'Jagersfontein',
		'ZAKOFFIEFONTEIN' => 'Koffiefontein',
		'ZALUCKHOFF' => 'Luckhoff',
		'ZAMANGAUNG' => 'Mangaung',
		'ZAPETRUSBURG' => 'Petrusburg',
		'ZAPHILIPPOLIS' => 'Philippolis',
		'ZAREDDERSBURG' => 'Reddersburg',
		'ZAROUXVILLE' => 'Rouxville',
		'ZASMITHFIELD' => 'Smithfield',
		'ZASPRINGFONTEIN' => 'Springfontein',
		'ZATHABA_NCHU' => 'Thaba Nchu',
		'ZATROMPSBURG' => 'Trompsburg',
		'ZAVAN_STADENSRUS' => 'Van Stadensrus',
		'ZAWEPENER' => 'Wepener',
		'ZAZASTRON' => 'Zastron',
		'ZAMVELA' => 'mvela',
	],
	'GP' => [
		'ZAALEXANDRA' => 'Alexandra',
		'ZAJOHANNESBURG' => 'Johannesburg',
		'ZALENASIA' => 'Lenasia',
		'ZAMIDRAND' => 'Midrand',
		'ZAROODEPOORT' => 'Roodepoort',
		'ZASANDTON' => 'Sandton',
		'ZASOWETO' => 'Soweto',
		'ZAMSHONGO' => 'Mshongo',
		'ZAKLIPFONTIENVIEW' => 'Klipfontienview',
		'ZAORANGE_FARM' => 'Orange Farm',
		'ZAALBERTON' => 'Alberton',
		'ZAGERMISTON' => 'Germiston',
		'ZABENONI' => 'Benoni',
		'ZABOKSBURG' => 'Boksburg',
		'ZABRAKPAN' => 'Brakpan',
		'ZACLAYVILLE' => 'Clayville',
		'ZADAVEYTON' => 'Daveyton',
		'ZADEVON' => 'Devon',
		'ZADUDUZA' => 'Duduza',
		'ZAEDENVALE' => 'Edenvale',
		'ZAENNERDALE' => 'Ennerdale',
		'ZAGERMISTON' => 'Germiston',
		'ZAIMPUMELELO' => 'Impumelelo',
		'ZAISANDO' => 'Isando',
		'ZAKATLEHONG' => 'Katlehong',
		'ZAKEMPTON_PARK' => 'Kempton Park',
		'ZAKWATHEMA' => 'KwaThema',
		'ZANIGEL' => 'Nigel',
		'ZAOLIFANTSFONTEIN' => 'Olifantsfontein',
		'ZAREIGER_PARK' => 'Reiger Park',
		'ZASPRINGS' => 'Springs',
		'ZATEMBISA' => 'Tembisa',
		'ZATHOKOZA' => 'Thokoza',
		'ZATSAKANE' => 'Tsakane',
		'ZAVOSLOORUS' => 'Vosloorus',
		'ZAWATTVILLE' => 'Wattville',
		'ZAVEREENIGING' => 'vereeniging',
		'ZAATTERIDGEVILLE' => 'Atteridgeville',
		'ZABRONBERG' => 'Bronberg',
		'ZABRONKHORSTSPRUIT' => 'Bronkhorstspruit',
		'ZACENTURION' => 'Centurion',
		'ZACULLINAN' => 'Cullinan',
		'ZAEKANGALA' => 'Ekangala',
		'ZAGA-RANKUWA' => 'Ga-Rankuwa',
		'ZAHAMMANSKRAAL' => 'Hammanskraal',
		'ZAIRENE' => 'Irene',
		'ZAMABOPANE' => 'Mabopane',
		'ZAMAMELODI' => 'Mamelodi',
		'ZAPRETORIA' => 'Pretoria',
		'ZARAYTON' => 'Rayton',
		'ZAREFILWE' => 'Refilwe',
		'ZASOSHANGUVE' => 'Soshanguve',
		'ZAZITHOBENI' => 'Zithobeni',
		'ZABOIPATONG' => 'Boipatong',
		'ZABOPHELONG' => 'Bophelong',
		'ZAEVATON' => 'Evaton',
		'ZASEBOKENG' => 'Sebokeng',
		'ZASHARPEVILLE' => 'Sharpeville',
		'ZAVANDERBIJLPARK' => 'Vanderbijlpark',
		'ZAVEREENIGING' => 'Vereeniging',
		'ZAMEYERTON' => 'Meyerton',
		'ZAHEIDELBERG' => 'Heidelberg',
		'ZARATANDA' => 'Ratanda',
		'ZACARLETONVILLE' => 'Carletonville',
		'ZAKHUTSONG' => 'Khutsong',
		'ZAFOCHVILLE' => 'Fochville',
		'ZAKOKOSI' => 'Kokosi',
		'ZAGREENSPARK' => 'Greenspark',
		'ZAWEDELA' => 'Wedela',
		'ZAWELVERDIEND' => 'Welverdiend',
		'ZABLYBANK' => 'Blybank',
		'ZACHAMDOR' => 'Chamdor',
		'ZADAN_PIENAARVILLE' => 'Dan Pienaarville',
		'ZADELPORTON' => 'Delporton',
		'ZAFACTORIA' => 'Factoria',
		'ZAHEKPOORT' => 'Hekpoort',
		'ZAKAGISO' => 'Kagiso',
		'ZAKENMARE' => 'Kenmare',
		'ZAKROMDRAAI' => 'Kromdraai',
		'ZAKRUGERSDORP' => 'Krugersdorp',
		'ZAMUNSIEVILLE_SOUTH' => 'Munsieville South',
		'ZAMAGALIESBURG' => 'Magaliesburg',
		'ZAMONUMENT' => 'Monument',
		'ZAMULDERSDRIFT' => 'Muldersdrift',
		'ZAMUNSIEVILLE' => 'Munsieville',
		'ZANOORDHEUWEL' => 'Noordheuwel',
		'ZARANGEVIEW' => 'Rangeview',
		'ZASILVERFIELDS' => 'Silverfields',
		'ZATARLTON' => 'Tarlton',
		'ZAAUREUS' => 'Aureus',
		'ZABHONGWENI' => 'Bhongweni',
		'ZABOTHA_AH' => 'Botha AH',
		'ZABRANDVLEI' => 'Brandvlei',
		'ZACULEMBORG_PARK' => 'Culemborg Park',
		'ZADWARSKLOOF_AH' => 'Dwarskloof AH',
		'ZAEIKEPARK' => 'Eikepark',
		'ZAELAND_SH' => 'Eland SH',
		'ZAFINSBURY' => 'Finsbury',
		'ZAGREEN_HILLS' => 'Green Hills',
		'ZAGROOT-ELANDSVLEI_AH' => 'Groot-Elandsvlei AH',
		'ZAHECTORTON' => 'Hectorton',
		'ZAHELIKON_PARK' => 'Helikon Park',
		'ZAHILLSIDE_AH' => 'Hillside AH',
		'ZAHOME_LAKE' => 'Home Lake',
		'ZAKOCKSOORD' => 'Kocksoord',
		'ZALOUMARINA_AH' => 'Loumarina AH',
		'ZAMIDDELVLEI_AH' => 'Middelvlei AH',
		'ZAMILLSIDE' => 'Millside',
		'ZAMOHLAKENG' => 'Mohlakeng',
		'ZAMOHLAKENG_EXT_1' => 'Mohlakeng Ext 1',
		'ZAMOHLAKENG_EXT_3' => 'Mohlakeng Ext 3',
		'ZAMOHLAKENG_EXT_4' => 'Mohlakeng Ext 4',
		'ZAMOHLAKENG_EXT_7' => 'Mohlakeng Ext 7',
		'ZAPANVLAK_GOLD_MINE' => 'Panvlak Gold Mine',
		'ZAPELZVALE_AH' => 'Pelzvale AH',
		'ZARANDFONTEIN' => 'Randfontein',
		'ZARANDFONTEIN_ESTATE_GOLD_MINE' => 'Randfontein Estate Gold Mine',
		'ZARANDFONTEIN_HARMONY_GOLD_MINE' => 'Randfontein Harmony Gold Mine',
		'ZARANDFONTEIN_NU' => 'Randfontein NU',
		'ZARANDFONTEIN_SOUTH_AH' => 'Randfontein South AH',
		'ZARANDGATE' => 'Randgate',
		'ZARANDPOORT' => 'Randpoort',
		'ZARIKASRUS_AH' => 'Rikasrus AH',
		'ZAROBIN_PARK' => 'Robin Park',
		'ZATENACRE_AH' => 'Tenacre AH',
		'ZATOEKOMSRUS' => 'Toekomsrus',
		'ZAWEST_PORGES' => 'West Porges',
		'ZAWESTERGLOOR' => 'Westergloor',
		'ZAWHEATLANDS_AH' => 'Wheatlands AH',
		'ZAWILBOTSDAL_AH' => 'Wilbotsdal AH',
		'ZAZENZELE' => 'Zenzele',
		'ZABEKKERSDAL' => 'Bekkersdal',
		'ZAWESTONARIA' => 'Westonaria',
	],
	'KZN' => [
		'ZADANNHAUSER' => 'Dannhauser',
		'ZAHATTINGSPRUIT' => 'Hattingspruit',
		'ZAMADADENI' => 'Madadeni',
		'ZANEWCASTLE' => 'Newcastle',
		'ZAOSIZWENI' => 'Osizweni',
		'ZAETHEKWINI' => 'eThekwini',
		'ZAEKUPHAKAMENI' => 'ekuPhakameni',
		'ZAHILLCREST' => 'Hillcrest',
		'ZAILLOVO_BEACH' => 'Illovo Beach',
		'ZAINANDA' => 'Inanda',
		'ZAISIPINGO' => 'Isipingo',
		'ZAFOLWENI' => 'Folweni',
		'ZAKARRIDENE' => 'Karridene',
		'ZAKINGSBURGH' => 'Kingsburgh',
		'ZAKLOOF' => 'Kloof',
		'ZAKWAMASHU' => 'KwaMashu',
		'ZALA_LUCIA' => 'La Lucia',
		'ZALA_MERCY' => 'La Mercy',
		'ZAMOUNT_EDGECOMBE' => 'Mount Edgecombe',
		'ZANEW_GERMANY' => 'New Germany',
		'ZAPINETOWN' => 'Pinetown',
		'ZAQUEENSBURGH' => 'Queensburgh',
		'ZATONGAAT' => 'Tongaat',
		'ZAUMBOGINTWINI' => 'Umbogintwini',
		'ZAUMDLOTI' => 'Umdloti',
		'ZAUMGABABA' => 'Umgababa',
		'ZAUMHLANGA' => 'Umhlanga',
		'ZAUMLAZI' => 'Umlazi',
		'ZALAMONTVILLE' => 'Lamontville',
		'ZAVERULAM' => 'Verulam',
		'ZAWARNER_BEACH' => 'Warner Beach',
		'ZAWESTVILLE' => 'Westville',
		'ZACHESTERVILLE' => 'Chesterville',
		'ZAWINKELSPRUIT' => 'Winkelspruit',
		'ZACHATSWORTH' => 'Chatsworth',
		'ZAWENTWORTH' => 'Wentworth',
		'ZAUMKOMAAS' => 'Umkomaas',
		'ZAMAGABENI' => 'Magabeni',
		'ZAPHOENIX' => 'Phoenix',
		'ZAHARRY_GWALA' => 'Harry Gwala',
		'ZABULWER' => 'Bulwer',
		'ZAFRANKLIN' => 'Franklin',
		'ZAHIMEVILLE' => 'Himeville',
		'ZAIXOPO' => 'Ixopo',
		'ZAKOKSTAD' => 'Kokstad',
		'ZAUMZIMKULU' => 'Umzimkulu',
		'ZAUNDERBERG' => 'Underberg',
		'ZAILEMBE' => 'iLembe',
		'ZABALLITO' => 'Ballito',
		'ZAKWADUKUZA' => 'KwaDukuza',
		'ZASALT_ROCK' => 'Salt Rock',
		'ZAMANDENI' => 'Mandeni',
		'ZAMAPHUMULO' => 'Maphumulo',
		'ZAUGU' => 'Ugu',
		'ZAHARDING' => 'Harding',
		'ZAHIBBERDENE' => 'Hibberdene',
		'ZAIFAFA_BEACH' => 'Ifafa Beach',
		'ZAIZINQOLWENI' => 'Izinqolweni',
		'ZAKELSO' => 'Kelso',
		'ZAMARGATE' => 'Margate',
		'ZAPALM_BEACH' => 'Palm Beach',
		'ZAPARK_RYNIE' => 'Park Rynie',
		'ZAPENNINGTON' => 'Pennington',
		'ZAPORT_EDWARD' => 'Port Edward',
		'ZAPORT_SHEPSTONE' => 'Port Shepstone',
		'ZARAMSGATE' => 'Ramsgate',
		'ZASCOTTBURGH' => 'Scottburgh',
		'ZASEZELA' => 'Sezela',
		'ZASHELLY_BEACH' => 'Shelly Beach',
		'ZASOUTHBROOM' => 'Southbroom',
		'ZAUMTENTWENI' => 'Umtentweni',
		'ZAUMZINTO' => 'Umzinto',
		'ZAUMZUMBE' => 'Umzumbe',
		'ZAUVONGO' => 'Uvongo',
		'ZAUMGUNGUNDLOVU' => 'uMgungundlovu',
		'ZABALGOWAN' => 'Balgowan',
		'ZABOSTON' => 'Boston',
		'ZAHILTON' => 'Hilton',
		'ZAHOWICK' => 'Howick',
		'ZAMERRIVALE' => 'Merrivale',
		'ZAMOOI_RIVER' => 'Mooi River',
		'ZANEW_HANOVER' => 'New Hanover',
		'ZAPIETERMARITZBURG' => 'Pietermaritzburg',
		'ZARICHMOND' => 'Richmond',
		'ZAWARTBURG' => 'Wartburg',
		'ZADALTON' => 'Dalton',
		'ZAHARDING' => 'Harding',
		'ZAUMKHANYAKUDE' => 'UMkhanyakude',
		'ZAHLUHLUWE' => 'Hluhluwe',
		'ZAINGWAVUMA' => 'Ingwavuma',
		'ZAMKUZE' => 'Mkuze',
		'ZAMTUBATUBA' => 'Mtubatuba',
		'ZAUBOMBO' => 'Ubombo',
		'ZAJOZINI' => 'Jozini',
		'ZAMBAZWANA' => 'Mbazwana',
		'ZAMANGUZI' => 'Manguzi',
		'ZAUMZINYATHI' => 'Umzinyathi',
		'ZADUNDEE' => 'Dundee',
		'ZAGLENCOE' => 'Glencoe',
		'ZAGREYTOWN' => 'Greytown',
		'ZAKRANSKOP' => 'Kranskop',
		'ZAPOMEROY' => 'Pomeroy',
		'ZAWASBANK' => 'Wasbank',
		'ZANQUTHU' => 'Nquthu',
		'ZAUTHUKELA' => 'uThukela',
		'ZABERGVILLE' => 'Bergville',
		'ZACOLENSO' => 'Colenso',
		'ZAELANDSLAAGTE' => 'Elandslaagte',
		'ZAESTCOURT' => 'Estcourt',
		'ZALADYSMITH' => 'Ladysmith',
		'ZAKING_CETSHWAYO' => 'King Cetshwayo',
		'ZAEMPANGENI' => 'Empangeni',
		'ZAESHOWE' => 'Eshowe',
		'ZAMELMOTH' => 'Melmoth',
		'ZAMTUNZINI' => 'Mtunzini',
		'ZARICHARDS_BAY' => 'Richards Bay',
		'ZANKANDLA' => 'Nkandla',
		'ZAZULULAND' => 'Zululand',
		'ZABABANANGO' => 'Babanango',
		'ZALOUWSBURG' => 'Louwsburg',
		'ZAMAHLABATINI' => 'Mahlabatini',
		'ZANONGOMA' => 'Nongoma',
		'ZAPAULPIETERSBURG' => 'Paulpietersburg',
		'ZAPONGOLA' => 'Pongola',
		'ZAULUNDI' => 'Ulundi',
		'ZAVRYHEID' => 'Vryheid',
	],
	'LP' => [
		'ZAAFGUNS' => 'Afguns',
		'ZAALLDAYS' => 'Alldays',
		'ZABANDELIERKOP' => 'Bandelierkop',
		'ZABA-PHALABORWA' => 'Ba-Phalaborwa',
		'ZABELA-BELA' => 'Bela-Bela',
		'ZABOCHUM' => 'Bochum',
		'ZABOSBOKRAND' => 'Bosbokrand',
		'ZADENDRON' => 'Dendron',
		'ZADUIWELSKLOOF' => 'Duiwelskloof',
		'ZAELIM' => 'Elim',
		'ZAELLISRAS' => 'Ellisras',
		'ZAGIYANI'	=> 'Giyani',
		'ZAGRAVELOTTE' => 'Gravelotte',
		'ZAHAENERTSBURG' => 'Haenertsburg',
		'ZAHOEDSPRUIT' => 'Hoedspruit',
		'ZAKLASERIE' => 'Klaserie',
		'ZALEBOWAKGOMO' => 'Lebowakgomo',
		'ZALEPHALALE' => 'Lephalale',
		'ZALETSITELE' => 'Letsitele',
		'ZALEYDSDORP' => 'Leydsdorp',
		'ZALOUIS_TRICHARDT' => 'Louis Trichardt',
		'ZAMALAMULELE'	=> 'Malamulele',
		'ZAMODIMOLLE' => 'Modimolle',
		'ZAMODJADJISKLOOF' => 'Modjadjiskloof',
		'ZAMOGWADI' => 'Mogwadi',
		'ZAMOKOPANE' => 'Mokopane',
		'ZAMOOKGOPHONG' => 'Mookgophong',
		'ZAMESSINA' => 'Messina',
		'ZAMUSINA' => 'Musina',
		'ZANABOOMSPRUIT' => 'Naboomspruit',
		'ZANYLSTROOM' => 'Nylstroom',
		'ZAOFCOLACO' => 'Ofcolaco',
		'ZAPHALABORWA' => 'Phalaborwa',
		'ZAPOLOKWANE' => 'Polokwane',
		'ZAMOKOPANE' => 'Mokopane',
		'ZAROEDTAN' => 'Roedtan',
		'ZASENWABARWANA' => 'Senwabarwana',
		'ZASESHEGO' => 'Seshego',
		'ZASEKGOPO' => 'Sekgopo',
		'ZATHABAZIMBI' => 'Thabazimbi',
		'ZATHOHOYANDOU' => 'Thohoyandou',
		'ZATZANEEN' => 'Tzaneen',
		'ZAVAALWATER' => 'Vaalwater',
		'ZAVIVO' => 'Vivo',
		'ZAZEBEDEILA' => 'Zebedeila',
		'ZAZION_CITY_MORIA' => 'Zion City Moria',
	],
	'MP' => [
		'ZAAANKOMS' => 'Aankoms',
		'ZAACORNHOEK' => 'Acornhoek',
		'ZAAMERSFOORT' => 'Amersfoort',
		'ZAAMSTERDAM' => 'Amsterdam',
		'ZAANYSSPRUIT' => 'Anysspruit',
		'ZAARGENT' => 'Argent',
		'ZAAVOCA' => 'Avoca',
		'ZAAVONTUUR' => 'Avontuur',
		'ZABADPLAAS' => 'Badplaas',
		'ZABALFOUR' => 'Balfour',
		'ZABALMORAL' => 'Balmoral',
		'ZABANKKOP' => 'Bankkop',
		'ZABARBERTON' => 'Barberton',
		'ZABELFAST' => 'Belfast',
		'ZABERBICE' => 'Berbice',
		'ZABETHAL' => 'Bethal',
		'ZABETTIESDAM' => 'Bettiesdam',
		'ZABRANDDRAAI' => 'Branddraai',
		'ZABRAUNSCHWEIG' => 'Braunschweig',
		'ZABREYTEN' => 'Breyten',
		'ZABRONDAL' => 'Brondal',
		'ZABUSHBUCKRIDGE' => 'Bushbuckridge',
		'ZACAROLINA' => 'Carolina',
		'ZACHRISSIESMEER' => 'Chrissiesmeer',
		'ZADAVALE' => 'Davale',
		'ZADELMAS' => 'Delmas',
		'ZADIEPDALE' => 'Diepdale',
		'ZADIEPGEZET' => 'Diepgezet',
		'ZADULLSTROOM' => 'Dullstroom',
		'ZADUNDONALD' => 'Dundonald',
		'ZAEERSTEHOEK' => 'Eerstehoek',
		'ZAEKULINDENI' => 'Ekulindeni',
		'ZAELUKWATINI' => 'Elukwatini',
		'ZAEMBHULENI' => 'Embhuleni',
		'ZAEMPHULUZI' => 'Emphuluzi',
		'ZAENKHABA' => 'Enkhaba',
		'ZAERMELO' => 'Ermelo',
		'ZAFERNIE' => 'Fernie',
		'ZAGLENMORE' => 'Glenmore',
		'ZAGRASKOP' => 'Graskop',
		'ZAGREYLINGSTAD' => 'Greylingstad',
		'ZAHARTEBEESKOP' => 'Hartebeeskop',
		'ZAHAZYVIEW' => 'Hazyview',
		'ZAHECTORSPRUIT' => 'Hectorspruit',
		'ZAKAAPMUIDEN' => 'Kaapmuiden',
		'ZAKINROSS' => 'Kinross',
		'ZAKOMATIPOORT' => 'Komatipoort',
		'ZAKWAMHLANGA' => 'KwaMhlanga',
		'ZALOCHIEL' => 'Lochiel',
		'ZALOOPSPRUIT' => 'Loopspruit',
		'ZALYDENBURG' => 'Lydenburg',
		'ZAMACHADODORP' => 'Machadodorp',
		'ZAMALELANE' => 'Malelane',
		'ZAMBHEJEKA' => 'Mbhejeka',
		'ZAMBOMBELA' => 'Mbombela',
		'ZAMIDDELBURG' => 'Middelburg',
		'ZAMODDERGAT' => 'Moddergat',
		'ZANGODWANA' => 'Ngodwana',
		'ZAOHRIGSTAD' => 'Ohrigstad',
		'ZAPERDEKOP' => 'Perdekop',
		'ZAPIET_RETIEF' => 'Piet Retief',
		'ZAPILGRIMS_REST' => 'Pilgrims Rest',
		'ZASABIE' => 'Sabie',
		'ZASECUNDA' => 'Secunda',
		'ZASIYABUSWA' => 'Siyabuswa',
		'ZASKUKUZA' => 'Skukuza',
		'ZASTANDERTON' => 'Standerton',
		'ZATRICHARDT' => 'Trichardt',
		'ZAVAALBANK' => 'Vaalbank',
		'ZAVOLKSRUST' => 'Volksrust',
		'ZAWAKKERSTROOM' => 'Wakkerstroom',
		'ZAWATERVAL_BOVEN' => 'Waterval Boven',
		'ZAWATERVAL_ONDER' => 'Waterval Onder',
		'ZAWHITE_RIVER' => 'White River',
		'ZAWITBANK' => 'Witbank',
	],
	'NW' => [
		'ZAAMALIA' => 'Amalia',
		'ZABRAY' => 'Bray',
		'ZAGANYESA' => 'Ganyesa',
		'ZAMAREETSANE' => 'Mareetsane',
		'ZAMOROKWENG' => 'Morokweng',
		'ZAMOTLHABENG' => 'Motlhabeng',
		'ZAPAMPIERSTAD' => 'Pampierstad',
		'ZAREIVILO' => 'Reivilo',
		'ZASCHWEIZER-RENEKE' => 'Schweizer-Reneke',
		'ZASETLAGOLE' => 'Setlagole',
		'ZASTELLA' => 'Stella',
		'ZATAUNG' => 'Taung',
		'ZATOSCA' => 'Tosca',
		'ZAVRYBURG' => 'Vryburg',
		'ZASETLOPO' => 'Setlopo',
		'ZABABELEGI' => 'Babelegi',
		'ZABEESTEKRAAL' => 'Beestekraal',
		'ZABRITS' => 'Brits',
		'ZABROEDERSTROOM' => 'Broederstroom',
		'ZADERBY' => 'Derby',
		'ZAGA-RANKUWA' => 'Ga-Rankuwa',
		'ZAHARTBEESFONTEIN/LETHABONG' => 'Hartbeesfontein/Lethabong',
		'ZAHARTBEESPOORT' => 'Hartbeespoort',
		'ZAHEKPOORT' => 'Hekpoort',
		'ZAJERICHO' => 'Jericho',
		'ZAKOSMOS' => 'Kosmos',
		'ZAKOSTER' => 'Koster',
		'ZAKROONDAL' => 'Kroondal',
		'ZAMAANHAARRAND' => 'Maanhaarrand',
		'ZAMABOPANE' => 'Mabopane',
		'ZAMAGALIESBURG' => 'Magaliesburg',
		'ZAMARIKANA' => 'Marikana',
		'ZAMOGWASE' => 'Mogwase',
		'ZAMOOINOOI' => 'Mooinooi',
		'ZAMATHIBESTAD' => 'Mathibestad',
		'ZARAMOKOKASTAD' => 'Ramokokastad',
		'ZARUSTENBURG' => 'Rustenburg',
		'ZASKEERPOORT' => 'Skeerpoort',
		'ZASWARTRUGGENS' => 'Swartruggens',
		'ZATLHABANE' => 'Tlhabane',
		'ZACOLIGNY' => 'Coligny',
		'ZADELAREYVILLE' => 'Delareyville',
		'ZAGANYESA' => 'Ganyesa',
		'ZAGROOT_MARICO' => 'Groot Marico',
		'ZALEHURUTSHE' => 'Lehurutshe',
		'ZALICHTENBURG' => 'Lichtenburg',
		'ZAMAREETSANE' => 'Mareetsane',
		'ZAMAHIKENG' => 'Mahikeng',
		'ZAMMABATHO' => 'Mmabatho',
		'ZAOTTOSDAL' => 'Ottosdal',
		'ZAOTTOSHOOP' => 'Ottoshoop',
		'ZASANNIESHOF' => 'Sannieshof',
		'ZAZEERUST' => 'Zeerust',
		'ZABLOEMHOF' => 'Bloemhof',
		'ZACHRISTIANA' => 'Christiana',
		'ZAHARTBEESFONTEIN' => 'Hartbeesfontein',
		'ZAKLERKSDORP' => 'Klerksdorp',
		'ZALEEUDORINGSTAD' => 'Leeudoringstad',
		'ZAMAKWASSIE' => 'Makwassie',
		'ZAORKNEY' => 'Orkney',
		'ZAPOTCHEFSTROOM' => 'Potchefstroom',
		'ZASTILFONTEIN' => 'Stilfontein',
		'ZAVENTERSDORP' => 'Ventersdorp',
		'ZAWOLMARANSSTAD' => 'Wolmaransstad',
	],
	'NC' => [
		'ZABARKLY_WEST' => 'Barkly West',
		'ZACAMPBELL' => 'Campbell',
		'ZADELPORTSHOOP' => 'Delportshoop',
		'ZADOUGLAS' => 'Douglas',
		'ZAGRIQUATOWN' => 'Griquatown',
		'ZAHARTSWATER' => 'Hartswater',
		'ZAJAN_KEMPDORP' => 'Jan Kempdorp',
		'ZAKIMBERLEY' => 'Kimberley',
		'ZAMODDER_RIVER' => 'Modder River',
		'ZAULCO' => 'Ulco',
		'ZAWARRENTON' => 'Warrenton',
		'ZAWINDSORTON' => 'Windsorton',
		'ZAANDRIESVALE' => 'Andriesvale',
		'ZAASKHAM' => 'Askham',
		'ZAAUGRABIES' => 'Augrabies',
		'ZADANIELSKUIL' => 'Danielskuil',
		'ZAGROBLERSHOOP' => 'Groblershoop',
		'ZAKAKAMAS' => 'Kakamas',
		'ZAKANONEILAND' => 'Kanoneiland',
		'ZAKEIMOES' => 'Keimoes',
		'ZAKENHARDT' => 'Kenhardt',
		'ZALIME_ACRES' => 'Lime Acres',
		'ZALOUISVALE' => 'Louisvale',
		'ZAMIER' => 'Mier',
		'ZAOLIFANTSHOEK' => 'Olifantshoek',
		'ZAONSEEPKANS' => 'Onseepkans',
		'ZAPOSTMASBURG' => 'Postmasburg',
		'ZAPUTSONDERWATER' => 'Putsonderwater',
		'ZARIEMVASMAAK' => 'Riemvasmaak',
		'ZAUPINGTON' => 'Upington',
		'ZAKATHU'	=> 'Kathu',
		'ZAAGGENEYS' => 'Aggeneys',
		'ZAALEXANDER_BAY' => 'Alexander Bay',
		'ZACAROLUSBERG' => 'Carolusberg',
		'ZACONCORDIA' => 'Concordia',
		'ZAGARIES' => 'Garies',
		'ZAHONDEKLIP' => 'Hondeklip',
		'ZAKAMIESKROON' => 'Kamieskroon',
		'ZAKLEINZEE' => 'Kleinzee',
		'ZANABABEEP' => 'Nababeep',
		'ZAOKIEP' => 'Okiep',
		'ZAPELLA' => 'Pella',
		'ZAPOFADDER' => 'Pofadder',
		'ZAPORT_NOLLOTH' => 'Port Nolloth',
		'ZASOEBATSFONTEIN' => 'Soebatsfontein',
		'ZASPRINGBOK' => 'Springbok',
		'ZASTEINKOPF' => 'Steinkopf',
		'ZABRITSTOWN' => 'Britstown',
		'ZACOLESBERG' => 'Colesberg',
		'ZACOPPERTON' => 'Copperton',
		'ZADE_AAR' => 'De Aar',
		'ZAHANOVER' => 'Hanover',
		'ZAHOPETOWN' => 'Hopetown',
		'ZAHUTCHINSON' => 'Hutchinson',
		'ZALOXTON' => 'Loxton',
		'ZAMARYDALE' => 'Marydale',
		'ZANORVALSPONT' => 'Norvalspont',
		'ZANOUPOORT' => 'Noupoort',
		'ZAORANIA' => 'Orania',
		'ZAPETRUSVILLE' => 'Petrusville',
		'ZAPHILIPSTOWN' => 'Philipstown',
		'ZAPRIESKA' => 'Prieska',
		'ZARICHMOND' => 'Richmond',
		'ZASTRYDENBURG' => 'Strydenburg',
		'ZAVANDERKLOOF' => 'Vanderkloof',
		'ZAVICTORIA_WEST' => 'Victoria West',
		'ZAVOSBURG' => 'Vosburg',
	],
	'WC' => [
		'ZAATLANTIS' => 'Atlantis',
		'ZABELLVILLE' => 'Bellville',
		'ZABLUE_DOWNS' => 'Blue Downs',
		'ZABRACKENFELL' => 'Brackenfell',
		'ZACAPE_TOWN' => 'Cape Town',
		'ZACROSSROADS' => 'Crossroads',
		'ZADURBANVILLE' => 'Durbanville',
		'ZAEERSTE_RIVER' => 'Eerste River',
		'ZAELSIES_RIVER' => 'Elsies River',
		'ZAFISH_HOEK' => 'Fish Hoek',
		'ZAGOODWOOD' => 'Goodwood',
		'ZAGORDONS_BAY' => 'Gordons Bay',
		'ZAGUGULETU' => 'Guguletu',
		'ZAHOUT_BAY' => 'Hout Bay',
		'ZAKHAYELITSHA' => 'Khayelitsha',
		'ZAKRAAIFONTEIN' => 'Kraaifontein',
		'ZAKUILS_RIVER' => 'Kuils River',
		'ZALANGA' => 'Langa',
		'ZAMACASSAR' => 'Macassar',
		'ZAMELKBOSSTRAND' => 'Melkbosstrand',
		'ZAMFULENI' => 'Mfuleni',
		'ZAMILNERTON' => 'Milnerton',
		'ZAMITCHELLS_PLAIN' => 'Mitchells Plain',
		'ZANOORDHOEK' => 'Noordhoek',
		'ZANYANGA' => 'Nyanga',
		'ZAOBSERVATORY' => 'Observatory',
		'ZAPAROW' => 'Parow',
		'ZASIMONS_TOWN' => 'Simons Town',
		'ZASOMERSET_WEST' => 'Somerset West',
		'ZASTRAND' => 'Strand',
		'ZAAURORA' => 'Aurora',
		'ZABITTERFONTEIN' => 'Bitterfontein',
		'ZACHATSWORTH' => 'Chatsworth',
		'ZACITRUSDAL' => 'Citrusdal',
		'ZACLANWILLIAM' => 'Clanwilliam',
		'ZADARLING' => 'Darling',
		'ZADORINGBAAI' => 'Doringbaai',
		'ZADWARSKERSBOS' => 'Dwarskersbos',
		'ZAEBENHAESER' => 'Ebenhaeser',
		'ZAEENDEKUIL' => 'Eendekuil',
		'ZAELANDS_BAY' => 'Elands Bay',
		'ZAGOEDVERWACHT' => 'Goedverwacht',
		'ZAGRAAFWATER' => 'Graafwater',
		'ZAGROTTO_BAY' => 'Grotto Bay',
		'ZAHOPEFIELD' => 'Hopefield',
		'ZAJACOBSBAAI' => 'Jacobsbaai',
		'ZAJAKKALSFONTEIN' => 'Jakkalsfontein',
		'ZAKALBASKRAAL' => 'Kalbaskraal',
		'ZAKLAWER' => 'Klawer',
		'ZAKOEKENAAP' => 'Koekenaap',
		'ZAKORINGBERG' => 'Koringberg',
		'ZALAMBERTS_BAY' => 'Lamberts Bay',
		'ZALANGEBAAN' => 'Langebaan',
		'ZALANGEBAANWEG' => 'Langebaanweg',
		'ZALUTZVILLE' => 'Lutzville',
		'ZAMALMESBURY' => 'Malmesbury',
		'ZAMOORREESBURG' => 'Moorreesburg',
		'ZAPATERNOSTER' => 'Paternoster',
		'ZAPIKETBERG' => 'Piketberg',
		'ZAPORTERVILLE' => 'Porterville',
		'ZAREDELINGHUYS' => 'Redelinghuys',
		'ZARIEBEEK-KASTEEL' => 'Riebeek-Kasteel',
		'ZARIEBEEK_WEST' => 'Riebeek West',
		'ZASALDANHA' => 'Saldanha',
		'ZAST_HELENA_BAY' => 'St Helena Bay',
		'ZASTRANDFONTEIN' => 'Strandfontein',
		'ZAVANRHYNSDORP' => 'Vanrhynsdorp',
		'ZAVELDDRIF' => 'Velddrif',
		'ZAVREDENBURG' => 'Vredenburg',
		'ZAVREDENDAL' => 'Vredendal',
		'ZAWUPPERTHAL' => 'Wupperthal',
		'ZAYZERFONTEIN' => 'Yzerfontein',
		'ZAASHTON' => 'Ashton',
		'ZABONNIEVALE' => 'Bonnievale',
		'ZACERES' => 'Ceres',
		'ZADE_DOORNS' => 'De Doorns',
		'ZADENNEBURG' => 'Denneburg',
		'ZAFRANSCHHOEK' => 'Franschhoek',
		'ZAGOUDA' => 'Gouda',
		'ZAKAYAMANDI' => 'Kayamandi',
		'ZAKLAPMUTS' => 'Klapmuts',
		'ZAKYLEMORE' => 'Kylemore',
		'ZALANGUEDOC' => 'Languedoc',
		'ZAMCGREGOR' => 'McGregor',
		'ZAMONTAGU' => 'Montagu',
		'ZAOP-DIE-BERG' => 'Op-die-Berg',
		'ZAPAARL' => 'Paarl',
		'ZAPNIEL' => 'Pniel',
		'ZAPRINCE_ALFRED_HAMLET' => 'Prince Alfred Hamlet',
		'ZARAWSONVILLE' => 'Rawsonville',
		'ZAROBERTSON' => 'Robertson',
		'ZAROBERTSVLEI' => 'Robertsvlei',
		'ZAROZENDAL' => 'Rozendal',
		'ZASARON' => 'Saron',
		'ZASTELLENBOSCH' => 'Stellenbosch',
		'ZATOUWS_RIVER' => 'Touws River',
		'ZATULBAGH' => 'Tulbagh',
		'ZAWELLINGTON' => 'Wellington',
		'ZAWEMMERSHOEK' => 'Wemmershoek',
		'ZAWOLSELEY' => 'Wolseley',
		'ZAWORCESTER' => 'Worcester',
		'ZAARNISTON' => 'Arniston',
		'ZABAARDSKEERDERSBOS' => 'Baardskeerdersbos',
		'ZABETTYS_BAY' => 'Bettys Bay',
		'ZABIRKENHEAD' => 'Birkenhead',
		'ZABOTRIVIER' => 'Botrivier',
		'ZABREDASDORP' => 'Bredasdorp',
		'ZACALEDON' => 'Caledon',
		'ZADENNEHOF' => 'Dennehof',
		'ZADE_KELDERS' => 'De Kelders',
		'ZAELGIN' => 'Elgin',
		'ZAELIM' => 'Elim',
		'ZAFISHERHAVEN' => 'Fisherhaven',
		'ZAFRANSKRAALSTRAND' => 'Franskraalstrand',
		'ZAGANSBAAI' => 'Gansbaai',
		'ZAGENADENDAL' => 'Genadendal',
		'ZAGRABOUW' => 'Grabouw',
		'ZAGREYTON' => 'Greyton',
		'ZAHAWSTON' => 'Hawston',
		'ZAHERMANUS' => 'Hermanus',
		'ZAHOTAGTERKLIP' => 'Hotagterklip',
		'ZAINFANTA' => 'Infanta',
		'ZAKLEINBAAI' => 'Kleinbaai',
		'ZAKLEINMOND' => 'Kleinmond',
		'ZALAGULHAS' => 'LAgulhas',
		'ZANAPIER' => 'Napier',
		'ZAONRUSRIVIER' => 'Onrusrivier',
		'ZAPEARLY_BEACH' => 'Pearly Beach',
		'ZAPRINGLE_BAY' => 'Pringle Bay',
		'ZARIVIERSONDEREND' => 'Riviersonderend',
		'ZAROOI_ELS' => 'Rooi Els',
		'ZASTANFORD' => 'Stanford',
		'ZASTRUISBAAI' => 'Struisbaai',
		'ZASUIDERSTRAND' => 'Suiderstrand',
		'ZASUURBRAAK' => 'Suurbraak',
		'ZASWELLENDAM' => 'Swellendam',
		'ZAVAN_DYKSBAAI' => 'Van Dyksbaai',
		'ZAVERMONT' => 'Vermont',
		'ZAVILLIERSDORP' => 'Villiersdorp',
		'ZAALBERTINIA' => 'Albertinia',
		'ZABOGGOMSBAAI' => 'Boggomsbaai',
		'ZABRENTON-ON-SEA' => 'Brenton-on-Sea',
		'ZABUFFELSBAAI' => 'Buffelsbaai',
		'ZADANA_BAAI' => 'Dana Baai',
		'ZADE_RUST' => 'De Rust',
		'ZADYSSELSDORP' => 'Dysselsdorp',
		'ZAFRIEMERSHEIM' => 'Friemersheim',
		'ZAGEORGE' => 'George',
		'ZAGLENTANA' => 'Glentana',
		'ZAGOURITSMOND' => 'Gouritsmond',
		'ZAGREAT_BRAK_RIVER' => 'Great Brak River',
		'ZAGROOT-JONGENSFONTEIN' => 'Groot-Jongensfontein',
		'ZAHAARLEM' => 'Haarlem',
		'ZAHARTENBOS' => 'Hartenbos',
		'ZAHEIDELBERG' => 'Heidelberg',
		'ZAHERBERTSDALE' => 'Herbertsdale',
		'ZAHEROLDS_BAY' => 'Herolds Bay',
		'ZAKEURBOOMSRIVIER' => 'Keurboomsrivier',
		'ZAKEURBOOMSTRAND' => 'Keurboomstrand',
		'ZAKNYSNA' => 'Knysna',
		'ZAKRANSHOEK' => 'Kranshoek',
		'ZAKURLAND_ESTATE' => 'Kurland Estate',
		'ZALITTLE_BRAK_RIVER' => 'Little Brak River',
		'ZAMOSSEL_BAY' => 'Mossel Bay',
		'ZANATURES_VALLEY' => 'Natures Valley',
		'ZANOETZIE' => 'Noetzie',
		'ZAPACALTSDORP' => 'Pacaltsdorp',
		'ZAPLETTENBERG_BAY' => 'Plettenberg Bay',
		'ZAPORT_BEAUFORT' => 'Port Beaufort',
		'ZARHEENENDAL' => 'Rheenendal',
		'ZARIVERSDALE' => 'Riversdale',
		'ZASEDGEFIELD' => 'Sedgefield',
		'ZASLANGRIVIER' => 'Slangrivier',
		'ZASTILBAAI' => 'Stilbaai',
		'ZAUNIONDALE' => 'Uniondale',
		'ZAVOLMOED' => 'Volmoed',
		'ZAVICTORIA_BAY' => 'Victoria Bay',
		'ZAWILDERNESS' => 'Wilderness',
		'ZAWITTEDRIFT' => 'Wittedrift',
		'ZAZOAR' => 'Zoar',
		'ZAMONTAGU' => 'Montagu',
		'ZABARRYDALE' => 'Barrydale',
		'ZALADISMITH' => 'Ladismith',
		'ZACALITZDORP' => 'Calitzdorp',
		'ZAOUDTSHOORN' => 'Oudtshoorn',
		'ZADE_RUST' => 'De Rust',
		'ZABEAUFORT_WEST' => 'Beaufort West',
		'ZALAINGSBURG' => 'Laingsburg',
		'ZALEEU-GAMKA' => 'Leeu-Gamka',
		'ZAMATJIESFONTEIN' => 'Matjiesfontein',
		'ZAMERWEVILLE' => 'Merweville',
		'ZAMURRAYSBURG' => 'Murraysburg',
		'ZANELSPOORT' => 'Nelspoort',
		'ZAPRINCE_ALBERT' => 'Prince Albert',
	],
];