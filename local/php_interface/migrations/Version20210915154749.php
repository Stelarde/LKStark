<?php

namespace Sprint\Migration;


class Version20210915154749 extends Version
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
  'NAME' => 'TypesofEquipment',
  'TABLE_NAME' => 'b_types_of_equipment',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Виды техники',
    ),
    'en' => 
    array (
      'NAME' => 'Types of equipment',
    ),
  ),
));
    $helper->Hlblock()->saveGroupPermissions($hlblockId, array (
  5 => 'R',
  6 => 'R',
  7 => 'R',
));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_TYPES_OF_EQUIPMENT',
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
    'en' => 'Types of equipment',
    'ru' => 'Тип техники',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Types of equipment',
    'ru' => 'Тип техники',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Types of equipment',
    'ru' => 'Тип техники',
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
