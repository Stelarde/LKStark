<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Engine\Contract\Controllerable;

class Support extends CBitrixComponent implements Controllerable
{
    public function configureActions()
    {
        return 
        [
            'ajaxUpdateEvent' => 
            [
                'prefilters' => [],
                'postfilters' => []
            ]
        ];
    }

    public function executeComponent()
    { 
        $this->arResult['logoSrc'] = $_SESSION['logoSrc'];
        $this->arResult['WORK_COMPANY'] = htmlspecialchars($_SESSION['WORK_COMPANY']);
        $this->arResult['TITLE'] = htmlspecialchars($_SESSION['TITLE']);
        $this->arResult['UF_ADDRESS'] = htmlspecialchars($_SESSION['UF_ADDRESS']);
        $this->arResult['PERSONAL_PHONE'] = htmlspecialchars($_SESSION['PERSONAL_PHONE']);
        $this->arResult['PERSONAL_NOTES'] = htmlspecialchars($_SESSION['PERSONAL_NOTES']);

        $this->IncludeComponentTemplate();
    }

    public function ajaxUpdateEventAction(): array
    {
        global $USER;
        if ($USER::IsAuthorized())
        {  
            if (in_array(DEALER_GROUP, CUser::GetUserGroup($USER->GetID())))
            {
                $user = new CUser;
                $fields = 
                [
                    "WORK_LOGO" => $_FILES['add-file-img2'],
                    "WORK_COMPANY" => $_POST['work-company'],
                    "UF_ADDRESS" => $_POST['address'],
                    "TITLE" => $_POST['title'],
                    "PERSONAL_PHONE" => $_POST['personal-phone'],
                    "PERSONAL_NOTES" => $_POST['personal-notes']
                ];

                $user->Update($_SESSION['clientId'], $fields);

                return 
                [
                    'result' => true,
                    'error' => $user->LAST_ERROR,
                ];
            }
        }

        return 
        [
            'result' => false,
            'add-file-img2' => $_FILES['add-file-img2'],
        ];
    }
}
