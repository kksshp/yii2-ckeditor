yii2-ckeditor
==============
CKEditor for Yii2 with ckeditor build (https://docs.ckeditor.com/ckeditor5/latest/builds/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist kksshp/yii2-ckeditor "*"
```

or add

```
"kksshp/yii2-ckeditor": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use kksshp\ckeditor\CKEditor;


<?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
       
    ]) ?>```
    
Upload Url
-----

```php
use kksshp\ckeditor5\CKEditor;


<?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
       'uploadUrl' => 'image/upload', //File upload url
    ]) ?>```
