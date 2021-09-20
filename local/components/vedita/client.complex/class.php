<?php
if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use lib\HighloadblockObject\HighloadblockObject;
use lib\HighloadblockBattery\HighloadblockBattery;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

class ClientComplexComponent extends CBitrixComponent implements Controllerable
{


    /** @var array Массив для задания псевдонимов по умолчанию переменных в режиме ЧПУ */
    public $arDefaultVariableAliases404 = [];

    /** @var array Массив для задания псевдонимов по умолчанию переменных в режиме не ЧПУ */
    public $arDefaultVariableAliases = [];

    /** @var array Массив для задания путей по умолчанию для работы в ЧПУ режиме */
    public $arDefaultUrlTemplates404 = [
        'list' => '',
        'view' => '#BLOCK_ID#/#ID#/',
    ];

    /** @var array Массив имен переменных, которые компонент может получать из запроса */
    public $arComponentVariables = [
        'ID',
    ];

    /** @var array Массив шаблонов путей комплексного компонента для режима ЧПУ */
    public $arUrlTemplates = [];

    /** @var string Код шаблона, которому соответствует запрошенный адрес */
    public $componentPage = '';

    /** @var array Массив псевдонимов переменных */
    public $arVariables = [];

    public function configureActions()
    {
        return 
        [
            'ajaxDeleteEvent' => 
            [
                'prefilters' => [],
                'postfilters' => []
            ]
        ];
    }

    /**
     * @return mixed|void
     * @throws \Bitrix\Main\LoaderException
     */
    public function executeComponent()
    {
        global $APPLICATION;

        $arComponentVariables = $this->arComponentVariables;
        $arVariables = $this->arVariables;

        if ($this->arParams['SEF_MODE'] == 'Y') {
            $arDefaultUrlTemplates404 = $this->arDefaultUrlTemplates404;
            $arDefaultVariableAliases404 = $this->arDefaultVariableAliases404;

            $arUrlTemplates = CComponentEngine::MakeComponentUrlTemplates(
                $arDefaultUrlTemplates404,
                $this->arParams['SEF_URL_TEMPLATES']
            );

            $arVariableAliases = CComponentEngine::MakeComponentVariableAliases(
                $arDefaultVariableAliases404,
                $this->arParams['VARIABLE_ALIASES']
            );

            $componentPage = CComponentEngine::ParseComponentPath(
                $this->arParams['SEF_FOLDER'],
                $arUrlTemplates,
                $arVariables
            );

            if ( ! $componentPage) {
                $componentPage = 'list';
            }

            CComponentEngine::InitComponentVariables(
                $componentPage,
                $arComponentVariables,
                $arVariableAliases,
                $arVariables
            );

            $this->arResult['FOLDER'] = $this->arParams['SEF_FOLDER'];
            $this->arResult['URL_TEMPLATES'] = $arUrlTemplates;
        } else {
            $arDefaultVariableAliases = $this->arDefaultVariableAliases;

            $arVariableAliases = CComponentEngine::MakeComponentVariableAliases(
                $arDefaultVariableAliases,
                $this->arParams['VARIABLE_ALIASES']
            );

            CComponentEngine::InitComponentVariables(
                false,
                $arComponentVariables,
                $arVariableAliases,
                $arVariables
            );

            if (isset($arVariables['ID']) && intval($arVariables['ID']) > 0) {
                $componentPage = 'view';
            } else {
                $componentPage = 'list';
            }

            $sGetCurPage = htmlspecialchars($APPLICATION->GetCurPage());

            $this->arResult['FOLDER'] = '';
            $this->arResult['URL_TEMPLATES'] = [
                'list' => $sGetCurPage,
                'view' => $sGetCurPage . '?' . $arVariableAliases['ID'] . '=#ID#',
            ];
        }

        $this->arResult['VARIABLES'] = $arVariables;
        $this->arResult['ALIASES'] = $arVariableAliases;
        $this->arResult['CURRENT_TEMPLATE'] = $componentPage;

        $this->getClientsInfo();

        $this->includeComponentTemplate($componentPage);
    }

    public function getClientsInfo(): bool
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
                    'SELECT' => ['UF_DILER_ID', 'UF_ADDRESS']
                ];
                $rsUsers = CUser::GetList(($by = "NAME"), ($order = "desc"), $arFilter, $arParams);

                while ($arUser = $rsUsers->Fetch())
                {
                    $this->arResult['users'][$arUser['ID']] = $arUser;
                    $this->arResult['users'][$arUser['ID']]['logoSrc'] = CFile::GetPath($arUser['WORK_LOGO']);                    

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

                    $this->arResult['users'][$arUser['ID']]['countEvents'] = $countEvents;
                    $this->arResult['users'][$arUser['ID']]['countRentBattary'] = $countRentBattary;
                    $this->arResult['users'][$arUser['ID']]['countBattary'] = $countBattary;
                }
                return true;
            }
        }
        return false;
    }

    public function ajaxDeleteEventAction(string $arClientId)
    {
        global $APPLICATION;

        $arClientId = explode(',', $arClientId);
        foreach ($arClientId as $clientId)
        {
            if ($clientId > 0 && is_numeric($clientId))
            {
                if (CUser::Delete((int) $clientId))
                {
                    return
                    [
                        'result' => true,
                    ];
                }
            }
        }

        return
        [
            'result' => false
        ];
    }
}
