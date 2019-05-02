<?php

namespace jeffersoncarvalho\gentelella\assets;

use yii\web\AssetBundle;

class ThemeBuildAsset extends AssetBundle
{
    public $sourcePath = '@bower/gentelella/build/css/';

    public $css = [
        'custom.css',
    ];
}
