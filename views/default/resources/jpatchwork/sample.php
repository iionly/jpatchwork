<?php

$content = elgg_view('jpatchwork/sample', [], false, false, 'xml');

$body = elgg_view('page/layouts/one_sidebar', [
	'content' => $content,
	'title' => elgg_echo('jpatchwork:sample_title'),
]);

// Draw it
echo elgg_view_page(elgg_echo('jpatchwork:title'), $body);
