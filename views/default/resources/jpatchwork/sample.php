<?php

$content = elgg_view('jpatchwork/sample', [], 'xml');

$body = elgg_view('page/layouts/default', [
	'content' => $content,
	'title' => elgg_echo('jpatchwork:sample_title'),
]);

// Draw it
echo elgg_view_page(elgg_echo('jpatchwork:title'), $body);
