<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2018 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dmstr\widgets\vueshufflejs;

use dmstr\widgets\vueshufflejs\assets\ImagesLoadedAsset;
use dmstr\widgets\vueshufflejs\assets\ShuffleJsAsset;
use dmstr\widgets\vueshufflejs\assets\VueMultiselectAsset;
use dmstr\widgets\vueshufflejs\assets\VueShufflePluginAsset;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\Json;

/**
 * Class VueShuffle
 * @package dmstr\widgets\vueshuffle
 * @author Marc Mautz <m.mautz@herzogkommunikation.de>
 */
class VueShuffle extends Widget
{
    /**
     * @var array the attributes for the widget container tag
     */
    public $options = [];

    /**
     * Initializes the widget
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();

        if(!isset($this->options['products']) || !isset($this->options['settings'])) {
            throw new InvalidConfigException("The 'products' & 'settings' option is required");
        }

        if(!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    /**
     * Renders the widget
     */
    public function run()
    {
        $this->registerClientScript();

        $viewFile = \Yii::getAlias($this->getViewPath() . '/view.php');
        return $this->getView()->renderFile($viewFile);
    }

    /**
     * Registers required assets and initialize the vue instance
     */
    protected function registerClientScript()
    {
        $view = $this->getView();
        VueShufflePluginAsset::register($view);
        VueMultiselectAsset::register($view);
        ImagesLoadedAsset::register($view);
        ShuffleJsAsset::register($view);

        // Register global application language
        $view->registerJs(
            'var language = "' . \Yii::$app->language . '";',
            \yii\web\View::POS_END,
            'language'
        );

        // Register vue application
        $view->registerJs(
            "var vm = new Vue({
                  el: '#app',
                  data () {
                    return {
                      settings: " . Json::encode($this->options['settings']) . ",
                      products: {
                        data: " . Json::encode($this->options['products']['data']) . ",
                        option: " . Json::encode($this->options['products']['option']) . ",
                        filter: " . Json::encode($this->options['products']['filter']) . "
                      }
                    }
                  }
                });",
            \yii\web\View::POS_READY,
            'vue'
        );
    }
}
