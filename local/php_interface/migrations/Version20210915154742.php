<?php

namespace Sprint\Migration;


class Version20210915154742 extends Version
{
    protected $description = "hl block 15.09";

    protected $moduleVersion = "3.28.7";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $hlblockId = $helper->Hlblock()->saveHlblock(array (
  'NAME' => 'Support',
  'TABLE_NAME' => 'support',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Сообщения в техподдержку',
    ),
    'en' => 
    array (
      'NAME' => 'Messages to technical support',
    ),
  ),
));
    $helper->Hlblock()->saveGroupPermissions($hlblockId, array (
  5 => 'R',
  6 => 'R',
));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_THEME',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Theme',
    'ru' => 'Тема',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Theme',
    'ru' => 'Тема',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Theme',
    'ru' => 'Тема',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_MESSAGE',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Message',
    'ru' => 'Сообщение',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Message',
    'ru' => 'Сообщение',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Message',
    'ru' => 'Сообщение',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_FILE',
  'USER_TYPE_ID' => 'file',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'Y',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'LIST_WIDTH' => 200,
    'LIST_HEIGHT' => 200,
    'MAX_SHOW_SIZE' => 0,
    'MAX_ALLOWED_SIZE' => 0,
    'EXTENSIONS' => 
    array (
    ),
    'TARGET_BLANK' => 'Y',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'File',
    'ru' => 'Файл',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'File',
    'ru' => 'Файл',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'File',
    'ru' => 'Файл',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
    }

    public function down()
    {
        //your code ...
    }
}
