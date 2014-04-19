<?php

include "../src/Antonraharja/Tpl.php";

$all_fruits = 'Apple, Banana and Orange';

$tpl = new Antonraharja\Tpl;

$tpl->vars = array(
	'title' => 'This is test 3',
	'content' => 'This is sample content',
);

$tpl->injects = array('all_fruits');

$content = '
	<div>
		<h1>TEST 3</h1>
		<p>Title: {title}</p>
		<p>Content: {content}</p>
		<p>Data: {{ echo "Fruits: ".$all_fruits; }}</p>
	</div>
';

$tpl->setContent($content);

$tpl->compile();

echo $tpl->getCompiled();
