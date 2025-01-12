<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Il tipo di campo :type non è valido.',
    'options_method_not_exists' => 'La classe :model deve definire un metodo :method() che ritorni le opzioni per il campo ":field".',
  ],
  'widget' => [
    'not_registered' => 'Nessun widget \':name\' è stato registrato',
    'not_bound' => 'Nessun widget \':name\' è stato legato al controller',
  ],
  'page' => [
    'untitled' => 'Senza titolo',
    'access_denied' => [
      'label' => 'Accesso negato',
      'help' => 'Non hai le autorizzazioni necessarie per accedere a questa pagina.',
      'cms_link' => 'Ritorna al pannello di controllo',
    ],
  ],
  'partial' => [
    'not_found_name' => 'La vista parziale \':name\' non è stata trovata.',
  ],
  'account' => [
    'sign_out' => 'Esci',
    'login_placeholder' => 'login',
    'password_placeholder' => 'password',
    'enter_email' => 'Inserisci in tuo indirizzo e-mail',
    'email_placeholder' => 'email',
    'apply' => 'Applica',
    'cancel' => 'Annulla',
    'delete' => 'Elimina',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Dashboard',
    'widget_inspector_title' => 'Configurazione widget',
    'widget_inspector_description' => 'Configura il widget',
    'widget_columns_label' => 'Larghezza :columns',
    'widget_columns_description' => 'La larghezza del widget, un numero compreso tra 1 e 10.',
    'widget_columns_error' => 'La larghezza del widget deve essere un numero compreso tra 1 e 10.',
    'columns' => '{1} colonna|[2,Inf] colonne',
    'widget_new_row_label' => 'Forza nuova riga',
    'widget_new_row_description' => 'Inserisci il widget su una nuova riga.',
    'widget_title_label' => 'Titolo del widget',
    'widget_title_error' => 'Il titolo del widget è obbligatorio.',
    'reset_layout_success' => 'Il layout è stato reimpostato',
    'make_default_success' => 'Il layout corrente è ora il predefinito',
    'status' => [
      'widget_title_default' => 'Stato del sistema',
      'update_available' => '{0} aggiornamenti disponibili!|{1} aggiornamento disponibile!|[2,Inf] aggiornamenti disponibili!',
      'updates_pending' => 'Aggiornamenti software in attesa',
      'updates_nil' => 'Il software è aggiornato',
      'updates_link' => 'Aggiorna',
      'warnings_pending' => 'Alcuni problemi hanno bisogno di attenzione',
      'warnings_nil' => 'Nessun avviso da visualizzare',
      'warnings_link' => 'Visualizza',
      'core_build' => 'Build di sistema',
      'event_log' => 'Log eventi',
      'request_log' => 'Log richieste',
      'app_birthday' => 'Online dal',
    ],
    'welcome' => [
      'widget_title_default' => 'Benvenuto',
      'welcome_back_name' => 'Bentornato su :app, :name.',
      'welcome_to_name' => 'Benvenuto su :app, :name.',
      'first_sign_in' => 'Questa è la prima volta che hai eseguito l\'accesso.',
      'last_sign_in' => 'Il tuo ultimo accesso è stato ',
      'view_access_logs' => 'Visualizza log accessi',
      'nice_message' => 'Buona giornata!',
    ],
  ],
  'user' => [
    'name' => 'Amministratore',
    'list_title' => 'Gestisci amministratori',
    'new' => 'Nuovo amministratore',
    'first_name' => 'Nome',
    'last_name' => 'Cognome',
    'full_name' => 'Nome completo',
    'email' => 'Indirizzo e-mail',
    'groups' => 'Gruppi',
    'groups_comment' => 'Seleziona i gruppi a cui appartiene l\'utente.',
    'avatar' => 'Avatar',
    'password' => 'Password',
    'password_confirmation' => 'Conferma password',
    'permissions' => 'Autorizzazioni',
    'account' => 'Account',
    'superuser' => 'Super User',
    'superuser_comment' => 'Seleziona per consentire all\'utente di accedere a tutte le aree.',
    'send_invite' => 'Invia invito tramite e-mail',
    'send_invite_comment' => 'Invia un messaggio di benvenuto contenente le credenziali per l\'accesso.',
    'delete_confirm' => 'Vuoi davvero eliminare questo amministratore?',
    'return' => 'Ritorna alla lista degli amministratori',
    'allow' => 'Consenti',
    'inherit' => 'Eredita',
    'deny' => 'Nega',
    'group' => [
      'name' => 'Gruppo',
      'name_comment' => 'Il nome viene visualizzato nell\'elenco dei gruppi del form di Creazione/Modifica Amministratore ',
      'name_field' => 'Nome',
      'description_field' => 'Descrizione',
      'is_new_user_default_field_label' => 'Gruppo predefinito',
      'is_new_user_default_field_comment' => 'Aggiungi i nuovi amministratori a questo gruppo per impostazione predefinita.',
      'code_field' => 'Codice',
      'code_comment' => 'Inserisci un codice univoco se vuoi accedere a questo elementro tramite API.',
      'list_title' => 'Gestisci gruppi',
      'new' => 'Nuovo gruppo',
      'delete_confirm' => 'Vuoi davvero eliminare questo gruppo amministratore?',
      'return' => 'Ritorna alla lista dei gruppi',
      'users_count' => 'Utenti',
    ],
    'preferences' => [
      'not_authenticated' => 'Non c\'è nessun utente autenticato per cui caricare o salvare le preferenze.',
    ],
  ],
  'list' => [
    'default_title' => 'Elenco',
    'search_prompt' => 'Cerca...',
    'no_records' => 'Nessun risultato trovato.',
    'missing_model' => 'L\'elenco utilizzato nella classe :class non ha un modello definito.',
    'missing_column' => 'Non ci sono colonne definite per :columns.',
    'missing_columns' => 'L\'elenco utilizzato nella classe :class non ha un elenco di colonne definito.',
    'missing_definition' => 'L\'elenco non contiene una colonna per il campo \':field\'.',
    'missing_parent_definition' => 'L\\\'elenco non contiene una definizione per \':definition\'.',
    'behavior_not_ready' => 'Il comportamento "elenco" non è stato inizializzato, controlla di aver chiamato il metodo makeLists() nel controller.',
    'invalid_column_datetime' => 'Il valore della colonna \':column\' non è un oggetto di tipo DateTime, hai dimenticato un riferimento a $dates nel modello?',
    'pagination' => 'Record visualizzati: :from-:to di :total',
    'prev_page' => 'Pagina precedente',
    'next_page' => 'Pagina successiva',
    'refresh' => 'Ricarica',
    'updating' => 'Aggiornamento in corso...',
    'loading' => 'Caricamento...',
    'check' => 'Spunta',
    'create_button' => 'Crea :name',
    'delete_selected' => 'Elimina selezionati',
    'delete_selected_empty' => 'Non hai selezionato nessun record da eliminare.',
    'delete_selected_confirm' => 'Elimina i record selezionati?',
    'delete_selected_success' => 'I record selezionati sono stati eliminati con successo.',
    'column_switch_true' => 'Sì',
    'column_switch_false' => 'No',
  ],
  'fileupload' => [
    'default_prompt' => 'Fai clic su %s o trascina un file qui per eseguire il caricamento',
  ],
  'form' => [
    'create_title' => 'Crea :name',
    'update_title' => 'Modifica :name',
    'preview_title' => 'Anteprima :name',
    'reset_success' => 'Reimpostazione completata',
    'missing_id' => 'L\'ID del record non è stato specificato.',
    'missing_model' => 'Il form utilizzato nella classe :class non ha un modello definito.',
    'missing_definition' => 'Il form non contiene il campo \':field\'.',
    'action_confirm' => 'Sei sicuro?',
    'create' => 'Crea',
    'create_and_close' => 'Crea e chiudi',
    'creating' => 'Creazione in corso...',
    'creating_name' => 'Creazione :name in corso...',
    'save' => 'Salva',
    'save_and_close' => 'Salva e chiudi',
    'saving' => 'Salvataggio in corso...',
    'saving_name' => 'Salvataggio :name in corso...',
    'delete' => 'Elimina',
    'deleting' => 'Eliminazione in corso...',
    'confirm_delete' => 'Elimina record?',
    'confirm_delete_multiple' => 'Elimina i record selezionati?',
    'deleting_name' => 'Eliminazione :name in corso...',
    'reset_default' => 'Ripristina predefiniti',
    'resetting' => 'Ripristino in corso',
    'resetting_name' => 'Ripristino :name in corso',
    'undefined_tab' => 'Varie',
    'field_off' => 'Off',
    'field_on' => 'On',
    'add' => 'Aggiungi',
    'apply' => 'Applica',
    'cancel' => 'Annulla',
    'close' => 'Chiudi',
    'confirm' => 'Conferma',
    'reload' => 'Ricarica',
    'complete' => 'Completo',
    'ok' => 'OK',
    'or' => 'o',
    'confirm_tab_close' => 'Vuoi davvero chiudere il tab? Le modifiche non salvate andranno perse.',
    'behavior_not_ready' => 'Il comportamento del form non è stato inizializzato, verifica di aver chiamato il metodo initForm() nel controller.',
    'preview_no_files_message' => 'Non ci sono file caricati.',
    'preview_no_record_message' => 'Nessun record selezionato.',
    'select' => 'Seleziona',
    'select_all' => 'seleziona tutto',
    'select_none' => 'deseleziona tutto',
    'insert_row' => 'Inserisci riga',
    'insert_row_below' => 'Inserisci riga sotto',
    'delete_row' => 'Elimina riga',
    'concurrency_file_changed_title' => 'Il file è stato cambiato',
    'concurrency_file_changed_description' => 'Il file che stavi modificando è stato cambiato da un altro utente. Puoi ricaricare il file e perdere le tue modifiche oppure sovrascrivere il file sul disco.',
    'return_to_list' => 'Ritorna all\'elenco',
  ],
  'recordfinder' => [
    'find_record' => 'Trova record',
  ],
  'relation' => [
    'missing_config' => 'La relazione non ha nessuna configurazione per \':config\'.',
    'missing_definition' => 'La relazione non contiene una definizione per il campo \':field\'.',
    'missing_model' => 'La relazione utilizzata nella classe :class non ha un modello definito.',
    'invalid_action_single' => 'L\'azione non può essere eseguita su una relazione singola.',
    'invalid_action_multi' => 'L\'azione non può essere eseguita su una relazione multipla.',
    'help' => 'Fai clic su un elemento per aggiungere',
    'add' => 'Aggiungi',
    'link_selected' => 'Collega selezionati',
    'cancel' => 'Annulla',
    'close' => 'Chiudi',
    'create' => 'Crea',
    'update' => 'Aggiorna',
    'preview' => 'Visualizza',
    'remove_name' => 'Rimuovi :name',
    'delete_name' => 'Elimina :name',
    'link' => 'Collega',
    'unlink_name' => 'Scollega :name',
  ],
  'reorder' => [
    'default_title' => 'Riordina record',
    'no_records' => 'Non ci sono record disponibili per ordinare.',
  ],
  'model' => [
    'name' => 'Modello',
    'not_found' => 'Nessun modello \':class\' con ID :id trovato.',
    'missing_id' => 'Nessun ID specificato per la ricerca.',
    'missing_relation' => 'Il modello \':class\' non contiene una definizione per la relazione \':relation\'.',
    'missing_method' => 'Il modello \':class\' non contiene un metodo \':method\'.',
    'invalid_class' => 'Il modello :model utilizzato nella classe :class non è valido, deve ereditare la classe \\Model.',
    'mass_assignment_failed' => 'Assegnazione massiva fallita per l\'attributo \':attribute\' del modello.',
  ],
  'warnings' => [
    'tips' => 'Suggerimenti per la configurazione del sistema',
    'tips_description' => 'Ci sono elementi a cui è necessario prestare attenzione al fine di configurare il sistema in maniera corretta.',
  ],
  'editor' => [],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => 'Impostazioni personali',
    'menu_description' => 'Impostazioni legate al tuo account amministratore',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => 'Accent color',
  ],
  'backend_preferences' => [],
  'access_log' => [],
  'filter' => [
    'all' => 'tutto',
    'options_method_not_exists' => 'Il modello :model deve definire un metodo :method() che ritorni le opzioni per il filtro \':filter\'.',
    'date_all' => 'tutte',
  ],
  'import_export' => [
    'export_error' => 'Errore di esportazione',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latino-1, Europa Occidentale)',
      'iso_8859_2' => 'ISO-8859-2 (Latino-2, Europa Centrale)',
      'iso_8859_3' => 'ISO-8859-3 (Latino-3, Europa Meridionale)',
      'iso_8859_4' => 'ISO-8859-4 (Latino-4, Europa Settentrionale)',
      'iso_8859_5' => 'ISO-8859-5 (Latino, Cirillico)',
      'iso_8859_6' => 'ISO-8859-6 (Latinp, Arabo)',
      'iso_8859_7' => 'ISO-8859-7 (Latino, Greco)',
      'iso_8859_8' => 'ISO-8859-8 (Latino, Ebraico)',
      'iso_8859_0' => 'ISO-8859-9 (Latino-5, Turco)',
      'iso_8859_10' => 'ISO-8859-10 (Latino-6, Nordico)',
      'iso_8859_11' => 'ISO-8859-11 (Latino, Thai)',
      'iso_8859_13' => 'ISO-8859-13 (Latino-7, Baltico)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtico)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Revisione di Europa Occidentale con il simbolo dell\'euro)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Gestisci elementi multimediali',
  ],
  'mediafinder' => [
    'label' => 'Media Finder',
    'default_prompt' => 'Fai clic sul pulsante %s per trovare un elemento multimediale',
  ],
  'media' => [
    'menu_label' => 'Elementi multimediali',
    'upload' => 'Carica',
    'move' => 'Sposta',
    'delete' => 'Elimina',
    'add_folder' => 'Aggiungi cartella',
    'search' => 'Cerca',
    'display' => 'Visualizza',
    'filter_everything' => 'Tutto',
    'filter_images' => 'Immagini',
    'filter_video' => 'Video',
    'filter_audio' => 'Audio',
    'filter_documents' => 'Documenti',
    'library' => 'Libreria',
    'size' => 'Dimensione',
    'title' => 'Titolo',
    'last_modified' => 'Ultima modifica',
    'public_url' => 'URL pubblico',
    'click_here' => 'Fai clic qui',
    'thumbnail_error' => 'Errore durante la generazione dell\'anteprima.',
    'return_to_parent' => 'Ritorna alla cartella superiore',
    'return_to_parent_label' => 'Torna su ..',
    'nothing_selected' => 'Nessun elemento selezionato.',
    'multiple_selected' => 'Elementi multipli selezionati.',
    'uploading_file_num' => 'Caricamento in corso di :number file(s)...',
    'uploading_complete' => 'Caricamento completato',
    'uploading_error' => 'Caricamento fallito',
    'type_blocked' => 'Il tipo di file utilizzato è bloccato per questioni di sicurezza.',
    'order_by' => 'Ordina per',
    'folder' => 'Cartella',
    'no_files_found' => 'Nessun file corrisponde alla tua richiesta.',
    'delete_empty' => 'Seleziona elementi da eliminare.',
    'delete_confirm' => 'Vuoi davvero eliminare gli elementi selezionati?',
    'error_renaming_file' => 'Errore durante la rinominazione dell\'elemento',
    'new_folder_title' => 'Nuova cartella',
    'folder_name' => 'Nome della cartella',
    'error_creating_folder' => 'Errore durante la creazione della cartella',
    'folder_or_file_exist' => 'Una cartella o un file con il nome specificato è già esistente.',
    'move_empty' => 'Selezione elementi da spostare.',
    'move_popup_title' => 'Sposta file o cartelle',
    'move_destination' => 'Cartella di destinazione',
    'please_select_move_dest' => 'Seleziona una cartella di destinazione.',
    'move_dest_src_match' => 'Seleziona un\'altra cartella di destinazione.',
    'empty_library' => 'La libreria è vuota. Carica dei files o crea delle cartelle per iniziare.',
    'insert' => 'Inserisci',
    'crop_and_insert' => 'Ritaglia e inserisci',
    'select_single_image' => 'Seleziona una singola immagine.',
    'selection_not_image' => 'L\'elemento selezionato non è un\'immagine.',
    'restore' => 'Annulla tutte le modifiche',
    'resize' => 'Ridimensiona...',
    'selection_mode_normal' => 'Normale',
    'selection_mode_fixed_ratio' => 'Rapporto fisso',
    'selection_mode_fixed_size' => 'Dimensione fissa',
    'height' => 'Altezza',
    'width' => 'Larghezza',
    'selection_mode' => 'Metodo di selezione',
    'resize_image' => 'Ridimensiona immagine',
    'image_size' => 'Dimensione immagine:',
    'selected_size' => 'Selezionati:',
  ],
];
