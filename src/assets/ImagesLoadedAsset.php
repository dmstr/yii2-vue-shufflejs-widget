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
 * Class ImagesLoadedAsset
 *
 * `imagesLoaded` asset bundle, installed via composer / npm
 * For example, [this page](http://imagesloaded.desandro.com) shows how to use the `imagesLoaded` plugin.
 *
 * @author Marc Mautz <m.mautz@herzogkommunikation.de>
 */
class ImagesLoadedAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@npm/imagesloaded';

    /**
     * @inheritdoc
     */
    public $js = [
        'imagesloaded.pkgd' . (YII_DEBUG ? '' : '.min') . '.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
