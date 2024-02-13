<?php

use redaxo_eingabekomponenten\{DropDown, Bildauswahl, Checkbox};


//$this->sliceSql) 
$this->getContentAsQuery(true);
$sliceId = $this->getCurrentSlice()->getId();

$dropDownBreiteInhalt = new DropDown(
    "Breite des Inhalts",
    ["bootstrap_width"],
    $sliceId,
    1,
    array(
        "normal" => "",
        "Rand" => "-fluid"
    )
);

$dropDownAnzahlBloecke = new DropDown(
    "Anzahl Blöcke",
    ["slice_count"],
    $sliceId,
    1,
    array(
        "1" => "1",
        "2" => "2",
        "3" => "3",
        "4" => "4",
        "5" => "5",
        "6" => "6",
        "7" => "7",
        "8" => "8",
        "9" => "9",
        "10" => "10",
        "11" => "11",
        "12" => "12"
    )
);

$dropDownTheme = new DropDown(
    "Theme",
    ["theme_class"],
    $sliceId,
    1,
    array(
        '' => '',
        'Weiß' => 'white-theme',
        'Grau' => 'grey-theme',
        'Gelb' => 'yellow-theme'
    )
);


$bildauswahl = new Bildauswahl("Hintergrundbild",  ['bild'],  $sliceId, 1);


$checkbox = new Checkbox(
    "Keine Ränder",
    ["no_padding"],
    $sliceId,
    1,
    'no_padding'
);

$html = '<input style="display: none;" type="text" id="text1" name="REX_INPUT_VALUE[1][slide_collector]" value="1" />
<div class="tab-content">
    <div id="a1" class="tab-pane fade in active">
        <div class="form-group">' . $dropDownBreiteInhalt->getHTML() . '</div>
        <div class="form-group">' . $dropDownAnzahlBloecke->getHTML() . '</div>
        <div class="form-group">' . $dropDownTheme->getHTML() . '</div>
        <div class="form-group">' . $checkbox->getHTML() . '</div>
        <div class="form-group">' . $bildauswahl->getHTML() . '</div>
        
    </div>
</div>
';
echo (new ModuleManager($sliceId))->getInput($html);
