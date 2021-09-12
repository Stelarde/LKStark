<?php
namespace lib\HighloadblockBattery;
use lib\HighloadblockMethod\HighloadblockMethod;
class HighloadblockBattery
{
    public static function getBatteryAmount($HLBlockID,$params) : int
    {
        
        $hlblock = new HighloadblockMethod($HLBlockID);
        $rsBattery = $hlblock->getList($params);
        while($arr = $rsBattery->Fetch())
        {
            $arBattery[] = $arr;
        }
        return count($arBattery);
    }
    public static function getAllTypeEquiepment($HLBlockID,$params) : array
    {
        $hlblock = new HighloadblockMethod($HLBlockID);
        $rsTypeEquiepment = $hlblock->getList($params);
        while($arr = $rsTypeEquiepment->Fetch())
        {
            $arTypeEquiepmenty[] = $arr;
        }
        if(!empty($arTypeEquiepmenty))
            return $arTypeEquiepmenty;
        return [];
        
    }
    public static function getBatteryByTypeEquiepment($HLBlockID,$params) :array
    {
        $hlblock = new HighloadblockMethod($HLBlockID);
        $rsBatteryByTypeEquiepment = $hlblock->getList($params);
        while($arr = $rsBatteryByTypeEquiepment->Fetch())
        {
            $arBatteryByTypeEquiepment[] = $arr;
        }
        if(!empty($arBatteryByTypeEquiepment))
            return $arBatteryByTypeEquiepment;
        return [];
    }
    public static function getInfoBattery($HLBlockID,$params)
    {
        $hlblock = new HighloadblockMethod($HLBlockID);
        $rsBattery = $hlblock->getList($params);
        while($arr = $rsBattery->Fetch())
        {
            $arBattery[] = $arr;
        }
        if(!empty($arBattery))
            return $arBattery;
        return [];
    }

}