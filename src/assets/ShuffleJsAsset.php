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
 * Class ShuffleJsAsset
 *
 * `ShuffleJs` asset bundle, installed via composer / npm
 * For example, [this page](https://vestride.github.io/Shuffle/) shows how to use the `ShuffleJs` plugin.
 *
 * @author Marc Mautz <m.mautz@herzogkommunikation.de>
 */
class ShuffleJsAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@npm/shufflejs/dist';

    /**
     * @inheritdoc
     */
    public $js = [
        'shuffle' . (YII_DEBUG ? '' : '.min') . '.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
