<?php

namespace redaxo_bootstrap;

use redaxo_custom_components\DropDown, rex_i18n;

class CM_BootstrapFormBuilder
{
    private $lgWidth = '6';
    private $mdWidth = '6';
    private $smWidth = '12';
    private $xsWidth = '12';
    private $sliceId;

    function __construct($sliceId)
    {
        $this->sliceId = $sliceId;
    }

    public function withLgWidth($width)
    {
        $this->lgWidth = $width;
    }

    public function withMdWidth($width)
    {
        $this->mdWidth = $width;
    }

    public function withSmWidth($width)
    {
        $this->smWidth = $width;
    }

    public function withXsWidth($width)
    {
        $this->xsWidth = $width;
    }

    public function build()
    {
        $output = '';
        $output .= '<div class="form-group"><a target="_blank" href="https://getbootstrap.com/docs/4.0/layout/grid/#grid-options">Dokumentation: Bootstrap 4 Grid</a></div>';
        $output .= '<div class="form-group">';
        $dropDown = new DropDown(
            rex_i18n::msg('cm_bootstrap_grid_large'),
            [BootstrapColWidth::lg],
            $this->sliceId,
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
        $dropDown->setDefaultValue($this->lgWidth);
        $output .= $dropDown->getHTML()
            . '</div>'
            . '<div class="form-group">';
        $dropDown = new DropDown(
            rex_i18n::msg('cm_bootstrap_grid_medium'),
            [BootstrapColWidth::md],
            $this->sliceId,
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
        $dropDown->setDefaultValue($this->mdWidth);
        $output .= $dropDown->getHTML()
            . '</div>'
            . '<div class="form-group">';
        $dropDown = new DropDown(
            rex_i18n::msg('cm_bootstrap_grid_small'),
            [BootstrapColWidth::sm],
            $this->sliceId,
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
        $dropDown->setDefaultValue($this->smWidth);
        $output .= $dropDown->getHTML()
            . '</div>'
            . '<div class="form-group">';

        $dropDown = new DropDown(
            rex_i18n::msg('cm_bootstrap_grid_extra_small'),
            [BootstrapColWidth::xs],
            $this->sliceId,
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
        $dropDown->setDefaultValue($this->xsWidth);
        $output .= $dropDown->getHTML()
            . '</div>';

        return $output;
    }
}
