<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
} else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var JustKnit $JustKnit */
$JustKnit = $modx->getService('JustKnit', 'JustKnit', MODX_CORE_PATH . 'components/justknit/model/');
$modx->lexicon->load('justknit:default');

// handle request
$corePath = $modx->getOption('justknit_core_path', null, $modx->getOption('core_path') . 'components/justknit/');
$path = $modx->getOption('processorsPath', $JustKnit->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);