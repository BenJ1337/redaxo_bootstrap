<?php

use redaxo_custom_components\{DropDown, Bildauswahl, Checkbox};

use redaxo_bootstrap\{ModuleManager};

$this->getContentAsQuery(true);
$sliceId = $this->getCurrentSlice()->getId();

$output = '<input style="display: none;" type="text" id="text1" name="REX_INPUT_VALUE[1][slide_collector]" value="1" />
<div class="tab-content">
    <div id="a1" class="tab-pane fade in active">';
$output .= '<div class="form-group">' . (new DropDown(
    "Breite des Inhalts",
    ["bootstrap_width"],
    $sliceId,
    1,
    array(
        "normal" => "",
        "Rand" => "-fluid"
    )
))->getHTML() . '</div>';
$output .= '<div class="form-group">' . (new DropDown(
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
))->getHTML() . '</div>';
$output .= '<div class="form-group">' . (new DropDown(
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
))->getHTML() . '</div>';
$output .= '<div class="form-group">' . (new Bildauswahl("Hintergrundbild",  ['bild'],  $sliceId, 1))->getHTML() . '</div>';
$output .= '<div class="form-group">' . (new Checkbox(
    "Keine Ränder",
    ["no_padding"],
    $sliceId,
    1,
    'no_padding'
))->getHTML() . '</div>';

$output .= '</div></div>';
echo (new ModuleManager($sliceId))->getInput($output);
