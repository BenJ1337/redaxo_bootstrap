<h1>Redaxo Bootstrap</h1>

<?php

function getTemplatesFromDB($user)
{
    $sql = rex_sql::factory();
    $sql->setQuery("SELECT * FROM rex_template " . ($user != null ? "WHERE createuser = '" . $user . "'" : ""));
    return $sql->getDBArray();
}

if (isset($_POST["copy_templates_from_database"]) || isset($_POST["archive_templates_from_database"])) {
    $templates = getTemplatesFromDB(null);

    $rexModulesPath = 'rex_templates';
    $subPath = 'work';
    if (isset($_POST["archive_templates_from_database"])) {
        $subPath = 'archive/' . date("Y_m_s - H_i_s", time());
    }
    if (!isset($_POST["archive_templates_from_database"])) {
        rex_dir::deleteFiles(
            rex_path::addon('redaxo_bootstrap', '/' . $rexModulesPath . '/' . $subPath)
        );
    }

    foreach ($templates as $template) {
        $filename = $template['id'] . '-' . $template['name'] . '.json';
        rex_dir::create(
            rex_path::addon('redaxo_bootstrap', $rexModulesPath . '/' . $subPath)
        );
        rex_file::put(
            rex_path::addon('redaxo_bootstrap', '/' . $rexModulesPath . '/' . $subPath . '/' . $filename),
            json_encode($template)
        );
    }
    $html = '<div class="alert alert-success">'
        . '<p>'
        . (isset($_POST["archive_modules_from_database"]) ? 'Archivierung erfolgreich' : 'Kopieren erfolgreich')
        . '</p> '
        . '</div>';
    echo $html;
}

?>

<form action="<?php echo $_SERVER["REQUEST_URI"] ?>" method="post">
    <fieldset>
        <legend>Templates:</legend>
        <div class="form-group">
            <button name="copy_templates_from_database" type="submit" class="btn btn-success">
                Templates aus Datenbank kopieren
            </button>
        </div>
        <div class="form-group">
            <button name="archive_templates_from_database" type="submit" class="btn btn-success">
                Templates aus Datenbank archivieren
            </button>
        </div>
    </fieldset>
</form>

<?php include 'manageGlobalLinks.php'; ?>

<fieldset>
    <legend>Meta Info Einstellungen:</legend>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Prefix</th>
                <th>Spaltenname</th>
                <th>Feldbezeichnung</th>
                <th>Parameter</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>art_</td>
                <td>website_title</td>
                <td>Webseiten Titel</td>
                <td>text</td>
            </tr>
            <tr>
                <td>art_</td>
                <td>description</td>
                <td>Beschreibung</td>
                <td>textarea</td>
            </tr>
            <tr>
                <td>art_</td>
                <td>onepage_main</td>
                <td>Onepage Hauptseite</td>
                <td>REX_LINK_WIDGET</td>
            </tr>
        </tbody>
    </table>
</fieldset>