<?php

namespace redaxo_bootstrap;

use rex;
use rex_article;

class MetaInfo
{

    const KEY_BACKGROUND_IMAGE = "art_backgroundImage";
    const KEY_NO_INDEX = "art_no_index_no_follow";
    const KEY_WEBSITE_TITLE = "art_website_title";
    const KEY_META_DESCRIPTION = "art_description";
    const KEY_META_AUTHOR = "art_author";

    public static function getBackgroundImage()
    {
        return rex_article::getCurrent()->getValue(self::KEY_BACKGROUND_IMAGE);
    }

    public static function isNoIndex()
    {
        return rex_article::getCurrent()->getValue(self::KEY_NO_INDEX);
    }

    public static function getTitleWebsite()
    {
        return rex_article::getCurrent()->getValue(self::KEY_WEBSITE_TITLE);
    }

    public static function getMetaDescription()
    {
        return rex_article::getCurrent()->getValue(self::KEY_META_DESCRIPTION);
    }

    public static function getMetaAuthor()
    {
        return rex_article::getCurrent()->getValue(self::KEY_META_AUTHOR);
    }
}
