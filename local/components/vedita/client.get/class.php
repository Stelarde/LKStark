<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

class Client extends CBitrixComponent
{
    public function executeComponent()
    {
        $this->getClient();
        $this->IncludeComponentTemplate();
    }

    public function getClient()
    {
        global $USER;
        if ($USER->IsAuthorized())
        {
            $userId = $USER->getId();
            if ($userId > 0 AND is_numeric($userId))
            {
                $arUser = CUser::GetByID($_GET['client_id'])->Fetch();
                $this->arResult['user'] = $arUser;
                $this->arResult['user']['logoSrc'] = CFile::GetPath($arUser['WORK_LOGO']);
                return true;
            }
        }
        return false;
    }
}
