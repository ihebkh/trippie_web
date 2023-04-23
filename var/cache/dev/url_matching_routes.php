<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/reservation/client/Affichelist' => [[['_route' => 'app_reservationaffichefront', '_controller' => 'App\\Controller\\ReservationController::Affichefront'], null, null, null, false, false, null]],
        '/exportexcel' => [[['_route' => 'exportexcel', '_controller' => 'App\\Controller\\ReservationController::exportacademieToExcelAction'], null, null, null, false, false, null]],
        '/reservation/Affichelist' => [[['_route' => 'app_reservationaffiche', '_controller' => 'App\\Controller\\ReservationController::Affiche'], null, null, null, false, false, null]],
        '/exportpdf' => [[['_route' => 'exportpdf', '_controller' => 'App\\Controller\\ReservationController::exportToPdf'], null, null, null, false, false, null]],
        '/reservationmobile' => [[['_route' => 'app_reservationmobile', '_controller' => 'App\\Controller\\ReservationmobileController::index'], null, null, null, false, false, null]],
        '/addReservationJSON/new' => [[['_route' => 'addReservationJSON', '_controller' => 'App\\Controller\\ReservationmobileController::addReservationJSON'], null, null, null, false, false, null]],
        '/voiture' => [[['_route' => 'app_voiture', '_controller' => 'App\\Controller\\VoitureController::index'], null, null, null, false, false, null]],
        '/voiture/Affichelist' => [[['_route' => 'app_voitureaffiche', '_controller' => 'App\\Controller\\VoitureController::Affiche'], null, null, null, false, false, null]],
        '/voiture/Affichelocateur' => [[['_route' => 'app_voitureaffichenonreserve', '_controller' => 'App\\Controller\\VoitureController::Affichernoneserve'], null, null, null, false, false, null]],
        '/voiture/add' => [[['_route' => 'addVoiture', '_controller' => 'App\\Controller\\VoitureController::addVoiture'], null, null, null, false, false, null]],
        '/voiture/AffichelistClient' => [[['_route' => 'app_voitureaffichClient', '_controller' => 'App\\Controller\\VoitureController::AfficherClient'], null, null, null, false, false, null]],
        '/voiture/recherche' => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\VoitureController::Recherche'], null, null, null, false, false, null]],
        '/voituremobile' => [[['_route' => 'app_voituremobile', '_controller' => 'App\\Controller\\VoituremobileController::index'], null, null, null, false, false, null]],
        '/s' => [[['_route' => 'list', '_controller' => 'App\\Controller\\VoituremobileController::getVoiture'], null, null, null, false, false, null]],
        '/addVoitureJSON/new' => [[['_route' => 'addVoitureJSON', '_controller' => 'App\\Controller\\VoituremobileController::addVoitureJSON'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reservation(?'
                    .'|/Add/(\\d+)(*:32)'
                    .'|mobile/([^/]++)(*:54)'
                    .'|s/(\\d+)/edit(*:73)'
                .')'
                .'|/voiture(?'
                    .'|/(?'
                        .'|delete(?'
                            .'|Reservation/([^/]++)(*:125)'
                            .'|Voiture/([^/]++)(*:149)'
                        .')'
                        .'|client/deleteReservation/([^/]++)(*:191)'
                        .'|locateurvoiture/(?'
                            .'|deleteVoiture/([^/]++)(*:240)'
                            .'|show/([^/]++)(*:261)'
                        .')'
                        .'|show/([^/]++)(*:283)'
                        .'|Clientvoiture/show/([^/]++)(*:318)'
                    .')'
                    .'|mobile/([^/]++)(*:342)'
                .')'
                .'|/modifC/(?'
                    .'|([^/]++)(*:370)'
                    .'|back/([^/]++)(*:391)'
                .')'
                .'|/update(?'
                    .'|ReservationJSON/([^/]++)(*:434)'
                    .'|Voiture(?'
                        .'|/(?'
                            .'|([^/]++)(*:464)'
                            .'|/locateurvoiture/([^/]++)(*:497)'
                        .')'
                        .'|JSON/([^/]++)(*:519)'
                    .')'
                .')'
                .'|/delete(?'
                    .'|ReservationJSON/([^/]++)(*:563)'
                    .'|VoitureJSON/([^/]++)(*:591)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:628)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:664)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_reservation_add', '_controller' => 'App\\Controller\\ReservationController::addReservation'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationmobileController::ReservationId'], ['id'], null, null, false, true, null]],
        73 => [[['_route' => 'app_reservation_update', '_controller' => 'App\\Controller\\ReservationController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        125 => [[['_route' => 'app_DeleteReservation', '_controller' => 'App\\Controller\\ReservationController::deleteStatique'], ['id'], null, null, false, true, null]],
        149 => [[['_route' => 'app_DeleteVoiture', '_controller' => 'App\\Controller\\VoitureController::deleteStatique'], ['id'], null, null, false, true, null]],
        191 => [[['_route' => 'app_DeleteReservation2', '_controller' => 'App\\Controller\\ReservationController::deleteStatique2'], ['id'], null, null, false, true, null]],
        240 => [[['_route' => 'app_DeleteVoiture2', '_controller' => 'App\\Controller\\VoitureController::deleteStatique2'], ['id'], null, null, false, true, null]],
        261 => [[['_route' => 'app_locateurvoiture_show', '_controller' => 'App\\Controller\\VoitureController::show2'], ['id'], ['GET' => 0], null, false, true, null]],
        283 => [[['_route' => 'app_voiture_show', '_controller' => 'App\\Controller\\VoitureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        318 => [[['_route' => 'app_Clientvoiture_show', '_controller' => 'App\\Controller\\VoitureController::show3'], ['id'], ['GET' => 0], null, false, true, null]],
        342 => [[['_route' => 'voiture', '_controller' => 'App\\Controller\\VoituremobileController::VoitureId'], ['id'], null, null, false, true, null]],
        370 => [[['_route' => 'modifC', '_controller' => 'App\\Controller\\ReservationController::modifC'], ['id'], null, null, false, true, null]],
        391 => [[['_route' => 'modifC2', '_controller' => 'App\\Controller\\ReservationController::modifC2'], ['id'], null, null, false, true, null]],
        434 => [[['_route' => 'updateReservationJSON', '_controller' => 'App\\Controller\\ReservationmobileController::updateReservationJSON'], ['id'], null, null, false, true, null]],
        464 => [[['_route' => 'updateVoiture', '_controller' => 'App\\Controller\\VoitureController::updateVoiture'], ['id'], null, null, false, true, null]],
        497 => [[['_route' => 'updateVoiture2', '_controller' => 'App\\Controller\\VoitureController::updateVoiture2'], ['id'], null, null, false, true, null]],
        519 => [[['_route' => 'updateVoitureJSON', '_controller' => 'App\\Controller\\VoituremobileController::updateVoitureJSON'], ['id'], null, null, false, true, null]],
        563 => [[['_route' => 'deletereservationJSON', '_controller' => 'App\\Controller\\ReservationmobileController::deleteReservationJSON'], ['id'], null, null, false, true, null]],
        591 => [[['_route' => 'deleteVoitureJSON', '_controller' => 'App\\Controller\\VoituremobileController::deleteVoitureJSON'], ['id'], null, null, false, true, null]],
        628 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        664 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
