<?php
	
	require_once __DIR__.'/bootstrap.php';

	
	$title = 'Twig PHP - Template Engine';
	$header = 'Cabeçalho';
	$content = 'Aplicando o Twig PHP';
	$footer = 'Rodapé';

	$post = array ('title' => $title,
				   'header' =>$header,
				   'content' => $content, 
				   'footer' => $footer,
				   );

	echo $twig->render('index.html', $post);