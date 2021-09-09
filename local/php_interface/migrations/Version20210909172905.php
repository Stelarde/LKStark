<?php

namespace Sprint\Migration;


class Version20210909172905 extends Version
{
    protected $description = "Документы (Доступ)";

    protected $moduleVersion = "3.28.7";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('documents', 'documents');
    $helper->Iblock()->saveGroupPermissions($iblockId, array (
  'administrators' => 'X',
  5 => 'R',
));

    }

    public function down()
    {
        //your code ...
    }
}
