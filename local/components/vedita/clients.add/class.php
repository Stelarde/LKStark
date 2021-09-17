<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Engine\Contract\Controllerable;

class Support extends CBitrixComponent implements Controllerable
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

    public function ajaxAddEventAction(): array
    {
        global $USER;
        if ($USER::IsAuthorized())
        {  
            if (in_array(DEALER_GROUP, CUser::GetUserGroup($USER->GetID())))
            {
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !empty($_POST['login']))
                {
                    $paswd = uniqid();

                    $arEventFields = 
		            [
                        'EMAIL' => $_POST['email'],
                        'LOGIN' => $_POST['login'],
                        'PASSWORD' => $paswd
		            ]; 
		            CEvent::Send('NEW_USER', 's1', $arEventFields, 'N', '', '');                

                    $client = new CUser;
                    $arFields = 
                    [
                        "EMAIL" => $_POST['email'],
                        "LOGIN" => $_POST['login'],
                        "ACTIVE" => "Y",
                        "GROUP_ID" => [3],
                        "PASSWORD" => $paswd,
                        "CONFIRM_PASSWORD" => $paswd,
                        'PERSONAL_NOTES' => $_POST['personal-notes'],
                        'PERSONAL_PHONE' => $_POST['personal-phone'],
                        'WORK_COMPANY' => $_POST['work-company'],
                        'TITLE' => $_POST['title'],
                        'WORK_LOGO' => $_FILES['add-file-img1'],
                        'UF_ADDRESS' => $_POST['address'],
                        'UF_DILER_ID' => $USER->GetID()
                    ];
                
                    $clientId = $client->Add($arFields);
                    return
                    [
                        'result' => true,
                        'clientId' => $clientId
                    ];
                }
            }
        }
        return 
        [
            'result' => false
        ];
    }
}
