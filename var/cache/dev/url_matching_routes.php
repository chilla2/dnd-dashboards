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
        '/character' => [[['_route' => 'character_index', '_controller' => 'App\\Controller\\CharacterController::index'], null, ['GET' => 0], null, true, false, null]],
        '/character/new' => [[['_route' => 'character_new', '_controller' => 'App\\Controller\\CharacterController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/creature' => [[['_route' => 'creature_index', '_controller' => 'App\\Controller\\CreatureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/creature/new' => [[['_route' => 'creature_new', '_controller' => 'App\\Controller\\CreatureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dash' => [[['_route' => 'dash_index', '_controller' => 'App\\Controller\\DashController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dash/player-display' => [[['_route' => 'player_display', '_controller' => 'App\\Controller\\DashController::playerDisplay'], null, ['GET' => 0], null, false, false, null]],
        '/dash/player-display-control' => [[['_route' => 'player_display_control', '_controller' => 'App\\Controller\\DashController::playerDisplayControl'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dash/player-display-control/combat-mode' => [[['_route' => 'combat_mode', '_controller' => 'App\\Controller\\DashController::combatMode'], null, ['GET' => 0], null, false, false, null]],
        '/dash/player-display-control/hide-all-dm' => [[['_route' => 'dm_hide_all', '_controller' => 'App\\Controller\\DashController::hideAllDm'], null, ['GET' => 0], null, false, false, null]],
        '/dash/player-display-control/hide-all' => [[['_route' => 'player_hide_all', '_controller' => 'App\\Controller\\DashController::hideAll'], null, ['GET' => 0], null, false, false, null]],
        '/dash/new' => [[['_route' => 'dash_new', '_controller' => 'App\\Controller\\DashController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/encounter' => [[['_route' => 'encounter_index', '_controller' => 'App\\Controller\\EncounterController::index'], null, ['GET' => 0], null, true, false, null]],
        '/encounter/new' => [[['_route' => 'encounter_new', '_controller' => 'App\\Controller\\EncounterController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/dm-screen' => [[['_route' => 'private_dashboard', '_controller' => 'App\\Controller\\PrivateDashboardController::index'], null, null, null, false, false, null]],
        '/public/dashboard' => [[['_route' => 'public_dashboard', '_controller' => 'App\\Controller\\PublicDashboardController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DashController::index'], null, null, null, false, false, null]],
        '/control' => [[['_route' => 'player-display-control', '_controller' => 'App\\Controller\\DashController::playerDisplayControl'], null, null, null, false, false, null]],
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
                .'|/c(?'
                    .'|haracter/([^/]++)(?'
                        .'|(*:159)'
                        .'|/edit(*:172)'
                        .'|(*:180)'
                    .')'
                    .'|reature/([^/]++)(?'
                        .'|(*:208)'
                        .'|/edit(*:221)'
                        .'|(*:229)'
                    .')'
                .')'
                .'|/dash/(?'
                    .'|player\\-display\\-control/([^/]++)/([^/]++)/(?'
                        .'|show\\-hide(*:304)'
                        .'|toggle\\-dm(*:322)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:342)'
                        .'|/edit(*:355)'
                        .'|(*:363)'
                    .')'
                .')'
                .'|/encounter/([^/]++)(?'
                    .'|(*:395)'
                    .'|/(?'
                        .'|add\\-fighters(*:420)'
                        .'|edit\\-combat(*:440)'
                    .')'
                    .'|(*:449)'
                .')'
                .'|/game/([^/]++)(?'
                    .'|(*:475)'
                    .'|/edit(*:488)'
                    .'|(*:496)'
                .')'
                .'|/item/([^/]++)(?'
                    .'|(*:522)'
                    .'|/edit(*:535)'
                    .'|(*:543)'
                .')'
                .'|/location/([^/]++)(?'
                    .'|(*:573)'
                    .'|/edit(*:586)'
                    .'|(*:594)'
                .')'
                .'|/npc/([^/]++)(?'
                    .'|(*:619)'
                    .'|/edit(*:632)'
                    .'|(*:640)'
                .')'
                .'|/other/([^/]++)(?'
                    .'|(*:667)'
                    .'|/edit(*:680)'
                    .'|(*:688)'
                .')'
                .'|/([^/]++)/([^/]++)/show\\-(?'
                    .'|dm(*:727)'
                    .'|players(*:742)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:779)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => 'character_show', '_controller' => 'App\\Controller\\CharacterController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        172 => [[['_route' => 'character_edit', '_controller' => 'App\\Controller\\CharacterController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        180 => [[['_route' => 'character_delete', '_controller' => 'App\\Controller\\CharacterController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        208 => [[['_route' => 'creature_show', '_controller' => 'App\\Controller\\CreatureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        221 => [[['_route' => 'creature_edit', '_controller' => 'App\\Controller\\CreatureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        229 => [[['_route' => 'creature_delete', '_controller' => 'App\\Controller\\CreatureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        304 => [[['_route' => 'player_display_show', '_controller' => 'App\\Controller\\DashController::showPlayers'], ['object', 'id'], ['GET' => 0], null, false, false, null]],
        322 => [[['_route' => 'dm_display_show', '_controller' => 'App\\Controller\\DashController::showDm'], ['object', 'id'], ['GET' => 0], null, false, false, null]],
        342 => [[['_route' => 'dash_show', '_controller' => 'App\\Controller\\DashController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        355 => [[['_route' => 'dash_edit', '_controller' => 'App\\Controller\\DashController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        363 => [[['_route' => 'dash_delete', '_controller' => 'App\\Controller\\DashController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        395 => [[['_route' => 'encounter_show', '_controller' => 'App\\Controller\\EncounterController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        420 => [[['_route' => 'encounter_add_fighters', '_controller' => 'App\\Controller\\EncounterController::addFighters'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        440 => [[['_route' => 'combat_tracker_edit', '_controller' => 'App\\Controller\\EncounterController::editCombat'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        449 => [[['_route' => 'encounter_delete', '_controller' => 'App\\Controller\\EncounterController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        475 => [[['_route' => 'game_show', '_controller' => 'App\\Controller\\GameController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        488 => [[['_route' => 'game_edit', '_controller' => 'App\\Controller\\GameController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        496 => [[['_route' => 'game_delete', '_controller' => 'App\\Controller\\GameController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        522 => [[['_route' => 'item_show', '_controller' => 'App\\Controller\\ItemController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        535 => [[['_route' => 'item_edit', '_controller' => 'App\\Controller\\ItemController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        543 => [[['_route' => 'item_delete', '_controller' => 'App\\Controller\\ItemController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        573 => [[['_route' => 'location_show', '_controller' => 'App\\Controller\\LocationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        586 => [[['_route' => 'location_edit', '_controller' => 'App\\Controller\\LocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        594 => [[['_route' => 'location_delete', '_controller' => 'App\\Controller\\LocationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        619 => [[['_route' => 'npc_show', '_controller' => 'App\\Controller\\NpcController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        632 => [[['_route' => 'npc_edit', '_controller' => 'App\\Controller\\NpcController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        640 => [[['_route' => 'npc_delete', '_controller' => 'App\\Controller\\NpcController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        667 => [[['_route' => 'other_show', '_controller' => 'App\\Controller\\OtherController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        680 => [[['_route' => 'other_edit', '_controller' => 'App\\Controller\\OtherController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        688 => [[['_route' => 'other_delete', '_controller' => 'App\\Controller\\OtherController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        727 => [[['_route' => 'show_dm', '_controller' => 'App\\Controller\\PrivateDashboardController::showDm'], ['object', 'id'], ['GET' => 0], null, false, false, null]],
        742 => [[['_route' => 'show_players', '_controller' => 'App\\Controller\\PrivateDashboardController::showPlayers'], ['object', 'id'], ['GET' => 0], null, false, false, null]],
        779 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
