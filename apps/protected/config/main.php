<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'HIC',
	'theme'=>'bootstrap',
	// language
	'sourceLanguage'=>'id',
	'language'=>'id_id',
	// preloading 'log' component
	'preload'=>array('log', 'bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.*',
		'ext.giix-components.*', // giix components
		'application.extensions.*',
		'application.modules.rights.*',
		'application.modules.rights.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool		
		'polis',
		'claim',
		'setup',
		'user',
		'rights'=>array(
			'debug'=>true,
			'install'=>true,
			'enableBizRuleData'=>true,
		),
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'crot',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths' => array(
				'ext.giix-core', // giix generators
				'bootstrap.gii', // since 0.9.1
			),

		),
		
	),

	// application components
		'components'=>array(
			'ELangHandler' => array (
			            'class' => 'application.extensions.langhandler.ELangHandler',
			            'languages' => array('en','id'),
			        ),
			'user'=>array(
				'class'=>'RWebUser',
				// enable cookie-based authentication
				'allowAutoLogin'=>true,
				'loginUrl'=>array('/user/login'),
			),
			'bootstrap'=>array(
			'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
			'coreCss'=>true, // whether to register the Bootstrap core CSS (bootstrap.min.css), defaults to true
			'responsiveCss'=>true, // whether to register the Bootstrap responsive CSS (bootstrap-responsive.min.css), default to false
			'plugins'=>array(
				// Optionally you can configure the "global" plugins (button, popover, tooltip and transition)
				// To prevent a plugin from being loaded set it to false as demonstrated below
				'transition'=>false, // disable CSS transitions
				'tooltip'=>array(
					'selector'=>'a.tooltip', // bind the plugin tooltip to anchor tags with the 'tooltip' class
					'options'=>array(
						'placement'=>'bottom', // place the tooltips below instead
					),
				),				
				// If you need help with configuring the plugins, please refer to Bootstrap's own documentation:
				// http://twitter.github.com/bootstrap/javascript.html
			),
		),
		/*'user'=>array(
			'class'=>'RWebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            'loginUrl'=>'/HIC/apps/user/login',
		),*/
		// uncomment the following to enable URLs in path-format
		'rights' => array(
				'superuserName' => 'admin',
				'authenticatedName'=>'Authenticated',
				'install' => true,
		 ),
		'urlManager'=>array(
			'urlFormat'=>'path',
			//'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',				
			),
		),
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		'db'=>array(
			'connectionString' => 'pgsql:host=localhost;dbname=health_claim',
			'emulatePrepare' => true,
			'username' => 'postgres',
			'password' => 'postgres',
			'charset' => 'utf8',
		),
		
		'authManager'=>array(
			'class'=>'RDbAuthManager',
			'connectionID'=>'db',
			'itemTable'=>'authitem',
			'itemChildTable'=>'authitemchild',
			'assignmentTable'=>'authassignment',
			'rightsTable'=>'rights',
			'defaultRoles'=>array('Guest'),
        ),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),*/
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);