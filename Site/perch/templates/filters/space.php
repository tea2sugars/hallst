<?php
class PerchTemplateFilter_space extends PerchTemplateFilter {
public function filterAfterProcessing($value, $valueIsMarkup = false) {
if ($this->Tag->type == 'text') {
return str_replace(' ', '_', $value);
}
}
}

PerchSystem::register_template_filter('space', 'PerchTemplateFilter_space');
?>