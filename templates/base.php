<?php

use redaxo_bootstrap\{Settings, Constants, CM_Global_Request_Settings};

$templateDebug = false;
$globalSettings = CM_Global_Request_Settings::getInstance();
$thisAddon = rex_addon::get(Constants::ADDON_KEY);

$curArtikel = rex_article::getCurrent();
$curArtikelId = -1;
if ($curArtikel !== null) {
    $curArtikelId = $curArtikel->getId();
} else {
    rex_logger::logError(E_WARNING, "Artikel nicht gefunden!", __file__, 14);
}
