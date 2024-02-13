<?php

use redaxo_bootstrap\{Settings, ContentBuilder};

include("base.php");
$arr = rex_article_slice::getSlicesForArticle(rex_article::getCurrent()->getId());
$content = ContentBuilder::buildContent($arr);
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <?php include("header.php"); ?>
</head>

<?php

$styles = '';
$bodyBackgroundImage = Settings::getBackogrundImage();
if (null !== $bodyBackgroundImage) {
    $styles .= 'background: url(/media/' . $bodyBackgroundImage . ');';
    $styles .= 'background-size: cover;background-repeat: no-repeat;background-position: top, center;';
}
?>


<body class="frontend" <?= !empty($styles) ? 'style="' . $styles . '"' : '' ?>>
    <?php
    if (!empty(rex_article::getCurrent()->getValue('art_onepage_main'))) {
        include("navigation_onepage.php");
    } else {
        include("navigation_multipage.php");
    }
    ?>
    <main>
        <?php
        $arr = rex_article_slice::getSlicesForArticle(rex_article::getCurrent()->getId());
        $content = ContentBuilder::buildContent($arr);
        echo $content;
        ?>
    </main>
    <?php include("footer.php"); ?>
    <?php include("footer_scripts.php"); ?>
</body>

</html>