<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/reservation/Affichelist' => [[['_route' => 'app_reservationaffiche', '_controller' => 'App\\Controller\\ReservationController::Affiche'], null, null, null, false, false, null]],
        '/voiture' => [[['_route' => 'app_voiture', '_controller' => 'App\\Controller\\VoitureController::index'], null, null, null, false, false, null]],
        '/voiture/Affichelist' => [[['_route' => 'app_voitureaffiche', '_controller' => 'App\\Controller\\VoitureController::Affiche'], null, null, null, false, false, null]],
        '/voiture/Affichelistnonreserve' => [[['_route' => 'app_voitureaffichenonreserve', '_controller' => 'App\\Controller\\VoitureController::Affichernoneserve'], null, null, null, false, false, null]],
        '/voiture/add' => [[['_route' => 'addVoiture', '_controller' => 'App\\Controller\\VoitureController::addVoiture'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reservation/Add/(\\d+)(*:29)'
                .'|/voiture/(?'
                    .'|delete(?'
                        .'|Reservation/([^/]++)(*:77)'
                        .'|Voiture/([^/]++)(*:100)'
                    .')'
                    .'|show/([^/]++)(*:122)'
                    .'|locateurvoiture/show/([^/]++)(*:159)'
                .')'
                .'|/update(?'
                    .'|Reservation/([^/]++)(*:198)'
                    .'|Voiture/([^/]++)(*:222)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:259)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_reservation_add', '_controller' => 'App\\Controller\\ReservationController::addReservation'], ['id'], null, null, false, true, null]],
        77 => [[['_route' => 'app_DeleteReservation', '_controller' => 'App\\Controller\\ReservationController::deleteStatique'], ['id'], null, null, false, true, null]],
        100 => [[['_route' => 'app_DeleteVoiture', '_controller' => 'App\\Controller\\VoitureController::deleteStatique'], ['id'], null, null, false, true, null]],
        122 => [[['_route' => 'app_voiture_show', '_controller' => 'App\\Controller\\VoitureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        159 => [[['_route' => 'app_locateurvoiture_show', '_controller' => 'App\\Controller\\VoitureController::show2'], ['id'], ['GET' => 0], null, false, true, null]],
        198 => [[['_route' => 'updateReservation', '_controller' => 'App\\Controller\\ReservationController::updateReservation'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'updateVoiture', '_controller' => 'App\\Controller\\VoitureController::updateVoiture'], ['id'], null, null, false, true, null]],
        259 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
