<?php

namespace redaxo_bootstrap;

use rex, rex_article, rex_logger;
use  redaxo_url_rewrite\URLManager;

class BootstrapUtil
{

    private function __construct()
    {
    }

    public static function getURLMedia($subpath)
    {
        $root = rex::getServer();
        if (str_ends_with($root, '/')) {
            $root = substr($root, 0, strlen($root) - 1);
        }
        return $root . '/media/' . $subpath;
    }

    public static function getURLRootRedaxoInstalltion()
    {
        $subdirectory = '/';
        if (class_exists('redaxo_url_rewrite\URLManager')) {
            $subdirectory = URLManager::getSubdirectory();
        }
        return $subdirectory;
    }

    public static function getArticleId()
    {
        $curArtikel = rex_article::getCurrent();
        if ($curArtikel !== null) {
            return $curArtikel->getId();
        } else {
            rex_logger::logError(E_ERROR, "Artikel nicht gefunden!", __file__, __LINE__);
        }
        return -1;
    }
}
