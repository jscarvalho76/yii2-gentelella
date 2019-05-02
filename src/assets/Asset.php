<?php

namespace jeffersoncarvalho\gentelella\assets;

class Asset extends \yii\web\AssetBundle
{
    public $depends = [
        'jeffersoncarvalho\gentelella\assets\ThemeAsset',
        'jeffersoncarvalho\gentelella\assets\ExtensionAsset',
    ];
}
