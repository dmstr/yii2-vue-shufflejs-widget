<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2018 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dmstr\widgets\vueshufflejs\assets;

use yii\web\AssetBundle;

/**
 * Class VueMultiselectAsset
 *
 * `vue-multiselect` asset bundle, installed via composer / npm
 * For example, [this page](https://vue-multiselect.js.org) shows how to use the `vue-multiselect` plugin.
 *
 * @author Marc Mautz <m.mautz@herzogkommunikation.de>
 */
class VueMultiselectAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@npm/vue-multiselect/dist';

    /**
     * @inheritdoc
     */
    public $css = [
        'vue-multiselect.min.css',
        'vue-multiselect.min.css.map'
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'vue-multiselect.min.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'prawee\vuejs\VueJsAsset'
    ];
}
