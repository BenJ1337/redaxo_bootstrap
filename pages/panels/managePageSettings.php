<form action="<?php echo $_SERVER["REQUEST_URI"] ?>" method="post" style="border: 1px solid #ddd; border-radius: 10px; padding: 20px;">
    <fieldset>
        <?php

        use redaxo_bootstrap\Settings;

        $backgroundImage = Settings::getBackogrundImage();
        if (isset($_POST[Settings::BACKGROUND_IMAGE_KEY])) {
            $backgroundImage = $_POST[Settings::BACKGROUND_IMAGE_KEY];
            Settings::setBackogrundImage($backgroundImage);
        }
        ?>
        <div class="form-group">
            <label for="<?= Settings::BACKGROUND_IMAGE_KEY ?>">Hintergrundbild:
                <?= rex_var_media::getWidget(Settings::BACKGROUND_IMAGE_KEY . "_ID", Settings::BACKGROUND_IMAGE_KEY,  $backgroundImage, []); ?>
            </label>
        </div>
        <button type="submit" class="btn btn-success">
            Übernehmen
        </button>
    </fieldset>
</form>