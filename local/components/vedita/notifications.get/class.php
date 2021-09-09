<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Engine\Contract\Controllerable;
use lib\HighloadblockObject\HighloadblockObject;

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
            ]
        ];
    }

    public function executeComponent()
    {
        $this->IncludeComponentTemplate();
    }

    public function ajaxAddEventAction()
    {
        $arNotifications = HighloadblockObject::getNotifications(HL_BLOCK_ID_NOTIFICATIONS);
        if (!empty($arNotifications))
        {
            $html = '<ul>';
            foreach ($arNotifications as $arNotification)
            {
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
                'quantity' => count($arNotifications),
                'result' => true
            ];
        }
        return ['result' => false];
    }
}
