# VueShuffleJS Widget

Yii2 Widget for [Vue.js](https://vuejs.org) with [vue-shufflejs-plugin](https://git.hrzg.de/dmstr/vue-shufflejs-plugin).  
The widget use and require the following packages:

* [Vue.js](https://vuejs.org) - The Progressive JavaScript Framework
* [vue-shufflejs-plugin](https://git.hrzg.de/dmstr/vue-shufflejs-plugin) - A Vue.js plugin for Shuffle.js library

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run 

`composer require dmstr/yii2-vue-shufflejs-widget:"^0.1"` 

or add 

`"dmstr/yii2-vue-shufflejs-widget": "^0.1"` 

to the require section of your `composer.json` file.

## Usage

The following example renders the [vue-shufflejs-plugin](https://git.hrzg.de/dmstr/vue-shufflejs-plugin) with Filter, Search and Sort.  
Please check the [vue-shufflejs-plugin](https://git.hrzg.de/dmstr/vue-shufflejs-plugin) documentation for available `options` supported by the plugin.

````php
use dmstr\widgets\vueshufflejs\VueShuffle;
    
<?= VueShuffle::widget(
    [
        'options' => [
            'settings' => $settings,
            'products' => [
                'data' => $data,
                'option' => $option,
                'filter' => $filter,
            ]
        ]
    ]
);?>
````
## License

The MIT License (MIT). Please see [License File](./LICENSE.md) for more information.