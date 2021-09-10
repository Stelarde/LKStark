<?php
namespace lib\HighloadblockObject;
use lib\HighloadblockMethod\HighloadblockMethod;
class HighloadblockObject 
{
    public static function addObject (int $HLBlockID,array $params) : bool
    {
       if(self::checkValidate($params))
       {
            $hlblock = new HighloadblockMethod($HLBlockID);
            $res = $hlblock->add($params);
            if($res->isSuccess())
            {
                return true;
            }
            else
            {
                return false;
            }
       }
       else
       {
           return false;
       }
    }
    public static function checkValidate(array $params) : bool
    {
        if (empty($params["UF_OBJECT_SRC"]) or empty($params["UF_OBJECT_NAME"]) or empty($params["UF_OBJECT_CONTACT_PERSON"]) or empty($params["UF_OBJECT_PERSON_PHONE"]) or empty($params["UF_OBJECT_PERSON_ADRESS"]) or empty($params["UF_OBJECT_USER_ID"]))
            return false;

        if (!is_numeric($params["UF_OBJECT_PERSON_PHONE"]) or strlen($params["UF_OBJECT_PERSON_PHONE"]) < 11 or strlen($params["UF_OBJECT_PERSON_PHONE"]) > 18)
            return false;
        if (!is_numeric($params["UF_OBJECT_USER_ID"]) or $params["UF_OBJECT_USER_ID"] <= 0)
            return false;
        return true;
    }
    public static function addSupport(string $theme, string $message, array $arFile, int $HLBlockID): array
    {
        if (!empty($theme) AND !empty($message) AND is_numeric($HLBlockID) AND $HLBlockID > 0)
        {
            $params = [
                "UF_THEME" => $theme,
                "UF_MESSAGE" => $message,
                "UF_FILE" => $arFile
            ];
            $hlblock = new HighloadblockMethod($HLBlockID);
            $res = $hlblock->add($params);
            if($res->isSuccess())
            {
                return ['result' => true];
            }
            else
            {
                return ['result' => false];
            }
        }

        return ['result' => false];
    }
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
    
}