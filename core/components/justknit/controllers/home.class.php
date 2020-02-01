<?php

/**
 * The home manager controller for JustKnit.
 *
 */
class JustKnitHomeManagerController extends modExtraManagerController
{
    /** @var JustKnit $JustKnit */
    public $JustKnit;


    /**
     *
     */
    public function initialize()
    {
        $this->JustKnit = $this->modx->getService('JustKnit', 'JustKnit', MODX_CORE_PATH . 'components/justknit/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['justknit:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('justknit');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->JustKnit->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->JustKnit->config['jsUrl'] . 'mgr/justknit.js');
        $this->addJavascript($this->JustKnit->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->JustKnit->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->JustKnit->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->JustKnit->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->JustKnit->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->JustKnit->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        JustKnit.config = ' . json_encode($this->JustKnit->config) . ';
        JustKnit.config.connector_url = "' . $this->JustKnit->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "justknit-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="justknit-panel-home-div"></div>';

        return '';
    }
}