<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Engine\Contract\Controllerable;
use vedita\HighloadblockSupport;

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
        $arFile[] = CFile::MakeFileArray($_FILES['support-files']['tmp_name']);

        return HighloadblockSupport::addSupport($_POST['theme'], $_POST['message'], $arFile, getHLBlockIDByName('Support'));
    }
}
