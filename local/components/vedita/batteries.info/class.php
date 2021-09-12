<?php
use Bitrix\Main\Type;
use Bitrix\Main\Engine\Contract\Controllerable;
use lib\HighloadblockObject\HighloadblockObject;
use lib\HighloadblockBattery\HighloadblockBattery;
class ObjectInfo extends \CBitrixComponent implements Controllerable
{
    public function configureActions()
    {
        return
            [
                'getCordBattery' =>
                [
                    'prefilters' => [],
                    'postfilters' => []
                ]
            ];
    }
    public function getCordBatteryAction(int $battery_id) : array
    {
        $HLblockID = getHLBlockIDByName("Battaries");
        $params = 
                [
                    'select' => ['*'],
                    'filter' => ['ID' => $battery_id]
                ];
        $arBattery = HighloadblockBattery::getInfoBattery($HLblockID,$params);
        return [
            "arBat" => $arBattery
        ];
    }
    public function getNameObject() : string
    {
        $HLblockID = getHLBlockIDByName("ObjectBrowser");
        $object_id = $this->arParams["batteriesinfo"]["UF_OBJECT_ID"]["VALUE"];
        $params = 
                [
                    'select' => ['*'],                
                    'filter' => ['ID' => $object_id]     
                ];
        $objectBrowser = HighloadblockObject::getObject($HLblockID,$params);
        if(!empty($objectBrowser))
            return $objectBrowser["UF_OBJECT_NAME"];
        return "";

    }
    public function executeComponent()
    {
        $this->arResult['fields'] = $this->arParams["batteriesinfo"];
        $this->arResult['battery_ID'] = $this->arParams["row"]["ID"];
        $this->arResult['object_name'] = $this->getNameObject();
        $this->includeComponentTemplate();
    }
}
?>