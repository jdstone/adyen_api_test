<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77c6fdea118ee525925c57bc183b9d92
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'Adyen\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Adyen\\' => 
        array (
            0 => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen',
        ),
    );

    public static $classMap = array (
        'Adyen\\Service\\AbstractResource' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/AbstractResource.php',
        'Adyen\\Service\\DirectoryLookup' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/DirectoryLookup.php',
        'Adyen\\Service\\Modification' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/Modification.php',
        'Adyen\\Service\\Payment' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/Payment.php',
        'Adyen\\Service\\Payout' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/Payout.php',
        'Adyen\\Service\\Recurring' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/Recurring.php',
        'Adyen\\Service\\ResourceModel\\DirectoryLookup\\Directory' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/DirectoryLookup/Directory.php',
        'Adyen\\Service\\ResourceModel\\Modification\\Cancel' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Modification/Cancel.php',
        'Adyen\\Service\\ResourceModel\\Modification\\CancelOrRefund' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Modification/CancelOrRefund.php',
        'Adyen\\Service\\ResourceModel\\Modification\\Capture' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Modification/Capture.php',
        'Adyen\\Service\\ResourceModel\\Modification\\Refund' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Modification/Refund.php',
        'Adyen\\Service\\ResourceModel\\Payment\\Authorise' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Payment/Authorise.php',
        'Adyen\\Service\\ResourceModel\\Payment\\Authorise3D' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Payment/Authorise3D.php',
        'Adyen\\Service\\ResourceModel\\Payout\\Confirm' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Payout/Confirm.php',
        'Adyen\\Service\\ResourceModel\\Payout\\Decline' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Payout/Decline.php',
        'Adyen\\Service\\ResourceModel\\Payout\\StoreDetailsAndSubmit' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Payout/StoreDetailsAndSubmit.php',
        'Adyen\\Service\\ResourceModel\\Payout\\Submit' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Payout/Submit.php',
        'Adyen\\Service\\ResourceModel\\Payout\\ThirdParty\\ConfirmThirdParty' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Payout/ThirdParty/ConfirmThirdParty.php',
        'Adyen\\Service\\ResourceModel\\Payout\\ThirdParty\\DeclineThirdParty' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Payout/ThirdParty/DeclineThirdParty.php',
        'Adyen\\Service\\ResourceModel\\Payout\\ThirdParty\\StoreDetail' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Payout/ThirdParty/StoreDetail.php',
        'Adyen\\Service\\ResourceModel\\Payout\\ThirdParty\\StoreDetailsAndSubmitThirdParty' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Payout/ThirdParty/StoreDetailsAndSubmitThirdParty.php',
        'Adyen\\Service\\ResourceModel\\Payout\\ThirdParty\\SubmitThirdParty' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Payout/ThirdParty/SubmitThirdParty.php',
        'Adyen\\Service\\ResourceModel\\Recurring\\Disable' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Recurring/Disable.php',
        'Adyen\\Service\\ResourceModel\\Recurring\\ListRecurringDetails' => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen/Service/ResourceModel/Recurring/ListRecurringDetails.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77c6fdea118ee525925c57bc183b9d92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77c6fdea118ee525925c57bc183b9d92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77c6fdea118ee525925c57bc183b9d92::$classMap;

        }, null, ClassLoader::class);
    }
}
