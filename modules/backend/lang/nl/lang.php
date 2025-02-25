<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Ongeldig type veld: :type.',
    'options_method_invalid_model' => 'Het attribuut \':field\' levert geen geldig model op. Probeer de opties methode expliciet te specifieren voor modelklasse :model.',
    'options_method_not_exists' => 'De modelklasse :model moet de methode :method() definiëren met daarin opties voor het veld ":field".',
    'colors_method_not_exists' => 'De modelklasse :model moet de methode :method() definiëren met daarin html HEX kleurcodes voor het veld ":field".',
  ],
  'widget' => [
    'not_registered' => 'Een widget met klassenaam \':name\' is niet geregistreerd',
    'not_bound' => 'Een widget met klassenaam \':name\' is niet gekoppeld aan de controller',
  ],
  'page' => [
    'untitled' => 'Naamloos',
    'not_found' => [
      'label' => 'Sorry, we kunnen deze pagina niet meer vinden.',
      'help' => 'We hebben ons best gedaan, maar het lijkt erop dat deze pagina niet (meer) bestaat of misschien verhuisd is.',
      'back_link' => 'Terug naar de homepagina.',
    ],
    'access_denied' => [
      'label' => 'Toegang geweigerd',
      'help' => 'Je hebt niet de benodigde rechten om deze pagina te bekijken.',
      'cms_link' => 'Terug naar CMS',
    ],
    'no_database' => [
      'label' => 'Database niet gevonden',
      'help' => 'Een database is nodig om toegang te krijgen tot de beheeromgeving. Controleer of de database juist is geconfigureerd en probeer het opnieuw.',
      'cms_link' => 'Terug naar homepagina',
    ],
  ],
  'partial' => [
    'not_found_name' => 'Het sjabloon (partial) \':name\' is niet gevonden.',
    'invalid_name' => 'Ongeldige sjabloon (partial) naam: :name.',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Ongeldige AJAX verzoek met naam: :name.',
    'not_found' => 'Het AJAX verzoek \':name\' kon niet worden gevonden.',
  ],
  'account' => [
    'impersonate' => 'Inloggen als',
    'impersonate_confirm' => 'Je gaat inloggen als deze gebruiker. Weet je het zeker? Keer terug door uit te loggen.',
    'impersonate_success' => 'Je bent nu ingelogd als deze gebruiker',
    'impersonate_working' => 'Inloggen als...',
    'impersonating' => 'Inloggen als :full_name',
    'stop_impersonating' => 'Terugkeren',
    'signed_in_as' => 'Ingelogd als :full_name',
    'sign_out' => 'Uitloggen',
    'login_prompt' => 'Welkom terug! Log in op je account om door te gaan.',
    'login_placeholder' => 'Gebruikersnaam',
    'password_placeholder' => 'Wachtwoord',
    'enter_email' => 'Vul e-mailadres in',
    'email_placeholder' => 'E-mailadres',
    'apply' => 'Toepassen',
    'cancel' => 'Annuleren',
    'delete' => 'Verwijderen',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Overzicht',
    'widget_inspector_title' => 'Widget configuratie',
    'widget_inspector_description' => 'Configureer de rapportage widget',
    'widget_columns_label' => 'Breedte :columns',
    'widget_columns_description' => 'De widget breedte, een getal tussen 1 en 10.',
    'widget_columns_error' => 'Voer een getal tussen 1 en 10 in als widget breedte.',
    'columns' => '{1} kolom|[2,Inf] kolommen',
    'widget_new_row_label' => 'Forceer nieuwe rij',
    'widget_new_row_description' => 'Plaats de widget in een nieuwe rij.',
    'widget_title_label' => 'Widget titel',
    'widget_title_error' => 'Een widget titel is verplicht.',
    'reset_layout_success' => 'Layout is ge-reset',
    'make_default_success' => 'Huidige layout is nu als standaard ingesteld.',
    'collapse_all' => 'Alles inklappen',
    'expand_all' => 'Alles uitklappen',
    'status' => [
      'widget_title_default' => 'Systeemstatus',
      'update_available' => '{0} updates beschikbaar!|{1} update beschikbaar!|[2,Inf] updates beschikbaar!',
      'updates_pending' => 'Er staan updates klaar',
      'updates_nil' => 'De software is up-to-date',
      'updates_link' => 'Updates installeren',
      'warnings_pending' => 'Sommige problemen hebben aandacht nodig',
      'warnings_nil' => 'Alles OK',
      'warnings_link' => 'Weergeven',
      'core_build' => 'Systeem build',
      'event_log' => 'Gebeurtenis logboek',
      'request_log' => 'Verzoek logboek',
      'app_birthday' => 'Online sinds',
    ],
    'welcome' => [
      'widget_title_default' => 'Welkom',
      'welcome_back_name' => 'Welkom terug bij :app, :name.',
      'welcome_to_name' => 'Welkom bij :app, :name.',
      'first_sign_in' => 'Dit is de eerste keer dat je bent ingelogd.',
      'last_sign_in' => 'Je laatste login was',
      'view_access_logs' => 'Toon toegangslogboek',
      'nice_message' => 'Een fijne dag!',
    ],
  ],
  'user' => [
    'name' => 'Beheerder',
    'list_title' => 'Beheer beheerders',
    'new' => 'Nieuwe beheerder',
    'first_name' => 'Voornaam',
    'last_name' => 'Achternaam',
    'full_name' => 'Volledige naam',
    'email' => 'E-mailadres',
    'role_field' => 'Rol',
    'role_comment' => 'Rollen definiëren gebruikerspermissies die overschreven kunnen worden op gebruikersniveau (zie tabblad Rechten).',
    'groups' => 'Groepen',
    'groups_comment' => 'Selecteer de groepen waar deze gebruiker bij hoort.',
    'avatar' => 'Avatar',
    'password' => 'Wachtwoord',
    'password_confirmation' => 'Bevestig wachtwoord',
    'permissions' => 'Rechten',
    'account' => 'Account',
    'superuser' => 'Supergebruiker',
    'superuser_comment' => 'Vink deze optie aan om de gebruiker volledige rechten tot het systeem te geven.',
    'send_invite' => 'Stuur uitnodiging per e-mail',
    'send_invite_comment' => 'Vink deze optie aan om de gebruiker een uitnodiging per e-mail te sturen',
    'delete_confirm' => 'Weet je zeker dat je deze beheerder wilt verwijderen?',
    'return' => 'Terug naar het beheerdersoverzicht',
    'allow' => 'Toestaat',
    'inherit' => 'Overerven',
    'deny' => 'Weigeren',
    'activated' => 'Geactiveerd',
    'last_login' => 'Laatste login',
    'created_at' => 'Aangemaakt op',
    'updated_at' => 'Gewijzigd op',
    'deleted_at' => 'Verwijderd op',
    'show_deleted' => 'Toon verwijderd',
    'group' => [
      'name' => 'Groep',
      'name_field' => 'Naam',
      'name_comment' => 'De naam die wordt weergegeven in de groepenlijst bij het aanmaken of bewerken van een beheerder.',
      'description_field' => 'Omschrijving',
      'is_new_user_default_field_label' => 'Standaard groep',
      'is_new_user_default_field_comment' => 'Voeg nieuwe beheerders automatisch toe aan deze groep.',
      'code_field' => 'Code',
      'code_comment' => 'Voer een unieke code in als je deze met de API wilt gebruiken.',
      'list_title' => 'Beheer groepen',
      'new' => 'Nieuwe beheerdersgroep',
      'delete_confirm' => 'Weet je zeker dat je deze beheerdersgroep wilt verwijderen?',
      'return' => 'Terug naar het groepenoverzicht',
      'users_count' => 'Gebruikers',
    ],
    'role' => [
      'name' => 'Rol',
      'name_field' => 'Naam',
      'name_comment' => 'De naam wordt weergegeven in de rollenlijst in het Beheerders formulier.',
      'description_field' => 'Omschrijving',
      'code_field' => 'Code',
      'code_comment' => 'Voer een unieke code in als je deze met de API wilt gebruiken.',
      'list_title' => 'Beheer rollen',
      'new' => 'Nieuwe rol',
      'delete_confirm' => 'Verwijder deze beheerdersrol?',
      'return' => 'Terug naar het rollenoverzicht',
      'users_count' => 'Gebruikers',
    ],
    'preferences' => [
      'not_authenticated' => 'Er is geen geauthenticeerde gebruiker om gegevens voor te laden of op te slaan.',
    ],
    'trashed_hint_title' => 'Dit account is verwijderd',
    'trashed_hint_desc' => 'Dit account is verwijderd en kan dus niet meer op ingelogd worden. Klik op het icoontje rechts onderin als je het account te herstellen.',
  ],
  'list' => [
    'default_title' => 'Lijst',
    'search_prompt' => 'Zoeken...',
    'no_records' => 'Er zijn geen resultaten gevonden.',
    'missing_model' => 'Geen model opgegeven voor het gedrag (behavior) van de lijst gebruikt in :class.',
    'missing_column' => 'Er zijn geen kolomdefinities voor :columns.',
    'missing_columns' => 'De gebruikte lijst in :class heeft geen kolommen gedefineerd.',
    'missing_definition' => 'De behavior van de lijst bevat geen kolom voor \':field\'.',
    'missing_parent_definition' => 'De lijst behavior bevat geen definitie voor \':definition\'.',
    'behavior_not_ready' => 'Behavior van de lijst is niet geladen. Controleer of makeLists() in de controller is aangeroepen.',
    'invalid_column_datetime' => 'De waarde van kolom \':column\' is geen DateTime object, mist er een $dates referentie in het Model?',
    'pagination' => 'Getoonde resultaten: :from-:to van :total',
    'first_page' => 'Eerste pagina',
    'last_page' => 'Laatste pagina',
    'prev_page' => 'Vorige pagina',
    'next_page' => 'Volgende pagina',
    'refresh' => 'Vernieuwen',
    'updating' => 'Bijwerken...',
    'loading' => 'Laden...',
    'check' => 'Ingeschakeld',
    'create_button' => 'Nieuwe :name',
    'delete_selected' => 'Verwijder geselecteerde',
    'delete_selected_empty' => 'Geen geselecteerde records om te verwijderen.',
    'delete_selected_confirm' => 'Verwijder geselecteerde records?',
    'delete_selected_success' => 'De geselecteerde records zijn succesvol verwijderd.',
    'column_switch_true' => 'Ja',
    'column_switch_false' => 'Nee',
  ],
  'object_list' => [
    'prop_cant_be_empty' => 'Eigenschap :property mag niet leeg zijn',
    'key_value_exists' => 'Waarde is reeds gedefinieerd: :property_value',
  ],
  'fileupload' => [],
  'form' => [
    'create_title' => 'Nieuwe :name',
    'update_title' => 'Bewerk :name',
    'preview_title' => 'Bekijk :name',
    'restore_success' => ':name is succesvol hersteld',
    'reset_success' => 'Resetten voltooid',
    'missing_id' => 'Record ID van het formulier is niet opgegeven.',
    'missing_tab' => 'Geldige tab definitie ontbreekt.',
    'missing_model' => 'Geen model opgegeven voor het gedrag (behavior) van het formulier gebruikt in :class.',
    'missing_definition' => 'Het gedrag (behavior) van het formulier bevat geen kolom voor \':field\'.',
    'action_confirm' => 'Weet je het zeker?',
    'create' => 'Maken',
    'create_and_close' => 'Maken en sluiten',
    'creating' => 'Maken...',
    'creating_name' => ':name maken...',
    'save' => 'Opslaan',
    'save_and_close' => 'Opslaan en sluiten',
    'saving' => 'Opslaan...',
    'saving_name' => ':name opslaan...',
    'delete' => 'Verwijderen',
    'deleting' => 'Verwijderen...',
    'confirm_delete' => 'Weet je zeker dat je dit record wilt verwijderen?',
    'confirm_delete_multiple' => 'Weet je zeker dat je de geselecteerde records wilt verwijderen?',
    'deleting_name' => ':name verwijderen...',
    'restore' => 'Herstellen',
    'restoring' => 'Herstellen...',
    'confirm_restore' => 'Weet je zeker dat je dit record wil herstellen?',
    'reset_default' => 'Terug naar standaard instellingen',
    'resetting' => 'Bezig met terugzetten',
    'resetting_name' => ':name terugzetten',
    'undefined_tab' => 'Overig',
    'field_off' => 'Uit',
    'field_on' => 'Aan',
    'add' => 'Toevoegen',
    'apply' => 'Toepassen',
    'insert' => 'Invoegen',
    'cancel' => 'Annuleren',
    'close' => 'Sluiten',
    'confirm' => 'Bevestigen',
    'reload' => 'Herladen',
    'complete' => 'Voltooid',
    'ok' => 'OK',
    'or' => 'of',
    'confirm_tab_close' => 'Weet je zeker dat je dit tabblad wilt sluiten? Niet opgeslagen wijzigingen gaan verloren.',
    'behavior_not_ready' => 'Gedrag (behavior) van het formulier is niet geladen. Controleer of initForm() in de controller is aangeroepen.',
    'preview_no_files_message' => 'Bestanden zijn niet geüpload.',
    'preview_no_media_message' => 'Er zijn geen media geselecteerd.',
    'preview_no_record_message' => 'Er zijn geen records geselecteerd.',
    'select' => 'Selecteer',
    'select_all' => 'selecteer alles',
    'select_none' => 'selecteer niets',
    'insert_row' => 'Rij invoegen',
    'insert_row_below' => 'Rij onder invoegen',
    'delete_row' => 'Rij verwijderen',
    'concurrency_file_changed_title' => 'Bestand is gewijzigd',
    'concurrency_file_changed_description' => 'Heb bestand wat je aan het bewerken bent is gewijzigd door een andere gebruiker. Je kunt het bestand opnieuw inladen (en wijzigingen verliezen) of het bestand te overschrijven.',
    'return_to_list' => 'Terug naar lijst',
    'no_options_found' => 'Geen opties gevonden',
    'error' => 'Fout',
    'toggle_full_screen' => 'Volledige schermweergave',
  ],
  'treeview' => [
    'expand' => 'Uitklappen',
    'collapse' => 'Inklappen',
    'reorder' => 'Rangschikken',
    'clear_search' => 'Wis zoekwaarde',
    'search' => 'Zoeken',
    'command_or_document' => 'Commando of Document...',
    'quick_access' => 'Snelle toegang',
    'open' => 'Open',
    'commands' => 'Commando\'s',
  ],
  'tabs' => [
    'close' => 'Sluit tabblad',
    'close_all' => 'Alles sluiten',
    'close_others' => 'Sluit alle andere',
    'close_saved' => 'Sluit alle opgeslagen',
    'full_screen' => 'Volledige schermweergave',
  ],
  'modal' => [
    'close' => 'Sluiten',
  ],
  'dropdownmenu' => [
    'go_back' => 'Ga terug',
    'close_menu' => 'Sluit menu',
  ],
  'recordfinder' => [
    'find_record' => 'Zoek record',
    'invalid_model_class' => 'Het opgegeven model klasse ":modelClass" voor de recordfinder is ongeldig',
    'cancel' => 'Annuleren',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'Het gedrag (behavior) van deze relatie bevat geen instellingen voor \':config\'.',
    'missing_definition' => 'Het gedrag (behavior) van de relatie bevat geen kolom voor \':field\'.',
    'missing_model' => 'Geen model opgegeven voor het gedrag (behavior) van relatie gebruikt in :class.',
    'invalid_action_single' => 'Deze actie kan niet worden uitgevoerd op een enkele (singular) relatie.',
    'invalid_action_multi' => 'Deze actie kan niet worden uitgevoerd op meerdere (multiple) relatie.',
    'help' => 'Klik op een item om toe te voegen',
    'add' => 'Toevoegen',
    'link_selected' => 'Koppel geselecteerde',
    'cancel' => 'Annuleer',
    'close' => 'Sluiten',
    'create' => 'Maken',
    'update' => 'Wijzigen',
    'preview' => 'Voorbeeldweergave',
    'remove_name' => 'Verwijder :name',
    'delete_name' => 'Wis :name',
    'link' => 'Koppel',
    'unlink_name' => 'Ontkoppel :name',
  ],
  'reorder' => [
    'default_title' => 'Rangschik records',
    'no_records' => 'Er zijn geen records beschikbaar om te rangschikken.',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'Model \':class\' met ID :id is niet gevonden',
    'missing_id' => 'Record ID van het model is niet opgegeven.',
    'missing_relation' => 'Model \':class\' bevat geen definitie voor \':relation\'.',
    'missing_method' => 'Model \':class\' bevat geen \':method\' methode.',
    'invalid_class' => 'Model :model gebruikt in :class is ongeldig. Het moet van de \\Model klasse erven (inherit).',
    'mass_assignment_failed' => 'Massa toewijzing voor Model attribute \':attribute\' mislukt.',
  ],
  'warnings' => [
    'tips' => 'Systeem configuratie tips',
    'tips_description' => 'Er zijn aandachtspunten die actie vereisen.',
  ],
  'editor' => [
    'toolbar_buttons_presets' => [
      'default' => 'Standaard',
      'minimal' => 'Minimaal',
      'full' => 'Volledig',
    ],
    'paragraph_formats_comment' => 'De opties die in de "Paragraaf formaat" lijst zullen verschijnen.',
  ],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => 'Mijn instellingen',
    'menu_description' => 'Instellingen gerelateerd aan jouw beheeraccount',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => 'Accentkleur',
  ],
  'backend_preferences' => [],
  'filter' => [
    'all' => 'alle',
    'options_method_not_exists' => 'De model class :model moet de methode :method() gedefinieerd hebben die de opties voor de filter \':filter\' teruggeeft.',
    'options_static_method_invalid_value' => 'De statische methode \':method()\' in :class geeft geen geldige optie-array terug.',
    'date_all' => 'alle periodes',
    'number_all' => 'alle nummers',
  ],
  'import_export' => [
    'row' => 'Rij :row',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
      'windows_1250' => 'Windows-1250 (CP1250)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Beheer media (afbeeldingen, videos, geluiden, documenten)',
  ],
  'mediafinder' => [
    'label' => 'Media Finder',
    'no_image' => 'De afbeelding kan niet gevonden worden',
    'not_an_image' => 'Het geselecteerde bestand is geen afbeelding',
    'click_to_select_file' => 'Klik om een bestand te selecteren',
  ],
  'media' => [
    'menu_label' => 'Media',
    'upload' => 'Uploaden',
    'move' => 'Verplaatsen',
    'delete' => 'Verwijderen',
    'add_folder' => 'Map toevoegen',
    'search' => 'Zoeken',
    'display' => 'Weergeven',
    'filter_everything' => 'Alles',
    'filter_images' => 'Afbeeldingen',
    'filter_video' => 'Video\'s',
    'filter_audio' => 'Audio',
    'filter_documents' => 'Documenten',
    'library' => 'Bibliotheek',
    'size' => 'Grootte',
    'title' => 'Titel',
    'last_modified' => 'Laatst gewijzigd',
    'public_url' => 'URL',
    'click_here' => 'Klik hier',
    'thumbnail_error' => 'Fout opgetreden bij genereren miniatuurweergave.',
    'return_to_parent' => 'Terug naar bovenliggende map',
    'return_to_parent_label' => 'Naar bovenliggende ...',
    'nothing_selected' => 'Er is niets geselecteerd.',
    'multiple_selected' => 'Meerdere items geselecteerd.',
    'uploading_file_num' => 'Uploaden van :number bestanden...',
    'uploading_complete' => 'Uploaden voltooid',
    'uploading_error' => 'Upload mislukt',
    'type_blocked' => 'Het bestandstype is i.v.m. veiligheidsredenen geblokkeerd.',
    'order_by' => 'Sorteer op',
    'direction' => 'Sorteervolgorde',
    'direction_asc' => 'Oplopend',
    'direction_desc' => 'Aflopend',
    'folder' => 'Map',
    'no_files_found' => 'Er zijn geen bestanden gevonden.',
    'delete_empty' => 'Selecteer items om te verwijderen.',
    'delete_confirm' => 'Weet je zeker dat je de geselecteerde items wilt verwijderen?',
    'error_renaming_file' => 'Fout bij wijzigen naam.',
    'new_folder_title' => 'Nieuwe map',
    'folder_name' => 'Mapnaam',
    'error_creating_folder' => 'Fout bij maken van map',
    'folder_or_file_exist' => 'Er bestaat reeds een map of bestand met deze naam.',
    'move_empty' => 'Selecteer de items om te verplaatsen.',
    'move_popup_title' => 'Verplaats bestanden of mappen',
    'move_destination' => 'Doelmap',
    'please_select_move_dest' => 'Selecteer een doelmap.',
    'move_dest_src_match' => 'Selecteer een andere doelmap.',
    'empty_library' => 'De media bibliotheek is leeg. Upload bestanden of maak mappen aan om te beginnen.',
    'insert' => 'Invoegen',
    'crop_and_insert' => 'Uitsnijden & Invoegen',
    'select_single_image' => 'Selecteer één afbeelding.',
    'selection_not_image' => 'Het geselecteerde item is geen afbeelding.',
    'restore' => 'Alle wijzigingen ongedaan maken',
    'resize' => 'Wijzig grootte...',
    'selection_mode_normal' => 'Normaal',
    'selection_mode_fixed_ratio' => 'Vaste ratio',
    'selection_mode_fixed_size' => 'Vaste grootte',
    'height' => 'Hoogte',
    'width' => 'Breedte',
    'selection_mode' => 'Selectie modus',
    'resize_image' => 'Wijzig grootte van afbeelding',
    'image_size' => 'Grootte afbeelding:',
    'selected_size' => 'Geselecteerd:',
  ],
  'table' => [
    'add_item' => 'Item toevoegen',
  ],
  'dictionary' => [
    'key_required' => 'Het \'Key\' veld is verplicht',
    'value_required' => 'Het \'Value\' veld is verplicht',
  ],
  'uploader' => [
    'uploading' => 'Bestand aan het uploaden',
    'complete' => 'Upload voltooid',
  ],
  'richeditor' => [
    'upload_from_computer' => 'Uploaden vanaf computer',
    'embedding_code' => 'Code invoegen',
    'url_required' => 'De URL is vereist',
    'url_validation' => 'De URL moet beginnen met http:// of https://',
    'add_image' => 'Afbeelding invoegen',
    'add_video' => 'Video invoegen',
    'add_audio' => 'Audio invoegen',
    'add_file' => 'Bestand invoegen',
    'embedding_code_required' => 'De in te voegen code is vereist',
    'embedding_code_invalid' => 'Geef geldige HTML-code op',
    'embedding_code_invalid_title' => 'Ongeldige code',
    'browse' => 'Blader in Media',
    'by_url' => 'Op URL',
  ],
];
