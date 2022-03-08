<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerFjCd6c5\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerFjCd6c5/EntityManager_9a5be93.php';
require __DIR__.'/ContainerFjCd6c5/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerFjCd6c5/getValidator_ExpressionService.php';
require __DIR__.'/ContainerFjCd6c5/getValidator_EmailService.php';
require __DIR__.'/ContainerFjCd6c5/getValidator_BuilderService.php';
require __DIR__.'/ContainerFjCd6c5/getValidatorService.php';
require __DIR__.'/ContainerFjCd6c5/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerFjCd6c5/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerFjCd6c5/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerFjCd6c5/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerFjCd6c5/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerFjCd6c5/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerFjCd6c5/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerFjCd6c5/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerFjCd6c5/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerFjCd6c5/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerFjCd6c5/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerFjCd6c5/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerFjCd6c5/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerFjCd6c5/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerFjCd6c5/getSession_FactoryService.php';
require __DIR__.'/ContainerFjCd6c5/getServicesResetterService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerFjCd6c5/getSecrets_VaultService.php';
require __DIR__.'/ContainerFjCd6c5/getRouting_LoaderService.php';
require __DIR__.'/ContainerFjCd6c5/getPropertyAccessorService.php';
require __DIR__.'/ContainerFjCd6c5/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_TypeExtension_Upload_ValidatorService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_TypeExtension_Form_TransformationFailureHandlingService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_Type_FormService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_Type_FileService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_Type_EntityService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_Type_ColorService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_ServerParamsService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_RegistryService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_FactoryService.php';
require __DIR__.'/ContainerFjCd6c5/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerFjCd6c5/getErrorControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerFjCd6c5/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerFjCd6c5/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerFjCd6c5/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerFjCd6c5/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerFjCd6c5/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerFjCd6c5/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerFjCd6c5/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerFjCd6c5/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerFjCd6c5/getSecurityVoterService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerFjCd6c5/getBatchActionDtoResolverService.php';
require __DIR__.'/ContainerFjCd6c5/getAdminContextResolverService.php';
require __DIR__.'/ContainerFjCd6c5/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerFjCd6c5/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerFjCd6c5/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerFjCd6c5/getCache_SystemClearerService.php';
require __DIR__.'/ContainerFjCd6c5/getCache_SystemService.php';
require __DIR__.'/ContainerFjCd6c5/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerFjCd6c5/getCache_AppClearerService.php';
require __DIR__.'/ContainerFjCd6c5/getCache_AppService.php';
require __DIR__.'/ContainerFjCd6c5/getTemplateControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getRedirectControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getFieldProviderService.php';
require __DIR__.'/ContainerFjCd6c5/getEntityUpdaterService.php';
require __DIR__.'/ContainerFjCd6c5/getEntityRepositoryService.php';
require __DIR__.'/ContainerFjCd6c5/getFiltersFormTypeService.php';
require __DIR__.'/ContainerFjCd6c5/getFileUploadTypeService.php';
require __DIR__.'/ContainerFjCd6c5/getCrudFormTypeService.php';
require __DIR__.'/ContainerFjCd6c5/getEaCrudFormTypeExtensionService.php';
require __DIR__.'/ContainerFjCd6c5/getSlugConfiguratorService.php';
require __DIR__.'/ContainerFjCd6c5/getNumberConfiguratorService.php';
require __DIR__.'/ContainerFjCd6c5/getMoneyConfiguratorService.php';
require __DIR__.'/ContainerFjCd6c5/getDateTimeConfiguratorService.php';
require __DIR__.'/ContainerFjCd6c5/getCountryConfiguratorService.php';
require __DIR__.'/ContainerFjCd6c5/getCommonPreConfiguratorService.php';
require __DIR__.'/ContainerFjCd6c5/getCommonPostConfiguratorService.php';
require __DIR__.'/ContainerFjCd6c5/getChoiceConfiguratorService.php';
require __DIR__.'/ContainerFjCd6c5/getBooleanConfiguratorService.php';
require __DIR__.'/ContainerFjCd6c5/getAssociationConfiguratorService.php';
require __DIR__.'/ContainerFjCd6c5/getPaginatorFactoryService.php';
require __DIR__.'/ContainerFjCd6c5/getFormFactoryService.php';
require __DIR__.'/ContainerFjCd6c5/getFilterFactoryService.php';
require __DIR__.'/ContainerFjCd6c5/getExceptionListenerService.php';
require __DIR__.'/ContainerFjCd6c5/getCrudResponseListenerService.php';
require __DIR__.'/ContainerFjCd6c5/getProfesseurLibreValidatorService.php';
require __DIR__.'/ContainerFjCd6c5/getEstDateDispoValidatorService.php';
require __DIR__.'/ContainerFjCd6c5/getSalleRepositoryService.php';
require __DIR__.'/ContainerFjCd6c5/getProfesseurRepositoryService.php';
require __DIR__.'/ContainerFjCd6c5/getMatiereRepositoryService.php';
require __DIR__.'/ContainerFjCd6c5/getCoursRepositoryService.php';
require __DIR__.'/ContainerFjCd6c5/getAvisRepositoryService.php';
require __DIR__.'/ContainerFjCd6c5/getProfesseurTypeService.php';
require __DIR__.'/ContainerFjCd6c5/getProfesseurController2Service.php';
require __DIR__.'/ContainerFjCd6c5/getSalleControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getProfesseurControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getCoursControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getAvisControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getSalleCrudControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getProfesseurCrudControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getMatiereCrudControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getDashboardControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getCoursCrudControllerService.php';
require __DIR__.'/ContainerFjCd6c5/getAvisCrudControllerService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_YJtWrRhService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_VzpJyvvService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_St3ASTRService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_RiFbGaBService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_MfNWFnlService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_KEvhmk9Service.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_JYvbTxiService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_JIxfAsiService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_H0bCM0gService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_Esmk6IFService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_BRdave9Service.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_AKM6MDaService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_XpfeRo6Service.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_XdMPwIJService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_W_C5h2Service.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_R8Qy2_Service.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_OGjUKCtService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_JKF9tQ8Service.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_HelWCOWService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_GymbEAgService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_ENGuM7Service.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_B5QIPService.php';
require __DIR__.'/ContainerFjCd6c5/get_ServiceLocator_90oyMz4Service.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\EasyAdminBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\Admin\AvisCrudController';
$classes[] = 'App\Controller\Admin\CoursCrudController';
$classes[] = 'App\Controller\Admin\DashboardController';
$classes[] = 'App\Controller\Admin\MatiereCrudController';
$classes[] = 'App\Controller\Admin\ProfesseurCrudController';
$classes[] = 'App\Controller\Admin\SalleCrudController';
$classes[] = 'App\Controller\Api\AvisController';
$classes[] = 'App\Controller\Api\CoursController';
$classes[] = 'App\Controller\Api\ProfesseurController';
$classes[] = 'App\Controller\Api\SalleController';
$classes[] = 'App\Controller\ProfesseurController';
$classes[] = 'App\Form\ProfesseurType';
$classes[] = 'App\Repository\AvisRepository';
$classes[] = 'App\Repository\CoursRepository';
$classes[] = 'App\Repository\MatiereRepository';
$classes[] = 'App\Repository\ProfesseurRepository';
$classes[] = 'App\Repository\SalleRepository';
$classes[] = 'App\Validator\EstDateDispoValidator';
$classes[] = 'App\Validator\ProfesseurLibreValidator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\EventListener\AdminRouterSubscriber';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Factory\AdminContextFactory';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Factory\MenuFactory';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Factory\ActionFactory';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Factory\ControllerFactory';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Factory\EntityFactory';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Factory\FieldFactory';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityPaginator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ArrayConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AssociationConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AvatarConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\BooleanConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ChoiceConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CodeEditorConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPostConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CountryConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CurrencyConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\DateTimeConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\EmailConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\FormConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\IdConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ImageConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\IntegerConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\LanguageConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\LocaleConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\MoneyConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\PercentConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\SlugConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TelephoneConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TextConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TextEditorConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TimezoneConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\UrlConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\ChoiceConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\CommonConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\ComparisonConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\DateTimeConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\EntityConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\NullConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\NumericConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\TextConfigurator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Form\Extension\CollectionTypeExtension';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EaCrudFormTypeExtension';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\CrudFormType';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\FiltersFormType';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Intl\IntlFormatter';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Provider\AdminContextProvider';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Registry\CrudControllerRegistry';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Registry\DashboardControllerRegistry';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Router\UrlSigner';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Security\AuthorizationChecker';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Common\Cache\CacheProvider';
$classes[] = 'Doctrine\Common\Cache\Psr6\DoctrineProvider';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Component\Uid\Factory\UlidFactory';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\Uid\Factory\UuidFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

$preloaded = Preloader::preload($classes);
