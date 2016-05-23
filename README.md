Yii2 notifications module
=========================
Yii2 notifications module

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist fgh151/yii2-noifications "*"
```

or add

```
"fgh151/yii2-noifications": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code to config  :

```php
'modules' => [
        ...
        'notification' => [
            'class' => 'fgh151\notifications\Module'
        ]
    ]
```