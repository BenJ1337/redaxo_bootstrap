<?php

namespace redaxo_bootstrap;

use rex;

class CM_OutputBuilder
{

    private $frontendOutput = '';
    private $lgWidth = '';
    private $mdWidth = '';
    private $smWidth = '';
    private $xsWidth = '';
    private $sliceId;

    function __construct($lgWidth, $mdWidth, $smWidth, $xsWidth, $sliceId)
    {
        $this->lgWidth = $lgWidth;
        $this->mdWidth = $mdWidth;
        $this->smWidth = $smWidth;
        $this->xsWidth = $xsWidth;
        $this->sliceId = $sliceId;
    }

    public function withFrontendOutput($output)
    {
        $this->frontendOutput = $output;
    }

    public function build()
    {
        $output = '';

        if (rex::isBackend()) {
            $output .= '<div class="panel panel-default">'
                . '<div class="panel-heading" data-toggle="collapse" data-target="#boostrap-settings-' . $this->sliceId . '">'
                . rex_i18n::msg('cm_slice_settings')
                . '</div><div id="boostrap-settings-' . $this->sliceId . '" class="collapse" style="padding: 0 15px;">'
                . '<p style="padding-top: 15px;">' . rex_i18n::msg('cm_bootstrap_grid_large') . ' <span class="badge">' . $this->lgWidth . '</span></p>'
                . '<p>' . rex_i18n::msg('cm_bootstrap_grid_medium') . ' <span class="badge">' . $this->mdWidth . '</span></p>'
                . '<p>' . rex_i18n::msg('cm_bootstrap_grid_small') . ' <span class="badge">' . $this->smWidth . '</span></p>'
                . '<p>' . rex_i18n::msg('cm_bootstrap_grid_extra_small') . ' <span class="badge">' . $this->xsWidth . '</span></p>'
                . '</div></div>';

            if (!empty($this->frontendOutput)) {
                $output .=
                    '<div class="panel panel-default"><div class="panel-heading">'
                    . rex_i18n::msg('cm_slice_content')
                    . '</div><div class="panel-body frontend">';
            }
        }

        $output .= $this->frontendOutput;

        if (rex::isBackend()) {
            if (!empty($this->frontendOutput)) {
                $output .= '</div></div>';
            }
        }

        return $output;
    }
}
