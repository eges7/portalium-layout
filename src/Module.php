<?php

namespace portalium\layout;

class Module extends \portalium\base\Module
{
    public $apiRules = [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => [
                'layout/default',
            ]
        ],
    ];
    
    public static function moduleInit()
    {
        self::registerTranslation('layout','@portalium/layout/messages',[
            'layout' => 'layout.php',
        ]);
    }

    public static function t($message, array $params = [])
    {
        return parent::coreT('layout', $message, $params);
    }
}