<?php

/***
 * Some returns stdClasses, others arrays..
 */
class Generator_Data implements Generator_Data_Interface
{

    // Data for generating event names
    function getEventTitleGeneratorData()
    {
        $events = new StdClass();
        $events->firstpart = array("PHP", "Perl", "Python", "Ruby", "C", "MySQL", "DevOp", "Linux", "Debian", "CentOS", "Zend", "Developer", "Web", "Symfony", "Apache", "Computer", "IT", "Dev");
        $events->lastpart  = array("Con", "Conf", " meetup", "UUG", " day", "Congress");
        return $events;
    }

    // Words to generate talk titles for your future presentations...
    function getTalkTitleGeneratorData()
    {
        $ret = new StdClass();
        $ret->a = array("Coaching", "Dealing with", "Producing", "Maintaining", "Controlling", "Creating", "Having", "Assembling", "Monitoring", "Accessing", "Generating", "Refactoring");
        $ret->b = array("heavy", "light", "fast", "optimal", "flexible", "rigid", "technical", "oldschool", "newtech", "fantastic", "obsolete", "second generation", "v2.0", "private", "public");
        $ret->c = array("systems", "operations", "products", "entities", "design patterns", "clouds");
        $ret->d = array("in", "through", "with", "near", "because of", "instead of", "together with", "under");
        $ret->e = array("Python", "Perl", "Ruby", "C", "Memcached", "NoSQL", "CouchDB", "MongoDB", "MySQL", "Oracle", "PostgresSQL", "PHP", "Linux", "Shell scripting", "Hadoop", "Apache", "Varnish");
        return $ret;
    }

    // "talk" categories
    function getCategoryData()
    {
        $categories = array(
            1 => array ('title' => 'Talk', 'desc' => 'Talk'),
            2 => array ('title' => 'Social event', 'desc' => 'Social event'),
            3 => array ('title' => 'Keynote', 'desc' => 'Keynote'),
            4 => array ('title' => 'Workshop', 'desc' => 'Workshop'),
            5 => array ('title' => 'Event related', 'desc' => 'Event related'),
        );
        return $categories;
    }

    // Standard languages
    function getLanguageData()
    {
        $languages = array(
            1 => array ('name' => 'English - US', 'abbr' => 'us'),
            2 => array ('name' => 'English - UK', 'abbr' => 'uk'),
            3 => array ('name' => 'Deutsch', 'abbr' => 'de'),
            4 => array ('name' => 'Nederlands', 'abbr' => 'ne'),
            5 => array ('name' => 'Francais', 'abbr' => 'fr'),
            6 => array ('name' => 'Espanol', 'abbr' => 'es'),
            7 => array ('name' => 'Polish', 'abbr' => 'pl'),
            8 => array ('name' => 'Finnish', 'abbr' => 'fi'),
            9 => array ('name' => 'Brazilian Portuguese', 'abbr' => 'pobr'),
        );
        return $languages;
    }

    // Different types of sources from where comments are made. Adding duplicates will increase the chance of getting picked
    function getCommentSourceData()
    {
        return array("web", "web", "web", "api", "api", "iphone", "android");
    }

    function getTrackColorData()
    {
        return array("red", "green", "blue", "black", "yellow", "white", "cyan", "gray");
    }

    function getUserGeneratorData()
    {
        $users = new StdClass();

        // Taken from public list of most used female and male first names in the US
        $users->first = array("MARY","PATRICIA","LINDA","BARBARA","ELIZABETH","JENNIFER","MARIA","SUSAN","MARGARET","DOROTHY","LISA","NANCY",
                            "KAREN","BETTY","HELEN","SANDRA","DONNA","CAROL","RUTH","SHARON","MICHELLE","LAURA","SARAH","KIMBERLY","DEBORAH",
                            "JESSICA","SHIRLEY","CYNTHIA","ANGELA","MELISSA","BRENDA","AMY","ANNA","REBECCA","VIRGINIA","KATHLEEN","PAMELA",
                            "MARTHA","DEBRA","AMANDA","STEPHANIE","CAROLYN","CHRISTINE","MARIE","JANET","CATHERINE","JAMES","JOHN","ROBERT",
                            "MICHAEL","WILLIAM","DAVID","RICHARD","CHARLES","JOSEPH","THOMAS","CHRISTOPHE","DANIEL","PAUL","MARK","DONALD",
                            "GEORGE","KENNETH","STEVEN","EDWARD","BRIAN","RONALD","ANTHONY","KEVIN","JASON","MATTHEW","GARY","TIMOTHY","JOSE",
                            "LARRY","JEFFREY","FRANK","SCOTT","ERIC","STEPHEN","ANDREW","RAYMOND","GREGORY","JOSHUA","JERRY","DENNIS","WALTER",
                            "PATRICK","PETER","HAROLD","DOUGLAS","HENRY","CARL","ARTHUR","RYAN","ROGER","JOE","JUAN","JACK","ALBERT","JONATHAN",
                            "JUSTIN","TERRY","GERALD","KEITH","SAMUEL","WILLIE","RALPH","LAWRENCE","NICHOLAS","ROY","BENJAMIN","BRUCE","BRANDON",
                            "ADAM","HARRY","FRED","WAYNE","BILLY","STEVE","LOUIS","JEREMY","AARON","RANDY");

        // Taken from public list of most used last names in the US
        $users->last = array("SMITH","JOHNSON","WILLIAMS","JONES","BROWN","DAVIS","MILLER","WILSON","MOORE","TAYLOR","ANDERSON","THOMAS","JACKSON",
                           "WHITE","HARRIS","MARTIN","THOMPSON","GARCIA","MARTINEZ","ROBINSON","CLARK","RODRIGUEZ","LEWIS","LEE","WALKER","HALL",
                           "ALLEN","YOUNG","HERNANDEZ","KING","WRIGHT","LOPEZ","HILL","SCOTT","GREEN","ADAMS","BAKER","GONZALEZ","NELSON",
                           "CARTER","MITCHELL","PEREZ","ROBERTS","TURNER","PHILLIPS","CAMPBELL","PARKER","EVANS","EDWARDS","COLLINS","STEWART",
                           "SANCHEZ","MORRIS","ROGERS","REED","COOK","MORGAN","BELL","MURPHY","BAILEY","RIVERA","COOPER","RICHARDSON","COX",
                           "HOWARD","WARD","TORRES","PETERSON","GRAY","RAMIREZ","JAMES","WATSON","BROOKS","KELLY","SANDERS","PRICE","BENNETT",
                           "WOOD","BARNES","ROSS","HENDERSON","COLEMAN","JENKINS","PERRY","POWELL","LONG","PATTERSON","HUGHES","FLORES",
                           "WASHINGTON","BUTLER","SIMMONS","FOSTER","GONZALES","BRYANT","ALEXANDER","RUSSELL","GRIFFIN","DIAZ","HAYES","MYERS",
                           "FORD","HAMILTON","GRAHAM","SULLIVAN","WALLACE","WOODS","COLE","WEST","JORDAN","OWENS","REYNOLDS","FISHER","ELLIS",
                           "HARRISON","GIBSON","MCDONALD","CRUZ","MARSHALL","ORTIZ","GOMEZ","MURRAY","FREEMAN","WELLS","WEBB","SIMPSON",
                           "STEVENS","TUCKER","PORTER","HUNTER","HICKS","CRAWFORD","HENRY","BOYD","MASON","MORALES","KENNEDY","WARREN","DIXON",
                           "RAMOS","REYES","BURNS","GORDON","SHAW","HOLMES","RICE","ROBERTSON","HUNT","BLACK","DANIELS","PALMER","MILLS",
                           "NICHOLS","GRANT","KNIGHT","FERGUSON","ROSE","STONE","HAWKINS","DUNN","PERKINS","HUDSON","SPENCER","GARDNER",
                           "STEPHENS","PAYNE","PIERCE","BERRY","MATTHEWS","ARNOLD","WAGNER","WILLIS","RAY","WATKINS","OLSON","CARROLL","DUNCAN",
                           "SNYDER","HART","CUNNINGHAM","BRADLEY","LANE","ANDREWS","RUIZ","HARPER","FOX","RILEY","ARMSTRONG","CARPENTER","WEAVER",
                           "GREENE","LAWRENCE","ELLIOTT","CHAVEZ","SIMS","AUSTIN","PETERS","KELLEY","FRANKLIN","LAWSON","FIELDS","GUTIERREZ",
                           "RYAN","SCHMIDT","CARR","VASQUEZ","CASTILLO","WHEELER","CHAPMAN","OLIVER","MONTGOMERY","RICHARDS","WILLIAMSON",
                           "JOHNSTON","BANKS","MEYER","BISHOP","MCCOY","HOWELL","ALVAREZ","MORRISON","HANSEN","FERNANDEZ","GARZA","HARVEY",
                           "LITTLE","BURTON","STANLEY","NGUYEN","GEORGE","JACOBS","REID","KIM","FULLER","LYNCH","DEAN","GILBERT","GARRETT",
                           "ROMERO","WELCH","LARSON","FRAZIER","BURKE","HANSON","DAY","MENDOZA","MORENO","BOWMAN","MEDINA","FOWLER","BREWER",
                           "HOFFMAN","CARLSON","SILVA","PEARSON","HOLLAND","DOUGLAS","FLEMING","JENSEN","VARGAS","BYRD","DAVIDSON","HOPKINS",
                           "MAY","TERRY","HERRERA","WADE","SOTO","WALTERS","CURTIS","NEAL","CALDWELL","LOWE","JENNINGS","BARNETT","GRAVES",
                           "JIMENEZ","HORTON","SHELTON","BARRETT","OBRIEN","CASTRO","SUTTON","GREGORY","MCKINNEY","LUCAS","MILES","CRAIG",
                           "RODRIQUEZ","CHAMBERS","HOLT","LAMBERT","FLETCHER","WATTS","BATES","HALE","RHODES","PENA","BECK","NEWMAN","HAYNES",
                           "MCDANIEL","MENDEZ","BUSH","VAUGHN","PARKS","DAWSON","SANTIAGO","NORRIS","HARDY","LOVE","STEELE");
        return $users;
    }


    function getDescriptionGeneratorData()
    {
        // Lorum Ipsum, per line so we can shuffle and change the lengths.
        $lorum = array(
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
                    "Suspendisse mattis suscipit ante, nec consectetur magna aliquet non. ",
                    "Nulla faucibus mollis ipsum sit amet vehicula. ",
                    "Duis eu massa justo, vel mollis velit. ",
                    "Praesent rutrum orci eget ipsum ornare et consequat neque egestas. ",
                    "Sed nisi sem, ultricies et luctus vitae, volutpat id sem. ",
                    "Aliquam vulputate vulputate lobortis. ",
                    "Quisque at est libero. ",
                    "Vivamus gravida, dolor ut porta bibendum, mauris ligula condimentum est, id facilisis ante massa a justo. ",
                    "Etiam ligula elit, condimentum lacinia fermentum nec, elementum id urna. ",
                    "Proin feugiat mattis dui, ut cursus purus feugiat vel. ",
                    "Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque elementum placerat lectus, sit amet dictum urna euismod quis. ",
        );
        return $lorum;
    }

    // Set of cities in Alabama. Taken from the web. The Lat/Long information is correct for the corresponding village
    function getCityData()
    {
        $cities = array(
            array('Abbeville',31.566367,-85.251300),
            array('Adamsville',33.590411,-86.949166),
            array('Addison',34.200042,-87.177851),
            array('Akron',32.876425,-87.740978),
            array('Alabaster',33.231162,-86.823829),
            array('Albertville',34.265362,-86.211261),
            array('Alexander',32.933157,-85.936008),
            array('Alexandria',33.766072,-85.884389),
            array('Aliceville',33.126276,-88.154427),
            array('Allgood',33.904216,-86.516428),
            array('Altoona',34.029259,-86.320687),
            array('Andalusia',31.309321,-86.479468),
            array('Anderson',34.920029,-87.270358),
            array('Anniston',33.663003,-85.826664),
            array('Arab',34.327863,-86.498613),
            array('Ardmore',34.987052,-86.843228),
            array('Argo',33.700210,-86.512357),
            array('Ariton',31.598204,-85.718761),
            array('Arley',34.081499,-87.210768),
            array('Ashford',31.184032,-85.235286),
            array('Ashland',33.272206,-85.836925),
            array('Ashville',33.843737,-86.266274),
            array('Athens',34.789602,-86.969424),
            array('Atmore',31.023183,-87.492067),
            array('Attalla',34.009818,-86.098413),
            array('Auburn',32.597684,-85.480823),
            array('Autaugaville',32.432410,-86.653370),
            array('Avon',31.189409,-85.279156),
            array('Babbie',31.300460,-86.319293),
            array('Baileyton',34.267139,-86.603018),
            array('Banks',31.813464,-85.840281),
            array('Bay Minette',30.883446,-87.777183),
            array('Bayou La Batre',30.403253,-88.248117),
            array('Bear Creek',34.272400,-87.703374),
            array('Beatrice',31.733178,-87.206773),
            array('Beaverton',33.932813,-88.020374),
            array('Belk',33.645856,-87.930934),
            array('Benton',32.306248,-86.817551),
            array('Berry',33.657836,-87.606084),
            array('Bessemer',33.391343,-86.956569),
            array('Billingsley',32.660416,-86.711247),
            array('Birmingham',33.524755,-86.812740),
            array('Black',31.011112,-85.744365),
            array('Blountsville',34.081911,-86.588778),
            array('Blue Mountain',33.688619,-85.837577),
            array('Blue Ridge',32.486744,-86.190823),
            array('Blue Springs',31.664330,-85.495919),
            array('Boaz',34.202793,-86.160457),
            array('Boligee',32.763768,-88.025968),
            array('Bon Air',33.263798,-86.333650),
            array('Branchville',33.648029,-86.436895),
            array('Brantley',31.584365,-86.256651),
            array('Brent',32.940240,-87.174982),
            array('Brewton',31.117706,-87.071164),
            array('Bridgeport',34.947303,-85.718966),
            array('Brighton',33.438958,-86.945442),
            array('Brilliant',34.022764,-87.767372),
            array('Brookside',33.631867,-86.913068),
            array('Brookwood',33.239110,-87.319746),
            array('Brundidge',31.719218,-85.818119),
            array('Butler',32.091526,-88.220684),
            array('Bynum',33.605985,-85.963308),
            array('Cahaba Heights',33.459256,-86.732086),
            array('Calera',33.107572,-86.749964),
            array('Camden',31.998851,-87.295743),
            array('Camp Hill',32.799285,-85.652902),
            array('Carbon Hill',33.890690,-87.524307),
            array('Cardiff',33.645384,-86.932965),
            array('Carolina',31.231521,-86.520607),
            array('Carrollton',33.260858,-88.094452),
            array('Castleberry',31.297899,-87.025027),
            array('Cedar Bluff',34.220606,-85.595999),
            array('Center Point',33.639302,-86.680437),
            array('Centre',34.159181,-85.674742),
            array('Centreville',32.950000,-87.134708),
            array('Chalkville',33.667902,-86.649643),
            array('Chatom',31.461656,-88.248051),
            array('Chelsea',33.329116,-86.650845),
            array('Cherokee',34.758297,-87.968549),
            array('Chickasaw',30.764987,-88.083713),
            array('Childersburg',33.275187,-86.353166),
            array('Citronelle',31.092653,-88.244315),
            array('Clanton',32.839810,-86.628188),
            array('Clay',33.700037,-86.623032),
            array('Clayhatchee',31.237743,-85.712679),
            array('Clayton',31.877504,-85.449024),
            array('Cleveland',33.992035,-86.576062),
            array('Clio',31.709922,-85.606708),
            array('Coaling',33.169442,-87.345859),
            array('Coffee Springs',31.166736,-85.910634),
            array('Coffeeville',31.761262,-88.089150),
            array('Coker',33.246283,-87.679221),
            array('Collinsville',34.265432,-85.861523),
            array('Colony',33.945011,-86.899465),
            array('Columbia',31.292283,-85.112123),
            array('Columbiana',33.183545,-86.609365),
            array('Concord',33.469092,-87.038163),
            array('Coosada',32.504197,-86.334120),
            array('Cordova',33.760106,-87.187083),
            array('Cottonwood',31.053646,-85.302409),
            array('County Line',33.819645,-86.729287),
            array('Courtland',34.668457,-87.310821),
            array('Cowarts',31.199575,-85.306272),
            array('Creola',30.895465,-88.014760),
            array('Crossville',34.286752,-85.990814),
            array('Cuba',32.433782,-88.371776),
            array('Cullman',34.177508,-86.844996),
            array('Dadeville',32.832059,-85.764288),
            array('Daleville',31.302496,-85.711083),
            array('Daphne',30.631289,-87.886440),
            array('Dauphin Island',30.256429,-88.125231),
            array('Daviston',33.055251,-85.639164),
            array('Dayton',32.349733,-87.641247),
            array('Deatsville',32.593958,-86.393454),
            array('Decatur',34.580992,-86.983392),
            array('Demopolis',32.509465,-87.837265),
            array('Detroit',34.025859,-88.171810),
            array('Dodge',34.052144,-86.882790),
            array('Dora',33.729476,-87.087013),
            array('Dothan',31.227225,-85.407258),
            array('Double Springs',34.151642,-87.404390),
            array('Douglas',34.171631,-86.319967),
            array('Dozier',31.495233,-86.366592),
            array('Dutton',34.607639,-85.915563),
            array('East Brewton',31.092408,-87.053174),
            array('Eclectic',32.641285,-86.038571),
            array('Edgewater',33.523106,-86.956525),
            array('Edwardsville',33.707182,-85.510560),
            array('Elba',31.417263,-86.077442),
            array('Elberta',30.413640,-87.599352),
            array('Eldridge',33.919774,-87.621138),
            array('Elkmont',34.930155,-86.977086),
            array('Elmore',32.542314,-86.315455),
            array('Emelle',32.729882,-88.314333),
            array('Enterprise',31.327476,-85.844484),
            array('Epes',32.690497,-88.124182),
            array('Ethelsville',33.413563,-88.215516),
            array('Eufaula',31.889370,-85.153774),
            array('Eunola',31.038766,-85.845415),
            array('Eutaw',32.840680,-87.889037),
            array('Eva',34.325209,-86.747722),
            array('Evergreen',31.435025,-86.954905),
            array('Excel',31.427308,-87.340587),
            array('Fairfield',33.476908,-86.916842),
            array('Fairhope',30.526394,-87.895687),
            array('Fairview',34.248717,-86.687761),
            array('Falkville',34.371919,-86.908381),
            array('Faunsdale',32.459221,-87.593251),
            array('Fayette',33.692068,-87.832358),
            array('Five Points',33.017189,-85.351208),
            array('Flomaton',31.008921,-87.255746),
            array('Florala',31.007712,-86.324957),
            array('Florence',34.820287,-87.662860),
            array('Foley',30.405594,-87.681509),
            array('Forestdale',33.574305,-86.902937),
            array('Forkland',32.647702,-87.867236),
            array('Fort Deposit',31.987872,-86.571249),
            array('Fort Payne',34.453829,-85.706648),
            array('Fort Rucker',31.343654,-85.707995),
            array('Franklin',32.455388,-85.802884),
            array('Frisco',31.433769,-87.402120),
            array('Fruithurst',33.731103,-85.431759),
            array('Fulton',31.790456,-87.732929),
            array('Fultondale',33.615202,-86.801293),
            array('Fyffe',34.446899,-85.906590),
            array('Gadsden',34.010147,-86.010356),
            array('Gainesville',32.817317,-88.158026),
            array('Gantt',31.407503,-86.483577),
            array('Gantts Quarry',33.152570,-86.295539),
            array('Garden',34.009211,-86.748159),
            array('Gardendale',33.660492,-86.811648),
            array('Gaylesville',34.267994,-85.558244),
            array('Geiger',32.868543,-88.306061),
            array('Geneva',31.038181,-85.876677),
            array('Georgiana',31.640087,-86.739442),
            array('Geraldine',34.353654,-86.004002),
            array('Gilber',31.876676,-88.320907),
            array('Glen Allen',33.899470,-87.730388),
            array('Glencoe',33.953148,-85.935868),
            array('Glenwood',31.667771,-86.174962),
            array('Goldville',33.083617,-85.784391),
            array('Good Hope',34.108777,-86.867164),
            array('Goodwater',33.059988,-86.053043),
            array('Gordo',33.321461,-87.903729),
            array('Gordon',31.143171,-85.096114),
            array('Gordonville',32.152335,-86.714338),
            array('Goshen',31.719715,-86.125861),
            array('Grand Bay',30.474055,-88.341836),
            array('Grant',34.502899,-86.255378),
            array('Grayson Valley',33.648728,-86.636513),
            array('Graysville',33.626955,-86.962255),
            array('Greensboro',32.702340,-87.596216),
            array('Greenville',31.831273,-86.627567),
            array('Grimes',31.302270,-85.451042),
            array('Grove Hill',31.706137,-87.774274),
            array('Guin',33.973135,-87.916711),
            array('Gulf Shores',30.267797,-87.701468),
            array('Guntersville',34.348197,-86.294523),
            array('Gurley',34.700164,-86.376469),
            array('Gu-Win',33.949505,-87.871921),
            array('Hackleburg',34.271460,-87.830826),
            array('Haleburg',31.408960,-85.136035),
            array('Haleyville',34.230131,-87.618978),
            array('Hamilton',34.135305,-87.988980),
            array('Hammondville',34.569414,-85.638305),
            array('Hanceville',34.063463,-86.760908),
            array('Harpersville',33.325848,-86.426121),
            array('Hartford',31.103664,-85.694544),
            array('Hartselle',34.440383,-86.940385),
            array('Harvest',34.852827,-86.748047),
            array('Hayden',33.893399,-86.756983),
            array('Hayneville',32.182365,-86.580468),
            array('Hazel Green',34.923712,-86.567206),
            array('Headland',31.353410,-85.339793),
            array('Heath',31.358154,-86.470193),
            array('Heflin',33.643754,-85.582701),
            array('Helena',33.279715,-86.856060),
            array('Henagar',34.633700,-85.742921),
            array('Highland Lake',33.884271,-86.422151),
            array('Hillsboro',34.638029,-87.188287),
            array('Hobson',33.618497,-85.843425),
            array('Hodges',34.330242,-87.927394),
            array('Hokes Bluff',33.993449,-85.865118),
            array('Holly Pond',34.174657,-86.617004),
            array('Hollywood',34.716960,-85.965689),
            array('Holt',33.230467,-87.486303),
            array('Homewood',33.468306,-86.808146),
            array('Hoover',33.386435,-86.804938),
            array('Horn Hill',31.240456,-86.319172),
            array('Huey',33.437709,-86.997579),
            array('Huguley',32.838003,-85.233139),
            array('Huntsville',34.712341,-86.596296),
            array('Hurtsboro',32.240102,-85.415377),
            array('Hytop',34.904816,-86.086634),
            array('Ider',34.703941,-85.673983),
            array('Indian Springs Village',33.368021,-86.741176),
            array('Irondale',33.531939,-86.686816),
            array('Jackson',31.521685,-87.891113),
            array('Jacksons Gap',32.881670,-85.818582),
            array('Jacksonville',33.815766,-85.760467),
            array('Jasper',33.842347,-87.277174),
            array('Jemison',32.958831,-86.743567),
            array('Kansas',33.903168,-87.556716),
            array('Kennedy',33.580683,-87.983830),
            array('Killen',34.861586,-87.529374),
            array('Kimberly',33.771163,-86.795280),
            array('Kinsey',31.291688,-85.345487),
            array('Kinston',31.220503,-86.170782),
            array('Ladonia',32.465666,-85.089046),
            array('La Fayette',32.898572,-85.400784),
            array('Lake Purdy',33.428571,-86.693028),
            array('Lakeview',34.392298,-85.973244),
            array('Lake View',33.279933,-87.138667),
            array('Lanett',32.863424,-85.199684),
            array('Langston',34.534817,-86.082169),
            array('Leeds',33.545592,-86.557388),
            array('Leesburg',34.182624,-85.768986),
            array('Leighton',34.699642,-87.530699),
            array('Lester',34.984304,-87.147909),
            array('Level Plains',31.313659,-85.767307),
            array('Lexington',34.966115,-87.372892),
            array('Libertyville',31.243844,-86.459962),
            array('Lincoln',33.593156,-86.138879),
            array('Linden',32.301154,-87.792650),
            array('Lineville',33.312534,-85.752576),
            array('Lipscomb',33.427308,-86.922475),
            array('Lisman',32.172216,-88.289352),
            array('Littleville',34.590933,-87.675599),
            array('Livingston',32.587332,-88.188161),
            array('Loachapoka',32.604844,-85.596890),
            array('Lockhart',31.011435,-86.350652),
            array('Locust Fork',33.896526,-86.630569),
            array('Louisville',31.780309,-85.557397),
            array('Lowndesboro',32.273118,-86.609915),
            array('Loxley',30.623500,-87.754732),
            array('Luverne',31.714427,-86.263323),
            array('Lynn',34.040688,-87.540827),
            array('McDonald Chapel',33.520706,-86.936858),
            array('Macedonia',33.402421,-88.239832),
            array('McIntosh',31.265979,-88.031473),
            array('McKenzie',31.542801,-86.719772),
            array('McMullen',33.149131,-88.173919),
            array('Madison',34.715065,-86.739644),
            array('Madrid',31.034941,-85.397222),
            array('Malvern',31.143981,-85.523382),
            array('Maplesville',32.781889,-86.875517),
            array('Margaret',33.675957,-86.467641),
            array('Marion',32.632838,-87.317284),
            array('May',33.553498,-86.994471),
            array('Meadowbrook',33.403788,-86.690758),
            array('Memphis',33.133678,-88.297023),
            array('Mentone',34.572360,-85.580283),
            array('Meridianville',34.869312,-86.578373),
            array('Midfield',33.455874,-86.927044),
            array('Midland',31.307945,-85.490606),
            array('Midway',32.074404,-85.520238),
            array('Mignon',33.182929,-86.264456),
            array('Millbrook',32.497626,-86.368545),
            array('Millport',33.560275,-88.080262),
            array('Millry',31.631309,-88.318972),
            array('Minor',33.539656,-86.940000),
            array('Mobile',30.679523,-88.103280),
            array('Monroeville',31.518075,-87.327543),
            array('Montevallo',33.104927,-86.862817),
            array('Montgomery',32.361538,-86.279118),
            array('Moody',33.592469,-86.496369),
            array('Moores Mill',34.830662,-86.520538),
            array('Mooresville',34.626931,-86.881091),
            array('Morris',33.747374,-86.807023),
            array('Mosses',32.173120,-86.677296),
            array('Moulton',34.482307,-87.285621),
            array('Moundville',32.998521,-87.626006),
            array('Mountainboro',34.147665,-86.131765),
            array('Mountain Brook',33.486972,-86.740465),
            array('Mount Olive',33.684191,-86.875139),
            array('Mount Vernon',31.093170,-88.011209),
            array('Mulga',33.553562,-86.975374),
            array('Munford',33.533494,-85.954242),
            array('Muscle Shoals',34.750788,-87.650278),
            array('Myrtlewood',32.247254,-87.947141),
            array('Napier Field',31.315265,-85.454340),
            array('Natural Bridge',34.091713,-87.604523),
            array('Nauvoo',33.988571,-87.487814),
            array('Nectar',33.969124,-86.636256),
            array('Needham',31.986338,-88.338795),
            array('Newbern',32.594818,-87.535431),
            array('New Brockton',31.381138,-85.924339),
            array('New Hope',34.538194,-86.412129),
            array('New Market',34.906295,-86.426170),
            array('New Site',33.030281,-85.786721),
            array('Newton',31.344452,-85.592702),
            array('Newville',31.421841,-85.336434),
            array('North Bibb',33.201248,-87.150242),
            array('North Courtland',34.676370,-87.307914),
            array('North Johns',33.366880,-87.101486),
            array('Northport',33.253917,-87.592352),
            array('Notasulga',32.560821,-85.667631),
            array('Oak Grove',33.189772,-86.303163),
            array('Oak Hill',31.925246,-87.082645),
            array('Oakman',33.713594,-87.386111),
            array('Odenville',33.681762,-86.399295),
            array('Ohatchee',33.803040,-86.036629),
            array('Oneonta',33.942303,-86.478774),
            array('Onycha',31.221515,-86.277694),
            array('Opelika',32.647183,-85.389404),
            array('Opp',31.283083,-86.254661),
            array('Orange Beach',30.291503,-87.561985),
            array('Orrville',32.305584,-87.245378),
            array('Owens Cross Roads',34.586071,-86.458561),
            array('Oxford',33.597105,-85.838881),
            array('Ozark',31.448169,-85.642009),
            array('Paint Rock',34.660172,-86.328018),
            array('Parrish',33.732477,-87.279291),
            array('Pelham',33.304581,-86.784620),
            array('Pell',33.570907,-86.273845),
            array('Pennington',32.203669,-88.052495),
            array('Petrey',31.850329,-86.207212),
            array('Phenix',32.472822,-85.020121),
            array('Phil Campbell',34.351505,-87.707414),
            array('Pickensville',33.230693,-88.272554),
            array('Piedmont',33.926005,-85.613137),
            array('Pike Road',32.269660,-86.140167),
            array('Pinckard',31.312803,-85.545713),
            array('Pine Apple',31.867882,-86.987624),
            array('Pine Hill',31.986332,-87.592131),
            array('Pine Ridge',34.445939,-85.779069),
            array('Pinson',33.686301,-86.681913),
            array('Pisgah',34.685022,-85.846575),
            array('Pleasant Grove',33.492400,-86.972927),
            array('Pleasant Groves',34.741295,-86.190445),
            array('Point Clear',30.496807,-87.909858),
            array('Pollard',31.027340,-87.172342),
            array('Powell',34.533483,-85.894598),
            array('Prattville',32.459135,-86.451305),
            array('Priceville',34.521001,-86.879678),
            array('Prichard',30.748038,-88.100384),
            array('Providence',32.348986,-87.778309),
            array('Ragland',33.743415,-86.142268),
            array('Rainbow',33.943964,-86.061546),
            array('Rainsville',34.492258,-85.845316),
            array('Ranburne',33.525372,-85.343257),
            array('Red Bay',34.439898,-88.138208),
            array('Red Level',31.407735,-86.610377),
            array('Redstone Arsenal',34.684166,-86.654031),
            array('Reece',34.074446,-86.030630),
            array('Reform',33.380835,-88.015022),
            array('Rehobeth',31.135245,-85.436008),
            array('Repton',31.408991,-87.239326),
            array('Ridgeville',34.057110,-86.103232),
            array('River Falls',31.351948,-86.536680),
            array('Riverside',33.614465,-86.200678),
            array('Riverview',31.058641,-87.056688),
            array('Roanoke',33.148830,-85.369784),
            array('Robertsdale',30.554454,-87.705566),
            array('Rock Creek',33.475884,-87.079003),
            array('Rockford',32.888181,-86.219575),
            array('Rock Mills',33.160348,-85.290469),
            array('Rogersville',34.823444,-87.285693),
            array('Rosa',33.989810,-86.511938),
            array('Russellville',34.510344,-87.728248),
            array('Rutledge',31.733103,-86.309619),
            array('St. Florian',34.872753,-87.625117),
            array('Saks',33.708202,-85.844326),
            array('Samson',31.112574,-86.047865),
            array('Sand Rock',34.232532,-85.770421),
            array('Sanford',31.300683,-86.391734),
            array('Saraland',30.825186,-88.091932),
            array('Sardis',34.173967,-86.121319),
            array('Satsuma',30.854518,-88.054415),
            array('Scottsboro',34.651368,-86.042570),
            array('Section',34.578155,-85.988114),
            array('Selma',32.416416,-87.024733),
            array('Selmont-West Selmont',32.378494,-87.006659),
            array('Sheffield',34.759721,-87.694592),
            array('Shiloh',34.465555,-85.877311),
            array('Shorter',32.401397,-85.943326),
            array('Silas',31.771625,-88.330991),
            array('Silverhill',30.545264,-87.750517),
            array('Sipsey',33.823108,-87.086127),
            array('Skyline',34.802946,-86.123494),
            array('Slocomb',31.108541,-85.594307),
            array('Smiths',32.539259,-85.098703),
            array('Smoke Rise',33.874074,-86.826012),
            array('Snead',34.115970,-86.391512),
            array('Somerville',34.469961,-86.798782),
            array('Southside',33.903597,-86.026105),
            array('South Vinemont',34.233641,-86.862916),
            array('Spanish Fort',30.668723,-87.922179),
            array('Springville',33.768950,-86.471037),
            array('Steele',33.940172,-86.199523),
            array('Stevenson',34.869442,-85.831829),
            array('Sulligent',33.894807,-88.131920),
            array('Sumiton',33.747213,-87.046716),
            array('Summerdale',30.487630,-87.701121),
            array('Susan Moore',34.081838,-86.419513),
            array('Sweet Water',32.097781,-87.865416),
            array('Sylacauga',33.178360,-86.251068),
            array('Sylvania',34.558304,-85.796154),
            array('Sylvan Springs',33.512650,-87.020636),
            array('Talladega',33.434728,-86.101299),
            array('Talladega Springs',33.120713,-86.445266),
            array('Tallassee',32.539402,-85.893061),
            array('Tarrant',33.587546,-86.766219),
            array('Taylor',31.168331,-85.468016),
            array('Theodore',30.550690,-88.180878),
            array('Thomaston',32.269495,-87.624865),
            array('Thomasville',31.911296,-87.740037),
            array('Thorsby',32.916992,-86.715956),
            array('Tillmans Corner',30.583293,-88.197876),
            array('Town Creek',34.671518,-87.408311),
            array('Toxey',31.913644,-88.308468),
            array('Trafford',33.818957,-86.746581),
            array('Triana',34.587456,-86.736251),
            array('Trinity',34.603808,-87.086137),
            array('Troy',31.801960,-85.967317),
            array('Trussville',33.621623,-86.596404),
            array('Tuscaloosa',33.206540,-87.534607),
            array('Tuscumbia',34.730839,-87.702854),
            array('Tuskegee',32.431506,-85.706781),
            array('Underwood-Petersville',34.872469,-87.692776),
            array('Union',32.994164,-87.905313),
            array('Union Grove',34.400088,-86.446049),
            array('Union Springs',32.140113,-85.712804),
            array('Union',32.448984,-87.512287),
            array('Valley',32.811387,-85.177938),
            array('Valley Head',34.565301,-85.616426),
            array('Vance',33.164521,-87.231718),
            array('Vernon',33.756414,-88.111409),
            array('Vestavia Hills',33.433057,-86.778894),
            array('Vina',34.374874,-88.053498),
            array('Vincent',33.385719,-86.409919),
            array('Vredenburgh',31.826518,-87.320686),
            array('Wadley',33.123327,-85.566350),
            array('Waldo',33.393674,-86.032763),
            array('Walnut Grove',34.063983,-86.279254),
            array('Warrior',33.813607,-86.811455),
            array('Waterloo',34.916795,-88.064210),
            array('Waverly',32.735658,-85.574371),
            array('Weaver',33.755701,-85.808541),
            array('Webb',31.260358,-85.283533),
            array('Wedowee',33.308603,-85.485447),
            array('West Blocton',33.118733,-87.122875),
            array('West End-Cobb',33.650903,-85.869487),
            array('West Jefferson',33.649773,-87.071222),
            array('West Point',34.241338,-86.943126),
            array('Wetumpka',32.540972,-86.207726),
            array('White Hall',32.313866,-86.714019),
            array('Wilsonville',33.234924,-86.486283),
            array('Wilton',33.081799,-86.879458),
            array('Winfield',33.928258,-87.807990),
            array('Woodland',33.373655,-85.395700),
            array('Woodville',34.626775,-86.274832),
            array('Yellow Bluff',31.959922,-87.482175),
            array('York',32.493221,-88.297845),
        );
        return $cities;
    }
}
