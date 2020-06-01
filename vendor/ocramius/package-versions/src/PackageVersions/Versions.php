<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'behat/transliterator' => 'v1.3.0@3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
  'cocur/slugify' => 'v4.0.0@3f1ffc300f164f23abe8b64ffb3f92d35cec8307',
  'doctrine/annotations' => '1.10.2@b9d758e831c70751155c698c2f7df4665314a1cb',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.13.0@308728eae8d90412d850c155d40b1cfbede549da',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.0.8@b0e0deb6e700438401ede433a15a6372d2285202',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.1@4111f6853aea6f28b2b1dcfdde83d12dd3d5e6e3',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.2@dafe298ce5d0b995ebe1746670704c0a35868a6a',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'easycorp/easyadmin-bundle' => 'v2.3.8@c28301cc7f7df9531fd3b8b91196ab11a71074c4',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'friendsofsymfony/ckeditor-bundle' => '2.2.0@7e1cfe2a83faba0be02661d44289d35e940bb5ea',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'gedmo/doctrine-extensions' => 'v2.4.41@e55a6727052f91834a968937c93b6fb193be8fb6',
  'imagine/imagine' => '1.2.3@cb2361e5bb4410b681462d8e4f912bc5dabf84ab',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'jms/metadata' => '2.1.0@8d8958103485c2cbdd9a9684c3869312ebdaf73a',
  'knplabs/knp-components' => 'v2.3.5@b1945bc58cabb2b95fe028388d44a8a8743b04e5',
  'knplabs/knp-menu' => '2.6.0@b6aade272c345b6fbd07fce5929a761cba0909b8',
  'knplabs/knp-menu-bundle' => '2.2.2@267027582a1f1e355276f796f8da0e9f82026bf1',
  'knplabs/knp-paginator-bundle' => 'v5.2.0@787174799b8de92287865566dce9e0625015f8ff',
  'liip/imagine-bundle' => '2.3.0@06740a0a0e9c0054d3e0589472fd19b975784c52',
  'monolog/monolog' => '1.25.3@fa82921994db851a8becaf3787a9e73c5976b6f1',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'pagerfanta/pagerfanta' => 'v2.1.3@a53ff01d521648d9dbca19b93ac6bc75a59b0972',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.5.5@c76bb1c5c67840ecb6d9be8e9d8d7036e375e317',
  'sonata-project/admin-bundle' => '3.66.0@bd257ed419345643d015f10b9eccf089748ff744',
  'sonata-project/block-bundle' => '3.18.5@19d55f3fddd4d6195dfc25ecf36fbf8f48db2571',
  'sonata-project/cache' => '2.0.1@2e2fdabf40bfe566c68406aae238a721cddabf74',
  'sonata-project/core-bundle' => '3.18.0@8e8089961a1185c0a40796054c09a89fd9f9cba9',
  'sonata-project/datagrid-bundle' => '2.5.0@3d67da1be314130c8b419a881582c93bedf809fa',
  'sonata-project/doctrine-extensions' => '1.6.0@9f39109af81561f8175a3bcece454724a8d9e053',
  'sonata-project/doctrine-orm-admin-bundle' => '3.17.1@cdf7ccfb2d40ca2d5a4ec43e927da8ff0744a753',
  'sonata-project/exporter' => '2.2.0@ed2b6e43982eec5c267b3ff3bc0e3c97ab98b849',
  'stof/doctrine-extensions-bundle' => 'v1.4.0@4d340daa1a8304faa62260be2adb0180e2138af3',
  'symfony/asset' => 'v4.4.8@fc8eff5841b549fbd66f89e1fd7cfb6a823ee512',
  'symfony/cache' => 'v4.4.8@ba0aa1738d04df338c0fabdbecf9cf5fddcdb63f',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v4.4.8@8ba41fe053683e1e6e3f6fa21f07ea5c4dd9e4c0',
  'symfony/console' => 'v4.4.8@10bb3ee3c97308869d53b3e3d03f6ac23ff985f7',
  'symfony/debug' => 'v4.4.8@346636d2cae417992ecfd761979b2ab98b339a45',
  'symfony/dependency-injection' => 'v4.4.8@9d0c2807962f7f12264ab459f48fb541dbd386bd',
  'symfony/doctrine-bridge' => 'v4.4.8@642cb1000331b8dc5568587f60aeb299070f9a55',
  'symfony/dotenv' => 'v4.4.8@a78e698cfb8aca8ef6814639eb5ffc17180a4326',
  'symfony/error-handler' => 'v4.4.8@7e9828fc98aa1cf27b422fe478a84f5b0abb7358',
  'symfony/event-dispatcher' => 'v4.4.8@abc8e3618bfdb55e44c8c6a00abd333f831bbfed',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/expression-language' => 'v4.4.8@38010d8d1eb425b74f25b87c366c4d97e4b06a89',
  'symfony/filesystem' => 'v4.4.8@a3ebf3bfd8a98a147c010a568add5a8aa4edea0f',
  'symfony/finder' => 'v4.4.8@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/flex' => 'v1.6.3@89999fdaad52cab14637709f2d2ce25835a051e6',
  'symfony/form' => 'v4.4.8@505299904397a7c6d515a7c03cdbc1b4a1d4a21f',
  'symfony/framework-bundle' => 'v4.4.8@fdacdf191a71aef94e05b64319868f4d06fe509c',
  'symfony/http-client' => 'v4.4.8@88d1745f4095727b8bf0574a0f414331f4ec229c',
  'symfony/http-client-contracts' => 'v2.1.1@e3ba2688594d8ef284f40348f7efb72cba4edec4',
  'symfony/http-foundation' => 'v4.4.8@ec5bd254c223786f5fa2bb49a1e705c1b8e7cee2',
  'symfony/http-kernel' => 'v4.4.8@1799a6c01f0db5851f399151abdb5d6393fec277',
  'symfony/inflector' => 'v4.4.8@53cfa47fe9142f39b5605df67bada3893dd4f46c',
  'symfony/intl' => 'v4.4.8@040f10fde20ae35e8623771ba8a733508c87aa6a',
  'symfony/mailer' => 'v4.4.8@939553797698f6702fb00bdc2870bfa23f976473',
  'symfony/mailgun-mailer' => 'v4.4.8@fed965887665a210173e3a27db9f3703c2396b91',
  'symfony/messenger' => 'v4.4.8@518595aaf10a177623685be49b585c09e96aedc3',
  'symfony/mime' => 'v4.4.8@7a583ffb6c7dd5aabb5db920817a3cc39261c517',
  'symfony/monolog-bridge' => 'v4.4.8@224355f29abfb8b00a4c5fb22bdaff5c47e82105',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.8@ade3d89dd3b875b83c8cff2980c9bb0daf6ef297',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-grapheme' => 'v1.17.0@e094b0770f7833fdf257e6ba4775be4e258230b2',
  'symfony/polyfill-intl-icu' => 'v1.17.0@4ef3923e4a86e1b6ef72d42be59dbf7d33a685e3',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-intl-normalizer' => 'v1.17.0@1357b1d168eb7f68ad6a134838e46b0b159444a9',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/process' => 'v4.4.8@4b6a9a4013baa65d409153cbb5a895bf093dc7f4',
  'symfony/property-access' => 'v4.4.8@f6a51bd76a3a5c36c57221a4f491b9cf02663672',
  'symfony/property-info' => 'v4.4.8@ab5bb41dee66b4f7b4e0f615772b07d8f466e218',
  'symfony/routing' => 'v4.4.8@67b4e1f99c050cbc310b8f3d0dbdc4b0212c052c',
  'symfony/security-acl' => 'v3.0.4@dc8f10b3bda34e9ddcad49edc7accf61f31fce43',
  'symfony/security-bundle' => 'v4.4.8@dd1641ab03f2dd62e7aa0de8efd80cee20d585ff',
  'symfony/security-core' => 'v4.4.8@fc84e9481e5bd9d80f70c0d8151601211377a5dc',
  'symfony/security-csrf' => 'v4.4.8@286a71ff176e1b0dd071f0e73dcec0970a56634b',
  'symfony/security-guard' => 'v4.4.8@d2ba618ed2a52f37dd74fb2c52a14388beddd5fc',
  'symfony/security-http' => 'v4.4.8@055a4f4fe58ab19515fa573919bf7ebd114f4aa7',
  'symfony/serializer' => 'v4.4.8@067b6a064ffc53b48d3854c7b408b1ea26017a50',
  'symfony/serializer-pack' => 'v1.0.3@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v4.4.8@e0324d3560e4128270e3f08617480d9233d81cfc',
  'symfony/string' => 'v5.0.8@48a2f4b3597514e6c885c0ddb22d3bbdb60517d0',
  'symfony/templating' => 'v4.4.8@d65ba8cd13339b692f709ea36625851de218c4dc',
  'symfony/translation' => 'v4.4.8@8272bbd2b7e220ef812eba2a2b30068a5c64b191',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v4.4.8@d64035d0d6b3dbeed3a6839e3833779aaecf3513',
  'symfony/twig-bundle' => 'v4.4.8@79046e5189c5f4da923f395ccc11db930953c990',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v4.4.8@1780dff34d756f924ed7bb4f1cd94a7f9685eb69',
  'symfony/var-dumper' => 'v4.4.8@c587e04ce5d1aa62d534a038f574d9a709e814cf',
  'symfony/var-exporter' => 'v4.4.8@6e95bdca4a4604da6c148729972d4b627a034b13',
  'symfony/web-link' => 'v4.4.8@9ec692b342855335f3f4e77753ad71f85c6038f8',
  'symfony/yaml' => 'v4.4.8@b385dce1c0e9f839b384af90188638819433e252',
  'tattali/calendar-bundle' => 'v1.2.0@3f0741637604958ac9ffb71379ce820d3c28a653',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/extra-bundle' => 'v3.0.3@6eaf1637abe6b68518e7e0949ebb84e55770d5c6',
  'twig/intl-extra' => 'v3.0.3@55d68a5836f40d62695488b4bdbc71fa71f52574',
  'twig/string-extra' => 'v3.0.3@9905d4410f1214df183fbb1a5e7848c560fdd551',
  'twig/twig' => 'v2.12.1@ddd4134af9bfc6dba4eff7c8447444ecc45b9ee5',
  'vich/uploader-bundle' => '1.13.2@f24c3a1764d30cbe6e7d4d8bbc2daca6f0c2693e',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => '1.4.2@39e9777c9089351a468f780b01cffa3cb0a42907',
  'doctrine/doctrine-fixtures-bundle' => '3.3.1@39defca57ee0949e1475c46177b30b6d1b732e8f',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'symfony/browser-kit' => 'v4.4.8@e4b0dc1b100bf75b5717c5b451397f230a618a42',
  'symfony/css-selector' => 'v4.4.8@afc26133a6fbdd4f8842e38893e0ee4685c7c94b',
  'symfony/debug-bundle' => 'v4.4.8@dc847e4971b9f76b30e02d421b303d349d5aeed2',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'v4.4.8@4d0fb3374324071ecdd94898367a3fa4b5563162',
  'symfony/maker-bundle' => 'v1.18.0@b38c75be880b152ab55cef6cd52bf882d2b6518e',
  'symfony/phpunit-bridge' => 'v5.0.8@00b8da18a52fa842b7a39613fb0a63720a354e74',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v4.4.8@aaeaa6a620e0187ea3107bdd4030a8b284f7e89d',
  'paragonie/random_compat' => '2.*@99cd7d68b7a610b065ffadea16b26a90aec453e4',
  'symfony/polyfill-ctype' => '*@99cd7d68b7a610b065ffadea16b26a90aec453e4',
  'symfony/polyfill-iconv' => '*@99cd7d68b7a610b065ffadea16b26a90aec453e4',
  'symfony/polyfill-php71' => '*@99cd7d68b7a610b065ffadea16b26a90aec453e4',
  'symfony/polyfill-php70' => '*@99cd7d68b7a610b065ffadea16b26a90aec453e4',
  'symfony/polyfill-php56' => '*@99cd7d68b7a610b065ffadea16b26a90aec453e4',
  '__root__' => 'dev-master@99cd7d68b7a610b065ffadea16b26a90aec453e4',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
