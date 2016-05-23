Yii2 notifications module
=========================
Yii2 notifications module

This module provide functions to send notifications to user. Implements admin part where you can wie messages and create item. 
In frontend messages will be in bootstrap alert box, By the timer widget ask backend for new messages and show them.

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

then include widget on pages where module will be:

```php

echo fgh151\notifications\widgets\notifications\Widget::widget();
```