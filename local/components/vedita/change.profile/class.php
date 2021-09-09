<?php
use Bitrix\Main\Type;
use Bitrix\Main\Engine\Contract\Controllerable;
class ChangeProfile extends \CBitrixComponent implements Controllerable
{
    public function configureActions()
    {
        return
            [
                'getPath' =>
                [
                    'prefilters' => [],
                    'postfilters' => []
                ],
                'changeSetting' =>
                [
                    'prefilters' => [],
                    'postfilters' => []
                ]
            ];
    }
    public function changeSettingAction() : array
    {
        $data = 
        [
            'files' => $_FILES,
            'post' => $_POST
        ];
        if(self::checkValidate($_POST))
        {
            $fields = 
            [
                "NAME"              => $_POST['name'],
                "LAST_NAME"         => $_POST['last_name'],
                "EMAIL"             => $_POST['email'],
                "SECOND_NAME"       => $_POST['second_name'],
                "PERSONAL_CITY"     => $_POST['personal_city'],
                "PERSONAL_PHONE"    => $_POST['personal_phone']
            ];
            self::updateUser($fields);
            if(!empty($_FILES['userfile']['tmp_name']) && ($_FILES['userfile']['type'] == "image/jpeg" || $_FILES['userfile']['type'] == "image/jpg" || $_FILES['userfile']['type'] == "image/png"))
            {
                $fields = 
                [
                    "PERSONAL_PHOTO"   => $_FILES['userfile']
                ];
                self::updateUser($fields);
            }
            $data["status"] = true;
        }
        else
        {
            $data["status"] = false;
            $data["answer"] = "Заполните все данные";
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
    public function checkValidate(array $data) : bool
    {
        // if(empty($data['email']) or empty($data['last_name']) or empty($data['name']) or empty($data['personal_city']) or empty($data['personal_phone']) or empty($data['second_name']))
        //     return false;
        if(!is_numeric($data['personal_phone']) or strlen($data["personal_phone"]) < 11 or strlen($data["personal_phone"]) > 18)
            return false;
        return true;
    }
    public function getPathAction() : array
    {
        $arFiles = CFile::MakeFileArray($_FILES['userfile']['tmp_name']);
        $id = CFile::SaveFile($arFiles,"/tmp");
        $file = CFile::ResizeImageGet($id, array('width'=>53, 'height'=>53), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
            $URL = $file['src'];
        return [
            'result' => $URL
        ];
    }
    public function getUserSetting() : array
    {
        global $USER;
        $user_id = $USER->GetID();
        $rsUser = CUser::GetByID($user_id)->Fetch();
        return $rsUser;
    }
    public function getUserImage() : string
    {
        $user = $this->getUserSetting();
        if(!empty($user['PERSONAL_PHOTO']))
        {
            $file = CFile::ResizeImageGet($user['PERSONAL_PHOTO'], array('width'=>53, 'height'=>53), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
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
        $this->arResult["user_image"] = $this->getUserImage();
        $this->includeComponentTemplate();
    }
}
?>