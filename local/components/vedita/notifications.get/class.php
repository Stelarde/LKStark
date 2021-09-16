<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Engine\Contract\Controllerable;
use vedita\HighloadblockNotification;
use lib\HighloadblockBattery\HighloadblockBattery;

class CDemoSqr extends CBitrixComponent implements Controllerable
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
            'ajaxGetEvent' =>
            [
                'prefilters' => [],
                'postfilters' => []
            ]
        ];
    }

    public function executeComponent()
    {
        $this->IncludeComponentTemplate();
    }

    public function ajaxAddEventAction()
    {
        $arNotifications = HighloadblockNotification::getNotifications(HL_BLOCK_ID_NOTIFICATIONS);
        if (!empty($arNotifications))
        {
            $html = '<ul>';
            $quantity = 0;
            foreach ($arNotifications as $arNotification)
            {
                if ($arNotification['UF_CHECK'] == false)
                    $quantity += 1;
            }
            return 
            [
                'quantity' => $quantity,
                'result' => true
            ];
        }
        return ['result' => false];
    }

    public function ajaxGetEventAction()
    {
        $arNotifications = HighloadblockNotification::getNotifications(HL_BLOCK_ID_NOTIFICATIONS);
        if (!empty($arNotifications))
        {
            $html = '<ul>';
            foreach ($arNotifications as $arNotification)
            {
                if ($arNotification['UF_CHECK'] == false)
                    $html .= '<li class="new-notification"><div class="notifications-desc">';
                else 
                    $html .= '<li><div class="notifications-desc">';

                $objDateTime = new DateTime($arNotification['UF_DATE_TIME']);

                $params = 
                [
                    'select' => ['ID'],
                    'filter' => ['UF_SERIAL_NUM' => $arNotification['UF_BATTERY_NUMBER']],
                    'limit' => 1
                ];

                $arBattery = HighloadblockBattery::getInfoBattery(getHLBlockIDByName("Battaries"), $params);

                if (!empty($arBattery))
                {
                    $html .= '<a href="/batteries/';
                    $html .= $arBattery[0]['ID'] . '/';
                }
                else 
                {
                    $html .= '<a href="#';
                }   

                $html .= '">АКБ №';
                $html .= $arNotification['UF_BATTERY_NUMBER'];
                $html .= '</a><p>';
                $html .= $arNotification['UF_MESSAGE'];
                $html .= '</p></div><div class="notifications-date"><p>';
                $html .= $objDateTime->format('d.m.Y');
                $html .= '</p><p>';
                $html .= $objDateTime->format('H:i');
                $html .= '</p></div></li>';
            }
            $html .= '</ul>';

            // $bNotification = HighloadblockNotification::updateCheckNotifications(getHLBlockIDByName('Notifications'));
            
            return 
            [
                'html' => $html,
                'result' => true
            ];
        }
        return ['result' => false];
    }
}
