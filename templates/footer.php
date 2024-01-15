<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="footer-wrapper">
                    <?php
                    if (empty(rex_addon::get(ADDON_KEY)->getConfig(IMPRESSUM_KEY))) {
                        rex_logger::logError(E_WARNING, "Impressum nicht gesetzt!", __file__, 8);
                    }
                    if (empty(rex_addon::get(ADDON_KEY)->getConfig(DATENSCHUTZ_KEY))) {
                        rex_logger::logError(E_WARNING, "Datenschutz nicht gesetzt!", __file__, 8);
                    }
                    ?>
                    <a href="<?= rex_getUrl(rex_addon::get(ADDON_KEY)->getConfig(IMPRESSUM_KEY)); ?>">Impressum</a>
                    <a href="<?= rex_getUrl(rex_addon::get(ADDON_KEY)->getConfig(DATENSCHUTZ_KEY)); ?>">Datenschutzerklärung</a>
                </div>
            </div>
        </div>
    </div>
</footer>