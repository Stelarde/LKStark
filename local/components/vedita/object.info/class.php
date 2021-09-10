<?php
use Bitrix\Main\Type;
use Bitrix\Main\Engine\Contract\Controllerable;
use lib\HighloadblockBattery\HighloadblockBattery;
class ObjectInfo extends \CBitrixComponent implements Controllerable
{
    public function configureActions()
    {
        return
            [
                'getCordBaterry' =>
                [
                    'prefilters' => [],
                    'postfilters' => []
                ]
            ];
    }
    public function getCordBaterryAction($object_id) : array
    {
        $HLblockID = getHLBlockIDByName("Battaries");
        $params = 
                [
                    'select' => ['*'],
                    'filter' => ['UF_OBJECT_ID' => $object_id]
                ];
        $arBattery = HighloadblockBattery::getInfoBattery($HLblockID,$params);
        return [
            "arBat" => $arBattery,
            'object_id' => $object_id
        ];
    }
    public function getAmountBattery()  : int
    {
        $object_id = $this->arParams["row"]["ID"];
        $params = 
                [
                    'select' => ['*'],                
                    'filter' => ['UF_OBJECT_ID' => $object_id],     
                ];
        $HLblockID = getHLBlockIDByName("Battaries");
        $amount = HighloadblockBattery::getBatteryAmount($HLblockID,$params);
        return $amount;
    }
    public function getAmountBatteryRent() : int
    {
        $object_id = $this->arParams["row"]["ID"];
        $params = 
                [
                    'select' => ['*'],                
                    'filter' => ['UF_OBJECT_ID' => $object_id , 'UF_BATTERY_FOR_RENT' => 1],     
                ];
        $HLblockID = getHLBlockIDByName("Battaries");
        $amount = HighloadblockBattery::getBatteryAmount($HLblockID,$params);
        return $amount;
    }
    public function getInfoByType() :array
    {
        $HLblockIDType = getHLBlockIDByName("TypesofEquipment");
        $object_id = $this->arParams["row"]["ID"];
        $HLblockIDBattery = getHLBlockIDByName("Battaries");
        $params = 
        [
                    'select' => ['*']               
        ];
        $typeEquiepment = HighloadblockBattery::getAllTypeEquiepment($HLblockIDType,$params);
        foreach($typeEquiepment as $type)
        {
            $params = 
                [
                    'select' => ['*'],                
                    'filter' => ['UF_OBJECT_ID' => $object_id, 'UF_TECH_TYPE' => $type['UF_TYPES_OF_EQUIPMENT']],     
                ];
            $buttery_by_type = HighloadblockBattery::getBatteryByTypeEquiepment($HLblockIDBattery,$params);
            $data[] = 
            [
                "TYPE" => $type['UF_TYPES_OF_EQUIPMENT'],
                "BATTERY_INFO" => $buttery_by_type
            ];
        }
        if(!empty($data))
            return $data;
        return [];
        
    }
    public function executeComponent()
    {
        $this->arResult['fields'] = $this->arParams["objectinfo"];
        $this->arResult['battery_amount'] = $this->getAmountBattery();
        $this->arResult['battery_amount_rent'] = $this->getAmountBatteryRent();
        $this->arResult['info_by_type'] = $this->getInfoByType();
        $this->arResult['object_ID'] = $this->arParams["row"]["ID"];
        $this->includeComponentTemplate();
    }
}
?>