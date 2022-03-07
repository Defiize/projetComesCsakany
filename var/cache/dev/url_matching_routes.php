<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/api/avis' => [[['_route' => 'api_avis_list_avis', '_controller' => 'App\\Controller\\Api\\AvisController::listAvis'], null, ['GET' => 0], null, false, false, null]],
        '/api/professeurs' => [[['_route' => 'api_professeurs_list', '_controller' => 'App\\Controller\\Api\\ProfesseurController::list'], null, ['GET' => 0], null, false, false, null]],
        '/professeurs' => [[['_route' => 'professeurs_list', '_controller' => 'App\\Controller\\ProfesseurController::list'], null, ['GET' => 0], null, false, false, null]],
        '/professeurs/create' => [[['_route' => 'professeurs_create', '_controller' => 'App\\Controller\\ProfesseurController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|avis/([^/]++)(?'
                        .'|(*:66)'
                    .')'
                    .'|professeurs/([^/]++)(?'
                        .'|(*:97)'
                        .'|/avis(?'
                            .'|(*:112)'
                        .')'
                    .')'
                .')'
                .'|/professeurs/([^/]++)/(?'
                    .'|update(*:154)'
                    .'|delete(*:168)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [
            [['_route' => 'api_avis_delete_avis', '_controller' => 'App\\Controller\\Api\\AvisController::deleteAvis'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_avis_edit_avis', '_controller' => 'App\\Controller\\Api\\AvisController::editAvis'], ['id'], ['PATCH' => 0], null, false, true, null],
        ],
        97 => [[['_route' => 'api_professeurs_name', '_controller' => 'App\\Controller\\Api\\ProfesseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        112 => [
            [['_route' => 'api_professeurs_list_avis', '_controller' => 'App\\Controller\\Api\\ProfesseurController::listAvis'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_professeurs_create_avis', '_controller' => 'App\\Controller\\Api\\ProfesseurController::createAvis'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        154 => [[['_route' => 'professeurs_update', '_controller' => 'App\\Controller\\ProfesseurController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        168 => [
            [['_route' => 'professeurs_delete', '_controller' => 'App\\Controller\\ProfesseurController::delete'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
