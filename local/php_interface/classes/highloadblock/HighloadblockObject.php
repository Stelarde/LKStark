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
        if (empty($params["UF_OBJECT_SRC"]) or empty($params["UF_OBJECT_NAME"]) or empty($params["UF_OBJECT_CONTACT_PERSON"]) or empty($params["UF_OBJECT_PERSON_PHONE"]) or empty($params["UF_OBJECT_PERSON_ADRESS"]))
            return false;

        if (!is_numeric($params["UF_OBJECT_PERSON_PHONE"]) or strlen($params["UF_OBJECT_PERSON_PHONE"]) < 11 or strlen($params["UF_OBJECT_PERSON_PHONE"]) > 18)
            return false;

        return true;
    }
}