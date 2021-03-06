<?php if(!defined('IN_GS')){die('You cannot load this file directly!');} // Security Check
/**************************************************************************************************\
* Russian (ру́сский язы́к) Language File for GetSimple Blog                                          *
* ------------------------------------------------------------------------------------------------ *
* Last Modified: 31 March 2015                                                                  *
* Compiled By: Google Translate (John Stray)                                                                        *
\**************************************************************************************************/
 
$i18n = array(
  
  # Language Configuration
  'LANGUAGE_CODE'             =>  'ru_RU',
  'DATE_FORMAT'               =>  'm/d/Y h:i:s a',
  'DATE_DISPLAY'              =>  'F jS, Y',
  'DATE_ARCHIVE'              =>  'F Y',
  
  # Plugin Information
  'PLUGIN_TITLE'              =>  ($plugin = 'GetSimple Blog'),
  'PLUGIN_DESC'               =>  'Простой, но мощный Блог система для GetSimple CMS',
  
  # Tab/Sidebar Actions (Administration)
  'BLOG_TAB_BUTTON'           =>  'Блог',
  'MANAGE_POSTS_BUTTON'       =>  'Управлять сообщения',
  'CATEGORIES_BUTTON'         =>  'категории',
  'AUTOIMPORTER_BUTTON'       =>  'RSS Авто-импортер',
  'SETTINGS_BUTTON'           =>  'настройки',
  'UPDATE_BUTTON'             =>  'Проверка обновления',
  'HELP_BUTTON'               =>  'Помощь'
  
  # Generic Strings
  'WRITE_OK'                  =>  'Файл успешно записан!',
  'EDIT_OK'                   =>  'Файл успешно изменен!',
  'DATA_FILE_ERROR'           =>  'Файл не может быть написано!',
  'CANCEL'                    =>  'отменить',
  'DELETE'                    =>  'удалять',
  'SAVE'                      =>  'Сохранить',
  'OR'                        =>  'или',
  'YES'                       =>  'Да',
  'NO'                        =>  'Нет',
  'ADDED'                     =>  'Добавил',
  'MANAGE'                    =>  'Управлять',
  'LANGUAGE'                  =>  'язык',
  'DATE'                      =>  'дата',
  
  # Class Constructor
  'DATA_BLOG_DIR'             =>  '<em>data/blog</em> Каталог успешно создан.',
  'DATA_BLOG_DIR_ERR'         =>  '<em>data/blog</em> папка не может быть создана!',
  'DATA_BLOG_DIR_ERR_HINT'    =>  'Вы будете иметь, чтобы создать этот каталог самостоятельно для плагин для правильной работы.',
  'DATA_BLOG_CATEGORIES'      =>  '<em>blog_categories.xml</em> Файл успешно создан!',
  'DATA_BLOG_CATEGORIES_ERR'  =>  '<em>blog_categories.xml</em> Файл не может быть создан!',
  'DATA_BLOG_RSS'             =>  '<em>blog_rss.xml</em> Файл успешно создан!',
  'DATA_BLOG_RSS_ERR'         =>  '<em>blog_rss.xml</em> Файл не может быть создан!',
  'BLOG_SETTINGS'             =>  'Настройки Блог',
  
  # 'Post Management' Strings
  'POST_ADDED'                =>  'Успешно сохранена должность!',
  'POST_ERROR'                =>  'Сообщение не может быть сохранен!',
  'POST_DELETED'              =>  'Сообщение успешно удалено!',
  'POST_DELETE_ERROR'         =>  'Сообщение не может быть удален!',
  'BLOG_CREATE_EDIT_NO_TITLE' =>  'Название требуется на пост, прежде чем он может быть сохранен!',
  'BLOG_RETURN_TO_PREV_PAGE'  =>  'Вернуться в темах',
  'ADD_NEW_POST'              =>  'Добавить новое сообщение',
  'EDIT_EXISTING_POST'        =>  'Редактировать сообщение',
  'VIEW_POST'                 =>  'Посмотреть сообщение',
  'POST_OPTIONS'              =>  'Опции сообщения',
  'UPLOAD_THUMBNAIL'          =>  'Загрузить эскизов',
  'UPLOAD_ENABLE_JAVASCRIPT'  =>  'Пожалуйста, включите JavaScript, чтобы использовать File Uploader!',
  'SAVE_POST'                 =>  'Сохранить',
  'MANAGE_POSTS'              =>  'сообщения',
  'CUSTOM_FIELDS_BUTTON'      =>  'Настраиваемые поля',
  'NEW_POST_BUTTON'           =>  'Новое сообщение',
  'MANAGE_POSTS_DESC'         =>  'Изменить существующие сообщения и создавать новые сообщения. Приведенная ниже таблица показывает сообщения, что в настоящее время существуют.',
  'NO_POSTS'                  =>  'Там нет сообщений для отображения!',
  'CLICK_TO_CREATE'           =>  'Нажмите здесь, чтобы создать один',
  'PAGE_TITLE'                =>  'Page Title',
  
  # 'Category Management' Strings
  'CATEGORY_ADDED'            =>  'Успешно добавлено категории!',
  'CATEGORY_ERROR'            =>  'Категория не может быть сохранен!',
  'MANAGE_CATEGORIES'         =>  'Управление категориями',
  'ADD_CATEGORY'              =>  'Добавить категорию',
  'SETTINGS_CATEGORY_DESC'    =>  'Добавить или Изменить категории назначить свои сообщения в. Это позволит вам отсортировать сообщения, показывая только те, в данной категории.',
  'CATEGORY_NAME'             =>  'Название категории',
  'CATEGORY_RSS_FEED'         =>  'Категория RSS поток',
  
  # 'RSS Auto-Importer' Strings
  'FEED_ADDED'                =>  'Успешно добавлено RSS канал!',
  'FEED_ERROR'                =>  'RSS поток не может быть сохранен!',
  'FEED_DELETED'              =>  'Успешно удален RSS канал!',
  'FEED_DELETE_ERROR'         =>  'RSS поток не может быть удален!',
  'READ_FULL_ARTICLE'         =>  'Читайте полный текст статьи',
  'RSS_FEED_NO_POSTS_DESC'    =>  'Там нет сообщений, доступных для этого канал. Пожалуйста, свяжитесь с администратором сайта для получения дополнительной информации.',
  'RSS_FILE_OPEN_FAIL'        =>  'Не удалось открыть "rss.rss" файл.',
  'RSS_FILE_WRITE_FAIL'       =>  'Не удалось записать на "rss.rss" файла.',
  'RSS_HEADER'                =>  'RSS Авто-импортер',
  'ADD_FEED'                  =>  'Добавить RSS поток',
  'SETTINGS_FEED_DESC'        =>  'RSS Авто-импортер импортировать и создавать сообщения от RSS-каналы на других сайтах. Это полезно, если вы хотите управлять этот блог с содержанием от другого блога.',
  'ADD_NEW_FEED'              =>  'Добавить RSS поток',
  'BLOG_CATEGORY'             =>  'Блог Категории',
  'RSS_FEED'                  =>  'RSS Подача',
  'FEED_CATEGORY'             =>  'RSS раздела',
  'DELETE_FEED'               =>  'Удалить канал',
  'RSS_SETTINGS_HEADER'       =>  'Настройки RSS Авто-импортере',
  'SETTINGS_RSS_DESC'         =>  'Выберите настройки для RSS Авто-импортера.Авто-импортере можете импортировать либо полное содержание кормов или резюме с обратной ссылкой на оригинал статьи.',
  'RSS_IMPORTER'              =>  'Включить RSS-Auto-импортере',
  'RSS_CONTENT_DESCRIPTION'   =>  'Включить RSS Content или резюме',
  'RSS_TITLE'                 =>  'RSS поток Название',
  'RSS_DESCRIPTION'           =>  'RSS поток Описание',
  'RSS_IMPORTER_PASS'         =>  'Авто-импортере Пароль (что-нибудь)',
  'RSS_FEED_NUM_POSTS'        =>  '&num; Сообщений на форуме в RSS-лента',
  
  # 'Settings' Strings
  'SETTINGS_SAVE_OK'          =>  'Успешно сохраненные настройки!',
  'SETTINGS_SAVE_ERROR'       =>  'Не удалось сохранить настройки!',
  'BLOG_SETTINGS'             =>  'Настройки Блог',
  'SETTINGS_MAIN_DESC'        =>  'Управление настройками для вашего блога. Таковы основные настройки для блога.',
  'PAGE_URL'                  =>  'Страница для отображения сообщения в блоге',
  'EXCERPT_OPTION'            =>  'сообщения формат на странице сообщений',
  'FULL_TEXT'                 =>  'Полный текст',
  'EXCERPT'                   =>  'выдержка',
  'EXCERPT_LENGTH'            =>  'Длина выписки (символов)',
  'POSTS_PER_PAGE'            =>  'Кол-во сообщений на странице',
  'RECENT_POSTS'              =>  '# Последних сообщений',
  'DISPLAY_POST_COUNT_ARCH'   =>  'Показать количеству сообщений в Архиве',
  'HTACCESS_HEADLINE'         =>  'Довольно URL-адреса',
  'PRETTY_URLS'               =>  'Используйте красивые URL',
  'VIEW_HTACCESS'             =>  'Посмотреть, что .htaccess вашего сайта должно быть!',
  'PRETTY_URLS_PARA'          =>  'Если да, то вам придется редактировать файл .htaccess после сохранения настроек',
  'HTACCESS_1'                =>  'Блоки прямой доступ к XML-файлов - они занимают все данные!',
  'HTACCESS_2'                =>  'Обычно RewriteBase просто '/', но заменить его подкаталоге пути',
  'HTACCESS_3'                =>  'ВАЖНО -> если ваш сайт находится в подпапках вам нужно, чтобы изменить это, чтобы отразить (например: / подпапка /)',
  'BLOG_PRETTY_NOTICE'        =>  'Вы должны включить Красивые URL&apos;ы в GetSimple до инструкции будут отображены здесь',
  'SAVE_SETTINGS'             =>  'Сохранить настройки',
  'MAIN_SETTINGS_BUTTON'      =>  'Основные настройки',
  
  # 'Help' Strings
  'HELP'                      =>  'помощь',
  'FRONT_END_FUNCTIONS'       =>  'Передние конечные функции',
  'HELP_CATEGORIES'           =>  'Категории Показать блог',
  'HELP_SEARCH'               =>  'Показать поисковый блог-бар',
  'HELP_ARCHIVES'             =>  'Архивы Показать блог',
  'HELP_RECENT'               =>  'Показывать новые сообщения вашего блога',
  'HELP_RECENT_2'             =>  'Эта функция имеет 4 <strong>дополнительных</strong> доступных параметров',
  'HELP_RECENT_3'             =>  'Пример использования (дисплей выдержка, длина выдержка по умолчанию, отображение пиктограмм и дисплей подробнее ссылку)',
  'RSS_LOCATION'              =>  'Ниже вашего блога RSS поток',
  'DYNAMIC_RSS_LOCATION'      =>  'Динамическая RSS поток Местонахождение (Создает RSS поток на лету)',
  'AUTO_IMPORTER_TITLE'       =>  'RSS поток Auto-импортере Cronjob установки',
  'AUTO_IMPORTER_DESC'        =>  'Вы должны быть в состоянии настройки cronjobs через веб-хостинг интерфейса администратора. Этот плагин полагаю, вы знаете, как.Ниже фрагмент является то, что ваш хрон должен выглядеть следующим образом.',
  'BLOG_PAGE_DESC_TITLE'      =>  'Пользовательские страницы блога Помощь',
  'BLOG_PAGE_RECOM'           =>  'Рекомендуется просматривать функции <code>show_blog_post()</code> plugins/blog/inc/frontEndFunctions.php чтобы увидеть, как лучше всего осуществить страницу пользовательского блога.',
  'BLOG_PAGE_DESC_LINE_1'     =>  'Вы можете использовать HTML, PHP, XML и JS в этом текстового поля.',
  'BLOG_PAGE_DESC_LINE_2'     =>  'Он будет вести себя так, как будто кодирования непосредственно в сам плагин. Сообщение данных передается через объект.',
  'BLOG_PAGE_DESC_LINE_3'     =>  'Таким образом, доступ настраиваемое поле вы можете сделать что-то вроде ниже',
  'BLOG_PAGE_AVAILABLE_FUNC'  =>  'Функции, доступные и Помощники:',
  'BLOG_PAGE_FRMT_DATE_LABEL' =>  'Формат Дата',
  'BLOG_PAGE_FRMT_DATA_DESC'  =>  'Вы передаёте данные прямо из объекта данных, и он будет отформатировать его.',
  'BLOG_PAGE_GET_URL_TO_AREAS'=>  'Получить URL в блог районы',
  'BLOG_PAGE_URL_EX_LABEL'    =>  'ex (получить Адрес пост)',
  'BLOG_PAGE_AVAILABLE_AREAS' =>  'Доступные Области',
  'BLOG_PAGE_POST'            =>  'после',
  'BLOG_PAGE_TAG'             =>  'тег',
  'BLOG_PAGE_PAGE'            =>  'страница',
  'BLOG_PAGE_ARCHIVE'         =>  'архив',
  'BLOG_PAGE_CATEGORY'        =>  'категория',
  'BLOG_PAGE_CREATE_EXCERPT'  =>  'создать отрывок',
  'BLOG_PAGE_EXCERPT_DESC'    =>  'Это создаст отрывок заданной длины. Переменная $excerpt_length должны были бы быть целым числом и длина выдержке.',
  'BLOG_PAGE_DECODE_CONTENT'  =>  'содержание декодирования',
  
  # 'Front-End' Strings
  'BY'                        =>  'по',
  'ON'                        =>  'на',
  'IN'                        =>  'в',
  'TAGS'                      =>  'бирка',
  'NO_CATEGORIES'             =>  'Там нет категории для отображения!',
  'NO_POSTS'                  =>  'Там нет сообщений для отображения!',
  'NO_ARCHIVES'               =>  'Там нет архивы для отображения!',
  'SEARCH'                    =>  'поиск',
  'FOUND'                     =>  'Следующие сообщения были найдены:',
  'NOT_FOUND'                 =>  'Извините, нет записей, были обнаружены!',
  'NEXT_PAGE'                 =>  '&larr; следующая страница',
  'PREV_PAGE'                 =>  'предыдущая страница &rarr;',
  'ARCHIVE_PRETITLE'          =>  'Архив блога: ',
  'CATEGORY_PRETITLE'         =>  'Блог Категории: ',
  
  # Custom Fields Manager
  'CUSTOM_FIELDS'             =>  'Настраиваемые поля',
  'CUSTOMFIELDS_DESCR'        =>  'Этот плагин позволяет задать пользовательские поля, которые отображаются при редактировании страницы.',
  'CUSTOM_FIELDS_OPTIONS_AREA'=>  'Опции Площадь',
  'OPTIONS_AREA_DESCRP'       =>  '(Варианты: Пользовательские поля будут отображаться в разделе "Параметры сообщения").',
  'NAME'                      =>  'имя',
  'LABEL'                     =>  'этикетка',
  'TYPE'                      =>  'тип',
  'DEFAULT_VALUE'             =>  'значение по умолчанию',
  'ADD'                       =>  'добавить новое поле',
  'CUSTOM_FIELDS_MAIN_AREA'   =>  'основным направлением',
  'MAIN_AREA_DESCRP'          =>  '(Main: Пользовательские поля будет <em>в разделе</em> в разделе "Параметры сообщения").',
  'TEXT_FIELD'                =>  'текстовое поле',
  'LONG_TEXT_FIELD'           =>  'длинный текст поля',
  'DROPDOWN_BOX'              =>  'выпадающем списке',
  'CHECKBOX'                  =>  'флажок',
  'WYSIWYG_EDITOR'            =>  'WYSIWYG редактор',
  'TITLE'                     =>  'название',
  'HIDDEN_FIELD'              =>  'скрытое поле',
  
  # VersionCheck Updater
  'VERSION_NOMESSAGE'         =>  'Сообщение об ошибке не был установлен! Это проблема.',
  'VERSION_NORESPONSE'        =>  'Не удалось получить ответ от сервера Extend API.',
  'VERSION_NOFUNCTION'        =>  'Ваш PHP среды не настроены правильно.',
  'VERSION_UPDATEAVAILABLE'   =>  'Доступно обновление!',
  'VERSION_UPTODATE'          =>  $plugin.' до свидания!',
  'VERSION_BETA'              =>  'Вы используете бета-версию '.$plugin.'.',
  'VERSION_FAILEDCOMPARE'     =>  'Не удалось сравнить версии ходе проверки обновлений.',
  'VERSION_APIFAIL'           =>  'Проверка с Extend API не был успешным.',
  'VERSION_INTERNALERROR'     =>  'Произошла внутренняя ошибка с VersionCheck.',
  'VERSION_STATUS'            =>  'Плагин Обновления',
  'VERSION_STATUS_DESC'       =>  'Убедитесь, что вы используете последнюю версию плагина '.$plugin.' так что вы можете извлечь выгоду из последних исправлений и функций',
  'VERSION_UPDATESTATUS'      =>  'состояние обновления',
  'VERSION_CURRENTVER'        =>  'текущая версия',
  'VERSION_LATESTVER'         =>  'последняя версия',
  
);
