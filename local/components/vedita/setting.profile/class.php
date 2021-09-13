<?php
use Bitrix\Main\Type;
use Bitrix\Main\Engine\Contract\Controllerable;
class Profile extends \CBitrixComponent implements Controllerable
{
    public function configureActions()
    {
        return
            [
                'changePassword' =>
                [
                    'prefilters' => [],
                    'postfilters' => []
                ]
            ];
    }
    public function changePasswordAction($oldPassword,$newPassword,$confirmPassword) : array
    {
        $userData = self::getUserSetting();
        $passwordCorrect = \Bitrix\Main\Security\Password::equals($userData['PASSWORD'], $oldPassword);
        if($passwordCorrect && $newPassword === $confirmPassword)
        {
            $fields = 
            [
                "PASSWORD"          => $newPassword,
                "CONFIRM_PASSWORD"  => $confirmPassword,
            ];
            self::updateUser($fields);
            $data["status"] = true;
        }
        else
        {
            $data["status"] = false;
            $data["answer"] = "Возникли ошибки , пароли не сопадают";
        }
        return [
            'data' => $data
        ];
    }
    public function updateUser(array $fields) : bool
    {
        global $USER;
        $user_id = $USER->GetID();
        $user = new CUser;
        if($user->Update($user_id, $fields))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getUserSetting() : array
    {
        global $USER;
        $user_id = $USER->GetID();
        $rsUser = CUser::GetByID($user_id)->Fetch();
        return $rsUser;
    }
    public function getUserRole() : string
    {
        $user = $this->getUserSetting();
        $arGroups = CUser::GetUserGroup($user["ID"]); 
        foreach ($arGroups as $curUserGroups) { 
            $rsGroup = CGroup::GetByID($curUserGroups); 
            $arGroup = $rsGroup->Fetch();
            if ($arGroup['ID'] !== '2') {
                    $role = $arGroup['NAME'];  
            }
        }
        return $role;
    }
    public function getUserImage() : string
    {
        $user = $this->getUserSetting();
        if(!empty($user['PERSONAL_PHOTO']))
        {
            $file = CFile::ResizeImageGet($user['PERSONAL_PHOTO'], array('width'=>70, 'height'=>70), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
            $URL = $file['src'];
            return $URL;
        }
        else
        {
            return " ";
        }
    }
    public function executeComponent()
    {
        $this->arResult["user"] = $this->getUserSetting();
        $this->arResult["user_role"] = $this->getUserRole();
        $this->arResult["user_image"] = $this->getUserImage();
        $this->includeComponentTemplate();
    }
}
?>