<?php

return [
    'words' => [
        'cancel'  => 'Cancelar',
        'delete'  => 'Deletar',
        'edit'    => 'Editar',
        'yes'     => 'Sim',
        'no'      => 'Não',
        'minutes' => '1 minute| :count minutes',
    ],

    'discussion' => [
        'new'          => 'Nova '.trans('chatter::intro.titles.discussion'),
        'all'          => 'Ver Tudo ',
//        .trans('chatter::intro.titles.discussions'),
        'create'       => 'Criar '.trans('chatter::intro.titles.discussion'),
        'posted_by'    => 'Postado por',
        'head_details' => 'Postado na Categoria',

    ],
    'response' => [
        'confirm'     => 'Tem certeza que deseja deletar esta resposta?',
        'yes_confirm' => 'Sim, deletar',
        'no_confirm'  => 'Cancelar',
        'submit'      => 'Enviar Resposta',
        'update'      => 'Atualizar Resposta',
    ],

    'editor' => [
        'title'               => 'Título da '.trans('chatter::intro.titles.discussion'),
        'select'              => 'Selecione uma categoria*',
        'tinymce_placeholder' => 'Digite sua '.trans('chatter::intro.titles.discussion').' aqui...',
        'select_color_text'   => 'Selecione a Cor para esta '.trans('chatter::intro.titles.discussion').' (opcional)',
    ],

    'email' => [
        'notify' => 'Notify me when someone replies',
    ],

    'auth' => 'Please <a href="/:home/login">login</a>
                or <a href="/:home/register">register</a>
                to leave a response.',

];
