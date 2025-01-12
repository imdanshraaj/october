<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Geçersiz alan tipi :type.',
    'options_method_invalid_model' => '\':field\' metodu, geçerli bir model ile eşleşmiyor. :model Model\'i için options metodu tanımlamalısınız.',
    'options_method_not_exists' => ':model Model\'i içerisinde \':field\' formuna geri dönüş için bir :method() metodu tanımlanmalıdır.',
    'colors_method_not_exists' => ':model Model\'i içerisinde \':field\' form alanı için html renk HEX kodu üreten :method() metodu tanımlanmalıdır.',
  ],
  'widget' => [
    'not_registered' => '\':name\' isimli widget sınıfı sistemde kayıtlı değil',
    'not_bound' => '\':name\' isimli widget sınıfı controllerda tanımlanmamış',
  ],
  'page' => [
    'untitled' => 'Başlıksız',
    'access_denied' => [
      'label' => 'Giriş engellendi',
      'help' => 'Bu sayfayı görüntülemek için gerekli izinlere sahip değilsiniz.',
      'cms_link' => 'Ana sayfaya dön',
    ],
    'no_database' => [
      'label' => 'Veritabanı yapılandırılmamış',
      'help' => 'Yönetim paneline erişebilmeniz için geçerli bir veritabanı yapılandırması yapmalısınız. Lütfen ayarların kontrol edin.',
      'cms_link' => 'Anasayfaya dön',
    ],
  ],
  'partial' => [
    'not_found_name' => '\':name\' bölümü bulunamadı.',
  ],
  'account' => [
    'signed_in_as' => ':full_name olarak giriş yapıldı',
    'sign_out' => 'Çıkış',
    'login_placeholder' => 'kullanıcı adı',
    'password_placeholder' => 'şifre',
    'enter_email' => 'Email adresinizi girin',
    'email_placeholder' => 'email',
    'apply' => 'Onayla',
    'cancel' => 'İptal',
    'delete' => 'Sil',
    'ok' => 'Tamam',
  ],
  'dashboard' => [
    'menu_label' => 'Anasayfa',
    'widget_inspector_title' => 'Eklenti ayarları',
    'widget_inspector_description' => 'Eklentinin ayarlarını düzenleyin',
    'widget_columns_label' => 'Genişlik :columns',
    'widget_columns_description' => 'Eklenti genişliği, 1 ile 10 arasında bir sayı.',
    'widget_columns_error' => 'Lütfen eklenti genişliğini 1 ile 10 arasında girin.',
    'columns' => '{1} sütun|[2,Inf] sütun',
    'widget_new_row_label' => 'Yeni satıra zorla',
    'widget_new_row_description' => 'Eklentiyi yeni satıra indir.',
    'widget_title_label' => 'Eklenti başlığı',
    'widget_title_error' => 'Eklenti Başlığı gerekli.',
    'reset_layout_success' => 'Şablonu sıfırlandı',
    'make_default_success' => 'Geçerli şablon öntanımlı olarak ayarlandı',
    'collapse_all' => 'Tümünü daralt',
    'expand_all' => 'Tümünü genişlet',
    'status' => [
      'widget_title_default' => 'Sistem durumu',
      'update_available' => '{0} güncelleme var!|{1} güncelleme var!|[2,Inf] güncelleme var!',
      'updates_pending' => 'Bekleyen güncelleme var',
      'updates_nil' => 'Sistem güncel',
      'updates_link' => 'Güncelle',
      'warnings_pending' => 'İncelemeniz gereken değişiklikler var',
      'warnings_nil' => 'Gösterilecek uyarı yok',
      'warnings_link' => 'Göster',
      'core_build' => 'Altyapı sürümü',
      'event_log' => 'Olay günlüğü',
      'request_log' => 'Hatalı istek günlüğü',
      'app_birthday' => 'İlk aktiflik tarihi',
    ],
    'welcome' => [
      'widget_title_default' => 'Hoşgeldiniz',
      'welcome_back_name' => ':app yönetim paneline tekrar hoşgeldiniz Sayın :name.',
      'welcome_to_name' => ':app yönetim paneline hoşgeldiniz Sayın :name.',
      'first_sign_in' => 'Bu sizin ilk ziyaretiniz.',
      'last_sign_in' => 'En yakın giriş yaptığınız tarih',
      'view_access_logs' => 'Erişim günlüğüne göz at',
      'nice_message' => 'İyi çalışmalar dileriz!',
    ],
  ],
  'user' => [
    'name' => 'Yönetici',
    'list_title' => 'Yöneticileri Yönet',
    'new' => 'Yeni Yönetici',
    'first_name' => 'İsim',
    'last_name' => 'Soyisim',
    'full_name' => 'Tam Adı',
    'email' => 'Email',
    'role_field' => 'Roller',
    'role_comment' => 'Roller kullanıcı izinlerini tanımlar. Bu roller, izinler sekmesinden kullanıcı düzeyinde değiştirilebilir.',
    'groups' => 'Gruplar',
    'groups_comment' => 'Kullanıcının hangi gruba bağlı olduğunu belirleyin.',
    'avatar' => 'Avatar',
    'password' => 'Şifre',
    'password_confirmation' => 'Şifre (Tekrar)',
    'permissions' => 'İzinler',
    'account' => 'Hesap',
    'superuser' => 'Süper Kullanıcı',
    'superuser_comment' => 'Kullanıcıya her alanda yetki vermek için burayı işaretleyin.',
    'send_invite' => 'Email ile davet gönder',
    'send_invite_comment' => 'Kullanıcının email adresine davet göndermek için burayı işaretleyin',
    'delete_confirm' => 'Bu yöneticiyi silmek istiyor musunuz?',
    'return' => 'Yöneticiler listesine dön',
    'allow' => 'Yetki Var',
    'inherit' => 'Grup Yetkisi',
    'deny' => 'Yetki Yok',
    'activated' => 'Aktifleştirildi',
    'last_login' => 'Son giriş',
    'created_at' => 'Oluşturulma',
    'updated_at' => 'Güncellenme',
    'deleted_at' => 'Silinme',
    'show_deleted' => 'Silinenleri göster',
    'group' => [
      'name' => 'Grup',
      'name_comment' => 'Grup ismi, grup listesinde Yönetici Ekleme/Düzenleme formunda görüntülenecek.',
      'name_field' => 'Adı',
      'description_field' => 'Açıklama',
      'is_new_user_default_field_label' => 'Öntanımlı grup',
      'is_new_user_default_field_comment' => 'Yeni eklenen yöneticileri bu gruba dahil et',
      'code_field' => 'Grup kodu',
      'code_comment' => 'Grup kodunu yazın',
      'list_title' => 'Grupları Yönet',
      'new' => 'Yeni Yönetici Grubu',
      'delete_confirm' => 'Bu yönetici grubunu silmek istiyor musunuz?',
      'return' => 'Grup listesine dön',
      'users_count' => 'Kişiler',
    ],
    'role' => [
      'name' => 'Rol',
      'name_field' => 'İsim',
      'name_comment' => 'Rol ismi, Yönetici formundaki rol listesinde görüntülenir.',
      'description_field' => 'Açıklama',
      'code_field' => 'Kod',
      'code_comment' => 'API ile rol nesnesine erişmek istiyorsanız, eşsiz bir kod girin.',
      'list_title' => 'Rolleri Yönet',
      'new' => 'Yeni Rol',
      'delete_confirm' => 'Bu yönetici rolü silinsin mi?',
      'return' => 'Rol listesine dön',
      'users_count' => 'Kişiler',
    ],
    'preferences' => [
      'not_authenticated' => 'Ayarları görüntülemek veya düzenlemek için yetkili bir kullanıcı yok.',
    ],
    'trashed_hint_title' => 'Bu hesap silindi',
    'trashed_hint_desc' => 'Bu hesap silindi ve oturum açılamadı. Tekrar aktifleştirmek için sağ alt kısımdaki kullanıcıyı aktifleştir simgesine tıklayın.',
  ],
  'list' => [
    'default_title' => 'Liste',
    'search_prompt' => 'Arama...',
    'no_records' => 'Bu alan için görüntülenecek kayıt yok.',
    'missing_model' => ':class da kullanılan liste için model değeri tanımlanmamış.',
    'missing_column' => ':columns için sütun değeri tanımlanmamış.',
    'missing_columns' => ':class da kullanılan liste için sütun değeri tanımlanmamış.',
    'missing_definition' => 'Liste \':field\' için bir sütun değeri içermiyor.',
    'missing_parent_definition' => 'Liste davranışı \':definition\' tanımlaması için tanımlama bilgisi içermiyor.',
    'behavior_not_ready' => 'Liste oluşturulamadı, controller da makeLists() metodunu kontrol edin.',
    'invalid_column_datetime' => '\':column\' için sütun değeri DateTime nesnesi değil, Model kısmında $dates referansını unutmuş olabilir misiniz?',
    'pagination' => 'Gösterilen kayıtlar: :from-:to Toplam: :total',
    'first_page' => 'İlk sayfa',
    'last_page' => 'Son sayfa',
    'prev_page' => 'Önceki sayfa',
    'next_page' => 'Sonraki sayfa',
    'refresh' => 'Yenile',
    'updating' => 'Güncelleniyor...',
    'loading' => 'Yükleniyor...',
    'check' => 'Kontrol et',
    'delete_selected' => 'Seçili olanı sil',
    'delete_selected_empty' => 'Silinecek seçili kayıt bulunamadı.',
    'delete_selected_confirm' => 'Seçili kayıtları silmek istediğize emin misiniz?',
    'delete_selected_success' => 'Seçili kayıtlar başarıyla silindi.',
    'column_switch_true' => 'Evet',
    'column_switch_false' => 'Hayır',
  ],
  'fileupload' => [
    'default_prompt' => '%s e tıkla ya da bir dosya sürükleyin',
  ],
  'form' => [
    'create_title' => ':name Oluştur',
    'update_title' => ':name Düzenle',
    'preview_title' => ':name Görüntüle',
    'restore_success' => ':name geri yüklendi',
    'reset_success' => 'Sıfırlama başarılı',
    'missing_id' => 'Form kayıt ID\'si belirtilmedi.',
    'missing_model' => ':class da kullanılan form için model değeri tanımlanmamış.',
    'missing_definition' => 'Form \':field\' için bir sütun değeri içermiyor.',
    'action_confirm' => 'Emin misiniz?',
    'create' => 'Oluştur',
    'create_and_close' => 'Oluştur ve Kapat',
    'creating' => 'Oluşturuluyor...',
    'creating_name' => 'Oluşturuluyor :name...',
    'save' => 'Kaydet',
    'save_and_close' => 'Kaydet ve Kapat',
    'saving' => 'Kaydediliyor...',
    'saving_name' => 'Kaydediliyor :name...',
    'delete' => 'Sil',
    'deleting' => 'Siliniyor...',
    'confirm_delete' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'confirm_delete_multiple' => 'Seçilen kayıtları silmek istediğinize emin misiniz?',
    'deleting_name' => 'Siliniyor :name...',
    'restore' => 'Geri yükle',
    'restoring' => 'Geri yükleniyor',
    'confirm_restore' => 'Bu kaydı geri yüklemek istediğinize emin misiniz?',
    'reset_default' => 'Ön Tanımlı Ayarlara Dön!',
    'resetting' => 'İşleniyor',
    'resetting_name' => ':name İşleniyor',
    'undefined_tab' => 'Çeşitli',
    'field_off' => 'Kapalı',
    'field_on' => 'Açık',
    'add' => 'Ekle',
    'apply' => 'Uygula',
    'cancel' => 'İptal',
    'close' => 'Kapat',
    'confirm' => 'Onayla',
    'reload' => 'Yenile',
    'complete' => 'Tamamla',
    'ok' => 'Tamam',
    'or' => 'veya',
    'confirm_tab_close' => 'Bu sekmeyi kapatmak istediğinize emin misiniz? Kaydedilmemiş değişiklikleri kaybedeceksiniz.',
    'behavior_not_ready' => 'Form oluşturulamadı, controller da initForm() metodunu kontrol edin.',
    'preview_no_files_message' => 'Dosyalar yüklenmedi',
    'preview_no_media_message' => 'Seçilmiş medya yok.',
    'preview_no_record_message' => 'Seçili kayıt yok.',
    'select' => 'Seç',
    'select_all' => 'hepsini seç',
    'select_none' => 'hiçbir şey seçilmedi',
    'insert_row' => 'Kayıt Ekle',
    'insert_row_below' => 'Alt Satıra Kayıt Ekle',
    'delete_row' => 'Kayıt Sil',
    'concurrency_file_changed_title' => 'Dosya değiştirildi',
    'concurrency_file_changed_description' => 'Düzenlemeye çalıştığınız dosya disk üzerinde başka bir kullanıcı tarafından değiştirilmiş. Dosyayı yeniden yükleyebilir ve değişiklikleri kaybedersiniz ya da diskteki dosyayı kendi düzenlediğiniz hali ile değiştirebilirsiniz.',
    'return_to_list' => 'Listeye dön',
  ],
  'recordfinder' => [
    'find_record' => 'Kayıt Bul',
    'cancel' => 'İptal',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'İlişki \':config\' için bir yapılandırma ayarı içermiyor.',
    'missing_definition' => 'İlişki \':field\' için bir sütun değeri içermiyor.',
    'missing_model' => ':class da kullanılan ilişki için model değeri tanımlanmamış.',
    'invalid_action_single' => 'Bu işlem tekli ilişkilendirme için kullanılamaz.',
    'invalid_action_multi' => 'Bu işlem çoklu ilişkilendirme için kullanılamaz.',
    'help' => 'Eklemek için bir öğeye tıklayın',
    'add' => 'Ekle',
    'link_selected' => 'Seçileni bağla',
    'cancel' => 'İptal',
    'close' => 'Kapat',
    'create' => 'Oluştur',
    'update' => 'Güncelle',
    'preview' => 'Önizle',
    'remove_name' => ':name Kaldır',
    'delete_name' => ':name Sil',
    'link' => 'Bağla',
    'unlink_name' => ':name bağlamasını kaldır',
  ],
  'reorder' => [
    'default_title' => 'Kayıtları yeniden sırala',
    'no_records' => 'Sıralamak için bir kayıt bulunamadı.',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'ID\'si :id olan \':class\' Model bulunamadı.',
    'missing_id' => 'Aranılan model için ID belirtilmedi.',
    'missing_relation' => '\':class\' Model\'i \':relation\' ilişkisi için tanımlanmamış.',
    'missing_method' => '\':class\' Model\'i \':method\' isimli bir metod içermiyor.',
    'invalid_class' => ':class da tanımlanan :model Model\'i geçerli değil, \\Model sınıfını extend almalı.',
    'mass_assignment_failed' => '\':attribute\' Model değeri için toplu atama başarısız.',
  ],
  'warnings' => [
    'tips' => 'Sistem ayar ipuçları',
    'tips_description' => 'Sistemin düzgün çalışabilmesi için dikkat etmeniz gereken sorunlar var.',
  ],
  'editor' => [],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => 'Ayarlarım',
    'menu_description' => 'Yönetim hesabı ile ilgili ayarlar',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => 'Accent color',
  ],
  'backend_preferences' => [],
  'access_log' => [],
  'filter' => [
    'all' => 'tümü',
    'options_method_not_exists' => ':model modelinde :method() metodu bulunmalı ve \':filter\' filtresi için uygun seçenekleri döndermelidir.',
    'date_all' => 'tüm periyotlar',
    'number_all' => 'Tüm numaralar',
  ],
  'import_export' => [
    'row' => 'Satır :row',
    'export_error' => 'Dışarı aktarma hatası',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Batı Avrupa)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Merkez Avrupa)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, Güney Avrupa)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, Kuzey Avrupa)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Kril)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arapça)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Yunanca)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, İbranice)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Türkçe)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Norveççe)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai Dili)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltık Rim)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic Dili)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Euro işareti revizyonlu Batı Avrupa)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Medyaları düzenleyebilsin',
  ],
  'mediafinder' => [
    'label' => 'Medya Bulucu',
    'default_prompt' => 'Bir medya öğesi bulmak için %s butonuna tıklayın',
  ],
  'media' => [
    'menu_label' => 'Medya',
    'upload' => 'Yükle',
    'move' => 'Taşı',
    'delete' => 'Sil',
    'add_folder' => 'Yeni Klasör',
    'search' => 'Ara',
    'display' => 'Görüntüle',
    'filter_everything' => 'Her şey',
    'filter_images' => 'Resimler',
    'filter_video' => 'Video',
    'filter_audio' => 'Ses',
    'filter_documents' => 'Belgeler',
    'library' => 'Kütüphane',
    'size' => 'Boyut',
    'title' => 'Başlık',
    'last_modified' => 'Son düzenleme tarihi',
    'public_url' => 'Public URL',
    'click_here' => 'Buraya tıkla',
    'thumbnail_error' => 'Önizleme oluşturulurken hata.',
    'return_to_parent' => 'Ana klasöre geri dön',
    'return_to_parent_label' => 'Yukarı git..',
    'nothing_selected' => 'Hiçbir şey seçilmedi.',
    'multiple_selected' => 'Birden fazla öğe seçildi.',
    'uploading_file_num' => ':number adet dosya yükleniyor...',
    'uploading_complete' => 'Yükleme tamamlandı',
    'uploading_error' => 'Yükleme hatası',
    'type_blocked' => 'Seçilen dosya türünü güvenlik nedenleriyle izin verilmiyor.',
    'order_by' => 'Sırala',
    'direction' => 'Yön',
    'direction_asc' => 'Artan',
    'direction_desc' => 'Azalan',
    'folder' => 'Klasör',
    'no_files_found' => 'İsteğiniz doğrultusunda hiçbir dosya bulunamadı.',
    'delete_empty' => 'Lütfen silinecek öğeleri seçiniz.',
    'delete_confirm' => 'Bu öğe veya öğeleri gerçekten silmek istediğinize emin misiniz?',
    'error_renaming_file' => 'Öğeyi yeniden isimlendirirken hata.',
    'new_folder_title' => 'Yeni Klasör',
    'folder_name' => 'Klasör ismi',
    'error_creating_folder' => 'Klasör oluştururken hata',
    'folder_or_file_exist' => 'Belirtilen isimde bir klasör ya da dosya zaten mevcut.',
    'move_empty' => 'Lütfen taşınacak öğeleri seçiniz.',
    'move_popup_title' => 'Dosyaları veya klasörleri taşı',
    'move_destination' => 'Hedef klasör',
    'please_select_move_dest' => 'Lütfen hedef klasörü seçiniz.',
    'move_dest_src_match' => 'Lütfen başka bir hedef klasör seçiniz.',
    'empty_library' => 'Medya kütüphanesi boş. Başlamak için dosya yükleyin yada klasör oluşturun.',
    'insert' => 'Ekle',
    'crop_and_insert' => 'Kırp ve Ekle',
    'select_single_image' => 'Lütfen sadece bir tane resim seçiniz.',
    'selection_not_image' => 'Seçili öğe bir resim değil.',
    'restore' => 'Tüm değişiklikleri geri al',
    'resize' => 'Yeniden boyutlandırma...',
    'selection_mode_normal' => 'Normal',
    'selection_mode_fixed_ratio' => 'Sabit oran',
    'selection_mode_fixed_size' => 'Sabit boyut',
    'height' => 'Yükseklik',
    'width' => 'Genişlik',
    'selection_mode' => 'Seçim modu',
    'resize_image' => 'Resimi yeniden boyutlandırs',
    'image_size' => 'Resim boyutu:',
    'selected_size' => 'Seçili:',
  ],
];
