<?php

use redaxo_bootstrap\{BootstrapUtil, Settings, MetaInfo, Constants};

$titleText = '';
if (!empty(MetaInfo::getTitleWebsite())) {
    $titleText = MetaInfo::getTitleWebsite();
} else {
    $titleText = rex::getServerName() . ' - ' . rex_article::getCurrent()->getName();
}
echo sprintf('<title>%s</title>', $titleText);

if (!empty(MetaInfo::getMetaDescription())) {
    echo '<meta name="description" content="' . MetaInfo::getMetaDescription() . '">';
}
if (!empty(MetaInfo::getMetaAuthor())) {
    echo '<meta name="author" content="' . MetaInfo::getMetaAuthor() . '">';
}
if (!empty(MetaInfo::isNoIndex()) && '|true|' === MetaInfo::isNoIndex()) {
    echo '<meta name="robots" content="noindex,nofollow" />';
}
echo '<meta charset="UTF-8">';
echo '<link rel="icon" type="image/png"  href="' . (BootstrapUtil::getURLMedia(Settings::getFavicon())) . '">';

// <link rel="icon" type="image/png" sizes="32x32" href="<?= $subdirectory . rex_addon::get('be_style')->getAssetsUrl('plugins/redaxo/icons/favicon-16x16.png') >">
// <link rel="icon" type="image/png" sizes="180x180" href="<?= $subdirectory . rex_addon::get('be_style')->getAssetsUrl('plugins/redaxo/icons/apple-touch-icon.png') >">
// <link rel="icon" type="image/png" sizes="192x192" href="<?= $subdirectory . rex_addon::get('be_style')->getAssetsUrl('plugins/redaxo/icons/android-chrome-192x192.png') >">

echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link rel="stylesheet" href="' . BootstrapUtil::getURLRootRedaxoInstalltion() . rex_addon::get('redaxo_bootstrap')->getAssetsUrl('frontend/bootstrap_5/bootstrap.min.css') . '">';
echo '<script src="' . BootstrapUtil::getURLRootRedaxoInstalltion() . rex_addon::get('redaxo_bootstrap')->getAssetsUrl('frontend/bootstrap_5/bootstrap.bundle.min.js') . '"></script>';

foreach (rex_view::getCssFiles() as $i => $files) {
    foreach ($files as $i => $file) {
        echo '<link rel="stylesheet" href="' . BootstrapUtil::getURLRootRedaxoInstalltion() . substr($file, 2) . '">';
    }
}
foreach (rex_view::getJsFiles() as $i => $file) {
    echo '<script src="' . BootstrapUtil::getURLRootRedaxoInstalltion() . substr($file, 2) . '" ></script>';
}
?>

<style>
    <?= file_get_contents(rex_addon::get(Constants::ADDON_KEY)->getPath('assets/frontend/styles.css')); ?>
</style>