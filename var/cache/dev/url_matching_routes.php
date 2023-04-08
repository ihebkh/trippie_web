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
        '/reservation/Affichelist' => [[['_route' => 'app_reservationaffiche', '_controller' => 'App\\Controller\\ReservationController::Affiche'], null, null, null, false, false, null]],
        '/voiture' => [[['_route' => 'app_voiture', '_controller' => 'App\\Controller\\VoitureController::index'], null, null, null, false, false, null]],
        '/voiture/Affichelist' => [[['_route' => 'app_voitureaffiche', '_controller' => 'App\\Controller\\VoitureController::Affiche'], null, null, null, false, false, null]],
        '/voiture/Affichelocateur' => [[['_route' => 'app_voitureaffichenonreserve', '_controller' => 'App\\Controller\\VoitureController::Affichernoneserve'], null, null, null, false, false, null]],
        '/voiture/add' => [[['_route' => 'addVoiture', '_controller' => 'App\\Controller\\VoitureController::addVoiture'], null, null, null, false, false, null]],
        '/voiture/AffichelistClient' => [[['_route' => 'app_voitureaffichClient', '_controller' => 'App\\Controller\\VoitureController::AfficherClient'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reservation/Add/(\\d+)(*:29)'
                .'|/voiture/(?'
                    .'|delete(?'
                        .'|Reservation/([^/]++)(*:77)'
                        .'|Voiture/([^/]++)(*:100)'
                    .')'
                    .'|client/deleteReservation/([^/]++)(*:142)'
                    .'|locateurvoiture/(?'
                        .'|deleteVoiture/([^/]++)(*:191)'
                        .'|show/([^/]++)(*:212)'
                    .')'
                    .'|show/([^/]++)(*:234)'
                    .'|Clientvoiture/show/([^/]++)(*:269)'
                .')'
                .'|/modifC/(?'
                    .'|([^/]++)(*:297)'
                    .'|back/([^/]++)(*:318)'
                .')'
                .'|/updateVoiture/(?'
                    .'|([^/]++)(*:353)'
                    .'|/locateurvoiture/([^/]++)(*:386)'
                .')'
                .'|/([^/]++)/print(*:410)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:446)'
                .'|/reservations/(\\d+)/edit(*:478)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_reservation_add', '_controller' => 'App\\Controller\\ReservationController::addReservation'], ['id'], null, null, false, true, null]],
        77 => [[['_route' => 'app_DeleteReservation', '_controller' => 'App\\Controller\\ReservationController::deleteStatique'], ['id'], null, null, false, true, null]],
        100 => [[['_route' => 'app_DeleteVoiture', '_controller' => 'App\\Controller\\VoitureController::deleteStatique'], ['id'], null, null, false, true, null]],
        142 => [[['_route' => 'app_DeleteReservation2', '_controller' => 'App\\Controller\\ReservationController::deleteStatique2'], ['id'], null, null, false, true, null]],
        191 => [[['_route' => 'app_DeleteVoiture2', '_controller' => 'App\\Controller\\VoitureController::deleteStatique2'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'app_locateurvoiture_show', '_controller' => 'App\\Controller\\VoitureController::show2'], ['id'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'app_voiture_show', '_controller' => 'App\\Controller\\VoitureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        269 => [[['_route' => 'app_Clientvoiture_show', '_controller' => 'App\\Controller\\VoitureController::show3'], ['id'], ['GET' => 0], null, false, true, null]],
        297 => [[['_route' => 'modifC', '_controller' => 'App\\Controller\\ReservationController::modifC'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'modifC2', '_controller' => 'App\\Controller\\ReservationController::modifC2'], ['id'], null, null, false, true, null]],
        353 => [[['_route' => 'updateVoiture', '_controller' => 'App\\Controller\\VoitureController::updateVoiture'], ['id'], null, null, false, true, null]],
        386 => [[['_route' => 'updateVoiture2', '_controller' => 'App\\Controller\\VoitureController::updateVoiture2'], ['id'], null, null, false, true, null]],
        410 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\VoitureController::printReclamation'], ['id'], null, null, false, false, null]],
        446 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        478 => [
            [['_route' => 'app_reservation_update', '_controller' => 'App\\Controller\\ReservationController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
