<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2018 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dmstr\widgets\vueshufflejs\assets;

use dmstr\web\AssetBundle;

/**
 * Class VueShufflePluginAsset
 * @author Marc Mautz <m.mautz@herzogkommunikation.de>
 */
class VueShufflePluginAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/npm/dmstr--vue-shufflejs-plugin/dist';

    /**
     * @inheritdoc
     */
    public $css = [
        'vue-shufflejs-plugin.min.css',
        'vue-shufflejs-plugin.min.css.map'
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'vue-shufflejs-plugin.min.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        // if we recompile the less files from 'yii\bootstrap\BootstrapAsset' and include the css in app.css
        // we need set bundle to `false` in application config and remove the following line
        //'yii\bootstrap\BootstrapAsset',
        'prawee\vuejs\VueJsAsset',
        'dmstr\widgets\vueshufflejs\assets\VueMultiselectAsset',
        'dmstr\widgets\vueshufflejs\assets\ImagesLoadedAsset',
        'dmstr\widgets\vueshufflejs\assets\ShuffleJsAsset'
    ];
}
