<?php

namespace kksshp\ckeditor;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $sourcePath = '@vendor/kksshp/yii2-ckeditor/assets/';
    public $css = [
    ];

    public $js = [
        'ckeditor.js',
    ];

    public $depends = [
    ];
}