<?php

$redirects = [
    /*main menu*/
    ['/studentske-zhyttia/','/not-now', 301],
    /*['/rozklad-zaniat-ta-ekzameniv/','/not-now', 301],
    ['/napriamy-pidhotovky/','/not-now', 301],
    ['/umovy-vstupu/','/not-now', 301],
    ['/pidhotovchi-kursy/','/not-now', 301],
    ['/napriamy-pidhotovky-mahistr/','/not-now', 301],
    ['/umovy-vstupu/','/not-now', 301],
    ['/pidhotovchi-kursy/','/not-now', 301],
    ['/napriamy-pidhotovky-mahistr/','/not-now', 301],*/

    /*btn before main menu*/
    ['/kontakty/','/not-now', 301],

    /*slider*/
    ['/kafedra-aerokosmichnoi-heodezii/','/not-now', 301],
    ['/kafedra-tsyvilnoi-ta-promyslovoi-bezpeky/','/not-now', 301],
    ['/kafedra-biotekhnolohii/','/not-now', 301],
    ['/kafedra-ekolohii/','/not-now', 301],
    ['/kafedra-zemleustroiu-ta-kadastru/','/not-now', 301],
    ['/kafedra-khimii-i-khimichnoi-tekhnolohii/','/not-now', 301],

    /*news-1*/
    ['/testove-oholoshennia-3/','/not-now', 301],
    ['/xx-mizhnarodna-naukova-konferentsiia-astronomichna-shkola-molodykh-vchenykh/','/not-now', 301],
    ['/iv-vseukrainska-naukovo-praktychna-konferentsiia-suchasni-tekhnolohii-zemleustroiu-kadastru-ta-upravlinnia-zemelnymy-resursamy/','/not-now', 301],

    /*news-2*/
    ['/den-vidkrytykh-dverei/','/not-now', 301],
    ['/urochyste-vruchennia-dyplomiv/','/not-now', 301],
    ['/studenty-biotekhnolohy-vidvidaly-ikh-mizhnarodnyi-medychnyi-forum/','/not-now', 301],
    ['/news/','/not-now', 301],

    /*sidebar menu*/
    ['/zahalna-struktura-instytutu/','/not-now', 301],
    ['/dyrektorat/','/not-now', 301],
    ['/vydavnycha-diialnist/','/not-now', 301],
    ['/konferentsii/','/not-now', 301],
    ['/vchena-rada/','/not-now', 301],
    ['/spetsializovani-vcheni-rady/','/not-now', 301],
    ['/naukovo-metodychno-redaktsiina-rada/','/not-now', 301],
    ['/nashi-dosiahnennia/','/not-now', 301],
    ['/mizhnarodna-diialnist/','/not-now', 301],
    /*
    ['/mizhnarodna-diialnist/','/not-now', 301],
    ['/nash-instytut/','/not-now', 301],
    ['/iso-9001/','/not-now', 301],*/
];

foreach ($redirects as $rules) {
	if (preg_match($rules[0], $_SERVER['REQUEST_URI'])) {
			wp_redirect(site_url() . $rules[1], $rules[2]);
			exit();
		}
}
