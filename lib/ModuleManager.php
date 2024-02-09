<?php
class ModuleManager
{
    private $sliceId;

    function __construct($sliceId)
    {
        $this->sliceId = $sliceId;
    }


    public function getOutput($output)
    {
        $rex_values_settings = json_decode(rex_article_slice::getArticleSliceById($this->sliceId)->getValue(1), true);

        $outputBuilder = new CM_OutputBuilder(
            $rex_values_settings[BootstrapColWidth::lg],
            $rex_values_settings[BootstrapColWidth::md],
            $rex_values_settings[BootstrapColWidth::sm],
            $rex_values_settings[BootstrapColWidth::xs],
            $this->sliceId
        );

        $outputBuilder->withFrontendOutput($output);

        return $outputBuilder->build();
    }


    public function getInput($input)
    {
        return '<ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#general-' . $this->sliceId . '">Einstellungen</a></li>
        <li><a data-toggle="tab" href="#nested-' . $this->sliceId . '">Breite</a></li>
        </ul>
        <div class="tab-content">
            <div id="general-' . $this->sliceId . '" class="tab-pane fade in active">
                <div class="form-group">
                    ' . $input . '
                </div>
            </div>
            <div id="nested-' . $this->sliceId . '" class="tab-pane fade">
                <div class="form-group">
                    ' . self::bootstrap(rex_article_slice::getArticleSliceById($this->sliceId)) . '
                </div>
            </div>
        </div>';
    }

    private function bootstrap()
    {
        $bootstrapFormBuilder = new CM_BootstrapFormBuilder(rex_article_slice::getArticleSliceById($this->sliceId));
        $bootstrapFormBuilder->withLgWidth('6');
        $bootstrapFormBuilder->withMdWidth('6');
        $bootstrapFormBuilder->withSmWidth('6');
        $bootstrapFormBuilder->withXsWidth('12');
        return $bootstrapFormBuilder->build();
    }
}
