<form action="<?php echo $_SERVER["REQUEST_URI"] ?>" method="post" style="border: 1px solid #ddd; border-radius: 10px; padding: 20px;">
    <fieldset>
        <?php

        use redaxo_bootstrap\Settings;

        $impressumId = Settings::getImpressum();
        $datenschutzId = Settings::getDatenschutz();
        if (isset($_POST[Settings::IMPRESSUM_KEY])) {
            $impressumId = $_POST[Settings::IMPRESSUM_KEY];
            Settings::setImpressum($impressumId);
        }
        if (isset($_POST[Settings::DATENSCHUTZ_KEY])) {
            $datenschutzId = $_POST[Settings::DATENSCHUTZ_KEY];
            Settings::setDatenschutz($datenschutzId);
        }

        $favicon = Settings::getFavicon();
        if (isset($_POST[Settings::FAVICON_KEY])) {
            $favicon = $_POST[Settings::FAVICON_KEY];
            Settings::setFavicon($favicon);
        }
        ?>
        <div class="form-group">
            <label for="<?= Settings::IMPRESSUM_KEY ?>">Seite für das Impressum
                <?= rex_var_link::getWidget(Settings::IMPRESSUM_KEY . "_ID", Settings::IMPRESSUM_KEY,  $impressumId, []); ?>
            </label>
        </div>
        <div class="form-group">
            <label for="<?= Settings::DATENSCHUTZ_KEY ?>">Seite für den Datenschutz
                <?= rex_var_link::getWidget(Settings::DATENSCHUTZ_KEY . "_ID", Settings::DATENSCHUTZ_KEY,  $datenschutzId, []); ?>
            </label>
        </div>
        <div class="form-group">
            <label for="<?= Settings::FAVICON_KEY ?>">Favicon:
                <?= rex_var_media::getWidget(Settings::FAVICON_KEY . "_ID", Settings::FAVICON_KEY,  $favicon, []); ?>
            </label>
        </div>
        <button type="submit" class="btn btn-success">
            Übernehmen
        </button>
    </fieldset>
</form>