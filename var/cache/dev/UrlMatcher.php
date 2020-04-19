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
        '/blog/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/blog/createPost' => [[['_route' => 'createPost', '_controller' => 'App\\Controller\\BlogController::createPost'], null, null, null, false, false, null]],
        '/blog/allPostCategory' => [[['_route' => 'allPostCategory', '_controller' => 'App\\Controller\\BlogController::allPostCategory'], null, null, null, false, false, null]],
        '/doctor' => [[['_route' => 'doctor', '_controller' => 'App\\Controller\\DoctorController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'Home', '_controller' => 'App\\Controller\\MainREFMEDController::index'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'services', '_controller' => 'App\\Controller\\MainREFMEDController::service'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\MainREFMEDController::contact'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\MainREFMEDController::about'], null, null, null, false, false, null]],
        '/pharmacie' => [[['_route' => 'pharmacie', '_controller' => 'App\\Controller\\PharmacieController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\RegistrationController::registerBlog'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController:loadAction'], null, null, null, false, false, null]],
        '/blog/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
        '/admin' => [[['_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/language/list' => [[['_route' => 'admin_app_language_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.language', '_sonata_name' => 'admin_app_language_list'], null, null, null, false, false, null]],
        '/admin/app/language/create' => [[['_route' => 'admin_app_language_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.language', '_sonata_name' => 'admin_app_language_create'], null, null, null, false, false, null]],
        '/admin/app/language/batch' => [[['_route' => 'admin_app_language_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.language', '_sonata_name' => 'admin_app_language_batch'], null, null, null, false, false, null]],
        '/admin/app/language/export' => [[['_route' => 'admin_app_language_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.language', '_sonata_name' => 'admin_app_language_export'], null, null, null, false, false, null]],
        '/admin/app/socialnetworks/list' => [[['_route' => 'admin_app_socialnetworks_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.social_networks', '_sonata_name' => 'admin_app_socialnetworks_list'], null, null, null, false, false, null]],
        '/admin/app/socialnetworks/create' => [[['_route' => 'admin_app_socialnetworks_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.social_networks', '_sonata_name' => 'admin_app_socialnetworks_create'], null, null, null, false, false, null]],
        '/admin/app/socialnetworks/batch' => [[['_route' => 'admin_app_socialnetworks_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.social_networks', '_sonata_name' => 'admin_app_socialnetworks_batch'], null, null, null, false, false, null]],
        '/admin/app/socialnetworks/export' => [[['_route' => 'admin_app_socialnetworks_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.social_networks', '_sonata_name' => 'admin_app_socialnetworks_export'], null, null, null, false, false, null]],
        '/admin/app/categorydrugs/list' => [[['_route' => 'admin_app_categorydrugs_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.category_drugs', '_sonata_name' => 'admin_app_categorydrugs_list'], null, null, null, false, false, null]],
        '/admin/app/categorydrugs/create' => [[['_route' => 'admin_app_categorydrugs_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.category_drugs', '_sonata_name' => 'admin_app_categorydrugs_create'], null, null, null, false, false, null]],
        '/admin/app/categorydrugs/batch' => [[['_route' => 'admin_app_categorydrugs_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.category_drugs', '_sonata_name' => 'admin_app_categorydrugs_batch'], null, null, null, false, false, null]],
        '/admin/app/categorydrugs/export' => [[['_route' => 'admin_app_categorydrugs_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.category_drugs', '_sonata_name' => 'admin_app_categorydrugs_export'], null, null, null, false, false, null]],
        '/admin/app/categorylaboratory/list' => [[['_route' => 'admin_app_categorylaboratory_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.category_laboratory', '_sonata_name' => 'admin_app_categorylaboratory_list'], null, null, null, false, false, null]],
        '/admin/app/categorylaboratory/create' => [[['_route' => 'admin_app_categorylaboratory_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.category_laboratory', '_sonata_name' => 'admin_app_categorylaboratory_create'], null, null, null, false, false, null]],
        '/admin/app/categorylaboratory/batch' => [[['_route' => 'admin_app_categorylaboratory_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.category_laboratory', '_sonata_name' => 'admin_app_categorylaboratory_batch'], null, null, null, false, false, null]],
        '/admin/app/categorylaboratory/export' => [[['_route' => 'admin_app_categorylaboratory_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.category_laboratory', '_sonata_name' => 'admin_app_categorylaboratory_export'], null, null, null, false, false, null]],
        '/admin/app/drugsconsomers/list' => [[['_route' => 'admin_app_drugsconsomers_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.drugs_consomers', '_sonata_name' => 'admin_app_drugsconsomers_list'], null, null, null, false, false, null]],
        '/admin/app/drugsconsomers/create' => [[['_route' => 'admin_app_drugsconsomers_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.drugs_consomers', '_sonata_name' => 'admin_app_drugsconsomers_create'], null, null, null, false, false, null]],
        '/admin/app/drugsconsomers/batch' => [[['_route' => 'admin_app_drugsconsomers_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.drugs_consomers', '_sonata_name' => 'admin_app_drugsconsomers_batch'], null, null, null, false, false, null]],
        '/admin/app/drugsconsomers/export' => [[['_route' => 'admin_app_drugsconsomers_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.drugs_consomers', '_sonata_name' => 'admin_app_drugsconsomers_export'], null, null, null, false, false, null]],
        '/admin/app/expertise/list' => [[['_route' => 'admin_app_expertise_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.expertise', '_sonata_name' => 'admin_app_expertise_list'], null, null, null, false, false, null]],
        '/admin/app/expertise/create' => [[['_route' => 'admin_app_expertise_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.expertise', '_sonata_name' => 'admin_app_expertise_create'], null, null, null, false, false, null]],
        '/admin/app/expertise/batch' => [[['_route' => 'admin_app_expertise_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.expertise', '_sonata_name' => 'admin_app_expertise_batch'], null, null, null, false, false, null]],
        '/admin/app/expertise/export' => [[['_route' => 'admin_app_expertise_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.expertise', '_sonata_name' => 'admin_app_expertise_export'], null, null, null, false, false, null]],
        '/admin/app/formdrugs/list' => [[['_route' => 'admin_app_formdrugs_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.form_drugs', '_sonata_name' => 'admin_app_formdrugs_list'], null, null, null, false, false, null]],
        '/admin/app/formdrugs/create' => [[['_route' => 'admin_app_formdrugs_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.form_drugs', '_sonata_name' => 'admin_app_formdrugs_create'], null, null, null, false, false, null]],
        '/admin/app/formdrugs/batch' => [[['_route' => 'admin_app_formdrugs_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.form_drugs', '_sonata_name' => 'admin_app_formdrugs_batch'], null, null, null, false, false, null]],
        '/admin/app/formdrugs/export' => [[['_route' => 'admin_app_formdrugs_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.form_drugs', '_sonata_name' => 'admin_app_formdrugs_export'], null, null, null, false, false, null]],
        '/admin/app/meanspayment/list' => [[['_route' => 'admin_app_meanspayment_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.means_payment', '_sonata_name' => 'admin_app_meanspayment_list'], null, null, null, false, false, null]],
        '/admin/app/meanspayment/create' => [[['_route' => 'admin_app_meanspayment_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.means_payment', '_sonata_name' => 'admin_app_meanspayment_create'], null, null, null, false, false, null]],
        '/admin/app/meanspayment/batch' => [[['_route' => 'admin_app_meanspayment_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.means_payment', '_sonata_name' => 'admin_app_meanspayment_batch'], null, null, null, false, false, null]],
        '/admin/app/meanspayment/export' => [[['_route' => 'admin_app_meanspayment_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.means_payment', '_sonata_name' => 'admin_app_meanspayment_export'], null, null, null, false, false, null]],
        '/admin/app/news/list' => [[['_route' => 'admin_app_news_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_list'], null, null, null, false, false, null]],
        '/admin/app/news/create' => [[['_route' => 'admin_app_news_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_create'], null, null, null, false, false, null]],
        '/admin/app/news/batch' => [[['_route' => 'admin_app_news_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_batch'], null, null, null, false, false, null]],
        '/admin/app/news/export' => [[['_route' => 'admin_app_news_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_export'], null, null, null, false, false, null]],
        '/admin/app/praticalinfos/list' => [[['_route' => 'admin_app_praticalinfos_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.pratical_infos', '_sonata_name' => 'admin_app_praticalinfos_list'], null, null, null, false, false, null]],
        '/admin/app/praticalinfos/create' => [[['_route' => 'admin_app_praticalinfos_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.pratical_infos', '_sonata_name' => 'admin_app_praticalinfos_create'], null, null, null, false, false, null]],
        '/admin/app/praticalinfos/batch' => [[['_route' => 'admin_app_praticalinfos_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.pratical_infos', '_sonata_name' => 'admin_app_praticalinfos_batch'], null, null, null, false, false, null]],
        '/admin/app/praticalinfos/export' => [[['_route' => 'admin_app_praticalinfos_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.pratical_infos', '_sonata_name' => 'admin_app_praticalinfos_export'], null, null, null, false, false, null]],
        '/admin/app/profession/list' => [[['_route' => 'admin_app_profession_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.profession', '_sonata_name' => 'admin_app_profession_list'], null, null, null, false, false, null]],
        '/admin/app/profession/create' => [[['_route' => 'admin_app_profession_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.profession', '_sonata_name' => 'admin_app_profession_create'], null, null, null, false, false, null]],
        '/admin/app/profession/batch' => [[['_route' => 'admin_app_profession_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.profession', '_sonata_name' => 'admin_app_profession_batch'], null, null, null, false, false, null]],
        '/admin/app/profession/export' => [[['_route' => 'admin_app_profession_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.profession', '_sonata_name' => 'admin_app_profession_export'], null, null, null, false, false, null]],
        '/admin/app/qualityservices/list' => [[['_route' => 'admin_app_qualityservices_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.quality_services', '_sonata_name' => 'admin_app_qualityservices_list'], null, null, null, false, false, null]],
        '/admin/app/qualityservices/create' => [[['_route' => 'admin_app_qualityservices_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.quality_services', '_sonata_name' => 'admin_app_qualityservices_create'], null, null, null, false, false, null]],
        '/admin/app/qualityservices/batch' => [[['_route' => 'admin_app_qualityservices_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.quality_services', '_sonata_name' => 'admin_app_qualityservices_batch'], null, null, null, false, false, null]],
        '/admin/app/qualityservices/export' => [[['_route' => 'admin_app_qualityservices_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.quality_services', '_sonata_name' => 'admin_app_qualityservices_export'], null, null, null, false, false, null]],
        '/admin/app/refund/list' => [[['_route' => 'admin_app_refund_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.refund', '_sonata_name' => 'admin_app_refund_list'], null, null, null, false, false, null]],
        '/admin/app/refund/create' => [[['_route' => 'admin_app_refund_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.refund', '_sonata_name' => 'admin_app_refund_create'], null, null, null, false, false, null]],
        '/admin/app/refund/batch' => [[['_route' => 'admin_app_refund_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.refund', '_sonata_name' => 'admin_app_refund_batch'], null, null, null, false, false, null]],
        '/admin/app/refund/export' => [[['_route' => 'admin_app_refund_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.refund', '_sonata_name' => 'admin_app_refund_export'], null, null, null, false, false, null]],
        '/admin/app/services/list' => [[['_route' => 'admin_app_services_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.services', '_sonata_name' => 'admin_app_services_list'], null, null, null, false, false, null]],
        '/admin/app/services/create' => [[['_route' => 'admin_app_services_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.services', '_sonata_name' => 'admin_app_services_create'], null, null, null, false, false, null]],
        '/admin/app/services/batch' => [[['_route' => 'admin_app_services_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.services', '_sonata_name' => 'admin_app_services_batch'], null, null, null, false, false, null]],
        '/admin/app/services/export' => [[['_route' => 'admin_app_services_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.services', '_sonata_name' => 'admin_app_services_export'], null, null, null, false, false, null]],
        '/admin/app/skills/list' => [[['_route' => 'admin_app_skills_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.skills', '_sonata_name' => 'admin_app_skills_list'], null, null, null, false, false, null]],
        '/admin/app/skills/create' => [[['_route' => 'admin_app_skills_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.skills', '_sonata_name' => 'admin_app_skills_create'], null, null, null, false, false, null]],
        '/admin/app/skills/batch' => [[['_route' => 'admin_app_skills_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.skills', '_sonata_name' => 'admin_app_skills_batch'], null, null, null, false, false, null]],
        '/admin/app/skills/export' => [[['_route' => 'admin_app_skills_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.skills', '_sonata_name' => 'admin_app_skills_export'], null, null, null, false, false, null]],
        '/admin/app/timeslotopen/list' => [[['_route' => 'admin_app_timeslotopen_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.time_slot_open', '_sonata_name' => 'admin_app_timeslotopen_list'], null, null, null, false, false, null]],
        '/admin/app/timeslotopen/create' => [[['_route' => 'admin_app_timeslotopen_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.time_slot_open', '_sonata_name' => 'admin_app_timeslotopen_create'], null, null, null, false, false, null]],
        '/admin/app/timeslotopen/batch' => [[['_route' => 'admin_app_timeslotopen_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.time_slot_open', '_sonata_name' => 'admin_app_timeslotopen_batch'], null, null, null, false, false, null]],
        '/admin/app/timeslotopen/export' => [[['_route' => 'admin_app_timeslotopen_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.time_slot_open', '_sonata_name' => 'admin_app_timeslotopen_export'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/blog/article/([a-z0-9\\-]*)\\-([^/]++)(*:206)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:268)'
                    .'|([A-z0-9_-]*)/(.+)(*:294)'
                .')'
                .'|/admin/(?'
                    .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:367)'
                    .'|app/(?'
                        .'|language/([^/]++)/(?'
                            .'|edit(*:407)'
                            .'|delete(*:421)'
                            .'|show(*:433)'
                        .')'
                        .'|s(?'
                            .'|ocialnetworks/([^/]++)/(?'
                                .'|edit(*:476)'
                                .'|delete(*:490)'
                                .'|show(*:502)'
                            .')'
                            .'|ervices/([^/]++)/(?'
                                .'|edit(*:535)'
                                .'|delete(*:549)'
                                .'|show(*:561)'
                            .')'
                            .'|kills/([^/]++)/(?'
                                .'|edit(*:592)'
                                .'|delete(*:606)'
                                .'|show(*:618)'
                            .')'
                        .')'
                        .'|category(?'
                            .'|drugs/([^/]++)/(?'
                                .'|edit(*:661)'
                                .'|delete(*:675)'
                                .'|show(*:687)'
                            .')'
                            .'|laboratory/([^/]++)/(?'
                                .'|edit(*:723)'
                                .'|delete(*:737)'
                                .'|show(*:749)'
                            .')'
                        .')'
                        .'|drugsconsomers/([^/]++)/(?'
                            .'|edit(*:790)'
                            .'|delete(*:804)'
                            .'|show(*:816)'
                        .')'
                        .'|expertise/([^/]++)/(?'
                            .'|edit(*:851)'
                            .'|delete(*:865)'
                            .'|show(*:877)'
                        .')'
                        .'|formdrugs/([^/]++)/(?'
                            .'|edit(*:912)'
                            .'|delete(*:926)'
                            .'|show(*:938)'
                        .')'
                        .'|meanspayment/([^/]++)/(?'
                            .'|edit(*:976)'
                            .'|delete(*:990)'
                            .'|show(*:1002)'
                        .')'
                        .'|news/([^/]++)/(?'
                            .'|edit(*:1033)'
                            .'|delete(*:1048)'
                            .'|show(*:1061)'
                        .')'
                        .'|pr(?'
                            .'|aticalinfos/([^/]++)/(?'
                                .'|edit(*:1104)'
                                .'|delete(*:1119)'
                                .'|show(*:1132)'
                            .')'
                            .'|ofession/([^/]++)/(?'
                                .'|edit(*:1167)'
                                .'|delete(*:1182)'
                                .'|show(*:1195)'
                            .')'
                        .')'
                        .'|qualityservices/([^/]++)/(?'
                            .'|edit(*:1238)'
                            .'|delete(*:1253)'
                            .'|show(*:1266)'
                        .')'
                        .'|refund/([^/]++)/(?'
                            .'|edit(*:1299)'
                            .'|delete(*:1314)'
                            .'|show(*:1327)'
                        .')'
                        .'|timeslotopen/([^/]++)/(?'
                            .'|edit(*:1366)'
                            .'|delete(*:1381)'
                            .'|show(*:1394)'
                        .')'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'article.show', '_controller' => 'App\\Controller\\BlogController::showArticle'], ['slug', 'id'], null, null, false, true, null]],
        268 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        294 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        367 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        407 => [[['_route' => 'admin_app_language_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.language', '_sonata_name' => 'admin_app_language_edit'], ['id'], null, null, false, false, null]],
        421 => [[['_route' => 'admin_app_language_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.language', '_sonata_name' => 'admin_app_language_delete'], ['id'], null, null, false, false, null]],
        433 => [[['_route' => 'admin_app_language_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.language', '_sonata_name' => 'admin_app_language_show'], ['id'], null, null, false, false, null]],
        476 => [[['_route' => 'admin_app_socialnetworks_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.social_networks', '_sonata_name' => 'admin_app_socialnetworks_edit'], ['id'], null, null, false, false, null]],
        490 => [[['_route' => 'admin_app_socialnetworks_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.social_networks', '_sonata_name' => 'admin_app_socialnetworks_delete'], ['id'], null, null, false, false, null]],
        502 => [[['_route' => 'admin_app_socialnetworks_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.social_networks', '_sonata_name' => 'admin_app_socialnetworks_show'], ['id'], null, null, false, false, null]],
        535 => [[['_route' => 'admin_app_services_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.services', '_sonata_name' => 'admin_app_services_edit'], ['id'], null, null, false, false, null]],
        549 => [[['_route' => 'admin_app_services_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.services', '_sonata_name' => 'admin_app_services_delete'], ['id'], null, null, false, false, null]],
        561 => [[['_route' => 'admin_app_services_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.services', '_sonata_name' => 'admin_app_services_show'], ['id'], null, null, false, false, null]],
        592 => [[['_route' => 'admin_app_skills_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.skills', '_sonata_name' => 'admin_app_skills_edit'], ['id'], null, null, false, false, null]],
        606 => [[['_route' => 'admin_app_skills_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.skills', '_sonata_name' => 'admin_app_skills_delete'], ['id'], null, null, false, false, null]],
        618 => [[['_route' => 'admin_app_skills_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.skills', '_sonata_name' => 'admin_app_skills_show'], ['id'], null, null, false, false, null]],
        661 => [[['_route' => 'admin_app_categorydrugs_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.category_drugs', '_sonata_name' => 'admin_app_categorydrugs_edit'], ['id'], null, null, false, false, null]],
        675 => [[['_route' => 'admin_app_categorydrugs_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.category_drugs', '_sonata_name' => 'admin_app_categorydrugs_delete'], ['id'], null, null, false, false, null]],
        687 => [[['_route' => 'admin_app_categorydrugs_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.category_drugs', '_sonata_name' => 'admin_app_categorydrugs_show'], ['id'], null, null, false, false, null]],
        723 => [[['_route' => 'admin_app_categorylaboratory_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.category_laboratory', '_sonata_name' => 'admin_app_categorylaboratory_edit'], ['id'], null, null, false, false, null]],
        737 => [[['_route' => 'admin_app_categorylaboratory_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.category_laboratory', '_sonata_name' => 'admin_app_categorylaboratory_delete'], ['id'], null, null, false, false, null]],
        749 => [[['_route' => 'admin_app_categorylaboratory_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.category_laboratory', '_sonata_name' => 'admin_app_categorylaboratory_show'], ['id'], null, null, false, false, null]],
        790 => [[['_route' => 'admin_app_drugsconsomers_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.drugs_consomers', '_sonata_name' => 'admin_app_drugsconsomers_edit'], ['id'], null, null, false, false, null]],
        804 => [[['_route' => 'admin_app_drugsconsomers_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.drugs_consomers', '_sonata_name' => 'admin_app_drugsconsomers_delete'], ['id'], null, null, false, false, null]],
        816 => [[['_route' => 'admin_app_drugsconsomers_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.drugs_consomers', '_sonata_name' => 'admin_app_drugsconsomers_show'], ['id'], null, null, false, false, null]],
        851 => [[['_route' => 'admin_app_expertise_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.expertise', '_sonata_name' => 'admin_app_expertise_edit'], ['id'], null, null, false, false, null]],
        865 => [[['_route' => 'admin_app_expertise_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.expertise', '_sonata_name' => 'admin_app_expertise_delete'], ['id'], null, null, false, false, null]],
        877 => [[['_route' => 'admin_app_expertise_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.expertise', '_sonata_name' => 'admin_app_expertise_show'], ['id'], null, null, false, false, null]],
        912 => [[['_route' => 'admin_app_formdrugs_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.form_drugs', '_sonata_name' => 'admin_app_formdrugs_edit'], ['id'], null, null, false, false, null]],
        926 => [[['_route' => 'admin_app_formdrugs_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.form_drugs', '_sonata_name' => 'admin_app_formdrugs_delete'], ['id'], null, null, false, false, null]],
        938 => [[['_route' => 'admin_app_formdrugs_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.form_drugs', '_sonata_name' => 'admin_app_formdrugs_show'], ['id'], null, null, false, false, null]],
        976 => [[['_route' => 'admin_app_meanspayment_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.means_payment', '_sonata_name' => 'admin_app_meanspayment_edit'], ['id'], null, null, false, false, null]],
        990 => [[['_route' => 'admin_app_meanspayment_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.means_payment', '_sonata_name' => 'admin_app_meanspayment_delete'], ['id'], null, null, false, false, null]],
        1002 => [[['_route' => 'admin_app_meanspayment_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.means_payment', '_sonata_name' => 'admin_app_meanspayment_show'], ['id'], null, null, false, false, null]],
        1033 => [[['_route' => 'admin_app_news_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_edit'], ['id'], null, null, false, false, null]],
        1048 => [[['_route' => 'admin_app_news_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_delete'], ['id'], null, null, false, false, null]],
        1061 => [[['_route' => 'admin_app_news_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_show'], ['id'], null, null, false, false, null]],
        1104 => [[['_route' => 'admin_app_praticalinfos_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.pratical_infos', '_sonata_name' => 'admin_app_praticalinfos_edit'], ['id'], null, null, false, false, null]],
        1119 => [[['_route' => 'admin_app_praticalinfos_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.pratical_infos', '_sonata_name' => 'admin_app_praticalinfos_delete'], ['id'], null, null, false, false, null]],
        1132 => [[['_route' => 'admin_app_praticalinfos_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.pratical_infos', '_sonata_name' => 'admin_app_praticalinfos_show'], ['id'], null, null, false, false, null]],
        1167 => [[['_route' => 'admin_app_profession_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.profession', '_sonata_name' => 'admin_app_profession_edit'], ['id'], null, null, false, false, null]],
        1182 => [[['_route' => 'admin_app_profession_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.profession', '_sonata_name' => 'admin_app_profession_delete'], ['id'], null, null, false, false, null]],
        1195 => [[['_route' => 'admin_app_profession_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.profession', '_sonata_name' => 'admin_app_profession_show'], ['id'], null, null, false, false, null]],
        1238 => [[['_route' => 'admin_app_qualityservices_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.quality_services', '_sonata_name' => 'admin_app_qualityservices_edit'], ['id'], null, null, false, false, null]],
        1253 => [[['_route' => 'admin_app_qualityservices_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.quality_services', '_sonata_name' => 'admin_app_qualityservices_delete'], ['id'], null, null, false, false, null]],
        1266 => [[['_route' => 'admin_app_qualityservices_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.quality_services', '_sonata_name' => 'admin_app_qualityservices_show'], ['id'], null, null, false, false, null]],
        1299 => [[['_route' => 'admin_app_refund_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.refund', '_sonata_name' => 'admin_app_refund_edit'], ['id'], null, null, false, false, null]],
        1314 => [[['_route' => 'admin_app_refund_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.refund', '_sonata_name' => 'admin_app_refund_delete'], ['id'], null, null, false, false, null]],
        1327 => [[['_route' => 'admin_app_refund_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.refund', '_sonata_name' => 'admin_app_refund_show'], ['id'], null, null, false, false, null]],
        1366 => [[['_route' => 'admin_app_timeslotopen_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.time_slot_open', '_sonata_name' => 'admin_app_timeslotopen_edit'], ['id'], null, null, false, false, null]],
        1381 => [[['_route' => 'admin_app_timeslotopen_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.time_slot_open', '_sonata_name' => 'admin_app_timeslotopen_delete'], ['id'], null, null, false, false, null]],
        1394 => [
            [['_route' => 'admin_app_timeslotopen_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.time_slot_open', '_sonata_name' => 'admin_app_timeslotopen_show'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
