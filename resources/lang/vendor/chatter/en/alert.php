<?php

return [
    'success' => [
        'title'  => 'Well done!',
        'reason' => [
            'submitted_to_post'       => ''.mb_strtolower(trans('chatter::intro.titles.discussion')).' Deletada.',
            'updated_post'            => ''.mb_strtolower(trans('chatter::intro.titles.discussion')).' Atualizada.',
            'destroy_post'            => 'Successfully deleted the response and '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'destroy_from_discussion' => 'Successfully deleted the response from the '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'created_discussion'      => 'Successfully created a new '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
        ],
    ],
    'info' => [
        'title' => 'Heads Up!',
    ],
    'warning' => [
        'title' => 'Wuh Oh!',
    ],
    'danger'  => [
        'title'  => 'Opa!',
        'reason' => [
            'errors'            => 'Corrija os seguintes erros:',
            'prevent_spam'      => 'In order to prevent spam, please allow at least :minutes in between submitting content.',
            'trouble'           => 'Sorry, there seems to have been a problem submitting your response.',
            'update_post'       => 'Nah ah ah... Could not update your response. Make sure you\'re not doing anything shady.',
            'destroy_post'      => 'Nah ah ah... Could not delete the response. Make sure you\'re not doing anything shady.',
            'create_discussion' => 'Whoops :( There seems to be a problem creating your '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
        	'title_required'    => 'Por favor, digite o assunto da pergunta',
        	'title_min'		    => 'The title has to have at least :min characters.',
        	'title_max'		    => 'The title has to have no more than :max characters.',
        	'content_required'  => 'Faltou preencher o campo mensagem! Faça sua pergunta.',
        	'content_min'  		=> 'The content has to have at least :min characters',
        	'category_required' => 'Por favor, selecione uma categoria',

       
       
        ],
    ],
];
