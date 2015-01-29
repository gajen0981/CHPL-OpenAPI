<?php

$params = require(__DIR__ . '/params.php');

$config = [
	// Sets the timezone in php ini to 'America/New_York' and set the MVC app to UTC format
    // --------------------------------
    'timeZone' => 'UTC',

    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'j-0SmmFnjzh1mcJ9irc5t7Aeg18jTDiu',
            
            // RESTful API to accept inputs
            'parsers' => [
		        'application/json' => 'yii\web\JsonParser',
		    ]
        ],
        
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
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
        
        // -----------------------------------
    	// Application wide global local formatter
		'formatter' => [
		    'class' => 'yii\i18n\Formatter',
		    'dateFormat' => 'php:m/d/Y',
		    'datetimeFormat' => 'php:m/d/Y h:i a',
		    'timeFormat' => 'php:h:i a',
		],
    	
    	// -----------------------------------
    	// Enable Pretty URL and it requires .htaccess and mod_rewrite on the apache and place the file in the frontend/web/ directory
    	'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
		        ['class' => 'yii\rest\UrlRule', 'controller' => 'api'],
		    ],
        ],
        
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
