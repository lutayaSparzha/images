<?php

namespace frontend\components;

use yii\base\BootstrapInterface;
use Yii;
/**
 * Description of LanguageSelector
 *
 * @author K55VD
 */
class LanguageSelector implements BootstrapInterface  {
    
    public $supportedLanguages = ['en-US', 'ru-RU'];
    
    public function bootstrap($app) {
        $cookieLanguage = Yii::$app->request->cookies['language'];
        if(isset($cookieLanguage)&& in_array($cookieLanguage, $this->supportedLanguages)){
            $app->language = $app->request->cookies['language'];
        }
    }
}
