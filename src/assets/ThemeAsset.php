<?php

namespace jeffersoncarvalho\gentelella\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'jeffersoncarvalho\gentelella\assets\BootstrapProgressbar',
        'jeffersoncarvalho\gentelella\assets\ThemeBuildAsset',
        'jeffersoncarvalho\gentelella\assets\ThemeSrcAsset',
    ];
}
