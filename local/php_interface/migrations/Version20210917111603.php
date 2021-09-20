<?php

namespace Sprint\Migration;


class Version20210917111603 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.28.7";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Event()->saveEventType('NEW_USER', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Зарегистрировался новый пользователь',
  'DESCRIPTION' => '

#USER_ID# - ID пользователя
#LOGIN# - Логин
#EMAIL# - EMail
#NAME# - Имя
#LAST_NAME# - Фамилия
#USER_IP# - IP пользователя
#USER_HOST# - Хост пользователя
',
  'SORT' => '1',
));
        $helper->Event()->saveEventType('NEW_USER', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => 'New user was registered',
  'DESCRIPTION' => '

#USER_ID# - User ID
#LOGIN# - Login
#EMAIL# - EMail
#NAME# - Name
#LAST_NAME# - Last Name
#USER_IP# - User IP
#USER_HOST# - User Host
',
  'SORT' => '1',
));
        $helper->Event()->saveEventMessage('NEW_USER', array (
  'LID' => 
  array (
    0 => 's1',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => '#EMAIL#',
  'SUBJECT' => 'Вы были зарегистрированы в системе #SITE_NAME#',
  'MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Вы были успешно зарегистрированы на сайте #SERVER_NAME#.

Login: #LOGIN#
Password: #PASSWORD#
E-Mail: #EMAIL#

Письмо сгенерировано автоматически.',
  'BODY_TYPE' => 'text',
  'BCC' => '',
  'REPLY_TO' => '',
  'CC' => '',
  'IN_REPLY_TO' => '',
  'PRIORITY' => '',
  'FIELD1_NAME' => '',
  'FIELD1_VALUE' => '',
  'FIELD2_NAME' => '',
  'FIELD2_VALUE' => '',
  'SITE_TEMPLATE_ID' => '',
  'ADDITIONAL_FIELD' => 
  array (
  ),
  'LANGUAGE_ID' => 'ru',
  'EVENT_TYPE' => '[ NEW_USER ] Зарегистрировался новый пользователь',
));
    }

    public function down()
    {
        //your code ...
    }
}
