<?php
namespace vedita;
use lib\HighloadblockMethod\HighloadblockMethod;
class HighloadblockSupport
{
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
}