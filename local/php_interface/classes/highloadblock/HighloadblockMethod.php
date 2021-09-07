<?php
namespace lib\HighloadblockMethod;
use Bitrix\Highloadblock\HighloadBlockTable as HLBT;
use Bitrix\Main\Loader;

Loader::includeModule('highloadblock');

class HighloadblockMethod {
    public $entity_data_class;
    function __construct($HLBlock_id)
    {
        $hlblock = HLBT::getById($HLBlock_id)->fetch();
        $entity = HLBT::compileEntity($hlblock);
        $this->entity_data_class = $entity->getDataClass();
    }
    public function add($params) : object
    {
        $entity_data_class = $this->entity_data_class;
        return $entity_data_class::add($params);
    }
    public function delete($HLBlock_id) : object
    {
        $entity_data_class = $this->entity_data_class;
        return $entity_data_class::delete($HLBlock_id);
    }
    public function getList($params) : object
    {
        $entity_data_class = $this->entity_data_class;
        return $entity_data_class::getList($params);
    }
    public function update($primary_id,$params)
    {
        $entity_data_class = $this->entity_data_class;
        return $entity_data_class::update($primary_id,$params);
    }

}