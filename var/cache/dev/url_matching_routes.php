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
        '/compte' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/compte/mot-de-passe' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountController::changePassword'], null, null, null, false, false, null]],
        '/compte/commandes' => [[['_route' => 'account_orders', '_controller' => 'App\\Controller\\AccountController::showOrders'], null, null, null, false, false, null]],
        '/compte/adresses' => [[['_route' => 'account_address', '_controller' => 'App\\Controller\\AddressController::index'], null, null, null, false, false, null]],
        '/compte/adresses/ajouter' => [[['_route' => 'account_address_new', '_controller' => 'App\\Controller\\AddressController::add'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/panier/supprimer' => [[['_route' => 'remove_cart', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, true, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/a-propos' => [[['_route' => 'about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/mailer' => [[['_route' => 'mailer', '_controller' => 'App\\Controller\\MailerController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commande/recap' => [[['_route' => 'order_add', '_controller' => 'App\\Controller\\OrderController::summary'], null, ['POST' => 0], null, false, false, null]],
        '/articles' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/com(?'
                    .'|pte/(?'
                        .'|commandes/([^/]++)(*:200)'
                        .'|adresses/(?'
                            .'|modifier/([^/]++)(*:237)'
                            .'|supprimer/([^/]++)(*:263)'
                        .')'
                    .')'
                    .'|mande/(?'
                        .'|checkout/([^/]++)(*:299)'
                        .'|valide/([^/]++)(*:322)'
                        .'|echec/([^/]++)(*:344)'
                    .')'
                .')'
                .'|/panier/(?'
                    .'|ajouter/([^/]++)(*:381)'
                    .'|réduire/([^/]++)(*:406)'
                    .'|supprimer/([^/]++)(*:432)'
                .')'
                .'|/articles/([^/]++)(*:459)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        200 => [[['_route' => 'account_order', '_controller' => 'App\\Controller\\AccountController::showOrder'], ['reference'], null, null, false, true, null]],
        237 => [[['_route' => 'account_address_update', '_controller' => 'App\\Controller\\AddressController::update'], ['id'], null, null, false, true, null]],
        263 => [[['_route' => 'account_address_delete', '_controller' => 'App\\Controller\\AddressController::delete'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PaymentController::payment'], ['reference'], null, null, false, true, null]],
        322 => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\PaymentController::paymentSuccess'], ['stripeSession'], null, null, false, true, null]],
        344 => [[['_route' => 'payment_fail', '_controller' => 'App\\Controller\\PaymentController::paymentFail'], ['stripeSession'], null, null, false, true, null]],
        381 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        406 => [[['_route' => 'decrease_item', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        432 => [[['_route' => 'remove_cart_item', '_controller' => 'App\\Controller\\CartController::removeItem'], ['id'], null, null, false, true, null]],
        459 => [
            [['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
