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

    public function ajaxAddEventAction(): array
    {
        $arFile[] = CFile::MakeFileArray($_FILES['support-files']['tmp_name']);

        return HighloadblockObject::addSupport($_POST['theme'], $_POST['message'], $arFile, HL_BLOCK_ID_SUPPORT);
    }
}
