<?php
return array(
	"siteUrl"=>"http://127.0.0.1/CTP_leo_levavasseur/public/",
	"database"=>[
			"type"=>"mysql",
			"dbName"=>"store",
			"serverName"=>"127.0.0.1",
			"port"=>3306,
			"user"=>"root",
			"password"=>"",
			"options"=>[],
			"cache"=>false,
			"wrapper"=>"Ubiquity\\db\\providers\\pdo\\PDOWrapper"
			],
	"sessionName"=>"CTPleolevavasseur",
	"namespaces"=>[],
	"templateEngine"=>"Ubiquity\\views\\engine\\Twig",
	"templateEngineOptions"=>[
			"cache"=>false,
			"activeTheme"=>"bootstrap"
			],
	"test"=>false,
	"debug"=>false,
	"logger"=>function (){return new \Ubiquity\log\libraries\UMonolog("CTP_leo_levavasseur",\Monolog\Logger::INFO);},
	"di"=>[
			"@exec"=>[
					"jquery"=>function ($controller){
						return \Ajax\php\ubiquity\JsUtils::diSemantic($controller);
					}
					]
			],
	"cache"=>[
			"directory"=>"cache/",
			"system"=>"Ubiquity\\cache\\system\\ArrayCache",
			"params"=>[]
			],
	"mvcNS"=>[
			"models"=>"models",
			"controllers"=>"controllers",
			"rest"=>"",
			"domains"=>"domains"
			]
	);