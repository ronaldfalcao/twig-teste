<?php 

    require_once __DIR__.'/bootstrap.php';


    $livros = array(

        array(
            'codigo'  => 1,
            'nome'    => 'Memórias Póstumas de Brás Cubas',
            'autor'   => 'Machado de Assis'
        ),
        array(
            'codigo'  => 2,
            'nome'    => 'Brás Bexiga e Barra Funda',
            'autor'   => 'Antônio de Alcântara Machado'
        ),
        array(
            'codigo'  => 3,
            'nome'    => 'Macunaíma',
            'autor'   => 'Mário de Andrade'
        ),
        array(
            'codigo'  => 4,
            'nome'    => 'Relato de um Certo Oriente',
            'autor'   => 'Milton Hatoum'
        ),
        array(
            'codigo'  => 5,
            'nome'    => 'A Rosa do Povo',
            'autor'   => 'Carlos Drummond de Andrade'
        ),
        array(
            'codigo'  => 6,
            'nome'    => 'Grande Sertão: Veredas',
            'autor'   => 'Guimarães Rosa'
        ),
        array(
            'codigo'  => 7,
            'nome'    => 'Os Sertões',
            'autor'   => 'Euclides da Cunhas'
        ),
        array(
            'codigo'  => 8,
            'nome'    => 'Vidas Secas',
            'autor'   => 'Graciliano Ramos'
        ),
        array(
            'codigo'  => 9,
            'nome'    => 'A Hora das Estrela',
            'autor'   => 'Clarice Lispector'
        ),
        array(
            'codigo'  => 10,
            'nome'    => 'Memórias de um Sargento de Milícias',
            'autor'   => 'Manuel Antînio de Almeida'
        ),
        
    );

    echo $twig->render('livro.html', array( 'livros' => $livros ) );