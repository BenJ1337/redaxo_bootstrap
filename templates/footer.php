<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="footer-wrapper">
                    <?php

                    use redaxo_bootstrap\Settings;

                    if (empty(Settings::getImpressum())) {
                        rex_logger::logError(E_WARNING, "Impressum nicht gesetzt!", __file__, 8);
                    }
                    if (empty(Settings::getDatenschutz())) {
                        rex_logger::logError(E_WARNING, "Datenschutz nicht gesetzt!", __file__, 8);
                    }
                    ?>
                    <a href="<?= rex_getUrl(Settings::getImpressum()); ?>">Impressum</a>
                    <a href="<?= rex_getUrl(Settings::getDatenschutz()); ?>">Datenschutzerklärung</a>
                </div>
            </div>
        </div>
    </div>
</footer>