<?php
namespace vedita;
use lib\HighloadblockMethod\HighloadblockMethod;
class HighloadblockNotification
{
    public static function getNotifications(int $HLBlockID): array
    {
        global $USER;
        $arNotifications = [];
        if ($USER->IsAuthorized())
        {
            $userId = $USER->GetID();
            if (is_numeric($userId) AND $userId > 0)
            {
                $params = 
                [
                    'select' => ['*'],                
                    'filter' => ['UF_USER_ID' => $userId],     
                ];
                  
                $hlblock = new HighloadblockMethod($HLBlockID);
                $rsNotifications = $hlblock->getList($params);
                while ($arNotification = $rsNotifications->Fetch())
                {
                    $arNotifications[] = $arNotification;
                }
                return $arNotifications;
            }
        }
        return $arNotifications;
    }

    public static function updateCheckNotifications(int $HLBlockID): bool
    {
        global $USER;
        if ($USER->IsAuthorized())
        {
            $userId = $USER->GetID();
            if (is_numeric($userId) AND $userId > 0)
            {
                $arNotifications = self::getNotifications($HLBlockID);
                if (!empty($arNotifications))
                {
                    $hlblock = new HighloadblockMethod($HLBlockID);
                    foreach($arNotifications as $arNotification)
                    {
                        $hlblock->update($arNotification['ID'], ['UF_CHECK' => true]);
                    }
                    return true;
                }
            }
        }
        return false;
    }
}
