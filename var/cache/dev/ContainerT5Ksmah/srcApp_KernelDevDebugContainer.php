<?php

namespace ContainerT5Ksmah;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Controller\\BlogController' => 'getBlogControllerService',
            'App\\Controller\\DoctorController' => 'getDoctorControllerService',
            'App\\Controller\\MainREFMEDController' => 'getMainREFMEDControllerService',
            'App\\Controller\\PharmacieController' => 'getPharmacieControllerService',
            'App\\Controller\\RegistrationController' => 'getRegistrationControllerService',
            'App\\Controller\\SecurityController' => 'getSecurityControllerService',
            'CalendarBundle\\Controller\\CalendarController' => 'getCalendarControllerService',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController' => 'getEasyAdminControllerService',
            'FM\\ElfinderBundle\\Controller\\ElFinderController' => 'getElFinderControllerService',
            'Liip\\ImagineBundle\\Controller\\ImagineController' => 'getImagineControllerService',
            'Sonata\\AdminBundle\\Action\\DashboardAction' => 'getDashboardActionService',
            'Sonata\\AdminBundle\\Action\\SearchAction' => 'getSearchActionService',
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => 'getCreateClassCacheCommandService',
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => 'getExplainAdminCommandService',
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => 'getGenerateObjectAclCommandService',
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => 'getListAdminCommandService',
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => 'getSetupAclCommandService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'Vich\\UploaderBundle\\Naming\\Base64Namer' => 'getBase64NamerService',
            'Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer' => 'getCurrentDateTimeDirectoryNamerService',
            'Vich\\UploaderBundle\\Naming\\HashNamer' => 'getHashNamerService',
            'Vich\\UploaderBundle\\Naming\\OrignameNamer' => 'getOrignameNamerService',
            'Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer' => 'getPropertyDirectoryNamerService',
            'Vich\\UploaderBundle\\Naming\\PropertyNamer' => 'getPropertyNamerService',
            'Vich\\UploaderBundle\\Naming\\SmartUniqueNamer' => 'getSmartUniqueNamerService',
            'Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer' => 'getSubdirDirectoryNamerService',
            'Vich\\UploaderBundle\\Naming\\UniqidNamer' => 'getUniqidNamerService',
            'Vich\\UploaderBundle\\Naming\\UniqidNamer.avatar' => 'getUniqidNamer_AvatarService',
            'Vich\\UploaderBundle\\Naming\\UniqidNamer.categoriesImages' => 'getUniqidNamer_CategoriesImagesService',
            'Vich\\UploaderBundle\\Naming\\UniqidNamer.featuredImages' => 'getUniqidNamer_FeaturedImagesService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService',
            'cache.doctrine.orm.default.result' => 'getCache_Doctrine_Orm_Default_ResultService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand' => 'getSonataDumpDoctrineMetaCommandService',
            'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand' => 'getSonataListFormMappingCommandService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'easyadmin.autocomplete' => 'getEasyadmin_AutocompleteService',
            'easyadmin.command.make_admin_migration' => 'getEasyadmin_Command_MakeAdminMigrationService',
            'easyadmin.config.manager' => 'getEasyadmin_Config_ManagerService',
            'easyadmin.filter.registry' => 'getEasyadmin_Filter_RegistryService',
            'easyadmin.form.guesser.missing_doctrine_orm_type_guesser' => 'getEasyadmin_Form_Guesser_MissingDoctrineOrmTypeGuesserService',
            'easyadmin.listener.controller' => 'getEasyadmin_Listener_ControllerService',
            'easyadmin.listener.request_post_initialize' => 'getEasyadmin_Listener_RequestPostInitializeService',
            'easyadmin.paginator' => 'getEasyadmin_PaginatorService',
            'easyadmin.property_accessor' => 'getEasyadmin_PropertyAccessorService',
            'easyadmin.query_builder' => 'getEasyadmin_QueryBuilderService',
            'easyadmin.router' => 'getEasyadmin_RouterService',
            'easyadmin.security.authorization_checker' => 'getEasyadmin_Security_AuthorizationCheckerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'fm_elfinder.loader' => 'getFmElfinder_LoaderService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'http_kernel' => 'getHttpKernelService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_paginator' => 'getKnpPaginatorService',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'liip_imagine.config.stack_collection' => 'getLiipImagine_Config_StackCollectionService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService',
            'liip_imagine.filter.loader.fixed' => 'getLiipImagine_Filter_Loader_FixedService',
            'liip_imagine.filter.loader.flip' => 'getLiipImagine_Filter_Loader_FlipService',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService',
            'liip_imagine.filter.loader.resample' => 'getLiipImagine_Filter_Loader_ResampleService',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'message_bus' => 'getMessageBusService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'sonata.admin.action.append_form_field_element' => 'getSonata_Admin_Action_AppendFormFieldElementService',
            'sonata.admin.action.get_short_object_description' => 'getSonata_Admin_Action_GetShortObjectDescriptionService',
            'sonata.admin.action.retrieve_autocomplete_items' => 'getSonata_Admin_Action_RetrieveAutocompleteItemsService',
            'sonata.admin.action.retrieve_form_field_element' => 'getSonata_Admin_Action_RetrieveFormFieldElementService',
            'sonata.admin.action.set_object_field_value' => 'getSonata_Admin_Action_SetObjectFieldValueService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.block.stats' => 'getSonata_Admin_Block_StatsService',
            'sonata.admin.breadcrumbs_builder' => 'getSonata_Admin_BreadcrumbsBuilderService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.doctrine_orm.form.type.choice_field_mask' => 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.form.extension.choice' => 'getSonata_Admin_Form_Extension_ChoiceService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.global_template_registry' => 'getSonata_Admin_GlobalTemplateRegistryService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.menu.matcher.voter.active' => 'getSonata_Admin_Menu_Matcher_Voter_ActiveService',
            'sonata.admin.menu.matcher.voter.admin' => 'getSonata_Admin_Menu_Matcher_Voter_AdminService',
            'sonata.admin.menu.matcher.voter.children' => 'getSonata_Admin_Menu_Matcher_Voter_ChildrenService',
            'sonata.admin.menu_builder' => 'getSonata_Admin_MenuBuilderService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.sidebar_menu' => 'getSonata_Admin_SidebarMenuService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.global' => 'getSonata_Admin_Twig_GlobalService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService',
            'sonata.core.form.type.array_legacy' => 'getSonata_Core_Form_Type_ArrayLegacyService',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService',
            'sonata.core.form.type.boolean_legacy' => 'getSonata_Core_Form_Type_BooleanLegacyService',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService',
            'sonata.core.form.type.collection_legacy' => 'getSonata_Core_Form_Type_CollectionLegacyService',
            'sonata.core.form.type.color_legacy' => 'getSonata_Core_Form_Type_ColorLegacyService',
            'sonata.core.form.type.color_selector' => 'getSonata_Core_Form_Type_ColorSelectorService',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService',
            'sonata.core.form.type.date_picker_legacy' => 'getSonata_Core_Form_Type_DatePickerLegacyService',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService',
            'sonata.core.form.type.date_range_legacy' => 'getSonata_Core_Form_Type_DateRangeLegacyService',
            'sonata.core.form.type.date_range_picker' => 'getSonata_Core_Form_Type_DateRangePickerService',
            'sonata.core.form.type.date_range_picker_legacy' => 'getSonata_Core_Form_Type_DateRangePickerLegacyService',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService',
            'sonata.core.form.type.datetime_picker_legacy' => 'getSonata_Core_Form_Type_DatetimePickerLegacyService',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService',
            'sonata.core.form.type.datetime_range_legacy' => 'getSonata_Core_Form_Type_DatetimeRangeLegacyService',
            'sonata.core.form.type.datetime_range_picker' => 'getSonata_Core_Form_Type_DatetimeRangePickerService',
            'sonata.core.form.type.datetime_range_picker_legacy' => 'getSonata_Core_Form_Type_DatetimeRangePickerLegacyService',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService',
            'sonata.core.form.type.equal_legacy' => 'getSonata_Core_Form_Type_EqualLegacyService',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService',
            'templating' => 'getTemplatingService',
            'templating.loader' => 'getTemplating_LoaderService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'validator' => 'getValidatorService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'vich_uploader.download_handler' => 'getVichUploader_DownloadHandlerService',
            'vich_uploader.form.type.file' => 'getVichUploader_Form_Type_FileService',
            'vich_uploader.form.type.image' => 'getVichUploader_Form_Type_ImageService',
            'vich_uploader.templating.helper.uploader_helper' => 'getVichUploader_Templating_Helper_UploaderHelperService',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
        ];
        $this->aliases = [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\FilterRegistry' => 'easyadmin.filter.registry',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'liip_imagine.controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'messenger.default_bus' => 'message_bus',
            'vich_uploader.directory_namer_subdir' => 'Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer',
            'vich_uploader.namer_base64' => 'Vich\\UploaderBundle\\Naming\\Base64Namer',
            'vich_uploader.namer_directory_current_date_time' => 'Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer',
            'vich_uploader.namer_directory_property' => 'Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer',
            'vich_uploader.namer_hash' => 'Vich\\UploaderBundle\\Naming\\HashNamer',
            'vich_uploader.namer_origname' => 'Vich\\UploaderBundle\\Naming\\OrignameNamer',
            'vich_uploader.namer_property' => 'Vich\\UploaderBundle\\Naming\\PropertyNamer',
            'vich_uploader.namer_smart_unique' => 'Vich\\UploaderBundle\\Naming\\SmartUniqueNamer',
            'vich_uploader.namer_uniqid' => 'Vich\\UploaderBundle\\Naming\\UniqidNamer',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\KernelInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Kernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Kernel\\MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'\\src\\Kernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerNameParser.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\EventListener\\ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ErrorListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\container\\src\\ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\TraceableArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\RequestStack.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\cache\\src\\CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\PruneableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ResetInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\TraceableAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\AbstractTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ContractsTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\FilesystemCommonTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\FilesystemTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\FilesystemAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Marshaller\\MarshallerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Marshaller\\DefaultMarshaller.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\SessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRegistryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DependencyInjection\\DependencyInjectionExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ResolvedFormTypeFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ResolvedFormTypeFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\EventListener\\MessageLoggerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Validation.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation-contracts\\LocaleAwareInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation-contracts\\TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Util\\LegacyTranslatorProxy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ObjectInitializerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Validator\\DoctrineInitializer.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Loader\\LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Loader\\AutoMappingTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Loader\\PropertyInfoLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Validator\\DoctrineLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ContainerConstraintValidatorFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\TranslatorBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Translator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Translation\\Translator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Formatter\\MessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Formatter\\IntlFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Formatter\\ChoiceMessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Formatter\\MessageFormatter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation-contracts\\TranslatorTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\IdentityTranslator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\Profiler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\ProfilerStorageInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\FileProfilerStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Logger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Log\\DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bridge\\Logger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\LateDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\TimeDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\MemoryDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\DataCollector\\ValidatorDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\AjaxDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\ExceptionDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\LoggerDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\EventDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\DataCollector\\CacheDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\DataCollector\\SecurityDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\DataCollector\\TwigDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client\\DataCollector\\HttpClientDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\DataCollector\\DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\DataCollector\\DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\DataCollector\\MessengerDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\DataCollector\\MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\DataCollector\\MappingCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\DataCollector\\EasyAdminDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Profiler\\DataCollector\\BlockDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\ConfigDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ProfilerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\DataCollector\\RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataExtractor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Debug\\FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\stopwatch\\Stopwatch.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\TraceableControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bridge\\Processor\\DebugProcessor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RequestContext.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\RouterListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\Reader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyTypeExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyDescriptionExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyAccessExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyListExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyInfoExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyInitializableExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyInfoExtractor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-link\\EventListener\\AddLinkHeaderListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\ControllerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\expression-language\\ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\TemplateListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Templating\\TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\SecurityListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Security\\ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\TokenStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Role\\RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Role\\RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallMap.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\RememberMe\\ResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\TraceableAccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\EventListener\\FirewallListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Debug\\TraceableFirewallListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Environment.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CsrfExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\SecurityExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\AssetExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\Packages.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\PackageInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\Package.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\PathPackage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\VersionStrategy\\VersionStrategyInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\VersionStrategy\\EmptyVersionStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\Context\\ContextInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\asset\\Context\\RequestStackContext.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CodeExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\RoutingExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\YamlExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\ExpressionExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\UrlHelper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\WebLinkExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\DumpExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\string-extra\\src\\StringExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Twig\\DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Twig\\WebProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\DataDumperInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Cloner\\DumperInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\AbstractDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\CliDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\HtmlDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Renderer\\CKEditorRendererInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Twig\\CKEditorExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Renderer\\CKEditorRenderer.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Builder\\JsonBuilder.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Twig\\Extension\\UploaderExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Twig\\EasyAdminTwigExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Templating\\FilterTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Templating\\FilterExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Twig\\Extension\\FMElfinderExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Twig\\Extension\\PaginationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Helper\\Processor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Twig\\MenuExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Twig\\Helper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\RendererProviderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\PsrProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Util\\MenuManipulator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\GlobalsInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\FormTypeExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\extensions\\lib\\Twig\\Extensions\\Extension\\Text.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Twig\\Extension\\DeprecatedTextExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Twig\\Extension\\StatusExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\DeprecatedTemplateExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\TemplateExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Twig\\Extension\\BlockExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Twig\\Extension\\TemplateRegistryExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Twig\\Extension\\StringExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\AppVariable.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\RuntimeLoader\\RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\RuntimeLoader\\ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src\\MissingExtensionSuggestor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Twig\\GlobalVariables.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Profiler\\Profile.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\ExistsLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\SourceContextLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\Loader\\FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Registry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\SQLLogger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\DebugStack.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Connection.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\LoggerChain.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Logger\\DbalLogger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventSubscriber.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\EventListener\\Doctrine\\BaseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\EventListener\\Doctrine\\CleanListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Adapter\\AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Adapter\\ORM\\DoctrineORMAdapter.php';
            include_once \dirname(__DIR__, 4).'\\src\\Listener\\ImageCacheSubscriber.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Mapping\\MappedEventSubscriber.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Sluggable\\SluggableListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\AbstractTrackingListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Timestampable\\TimestampableListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\EventListener\\Doctrine\\RemoveListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\EventListener\\Doctrine\\UploadListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ArrayTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\ArrayAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Configuration.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\DoctrineProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\NamingStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\QuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\EntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\EntityListenerServiceResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\ContainerEntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Repository\\RepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ContainerRepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\ManagerConfigurator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Csp\\ContentSecurityPolicyHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Csp\\NonceGenerator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\EventListener\\WebDebugToolbarListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\HandlerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bridge\\Handler\\ConsoleHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\DumpDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Cloner\\ClonerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Cloner\\AbstractCloner.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Cloner\\VarCloner.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Server\\Connection.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\ContextProvider\\ContextProviderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\ContextProvider\\SourceContextProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\ContextProvider\\RequestContextProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\ContextProvider\\CliContextProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Storage\\StorageInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Storage\\AbstractStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Storage\\FileSystemStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Metadata\\MetadataReader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\AdvancedMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\MetadataFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\DriverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedDriverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\DriverChain.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AbstractFileDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Metadata\\Driver\\XmlDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocatorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\AdvancedFileLocatorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Driver\\FileLocator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Metadata\\Driver\\AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Metadata\\Driver\\YamlDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Cache\\CacheInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\jms\\metadata\\src\\Cache\\FileCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Mapping\\PropertyMappingFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Handler\\AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Handler\\UploadHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Injector\\FileInjectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Injector\\FileInjector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Templating\\Helper\\UploaderHelper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Configuration\\ConfigManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Configuration\\ConfigPassInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Configuration\\NormalizerConfigPass.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Configuration\\DesignConfigPass.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Configuration\\MenuConfigPass.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Configuration\\ActionConfigPass.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Configuration\\MetadataConfigPass.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Configuration\\PropertyConfigPass.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Configuration\\ViewConfigPass.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Configuration\\TemplateConfigPass.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Configuration\\DefaultConfigPass.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Router\\EasyAdminRouter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Security\\AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\EventListener\\ControllerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\FilterRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Cache\\Resolver\\ResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Cache\\Resolver\\WebPathResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Cache\\CacheManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\FilterConfiguration.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Cache\\Resolver\\NoCacheWebPathResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Cache\\SignerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Cache\\Signer.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Subscriber\\SlidingPaginationSubscriber.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Matcher\\MatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Matcher\\Matcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Provider\\MenuProviderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Provider\\ChainProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\FlashMessageExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockContextManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockContextManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockLoaderChain.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Loader\\ServiceLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockRendererInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockRenderer.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Strategy\\StrategyManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Strategy\\StrategyManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\templating\\Helper\\HelperInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\templating\\Helper\\Helper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Templating\\Helper\\BlockHelper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Cache\\HttpCacheHandlerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Cache\\HttpCacheHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Twig\\Extension\\SonataAdminExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\Pool.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Twig\\GlobalVariables.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Templating\\TemplateRegistryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Templating\\MutableTemplateRegistryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Templating\\TemplateRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client-contracts\\HttpClientInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client\\TraceableHttpClient.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client\\HttpClient.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\MessageBusInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\TraceableMessageBus.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\MessageBus.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\DataCollectorTranslator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Matcher\\UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Generator\\UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RouterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Matcher\\RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Router.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\DependencyInjection\\CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\Router.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-access\\PropertyAccessorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-access\\PropertyAccessor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Factory\\MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Validator\\ValidatorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Validator\\TraceableValidator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher-contracts\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Debug\\TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\NullHandler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /**
     * Gets the public 'App\Controller\BlogController' shared autowired service.
     *
     * @return \App\Controller\BlogController
     */
    protected function getBlogControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\BlogController.php';

        $this->services['App\\Controller\\BlogController'] = $instance = new \App\Controller\BlogController(($this->privates['App\\Repository\\ArticlesRepository'] ?? $this->getArticlesRepositoryService()), ($this->privates['App\\Repository\\CategoriesRepository'] ?? $this->getCategoriesRepositoryService()), ($this->privates['App\\Repository\\CommentairesRepository'] ?? $this->getCommentairesRepositoryService()), ($this->privates['App\\Repository\\KeywordRepository'] ?? $this->getKeywordRepositoryService()), ($this->services['knp_paginator'] ?? $this->getKnpPaginatorService()));

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\BlogController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\DoctorController' shared autowired service.
     *
     * @return \App\Controller\DoctorController
     */
    protected function getDoctorControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\DoctorController.php';

        $this->services['App\\Controller\\DoctorController'] = $instance = new \App\Controller\DoctorController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\DoctorController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\MainREFMEDController' shared autowired service.
     *
     * @return \App\Controller\MainREFMEDController
     */
    protected function getMainREFMEDControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\MainREFMEDController.php';

        $this->services['App\\Controller\\MainREFMEDController'] = $instance = new \App\Controller\MainREFMEDController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\MainREFMEDController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\PharmacieController' shared autowired service.
     *
     * @return \App\Controller\PharmacieController
     */
    protected function getPharmacieControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\PharmacieController.php';

        $this->services['App\\Controller\\PharmacieController'] = $instance = new \App\Controller\PharmacieController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\PharmacieController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\RegistrationController
     */
    protected function getRegistrationControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\RegistrationController.php';

        $this->services['App\\Controller\\RegistrationController'] = $instance = new \App\Controller\RegistrationController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\RegistrationController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\SecurityController' shared autowired service.
     *
     * @return \App\Controller\SecurityController
     */
    protected function getSecurityControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\SecurityController.php';

        $this->services['App\\Controller\\SecurityController'] = $instance = new \App\Controller\SecurityController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\SecurityController', $this));

        return $instance;
    }

    /**
     * Gets the public 'CalendarBundle\Controller\CalendarController' shared autowired service.
     *
     * @return \CalendarBundle\Controller\CalendarController
     */
    protected function getCalendarControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\tattali\\calendar-bundle\\src\\Controller\\CalendarController.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\tattali\\calendar-bundle\\src\\Serializer\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\tattali\\calendar-bundle\\src\\Serializer\\Serializer.php';

        $this->services['CalendarBundle\\Controller\\CalendarController'] = $instance = new \CalendarBundle\Controller\CalendarController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \CalendarBundle\Serializer\Serializer());

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController' shared autowired service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController
     */
    protected function getEasyAdminControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Controller\\AdminControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Controller\\EasyAdminController.php';

        $this->services['EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'easyadmin.autocomplete' => ['services', 'easyadmin.autocomplete', 'getEasyadmin_AutocompleteService', false],
            'easyadmin.config.manager' => ['services', 'easyadmin.config.manager', 'getEasyadmin_Config_ManagerService', false],
            'easyadmin.filter.registry' => ['services', 'easyadmin.filter.registry', 'getEasyadmin_Filter_RegistryService', false],
            'easyadmin.paginator' => ['services', 'easyadmin.paginator', 'getEasyadmin_PaginatorService', false],
            'easyadmin.property_accessor' => ['services', 'easyadmin.property_accessor', 'getEasyadmin_PropertyAccessorService', false],
            'easyadmin.query_builder' => ['services', 'easyadmin.query_builder', 'getEasyadmin_QueryBuilderService', false],
            'easyadmin.security.authorization_checker' => ['services', 'easyadmin.security.authorization_checker', 'getEasyadmin_Security_AuthorizationCheckerService', false],
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'message_bus' => ['services', 'message_bus', 'getMessageBusService', false],
            'messenger.default_bus' => ['services', 'message_bus', 'getMessageBusService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'templating' => ['services', 'templating', 'getTemplatingService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'easyadmin.autocomplete' => '?',
            'easyadmin.config.manager' => '?',
            'easyadmin.filter.registry' => '?',
            'easyadmin.paginator' => '?',
            'easyadmin.property_accessor' => '?',
            'easyadmin.query_builder' => '?',
            'easyadmin.security.authorization_checker' => '?',
            'event_dispatcher' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'message_bus' => '?',
            'messenger.default_bus' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'templating' => '?',
            'twig' => '?',
        ]))->withContext('EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController', $this));

        return $instance;
    }

    /**
     * Gets the public 'FM\ElfinderBundle\Controller\ElFinderController' shared service.
     *
     * @return \FM\ElfinderBundle\Controller\ElFinderController
     */
    protected function getElFinderControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Controller\\ElFinderController.php';

        $this->services['FM\\ElfinderBundle\\Controller\\ElFinderController'] = $instance = new \FM\ElfinderBundle\Controller\ElFinderController();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'Liip\ImagineBundle\Controller\ImagineController' shared service.
     *
     * @return \Liip\ImagineBundle\Controller\ImagineController
     */
    protected function getImagineControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Controller\\ImagineController.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Service\\FilterService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Config\\Controller\\ControllerConfig.php';

        $a = ($this->services['liip_imagine.data.manager'] ?? $this->getLiipImagine_Data_ManagerService());

        return $this->services['Liip\\ImagineBundle\\Controller\\ImagineController'] = new \Liip\ImagineBundle\Controller\ImagineController(new \Liip\ImagineBundle\Service\FilterService($a, ($this->services['liip_imagine.filter.manager'] ?? $this->getLiipImagine_Filter_ManagerService()), ($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService())), $a, ($this->services['liip_imagine.cache.signer'] ?? ($this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET')))), new \Liip\ImagineBundle\Config\Controller\ControllerConfig(301));
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Action\DashboardAction' shared service.
     *
     * @return \Sonata\AdminBundle\Action\DashboardAction
     */
    protected function getDashboardActionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Action\\DashboardAction.php';

        return $this->services['Sonata\\AdminBundle\\Action\\DashboardAction'] = new \Sonata\AdminBundle\Action\DashboardAction($this->parameters['sonata.admin.configuration.dashboard_blocks'], ($this->services['sonata.admin.breadcrumbs_builder'] ?? $this->getSonata_Admin_BreadcrumbsBuilderService()), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Action\SearchAction' shared service.
     *
     * @return \Sonata\AdminBundle\Action\SearchAction
     */
    protected function getSearchActionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Action\\SearchAction.php';

        return $this->services['Sonata\\AdminBundle\\Action\\SearchAction'] = new \Sonata\AdminBundle\Action\SearchAction(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.search.handler'] ?? $this->getSonata_Admin_Search_HandlerService()), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), ($this->services['sonata.admin.breadcrumbs_builder'] ?? $this->getSonata_Admin_BreadcrumbsBuilderService()), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Command\CreateClassCacheCommand' shared service.
     *
     * @return \Sonata\AdminBundle\Command\CreateClassCacheCommand
     *
     * @deprecated The "Sonata\AdminBundle\Command\CreateClassCacheCommand" service is deprecated since version sonata-project/admin-bundle 3.39.0 and will be removed in 4.0.
     */
    protected function getCreateClassCacheCommandService()
    {
        @trigger_error('The "Sonata\\AdminBundle\\Command\\CreateClassCacheCommand" service is deprecated since version sonata-project/admin-bundle 3.39.0 and will be removed in 4.0.', E_USER_DEPRECATED);

        $this->services['Sonata\\AdminBundle\\Command\\CreateClassCacheCommand'] = $instance = new \Sonata\AdminBundle\Command\CreateClassCacheCommand($this->targetDir.'', true);

        $instance->setName('cache:create-cache-class');

        return $instance;
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Command\ExplainAdminCommand' shared service.
     *
     * @return \Sonata\AdminBundle\Command\ExplainAdminCommand
     */
    protected function getExplainAdminCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Command\\ExplainAdminCommand.php';

        $this->services['Sonata\\AdminBundle\\Command\\ExplainAdminCommand'] = $instance = new \Sonata\AdminBundle\Command\ExplainAdminCommand(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['validator'] ?? $this->getValidatorService()));

        $instance->setName('sonata:admin:explain');

        return $instance;
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Command\GenerateObjectAclCommand' shared service.
     *
     * @return \Sonata\AdminBundle\Command\GenerateObjectAclCommand
     */
    protected function getGenerateObjectAclCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Command\\QuestionableCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Command\\GenerateObjectAclCommand.php';

        $this->services['Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand'] = $instance = new \Sonata\AdminBundle\Command\GenerateObjectAclCommand(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), [], ($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('sonata:admin:generate-object-acl');

        return $instance;
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Command\ListAdminCommand' shared service.
     *
     * @return \Sonata\AdminBundle\Command\ListAdminCommand
     */
    protected function getListAdminCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Command\\ListAdminCommand.php';

        $this->services['Sonata\\AdminBundle\\Command\\ListAdminCommand'] = $instance = new \Sonata\AdminBundle\Command\ListAdminCommand(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));

        $instance->setName('sonata:admin:list');

        return $instance;
    }

    /**
     * Gets the public 'Sonata\AdminBundle\Command\SetupAclCommand' shared service.
     *
     * @return \Sonata\AdminBundle\Command\SetupAclCommand
     */
    protected function getSetupAclCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Command\\SetupAclCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Util\\AdminAclManipulatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Util\\AdminAclManipulator.php';

        $this->services['Sonata\\AdminBundle\\Command\\SetupAclCommand'] = $instance = new \Sonata\AdminBundle\Command\SetupAclCommand(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.manipulator.acl.admin'] ?? ($this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder'))));

        $instance->setName('sonata:admin:setup-acl');

        return $instance;
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()), ($this->services['templating'] ?? $this->getTemplatingService()));
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\Base64Namer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\Base64Namer
     */
    protected function getBase64NamerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\NamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\Polyfill\\FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\Base64Namer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\Base64Namer'] = new \Vich\UploaderBundle\Naming\Base64Namer();
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer
     */
    protected function getCurrentDateTimeDirectoryNamerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\DirectoryNamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\CurrentDateTimeDirectoryNamer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\DateTimeHelper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\CurrentDateTimeHelper.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer'] = new \Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer(new \Vich\UploaderBundle\Naming\CurrentDateTimeHelper(), ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()));
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\HashNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\HashNamer
     */
    protected function getHashNamerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\NamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\Polyfill\\FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\HashNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\HashNamer'] = new \Vich\UploaderBundle\Naming\HashNamer();
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\OrignameNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\OrignameNamer
     */
    protected function getOrignameNamerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\NamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\OrignameNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\OrignameNamer'] = new \Vich\UploaderBundle\Naming\OrignameNamer(($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\PropertyDirectoryNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\PropertyDirectoryNamer
     */
    protected function getPropertyDirectoryNamerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\DirectoryNamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\PropertyDirectoryNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer'] = new \Vich\UploaderBundle\Naming\PropertyDirectoryNamer(($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()), ($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\PropertyNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\PropertyNamer
     */
    protected function getPropertyNamerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\NamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\Polyfill\\FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\PropertyNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\PropertyNamer'] = new \Vich\UploaderBundle\Naming\PropertyNamer(($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\SmartUniqueNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\SmartUniqueNamer
     */
    protected function getSmartUniqueNamerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\NamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\SmartUniqueNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\SmartUniqueNamer'] = new \Vich\UploaderBundle\Naming\SmartUniqueNamer(($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\SubdirDirectoryNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\SubdirDirectoryNamer
     */
    protected function getSubdirDirectoryNamerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\DirectoryNamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\SubdirDirectoryNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer'] = new \Vich\UploaderBundle\Naming\SubdirDirectoryNamer();
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    protected function getUniqidNamerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\NamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\Polyfill\\FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\UniqidNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\UniqidNamer'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer.avatar' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    protected function getUniqidNamer_AvatarService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\NamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\Polyfill\\FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\UniqidNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\UniqidNamer.avatar'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer.categoriesImages' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    protected function getUniqidNamer_CategoriesImagesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\NamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\Polyfill\\FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\UniqidNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\UniqidNamer.categoriesImages'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer.featuredImages' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    protected function getUniqidNamer_FeaturedImagesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\NamerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\Polyfill\\FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Naming\\UniqidNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\UniqidNamer.featuredImages'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('bYXi+8xbDb', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService())]);
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'cache.doctrine.orm.default.metadata' => ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()), 'cache.doctrine.orm.default.result' => ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()), 'cache.doctrine.orm.default.query' => ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()), 'cache.easyadmin' => ($this->privates['cache.easyadmin'] ?? $this->getCache_EasyadminService())]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('IG7OZML4i2', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'cache.easyadmin' => ($this->privates['cache.easyadmin'] ?? $this->getCache_EasyadminService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['templating.cache_warmer.template_paths'] ?? $this->getTemplating_CacheWarmer_TemplatePathsService());
            yield 1 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 2 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 3 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 4 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 5 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->getSerializer_Mapping_CacheWarmerService());
            yield 6 => ($this->privates['twig.cache_warmer'] ?? $this->getTwig_CacheWarmerService());
            yield 7 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
            yield 8 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
            yield 9 => ($this->services['sonata.admin.route.cache_warmup'] ?? $this->getSonata_Admin_Route_CacheWarmupService());
        }, 10), true, ($this->targetDir.''.'/srcApp_KernelDevDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command.public_alias.Sonata\CoreBundle\Command\SonataDumpDoctrineMetaCommand' shared service.
     *
     * @return \Sonata\CoreBundle\Command\SonataDumpDoctrineMetaCommand
     */
    protected function getSonataDumpDoctrineMetaCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand.php';

        return $this->services['console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand'] = new \Sonata\CoreBundle\Command\SonataDumpDoctrineMetaCommand();
    }

    /**
     * Gets the public 'console.command.public_alias.Sonata\CoreBundle\Command\SonataListFormMappingCommand' shared service.
     *
     * @return \Sonata\CoreBundle\Command\SonataListFormMappingCommand
     */
    protected function getSonataListFormMappingCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Command\\SonataListFormMappingCommand.php';

        return $this->services['console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand'] = new \Sonata\CoreBundle\Command\SonataListFormMappingCommand();
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\CommandLoader\\CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\CommandLoader\\ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => ['services', 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand', 'getCreateClassCacheCommandService', false],
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => ['services', 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand', 'getExplainAdminCommandService', false],
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => ['services', 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand', 'getGenerateObjectAclCommandService', false],
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => ['services', 'Sonata\\AdminBundle\\Command\\ListAdminCommand', 'getListAdminCommandService', false],
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => ['services', 'Sonata\\AdminBundle\\Command\\SetupAclCommand', 'getSetupAclCommandService', false],
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => ['privates', 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand', 'getDebugBlocksCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.messenger_consume_messages' => ['privates', 'console.command.messenger_consume_messages', 'getConsole_Command_MessengerConsumeMessagesService', false],
            'console.command.messenger_debug' => ['privates', 'console.command.messenger_debug', 'getConsole_Command_MessengerDebugService', false],
            'console.command.messenger_setup_transports' => ['privates', 'console.command.messenger_setup_transports', 'getConsole_Command_MessengerSetupTransportsService', false],
            'console.command.messenger_stop_workers' => ['privates', 'console.command.messenger_stop_workers', 'getConsole_Command_MessengerStopWorkersService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.fixtures_load_command' => ['privates', 'doctrine.fixtures_load_command', 'getDoctrine_FixturesLoadCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'easyadmin.command.make_admin_migration' => ['services', 'easyadmin.command.make_admin_migration', 'getEasyadmin_Command_MakeAdminMigrationService', false],
            'fm_elfinder.command.installer' => ['privates', 'fm_elfinder.command.installer', 'getFmElfinder_Command_InstallerService', false],
            'fos_ck_editor.command.installer' => ['privates', 'fos_ck_editor.command.installer', 'getFosCkEditor_Command_InstallerService', false],
            'liip_imagine.command.cache_remove' => ['privates', 'liip_imagine.command.cache_remove', 'getLiipImagine_Command_CacheRemoveService', false],
            'liip_imagine.command.cache_resolve' => ['privates', 'liip_imagine.command.cache_resolve', 'getLiipImagine_Command_CacheResolveService', false],
            'maker.auto_command.make_auth' => ['privates', 'maker.auto_command.make_auth', 'getMaker_AutoCommand_MakeAuthService', false],
            'maker.auto_command.make_command' => ['privates', 'maker.auto_command.make_command', 'getMaker_AutoCommand_MakeCommandService', false],
            'maker.auto_command.make_controller' => ['privates', 'maker.auto_command.make_controller', 'getMaker_AutoCommand_MakeControllerService', false],
            'maker.auto_command.make_crud' => ['privates', 'maker.auto_command.make_crud', 'getMaker_AutoCommand_MakeCrudService', false],
            'maker.auto_command.make_entity' => ['privates', 'maker.auto_command.make_entity', 'getMaker_AutoCommand_MakeEntityService', false],
            'maker.auto_command.make_fixtures' => ['privates', 'maker.auto_command.make_fixtures', 'getMaker_AutoCommand_MakeFixturesService', false],
            'maker.auto_command.make_form' => ['privates', 'maker.auto_command.make_form', 'getMaker_AutoCommand_MakeFormService', false],
            'maker.auto_command.make_functional_test' => ['privates', 'maker.auto_command.make_functional_test', 'getMaker_AutoCommand_MakeFunctionalTestService', false],
            'maker.auto_command.make_migration' => ['privates', 'maker.auto_command.make_migration', 'getMaker_AutoCommand_MakeMigrationService', false],
            'maker.auto_command.make_registration_form' => ['privates', 'maker.auto_command.make_registration_form', 'getMaker_AutoCommand_MakeRegistrationFormService', false],
            'maker.auto_command.make_serializer_encoder' => ['privates', 'maker.auto_command.make_serializer_encoder', 'getMaker_AutoCommand_MakeSerializerEncoderService', false],
            'maker.auto_command.make_serializer_normalizer' => ['privates', 'maker.auto_command.make_serializer_normalizer', 'getMaker_AutoCommand_MakeSerializerNormalizerService', false],
            'maker.auto_command.make_sonata_admin' => ['privates', 'maker.auto_command.make_sonata_admin', 'getMaker_AutoCommand_MakeSonataAdminService', false],
            'maker.auto_command.make_subscriber' => ['privates', 'maker.auto_command.make_subscriber', 'getMaker_AutoCommand_MakeSubscriberService', false],
            'maker.auto_command.make_twig_extension' => ['privates', 'maker.auto_command.make_twig_extension', 'getMaker_AutoCommand_MakeTwigExtensionService', false],
            'maker.auto_command.make_unit_test' => ['privates', 'maker.auto_command.make_unit_test', 'getMaker_AutoCommand_MakeUnitTestService', false],
            'maker.auto_command.make_user' => ['privates', 'maker.auto_command.make_user', 'getMaker_AutoCommand_MakeUserService', false],
            'maker.auto_command.make_validator' => ['privates', 'maker.auto_command.make_validator', 'getMaker_AutoCommand_MakeValidatorService', false],
            'maker.auto_command.make_voter' => ['privates', 'maker.auto_command.make_voter', 'getMaker_AutoCommand_MakeVoterService', false],
            'monolog.command.server_log' => ['privates', 'monolog.command.server_log', 'getMonolog_Command_ServerLogService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
            'var_dumper.command.server_dump' => ['privates', 'var_dumper.command.server_dump', 'getVarDumper_Command_ServerDumpService', false],
            'vich_uploader.command.mapping_debug' => ['privates', 'vich_uploader.command.mapping_debug', 'getVichUploader_Command_MappingDebugService', false],
            'vich_uploader.command.mapping_debug_class' => ['privates', 'vich_uploader.command.mapping_debug_class', 'getVichUploader_Command_MappingDebugClassService', false],
            'vich_uploader.command.mapping_list_classes' => ['privates', 'vich_uploader.command.mapping_list_classes', 'getVichUploader_Command_MappingListClassesService', false],
        ], [
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand',
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand',
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand',
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => 'Sonata\\AdminBundle\\Command\\ListAdminCommand',
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => 'Sonata\\AdminBundle\\Command\\SetupAclCommand',
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.messenger_consume_messages' => 'Symfony\\Component\\Messenger\\Command\\ConsumeMessagesCommand',
            'console.command.messenger_debug' => 'Symfony\\Component\\Messenger\\Command\\DebugCommand',
            'console.command.messenger_setup_transports' => 'Symfony\\Component\\Messenger\\Command\\SetupTransportsCommand',
            'console.command.messenger_stop_workers' => 'Symfony\\Component\\Messenger\\Command\\StopWorkersCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.fixtures_load_command' => 'Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand',
            'easyadmin.command.make_admin_migration' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand',
            'fm_elfinder.command.installer' => 'FM\\ElfinderBundle\\Command\\ElFinderInstallerCommand',
            'fos_ck_editor.command.installer' => 'FOS\\CKEditorBundle\\Command\\CKEditorInstallerCommand',
            'liip_imagine.command.cache_remove' => 'Liip\\ImagineBundle\\Command\\RemoveCacheCommand',
            'liip_imagine.command.cache_resolve' => 'Liip\\ImagineBundle\\Command\\ResolveCacheCommand',
            'maker.auto_command.make_auth' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_command' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_controller' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_crud' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_entity' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_fixtures' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_functional_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_migration' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_registration_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_encoder' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_normalizer' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_sonata_admin' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_subscriber' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_twig_extension' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_unit_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_user' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_validator' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_voter' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'monolog.command.server_log' => 'Symfony\\Bridge\\Monolog\\Command\\ServerLogCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
            'var_dumper.command.server_dump' => 'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand',
            'vich_uploader.command.mapping_debug' => 'Vich\\UploaderBundle\\Command\\MappingDebugCommand',
            'vich_uploader.command.mapping_debug_class' => 'Vich\\UploaderBundle\\Command\\MappingDebugClassCommand',
            'vich_uploader.command.mapping_list_classes' => 'Vich\\UploaderBundle\\Command\\MappingListClassesCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'messenger:consume' => 'console.command.messenger_consume_messages', 'messenger:consume-messages' => 'console.command.messenger_consume_messages', 'messenger:setup-transports' => 'console.command.messenger_setup_transports', 'debug:messenger' => 'console.command.messenger_debug', 'messenger:stop-workers' => 'console.command.messenger_stop_workers', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'security:encode-password' => 'security.command.user_password_encoder', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'server:dump' => 'var_dumper.command.server_dump', 'server:log' => 'monolog.command.server_log', 'ckeditor:install' => 'fos_ck_editor.command.installer', 'vich:mapping:debug-class' => 'vich_uploader.command.mapping_debug_class', 'vich:mapping:debug' => 'vich_uploader.command.mapping_debug', 'vich:mapping:list-classes' => 'vich_uploader.command.mapping_list_classes', 'make:admin:migration' => 'easyadmin.command.make_admin_migration', 'liip:imagine:cache:remove' => 'liip_imagine.command.cache_remove', 'liip:imagine:cache:resolve' => 'liip_imagine.command.cache_resolve', 'elfinder:install' => 'fm_elfinder.command.installer', 'doctrine:fixtures:load' => 'doctrine.fixtures_load_command', 'sonata:block:debug' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand', 'cache:create-cache-class' => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand', 'sonata:admin:explain' => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand', 'sonata:admin:generate-object-acl' => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand', 'sonata:admin:list' => 'Sonata\\AdminBundle\\Command\\ListAdminCommand', 'sonata:admin:setup-acl' => 'Sonata\\AdminBundle\\Command\\SetupAclCommand', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:functional-test' => 'maker.auto_command.make_functional_test', 'make:registration-form' => 'maker.auto_command.make_registration_form', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:serializer:normalizer' => 'maker.auto_command.make_serializer_normalizer', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:unit-test' => 'maker.auto_command.make_unit_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration', 'make:sonata:admin' => 'maker.auto_command.make_sonata_admin']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), 'UTF-8', ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['var_dumper.server_connection'] ?? $this->getVarDumper_ServerConnectionService()));
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();

        $c = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $c->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $c->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($c);

        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($c, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $b->addLogger(($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

        $a->setSQLLogger($b);
        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));

        $e = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();
        $f = ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService());
        $g = ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService());
        $h = new \Gedmo\Sluggable\SluggableListener();

        $i = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        $h->setAnnotationReader($i);
        $j = new \Gedmo\Timestampable\TimestampableListener();
        $j->setAnnotationReader($i);

        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('avatar', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('featuredImages', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('categoriesImages', $e, $f, $g));
        $d->addEventSubscriber(new \App\Listener\ImageCacheSubscriber(($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), ($this->services['vich_uploader.templating.helper.uploader_helper'] ?? $this->getVichUploader_Templating_Helper_UploaderHelperService())));
        $d->addEventSubscriber($h);
        $d->addEventSubscriber($j);
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('avatar', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('avatar', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('featuredImages', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('featuredImages', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('categoriesImages', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('categoriesImages', $e, $f, $g));
        $d->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driver' => 'pdo_mysql', 'driverOptions' => [], 'defaultTableOptions' => []], $a, $d, []);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();

        $c = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'\\src\\Entity'), 1 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Entity'), 2 => (\dirname(__DIR__, 4).'\\vendor\\tattali\\calendar-bundle\\src\\Entity')]);

        $b->addDriver($c, 'App\\Entity');
        $b->addDriver($c, 'Vich\\UploaderBundle\\Entity');
        $b->addDriver($c, 'CalendarBundle\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity', 'VichUploaderBundle' => 'Vich\\UploaderBundle\\Entity', 'CalendarBundle' => 'CalendarBundle\\Entity']);
        $a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService())));
        $a->setQueryCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService())));
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService())));
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\ArticlesRepository' => ['privates', 'App\\Repository\\ArticlesRepository', 'getArticlesRepositoryService', false],
            'App\\Repository\\CategoriesRepository' => ['privates', 'App\\Repository\\CategoriesRepository', 'getCategoriesRepositoryService', false],
            'App\\Repository\\CategoryDrugsRepository' => ['privates', 'App\\Repository\\CategoryDrugsRepository', 'getCategoryDrugsRepositoryService', false],
            'App\\Repository\\CategoryLaboratoryRepository' => ['privates', 'App\\Repository\\CategoryLaboratoryRepository', 'getCategoryLaboratoryRepositoryService', false],
            'App\\Repository\\CommentairesRepository' => ['privates', 'App\\Repository\\CommentairesRepository', 'getCommentairesRepositoryService', false],
            'App\\Repository\\DoctorRepository' => ['privates', 'App\\Repository\\DoctorRepository', 'getDoctorRepositoryService', false],
            'App\\Repository\\DrugsConsomersRepository' => ['privates', 'App\\Repository\\DrugsConsomersRepository', 'getDrugsConsomersRepositoryService', false],
            'App\\Repository\\DrugsRepository' => ['privates', 'App\\Repository\\DrugsRepository', 'getDrugsRepositoryService', false],
            'App\\Repository\\ExpertiseRepository' => ['privates', 'App\\Repository\\ExpertiseRepository', 'getExpertiseRepositoryService', false],
            'App\\Repository\\FormDrugsRepository' => ['privates', 'App\\Repository\\FormDrugsRepository', 'getFormDrugsRepositoryService', false],
            'App\\Repository\\KeywordRepository' => ['privates', 'App\\Repository\\KeywordRepository', 'getKeywordRepositoryService', false],
            'App\\Repository\\LaboratoryRepository' => ['privates', 'App\\Repository\\LaboratoryRepository', 'getLaboratoryRepositoryService', false],
            'App\\Repository\\LanguageRepository' => ['privates', 'App\\Repository\\LanguageRepository', 'getLanguageRepositoryService', false],
            'App\\Repository\\LocationRepository' => ['privates', 'App\\Repository\\LocationRepository', 'getLocationRepositoryService', false],
            'App\\Repository\\MeansPaymentRepository' => ['privates', 'App\\Repository\\MeansPaymentRepository', 'getMeansPaymentRepositoryService', false],
            'App\\Repository\\MembersRepository' => ['privates', 'App\\Repository\\MembersRepository', 'getMembersRepositoryService', false],
            'App\\Repository\\NewsRepository' => ['privates', 'App\\Repository\\NewsRepository', 'getNewsRepositoryService', false],
            'App\\Repository\\PharmacyRepository' => ['privates', 'App\\Repository\\PharmacyRepository', 'getPharmacyRepositoryService', false],
            'App\\Repository\\PraticalInfosRepository' => ['privates', 'App\\Repository\\PraticalInfosRepository', 'getPraticalInfosRepositoryService', false],
            'App\\Repository\\ProfessionRepository' => ['privates', 'App\\Repository\\ProfessionRepository', 'getProfessionRepositoryService', false],
            'App\\Repository\\QualityServicesRepository' => ['privates', 'App\\Repository\\QualityServicesRepository', 'getQualityServicesRepositoryService', false],
            'App\\Repository\\RefundRepository' => ['privates', 'App\\Repository\\RefundRepository', 'getRefundRepositoryService', false],
            'App\\Repository\\ServicesRepository' => ['privates', 'App\\Repository\\ServicesRepository', 'getServicesRepositoryService', false],
            'App\\Repository\\SkillsRepository' => ['privates', 'App\\Repository\\SkillsRepository', 'getSkillsRepositoryService', false],
            'App\\Repository\\SocialNetworksRepository' => ['privates', 'App\\Repository\\SocialNetworksRepository', 'getSocialNetworksRepositoryService', false],
            'App\\Repository\\TimeSlotOpenRepository' => ['privates', 'App\\Repository\\TimeSlotOpenRepository', 'getTimeSlotOpenRepositoryService', false],
            'App\\Repository\\UsersBlogRepository' => ['privates', 'App\\Repository\\UsersBlogRepository', 'getUsersBlogRepositoryService', false],
            'App\\Repository\\UsersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', false],
        ], [
            'App\\Repository\\ArticlesRepository' => '?',
            'App\\Repository\\CategoriesRepository' => '?',
            'App\\Repository\\CategoryDrugsRepository' => '?',
            'App\\Repository\\CategoryLaboratoryRepository' => '?',
            'App\\Repository\\CommentairesRepository' => '?',
            'App\\Repository\\DoctorRepository' => '?',
            'App\\Repository\\DrugsConsomersRepository' => '?',
            'App\\Repository\\DrugsRepository' => '?',
            'App\\Repository\\ExpertiseRepository' => '?',
            'App\\Repository\\FormDrugsRepository' => '?',
            'App\\Repository\\KeywordRepository' => '?',
            'App\\Repository\\LaboratoryRepository' => '?',
            'App\\Repository\\LanguageRepository' => '?',
            'App\\Repository\\LocationRepository' => '?',
            'App\\Repository\\MeansPaymentRepository' => '?',
            'App\\Repository\\MembersRepository' => '?',
            'App\\Repository\\NewsRepository' => '?',
            'App\\Repository\\PharmacyRepository' => '?',
            'App\\Repository\\PraticalInfosRepository' => '?',
            'App\\Repository\\ProfessionRepository' => '?',
            'App\\Repository\\QualityServicesRepository' => '?',
            'App\\Repository\\RefundRepository' => '?',
            'App\\Repository\\ServicesRepository' => '?',
            'App\\Repository\\SkillsRepository' => '?',
            'App\\Repository\\SocialNetworksRepository' => '?',
            'App\\Repository\\TimeSlotOpenRepository' => '?',
            'App\\Repository\\UsersBlogRepository' => '?',
            'App\\Repository\\UsersRepository' => '?',
        ])));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'easyadmin.autocomplete' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Search\Autocomplete
     */
    protected function getEasyadmin_AutocompleteService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Search\\Autocomplete.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Search\\Finder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Search\\Paginator.php';

        return $this->services['easyadmin.autocomplete'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Autocomplete(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), new \EasyCorp\Bundle\EasyAdminBundle\Search\Finder(($this->services['easyadmin.query_builder'] ?? $this->getEasyadmin_QueryBuilderService()), ($this->services['easyadmin.paginator'] ?? ($this->services['easyadmin.paginator'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Paginator()))), ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()));
    }

    /**
     * Gets the public 'easyadmin.command.make_admin_migration' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand
     */
    protected function getEasyadmin_Command_MakeAdminMigrationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Command\\MakeAdminMigrationCommand.php';

        $this->services['easyadmin.command.make_admin_migration'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), \dirname(__DIR__, 4));

        $instance->setName('make:admin:migration');

        return $instance;
    }

    /**
     * Gets the public 'easyadmin.config.manager' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Configuration\ConfigManager
     */
    protected function getEasyadmin_Config_ManagerService()
    {
        $this->services['easyadmin.config.manager'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Configuration\ConfigManager($this->parameters['easyadmin.config'], true, ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()), ($this->privates['cache.easyadmin'] ?? $this->getCache_EasyadminService()));

        $a = ($this->services['easyadmin.filter.registry'] ?? $this->getEasyadmin_Filter_RegistryService());

        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\NormalizerConfigPass($this, $a));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\DesignConfigPass('fr'));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\MenuConfigPass());
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\ActionConfigPass());
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\MetadataConfigPass(($this->services['doctrine'] ?? $this->getDoctrineService())));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\PropertyConfigPass(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), $a));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\ViewConfigPass());
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\TemplateConfigPass(($this->privates['twig.loader.filesystem'] ?? $this->getTwig_Loader_FilesystemService())));
        $instance->addConfigPass(new \EasyCorp\Bundle\EasyAdminBundle\Configuration\DefaultConfigPass());

        return $instance;
    }

    /**
     * Gets the public 'easyadmin.filter.registry' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\FilterRegistry
     */
    protected function getEasyadmin_Filter_RegistryService()
    {
        return $this->services['easyadmin.filter.registry'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\FilterRegistry(['array' => 'easyadmin.filter.type.array', 'boolean' => 'easyadmin.filter.type.boolean', 'comparison' => 'easyadmin.filter.type.comparison', 'date' => 'easyadmin.filter.type.date', 'dateinterval' => 'easyadmin.filter.type.dateinterval', 'datetime' => 'easyadmin.filter.type.datetime', 'decimal' => 'easyadmin.filter.type.decimal', 'choice' => 'easyadmin.filter.type.choice', 'entity' => 'easyadmin.filter.type.entity', 'float' => 'easyadmin.filter.type.float', 'integer' => 'easyadmin.filter.type.integer', 'text' => 'easyadmin.filter.type.text', 'textarea' => 'easyadmin.filter.type.textarea', 'time' => 'easyadmin.filter.type.time'], new RewindableGenerator(function () {
            yield 0 => ($this->privates['easyadmin.filter.type_guesser.doctrine'] ?? $this->getEasyadmin_Filter_TypeGuesser_DoctrineService());
        }, 1));
    }

    /**
     * Gets the public 'easyadmin.form.guesser.missing_doctrine_orm_type_guesser' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Guesser\MissingDoctrineOrmTypeGuesser
     */
    protected function getEasyadmin_Form_Guesser_MissingDoctrineOrmTypeGuesserService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Form\\DoctrineOrmTypeGuesser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Guesser\\MissingDoctrineOrmTypeGuesser.php';

        return $this->services['easyadmin.form.guesser.missing_doctrine_orm_type_guesser'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Guesser\MissingDoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the public 'easyadmin.listener.controller' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\ControllerListener
     */
    protected function getEasyadmin_Listener_ControllerService()
    {
        return $this->services['easyadmin.listener.controller'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\ControllerListener(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), ($this->privates['debug.controller_resolver'] ?? $this->getDebug_ControllerResolverService()));
    }

    /**
     * Gets the public 'easyadmin.listener.request_post_initialize' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\RequestPostInitializeListener
     */
    protected function getEasyadmin_Listener_RequestPostInitializeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\EventListener\\RequestPostInitializeListener.php';

        return $this->services['easyadmin.listener.request_post_initialize'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\RequestPostInitializeListener(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'easyadmin.paginator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Search\Paginator
     */
    protected function getEasyadmin_PaginatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Search\\Paginator.php';

        return $this->services['easyadmin.paginator'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Paginator();
    }

    /**
     * Gets the public 'easyadmin.property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getEasyadmin_PropertyAccessorService()
    {
        return $this->services['easyadmin.property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false), true);
    }

    /**
     * Gets the public 'easyadmin.query_builder' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Search\QueryBuilder
     */
    protected function getEasyadmin_QueryBuilderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Search\\QueryBuilder.php';

        return $this->services['easyadmin.query_builder'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\QueryBuilder(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the public 'easyadmin.router' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Router\EasyAdminRouter
     */
    protected function getEasyadmin_RouterService()
    {
        return $this->services['easyadmin.router'] = new \EasyCorp\Bundle\EasyAdminBundle\Router\EasyAdminRouter(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'easyadmin.security.authorization_checker' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Security\AuthorizationChecker
     */
    protected function getEasyadmin_Security_AuthorizationCheckerService()
    {
        return $this->services['easyadmin.security.authorization_checker'] = new \EasyCorp\Bundle\EasyAdminBundle\Security\AuthorizationChecker(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ErrorController.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\SerializerErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\ErrorRenderer\\TwigErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($this->services['serializer'] ?? $this->getSerializerService()), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, true)), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true)));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(new \Monolog\Handler\NullHandler());
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->services['easyadmin.listener.controller'] ?? $this->getEasyadmin_Listener_ControllerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('easy_admin.post_initialize', [0 => function () {
            return ($this->services['easyadmin.listener.request_post_initialize'] ?? $this->getEasyadmin_Listener_RequestPostInitializeService());
        }, 1 => 'initializeRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sonata.block.cache.handler.default'] ?? ($this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerMessageFailedEvent', [0 => function () {
            return ($this->privates['messenger.retry.send_failed_message_for_retry_listener'] ?? $this->getMessenger_Retry_SendFailedMessageForRetryListenerService());
        }, 1 => 'onMessageFailed'], 100);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerStartedEvent', [0 => function () {
            return ($this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] ?? $this->getMessenger_Listener_StopWorkerOnRestartSignalListenerService());
        }, 1 => 'onWorkerStarted'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerRunningEvent', [0 => function () {
            return ($this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] ?? $this->getMessenger_Listener_StopWorkerOnRestartSignalListenerService());
        }, 1 => 'onWorkerRunning'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.envelope_listener'] ?? ($this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL)));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->getDebug_Security_Voter_VoteListenerService());
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->getTwig_Mailer_MessageListenerService());
        }, 1 => 'onMessage'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerMessageHandledEvent', [0 => function () {
            return ($this->privates['doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager'] ?? $this->getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService());
        }, 1 => 'onWorkerMessageHandled'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerMessageFailedEvent', [0 => function () {
            return ($this->privates['doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager'] ?? $this->getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService());
        }, 1 => 'onWorkerMessageFailed'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->getDebug_DumpListenerService());
        }, 1 => 'configure'], 1024);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'before'], 0);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'pagination'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sortable'] ?? ($this->privates['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.filtration'] ?? ($this->privates['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'pagination'], 1);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'fm_elfinder.loader' shared service.
     *
     * @return \FM\ElfinderBundle\Loader\ElFinderLoader
     */
    protected function getFmElfinder_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Loader\\ElFinderLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Configuration\\ElFinderConfigurationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Configuration\\ElFinderConfigurationReader.php';

        return $this->services['fm_elfinder.loader'] = new \FM\ElfinderBundle\Loader\ElFinderLoader(new \FM\ElfinderBundle\Configuration\ElFinderConfigurationReader($this->parameters['fm_elfinder'], ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $this));
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormFactory.php';

        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php';

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['debug.controller_resolver'] ?? $this->getDebug_ControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->getDebug_ArgumentResolver_RequestAttributeService());
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->getDebug_ArgumentResolver_RequestService());
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->getDebug_ArgumentResolver_SessionService());
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->getDebug_Security_UserValueResolverService());
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->getDebug_ArgumentResolver_ServiceService());
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->getDebug_ArgumentResolver_DefaultService());
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->getDebug_ArgumentResolver_VariadicService());
            yield 7 => ($this->privates['debug.argument_resolver.not_tagged_controller'] ?? $this->getDebug_ArgumentResolver_NotTaggedControllerService());
        }, 8)), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
    }

    /**
     * Gets the public 'knp_menu.factory' shared service.
     *
     * @return \Knp\Menu\MenuFactory
     */
    protected function getKnpMenu_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\MenuFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Factory\\ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Integration\\Symfony\\RoutingExtension.php';

        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension(($this->services['router'] ?? $this->getRouterService())), 0);

        return $instance;
    }

    /**
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        return $this->services['knp_menu.matcher'] = new \Knp\Menu\Matcher\Matcher(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.voter.router'] ?? $this->getKnpMenu_Voter_RouterService());
            yield 1 => ($this->services['sonata.admin.menu.matcher.voter.admin'] ?? $this->getSonata_Admin_Menu_Matcher_Voter_AdminService());
            yield 2 => ($this->services['sonata.admin.menu.matcher.voter.active'] ?? ($this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter()));
        }, 3));
    }

    /**
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    protected function getKnpPaginatorService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-components\\src\\Knp\\Component\\Pager\\PaginatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-components\\src\\Knp\\Component\\Pager\\Paginator.php';

        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setDefaultPaginatorOptions(['pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true]);

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.binary.loader.default' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader
     */
    protected function getLiipImagine_Binary_Loader_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Binary\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Binary\\Loader\\FileSystemLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypes.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Binary\\Locator\\LocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Binary\\Locator\\FileSystemLocator.php';

        $a = \Symfony\Component\Mime\MimeTypes::getDefault();

        return $this->services['liip_imagine.binary.loader.default'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($a, $a, new \Liip\ImagineBundle\Binary\Locator\FileSystemLocator([0 => (\dirname(__DIR__, 4).'/public')], false));
    }

    /**
     * Gets the public 'liip_imagine.cache.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager(($this->privates['liip_imagine.filter.configuration'] ?? $this->getLiipImagine_Filter_ConfigurationService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['liip_imagine.cache.signer'] ?? ($this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET')))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'default');

        $instance->addResolver('default', ($this->services['liip_imagine.cache.resolver.default'] ?? $this->getLiipImagine_Cache_Resolver_DefaultService()));
        $instance->addResolver('no_cache', ($this->services['liip_imagine.cache.resolver.no_cache_web_path'] ?? $this->getLiipImagine_Cache_Resolver_NoCacheWebPathService()));

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.cache.resolver.default' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        return $this->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), (\dirname(__DIR__, 4).'/public'), 'media/cache');
    }

    /**
     * Gets the public 'liip_imagine.cache.resolver.no_cache_web_path' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver(($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));
    }

    /**
     * Gets the public 'liip_imagine.cache.signer' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET'));
    }

    /**
     * Gets the public 'liip_imagine.config.stack_collection' shared service.
     *
     * @return \Liip\ImagineBundle\Config\StackCollection
     */
    protected function getLiipImagine_Config_StackCollectionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Config\\StackCollection.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Config\\StackBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Config\\StackBuilder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\StackFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\StackFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Config\\FilterFactoryCollection.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\FilterFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\AutoRotateFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\BackgroundFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\Argument\\SizeFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\CropFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\Argument\\PointFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\DownscaleFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\FlipFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\GrayscaleFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\InterlaceFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\PasteFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\RelativeResizeFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\ResizeFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\RotateFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\ScaleFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\StripFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\ThumbnailFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\UpscaleFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Factory\\Config\\Filter\\WatermarkFactory.php';

        $a = new \Liip\ImagineBundle\Factory\Config\Filter\Argument\SizeFactory();
        $b = new \Liip\ImagineBundle\Factory\Config\Filter\Argument\PointFactory();

        return $this->services['liip_imagine.config.stack_collection'] = new \Liip\ImagineBundle\Config\StackCollection(new \Liip\ImagineBundle\Config\StackBuilder(new \Liip\ImagineBundle\Factory\Config\StackFactory(), new \Liip\ImagineBundle\Config\FilterFactoryCollection(new \Liip\ImagineBundle\Factory\Config\Filter\AutoRotateFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\BackgroundFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\CropFactory($a, $b), new \Liip\ImagineBundle\Factory\Config\Filter\DownscaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\FlipFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\GrayscaleFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\InterlaceFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\PasteFactory($b), new \Liip\ImagineBundle\Factory\Config\Filter\RelativeResizeFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ResizeFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\RotateFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ScaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\StripFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ThumbnailFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\UpscaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\WatermarkFactory())), $this->parameters['liip_imagine.filter_sets']);
    }

    /**
     * Gets the public 'liip_imagine.data.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager
     */
    protected function getLiipImagine_Data_ManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Data\\DataManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypes.php';

        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager(($this->privates['liip_imagine.binary.mime_type_guesser'] ?? $this->getLiipImagine_Binary_MimeTypeGuesserService()), \Symfony\Component\Mime\MimeTypes::getDefault(), ($this->privates['liip_imagine.filter.configuration'] ?? $this->getLiipImagine_Filter_ConfigurationService()), 'default', NULL);

        $instance->addLoader('default', ($this->services['liip_imagine.binary.loader.default'] ?? $this->getLiipImagine_Binary_Loader_DefaultService()));

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.downscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_DownscaleService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\ScaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\DownscaleFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.fixed' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_FixedService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\FixedFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.fixed'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.flip' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_FlipService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\FlipFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.grayscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_GrayscaleService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\GrayscaleFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.interlace' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_InterlaceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\InterlaceFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.resample' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ResampleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_ResampleService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\ResampleFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.resample'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResampleFilterLoader(($this->privates['liip_imagine.gd'] ?? $this->getLiipImagine_GdService()));
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.rotate' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_RotateService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\RotateFilterLoader.php';

        return $this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager
     */
    protected function getLiipImagine_Filter_ManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\FilterManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\CropFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\PasteFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\WatermarkFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\StripFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\ScaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\UpscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\AutoRotateFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\PostProcessor\\PostProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\PostProcessor\\AbstractPostProcessor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\PostProcessor\\JpegOptimPostProcessor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\PostProcessor\\OptiPngPostProcessor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\PostProcessor\\PngquantPostProcessor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\PostProcessor\\MozJpegPostProcessor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\GrayscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\DownscaleFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\RotateFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\FlipFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\InterlaceFilterLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Imagine\\Filter\\Loader\\FixedFilterLoader.php';

        $a = ($this->privates['liip_imagine.gd'] ?? $this->getLiipImagine_GdService());

        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager(($this->privates['liip_imagine.filter.configuration'] ?? $this->getLiipImagine_Filter_ConfigurationService()), $a, ($this->privates['liip_imagine.binary.mime_type_guesser'] ?? $this->getLiipImagine_Binary_MimeTypeGuesserService()));

        $instance->addLoader('relative_resize', new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader());
        $instance->addLoader('resize', new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader());
        $instance->addLoader('thumbnail', new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader());
        $instance->addLoader('crop', new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader());
        $instance->addLoader('grayscale', ($this->services['liip_imagine.filter.loader.grayscale'] ?? ($this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader())));
        $instance->addLoader('paste_image', new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($a, \dirname(__DIR__, 4)));
        $instance->addLoader('paste', new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($a, (\dirname(__DIR__, 4).'\\src')));
        $instance->addLoader('watermark', new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($a, (\dirname(__DIR__, 4).'\\src')));
        $instance->addLoader('watermark_image', new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($a, \dirname(__DIR__, 4)));
        $instance->addLoader('background', new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($a));
        $instance->addLoader('strip', new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader());
        $instance->addLoader('scale', new \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader());
        $instance->addLoader('upscale', new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader());
        $instance->addLoader('downscale', ($this->services['liip_imagine.filter.loader.downscale'] ?? ($this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader())));
        $instance->addLoader('auto_rotate', new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader());
        $instance->addLoader('rotate', ($this->services['liip_imagine.filter.loader.rotate'] ?? ($this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader())));
        $instance->addLoader('flip', ($this->services['liip_imagine.filter.loader.flip'] ?? ($this->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader())));
        $instance->addLoader('interlace', ($this->services['liip_imagine.filter.loader.interlace'] ?? ($this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader())));
        $instance->addLoader('resample', ($this->services['liip_imagine.filter.loader.resample'] ?? $this->getLiipImagine_Filter_Loader_ResampleService()));
        $instance->addLoader('fixed', ($this->services['liip_imagine.filter.loader.fixed'] ?? ($this->services['liip_imagine.filter.loader.fixed'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader())));
        $instance->addPostProcessor('jpegoptim', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim', true, NULL, true, NULL));
        $instance->addPostProcessor('optipng', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng', 7, true, NULL));
        $instance->addPostProcessor('pngquant', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant'));
        $instance->addPostProcessor('mozjpeg', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg'));

        return $instance;
    }

    /**
     * Gets the public 'message_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\TraceableMessageBus
     */
    protected function getMessageBusService()
    {
        return $this->services['message_bus'] = new \Symfony\Component\Messenger\TraceableMessageBus(new \Symfony\Component\Messenger\MessageBus(new RewindableGenerator(function () {
            yield 0 => ($this->privates['messenger.bus.default.middleware.traceable'] ?? $this->getMessenger_Bus_Default_Middleware_TraceableService());
            yield 1 => ($this->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] ?? ($this->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] = new \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware('messenger.bus.default')));
            yield 2 => ($this->privates['messenger.middleware.reject_redelivered_message_middleware'] ?? ($this->privates['messenger.middleware.reject_redelivered_message_middleware'] = new \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware()));
            yield 3 => ($this->privates['messenger.middleware.dispatch_after_current_bus'] ?? ($this->privates['messenger.middleware.dispatch_after_current_bus'] = new \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware()));
            yield 4 => ($this->privates['messenger.middleware.failed_message_processing_middleware'] ?? ($this->privates['messenger.middleware.failed_message_processing_middleware'] = new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware()));
            yield 5 => ($this->privates['messenger.middleware.send_message'] ?? $this->getMessenger_Middleware_SendMessageService());
            yield 6 => ($this->privates['messenger.bus.default.middleware.handle_message'] ?? $this->getMessenger_Bus_Default_Middleware_HandleMessageService());
        }, 7)));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $d->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $d->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $d->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $d->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $d->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $d->addInstance('cache.property_info', ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
        $d->addInstance('cache.messenger.restart_workers_signal', ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()));
        $d->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
        $d->addInstance('cache.doctrine.orm.default.metadata', ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
        $d->addInstance('cache.doctrine.orm.default.result', ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
        $d->addInstance('cache.doctrine.orm.default.query', ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $d->addInstance('cache.easyadmin', ($this->privates['cache.easyadmin'] ?? $this->getCache_EasyadminService()));
        $e = new \Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector();
        $e->registerClient('http_client', ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()));
        $f = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $f->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $g = new \Symfony\Component\Messenger\DataCollector\MessengerDataCollector();
        $g->registerBus('messenger.bus.default', ($this->services['message_bus'] ?? $this->getMessageBusService()));
        $h = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $h->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDir.''.'/srcApp_KernelDevDebugContainer'), $c));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), $c));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($d);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($e);
        $instance->add($f);
        $instance->add(($this->services['data_collector.dump'] ?? $this->getDataCollector_DumpService()));
        $instance->add($g);
        $instance->add(new \Symfony\Component\Mailer\DataCollector\MessageDataCollector(($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()))));
        $instance->add(new \Vich\UploaderBundle\DataCollector\MappingCollector(($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService())));
        $instance->add(new \EasyCorp\Bundle\EasyAdminBundle\DataCollector\EasyAdminDataCollector(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService())));
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector(($this->privates['sonata.block.templating.helper'] ?? $this->getSonata_Block_Templating_HelperService()), $this->parameters['sonata.block.container.types']));
        $instance->add($h);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, 'fr');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\ContainerLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\LegacyRouteLoaderContainer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\AnnotatedRouteControllerLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationDirectoryLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = ($this->privates['file_locator'] ?? $this->getFileLocatorService());
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ]))));
        $a->addLoader(($this->services['sonata.admin.route_loader'] ?? $this->getSonata_Admin_RouteLoaderService()));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, [], ['utf8' => true]);
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticationUtils.php';

        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\CsrfTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\CsrfTokenManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\UriSafeTokenGenerator.php';

        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\UserPasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\UserPasswordEncoder.php';

        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\ContextAwareEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\ContextAwareDecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Serializer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ProblemNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\JsonSerializableNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateTimeNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ConstraintViolationListNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\NameConverter\\NameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\NameConverter\\AdvancedNameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\NameConverter\\MetadataAwareNameConverter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateTimeZoneNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateIntervalNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DataUriNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ArrayDenormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\AbstractObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\ClassDiscriminatorResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\ClassDiscriminatorFromClassMetadata.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\NormalizationAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\XmlEncoder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\JsonEncoder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\YamlEncoder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\CsvEncoder.php';

        $a = ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService());

        $b = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($a);

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true), 1 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $b), 4 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 6 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->getMimeTypesService())), 7 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 8 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($a, $b, ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()), ($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($a), NULL, [])], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DependencyInjection\\ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (isset($this->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (isset($this->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
            }
            if (isset($this->privates['cache.messenger.restart_workers_signal'])) {
                yield 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? null);
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (false) {
                yield 'messenger.transport.in_memory.factory' => null;
            }
            if (isset($this->services['profiler'])) {
                yield 'profiler' => ($this->services['profiler'] ?? null);
            }
            if (isset($this->services['validator'])) {
                yield 'debug.validator' => ($this->services['validator'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($this->services['event_dispatcher'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
            if (isset($this->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
            }
            if (isset($this->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($this->privates['monolog.handler.console'] ?? null);
            }
            if (isset($this->privates['cache.easyadmin'])) {
                yield 'cache.easyadmin' => ($this->privates['cache.easyadmin'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['cache.messenger.restart_workers_signal'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (false) + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['event_dispatcher'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->privates['monolog.handler.console'])) + (int) (isset($this->privates['cache.easyadmin']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'cache.messenger.restart_workers_signal' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'messenger.transport.in_memory.factory' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'debug.validator' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'debug.event_dispatcher' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'monolog.handler.console' => [0 => 'reset'], 'cache.easyadmin' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Session.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBag.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBag.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'sonata.admin.action.append_form_field_element' shared service.
     *
     * @return \Sonata\AdminBundle\Action\AppendFormFieldElementAction
     */
    protected function getSonata_Admin_Action_AppendFormFieldElementService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Action\\AppendFormFieldElementAction.php';

        return $this->services['sonata.admin.action.append_form_field_element'] = new \Sonata\AdminBundle\Action\AppendFormFieldElementAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.helper'] ?? $this->getSonata_Admin_HelperService()));
    }

    /**
     * Gets the public 'sonata.admin.action.get_short_object_description' shared service.
     *
     * @return \Sonata\AdminBundle\Action\GetShortObjectDescriptionAction
     */
    protected function getSonata_Admin_Action_GetShortObjectDescriptionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Action\\GetShortObjectDescriptionAction.php';

        return $this->services['sonata.admin.action.get_short_object_description'] = new \Sonata\AdminBundle\Action\GetShortObjectDescriptionAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /**
     * Gets the public 'sonata.admin.action.retrieve_autocomplete_items' shared service.
     *
     * @return \Sonata\AdminBundle\Action\RetrieveAutocompleteItemsAction
     */
    protected function getSonata_Admin_Action_RetrieveAutocompleteItemsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Action\\RetrieveAutocompleteItemsAction.php';

        return $this->services['sonata.admin.action.retrieve_autocomplete_items'] = new \Sonata\AdminBundle\Action\RetrieveAutocompleteItemsAction(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /**
     * Gets the public 'sonata.admin.action.retrieve_form_field_element' shared service.
     *
     * @return \Sonata\AdminBundle\Action\RetrieveFormFieldElementAction
     */
    protected function getSonata_Admin_Action_RetrieveFormFieldElementService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Action\\RetrieveFormFieldElementAction.php';

        return $this->services['sonata.admin.action.retrieve_form_field_element'] = new \Sonata\AdminBundle\Action\RetrieveFormFieldElementAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.helper'] ?? $this->getSonata_Admin_HelperService()));
    }

    /**
     * Gets the public 'sonata.admin.action.set_object_field_value' shared service.
     *
     * @return \Sonata\AdminBundle\Action\SetObjectFieldValueAction
     */
    protected function getSonata_Admin_Action_SetObjectFieldValueService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Action\\SetObjectFieldValueAction.php';

        return $this->services['sonata.admin.action.set_object_field_value'] = new \Sonata\AdminBundle\Action\SetObjectFieldValueAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the public 'sonata.admin.audit.manager' shared service.
     *
     * @return \Sonata\AdminBundle\Model\AuditManager
     */
    protected function getSonata_Admin_Audit_ManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Model\\AuditManagerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Model\\AuditManager.php';

        return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
    }

    /**
     * Gets the public 'sonata.admin.block.admin_list' shared service.
     *
     * @return \Sonata\AdminBundle\Block\AdminListBlockService
     */
    protected function getSonata_Admin_Block_AdminListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Block\\AdminListBlockService.php';

        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService(($this->services['twig'] ?? $this->getTwigService()), NULL, ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()));
    }

    /**
     * Gets the public 'sonata.admin.block.search_result' shared service.
     *
     * @return \Sonata\AdminBundle\Block\AdminSearchBlockService
     */
    protected function getSonata_Admin_Block_SearchResultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Block\\AdminSearchBlockService.php';

        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService(($this->services['twig'] ?? $this->getTwigService()), NULL, ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.search.handler'] ?? $this->getSonata_Admin_Search_HandlerService()));
    }

    /**
     * Gets the public 'sonata.admin.block.stats' shared service.
     *
     * @return \Sonata\AdminBundle\Block\AdminStatsBlockService
     */
    protected function getSonata_Admin_Block_StatsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Block\\AdminStatsBlockService.php';

        return $this->services['sonata.admin.block.stats'] = new \Sonata\AdminBundle\Block\AdminStatsBlockService(($this->services['twig'] ?? $this->getTwigService()), NULL, ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /**
     * Gets the public 'sonata.admin.breadcrumbs_builder' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\BreadcrumbsBuilder
     */
    protected function getSonata_Admin_BreadcrumbsBuilderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\BreadcrumbsBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\BreadcrumbsBuilder.php';

        return $this->services['sonata.admin.breadcrumbs_builder'] = new \Sonata\AdminBundle\Admin\BreadcrumbsBuilder($this->parameters['sonata.admin.configuration.breadcrumbs']);
    }

    /**
     * Gets the public 'sonata.admin.builder.filter.factory' shared service.
     *
     * @return \Sonata\AdminBundle\Filter\FilterFactory
     */
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Filter\\FilterFactory.php';

        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, []);
    }

    /**
     * Gets the public 'sonata.admin.controller.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Controller\HelperController
     *
     * @deprecated The controller service "sonata.admin.controller.admin" is deprecated in favor of several action services since version 3.38.0 and will be removed in 4.0.
     */
    protected function getSonata_Admin_Controller_AdminService()
    {
        @trigger_error('The controller service "sonata.admin.controller.admin" is deprecated in favor of several action services since version 3.38.0 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.helper'] ?? $this->getSonata_Admin_HelperService()), ($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the public 'sonata.admin.doctrine_orm.form.type.choice_field_mask' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType
     */
    protected function getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\ChoiceFieldMaskType.php';

        return $this->services['sonata.admin.doctrine_orm.form.type.choice_field_mask'] = new \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType();
    }

    /**
     * Gets the public 'sonata.admin.event.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Event\AdminEventExtension
     */
    protected function getSonata_Admin_Event_ExtensionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdminExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Event\\AdminEventExtension.php';

        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the public 'sonata.admin.exporter' shared service.
     *
     * @return \Sonata\AdminBundle\Export\Exporter
     *
     * @deprecated The service "sonata.admin.exporter" is deprecated in favor of the "sonata.exporter.exporter" service since version 3.14 and will be removed in 4.0.
     */
    protected function getSonata_Admin_ExporterService()
    {
        @trigger_error('The service "sonata.admin.exporter" is deprecated in favor of the "sonata.exporter.exporter" service since version 3.14 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }

    /**
     * Gets the public 'sonata.admin.form.extension.choice' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension
     */
    protected function getSonata_Admin_Form_Extension_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Extension\\ChoiceTypeExtension.php';

        return $this->services['sonata.admin.form.extension.choice'] = new \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension();
    }

    /**
     * Gets the public 'sonata.admin.form.extension.field' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension
     */
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Extension\\Field\\Type\\FormTypeFieldExtension.php';

        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(['Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => ''], ['legacy_twig_text_extension' => false, 'html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'js_debug' => false, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'default_group' => 'default', 'default_label_catalogue' => 'SonataAdminBundle', 'default_icon' => '<i class="fa fa-folder"></i>', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'mosaic_background' => 'data:image/png;base64,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', 'javascripts' => [0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 4 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js', 20 => 'bundles/sonataadmin/sidebar.js', 21 => 'bundles/sonatacore/js/base.js'], 'stylesheets' => [0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css', 14 => 'bundles/sonatacore/css/flashmessage.css'], 'role_admin' => 'ROLE_SONATA_ADMIN', 'role_super_admin' => 'ROLE_SUPER_ADMIN', 'search' => true]);
    }

    /**
     * Gets the public 'sonata.admin.form.extension.field.mopa' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension
     */
    protected function getSonata_Admin_Form_Extension_Field_MopaService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Extension\\Field\\Type\\MopaCompatibilityTypeFieldExtension.php';

        return $this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension();
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.choice' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\ChoiceType
     */
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\ChoiceType.php';

        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.date' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateType
     */
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateType.php';

        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.daterange' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateRangeType
     */
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateRangeType.php';

        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.datetime' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeType
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateTimeType.php';

        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.datetime_range' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateTimeRangeType.php';

        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.default' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DefaultType
     */
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DefaultType.php';

        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }

    /**
     * Gets the public 'sonata.admin.form.filter.type.number' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\NumberType
     */
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\NumberType.php';

        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.type.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\AdminType
     */
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\AdminType.php';

        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.collection' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\CollectionType
     */
    protected function getSonata_Admin_Form_Type_CollectionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\CollectionType.php';

        return $this->services['sonata.admin.form.type.collection'] = new \Sonata\AdminBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_autocomplete' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelAutocompleteType
     */
    protected function getSonata_Admin_Form_Type_ModelAutocompleteService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\ModelAutocompleteType.php';

        return $this->services['sonata.admin.form.type.model_autocomplete'] = new \Sonata\AdminBundle\Form\Type\ModelAutocompleteType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_choice' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelType
     */
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\ModelType.php';

        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType(($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()));
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_hidden' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelHiddenType
     */
    protected function getSonata_Admin_Form_Type_ModelHiddenService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\ModelHiddenType.php';

        return $this->services['sonata.admin.form.type.model_hidden'] = new \Sonata\AdminBundle\Form\Type\ModelHiddenType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_list' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelListType
     */
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\ModelListType.php';

        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelListType();
    }

    /**
     * Gets the public 'sonata.admin.form.type.model_reference' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelReferenceType
     */
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\ModelReferenceType.php';

        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }

    /**
     * Gets the public 'sonata.admin.global_template_registry' shared service.
     *
     * @return \Sonata\AdminBundle\Templating\TemplateRegistry
     */
    protected function getSonata_Admin_GlobalTemplateRegistryService()
    {
        return $this->services['sonata.admin.global_template_registry'] = new \Sonata\AdminBundle\Templating\TemplateRegistry($this->parameters['sonata.admin.configuration.templates']);
    }

    /**
     * Gets the public 'sonata.admin.helper' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\AdminHelper
     */
    protected function getSonata_Admin_HelperService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminHelper.php';

        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.bc' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\BCLabelTranslatorStrategy.php';

        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.form_component' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\FormLabelTranslatorStrategy.php';

        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.native' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\NativeLabelTranslatorStrategy.php';

        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.noop' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\NoopLabelTranslatorStrategy.php';

        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.label.strategy.underscore' shared service.
     *
     * @return \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy
     */
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Translator\\UnderscoreLabelTranslatorStrategy.php';

        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }

    /**
     * Gets the public 'sonata.admin.manipulator.acl.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Util\AdminAclManipulator
     */
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Util\\AdminAclManipulatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Util\\AdminAclManipulator.php';

        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the public 'sonata.admin.menu.matcher.voter.active' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_ActiveService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Matcher\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Menu\\Matcher\\Voter\\ActiveVoter.php';

        return $this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter();
    }

    /**
     * Gets the public 'sonata.admin.menu.matcher.voter.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_AdminService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Matcher\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Menu\\Matcher\\Voter\\AdminVoter.php';

        return $this->services['sonata.admin.menu.matcher.voter.admin'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'sonata.admin.menu.matcher.voter.children' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter
     *
     * @deprecated The "sonata.admin.menu.matcher.voter.children" service is deprecated since 3.28 and will be removed in 4.0.
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_ChildrenService()
    {
        @trigger_error('The "sonata.admin.menu.matcher.voter.children" service is deprecated since 3.28 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.admin.menu.matcher.voter.children'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter(($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService()));
    }

    /**
     * Gets the public 'sonata.admin.menu_builder' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\MenuBuilder
     */
    protected function getSonata_Admin_MenuBuilderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Menu\\MenuBuilder.php';

        return $this->services['sonata.admin.menu_builder'] = new \Sonata\AdminBundle\Menu\MenuBuilder(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['knp_menu.factory'] ?? $this->getKnpMenu_FactoryService()), ($this->privates['knp_menu.menu_provider.chain'] ?? $this->getKnpMenu_MenuProvider_ChainService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the public 'sonata.admin.object.manipulator.acl.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Util\AdminObjectAclManipulator
     */
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Util\\AdminObjectAclManipulator.php';

        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the public 'sonata.admin.pool' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'Sonata Admin', 'bundles/sonataadmin/logo_title.png', ['legacy_twig_text_extension' => false, 'html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'js_debug' => false, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'default_group' => 'default', 'default_label_catalogue' => 'SonataAdminBundle', 'default_icon' => '<i class="fa fa-folder"></i>', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'mosaic_background' => 'data:image/png;base64,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', 'javascripts' => [0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 4 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js', 20 => 'bundles/sonataadmin/sidebar.js', 21 => 'bundles/sonatacore/js/base.js'], 'stylesheets' => [0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css', 14 => 'bundles/sonatacore/css/flashmessage.css'], 'role_admin' => 'ROLE_SONATA_ADMIN', 'role_super_admin' => 'ROLE_SUPER_ADMIN', 'search' => true], ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()));

        $instance->setTemplateRegistry(($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()));
        $instance->setAdminServiceIds([]);
        $instance->setAdminGroups([]);
        $instance->setAdminClasses([]);

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.route.cache' shared service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCache
     */
    protected function getSonata_Admin_Route_CacheService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Route\\RoutesCache.php';

        return $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache(($this->targetDir.''.'/sonata/admin'), true);
    }

    /**
     * Gets the public 'sonata.admin.route.cache_warmup' shared service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCacheWarmUp
     */
    protected function getSonata_Admin_Route_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Route\\RoutesCacheWarmUp.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Route\\RoutesCache.php';

        return $this->services['sonata.admin.route.cache_warmup'] = new \Sonata\AdminBundle\Route\RoutesCacheWarmUp(($this->services['sonata.admin.route.cache'] ?? ($this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache(($this->targetDir.''.'/sonata/admin'), true))), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
    }

    /**
     * Gets the public 'sonata.admin.route.default_generator' shared service.
     *
     * @return \Sonata\AdminBundle\Route\DefaultRouteGenerator
     */
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Route\\RouteGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Route\\DefaultRouteGenerator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Route\\RoutesCache.php';

        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator(($this->services['router'] ?? $this->getRouterService()), ($this->services['sonata.admin.route.cache'] ?? ($this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache(($this->targetDir.''.'/sonata/admin'), true))));
    }

    /**
     * Gets the public 'sonata.admin.route.path_info' shared service.
     *
     * @return \Sonata\AdminBundle\Route\PathInfoBuilder
     */
    protected function getSonata_Admin_Route_PathInfoService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Builder\\RouteBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Route\\PathInfoBuilder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Model\\AuditManagerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Model\\AuditManager.php';

        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder(($this->services['sonata.admin.audit.manager'] ?? ($this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this))));
    }

    /**
     * Gets the public 'sonata.admin.route.query_string' shared service.
     *
     * @return \Sonata\AdminBundle\Route\QueryStringBuilder
     */
    protected function getSonata_Admin_Route_QueryStringService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Builder\\RouteBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Route\\QueryStringBuilder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Model\\AuditManagerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Model\\AuditManager.php';

        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder(($this->services['sonata.admin.audit.manager'] ?? ($this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this))));
    }

    /**
     * Gets the public 'sonata.admin.route_loader' shared service.
     *
     * @return \Sonata\AdminBundle\Route\AdminPoolLoader
     */
    protected function getSonata_Admin_RouteLoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Route\\AdminPoolLoader.php';

        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), [], $this);
    }

    /**
     * Gets the public 'sonata.admin.search.handler' shared service.
     *
     * @return \Sonata\AdminBundle\Search\SearchHandler
     */
    protected function getSonata_Admin_Search_HandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Search\\SearchHandler.php';

        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), true);
    }

    /**
     * Gets the public 'sonata.admin.sidebar_menu' shared service.
     *
     * @return \Knp\Menu\MenuItem
     */
    protected function getSonata_Admin_SidebarMenuService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\ItemInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\MenuItem.php';

        return $this->services['sonata.admin.sidebar_menu'] = ($this->services['sonata.admin.menu_builder'] ?? $this->getSonata_Admin_MenuBuilderService())->createSidebarMenu();
    }

    /**
     * Gets the public 'sonata.admin.twig.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        $this->services['sonata.admin.twig.extension'] = $instance = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->services['translator'] ?? $this->getTranslatorService()), $this, ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));

        $instance->setXEditableTypeMapping($this->parameters['sonata.admin.twig.extension.x_editable_type_mapping']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.twig.global' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\GlobalVariables
     */
    protected function getSonata_Admin_Twig_GlobalService()
    {
        return $this->services['sonata.admin.twig.global'] = new \Sonata\AdminBundle\Twig\GlobalVariables(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOcAAADnCAYAAADl9EEgAAAXfWlDQ1BJQ0MgUHJvZmlsZQAAWAmtWWVYVU3Xnn0KOBy6u7u7u7sbgUN3NyopUkoISIoggqCCQYmIiCCCiKACBiAhkiqooAjIu0F93ufH9/779nWdvW/W3GvNmlkzs/daAMDQgg8NDUSQAxAUHBluqafJbu/gyE7wFhACKkAHhAEG7xERqmFubgz+57U9AaDDxhcih7b+J+3/bqDw9IrwAAAyh5vdPSM8gmDcAgCizSM0PBIA1KE9rpjI0EOcB2PqcNhBGNceYp/fuOMQu//Gw0cca0stmDMLACEOjw/3AQC3DsvZoz18YDskOAAwlMGefsEAULHDWNXDF+8JAIMbzBEOCgo5xDkw5nf/lx2ff2E83v0fm3i8zz/491hgTbhjbb+I0EB83NEf/5+3oMAoeL6OLlr4jguN1LSEn/TwvNH7RRpYw5gaxuK+Ufo2f7B2vK+13SEXltsHu5uawZgSxp4eEVrwXALYDhQdEGJ0aOeQk+Pppa0DY3hVQCUR0VZ/8ZV4Xy3TPxx7f7zhYcxIYU4HPhxGv/t9FBppfujDoc03wYGmxn/whne47qF9WI7AeEXoWMEY9gHBHBlufSiHfUaIevvpGsAY7hehGRp4tOYOOZbhUZaHY+GGsadXsM1f3QxPvLYRLGeG5WXAGGgBbcAO30NAIPwLB37AE37+lXv8S24F4sFHEAy8QASsccRw9UsJ/4uBLsDD+j5wu8gffc0jiReIhrX2//JG1tvX/+I/Ou7/aOiC90c2/lgQvyq+Ir73l81O9tcvjA5GG6OP0cUI/JXAPf0eRfiRf0bwaLxAFGzLC+77rz//HlXUP4x/S3/PgeWRVgDM8PvbN7A98szvH1tG/8zMn7lA8aIkUTIoTZQKShWlANhRtChGIIKSRsmjNFBqKCW4TeFf8/xH64//IsD7aK6ij7wPAB9gz+FdHekVGwnHCmiFhMaF+/n4RrJrwKeFlzC7QbCHqDC7pLiEBDg8ew45AHy1PDpTINpn/5V5LQOgDK8NotH/yvzPAdDYDwBd1n9lvE7w/hUG4OZzj6jw6N/2UIcPNMACMnilMQBWwAX44fFLAlmgBNSBDjAEZsAaOAAX4AF8YX/DQQw4DpJBOsgGeaAIlIEqcAlcAdfBLdAOusAD8Ag8AaNgHLwFs2ARrIENsA12IQgigEggKogBYoN4ICFIEpKHVCEdyBiyhBwgN8gHCoaioONQKpQNFUBlUDXUAN2E7kAPoEFoDHoNzUEr0BfoJwKJwCGoESwIXoQYQh6hgTBCWCOOIXwQYYh4RBriLKIEUYO4hmhDPEA8QYwjZhFriC0kQBIjaZEcSBGkPFILaYZ0RHojw5EnkVnIYmQNsgnZiRxAvkDOIteROygMigrFjhKBY6mPskF5oMJQJ1E5qDLUFVQbqg/1AjWH2kD9QpOgmdFCaEW0Adoe7YOOQaeji9F16FZ0P3ocvYjexmAwtBg+jBy8fh0w/pgETA6mEtOM6cGMYRYwWwQEBAwEQgQqBGYEeIJIgnSCUoJrBPcJnhMsEvwgJCZkI5Qk1CV0JAwmTCEsJmwk7CZ8TrhEuEtETsRDpEhkRuRJFEeUS1RL1En0jGiRaBdLgeXDqmCtsf7YZGwJtgnbj53CfiUmJuYkViC2IPYjTiIuIb5B/Jh4jngHR4kTxGnhnHFRuLO4elwP7jXuKwkJCS+JOokjSSTJWZIGkockMyQ/SKlIRUkNSD1JE0nLSdtIn5N+IiMi4yHTIHMhiycrJrtN9oxsnZyInJdcixxPfpK8nPwO+ST5FgUVhQSFGUUQRQ5FI8UgxTIlASUvpQ6lJ2Ua5SXKh5QLVEgqLiotKg+qVKpaqn6qRWoMNR+1AbU/dTb1deoR6g0aShppGluaWJpymns0s7RIWl5aA9pA2lzaW7QTtD/pWOg06LzoMuma6J7Tfadnolen96LPom+mH6f/ycDOoMMQwJDP0M4wzYhiFGS0YIxhvMDYz7jORM2kxOTBlMV0i+kNM4JZkNmSOYH5EvMw8xYLK4seSyhLKctDlnVWWlZ1Vn/WQtZu1hU2KjZVNj+2Qrb7bKvsNOwa7IHsJex97BsczBz6HFEc1RwjHLucfJw2nCmczZzTXFgueS5vrkKuXq4NbjZuE+7j3Fe53/AQ8cjz+PKc5xng+c7Lx2vHe5q3nXeZj57PgC+e7yrfFD8Jvxp/GH8N/0sBjIC8QIBApcCoIEJQRtBXsFzwmRBCSFbIT6hSaEwYLawgHCxcIzwpghPREIkWuSoyJ0oraiyaItou+kmMW8xRLF9sQOyXuIx4oHit+FsJSglDiRSJTokvkoKSHpLlki+lSKR0pRKlOqQ2pYWkvaQvSL+SoZIxkTkt0yuzLysnGy7bJLsixy3nJlchNylPLW8unyP/WAGtoKmQqNClsKMoqxipeEvxs5KIUoBSo9KyMp+yl3Kt8oIKpwpepVplVpVd1U31ouqsGocaXq1GbV6dS91TvU59SUNAw1/jmsYnTXHNcM1Wze9ailontHq0kdp62lnaIzqUOjY6ZTozupy6PrpXdTf0ZPQS9Hr00fpG+vn6kwYsBh4GDQYbhnKGJwz7jHBGVkZlRvPGgsbhxp0mCBNDk3MmU6Y8psGm7WbAzMDsnNm0OZ95mPldC4yFuUW5xQdLCcvjlgNWVFauVo1W29aa1rnWb234baJsem3JbJ1tG2y/22nbFdjN2ovZn7B/4sDo4OfQ4UjgaOtY57jlpONU5LToLOOc7jxxjO9Y7LFBF0aXQJd7rmSueNfbbmg3O7dGtz28Gb4Gv+Vu4F7hvuGh5XHeY81T3bPQc8VLxavAa8lbxbvAe9lHxeecz4qvmm+x77qfll+Z36a/vn+V//cAs4D6gINAu8DmIMIgt6A7wZTBAcF9IawhsSFjoUKh6aGzYYphRWEb4UbhdRFQxLGIjkhq+CNvOIo/6lTUXLRqdHn0jxjbmNuxFLHBscNxgnGZcUvxuvGXE1AJHgm9xzmOJx+fO6FxovokdNL9ZG8iV2Ja4mKSXtKVZGxyQPLTFPGUgpRvqXapnWksaUlpC6f0Tl1NJ00PT588rXS6KgOV4ZcxkimVWZr5K8szayhbPLs4ey/HI2fojMSZkjMHZ73PjuTK5l7Iw+QF503kq+VfKaAoiC9YOGdyrq2QvTCr8FuRa9FgsXRx1Xns+ajzsyXGJR2l3KV5pXtlvmXj5ZrlzRXMFZkV3ys9K59fUL/QVMVSlV3186LfxVfVetVtNbw1xZcwl6Ivfai1rR24LH+5oY6xLrtuvz64fvaK5ZW+BrmGhkbmxtyriKtRV1euOV8bva59vaNJpKm6mbY5+wa4EXVj9abbzYlbRrd6b8vfbmrhaalopWrNaoPa4to22n3bZzscOsbuGN7p7VTqbL0rere+i6Or/B7NvdxubHda98H9+PtbPaE96w98Hiz0uva+fWj/8GWfRd9Iv1H/40e6jx4OaAzcf6zyuGtQcfDOkPxQ+xPZJ23DMsOtT2Weto7IjrQ9k3vWMaow2jmmPNb9XO35gxfaLx69NHj5ZNx0fGzCZuLVpPPk7CvPV8uvA19vvol+s/s2aQo9lTVNPl08wzxT807gXfOs7Oy9Oe254Xmr+bcLHgtr7yPe7y2mfSD5ULzEttSwLLnctaK7MrrqtLq4Frq2u57+keJjxSf+Ty2f1T8Pb9hvLG6Gbx58yfnK8LX+m/S33i3zrZntoO3d71k/GH5c2ZHfGfhp93NpN2aPYK9kX2C/85fRr6mDoIODUHw4/uhbAAnfEd7eAHyph3MBBzgHGAUAS/o7NzhiAICEYA6MbSEdhAZSHkWPxmIICcQJHYhSsfdxGBI8aTs5liKQcohahqaCDtAHMIwwyTLnsayxqbPncoxxYbkVeBx4A/iC+J0FNAVZBDeFHgmXigSIqoiRiL0Tb5ZIkrSQ4pD6KH1H5pSshRyz3KJ8k0KsooYSVumFcoWKp6qw6he1dvXjGpqaOM13Wt3ajTqVuvl6J/XxBmqG9IabRsPGTSaVptVmXeYLlmgrBmtGG3JbpO2e3a4DcCRyInUmOYY6tuUy7zrq1oO/7V7nUeqZ5RXn7eNj7avpJ+0vGMARyBBEFowM/hYyHzoadje8NuJsZGJUenRrLCrOK77nODjBe1Ix0SDJKTkq5WxqUVrCKelTC+m5p80zeDKJs0A2IofiDP9Z1VzTPLt8xwLHc/aFtkXWxRbnTUuMSvXKNMtVKxQqpS6IVAleFK82qkm9NHvZoO5a/VoDRSPPVYlrSte1m0ya7W643vS9FXo7puVka0rbqfaMjuw7uZ1Fdyu66u61dPffn+yZfTDR2/zQu4++73F/8aOYAe/HxwbthiyeGA3rPdUfsX4WNnpx7PUL4pdi41oTBpM6r+Rf87whfbPzdnnq1fSDmUvvUmd95mzmTRdM3pstmn0wXFJYplueXclalV6dXbuyHv9R/xPhp4bPep8XNi5txn5x+Wr2zWTLf7v3x+mf7fvaBwd/4i+BRCFXULPoBcwGIZJIFutLXIGbJRUkiyF/RMlAFUf9klaSLoV+mlGGKZ15lJWRzZ49n6OLc4pri3ubZ5X3Kd8l/nABVUFCwZdCVcL+IjIiv0QfiZ0Vt5Ngk1iSbJKKllaRgWT6ZbPkzOSp5CcUShWdlFiUpuBV4KzKoDqpdl7dSYNXY1dzXOumdo6Ol66yHoXeB/0ugyLDaCMvY3cTX9MQsyBzdwszSyUrQWsmG1JbhO223ZL9hMNDxyancuesY/Eufq72btp4MXd6D8hj1XPcq8+71afOt9gvzT8kwCFQPYgvmAReCXOhM2HfIjgiXaNKox/EvIpdiFuP3zlOfIL1JH8iexIm6V1ya0puaniayymbdPvTfhmpmZVZ17Nbc9rOtJy9mXs9ryH/csHFc+WFRUW5xZnnU0riSkPKfMr9KpIq71cJXLxSw3epoPbF5Z160iuMDVyNgvA6kLuu2qTdbHLD4WbgrfTbl1q6W8faZtqXO752Iu/SdQndU+pWvy/Xw/EA8WC+d+Bha199f/mjvIFTj+MHw4cin2QOd43QPjsxOv2c8YXaS+tx74mkycuvnr3+9pZySmTaeCb03fnZu3PP52cW5t+vfUDD0U9eGVujWBf/KPOJ9zPZ5x8bHzYnvwx9vfOteitx2/Y73/ftH1078T+VdnF72vsrf+IvCq0hKpEuKAE0AXoTs0KwSjhPtEmMxfGQaJA6kiWTX6MYozyg5qHRofWnO0VfxdDC2M/0mPkRy13WarZYdk32nxy1nEaca1wZ3HzcvTwuPDu8hXzifEP8PgIEAvWC+oJLQunC/ML9Ih6iQLRSTFnslXgU/HXTLGksuSyVKs0q3SFjKbMue0qOTa4d/mpZVkhUpFW8qqSh9FzZQ/mTSoIqgWq5mrTahHq8BqtGh6aZ5mstX60D7Rodc10i3Yd6x/Wl9VcNagydjeiNJoyLTKxMyUwHzVLNlcy/WTRbBljxWb23rrY5Zstg+9Iu117f/sCh1THQidtp2rn4mOmxbZdCVx7XFjcNtzf4WHdO91fwOeLrpect56Pga+CH9w8KwAeqBZEHTQVfDgkKlQndC3sYnhVhHkkT+TaqKtozhjfmQ+yFOJ24qfjABOqEF8fvnug+2Zf4MOlOckNKcWpqWsgpp3Sd04IZ6IyXmaVZjtnc2bs5s2eenr2TezHvZL5TgeI5xnM7hRNFt4rPnz9TUlBaXXa7/FHFq8rVC7sXSarZa6Qu6dc6Xw6pO1mfeSWnIakRf1XuGum1L9c/Nu3cwN1kvSV527wlobWl7UeHwp3QztK7N7o67t3tHry/9UCv906fVf/WQPGg1NDL4TMjbqMGzzVeak4EviadWpsfWd36tnMY/981osN3AkYWgHPJANinA2CjBkB+HwC843DeiQXAnAQAawWA4PUGCNwwgBTn/nl/QAAJMIAYUMD1GTbAB8SBIlyjMAOOcI4cAWeXueACaALd4BmYA9/gzJEZkoD0IFcoBsqHrkGPoQ8IDIIfYYyIQFTCed4BnNdFI+8gf6H0UOdQ82gpdAb6HUYRU4rZhTOsIUI5wnoiJqJ8LDE2kxhLnIdjxNWTSJN0kaqQdpLJk90l1yd/SxFJSU55nUqbaozamnqMxozmOa0r7Q+6UnoV+hmGE4xMjJ1MLsxEzF0s0azSrF/ZbrGHc8hw7HEOcBVz+/Io85LyzvLd5s8QcBfUEOIVJhXeFfkk+l5sXLxVIkFSQnJGKkNaRvqzTIdsgVycvKeCsaK4Ep0yqYqoarm6kMYZzUGtzzqEujR6DPrMBtyG0kamxmEmJaZ9Zl8suCztrM5aD9ii7LTt0x2GnWid3Y81urx3w+Ap3DHuWx6LnlNeqz5kvkZ+Rf5LgcpBhcGfQg3DGiNwkWFRb2J0YzviRRLqTrCfLE+iTc5PxaYln9o67Z+xlpWdE3S2NZ/iHGPhx+KGEtcy2vLRyjNVehe3anJrqS9n1G1fCWj4cjXvuk4zxY3NWx9altvWOpY6F7o279M90Hro0u82YDWo9kTsqcAz2bHgFz8mUW+IpqreUc11L5IuH1/T+Nj8efeL7Dfdbez3Mz+GdpZ/Lu6+3mvZz/vlfiB+dH4cxp8ArqlRwjUHDiAIpIAK0IfrDG5whSEBZIJS0ADuwHWEabABoSFGSPwo+nFQIXQDGoE+IsgQUghHRCriFmIRyYZ0RdYi11GyqDTUOFoAnYyegmNfTgAIfAnGCXUIO4jEiBqxAthrxNLE93HmuAWSWFIi0iIyDrIbcP76liKGkpayncqW6iP1CRosTQmtCO0QXQg9HX0Pgx8jNWMPUwgzN/MUSymrPRs922v2Sg5PTnEuwPWS+ypPGq8znzScy60KDAveht9iuSKposfFIsU9JNQlcZIjUlnSRjJ0Mpuyr+UG5NsUahRzlOKVo1UyVTvUvmtIaXpqZWvX6bTp3tW7q3/PYNBwzhhhImhqa3bKvN1i3Yrb2tWm0nbGntPB37HNmeCYnUuZa7/bGL7XvcEjw9PPy9Jb38fBN8WvJ4Ak0D2oK4QxND5sOkIzsiGaLCY09kk8R0L08dGTMom1yUwphWnYUwnp6xn4zPns+DPiuYi86YKbhdHF0ue/lN4sj6pUvPDzYl2N5KXK2qU6vnrfKzca6a5WXFdp+nij9JbC7ZFWfNtuR02nRRe413DfuGezt6rP/ZHiY44h1JOnT6OfYUaznuNe1Iy7Tpq8DnxbP700yzZv/j75Q/cK3VreJ96Np18Lt3N2DHYl9y7sv/+1+Sf+KEAE1zPp4egLwbUmLWAOV5iCwAl451eDFvAYzMD7HgfxQurQMSgBKofuQXMIIjjqeEQRYhRJg/RC3kMxo5JQq2gH9FOMFuYeXE95QGhMOE0UgSXD3iC2xSFx7SRhpBKkP8j6yUspoigdqAyoDWksaA3p5OgFGGQYXZnimCNZ3Fmt2UzZTThMOI25TLgteVx5I/jO8DcKPBZcESYRkRP1FisTn5BklPKUbpbZlTOXf6qYqeygilbLU9/TNNJKhSPYrtul160/YrBrZGTcZipqds1C1LLNWstmwi7IAet4zdnWhcKN2N3V08nrvY+Sb7bfhwDLwOFgk5DnYU7hy5EJ0awxM3GPEnpOVCbaJP1MqU6zTWc7vZF5LzvnjHeuXj5DwZNC76Lt86mlFGU1FbKVT6u8q6Gailr5y+P1UQ1MjY+vJTbp3RC7pduS2FbTkdvp0EV3b/J++QOHhwR9lx9JD9wd1BmaHI4dERtFjm28WB4fm8x/zfem8u2vaZ2ZrHdP5sjmbRYuvl/5ILEUsHxx5fHq6jr6I/Mn8c/aG3ab+C+eX82/cX7b2jqzzbzd+F3he9n3nR92P9p2aHfCd9p2dn+q/0z7ObhLumu1e353dI9wT30vdu/m3so+x77DfsH+0P7+L4lfnr/O/3ry69eBxIHXQcnB8GH8I7ylJA/fHgDCacLlx5mDg6+8ABAUALCff3CwW3NwsH8JTjamAOgJ/P1/h0MyBq5xVmwcoiGOXI7D57+v/wDYS4aShLvGpgAAAdVpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iPgogICAgICAgICA8dGlmZjpDb21wcmVzc2lvbj4xPC90aWZmOkNvbXByZXNzaW9uPgogICAgICAgICA8dGlmZjpQaG90b21ldHJpY0ludGVycHJldGF0aW9uPjI8L3RpZmY6UGhvdG9tZXRyaWNJbnRlcnByZXRhdGlvbj4KICAgICAgICAgPHRpZmY6T3JpZW50YXRpb24+MTwvdGlmZjpPcmllbnRhdGlvbj4KICAgICAgPC9yZGY6RGVzY3JpcHRpb24+CiAgIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjl0tmoAACcLSURBVHgB7V0LvE1VGl/kmp5IEslrIqEQpcdIuDUeeZVL6DFRpJIk5ZVUE8pQjcTElNKQR4qiUnlWqIbkEcKQ8cgrjwpFNf6r9p3j3L32c621197n+36/c8+5e6+91rf/6/zPWnut75Hv12PCQsqRI0dC1hCfy0844QSWP39+R4V//vln9ssvvziWkX0SOkE3P5JJ/eYHFxllvXxP3NrJ54echw8fZm+//Tb74IMP2JIlS9j69evZgQMHmAR+u+lpzPnnn3+e3XbbbY76dO/enY0YMcKxjMyT+fLl431RtmxZz9XiB+QPf/iD5/JU0D8CJ510EkOfXHjhhax+/fqsZcuWrHjx4p4rKuCl5I4dO9jQoUPZmDFj2Pfff+/lksSWOXr0qOu9ffvtt65lZBZo2LAh/xL4qVO3jn50S0rZQ4cOsTVr1vDXlClTWNeuXVmLFi1Yv379WI0aNVxv03F+hhHx2WefZRUrVmRPP/10xhMTaGLEcZO9e/e6FZF6/r777vNd365du3xfQxeEQwCPOm+88Qa7+OKL2R133MG+++47xwqF5MSFzZo1Y+j4gwcPOlaSSSe9kFPnqFS1alWWnZ3tuwu2bt3q+xq6QB4CL7zwAqtZsyb78ssvhZXakhNfrnr16rF3331XeGGmnvjxxx9db10nOXv06OGqj10BIqcdKnqPbdy4kdWpU4d99tlntg3nISe+fE2bNmVffPGF7QWZftBtKgJ8dE1rS5Uqxdq3bx+oS4icgWCTfhEWVBs3bszWrVuXp+485MQ09tNPP81TkA78hoAXcu7fv18LXL169WJZWVmB2sKvNokZCOzbt4/l5OQw7IakynHknDdvHhs9enTqefqchgB+6dxEx/4hluTdtnSc9NywYYPTaTqnGYFVq1axgQMHHtfqceQMsup3XG0Z8I/byKmDmIC5b9++ofYpsUdNYhYCf/vb31jq40YuObH4s2LFCrO0NVAbN3L+9NNPyrUuXbo069y5c+B2sP+2ffv2wNfThWoQwB46tiwtySXniy++aB2jdwcEdu/e7XCWMR3kfOSRR1jBggUd9XA66bR873QdnVOPwCuvvMIsQxdOTkzFYJZH4o7Ali1bHAt52WpxrMDlZJUqVdjNN9/sUsr59MqVK50L0NnIENizZw9bvHgxb5+Tc+nSpXlWiiLTzvCGd+7cyZxWY61fPVW3gWmPm+G9W9tETjeEoj2/YMECrgAnJ01z/HWG0x6wX88QPy03adIkkDVQehvLli1LP0T/G4SAxUdOzm3bthmkmvmqLFy4UKhk0H1HYYW/nyhQoAB76qmn3Iq5noe9NDyKSMxFwFqx5eTMdE8Tv9300UcfCS8BiVRI7969WYUKFUJXjf1NL3u1oRuiCgIjYPGRk9OLMXfglhJ4IUZOkTO1CnKWL1+e9enTRwqSZP0lBUallVjfLU5OpS0lsHKMPKKpoQpywsFblmO006ifwK6K9S0ROQN236xZs2yvDLP/aFdhp06dWIMGDexOBTpmrQQGupgu0ooAkTMg3CJyYpsD4SlkyDnnnMOGDBkioypeB/bQ4JlPEg8EiJwB++mTTz4R7ncWLlw4YK3/vwxxgcaNG8dOO+20/x8M+QmODSTxQYDIGbCv8NCOQGd2UqhQIbvDvo5hdbZu3bq+rnErLBrt3a6j89EgQOQMgfs777xje3XYkfPSSy9lAwYMsK07zEEiZxj09F9L5AyBuSiMSxhyFitWjE2ePJnJXvVdvXr1ce5IIW6bLtWEAJEzBNDffPON7QJL0aJFA9WKxSQQE+FHZMu0adNkV0n1KUaAyBkS4Llz5+apwU/g4NSLEYZU9nOmVT9CMpLECwEiZ8j+siNniRIlfNfas2dPHsvU94UeLoCtJjyPSOKFAJEzZH/Nnz8/Tw1nn312nmNOB9q1a8cGDx7sVCTUOUyVSeKHAJEzZJ9hYz/dARthRLxKq1at2EsvvcSwr6lKxo8fr6pqqlchAkROCeB+/vnnx9XilZytW7dmII5KH9C1a9cy8t88rnti8w+RU0JXpX/5y5Qp4zoS3nPPPWzChAnSt0zSbwcxaUjiiQCRU0K/WZ7rVlUwfoddrJ3AGXvkyJE8yprKqSzaRsgUCtxm1wvxOEbklNBPmzdvzlOLnWM0gnMtWrQoVFjLPA05HJg5cyZDzCOSeCJA5JTQb3bp9EBES8444wyGgMHYzvCSl9G6Luw7/EBJ4ouAmpga8cUjkOZ2gaYvv/xyBtIiSU2bNm2kOUt7VRALQe+9957X4lTOQASInIo6pW3btgyvqOSZZ56JqmlqVxICNK2VAKQs52oJqvAqkB8UvqAk8UaAyCmh/0qWLCmhFnlVYNRUHXlenrZUkwgBIqcIGR/HK1eu7KO02qKIRj98+HC1jVDtWhAgckqAuX79+hJqkVMFiGnFPZVTI9USFQJEzpDIn3zyyax58+Yha5FzOfY0hw4dKqcyqiVyBIicIbugQ4cOUoNwhVEHCXV/+OGHMFXQtQYhQOQM0RlYpQUhTBAEG4N3C0lyECByhujLfv36sbPOOitEDXIu3bt3L+vYsaOcyqgWYxAgcgbsCpjhIXpB1IKsYX/5y18YZYqLuifkt0/kDIAp8pZgk192hLwAqvAICpSVPAhy5l9D5AzQR3D5SjVsD1CFlEvefPNN9vDDD0upiyoxDwEip88+6dy5M59G+rxMenF4uNx4443S66UKzUGAyOmjL+rVq2eE9c2mTZvYtddeyw4dOuRDeyoaNwSInB577Pzzz2evvfZa5M+ZCCjWqFEj7o7mUXUqFlMEiJweOg6G7Ui9UKRIEQ+l1RXBSNmsWTO2fv16dY1QzcYgQOR06YrTTz+dOy2LYgK5XC7t9M8//8z9QyltvDRIja+IyOnQRaeeeipDZi4TvE66dOnCEBOIJHMQIHIK+hoG7UjxV7NmTUEJfYexXTJ27Fh9DVJLRiBA5LTpBhATIybiAEUto0aNYoMGDYpaDWo/AgSInGmgg5hY/DGBmDNmzGDdunVL05D+zRQEiJwpPQ0vE0xlr7jiipSj0XxEigcECIPtLElmIkDk/L3fTznlFD6V/dOf/hT5N2HHjh2sRYsW7PDhw5HrQgpEhwCFxjyG/WmnncaJWbt27eh64veWjxw5wpB5jLxMIu+KyBXIeHIWLlyYvf/++0asyuLb0KdPH7Z48eLIvxikQPQIZDQ5ixYtyhBBoFq1atH3xDENsABEwaCN6AojlMhYchYrVozNnj2bVa1a1YiOQCDoTp06GaELKWEGAhlJzjPPPJPNmTPHCMsf62tw7733kjG7BQa9cwQyjpwYMefOncvgZWKKfPzxx+zVV181RR3SwxAEMmorBc+YphET34Pu3bsb8nUgNUxCIGPIWahQIb4qa4IRe+oXAEYPMDggIQTSEcgIciIgF4JgVa9ePf3+I/9/yJAhketACpiJQOLJmT9/fjZlyhR22WWXGdcD//nPf9iHH35onF6kkBkIJJ6cI0aMYE2aNDED7TQtJk2alHaE/iUE/o9AosnZo0cPhmh5pgosk0gIARECiSUnDMeffPJJ0X1HfvyXX35h//73vyPXgxQwF4FEkrNWrVrsX//6F8uXL5+xyG/evJkdPHjQWP1IsegRSBw5ESlv2rRpDL6ZJgvcwkgIAScEEkVObJlMnz6dgaCmy759+0xXkfSLGIFEkfPll182xvVr3rx57OjRo8LuxRYPCSHghEBiviGIUJeTk+N0r9rOYfS+5ppr2E033SQMM4JRnoQQcEIgEeREFPT+/fs73ae2c/Pnz8+N/YP0DcOGDbNtu3jx4rbH6SAhYCEQe3JWrFiR58o0YWUWNrLNmzdnCDViCbJfb9y40fo3971UqVK5n+kDIWCHQKzJiaBcWJlFDKCoZfXq1axhw4bshx9+OE4VpFGwy6EJnUuUKHFcWfqHEEhFINbkfOWVV1ilSpVS7yeSz+vWrWPZ2dkM0QzsZPLkyWz79u15Tl144YV5jtEBQsBCILbk7NmzJ59CWjcS1TumrA0aNGA7d+4UqoDREyvJ6WKiMX66jvR/dAjEkpyIxv74449Hh9rvLf/3v//lxLQbFdOVmzp1avohZkKM3DxK0QFjEIgdOZGSb+LEiZEnsQUxkeka714Ei0Xpo2udOnVYwYIFvVxOZTIQgdiREzazUa90WsT8+uuvfX1lsM2SKieeeCK76qqrUg/RZ0IgF4FYkfO+++7jK6K52kfwYcuWLax+/frMLzGhql3i2+uuuy6Cu6Am44BAbMh5wQUXsIEDB0aKKYiJqeymTZsC6bFixYo817Vs2dJo75k8CtMBbQjEgpxZWVncBSzK57OwxESPLl++PE/HwlIIz54khEA6ArEg5+DBgxlGzqjEesYMOmJaemNBaPfu3da/ue+m2ATnKkQfjEDAeHJeeeWVDNHQoxIQE8+YYYlp6b927VrrY+5769ataWqbiwZ9sBAwmpyYzo4ePTqyL+7WrVulEhOgI+JeumBqCwsjEkIgFQGjyQmbVBi2RyEwLJA5Ylr3YEdOnGvfvr1VhN4JAY6AseTEM+YDDzwQSTchhAhM8kRECqOUnYcK6sOWSpQLXmHuia5Vg4CR5IT715gxYyKxAtq1axcnJozZVYiInPBSadSokYomqc6YImAkOW+99VZ2ySWXaIcUcX0QwcBu0UaWMiJyon5atZWFcjLqMY6cp556Khs0aJB2dL///nvWuHFjtnLlSqVt41k21Rk7tbGmTZtGMltI1YE+m4OAceTs1asXQ3JbnXL48GGGINSfffaZ8mZ//fVXhpi1doJMaLRqa4dMZh4zipyIDKA7VyUi5LVp04alG6Wr/Do4LTTRc6dK5ONVt1Hk7NOnj/Zg0LfffjtPD6iz27788kthc1glJiEEgIAx5MSoCaLoFATfgguablm1apWwySpVqjA8d5MQAsaQE+5gOmO5jho1KrJER07kxDYSxRYiYgIBI8iJKHqdOnXS1iMI+tytWzdt7aU3BHJiYUgkFSpUEJ2i4xmEgBHkhOkaVip1yNKlS1m7du0cyaFaD2zbOD13ilarkcIBP2Qnn3wyO+GEE1SrSfVHjECBiNvnzXfs2FGLGjDLw5bJTz/9pKU9p0YWLFjAqlatalsEmbjLly/PypYty8qUKcMTM+E5NH3aj6h+3333HYOBPrxn8IJDN+IVLVu2jB06dMi2fjoYDwQiJ2flypW1WAOBkNdff71t/Ngouurtt99md955p23TiLaAl5tg9CxSpAh/pRMd02aQdNasWfy1cOFChoS9JPFBIHJy6ho1QYRPPvkk8p7BSAhLJIzgKgULSzVr1uQvbFHBZvjVV1/lqSswqpKYj0Ckz5z45UcmLtXy3HPP2QZ1Vt2uVT+mox06dOABvmCAAH3+/Oc/W6e1vOM5FotgSHW/ePFi1qpVq8j8ZLXccAIaiZScdevWVW6qh6nd/fffH0lXYeFmwIABbNu2bdzLBiOZCXLxxRezSZMmsa+++ordeOONJqhEOtggECk5kZFLpWBV9IYbbnBMYquifUwpu3TpwtavX89TExYuXFhFM6HrxKIT0kTAphg/lCRmIZBocuI508mOVUVX4Jlyzpw5bMSIESwuOTgvuugirjN8aE3I2KaiX+JYZ2TkRKQDbBWoEowIWADRKW3btuXhLxGULI6C52IYSFx99dVxVD9xOkdGTmSjViWIMavbAujRRx/ldrpxt4s9++yzuSMAMoVjek4SHQKRkRPBs1QJprPpSWxVtQWrHRjPw4g+KYJ7wkLWW2+9xa2RknJfcbuPSMiJzr/00kuVYIUMZO+8846SutMrxciCBL6YziZR4FsKSyaROWES79mke4qEnNWrV+c2orKB2LNnj9bp7NixY/lqsOz7MKm+GjVqsEWLFrFy5cqZpFZG6BIJOVXlBunRo4cw9bvs3sQzmQ4DCtl6B6kPxMQK9DnnnBPkcromIAKRkFNFRuclS5aw8ePHB4TB32WIMYuA15kk1hYRnOJJ9CAQCTmrVasm/e50BaDG9g+ms5m4kvnHP/6RzZgxgyHpL4l6BLSTE/a05557rtQ7g4cHFi5Ui7UAFPftkjA44Rl0woQJGfnjFAa3INdqJ+d5550n1VEYblAIp6lDevbsya644godTRndBswuM21aH0WHaCcnAljJlHHjxrHVq1fLrNK2LmzOYxGI5DcEsK9br149gkMhAtrJCedqWYJRE4l1dcjQoUNpQz4FaMv4omjRoilH6aNMBLSTE6t+smTq1Klsw4YNsqoT1nPZZZfxwNPCAhl6Aiu3w4cPz9C7V3/b2skpcyl+2LBh6hE61gJM2UjsEYB1FGIekchHQDs5S5YsKeUu4NGPl2pBtjNkHiMRIzBy5Mg8wcfEpemMVwS0k1PWyIlQHzqkd+/eOpqJdRuwHMJKNolcBLQG+MI+oQwHZEQ4mDJlilwkbGrDCi3S8pkgCLeCCHrwtsFCGEKgwCAdL5ADW1RYpIlKHnzwQR6KZefOnVGpkLh2tZITga5kBEN+/fXXGdL2qRbkbpGhrww9582bx5ysoE466SSGiAbYh0UI0Nq1a8to1nMdCHb90EMPaXU88KxcTAtq/amVZfalK/mQrrCd+O4gbKfTPqrbKjcCSGNkxZYPCAozQ5BF50gGvGTMjGLKJelqx46ce/fuZRhFVAu2T1R7YWCKiq0ITEnhDIA9W0RwtxM3cqZfgyjwTzzxBHf16tq1K/vmm2/Si0j/Hz++9OwpD9bYkROG1zoil+fk5MhDOa0mkPKxxx7jqRbg5pYahEyUQ8UvOa0mEen+H//4Bzv//PP5u1MCJeuaMO9ISIUpNkl4BLSSMz3XRxD1QU4dguc22QJiwKMFIyXIuX///jxNiEwRzzrrrFDeIFhEwwgKkzvkjFEliN6XKX6uqjC06tVKTiTeCSP4csPpV7XAayboSCXS7euvv+ZR7TCyOJFDNHKiXhmpAT/++GNWq1Ytpakp7rrrLhEMdNwHAlrJGTbr1fLlyxmeOVVLdna21CYQ1wgJcefPn+9arxM5K1as6Hq9lwJ4/sQIqirWEu5Vhc+ul3tLUhmt5Ay7/aHDZxOdKysyIGYK2P/DNO/gwYOevjc6yAlFjhw5whDRYebMmZ708lsIOVBJwiGglZxhR85PP/003N16vFrGHiEWYrCo9NRTT3ls9bdiyLEpwgmLOjLl6NGjPKERprqyJakRCWXj5FSfVnKGHTmR00O1IK9J2Ej0GCURNBtxX/0KnqvXrFlje5mKqSIIisWvzZs327YZ9GDp0qUZoiySBEdAKzmxBXLgwIFA2mI0QWIg1QIrmzCCqWzr1q3Z7NmzA1ezcuVK22vhC6vCRA8hRTHFxVRXpiAPKUlwBLSSE2pu3749kLZIV6dDwk4dEW0e2aTDCBa+7ARbUbIWhdLr/+KLLxhSSsgUImc4NGNDTtFUL9zt570aEeaCClynXnzxxaCX514nIicKqJjaWg0/+eSTPB2g9X/Yd0T1l7G3HVaPuF4fG3KmWtGoBBs5K4PIihUrpCXpRV0iUUlOPO/efffdDO8ypECBAgyJekmCIRAbcsJWVIcEsafFogoyRMt6ZoOx+u7du21vF3uIKmXp0qU89KWsNi6//HJZVWVcPdrJGXRRB6nbdcjpp5/uuxkkynXan/Rd4bELRKOnypHT0rNv377Sfmho5LRQ9f+unZwi21E31XW5PvmNJrdr1y4lMYZEz50wKyxUqJAbXKHOY5YiK/Fw1apVQ+mSyRfHhpxBt2D8di72Of3IM888oyQXqIic0A1xjVQL/EJlCOyBTXFYl3E/OuvQTk48SwWxj4VXhQ7x80XCD4aqWEZO5JRhweSGJabpc+fOdSvmej4rK4sFXWRzrTzhBbSTE3gGeT7TlanaT38jca6qHw0YImChyU50kBPtvvzyy3bN+z4GayES/whEQs4gZniylvf9QyS+QmW4FKz8in7EdJETQbtl/CiWKlVKDCKdESIQCTkR68ZU8Wr/u3HjRqkb9nZ4YFvDTuB4reMLD5NJZHALK4hiSOIfgdiQU1c+zH379nlC8f333/dULkwhETlRp67RUwY5ixQpEgaGjL02EnLC2ReuUX4EcVp1iFdyenGcDquvCeR89913Q1sMIXQJiX8EIiEn1PTrQ6h6b8+Czut+6qJFi6xLlL0vW7ZMGMwMdqs6BPu4omdfr+1ncrJhrxjZlYuMnH5DZOgiJ54l3QSO1H5Hfrc67c7j+Xft2rV2p/hep59tH9tKPB5ETN0wAhtbEv8IREZOv9MlWQmQ3CDyQk4Y4etaPRZNbRF+Upczc1hy6sLKrW/jdj4ycsLB10+WMF17ZV5sf4P6pAb5cojIibp0GZUjT0sY0RFnOIx+pl4bGTkBiJ/gUrJDVYo6xIkM1jWiGD/WeZnvTvog7YIOWbduXahmfvzxx1DXZ+rFkZJz+vTpnnEPG6HAa0P4IrpZ/egkJ0Yt0bRQFzmRIgILQ0EliLlm0LaSdF2k5IRblNeVwAsuuEAL7iCC02gFJWAvqkvwQyFyNMdUX9ez+KZNmwLfstftqcANJPTCSMkJTL2awMEixq/HSNA+++CDDxwv9etW5liZh5NOPxa6njvDjJxYXyDxj0Dk5JwwYYJw2pZ+O8j8pUPcAnSZRE5dU9sw5EQqChL/CEROzi1btrCPPvrIk+ZIk6dDMFKJwoSg/XLlyjFd5oRoz2nk1PWDFea5McyUGPefqRI5OQH8888/7wn/unXreioXthCeOydPniysBqaEIKgucSIn4uzq2OQPGh8JWNLIGeybYgQ5p0yZ4im5K56vdFkKwVfTSVQH2kptG6OWKCI7Qk+GDYSd2pboc9AMcTDqoK0UEarOx40gJzoeCV7dBOZqjRo1cism5Tx8Tp0CWV911VVS2vFaiZMPrI6pbVBDAgSrJgmGgBHkhOogJ2xW3aRly5ZuRaSdf/rpp4V1tWjRQnhOxYmoyRnUeB3G+yTBEDCGnFiAwcqtmyBB0CmnnOJWTMp5hOkQrVLimfPqq6+W0o6XSpwyrOnYTgnq9rV48WIvt0dlbBAwhpzQbeDAgcK4OZbuMPhu1aqV9a/Sd4zkTqNn//79lbafWvmSJUuEW04wbSxevHhqcemfg+wxYxHJr2ugdMVjXKFR5MTigdtCDLBG6nZdgtCXosUYbO107NhRiyqI5SNyH4MCqv07g0TCh2OD17AvWkCMWSNGkRPYPf74466jJ6ZxOlYooQ9Gz969e+OjrSA5rq7AyU7PnTVr1rTVT9bBII4HOkK5yLo/E+sxjpzYE3vppZdcserWrZtrGVkFsOcp+qJhoQRxdnS4tEVFzoIFCzIEFfMrb7zxht9LqHwKAsaRE7o9/PDDDJ4QTtKuXTuthgC33nor+/bbb21Vgt0vnq2qVKlie17WQadFIZUjJ5wO/FpE4RFFlO9FFh5Jr8dIciKOz1//+ldH7GEV069fP8cyMk/u2LGDde7cWVglwj8i5GdOTo6wTNgT2DMUWerAO+XMM88M24Tt9UEeIV577TXbuuigdwSMJCfU//vf/+64AIIyN998M6tUqRI+apFp06Y5Zn/GFHfixIls7NixLOjWg9ONgJhOo5Gq0TNIpjAZSYSdsMiEc8aSE1ZD3bt3d+wDjJ5YkNEpGNHd3Nzwo7Fq1Sol1kxRPHc2aNDAF8SY4oeNnuCrwYQWNpacwBuLMG6p6Bo2bMgaN26stXtuu+02BntgJ8E0d8aMGTzfSJCcn6K6dZMTq7TnnnuuSB3b414dGWwvpoO5CBhNTmjZtWtX5hZQa+TIkUxX0GnohFG9ffv2fPqK/50EGa+RlKhJkyZOxTyfcyJnjRo1PNfjtaBfvbEQhKk9SXgEjCfn/v37HRdiAAG2MYYMGRIeDR81wBUKxhAPPfQQJ6vTpdiGePPNN9ngwYN9r3qm14uwLgcPHkw/zP+HSeGJJ55oey7oQayK+xHcY1AjeT/tZEJZ48mJTkAAare9zzvuuEPJM57bl+CJJ57gNrZIMeEmDzzwAJ/m+t2WSK3XKcYR6q1cuXJq8VCf8aPnx8F9w4YN0tIGhlI8IRfHgpzAGkYHTuZr+GLCUL1EiRLau+bDDz9k2AscPXq066iB6fAjjzwSSkenqa3MvVanrSO7G7jrrrtcZxF219ExewRiQ05M5WDw7pQv8owzzuARDHREBkiHExHm8OWEjatbkqNevXqxihUrplfh+X8d5ISDQZcuXTzrhIW72bNney5PBd0RiA05cStr1qxxNXpHwCuMYFEJ4sxmZ2fzFH1Y0bWLIIAfj9tvvz2wik7kDEP6VIUwanpdZd62bRu79957Uy+nzxIQiBU5cb+wc3322Wcdb/2WW25hffr0cSyj+iTi/mAxBaZ9d955J0O4zdQ08mEiKWBFVBRwSwY54R7m1foK99S2bVuhaaNqnJNcf+zIic64//77+SKRU8fAWACLRFELnMjHjBnDF6sw7YaDdt++fZmTnawXnUV5ZvzuSdq1hWdir+E/cS8mZyq3u7+4HIslObFU37p1a9dESCNGjOAmfqZ0Bp6X582bx7d9wnrViKa22O8N43iNeER4dvYieHzQbaHlRa+klIklOQE+nHivvfZaYaoClMEKLmw8/Sxs4Lo4iIic0L1cwLCdsA0eP34885L386233mJ33313HKCKrY6xJScQR5h/RONz2mMEQTGCRv0MKvsb4kTOIL6l+fPn58QsW7asq6rvvfcea9OmjTBsimsFVMATArEmJ+4QSX7q1avHsGLoJHgGhbdIFNssTnoFPYcfJJFZYxBywh4WMxE3gUEIIg+KXNfcrqfz3hGIPTlxq0h4C4IitYOTwFtk7ty52jJzOeki45xo9PRDToyYCEvaoUMHV5WwUn7dddcRMV2RklMgEeQEFNYIKgrGZcGF+EOIpaorOLXVrop3ETnhEeNF8IyJZ0cve66IQgjrptTtIC9tUJngCCSGnIAACXNghOCWJh1bGvhSPvfcc1q9WYJ3k/2VInJ6iYhwzTXXcMdtuNw5CciIhR/YBZPoRSBR5AR0eBZDwiP4UjoJFoqwDwp3rriOoiJyOm2lwPYWwbvx7Og2/cUeLUhM/plO3yR15xJHTkCFtPB4Nho+fLgrcnAmBpHh0lWhQgXX8iYVgDudXdbr9JETEfKxuoowK4hDhM9uAiOJWrVqMRj1k0SDQCLJCSjhWtWjRw+GqHlOxvIW7HAqRnweOG7D5C4uYjd6YtqOWQF+nLAAhpQSGC2bNm3qyZ8U0/0rr7ySbd26NS4wJFLPxJLT6i3E+0GAKqfAWFbZrKws7tiN+DcgqQw7VatuVe92ZoBYgQXBYOkDkiHurBfBSAzLKxix2xnse6mDyshDIPHkBFQgW+3atT17q+DLDK8MRB2YOXMm3//zYjUjr1u81ySysfVew28lMQIjeh8FgvaLnLryGUFOwIdNc4wkWPzBqq4XwaIRVjOnT5/O91CxnQB/TRw3ReD9EjYsCOxj69SpQxmoTenU3/XIGHJauMN1C7lNhg0b5mvqhkWWe+65h0d2hzXSP//5Tz4FDJKmwNIl6Dum24gAOG7cOO7jimlsEIGDOPKdPvjgg76wCNIWXeMfgXzHFk5+RedkondB9erV+aKJnzg5dhAjdg7yUGIlFC9Mh7Glg0WpMIIfBKwgn3feeaxatWp82okIezICVi9fvpyvaCM3DYlZCOB7iZSPBcxSS682IBKcnmFTOmjQoMDZwuBDiRfCYFqC7GSwVsIL+4XIs4IXvGmwsY8Xpsdw8UJIEGx3gIwYifFCyj1Y8KgQPFfClJHS86lAV16dGU1OC0Ys+iBT2E033cQGDBjAygV0ubLqwzsWlTDqmbZ3CoMCxAIOO6qn3it9VoNAsIcVNbpEWiu+rEjci+e5G264gU9TI1VIQeMwcIcpHhFTAbgKqiRypoGKL+7UqVP56iWM5OGJgSlq3GXWrFl8QSvu95FJ+hM5HXobe3/wxEAsXOx7zjsWYiTstoVDc8pOIdcpPE9oxFQGsZKKiZweYD1w4AAPd4LgXIgUALNAjESitAgeqtRaBAHGRI7ZWhWhxnwhQAtCvuBi/EsOm1W8EFUBLmrw3MCqL5bAseqqS2Azi9Ed2zhYFRalrIAHCkn8ECByhugzbIcsWLCAv1ANtkbKly/PsBcJoiJFA/7H6m+hQoUCtYTtDhigYz8SZoh4Ifcn9imRbTtVsNqM0T1d4FxOEj8EiJwS+wzPdHDhwuv1118/rmbsZcLPslixYpyo2MNERjBY9+AFooOIeMFyB3ui2B+FMbpXQTbwdHJiSi4KQO21XioXDQJETk24w8cUo59KixxMX2GtlBpYOn101XS71IwEBGhBSAKIJlWR/tyZhG0gk/DVqQuRUyfaGtpCGsTU7R4KYakBdEVNEDkVARtVtfCYmTNnTm7zQT1WciugD5EhQOSMDHp1DU+cODG38vR4Qrkn6IPxCBA5je8i/wrCOdwKM0Lk9I+fKVdwcprk2W8KMHHWA1snVnZtGEoQQePZm5yc8CkkSRYCCINpCSI/kMQHAYuPnJwIpUiSLARg+2sJoiiQxAcBGKpAODkrVaoUH81JU08IwBjBMniAKSFJfBBAWBoIJyfCRtJzZ3w6z6um1ugZNkaS1/aonBwE4EcM4eQsXLgwD/kop2qqxRQE4H8KQaiUKKIE8sbpjy8EsIBXv359fg0nJz4h4BNJshBYuHBh7g3BpY3EfASaNWvGMFhCjiNn0aJFzdeeNPSMAJIJW/lO3FL9ea6UCipFAI78luSSE8u3/fv3t47Te0IQsEbPxo0bJ+SOknsbCNFqPW/iLnPJiX+QrgBp30iSgwDSNUDgS0p9a26/wr83PWXlceREsp5JkyaxIkWKmHsXpJkvBBA425LmzZtbH+ndMAReeOEFHp8qVa3jyIkTCKmBIMvw3CeJPwKp5Lz++uvjf0MJvAPk7WnVqlWeO8tDTpRAJi0kXbUsFfJcRQdigwAiIezZs4frW7lyZeMi0McGSAWKwp1v1KhRPB+qXfW25ERBJJz9/PPPWXZ2tt11dCxGCCAomCV2v9DWOXrXhwBCrMI5oVOnTsJGheTEFSVLluTxWZGy3DIpEtZEJ4xFIJWcOTk5xuqZCYphPefRRx/lERRTV2bt7t2RnNYFbdq04ZUhgNQtt9zCSWudo3fzEVi/fn2ukhdddBFfV8g9QB+UI4BYxk2aNOGByWHv3K9fPx550a1hnp/TrZDd+Z07dzJ0OsI4Uio5O4TMOVa6dGl2ySWX5Cq0cuVK9tVXX+X+Tx/kI5CVlcXzqGKBtUyZMjz8qd9WApPTb0NUnhAgBPwh8D8I22yw4XkRvwAAAABJRU5ErkJggg==');
    }

    /**
     * Gets the public 'sonata.admin.validator.inline' shared service.
     *
     * @return \Sonata\CoreBundle\Validator\InlineValidator
     */
    protected function getSonata_Admin_Validator_InlineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Validator\\InlineValidator.php';

        return $this->services['sonata.admin.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, ($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
    }

    /**
     * Gets the public 'sonata.block.context_manager.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager(new \Sonata\BlockBundle\Block\BlockLoaderChain([0 => new \Sonata\BlockBundle\Block\Loader\ServiceLoader($this->parameters['sonata_blocks.block_types'])]), ($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $this->parameters['sonata_block.cache_blocks'], ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the public 'sonata.block.exception.filter.debug_only' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter
     */
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Filter\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Filter\\DebugOnlyFilter.php';

        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(true);
    }

    /**
     * Gets the public 'sonata.block.exception.filter.ignore_block_exception' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter
     */
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Filter\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Filter\\IgnoreClassFilter.php';

        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }

    /**
     * Gets the public 'sonata.block.exception.filter.keep_all' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepAllFilter
     */
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Filter\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Filter\\KeepAllFilter.php';

        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }

    /**
     * Gets the public 'sonata.block.exception.filter.keep_none' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter
     */
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Filter\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Filter\\KeepNoneFilter.php';

        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }

    /**
     * Gets the public 'sonata.block.exception.renderer.inline' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineRenderer
     */
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Renderer\\RendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Renderer\\InlineRenderer.php';

        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer(($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()), '@SonataBlock/Block/block_exception.html.twig');
    }

    /**
     * Gets the public 'sonata.block.exception.renderer.inline_debug' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer
     */
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Renderer\\RendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Renderer\\InlineDebugRenderer.php';

        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer(($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()), '@SonataBlock/Block/block_exception_debug.html.twig', true, true);
    }

    /**
     * Gets the public 'sonata.block.exception.renderer.throw' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer
     */
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Renderer\\RendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Exception\\Renderer\\MonkeyThrowRenderer.php';

        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }

    /**
     * Gets the public 'sonata.block.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

        $instance->add('sonata.block.service.container', 'sonata.block.service.container', []);
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', []);
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', []);
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', []);
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', []);
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', []);
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', []);
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', []);
        $instance->add('sonata.admin.block.stats', 'sonata.admin.block.stats', []);

        return $instance;
    }

    /**
     * Gets the public 'sonata.block.menu.registry' shared service.
     *
     * @return \Sonata\BlockBundle\Menu\MenuRegistry
     */
    protected function getSonata_Block_Menu_RegistryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Menu\\MenuRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Menu\\MenuRegistry.php';

        $this->services['sonata.block.menu.registry'] = $instance = new \Sonata\BlockBundle\Menu\MenuRegistry([]);

        $instance->add('sonata_admin_sidebar');

        return $instance;
    }

    /**
     * Gets the public 'sonata.block.renderer.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        $a = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, ['debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'], ['inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'], [], []);
        $a->setDefaultFilter('debug_only');
        $a->setDefaultRenderer('throw');

        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $a, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), true);
    }

    /**
     * Gets the public 'sonata.block.service.container' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\ContainerBlockService
     */
    protected function getSonata_Block_Service_ContainerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AdminBlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractAdminBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\ContainerBlockService.php';

        return $this->services['sonata.block.service.container'] = new \Sonata\BlockBundle\Block\Service\ContainerBlockService('sonata.block.container', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()));
    }

    /**
     * Gets the public 'sonata.block.service.empty' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\EmptyBlockService
     */
    protected function getSonata_Block_Service_EmptyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\EmptyBlockService.php';

        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()));
    }

    /**
     * Gets the public 'sonata.block.service.menu' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\MenuBlockService
     */
    protected function getSonata_Block_Service_MenuService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AdminBlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractAdminBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\MenuBlockService.php';

        return $this->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService('sonata.block.menu', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()), ($this->privates['knp_menu.menu_provider.chain'] ?? $this->getKnpMenu_MenuProvider_ChainService()), ($this->services['sonata.block.menu.registry'] ?? $this->getSonata_Block_Menu_RegistryService()));
    }

    /**
     * Gets the public 'sonata.block.service.rss' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\RssBlockService
     */
    protected function getSonata_Block_Service_RssService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AdminBlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractAdminBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\RssBlockService.php';

        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()));
    }

    /**
     * Gets the public 'sonata.block.service.template' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TemplateBlockService
     */
    protected function getSonata_Block_Service_TemplateService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AdminBlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractAdminBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\TemplateBlockService.php';

        return $this->services['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService('sonata.block.template', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()));
    }

    /**
     * Gets the public 'sonata.block.service.text' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TextBlockService
     */
    protected function getSonata_Block_Service_TextService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AdminBlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractAdminBlockService.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\TextBlockService.php';

        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', ($this->privates['sonata.templating'] ?? $this->getSonata_TemplatingService()));
    }

    /**
     * Gets the public 'sonata.core.flashmessage.manager' shared service.
     *
     * @return \Sonata\Twig\FlashMessage\FlashManager
     */
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Status\\StatusClassRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\FlashMessage\\FlashManager.php';

        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\Twig\FlashMessage\FlashManager(($this->services['session'] ?? $this->getSessionService()), ($this->services['translator'] ?? $this->getTranslatorService()), ['success' => ['success' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_success' => ['domain' => 'SonataAdminBundle'], 'sonata_user_success' => ['domain' => 'SonataUserBundle'], 'fos_user_success' => ['domain' => 'FOSUserBundle']], 'warning' => ['warning' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_info' => ['domain' => 'SonataAdminBundle']], 'danger' => ['error' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_error' => ['domain' => 'SonataAdminBundle'], 'sonata_user_error' => ['domain' => 'SonataUserBundle']]], ['success' => 'success', 'warning' => 'warning', 'danger' => 'danger']);
    }

    /**
     * Gets the public 'sonata.core.flashmessage.twig.extension' shared service.
     *
     * @return \Sonata\Twig\Extension\FlashMessageExtension
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\Twig\Extension\FlashMessageExtension();
    }

    /**
     * Gets the public 'sonata.core.form.type.array' shared service.
     *
     * @return \Sonata\Form\Type\ImmutableArrayType
     */
    protected function getSonata_Core_Form_Type_ArrayService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\ImmutableArrayType.php';

        return $this->services['sonata.core.form.type.array'] = new \Sonata\Form\Type\ImmutableArrayType();
    }

    /**
     * Gets the public 'sonata.core.form.type.array_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ImmutableArrayType
     */
    protected function getSonata_Core_Form_Type_ArrayLegacyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\ImmutableArrayType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\ImmutableArrayType.php';

        return $this->services['sonata.core.form.type.array_legacy'] = new \Sonata\CoreBundle\Form\Type\ImmutableArrayType();
    }

    /**
     * Gets the public 'sonata.core.form.type.boolean' shared service.
     *
     * @return \Sonata\Form\Type\BooleanType
     */
    protected function getSonata_Core_Form_Type_BooleanService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\BooleanType.php';

        return $this->services['sonata.core.form.type.boolean'] = new \Sonata\Form\Type\BooleanType();
    }

    /**
     * Gets the public 'sonata.core.form.type.boolean_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\BooleanType
     */
    protected function getSonata_Core_Form_Type_BooleanLegacyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\BooleanType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\BooleanType.php';

        return $this->services['sonata.core.form.type.boolean_legacy'] = new \Sonata\CoreBundle\Form\Type\BooleanType();
    }

    /**
     * Gets the public 'sonata.core.form.type.collection' shared service.
     *
     * @return \Sonata\Form\Type\CollectionType
     */
    protected function getSonata_Core_Form_Type_CollectionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\CollectionType.php';

        return $this->services['sonata.core.form.type.collection'] = new \Sonata\Form\Type\CollectionType();
    }

    /**
     * Gets the public 'sonata.core.form.type.collection_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\CollectionType
     */
    protected function getSonata_Core_Form_Type_CollectionLegacyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\CollectionType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\CollectionType.php';

        return $this->services['sonata.core.form.type.collection_legacy'] = new \Sonata\CoreBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the public 'sonata.core.form.type.color_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ColorType
     */
    protected function getSonata_Core_Form_Type_ColorLegacyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\ColorType.php';

        return $this->services['sonata.core.form.type.color_legacy'] = new \Sonata\CoreBundle\Form\Type\ColorType();
    }

    /**
     * Gets the public 'sonata.core.form.type.color_selector' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ColorSelectorType
     *
     * @deprecated The "sonata.core.form.type.color_selector" service is deprecated since 3.5 and will be removed in 4.0.
     */
    protected function getSonata_Core_Form_Type_ColorSelectorService()
    {
        @trigger_error('The "sonata.core.form.type.color_selector" service is deprecated since 3.5 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.core.form.type.color_selector'] = new \Sonata\CoreBundle\Form\Type\ColorSelectorType();
    }

    /**
     * Gets the public 'sonata.core.form.type.date_picker' shared service.
     *
     * @return \Sonata\Form\Type\DatePickerType
     */
    protected function getSonata_Core_Form_Type_DatePickerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\BasePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DatePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Date\\MomentFormatConverter.php';

        return $this->services['sonata.core.form.type.date_picker'] = new \Sonata\Form\Type\DatePickerType(($this->privates['sonata.core.date.moment_format_converter'] ?? ($this->privates['sonata.core.date.moment_format_converter'] = new \Sonata\Form\Date\MomentFormatConverter())), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.date_picker_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DatePickerType
     */
    protected function getSonata_Core_Form_Type_DatePickerLegacyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\BasePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DatePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DatePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Date\\MomentFormatConverter.php';

        return $this->services['sonata.core.form.type.date_picker_legacy'] = new \Sonata\CoreBundle\Form\Type\DatePickerType(($this->privates['sonata.core.date.moment_format_converter'] ?? ($this->privates['sonata.core.date.moment_format_converter'] = new \Sonata\Form\Date\MomentFormatConverter())), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.date_range' shared service.
     *
     * @return \Sonata\Form\Type\DateRangeType
     */
    protected function getSonata_Core_Form_Type_DateRangeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateRangeType.php';

        return $this->services['sonata.core.form.type.date_range'] = new \Sonata\Form\Type\DateRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.date_range_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangeType
     */
    protected function getSonata_Core_Form_Type_DateRangeLegacyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateRangeType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateRangeType.php';

        return $this->services['sonata.core.form.type.date_range_legacy'] = new \Sonata\CoreBundle\Form\Type\DateRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.date_range_picker' shared service.
     *
     * @return \Sonata\Form\Type\DateRangePickerType
     */
    protected function getSonata_Core_Form_Type_DateRangePickerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateRangeType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateRangePickerType.php';

        return $this->services['sonata.core.form.type.date_range_picker'] = new \Sonata\Form\Type\DateRangePickerType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.date_range_picker_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangePickerType
     */
    protected function getSonata_Core_Form_Type_DateRangePickerLegacyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateRangeType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateRangePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateRangePickerType.php';

        return $this->services['sonata.core.form.type.date_range_picker_legacy'] = new \Sonata\CoreBundle\Form\Type\DateRangePickerType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_picker' shared service.
     *
     * @return \Sonata\Form\Type\DateTimePickerType
     */
    protected function getSonata_Core_Form_Type_DatetimePickerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\BasePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Date\\MomentFormatConverter.php';

        return $this->services['sonata.core.form.type.datetime_picker'] = new \Sonata\Form\Type\DateTimePickerType(($this->privates['sonata.core.date.moment_format_converter'] ?? ($this->privates['sonata.core.date.moment_format_converter'] = new \Sonata\Form\Date\MomentFormatConverter())), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_picker_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimePickerType
     */
    protected function getSonata_Core_Form_Type_DatetimePickerLegacyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\BasePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateTimePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Date\\MomentFormatConverter.php';

        return $this->services['sonata.core.form.type.datetime_picker_legacy'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType(($this->privates['sonata.core.date.moment_format_converter'] ?? ($this->privates['sonata.core.date.moment_format_converter'] = new \Sonata\Form\Date\MomentFormatConverter())), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_range' shared service.
     *
     * @return \Sonata\Form\Type\DateTimeRangeType
     */
    protected function getSonata_Core_Form_Type_DatetimeRangeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimeRangeType.php';

        return $this->services['sonata.core.form.type.datetime_range'] = new \Sonata\Form\Type\DateTimeRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_range_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangeType
     */
    protected function getSonata_Core_Form_Type_DatetimeRangeLegacyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimeRangeType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateTimeRangeType.php';

        return $this->services['sonata.core.form.type.datetime_range_legacy'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangeType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_range_picker' shared service.
     *
     * @return \Sonata\Form\Type\DateTimeRangePickerType
     */
    protected function getSonata_Core_Form_Type_DatetimeRangePickerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimeRangeType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimeRangePickerType.php';

        return $this->services['sonata.core.form.type.datetime_range_picker'] = new \Sonata\Form\Type\DateTimeRangePickerType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.datetime_range_picker_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType
     */
    protected function getSonata_Core_Form_Type_DatetimeRangePickerLegacyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimeRangeType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimeRangePickerType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateTimeRangePickerType.php';

        return $this->services['sonata.core.form.type.datetime_range_picker_legacy'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.equal' shared service.
     *
     * @return \Sonata\Form\Type\EqualType
     */
    protected function getSonata_Core_Form_Type_EqualService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\EqualType.php';

        return $this->services['sonata.core.form.type.equal'] = new \Sonata\Form\Type\EqualType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.equal_legacy' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\EqualType
     */
    protected function getSonata_Core_Form_Type_EqualLegacyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\EqualType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\EqualType.php';

        return $this->services['sonata.core.form.type.equal_legacy'] = new \Sonata\CoreBundle\Form\Type\EqualType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.form.type.translatable_choice' shared service.
     *
     * @return \Sonata\CoreBundle\Form\Type\TranslatableChoiceType
     *
     * @deprecated The "sonata.core.form.type.translatable_choice" service is deprecated since 2.2.0 and will be removed in 4.0.
     */
    protected function getSonata_Core_Form_Type_TranslatableChoiceService()
    {
        @trigger_error('The "sonata.core.form.type.translatable_choice" service is deprecated since 2.2.0 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.core.form.type.translatable_choice'] = new \Sonata\CoreBundle\Form\Type\TranslatableChoiceType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'sonata.core.model.adapter.chain' shared service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\AdapterChain
     *
     * @deprecated The "sonata.core.model.adapter.chain" service is deprecated in favor of service "sonata.doctrine.model.adapter.chain" since 3.12.0 and will be removed in 4.0.
     */
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        @trigger_error('The "sonata.core.model.adapter.chain" service is deprecated in favor of service "sonata.doctrine.model.adapter.chain" since 3.12.0 and will be removed in 4.0.', E_USER_DEPRECATED);

        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

        $instance->addAdapter($this->getSonata_Core_Model_Adapter_DoctrineOrmService());

        return $instance;
    }

    /**
     * Gets the public 'sonata.core.slugify.cocur' shared service.
     *
     * @return \Cocur\Slugify\Slugify
     *
     * @deprecated The "sonata.core.slugify.cocur" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getSonata_Core_Slugify_CocurService()
    {
        @trigger_error('The "sonata.core.slugify.cocur" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['sonata.core.slugify.cocur'] = new \Cocur\Slugify\Slugify();
    }

    /**
     * Gets the public 'sonata.core.slugify.native' shared service.
     *
     * @return \Sonata\CoreBundle\Component\NativeSlugify
     *
     * @deprecated The "sonata.core.slugify.native" service is deprecated since 2.3 and will be removed in 4.0.
     */
    protected function getSonata_Core_Slugify_NativeService()
    {
        @trigger_error('The "sonata.core.slugify.native" service is deprecated since 2.3 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['sonata.core.slugify.native'] = new \Sonata\CoreBundle\Component\NativeSlugify();
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     *
     * @deprecated The "templating" service is deprecated since Symfony 4.4 and will be removed in 5.0.
     */
    protected function getTemplatingService()
    {
        @trigger_error('The "templating" service is deprecated since Symfony 4.4 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['templating.name_parser'] ?? $this->getTemplating_NameParserService()), ($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     *
     * @deprecated The "templating.loader" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_LoaderService()
    {
        @trigger_error('The "templating.loader" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(($this->privates['twig.loader.filesystem'] ?? $this->getTwig_Loader_FilesystemService()), ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $a = ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService());
        $b = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $c = ($this->services['translator'] ?? $this->getTranslatorService());
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        $e = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($d, '', false)), []);
        $f = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $g = ($this->services['router'] ?? $this->getRouterService());
        $h = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $h->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $f]);
        $i = ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService());
        $j = new \Knp\Menu\Util\MenuManipulator();
        $k = ($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService());
        $l = new \Symfony\Bridge\Twig\AppVariable();
        $l->setEnvironment('dev');
        $l->setDebug(true);
        if ($this->has('security.token_storage')) {
            $l->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $l->setRequestStack($d);
        }
        $m = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor();

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($e));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($f, \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($g));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService())));
        $instance->addExtension(new \Twig\Extra\String\StringExtension());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($h));
        $instance->addExtension(new \FOS\CKEditorBundle\Twig\CKEditorExtension(new \FOS\CKEditorBundle\Renderer\CKEditorRenderer(new \FOS\CKEditorBundle\Builder\JsonBuilder($i), $g, $e, $d, $instance, (($this->hasParameter("locale")) ? ($this->getParameter("locale")) : (null)))));
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension(($this->services['vich_uploader.templating.helper.uploader_helper'] ?? $this->getVichUploader_Templating_Helper_UploaderHelperService())));
        $instance->addExtension(new \EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), $i, ($this->services['easyadmin.router'] ?? $this->getEasyadmin_RouterService()), true, $a, $c, ($this->services['easyadmin.security.authorization_checker'] ?? $this->getEasyadmin_Security_AuthorizationCheckerService())));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\FilterExtension(($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService())));
        $instance->addExtension(new \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension($instance));
        $instance->addExtension(new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(new \Knp\Bundle\PaginatorBundle\Helper\Processor($g, $c)));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'list' => ['privates', 'knp_menu.renderer.list', 'getKnpMenu_Renderer_ListService', false],
            'twig' => ['privates', 'knp_menu.renderer.twig', 'getKnpMenu_Renderer_TwigService', false],
        ], [
            'list' => '?',
            'twig' => '?',
        ]), 'twig'), ($this->privates['knp_menu.menu_provider.chain'] ?? $this->getKnpMenu_MenuProvider_ChainService()), $j, $k), $k, $j));
        $instance->addExtension(($this->services['sonata.core.flashmessage.twig.extension'] ?? ($this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\Twig\Extension\FlashMessageExtension())));
        $instance->addExtension(new \Sonata\Twig\Extension\FormTypeExtension('standard'));
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension());
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\StatusExtension());
        $instance->addExtension(new \Sonata\Twig\Extension\DeprecatedTemplateExtension());
        $instance->addExtension(new \Sonata\Twig\Extension\TemplateExtension(true, $c, ($this->services['sonata.core.model.adapter.chain'] ?? $this->getSonata_Core_Model_Adapter_ChainService())));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension(($this->privates['sonata.block.templating.helper'] ?? $this->getSonata_Block_Templating_HelperService())));
        $instance->addExtension(($this->services['sonata.admin.twig.extension'] ?? $this->getSonata_Admin_Twig_ExtensionService()));
        $instance->addExtension(new \Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension(($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), $this));
        $instance->addExtension(new \Sonata\AdminBundle\Twig\Extension\StringExtension(NULL));
        $instance->addGlobal('app', $l);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Sonata\\Twig\\Extension\\FlashMessageRuntime' => ['privates', 'sonata.core.flashmessage.twig.runtime', 'getSonata_Core_Flashmessage_Twig_RuntimeService', false],
            'Sonata\\Twig\\Extension\\StatusRuntime' => ['privates', 'sonata.core.twig.status_runtime', 'getSonata_Core_Twig_StatusRuntimeService', false],
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'Sonata\\Twig\\Extension\\FlashMessageRuntime' => '?',
            'Sonata\\Twig\\Extension\\StatusRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->registerUndefinedFilterCallback([0 => $m, 1 => 'suggestFilter']);
        $instance->registerUndefinedFunctionCallback([0 => $m, 1 => 'suggestFunction']);
        $instance->addGlobal('sonata_block', new \Sonata\BlockBundle\Twig\GlobalVariables(['block_base' => '@SonataBlock/Block/block_base.html.twig', 'block_container' => '@SonataBlock/Block/block_container.html.twig']));
        $instance->addGlobal('sonata_admin', ($this->services['sonata.admin.twig.global'] ?? $this->getSonata_Admin_Twig_GlobalService()));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     *
     * @deprecated The "twig.controller.exception" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        @trigger_error('The "twig.controller.exception" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(($this->services['twig'] ?? $this->getTwigService()), true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     *
     * @deprecated The "twig.controller.preview_error" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        @trigger_error('The "twig.controller.preview_error" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), NULL);
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);
        $instance->addCasters(['Closure' => 'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster::unsetClosureFileInfo']);

        return $instance;
    }

    /**
     * Gets the public 'vich_uploader.download_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\DownloadHandler
     */
    protected function getVichUploader_DownloadHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Handler\\DownloadHandler.php';

        return $this->services['vich_uploader.download_handler'] = new \Vich\UploaderBundle\Handler\DownloadHandler(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), ($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()));
    }

    /**
     * Gets the public 'vich_uploader.form.type.file' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichFileType
     */
    protected function getVichUploader_Form_Type_FileService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Form\\Type\\VichFileType.php';

        return $this->services['vich_uploader.form.type.file'] = new \Vich\UploaderBundle\Form\Type\VichFileType(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()), ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService()), ($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()));
    }

    /**
     * Gets the public 'vich_uploader.form.type.image' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichImageType
     */
    protected function getVichUploader_Form_Type_ImageService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Form\\Type\\VichFileType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Form\\Type\\VichImageType.php';

        return $this->services['vich_uploader.form.type.image'] = new \Vich\UploaderBundle\Form\Type\VichImageType(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()), ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService()), ($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()), ($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()));
    }

    /**
     * Gets the public 'vich_uploader.templating.helper.uploader_helper' shared service.
     *
     * @return \Vich\UploaderBundle\Templating\Helper\UploaderHelper
     */
    protected function getVichUploader_Templating_Helper_UploaderHelperService()
    {
        return $this->services['vich_uploader.templating.helper.uploader_helper'] = new \Vich\UploaderBundle\Templating\Helper\UploaderHelper(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()));
    }

    /**
     * Gets the public 'vich_uploader.upload_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler
     */
    protected function getVichUploader_UploadHandlerService()
    {
        $a = ($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService());

        return $this->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), $a, new \Vich\UploaderBundle\Injector\FileInjector($a), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     *
     * @deprecated The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        @trigger_error('The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.', E_USER_DEPRECATED);

        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()));
    }

    /**
     * Gets the public 'web_profiler.controller.exception_panel' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController
     */
    protected function getWebProfiler_Controller_ExceptionPanelService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\ExceptionPanelController.php';

        return $this->services['web_profiler.controller.exception_panel'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController(($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), ($this->services['profiler'] ?? $this->getProfilerService()));
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\ProfilerController.php';

        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($this->services['router'] ?? $this->getRouterService()), ($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), $this->parameters['data_collector.templates'], ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()), \dirname(__DIR__, 4));
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\RouterController.php';

        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private '.debug.http_client' shared service.
     *
     * @return \Symfony\Component\HttpClient\TraceableHttpClient
     */
    protected function get_Debug_HttpClientService()
    {
        $a = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $b = new \Symfony\Bridge\Monolog\Logger('http_client');
        $b->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $b->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $b->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($b);

        $a->setLogger($b);

        return $this->privates['.debug.http_client'] = new \Symfony\Component\HttpClient\TraceableHttpClient($a);
    }

    /**
     * Gets the private '.errored..service_locator.LcskAYA.App\Entity\Articles' shared service.
     *
     * @return \App\Entity\Articles
     */
    protected function getArticlesService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\Entity\\Articles.php';

        return $this->privates['.errored..service_locator.LcskAYA.App\\Entity\\Articles'] = new \App\Entity\Articles();
    }

    /**
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /**
     * Gets the private '.messenger.handler_descriptor.tGvt0LH' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    protected function get_Messenger_HandlerDescriptor_TGvt0LHService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Handler\\HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Messenger\\MessageHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\TransportInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\Transports.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport.php';

        return $this->privates['.messenger.handler_descriptor.tGvt0LH'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Mailer\Messenger\MessageHandler((new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () {
            yield 0 => ($this->privates['mailer.transport_factory.mailgun'] ?? $this->getMailer_TransportFactory_MailgunService());
            yield 1 => ($this->privates['mailer.transport_factory.null'] ?? $this->getMailer_TransportFactory_NullService());
            yield 2 => ($this->privates['mailer.transport_factory.sendmail'] ?? $this->getMailer_TransportFactory_SendmailService());
            yield 3 => ($this->privates['mailer.transport_factory.smtp'] ?? $this->getMailer_TransportFactory_SmtpService());
        }, 4)))->fromStrings(['main' => $this->getEnv('MAILER_DSN')])), []);
    }

    /**
     * Gets the private '.service_locator..UeDvn1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator__UeDvn1Service()
    {
        return $this->privates['.service_locator..UeDvn1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', false],
        ], [
            'security' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.A9ce80i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_A9ce80iService()
    {
        return $this->privates['.service_locator.A9ce80i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'eventDispatcher' => '?',
            'session' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.LcskAYA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_LcskAYAService()
    {
        return $this->privates['.service_locator.LcskAYA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'article' => ['privates', '.errored..service_locator.LcskAYA.App\\Entity\\Articles', NULL, 'Cannot autowire service ".service_locator.LcskAYA": it references class "App\\Entity\\Articles" but no such service exists.'],
        ], [
            'article' => 'App\\Entity\\Articles',
        ]);
    }

    /**
     * Gets the private '.service_locator.XGQv6wh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_XGQv6whService()
    {
        return $this->privates['.service_locator.XGQv6wh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'authenticator' => ['privates', 'App\\Security\\UsersAuthenticator', 'getUsersAuthenticatorService', false],
            'guardHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', false],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
        ], [
            'authenticator' => 'App\\Security\\UsersAuthenticator',
            'guardHandler' => '?',
            'passwordEncoder' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator._STIV_h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_STIVHService()
    {
        return $this->privates['.service_locator._STIV_h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Controller\\BlogController::index' => ['privates', '.service_locator..UeDvn1', 'get_ServiceLocator__UeDvn1Service', false],
            'App\\Controller\\BlogController::showArticle' => ['privates', '.service_locator.LcskAYA', 'get_ServiceLocator_LcskAYAService', false],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.XGQv6wh', 'get_ServiceLocator_XGQv6whService', false],
            'App\\Controller\\RegistrationController::registerBlog' => ['privates', '.service_locator.XGQv6wh', 'get_ServiceLocator_XGQv6whService', false],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.g.xob4v', 'get_ServiceLocator_G_Xob4vService', false],
            'FM\\ElfinderBundle\\Controller\\ElFinderController::load' => ['privates', '.service_locator.A9ce80i', 'get_ServiceLocator_A9ce80iService', false],
            'App\\Controller\\BlogController:index' => ['privates', '.service_locator..UeDvn1', 'get_ServiceLocator__UeDvn1Service', false],
            'App\\Controller\\BlogController:showArticle' => ['privates', '.service_locator.LcskAYA', 'get_ServiceLocator_LcskAYAService', false],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.XGQv6wh', 'get_ServiceLocator_XGQv6whService', false],
            'App\\Controller\\RegistrationController:registerBlog' => ['privates', '.service_locator.XGQv6wh', 'get_ServiceLocator_XGQv6whService', false],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.g.xob4v', 'get_ServiceLocator_G_Xob4vService', false],
            'FM\\ElfinderBundle\\Controller\\ElFinderController:load' => ['privates', '.service_locator.A9ce80i', 'get_ServiceLocator_A9ce80iService', false],
        ], [
            'App\\Controller\\BlogController::index' => '?',
            'App\\Controller\\BlogController::showArticle' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::registerBlog' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'FM\\ElfinderBundle\\Controller\\ElFinderController::load' => '?',
            'App\\Controller\\BlogController:index' => '?',
            'App\\Controller\\BlogController:showArticle' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:registerBlog' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'FM\\ElfinderBundle\\Controller\\ElFinderController:load' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.g.xob4v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_G_Xob4vService()
    {
        return $this->privates['.service_locator.g.xob4v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'authenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
        ], [
            'authenticationUtils' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.o9nGMXB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_O9nGMXBService()
    {
        return $this->privates['.service_locator.o9nGMXB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]);
    }

    /**
     * Gets the private '.service_locator.vdmMuyE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VdmMuyEService()
    {
        return $this->privates['.service_locator.vdmMuyE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'message_bus' => ['services', 'message_bus', 'getMessageBusService', false],
            'messenger.default_bus' => ['services', 'message_bus', 'getMessageBusService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'templating' => ['services', 'templating', 'getTemplatingService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'message_bus' => '?',
            'messenger.default_bus' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'templating' => '?',
            'twig' => '?',
        ]);
    }

    /**
     * Gets the private 'App\Form\RegistrationFormType' shared autowired service.
     *
     * @return \App\Form\RegistrationFormType
     */
    protected function getRegistrationFormTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\RegistrationFormType.php';

        return $this->privates['App\\Form\\RegistrationFormType'] = new \App\Form\RegistrationFormType();
    }

    /**
     * Gets the private 'App\Form\UsersBlogFormType' shared autowired service.
     *
     * @return \App\Form\UsersBlogFormType
     */
    protected function getUsersBlogFormTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\UsersBlogFormType.php';

        return $this->privates['App\\Form\\UsersBlogFormType'] = new \App\Form\UsersBlogFormType();
    }

    /**
     * Gets the private 'App\Repository\ArticlesRepository' shared autowired service.
     *
     * @return \App\Repository\ArticlesRepository
     */
    protected function getArticlesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\ArticlesRepository.php';

        return $this->privates['App\\Repository\\ArticlesRepository'] = new \App\Repository\ArticlesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CategoriesRepository' shared autowired service.
     *
     * @return \App\Repository\CategoriesRepository
     */
    protected function getCategoriesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\CategoriesRepository.php';

        return $this->privates['App\\Repository\\CategoriesRepository'] = new \App\Repository\CategoriesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CategoryDrugsRepository' shared autowired service.
     *
     * @return \App\Repository\CategoryDrugsRepository
     */
    protected function getCategoryDrugsRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\CategoryDrugsRepository.php';

        return $this->privates['App\\Repository\\CategoryDrugsRepository'] = new \App\Repository\CategoryDrugsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CategoryLaboratoryRepository' shared autowired service.
     *
     * @return \App\Repository\CategoryLaboratoryRepository
     */
    protected function getCategoryLaboratoryRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\CategoryLaboratoryRepository.php';

        return $this->privates['App\\Repository\\CategoryLaboratoryRepository'] = new \App\Repository\CategoryLaboratoryRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CommentairesRepository' shared autowired service.
     *
     * @return \App\Repository\CommentairesRepository
     */
    protected function getCommentairesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\CommentairesRepository.php';

        return $this->privates['App\\Repository\\CommentairesRepository'] = new \App\Repository\CommentairesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\DoctorRepository' shared autowired service.
     *
     * @return \App\Repository\DoctorRepository
     */
    protected function getDoctorRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\DoctorRepository.php';

        return $this->privates['App\\Repository\\DoctorRepository'] = new \App\Repository\DoctorRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\DrugsConsomersRepository' shared autowired service.
     *
     * @return \App\Repository\DrugsConsomersRepository
     */
    protected function getDrugsConsomersRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\DrugsConsomersRepository.php';

        return $this->privates['App\\Repository\\DrugsConsomersRepository'] = new \App\Repository\DrugsConsomersRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\DrugsRepository' shared autowired service.
     *
     * @return \App\Repository\DrugsRepository
     */
    protected function getDrugsRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\DrugsRepository.php';

        return $this->privates['App\\Repository\\DrugsRepository'] = new \App\Repository\DrugsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\ExpertiseRepository' shared autowired service.
     *
     * @return \App\Repository\ExpertiseRepository
     */
    protected function getExpertiseRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\ExpertiseRepository.php';

        return $this->privates['App\\Repository\\ExpertiseRepository'] = new \App\Repository\ExpertiseRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\FormDrugsRepository' shared autowired service.
     *
     * @return \App\Repository\FormDrugsRepository
     */
    protected function getFormDrugsRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\FormDrugsRepository.php';

        return $this->privates['App\\Repository\\FormDrugsRepository'] = new \App\Repository\FormDrugsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\KeywordRepository' shared autowired service.
     *
     * @return \App\Repository\KeywordRepository
     */
    protected function getKeywordRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\KeywordRepository.php';

        return $this->privates['App\\Repository\\KeywordRepository'] = new \App\Repository\KeywordRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\LaboratoryRepository' shared autowired service.
     *
     * @return \App\Repository\LaboratoryRepository
     */
    protected function getLaboratoryRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\LaboratoryRepository.php';

        return $this->privates['App\\Repository\\LaboratoryRepository'] = new \App\Repository\LaboratoryRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\LanguageRepository' shared autowired service.
     *
     * @return \App\Repository\LanguageRepository
     */
    protected function getLanguageRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\LanguageRepository.php';

        return $this->privates['App\\Repository\\LanguageRepository'] = new \App\Repository\LanguageRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\LocationRepository' shared autowired service.
     *
     * @return \App\Repository\LocationRepository
     */
    protected function getLocationRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\LocationRepository.php';

        return $this->privates['App\\Repository\\LocationRepository'] = new \App\Repository\LocationRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\MeansPaymentRepository' shared autowired service.
     *
     * @return \App\Repository\MeansPaymentRepository
     */
    protected function getMeansPaymentRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\MeansPaymentRepository.php';

        return $this->privates['App\\Repository\\MeansPaymentRepository'] = new \App\Repository\MeansPaymentRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\MembersRepository' shared autowired service.
     *
     * @return \App\Repository\MembersRepository
     */
    protected function getMembersRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\MembersRepository.php';

        return $this->privates['App\\Repository\\MembersRepository'] = new \App\Repository\MembersRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\NewsRepository' shared autowired service.
     *
     * @return \App\Repository\NewsRepository
     */
    protected function getNewsRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\NewsRepository.php';

        return $this->privates['App\\Repository\\NewsRepository'] = new \App\Repository\NewsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\PharmacyRepository' shared autowired service.
     *
     * @return \App\Repository\PharmacyRepository
     */
    protected function getPharmacyRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\PharmacyRepository.php';

        return $this->privates['App\\Repository\\PharmacyRepository'] = new \App\Repository\PharmacyRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\PraticalInfosRepository' shared autowired service.
     *
     * @return \App\Repository\PraticalInfosRepository
     */
    protected function getPraticalInfosRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\PraticalInfosRepository.php';

        return $this->privates['App\\Repository\\PraticalInfosRepository'] = new \App\Repository\PraticalInfosRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\ProfessionRepository' shared autowired service.
     *
     * @return \App\Repository\ProfessionRepository
     */
    protected function getProfessionRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\ProfessionRepository.php';

        return $this->privates['App\\Repository\\ProfessionRepository'] = new \App\Repository\ProfessionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\QualityServicesRepository' shared autowired service.
     *
     * @return \App\Repository\QualityServicesRepository
     */
    protected function getQualityServicesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\QualityServicesRepository.php';

        return $this->privates['App\\Repository\\QualityServicesRepository'] = new \App\Repository\QualityServicesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\RefundRepository' shared autowired service.
     *
     * @return \App\Repository\RefundRepository
     */
    protected function getRefundRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\RefundRepository.php';

        return $this->privates['App\\Repository\\RefundRepository'] = new \App\Repository\RefundRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\ServicesRepository' shared autowired service.
     *
     * @return \App\Repository\ServicesRepository
     */
    protected function getServicesRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\ServicesRepository.php';

        return $this->privates['App\\Repository\\ServicesRepository'] = new \App\Repository\ServicesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\SkillsRepository' shared autowired service.
     *
     * @return \App\Repository\SkillsRepository
     */
    protected function getSkillsRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\SkillsRepository.php';

        return $this->privates['App\\Repository\\SkillsRepository'] = new \App\Repository\SkillsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\SocialNetworksRepository' shared autowired service.
     *
     * @return \App\Repository\SocialNetworksRepository
     */
    protected function getSocialNetworksRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\SocialNetworksRepository.php';

        return $this->privates['App\\Repository\\SocialNetworksRepository'] = new \App\Repository\SocialNetworksRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\TimeSlotOpenRepository' shared autowired service.
     *
     * @return \App\Repository\TimeSlotOpenRepository
     */
    protected function getTimeSlotOpenRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\TimeSlotOpenRepository.php';

        return $this->privates['App\\Repository\\TimeSlotOpenRepository'] = new \App\Repository\TimeSlotOpenRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\UsersBlogRepository' shared autowired service.
     *
     * @return \App\Repository\UsersBlogRepository
     */
    protected function getUsersBlogRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\UsersBlogRepository.php';

        return $this->privates['App\\Repository\\UsersBlogRepository'] = new \App\Repository\UsersBlogRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\UsersRepository' shared autowired service.
     *
     * @return \App\Repository\UsersRepository
     */
    protected function getUsersRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\Repository\\UsersRepository.php';

        return $this->privates['App\\Repository\\UsersRepository'] = new \App\Repository\UsersRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Security\UsersAuthenticator' shared autowired service.
     *
     * @return \App\Security\UsersAuthenticator
     */
    protected function getUsersAuthenticatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Authenticator\\AbstractFormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\PasswordAuthenticatedInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Util\\TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'\\src\\Security\\UsersAuthenticator.php';

        return $this->privates['App\\Security\\UsersAuthenticator'] = new \App\Security\UsersAuthenticator(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /**
     * Gets the private 'Sonata\BlockBundle\Command\DebugBlocksCommand' shared service.
     *
     * @return \Sonata\BlockBundle\Command\DebugBlocksCommand
     */
    protected function getDebugBlocksCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Command\\BaseCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Command\\DebugBlocksCommand.php';

        $this->privates['Sonata\\BlockBundle\\Command\\DebugBlocksCommand'] = $instance = new \Sonata\BlockBundle\Command\DebugBlocksCommand(NULL, ($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()));

        $instance->setName('sonata:block:debug');

        return $instance;
    }

    /**
     * Gets the private 'Vich\UploaderBundle\Util\Transliterator' shared service.
     *
     * @return \Vich\UploaderBundle\Util\Transliterator
     */
    protected function getTransliteratorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Util\\Transliterator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\string\\Slugger\\SluggerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\string\\Slugger\\AsciiSlugger.php';

        return $this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] = new \Vich\UploaderBundle\Util\Transliterator(new \Symfony\Component\String\Slugger\AsciiSlugger());
    }

    /**
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getAnnotations_CacheService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ProxyTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\PhpArrayTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\PhpArrayAdapter.php';

        return new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
    }

    /**
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AnnotationsCacheWarmer.php';

        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', true);
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheService(), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('REZyEoiSEj', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.easyadmin' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_EasyadminService()
    {
        return $this->privates['cache.easyadmin'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('+VdKoi4IqS', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.messenger.restart_workers_signal' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Messenger_RestartWorkersSignalService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('yKkPFlCrjx', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->privates['cache.messenger.restart_workers_signal'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('XeiNmvv5FG', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('XePA84W4c6', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('HK5v4ZbF7V', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('npoRYwYRXv', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AssetsInstallCommand.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CacheClearCommand.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.messenger.restart_workers_signal', 7 => 'cache.security_expression_language', 8 => 'cache.doctrine.orm.default.metadata', 9 => 'cache.doctrine.orm.default.result', 10 => 'cache.doctrine.orm.default.query', 11 => 'cache.easyadmin']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService());
            yield 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService());
            yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService());
            yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService());
            yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService());
            yield 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService());
            yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService());
            yield 'cache.doctrine.orm.default.metadata' => ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService());
            yield 'cache.doctrine.orm.default.result' => ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService());
            yield 'cache.doctrine.orm.default.query' => ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService());
            yield 'cache.easyadmin' => ($this->privates['cache.easyadmin'] ?? $this->getCache_EasyadminService());
        }, 12));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Command\\DebugCommand.php';

        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\CKEditorBundle\\Form\\Type', 4 => 'Vich\\UploaderBundle\\Form\\Type', 5 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type', 6 => 'Liip\\ImagineBundle\\Form\\Type', 7 => '', 8 => 'Sonata\\CoreBundle\\Form\\Type', 9 => 'Sonata\\Form\\Type', 10 => 'Sonata\\BlockBundle\\Form\\Type', 11 => 'Sonata\\AdminBundle\\Form\\Type', 12 => 'Sonata\\AdminBundle\\Form\\Type\\Filter'], [0 => 'App\\Form\\RegistrationFormType', 1 => 'App\\Form\\UsersBlogFormType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 3 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 4 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 5 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 6 => 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType', 7 => 'Vich\\UploaderBundle\\Form\\Type\\VichFileType', 8 => 'Vich\\UploaderBundle\\Form\\Type\\VichImageType', 9 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFormType', 10 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 11 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFiltersFormType', 12 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminAutocompleteType', 13 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminBatchFormType', 14 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminDividerType', 15 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminSectionType', 16 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminGroupType', 17 => 'Liip\\ImagineBundle\\Form\\Type\\ImageType', 18 => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType', 19 => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 20 => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 21 => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 22 => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 23 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 24 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 25 => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 26 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 27 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 28 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 29 => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 30 => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 31 => 'Sonata\\CoreBundle\\Form\\Type\\ColorType', 32 => 'Sonata\\Form\\Type\\ImmutableArrayType', 33 => 'Sonata\\Form\\Type\\BooleanType', 34 => 'Sonata\\Form\\Type\\CollectionType', 35 => 'Sonata\\Form\\Type\\DateRangeType', 36 => 'Sonata\\Form\\Type\\DateTimeRangeType', 37 => 'Sonata\\Form\\Type\\DatePickerType', 38 => 'Sonata\\Form\\Type\\DateTimePickerType', 39 => 'Sonata\\Form\\Type\\DateRangePickerType', 40 => 'Sonata\\Form\\Type\\DateTimeRangePickerType', 41 => 'Sonata\\Form\\Type\\EqualType', 42 => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 43 => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 44 => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 45 => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 46 => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 47 => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 48 => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 49 => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 50 => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 51 => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 52 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 53 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 54 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 55 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 56 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 57 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 58 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EasyAdminExtension', 9 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\FormTypeFieldExtension', 10 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\MopaCompatibilityTypeFieldExtension', 11 => 'Sonata\\AdminBundle\\Form\\Extension\\ChoiceTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser', 2 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Guesser\\MissingDoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_consume_messages' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\ConsumeMessagesCommand
     */
    protected function getConsole_Command_MessengerConsumeMessagesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\ConsumeMessagesCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\RoutableMessageBus.php';

        $this->privates['console.command.messenger_consume_messages'] = $instance = new \Symfony\Component\Messenger\Command\ConsumeMessagesCommand(new \Symfony\Component\Messenger\RoutableMessageBus(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'messenger.bus.default' => ['services', 'message_bus', 'getMessageBusService', false],
        ], [
            'messenger.bus.default' => '?',
        ]), ($this->services['message_bus'] ?? $this->getMessageBusService())), ($this->privates['messenger.receiver_locator'] ?? ($this->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['monolog.logger.messenger'] ?? $this->getMonolog_Logger_MessengerService()), []);

        $instance->setName('messenger:consume');
        $instance->setAliases([0 => 'messenger:consume-messages']);

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    protected function getConsole_Command_MessengerDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\DebugCommand.php';

        $this->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['messenger.bus.default' => ['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => [0 => 'mailer.messenger.message_handler', 1 => []]]]]);

        $instance->setName('debug:messenger');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_setup_transports' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\SetupTransportsCommand
     */
    protected function getConsole_Command_MessengerSetupTransportsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\SetupTransportsCommand.php';

        $this->privates['console.command.messenger_setup_transports'] = $instance = new \Symfony\Component\Messenger\Command\SetupTransportsCommand(($this->privates['messenger.receiver_locator'] ?? ($this->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), []);

        $instance->setName('messenger:setup-transports');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_stop_workers' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\StopWorkersCommand
     */
    protected function getConsole_Command_MessengerStopWorkersService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\StopWorkersCommand.php';

        $this->privates['console.command.messenger_stop_workers'] = $instance = new \Symfony\Component\Messenger\Command\StopWorkersCommand(($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()));

        $instance->setName('messenger:stop-workers');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsListCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsSetCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php';

        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form'), 3 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php'), 4 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php'), 5 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php'), 6 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php'), 7 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php'), 8 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Util\\LegacyTranslatorProxy.php'), 9 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php'), 10 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php'), 11 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Twig\\EasyAdminTwigExtension.php'), 13 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Helper\\Processor.php'), 14 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\TemplateExtension.php'), 15 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\FlashMessage\\FlashManager.php'), 16 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\TranslatableChoiceType.php'), 17 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateRangeType.php'), 18 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateTimeRangeType.php'), 19 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DatePickerType.php'), 20 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateTimePickerType.php'), 21 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateRangePickerType.php'), 22 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateTimeRangePickerType.php'), 23 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\EqualType.php'), 24 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateRangeType.php'), 25 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimeRangeType.php'), 26 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DatePickerType.php'), 27 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimePickerType.php'), 28 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateRangePickerType.php'), 29 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimeRangePickerType.php'), 30 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\EqualType.php'), 31 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Twig\\Extension\\SonataAdminExtension.php'), 32 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\NumberType.php'), 33 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\ChoiceType.php'), 34 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateType.php'), 35 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateRangeType.php'), 36 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateTimeType.php'), 37 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateTimeRangeType.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\TranslationUpdateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Writer\\TranslationWriterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Writer\\TranslationWriter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\PhpFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\XliffFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\PoFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\MoFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\YamlFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\QtFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\CsvFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\IniFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\JsonFileDumper.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Dumper\\IcuResFileDumper.php';

        $a = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'fr', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form'), 3 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php'), 4 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php'), 5 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php'), 6 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php'), 7 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php'), 8 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Util\\LegacyTranslatorProxy.php'), 9 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php'), 10 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php'), 11 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Twig\\EasyAdminTwigExtension.php'), 13 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Helper\\Processor.php'), 14 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\TemplateExtension.php'), 15 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\FlashMessage\\FlashManager.php'), 16 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\TranslatableChoiceType.php'), 17 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateRangeType.php'), 18 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateTimeRangeType.php'), 19 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DatePickerType.php'), 20 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateTimePickerType.php'), 21 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateRangePickerType.php'), 22 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\DateTimeRangePickerType.php'), 23 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle\\Form\\Type\\EqualType.php'), 24 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateRangeType.php'), 25 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimeRangeType.php'), 26 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DatePickerType.php'), 27 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimePickerType.php'), 28 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateRangePickerType.php'), 29 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\DateTimeRangePickerType.php'), 30 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Type\\EqualType.php'), 31 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Twig\\Extension\\SonataAdminExtension.php'), 32 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\NumberType.php'), 33 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\ChoiceType.php'), 34 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateType.php'), 35 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateRangeType.php'), 36 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateTimeType.php'), 37 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Form\\Type\\Filter\\DateTimeRangeType.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /**
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Command\\XliffLintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\XliffLintCommand.php';

        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\yaml\\Command\\LintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\EventListener\\ErrorListener.php';

        $a = new \Symfony\Bridge\Monolog\Logger('console');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\DefaultValueResolver.php';

        return $this->privates['debug.argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_NotTaggedControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver.php';

        return $this->privates['debug.argument_resolver.not_tagged_controller'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver(($this->privates['.service_locator._STIV_h'] ?? $this->get_ServiceLocator_STIVHService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestValueResolver.php';

        return $this->privates['debug.argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestAttributeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver.php';

        return $this->privates['debug.argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

        return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(($this->privates['.service_locator._STIV_h'] ?? $this->get_ServiceLocator_STIVHService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_SessionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\SessionValueResolver.php';

        return $this->privates['debug.argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_VariadicService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\VariadicValueResolver.php';

        return $this->privates['debug.argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->privates['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DumpListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\ContextualizedDumper.php';

        return $this->privates['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), new \Symfony\Component\VarDumper\Dumper\ContextualizedDumper(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->getVarDumper_ContextualizedCliDumper_InnerService()), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()))]), ($this->privates['var_dumper.server_connection'] ?? $this->getVarDumper_ServerConnectionService()));
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->getDebug_FileLinkFormatter_UrlFormatService());
        });
    }

    /**
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    protected function getDebug_FileLinkFormatter_UrlFormatService()
    {
        return $this->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\HttpKernel\Debug\FileLinkFormatter::generateUrlFormat(($this->services['router'] ?? $this->getRouterService()), '_profiler_open_file', '?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->getDebug_Security_Voter_Security_Access_AuthenticatedVoterService());
            yield 1 => ($this->privates['debug.security.voter.security.access.simple_role_voter'] ?? $this->getDebug_Security_Voter_Security_Access_SimpleRoleVoterService());
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->getDebug_Security_Voter_Security_Access_ExpressionVoterService());
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'debug.security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_Security_UserValueResolverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Controller\\UserValueResolver.php';

        return $this->privates['debug.security.user_value_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\AuthenticatedVoter.php';

        return $this->privates['debug.security.voter.security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL)))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_ExpressionVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\ExpressionVoter.php';

        return $this->privates['debug.security.voter.security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([])))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.simple_role_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_SimpleRoleVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\RoleVoter.php';

        return $this->privates['debug.security.voter.security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter(), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.vote_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\VoteListener
     */
    protected function getDebug_Security_Voter_VoteListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\EventListener\\VoteListener.php';

        return $this->privates['debug.security.voter.vote_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\VoteListener(($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()));
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\MetadataCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\ResultCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\CollectionRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\CollectionRegionDoctrineCommand.php';

        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\EntityRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\CreateDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DropDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ImportDoctrineCommand.php';

        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\EnsureProductionSettingsCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand.php';

        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    protected function getDoctrine_FixturesLoadCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Command\\LoadDataFixturesDoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\DataFixtures\\ContainerAwareLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Loader\\SymfonyFixturesLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Fixture.php';
        include_once \dirname(__DIR__, 4).'\\src\\DataFixtures\\AppFixtures.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\DataFixtures\\ArticlesFixtures.php';
        include_once \dirname(__DIR__, 4).'\\src\\DataFixtures\\CategoriesFixture.php';
        include_once \dirname(__DIR__, 4).'\\src\\DataFixtures\\KeywordFixture.php';
        include_once \dirname(__DIR__, 4).'\\src\\DataFixtures\\UsersBlogFixtures.php';

        $a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($this);
        $a->addFixtures([0 => ['fixture' => new \App\DataFixtures\AppFixtures(), 'groups' => []], 1 => ['fixture' => new \App\DataFixtures\ArticlesFixtures(($this->privates['App\\Repository\\CategoriesRepository'] ?? $this->getCategoriesRepositoryService()), ($this->privates['App\\Repository\\KeywordRepository'] ?? $this->getKeywordRepositoryService()), ($this->privates['App\\Repository\\UsersBlogRepository'] ?? $this->getUsersBlogRepositoryService())), 'groups' => []], 2 => ['fixture' => new \App\DataFixtures\CategoriesFixture(), 'groups' => []], 3 => ['fixture' => new \App\DataFixtures\KeywordFixture(), 'groups' => []], 4 => ['fixture' => new \App\DataFixtures\UsersBlogFixtures(), 'groups' => []]]);

        $this->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a, ($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ConvertMappingCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ConvertMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\ImportMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\InfoCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\InfoDoctrineCommand.php';

        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\PropertyInfo\\DoctrineExtractor.php';

        return $this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\AttachEntityListenersListener.php';

        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber
     */
    protected function getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Messenger\\DoctrineClearEntityManagerWorkerSubscriber.php';

        return $this->privates['doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager'] = new \Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\CacheWarmer\\ProxyCacheWarmer.php';

        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Validator\\Constraints\\UniqueEntityValidator.php';

        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\RunDqlCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\RunDqlDoctrineCommand.php';

        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\RunSqlDoctrineCommand.php';

        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\CreateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\CreateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\DropCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\DropSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\UpdateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ValidateSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ValidateSchemaCommand.php';

        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsDiffDoctrineCommand.php';

        $this->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();

        $instance->setName('doctrine:migrations:diff');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand
     */
    protected function getDoctrineMigrations_DumpSchemaCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsDumpSchemaDoctrineCommand.php';

        $this->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand();

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsExecuteDoctrineCommand.php';

        $this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();

        $instance->setName('doctrine:migrations:execute');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsGenerateDoctrineCommand.php';

        $this->privates['doctrine_migrations.generate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand();

        $instance->setName('doctrine:migrations:generate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsLatestDoctrineCommand.php';

        $this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsMigrateDoctrineCommand.php';

        $this->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand();

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.rollup_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand
     */
    protected function getDoctrineMigrations_RollupCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsRollupDoctrineCommand.php';

        $this->privates['doctrine_migrations.rollup_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand();

        $instance->setName('doctrine:migrations:rollup');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsStatusDoctrineCommand.php';

        $this->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand();

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand
     */
    protected function getDoctrineMigrations_UpToDateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsUpToDateDoctrineCommand.php';

        $this->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand();

        $instance->setName('doctrine:migrations:up-to-date');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsVersionDoctrineCommand.php';

        $this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();

        $instance->setName('doctrine:migrations:version');

        return $instance;
    }

    /**
     * Gets the private 'easyadmin.filter.type.array' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\ArrayFilterType
     */
    protected function getEasyadmin_Filter_Type_ArrayService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\ArrayFilterType.php';

        return $this->privates['easyadmin.filter.type.array'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\ArrayFilterType();
    }

    /**
     * Gets the private 'easyadmin.filter.type.boolean' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\BooleanFilterType
     */
    protected function getEasyadmin_Filter_Type_BooleanService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\BooleanFilterType.php';

        return $this->privates['easyadmin.filter.type.boolean'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\BooleanFilterType();
    }

    /**
     * Gets the private 'easyadmin.filter.type.choice' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\ChoiceFilterType
     */
    protected function getEasyadmin_Filter_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\ChoiceFilterType.php';

        return $this->privates['easyadmin.filter.type.choice'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\ChoiceFilterType();
    }

    /**
     * Gets the private 'easyadmin.filter.type.comparison' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\ComparisonFilterType
     */
    protected function getEasyadmin_Filter_Type_ComparisonService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\ComparisonFilterType.php';

        return $this->privates['easyadmin.filter.type.comparison'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\ComparisonFilterType();
    }

    /**
     * Gets the private 'easyadmin.filter.type.date' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\DateTimeFilterType
     */
    protected function getEasyadmin_Filter_Type_DateService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\DateTimeFilterType.php';

        return $this->privates['easyadmin.filter.type.date'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\DateTimeFilterType('Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType');
    }

    /**
     * Gets the private 'easyadmin.filter.type.dateinterval' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\ComparisonFilterType
     */
    protected function getEasyadmin_Filter_Type_DateintervalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\ComparisonFilterType.php';

        return $this->privates['easyadmin.filter.type.dateinterval'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\ComparisonFilterType('Symfony\\Component\\Form\\Extension\\Core\\Type\\DateIntervalType', [], '', ['type' => 'datetime']);
    }

    /**
     * Gets the private 'easyadmin.filter.type.datetime' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\DateTimeFilterType
     */
    protected function getEasyadmin_Filter_Type_DatetimeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\DateTimeFilterType.php';

        return $this->privates['easyadmin.filter.type.datetime'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\DateTimeFilterType();
    }

    /**
     * Gets the private 'easyadmin.filter.type.decimal' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\NumericFilterType
     */
    protected function getEasyadmin_Filter_Type_DecimalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\NumericFilterType.php';

        return $this->privates['easyadmin.filter.type.decimal'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\NumericFilterType('Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType', ['input' => 'string']);
    }

    /**
     * Gets the private 'easyadmin.filter.type.entity' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\EntityFilterType
     */
    protected function getEasyadmin_Filter_Type_EntityService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\EntityFilterType.php';

        return $this->privates['easyadmin.filter.type.entity'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\EntityFilterType();
    }

    /**
     * Gets the private 'easyadmin.filter.type.float' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\NumericFilterType
     */
    protected function getEasyadmin_Filter_Type_FloatService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\NumericFilterType.php';

        return $this->privates['easyadmin.filter.type.float'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\NumericFilterType();
    }

    /**
     * Gets the private 'easyadmin.filter.type.integer' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\NumericFilterType
     */
    protected function getEasyadmin_Filter_Type_IntegerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\NumericFilterType.php';

        return $this->privates['easyadmin.filter.type.integer'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\NumericFilterType('Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType');
    }

    /**
     * Gets the private 'easyadmin.filter.type.text' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\TextFilterType
     */
    protected function getEasyadmin_Filter_Type_TextService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\TextFilterType.php';

        return $this->privates['easyadmin.filter.type.text'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\TextFilterType();
    }

    /**
     * Gets the private 'easyadmin.filter.type.textarea' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\TextFilterType
     */
    protected function getEasyadmin_Filter_Type_TextareaService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\TextFilterType.php';

        return $this->privates['easyadmin.filter.type.textarea'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\TextFilterType('Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType');
    }

    /**
     * Gets the private 'easyadmin.filter.type.time' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\DateTimeFilterType
     */
    protected function getEasyadmin_Filter_Type_TimeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\DateTimeFilterType.php';

        return $this->privates['easyadmin.filter.type.time'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\DateTimeFilterType('Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType');
    }

    /**
     * Gets the private 'easyadmin.filter.type_guesser.doctrine' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Guesser\DoctrineOrmFilterTypeGuesser
     */
    protected function getEasyadmin_Filter_TypeGuesser_DoctrineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Form\\DoctrineOrmTypeGuesser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Guesser\\DoctrineOrmFilterTypeGuesser.php';

        return $this->privates['easyadmin.filter.type_guesser.doctrine'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Guesser\DoctrineOrmFilterTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'easyadmin.form.type' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminFormType
     */
    protected function getEasyadmin_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminFormType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\TypeConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\CodeEditorTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\TextareaTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\AutocompleteTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\CollectionTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\CheckboxTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\Configurator\\ChoiceFilterTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\EntityTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\IvoryCKEditorTypeConfigurator.php';

        return $this->privates['easyadmin.form.type'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminFormType(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), [8 => ($this->privates['easyadmin.form.type.configurator.code_editor'] ?? ($this->privates['easyadmin.form.type.configurator.code_editor'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CodeEditorTypeConfigurator())), 7 => ($this->privates['easyadmin.form.type.configurator.textarea'] ?? ($this->privates['easyadmin.form.type.configurator.textarea'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TextareaTypeConfigurator())), 6 => ($this->privates['easyadmin.form.type.configurator.autocomplete'] ?? ($this->privates['easyadmin.form.type.configurator.autocomplete'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\AutocompleteTypeConfigurator())), 5 => ($this->privates['easyadmin.form.type.configurator.collection'] ?? ($this->privates['easyadmin.form.type.configurator.collection'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CollectionTypeConfigurator())), 4 => ($this->privates['easyadmin.form.type.configurator.checkbox'] ?? ($this->privates['easyadmin.form.type.configurator.checkbox'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CheckboxTypeConfigurator())), 3 => ($this->privates['easyadmin.form.type.configurator.type'] ?? $this->getEasyadmin_Form_Type_Configurator_TypeService()), 2 => ($this->privates['easyadmin.filter.type.configurator.choice'] ?? ($this->privates['easyadmin.filter.type.configurator.choice'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\Configurator\ChoiceFilterTypeConfigurator())), 1 => ($this->privates['easyadmin.form.type.configurator.entity'] ?? ($this->privates['easyadmin.form.type.configurator.entity'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\EntityTypeConfigurator())), 0 => ($this->privates['easyadmin.form.type.configurator.ivory_ckeditor'] ?? ($this->privates['easyadmin.form.type.configurator.ivory_ckeditor'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\IvoryCKEditorTypeConfigurator()))], ($this->services['easyadmin.security.authorization_checker'] ?? $this->getEasyadmin_Security_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'easyadmin.form.type.autocomplete' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminAutocompleteType
     */
    protected function getEasyadmin_Form_Type_AutocompleteService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\DataMapperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminAutocompleteType.php';

        return $this->privates['easyadmin.form.type.autocomplete'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminAutocompleteType(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()));
    }

    /**
     * Gets the private 'easyadmin.form.type.batch' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminBatchFormType
     */
    protected function getEasyadmin_Form_Type_BatchService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminBatchFormType.php';

        return $this->privates['easyadmin.form.type.batch'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminBatchFormType(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()));
    }

    /**
     * Gets the private 'easyadmin.form.type.configurator.type' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TypeConfigurator
     */
    protected function getEasyadmin_Form_Type_Configurator_TypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\TypeConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\TypeConfigurator.php';

        return $this->privates['easyadmin.form.type.configurator.type'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TypeConfigurator(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()));
    }

    /**
     * Gets the private 'easyadmin.form.type.divider' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminDividerType
     */
    protected function getEasyadmin_Form_Type_DividerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminDividerType.php';

        return $this->privates['easyadmin.form.type.divider'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminDividerType();
    }

    /**
     * Gets the private 'easyadmin.form.type.extension' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EasyAdminExtension
     */
    protected function getEasyadmin_Form_Type_ExtensionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Extension\\EasyAdminExtension.php';

        return $this->privates['easyadmin.form.type.extension'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EasyAdminExtension(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'easyadmin.form.type.fileupload' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType
     */
    protected function getEasyadmin_Form_Type_FileuploadService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\DataMapperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\FileUploadType.php';

        return $this->privates['easyadmin.form.type.fileupload'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType(\dirname(__DIR__, 4));
    }

    /**
     * Gets the private 'easyadmin.form.type.filters' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminFiltersFormType
     */
    protected function getEasyadmin_Form_Type_FiltersService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminFiltersFormType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\TypeConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\CodeEditorTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\TextareaTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\AutocompleteTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\CollectionTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\CheckboxTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\Configurator\\ChoiceFilterTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\EntityTypeConfigurator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Configurator\\IvoryCKEditorTypeConfigurator.php';

        return $this->privates['easyadmin.form.type.filters'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminFiltersFormType(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), [8 => ($this->privates['easyadmin.form.type.configurator.code_editor'] ?? ($this->privates['easyadmin.form.type.configurator.code_editor'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CodeEditorTypeConfigurator())), 7 => ($this->privates['easyadmin.form.type.configurator.textarea'] ?? ($this->privates['easyadmin.form.type.configurator.textarea'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TextareaTypeConfigurator())), 6 => ($this->privates['easyadmin.form.type.configurator.autocomplete'] ?? ($this->privates['easyadmin.form.type.configurator.autocomplete'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\AutocompleteTypeConfigurator())), 5 => ($this->privates['easyadmin.form.type.configurator.collection'] ?? ($this->privates['easyadmin.form.type.configurator.collection'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CollectionTypeConfigurator())), 4 => ($this->privates['easyadmin.form.type.configurator.checkbox'] ?? ($this->privates['easyadmin.form.type.configurator.checkbox'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CheckboxTypeConfigurator())), 3 => ($this->privates['easyadmin.form.type.configurator.type'] ?? $this->getEasyadmin_Form_Type_Configurator_TypeService()), 2 => ($this->privates['easyadmin.filter.type.configurator.choice'] ?? ($this->privates['easyadmin.filter.type.configurator.choice'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\Configurator\ChoiceFilterTypeConfigurator())), 1 => ($this->privates['easyadmin.form.type.configurator.entity'] ?? ($this->privates['easyadmin.form.type.configurator.entity'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\EntityTypeConfigurator())), 0 => ($this->privates['easyadmin.form.type.configurator.ivory_ckeditor'] ?? ($this->privates['easyadmin.form.type.configurator.ivory_ckeditor'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\IvoryCKEditorTypeConfigurator()))]);
    }

    /**
     * Gets the private 'easyadmin.form.type.group' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminGroupType
     */
    protected function getEasyadmin_Form_Type_GroupService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminGroupType.php';

        return $this->privates['easyadmin.form.type.group'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminGroupType();
    }

    /**
     * Gets the private 'easyadmin.form.type.section' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminSectionType
     */
    protected function getEasyadmin_Form_Type_SectionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminSectionType.php';

        return $this->privates['easyadmin.form.type.section'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminSectionType();
    }

    /**
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), true);
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

        return $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'\\src/Resources'), [0 => (\dirname(__DIR__, 4).'\\src')], false);
    }

    /**
     * Gets the private 'fm_elfinder.command.installer' shared service.
     *
     * @return \FM\ElfinderBundle\Command\ElFinderInstallerCommand
     */
    protected function getFmElfinder_Command_InstallerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Command\\ElFinderInstallerCommand.php';

        $this->privates['fm_elfinder.command.installer'] = $instance = new \FM\ElfinderBundle\Command\ElFinderInstallerCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))));

        $instance->setName('elfinder:install');

        return $instance;
    }

    /**
     * Gets the private 'fm_elfinder.form.type' shared service.
     *
     * @return \FM\ElfinderBundle\Form\Type\ElFinderType
     */
    protected function getFmElfinder_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Form\\Type\\ElFinderType.php';

        return $this->privates['fm_elfinder.form.type'] = new \FM\ElfinderBundle\Form\Type\ElFinderType();
    }

    /**
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\CachingFactoryDecorator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\PropertyAccessDecorator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\DefaultChoiceListFactory.php';

        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService())));
    }

    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'easyadmin.filter.type.array' => ['privates', 'easyadmin.filter.type.array', 'getEasyadmin_Filter_Type_ArrayService', false],
            'easyadmin.filter.type.boolean' => ['privates', 'easyadmin.filter.type.boolean', 'getEasyadmin_Filter_Type_BooleanService', false],
            'easyadmin.filter.type.choice' => ['privates', 'easyadmin.filter.type.choice', 'getEasyadmin_Filter_Type_ChoiceService', false],
            'easyadmin.filter.type.comparison' => ['privates', 'easyadmin.filter.type.comparison', 'getEasyadmin_Filter_Type_ComparisonService', false],
            'easyadmin.filter.type.date' => ['privates', 'easyadmin.filter.type.date', 'getEasyadmin_Filter_Type_DateService', false],
            'easyadmin.filter.type.dateinterval' => ['privates', 'easyadmin.filter.type.dateinterval', 'getEasyadmin_Filter_Type_DateintervalService', false],
            'easyadmin.filter.type.datetime' => ['privates', 'easyadmin.filter.type.datetime', 'getEasyadmin_Filter_Type_DatetimeService', false],
            'easyadmin.filter.type.decimal' => ['privates', 'easyadmin.filter.type.decimal', 'getEasyadmin_Filter_Type_DecimalService', false],
            'easyadmin.filter.type.entity' => ['privates', 'easyadmin.filter.type.entity', 'getEasyadmin_Filter_Type_EntityService', false],
            'easyadmin.filter.type.float' => ['privates', 'easyadmin.filter.type.float', 'getEasyadmin_Filter_Type_FloatService', false],
            'easyadmin.filter.type.integer' => ['privates', 'easyadmin.filter.type.integer', 'getEasyadmin_Filter_Type_IntegerService', false],
            'easyadmin.filter.type.text' => ['privates', 'easyadmin.filter.type.text', 'getEasyadmin_Filter_Type_TextService', false],
            'easyadmin.filter.type.textarea' => ['privates', 'easyadmin.filter.type.textarea', 'getEasyadmin_Filter_Type_TextareaService', false],
            'easyadmin.filter.type.time' => ['privates', 'easyadmin.filter.type.time', 'getEasyadmin_Filter_Type_TimeService', false],
        ], [
            'easyadmin.filter.type.array' => '?',
            'easyadmin.filter.type.boolean' => '?',
            'easyadmin.filter.type.choice' => '?',
            'easyadmin.filter.type.comparison' => '?',
            'easyadmin.filter.type.date' => '?',
            'easyadmin.filter.type.dateinterval' => '?',
            'easyadmin.filter.type.datetime' => '?',
            'easyadmin.filter.type.decimal' => '?',
            'easyadmin.filter.type.entity' => '?',
            'easyadmin.filter.type.float' => '?',
            'easyadmin.filter.type.integer' => '?',
            'easyadmin.filter.type.text' => '?',
            'easyadmin.filter.type.textarea' => '?',
            'easyadmin.filter.type.time' => '?',
        ]), [], new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0)), 1 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', false],
            'App\\Form\\UsersBlogFormType' => ['privates', 'App\\Form\\UsersBlogFormType', 'getUsersBlogFormTypeService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminAutocompleteType' => ['privates', 'easyadmin.form.type.autocomplete', 'getEasyadmin_Form_Type_AutocompleteService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminBatchFormType' => ['privates', 'easyadmin.form.type.batch', 'getEasyadmin_Form_Type_BatchService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminDividerType' => ['privates', 'easyadmin.form.type.divider', 'getEasyadmin_Form_Type_DividerService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFiltersFormType' => ['privates', 'easyadmin.form.type.filters', 'getEasyadmin_Form_Type_FiltersService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFormType' => ['privates', 'easyadmin.form.type', 'getEasyadmin_Form_TypeService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminGroupType' => ['privates', 'easyadmin.form.type.group', 'getEasyadmin_Form_Type_GroupService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminSectionType' => ['privates', 'easyadmin.form.type.section', 'getEasyadmin_Form_Type_SectionService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType' => ['privates', 'easyadmin.form.type.fileupload', 'getEasyadmin_Form_Type_FileuploadService', false],
            'FM\\ElfinderBundle\\Form\\Type\\ElFinderType' => ['privates', 'fm_elfinder.form.type', 'getFmElfinder_Form_TypeService', false],
            'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType' => ['privates', 'fos_ck_editor.form.type', 'getFosCkEditor_Form_TypeService', false],
            'Liip\\ImagineBundle\\Form\\Type\\ImageType' => ['privates', 'liip_imagine.form.type.image', 'getLiipImagine_Form_Type_ImageService', false],
            'Sonata\\AdminBundle\\Form\\Type\\AdminType' => ['services', 'sonata.admin.form.type.admin', 'getSonata_Admin_Form_Type_AdminService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => ['services', 'sonata.admin.doctrine_orm.form.type.choice_field_mask', 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService', false],
            'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => ['services', 'sonata.admin.form.type.collection', 'getSonata_Admin_Form_Type_CollectionService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => ['services', 'sonata.admin.form.filter.type.choice', 'getSonata_Admin_Form_Filter_Type_ChoiceService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => ['services', 'sonata.admin.form.filter.type.daterange', 'getSonata_Admin_Form_Filter_Type_DaterangeService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => ['services', 'sonata.admin.form.filter.type.datetime_range', 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => ['services', 'sonata.admin.form.filter.type.datetime', 'getSonata_Admin_Form_Filter_Type_DatetimeService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => ['services', 'sonata.admin.form.filter.type.date', 'getSonata_Admin_Form_Filter_Type_DateService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => ['services', 'sonata.admin.form.filter.type.default', 'getSonata_Admin_Form_Filter_Type_DefaultService', false],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => ['services', 'sonata.admin.form.filter.type.number', 'getSonata_Admin_Form_Filter_Type_NumberService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => ['services', 'sonata.admin.form.type.model_autocomplete', 'getSonata_Admin_Form_Type_ModelAutocompleteService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => ['services', 'sonata.admin.form.type.model_hidden', 'getSonata_Admin_Form_Type_ModelHiddenService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ModelListType' => ['services', 'sonata.admin.form.type.model_list', 'getSonata_Admin_Form_Type_ModelListService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => ['services', 'sonata.admin.form.type.model_reference', 'getSonata_Admin_Form_Type_ModelReferenceService', false],
            'Sonata\\AdminBundle\\Form\\Type\\ModelType' => ['services', 'sonata.admin.form.type.model_choice', 'getSonata_Admin_Form_Type_ModelChoiceService', false],
            'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => ['privates', 'sonata.block.form.type.container_template', 'getSonata_Block_Form_Type_ContainerTemplateService', false],
            'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => ['privates', 'sonata.block.form.type.block', 'getSonata_Block_Form_Type_BlockService', false],
            'Sonata\\CoreBundle\\Form\\Type\\BooleanType' => ['services', 'sonata.core.form.type.boolean_legacy', 'getSonata_Core_Form_Type_BooleanLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\CollectionType' => ['services', 'sonata.core.form.type.collection_legacy', 'getSonata_Core_Form_Type_CollectionLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType' => ['services', 'sonata.core.form.type.color_selector', 'getSonata_Core_Form_Type_ColorSelectorService', false],
            'Sonata\\CoreBundle\\Form\\Type\\ColorType' => ['services', 'sonata.core.form.type.color_legacy', 'getSonata_Core_Form_Type_ColorLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DatePickerType' => ['services', 'sonata.core.form.type.date_picker_legacy', 'getSonata_Core_Form_Type_DatePickerLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType' => ['services', 'sonata.core.form.type.date_range_picker_legacy', 'getSonata_Core_Form_Type_DateRangePickerLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DateRangeType' => ['services', 'sonata.core.form.type.date_range_legacy', 'getSonata_Core_Form_Type_DateRangeLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType' => ['services', 'sonata.core.form.type.datetime_picker_legacy', 'getSonata_Core_Form_Type_DatetimePickerLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType' => ['services', 'sonata.core.form.type.datetime_range_picker_legacy', 'getSonata_Core_Form_Type_DatetimeRangePickerLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType' => ['services', 'sonata.core.form.type.datetime_range_legacy', 'getSonata_Core_Form_Type_DatetimeRangeLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\EqualType' => ['services', 'sonata.core.form.type.equal_legacy', 'getSonata_Core_Form_Type_EqualLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType' => ['services', 'sonata.core.form.type.array_legacy', 'getSonata_Core_Form_Type_ArrayLegacyService', false],
            'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType' => ['services', 'sonata.core.form.type.translatable_choice', 'getSonata_Core_Form_Type_TranslatableChoiceService', false],
            'Sonata\\Form\\Type\\BooleanType' => ['services', 'sonata.core.form.type.boolean', 'getSonata_Core_Form_Type_BooleanService', false],
            'Sonata\\Form\\Type\\CollectionType' => ['services', 'sonata.core.form.type.collection', 'getSonata_Core_Form_Type_CollectionService', false],
            'Sonata\\Form\\Type\\DatePickerType' => ['services', 'sonata.core.form.type.date_picker', 'getSonata_Core_Form_Type_DatePickerService', false],
            'Sonata\\Form\\Type\\DateRangePickerType' => ['services', 'sonata.core.form.type.date_range_picker', 'getSonata_Core_Form_Type_DateRangePickerService', false],
            'Sonata\\Form\\Type\\DateRangeType' => ['services', 'sonata.core.form.type.date_range', 'getSonata_Core_Form_Type_DateRangeService', false],
            'Sonata\\Form\\Type\\DateTimePickerType' => ['services', 'sonata.core.form.type.datetime_picker', 'getSonata_Core_Form_Type_DatetimePickerService', false],
            'Sonata\\Form\\Type\\DateTimeRangePickerType' => ['services', 'sonata.core.form.type.datetime_range_picker', 'getSonata_Core_Form_Type_DatetimeRangePickerService', false],
            'Sonata\\Form\\Type\\DateTimeRangeType' => ['services', 'sonata.core.form.type.datetime_range', 'getSonata_Core_Form_Type_DatetimeRangeService', false],
            'Sonata\\Form\\Type\\EqualType' => ['services', 'sonata.core.form.type.equal', 'getSonata_Core_Form_Type_EqualService', false],
            'Sonata\\Form\\Type\\ImmutableArrayType' => ['services', 'sonata.core.form.type.array', 'getSonata_Core_Form_Type_ArrayService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
            'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => ['services', 'vich_uploader.form.type.file', 'getVichUploader_Form_Type_FileService', false],
            'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => ['services', 'vich_uploader.form.type.image', 'getVichUploader_Form_Type_ImageService', false],
        ], [
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\UsersBlogFormType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminAutocompleteType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminBatchFormType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminDividerType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFiltersFormType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFormType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminGroupType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminSectionType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType' => '?',
            'FM\\ElfinderBundle\\Form\\Type\\ElFinderType' => '?',
            'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType' => '?',
            'Liip\\ImagineBundle\\Form\\Type\\ImageType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\AdminType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelListType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelType' => '?',
            'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => '?',
            'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\BooleanType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\CollectionType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\ColorType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DatePickerType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DateRangeType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\EqualType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType' => '?',
            'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType' => '?',
            'Sonata\\Form\\Type\\BooleanType' => '?',
            'Sonata\\Form\\Type\\CollectionType' => '?',
            'Sonata\\Form\\Type\\DatePickerType' => '?',
            'Sonata\\Form\\Type\\DateRangePickerType' => '?',
            'Sonata\\Form\\Type\\DateRangeType' => '?',
            'Sonata\\Form\\Type\\DateTimePickerType' => '?',
            'Sonata\\Form\\Type\\DateTimeRangePickerType' => '?',
            'Sonata\\Form\\Type\\DateTimeRangeType' => '?',
            'Sonata\\Form\\Type\\EqualType' => '?',
            'Sonata\\Form\\Type\\ImmutableArrayType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
            'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => '?',
            'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->getForm_TypeExtension_Form_TransformationFailureHandlingService());
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->getForm_TypeExtension_Upload_ValidatorService());
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
            yield 5 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->getForm_TypeExtension_Form_DataCollectorService());
            yield 6 => ($this->privates['easyadmin.form.type.extension'] ?? $this->getEasyadmin_Form_Type_ExtensionService());
            yield 7 => ($this->services['sonata.admin.form.extension.field'] ?? $this->getSonata_Admin_Form_Extension_FieldService());
            yield 8 => ($this->services['sonata.admin.form.extension.field.mopa'] ?? ($this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension()));
        }, 9), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => new RewindableGenerator(function () {
            yield 0 => ($this->services['sonata.admin.form.extension.choice'] ?? ($this->services['sonata.admin.form.extension.choice'] = new \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
            yield 2 => ($this->services['easyadmin.form.guesser.missing_doctrine_orm_type_guesser'] ?? $this->getEasyadmin_Form_Guesser_MissingDoctrineOrmTypeGuesserService());
        }, 3))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService())));
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Util\\ServerParams.php';

        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\ChoiceType.php';

        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()));
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Form\\Type\\DoctrineType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Form\\Type\\EntityType.php';

        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\BaseType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FormType.php';

        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()));
    }

    /**
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php';

        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /**
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension.php';

        return $this->privates['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
    }

    /**
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\RequestHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler.php';

        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService())));
    }

    /**
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php';

        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\BaseValidatorExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\FormTypeValidatorExtension.php';

        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php';

        return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Form\\DoctrineOrmTypeGuesser.php';

        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\ValidatorTypeGuesser.php';

        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'fos_ck_editor.command.installer' shared service.
     *
     * @return \FOS\CKEditorBundle\Command\CKEditorInstallerCommand
     */
    protected function getFosCkEditor_Command_InstallerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Command\\CKEditorInstallerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Installer\\CKEditorInstaller.php';

        $this->privates['fos_ck_editor.command.installer'] = $instance = new \FOS\CKEditorBundle\Command\CKEditorInstallerCommand(new \FOS\CKEditorBundle\Installer\CKEditorInstaller());

        $instance->setName('ckeditor:install');

        return $instance;
    }

    /**
     * Gets the private 'fos_ck_editor.form.type' shared service.
     *
     * @return \FOS\CKEditorBundle\Form\Type\CKEditorType
     */
    protected function getFosCkEditor_Form_TypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Form\\Type\\CKEditorType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Config\\CKEditorConfigurationInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Config\\CKEditorConfiguration.php';

        return $this->privates['fos_ck_editor.form.type'] = new \FOS\CKEditorBundle\Form\Type\CKEditorType(new \FOS\CKEditorBundle\Config\CKEditorConfiguration(['configs' => ['main_config' => ['toolbar' => [0 => ['name' => 'styles', 'items' => [0 => 'Bold', 1 => 'Italic', 2 => 'Underline', 3 => 'Strike', 4 => 'Blockquote', 5 => '-', 6 => 'Link', 7 => '-', 8 => 'RemoveFormat', 9 => '-', 10 => 'NumberedList', 11 => 'BulletedList', 12 => '-', 13 => 'Outdent', 14 => 'Indent', 15 => '-', 16 => '-', 17 => 'JustifyLeft', 18 => 'JustifyCenter', 19 => 'JustifyRight', 20 => 'JustifyBlock', 21 => '-', 22 => 'Image', 23 => 'Table', 24 => '-', 25 => 'Styles', 26 => 'Format', 27 => 'Font', 28 => 'FontSize', 29 => '-', 30 => 'TextColor', 31 => 'BGColor', 32 => 'Source']]]]], 'enable' => true, 'async' => false, 'auto_inline' => true, 'inline' => false, 'autoload' => true, 'jquery' => false, 'require_js' => false, 'input_sync' => false, 'base_path' => 'bundles/fosckeditor/', 'js_path' => 'bundles/fosckeditor/ckeditor.js', 'jquery_path' => 'bundles/fosckeditor/adapters/jquery.js', 'default_config' => NULL, 'plugins' => [], 'styles' => [], 'templates' => [], 'filebrowsers' => [], 'toolbars' => ['configs' => [], 'items' => []]]));
    }

    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\InlineFragmentRenderer.php';

        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'knp_menu.menu_provider.builder_alias' shared service.
     *
     * @return \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider
     */
    protected function getKnpMenu_MenuProvider_BuilderAliasService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu-bundle\\src\\Provider\\BuilderAliasProvider.php';

        return $this->privates['knp_menu.menu_provider.builder_alias'] = new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider(($this->services['kernel'] ?? $this->get('kernel', 1)), $this, ($this->services['knp_menu.factory'] ?? $this->getKnpMenu_FactoryService()));
    }

    /**
     * Gets the private 'knp_menu.menu_provider.chain' shared service.
     *
     * @return \Knp\Menu\Provider\ChainProvider
     */
    protected function getKnpMenu_MenuProvider_ChainService()
    {
        return $this->privates['knp_menu.menu_provider.chain'] = new \Knp\Menu\Provider\ChainProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.menu_provider.lazy'] ?? $this->getKnpMenu_MenuProvider_LazyService());
            yield 1 => ($this->privates['knp_menu.menu_provider.builder_alias'] ?? $this->getKnpMenu_MenuProvider_BuilderAliasService());
            yield 2 => ($this->privates['sonata.admin.menu.group_provider'] ?? $this->getSonata_Admin_Menu_GroupProviderService());
        }, 3));
    }

    /**
     * Gets the private 'knp_menu.menu_provider.lazy' shared service.
     *
     * @return \Knp\Menu\Provider\LazyProvider
     */
    protected function getKnpMenu_MenuProvider_LazyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Provider\\LazyProvider.php';

        return $this->privates['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider(['sonata_admin_sidebar' => function () {
            return ($this->services['sonata.admin.sidebar_menu'] ?? $this->getSonata_Admin_SidebarMenuService());
        }]);
    }

    /**
     * Gets the private 'knp_menu.renderer.list' shared service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\Renderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\RendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\ListRenderer.php';

        return $this->privates['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService()), [], 'UTF-8');
    }

    /**
     * Gets the private 'knp_menu.renderer.twig' shared service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\RendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Renderer\\TwigRenderer.php';

        return $this->privates['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer(($this->services['twig'] ?? $this->getTwigService()), '@KnpMenu/menu.html.twig', ($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService()), []);
    }

    /**
     * Gets the private 'knp_menu.voter.router' shared service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Matcher\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Matcher\\Voter\\RouteVoter.php';

        return $this->privates['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'knp_paginator.subscriber.sliding_pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->privates['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(['defaultPaginationTemplate' => '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig', 'defaultSortableTemplate' => '@KnpPaginator/Pagination/sortable_link.html.twig', 'defaultFiltrationTemplate' => '@KnpPaginator/Pagination/filtration.html.twig', 'defaultPageRange' => 5]);
    }

    /**
     * Gets the private 'liip_imagine.binary.mime_type_guesser' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser
     */
    protected function getLiipImagine_Binary_MimeTypeGuesserService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Binary\\MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Binary\\SimpleMimeTypeGuesser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypes.php';

        return $this->privates['liip_imagine.binary.mime_type_guesser'] = new \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser(\Symfony\Component\Mime\MimeTypes::getDefault());
    }

    /**
     * Gets the private 'liip_imagine.command.cache_remove' shared service.
     *
     * @return \Liip\ImagineBundle\Command\RemoveCacheCommand
     */
    protected function getLiipImagine_Command_CacheRemoveService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Command\\CacheCommandTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Command\\RemoveCacheCommand.php';

        $this->privates['liip_imagine.command.cache_remove'] = $instance = new \Liip\ImagineBundle\Command\RemoveCacheCommand(($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), ($this->services['liip_imagine.filter.manager'] ?? $this->getLiipImagine_Filter_ManagerService()));

        $instance->setName('liip:imagine:cache:remove');

        return $instance;
    }

    /**
     * Gets the private 'liip_imagine.command.cache_resolve' shared service.
     *
     * @return \Liip\ImagineBundle\Command\ResolveCacheCommand
     */
    protected function getLiipImagine_Command_CacheResolveService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Command\\CacheCommandTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Command\\ResolveCacheCommand.php';

        $this->privates['liip_imagine.command.cache_resolve'] = $instance = new \Liip\ImagineBundle\Command\ResolveCacheCommand(($this->services['liip_imagine.data.manager'] ?? $this->getLiipImagine_Data_ManagerService()), ($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), ($this->services['liip_imagine.filter.manager'] ?? $this->getLiipImagine_Filter_ManagerService()));

        $instance->setName('liip:imagine:cache:resolve');

        return $instance;
    }

    /**
     * Gets the private 'liip_imagine.filter.configuration' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->privates['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration($this->parameters['liip_imagine.filter_sets']);
    }

    /**
     * Gets the private 'liip_imagine.form.type.image' shared service.
     *
     * @return \Liip\ImagineBundle\Form\Type\ImageType
     */
    protected function getLiipImagine_Form_Type_ImageService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle\\Form\\Type\\ImageType.php';

        return $this->privates['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }

    /**
     * Gets the private 'liip_imagine.gd' shared service.
     *
     * @return \Imagine\Gd\Imagine
     */
    protected function getLiipImagine_GdService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Factory\\ClassFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Image\\ImagineInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Image\\AbstractImagine.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Gd\\Imagine.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Image\\Metadata\\MetadataReaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Image\\Metadata\\AbstractMetadataReader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\imagine\\imagine\\src\\Image\\Metadata\\ExifMetadataReader.php';

        $this->privates['liip_imagine.gd'] = $instance = new \Imagine\Gd\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }

    /**
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->privates['translator.default'] ?? $this->getTranslator_DefaultService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'fr', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'mailer.transport_factory.mailgun' shared service.
     *
     * @return \Symfony\Component\Mailer\Bridge\Mailgun\Transport\MailgunTransportFactory
     */
    protected function getMailer_TransportFactory_MailgunService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailgun-mailer\\Transport\\MailgunTransportFactory.php';

        return $this->privates['mailer.transport_factory.mailgun'] = new \Symfony\Component\Mailer\Bridge\Mailgun\Transport\MailgunTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'mailer.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NullTransportFactory
     */
    protected function getMailer_TransportFactory_NullService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\NullTransportFactory.php';

        return $this->privates['mailer.transport_factory.null'] = new \Symfony\Component\Mailer\Transport\NullTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'mailer.transport_factory.sendmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\SendmailTransportFactory
     */
    protected function getMailer_TransportFactory_SendmailService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\SendmailTransportFactory.php';

        return $this->privates['mailer.transport_factory.sendmail'] = new \Symfony\Component\Mailer\Transport\SendmailTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'mailer.transport_factory.smtp' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory
     */
    protected function getMailer_TransportFactory_SmtpService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\Smtp\\EsmtpTransportFactory.php';

        return $this->privates['mailer.transport_factory.smtp'] = new \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'maker.auto_command.make_auth' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeAuthService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Security\\SecurityConfigUpdater.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_auth'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeAuthenticator($a, ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), $b, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService())), $a, $b);

        $instance->setName('make:auth');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_command' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeCommand.php';

        $this->privates['maker.auto_command.make_command'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCommand(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:command');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_controller' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeController.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_controller'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeController($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:controller');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_crud' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCrudService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeCrud.php';

        $this->privates['maker.auto_command.make_crud'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCrud(($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:crud');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_entity' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeEntityService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\InputAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeEntity.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_entity'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeEntity($a, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), \dirname(__DIR__, 4), $b), $a, $b);

        $instance->setName('make:entity');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_fixtures' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFixturesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeFixtures.php';

        $this->privates['maker.auto_command.make_fixtures'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFixtures(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:fixtures');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFormService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeForm.php';

        $this->privates['maker.auto_command.make_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeForm(($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_functional_test' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFunctionalTestService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeFunctionalTest.php';

        $this->privates['maker.auto_command.make_functional_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFunctionalTest(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:functional-test');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_migration' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMigrationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\ApplicationAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeMigration.php';

        $this->privates['maker.auto_command.make_migration'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMigration(\dirname(__DIR__, 4)), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:migration');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_registration_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeRegistrationFormService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeRegistrationForm.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_registration_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeRegistrationForm($a, ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService()), ($this->services['router'] ?? $this->getRouterService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:registration-form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_encoder' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerEncoderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeSerializerEncoder.php';

        $this->privates['maker.auto_command.make_serializer_encoder'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerEncoder(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:serializer:encoder');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_normalizer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerNormalizerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeSerializerNormalizer.php';

        $this->privates['maker.auto_command.make_serializer_normalizer'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerNormalizer(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:serializer:normalizer');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_sonata_admin' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSonataAdminService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Maker\\AdminMaker.php';

        $this->privates['maker.auto_command.make_sonata_admin'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Sonata\AdminBundle\Maker\AdminMaker(\dirname(__DIR__, 4), []), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:sonata:admin');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_subscriber' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSubscriberService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeSubscriber.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\EventRegistry.php';

        $this->privates['maker.auto_command.make_subscriber'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSubscriber(new \Symfony\Bundle\MakerBundle\EventRegistry(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()))), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:subscriber');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_twig_extension' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeTwigExtensionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeTwigExtension.php';

        $this->privates['maker.auto_command.make_twig_extension'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeTwigExtension(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:twig-extension');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_unit_test' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeUnitTestService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeUnitTest.php';

        $this->privates['maker.auto_command.make_unit_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUnitTest(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:unit-test');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_user' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeUserService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeUser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Security\\UserClassBuilder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Security\\SecurityConfigUpdater.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_user'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUser($a, new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder(), ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater()))), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:user');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_validator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeValidator.php';

        $this->privates['maker.auto_command.make_validator'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeValidator(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:validator');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_voter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeVoter.php';

        $this->privates['maker.auto_command.make_voter'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeVoter(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:voter');

        return $instance;
    }

    /**
     * Gets the private 'maker.doctrine_helper' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper
     */
    protected function getMaker_DoctrineHelperService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\DoctrineHelper.php';

        return $this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', ($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'maker.file_manager' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\FileManager
     */
    protected function getMaker_FileManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\FileManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Util\\AutoloaderUtil.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Util\\ComposerAutoloaderFinder.php';

        return $this->privates['maker.file_manager'] = new \Symfony\Bundle\MakerBundle\FileManager(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), new \Symfony\Bundle\MakerBundle\Util\AutoloaderUtil(new \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder('App')), \dirname(__DIR__, 4), (\dirname(__DIR__, 4).'/templates'));
    }

    /**
     * Gets the private 'maker.generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Generator
     */
    protected function getMaker_GeneratorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Generator.php';

        return $this->privates['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator(($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), 'App');
    }

    /**
     * Gets the private 'maker.renderer.form_type_renderer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer
     */
    protected function getMaker_Renderer_FormTypeRendererService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Renderer\\FormTypeRenderer.php';

        return $this->privates['maker.renderer.form_type_renderer'] = new \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer(($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));
    }

    /**
     * Gets the private 'messenger.bus.default.middleware.handle_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware
     */
    protected function getMessenger_Bus_Default_Middleware_HandleMessageService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\HandleMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Handler\\HandlersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Handler\\HandlersLocator.php';

        $this->privates['messenger.bus.default.middleware.handle_message'] = $instance = new \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware(new \Symfony\Component\Messenger\Handler\HandlersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['.messenger.handler_descriptor.tGvt0LH'] ?? $this->get_Messenger_HandlerDescriptor_TGvt0LHService());
        }, 1)]));

        $instance->setLogger(($this->privates['monolog.logger.messenger'] ?? $this->getMonolog_Logger_MessengerService()));

        return $instance;
    }

    /**
     * Gets the private 'messenger.bus.default.middleware.traceable' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\TraceableMiddleware
     */
    protected function getMessenger_Bus_Default_Middleware_TraceableService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\TraceableMiddleware.php';

        return $this->privates['messenger.bus.default.middleware.traceable'] = new \Symfony\Component\Messenger\Middleware\TraceableMiddleware(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), 'messenger.bus.default');
    }

    /**
     * Gets the private 'messenger.listener.stop_worker_on_restart_signal_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener
     */
    protected function getMessenger_Listener_StopWorkerOnRestartSignalListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\EventListener\\StopWorkerOnRestartSignalListener.php';

        return $this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] = new \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener(($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()), ($this->privates['monolog.logger.messenger'] ?? $this->getMonolog_Logger_MessengerService()));
    }

    /**
     * Gets the private 'messenger.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    protected function getMessenger_Middleware_SendMessageService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\SendMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Sender\\SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Sender\\SendersLocator.php';

        $this->privates['messenger.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(new \Symfony\Component\Messenger\Transport\Sender\SendersLocator([], ($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], [])))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setLogger(($this->privates['monolog.logger.messenger'] ?? $this->getMonolog_Logger_MessengerService()));

        return $instance;
    }

    /**
     * Gets the private 'messenger.retry.send_failed_message_for_retry_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener
     */
    protected function getMessenger_Retry_SendFailedMessageForRetryListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\EventListener\\SendFailedMessageForRetryListener.php';

        return $this->privates['messenger.retry.send_failed_message_for_retry_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener(($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []), ($this->privates['monolog.logger.messenger'] ?? $this->getMonolog_Logger_MessengerService()));
    }

    /**
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypes.php';

        $this->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.command.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Command\ServerLogCommand
     */
    protected function getMonolog_Command_ServerLogService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bridge\\Command\\ServerLogCommand.php';

        $this->privates['monolog.command.server_log'] = $instance = new \Symfony\Bridge\Monolog\Command\ServerLogCommand();

        $instance->setName('server:log');

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'\\log/dev.log'), 100, true, NULL, false);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.messenger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_MessengerService()
    {
        $this->privates['monolog.logger.messenger'] = $instance = new \Symfony\Bridge\Monolog\Logger('messenger');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->privates['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->privates['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->getPropertyInfo_SerializerExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1));
    }

    /**
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    protected function getPropertyInfo_SerializerExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\Extractor\\SerializerExtractor.php';

        return $this->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AccessListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMap.php';

        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? ($this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\GuardAuthenticatorHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategy.php';

        $this->privates['security.authentication.guard_handler'] = $instance = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), []);

        $instance->setSessionAuthenticationStrategy(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Firewall\\GuardAuthenticationListener.php';

        return $this->privates['security.authentication.listener.guard.main'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(($this->privates['security.authentication.guard_handler'] ?? $this->getSecurity_Authentication_GuardHandlerService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'main', new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\UsersAuthenticator'] ?? $this->getUsersAuthenticatorService());
        }, 1), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.main'] ?? $this->getSecurity_Authentication_Provider_Guard_MainService());
            yield 1 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 2), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Provider\\GuardAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserChecker.php';

        return $this->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\UsersAuthenticator'] ?? $this->getUsersAuthenticatorService());
        }, 1), ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService()), 'main', new \Symfony\Component\Security\Core\User\UserChecker(), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ChannelListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\RetryAuthenticationEntryPoint.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMap.php';

        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? ($this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /**
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Command\\UserPasswordEncoderCommand.php';

        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'App\\Entity\\Users']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /**
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ContextListener.php';

        return $this->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService());
        }, 1), 'main', ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\TokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\ClearableTokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\SessionTokenStorage.php';

        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /**
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\EncoderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\EncoderFactory.php';

        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Entity\\Users' => ['algorithm' => 'auto', 'migrate_from' => [], 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'cost' => NULL, 'memory_cost' => NULL, 'time_cost' => NULL, 'threads' => NULL]]);
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.main' => NULL;
        }, 2));
    }

    /**
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';

        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.Iy.T22O', false, false, '', '', '', '', '', [], NULL));
    }

    /**
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\LazyFirewallContext.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Util\\TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\HttpUtils.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ListenerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LegacyListenerTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LogoutListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\DefaultLogoutSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\CsrfTokenClearingLogoutHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\SessionLogoutHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';

        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->services['router'] ?? $this->getRouterService());

        $c = new \Symfony\Component\Security\Http\HttpUtils($b, $b, '{^https?://%s$}i', '{^https://%s$}i');
        $d = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $c, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($c, '/'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'app_logout']);
        $d->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService())));
        $d->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.guard.main'] ?? $this->getSecurity_Authentication_Listener_Guard_MainService());
            yield 3 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->getSecurity_Authentication_Listener_Anonymous_MainService());
            yield 4 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), $c, 'main', ($this->privates['App\\Security\\UsersAuthenticator'] ?? $this->getUsersAuthenticatorService()), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), false), $d, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.app_user_provider', 'main', 'App\\Security\\UsersAuthenticator', NULL, NULL, [0 => 'guard', 1 => 'anonymous'], NULL), ($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }

    /**
     * Gets the private 'security.helper' shared service.
     *
     * @return \Symfony\Component\Security\Core\Security
     */
    protected function getSecurity_HelperService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Security.php';

        return $this->privates['security.helper'] = new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('main', 'app_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.user.provider.concrete.app_user_provider' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_AppUserProviderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Security\\User\\EntityUserProvider.php';

        return $this->privates['security.user.provider.concrete.app_user_provider'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App\\Entity\\Users', 'email', NULL);
    }

    /**
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Validator\\Constraints\\UserPasswordValidator.php';

        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    protected function getSerializer_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\SerializerCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\AnnotationLoader.php';

        return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDir.''.'/serialization.php'));
    }

    /**
     * Gets the private 'serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getSerializer_Mapping_ClassMetadataFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassResolverTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassMetadataFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderChain.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\AnnotationLoader.php';

        return $this->privates['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))]), NULL);
    }

    /**
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\SessionStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\NativeSessionStorage.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MetadataBag.php';

        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'sonata.admin.menu.group_provider' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Provider\GroupMenuProvider
     */
    protected function getSonata_Admin_Menu_GroupProviderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src\\Menu\\Provider\\GroupMenuProvider.php';

        return $this->privates['sonata.admin.menu.group_provider'] = new \Sonata\AdminBundle\Menu\Provider\GroupMenuProvider(($this->services['knp_menu.factory'] ?? $this->getKnpMenu_FactoryService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'sonata.block.form.type.block' shared service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ServiceListType
     */
    protected function getSonata_Block_Form_Type_BlockService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Form\\Type\\ServiceListType.php';

        return $this->privates['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()));
    }

    /**
     * Gets the private 'sonata.block.form.type.container_template' shared service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ContainerTemplateType
     */
    protected function getSonata_Block_Form_Type_ContainerTemplateService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src\\Form\\Type\\ContainerTemplateType.php';

        return $this->privates['sonata.block.form.type.container_template'] = new \Sonata\BlockBundle\Form\Type\ContainerTemplateType(['@SonataBlock/Block/block_container.html.twig' => 'SonataBlockBundle default template']);
    }

    /**
     * Gets the private 'sonata.block.templating.helper' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->privates['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $this->parameters['sonata_block.cache_blocks'], ($this->services['sonata.block.renderer.default'] ?? $this->getSonata_Block_Renderer_DefaultService()), ($this->services['sonata.block.context_manager.default'] ?? $this->getSonata_Block_ContextManager_DefaultService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['sonata.block.cache.handler.default'] ?? ($this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'sonata.core.flashmessage.twig.runtime' shared service.
     *
     * @return \Sonata\Twig\Extension\FlashMessageRuntime
     */
    protected function getSonata_Core_Flashmessage_Twig_RuntimeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\FlashMessageRuntime.php';

        return $this->privates['sonata.core.flashmessage.twig.runtime'] = new \Sonata\Twig\Extension\FlashMessageRuntime(($this->services['sonata.core.flashmessage.manager'] ?? $this->getSonata_Core_Flashmessage_ManagerService()));
    }

    /**
     * Gets the private 'sonata.core.model.adapter.doctrine_orm' shared service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter
     *
     * @deprecated The "sonata.core.model.adapter.doctrine_orm" service is deprecated in favor of service "sonata.doctrine.adapter.doctrine_orm" since 3.12.0 and will be removed in 4.0.
     */
    protected function getSonata_Core_Model_Adapter_DoctrineOrmService()
    {
        @trigger_error('The "sonata.core.model.adapter.doctrine_orm" service is deprecated in favor of service "sonata.doctrine.adapter.doctrine_orm" since 3.12.0 and will be removed in 4.0.', E_USER_DEPRECATED);

        return new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'sonata.core.twig.status_runtime' shared service.
     *
     * @return \Sonata\Twig\Extension\StatusRuntime
     */
    protected function getSonata_Core_Twig_StatusRuntimeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\StatusRuntime.php';

        $this->privates['sonata.core.twig.status_runtime'] = $instance = new \Sonata\Twig\Extension\StatusRuntime();

        $instance->addStatusService(($this->services['sonata.core.flashmessage.manager'] ?? $this->getSonata_Core_Flashmessage_ManagerService()));

        return $instance;
    }

    /**
     * Gets the private 'sonata.core.validator.inline' shared service.
     *
     * @return \Sonata\Form\Validator\InlineValidator
     */
    protected function getSonata_Core_Validator_InlineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\Form\\Validator\\InlineValidator.php';

        return $this->privates['sonata.core.validator.inline'] = new \Sonata\Form\Validator\InlineValidator($this, ($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
    }

    /**
     * Gets the private 'sonata.templating' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\TwigEngine
     *
     * @deprecated The "sonata.templating" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.
     */
    protected function getSonata_TemplatingService()
    {
        @trigger_error('The "sonata.templating" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.', E_USER_DEPRECATED);

        return $this->privates['sonata.templating'] = new \Sonata\BlockBundle\Templating\TwigEngine(($this->services['twig'] ?? $this->getTwigService()), $this->getSonata_Templating_NameParserService(), $this->getSonata_Templating_LocatorService());
    }

    /**
     * Gets the private 'sonata.templating.locator' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\TemplateLocator
     *
     * @deprecated The "sonata.templating.locator" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.
     */
    protected function getSonata_Templating_LocatorService()
    {
        @trigger_error('The "sonata.templating.locator" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.', E_USER_DEPRECATED);

        return new \Sonata\BlockBundle\Templating\TemplateLocator(($this->privates['file_locator'] ?? $this->getFileLocatorService()), $this->targetDir.'');
    }

    /**
     * Gets the private 'sonata.templating.name_parser' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\TemplateNameParser
     *
     * @deprecated The "sonata.templating.name_parser" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.
     */
    protected function getSonata_Templating_NameParserService()
    {
        @trigger_error('The "sonata.templating.name_parser" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.', E_USER_DEPRECATED);

        return new \Sonata\BlockBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /**
     * Gets the private 'templating.cache_warmer.template_paths' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer
     *
     * @deprecated The "templating.cache_warmer.template_paths" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_CacheWarmer_TemplatePathsService()
    {
        @trigger_error('The "templating.cache_warmer.template_paths" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.cache_warmer.template_paths'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer(($this->privates['templating.finder'] ?? $this->getTemplating_FinderService()), ($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /**
     * Gets the private 'templating.finder' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder
     *
     * @deprecated The "templating.finder" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_FinderService()
    {
        @trigger_error('The "templating.finder" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\templating\\TemplateNameParserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Templating\\TemplateFilenameParser.php';

        return $this->privates['templating.finder'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder(($this->services['kernel'] ?? $this->get('kernel', 1)), new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser(), (\dirname(__DIR__, 4).'\\src/Resources'));
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     *
     * @deprecated The "templating.locator" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_LocatorService()
    {
        @trigger_error('The "templating.locator" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(($this->privates['file_locator'] ?? $this->getFileLocatorService()), $this->targetDir.'');
    }

    /**
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     *
     * @deprecated The "templating.name_parser" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_NameParserService()
    {
        @trigger_error('The "templating.name_parser" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /**
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\ChainExtractor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Extractor\\PhpExtractor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Translation\\TwigExtractor.php';

        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService())));

        return $instance;
    }

    /**
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\CsvFileLoader.php';

        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IcuDatFileLoader.php';

        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IniFileLoader.php';

        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\JsonFileLoader.php';

        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\MoFileLoader.php';

        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\PhpFileLoader.php';

        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\PoFileLoader.php';

        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\QtFileLoader.php';

        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IcuResFileLoader.php';

        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\XliffFileLoader.php';

        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\YamlFileLoader.php';

        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Reader\\TranslationReaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Reader\\TranslationReader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\XliffFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\PoFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\MoFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\QtFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\CsvFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IcuDatFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\IniFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\translation\\Loader\\JsonFileLoader.php';

        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /**
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php';

        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'fr', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.ar.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.ar.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.ar.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ar.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ar.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ar.xliff')], 'az' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.bg.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.bg.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.bg.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.bg.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.bg.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.bg.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.bg.xliff')], 'ca' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ca.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.ca.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.ca.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.ca.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.ca.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ca.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ca.xliff')], 'cs' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.cs.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.cs.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.cs.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.cs.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.cs.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.cs.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.cs.xliff')], 'cy' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.da.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.da.xlf'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.da.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.da.xliff')], 'de' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.de.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.de.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.de.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.de.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.de.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.de.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.de.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.de.xliff'), 10 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.de.xliff'), 11 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.de.xliff')], 'el' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.el.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.el.xlf'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.en.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.en.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.en.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.en.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.en.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.en.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.en.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.en.xliff'), 10 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.en.xliff'), 11 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.en.xliff')], 'es' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.es.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.es.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.es.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.es.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.es.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.es.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.es.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.es.xliff')], 'et' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.eu.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.eu.xlf'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.eu.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.eu.xliff'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.eu.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.eu.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.eu.xliff')], 'fa' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.fa.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.fa.xlf'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.fa.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.fa.xliff'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.fa.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.fa.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.fa.xliff')], 'fi' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.fi.yml'), 3 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.fi.xlf'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.fi.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.fi.xliff')], 'fr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.fr.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.fr.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.fr.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.fr.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.fr.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.fr.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.fr.xliff'), 10 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.fr.xliff'), 11 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.fr.xliff')], 'gl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.gl.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.gl.xlf'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.hr.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.hr.xlf'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.hr.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.hr.xliff'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.hr.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.hr.xliff')], 'hu' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.hu.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.hu.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.hu.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.hu.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.hu.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.hu.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.hu.xliff'), 10 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.hu.xliff')], 'hy' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.id.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.id.xliff')], 'it' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.it.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.it.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.it.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.it.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.it.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.it.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.it.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.it.xliff'), 10 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.it.xliff')], 'ja' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ja.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ja.xliff'), 4 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.ja.xliff'), 5 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ja.xliff'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ja.xliff')], 'lb' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lb.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.lb.xliff'), 4 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.lb.xliff'), 5 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.lb.xliff')], 'lt' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.lt.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.lt.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.lt.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.lt.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.lt.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.lt.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.lt.xliff')], 'lv' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lv.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.lv.xliff')], 'mn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.nl.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.nl.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.nl.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.nl.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.nl.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.nl.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.nl.xliff')], 'nn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.no.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.no.xliff'), 4 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.no.xliff')], 'pl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.pl.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.pl.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.pl.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.pl.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.pl.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.pl.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.pl.xliff')], 'pt' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.pt.yml'), 3 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.pt.xlf'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.pt.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.pt.xliff'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.pt.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.pt.xliff')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.pt_BR.xliff'), 4 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.pt_BR.xliff'), 5 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.pt_BR.xliff'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.pt_BR.xliff')], 'ro' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ro.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.ro.xlf'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.ro.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ro.xliff'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.ro.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ro.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ro.xliff')], 'ru' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.ru.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.ru.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.ru.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ru.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.ru.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ru.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.ru.xliff'), 10 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ru.xliff')], 'sk' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sk.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.sk.xliff'), 4 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.sk.xliff'), 5 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.sk.xliff')], 'sl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sl.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.sl.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.sl.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.sl.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.sl.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.sl.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.sl.xliff')], 'sq' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sv.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.sv.xlf'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.sv.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.sv.xliff')], 'th' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.tr.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.tr.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.tr.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.tr.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.tr.xliff')], 'uk' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.uk.yml'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.uk.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.uk.xlf'), 6 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.uk.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.uk.xliff'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.uk.xliff'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.uk.xliff')], 'vi' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.zh_CN.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.zh_CN.xlf'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.zh_CN.xlf'), 5 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations\\SonataDatagridBundle.zh_CN.xliff'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.zh_CN.xliff'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.zh_CN.xliff')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_TW.xlf')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_PT.xlf')], 'vn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations\\VichUploaderBundle.vn.yml')], 'sr_RS' => [0 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\EasyAdminBundle.sr_RS.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations\\messages.sr_RS.xlf')], 'ky' => [0 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ky.xliff')], 'sw' => [0 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.sw.xliff')], 'sv_SE' => [0 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.sv_SE.xliff')], 'zh_HK' => [0 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.zh_HK.xliff')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations'), 5 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations'), 10 => (\dirname(__DIR__, 4).'/translations'), 11 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/translations'), 12 => (\dirname(__DIR__, 4).'\\src/Resources/FrameworkBundle/translations'), 13 => (\dirname(__DIR__, 4).'\\vendor\\stof\\doctrine-extensions-bundle/translations'), 14 => (\dirname(__DIR__, 4).'\\src/Resources/StofDoctrineExtensionsBundle/translations'), 15 => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src/translations'), 16 => (\dirname(__DIR__, 4).'\\src/Resources/SensioFrameworkExtraBundle/translations'), 17 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/translations'), 18 => (\dirname(__DIR__, 4).'\\src/Resources/SecurityBundle/translations'), 19 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/translations'), 20 => (\dirname(__DIR__, 4).'\\src/Resources/TwigBundle/translations'), 21 => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src/translations'), 22 => (\dirname(__DIR__, 4).'\\src/Resources/TwigExtraBundle/translations'), 23 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/translations'), 24 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineBundle/translations'), 25 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle/translations'), 26 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineMigrationsBundle/translations'), 27 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src/translations'), 28 => (\dirname(__DIR__, 4).'\\src/Resources/MakerBundle/translations'), 29 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/translations'), 30 => (\dirname(__DIR__, 4).'\\src/Resources/WebProfilerBundle/translations'), 31 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bundle/translations'), 32 => (\dirname(__DIR__, 4).'\\src/Resources/MonologBundle/translations'), 33 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\debug-bundle/translations'), 34 => (\dirname(__DIR__, 4).'\\src/Resources/DebugBundle/translations'), 35 => (\dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src/translations'), 36 => (\dirname(__DIR__, 4).'\\src/Resources/FOSCKEditorBundle/translations'), 37 => (\dirname(__DIR__, 4).'\\src/Resources/VichUploaderBundle/translations'), 38 => (\dirname(__DIR__, 4).'\\src/Resources/EasyAdminBundle/translations'), 39 => (\dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle/translations'), 40 => (\dirname(__DIR__, 4).'\\src/Resources/LiipImagineBundle/translations'), 41 => (\dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src/translations'), 42 => (\dirname(__DIR__, 4).'\\src/Resources/FMElfinderBundle/translations'), 43 => (\dirname(__DIR__, 4).'\\src/Resources/KnpPaginatorBundle/translations'), 44 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu-bundle\\src/translations'), 45 => (\dirname(__DIR__, 4).'\\src/Resources/KnpMenuBundle/translations'), 46 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle/translations'), 47 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineFixturesBundle/translations'), 48 => (\dirname(__DIR__, 4).'\\vendor\\tattali\\calendar-bundle\\src/translations'), 49 => (\dirname(__DIR__, 4).'\\src/Resources/CalendarBundle/translations'), 50 => (\dirname(__DIR__, 4).'\\src/Resources/SonataDatagridBundle/translations'), 51 => (\dirname(__DIR__, 4).'\\src/Resources/SonataCoreBundle/translations'), 52 => (\dirname(__DIR__, 4).'\\src/Resources/SonataBlockBundle/translations'), 53 => (\dirname(__DIR__, 4).'\\src/Resources/SonataAdminBundle/translations'), 54 => (\dirname(__DIR__, 4).'\\src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/translations'), 4 => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/translations'), 5 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations'), 6 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/translations'), 7 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations'), 8 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations'), 9 => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations'), 10 => 'translations', 11 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/translations'), 12 => (\dirname(__DIR__, 4).'\\src/Resources/FrameworkBundle/translations'), 13 => (\dirname(__DIR__, 4).'\\vendor\\stof\\doctrine-extensions-bundle/translations'), 14 => (\dirname(__DIR__, 4).'\\src/Resources/StofDoctrineExtensionsBundle/translations'), 15 => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src/translations'), 16 => (\dirname(__DIR__, 4).'\\src/Resources/SensioFrameworkExtraBundle/translations'), 17 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/translations'), 18 => (\dirname(__DIR__, 4).'\\src/Resources/SecurityBundle/translations'), 19 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/translations'), 20 => (\dirname(__DIR__, 4).'\\src/Resources/TwigBundle/translations'), 21 => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src/translations'), 22 => (\dirname(__DIR__, 4).'\\src/Resources/TwigExtraBundle/translations'), 23 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/translations'), 24 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineBundle/translations'), 25 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle/translations'), 26 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineMigrationsBundle/translations'), 27 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src/translations'), 28 => (\dirname(__DIR__, 4).'\\src/Resources/MakerBundle/translations'), 29 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/translations'), 30 => (\dirname(__DIR__, 4).'\\src/Resources/WebProfilerBundle/translations'), 31 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bundle/translations'), 32 => (\dirname(__DIR__, 4).'\\src/Resources/MonologBundle/translations'), 33 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\debug-bundle/translations'), 34 => (\dirname(__DIR__, 4).'\\src/Resources/DebugBundle/translations'), 35 => (\dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src/translations'), 36 => (\dirname(__DIR__, 4).'\\src/Resources/FOSCKEditorBundle/translations'), 37 => (\dirname(__DIR__, 4).'\\src/Resources/VichUploaderBundle/translations'), 38 => (\dirname(__DIR__, 4).'\\src/Resources/EasyAdminBundle/translations'), 39 => (\dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle/translations'), 40 => (\dirname(__DIR__, 4).'\\src/Resources/LiipImagineBundle/translations'), 41 => (\dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src/translations'), 42 => (\dirname(__DIR__, 4).'\\src/Resources/FMElfinderBundle/translations'), 43 => (\dirname(__DIR__, 4).'\\src/Resources/KnpPaginatorBundle/translations'), 44 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu-bundle\\src/translations'), 45 => (\dirname(__DIR__, 4).'\\src/Resources/KnpMenuBundle/translations'), 46 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle/translations'), 47 => (\dirname(__DIR__, 4).'\\src/Resources/DoctrineFixturesBundle/translations'), 48 => (\dirname(__DIR__, 4).'\\vendor\\tattali\\calendar-bundle\\src/translations'), 49 => (\dirname(__DIR__, 4).'\\src/Resources/CalendarBundle/translations'), 50 => (\dirname(__DIR__, 4).'\\src/Resources/SonataDatagridBundle/translations'), 51 => (\dirname(__DIR__, 4).'\\src/Resources/SonataCoreBundle/translations'), 52 => (\dirname(__DIR__, 4).'\\src/Resources/SonataBlockBundle/translations'), 53 => (\dirname(__DIR__, 4).'\\src/Resources/SonataAdminBundle/translations'), 54 => (\dirname(__DIR__, 4).'\\src/Resources/translations')]]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales([0 => 'fr']);

        return $instance;
    }

    /**
     * Gets the private 'twig.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer
     *
     * @deprecated The "twig.cache_warmer" service is deprecated since Symfony 4.4 and will be removed in 5.0.
     */
    protected function getTwig_CacheWarmerService()
    {
        @trigger_error('The "twig.cache_warmer" service is deprecated since Symfony 4.4 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(($this->privates['.service_locator.o9nGMXB'] ?? $this->get_ServiceLocator_O9nGMXBService())->withContext('twig.cache_warmer', $this), ($this->privates['templating.finder'] ?? $this->getTemplating_FinderService()), [(\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views') => NULL, (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form') => NULL]);
    }

    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Command\\DebugCommand.php';

        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), (\dirname(__DIR__, 4).'\\src'));

        $instance->setName('debug:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Command\\LintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\Command\\LintCommand.php';

        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRenderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRendererEngineInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractRendererEngine.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Form\\TwigRendererEngine.php';

        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.loader.filesystem' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_Loader_FilesystemService()
    {
        $this->privates['twig.loader.filesystem'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()), ($this->privates['templating.name_parser'] ?? $this->getTemplating_NameParserService()), \dirname(__DIR__, 4));

        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views'));
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), 'Framework');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), '!Framework');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/Resources/views'), 'Security');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/Resources/views'), '!Security');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/Resources/views'), 'Twig');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/Resources/views'), '!Twig');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), 'WebProfiler');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), '!WebProfiler');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\debug-bundle/Resources/views'), 'Debug');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\debug-bundle/Resources/views'), '!Debug');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src/Resources/views'), 'FOSCKEditor');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src/Resources/views'), '!FOSCKEditor');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/templates'), 'VichUploader');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle/templates'), '!VichUploader');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/views'), 'EasyAdmin');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/views'), '!EasyAdmin');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle/Resources/views'), 'LiipImagine');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle/Resources/views'), '!LiipImagine');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src/Resources/views'), 'FMElfinder');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src/Resources/views'), '!FMElfinder');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/templates'), 'KnpPaginator');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/templates'), '!KnpPaginator');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu-bundle\\src/Resources/views'), 'KnpMenu');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu-bundle\\src/Resources/views'), '!KnpMenu');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\tattali\\calendar-bundle\\src/Resources/views'), 'Calendar');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\tattali\\calendar-bundle\\src/Resources/views'), '!Calendar');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/views'), 'SonataDatagrid');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src/Resources/views'), '!SonataDatagrid');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/views'), 'SonataCore');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/views'), '!SonataCore');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/views'), 'SonataBlock');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src/Resources/views'), '!SonataBlock');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/views'), 'SonataAdmin');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src/Resources/views'), '!SonataAdmin');
        $instance->addPath((\dirname(__DIR__, 4).'/templates'));
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), 'email');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), '!email');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    protected function getTwig_Mailer_MessageListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\EventListener\\MessageListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\BodyRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Mime\\BodyRenderer.php';

        return $this->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, new \Symfony\Bridge\Twig\Mime\BodyRenderer(($this->services['twig'] ?? $this->getTwigService())));
    }

    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelRuntime.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DependencyInjection\\LazyLoadingFragmentHandler.php';

        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true));
    }

    /**
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CsrfRuntime.php';

        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\CompatibilityServiceSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\CacheWarmer\\TemplateCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\TemplateIterator.php';

        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer(($this->privates['.service_locator.o9nGMXB'] ?? $this->get_ServiceLocator_O9nGMXBService())->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'\\src'), [(\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views') => NULL, (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')));
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = ($this->privates['property_info'] ?? $this->getPropertyInfoService());

        $instance->setConstraintValidatorFactory(($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));

        return $instance;
    }

    /**
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Constraints\\EmailValidator.php';

        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /**
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Constraints\\ExpressionValidator.php';

        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\ValidatorCacheWarmer.php';

        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /**
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Constraints\\NotCompromisedPasswordValidator.php';

        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), 'UTF-8', true, NULL);
    }

    /**
     * Gets the private 'validator.validator_factory' shared service.
     *
     * @return \Symfony\Component\Validator\ContainerConstraintValidatorFactory
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->privates['validator.validator_factory'] = new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Sonata\\CoreBundle\\Validator\\InlineValidator' => ['services', 'sonata.admin.validator.inline', 'getSonata_Admin_Validator_InlineService', false],
            'Sonata\\Form\\Validator\\InlineValidator' => ['privates', 'sonata.core.validator.inline', 'getSonata_Core_Validator_InlineService', false],
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'sonata.admin.validator.inline' => ['services', 'sonata.admin.validator.inline', 'getSonata_Admin_Validator_InlineService', false],
            'sonata.core.validator.inline' => ['privates', 'sonata.core.validator.inline', 'getSonata_Core_Validator_InlineService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Sonata\\CoreBundle\\Validator\\InlineValidator' => '?',
            'Sonata\\Form\\Validator\\InlineValidator' => '?',
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'sonata.admin.validator.inline' => '?',
            'sonata.core.validator.inline' => '?',
            'validator.expression' => '?',
        ]));
    }

    /**
     * Gets the private 'var_dumper.command.server_dump' shared service.
     *
     * @return \Symfony\Component\VarDumper\Command\ServerDumpCommand
     */
    protected function getVarDumper_Command_ServerDumpService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Command\\ServerDumpCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Server\\DumpServer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Command\\Descriptor\\DumpDescriptorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Command\\Descriptor\\CliDescriptor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Command\\Descriptor\\HtmlDescriptor.php';

        $a = new \Symfony\Bridge\Monolog\Logger('debug');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->privates['var_dumper.command.server_dump'] = $instance = new \Symfony\Component\VarDumper\Command\ServerDumpCommand(new \Symfony\Component\VarDumper\Server\DumpServer('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), $a), ['cli' => new \Symfony\Component\VarDumper\Command\Descriptor\CliDescriptor(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->getVarDumper_ContextualizedCliDumper_InnerService())), 'html' => new \Symfony\Component\VarDumper\Command\Descriptor\HtmlDescriptor(($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService()))]);

        $instance->setName('server:dump');

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.contextualized_cli_dumper.inner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_ContextualizedCliDumper_InnerService()
    {
        $this->privates['var_dumper.contextualized_cli_dumper.inner'] = $instance = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    protected function getVarDumper_HtmlDumperService()
    {
        $this->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.server_connection' shared service.
     *
     * @return \Symfony\Component\VarDumper\Server\Connection
     */
    protected function getVarDumper_ServerConnectionService()
    {
        return $this->privates['var_dumper.server_connection'] = new \Symfony\Component\VarDumper\Server\Connection('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())), 'request' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), 'cli' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider()]);
    }

    /**
     * Gets the private 'vich_uploader.command.mapping_debug' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingDebugCommand
     */
    protected function getVichUploader_Command_MappingDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Command\\MappingDebugCommand.php';

        $this->privates['vich_uploader.command.mapping_debug'] = $instance = new \Vich\UploaderBundle\Command\MappingDebugCommand($this->parameters['vich_uploader.mappings']);

        $instance->setName('vich:mapping:debug');

        return $instance;
    }

    /**
     * Gets the private 'vich_uploader.command.mapping_debug_class' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingDebugClassCommand
     */
    protected function getVichUploader_Command_MappingDebugClassService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Command\\MappingDebugClassCommand.php';

        $this->privates['vich_uploader.command.mapping_debug_class'] = $instance = new \Vich\UploaderBundle\Command\MappingDebugClassCommand(($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()));

        $instance->setName('vich:mapping:debug-class');

        return $instance;
    }

    /**
     * Gets the private 'vich_uploader.command.mapping_list_classes' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingListClassesCommand
     */
    protected function getVichUploader_Command_MappingListClassesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle\\src\\Command\\MappingListClassesCommand.php';

        $this->privates['vich_uploader.command.mapping_list_classes'] = $instance = new \Vich\UploaderBundle\Command\MappingListClassesCommand(($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()));

        $instance->setName('vich:mapping:list-classes');

        return $instance;
    }

    /**
     * Gets the private 'vich_uploader.metadata_reader' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\MetadataReader
     */
    protected function getVichUploader_MetadataReaderService()
    {
        $a = new \Metadata\Driver\FileLocator([]);

        $b = new \Metadata\MetadataFactory(new \Metadata\Driver\DriverChain([0 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a), 1 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService())), 2 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a)]), 'Metadata\\ClassHierarchyMetadata', true);
        $b->setCache(new \Metadata\Cache\FileCache(($this->targetDir.''.'/vich_uploader')));

        return $this->privates['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }

    /**
     * Gets the private 'vich_uploader.property_mapping_factory' shared service.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingFactory
     */
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        return $this->privates['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()), $this->parameters['vich_uploader.mappings'], '_name');
    }

    /**
     * Gets the private 'vich_uploader.storage.file_system' shared service.
     *
     * @return \Vich\UploaderBundle\Storage\FileSystemStorage
     */
    protected function getVichUploader_Storage_FileSystemService()
    {
        return $this->privates['vich_uploader.storage.file_system'] = new \Vich\UploaderBundle\Storage\FileSystemStorage(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()));
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/srcApp_KernelDevDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'\\src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'\\log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'FOSCKEditorBundle' => 'FOS\\CKEditorBundle\\FOSCKEditorBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
                'EasyAdminBundle' => 'EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'CalendarBundle' => 'CalendarBundle\\CalendarBundle',
                'SonataDatagridBundle' => 'Sonata\\DatagridBundle\\SonataDatagridBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'StofDoctrineExtensionsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\stof\\doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'MakerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'DebugBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\debug-bundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'FOSCKEditorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src'),
                    'namespace' => 'FOS\\CKEditorBundle',
                ],
                'VichUploaderBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\vich\\uploader-bundle'),
                    'namespace' => 'Vich\\UploaderBundle',
                ],
                'EasyAdminBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src'),
                    'namespace' => 'EasyCorp\\Bundle\\EasyAdminBundle',
                ],
                'LiipImagineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\liip\\imagine-bundle'),
                    'namespace' => 'Liip\\ImagineBundle',
                ],
                'FMElfinderBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\helios-ag\\fm-elfinder-bundle\\src'),
                    'namespace' => 'FM\\ElfinderBundle',
                ],
                'KnpPaginatorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ],
                'KnpMenuBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-menu-bundle\\src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ],
                'DoctrineFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ],
                'CalendarBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\tattali\\calendar-bundle\\src'),
                    'namespace' => 'CalendarBundle',
                ],
                'SonataDatagridBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\datagrid-bundle\\src'),
                    'namespace' => 'Sonata\\DatagridBundle',
                ],
                'SonataCoreBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle'),
                    'namespace' => 'Sonata\\CoreBundle',
                ],
                'SonataBlockBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\block-bundle\\src'),
                    'namespace' => 'Sonata\\BlockBundle',
                ],
                'SonataAdminBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\sonata-project\\admin-bundle\\src'),
                    'namespace' => 'Sonata\\AdminBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelDevDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'app.path.avatar' => '/uploads/images/avatar',
            'app.path.featured' => '/uploads/images/featured',
            'app.path.categories' => '/uploads/images/categories',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'fr',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
            ],
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelDevDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.default_locale' => 'fr_FR',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => '@FMElfinder/Form/elfinder_widget.html.twig',
                1 => '@VichUploader/Form/fields.html.twig',
                2 => 'form_div_layout.html.twig',
                3 => '@FOSCKEditor/Form/ckeditor_widget.html.twig',
                4 => '@LiipImagine/Form/form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'env(VAR_DUMPER_SERVER)' => '127.0.0.1:9912',
            'vich_uploader.default_filename_attribute_suffix' => '_name',
            'vich_uploader.mappings' => [
                'avatar' => [
                    'uri_prefix' => '/uploads/images/avatar',
                    'namer' => [
                        'service' => 'Vich\\UploaderBundle\\Naming\\UniqidNamer.avatar',
                        'options' => [

                        ],
                    ],
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/images/avatar'),
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'featuredImages' => [
                    'uri_prefix' => '/uploads/images/featured',
                    'namer' => [
                        'service' => 'Vich\\UploaderBundle\\Naming\\UniqidNamer.featuredImages',
                        'options' => [

                        ],
                    ],
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/images/featured'),
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
                'categoriesImages' => [
                    'uri_prefix' => '/uploads/images/categories',
                    'namer' => [
                        'service' => 'Vich\\UploaderBundle\\Naming\\UniqidNamer.categoriesImages',
                        'options' => [

                        ],
                    ],
                    'upload_destination' => (\dirname(__DIR__, 4).'/public//uploads/images/categories'),
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
            ],
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'easyadmin.config' => [
                'site_name' => 'Gestion Blog REF-MED',
                'user' => [
                    'display_name' => true,
                    'display_avatar' => true,
                    'name_property_path' => '__toString',
                    'avatar_property_path' => NULL,
                ],
                'design' => [
                    'form_theme' => [
                        0 => '@EasyAdmin/form/bootstrap_4.html.twig',
                        1 => '@FOSCKEditor/Form/ckeditor_widget.html.twig',
                    ],
                    'menu' => [
                        0 => [
                            'label' => 'Articles',
                        ],
                        1 => [
                            'entity' => 'Articles',
                            'label' => 'Articles',
                            'icon' => 'book',
                        ],
                        2 => [
                            'entity' => 'Categories',
                            'label' => 'Categories',
                            'icon' => 'tag',
                        ],
                        3 => [
                            'entity' => 'Keyword',
                            'label' => 'Mots-Cles',
                            'icon' => 'tag',
                        ],
                        4 => [
                            'label' => 'Utilisateurs du Blog',
                        ],
                        5 => [
                            'entity' => 'UsersBlog',
                            'label' => 'Utilisateurs du Blog',
                            'icon' => 'user',
                        ],
                    ],
                    'brand_color' => 'hsl(230, 55%, 60%)',
                    'assets' => [
                        'css' => [

                        ],
                        'js' => [

                        ],
                        'favicon' => [
                            'path' => 'favicon.ico',
                            'mime_type' => 'image/x-icon',
                        ],
                    ],
                ],
                'formats' => [
                    'datetime' => 'd/m/Y à H:i',
                    'date' => 'Y-m-d',
                    'time' => 'H:i:s',
                    'dateinterval' => '%y Year(s) %m Month(s) %d Day(s)',
                ],
                'entities' => [
                    'Articles' => [
                        'class' => 'App\\Entity\\Articles',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => [
                                    'property' => 'title',
                                    'label' => 'Titre',
                                ],
                                2 => [
                                    'property' => 'featuredImage',
                                    'label' => 'Image',
                                    'type' => 'image',
                                    'base_path' => '/uploads/images/featured',
                                ],
                                3 => [
                                    'property' => 'createdAt',
                                    'label' => 'Créé',
                                ],
                                4 => [
                                    'property' => 'categories',
                                    'label' => 'Catégories',
                                    'type' => 'array',
                                ],
                                5 => [
                                    'property' => 'keywords',
                                    'label' => 'Mots-Clés',
                                    'type' => 'array',
                                ],
                                6 => [
                                    'property' => 'usersBlog',
                                    'label' => 'Auteur',
                                    'type' => 'entity',
                                ],
                            ],
                            'sort' => [
                                0 => 'createdAt',
                                1 => 'desc',
                            ],
                        ],
                        'form' => [
                            'fields' => [
                                0 => 'title',
                                1 => [
                                    'property' => 'contenu',
                                    'type' => 'fos_ckeditor',
                                    'type_options' => [
                                        'config_name' => 'main_config',
                                    ],
                                ],
                                2 => [
                                    'property' => 'imageFile',
                                    'type' => 'vich_image',
                                    'label' => 'Image',
                                ],
                                3 => [
                                    'property' => 'usersBlog',
                                    'label' => 'Utilisateurs',
                                    'type' => 'entity',
                                    'type_options' => [
                                        'class' => 'App\\Entity\\UsersBlog',
                                    ],
                                ],
                                4 => [
                                    'property' => 'categories',
                                    'label' => 'Catégories',
                                    'type' => 'entity',
                                    'type_options' => [
                                        'class' => 'App\\Entity\\Categories',
                                        'multiple' => true,
                                        'by_reference' => false,
                                        'attr' => [
                                            'data-widget' => 'select2',
                                        ],
                                    ],
                                ],
                                5 => [
                                    'property' => 'keywords',
                                    'label' => 'Mots Clés',
                                    'type' => 'entity',
                                    'type_options' => [
                                        'class' => 'App\\Entity\\keyword',
                                        'multiple' => true,
                                        'by_reference' => false,
                                        'attr' => [
                                            'data-widget' => 'select2',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'name' => 'Articles',
                    ],
                    'Categories' => [
                        'class' => 'App\\Entity\\Categories',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'articles',
                                2 => [
                                    'property' => 'name',
                                    'label' => 'Nom de la categorie',
                                ],
                                3 => [
                                    'property' => 'fileName',
                                    'label' => 'Image',
                                    'type' => 'image',
                                    'base_path' => '/uploads/images/categories',
                                ],
                                4 => [
                                    'property' => 'slug',
                                    'label' => 'Slug',
                                ],
                                5 => [
                                    'property' => 'articles',
                                    'label' => 'Article par catégorie',
                                    'type' => 'array',
                                ],
                            ],
                            'sort' => [
                                0 => 'name',
                                1 => 'asc',
                            ],
                        ],
                        'form' => [
                            'fields' => [
                                0 => 'name',
                                1 => [
                                    'property' => 'imageFile',
                                    'type' => 'vich_image',
                                    'label' => 'Image',
                                ],
                            ],
                        ],
                        'name' => 'Categories',
                    ],
                    'Keyword' => [
                        'class' => 'App\\Entity\\Keyword',
                        'label' => 'Mots-Cles',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'articles',
                                2 => [
                                    'property' => 'keyword',
                                    'label' => 'Mots Cles',
                                ],
                                3 => [
                                    'property' => 'slug',
                                    'label' => 'Slug',
                                ],
                                4 => [
                                    'property' => 'articles',
                                    'label' => 'Article avec mots cles',
                                    'type' => 'array',
                                ],
                            ],
                            'sort' => [
                                0 => 'keyword',
                                1 => 'asc',
                            ],
                        ],
                        'form' => [
                            'fields' => [
                                0 => 'keyword',
                            ],
                        ],
                        'name' => 'Keyword',
                    ],
                    'UsersBlog' => [
                        'class' => 'App\\Entity\\UsersBlog',
                        'label' => 'Utilisateurs du Blog',
                        'list' => [
                            'fields' => [
                                0 => 'id',
                                1 => 'pseudo',
                                2 => 'email',
                                3 => [
                                    'property' => 'password',
                                    'label' => 'Mots de passe',
                                ],
                                4 => [
                                    'property' => 'filename',
                                    'label' => 'Image',
                                    'type' => 'image',
                                    'base_path' => '/uploads/images/avatar',
                                ],
                            ],
                            'sort' => [
                                0 => 'id',
                                1 => 'asc',
                            ],
                        ],
                        'form' => [
                            'fields' => [
                                0 => 'email',
                                1 => 'pseudo',
                                2 => 'password',
                                3 => 'active',
                                4 => [
                                    'property' => 'imageFile',
                                    'type' => 'vich_image',
                                    'label' => 'Image',
                                ],
                                5 => 'active',
                                6 => [
                                    'property' => 'roles',
                                    'type' => 'choice',
                                    'label' => 'Rôles',
                                    'type_options' => [
                                        'expanded' => true,
                                        'multiple' => true,
                                        'choices' => [
                                            'Utilisateur' => 'ROLE_USER',
                                            'Administrateur' => 'ROLE_ADMIN',
                                            'Moderateur' => 'ROLE_MODO',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'name' => 'UsersBlog',
                    ],
                ],
                'disabled_actions' => [

                ],
                'translation_domain' => 'messages',
                'list' => [
                    'actions' => [

                    ],
                    'collapse_actions' => false,
                    'batch_actions' => [

                    ],
                    'max_results' => 15,
                    'item_permission' => NULL,
                ],
                'search' => [

                ],
                'edit' => [
                    'actions' => [

                    ],
                    'item_permission' => NULL,
                ],
                'new' => [
                    'actions' => [

                    ],
                    'item_permission' => NULL,
                ],
                'show' => [
                    'actions' => [

                    ],
                    'max_results' => 10,
                    'item_permission' => NULL,
                ],
            ],
            'liip_imagine.resolvers' => [
                'default' => [
                    'web_path' => [
                        'web_root' => (\dirname(__DIR__, 4).'/public'),
                        'cache_prefix' => 'media/cache',
                    ],
                ],
            ],
            'liip_imagine.loaders' => [
                'default' => [
                    'filesystem' => [
                        'locator' => 'filesystem',
                        'data_root' => [
                            0 => (\dirname(__DIR__, 4).'/public'),
                        ],
                        'allow_unresolvable_data_roots' => false,
                        'bundle_resources' => [
                            'enabled' => false,
                            'access_control_type' => 'blacklist',
                            'access_control_list' => [

                            ],
                        ],
                    ],
                ],
            ],
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripAll' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.jpegoptim.tempDir' => NULL,
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripAll' => true,
            'liip_imagine.optipng.tempDir' => NULL,
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.driver_service' => 'liip_imagine.gd',
            'liip_imagine.cache.resolver.default' => 'default',
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => [
                'thumbArticle' => [
                    'quality' => 85,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 320,
                                1 => 320,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'featuredBigCategories' => [
                    'quality' => 85,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 819,
                                1 => 564,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'featuredMinCategories' => [
                    'quality' => 75,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 410,
                                1 => 282,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'featuredArticle' => [
                    'quality' => 95,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 960,
                                1 => 470,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'avatarRow' => [
                    'quality' => 95,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 105,
                                1 => 85,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
            ],
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction',
            'fm_elfinder.loader' => 'FM\\ElfinderBundle\\Loader\\ElFinderLoader',
            'fm_elfinder.configurator' => 'FM\\ElfinderBundle\\Configuration\\ElFinderConfigurationReader',
            'elfinder.form.type.class' => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType',
            'fm_elfinder' => [
                'assets_path' => '/assets',
                'instances' => [
                    'default' => [
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'theme' => 'smoothness',
                        'connector' => [
                            'debug' => false,
                            'roots' => [
                                'uploads' => [
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/images',
                                    'upload_allow' => [
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                    ],
                                    'upload_deny' => [
                                        0 => 'all',
                                    ],
                                    'upload_max_size' => '2M',
                                    'volume_id' => 0,
                                    'autoload' => false,
                                    'phash' => '',
                                    'trash_hash' => '',
                                    'locale' => '',
                                    'i18n_folder_name' => false,
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'security_voter' => '',
                                    'start_path' => '',
                                    'encoding' => 'UTF-8',
                                    'url' => '',
                                    'alias' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'fileMode' => 420,
                                    'upload_order' => [
                                        0 => 'deny',
                                        1 => 'allow',
                                    ],
                                    'upload_max_conn' => 3,
                                    'defaults' => [
                                        'read' => true,
                                        'write' => true,
                                    ],
                                    'attributes' => [

                                    ],
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => [

                                    ],
                                    'tree_deep' => 0,
                                    'check_subfolders' => 1,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => [

                                    ],
                                    'archivers' => [
                                        'enabled' => false,
                                        'create' => [

                                        ],
                                        'extract' => [

                                        ],
                                    ],
                                    'flysystem' => [
                                        'enabled' => false,
                                        'filesystem' => '',
                                        'type' => '',
                                        'adapter_service' => '',
                                    ],
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => [

                                    ],
                                    'driver_options' => [

                                    ],
                                    'dropbox2_settings' => [
                                        'enabled' => false,
                                        'aliasFormat' => '%s@Dropbox',
                                        'path' => '/',
                                        'separator' => '/',
                                        'acceptedName' => '%s@Dropbox',
                                        'rootCssClass' => 'elfinder-navbar-root-dropbox',
                                        'getThumbSize' => 'medium',
                                    ],
                                    'box_settings' => [
                                        'enabled' => false,
                                        'root' => 'Box.com',
                                        'path' => '/',
                                        'separator' => '/',
                                        'tmbPath' => '',
                                        'tmbURL' => '',
                                        'tmpPath' => '',
                                        'acceptedName' => '#^[^/\\?*:|"<>]*[^./\\?*:|"<>]$#',
                                        'rootCssClass' => 'elfinder-navbar-root-box',
                                    ],
                                    'onedrive_settings' => [
                                        'enabled' => false,
                                        'root' => 'OneDrive.com',
                                        'OneDriveApiClient' => '',
                                        'path' => '/',
                                        'separator' => '/',
                                        'tmbPath' => '',
                                        'tmbURL' => '',
                                        'tmpPath' => '',
                                        'acceptedName' => '#^[^/\\?*:|"<>]*[^./\\?*:|"<>]$#',
                                        'rootCssClass' => 'elfinder-navbar-root-onedrive',
                                        'useApiThumbnail' => true,
                                    ],
                                    'ftp_settings' => [
                                        'enabled' => false,
                                    ],
                                    'mysql_settings' => [
                                        'enabled' => false,
                                        'port' => NULL,
                                        'socket' => NULL,
                                        'files_table' => 'elfinder_file',
                                        'tmbPath' => '',
                                        'tmpPath' => '',
                                        'rootCssClass' => 'elfinder-navbar-root-sql',
                                        'noSessionCache' => 'hasdirs',
                                    ],
                                ],
                            ],
                            'binds' => [

                            ],
                            'plugins' => [

                            ],
                        ],
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                        'visible_mime_types' => [

                        ],
                    ],
                ],
                'configuration_provider' => 'fm_elfinder.configurator.default',
                'loader' => 'fm_elfinder.loader.default',
            ],
            'knp_paginator.template.pagination' => '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',
            'knp_paginator.template.filtration' => '@KnpPaginator/Pagination/filtration.html.twig',
            'knp_paginator.template.sortable' => '@KnpPaginator/Pagination/sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => [

            ],
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => [

            ],
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.core.flashmessage.manager.class' => 'Sonata\\Twig\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => [
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ],
            'sonata_block.blocks' => [
                'sonata.admin.block.admin_list' => [
                    'contexts' => [
                        0 => 'admin',
                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.container' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.empty' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.text' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.rss' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.menu' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.template' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.admin.block.search_result' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.admin.block.stats' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
            ],
            'sonata_block.blocks_by_class' => [

            ],
            'sonata_blocks.block_types' => [
                0 => 'sonata.admin.block.admin_list',
                1 => 'sonata.block.service.container',
                2 => 'sonata.block.service.empty',
                3 => 'sonata.block.service.text',
                4 => 'sonata.block.service.rss',
                5 => 'sonata.block.service.menu',
                6 => 'sonata.block.service.template',
                7 => 'sonata.admin.block.search_result',
                8 => 'sonata.admin.block.stats',
            ],
            'sonata_block.cache_blocks' => [
                'by_type' => [
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.block.service.container' => 'sonata.cache.noop',
                    'sonata.block.service.empty' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                    'sonata.block.service.rss' => 'sonata.cache.noop',
                    'sonata.block.service.menu' => 'sonata.cache.noop',
                    'sonata.block.service.template' => 'sonata.cache.noop',
                    'sonata.admin.block.search_result' => 'sonata.cache.noop',
                    'sonata.admin.block.stats' => 'sonata.cache.noop',
                ],
            ],
            'sonata_blocks.default_contexts' => [

            ],
            'sonata.admin.twig.extension.x_editable_type_mapping' => [
                'choice' => 'select',
                'boolean' => 'select',
                'text' => 'text',
                'textarea' => 'textarea',
                'html' => 'textarea',
                'email' => 'email',
                'string' => 'text',
                'smallint' => 'text',
                'bigint' => 'text',
                'integer' => 'number',
                'decimal' => 'number',
                'currency' => 'number',
                'percent' => 'number',
                'url' => 'url',
                'date' => 'date',
            ],
            'sonata.admin.configuration.legacy_twig_text_extension' => false,
            'sonata.admin.configuration.global_search.empty_boxes' => 'show',
            'sonata.admin.configuration.global_search.case_sensitive' => true,
            'sonata.admin.configuration.templates' => [
                'user_block' => '@SonataAdmin/Core/user_block.html.twig',
                'add_block' => '@SonataAdmin/Core/add_block.html.twig',
                'layout' => '@SonataAdmin/standard_layout.html.twig',
                'ajax' => '@SonataAdmin/ajax_layout.html.twig',
                'dashboard' => '@SonataAdmin/Core/dashboard.html.twig',
                'search' => '@SonataAdmin/Core/search.html.twig',
                'list' => '@SonataAdmin/CRUD/list.html.twig',
                'filter' => '@SonataAdmin/Form/filter_admin_fields.html.twig',
                'show' => '@SonataAdmin/CRUD/show.html.twig',
                'show_compare' => '@SonataAdmin/CRUD/show_compare.html.twig',
                'edit' => '@SonataAdmin/CRUD/edit.html.twig',
                'preview' => '@SonataAdmin/CRUD/preview.html.twig',
                'history' => '@SonataAdmin/CRUD/history.html.twig',
                'acl' => '@SonataAdmin/CRUD/acl.html.twig',
                'history_revision_timestamp' => '@SonataAdmin/CRUD/history_revision_timestamp.html.twig',
                'action' => '@SonataAdmin/CRUD/action.html.twig',
                'select' => '@SonataAdmin/CRUD/list__select.html.twig',
                'list_block' => '@SonataAdmin/Block/block_admin_list.html.twig',
                'search_result_block' => '@SonataAdmin/Block/block_search_result.html.twig',
                'short_object_description' => '@SonataAdmin/Helper/short-object-description.html.twig',
                'delete' => '@SonataAdmin/CRUD/delete.html.twig',
                'batch' => '@SonataAdmin/CRUD/list__batch.html.twig',
                'batch_confirmation' => '@SonataAdmin/CRUD/batch_confirmation.html.twig',
                'inner_list_row' => '@SonataAdmin/CRUD/list_inner_row.html.twig',
                'outer_list_rows_mosaic' => '@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig',
                'outer_list_rows_list' => '@SonataAdmin/CRUD/list_outer_rows_list.html.twig',
                'outer_list_rows_tree' => '@SonataAdmin/CRUD/list_outer_rows_tree.html.twig',
                'base_list_field' => '@SonataAdmin/CRUD/base_list_field.html.twig',
                'pager_links' => '@SonataAdmin/Pager/links.html.twig',
                'pager_results' => '@SonataAdmin/Pager/results.html.twig',
                'tab_menu_template' => '@SonataAdmin/Core/tab_menu_template.html.twig',
                'knp_menu_template' => '@SonataAdmin/Menu/sonata_menu.html.twig',
                'action_create' => '@SonataAdmin/CRUD/dashboard__action_create.html.twig',
                'button_acl' => '@SonataAdmin/Button/acl_button.html.twig',
                'button_create' => '@SonataAdmin/Button/create_button.html.twig',
                'button_edit' => '@SonataAdmin/Button/edit_button.html.twig',
                'button_history' => '@SonataAdmin/Button/history_button.html.twig',
                'button_list' => '@SonataAdmin/Button/list_button.html.twig',
                'button_show' => '@SonataAdmin/Button/show_button.html.twig',
            ],
            'sonata.admin.configuration.admin_services' => [

            ],
            'sonata.admin.configuration.dashboard_groups' => [

            ],
            'sonata.admin.configuration.dashboard_blocks' => [
                0 => [
                    'type' => 'sonata.admin.block.admin_list',
                    'position' => 'left',
                    'roles' => [

                    ],
                    'settings' => [

                    ],
                    'class' => 'col-md-4',
                ],
            ],
            'sonata.admin.configuration.sort_admins' => false,
            'sonata.admin.configuration.mosaic_background' => 'data:image/png;base64,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',
            'sonata.admin.configuration.default_group' => 'default',
            'sonata.admin.configuration.default_label_catalogue' => 'SonataAdminBundle',
            'sonata.admin.configuration.default_icon' => '<i class="fa fa-folder"></i>',
            'sonata.admin.configuration.breadcrumbs' => [
                'child_admin_route' => 'edit',
            ],
            'sonata.admin.security.acl_user_manager' => NULL,
            'sonata.admin.configuration.security.role_admin' => 'ROLE_SONATA_ADMIN',
            'sonata.admin.configuration.security.role_super_admin' => 'ROLE_SUPER_ADMIN',
            'sonata.admin.configuration.security.information' => [

            ],
            'sonata.admin.configuration.security.admin_permissions' => [
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ],
            'sonata.admin.configuration.security.object_permissions' => [
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ],
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => [
                'admins' => [

                ],
                'excludes' => [

                ],
                'implements' => [

                ],
                'extends' => [

                ],
                'instanceof' => [

                ],
                'uses' => [

                ],
            ],
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.configuration.filters.persister' => 'sonata.admin.filter_persister.session',
            'sonata.admin.configuration.show.mosaic.button' => true,
            'sonata.admin.configuration.translate_group_label' => false,
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.http_client' => [
                    0 => 'http_client',
                    1 => '@WebProfiler/Collector/http_client.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'data_collector.messenger' => [
                    0 => 'messenger',
                    1 => '@WebProfiler/Collector/messenger.html.twig',
                ],
                'mailer.data_collector' => [
                    0 => 'mailer',
                    1 => '@WebProfiler/Collector/mailer.html.twig',
                ],
                'Vich\\UploaderBundle\\DataCollector\\MappingCollector' => [
                    0 => 'vich_uploader.mapping_collector',
                    1 => '@VichUploader/Collector/mapping_collector.html.twig',
                ],
                'easyadmin.data_collector' => [
                    0 => 'easyadmin',
                    1 => '@EasyAdmin/data_collector/easyadmin.html.twig',
                ],
                'sonata.block.data_collector' => [
                    0 => 'block',
                    1 => '@SonataBlock/Profiler/block.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'sonata.core.form.types' => [
                0 => 'App\\Form\\RegistrationFormType',
                1 => 'App\\Form\\UsersBlogFormType',
                2 => 'form.type.form',
                3 => 'form.type.choice',
                4 => 'form.type.file',
                5 => 'form.type.entity',
                6 => 'fos_ck_editor.form.type',
                7 => 'vich_uploader.form.type.file',
                8 => 'vich_uploader.form.type.image',
                9 => 'easyadmin.form.type',
                10 => 'easyadmin.form.type.fileupload',
                11 => 'easyadmin.form.type.filters',
                12 => 'easyadmin.form.type.autocomplete',
                13 => 'easyadmin.form.type.batch',
                14 => 'easyadmin.form.type.divider',
                15 => 'easyadmin.form.type.section',
                16 => 'easyadmin.form.type.group',
                17 => 'liip_imagine.form.type.image',
                18 => 'fm_elfinder.form.type',
                19 => 'sonata.core.form.type.array_legacy',
                20 => 'sonata.core.form.type.boolean_legacy',
                21 => 'sonata.core.form.type.collection_legacy',
                22 => 'sonata.core.form.type.translatable_choice',
                23 => 'sonata.core.form.type.date_range_legacy',
                24 => 'sonata.core.form.type.datetime_range_legacy',
                25 => 'sonata.core.form.type.date_picker_legacy',
                26 => 'sonata.core.form.type.datetime_picker_legacy',
                27 => 'sonata.core.form.type.date_range_picker_legacy',
                28 => 'sonata.core.form.type.datetime_range_picker_legacy',
                29 => 'sonata.core.form.type.equal_legacy',
                30 => 'sonata.core.form.type.color_selector',
                31 => 'sonata.core.form.type.color_legacy',
                32 => 'sonata.core.form.type.array',
                33 => 'sonata.core.form.type.boolean',
                34 => 'sonata.core.form.type.collection',
                35 => 'sonata.core.form.type.date_range',
                36 => 'sonata.core.form.type.datetime_range',
                37 => 'sonata.core.form.type.date_picker',
                38 => 'sonata.core.form.type.datetime_picker',
                39 => 'sonata.core.form.type.date_range_picker',
                40 => 'sonata.core.form.type.datetime_range_picker',
                41 => 'sonata.core.form.type.equal',
                42 => 'sonata.block.form.type.block',
                43 => 'sonata.block.form.type.container_template',
                44 => 'sonata.admin.form.type.admin',
                45 => 'sonata.admin.form.type.model_choice',
                46 => 'sonata.admin.form.type.model_list',
                47 => 'sonata.admin.form.type.model_reference',
                48 => 'sonata.admin.form.type.model_hidden',
                49 => 'sonata.admin.form.type.model_autocomplete',
                50 => 'sonata.admin.form.type.collection',
                51 => 'sonata.admin.doctrine_orm.form.type.choice_field_mask',
                52 => 'sonata.admin.form.filter.type.number',
                53 => 'sonata.admin.form.filter.type.choice',
                54 => 'sonata.admin.form.filter.type.default',
                55 => 'sonata.admin.form.filter.type.date',
                56 => 'sonata.admin.form.filter.type.daterange',
                57 => 'sonata.admin.form.filter.type.datetime',
                58 => 'sonata.admin.form.filter.type.datetime_range',
            ],
            'sonata.core.form.type_extensions' => [
                0 => 'form.type_extension.form.transformation_failure_handling',
                1 => 'form.type_extension.form.http_foundation',
                2 => 'form.type_extension.form.validator',
                3 => 'form.type_extension.repeated.validator',
                4 => 'form.type_extension.submit.validator',
                5 => 'form.type_extension.upload.validator',
                6 => 'form.type_extension.csrf',
                7 => 'form.type_extension.form.data_collector',
                8 => 'easyadmin.form.type.extension',
                9 => 'sonata.admin.form.extension.field',
                10 => 'sonata.admin.form.extension.field.mopa',
                11 => 'sonata.admin.form.extension.choice',
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand',
                1 => 'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand',
            ],
        ];
    }
}
