<?php

namespace Sprint\Migration;


class Version20210906110240 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.28.7";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $hlblockId = $helper->Hlblock()->saveHlblock(array (
  'NAME' => 'Battaries',
  'TABLE_NAME' => 'battaries',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Батареи',
    ),
    'en' => 
    array (
      'NAME' => 'Battaries',
    ),
  ),
));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_SERIAL_NUM',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'UF_SERIAL_NUM',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'S',
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
    'en' => 'Номер батареи',
    'ru' => 'Номер батареи',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Номер батареи',
    'ru' => 'Номер батареи',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Номер батареи',
    'ru' => 'Номер батареи',
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
  'FIELD_NAME' => 'UF_NAME',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'UF_NAME',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'S',
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
    'en' => 'Название батареи',
    'ru' => 'Название батареи',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Название батареи',
    'ru' => 'Название батареи',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Название батареи',
    'ru' => 'Название батареи',
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
  'FIELD_NAME' => 'UF_DATE_UNTIL',
  'USER_TYPE_ID' => 'date',
  'XML_ID' => 'UF_DATE_UNTIL',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'I',
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
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Аренда',
    'ru' => 'Аренда',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Аренда',
    'ru' => 'Аренда',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Аренда',
    'ru' => 'Аренда',
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
