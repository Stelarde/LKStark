<?php
use Bitrix\Main\Type;
use Bitrix\Main\Engine\Contract\Controllerable;
use lib\HighloadblockBattery\HighloadblockBattery;
use lib\HighloadblockObject\HighloadblockObject;
class ChangeBattery extends \CBitrixComponent implements Controllerable
{
    public function configureActions()
    {
        return
            [
                'saveSettings' =>
                [
                    'prefilters' => [],
                    'postfilters' => []
                ]
            ];
    }
    public function saveSettingsAction() : array
    {
        if(!empty($_FILES['userfile']['tmp_name']) && ($_FILES['userfile']['type'] == "image/jpeg" || $_FILES['userfile']['type'] == "image/jpg" || $_FILES['userfile']['type'] == "image/png"))
        {
            $arFiles = CFile::MakeFileArray($_FILES['userfile']['tmp_name']);
            $id = CFile::SaveFile($arFiles,"/main");
            $dataBattery['UF_BATTERY_IMG'] = $id;
        }
        if(!empty($_POST['object']))
        {
            $object = self::getObjectIDByName($_POST['object']);
            $dataBattery['UF_OBJECT_ID'] = $object['ID'];
        }
        else
        {
            $dataBattery['UF_OBJECT_ID'] = null;
        }
        if(!empty($_POST['equipment']))
        {
            $dataBattery['UF_TECH_TYPE'] = $_POST['equipment'];
        }
        else
        {
            $dataBattery['UF_TECH_TYPE'] = "";
        }
        if(!empty($_POST['client']))
        {
            $filter = 
            [
                "WORK_COMPANY" => $_POST['client']
            ];
            $rsUsers = CUser::GetList($filter);
            $arUser = $rsUsers->Fetch();
            $dataObject['UF_OBJECT_USER_ID'] = $arUser["ID"];
        }
        else
        {
            $dataBattery['UF_TECH_TYPE'] = "";
        }
        $dataBattery["UF_COMMENT_OBJECT"] = $_POST["commentObject"];
        $dataBattery["UF_COMMENT_TYPE_EQUIPMENT"] = $_POST["commentEquipment"];
        $batteryID = $_SESSION['battery_ID'];
        $HLblockID = getHLBlockIDByName("Battaries");
        $updateBattery = HighloadblockBattery::updateBattery($HLblockID,$batteryID,$dataBattery);
        return [
            "checkUpdateBattery" => $updateBattery
        ];
    }
    public function getBatterybyID() : array
    {
        $HLblockID = getHLBlockIDByName("Battaries");
        $params = 
                [
                    'select' => ['*'],
                    'filter' => ['ID' => $_SESSION['battery_ID']]
                ];
        $arBattery = HighloadblockBattery::getInfoBattery($HLblockID,$params);
        if(!empty($arBattery))
            return $arBattery;
        return [];
    }
    public function getObjectIDByName($object_name)
    {
        $HLblockID = getHLBlockIDByName("ObjectBrowser");
        $params = 
                [
                    'select' => ['ID'],                
                    'filter' => ['UF_OBJECT_NAME' => $object_name]     
                ];
        return HighloadblockObject::getObject($HLblockID,$params);
    }
    public function getObjectByID() : array
    {
        $HLblockID = getHLBlockIDByName("ObjectBrowser");
        $arBattery = self::getBatterybyID();
        $params = 
                [
                    'select' => ['*'],                
                    'filter' => ['ID' => $arBattery['UF_OBJECT_ID']]     
                ];
        return HighloadblockObject::getObject($HLblockID,$params);
    }
    public function getNameObject() : string
    {
        $objectBrowser = self::getObjectByID();
        if(!empty($objectBrowser))
            return $objectBrowser["UF_OBJECT_NAME"];
        return "";
    }
    public static function getCompanyClient() : string
    {
        $objectBrowser = self::getObjectByID();
        $client_id = $objectBrowser["UF_OBJECT_USER_ID"];
        $rsUser = CUser::GetByID($client_id);
        $arUser = $rsUser->Fetch();
        return $arUser["WORK_COMPANY"];
    }
    public function executeComponent()
    {
        $this->arResult['battery'] = $this->getBatterybyID();
        $this->arResult['objectName'] = $this->getNameObject();
        $this->arResult['clientCompany'] = $this->getCompanyClient();
        $this->includeComponentTemplate();
    }
}
?>