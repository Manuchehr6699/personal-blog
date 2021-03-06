<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'Scopus Diaries',
    'basePath' => dirname(__DIR__),
    'defaultRoute' => '/blog/posts/',
    'bootstrap' => [
        'log',
        'app\models\SocialProfiles',
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@uploads' => '/uploads',
        '@uploadroot' => $_SERVER['DOCUMENT_ROOT'] . '/upload',
    ],
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            //'defaultRoles' => ['main', 'blog', 'books'],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'NrF6B5L4isKkambISrVKgQdGVlcIu4Ec',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'main/error',
            //'layout' => 'main'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',
                'username' => '',
                'password' => '',
                'port' => '465',
                'encryption' => 'ssl',
            ],
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
                'blog/post/<alias>' => 'blog/post',
                'blog/posts/<page>' => 'blog/posts/',
                'blog/posts-by-tag/<tag>' => 'blog/posts-by-tag',
                'blog/posts-category/<category>' => 'blog/posts-category',
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
                    'sourceLanguage' => 'en-US'
                ],
                'yii2mod.rbac' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@yii2mod/rbac/messages',
                    'sourceLanguage' => 'en-US'
                ],
            ],
        ]
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\AdminModule',
        ],
        'settings' => [
            'class' => 'yii2mod\settings\Module',
            'layout' => '@app/modules/admin/views/layouts/main'
        ],
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
        'rbac' => [
            'class' => 'yii2mod\rbac\Module',
            'layout' => '@app/modules/admin/views/layouts/main',
            'as access' => [
                'class' => yii2mod\rbac\filters\AccessControl::className()
            ],
        ],
    ],
    'as access' => [
        'class' => yii2mod\rbac\filters\AccessControl::className(),
        'allowActions' => [
            'main/*',
            'books/*',
            'blog/*',
            'admin/main/login',
        ]
    ],
    'params' => $params,
];

// if (YII_ENV_DEV) {
//     $config['bootstrap'][] = 'debug';
//     $config['modules']['debug'] = [
//         'class' => 'yii\debug\Module',
//     ];

//     $config['bootstrap'][] = 'gii';
//     $config['modules']['gii'] = [
//         'class' => 'yii\gii\Module',
//     ];
// }

return $config;
