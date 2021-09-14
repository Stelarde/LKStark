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
        $i=0;
        $hlblock = new HighloadblockMethod($HLBlockID);
        $rsBattery = $hlblock->getList($params);
        while($arr = $rsBattery->Fetch())
        {
            $i++;
        }
        $rsBattery = $hlblock->getList($params);
        if($i > 1)
        {
            while($arr = $rsBattery->Fetch())
            {
                $arBattery[] = $arr;
            }
        }
        else
        {
            while($arr = $rsBattery->Fetch())
            {
                $arBattery = $arr;
            }
        }
        if(!empty($arBattery))
            return $arBattery;
        return [];
    }
    public static function updateBattery($HLblockID,$hlblock_id_battery,$params) : bool
    {
        $data = 
        [
            'hlblock_id' => (int)$HLblockID,
            'hlblock_battery' => (int)$hlblock_id_battery,
            'params' => $params
        ];
        $hlblock = new HighloadblockMethod($data['hlblock_id']);
        $res = $hlblock->update($data['hlblock_battery'],$params);
        if($res->isSuccess())
            return true;
        return false;
    }

}