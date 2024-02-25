<h1>Redaxo Bootstrap</h1>

<?php include 'panels/manageGlobalLinks.php'; ?>
<?php include 'panels/manageTemplate.php'; ?>
<?php include 'panels/managePageSettings.php'; ?>

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