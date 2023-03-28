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
        '/voiture/Affichelistnonreserve' => [[['_route' => 'app_voitureaffichenonreserve', '_controller' => 'App\\Controller\\VoitureController::Affichenonreserve'], null, null, null, false, false, null]],
        '/voiture/Affichelistreserve' => [[['_route' => 'app_voitureaffichereserve', '_controller' => 'App\\Controller\\VoitureController::Affichereserve'], null, null, null, false, false, null]],
        '/voiture/add' => [[['_route' => 'addVoiture', '_controller' => 'App\\Controller\\VoitureController::addVoiture'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/voiture/delete(?'
                    .'|Reservation/([^/]++)(*:45)'
                    .'|Voiture/([^/]++)(*:68)'
                .')'
                .'|/updateVoiture/([^/]++)(*:99)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:134)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'app_DeleteReservation', '_controller' => 'App\\Controller\\ReservationController::deleteStatique'], ['id'], null, null, false, true, null]],
        68 => [[['_route' => 'app_DeleteVoiture', '_controller' => 'App\\Controller\\VoitureController::deleteStatique'], ['id'], null, null, false, true, null]],
        99 => [[['_route' => 'updateVoiture', '_controller' => 'App\\Controller\\VoitureController::updateVoiture'], ['id'], null, null, false, true, null]],
        134 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
