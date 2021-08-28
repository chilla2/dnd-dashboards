<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'character_index' => [[], ['_controller' => 'App\\Controller\\CharacterController::index'], [], [['text', '/character/']], [], []],
    'character_new' => [[], ['_controller' => 'App\\Controller\\CharacterController::new'], [], [['text', '/character/new']], [], []],
    'character_show' => [['id'], ['_controller' => 'App\\Controller\\CharacterController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/character']], [], []],
    'character_edit' => [['id'], ['_controller' => 'App\\Controller\\CharacterController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/character']], [], []],
    'character_delete' => [['id'], ['_controller' => 'App\\Controller\\CharacterController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/character']], [], []],
    'creature_index' => [[], ['_controller' => 'App\\Controller\\CreatureController::index'], [], [['text', '/creature/']], [], []],
    'creature_new' => [[], ['_controller' => 'App\\Controller\\CreatureController::new'], [], [['text', '/creature/new']], [], []],
    'creature_show' => [['id'], ['_controller' => 'App\\Controller\\CreatureController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/creature']], [], []],
    'creature_edit' => [['id'], ['_controller' => 'App\\Controller\\CreatureController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/creature']], [], []],
    'creature_delete' => [['id'], ['_controller' => 'App\\Controller\\CreatureController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/creature']], [], []],
    'dash_index' => [[], ['_controller' => 'App\\Controller\\DashController::index'], [], [['text', '/dash/']], [], []],
    'player_display' => [[], ['_controller' => 'App\\Controller\\DashController::playerDisplay'], [], [['text', '/dash/player-display']], [], []],
    'combat_mode' => [[], ['_controller' => 'App\\Controller\\DashController::combatMode'], [], [['text', '/dash/player-display-control/combat-mode']], [], []],
    'player_display_show' => [['object', 'id'], ['_controller' => 'App\\Controller\\DashController::showPlayers'], [], [['text', '/show-hide'], ['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'object', true], ['text', '/dash/player-display-control']], [], []],
    'dm_hide_all' => [[], ['_controller' => 'App\\Controller\\DashController::hideAllDm'], [], [['text', '/dash/player-display-control/hide-all-dm']], [], []],
    'player_hide_all' => [[], ['_controller' => 'App\\Controller\\DashController::hideAll'], [], [['text', '/dash/player-display-control/hide-all']], [], []],
    'dm_display_show' => [['object', 'id'], ['_controller' => 'App\\Controller\\DashController::showDm'], [], [['text', '/toggle-dm'], ['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'object', true], ['text', '/dash/player-display-control']], [], []],
    'dash_new' => [[], ['_controller' => 'App\\Controller\\DashController::new'], [], [['text', '/dash/new']], [], []],
    'dash_show' => [['id'], ['_controller' => 'App\\Controller\\DashController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dash']], [], []],
    'dash_edit' => [['id'], ['_controller' => 'App\\Controller\\DashController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dash']], [], []],
    'dash_delete' => [['id'], ['_controller' => 'App\\Controller\\DashController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dash']], [], []],
    'encounter_index' => [[], ['_controller' => 'App\\Controller\\EncounterController::index'], [], [['text', '/encounter/']], [], []],
    'encounter_new' => [[], ['_controller' => 'App\\Controller\\EncounterController::new'], [], [['text', '/encounter/new']], [], []],
    'encounter_show' => [['id'], ['_controller' => 'App\\Controller\\EncounterController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/encounter']], [], []],
    'encounter_add_fighters' => [['id'], ['_controller' => 'App\\Controller\\EncounterController::addFighters'], [], [['text', '/add-fighters'], ['variable', '/', '[^/]++', 'id', true], ['text', '/encounter']], [], []],
    'combat_tracker_edit' => [['id'], ['_controller' => 'App\\Controller\\EncounterController::editCombat'], [], [['text', '/edit-combat'], ['variable', '/', '[^/]++', 'id', true], ['text', '/encounter']], [], []],
    'encounter_delete' => [['id'], ['_controller' => 'App\\Controller\\EncounterController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/encounter']], [], []],
    'game_index' => [[], ['_controller' => 'App\\Controller\\GameController::index'], [], [['text', '/game/']], [], []],
    'game_new' => [[], ['_controller' => 'App\\Controller\\GameController::new'], [], [['text', '/game/new']], [], []],
    'game_show' => [['id'], ['_controller' => 'App\\Controller\\GameController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/game']], [], []],
    'game_edit' => [['id'], ['_controller' => 'App\\Controller\\GameController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/game']], [], []],
    'game_delete' => [['id'], ['_controller' => 'App\\Controller\\GameController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/game']], [], []],
    'item_index' => [[], ['_controller' => 'App\\Controller\\ItemController::index'], [], [['text', '/item/']], [], []],
    'item_new' => [[], ['_controller' => 'App\\Controller\\ItemController::new'], [], [['text', '/item/new']], [], []],
    'item_show' => [['id'], ['_controller' => 'App\\Controller\\ItemController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/item']], [], []],
    'item_edit' => [['id'], ['_controller' => 'App\\Controller\\ItemController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/item']], [], []],
    'item_delete' => [['id'], ['_controller' => 'App\\Controller\\ItemController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/item']], [], []],
    'location_index' => [[], ['_controller' => 'App\\Controller\\LocationController::index'], [], [['text', '/location/']], [], []],
    'location_new' => [[], ['_controller' => 'App\\Controller\\LocationController::new'], [], [['text', '/location/new']], [], []],
    'location_show' => [['id'], ['_controller' => 'App\\Controller\\LocationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], []],
    'location_edit' => [['id'], ['_controller' => 'App\\Controller\\LocationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], []],
    'location_delete' => [['id'], ['_controller' => 'App\\Controller\\LocationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], []],
    'npc_index' => [[], ['_controller' => 'App\\Controller\\NpcController::index'], [], [['text', '/npc/']], [], []],
    'npc_new' => [[], ['_controller' => 'App\\Controller\\NpcController::new'], [], [['text', '/npc/new']], [], []],
    'npc_show' => [['id'], ['_controller' => 'App\\Controller\\NpcController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/npc']], [], []],
    'npc_edit' => [['id'], ['_controller' => 'App\\Controller\\NpcController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/npc']], [], []],
    'npc_delete' => [['id'], ['_controller' => 'App\\Controller\\NpcController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/npc']], [], []],
    'other_index' => [[], ['_controller' => 'App\\Controller\\OtherController::index'], [], [['text', '/other/']], [], []],
    'other_new' => [[], ['_controller' => 'App\\Controller\\OtherController::new'], [], [['text', '/other/new']], [], []],
    'other_show' => [['id'], ['_controller' => 'App\\Controller\\OtherController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/other']], [], []],
    'other_edit' => [['id'], ['_controller' => 'App\\Controller\\OtherController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/other']], [], []],
    'other_delete' => [['id'], ['_controller' => 'App\\Controller\\OtherController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/other']], [], []],
    'private_dashboard' => [[], ['_controller' => 'App\\Controller\\PrivateDashboardController::index'], [], [['text', '/dm-screen']], [], []],
    'show_dm' => [['object', 'id'], ['_controller' => 'App\\Controller\\PrivateDashboardController::showDm'], [], [['text', '/show-dm'], ['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'object', true]], [], []],
    'show_players' => [['object', 'id'], ['_controller' => 'App\\Controller\\PrivateDashboardController::showPlayers'], [], [['text', '/show-players'], ['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'object', true]], [], []],
    'public_dashboard' => [[], ['_controller' => 'App\\Controller\\PublicDashboardController::index'], [], [['text', '/public/dashboard']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\DashController::index'], [], [['text', '/']], [], []],
    'player_display_control' => [[], ['_controller' => 'App\\Controller\\DashController::playerDisplayControl'], [], [['text', '/control']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
];
