<form action="<?php echo $_SERVER["REQUEST_URI"] ?>" method="post" style="border: 1px solid #ddd; border-radius: 10px; padding: 20px;">
    <fieldset>
        <?php
        include __DIR__ . '/../lib/Constants.php';
        $impressumId = $this->getConfig('IMPRESSUM_KEY');
        $datenschutzId = $this->getConfig('DATENSCHUTZ_KEY');
        if (isset($_POST[IMPRESSUM_KEY])) {
            $impressumId = $_POST[IMPRESSUM_KEY];
            $this->setConfig(IMPRESSUM_KEY, $impressumId);
        }
        if (isset($_POST[DATENSCHUTZ_KEY])) {
            $datenschutzId = $_POST[DATENSCHUTZ_KEY];
            $this->setConfig(DATENSCHUTZ_KEY, $datenschutzId);
        }
        ?>
        <div class="form-group">
            <label for="<?= IMPRESSUM_KEY ?>">Seite für das Impressum
                <?= rex_var_link::getWidget(IMPRESSUM_KEY . "_ID", IMPRESSUM_KEY,  $impressumId, []); ?>
            </label>
        </div>
        <div class="form-group">
            <label for="<?= DATENSCHUTZ_KEY ?>">Seite für den Datenschutz
                <?= rex_var_link::getWidget(DATENSCHUTZ_KEY . "_ID", DATENSCHUTZ_KEY,  $datenschutzId, []); ?>
            </label>
        </div>
        <button type="submit" class="btn btn-success">
            Übernehmen
        </button>
    </fieldset>
</form>