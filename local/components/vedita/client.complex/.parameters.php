<?php
if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

// Параметры
$arComponentParameters = [
    'GROUPS'     => [
        'HLLIST' => [
            'NAME' => Loc::getMessage('HLLIST_COMPONENT_NAME'),
        ],
        'HLVIEW' => [
            'NAME' => Loc::getMessage('HLVIEW_COMPONENT_NAME'),
        ],
    ],
    'PARAMETERS' => [
        // ЧПУ
        'SEF_MODE'          => [
            'list' => [
                'NAME'      => Loc::getMessage('HLCOMPLEX_COMPONENT_LIST_PAGE'),
                'DEFAULT'   => '',
                'VARIABLES' => ['BLOCK_ID'],
            ],
            'view' => [
                'NAME'      => Loc::getMessage('HLCOMPLEX_COMPONENT_VIEW_PAGE'),
                'DEFAULT'   => '#BLOCK_ID#/#ID#/',
                'VARIABLES' => ['BLOCK_ID', 'ID'],
            ],
        ],
    ],
];
