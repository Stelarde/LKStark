<?php
use Bitrix\Main\Type;
use Bitrix\Main\Engine\Contract\Controllerable;
use lib\HighloadblockObject\HighloadblockObject;
class Feedback extends \CBitrixComponent implements Controllerable
{
    public function configureActions()
    {
        return
            [
                'addObject' =>
                [
                    'prefilters' => [],
                    'postfilters' => []
                ]
            ];
    }

    public function addObjectAction(string $src,string $object_name,string $object_contact_person,string $object_contact_phone,string $object_adres) : array
    {
        $data = [
            "UF_OBJECT_SRC" => $src,
            "UF_OBJECT_NAME" => $object_name,
            "UF_OBJECT_CONTACT_PERSON" => $object_contact_person,
            "UF_OBJECT_PERSON_PHONE" => $object_contact_phone,
            "UF_OBJECT_PERSON_ADRESS" => $object_adres
        ];
        if(HighloadblockObject::addObject(HL_BLOCK_ID_OBJECT,$data))
        {
            return 
            [
                "status" => true,
                "answer" => "OK"
            ];
        }
        else
        {
            return 
            [
                "status" => false,
                "answer" => "Ошибка, проверьте валидность данных"
            ];
        }
    }
    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}
?>