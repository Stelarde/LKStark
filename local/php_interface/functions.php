<?php
function getHLBlockIDByName (string $name) : int
{
    Bitrix\Main\Loader::includeModule("highloadblock");
    $hlblock   = Bitrix\Highloadblock\HighloadBlockTable::getList(
        [
            "filter" =>
                [
                    "name" => $name
                ]
        ]
    )->fetch();

    if (!$hlblock)
    {
        global $APPLICATION;
        $APPLICATION->ThrowException('Не найден highload block ' . $name);
        return 0;
    }
    else
        return $hlblock['ID'];
}

function isDealer () : bool
{
    global $USER;
    $arGroups = $USER->GetUserGroupArray();
    return in_array(DEALER_GROUP, $arGroups);
}