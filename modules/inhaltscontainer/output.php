<?php

use redaxo_bootstrap\{ModuleManager};

$sliceId = $this->getCurrentSlice()->getId();
$slice = rex_article_slice::getArticleSliceById($sliceId);
if (null !== $slice) {
	$rex_values_content = json_decode($slice->getValue(1), true);


	if (rex::isBackend()) {
		echo (new ModuleManager($sliceId))->getOutput('');
		echo "
			<script>
				var slice_count" . $sliceId . " = " . $rex_values_content["slice_count"] . ";
				$( document ).ready(function() {
					var slices = $('#slice' + " . $sliceId . ").parent().children();
	
					var index_of_slice = $('#slice' + " . $sliceId . ").index();
	
					var color = '#'+(Math.random()*0xFFFFFF<<0).toString(16);
					$('#slice' + " . $sliceId . ").children(0).children(0).css('border', '3px solid ' + color);
					for(let i = 1; i <= slice_count" . $sliceId . "; i++) {
						if($(slices[index_of_slice + 2*i]).children(0).prop('tagName') == 'FORM') {
							$(slices[index_of_slice + 2*i]).children(0).children(0).children(0).css('border', '3px solid ' + color);
							console.log('edit');
						} else {
							$(slices[index_of_slice + 2*i]).children(0).children(0).css('border', '3px solid ' + color);
							console.log('view');
						}
						$(slices[index_of_slice + 2*i]).children(0).css('padding-left', '20px');
					}
				});
			</script>
		";
	}
}
