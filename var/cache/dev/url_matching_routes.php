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
                .'|/reservation(?'
                    .'|/Add/(\\d+)(*:32)'
                    .'|s/(\\d+)/edit(*:51)'
                .')'
                .'|/voiture/(?'
                    .'|delete(?'
                        .'|Reservation/([^/]++)(*:100)'
                        .'|Voiture/([^/]++)(*:124)'
                    .')'
                    .'|client/deleteReservation/([^/]++)(*:166)'
                    .'|locateurvoiture/(?'
                        .'|deleteVoiture/([^/]++)(*:215)'
                        .'|show/([^/]++)(*:236)'
                    .')'
                    .'|show/([^/]++)(*:258)'
                    .'|Clientvoiture/show/([^/]++)(*:293)'
                .')'
                .'|/modifC/(?'
                    .'|([^/]++)(*:321)'
                    .'|back/([^/]++)(*:342)'
                .')'
                .'|/updateVoiture/(?'
                    .'|([^/]++)(*:377)'
                    .'|/locateurvoiture/([^/]++)(*:410)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:447)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:483)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_reservation_add', '_controller' => 'App\\Controller\\ReservationController::addReservation'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'app_reservation_update', '_controller' => 'App\\Controller\\ReservationController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'app_DeleteReservation', '_controller' => 'App\\Controller\\ReservationController::deleteStatique'], ['id'], null, null, false, true, null]],
        124 => [[['_route' => 'app_DeleteVoiture', '_controller' => 'App\\Controller\\VoitureController::deleteStatique'], ['id'], null, null, false, true, null]],
        166 => [[['_route' => 'app_DeleteReservation2', '_controller' => 'App\\Controller\\ReservationController::deleteStatique2'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'app_DeleteVoiture2', '_controller' => 'App\\Controller\\VoitureController::deleteStatique2'], ['id'], null, null, false, true, null]],
        236 => [[['_route' => 'app_locateurvoiture_show', '_controller' => 'App\\Controller\\VoitureController::show2'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'app_voiture_show', '_controller' => 'App\\Controller\\VoitureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        293 => [[['_route' => 'app_Clientvoiture_show', '_controller' => 'App\\Controller\\VoitureController::show3'], ['id'], ['GET' => 0], null, false, true, null]],
        321 => [[['_route' => 'modifC', '_controller' => 'App\\Controller\\ReservationController::modifC'], ['id'], null, null, false, true, null]],
        342 => [[['_route' => 'modifC2', '_controller' => 'App\\Controller\\ReservationController::modifC2'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'updateVoiture', '_controller' => 'App\\Controller\\VoitureController::updateVoiture'], ['id'], null, null, false, true, null]],
        410 => [[['_route' => 'updateVoiture2', '_controller' => 'App\\Controller\\VoitureController::updateVoiture2'], ['id'], null, null, false, true, null]],
        447 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        483 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
