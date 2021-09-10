<?php

namespace Sprint\Migration;


class Version20210909154857 extends Version
{
    protected $description = "highload-блок";

    protected $moduleVersion = "3.28.7";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $hlblockId = $helper->Hlblock()->saveHlblock(array (
  'NAME' => 'Notifications',
  'TABLE_NAME' => 'notifications',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Уведомления',
    ),
    'en' => 
    array (
      'NAME' => 'Notifications',
    ),
  ),
));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_BATTERY_NUMBER',
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
    'en' => 'Battery number',
    'ru' => 'Номер АКБ',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Battery number',
    'ru' => 'Номер АКБ',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Battery number',
    'ru' => 'Номер АКБ',
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
    'en' => 'Notification text',
    'ru' => 'Текст уведомления',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Notification text',
    'ru' => 'Текст уведомления',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Notification text',
    'ru' => 'Текст уведомления',
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
  'FIELD_NAME' => 'UF_DATE_TIME',
  'USER_TYPE_ID' => 'datetime',
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
    'DEFAULT_VALUE' => 
    array (
      'TYPE' => 'NONE',
      'VALUE' => '',
    ),
    'USE_SECOND' => 'Y',
    'USE_TIMEZONE' => 'N',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Time and date',
    'ru' => 'Время и дата',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Time and date',
    'ru' => 'Время и дата',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Time and date',
    'ru' => 'Время и дата',
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
  'FIELD_NAME' => 'UF_USER_ID',
  'USER_TYPE_ID' => 'double',
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
    'PRECISION' => 4,
    'SIZE' => 20,
    'MIN_VALUE' => 0.0,
    'MAX_VALUE' => 0.0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'User Id',
    'ru' => 'Id пользователя',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'User Id',
    'ru' => 'Id пользователя',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'User Id',
    'ru' => 'Id пользователя',
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
  'FIELD_NAME' => 'UF_CHECK',
  'USER_TYPE_ID' => 'boolean',
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
    'DEFAULT_VALUE' => 0,
    'DISPLAY' => 'CHECKBOX',
    'LABEL' => 
    array (
      0 => '',
      1 => '',
    ),
    'LABEL_CHECKBOX' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Notification viewed',
    'ru' => 'Уведомление просмотрено',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Notification viewed',
    'ru' => 'Уведомление просмотрено',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Notification viewed',
    'ru' => 'Уведомление просмотрено',
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
