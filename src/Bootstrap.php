<?php

namespace gofuroov\generator;

use gofuroov\generator\generators\crud\Generator;
use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;

/**
 * @author John Martin <john.itvn@gmail.com>
 * @since 1.0
 */
class Bootstrap implements BootstrapInterface
{

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        Yii::setAlias("@generator", __DIR__);
        Yii::setAlias("@gofuroov/generator", __DIR__);
        if ($app->hasModule('gii')) {
            if (!isset($app->getModule('gii')->generators['generator'])) {
                $app->getModule('gii')->generators['generator'] = Generator::class;
            }
        }
    }

}
