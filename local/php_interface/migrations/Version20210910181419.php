<?php

namespace Sprint\Migration;


class Version20210910181419 extends Version
{
    protected $description = "highload блок батареи";

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
    $helper->Hlblock()->saveGroupPermissions($hlblockId, array (
  5 => 'R',
));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_SPECOPS',
  'USER_TYPE_ID' => 'enumeration',
  'XML_ID' => 'UF_SPECOPS',
  'SORT' => '10',
  'MULTIPLE' => 'Y',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DISPLAY' => 'LIST',
    'LIST_HEIGHT' => 5,
    'CAPTION_NO_VALUE' => '',
    'SHOW_NO_VALUE' => 'Y',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Специсполнение',
    'ru' => 'Специсполнение',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Специсполнение',
    'ru' => 'Специсполнение',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Специсполнение',
    'ru' => 'Специсполнение',
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
  'ENUM_VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'снег',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'snow',
    ),
    1 => 
    array (
      'VALUE' => 'вода',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'water',
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
  'FIELD_NAME' => 'UF_ACTIVITY',
  'USER_TYPE_ID' => 'double',
  'XML_ID' => 'UF_ACTIVITY',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'PRECISION' => 2,
    'SIZE' => 20,
    'MIN_VALUE' => 0.0,
    'MAX_VALUE' => 100.0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Активность',
    'ru' => 'Активность',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Активность',
    'ru' => 'Активность',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Активность',
    'ru' => 'Активность',
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
  'FIELD_NAME' => 'UF_CYCLES',
  'USER_TYPE_ID' => 'integer',
  'XML_ID' => 'UF_CYCLES',
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
    'MIN_VALUE' => 0,
    'MAX_VALUE' => 0,
    'DEFAULT_VALUE' => 0,
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Полных циклов в сутки',
    'ru' => 'Полных циклов в сутки',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Полных циклов в сутки',
    'ru' => 'Полных циклов в сутки',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Полных циклов в сутки',
    'ru' => 'Полных циклов в сутки',
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
  'FIELD_NAME' => 'UF_RES_LEFT',
  'USER_TYPE_ID' => 'double',
  'XML_ID' => 'UF_RES_LEFT',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'PRECISION' => 2,
    'SIZE' => 20,
    'MIN_VALUE' => 0.0,
    'MAX_VALUE' => 100.0,
    'DEFAULT_VALUE' => 100.0,
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Остаточный ресурс',
    'ru' => 'Остаточный ресурс',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Остаточный ресурс',
    'ru' => 'Остаточный ресурс',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Остаточный ресурс',
    'ru' => 'Остаточный ресурс',
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
  'FIELD_NAME' => 'UF_OBJECT_ID',
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
    'en' => 'Object ID',
    'ru' => 'ID Объекта',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Object ID',
    'ru' => 'ID Объекта',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Object ID',
    'ru' => 'ID Объекта',
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
  'FIELD_NAME' => 'UF_BATTERY_FOR_RENT',
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
    'DEFAULT_VALUE' => 1,
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
    'en' => ' battery for rent',
    'ru' => 'Аренда батареи',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => ' battery for rent',
    'ru' => 'Аренда батареи',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => ' battery for rent',
    'ru' => 'Аренда батареи',
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
  'FIELD_NAME' => 'UF_TECH_TYPE',
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
    'en' => 'TECH_TYPE',
    'ru' => 'Вид техники',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'TECH_TYPE',
    'ru' => 'Вид техники',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'TECH_TYPE',
    'ru' => 'Вид техники',
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
  'FIELD_NAME' => 'UF_LONGITUDE',
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
    'en' => 'LONGITUDE',
    'ru' => 'Долгота',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'LONGITUDE',
    'ru' => 'Долгота',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'LONGITUDE',
    'ru' => 'Долгота',
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
  'FIELD_NAME' => 'UF_WIDTH',
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
    'en' => 'Width',
    'ru' => 'Ширина',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Width',
    'ru' => 'Ширина',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Width',
    'ru' => 'Ширина',
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
  'SORT' => '200',
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
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_EVENT',
  'USER_TYPE_ID' => 'integer',
  'XML_ID' => 'UF_EVENT',
  'SORT' => '300',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'MIN_VALUE' => 0,
    'MAX_VALUE' => 0,
    'DEFAULT_VALUE' => 0,
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'События',
    'ru' => 'События',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'События',
    'ru' => 'События',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'События',
    'ru' => 'События',
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
