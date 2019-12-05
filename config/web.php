<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'Blog',
    'basePath' => dirname(__DIR__),
    'defaultRoute' => '/',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@uploads' => '/uploads',
        '@uploadroot' => $_SERVER['DOCUMENT_ROOT'].'/upload',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'NrF6B5L4isKkambISrVKgQdGVlcIu4Ec',
        ],
        'cache' => [
            'class' => 'yii\caching\DbCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'main/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'settings' => [
            'class' => 'app\components\Settings',
        ],

        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'main/page/<slug>' => 'main/page',
            ],
        ],
        'assetManager' => [
            'appendTimestamp' => true,
        ],
        'i18n' => [
            'translations' => [
                'yii2mod.settings' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@yii2mod/settings/messages',
                    //'sourceLanguage' => 'en-US'
                ],
                'yii2mod.rbac' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@yii2mod/rbac/messages',
                ],
            ],
        ],
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\AdminModule',
        ],
        'settings' => [
            'class' => 'yii2mod\settings\Module',
            'layout' => '@app/modules/admin/views/layouts/main'
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
