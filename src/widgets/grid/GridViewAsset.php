<?php

namespace jeffersoncarvalho\gentelella\widgets\grid;

class GridViewAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/gentelella/vendors/datatables.net-bs/css';
    public $css = [
        'dataTables.bootstrap.min.css',
    ];
    public $js = [];
    public $depends = [
        'jeffersoncarvalho\gentelella\assets\Asset',
    ];
}
