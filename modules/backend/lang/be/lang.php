<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Выкарыстаны няправільны тып поля: ":type"',
    'options_method_invalid_model' => 'Для атрыбуту ":field" не была знойздена адпаведная мадэль. Паспрабуйце яўна вызначыць метад опцый для мадэлі ":model"',
    'options_method_not_exists' => 'Клас мадэлі ":model" павінен мець метад ":method()", які вяртае опцыі для поля формы ":field"',
  ],
  'widget' => [
    'not_registered' => 'Віджэт з імем класа ":name" не быў зарэгістрыраваны',
    'not_bound' => 'Віджэт з імем класа ":name" не быў злучаны з кантролерам',
  ],
  'page' => [
    'untitled' => 'Без назвы',
    'access_denied' => [
      'label' => 'Доступ забаронены',
      'help' => 'У вас няма патрэбных праў для прагляду гэтай старонкі',
      'cms_link' => 'Вярнуцца у панэль кіравання',
    ],
    'no_database' => [
      'label' => 'Няма базы дадзеных',
      'help' => 'Неабходна база дадзеных мець доступ у панэль кіравання. Праверце, што база дадзеных правільна наладжаная, а міграцыі выкананыя, перад тым, як пасправаць зноў',
      'cms_link' => 'Вярнуцца на хатнюю старонку',
    ],
  ],
  'partial' => [
    'not_found_name' => 'Частковы шаблон ":name" не знойдзены.',
  ],
  'account' => [
    'sign_out' => 'Выйсці',
    'login_placeholder' => 'Карыстальнік',
    'password_placeholder' => 'Пароль',
    'enter_email' => 'Увядзіце электронную пошту',
    'email_placeholder' => 'Электронная пошта',
    'apply' => 'Ужыць',
    'cancel' => 'Адмяніць',
    'delete' => 'Выдаліць',
    'ok' => 'Добра',
  ],
  'dashboard' => [
    'menu_label' => 'Панэль кіравання',
    'widget_inspector_title' => 'Канфігурацыя віджэта',
    'widget_inspector_description' => 'Налада адлюстравання віджэта',
    'widget_columns_label' => 'Шырыня :columns',
    'widget_columns_description' => 'Шырыня віджэта, лічба паміж 1 і 10',
    'widget_columns_error' => 'Калі ласка, ужывайце лічбы ад 1 да 10 у якасці шырыні віджэта',
    'columns' => '{1} слупок|[2,4] слупкі|[5,Inf] слупкоў',
    'widget_new_row_label' => 'Новы радок',
    'widget_new_row_description' => 'Размясціць віджэт на новым радку',
    'widget_title_label' => 'Назва віджэта',
    'widget_title_error' => 'Віджэт павінен мець назву',
    'reset_layout_success' => 'Макет быў скасаваны',
    'make_default_success' => 'Гэты макет цяпер зыходны',
    'status' => [
      'widget_title_default' => 'Статус сістэмы',
      'update_available' => '{0} абнаўленняў!|{1} абнаўленне!|[2,4] абнаўленні!|[5,Inf] абнаўленняў',
      'updates_pending' => 'Абнаўленні праграмнага забеспячэння ў чаканні',
      'updates_nil' => 'Праграмнае забеспячэнне ў актуальным стане',
      'updates_link' => 'Абнавіць',
      'warnings_pending' => 'Што патрабуе ўвагі',
      'warnings_nil' => 'Няма папярэджанняў',
      'warnings_link' => 'Прагледзець',
      'core_build' => 'Зборка сістэмы',
      'event_log' => 'Журнал падзей',
      'request_log' => 'Спіс запытаў',
      'app_birthday' => 'Анлайн з',
    ],
    'welcome' => [
      'widget_title_default' => 'Сардэчна запрашаем',
      'welcome_back_name' => 'Сардэчна запрашаем назад да :app, :name.',
      'welcome_to_name' => 'Сардэчна запрашаем да :app, :name.',
      'first_sign_in' => 'Гэта першы раз, калі Вы ўвайшлі',
      'last_sign_in' => 'Ваш апошні ўваход быў',
      'view_access_logs' => 'Прагледзець журнал доступу',
      'nice_message' => 'Добрага дню!',
    ],
  ],
  'user' => [
    'name' => 'Адміністратар',
    'list_title' => 'Кіраванне адміністратарамі',
    'new' => 'Новы адміністратар',
    'first_name' => 'Імя',
    'last_name' => 'Прозвішча',
    'full_name' => 'Поўнае імя',
    'email' => 'Электронная пошта',
    'groups' => 'Групы',
    'groups_comment' => 'Укажыце, да якіх груп павінен належаць профіль. Для карыстальнікаў групы вызначаюць дазволы, якія для кожнага карыстальніка могуць быць перапісаны на яго ўзроўні на вокладцы "Дазволы"',
    'avatar' => 'Аватар',
    'password' => 'Пароль',
    'password_confirmation' => 'Пацвердзіце пароль',
    'permissions' => 'Дазволы',
    'account' => 'Профіль',
    'superuser' => 'Супер карыстальнік',
    'superuser_comment' => 'Надзяляе гэтага карыстальніка неабмежаванымі магчымасцямі ва ўсіх абласцях сістэмы. Супер карыстальнікі могуць дадаваць і змяняць іншых карыстальнікаў',
    'send_invite' => 'Выслаць запрашэнне па электроннай пошце',
    'send_invite_comment' => 'Дасылае вітальнае паведамленне з лагінам і паролем',
    'delete_confirm' => 'Выдаліць гэтага адміністратара?',
    'return' => 'Вярнуцца да спісу адміністратараў',
    'allow' => 'Дазволіць',
    'inherit' => 'Успадкаваць',
    'deny' => 'Забараніць',
    'activated' => 'Актываваны',
    'last_login' => 'Апошні ўваход',
    'created_at' => 'Створаны',
    'updated_at' => 'Абноўлены',
    'group' => [
      'name' => 'Група',
      'name_comment' => 'Імя адлюстроўваецца ў спісе груп на форме стварэння і рэдагавання адміністратараў',
      'name_field' => 'Назва',
      'description_field' => 'Апісанне',
      'is_new_user_default_field_label' => 'Група па змаўчанні',
      'is_new_user_default_field_comment' => 'Дадаваць новых адміністратараў у гэтую групу па змаўчанні',
      'code_field' => 'Код',
      'code_comment' => 'Увядзіце унікальны код, калі Вы жадаеце мець доступ да групы скрозь API',
      'list_title' => 'Кіраванне групамі',
      'new' => 'Новая група',
      'delete_confirm' => 'Выдаліць гэтую адміністратарскую групу?',
      'return' => 'Вярнуцца да спісу груп',
      'users_count' => 'Карыстальнікі',
    ],
    'preferences' => [
      'not_authenticated' => 'Немагчыма загрузіць ці захаваць налады для невядомага карыстальніка',
    ],
  ],
  'list' => [
    'default_title' => 'Спіс',
    'search_prompt' => 'Пошук...',
    'no_records' => 'Няма запісаў для прагляду',
    'missing_model' => 'Для спіса, які выкарыстоўваецца ў класе ":class", не знойдзена мадэль',
    'missing_column' => 'Няма ніводных вызначэнняў слупкоў для ":columns"',
    'missing_columns' => 'Спіс, ужыты ў класе ":class", не мае пэўных слупкоў',
    'missing_definition' => 'Вызначаны спіс не мае слупка для поля ":field"',
    'missing_parent_definition' => 'Налады спіса не маюць вызначэнняў для ":definition"',
    'behavior_not_ready' => 'Паводзіны спіса не былі вызначаны, праверце, што Вы вызвалі makeLists() у кантролеры',
    'invalid_column_datetime' => 'Значэнне слупку ":column" не з\'яўляецца аб\'ектам тыпу DateTime, можа ў Вас адсутнічае спасылка на $dates у мадэлі?',
    'pagination' => 'Паказаныя запісы: :from-:to з :total',
    'prev_page' => 'Папярэдняя старонка',
    'next_page' => 'Наступная старонка',
    'refresh' => 'Абнавіць',
    'updating' => 'Абнаўленне...',
    'loading' => 'Загрузка...',
    'check' => 'Праверыць',
    'delete_selected' => 'Выдаліць абраныя',
    'delete_selected_empty' => 'Няма абраных запісаў для выдалення',
    'delete_selected_confirm' => 'Выдяліць абраныя запісы?',
    'delete_selected_success' => 'Абраныя запісы былі выдаленыя',
    'column_switch_true' => 'Так',
    'column_switch_false' => 'Не',
  ],
  'fileupload' => [
    'default_prompt' => 'Націсніце %s альбо перацягніце файл сюды, каб загрузіць',
  ],
  'form' => [
    'create_title' => 'Новая :name',
    'update_title' => 'Рэдагаваць :name',
    'preview_title' => 'Папярэдні прагляд :name',
    'reset_success' => 'Скід зроблены',
    'missing_id' => 'Ідентыфікатар запісу формы не быў указаны',
    'missing_model' => 'Для паводзінаў форму ў класе ":class" няма вызначанай мадэлі',
    'missing_definition' => 'Паводзіны формы не маюць поля для ":field"',
    'action_confirm' => 'Вы ўпэўнены?',
    'create' => 'Стварыць',
    'create_and_close' => 'Стварыць і зачыніць',
    'creating' => 'Стварэнне...',
    'creating_name' => 'Стварэнне :name...',
    'save' => 'Захаваць',
    'save_and_close' => 'Захаваць і зачыніць',
    'saving' => 'Захаванне...',
    'saving_name' => 'Захаванне :name...',
    'delete' => 'Выдаліць',
    'deleting' => 'Выдаленне...',
    'confirm_delete' => 'Выдаліць запіс?',
    'confirm_delete_multiple' => 'Выдаліць абраныя запісы?',
    'deleting_name' => 'Выдаленне :name...',
    'reset_default' => 'Скінуць да стану па змаўчанні',
    'resetting' => 'Скіданне',
    'resetting_name' => 'Скіданне :name',
    'undefined_tab' => 'Рознае',
    'field_off' => 'Выкл',
    'field_on' => 'Укл',
    'add' => 'Дадаць',
    'apply' => 'Ужыць',
    'cancel' => 'Адмяніць',
    'close' => 'Зачыніць',
    'confirm' => 'Пацвердзіць',
    'reload' => 'Перазагрузіць',
    'complete' => 'Завяршыць',
    'ok' => 'Добра',
    'or' => 'ці',
    'confirm_tab_close' => 'Зачыніць вокладку? Незахаваныя змяненні будуць згубленыя',
    'behavior_not_ready' => 'Паводзіны формы пакуль не былі ініцыялізаваныя, упэўніцеся, што Вы выканалі initForm() у сваім кантролеры',
    'preview_no_files_message' => 'Няма загружаных файлаў',
    'preview_no_record_message' => 'Няма выбраных запісаў',
    'select' => 'Выбраць',
    'select_all' => 'абраць усё',
    'select_none' => 'выбраць няма',
    'insert_row' => 'Уставіць радок',
    'insert_row_below' => 'Уставіць радок ніжэй',
    'delete_row' => 'Выдаліць радок',
    'concurrency_file_changed_title' => 'Файл быў зменены',
    'concurrency_file_changed_description' => 'Файл які вы рэдагуеце быў зменены на діску іншым карыстальнікам. Вы можаце альбо перазагрузіць файл і згубіць сваі змяненні, альбо перазапісаць файл на діску',
    'return_to_list' => 'Вярнуцца да спісу',
  ],
  'recordfinder' => [
    'find_record' => 'Знайсці запіс',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'Паводзіны стаўлення не маюць ніводнай канфігурацыі для ":config"',
    'missing_definition' => 'Паводзіны стаўлення не маюць вызначэнняў для поля ":field"',
    'missing_model' => 'Паводзіны стаўлення ў :class не маюць вызначанай мадэлі',
    'invalid_action_single' => 'Гэтае дзеянне немагчыма выканаць на адзіночным стаўленні',
    'invalid_action_multi' => 'Гэтае дзеянне немагчыма выканаць на множным стаўленні',
    'help' => 'Націсніце на пункт, каб дадаць',
    'add' => 'Дадаць',
    'link_selected' => 'Звязаць выбраныя',
    'cancel' => 'Адмяніць',
    'close' => 'Зачыніць',
    'create' => 'Стварыць',
    'update' => 'Абнавіць',
    'preview' => 'Папярэдні прагляд',
    'remove_name' => 'Выдаліць :name',
    'delete_name' => 'Выдаліць :name',
    'link' => 'Звязаць',
    'unlink_name' => 'Раз\'яднаць :name',
  ],
  'reorder' => [
    'default_title' => 'Змяніць парадак запісаў',
    'no_records' => 'Няма запісаў для сартавання',
  ],
  'model' => [
    'name' => 'Мадэль',
    'not_found' => 'Немагчыма знайсці мадэль ":class" з ідэнтыфікатарам ":id"',
    'missing_id' => 'Не вызначаны ідэнтыфікатар для пошуку запісу мадэлі',
    'missing_relation' => 'Мадэль ":class" не мае вызначэнняў для ":relation"',
    'missing_method' => 'Мадэль ":class" не мае метаду ":method"',
    'invalid_class' => 'Мадэль ":model" выкарыстаная ў класе ":class" неправільная, яна павінна ўспадкоўваць клас \\Model',
    'mass_assignment_failed' => 'Памылковае масавае прызначэнне для атрыбуту ":attribute"',
  ],
  'warnings' => [
    'tips' => 'Парады па канфігурацыі сістэмы',
    'tips_description' => 'Ёсць пытанні, на якія Вам неабходна звярнуць увагу, каб наладзіць сістэму належным чынам',
  ],
  'editor' => [],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => 'Маі налады',
    'menu_description' => 'Налады для Вашага акаунту',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => 'Акцэнтавы колер',
  ],
  'backend_preferences' => [],
  'access_log' => [],
  'filter' => [
    'all' => 'all',
    'options_method_not_exists' => 'The model class :model must define a method :method() returning options for the \':filter\' filter.',
    'date_all' => 'all period',
  ],
  'import_export' => [],
  'permissions' => [
    'manage_media' => 'Загрузка і кіраванне медыя зместам - выявы, відэа, гукі, дакументы',
  ],
  'mediafinder' => [
    'label' => 'Медыя каталог',
    'default_prompt' => 'Націсніце %s кнопку, каб адшукаць медыя файлы',
  ],
  'media' => [
    'menu_label' => 'Медыя',
    'upload' => 'Загрузіць',
    'move' => 'Перамясціць',
    'delete' => 'Выдаліць',
    'add_folder' => 'Дадаць каталог',
    'search' => 'Пошук',
    'display' => 'Паказаць',
    'filter_everything' => 'Усё',
    'filter_images' => 'Выявы',
    'filter_video' => 'Відэа',
    'filter_audio' => 'Аўдыё',
    'filter_documents' => 'Дакументы',
    'library' => 'Бібліятэка',
    'size' => 'Памер',
    'title' => 'Назва',
    'last_modified' => 'Час апошняй мадыфікацыі',
    'public_url' => 'Публічны URL',
    'click_here' => 'Націсніце сюды',
    'thumbnail_error' => 'Памылка падчас генерацыі мініяцюры',
    'return_to_parent' => 'Вярнуцца да бацькоўскага каталогу',
    'return_to_parent_label' => 'Падняцца ..',
    'nothing_selected' => 'Нічога не выбрана',
    'multiple_selected' => 'Шматлікія аб\'екты выбраны',
    'uploading_file_num' => 'Загрузка :number файла(аў)...',
    'uploading_complete' => 'Загрузка скончаная',
    'uploading_error' => 'Не атымалася загрузіць',
    'type_blocked' => 'Гэты тып файлу заблакіраваны з-за небяспекі',
    'order_by' => 'Сартаваць па',
    'folder' => 'Каталог',
    'no_files_found' => 'Не знойдзена файлаў па Вашым запыце',
    'delete_empty' => 'Калі ласка, вызначце файлы для выдалення',
    'delete_confirm' => 'Выдаліць абраныя аб\'екты?',
    'error_renaming_file' => 'Памылка падчас пераіменавання аб\'екту',
    'new_folder_title' => 'Новы каталог',
    'folder_name' => 'Імя каталогу',
    'error_creating_folder' => 'Памылка падчас стварэння каталогу',
    'folder_or_file_exist' => 'Каталог альбо файл з такім імем ужо існуе',
    'move_empty' => 'Калі ласка, выберыце аб\'екты для перамяшчэння',
    'move_popup_title' => 'Перамясціць файлы альбо каталогі',
    'move_destination' => 'Каталог прызначэння',
    'please_select_move_dest' => 'Калі ласка, выберыце каталог прызначэння',
    'move_dest_src_match' => 'Калі ласка, выберыце іншы каталог прызначэння',
    'empty_library' => 'Медыя бібліятэка пустая. Загрузіце файлы альбо стварыце каталогі, каб пачаць',
    'insert' => 'Уставіць',
    'crop_and_insert' => 'Абрэзаць і ўставіць',
    'select_single_image' => 'Калі ласка, выберыце адну выяву',
    'selection_not_image' => 'Абраны аб\'ект не з\'яўляецца файлам',
    'restore' => 'Адмяніць усе змяненні',
    'resize' => 'Змяніць памер...',
    'selection_mode_normal' => 'Нармальны',
    'selection_mode_fixed_ratio' => 'Фіксіраваныя суадносіны старонак',
    'selection_mode_fixed_size' => 'Фіксіраваны памер',
    'height' => 'Вышыня',
    'width' => 'Шырыня',
    'selection_mode' => 'Рэжым выбару',
    'resize_image' => 'Змяніць памер',
    'image_size' => 'Памер выявы:',
    'selected_size' => 'Выбрана:',
  ],
];
