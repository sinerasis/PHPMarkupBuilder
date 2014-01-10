<?php
function BuildMarkup($tag, $attributes = false, $content = false, $end_tag = true) {
	// opening tag
	$html = '<' . $tag;
	// attributes
	if(!empty($attributes) && is_array($attributes)) {
		foreach($attributes as $attribute=>$value) {
			$html .= ' ' . $attribute . '="' . $value . '"';
		}
	}
	// content
	if($content !== false) {
		$html .= '>' . $content;
	} else {
		$html .= '>';
	}
	// closure
	if($end_tag === true) {
		$html .= '</' . $tag . '>';
	}
	return $html;
}
?>
