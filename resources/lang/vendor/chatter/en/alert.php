<?php

return [
    'success' => [
        'title' => 'Well done!',
        'reason' => [
            'submitted_to_post' => '' . mb_strtolower(trans('chatter::intro.titles.discussion')) . ' Postada.',
            'updated_post' => '' . mb_strtolower(trans('chatter::intro.titles.discussion')) . ' Atualizada.',
            'destroy_post' => '' . mb_strtolower(trans('chatter::intro.titles.discussion')) . ' apagada!',
            'destroy_from_discussion' => 'Resposta da ' . mb_strtolower(trans('chatter::intro.titles.discussion')) . ' apagada!.',
            'created_discussion' => '' . mb_strtolower(trans('chatter::intro.titles.discussion')) . ' criada com sucesso!',
        ],
    ],
    'info' => [
        'title' => 'Heads Up!',
    ],
    'warning' => [
        'title' => 'Wuh Oh!',
    ],
    'danger' => [
        'title' => 'Opa!',
        'reason' => [
            'errors' => 'Corrija os seguintes erros:',
            'prevent_spam' => 'Para evitar spam, aguarde pelo menos :minutes para o envio de conteúdo.',
            'trouble' => 'Sorry, there seems to have been a problem submitting your response.',
            'update_post' => 'Nah ah ah... Could not update your response. Make sure you\'re not doing anything shady.',
            'destroy_post' => 'Nah ah ah... Could not delete the response. Make sure you\'re not doing anything shady.',
            'create_discussion' => 'Whoops :( There seems to be a problem creating your ' . mb_strtolower(trans('chatter::intro.titles.discussion')) . '.',
            'title_required' => 'Por favor, digite o assunto da pergunta',
            'title_min' => 'The title has to have at least :min characters.',
            'title_max' => 'The title has to have no more than :max characters.',
            'content_required' => 'Faltou preencher o campo mensagem! Faça sua pergunta.',
            'content_min' => 'The content has to have at least :min characters',
            'category_required' => 'Por favor, selecione uma categoria',
        ],
    ],
];
