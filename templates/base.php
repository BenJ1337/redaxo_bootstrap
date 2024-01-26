<?php
include __DIR__ . '/../lib/Constants.php';

$templateDebug = false;
$addonName = 'redaxo_bootstrap';
$globalSettings = CM_Global_Request_Settings::getInstance();
$thisAddon = rex_addon::get($addonName);

$curArtikel = rex_article::getCurrent();
$curArtikelId = -1;
if ($curArtikel !== null) {
    $curArtikelId = $curArtikel->getId();
} else {
    rex_logger::logError(E_WARNING, "Artikel nicht gefunden!", __file__, 14);
}
