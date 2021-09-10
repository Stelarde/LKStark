<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Engine\Contract\Controllerable;
use vedita\HighloadblockNotification;

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
            'ajaxUpdateEvent' =>
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
                {
                    $quantity += 1;
                }

                $objDateTime = new DateTime($arNotification['UF_DATE_TIME']);

                $html .= '<li><div class="notifications-desc">';
                $html .= '<a href="#">АКБ №';
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
            return 
            [
                'html' => $html,
                'quantity' => $quantity,
                'result' => true
            ];
        }
        return ['result' => false];
    }

    public function ajaxUpdateEventAction()
    {
        $bNotification = HighloadblockNotification::updateCheckNotifications(getHLBlockIDByName('Notifications'));
        return ['result' => $bNotification];
    }
}
