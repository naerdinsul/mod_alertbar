<?php
defined('_JEXEC') or die;

$doc = JFactory::getDocument();

// Add module stylesheet
JHtml::_('stylesheet', 'mod_alertbar/alertbar.css', array(), true);

// Add javascript handler for the close button
$js = <<<JS

// Javascript to handle close button on alertbar
window.addEventListener("DOMContentLoaded", function(){
	var close = document.getElementsByClassName("alert-closebtn");
	var i;

	for( i = 0; i < close.length; i++ ) {
		close[i].onclick = function(){
			var div = this.parentElement;
			div.style.opacity = "0";
			setTimeout(function(){ div.style.display = "none"; }, 600);
		}
	}
}, false);

JS;
$doc->addScriptDeclaration( $js );
?>
<div class="alertbar<?php echo $moduleclass_sfx ?> alert-<?php echo $alerttype ?>" >
	<span class="alert-closebtn">&times;</span>
	<?php echo $alertmsg ?>
</div>