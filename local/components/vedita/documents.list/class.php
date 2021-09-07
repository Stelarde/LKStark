<?php
use lib\AgentContactsTableMethods\AgentContactsTableMethods;
use lib\CounterAgentTableMethods\CounterAgentTableMethods;
use Bitrix\Main\Type;
use Bitrix\Main\Engine\Contract\Controllerable;

class Feedback extends \CBitrixComponent implements Controllerable
{
    public function configureActions()
    {
        return
            [
                'addContacts' =>
                [
                    'prefilters' => [],
                    'postfilters' => []
                ]
            ];
    }

    public function getDocuments() : array
    {
        
    }

    public function executeComponent()
    {
        $this->arResult["documents"] = $this->getDocuments();
        $this->includeComponentTemplate();
    }
}
?>