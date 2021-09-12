<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use lib\HighloadblockObject\HighloadblockObject;
use lib\HighloadblockBattery\HighloadblockBattery;
use Bitrix\Main\Engine\Contract\Controllerable;

class Clients extends CBitrixComponent implements Controllerable
{
    public function configureActions()
    {
        return 
        [
            'ajaxAddEvent' => 
            [
                'prefilters' => [],
                'postfilters' => []
            ],
            'ajaxUpdateEvent' =>
            [
                'prefilters' => [],
                'postfilters' => []
            ]
        ];
    }

    public function executeComponent()
    {
        $this->getClients();
        $this->IncludeComponentTemplate();
    }

    public function getClients()
    {
        global $USER;
        if ($USER->IsAuthorized())
        {
            $userId = $USER->getId();
            if ($userId > 0 AND is_numeric($userId))
            {
                $arFilter = 
                [
                    'GROUPS_ID' => ['3'],
                    'UF_DILER_ID' => $userId
                ];
                $arParams = 
                [
                    'SELECT' => ['UF_DILER_ID']
                ];
                $rsUsers = CUser::GetList(($by = "NAME"), ($order = "desc"), $arFilter, $arParams);
                $nUser = 0;
                while ($arUser = $rsUsers->Fetch())
                {
                    $this->arResult['users'][$nUser] = $arUser;
                    $this->arResult['users'][$nUser]['logoSrc'] = CFile::GetPath($arUser['WORK_LOGO']);                    

                    $countEvents = 0;
                    $countRentBattary = 0;
                    $countBattary = 0;
                    $params = 
                    [
                        'select' => ['ID', 'UF_OBJECT_EVENTS'],                
                        'filter' => ['UF_OBJECT_USER_ID' => $arUser['ID']],     
                    ];
                    $rsObjcet = HighloadblockObject::getObjects(getHLBlockIDByName("ObjectBrowser"), $params);
                    while ($arObject = $rsObjcet->Fetch())
                    {
                        $params = 
                        [
                            'select' => ['UF_BATTERY_FOR_RENT'],                
                            'filter' => ['UF_OBJECT_ID' => $arObject['ID']], 
                        ];
                        $arBatterys = HighloadblockBattery::getInfoBattery(getHLBlockIDByName("Battaries"), $params);
                        foreach($arBatterys as $arBattery)
                        {
                            $countBattary++;
                            if ($arBattery['UF_BATTERY_FOR_RENT'])
                            {
                                $countRentBattary++;
                            }
                        }
                        $countEvents += $arObject['UF_OBJECT_EVENTS'];
                    }
                    $this->arResult['users'][$nUser]['countEvents'] = $countEvents;
                    $this->arResult['users'][$nUser]['countRentBattary'] = $countRentBattary;
                    $this->arResult['users'][$nUser]['countBattary'] = $countBattary;

                    $nUser++;
                }
                return true;
            }
        }
        return false;
    }

    public function ajaxAddEventAction()
    {
        
    }

    public function ajaxUpdateEventAction()
    {

    }
}
