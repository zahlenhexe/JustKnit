<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/JustKnit/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/justknit')) {
            $cache->deleteTree(
                $dev . 'assets/components/justknit/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/justknit/', $dev . 'assets/components/justknit');
        }
        if (!is_link($dev . 'core/components/justknit')) {
            $cache->deleteTree(
                $dev . 'core/components/justknit/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/justknit/', $dev . 'core/components/justknit');
        }
    }
}

return true;