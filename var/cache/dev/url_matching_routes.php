<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/creature' => [[['_route' => 'creature_index', '_controller' => 'App\\Controller\\CreatureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/creature/new' => [[['_route' => 'creature_new', '_controller' => 'App\\Controller\\CreatureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboards' => [[['_route' => 'dashboard_index', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dashboards/player-display' => [[['_route' => 'player_display', '_controller' => 'App\\Controller\\DashboardController::playerDisplay'], null, ['GET' => 0], null, false, false, null]],
        '/dashboards/player-display-control' => [[['_route' => 'player_display_control', '_controller' => 'App\\Controller\\DashboardController::playerDisplayControl'], null, ['GET' => 0], null, false, false, null]],
        '/dashboards/player-display-control/combat-mode' => [[['_route' => 'combat_mode', '_controller' => 'App\\Controller\\DashboardController::combatMode'], null, ['GET' => 0], null, false, false, null]],
        '/dashboards/player-display-control/hide-all' => [[['_route' => 'player_hide_all', '_controller' => 'App\\Controller\\DashboardController::hideAll'], null, ['GET' => 0], null, false, false, null]],
        '/dashboards/new' => [[['_route' => 'dashboard_new', '_controller' => 'App\\Controller\\DashboardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/game' => [[['_route' => 'game_index', '_controller' => 'App\\Controller\\GameController::index'], null, ['GET' => 0], null, true, false, null]],
        '/game/new' => [[['_route' => 'game_new', '_controller' => 'App\\Controller\\GameController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/item' => [[['_route' => 'item_index', '_controller' => 'App\\Controller\\ItemController::index'], null, ['GET' => 0], null, true, false, null]],
        '/item/new' => [[['_route' => 'item_new', '_controller' => 'App\\Controller\\ItemController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/location' => [[['_route' => 'location_index', '_controller' => 'App\\Controller\\LocationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/location/new' => [[['_route' => 'location_new', '_controller' => 'App\\Controller\\LocationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/npc' => [[['_route' => 'npc_index', '_controller' => 'App\\Controller\\NpcController::index'], null, ['GET' => 0], null, true, false, null]],
        '/npc/new' => [[['_route' => 'npc_new', '_controller' => 'App\\Controller\\NpcController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/other' => [[['_route' => 'other_index', '_controller' => 'App\\Controller\\OtherController::index'], null, ['GET' => 0], null, true, false, null]],
        '/other/new' => [[['_route' => 'other_new', '_controller' => 'App\\Controller\\OtherController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/player' => [[['_route' => 'player', '_controller' => 'App\\Controller\\PlayerController::index'], null, null, null, false, false, null]],
        '/dm-screen' => [[['_route' => 'private_dashboard', '_controller' => 'App\\Controller\\PrivateDashboardController::index'], null, null, null, false, false, null]],
        '/public/dashboard' => [[['_route' => 'public_dashboard', '_controller' => 'App\\Controller\\PublicDashboardController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session', '_controller' => 'App\\Controller\\SessionController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\PublicDashboardController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                .')'
                .'|/creature/([^/]++)(?'
                    .'|(*:155)'
                    .'|/edit(*:168)'
                    .'|(*:176)'
                .')'
                .'|/dashboards/player\\-display\\-control/([^/]++)/([^/]++)/show\\-hide(*:250)'
                .'|/game/([^/]++)(?'
                    .'|(*:275)'
                    .'|/edit(*:288)'
                    .'|(*:296)'
                .')'
                .'|/item/([^/]++)(?'
                    .'|(*:322)'
                    .'|/edit(*:335)'
                    .'|(*:343)'
                .')'
                .'|/location/([^/]++)(?'
                    .'|(*:373)'
                    .'|/edit(*:386)'
                    .'|(*:394)'
                .')'
                .'|/npc/([^/]++)(?'
                    .'|(*:419)'
                    .'|/edit(*:432)'
                    .'|(*:440)'
                .')'
                .'|/other/([^/]++)(?'
                    .'|(*:467)'
                    .'|/edit(*:480)'
                    .'|(*:488)'
                .')'
                .'|/([^/]++)/([^/]++)/show\\-(?'
                    .'|dm(*:527)'
                    .'|players(*:542)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:579)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        155 => [[['_route' => 'creature_show', '_controller' => 'App\\Controller\\CreatureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        168 => [[['_route' => 'creature_edit', '_controller' => 'App\\Controller\\CreatureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        176 => [[['_route' => 'creature_delete', '_controller' => 'App\\Controller\\CreatureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        250 => [[['_route' => 'player_display_show', '_controller' => 'App\\Controller\\DashboardController::showPlayers'], ['object', 'id'], ['GET' => 0], null, false, false, null]],
        275 => [[['_route' => 'game_show', '_controller' => 'App\\Controller\\GameController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        288 => [[['_route' => 'game_edit', '_controller' => 'App\\Controller\\GameController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        296 => [[['_route' => 'game_delete', '_controller' => 'App\\Controller\\GameController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        322 => [[['_route' => 'item_show', '_controller' => 'App\\Controller\\ItemController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'item_edit', '_controller' => 'App\\Controller\\ItemController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'item_delete', '_controller' => 'App\\Controller\\ItemController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        373 => [[['_route' => 'location_show', '_controller' => 'App\\Controller\\LocationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        386 => [[['_route' => 'location_edit', '_controller' => 'App\\Controller\\LocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        394 => [[['_route' => 'location_delete', '_controller' => 'App\\Controller\\LocationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        419 => [[['_route' => 'npc_show', '_controller' => 'App\\Controller\\NpcController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        432 => [[['_route' => 'npc_edit', '_controller' => 'App\\Controller\\NpcController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        440 => [[['_route' => 'npc_delete', '_controller' => 'App\\Controller\\NpcController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        467 => [[['_route' => 'other_show', '_controller' => 'App\\Controller\\OtherController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        480 => [[['_route' => 'other_edit', '_controller' => 'App\\Controller\\OtherController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        488 => [[['_route' => 'other_delete', '_controller' => 'App\\Controller\\OtherController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        527 => [[['_route' => 'show_dm', '_controller' => 'App\\Controller\\PrivateDashboardController::showDm'], ['object', 'id'], ['GET' => 0], null, false, false, null]],
        542 => [[['_route' => 'show_players', '_controller' => 'App\\Controller\\PrivateDashboardController::showPlayers'], ['object', 'id'], ['GET' => 0], null, false, false, null]],
        579 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
