<?php

namespace Sprint\Migration;


class Version20210913110504 extends Version
{
    protected $description = "доступы 13.09";

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
  'RATING_VOTE' => 'R',
  'RATING_VOTE_AUTHORITY' => 'R',
  5 => 'R',
  6 => 'R',
  'client' => 'R',
));

    }

    public function down()
    {
        //your code ...
    }
}
