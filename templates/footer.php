<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="footer-wrapper">
                    <nav class="navbar navbar-expand">
                        <?php
                        use redaxo_bootstrap\Settings;

                        if (empty(Settings::getImpressum())) {
                            rex_logger::logError(E_WARNING, "Impressum nicht gesetzt!", __file__, 8);
                        }
                        if (empty(Settings::getDatenschutz())) {
                            rex_logger::logError(E_WARNING, "Datenschutz nicht gesetzt!", __file__, 8);
                        }
                        ?>
                        <ul class="navbar-nav">
                            <?php
                            if (null !== Settings::getImpressum()) {
                                echo '<li class="nav-item"><a class="nav-link" href="' . rex_getUrl(Settings::getImpressum()) . '">Impressum</a></li>';
                            }
                            if (null !== Settings::getDatenschutz()) {
                                echo '<li class="nav-item"><a class="nav-link" href="' . rex_getUrl(Settings::getDatenschutz()) . '">Datenschutzerklärung</a></li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>