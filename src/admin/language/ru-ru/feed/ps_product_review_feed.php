<?php
// Heading
$_['heading_title']              = 'Playful Sparkle - Google Product Review Feed';
$_['heading_integrations']       = 'Интеграции';
$_['heading_authentication']     = 'Аутентификация';
$_['heading_fix']                = 'Исправление распространенных ошибок';
$_['heading_getting_started']    = 'Начало работы';
$_['heading_setup']              = 'Настройка Google Product Review Feed';
$_['heading_troubleshot']        = 'Распространенные проблемы и их устранение';
$_['heading_faq']                = 'Часто задаваемые вопросы';
$_['heading_contact']            = 'Связаться со службой поддержки';

// Text
$_['text_extension']             = 'Расширения';
$_['text_success']               = 'Успех: Вы успешно изменили Google Product Review Feed!';
$_['text_edit']                  = 'Редактировать Google Product Review Feed';
$_['text_getting_started']       = '<p><strong>Обзор:</strong> Расширение Google Product Review Feed для OpenCart 4.x позволяет владельцам магазинов экспортировать и отправлять отзывы о товарах непосредственно в их Google Merchant Center. Эта интеграция позволяет Google отображать отзывы ваших клиентов рядом с вашими товарами в Google Shopping и других сервисах Google. Расширение также предлагает опциональные интеграции Opt-in и Badge, которые позволяют собирать отзывы после покупки с помощью опросов Google и отображать значок рейтинга продавца на витрине вашего магазина.</p><p><strong>Требования:</strong> OpenCart 4.x+, PHP 7.4+ или выше, а также доступ к вашему <a href="https://merchants.google.com?hl=en" target="_blank" rel="external noopener noreferrer">Google Merchant Center</a> с включенной программой Product Ratings.</p>';
$_['text_setup']                 = '<p><strong>Установка и настройка:</strong></p><ul><li><strong>Шаг 1:</strong> Загрузите расширение с помощью установщика расширений OpenCart.</li><li><strong>Шаг 2:</strong> Перейдите в раздел <strong>Расширения</strong> -&gt; <strong>Каналы данных</strong>.</li><li><strong>Шаг 3:</strong> Найдите <strong>Playful Sparkle - Google Product Review Feed</strong> в списке и нажмите <strong>Редактировать</strong>.</li><li><strong>Шаг 4:</strong> Введите ваш <strong>Google Merchant Center ID</strong>.</li><li><strong>Шаг 5:</strong> Включите <strong>Opt-in Integration</strong>, чтобы разрешить Google показывать опрос после оформления заказа.</li><li><strong>Шаг 6:</strong> Включите <strong>Badge Integration</strong>, чтобы отображать значок Google Customer Reviews на вашем сайте.</li><li><strong>Шаг 7:</strong> Опционально установите <strong>имя пользователя</strong> и <strong>пароль</strong> для защиты доступа к URL-адресу канала отзывов.</li><li><strong>Шаг 8:</strong> Сохраните настройки.</li></ul>';
$_['text_troubleshot']           = '<ul><li><strong>Канал данных не отображается:</strong> Убедитесь, что расширение включено и правильно настроено.</li><li><strong>Отзывы не отображаются в канале данных:</strong> В вашем магазине OpenCart должны быть одобренные отзывы о товарах.</li><li><strong>Opt-in или Badge не видны:</strong> Убедитесь, что соответствующая интеграция включена и ваш Merchant ID действителен.</li><li><strong>Opt-in или Badge показывают ошибку 404:</strong> Убедитесь, что расширение установлено на общедоступном домене с использованием HTTPS. Сервисы Google не могут получить доступ к локальным сетям, интранет или частным доменам.</li><li><strong>Доступ к каналу данных заблокирован:</strong> Если вы включили защиту канала данных, убедитесь, что при доступе к URL-адресу канала данных вы предоставляете правильные имя пользователя и пароль.</li></ul>';
$_['text_faq']                   = '<details><summary>Почему мой канал данных пуст?</summary>Убедитесь, что у ваших товаров есть одобренные отзывы клиентов в OpenCart. В канал данных включаются только отзывы, помеченные как "включенные".</details><details><summary>Где я могу найти свой Merchant ID?</summary>Вы можете найти свой Merchant Center ID в правом верхнем углу панели управления вашей учетной записи Google Merchant Center.</details><details><summary>Как протестировать URL канала данных?</summary>Перейдите по URL канала данных в браузере. Если защита канала данных включена, используйте настроенные имя пользователя и пароль при запросе. Вы должны увидеть XML-файл с вашими отзывами о товарах.</details><details><summary>Нужны ли мне обе интеграции Opt-in и Badge?</summary>Нет, вы можете включить одну или обе в зависимости от ваших потребностей. Функция Opt-in включает опросы после покупки, а Badge отображает ваш рейтинг продавца на сайте.</details>';
$_['text_contact']               = '<p>Для получения дополнительной помощи, пожалуйста, обратитесь в нашу службу поддержки:</p><ul><li><strong>Контакт:</strong> <a href="mailto:%s">%s</a></li><li><strong>Документация:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Пользовательская документация</a></li></ul>';

// Tab
$_['tab_general']                = 'Общие';
$_['tab_help_and_support']       = 'Помощь и поддержка';

// Entry
$_['entry_status']               = 'Статус';
$_['entry_review_feed_url']      = 'URL канала отзывов';
$_['entry_login']                = 'Имя пользователя';
$_['entry_password']             = 'Пароль';
$_['entry_active_store']         = 'Активный магазин';
$_['opt_in_integration']         = 'Интеграция Opt-in';
$_['badge_integration']          = 'Интеграция Badge';
$_['entry_merchant_id']          = 'Merchant ID';

// Button
$_['button_fix_event_handler']   = 'Исправить обработчик событий';

// Help
$_['help_copy']                  = 'Копировать URL';
$_['help_open']                  = 'Открыть URL';
$_['help_merchant_id']           = 'Введите ваш 9-значный Merchant Center ID. Вы можете найти этот ID в правом верхнем углу панели управления вашей учетной записи Google Merchant Center.';
$_['help_opt_in_integration']    = 'Включите, чтобы Google предлагал опрос после оформления заказа, позволяя клиентам оценить свой опыт взаимодействия с вашим магазином.';
$_['help_badge_integration']     = 'Включите, чтобы отображать значок Google Customer Reviews на вашем сайте, показывая ваш средний рейтинг продавца и подтверждая ваше участие в программе.';

// Error
$_['error_permission']           = 'Внимание: У вас нет разрешения на изменение Google Product Review Feed!';
$_['error_store_id']             = 'Внимание: Форма не содержит store_id!';
$_['error_merchant_id']          = 'Требуется Merchant Center ID.';
$_['error_merchant_id_invalid']  = 'Недействительный Merchant Center ID. Он должен быть числом от 7 до 10 цифр.';
