<?php
// string BuildMarkup(string $tag[, mixed $attributes, mixed $content, boolean $close])
function BuildMarkup($tag, $attributes = false, $content = false, $close = false) {
	$open = $tag;
	if(is_array($attributes) && !empty($attributes)) foreach($attributes as $attribute => $value) $open .= ' ' . $attribute . '="' . $value . '"';
	return '<' . $open . '>' . (($content !== false) ? $content: '') . (($close === true) ? '</' . $tag . '>': '');
}

// string BuildCSS(array $properties)
function BuildCSS($properties) {
	$css = '';
	if(is_array($properties) && !empty($properties)) foreach($properties as $property => $value) $css .= $property . ':' . $value . ';';
	return $css;
}
?>
