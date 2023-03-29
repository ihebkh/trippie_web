<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_reservation' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation']], [], [], []],
    'app_reservationaffiche' => [[], ['_controller' => 'App\\Controller\\ReservationController::Affiche'], [], [['text', '/reservation/Affichelist']], [], [], []],
    'app_reservation_add' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::addReservation'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/reservation/Add']], [], [], []],
    'app_DeleteReservation' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::deleteStatique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/voiture/deleteReservation']], [], [], []],
    'updateReservation' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::updateReservation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateReservation']], [], [], []],
    'app_voiture' => [[], ['_controller' => 'App\\Controller\\VoitureController::index'], [], [['text', '/voiture']], [], [], []],
    'app_voitureaffiche' => [[], ['_controller' => 'App\\Controller\\VoitureController::Affiche'], [], [['text', '/voiture/Affichelist']], [], [], []],
    'app_voitureaffichenonreserve' => [[], ['_controller' => 'App\\Controller\\VoitureController::Affichernoneserve'], [], [['text', '/voiture/Affichelistnonreserve']], [], [], []],
    'app_voitureaffichereserve' => [[], ['_controller' => 'App\\Controller\\VoitureController::Affichereserve'], [], [['text', '/voiture/Affichelistreserve']], [], [], []],
    'app_DeleteVoiture' => [['id'], ['_controller' => 'App\\Controller\\VoitureController::deleteStatique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/voiture/deleteVoiture']], [], [], []],
    'updateVoiture' => [['id'], ['_controller' => 'App\\Controller\\VoitureController::updateVoiture'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateVoiture']], [], [], []],
    'addVoiture' => [[], ['_controller' => 'App\\Controller\\VoitureController::addVoiture'], [], [['text', '/voiture/add']], [], [], []],
    'app_voiture_show' => [['id'], ['_controller' => 'App\\Controller\\VoitureController::show'], [], [['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'app_voiture_show1' => [['id'], ['_controller' => 'App\\Controller\\VoitureController::add'], [], [['variable', '/', '[^/]++', 'id', true]], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
