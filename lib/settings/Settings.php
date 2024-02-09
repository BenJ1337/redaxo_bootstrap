<?php

namespace redaxo_bootstrap;

use rex_addon;

class Settings
{
    const IMPRESSUM_KEY = "IMPRESSUM_KEY";
    const DATENSCHUTZ_KEY = "DATENSCHUTZ_KEY";
    const BACKGROUND_IMAGE_KEY = "BACKGROUND_IMAGE_KEY";
    const FAVICON_KEY = "FAVICON_KEY";

    private function __construct()
    {
    }

    public static function setBackogrundImage($path)
    {
        return rex_addon::get(Constants::ADDON_KEY)->setConfig(self::BACKGROUND_IMAGE_KEY, $path);
    }

    public static function getBackogrundImage()
    {
        return rex_addon::get(Constants::ADDON_KEY)->getConfig(self::BACKGROUND_IMAGE_KEY);
    }

    public static function setFavicon($path)
    {
        return rex_addon::get(Constants::ADDON_KEY)->setConfig(self::FAVICON_KEY, $path);
    }

    public static function getFavicon()
    {
        return rex_addon::get(Constants::ADDON_KEY)->getConfig(self::FAVICON_KEY);
    }

    public static function setImpressum($pageId)
    {
        return rex_addon::get(Constants::ADDON_KEY)->setConfig(self::IMPRESSUM_KEY, $pageId);
    }

    public static function getImpressum()
    {
        return rex_addon::get(Constants::ADDON_KEY)->getConfig(self::IMPRESSUM_KEY);
    }

    public static function setDatenschutz($pageId)
    {
        return rex_addon::get(Constants::ADDON_KEY)->setConfig(self::DATENSCHUTZ_KEY, $pageId);
    }

    public static function getDatenschutz()
    {
        return rex_addon::get(Constants::ADDON_KEY)->getConfig(self::DATENSCHUTZ_KEY);
    }
}
