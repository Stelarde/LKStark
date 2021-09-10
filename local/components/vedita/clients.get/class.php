<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Engine\Contract\Controllerable;
use lib\HighloadblockObject\HighloadblockObject;

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
