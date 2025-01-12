<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Invalid field type used :type.',
    'options_method_invalid_model' => 'The attribute \':field\' does not resolve to a valid model. Try specifying the options method for model class :model explicitly.',
    'options_method_not_exists' => 'The model class :model must define a method :method() returning options for the \':field\' form field.',
    'colors_method_not_exists' => 'The model class :model must define a method :method() returning html color HEX codes for the \':field\' form field.',
  ],
  'widget' => [
    'not_registered' => 'A widget class name \':name\' has not been registered',
    'not_bound' => 'A widget with class name \':name\' has not been bound to the controller',
  ],
  'page' => [
    'untitled' => 'Untitled',
    'not_found' => [
      'label' => 'Page Not Found',
      'help' => 'The requested page cannot be found.',
      'back_link' => 'Go back to the previous page',
    ],
    'access_denied' => [
      'label' => 'Access Denied',
      'help' => 'You don\'t have the required permissions to view this page.',
      'cms_link' => 'Return to the Backend',
    ],
    'no_database' => [
      'label' => 'Database Missing',
      'help' => 'A database is required to access the back-end. Check the database is configured and migrated before trying again.',
      'cms_link' => 'Return to the Homepage',
    ],
  ],
  'partial' => [
    'not_found_name' => 'The partial \':name\' is not found.',
    'invalid_name' => 'Invalid partial name: :name.',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Invalid AJAX handler name: :name.',
    'not_found' => 'AJAX handler \':name\' was not found.',
  ],
  'account' => [
    'impersonate' => 'Impersonate User',
    'impersonate_confirm' => 'Are you sure you want to impersonate this user? You can revert to your original state by logging out.',
    'impersonate_success' => 'You are now impersonating this user',
    'impersonate_working' => 'Impersonating...',
    'impersonating' => 'Impersonating :full_name',
    'stop_impersonating' => 'Stop impersonating',
    'signed_in_as' => 'Signed in as :full_name',
    'sign_out' => 'Sign Out',
    'login_prompt' => 'Welcome back! Please login to your account to continue.',
    'login_placeholder' => 'username',
    'password_placeholder' => 'password',
    'enter_email' => 'Enter your email',
    'email_placeholder' => 'email',
    'apply' => 'Apply',
    'cancel' => 'Cancel',
    'delete' => 'Delete',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Dashboard',
    'widget_inspector_title' => 'Widget Configuration',
    'widget_inspector_description' => 'Configure the report widget',
    'widget_columns_label' => 'Width :columns',
    'widget_columns_description' => 'The widget width, a number between 1 and 10.',
    'widget_columns_error' => 'Please enter the widget width as a number between 1 and 10.',
    'columns' => '{1} column|[2,Inf] columns',
    'widget_new_row_label' => 'Force new row',
    'widget_new_row_description' => 'Put the widget in a new row.',
    'widget_title_label' => 'Widget title',
    'widget_title_error' => 'The Widget Title is required.',
    'reset_layout_success' => 'Layout has been reset',
    'make_default_success' => 'Current layout is now the default',
    'collapse_all' => 'Collapse all',
    'expand_all' => 'Expand all',
    'status' => [
      'widget_title_default' => 'System status',
      'update_available' => '{0} updates available!|{1} update available!|[2,Inf] updates available!',
      'updates_pending' => 'Pending Software Updates',
      'updates_nil' => 'Software is Up to Date',
      'updates_link' => 'Update',
      'warnings_pending' => 'Some Issues Need Attention',
      'warnings_nil' => 'No Warnings to Display',
      'warnings_link' => 'View',
      'core_build' => 'System Build',
      'event_log' => 'Event Log',
      'request_log' => 'Request Log',
      'app_birthday' => 'Online Since',
    ],
    'welcome' => [
      'widget_title_default' => 'Welcome',
      'welcome_back_name' => 'Welcome back to :app, :name.',
      'welcome_to_name' => 'Welcome to :app, :name.',
      'first_sign_in' => 'This is the first time you have signed in.',
      'last_sign_in' => 'Your last sign in was',
      'view_access_logs' => 'View Access Logs',
      'nice_message' => 'Have a great day!',
    ],
    'widget_data_source' => 'Data source',
    'widget_data_source_required' => 'Please select a data source',
    'widget_dimension' => 'Dimension',
    'widget_dimension_required' => 'Please select a dimension',
    'widget_metric_required' => 'Please select metric(s).',
    'widget_title' => 'Title',
    'widget_title_required' => 'Please provide the widget title',
    'widget_title_optional_placeholder' => 'Leave empty to hide the title',
    'widget_metrics' => 'Metrics',
    'widget_metric' => 'Metric',
    'widget_icon_status' => 'Icon status',
    'widget_href' => 'Link URL',
    'widget_icon' => 'Icon',
    'widget_icon_required' => 'Please select an icon',
    'widget_link_text' => 'Link Text',
    'section_show_interval' => 'Show Date Interval',
    'widget_chart_type' => 'Chart type',
    'widget_chart_type_bar' => 'Bar',
    'widget_chart_type_stacked_bar' => 'Stacked Bar',
    'widget_chart_type_line' => 'Line',
    'sort_by' => 'Sort by',
    'sort_by_required' => 'Select sorting metric or dimension',
    'sort_by_placeholder' => 'Select a dimension and metrics',
    'sort_by_dimension' => 'Dimension',
    'sort_by_metric' => 'Metric',
    'sort_order' => 'Order',
    'sort_asc' => 'Ascending',
    'sort_desc' => 'Descending',
    'group_sorting' => 'Sorting',
    'value_not_set' => '[not set]',
    'limit' => 'Limit',
    'limit_placeholder' => 'Display all records',
    'limit_number' => 'Enter a positive number or leave empty to display all records.',
    'limit_min' => 'The limit value must be at least 1',
    'empty_values' => 'Empty values',
    'empty_values_hide' => 'Hide',
    'empty_values_display_not_set' => 'Display [not set]',
    'empty_values_dimension' => 'Dimension',
    'date_interval' => 'Date interval',
    'date_interval_dashboard_default' => 'Dashboard interval',
    'date_interval_this_week' => 'This week',
    'date_interval_this_month' => 'This month',
    'date_interval_this_quarter' => 'This quarter',
    'date_interval_this_year' => 'This year',
    'date_interval_past_hour' => 'Past hour',
    'date_interval_past_days' => 'Past X days',
    'date_interval_past_days_value' => 'Number of days',
    'date_interval_past_days_invalid' => 'Enter a positive number',
    'prop_date_interval' => 'Display',
    'date_interval_past_days_placeholder' => '1 day (today) if not set',
    'widget_bar_direction' => 'Direction',
    'widget_bar_direction_vertical' => 'Vertical',
    'widget_bar_direction_horizontal' => 'Horizontal',
    'color_required' => 'Select the metric color',
    'prop_color' => 'Color',
    'tab_general' => 'General',
    'tab_sorting_filtering' => 'Sorting & Filtering',
    'prop_records_per_page' => 'Records per page',
    'records_per_page_placeholder' => 'Leave empty to disable pagination',
    'records_per_page_invalid' => 'Enter a positive number or leave empty to display all records.',
    'prop_display_totals' => 'Display totals',
    'prop_display_relative_bar' => 'Display relative bars',
    'prop_extra_table_fields' => 'Extra table fields',
    'filter_operation_equal_to' => 'Equal to',
    'filter_operation_greater_equal' => 'Greater or equal to',
    'filter_operation_less_equal' => 'Less or equal to',
    'filter_operation_greater' => 'Greater than',
    'filter_operation_less' => 'Less than',
    'filter_operation_starts_with' => 'Starts with',
    'filter_operation_includes' => 'Includes',
    'filter_operation_one_of' => 'One of',
    'prop_operation' => 'Operation',
    'prop_value' => 'Value',
    'prop_values' => 'Values',
    'prop_values_one_per_line' => 'One value per line',
    'prop_filter_attribute' => 'Attribute',
    'filter_select_attribute' => 'Select an attribute',
    'filter_select_operation' => 'Select an operation',
    'filter_enter_value' => 'Enter the filter value',
    'prop_filters' => 'Filters',
    'icon_status_info' => 'Information',
    'icon_status_important' => 'Important',
    'icon_status_success' => 'Success',
    'icon_status_warning' => 'Warning',
    'icon_status_disabled' => 'Disabled',
    'range_today' => 'Today',
    'range_yesterday' => 'Yesterday',
    'range_last_7_days' => 'Last 7 days',
    'range_last_30_days' => 'Last 30 days',
    'range_this_month' => 'This month',
    'range_last_month' => 'Last month',
    'range_this_quarter' => 'This quarter',
    'range_this_year' => 'This year',
    'range_this_week' => 'This week',
    'interval_day' => 'Day',
    'interval_week' => 'Week',
    'interval_month' => 'Month',
    'interval_quarter' => 'Quarter',
    'interval_year' => 'Year',
    'compare_prev_period' => 'Prev period',
    'compare_prev_year' => 'Same period last year',
    'compare_none' => 'Disabled',
    'not_found_by_slug' => 'Cannot find a dashboard with the specified slug: ":slug".',
    'updated_successfully' => 'The dashboard was successfully updated.',
    'rename_dashboard' => 'Rename or Change Access',
    'delete_dashboard' => 'Delete Dashboard',
    'export_dashboard' => 'Export Dashboard',
    'import_success' => 'The dashboard was successfully imported',
    'new_dashboard' => 'New Dashboard',
    'slug_already_exists' => 'A dashboard with the specified slug already exists: ":slug".',
    'delete_confirm' => 'Delete the dashboard? This action cannot be reversed. All users with access will be affected.',
    'delete_success' => 'The dashboard was successfully deleted.',
    'menu_item_custom' => 'Custom',
    'menu_item_delete_row' => 'Delete row',
    'widget_type_indicator' => 'Indicator',
    'widget_type_section_title' => 'Section Title',
    'widget_type_notice' => 'Text Notice',
    'widget_type_chart' => 'Chart',
    'widget_type_table' => 'Table',
    'configure' => 'Configure',
    'auto_update' => 'Refresh every minute',
    'notice_text' => 'Notice text',
  ],
  'user' => [
    'name' => 'Administrator',
    'list_title' => 'Manage Administrators',
    'new' => 'New Administrator',
    'first_name' => 'First Name',
    'last_name' => 'Last Name',
    'full_name' => 'Full Name',
    'email' => 'Email',
    'role_field' => 'Role',
    'role_comment' => 'Roles define user permissions, which can be overridden on the user level, on the Permissions tab.',
    'groups' => 'Groups',
    'groups_comment' => 'Specify which groups this account should belong to.',
    'avatar' => 'Avatar',
    'password' => 'Password',
    'password_confirmation' => 'Confirm Password',
    'permissions' => 'Permissions',
    'account' => 'Account',
    'superuser' => 'Super User',
    'superuser_comment' => 'Grants this account unlimited access to all areas of the system. Super users can add and manage other users. ',
    'send_invite' => 'Send invitation by email',
    'send_invite_comment' => 'Sends a welcome message containing login and password information.',
    'delete_confirm' => 'Delete this administrator?',
    'return' => 'Return to Admin List',
    'allow' => 'Allow',
    'inherit' => 'Inherit',
    'deny' => 'Deny',
    'activated' => 'Activated',
    'last_login' => 'Last Login',
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',
    'deleted_at' => 'Deleted At',
    'show_deleted' => 'Show Deleted',
    'group' => [
      'name' => 'Group',
      'name_field' => 'Name',
      'name_comment' => 'The name is displayed in the group list on the Administrator form.',
      'description_field' => 'Description',
      'is_new_user_default_field_label' => 'Default group',
      'is_new_user_default_field_comment' => 'Add new administrators to this group by default',
      'code_field' => 'Code',
      'code_comment' => 'Enter a unique code if you want to access the group object with the API.',
      'list_title' => 'Manage Groups',
      'new' => 'New Group',
      'delete_confirm' => 'Delete this administrator group?',
      'return' => 'Return to Group List',
      'users_count' => 'Users',
    ],
    'role' => [
      'name' => 'Role',
      'name_field' => 'Name',
      'name_comment' => 'The name is displayed in the role list on the Administrator form.',
      'description_field' => 'Description',
      'code_field' => 'Code',
      'code_comment' => 'Enter a unique code if you want to access the role object with the API.',
      'list_title' => 'Manage Roles',
      'new' => 'New Role',
      'delete_confirm' => 'Delete this administrator role?',
      'return' => 'Return to Role List',
      'users_count' => 'Users',
    ],
    'preferences' => [
      'not_authenticated' => 'There is no an authenticated user to load or save preferences for.',
    ],
    'trashed_hint_title' => 'This account has been deleted',
    'trashed_hint_desc' => 'This account has been deleted and will be unable to be signed in under. To restore it, click the restore user icon in the bottom right',
  ],
  'list' => [
    'default_title' => 'List',
    'search_prompt' => 'Search...',
    'no_records' => 'There are no records in this view.',
    'missing_model' => 'List behavior used in :class does not have a model defined.',
    'missing_column' => 'There are no column definitions for :columns.',
    'missing_columns' => 'List used in :class has no list columns defined.',
    'missing_definition' => 'List behavior does not contain a column for \':field\'.',
    'missing_parent_definition' => 'List behavior does not contain a definition for \':definition\'.',
    'behavior_not_ready' => 'List behavior has not been initialized, check that you have called makeLists() in your controller.',
    'invalid_column_datetime' => 'Column value \':column\' is not a DateTime object, are you missing a $dates reference in the Model?',
    'pagination' => 'Displayed Records: :from-:to of :total',
    'first_page' => 'First page',
    'last_page' => 'Last page',
    'prev_page' => 'Previous page',
    'next_page' => 'Next page',
    'refresh' => 'Refresh',
    'updating' => 'Updating...',
    'loading' => 'Loading...',
    'check' => 'Check',
    'create_button' => 'New :name',
    'delete_selected' => 'Delete selected',
    'delete_selected_empty' => 'There are no selected records to delete.',
    'delete_selected_confirm' => 'Delete the selected records?',
    'delete_selected_success' => 'Deleted selected records.',
    'column_switch_true' => 'Yes',
    'column_switch_false' => 'No',
  ],
  'object_list' => [
    'prop_cant_be_empty' => 'Property :property cannot be empty',
    'key_value_exists' => 'Value is already defined: :property_value',
  ],
  'fileupload' => [],
  'form' => [
    'create_title' => 'New :name',
    'update_title' => 'Edit :name',
    'preview_title' => 'Preview :name',
    'restore_success' => ':name Restored',
    'reset_success' => 'Reset Complete',
    'missing_id' => 'Form record ID has not been specified.',
    'missing_tab' => 'Missing a valid tab definition.',
    'missing_model' => 'Form behavior used in :class does not have a model defined.',
    'missing_definition' => 'Form behavior does not contain a field for \':field\'.',
    'action_confirm' => 'Are you sure?',
    'create' => 'Create',
    'create_and_close' => 'Create and close',
    'creating' => 'Creating...',
    'creating_name' => 'Creating :name...',
    'save' => 'Save',
    'save_and_close' => 'Save and Close',
    'saving' => 'Saving...',
    'saving_name' => 'Saving :name...',
    'delete' => 'Delete',
    'deleting' => 'Deleting...',
    'confirm_delete' => 'Delete record?',
    'confirm_delete_multiple' => 'Delete selected records?',
    'deleting_name' => 'Deleting :name...',
    'restore' => 'Restore',
    'restoring' => 'Restoring',
    'confirm_restore' => 'Are you sure you want to restore this record?',
    'reset_default' => 'Reset to Default',
    'resetting' => 'Resetting',
    'resetting_name' => 'Resetting :name',
    'undefined_tab' => 'Misc',
    'field_off' => 'Off',
    'field_on' => 'On',
    'add' => 'Add',
    'apply' => 'Apply',
    'insert' => 'Insert',
    'cancel' => 'Cancel',
    'close' => 'Close',
    'confirm' => 'Confirm',
    'reload' => 'Reload',
    'complete' => 'Complete',
    'ok' => 'OK',
    'or' => 'or',
    'confirm_tab_close' => 'Close the tab? Unsaved changes will be lost.',
    'behavior_not_ready' => 'Form behavior has not been initialized, check that you have called initForm() in your controller.',
    'preview_no_files_message' => 'There are no files uploaded.',
    'preview_no_media_message' => 'There is no media selected.',
    'preview_no_record_message' => 'There is no record selected.',
    'select' => 'Select',
    'select_all' => 'Select All',
    'select_none' => 'Select None',
    'insert_row' => 'Insert Row',
    'insert_row_below' => 'Insert Row Below',
    'delete_row' => 'Delete Row',
    'concurrency_file_changed_title' => 'File was changed',
    'concurrency_file_changed_description' => 'The file you\'re editing has been changed on disk by another user. You can either reload the file and lose your changes or override the file on the disk.',
    'return_to_list' => 'Return to List',
    'no_options_found' => 'No options found',
    'error' => 'Error',
    'toggle_full_screen' => 'Toggle Full Screen',
  ],
  'treeview' => [
    'expand' => 'Expand',
    'collapse' => 'Collapse',
    'reorder' => 'Reorder',
    'clear_search' => 'Clear Search',
    'search' => 'Search',
    'command_or_document' => 'Command or Document...',
    'quick_access' => 'Quick Access',
    'open' => 'Open',
    'commands' => 'Commands',
  ],
  'tabs' => [
    'close' => 'Close Tab',
    'close_all' => 'Close All',
    'close_others' => 'Close Others',
    'close_saved' => 'Close Saved',
    'full_screen' => 'Toggle Full Screen',
  ],
  'modal' => [
    'close' => 'Close',
  ],
  'dropdownmenu' => [
    'go_back' => 'Go Back',
    'close_menu' => 'Close Menu',
  ],
  'recordfinder' => [
    'find_record' => 'Find Record',
    'invalid_model_class' => 'The provided model class ":modelClass" for the recordfinder is invalid',
    'cancel' => 'Cancel',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'Relation behavior does not have any configuration for \':config\'.',
    'missing_definition' => 'Relation behavior does not contain a definition for \':field\'.',
    'missing_model' => 'Relation behavior used in :class does not have a model defined.',
    'invalid_action_single' => 'This action cannot be performed on a singular relationship.',
    'invalid_action_multi' => 'This action cannot be performed on a multiple relationship.',
    'help' => 'Click on an item to add',
    'add' => 'Add',
    'link_selected' => 'Link Selected',
    'cancel' => 'Cancel',
    'close' => 'Close',
    'create' => 'Create',
    'update' => 'Update',
    'preview' => 'Preview',
    'remove_name' => 'Remove :name',
    'delete_name' => 'Delete :name',
    'link' => 'Link',
    'unlink_name' => 'Unlink :name',
  ],
  'reorder' => [
    'default_title' => 'Reorder Records',
    'no_records' => 'There are no records available to sort.',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'Model \':class\' with an ID of :id could not be found',
    'missing_id' => 'There is no ID specified for looking up the model record.',
    'missing_relation' => 'Model \':class\' does not contain a definition for \':relation\'.',
    'missing_method' => 'Model \':class\' does not contain a method \':method\'.',
    'invalid_class' => 'Model :model used in :class is not valid, it must inherit the \\Model class.',
    'mass_assignment_failed' => 'Mass assignment failed for Model attribute \':attribute\'.',
  ],
  'warnings' => [
    'tips' => 'System Configuration Tips',
    'tips_description' => 'There are issues you need to pay attention to in order to configure the system properly.',
  ],
  'editor' => [
    'toolbar_buttons_presets' => [
      'default' => 'Default',
      'minimal' => 'Minimal',
      'full' => 'Full',
    ],
    'paragraph_formats_comment' => 'The options that will appear in the Paragraph Format dropdown.',
  ],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => 'My Settings',
    'menu_description' => 'Settings related to your administration account',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => 'Accent Color',
  ],
  'backend_preferences' => [],
  'filter' => [
    'all' => 'all',
    'options_method_not_exists' => 'The model class :model must define a method :method() returning options for the \':filter\' filter.',
    'options_static_method_invalid_value' => 'The static method \':method()\' on :class does not return a valid options array.',
    'date_all' => 'all periods',
    'number_all' => 'all numbers',
  ],
  'import_export' => [
    'row' => 'Row :row',
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
    'manage_media' => 'Upload and manage media contents - images, videos, sounds, documents',
    'create_edit_dashboards' => 'Create and manage dashboards. Note that users granted this permission can access data from any dashboards and report widgets available in the system.',
    'access_dashboard' => 'Dashboards a user can access are determined by individual dashboard access settings.',
  ],
  'mediafinder' => [
    'label' => 'Media Finder',
    'no_image' => 'The image could not be found',
    'not_an_image' => 'The selected file is not an image',
    'click_to_select_file' => 'Click to select a file',
  ],
  'media' => [
    'menu_label' => 'Media',
    'upload' => 'Upload',
    'move' => 'Move',
    'delete' => 'Delete',
    'add_folder' => 'Add Folder',
    'search' => 'Search',
    'display' => 'Display',
    'filter_everything' => 'Everything',
    'filter_images' => 'Images',
    'filter_video' => 'Video',
    'filter_audio' => 'Audio',
    'filter_documents' => 'Documents',
    'library' => 'Library',
    'size' => 'Size',
    'title' => 'Title',
    'last_modified' => 'Last Modified',
    'public_url' => 'URL',
    'click_here' => 'Click here',
    'thumbnail_error' => 'Error generating thumbnail.',
    'return_to_parent' => 'Return to the Parent Folder',
    'return_to_parent_label' => 'Go Up ..',
    'nothing_selected' => 'Nothing is selected.',
    'multiple_selected' => 'Multiple items selected.',
    'uploading_file_num' => 'Uploading :number file(s)...',
    'uploading_complete' => 'Upload Complete',
    'uploading_error' => 'Upload Failed',
    'type_blocked' => 'The file type used is blocked for security reasons.',
    'order_by' => 'Order by',
    'direction' => 'Direction',
    'direction_asc' => 'Ascending',
    'direction_desc' => 'Descending',
    'folder' => 'Folder',
    'no_files_found' => 'No files found by your request.',
    'delete_empty' => 'Please select items to delete.',
    'delete_confirm' => 'Delete the selected item(s)?',
    'error_renaming_file' => 'Error renaming the item.',
    'new_folder_title' => 'New Folder',
    'folder_name' => 'Folder Name',
    'error_creating_folder' => 'Error creating folder',
    'folder_or_file_exist' => 'A folder or file with the specified name already exists.',
    'move_empty' => 'Please select items to move.',
    'move_popup_title' => 'Move files or folders',
    'move_destination' => 'Destination folder',
    'please_select_move_dest' => 'Please select a destination folder.',
    'move_dest_src_match' => 'Please select another destination folder.',
    'empty_library' => 'It looks a bit empty here. Upload files or create folders to get started.',
    'insert' => 'Insert',
    'crop_and_insert' => 'Crop & Insert',
    'select_single_image' => 'Please select a single image.',
    'selection_not_image' => 'The selected item is not an image.',
    'restore' => 'Undo all changes',
    'resize' => 'Resize...',
    'selection_mode_normal' => 'Normal',
    'selection_mode_fixed_ratio' => 'Fixed Ratio',
    'selection_mode_fixed_size' => 'Fixed Size',
    'height' => 'Height',
    'width' => 'Width',
    'selection_mode' => 'Selection mode',
    'resize_image' => 'Resize Image',
    'image_size' => 'Image Size:',
    'selected_size' => 'Selected:',
  ],
  'table' => [
    'add_item' => 'Add item',
  ],
  'dictionary' => [
    'key_required' => 'The Key field is required',
    'value_required' => 'The Value field is required',
  ],
  'uploader' => [
    'uploading' => 'Uploading Files',
    'complete' => 'Upload Complete',
  ],
  'richeditor' => [
    'upload_from_computer' => 'Upload From Computer',
    'embedding_code' => 'Embedding Code',
    'url_required' => 'The URL is required',
    'url_validation' => 'URL must start with http:// or https://',
    'add_image' => 'Insert Image',
    'add_video' => 'Insert Video',
    'add_audio' => 'Insert Audio',
    'add_file' => 'Insert File',
    'embedding_code_required' => 'The embedding code is required',
    'embedding_code_invalid' => 'Please enter valid HTML embedding code',
    'embedding_code_invalid_title' => 'Invalid code',
    'browse' => 'Browse Media Library',
    'by_url' => 'By URL',
  ],
];
