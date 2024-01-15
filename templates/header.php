<?php

use redaxo_url_rewrite\URLManager;

$servername = rex::getServerName();
$htmlTitle = '';
$subdirectory = '/';
if (class_exists('redaxo_url_rewrite\URLManager')) {
    $subdirectory = URLManager::getSubdirectory();
}

$title = rex_article::getCurrent()->getValue('art_website_title');
if (isset($title) && !empty($title)) {
    echo "<title>" . $title . "</title>";
} else {
    echo "<title>" . $servername . ' - ' . rex_article::getCurrent()->getName() . "</title>";
}
?>
<meta charset="UTF-8">
<?php
$metaDescription = rex_article::getCurrent()->getValue('art_description');
if (isset($metaDescription) && !empty($metaDescription)) {
    echo '<meta name="description" content="' . $metaDescription . '">';
}
?>

<meta name="author" content="Benjamin Hacker">
<link rel="icon" type="image/png" sizes="32x32" href="<?= rex_addon::get('be_style')->getAssetsUrl('plugins/redaxo/icons/favicon-16x16.png') ?>">
<link rel="icon" type="image/png" sizes="180x180" href="<?= rex_addon::get('be_style')->getAssetsUrl('plugins/redaxo/icons/apple-touch-icon.png') ?>">
<link rel="icon" type="image/png" sizes="192x192" href="<?= rex_addon::get('be_style')->getAssetsUrl('plugins/redaxo/icons/android-chrome-192x192.png') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?= $subdirectory . rex_addon::get('redaxo_bootstrap')->getAssetsUrl('frontend/bootstrap_5/bootstrap.min.css') ?>">
<script src="<?= $subdirectory . rex_addon::get('redaxo_bootstrap')->getAssetsUrl('frontend/bootstrap_5/bootstrap.bundle.min.js') ?>"></script>

<?php
// rex_addon::get("redaxo_custom_components")->
foreach (rex_view::getCssFiles() as $i => $files) {
    foreach ($files as $i => $file) {
        echo '<link rel="stylesheet" href="' . $subdirectory . substr($file, 2) . '">';
    }
}
?>